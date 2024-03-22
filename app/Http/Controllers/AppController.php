<?php

namespace App\Http\Controllers;

use App\Exports\AktifitasEksport;
use App\Models\Aktifitas;
use App\Models\Akun;
use App\Models\Artikel;
use App\Models\SuaraLalu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

class AppController extends Controller
{
    //
    public function __construct(){
        date_default_timezone_set('Asia/Jakarta');
        $this->middleware('auth');
    }

    public function home(){
        $penggerak = Akun::where('role','Penggerak')->get();
        $activity = Aktifitas::all();
        return view('aplikasi.dashboard', [
            'penggerak' => $penggerak,
            'aktifitas' => $activity,
            
        ]);
    }

    public function ambilSuara(){
        $data = SuaraLalu::all();
        foreach($data as $d){
            $result[] = $d;
        }
        $hasil = json_encode($result);
        
        return $hasil;
    }

    public function userSetting(){
        return view('aplikasi.user',['user' => Akun::all()]);
    }

    public function userDetail(Akun $akun){
        $akn = Akun::where('id', $akun->id)->get();
        $user = Akun::all();
        return view('aplikasi.detail', ['akn' => $akn, 'user' => $user]);
    }

    public function article(){
        return view('aplikasi.artikel', ['ar' => Artikel::all()]);
    }

    public function addArticle(){
        return view('aplikasi.addArtikel');
    }

    public function updateArtikel(Artikel $artikel){
        $artikel = Artikel::where('id', $artikel->id)->get();
        // dd($artikel);
        return view('aplikasi.updateArtikel',compact('artikel'));
    }

    public function activity(){
        if(Auth::user()->role == "Admin"){
            $activity = Aktifitas::all();
        }else{
            $activity = Aktifitas::where('nama', Auth::user()->name)->where('kecamatan', Auth::user()->kecamatan)->where('kelurahan', Auth::user()->kelurahan)->where('rt', Auth::user()->rt)->where('rw', Auth::user()->rw)->get();
        }
        $user = Akun::where('role','Penggerak')->get();
        return view('aplikasi.activity', ['activity' => $activity , 'user' => $user]);
    }

    public function addActivity(){
        return view('aplikasi.addActivity');
    }

    public function dwnExcell(){
        return Excel::download(new AktifitasEksport,'Data Aktifitas.xlsx');
    }

    public function goSetSuara()
    {
        return view('aplikasi.setSuara',['suara' => SuaraLalu::all()]);
    }

    public function storePeta(Request $request)
    {
        SuaraLalu::create([
            'lat' => $request->lat,
            'long' => $request->long,
            'daerah' => $request->kel,
            'kecamatan' => $request->kec,
            'jml_penduduk' => $request->pend,
            'pemilih' => $request->pem
        ]);
        return back();
    }

    public function applyPeta(Request $request)
    {
        # code...
        dd($request->cekbox);
    }

    public function updatePeta(Request $request)
    {
        # code...
        SuaraLalu::where('id',$request->id)->update([
            'jml_penduduk' => $request->pend,
            'pemilih' => $request->pem
        ]);
        return back()->with('success','Data berhasil di ubah');
    }
}
