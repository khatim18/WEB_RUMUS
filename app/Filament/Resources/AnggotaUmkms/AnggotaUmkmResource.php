<?php

namespace App\Filament\Resources\AnggotaUmkms;

use BackedEnum;
use App\Models\AnggotaUmkm;
use Filament\Schemas\Schema;
use Filament\Resources\Resource;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Actions\ViewAction;
use Filament\Forms\Components\Select;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use App\Filament\Resources\AnggotaUmkms\Pages\CreateAnggotaUmkm;
use App\Filament\Resources\AnggotaUmkms\Pages\EditAnggotaUmkm;
use App\Filament\Resources\AnggotaUmkms\Pages\ListAnggotaUmkms;
use App\Filament\Resources\AnggotaUmkms\Pages\ViewAnggotaUmkm;

class AnggotaUmkmResource extends Resource
{
    protected static ?string $model = AnggotaUmkm::class;

    protected static ?string $navigationLabel = 'Kelola Anggota UMKM';

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-users';

    protected static ?string $recordTitleAttribute = 'nama';

    public static function form(Schema $schema): Schema
    {
        return $schema->schema([
            TextInput::make('nama')
                ->label('Nama Lengkap')
                ->required()
                ->maxLength(100),

            TextInput::make('nama_umkm')
                ->label('Nama UMKM')
                ->required()
                ->maxLength(100),

            TextInput::make('email')
                ->label('Email')
                ->email()
                ->required(),

            TextInput::make('no_hp')
                ->label('No. HP')
                ->tel(),

            Textarea::make('alamat')
                ->label('Alamat'),

            Select::make('kategori_id')
                ->label('Kategori Usaha')
                ->options(
                    \App\Models\Kategori::pluck('nama', 'nama')
                ->toArray())
                ->required(),

            Select::make('jabatan')
            ->label('Posisi Jabatan')
            ->options([
                'Ketua' => 'Ketua',
                'Bendahara' => 'Bendahara',
                'Sekretaris' => 'Sekretaris',
                'Anggota' => 'Anggota',
            ])
            ->required(),

            FileUpload::make('Foto_anggota')
                ->label('Foto Anggota')
                ->directory('public/anggota_umkm')
                ->visibility('public')
                ->helperText('Unggah foto anggota dalam format JPG atau PNG (maksimal 5MB).')
                ->acceptedFileTypes(['image/jpeg', 'image/png'])
                ->maxSize(5120),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
                TextColumn::make('nama')
                    ->label('Nama')
                    ->sortable(),

                TextColumn::make('nama_umkm')
                    ->label('Nama UMKM')
                    ->sortable(),

                TextColumn::make('email')
                    ->label('Email')
                    ->limit(25),

                TextColumn::make('no_hp')
                    ->label('No. HP'),

                TextColumn::make('alamat')
                    ->label('Alamat')
                    ->limit(30),

                TextColumn::make('kategori_usaha')
                    ->label('Kategori Usaha'),

                TextColumn::make('jabatan')
                    ->label('Posisi Jabatan')
                    ->limit(25),

                ImageColumn::make('Foto_anggota')
                    ->label('Foto Anggota')
                    ->disk('public')
                    ->width(60)
                    ->height(60)
                    ->circular(),
            ])
            ->filters([])
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
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListAnggotaUmkms::route('/'),
            'create' => CreateAnggotaUmkm::route('/create'),
            'view' => ViewAnggotaUmkm::route('/{record}'),
            'edit' => EditAnggotaUmkm::route('/{record}/edit'),
        ];
    }
}
