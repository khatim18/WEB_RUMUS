<?php

namespace App\Filament\Resources\Beritas;

use UnitEnum;
use BackedEnum;
use App\Models\Berita;
use Filament\Tables\Table;
use Filament\Schemas\Schema;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Resource;
use Filament\Resources\Pages;
use Filament\Actions\DeleteAction;
use Filament\Actions\BulkActionGroup;
use Filament\Forms\Components\Select;
use Filament\Actions\DeleteBulkAction;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use App\Filament\Resources\Beritas\Pages\EditBerita;
use App\Filament\Resources\Beritas\Pages\ViewBerita;
use App\Filament\Resources\Beritas\Pages\ListBeritas;
use App\Filament\Resources\Beritas\Pages\CreateBerita;

class BeritaResource extends Resource
{
    protected static ?string $model = Berita::class;

    protected static string | UnitEnum | null $navigationGroup = 'Kelola Galeri & Berita';

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-newspaper';

    protected static ?string $navigationLabel = 'Berita & Kisah';

    protected static ?string $recordTitleAttribute = 'judul';

    public static function form(Schema $schema): Schema
    {
        return $schema->schema([
            TextInput::make('judul')
                ->label('Judul Berita')
                ->required(),

            DatePicker::make('tanggal')
                ->label('Tanggal'),

            Select::make('jenis')
                ->label('Jenis Berita')
                ->options([
                    'berita' => 'Berita Umum',
                    'kegiatan' => 'Kegiatan UMKM',
                    'kisah' => 'Kisah Sukses',
                    'pengumuman' => 'Pengumuman',
                    'lainnya' => 'Lainnya',
                ])
                ->required(),

            TextInput::make('penulis')
                ->label('Penulis'),

            Textarea::make('deskripsi_singkat')
                ->label('Deskripsi Singkat'),

            FileUpload::make('gambar')
                ->label('Gambar')
                ->directory('berita')
                ->disk('public')
                ->image(),

             RichEditor::make('isi_berita')
                ->label('Isi Berita')
                ->extraAttributes(['style' => 'min-height: 400px;'])
                ->columnSpanFull(),
        ]);
    }
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('gambar')
                    ->label('Gambar'),
                TextColumn::make('judul')
                    ->searchable(),
                TextColumn::make('penulis')
                    ->label('penulis'),
                TextColumn::make('jenis'),
                TextColumn::make('tanggal')
                    ->date(),

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
            'index' => ListBeritas::route('/'),
            'create' => CreateBerita::route('/create'),
            'view' => ViewBerita::route('/{record}'),
            'edit' => EditBerita::route('/{record}/edit'),
        ];
    }
}