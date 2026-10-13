<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('mahasiswas')->insert([
            'nim' => '230001',
            'nama' => 'Meylinda',
            'fakultas' => 'Sains dan Teknologi',
            'program_studi' => 'Sistem Informasi',
            'semester' => 6,
            'status' => 'Aktif',
            'sks_ditempuh' => 120,
            'ipk' => 3.65
        ]);
    }
}