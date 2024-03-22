@if (Auth::user()->role != "Admin" || Auth::user()->role == "Sadmin")
<script>window.location="/activity"</script>    
@endif
@extends('aplikasi.index')
@section('content')
    <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Setting Peta Suara</h1>
            
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Setting</a></li>
              <li class="breadcrumb-item active">Suara</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
        <div class="card">
            <div class="card-header">
                <a href="#modalTambah" data-toggle="modal" class="btn btn-success btn-sm"><i class="fa fa-plus"></i></a>
                @if (Session::has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{Session::get('success')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                @endif
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Kecamatan</th>
                                <th>Kelurahan</th>
                                <th>JML Penduduk</th>
                                <th>JML Suara</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            <form action="/applyPeta" method="POST">
                              @csrf
                            @foreach ($suara as $a)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$a->kecamatan}}</td>
                                <td>{{$a->daerah}}</td>
                                <td>{{$a->jml_penduduk}}</td>
                                <td>{{$a->pemilih}}</td>
                                <td>
                                    {{-- <input type="checkbox" data-toggle="toggle" data-onstyle="success"> --}}
                                    <button data-target="#modaledit" data-toggle="modal" class="btn btn-primary" data-id={{$a->id}} data-jml={{$a->jml_penduduk}} data-pemilih={{$a->pemilih}}>Edit</button>
                                </td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                        {{-- <button type="submit">submit</button> --}}
                      </form>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Modal -->
<div class="modal fade" id="modalTambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/storePeta" method="post">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Lat</label>
                <input type="text" class="form-control" name="lat" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Long</label>
                <input type="text" class="form-control" name="long" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Kelurahan</label>
                <input type="text" class="form-control" name="kel" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Kecamatan</label>
                <input type="text" class="form-control" name="kec" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Penduduk</label>
                <input type="text" class="form-control" name="pend" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Pemilih</label>
                <input type="text" class="form-control" name="pem" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
        </form>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="modaledit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Kelurahan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/updatePeta" method="post">
            @csrf
            <input type="hidden" name="id" id="idEdit">
            <div class="form-group">
                <label for="exampleInputEmail1">Penduduk</label>
                <input type="text" class="form-control" name="pend" id="penduduk">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Pemilih</label>
                <input type="text" class="form-control" name="pem" id="pemilih">
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
        </form>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"></script> --}}
<script>
$('#modaledit').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var id = button.data('id') // Extract info from data-* attributes
  var jml = button.data('jml') // Extract info from data-* attributes
  var pemilih = button.data('pemilih') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-body #idEdit').val(id)
  modal.find('.modal-body #penduduk').val(jml)
  modal.find('.modal-body #pemilih').val(pemilih)
})
</script>
@endsection