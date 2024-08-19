<?php

namespace Database\Seeders;

use App\Models\Supplier;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $supplier = [
            [
                'nama_supplier' => 'PT. A',
                'alamat_supplier' => 'Jl. A',
                'kontak_supplier' => '08123456789',
            ],
            [
                'nama_supplier' => 'PT. B',
                'alamat_supplier' => 'Jl. B',
                'kontak_supplier' => '08123456789',
            ],
            [
                'nama_supplier' => 'PT. C',
                'alamat_supplier' => 'Jl. C',
                'kontak_supplier' => '08123456789',
            ],
            [
                'nama_supplier' => 'PT. D',
                'alamat_supplier' => 'Jl. D',
                'kontak_supplier' => '08123456789',
            ],
            [
                'nama_supplier' => 'PT. E',
                'alamat_supplier' => 'Jl. E',
                'kontak_supplier' => '08123456789',
            ],
            [
                'nama_supplier' => 'PT. F',
                'alamat_supplier' => 'Jl. F',
                'kontak_supplier' => '08123456789',
            ],
            [
                'nama_supplier' => 'PT. G',
                'alamat_supplier' => 'Jl. G',
                'kontak_supplier' => '08123456789',
            ],
            [
                'nama_supplier' => 'PT. H',
                'alamat_supplier' => 'Jl. H',
                'kontak_supplier' => '08123456789',
            ],
            [
                'nama_supplier' => 'PT. I',
                'alamat_supplier' => 'Jl. I',
                'kontak_supplier' => '08123456789',
            ],
            [
                'nama_supplier' => 'PT. J',
                'alamat_supplier' => 'Jl. J',
                'kontak_supplier' => '08123456789',
            ]
        ];

        foreach ($supplier as $item) {
            Supplier::create($item);
        }
    }
}
