<?php

namespace App\Filament\Resources\AnggotaUmkms\Pages;

use App\Filament\Resources\AnggotaUmkms\AnggotaUmkmResource;
use Filament\Resources\Pages\CreateRecord;

class CreateAnggotaUmkm extends CreateRecord
{
    protected static string $resource = AnggotaUmkmResource::class;

    protected function getRedirectUrl(): string
    {
    return $this->getResource()::getUrl('index');
    }
}
