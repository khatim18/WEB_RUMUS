<?php

namespace App\Filament\Resources\Kisahs\Schemas;

use Filament\Schemas\Schema;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;

class KisahInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->schema([
            ImageEntry::make('gambar')
                ->label('Gambar')
                ->size(200),

            TextEntry::make('judul')
                ->label('Judul')
                ->size('lg')
                ->weight('bold'),

            TextEntry::make('nama')
                ->label('Nama'),

            TextEntry::make('deskripsi')
                ->label('Deskripsi')
                ->markdown(),
        ]);
    }
}
