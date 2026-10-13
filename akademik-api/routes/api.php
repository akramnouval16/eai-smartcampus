<?php

use Illuminate\Support\Facades\Route;
use App\Models\Mahasiswa;

// Endpoint 1: Data Mahasiswa (Tugas Akram Nouval)
Route::get('/mahasiswa/{nim}', function ($nim) {
    $mahasiswa = Mahasiswa::where('nim', $nim)->first();

    if ($mahasiswa) {
        return response()->json([
            'status' => 'success',
            'data' => [
                'nim' => $mahasiswa->nim,
                'nama' => $mahasiswa->nama,
                'fakultas' => $mahasiswa->fakultas,
                'program_studi' => $mahasiswa->program_studi,
                'semester' => $mahasiswa->semester,
                'status' => $mahasiswa->status
            ]
        ]);
    }

    return response()->json([
        'status' => 'error',
        'message' => 'Mahasiswa tidak ditemukan'
    ], 404);
});

// Endpoint 2: Data Akademik
Route::get('/akademik/{nim}', function ($nim) {
    $mahasiswa = Mahasiswa::where('nim', $nim)->first();

    if ($mahasiswa) {
        return response()->json([
            'status' => 'success',
            'data' => [
                'nim' => $mahasiswa->nim,
                'semester' => $mahasiswa->semester,
                'sks_ditempuh' => $mahasiswa->sks_ditempuh,
                'ipk' => $mahasiswa->ipk
            ]
        ]);
    }

    return response()->json(['status' => 'error', 'message' => 'Data akademik tidak ditemukan'], 404);
});