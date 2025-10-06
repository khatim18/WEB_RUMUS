<?php

namespace App\Filament\Resources\Legalitas;

use UnitEnum;
use BackedEnum;
use App\Models\Legalitas;
use Filament\Tables\Table;
use Filament\Schemas\Schema;
use Filament\Resources\Resource;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use App\Filament\Resources\Legalitas\Pages\EditLegalitas;
use App\Filament\Resources\Legalitas\Pages\ListLegalitas;
use App\Filament\Resources\Legalitas\Pages\ViewLegalitas;
use App\Filament\Resources\Legalitas\Pages\CreateLegalitas;
use App\Filament\Resources\Legalitas\Schemas\LegalitasForm;
use App\Filament\Resources\Legalitas\Tables\LegalitasTable;
use App\Filament\Resources\Legalitas\Schemas\LegalitasInfolist;

class LegalitasResource extends Resource
{
    protected static ?string $model = Legalitas::class;

    protected static ?int $navigationSort = 3;

    protected static string | UnitEnum | null $navigationGroup = 'Kelola Produk';

    protected static BackedEnum|string|null $navigationIcon = 'heroicon-o-clipboard-document-check';

    protected static ?string $recordTitleAttribute = 'Nama_Legalitas';

    protected static ?string $navigationLabel = 'Legalitas';

    public static function form(Schema $schema): Schema
    {
        return $schema->schema([
                Textarea::make('nama_legalitas')
                    ->label('Nama Legalitas')
                    ->placeholder('Contoh: NIB, PIRT, Sertifikat Halal, BPOM')
                    ->required()
                    ->maxLength(100),

                Textarea::make('slug')
                    ->required()
                    ->unique(),

                Textarea::make('penerbit')
                    ->label('Penerbit'),

                Textarea::make('deskripsi')
                    ->label('deskripsi')
                    ->rows(5)
                    ->columnSpanFull(),

                FileUpload::make('lampiran')
                    ->label('Gambar Sertifikat')
                    ->image()
                    ->directory('legalitas')
                    ->nullable(),
            ]);
    }

    public static function infolist(Schema $schema): Schema
    {
        return LegalitasInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return $table -> columns([
            TextColumn::make('nama_legalitas'),
            TextColumn::make('slug'),
            TextColumn::make('penerbit'),
            ImageColumn::make('lampiran'),
        ]);

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
            'index' => ListLegalitas::route('/'),
            'create' => CreateLegalitas::route('/create'),
            'view' => ViewLegalitas::route('/{record}'),
            'edit' => EditLegalitas::route('/{record}/edit'),
        ];
    }
}
