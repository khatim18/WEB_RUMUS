<?php

namespace App\Filament\Resources\AnggotaUmkms\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class AnggotaUmkmInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('nama'),
                TextEntry::make('nama_umkm'),
                TextEntry::make('email')
                    ->label('Email address'),
                TextEntry::make('no_hp')
                    ->placeholder('-'),
                TextEntry::make('alamat')
                    ->placeholder('-'),
                TextEntry::make('kategori_usaha')
                    ->placeholder('-'),
                IconEntry::make('is_active')
                    ->boolean(),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
