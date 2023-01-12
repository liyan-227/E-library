<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>STIDKI</title>
    <link rel="icon" type="image/x-icon" href="public/favicon.ico" />
    <!-- kebutuhan bootstrap -->
    <!-- Bootstrap icons-->
    <!-- Google fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&amp;display=swap" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}} " />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="mainNav" >
        <div class="container px-5">
            <div class="image">
                <img src="{{asset('img/logo.png')}}" style="width: 64px; height: 64px; margin-right: 10px; margin-bottom: 10px;" class="img-circle elevation-2" alt="User Image">
            </div>
            <a class="navbar-brand" style="font-family:Cormorant; color: #EDBB62;" href="#page-top">PERPUSTAKAAN <br> STIDKI AL HAMIDY</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" > 
                Menu
                <i class="bi-list"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                    <li class="nav-item"><a class="nav-link me-lg-3" href="#carouselExampleCaptions">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link me-lg-3" href="#features">E-Perpustakaan</a></li>
                    <li class="nav-item"><a class="nav-link me-lg-3" href="#ke3">E-repository</a></li>
                    <li class="nav-item"><a class="nav-link me-lg-3" href="#ke4">Layanan</a></li>
                    <button class="button">Explore Perpustakaan </button>

                </ul>
            </div>
        </div>
    </nav>
    <!-- Mashead header-->
    <header class="masthead">
        <div class="container px-5" style="background-image:url({{asset('img/Pattern-01.png')}}); border-radius: 48px;">

            <div class="row gx-5 align-items-center">
                <div class="col-lg-6">
                    <!-- Mashead text and app badges-->
                    <div class="mb-5 mb-lg-0 text-center text-lg-start">
                        <h1 class="display-1 lh-1 mb-5" style="color: #004634;">PERPUSTAKAAN STIDKI AL HAMIDY</h1>
                        <p class="lead fw-normal text-muted mb-5">Dengan e-perpustakaan, mahasiswa atau dosen dapat mencari, membaca, dan mengunduh buku-buku digital sesuai dengan kebutuhan mereka. Web e-perpustakaan juga memberikan kemudahan bagi para pustakawan. Mereka dapat dengan mudah mengelola dan memantau peminjaman buku-buku serta mengelola data inventaris perpustakaan.</p>
                        <div class="d-flex flex-column flex-lg-row align-items-center">
                            <button class="button">Explore Perpustakaan <i class="bi bi-arrow-right" ;></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- slider image -->
                    <div id="carouselExampleIndicators" class="carousel slide col-sm-4 col-l-6 col-sm-12 ms-lg-5" data-ride="carousel">
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
                        <div class="cardlogo text-left text-muted" >
                            <img class="imagecard " src="{{asset('img/logo card.png')}}" alt="logo">
                            <p class="teks"><br>Temukan banyak Buku dan Kitab dengan cara yang mudah</p>
                        </div>
                    </div>
                    <div class="cardbackground2">
                        <div class="cardlogo text-left text-muted" >
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
    <aside class="bg-gradient-primary-to-secondary">
        <div class="container px-5 ">
            <div class="row gx-5 justify-content-center ">
                <div class="col-lg-9">
                    <div class="text-center size-24 text-white mb-1">"Seorang hamba yang menyandarkan dirinya kepada ilmu, maka Allah akan mengangkat derajatnya, dan seorang hamba yang tidak menyandarkan dirinya kepada ilmu, maka Allah akan menurunkannya." (HR. Ahmad)</div>
                </div>
            </div>
        </div>
    </aside>

  
    <!-- App features section-->
    <section id="features">
        <div class="container">
            <div class="row">
                <img class="col-lg-4" src="{{asset('img/gambar perpus.png')}}" alt="perpus">
                <div class="col-lg-6 offset-1">
                    <h3>E-Perpustakaan</h3>
                    <h2>MEMUDAHKAN AKSES LITERASI ANDA</h2>
                    <p>E-Perpustakaan adalah sebuah perpustakaan yang memungkinkan penggunanya untuk mengakses koleksi buku, jurnal, dan dokumen lainnya secara digital melalui internet. Fungsi utama dari e-perpustakaan adalah menyediakan akses ke sumber-sumber informasi yang dapat diakses secara online.</p>
                    <button class="button">Menuju E-Perpustakaan <i class="bi bi-arrow-right"></i></button>
                </div>
            </div>
        </div>
    </section>
    <!-- Basic features section-->
    <section id="ke3">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 " >
                    <h3>E-Repository</h3>
                    <h2>Lorem ipsum dolor sit AMET</h2>
                    <p>Lorem ipsum dolor sit amet consectetur. Arcu dictum imperdiet leo ultrices turpis at a. Risus venenatis tellus ut sit mollis nisi odio. Diam turpis enim magna fringilla hendrerit sed. In viverra sagittis eu libero. Habitasse rutrum elit semper mauris.</p>
                    <button class="button mt-lg-5">Menuju E-Repository <i class="bi bi-arrow-right"></i></button>
                </div>
                <img class="col-lg-4 offset-lg-1"  src="{{asset('img/perpus2.png')}}" alt="perpus">
            </div>
        </div>
    </section>

    <!-- Footer-->
    <footer class="bg-gradient-primary-to-secondary py-5">
        <div class="container gx-5">
            <div class="row">
                <div class="col-lg-12">
                    <img class="logokecil" src="{{asset('img/logo.png')}}">
                    <p class="footer-text">PERPUSTAKAAN <br> STIDKI AL HAMIDY</p>
                    <a style="color:#F9F9ED; font-style: normal;">Lorem ipsum dolor sit amet consectetur. Nulla ut sed dictumst non. Odio massa quam sed at varius nibh. Libero donec sollicitudin mollis eu. Non velit adipiscing tempus sit egestas non facilisis. Vestibulum amet.<br><br></a>
                    <i class="bi bi-geo-alt-fill" style="color: #F9F9ED;"><a class="text-location"> Potoan, Patoan Dajah, Kec. Palengaan, Kabupaten Pamekasan, Jawa Timur 69362</a><br></i>
                    <i class="bi bi-telephone-fill" style="color: #F9F9ED; font-family: 'Poppins';font-style: normal;"> +62 823-3706-3767</i>
                    <br><br>
                    <hr style="color: #F9F9ED;">
                    <a style="color: #F9F9ED;font-family: 'Poppins';font-style: normal;">&copy; 2023 Perpustakaan STIDKI AL HAMIDY </a>
                    <a href="#!" style="float: right; color: #F9F9ED;font-family: 'Poppins';font-style: normal;">Terms • Privacy</a>

                </div>
            </div>
        </div>
    </footer>
   
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <!-- Core theme JS-->
    <script src="{{asset('js/scripts.js')}}"></script>

    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>