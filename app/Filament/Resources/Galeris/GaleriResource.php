<?php

namespace App\Filament\Resources\Galeris;

use UnitEnum;
use BackedEnum;
use App\Models\Galeri;
use Filament\Tables\Table;
use Filament\Schemas\Schema;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Resource;
use Filament\Actions\DeleteAction;
use Filament\Support\Icons\Heroicon;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use App\Filament\Resources\Galeris\Pages\EditGaleri;
use App\Filament\Resources\Galeris\Pages\ViewGaleri;
use App\Filament\Resources\Galeris\Pages\ListGaleris;
use App\Filament\Resources\Galeris\Pages\CreateGaleri;
use App\Filament\Resources\Galeris\Schemas\GaleriForm;
use App\Filament\Resources\Galeris\Tables\GalerisTable;
use App\Filament\Resources\Galeris\Schemas\GaleriInfolist;

class GaleriResource extends Resource
{
    protected static ?string $model = Galeri::class;

    protected static string | UnitEnum | null $navigationGroup = 'Kelola Galeri & Berita';

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-photo';

    protected static ?string $navigationLabel = 'Galeri Kegiatan';

    protected static ?string $recordTitleAttribute = 'judul';

    public static function form(Schema $schema): Schema
    {
        return $schema->schema([
            TextInput::make('judul')
                ->required(),
            DatePicker::make('tanggal')
                ->label('Tanggal Kegiatan'),
            Textarea::make('deskripsi'),
            FileUpload::make('gambar')
                ->label('Foto Kegiatan')
                ->directory('galeri')
                ->image()
                ->required(),
        ]);
    }

    public static function infolist(Schema $schema): Schema
    {
        return GaleriInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
       return $table
            ->columns([
                TextColumn::make('judul'),
                TextColumn::make('tanggal')
                    ->date(),
                ImageColumn::make('gambar')
                    ->label('Gambar'),
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
            'index' => ListGaleris::route('/'),
            'create' => CreateGaleri::route('/create'),
            'view' => ViewGaleri::route('/{record}'),
            'edit' => EditGaleri::route('/{record}/edit'),
        ];
    }
}
