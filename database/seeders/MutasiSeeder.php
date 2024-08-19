<?php

namespace Database\Seeders;

use App\Models\Mutasi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MutasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mutasi = [
            [
                'user_id' => 1,
                'barang_id' => 1,
                'tanggal_mutasi' => '2024-08-19',
                'jenis_mutasi' => 'masuk',
                'jumlah_mutasi' => 10,
            ],
            [
                'user_id' => 2,
                'barang_id' => 2,
                'tanggal_mutasi' => '2024-08-19',
                'jenis_mutasi' => 'masuk',
                'jumlah_mutasi' => 20,
            ],
            [
                'user_id' => 1,
                'barang_id' => 3,
                'tanggal_mutasi' => '2024-08-19',
                'jenis_mutasi' => 'masuk',
                'jumlah_mutasi' => 30,
            ],
            [
                'user_id' => 2,
                'barang_id' => 1,
                'tanggal_mutasi' => '2024-08-19',
                'jenis_mutasi' => 'keluar',
                'jumlah_mutasi' => 5,
            ],
            [
                'user_id' => 1,
                'barang_id' => 2,
                'tanggal_mutasi' => '2024-08-19',
                'jenis_mutasi' => 'keluar',
                'jumlah_mutasi' => 10,
            ],
            [
                'user_id' => 1,
                'barang_id' => 3,
                'tanggal_mutasi' => '2024-08-19',
                'jenis_mutasi' => 'keluar',
                'jumlah_mutasi' => 15,
            ],
        ];

        foreach ($mutasi as $item) {
            Mutasi::create($item);
        }
    }
}
