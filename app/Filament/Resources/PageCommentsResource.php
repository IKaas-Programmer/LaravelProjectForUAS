<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PageCommentsResource\Pages;
use App\Filament\Resources\PageCommentsResource\RelationManagers;
use App\Models\page_comments;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\RichEditor;
use Filament\Tables\Columns\TextColumn;

class PageCommentsResource extends Resource
{
    protected static ?string $model = page_comments::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('page_id')
                    ->label('Page')
                    ->relationship('page', 'title')
                    ->required(),
                Textarea::make('comment')
                    ->label('Comment')
                    ->placeholder('Comment')
                    ->required(),
            ]);
            
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('Page.title')
                ->label('Pages Title'),
                TextColumn::make('comment')
                ->label('Comment')
                ->limit(50),//
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListPageComments::route('/'),
            'create' => Pages\CreatePageComments::route('/create'),
            'edit' => Pages\EditPageComments::route('/{record}/edit'),
        ];
    }
}
