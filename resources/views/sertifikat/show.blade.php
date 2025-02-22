@extends('layouts.app')

@section('content')
<div class="container mt-5 d-flex justify-content-center">
    <div class="certificate card shadow-lg p-5 border border-gold rounded-4 position-relative bg-white w-100"
        style="max-width: 1000px; border: 15px solid gold; padding: 60px; position: relative; background: url('{{ asset('images/watermark.png') }}') center/contain no-repeat; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);">

        <div class="watermark position-absolute w-100 h-100 d-flex justify-content-center align-items-center"
            style="top: 0; left: 0; z-index: 0; opacity: 0.1; font-size: 7rem; font-weight: bold; color: #000; transform: rotate(-30deg); pointer-events: none;">
            Gema Foundation
        </div>

        <div class="text-center mb-5" style="position: relative; z-index: 1;">
            <img src="https://www.gaeni.org/assets/img/logo/gema.png" alt="Logo" class="mb-4" style="width: 328px;">
            <h1 class="text-dark font-weight-bold text-uppercase"
                style="letter-spacing: 3px; font-size: 3rem; text-shadow: 4px 4px 8px rgba(0, 0, 0, 0.2);">
                Sertifikat Penghargaan
            </h1>
            <hr class="border border-dark w-50 mx-auto" style="border-width: 4px;">
        </div>

        <h2 class="text-center text-dark fw-bold" style="font-size: 2rem;">Diberikan kepada</h2>
        <h3 class="text-center text-dark font-weight-bold mt-4" style="font-size: 2.5rem; color: #b8860b;">
            {{ $sertifikat->nama }}
        </h3>

        <p class="text-center text-dark mt-4" style="font-size: 20px;">
            Atas dedikasi dan partisipasinya dalam pelatihan <strong>{{ $sertifikat->jenis_course }}</strong>
            yang diselenggarakan oleh <strong>Gema Foundation</strong>
        </p>

        <p class="text-center text-muted mt-3" style="font-size: 16px;">Diterbitkan pada {{ $sertifikat->tanggal }}</p>

        <div class="signature d-flex justify-content-between mt-5 px-5">
            <div class="text-center">
                <hr class="border border-dark w-75 mx-auto" style="border-width: 3px;">
                <p class="text-dark font-weight-bold">Ketua Panitia</p>
            </div>
            <div class="text-center">
                <hr class="border border-dark w-75 mx-auto" style="border-width: 3px;">
                <p class="text-dark font-weight-bold">Direktur Program</p>
            </div>
        </div>

        <div class="text-center mt-5">
            <a href="{{ route('sertifikat.download', $sertifikat->id) }}" class="btn btn-dark mt-4 px-5 py-3 fw-bold"
                style="border-radius: 40px; background: linear-gradient(45deg, #b8860b, #ffd700); color: black; border: 3px solid gold; font-size: 18px; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);">
                Download Sertifikat
            </a>
        </div>


        <div class="text-center mt-4">
            <a href="{{ route('sertifikat.index') }}"
                class="btn btn-outline-dark px-5 py-3 fw-bold"
                style="border-radius: 40px; border: 3px solid gold; font-size: 18px;">
                Kembali
            </a>
        </div>
    </div>
</div>
@endsection
