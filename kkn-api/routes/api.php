<?php

use Illuminate\Support\Facades\Route;
use App\Models\Kegiatan;

// Endpoint 3: Data KKN/Magang
Route::get('/kegiatan/{nim}', function ($nim) {
    $kegiatan = Kegiatan::where('nim', $nim)->first();

    if ($kegiatan) {
        return response()->json([
            'status' => 'success',
            'data' => [
                'nim' => $kegiatan->nim,
                'jenis_kegiatan' => $kegiatan->jenis_kegiatan,
                'periode' => $kegiatan->periode,
                'instansi' => $kegiatan->instansi,
                'status' => $kegiatan->status_kegiatan
            ]
        ]);
    }

    return response()->json(['status' => 'error', 'message' => 'Data kegiatan tidak ditemukan'], 404);
});

// Endpoint 4: Status Kegiatan
Route::get('/status/{nim}', function ($nim) {
    $kegiatan = Kegiatan::where('nim', $nim)->first();

    if ($kegiatan) {
        return response()->json([
            'status' => 'success',
            'data' => [
                'nim' => $kegiatan->nim,
                'jenis_kegiatan' => $kegiatan->jenis_kegiatan,
                'status_pendaftaran' => $kegiatan->status_pendaftaran,
                'status_kegiatan' => $kegiatan->status_kegiatan
            ]
        ]);
    }

    return response()->json(['status' => 'error', 'message' => 'Status kegiatan tidak ditemukan'], 404);
});