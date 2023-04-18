<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::create([
            'nip' => '1908718210',
            'nama' => 'Dede Andika',
            'telp' => '089671654666',
            'jk' => 'laki-laki',
            'alamat' => 'Jalan Suli Denpasar',
            'level' => 'admin'
        ]);
    }
}
