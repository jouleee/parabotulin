<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>ParabotUlin - Kategori {{ $nama_kategori }}</title>
  <link rel="icon" type="image/png" href="images/icon.png">

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" />

  <style>
    .card {
      display: flex;
      flex-direction: column;
      margin-bottom: 20px;
    }

    .card-body {
      flex: 1;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }

    .badge-custom {
        font-size: 14px;
        padding: 5px 10px;
        border-radius: 5px;
    }

    .badge-tersedia {
        background-color: #28a745;
        color: white;
    }

    .badge-tidak-tersedia {
        background-color: #dc3545;
        color: white;
    }

    .btn-booking {
        background-color: #007bff;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        transition: background-color 0.3s;
    }

    .btn-booking:hover {
        background-color: #0056b3;
    }
  </style>
</head>

<body class="sub_page">
  @include('partials.navbar')

  <!-- do section -->
  <section class="do_section layout_padding">
    <div class="container">
      <h2>Kategori: {{ $nama_kategori }}</h2>
      <div class="row">
        @foreach ($data as $item)
        <div class="col-md-3">
            <div class="card">
                <img src="{{ asset('images/' . $item->nama_alat . '.png') }}" class="card-img-top" alt="{{ $item->nama_kategori }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $item->nama_alat }}</h5>
                    <p class="card-text">{{ $item->deskripsi }}</p>
                    <p class="card-text">Harga Sewa per Hari: Rp{{ number_format($item->harga_sewa_per_hari, 0, ',', '.') }}</p>
                    @if ($item->status == 'tersedia')
                        <span class="badge badge-custom badge-tersedia">Tersedia</span>
                        <a href="{{ Route('booking.create') }}" class="btn btn-booking mt-2">Booking Now</a>
                    @else
                        <span class="badge badge-custom badge-tidak-tersedia">Disewa</span>
                    @endif
                </div>
            </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>

  <!-- end do section -->

  @include('partials.info')

  <!-- footer section -->
  <section class="container-fluid footer_section">
    <p>
      &copy; 2020 All Rights Reserved By
      <a href="https://html.design/">Free Html Templates</a>
      Distrubuted By <a href="https://themewagon.com">ThemeWagon</a>
    </p>
  </section>
  <!-- footer section -->

  <script type="text/javascript" src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <!-- owl carousel script -->
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
  </script>
  <!-- end owl carousel script -->

</body>

</html>
