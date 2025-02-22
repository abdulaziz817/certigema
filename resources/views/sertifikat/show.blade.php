@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Detail Sertifikat</h2>
    <p><strong>Judul:</strong> {{ $sertifikat->judul }}</p>
    <p><strong>Nama:</strong> {{ $sertifikat->nama }}</p>
    <p><strong>Tanggal:</strong> {{ $sertifikat->tanggal }}</p>
    <p><strong>Jenis Course:</strong> {{ $sertifikat->jenis_course }}</p>
    <p><strong>Materi:</strong> {{ $sertifikat->materi }}</p>
    <p><strong>Nilai:</strong> {{ $sertifikat->nilai }}</p>
    <p><strong>Keterangan:</strong> {{ $sertifikat->keterangan }}</p>
    <a href="{{ route('sertifikat.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection
