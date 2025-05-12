<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CommentsResource\Pages;
use App\Filament\Resources\CommentsResource\RelationManagers;
use App\Models\Comments;
use App\Models\Page;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\Select;



class CommentsResource extends Resource
{
    protected static ?string $model = Comments::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form, ?Model $record = null): Form
    {
        return $form
            ->schema([
                Textarea::make('comment')
                    ->label('Comment')
                    ->required()
                    ->placeholder('Comment'),
                Select::make('commentable_type')
                    ->label('Commentable Type')
                    ->options([
                        Page::class => 'Page',
                        // Add other commentable models here
                    ])
                    ->required()
                    ->reactive(),
                Select::make('commentable_id')
                    ->label('Related Record')
                    ->options(function (callable $get) {
                        $type = $get('commentable_type');
                        if ($type === Page::class) {
                            return Page::all()->pluck('title', 'id'); // Adjust 'title' to your Page display attribute
                        }
                        // Add conditions for other commentable types
                        return [];
                    })
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('comment')
                    ->label('Comment')
                    ->limit(255),
                    Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->searchable(),
                    Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListComments::route('/'),
            'create' => Pages\CreateComments::route('/create'),
            'edit' => Pages\EditComments::route('/{record}/edit'),
        ];
    }
}