@extends('LP.index')
@section('content')
<nav class="navbar navbar-expand-lg py-3 navbar-light sticky-top">
    <div class="container-lg">
        <a class="navbar-brand" href="#">
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
    <h3 class="text-center text-black fw-bold" style="margin-top: 2em; margin-bottom: 1em;">Semua Berita</h3>
    <div class="row">

        @foreach ($artikel as $a)
        
            
        <div class="card mb-3 lberita" style="margin-top: 1em;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{asset('img/artikel/'.$a->foto_1)}}" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title titles"><strong>{{$a->judul}}</strong></h5>
                        <p class="card-text"><small class="text-muted">Berita</small></p>
                        {{-- <p class="card-text"><textarea id="textberita" cols="10" rows="1">{{Str::limit($a->isi, 200)}}</textarea></p> --}}
                        <p class="card-text">{{Str::limit($a->ringkasan, 200)}}</p>
                        <a href="/view/{{$a->id}}/{{$a->slug}}" class=" stretched-link "></a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
        <div>{{ $artikel->links() }}</div>
</div>
@endsection