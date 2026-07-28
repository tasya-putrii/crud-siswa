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
        Siswa::create([
            'nama' => 'Budi Santoso',
            'kelas' => '10 IPA 1',
        ]);

        Siswa::create([
            'nama' => 'Siti Aminah',
            'kelas' => '10 IPS 2',
        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
