<?php

namespace App\Filament\Resources\Kisahs\Tables;

use Filament\Tables;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Table;

class KisahsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('gambar')
                    ->label('Gambar')
                    ->square(),

                Tables\Columns\TextColumn::make('judul')
                    ->label('Judul')
                    ->searchable()
                    ->sortable()
                    ->url(fn ($record) => route('kisah.show', $record->id)),

                Tables\Columns\TextColumn::make('nama')
                    ->label('Nama')
                    ->sortable(),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->dateTime('d M Y')
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                //
            ])
            ->bulkActions([
                //
            ]);
    }
}