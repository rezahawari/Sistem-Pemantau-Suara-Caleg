@extends('aplikasi.index')
@section('content')
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Detail Aktifitas</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/activity">Aktifitas</a></li>
              <li class="breadcrumb-item active">Detail</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-2"></div>
                <div class="col-7">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{asset('/img/aktifitas/'.$aktifitas->foto)}}" class="img-fluid" alt="Responsive image">
                        </div>
                    </div>
                </div>
                <div class="col-2"></div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="/updateActivity" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{$aktifitas->id}}">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Detail Aktivitas</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="aktifitas">{{$aktifitas->aktifitas}}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Potensi Suara</label>
                                            <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="" name="potensi" value="{{$aktifitas->potensi}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="customFile">Foto</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="customFile" name="foto">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection