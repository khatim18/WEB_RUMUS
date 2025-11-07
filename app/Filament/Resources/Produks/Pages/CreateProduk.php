<?php

namespace App\Filament\Resources\Produks\Pages;

use App\Filament\Resources\Produks\ProdukResource;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Auth;
use App\Models\GambarProduk;
use Filament\Notifications\Notification;


class CreateProduk extends CreateRecord
{
    protected static string $resource = ProdukResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
{
    // Ambil user yang sedang login
        $user = Auth::user();

    // Isi id_admin otomatis dari user yang login
        $data['id_admin'] = $user->id_admin ?? $user->id ?? 1;

        return $data;
    }
    protected function afterCreate(): void
    {
        $record = $this->record; // produk yang baru dibuat


        if (isset($this->data['attachments'])) {
            foreach ($this->data['attachments'] as $filePath) {
                GambarProduk::create([
                    'id_produk' => $record->id_produk,
                    'path' => $filePath,
                    'is_cover' => false,
                ]);
            }
        }
    }
    protected function getRedirectUrl(): string
    {
        // (Opsional) tampilkan notifikasi sukses
        Notification::make()
            ->title('Produk berhasil ditambahkan!')
            ->success()
            ->send();

        // Arahkan ke halaman list produk
        return $this->getResource()::getUrl('index');
    }
}