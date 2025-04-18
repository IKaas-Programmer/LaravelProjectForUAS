<?php

namespace App\Filament\Resources\ArticlesCommentsResource\Pages;

use App\Filament\Resources\ArticlesCommentsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditArticlesComments extends EditRecord
{
    protected static string $resource = ArticlesCommentsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
