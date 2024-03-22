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
                <h1>Kelola Artikel</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                  <li class="breadcrumb-item active">Artikel</li>
                </ol>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>

        <section class="content">
            <div class="card">
                <div class="card-header">
                    <a href="/kelola-artikel/add" class="btn btn-success btn-sm"><i class="fa fa-plus"></i></a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Judul</th>
                                    <th>Tgl Upload</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                              @php
                                  $no = 1;
                              @endphp
                                @foreach ($ar as $a)    
                                @php
                                    $isi = $a->isi;
                                @endphp
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$a->judul}}</td>
                                    <td>{{$a->tgl}}</td>
                                    <td><a href="/view/{{$a->id}}/{{$a->slug}}" data-toggle="tooltip" data-placement="top" title="View on Page"><i class="fa fa-file-alt"></i></a> | <a href="/update-artikel/{{$a->id}}/{{$a->slug}}" data-toggle="tooltip" data-placement="top" title="Edit Artikel"><i class="fa fa-edit"></i></a> | <a href="/deleteArtikel/{{$a->id}}" id="btnDelete"><i class="fa fa-trash"></i></a></td>
                                </tr>
                                @endforeach
                            </tbody>
                          </table>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection