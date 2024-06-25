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

  <title>Parabot Ulin - Pusat Sewa Kebutuhan Outdoor</title>
  <link rel="icon" type="image/png" href="images/icon.png">

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <style>
    .status-label {
      padding: 5px 10px;
      border-radius: 5px;
      color: #fff;
      text-align: center;
      display: inline-block;
      min-width: 80px;
    }

    .status-disewa {
      background-color: red;
    }

    .status-dikembalikan {
      background-color: green;
    }

    .status-dibatalkan {
      background-color: gray;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin: 20px 0;
      font-size: 1em;
      min-width: 400px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
    }

    thead tr {
      background-color: #3d3d3d;
      color: #ffffff;
      text-align: left;
      font-weight: bold;
    }

    th,
    td {
      padding: 12px 15px;
    }

    tbody tr {
      border-bottom: 1px solid #000000;
    }

    tbody tr:nth-of-type(even) {
      background-color: #f3f3f3;
    }

    tbody tr:last-of-type {
      border-bottom: 2px solid #009879;
    }

    tbody tr.active-row {
      font-weight: bold;
      color: #009879;
    }
  </style>

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body class="sub_page">
  @include('partials.navbar')

  <!-- contact section -->

  <section class="contact_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>Daftar Penyewaan Anda</h2>
        <p>Berikut adalah daftar penyewaan alat outdoor Anda</p>
      </div>

      <table class="table table-bordered">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Alat</th>
            <th>Total Harga</th>
            <th>Tanggal Mulai</th>
            <th>Tanggal Selesai</th>
            <th>Status</th>
            <th>Tanggal Dibuat</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          @if($bookings->isEmpty())
          <tr>
            <td colspan="8" class="text-center">Belum melakukan penyewaan, silahkan lakukan pada laman booking</td>
          </tr>
          @else
          @foreach($bookings as $booking)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $booking->alat->nama_alat }}</td>
            <td>{{ $booking->total_harga }}</td>
            <td>{{ $booking->tanggal_mulai }}</td>
            <td>{{ $booking->tanggal_selesai }}</td>
            <td>
              @if($booking->status === 'disewa')
              <span class="status-label status-disewa">Disewa</span>
              @elseif($booking->status === 'dikembalikan')
              <span class="status-label status-dikembalikan">Dikembalikan</span>
              @else
              <span class="status-label status-dibatalkan">Dibatalkan</span>
              @endif
            </td>
            <td>{{ $booking->created_at }}</td>
            <td>
              @if($booking->status === 'disewa')
              <form action="{{ route('bookings.return', $booking->id) }}" method="POST">
                @csrf
                @method('PATCH')
                <button type="submit" class="btn btn-success btn-sm">Kembalikan</button>
              </form>
              @endif
            </td>
          </tr>
          @endforeach
          @endif
        </tbody>
      </table>
    </div>
  </section>

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

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- owl carousel script 
    -->
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
