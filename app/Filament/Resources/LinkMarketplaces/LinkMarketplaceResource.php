<?php

namespace App\Filament\Resources\LinkMarketplaces;

use App\Filament\Resources\LinkMarketplaces\Pages\CreateLinkMarketplace;
use App\Filament\Resources\LinkMarketplaces\Pages\EditLinkMarketplace;
use App\Filament\Resources\LinkMarketplaces\Pages\ListLinkMarketplaces;
use App\Filament\Resources\LinkMarketplaces\Pages\ViewLinkMarketplace;
use App\Filament\Resources\LinkMarketplaces\Schemas\LinkMarketplaceInfolist;
use App\Models\LinkMarketplace;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;
use Filament\Forms;
use Filament\Tables;
use Filament\Tables\Filters\TernaryFilter;
use Filament\Actions\ViewAction;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;

class LinkMarketplaceResource extends Resource
{
    protected static ?string $model = LinkMarketplace::class;

    protected static ?int $navigationSort = 5;

    protected static string | UnitEnum | null $navigationGroup = 'Kelola Produk';

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-link';

    protected static ?string $recordTitleAttribute = 'nama_marketplace';

    public static function form(Schema $schema): Schema
    {
        return $schema->schema([
            Forms\Components\Select::make('id_produk')
                    ->label('Produk')
                    ->relationship('produk', 'nama_produk')
                    ->required(),

            Forms\Components\TextInput::make('nama_marketplace')
                    ->label('Nama Marketplace')
                    ->placeholder('Contoh: Shopee, Tokopedia, Lazada')
                    ->required()
                    ->maxLength(100),

            Forms\Components\TextInput::make('url')
                    ->label('URL Marketplace')
                    ->placeholder('https://...')
                    ->url()
                    ->required()
                    ->maxLength(255),

            Forms\Components\Toggle::make('is_active')
                    ->label('Aktif')
                    ->default(true),

            Forms\Components\Select::make('icon_placeholder')
                ->label('Ikon Marketplace (hanya tampilan)')
                ->options([
                    'shopee.svg' => 'Shopee',
                    'tokopedia.png' => 'Tokopedia',
                    'tiktok.svg' => 'TikTok',
                    'lazada.png' => 'Lazada',
                ])
                ->default('shopee.svg')
                ->helperText('Ikon ini tidak disimpan ke database.'),

            Forms\Components\FileUpload::make('icon')
                ->label('Ikon Marketplace (tidak disimpan)')
                ->image()
                ->directory('marketplace-icons')
                ->maxSize(1024)
                ->helperText('Hanya untuk tampilan, tidak disimpan ke database.')
                ->dehydrated(false),

                ]);
    }

    public static function infolist(Schema $schema): Schema
    {
        return LinkMarketplaceInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            Tables\Columns\TextColumn::make('id_link')
                    ->label('ID')
                    ->sortable()
                    ->toggleable(),

                Tables\Columns\TextColumn::make('produk.nama_produk')
                    ->label('Produk')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('nama_marketplace')
                    ->label('Marketplace')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('url')
                    ->label('Link')
                    ->url(fn ($record) => $record->url, true)
                    ->limit(40),

                Tables\Columns\ImageColumn::make('icon')
                        ->label('Ikon Marketplace')
                        ->getStateUsing(function ($record) {
                            $name = strtolower($record->nama_marketplace);
                            $icons = [
                                'shopee' => asset('marketplace-icons/shopee.svg'),
                                'tokopedia' => asset('marketplace-icons/tokopedia.png'),
                                'tiktok' => asset('marketplace-icons/tiktok.svg'),
                                'lazada' => asset('marketplace-icons/lazada.png'),
                            ];
                            // Ambil ikon sesuai nama marketplace, kalau tidak ada pakai default
                            $iconFile = $icons[$name] ?? 'marketplace-icons/default.svg';
                            // Pastikan path menggunakan asset() biar bisa tampil di browser
                            return asset($iconFile);
                        }),


                Tables\Columns\IconColumn::make('is_active')
                        ->label('Aktif')
                        ->boolean(),
                ])
         ->filters([
            TernaryFilter::make('is_active')
                ->label('Status Aktif'),
        ])
         ->actions([
            ViewAction::make(),
            EditAction::make(),
            DeleteAction::make(),
        ])
         ->bulkActions([
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
            'index' => ListLinkMarketplaces::route('/'),
            'create' => CreateLinkMarketplace::route('/create'),
            'view' => ViewLinkMarketplace::route('/{record}'),
            'edit' => EditLinkMarketplace::route('/{record}/edit'),
        ];
    }
}
