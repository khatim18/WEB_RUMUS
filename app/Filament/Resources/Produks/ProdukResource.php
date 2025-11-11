<?php

namespace App\Filament\Resources\Produks;

use UnitEnum;
use App\Models\Produk;
use Filament\Tables\Table;
use Filament\Schemas\Schema;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Resource;
use Filament\Actions\BulkActionGroup;
use Filament\Forms\Components\Select;
use Filament\Actions\DeleteBulkAction;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Toggle;
use App\Filament\Resources\Produks\Pages\EditProduk;
use App\Filament\Resources\Produks\Pages\ViewProduk;
use App\Filament\Resources\Produks\Pages\ListProduks;
use App\Filament\Resources\Produks\Pages\CreateProduk;
use Filament\Actions\DeleteAction;

class ProdukResource extends Resource
{
    protected static ?string $model = Produk::class;

    protected static ?int $navigationSort = 1;

    protected static string | UnitEnum | null $navigationGroup = 'Kelola Produk';

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-building-storefront';

    protected static ?string $recordTitleAttribute = 'deskripsi_singkat';

    protected static ?string $navigationLabel = 'Produk';

    public static function form(Schema $schema): Schema
    {
        return $schema->schema([
            Textarea::make('nama_produk')
                ->label('Nama Produk')
                ->placeholder('Contoh: Risol Jamur Tiram')
                ->required(),

            Textarea::make('kode_produk')
                ->label('Kode Produk')
                ->placeholder('Contoh: PRD-001')
                ->required(),

            Select::make('id_umkm')
                ->label('UMKM')
                ->relationship('umkm', 'nama_umkm')
                ->placeholder('Pilih UMKM')
                ->required(),

            Select::make('id_kategori')
                ->label('Kategori')
                ->relationship('kategori', 'nama')
                ->placeholder('Pilih Kategori')
                ->required(),

            Textarea::make('deskripsi_lengkap')
                ->label('Deskripsi Lengkap')
                ->placeholder('Deskripsikan produk secara detail...')
                ->rows(5)
                ->columnSpanFull(),

            TextInput::make('deskripsi_singkat')
                ->label('Deskripsi Singkat')
                ->placeholder('Deskripsi singkat produk')
                ->maxLength(255)
                ->required()
                ->columnSpanFull(),

            TextInput::make('harga')
                ->label('Harga')
                ->placeholder('Contoh: 150000')
                ->numeric()
                ->required(),


            Repeater::make('gambar')
                ->label('Gambar Produk')
                ->relationship('gambar')
                ->schema([
            FileUpload::make('path_gambar')
                ->image()
                ->label('Gambar Produk')
                ->disk('public')
                ->directory('produk')
                ->visibility('public')
                ->required(),
            Toggle::make('is_cover')
                ->label('Jadikan Cover')
                ->default(false),
                ])
                ->collapsible()
                ->createItemButtonLabel('Tambah Gambar')
                ->columns(2),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            TextColumn::make('nama_produk')
                ->label('Nama Produk'),

            TextColumn::make('kode_produk')
                ->label('Kode Produk'),

            TextColumn::make('deskripsi_lengkap')
                ->label('Deskripsi Lengkap'),

            TextColumn::make('deskripsi_singkat')
                ->label('Deskripsi Singkat'),

            TextColumn::make('harga')
                ->label('Harga'),

            // 🖼️ Ambil cover image dari relasi gambar_produks
            ImageColumn::make('gambar.path_gambar')
                ->label('Cover')
                ->circular()
                ->toggleable(),
        ])
        ->filters([
            //
        ])
        ->recordActions([
            ViewAction::make(),
            EditAction::make(),
            DeleteAction::make(),
        ])
        ->toolbarActions([
            BulkActionGroup::make([
                DeleteBulkAction::make(),
            ]),
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
            'index' => ListProduks::route('/'),
            'create' => CreateProduk::route('/create'),
            'view' => ViewProduk::route('/{record}'),
            'edit' => EditProduk::route('/{record}/edit'),
        ];
    }
}
