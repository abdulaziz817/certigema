@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card shadow-lg border-0 rounded-4 p-5" style="max-width: 1200px; margin: auto; background: linear-gradient(135deg, #ffffff, #f3f3f3); box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2); border: 3px solid #ccc;">
        <h2 class="text-center text-dark font-weight-bold mb-4" style="font-size: 3rem; letter-spacing: 2px; text-transform: uppercase;">Daftar Sertifikat</h2>
        <hr class="border border-dark w-50 mx-auto" style="border-width: 4px;">
        <p class="text-center text-muted mb-4" style="font-size: 18px;">Daftar sertifikat yang telah dikeluarkan oleh Gema Foundation</p>
        <div class="text-center mb-4">
            <a href="{{ route('sertifikat.create') }}" class="btn text-white px-5 py-3 fw-bold shadow-lg btn-animated">
                + Tambah Sertifikat
            </a>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered table-hover rounded shadow-lg text-center" style="border-radius: 15px; overflow: hidden; font-size: 18px;">
                <thead class="bg-gradient" style="background: linear-gradient(45deg, #343a40, #212529); color: #fff;">
                    <tr>
                        <th>ID</th>
                        <th>Judul</th>
                        <th>Nama</th>
                        <th>Jenis Course</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sertifikats as $sertifikat)
                    <tr class="hover-effect">
                        <td class="fw-bold">{{ $sertifikat->id }}</td>
                        <td>{{ $sertifikat->judul }}</td>
                        <td>{{ $sertifikat->nama }}</td>
                        <td>{{ $sertifikat->jenis_course }}</td>
                        <td>
                            <a href="{{ route('sertifikat.show', $sertifikat->id) }}" class="btn btn-info btn-lg px-4">Detail</a>
                            <a href="{{ route('sertifikat.edit', $sertifikat->id) }}" class="btn btn-warning btn-lg px-4">Edit</a>
                            <form action="{{ route('sertifikat.destroy', $sertifikat->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Apakah Anda yakin ingin menghapus sertifikat ini?');">
                                @csrf @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-lg px-4">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="text-center mt-4">
            <p class="text-muted" style="font-size: 16px;">Jika ada pertanyaan, silakan hubungi <a href="#" class="text-primary">admin</a>.</p>
        </div>
    </div>
</div>

<style>
    .btn-animated {
        border-radius: 30px;
        background: linear-gradient(45deg, #28a745, #218838);
        border: 3px solid #1e7e34;
        font-size: 20px;
        transition: 0.3s ease-in-out;
    }
    .btn-animated:hover {
        transform: scale(1.05);
        box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.2);
    }
    .hover-effect:hover {
        background: #e9ecef !important;
        transition: 0.3s ease-in-out;
    }
</style>
@endsection
