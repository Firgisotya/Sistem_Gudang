<?php

namespace Database\Seeders;

use App\Models\Barang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $barang = [
            [
                'nama_barang' => 'Masker N95',
                'kategori_id' => 1,
                'kode_barang' => 'N95-001',
                'lokasi_barang' => 'Ruang 1',
            ],
            [
                'nama_barang' => 'Obat Batuk',
                'kategori_id' => 2,
                'kode_barang' => 'OB-001',
                'lokasi_barang' => 'Ruang 2',
            ],
            [
                'nama_barang' => 'Gunting Medis',
                'kategori_id' => 3,
                'kode_barang' => 'GM-001',
                'lokasi_barang' => 'Ruang 3',
            ],
            [
                'nama_barang' => 'Alat Pemeriksaan Suhu',
                'kategori_id' => 1,
                'kode_barang' => 'APS-001',
                'lokasi_barang' => 'Ruang 4',
            ],
            [
                'nama_barang' => 'Obat Demam',
                'kategori_id' => 2,
                'kode_barang' => 'OD-001',
                'lokasi_barang' => 'Ruang 5',
            ],
            [
                'nama_barang' => 'Alat Pemeriksaan Darah',
                'kategori_id' => 1,
                'kode_barang' => 'APD-001',
                'lokasi_barang' => 'Ruang 6',
            ],
            [
                'nama_barang' => 'Obat Sakit Kepala',
                'kategori_id' => 2,
                'kode_barang' => 'OSK-001',
                'lokasi_barang' => 'Ruang 7',
            ],
            [
                'nama_barang' => 'Alat Pemeriksaan Mata',
                'kategori_id' => 1,
                'kode_barang' => 'APM-001',
                'lokasi_barang' => 'Ruang 8',
            ],
            [
                'nama_barang' => 'Obat Sakit Gigi',
                'kategori_id' => 2,
                'kode_barang' => 'OSG-001',
                'lokasi_barang' => 'Ruang 9',
            ],
            [
                'nama_barang' => 'Alat Pemeriksaan Telinga',
                'kategori_id' => 1,
                'kode_barang' => 'APT-001',
                'lokasi_barang' => 'Ruang 10',
            ],

        ];

        foreach ($barang as $item) {
            Barang::create($item);
        }
    }
}
