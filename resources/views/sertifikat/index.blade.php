@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Daftar Sertifikat</h2>
    <a href="{{ route('sertifikat.create') }}" class="btn btn-primary">Tambah Sertifikat</a>

    @if ($sertifikats->isEmpty())
        <div class="alert alert-warning mt-3">Belum ada sertifikat yang tersedia.</div>
    @else
        <table class="table mt-3">
            <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Nama</th>
                <th>Jenis Course</th>
                <th>Aksi</th>
            </tr>
            @foreach ($sertifikats as $sertifikat)
            <tr>
                <td>{{ $sertifikat->id }}</td>
                <td>{{ $sertifikat->judul }}</td>
                <td>{{ $sertifikat->nama }}</td>
                <td>{{ $sertifikat->jenis_course }}</td>
                <td>
                    <a href="{{ route('sertifikat.show', $sertifikat->id) }}" class="btn btn-info btn-sm">Detail</a>
                    <a href="{{ route('sertifikat.edit', $sertifikat->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('sertifikat.destroy', $sertifikat->id) }}" method="POST" style="display:inline;">
                        @csrf @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus sertifikat ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    @endif
</div>
@endsection
