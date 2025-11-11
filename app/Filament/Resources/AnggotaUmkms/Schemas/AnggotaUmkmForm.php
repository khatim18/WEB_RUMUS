<?php

namespace App\Filament\Resources\AnggotaUmkms\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class AnggotaUmkmForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama')
                    ->required(),
                TextInput::make('nama_umkm')
                    ->required(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required(),
                TextInput::make('no_hp')
                    ->default(null),
                TextInput::make('alamat')
                    ->default(null),
                TextInput::make('kategori_usaha')
                    ->default(null),
                Toggle::make('is_active')
                    ->required(),
            ]);
    }
}