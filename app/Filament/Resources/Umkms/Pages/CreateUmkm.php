<?php

namespace App\Filament\Resources\Umkms\Pages;

use App\Filament\Resources\Umkms\UmkmResource;
use Filament\Resources\Pages\CreateRecord;
use Filament\Notifications\Notification;

class CreateUmkm extends CreateRecord
{
    protected static string $resource = UmkmResource::class;
    protected function getRedirectUrl(): string
    {

        Notification::make()
            ->title('Produk berhasil ditambahkan!')
            ->success()
            ->send();

        return $this->getResource()::getUrl('index');
    }
}