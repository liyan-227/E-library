@extends('layouts.landing')
@section('content')

    @foreach ($news as $n )
        
            <h1>Judul {{$n['judul']}}</h1>
            <img src="{{asset('img/'. $n['file'] )}}" alt="">
            <aside class="bg-artikel" style="background-image:url({{asset('img/'. $n['file'] )}}); height: 273px;">
                <img class="vectorartikel img-fluid " src="{{asset('img/Pattern-01.png')}}" alt="Vector">
                <div class="container">
                    <div class="row gx-5 justify-content-center ">
                        <div class="col">
                            <h1 class="text-center text-white mb-1" style="font-family: Poppins;"> {{$n['judul']}}</h1> 
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
                            <p class="my-4" style="font-family: Poppins;color: #4C605B;">{{$n['judul']}}</p>
                        </div>
                    </div>
                </div>
            </section> 
            @endforeach


    

@endsection