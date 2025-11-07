<?php

namespace App\Filament\Resources\LinkMarketplaces\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Forms\Components\FileUpload;

class LinkMarketplacesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id_produk')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('nama_marketplace')
                    ->searchable(),
                TextColumn::make('link')
                    ->searchable()
                    ->openUrlInNewTab()
                    ->url(fn ($record) => $record->url, true),
                TextColumn::make('')
                    ->multiple('icon')
                    ->default('🛒')
                    ->dehydrated(false)
                    ->nullabel(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
