<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       
        $kategori = [
            [
                'nama_kategori' => 'Alat Kesehatan',
            ],
            [
                'nama_kategori' => 'Obat',
            ],
            [
                'nama_kategori' => 'Perlengkapan Medis',
            ],
        ];

        foreach ($kategori as $item) {
            Kategori::create($item);
        }
    }
}
