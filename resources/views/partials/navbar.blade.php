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
            </div>
        </nav>
        </div>
    </header>
    <!-- end header section -->
    </div>