<?php

namespace App\Filament\Resources\LinkMarketplaces\Pages;

use App\Filament\Resources\LinkMarketplaces\LinkMarketplaceResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditLinkMarketplace extends EditRecord
{
    protected static string $resource = LinkMarketplaceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
