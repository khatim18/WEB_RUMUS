<?php

namespace App\Filament\Resources\AnggotaUmkms\Pages;

use App\Filament\Resources\AnggotaUmkms\AnggotaUmkmResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAnggotaUmkms extends ListRecords
{
    protected static string $resource = AnggotaUmkmResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
