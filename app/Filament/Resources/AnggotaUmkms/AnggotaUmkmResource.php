<?php

namespace App\Filament\Resources\AnggotaUmkms;

use BackedEnum;
use Filament\Tables\Table;
use App\Models\AnggotaUmkm;
use Filament\Schemas\Schema;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Resource;
use Filament\Actions\DeleteAction;
use Filament\Support\Icons\Heroicon;
use Filament\Actions\BulkActionGroup;
use Filament\Forms\Components\Toggle;
use Filament\Actions\DeleteBulkAction;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Filters\TernaryFilter;
use App\Filament\Resources\AnggotaUmkms\Pages\EditAnggotaUmkm;
use App\Filament\Resources\AnggotaUmkms\Pages\ViewAnggotaUmkm;
use App\Filament\Resources\AnggotaUmkms\Pages\ListAnggotaUmkms;
use App\Filament\Resources\AnggotaUmkms\Pages\CreateAnggotaUmkm;
use App\Filament\Resources\AnggotaUmkms\Schemas\AnggotaUmkmForm;
use App\Filament\Resources\AnggotaUmkms\Tables\AnggotaUmkmsTable;
use App\Filament\Resources\AnggotaUmkms\Schemas\AnggotaUmkmInfolist;

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

        ]);
    }

    public static function infolist(Schema $schema): Schema
    {
        return AnggotaUmkmInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
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
                    ->label('No Hp'),


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
            'index' => ListAnggotaUmkms::route('/'),
            'create' => CreateAnggotaUmkm::route('/create'),
            'view' => ViewAnggotaUmkm::route('/{record}'),
            'edit' => EditAnggotaUmkm::route('/{record}/edit'),
        ];
    }
}
