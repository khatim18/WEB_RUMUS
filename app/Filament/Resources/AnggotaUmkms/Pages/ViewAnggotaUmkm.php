<?php

namespace App\Filament\Resources\AnggotaUmkms\Pages;

use App\Filament\Resources\AnggotaUmkms\AnggotaUmkmResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewAnggotaUmkm extends ViewRecord
{
    protected static string $resource = AnggotaUmkmResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
