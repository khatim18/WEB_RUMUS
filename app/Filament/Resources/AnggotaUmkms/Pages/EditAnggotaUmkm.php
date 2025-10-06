<?php

namespace App\Filament\Resources\AnggotaUmkms\Pages;

use App\Filament\Resources\AnggotaUmkms\AnggotaUmkmResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditAnggotaUmkm extends EditRecord
{
    protected static string $resource = AnggotaUmkmResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
