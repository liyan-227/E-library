@extends('layouts.landing')
@section('content')
    
    <!-- Mashead header-->
    <header class="masthead mb-5" id="beranda">
        <div class="container px-3" style="background-image:url({{asset('img/Pattern-01.png')}}); border-radius: 48px;">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6">
                    <!-- Mashead text and app badges-->
                    <div class="mb-2 mb-lg-0 text-center text-lg-start">
                        <h1 class="display-1 lh-1 mb-5" style="color: #004634; font-family: Cormorant;">PERPUSTAKAAN STIDKI AL HAMIDY</h1>
                        <p class="lead fw-normal text-muted mb-5" style="font-family: Poppins;">Dengan e-perpustakaan, mahasiswa atau dosen dapat mencari, membaca, dan mengunduh buku-buku digital sesuai dengan kebutuhan mereka. Web e-perpustakaan juga memberikan kemudahan bagi para pustakawan. Mereka dapat dengan mudah mengelola dan memantau peminjaman buku-buku serta mengelola data inventaris perpustakaan.</p>
                        <div class="d-flex flex-column flex-lg-row align-items-center">
                            <a class="button text-decoration-none text-center text-white pt-2" href="#E-perpus">Explore Perpustakaan <i class="bi bi-arrow-right" ;></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- slider image -->
                    <div class="carousel slide col-sm-4 col-l-6 col-sm-12 ms-lg-5" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{asset('img/buku.png')}}" class="d-block w-100 " alt="buku" style="border-radius:48px;">
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('img/coba.png')}}" class="d-block w-100 " alt="..." style="border-radius: 48px;">
                            </div>
                            <div class="carousel-item ">
                                <img src="{{asset('img/coba2.png')}}" class="d-block w-100 " alt="..." style="border-radius: 48px;">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">

                        </button>
                        <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">

                        </button>
                    </div>
                    <!-- card gambar-->
                    <div class="cardback">
                        <div class="cardbackground">
                            <div class="cardlogo text-left text-muted">
                                <img class="imagecard " src="{{asset('img/logo card.png')}}" alt="logo">
                                <p class="teks"><br>Temukan banyak Buku dan Kitab dengan cara yang mudah</p>
                            </div>
                        </div>
                        <div class="cardbackground2">
                            <div class="cardlogo text-left text-muted">
                                <img class="imagecard" src="{{asset('img/logo card2.png')}}" alt="logo">
                                <p class="teks"><br>Dapatkan banyak sumber literasi yang ingin anda temukan</p>
                            </div>
                        </div>
                        <!--tutup card gambar -->
                        <!-- tutup slider -->
                    </div>
                </div>
    </header>
    <!-- Quote/testimonial aside-->
    <img class="vectorkiri img-fluid " src="{{asset('img/Vector.png')}}" alt="Vector">
    <img class="vectorkanan img-fluid " src="{{asset('img/vectorkanan.png')}}" alt="Vector">
    <aside class="bg-gradient-primary-to-secondary" style="height: 273px;">
        <div class="container">
            <div class="row gx-5 justify-content-center ">
                <div class="col-lg-9">
                    <div class="text-center size-24 text-white mb-1" style="font-family: Poppins;">"Seorang hamba yang menyandarkan dirinya kepada ilmu, maka Allah akan mengangkat derajatnya, dan seorang hamba yang tidak menyandarkan dirinya kepada ilmu, maka Allah akan menurunkannya." (HR. Ahmad)</div>
                </div>
            </div>
        </div>
    </aside>
    <!-- App E-perpus section-->
    <section id="E-perpus">
        <div class="container">
            <div class="row">
                <img class="col-lg-4" src="{{asset('img/gambar perpus.png')}}" alt="perpus">
                <div class="col-lg-6">
                    <h3 style="font-family: Poppins; color: #005A43;">E-Perpustakaan</h3>
                    <h2 style="font-family: Cormorant;color: #000000;">MEMUDAHKAN AKSES LITERASI ANDA</h2>
                    <p class="my-4" style="font-family: Poppins;color: #4C605B;">E-Perpustakaan adalah sebuah perpustakaan yang memungkinkan penggunanya untuk mengakses koleksi buku, jurnal, dan dokumen lainnya secara digital melalui internet. Fungsi utama dari e-perpustakaan adalah menyediakan akses ke sumber-sumber informasi yang dapat diakses secara online.</p>
                    <button class="button"><a class="text-decoration-none text-white" href="http://localhost/perpustakaan/index.php">Menuju E-Perpustakaan <i class="bi bi-arrow-right"></i></a> </button>
                </div>
            </div>
        </div>
    </section>
    <!-- Basic E-perpus section-->
    <section id="E-prints">

        <div class="container">
            <div class="row">
                <img class="imagehp col-lg-4 offset-lg-1" src="{{asset('img/perpus2.png')}}" alt="perpus">
                <div class="col-lg-6 ">
                    <h3 style="font-family: Poppins; color: #005A43;">E-Repository</h3>
                    <h2 style="font-family: Cormorant;color: #000000;">Lorem ipsum dolor sit AMET</h2>
                    <p class="my-4" style="font-family: Poppins;color: #4C605B;">Lorem ipsum dolor sit amet consectetur. Arcu dictum imperdiet leo ultrices turpis at a. Risus venenatis tellus ut sit mollis nisi odio. Diam turpis enim magna fringilla hendrerit sed. In viverra sagittis eu libero. Habitasse rutrum elit semper mauris.</p>
                    <button class="button">Menuju E-Repository <i class="bi bi-arrow-right"></i></button>
                </div>
                <img class="imagedekstop col-lg-4 offset-lg-1" src="{{asset('img/perpus2.png')}}" alt="perpus">
            </div>

        </div>
    </section>

@endsection