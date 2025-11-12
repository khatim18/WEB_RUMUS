<?php

namespace App\Filament\Resources\Kisahs\Pages;

use App\Filament\Resources\Kisahs\KisahResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListKisahs extends ListRecords
{
    protected static string $resource = KisahResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
