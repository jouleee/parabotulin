@extends('layouts.app')
@include('partials.navbar')

@section('content')
<div class="container">
    <h1>{{ $kategori->nama_kategori }}</h1>
    <p>{{ $kategori->deskripsi }}</p>

    <h2>Daftar Alat</h2>
    <div class="row">
        @foreach ($kategori->alat as $alat)
            <div class="col-md-3">
                <div class="card">
                    <img src="images/alat/{{ $alat->nama_alat }}.png" class="card-img-top" alt="{{ $alat->nama_alat }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $alat->nama_alat }}</h5>
                        <p class="card-text">{{ $alat->deskripsi }}</p>
                        <p class="card-text">Harga Sewa: Rp {{ number_format($alat->harga_sewa_per_hari, 2) }} per hari</p>
                        <p class="card-text">Stok: {{ $alat->stok }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
