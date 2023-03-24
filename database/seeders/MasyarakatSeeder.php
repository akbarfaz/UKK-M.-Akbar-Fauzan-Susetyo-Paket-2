<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MasyarakatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    $data = [
        'nik' => '3200123829',
        'nama' => 'Masyarakat',
        'username' => 'masyarakat1',
        'password' => bcrypt('password'),
        'telp' => '08889013488'
    ];
    }
}
