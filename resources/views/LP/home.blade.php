@extends('LP.index')
@section('content')
    
<!--navbar-->
<nav class="navbar navbar-expand-lg py-3 navbar-light sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img class="logo" src="{{asset('lp/Images/gerindra.png')}}" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item p-lg-2 ">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item p-lg-2">
                        <a class="nav-link" href="#profil">Profil</a>
                    </li>
                    <li class="nav-item p-lg-2">
                        <a class="nav-link" href="#Berita">Berita</a>
                    </li>
                </ul>
                {{-- @guest
                @if (Route::has('login'))
                
                <a href="/login" class="btn ms-lg-3">Masuk</a>
                
                
                @endif
                    
                @else
                <a href="/dashboard" class="btn ms-lg-3">Dashboard</a>
                @endguest --}}
            </div>
        </div>
    </nav>

    <!-- HERO -->
    <section>
    <div class="hero vh-100 d-flex align-items-center" id="home">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 mx-auto text-center">
                    {{-- <h1 data-aos="zoom-in" data-aos-duration="1000" class="display-4 text-white">Website Resmi</h1> --}}
                    <h1 data-aos="zoom-in" data-aos-duration="1000" class="display-4 text-white">YUDI INDRAS</h1>
                    <h1 data-aos="zoom-in" data-aos-duration="1000" class="display-4 text-white">&</h1>
                    <h1 data-aos="zoom-in" data-aos-duration="1000" class="display-4 text-white">RAYHAN DHANY</h1>
                    {{-- <p data-aos="fade-up" data-aos-duration="1000" class="text-white my-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque quia sequi eius. Quas, totam aliquid. Repudiandae reiciendis vel excepturi ipsa voluptate dicta!</p> --}}
                </div>
            </div>
        </div>
    </div>
</section>

    <!--profil-->
    <div class="container " style="margin-top:10em;" id="profil">
        <div class="row ">
            <div class="col-lg col-img " data-aos="fade-right" data-aos-duration="1000">
                <img class=" img-fluid border-0 rounded-3" style="margin-bottom:1em;" src="{{asset('lp/images/YIW.png')}}">
            </div>
            <div class="col-lg" data-aos="fade-left" data-aos-duration="1000">
                <h6 class="titlesm">Profil</h6>
                <P class="titles">Yudi Indras Wiendarto</P>
                <p>Yudi Indras Wiendarto adalah politikus Partai Gerindra yang menjabat anggota DPRD Jawa Tengah semenjak tahun 2014. Lahir di Kota Semarang, Jawa Tengah pada 18 Agustus 1973 (umur 48), ia juga menjabat sebagai Wakil Ketua DPD Partai Gerindra Jawa Tengah. </p>
                {{-- <p>Tristique lorem ornare urna, mauris sed purus amet. At quisque tristique gravida ut nunc, augue lobortis. Facilisi ultrices elit, maecenas ultricies enim. At suspendisse risus arcu dignissim diam tempus. Eu donec tellus lectus hendrerit
                    a in quis.</p> --}}

                <div class="Sosmed">
                    <p class="titlesm fw-light">Sosial Media</p>
                    <div class="row row-cols-auto">
                        <div class="col-1 mr-3">
                            <a href="https://www.instagram.com/yudiindrasw/" target="_blank"><img src="{{asset('lp/images/instagram.svg')}}" width="40px" height="40px"></a>
                        </div>
                        {{-- <div class="col-1 mr-3">
                            <a href="#"><img src="{{asset('lp/images/tiktok.svg')}}" width="40px" height="40px"></a>
                        </div> --}}
                        <div class="col-1 mr-3">
                            <a href="https://youtube.com/channel/UCffETBWGne8jzVWkXmTaZZg" target="_blank"><img src="{{asset('lp/images/youtube.svg')}}" width="40px" height="40px"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container" style="margin-top: 10em;">
        <div class="row">
            <div class="col-lg " data-aos="fade-right" data-aos-duration="1000">
                <h6 class="titlesm">Profil</h6>
                <P class="titles">Rayhan Dhany Rahardian</P>
                <p>Rayhan Dhany Rahardian adalah mahasiswa semester 6 teknik sipil di Universitas Diponegoro. Lahir di Kota Semarang, Jawa Tengah pada 13 September 2001 (umur 21), selain sebagai mahasiswa ia juga bekerja sebagai Pengusaha rekanan Pertamina(Dibidang kontraktor SPBU) dengan PT.Dawam Prima Sentosa. </p>
                <p>Pria yang sekarang menjabat sebagai Ketua PC Satria Kota Semarang(Satuan Relawan Indonesia raya) ini memiliki hobi gowes dan touring motor.</p>

                <div class="Sosmed" style="margin-bottom:2em;">
                    <p class="titlesm fw-light ">Sosial Media</p>
                    <div class="row row-cols-auto">
                        <div class="col-1 mr-3">
                            <a href="https://www.instagram.com/masraydhan/" target="_blank" class="link"><img src="{{asset('lp/images/instagram.svg')}}" width="40px" height="40px"></a>
                        </div>
                        {{-- <div class="col-1 mr-3">
                            <a href="#"><img src="{{asset('lp/images/tiktok.svg')}}" width="40px" height="40px"></a>
                        </div>
                        <div class="col-1 mr-3">
                            <a href="#"><img src="{{asset('lp/images/youtube.svg')}}" width="40px" height="40px"></a>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="col-lg col-img" data-aos="fade-left" data-aos-duration="1000">
                <img class="img-fluid border-0 rounded-3" src="{{asset('lp/images/RD.png')}}">
            </div>
        </div>
    </div>

    <!-- visi misi -->
    <div class="container">

    </div>

    <!-- Berita -->
    {{-- <div class="container new" id="Berita" data-aos="zoom-out" data-aos-duration="1000">
        <h3 class="text-center text-black fw-bold" style="margin-bottom: 1em;">Berita Terbaru</h3>

        <input type="radio" name="dot" id="one">
        <input type="radio" name="dot" id="two">
        <div class="main-card">
            @php
                $no = 1;
                $number = 4;
            @endphp
            <div class="cards slide">
                    @foreach ($isi as $a)
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
                    @foreach ($isi as $a)
                    @if ($n >= 4 && $n <= 6)
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
                        $n++;
                    @endphp
                    @endforeach
            </div>
            
        </div>
        <div class="button">
            <label for="one" class=" active one"></label>
            <label for="two" class="two"></label>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col text-center mb-3">
                <a class="btn" href="/view/all-news">Tampilkan Selengkapnya</a>
            </div>
        </div>
    </div> --}}
@endsection