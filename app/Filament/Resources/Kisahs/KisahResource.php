<?php

namespace App\Filament\Resources\Kisahs;

use App\Filament\Resources\Kisahs\Pages\CreateKisah;
use App\Filament\Resources\Kisahs\Pages\EditKisah;
use App\Filament\Resources\Kisahs\Pages\ListKisahs;
use App\Filament\Resources\Kisahs\Pages\ViewKisah;
use App\Filament\Resources\Kisahs\Schemas\KisahForm;
use App\Filament\Resources\Kisahs\Schemas\KisahInfolist;
use App\Filament\Resources\Kisahs\Tables\KisahsTable;
use App\Models\Kisah;
use UnitEnum;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class KisahResource extends Resource
{
    protected static ?string $model = Kisah::class;

    protected static string | UnitEnum | null $navigationGroup = 'Kelola Galeri & Berita';

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-book-open';

    protected static ?string $navigationLabel = 'Kisah';

    protected static ?string $recordTitleAttribute = 'judul';

    public static function form(Schema $schema): Schema
    {
        return KisahForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return KisahInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return KisahsTable::configure($table);
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
            'index' => ListKisahs::route('/'),
            'create' => CreateKisah::route('/create'),
            'view' => ViewKisah::route('/{record}'),
            'edit' => EditKisah::route('/{record}/edit'),
        ];
    }
}
