{{-- @extends('layouts.landing') --}}
{{-- @section('content') --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($news as $n )
        
            <h1>Judul {{$n['judul']}}</h1>
            <img src="{{asset('img/'. $n['file'] )}}" alt="">
            {{-- <aside class="bg-artikel" style="background-image:url({{asset('img/Pattern-01.png')}}); height: 273px;">
                <img class="vectorartikel img-fluid " src="{{asset('img/Pattern-01.png')}}" alt="Vector">
                <div class="container">
                    <div class="row gx-5 justify-content-center ">
                        <div class="col">
                            {{-- <h1 class="text-center text-white mb-1" style="font-family: Poppins;">{{$njudul}</h1> --}}
                            {{-- <p class="text-white text-center"><a class="size-28 text-white mb-1"style="text-decoration:none; text-center;" href="/">Beranda</a> > Artikel</p></div>
                        </div>
                    </div>
                </div>
            </aside> --}}
            <!-- App E-perpus section-->
            {{-- <section id="E-perpus">
                <div class="container">
                    <img class="imageartikel rounded mx-auto d-block" src="{{asset('img/gambar perpus.png')}}" alt="perpus">
                    <div class="row">
                        <div>
                            <p class="my-4" style="font-family: Poppins;color: #4C605B;">E-Perpustakaan adalah sebuah perpustakaan yang memungkinkan penggunanya untuk mengakses koleksi buku, jurnal, dan dokumen lainnya secara digital melalui internet. Fungsi utama dari e-perpustakaan adalah menyediakan akses ke sumber-sumber informasi yang dapat diakses secara online.</p>
                        </div>
                    </div>
                </div>
            </section> --}} 
            @endforeach
</body>
</html>
    <!-- Quote/testimonial aside-->
    {{-- @foreach ($news as $news)
    
        <h1>222</h1>
    @endforeach --}}
    

{{-- @endsection --}}