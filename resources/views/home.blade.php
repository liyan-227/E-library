@extends('layouts.landing')

@section('content')

  <!-- Konten section-->
  <section id="Berita" class="container">
    <div>
        <h4 style="font-family: 'Poppins'; font-style: normal; font-size: 24px;line-height: 100%;color: #005A43;
    ">Artikel</h4>
        <h1 style="font-family: 'Cormorant';text-transform: uppercase;color: #2C3633;"><br>Dapatkan informasi <br>dengan artikel kami</h1>
    </div>


            <div class="news-carousel owl-carousel owl-theme">
               @foreach ($news as $news)
                    <div class="card mx-2 m-sm-2 col-12" style="width: 18rem; border-radius: 20px; width: 379px; color:#FFFFFF;">
                    <img class="card-img-top img-fluid mt-2 rounded" style="width: 379px;height: 230px;" src="{{ url('/img/'.$news->file) }}">
                        <div class="card-body text-center">
                            <h5 class="card-title text-start" style="color: #2C3633;">{{ Str::limit($news->judul, 30) }}</h5>
                            <p class="card-text text-start" style="color: #4C605B;">{{ Str::limit($news->deskripsi, 200)}}</p>
                            <a class="buttonberita btn" style="border: 1px solid #E7C377; font-family: 'Poppins';font-style: normal;color: #E7C377;" href="{{ route('artikel',['id' => $news->id]) }}">Baca Selengkapnya</a>

                        </div>
                    </div>
                    @endforeach
                    </div>
    </section>


@endsection