<?php

namespace App\Filament\Resources\Produks\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;

class ProdukForm
{

    public static function configure($form)
    {
        $fieldsForV4 = [
            // TextInput::make('nama_produk')
            //     ->label('Nama Produk')
            //     ->required()
            //     ->maxLength(255),

            TextInput::make('deskripsi_singkat')
                ->label('Deskripsi Singkat')
                ->rows(2)
                ->columSpanFull(),

            Textarea::make('deskripsi_lengkap')
                ->label('Deskripsi Lengkap')
                ->rows(4)
                ->columnSpanFull(),

            TextInput::make('harga')
                ->label('Harga')
                ->numeric()
                ->required(),

            FileUpload::make('gambar_produk')
                ->multiple()
                ->directory('produk-attachments')
                ->reorderable()
                ->label('Lampiran Produk')
                ->maxFiles(5),


        ];

        if (is_object($form) && method_exists($form, 'schema')) {
            return $form->schema($fieldsForV4);
        }

        if (is_object($form) && method_exists($form, 'components')) {
            return $form->components($fieldsForV4);
        }

        try {
            if (is_object($form) && method_exists($form, 'schema')) {
                return $form->schema($fieldsForV4);
            }
        } catch (\Throwable $e) {

        }

        return $form;
    }
}
