@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card mt-5 shadow-sm">
            <div class="card-header bg-white text-center">
                <h4 class="mb-0">Register Pelanggan</h4>
            </div>
            <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <form action="{{ route('pelanggan.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" id="nama" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}" required>
                        @error('nama')    
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required>
                        @error('email')    
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" required>
                        @error('password')    
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="no_telp" class="form-label">No Telp</label>
                        <input type="text" id="no_telp" name="no_telp" class="form-control @error('no_telp') is-invalid @enderror" value="{{ old('no_telp') }}" required>
                        @error('no_telp')    
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <textarea id="alamat" name="alamat" class="form-control @error('alamat') is-invalid @enderror" rows="3" required>{{ old('alamat') }}</textarea>
                        @error('alamat')    
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Register</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

<style>
    .card {
        border: none;
        border-radius: 0.75rem;
    }
    .form-control {
        border-radius: 0.5rem;
    }
    .btn-primary {
        border-radius: 0.5rem;
        background-color: #007bff;
        border: none;
        padding: 0.75rem;
        font-size: 1rem;
    }
    .btn-primary:hover {
        background-color: #0056b3;
    }
    .card-header {
        background: none;
        border-bottom: none;
        padding-bottom: 0;
    }
    .card-body {
        padding: 2rem;
    }
    .form-label {
        font-weight: 500;
    }
</style>
