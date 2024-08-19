<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Admin',
                'email' => 'admin@mail.com',
                'password' => bcrypt('password'),
                'nik' => '1234567890',
                'tempat_lahir' => 'Jakarta',
                'tanggal_lahir' => '2000-01-01',
                'alamat' => 'Jl. Jalan No. 1',
                'no_hp' => '081234567890',
                'jenis_kelamin' => 'Laki-Laki',
            ],
            [
                'name' => 'Firgi',
                'email' => 'firgi@mail.com',
                'password' => bcrypt('password'),
                'nik' => '2041720207',
                'tempat_lahir' => 'Pasuruan',
                'tanggal_lahir' => '2002-02-28',
                'alamat' => 'Jl. Taman Safari II',
                'no_hp' => '081334552124',
                'jenis_kelamin' => 'Laki-Laki',
            ]
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
