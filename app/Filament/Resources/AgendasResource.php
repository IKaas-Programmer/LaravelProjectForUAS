<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AgendasResource\Pages;
use App\Filament\Resources\AgendasResource\RelationManagers;
use App\Models\Agendas;
use Filament\Forms;
use Filament\Forms\Components\CheckboxList;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Actions;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Forms\Components\Select;



class AgendasResource extends Resource
{
    protected static ?string $model = agendas::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('comment_id')
                    ->relationship('comment', 'comment')
                    ->label('Comment')
                    ->required(),
                TextInput::make('description')
                    ->required()
                    ->placeholder('Enter the description of the agenda'),
                
                Forms\Components\Hidden::make('user_id')
                    ->default(auth()->id())
                    ->disabled(),
                CheckboxList::make('Option')
                    ->options([
                        'jurnal'    => 'Jurnal',
                        'makalah'   => 'Makalah',
                        'laporan'   => 'Laporan',
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('title')
                    ->sortable()
                    ->searchable()
                    ->description(fn (Agendas $record): string => $record->description),    
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
            'index' => Pages\ListAgendas::route('/'),
            'create' => Pages\CreateAgendas::route('/create'),
            'edit' => Pages\EditAgendas::route('/{record}/edit'),
        ];
    }
}
