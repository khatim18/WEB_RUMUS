<?php

namespace App\Filament\Resources\LinkMarketplaces\Pages;

use App\Filament\Resources\LinkMarketplaces\LinkMarketplaceResource;
use Filament\Resources\Pages\CreateRecord;

class CreateLinkMarketplace extends CreateRecord
{
    protected static string $resource = LinkMarketplaceResource::class;

    protected function getRedirectUrl(): string
    {
    return $this->getResource()::getUrl('index');
    }
}
