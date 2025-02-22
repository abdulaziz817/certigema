@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Sertifikat</h2>
    <form action="{{ route('sertifikat.update', $sertifikat->id) }}" method="POST">
        @csrf @method('PUT')
        <div class="form-group">
            <label>Judul</label>
            <input type="text" name="judul" class="form-control" value="{{ $sertifikat->judul }}" required>
        </div>
        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ $sertifikat->nama }}" required>
        </div>
        <div class="form-group">
            <label>Tanggal</label>
            <input type="date" name="tanggal" class="form-control" value="{{ $sertifikat->tanggal }}" required>
        </div>
        <div class="form-group">
            <label>Jenis Course</label>
            <input type="text" name="jenis_course" class="form-control" value="{{ $sertifikat->jenis_course }}" required>
        </div>
        <button type="submit" class="btn btn-primary mt-2">Update</button>
    </form>
</div>
@endsection
