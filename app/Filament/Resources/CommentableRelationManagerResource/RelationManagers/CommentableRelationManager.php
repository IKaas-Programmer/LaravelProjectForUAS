<?php
// filepath: d:\laragon\www\Datalaraveluts\app\Filament\Resources\CommentsResource\RelationManagers\CommentableRelationManager.php

namespace App\Filament\Resources\CommentsResource\RelationManagers;

use Filament\Forms;
use Filament\Tables;
use Filament\Tables\Actions;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables\Columns\TextColumn;

class CommentableRelationManager extends RelationManager
{
    protected static string $relationship = 'comments'; // Updated relationship name to 'comments'

    protected static ?string $recordTitleAttribute = 'id'; // Updated attribute to display as the title

    public function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->label('ID'),
                TextColumn::make('title')->label('Title'), // Adjusted to match the related model's attributes
                TextColumn::make('author.name')->label('Author'), // Added author name column
                TextColumn::make('created_at')->label('Created At')->dateTime(),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(), // Added a filter for trashed records
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(), // Added a create action
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(), // Added an edit action
                Tables\Actions\DeleteAction::make(), // Added a delete action
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
                Tables\Actions\RestoreBulkAction::make(), // Added a restore bulk action
            ]);
    }
}