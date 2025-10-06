<?php

namespace App\Filament\Resources\Produks\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;
use Filament\Forms\Components\FileUpload;

class ProdukInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('deskripsi_singkat')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('deskripsi_lengkap')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('harga')
                    ->numeric()
                    ->placeholder('-'),
                TextEntry::make('attachments')
                    ->multiple()
                    ->directory('produk-attachments')
                    ->reorderable()
                    ->label('Lampiran Produk')
                    ->maxFiles(5),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
