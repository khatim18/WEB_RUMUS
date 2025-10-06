<?php

namespace App\Filament\Resources\LinkMarketplaces\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class LinkMarketplaceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('id_produk')
                    ->required()
                    ->numeric(),
                TextInput::make('nama_marketplace')
                    ->required(),
                TextInput::make('link')
                    ->required(),
            ]);
    }
}
