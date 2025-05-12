<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArticlesCommentsResource\Pages;
use App\Filament\Resources\ArticlesCommentsResource\RelationManagers;
use App\Models\Articles_comments;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Database\Eloquent\Relations\Relation;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;

class ArticlesCommentsResource extends Resource
{
    protected static ?string $model = Articles_comments::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('article_id')
                    ->label('Articles')
                    ->relationship('article', 'title'),
                
                Textarea::make('comment')
                    ->label('Comment')
                    ->placeholder('Comment')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('Article.title')
                    ->label('Article Title'),
                TextColumn::make('comment')
                    ->label('Comment')
                    ->limit(255),
                TextColumn::make('created_at')
                    ->label('Created At')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(),
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
            'index' => Pages\ListArticlesComments::route('/'),
            'create' => Pages\CreateArticlesComments::route('/create'),
            'edit' => Pages\EditArticlesComments::route('/{record}/edit'),
        ];
    }
}