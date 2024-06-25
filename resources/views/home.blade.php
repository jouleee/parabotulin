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
  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <style>
    .testimonial-form {
    padding: 30px;
    border-radius: 10px;
    margin-top: 50px;
    }

    .testimonial-form h3 {
        margin-bottom: 20px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    label {
        display: block;
        margin-bottom: 5px;
    }

    input[type="text"],
    textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

  </style>

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
          <a class="navbar-brand" href="{{ Route('home') }}">
            <span>
              ParabotUlin
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="{{ Route('home') }}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ Route('collection') }}"> Collection </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ Route('booking.create') }}"> Booking </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ Route('bookings.show') }}"> My Chart </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="https://www.instagram.com/juliandwii/" target="_blank">Contact</a>
                </li>
              </ul>
              @auth
                <div class="user_option">
                    <form action="{{ Route('logout') }}" method="post">
                      @csrf
                      <button type="submit" class="btn btn-outline-light">Logout</button>
                    </form>
                </div>
              @else    
                <div class="user_option">
                  <a href="{{ Route('login') }}">
                    <img src="images/user.png" alt="">
                  </a>
                </div>
              @endauth
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class=" slider_section position-relative">
      <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row">
                <div class="col">
                  <div class="detail-box">
                    <div>
                      <h2>
                        Welcome To

                      </h2>
                      <h1>
                        Parabot Ulin!
                      </h1>
                      <p>
                        Rasakan kemudahan dalam menyewa peralatan kemah.
                      </p>
                      <div class="">
                        <a href="{{ Route('booking.create') }}">
                          Booking Sekarang
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col">
                  <div class="detail-box">
                    <div>
                      <h2>
                        welcome To

                      </h2>
                      <h1>
                        Parabot Ulin!
                      </h1>
                      <p>
                        Sewa peralatan kemah terbaik dan jadikan setiap momen di alam terbuka lebih berkesan.
                      </p>
                      <div class="">
                        <a href="{{ Route('booking.create') }}">
                          Booking Sekarang
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col">
                  <div class="detail-box">
                    <div>
                      <h2>
                        welcome To

                      </h2>
                      <h1>
                        Parabot Ulin!
                      </h1>
                      <p>
                        Kami menyediakan peralatan kemah lengkap dan berkualitas tinggi untuk kebutuhan petualangan anda.
                      </p>
                      <div class="">
                        <a href="{{ Route('booking.create') }}">
                          Booking Sekarang
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>
    <!-- end slider section -->
  </div>

  <!-- do section -->

  <section class="do_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Koleksi Kami
        </h2>
        <p>
          Mulai dari tenda, sleeping bag, hingga alat masak, semuanya tersedia di sini!
        </p>
      </div>
      <div class="do_container">
        <div class="box arrow-start arrow_bg">
          <div class="img-box">
            <img src="images/d-1.png" alt="">
          </div>
          <div class="detail-box">
            <a href="/kategori/backpack">
              Backpack
            </a>
          </div>
        </div>
        <div class="box arrow-middle arrow_bg">
          <div class="img-box">
            <img src="images/d-2.png" alt="">
          </div>
          <div class="detail-box">
            <a href="/kategori/sepatu">
              Sepatu
            </a>
          </div>
        </div>
        <div class="box arrow-middle arrow_bg">
          <div class="img-box">
            <img src="images/d-3.png" alt="">
          </div>
          <div class="detail-box">
            <a href="/kategori/tenda">
              Tenda
            </a>
          </div>
        </div>
        <div class="box arrow-end arrow_bg">
          <div class="img-box">
            <img src="images/d-4.png" alt="">
          </div>
          <div class="detail-box">
            <a href="/kategori/cooking%20set">
              Cooking Set
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end do section -->

  <!-- who section -->

  <section class="who_section ">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <div class="img-box">
            <img src="images/who-img.png" alt="">
          </div>
        </div>
        <div class="col-md-7">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                Tentang Kami
              </h2>
            </div>
            <p>
              <b>ParabotUlin</b> adalah penyedia layanan sewa peralatan kemah yang berdedikasi untuk memudahkan petualangan Anda di alam terbuka. 
              Kami memahami bahwa persiapan untuk berkemah bisa jadi menantang, terutama jika Anda tidak memiliki peralatan yang tepat. 
              Oleh karena itu, kami hadir untuk menyediakan solusi praktis dan terjangkau bagi para pecinta alam.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end who section -->


  <!-- work section -->
  <section class="work_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Jejak Parabot Ulin
        </h2>
        <p>
          "Parabot Ulin dengan bangga telah menemani ratusan kelompok pendaki dalam petualangan mereka ke gunung-gunung di seluruh Indonesia. 
          Dengan menyediakan peralatan berkualitas dan layanan yang terpercaya, Parabot Ulin menjadi mitra setia bagi para pendaki yang 
          ingin menikmati keindahan alam dengan aman dan nyaman."
        </p>
      </div>
      <div class="work_container layout_padding2">
        <div class="box b-1">
          <img src="images/w-1.png" alt="">
        </div>
        <div class="box b-2">
          <img src="images/w-2.png" alt="">

        </div>
        <div class="box b-3">
          <img src="images/w-3.png" alt="">

        </div>
        <div class="box b-4">
          <img src="images/w-4.png" alt="">

        </div>
      </div>
    </div>
  </section>

  <!-- end work section -->

  <!-- client section -->
  <section class="client_section">
    <div class="container">
        <div class="heading_container">
            <h2>Testimoni Pelanggan</h2>
        </div>
        <div class="carousel-wrap">
            <div class="owl-carousel">
                @foreach($testimoni as $testimonial)
                    <div class="item">
                        <div class="box">
                            <div class="detail-box">
                                <h5 class="nama">{{ $testimonial->nama }}</h5>
                                <img src="images/quote.png" alt="">
                                <p class="pesan">{{ $testimonial->pesan }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<!-- Form testimoni -->
<section class="testimonial-form">
    <div class="container">
        <h3>Tambah Testimoni</h3>
        <form action="{{ route('testimoni.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="pesan">Pesan:</label>
                <textarea id="pesan" name="pesan" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-outline-dark">Kirim</button>
        </form>
    </div>
</section>
<br>

  <!-- target section -->
  <section class="target_section layout_padding2">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <div class="detail-box">
            <h2>
              1000+
            </h2>
            <h5>
              Peralatan Outdoor Terbaik
            </h5>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="detail-box">
            <h2>
              50+
            </h2>
            <h5>
              Puncak Gunung Indonesia
            </h5>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="detail-box">
            <h2>
              500+
            </h2>
            <h5>
              Testimoni Baik 
            </h5>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="detail-box">
            <h2>
              1000+
            </h2>
            <h5>
              Teman Pendakian
            </h5>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end target section -->


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