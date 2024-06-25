<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .card {
            border: none;
            border-radius: 1rem;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
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
        }
        .card-header h4 {
            font-weight: 700;
        }
        .card-body {
            padding: 2rem;
        }
        .form-label {
            font-weight: 500;
        }
        small {
            display: block;
            text-align: center;
            margin-top: 1rem;
        }
        small a {
            color: #007bff;
            text-decoration: none;
        }
        small a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h4>Login</h4>
                    </div>
                    <div class="card-body">
                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required autofocus>
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required>
                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Login</button>
                        </form>
                        <small>Belum Registrasi? <a href="{{ route('pelanggan.create') }}">Registrasi Sekarang!</a></small>
                        <small><a href="{{ route('admin.login') }}">Login Admin!</a></small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
