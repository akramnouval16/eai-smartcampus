<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KegiatanSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('kegiatans')->insert([
            'nim' => '230001',
            'jenis_kegiatan' => 'Magang',
            'periode' => 'Juni - Agustus 2026',
            'instansi' => 'Pengadilan Militer I-05 Palembang',
            'status_pendaftaran' => 'Diterima',
            'status_kegiatan' => 'Berlangsung'
        ]);
    }
}