<?php

namespace App\Filament\Resources\Legalitas\Pages;

use App\Filament\Resources\Legalitas\LegalitasResource;
use Filament\Resources\Pages\CreateRecord;

class CreateLegalitas extends CreateRecord
{
    protected static string $resource = LegalitasResource::class;

    protected function getRedirectUrl(): string
    {
    return $this->getResource()::getUrl('index');
    }
}
