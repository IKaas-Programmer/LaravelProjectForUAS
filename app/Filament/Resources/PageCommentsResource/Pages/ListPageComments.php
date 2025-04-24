<?php

namespace App\Filament\Resources\PageCommentsResource\Pages;

use App\Filament\Resources\PageCommentsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPageComments extends ListRecords
{
    protected static string $resource = PageCommentsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
