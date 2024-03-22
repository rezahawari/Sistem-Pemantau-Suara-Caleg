@extends('LP.index')
@section('content')
    <!--navbar-->
    @php
        foreach ($artikel as $a) {
            # code...
            $judul = $a->judul;
            $isi = $a->isi;
            $foto_1 = $a->foto_1;
            $foto_2 = $a->foto_2;
            $foto_3 = $a->foto_3;
            $foto_4 = $a->foto_4;
            $foto_5 = $a->foto_5;
        }
        // dd($isi)
    @endphp
<nav class="navbar navbar-expand-lg py-3 navbar-light sticky-top">
    <div class="container-lg">
        <a class="navbar-brand" href="/">
            <img class="logo" src="{{asset('lp/Images/gerindra.png')}}" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item p-lg-2 ">
                    <a class="nav-link" href="/">Home</a>
                </li>
                {{-- <li class="nav-item p-lg-2">
                    <a class="nav-link" href="#profil">Profil</a>
                </li>
                <li class="nav-item p-lg-2">
                    <a class="nav-link" href="#Berita">Berita</a>
                </li> --}}
            </ul>
            {{-- <a href="/dashboard" class="btn btn-outline-danger ms-lg-3">Masuk</a> --}}
            {{-- <button class="btn btn-outline-danger ms-lg-3">Masuk</button> --}}
        </div>
    </div>
</nav>
<div class="content container mt-3">
    <!-- Carousel -->
    <div id="demo" class="carousel slide" data-bs-ride="carousel">

    <!-- Indicators/dots -->
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    </div>

    <!-- The slideshow/carousel -->
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="{{asset('img/artikel/'.$foto_1)}}" alt="Los Angeles" class="d-block w-100" style="max-width:1300px;">
        </div>
        @if ($foto_2 != null)
        <div class="carousel-item">
        <img src="{{asset('img/artikel/'.$foto_2)}}" alt="Chicago" class="d-block w-100" style="max-width:1300px;">
        </div>
        @endif
        @if ($foto_3 != null)
        <div class="carousel-item">
        <img src="{{asset('img/artikel/'.$foto_3)}}" alt="Chicago" class="d-block w-100" style="max-width:1300px;">
        </div>
        @endif
        {{-- <div class="carousel-item">
        <img src="{{asset('img/artikel/'.$foto_3)}}" alt="New York" class="d-block w-100">
        </div> --}}
    </div>

    <!-- Left and right controls/icons -->
    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
    </div>
    <div class="isi">
        {{-- {{$isi}} --}}
        {{-- <textarea name="" id="" cols="30" rows="10">{{$isi}}</textarea> --}}
        <textarea name="" id="isi" cols="30" rows="30" class="txtarea"><h1>{{$judul}}</h1><hr><br>{{$isi}}</textarea>
    </div>
    {{-- <div class="card mt-5">
        <div class="card-header">
            <h1>{{$judul}}</h1>
        </div>
        <div class="card-body">
            <div class="isi">
                
                <textarea name="" id="isi" cols="30" rows="30" class="txtarea"><h1>{{$judul}}</h1><hr><br>{{$isi}}</textarea>
            </div>
        </div>
    </div> --}}
    {{-- <div class="isi">{{$isi}}</div> --}}
    <!-- Berita -->

    <div class="container new" id="Berita">
        <h3 class="text-center text-black fw-bold" style="margin-bottom: 1em;">Berita Terbaru</h3>

        <input type="radio" name="dot" id="one">
        <input type="radio" name="dot" id="two">
        <div class="main-card">
                @php
                    $no = 1;
                    $number = 4;
                @endphp
                <div class="cards slide">
                        @foreach ($berita as $a)
                        @if ($no >= 1 && $no <= 3)
                        <div class="card ">
                            <div class="content">
                                <img src="{{asset('img/artikel/'.$a->foto_1)}}" class=" card-img-top border-0 rounded-3" alt="...">
                                <div class="card-body">
                                    <h6 class="titlesm">Berita</h6>
                                    <h5 class="card-title fw-bold">{{$a->judul}}</h5>
                                    <p class="card-text" style="margin-left:0px;padding-top:20px;">{{Str::limit($a->ringkasan, 200)}}</p>
                                    <a href="/view/{{$a->id}}/{{$a->slug}}" class="stretched-link"></a>
                                </div>
                            </div>
                        </div>
                        @php
                            $number++;
                        @endphp
                        @endif
                        @php
                            $no++;
                        @endphp
                        @endforeach
                </div>
                <div class="cards slide">
                    @php
                        $n = 1;
                        $number = 1;
                    @endphp
                        @foreach ($berita as $a)
                        @if ($n >= 4 && $n <= 6)
                        <div class="card ">
                            <div class="content">
                                <img src="{{asset('img/artikel/'.$a->foto_1)}}" class=" card-img-top border-0 rounded-3" alt="...">
                                <div class="card-body">
                                    <h6 class="titlesm">Berita</h6>
                                    <h5 class="card-title fw-bold">{{$a->judul}}</h5>
                                    {{-- <p class="card-text" style="margin-left:0px;padding-top:20px;"><textarea id="textberita{{$number}}" cols="10" rows="1">{{Str::limit($a->isi, 200)}}</textarea></p> --}}
                                    {{-- <p class="card-text">{{}}</p> --}}
                                    <p class="card-text" style="margin-left:0px;padding-top:20px;">{{Str::limit($a->ringkasan, 200)}}</p>
                                    <a href="/view/{{$a->id}}/{{$a->slug}}" class="stretched-link"></a>
                                </div>
                            </div>
                        </div>
                        @php
                            $number++;
                        @endphp
                        @endif
                        @php
                            $n++;
                        @endphp
                        @endforeach
                </div>
                {{-- <div class="cards slide">
                    <div class="card ">
                        <div class="content">
                            <img src=" {{asset('lp/images/images1.jpg')}}" class=" card-img-top border-0 rounded-3" alt="...">
                            <div class="card-body">
                                <h6 class="titlesm">Berita</h6>
                                <h5 class="card-title fw-bold">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="news.html" class="stretched-link"></a>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="content">
                            <img src=" {{asset('lp/images/images1.jpg')}}" class=" card-img-top border-0 rounded-3" alt="...">
                            <div class="card-body">
                                <h6 class="titlesm">Berita</h6>
                                <h5 class="card-title fw-bold">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="news.html" class="stretched-link"></a>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="content">
                            <img src=" {{asset('lp/images/images1.jpg')}}" class=" card-img-top border-0 rounded-3" alt="...">
                            <div class="card-body">
                                <h6 class="titlesm">Berita</h6>
                                <h5 class="card-title fw-bold">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="news.html" class="stretched-link"></a>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        <div class="button">
            <label for="one" class=" active one"></label>
            <label for="two" class="two"></label>
        </div>
    </div>
</div>
<script>
// tinymce.get('#isi').getDoc().designMode = 'Off';
// tinymce.editor.ui.disable();
</script>


    
@endsection