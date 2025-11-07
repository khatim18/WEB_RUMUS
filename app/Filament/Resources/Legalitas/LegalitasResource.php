<?php

namespace App\Filament\Resources\Legalitas;

use UnitEnum;
use BackedEnum;
use App\Models\Legalitas;
use Filament\Tables\Table;
use Filament\Schemas\Schema;
use Filament\Actions\ViewAction;
use Filament\Actions\EditAction;
use Filament\Resources\Resource;
use Filament\Actions\DeleteAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use App\Filament\Resources\Legalitas\Pages\EditLegalitas;
use App\Filament\Resources\Legalitas\Pages\ListLegalitas;
use App\Filament\Resources\Legalitas\Pages\ViewLegalitas;
use App\Filament\Resources\Legalitas\Pages\CreateLegalitas;
use App\Filament\Resources\Legalitas\Schemas\LegalitasInfolist;

class LegalitasResource extends Resource
{
    protected static ?string $model = Legalitas::class;

    protected static ?int $navigationSort = 3;

    protected static string | UnitEnum | null $navigationGroup = 'Kelola Produk';

    protected static BackedEnum|string|null $navigationIcon = 'heroicon-o-clipboard-document-check';

    protected static ?string $recordTitleAttribute = 'nama_legalitas';

    protected static ?string $navigationLabel = 'Legalitas';

    public static function form(Schema $schema): Schema
    {
        return $schema->schema([
                Textarea::make('nama_legalitas')
                    ->label('Nama Legalitas')
                    ->placeholder('Contoh: NIB, PIRT, Sertifikat Halal, BPOM')
                    ->required()
                    ->unique()
                    ->maxLength(100),

                Textarea::make('slug')
                    ->label('Slug')
                    ->placeholder('Contoh: nib-pirt-sertifikat-halal-bpom')
                    ->required()
                    ->unique(),

                Textarea::make('penerbit')
                    ->label('Penerbit')
                    ->placeholder('Contoh: BPOM, Dinas Kesehatan, MUI')
                    ->required(),

                Textarea::make('deskripsi')
                    ->label('Deskripsi')
                    ->placeholder('Contoh: Legalitas ini diterbitkan oleh...')
                    ->required()
                    ->rows(5)
                    ->columnSpanFull(),

                FileUpload::make('lampiran')
                    ->label('Gambar Sertifikat')
                    ->image()
                    ->directory('legalitas')
                    ->preserveFilenames()
                    ->visibility('public')
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
        ])
        ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
                ViewAction::make(),
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
            'index' => ListLegalitas::route('/'),
            'create' => CreateLegalitas::route('/create'),
            'view' => ViewLegalitas::route('/{record}'),
            'edit' => EditLegalitas::route('/{record}/edit'),
        ];
    }
}
