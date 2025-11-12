<?php

namespace App\Filament\Resources\Kisahs\Pages;

use App\Filament\Resources\Kisahs\KisahResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditKisah extends EditRecord
{
    protected static string $resource = KisahResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
