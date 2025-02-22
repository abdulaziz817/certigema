<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sertifikat;

class SertifikatController extends Controller
{
    public function store(Request $request)
    {
        // Validasi data sebelum menyimpan
        $request->validate([
            'judul' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'jenis_course' => 'required|string|max:255'
        ]);

        // Ambil semua data kecuali _token
        $data = $request->except('_token');

        // Simpan data ke dalam database
        Sertifikat::create($data);

        // Redirect dengan pesan sukses
        return redirect()->route('sertifikat.index')->with('success', 'Sertifikat berhasil ditambahkan!');
    }
}
