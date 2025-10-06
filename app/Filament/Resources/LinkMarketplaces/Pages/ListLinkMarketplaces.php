<?php

namespace App\Filament\Resources\LinkMarketplaces\Pages;

use App\Filament\Resources\LinkMarketplaces\LinkMarketplaceResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListLinkMarketplaces extends ListRecords
{
    protected static string $resource = LinkMarketplaceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
