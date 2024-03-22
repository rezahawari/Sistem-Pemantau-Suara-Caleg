@extends('aplikasi.index')
@section('content')
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Aktifitas Mu</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                  <li class="breadcrumb-item active">Aktifitas</li>
                </ol>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            <div class="card">
                <div class="card-header">
                    <a href="#modalAct" data-toggle="modal" class="btn btn-success btn-sm"><i class="fa fa-plus"></i></a>
                    @if (Auth::user()->role == "Admin" || Auth::user()->role == "Sadmin")
                    <a href="/download-excell" class="btn btn-success btn-sm">Download Excell</a>
                    @endif
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Aktifitas</th>
                                    <th>Potensi</th>
                                    @if (Auth::user()->role == "Admin" || Auth::user()->role == "Sadmin")
                                    <th>Nama</th>
                                    <th>Kecamatan(Kelurahan)</th>
                                    <th>PJ</th>
                                    @endif
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($activity as $a)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$a->aktifitas}}</td>
                                    <td>{{$a->potensi}} Orang</td>
                                    @if (Auth::user()->role == "Admin" || Auth::user()->role == "Sadmin")
                                    <td>{{$a->nama}}</td>
                                    <td>{{$a->kecamatan}}({{$a->kelurahan}})</td>
                                    <td>{{$a->pj}}</td>
                                    @endif
                                    <td><a href="/activity/detail/{{$a->id}}" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fa fa-info"></i></a> | <a href="/destroyActivity/{{$a->id}}" id="btnDelete"><i class="fa fa-trash"></i></a></td>
                                </tr>
                                @endforeach
                            </tbody>
                          </table>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Modal -->
<div class="modal fade" id="modalAct" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Aktivitas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/addActivity" method="post" enctype="multipart/form-data">
            @csrf
            @if (Auth::user()->role == "Admin" || Auth::user()->role == "Sadmin")
            <div class="form-group">
              <label for="#wakil">Masuk Sebagai</label>
              <select class="form-control wakil" id="wakil" style="width: 100%;" name="wakil">
                <option value="" hidden>-- Pilih --</option>
                @foreach ($user as $a)
                    <option value="{{$a->id}}">{{$a->name}}</option>
                @endforeach
                
              </select>
          </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Tanggal</label>
                <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="" name="tgl">
            </div>
            @else
            <input type="hidden" name="wakil" value="{{Auth::user()->id}}">
            <input type="hidden" name="tgl" value="{{date('Y-m-d')}}">
            @endif
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Detail Aktivitas</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="aktifitas"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Potensi Suara</label>
                <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="" name="potensi">
            </div>
            <div class="form-group">
                <label for="customFile">Foto</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFile" name="foto" required>
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
    </div>
  </div>
</div>


@endsection