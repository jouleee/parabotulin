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

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
  <!-- Custom CSS -->
  <style>
    .card {
      display: flex;
      flex-direction: column;
    }
    .card-body {
      flex: 1;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }
  </style>
</head>

<body class="sub_page">
  @include('partials.navbar')
  <br>

  <div class="container">
    <div class="row">
      @foreach ($data as $item)    
        <div class="col-md-3">
          <div class="card">
            <img src="images/{{ $item->nama_kategori }}.png" class="card-img-top" alt="Backpack">
            <div class="card-body">
              <h5 class="card-title">{{ $item->nama_kategori }}</h5>
              <p class="card-text">{{ $item->deskripsi }}</p>
              <a href="{{ route('kategori.show', ['nama_kategori' => $item->nama_kategori]) }}" class="btn btn-info">View More</a>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
  
  <br>
  @include('partials.info')

  <!-- footer section -->
  <section class="container-fluid footer_section">
    <p>&copy; 2020 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a> Distributed By <a href="https://themewagon.com">ThemeWagon</a></p>
  </section>
  <!-- footer section -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>

</body>

</html>
