<?php

namespace App\Filament\Resources\Kisahs\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;

class KisahForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->schema([
            TextInput::make('nama')
                ->label('Nama')
                ->required()
                ->maxLength(100),

            TextInput::make('judul')
                ->label('Judul Kisah')
                ->required()
                ->maxLength(150),

            Textarea::make('deskripsi')
                ->label('Deskripsi')
                ->rows(5)
                ->required(),

            FileUpload::make('gambar')
                ->label('Gambar Kisah')
                ->image()
                ->disk('public')
                ->directory('kisah')
                ->maxSize(2048)
                ->columnSpanFull(),
        ]);
    }
}
