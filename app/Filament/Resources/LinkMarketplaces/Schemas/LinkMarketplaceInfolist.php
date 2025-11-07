<?php

namespace App\Filament\Resources\LinkMarketplaces\Schemas;

use Filament\Infolists\Infolist;
use Filament\Schemas\Schema;
use Filament\Infolists\Components\BadgeEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\ImageEntry;

class LinkMarketplaceInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->schema([
                TextEntry::make('produk.nama_produk')
                    ->label('Produk'),

                TextEntry::make('nama_marketplace')
                    ->label('Nama Marketplace'),

                TextEntry::make('url')
                    ->label('Link')
                    ->url(fn ($record) => $record->url, true)
                    ->color('primary'),

                ImageEntry::make('icon_display')
                ->label('Ikon Marketplace')
                ->getStateUsing(function ($record) {
                    $icons = [
                        'shopee' => 'shopee.svg',
                        'tokopedia' => 'tokopedia.png',
                        'tiktok' => 'tiktok.svg',
                        'lazada' => 'lazada.png',
                    ];

                $name = strtolower($record->nama_marketplace);
                $file = $icons[$name] ?? 'default.png';

                    return asset('storage/marketplace-icons/' . $file);
                    })
                    ->size(80)
                    ->circular(),

                TextEntry::make('created_at')
                    ->label('Dibuat')
                    ->dateTime('d M Y, H:i'),

                TextEntry::make('updated_at')
                    ->label('Diperbarui')
                    ->dateTime('d M Y, H:i'),
            ]);
    }
}