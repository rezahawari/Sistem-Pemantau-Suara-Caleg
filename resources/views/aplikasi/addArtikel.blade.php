@if (Auth::user()->role != "Admin" || Auth::user()->role == "Sadmin")
<script>window.location="/activity"</script>    
@endif
@extends('aplikasi.index')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Tambah Artikel</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                  <li class="breadcrumb-item"><a href="/kelola-artikel">Artikel</a></li>
                  <li class="breadcrumb-item active">Tambah</li>
                </ol>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            <form action="/kelola-artikel/storeArtikel" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <h5>Judul Artikel</h5>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="judul">
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5>Ringkasan</h5>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="ringkasan" required></textarea>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5>Isi Artikel</h5>
                    </div>
                    <div class="card-body">
                        <textarea name="isi" id="mytextarea"></textarea>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5>Foto Artikel</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="customFile">Foto 1</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile" name="foto_1">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="customFile">Foto 2</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile" name="foto_2">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="customFile">Foto 3</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile" name="foto_3">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="customFile">Foto 4</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile" name="foto_4">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="customFile">Foto 5</label>
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