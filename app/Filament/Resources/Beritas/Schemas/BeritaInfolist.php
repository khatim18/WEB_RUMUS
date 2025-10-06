<?php

namespace App\Filament\Resources\Beritas\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class BeritaInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('judul'),
                TextEntry::make('deskripsi_singkat')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('isi_berita')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('jenis')
                    ->placeholder('-'),
                TextEntry::make('penulis')
                    ->placeholder('-'),
                TextEntry::make('tanggal')
                    ->date()
                    ->placeholder('-'),
                TextEntry::make('gambar')
                    ->placeholder('-'),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
