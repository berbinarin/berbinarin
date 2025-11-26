<?php

namespace App\Services;

// PERUBAHAN 1: Namespace V3 yang benar
use Intervention\Image\Laravel\Facades\Image;
use Illuminate\Support\Str;

class ImageService
{
    /**
     * Upload, Resize, Convert to WebP (Versi 3)
     *
     * @param $file (File dari Request)
     * @param string $path (Folder tujuan, misal: 'banners')
     * @param int|null $width (Lebar yang diinginkan)
     * @param int|null $height (Tinggi yang diinginkan/Crop)
     * @return string (Nama file yang disimpan)
     */
    public function upload($file, string $path, int $width = null, int $height = null)
    {
        $filename = time() . '_' . \Illuminate\Support\Str::random(10) . '.webp';

        $image = Image::read($file);

        if ($width && $height) {
            $image->cover($width, $height);
        } elseif ($width) {
            $image->scale(width: $width);
        }

        $encoded = $image->toWebp(80);

        // Simpan ke storage/app/public/{path}/
        $storagePath = storage_path("app/public/{$path}/" . $filename);

        if (!file_exists(dirname($storagePath))) {
            mkdir(dirname($storagePath), 0755, true);
        }

        $encoded->save($storagePath);

        return $filename;
    }

    /**
     * Hapus gambar lama
     * (Tidak ada perubahan karena menggunakan fungsi native PHP)
     */
    public function delete(string $path, string $filename)
    {
        $storagePath = storage_path("app/public/{$path}/" . $filename);
        if (file_exists($storagePath)) {
            unlink($storagePath);
        }
    }
}
