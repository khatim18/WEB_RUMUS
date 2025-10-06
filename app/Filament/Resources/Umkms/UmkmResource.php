<?php

namespace App\Filament\Resources\Umkms;

use BackedEnum;
use App\Models\Umkm;
use Filament\Tables\Table;
use Filament\Schemas\Schema;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Resource;
use Filament\Support\Icons\Heroicon;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use App\Filament\Resources\Umkms\Pages\EditUmkm;
use App\Filament\Resources\Umkms\Pages\ListUmkms;
use App\Filament\Resources\Umkms\Pages\CreateUmkm;
use App\Filament\Resources\Umkms\Schemas\UmkmForm;
use App\Filament\Resources\Umkms\Tables\UmkmsTable;
use UnitEnum;

class UmkmResource extends Resource
{
    protected static ?string $model = Umkm::class;

    protected static ?int $navigationSort = 2;

    protected static string | UnitEnum | null $navigationGroup = 'Kelola Produk';

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-briefcase';

    protected static ?string $recordTitleAttribute = 'nama_umkm';

    protected static ?string $navigationLabel = 'UMKM';

    public static function form(Schema $schema): Schema{
        return $schema->schema([
            TextInput::make('nama_umkm')->required(),
            TextInput::make('nama_pemilik'),
            TextInput::make('no_hp'),
            Textarea::make('deskripsi'),
        ]);
    }

    public static function table(Table $table): Table{
        return $table->columns([
            TextColumn::make('nama_umkm')
                ->label('UMKM'),
            TextColumn::make('nama_pemilik')
                ->label('Nama Pemilik'),
            TextColumn::make('no_hp')
                ->label('No Hp'),
            TextColumn::make('deskripsi')
                ->label('Deskripsi'),

            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
                ViewAction::make(),
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
            'index' => ListUmkms::route('/'),
            'create' => CreateUmkm::route('/create'),
            'edit' => EditUmkm::route('/{record}/edit'),
        ];
    }
}
