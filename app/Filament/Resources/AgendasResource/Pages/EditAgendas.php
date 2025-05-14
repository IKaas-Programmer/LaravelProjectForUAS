<?php

namespace App\Filament\Resources\AgendasResource\Pages;

use App\Filament\Resources\AgendasResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAgendas extends EditRecord
{
    protected static string $resource = AgendasResource::class;

    protected function mutateFormDataBeforeSave(array $data): array
{
    $data['last_edited_by_id'] = auth()->id();

    return $data;
}

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}