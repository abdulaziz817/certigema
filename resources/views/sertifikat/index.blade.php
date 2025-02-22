@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Daftar Sertifikat</h2>
    <a href="{{ route('sertifikat.create') }}" class="btn btn-primary">Tambah Sertifikat</a>
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
                <a href="{{ route('sertifikat.show', $sertifikat->id) }}" class="btn btn-info">Detail</a>
                <a href="{{ route('sertifikat.edit', $sertifikat->id) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('sertifikat.destroy', $sertifikat->id) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button class="btn btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
