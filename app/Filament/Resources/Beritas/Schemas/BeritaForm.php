<?php

namespace App\Filament\Resources\Beritas\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class BeritaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('judul')
                    ->required(),
                Textarea::make('deskripsi_singkat')
                    ->default(null)
                    ->columnSpanFull(),
                Textarea::make('isi_berita')
                    ->default(null)
                    ->columnSpanFull(),
                TextInput::make('jenis')
                    ->default(null),
                TextInput::make('penulis')
                    ->default(null),
                DatePicker::make('tanggal'),
                TextInput::make('gambar')
                    ->default(null),
            ]);
    }
}
