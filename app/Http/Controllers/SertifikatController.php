<?php

namespace App\Http\Controllers;

use App\Models\Sertifikat;
use Illuminate\Http\Request;

class SertifikatController extends Controller
{
    // Menampilkan semua sertifikat
    public function index()
    {
        $sertifikats = Sertifikat::all();
        return view('sertifikat.index', compact('sertifikats'));
    }

    // Menampilkan form tambah sertifikat
    public function create()
    {
        return view('sertifikat.create');
    }

    // Menyimpan sertifikat ke database
    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            'judul' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'jenis_course' => 'required|string|max:255',
            'nilai' => 'nullable|integer|min:0|max:100', // Pastikan nilai antara 0-100
        ]);

        // Simpan ke database
        Sertifikat::create([
            'judul' => $request->judul,
            'nama' => $request->nama,
            'tanggal' => $request->tanggal,
            'jenis_course' => $request->jenis_course,
            'nilai' => $request->nilai ?? 0, // Jika tidak ada input nilai, set default 0
        ]);

        return redirect()->route('sertifikat.index')->with('success', 'Sertifikat berhasil ditambahkan.');
    }

    // Menampilkan sertifikat tertentu berdasarkan ID
    public function show($id)
    {
        $sertifikat = Sertifikat::findOrFail($id);
        return view('sertifikat.show', compact('sertifikat'));
    }

    // Menampilkan form edit sertifikat
    public function edit($id)
    {
        $sertifikat = Sertifikat::findOrFail($id);
        return view('sertifikat.edit', compact('sertifikat'));
    }

    // Memperbarui data sertifikat di database
    public function update(Request $request, $id)
    {
        // Validasi data
        $request->validate([
            'judul' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'jenis_course' => 'required|string|max:255',
            'nilai' => 'nullable|integer|min:0|max:100',
        ]);

        // Update data
        $sertifikat = Sertifikat::findOrFail($id);
        $sertifikat->update([
            'judul' => $request->judul,
            'nama' => $request->nama,
            'tanggal' => $request->tanggal,
            'jenis_course' => $request->jenis_course,
            'nilai' => $request->nilai ?? 0,
        ]);

        return redirect()->route('sertifikat.index')->with('success', 'Sertifikat berhasil diperbarui.');
    }

    // Menghapus sertifikat dari database
    public function destroy($id)
    {
        $sertifikat = Sertifikat::findOrFail($id);
        $sertifikat->delete();

        return redirect()->route('sertifikat.index')->with('success', 'Sertifikat berhasil dihapus.');
    }
}
