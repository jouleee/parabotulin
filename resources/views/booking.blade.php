<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Parabot Ulin - Pusat Sewa Kebutuhan Outdoor</title>
    <link rel="icon" type="image/png" href="images/icon.png">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- Responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />
    <style>
        .form-container {
            background-color: #f4f4f4;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-group label {
            font-weight: bold;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .heading_container h2 {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .heading_container p {
            font-size: 16px;
            color: #6c757d;
        }
    </style>
</head>

<body class="sub_page">
    @include('partials.navbar')

    <section class="work_section layout_padding">
        <div class="container">
            <div class="heading_container">
                <h2>Form Booking Barang Alat Outdoor</h2>
                <p>Isi form di bawah ini untuk melakukan booking peralatan outdoor Anda</p>
            </div>
            <div class="form-container">
                <form action="{{ route('booking.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="kategori_alat">Kategori Alat</label>
                        <select class="form-control" id="kategori_alat" name="kategori_alat" required>
                            <option value="">Pilih Kategori</option>
                            @foreach ($kategori_alat as $kategori)
                                <option value="{{ $kategori->id }}">{{ $kategori->nama_kategori }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="alat">Alat</label>
                        <select class="form-control" id="alat" name="alat_id" required>
                            <option value="">Pilih Alat</option>
                            <!-- Alat akan diisi menggunakan JavaScript -->
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tanggal_mulai">Tanggal Mulai</label>
                        <input type="date" class="form-control" id="tanggal_mulai" name="tanggal_mulai" required>
                    </div>
                    <div class="form-group">
                        <label for="tanggal_selesai">Tanggal Selesai</label>
                        <input type="date" class="form-control" id="tanggal_selesai" name="tanggal_selesai" required>
                    </div>
                    <div class="form-group">
                        <label for="total_harga">Total Harga</label>
                        <input type="text" class="form-control" id="total_harga" name="total_harga" readonly>
                    </div>
                    <input type="hidden" name="pelanggan_id" value="{{ auth()->user()->id }}">
                    <button type="submit" class="btn btn-primary btn-block">Booking Now</button>
                </form>
            </div>
        </div>
    </section>

    @include('partials.info')

    <section class="container-fluid footer_section">
        <p>&copy; 2020 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a> Distributed By <a href="https://themewagon.com">ThemeWagon</a></p>
    </section>

    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script type="text/javascript">
        $(".owl-carousel").owlCarousel({
            loop: true,
            margin: 0,
            navText: [],
            center: true,
            autoplay: true,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                },
                1000: {
                    items: 3
                }
            }
        });

        document.addEventListener('DOMContentLoaded', function () {
            document.getElementById('kategori_alat').addEventListener('change', function () {
                let kategoriId = this.value;
                if (kategoriId) {
                    fetch(`/getAlatByKategori/${kategoriId}`)
                        .then(response => response.json())
                        .then(data => {
                            let alatSelect = document.getElementById('alat');
                            alatSelect.innerHTML = '<option value="">Pilih Alat</option>';
                            data.forEach(alat => {
                                if (alat.status === 'tersedia') {
                                    alatSelect.innerHTML += `<option value="${alat.id}" data-harga="${alat.harga_sewa_per_hari}">${alat.nama_alat}</option>`;
                                }
                            });
                        });
                } else {
                    document.getElementById('alat').innerHTML = '<option value="">Pilih Alat</option>';
                }
            });

            document.getElementById('tanggal_mulai').addEventListener('change', calculateTotalHarga);
            document.getElementById('tanggal_selesai').addEventListener('change', calculateTotalHarga);
            document.getElementById('alat').addEventListener('change', calculateTotalHarga);

            function calculateTotalHarga() {
                let alatSelect = document.getElementById('alat');
                let hargaPerHari = alatSelect.selectedOptions[0]?.getAttribute('data-harga');
                let tanggalMulai = new Date(document.getElementById('tanggal_mulai').value);
                let tanggalSelesai = new Date(document.getElementById('tanggal_selesai').value);

                if (hargaPerHari && tanggalMulai && tanggalSelesai && tanggalMulai <= tanggalSelesai) {
                    let diffTime = Math.abs(tanggalSelesai - tanggalMulai);
                    let diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24)) + 1; // Including both start and end date
                    let totalHarga = hargaPerHari * diffDays;
                    document.getElementById('total_harga').value = totalHarga;
                } else {
                    document.getElementById('total_harga').value = '';
                }
            }
        });
    </script>
</body>

</html>
