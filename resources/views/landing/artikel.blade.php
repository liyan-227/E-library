@extends('layouts.landing')
@section('content')
<aside class="bg-artikel" style="background-image:url({{asset('img/Pattern-01.png')}}); height: 273px;">
    @foreach ($news as $n )
                <div class="container mt-2">
                    <div class="row gx-5 justify-content-center ">
                        <div class="col">
                            <h1 class="text-center text-white mb-1" style="font-family: Poppins;"> {{$n['judul']}}</h1> 
                         <p class="text-white text-center"><a class="size-28 text-white mb-1"style="text-decoration:none; text-center;" href="/">Beranda</a> > Artikel</p></div>
                        </div>
                    </div>
                </div>
            
            <!-- App E-perpus section-->
         <section id="E-perpus">
                <div class="container">
                    <div class="text-center"><img class="imageartikel rounded image-fluid"  src="{{asset('/img/'.$n['file'])}}" style="width: 80%; height: 80%;" alt="perpus"></div>
                    <div class="row">
                    <h1 class="text-center mb-1" style="font-family: Poppins;"> {{$n['judul']}}</h1>  
                        <div class="bungkus offset-lg-1">
                            <time style="color: #005A43"><i class="bi bi-calendar-event-fill"> </i> {{$n['created_at']}} 
                        </div>
                        <div class="bungkus"><a style="color: #005A43"><i class="bi bi-person-fill"> </i> {{$n['penulis']}}</a>
                        </div>
                    </time>
                        <p class="my-4 text-justify" style="font-family: Poppins;color: #4C605B; ">{!!$n['deskripsi']!!}</p>
                        
                    </div>
                </div>
               
                           
                      
            </section> 
            @endforeach

</aside>
<section id="Berita" class="container">
<div>
        <h4 style="font-family: 'Poppins'; font-style: normal; font-size: 24px;color: #005A43;">Artikel</h4>
        <h1 style="font-family: 'Cormorant';text-transform: uppercase;color: #2C3633;margin-top:16px;margin-bottom:80px;">Dapatkan informasi <br>dengan artikel kami</h1>
    </div>



            <div class="news-carousel owl-carousel owl-theme">
               @foreach ($post as $news)
              
                    <div class="card" style="border-radius: 16px;">
               <img class="card-img-top img-fluid" style="width: 430px;height: 230px;border-radius: 16px 16px 0px 0px; " src="{{ url('/img/'.$news['file']) }}">
              <div class="row mx-2 m-sm-2 col-12" style="width: 18rem;border-radius: 16px;  width: 379px;">
                        <div class="card-body text-center">
                            <h5 class="card-title text-start" style="color: #2C3633;">{{ Str::limit($news['judul'], 30) }}</h5>
                            <a class="card-text text-decoration-none text-justify" style="color: #4C605B;">{!! Str::limit($news['deskripsi'], 200) !!}</a><br>
                            <a class="buttonberita btn" style="border: 1px solid #E7C377; font-family: 'Poppins';font-style: normal;color: #E7C377;" href="{{ route('artikel',['id' => $news['id'],'slug' => $news['slug']]) }}">Baca Selengkapnya</a>
                        </div>
                    </div>
                    </div>
                    @endforeach
                    </div>
    </section>
    

@endsection