<?php

namespace App\Filament\Resources\Legalitas\Pages;

use App\Filament\Resources\Legalitas\LegalitasResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewLegalitas extends ViewRecord
{
    protected static string $resource = LegalitasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
