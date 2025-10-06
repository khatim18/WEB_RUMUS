<?php

namespace App\Filament\Resources\LinkMarketplaces\Pages;

use App\Filament\Resources\LinkMarketplaces\LinkMarketplaceResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewLinkMarketplace extends ViewRecord
{
    protected static string $resource = LinkMarketplaceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
