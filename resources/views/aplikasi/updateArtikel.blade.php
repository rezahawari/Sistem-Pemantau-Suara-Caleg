@if (Auth::user()->role != "Admin" || Auth::user()->role == "Sadmin")
<script>window.location="/activity"</script>    
@endif
@extends('aplikasi.index')
@section('content')
@php
    foreach ($artikel as $b) {
        # code...
        $id = $b->id;
        $judul = $b->judul;
        $ringkasan = $b->ringkasan;
        $isi = $b->isi;
        $foto_1 = $b->foto_1;
        $foto_2 = $b->foto_2;
        $foto_3 = $b->foto_3;
        $foto_4 = $b->foto_4;
        $foto_5 = $b->foto_5;
    }
    // dd('img/ktp/'. $foto_1);
@endphp
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Edit Artikel</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                  <li class="breadcrumb-item"><a href="/kelola-artikel">Artikel</a></li>
                  <li class="breadcrumb-item active">Edit</li>
                </ol>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            <form action="/kelola-artikel/updateArtikel" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" value="{{$id}}" name="id">
                <div class="card">
                    <div class="card-header">
                        <h5>Judul Artikel</h5>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="judul" value="{{$judul}}">
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5>Ringkasan</h5>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="ringkasan" required>{{$ringkasan}}</textarea>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5>Isi Artikel</h5>
                    </div>
                    <div class="card-body">
                        <textarea name="isi" id="mytextarea" cols="10" rows="20">{{$isi}}</textarea>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5>Foto Artikel</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4">
                                <label for="customFile">Foto 1</label>
                                <div class="form-group">
                                    @if ($foto_1 == NULL)
                                    <img src="{{asset('img/artikel/noImage.jpeg')}}" alt="..." class="img-thumbnail" style="max-width:150px;"><br>
                                    @else
                                    <img src="{{asset('img/artikel/'.$foto_1)}}" alt="..." class="img-thumbnail" style="max-width:150px;">
                                    <a href="/deleteFoto1/{{$id}}" class="btn btn-danger ml-3"><i class="fa fa-trash"></i></a><br>
                                    @endif
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile" name="foto_1" value="">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <label for="customFile">Foto 2</label>
                                <div class="form-group">
                                    @if ($foto_2 == NULL)
                                    <img src="{{asset('img/artikel/noImage.jpeg')}}" alt="..." class="img-thumbnail" style="max-width:150px;"><br>
                                    @else
                                    <img src="{{asset('img/artikel/'.$foto_2)}}" alt="..." class="img-thumbnail" style="max-width:150px;">
                                    <a href="/deleteFoto2/{{$id}}" class="btn btn-danger ml-3"><i class="fa fa-trash"></i></a><br>
                                    @endif
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile" name="foto_2">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <label for="customFile">Foto 3</label>
                                <div class="form-group">
                                    @if ($foto_3 == NULL)
                                    <img src="{{asset('img/artikel/noImage.jpeg')}}" alt="..." class="img-thumbnail" style="max-width:150px;"><br>
                                    @else
                                    <img src="{{asset('img/artikel/'.$foto_3)}}" alt="..." class="img-thumbnail" style="max-width:150px;">
                                    <a href="/deleteFoto3/{{$id}}" class="btn btn-danger ml-3"><i class="fa fa-trash"></i></a><br>
                                    @endif
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile" name="foto_3">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <label for="customFile">Foto 4</label>
                                <div class="form-group">
                                    @if ($foto_4 == NULL)
                                    <img src="{{asset('img/artikel/noImage.jpeg')}}" alt="..." class="img-thumbnail" style="max-width:150px;"><br>
                                    @else
                                    <img src="{{asset('img/artikel/'.$foto_4)}}" alt="..." class="img-thumbnail" style="max-width:150px;">
                                    <a href="/deleteFoto4/{{$id}}" class="btn btn-danger ml-3"><i class="fa fa-trash"></i></a><br>
                                    @endif
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile" name="foto_4">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <label for="customFile">Foto 5</label>
                                <div class="form-group">
                                    @if ($foto_5 == NULL)
                                    <img src="{{asset('img/artikel/noImage.jpeg')}}" alt="..." class="img-thumbnail" style="max-width:150px;"><br>
                                    @else
                                    <img src="{{asset('img/artikel/'.$foto_5)}}" alt="..." class="img-thumbnail" style="max-width:150px;">
                                    <a href="/deleteFoto5/{{$id}}" class="btn btn-danger ml-3"><i class="fa fa-trash"></i></a><br>
                                    @endif
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile" name="foto_5">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                    </div>
                </div>
            </form>
        </section>
    </div>
@endsection