<?php

namespace App\Filament\Resources\Legalitas\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class LegalitasForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama_legalitas')
                    ->required()
                    ->Label('Nama Legalitas'),
            ]);
    }
}