<?php

namespace App\Filament\Resources\Kisahs\Pages;

use App\Filament\Resources\Kisahs\KisahResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewKisah extends ViewRecord
{
    protected static string $resource = KisahResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
