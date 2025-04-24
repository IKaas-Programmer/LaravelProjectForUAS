<?php

namespace App\Filament\Resources\PageCommentsResource\Pages;

use App\Filament\Resources\PageCommentsResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePageComments extends CreateRecord
{
    protected static string $resource = PageCommentsResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
{
    $data['user_id'] = auth()->id();

    return $data;
}
}
