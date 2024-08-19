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
                'supplier_id' => 1,
                'kode_barang' => 'N95-001',
                'lokasi_barang' => 'Ruang 1',
                'stok' => 100,
                'harga_beli' => 10000,
                'harga_jual' => 15000,
                'deskripsi' => 'Masker N95 adalah masker yang memiliki tingkat proteksi tertinggi',
                'gambar' => 'masker-n95.jpg',
            ],
            [
                'nama_barang' => 'Masker Kain',
                'kategori_id' => 1,
                'supplier_id' => 1,
                'kode_barang' => 'KAIN-001',
                'lokasi_barang' => 'Ruang 2',
                'stok' => 200,
                'harga_beli' => 5000,
                'harga_jual' => 7000,
                'deskripsi' => 'Masker kain adalah masker yang dapat dicuci dan digunakan berulang kali',
                'gambar' => 'masker-kain.jpg',
            ],
            [
                'nama_barang' => 'Hand Sanitizer',
                'kategori_id' => 2,
                'supplier_id' => 2,
                'kode_barang' => 'HS-001',
                'lokasi_barang' => 'Ruang 3',
                'stok' => 50,
                'harga_beli' => 20000,
                'harga_jual' => 25000,
                'deskripsi' => 'Hand sanitizer adalah cairan pembersih tangan yang dapat membunuh kuman',
                'gambar' => 'hand-sanitizer.jpg',
            ],
            [
                'nama_barang' => 'Vitamin C',
                'kategori_id' => 3,
                'supplier_id' => 3,
                'kode_barang' => 'VC-001',
                'lokasi_barang' => 'Ruang 4',
                'stok' => 30,
                'harga_beli' => 30000,
                'harga_jual' => 35000,
                'deskripsi' => 'Vitamin C adalah vitamin yang dapat meningkatkan daya tahan tubuh',
                'gambar' => 'vitamin-c.jpg',
            ],
            [
                'nama_barang' => 'Obat Batuk',
                'kategori_id' => 3,
                'supplier_id' => 4,
                'kode_barang' => 'OB-001',
                'lokasi_barang' => 'Ruang 5',
                'stok' => 40,
                'harga_beli' => 15000,
                'harga_jual' => 20000,
                'deskripsi' => 'Obat batuk adalah obat yang digunakan untuk mengatasi batuk',
                'gambar' => 'obat-batuk.jpg',
            ],
            [
                'nama_barang' => 'Obat Sakit Kepala',
                'kategori_id' => 3,
                'supplier_id' => 4,
                'kode_barang' => 'OSK-001',
                'lokasi_barang' => 'Ruang 6',
                'stok' => 20,
                'harga_beli' => 10000,
                'harga_jual' => 15000,
                'deskripsi' => 'Obat sakit kepala adalah obat yang digunakan untuk mengatasi sakit kepala',
                'gambar' => 'obat-sakit-kepala.jpg',
            ],
            [
                'nama_barang' => 'Obat Demam',
                'kategori_id' => 3,
                'supplier_id' => 4,
                'kode_barang' => 'OD-001',
                'lokasi_barang' => 'Ruang 7',
                'stok' => 25,
                'harga_beli' => 12000,
                'harga_jual' => 17000,
                'deskripsi' => 'Obat demam adalah obat yang digunakan untuk mengatasi demam',
                'gambar' => 'obat-demam.jpg',
            ]

        ];

        foreach ($barang as $item) {
            Barang::create($item);
        }
    }
}
