@extends('layouts.landing')
@section('content')
    <!-- Quote/testimonial aside-->
    @foreach ($news as $news)
    <aside class="bg-artikel" style="background-image:url({{asset('img/Pattern-01.png')}}); height: 273px;">
        {{-- <img class="vectorartikel img-fluid " src="{{asset('img/Pattern-01.png')}}" alt="Vector"> --}}
        <div class="container">
            <div class="row gx-5 justify-content-center ">
                <div class="col">
                    <h1 class="text-center text-white mb-1" style="font-family: Poppins;">{{$news->judul}}</h1>
                    <p class="text-white text-center"><a class="size-28 text-white mb-1"style="text-decoration:none; text-center;" href="/">Beranda</a> > Artikel</p></div>
                </div>
            </div>
        </div>
    </aside>
    <!-- App E-perpus section-->
    <section id="E-perpus">
        <div class="container">
            <img class="imageartikel rounded mx-auto d-block" src="{{asset('img/gambar perpus.png')}}" alt="perpus">
            <div class="row">
                <div>
                    <p class="my-4" style="font-family: Poppins;color: #4C605B;">E-Perpustakaan adalah sebuah perpustakaan yang memungkinkan penggunanya untuk mengakses koleksi buku, jurnal, dan dokumen lainnya secara digital melalui internet. Fungsi utama dari e-perpustakaan adalah menyediakan akses ke sumber-sumber informasi yang dapat diakses secara online.</p>
                </div>
            </div>
        </div>
    </section>
@endforeach
@endsection