@if (Auth::user()->role != "Admin" || Auth::user()->role == "Sadmin")
<script>window.location="/activity"</script>    
@endif
@extends('aplikasi.index')
@section('content')
@php
    use Illuminate\Support\Facades\Crypt;
@endphp
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>User</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                  <li class="breadcrumb-item active">User</li>
                </ol>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>
    
        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    
                    <a href="#modalAddUser" data-toggle="modal" class="btn btn-success btn-sm"><i class="fa fa-plus"></i></a>
                    
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table id="tabel1" class="table table-bordered table-hover">
                      <thead>
                      <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Pass</th>
                        <th>Role</th>
                        <th>Aksi</th>
                      </tr>
                      </thead>
                      <tbody>
                          @php
                              $no = 1;
                          @endphp
                          @foreach ($user as $a)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$a->name}}</td>
                                <td>{{$a->email}}</td>
                                <td>{{Crypt::decrypt($a->pass_view)}}</td>
                                <td>{{$a->role}}</td>
                                <td><a href="/kelola-user/{{$a->id}}"><i class="fa fa-info"></i></a> | <a href="/destroyUser/{{$a->id}}"><i class="fa fa-trash"></i></a></td>
                            </tr>
                          @endforeach
                          
                      </tbody>
                    </table>
                  </div>
                  <!-- /.card-body -->
                </div>
                
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
      <!-- Modal Tambah User -->
    <div class="modal fade" id="modalAddUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Tambah User</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="/storeAkun" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">
                        <label for="exampleInputEmail1">Username</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Password</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="pass">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama">
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">NIK</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nik">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">TGL Lahir</label>
                                <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="tgl">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Alamat</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="alamat"></textarea>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="#kelurahan">Kelurahan</label>
                                <select class="form-control" id="kelurahan" style="width: 100%;" name="kelurahan">
                                  <option value="" hidden>-- Pilih --</option>
                                  <option>Banyumanik</option>
                                  <option>Gedawang</option>
                                  <option>Jabungan</option>
                                  <option>Ngesrep</option>
                                  <option>Padangsari</option>
                                  <option>Pedalangan</option>
                                  <option>Pudakpayung</option>
                                  <option>Srondol Kulon</option>
                                  <option>Srondol Wetan</option>
                                  <option>Sumurboto</option>
                                  <option>Tinjomoyo</option>
                                  <option>Candi</option>
                                  <option>Jatingaleh</option>
                                  <option>Kaliwiru</option>
                                  <option>Karanganyar Gunung</option>
                                  <option>Tegalsari</option>
                                  <option>Wonotingal</option>
                                  <option>Bendanduwur</option>
                                  <option>Bendan Ngisor</option>
                                  <option>Bendungan</option>
                                  <option>Gajahmungkur</option>
                                  <option>Karangrejo</option>
                                  <option>Lempongsari</option>
                                  <option>Petompon</option>
                                  <option>Sampangan</option>
                                  <option>Gayamsari</option>
                                  <option>Kaligawe</option>
                                  <option>Pandean Lamper</option>
                                  <option>Sambirejo</option>
                                  <option>Sawahbesar</option>
                                  <option>Siwalan</option>
                                  <option>Tambakrejo</option>
                                  <option>Bangetayu Kulon</option>
                                  <option>Bangetayu Wetan</option>
                                  <option>Banjardowo</option>
                                  <option>Gebangsari</option>
                                  <option>Genuksari</option>
                                  <option>Karangroto</option>
                                  <option>Kudu</option>
                                  <option>Muktiharjo Lor</option>
                                  <option>Penggaron Lor</option>
                                  <option>Sembungharjo</option>
                                  <option>Terboyo Kulon</option>
                                  <option>Terboyo Wetan</option>
                                  <option>Trimulyo</option>
                                  <option>Cepoko</option>
                                  <option>Gunungpati</option>
                                  <option>Jatirejo</option>
                                  <option>Kalisegoro</option>
                                  <option>Kandri</option>
                                  <option>Mangunsari</option>
                                  <option>Ngijo</option>
                                  <option>Nongkosawit</option>
                                  <option>Pakintelan</option>
                                  <option>Patemon</option>
                                  <option>Plalangan</option>
                                  <option>Pongangan</option>
                                  <option>Sadeng</option>
                                  <option>Sekaran</option>
                                  <option>Sukorejo</option>
                                  <option>Sumurejo</option>
                                  <option>Bubakan</option>
                                  <option>Cangkiran</option>
                                  <option>Jatibarang</option>
                                  <option>Jatisari</option>
                                  <option>Karangmalang</option>
                                  <option>Kedungpane</option>
                                  <option>Mijen</option>
                                  <option>Ngadirgo</option>
                                  <option>Pesantren</option>
                                  <option>Polaman</option>
                                  <option>Purwosari</option>
                                  <option>Tambangan</option>
                                  <option>Wonolopo</option>
                                  <option>Wonoplumbon</option>
                                  <option>Bambankerep</option>
                                  <option>Bringin</option>
                                  <option>Gondoriyo</option>
                                  <option>Kalipancur</option>
                                  <option>Ngaliyan</option>
                                  <option>Podorejo</option>
                                  <option>Purwoyoso</option>
                                  <option>Tambakaji</option>
                                  <option>Wonosari</option>
                                  <option>Wates</option>
                                  <option>Gemah</option>
                                  <option>Kalicari</option>
                                  <option>Muktiharjo Kidul</option>
                                  <option>Palebon</option>
                                  <option>Pedurungan Kidul</option>
                                  <option>Pedurungan Lor</option>
                                  <option>Pedurungan Tengah</option>
                                  <option>Penggaron Kidul</option>
                                  <option>Plamongan Sari</option>
                                  <option>Tlogomulyo</option>
                                  <option>Tlogosari Kulon</option>
                                  <option>Tlogosari Wetan</option>
                                  <option>Bojongsalaman</option>
                                  <option>Bongsari</option>
                                  <option>Cabean</option>
                                  <option>Gisikdrono</option>
                                  <option>Kalibanteng Kidul</option>
                                  <option>Kalibanteng Kulon</option>
                                  <option>Karangayu</option>
                                  <option>Kembangarum</option>
                                  <option>Krapyak</option>
                                  <option>Krobokan</option>
                                  <option>Manyaran</option>
                                  <option>Ngemplak Simongan</option>
                                  <option>Salaman Mloyo</option>
                                  <option>Tabakharjo</option>
                                  <option>Tawang Mas</option>
                                  <option>Tawangsari</option>
                                  <option>Barusari</option>
                                  <option>Bulustalan</option>
                                  <option>Lamper Kidul</option>
                                  <option>Lamper Lor</option>
                                  <option>Lamper Tengah</option>
                                  <option>Mugassari</option>
                                  <option>Peterongan</option>
                                  <option>Pleburan</option>
                                  <option>Randusari</option>
                                  <option>Wonodri</option>
                                  <option>Bangunharjo</option>
                                  <option>Brumbungan</option>
                                  <option>Gabahan</option>
                                  <option>Jagalan</option>
                                  <option>Karangkidul</option>
                                  <option>Kauman</option>
                                  <option>Kembangsari</option>
                                  <option>Kranggan</option>
                                  <option>Miroto</option>
                                  <option>Pandansari</option>
                                  <option>Pekunden</option>
                                  <option>Pendrikan Kidul</option>
                                  <option>Pendrikan Lor</option>
                                  <option>Purwodinatan</option>
                                  <option>Sekayu</option>
                                  <option>Bugangan</option>
                                  <option>Karangtempel</option>
                                  <option>Karangturi</option>
                                  <option>Kebonagung</option>
                                  <option>Kemijen</option>
                                  <option>Mlatibaru</option>
                                  <option>Mlatiharjo</option>
                                  <option>Rejomulyo</option>
                                  <option>Rejosari</option>
                                  <option>Sarirejo</option>
                                  <option>Bandarharjo</option>
                                  <option>Bulu Lor</option>
                                  <option>Dadapsari</option>
                                  <option>Kuningan</option>
                                  <option>Panggung Kidul</option>
                                  <option>Panggung Lor</option>
                                  <option>Plombokan</option>
                                  <option>Purwosari</option>
                                  <option>Tanjung Mas</option>
                                  <option>Bulusan</option>
                                  <option>Jangli</option>
                                  <option>Kedungmundu</option>
                                  <option>Kramas</option>
                                  <option>Mangunharjo</option>
                                  <option>Meteseh</option>
                                  <option>Rowosari</option>
                                  <option>Sambiroto</option>
                                  <option>Sendangguwo</option>
                                  <option>Sendangmulyo</option>
                                  <option>Tandang</option>
                                  <option>Tembalang</option>
                                  <option>Jerakah</option>
                                  <option>Karanganyar</option>
                                  <option>Mangkang Kulon</option>
                                  <option>Mangkang Wetan</option>
                                  <option>Mangunharjo</option>
                                  <option>Randu Garut</option>
                                  <option>Tugurejo</option>
                                </select>
                            </div>
                                      
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="#kelurahan">Kecamatan</label>
                                <select class="form-control" id="kecamatan" style="width: 100%;" name="kecamatan">
                                  <option value="" hidden>-- Pilih --</option>
                                  <option>Banyumanik</option>
                                  <option>Candisari</option>
                                  <option>Gajahmungkur</option>
                                  <option>Gayamsari</option>
                                  <option>Genuk</option>
                                  <option>Gunungpati</option>
                                  <option>Mijen</option>
                                  <option>Ngaliyan</option>
                                  <option>Pedurungan</option>
                                  <option>Semarang Barat</option>
                                  <option>Semarang Selatan</option>
                                  <option>Semarang Tengah</option>
                                  <option>Semarang Timur</option>
                                  <option>Semarang Utara</option>
                                  <option>Tembalang</option>
                                  <option>Tugu</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">RT</label>
                                <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="rt">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">RW</label>
                                <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="rw">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Potensi</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="potensi">
                    </div>
                    <div class="form-group">
                            <label for="#kelurahan">PJ</label>
                            <select class="form-control" name="pj">
                              <option value="" hidden>-- Pilih --</option>
                              @foreach ($user as $u)
                                  @if ($u->role == "Admin")
                                  <option value="{{$u->name}}">{{$u->name}}</option>
                                  @endif
                              @endforeach
                            </select>
                        
                    </div>
                    <div class="form-group">
                            <label for="#kelurahan">Role</label>
                            <select class="form-control" name="role">
                              <option value="" hidden>-- Pilih --</option>
                              <option>Admin</option>
                              <option>Penggerak</option>
                            </select>
                        
                    </div>
                    <div class="form-group">
                        <label for="">Foto KTP</label>
                        <div class="input-group mb-3">
                            <div class="custom-file">
                                <input type="file" name="ktp" id="">
                                {{-- <input type="file" class="custom-file-input" id="inputGroupFile02" name="ktp">
                                <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose file</label> --}}
                            </div>
                        </div>
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
      
    <!-- Modal Detail -->
<div class="modal fade" id="modalDetail" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Detail</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-md-6">
                
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
      


      
@endsection