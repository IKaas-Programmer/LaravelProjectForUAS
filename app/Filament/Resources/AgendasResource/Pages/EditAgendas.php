<?php

namespace App\Filament\Resources\AgendasResource\Pages;

use App\Filament\Resources\AgendasResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAgendas extends EditRecord
{
    protected static string $resource = AgendasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
