        <!-- Nav Bar Start -->
        <div class="navbar navbar-expand-lg bg-light navbar-light">
            <div class="container-fluid">
                <a href="{{ route('index') }}" class="navbar-brand">
                    {{-- Anuttara <span>Resto</span> --}}
                    <img src="{{ url('/img/merah_motif.png') }}" alt="">
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto">
                        <a style="font-family: Montserrat;" href="{{ route('index') }}" class="nav-item nav-link active">Home</a>
                        <a style="font-family: Montserrat;" href="/#about" class="nav-item nav-link">About</a>
                        {{-- <a href="feature.html" class="nav-item nav-link">Feature</a> --}}
                        <a style="font-family: Montserrat;" href="{{ route('gallery') }}" class="nav-item nav-link">Gallery</a>
                        <a style="font-family: Montserrat;" href="{{ route('menu') }}" class="nav-item nav-link">Menu</a>
                        <a style="font-family: Montserrat;" href="{{ route('reservasi') }}" class="nav-item nav-link">Reservation</a>
                        {{-- <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu">
                                <a href="blog.html" class="dropdown-item">Blog Grid</a>
                                <a href="single.html" class="dropdown-item">Blog Detail</a>
                            </div>
                        </div> --}}
                        <a style="font-family: Montserrat;" href="{{ route('kontak') }}" class="nav-item nav-link">Contact</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Nav Bar End -->
