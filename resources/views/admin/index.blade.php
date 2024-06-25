<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Parabot Ulin</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            display: flex;
        }
        .sidebar {
            width: 250px;
            height: 100vh;
            background-color: #343a40;
            color: #fff;
            padding-top: 20px;
            display: flex;
            flex-direction: column;
        }
        .sidebar a {
            color: #fff;
            padding: 15px;
            text-decoration: none;
            display: block;
        }
        .sidebar a:hover {
            background-color: #007bff;
        }
        .logout {
            margin-top: auto;
            padding: 15px;
            text-align: center;
        }
        .logout button {
            background-color: #154577;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }
        .logout button:hover {
            background-color: #0056b3;
        }
        .content {
            flex: 1;
            padding: 20px;
        }
        .current-date {
            text-align: right;
            margin-bottom: 20px;
        }
        .content-section {
            display: none;
        }
        .content-section.active {
            display: block;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2 class="text-center">Admin Panel</h2>
        <a href="#" data-target="#laporan-keuangan" class="menu-link">Laporan Keuangan</a>
        <a href="#" data-target="#tambah-alat" class="menu-link">Tambah Alat</a>
        <div class="logout">
            <form action="{{ route('admin.logout') }}" method="POST">
                @csrf
                <button type="submit">Logout</button>
            </form>
        </div>
    </div>
    <div class="content">
        <div class="current-date">
            <span id="current-date"></span>
        </div>
        <div id="laporan-keuangan" class="content-section active">
            <h2>Laporan Keuangan</h2>
            <div class="financial-report">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Tanggal Masuk</th>
                            <th>Uang Masuk</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($bookings as $booking)
                            <tr>
                                <td>{{ $booking->date }}</td>
                                <td>{{ number_format($booking->total_harga, 2) }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="total-income">
                    <h3>Total Pemasukan: {{ number_format($totalIncome, 2) }}</h3>
                </div>
            </div>
        </div>
        <div id="tambah-alat" class="content-section">
            <h2>Tambah Alat</h2>
            <!-- Konten Tambah Alat -->
            <form action="{{ route('admin.alat.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="nama_alat">Nama Alat:</label>
                    <input type="text" class="form-control" id="nama_alat" name="nama_alat" required>
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi:</label>
                    <textarea class="form-control" id="deskripsi" name="deskripsi" required></textarea>
                </div>
                <div class="form-group">
                    <label for="harga_sewa_per_hari">Harga Sewa per Hari:</label>
                    <input type="number" step="0.01" class="form-control" id="harga_sewa_per_hari" name="harga_sewa_per_hari" required>
                </div>
                <div class="form-group">
                    <label for="kategori_id">Kategori:</label>
                    <select class="form-control" id="kategori_id" name="kategori_id">
                        @foreach($kategori as $kat)
                        <option value="{{ $kat->id }}">{{ $kat->nama_kategori }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="status">Status:</label>
                    <select class="form-control" id="status" name="status">
                        <option value="tersedia">Tersedia</option>
                        <option value="tidak tersedia">Tidak Tersedia</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="image">Foto Alat:</label>
                    <input type="file" class="form-control-file" id="image" name="image" required>
                </div>
                <button type="submit" class="btn btn-primary">Tambah Alat</button>
            </form>
        </div>
    </div>
    <script>
        // JavaScript untuk menampilkan tanggal saat ini
        document.addEventListener('DOMContentLoaded', function() {
            const dateElement = document.getElementById('current-date');
            const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
            const today = new Date().toLocaleDateString('id-ID', options);
            dateElement.textContent = today;
        });

        // JavaScript untuk menampilkan konten berdasarkan menu yang dipilih
        document.querySelectorAll('.menu-link').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                document.querySelectorAll('.content-section').forEach(section => {
                    section.classList.remove('active');
                });
                document.querySelector(this.getAttribute('data-target')).classList.add('active');
            });
        });
    </script>
</body>
</html>
