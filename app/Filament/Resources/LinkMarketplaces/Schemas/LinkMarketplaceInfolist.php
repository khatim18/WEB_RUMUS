<?php

namespace App\Filament\Resources\LinkMarketplaces\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class LinkMarketplaceInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('id_produk')
                    ->numeric(),
                TextEntry::make('nama_marketplace'),
                TextEntry::make('link'),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
