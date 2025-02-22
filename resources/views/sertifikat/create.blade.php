@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card shadow-lg border-0 rounded-4 p-5" style="max-width: 800px; margin: auto; background: linear-gradient(135deg, #fff, #f9f9f9); box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);">
        <h2 class="text-center text-dark font-weight-bold mb-4" style="font-size: 2rem;">Tambah Sertifikat</h2>
        <hr class="border border-dark w-50 mx-auto" style="border-width: 2px;">
        <form action="{{ route('sertifikat.store') }}" method="POST">
            @csrf

            <div class="form-group mb-3">
                <label class="fw-bold">Judul</label>
                <input type="text" name="judul" class="form-control border-2 rounded-3" required>
            </div>

            <div class="form-group mb-3">
                <label class="fw-bold">Nama</label>
                <input type="text" name="nama" class="form-control border-2 rounded-3" required>
            </div>

            <div class="form-group mb-3">
                <label class="fw-bold">Tanggal</label>
                <input type="date" name="tanggal" class="form-control border-2 rounded-3" required>
            </div>

            <div class="form-group mb-4">
                <label class="fw-bold">Jenis Course</label>
                <input type="text" name="jenis_course" class="form-control border-2 rounded-3" required>
            </div>

            <div class="text-center">
                <button type="submit" class="btn text-white px-5 py-3 fw-bold"
                    style="border-radius: 30px; background: linear-gradient(45deg, #b8860b, #ffd700); border: 2px solid gold; font-size: 18px; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);">
                    Simpan
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
