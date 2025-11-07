<?php

namespace App\Filament\Resources\Legalitas\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;
use Filament\Schemas\Schema;
use Filament\Infolists\Components\ImageEntry;

class LegalitasInfolist
{
    public static function configure($infolist)
    {
        if(! $infolist->getRecord()) {
            return $infolist;
        }
        return $infolist
            ->components([
                TextEntry::make('nama_legalitas')
                    ->Label('Nama Legalitas'),
                TextEntry::make('slug')
                    ->label('Slug'),
                TextEntry::make('penerbit')
                    ->label('Penerbit'),
                TextEntry::make('deskripsi')
                    ->label('Deskripsi')
                    ->columnSpanFull(),
                ImageEntry::make('lampiran')
                    ->label('Lampiran')
                    ->disk('public')
                    ->height(200)
                    ->visibility('public'),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}