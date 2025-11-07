<?php

namespace App\Filament\Resources\Kategoris;

use App\Filament\Resources\Kategoris\Pages\CreateKategori;
use App\Filament\Resources\Kategoris\Pages\EditKategori;
use App\Filament\Resources\Kategoris\Pages\ListKategoris;
use App\Filament\Resources\Kategoris\Pages\ViewKategori;
use App\Filament\Resources\Kategoris\Schemas\KategoriForm;
use App\Filament\Resources\Kategoris\Schemas\KategoriInfolist;
use App\Filament\Resources\Kategoris\Tables\KategorisTable;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use App\Models\Kategori;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class KategoriResource extends Resource
{
    protected static ?string $model = Kategori::class;

    protected static ?int $navigationSort = 4;

    protected static string | UnitEnum | null $navigationGroup = 'Kelola Produk';

    protected static BackedEnum|string|null $navigationIcon = 'heroicon-o-clipboard-document-list';

    protected static ?string $navigationLabel = 'Kategori';

    public static function form(Schema $schema): Schema
    {
        return $schema->schema([
                Textarea::make('nama')
                    ->label('Nama')
                    ->placeholder('Contoh: Makanan Ringan...')
                    ->maxLength(255),
            ]);


    }

    public static function infolist(Schema $schema): Schema
    {
        return KategoriInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return KategorisTable::configure($table);

    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListKategoris::route('/'),
            'create' => CreateKategori::route('/create'),
            'view' => ViewKategori::route('/{record}'),
            'edit' => EditKategori::route('/{record}/edit'),
        ];
    }
}