<?php

namespace App\Http\Controllers;

use App\Models\Aktifitas;
use App\Models\Akun;
use App\Models\EditedActivity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AktifitasController extends Controller
{
    public function __construct(){
        // date_default_timezone_set('Asia/Jakarta');
        date_default_timezone_set('Asia/Jakarta');
    }
    //
    public function create(Request $request){
        $nm = $request->foto;
        $filename = $nm->getClientOriginalName();
        $nm->move(public_path().'/img/aktifitas',$filename);

        $datAkun = Akun::where('id', $request->wakil)->get();
        foreach($datAkun as $a){
            $nama = $a->name;
            $kec = $a->kecamatan ;
            $kel = $a->kelurahan ;
            $rt = $a->rt ;
            $rw = $a->rw ;
            $pj = $a->pj ;
        }

        Aktifitas::create([
            'tgl' => $request->tgl,
            'aktifitas' => $request->aktifitas,
            'potensi' => $request->potensi,
            'foto' => $filename,
            'nama' => $nama,
            'kecamatan' => $kec,
            'kelurahan' => $kel,
            'rt' => $rt,
            'rw' => $rw,
            'pj' => $pj
        ]);

        return back()->with('success', 'Aktifitas Berhasil Di Input');
    }

    public function destroy(Aktifitas $aktifitas){
        
        $data = Aktifitas::where('id',$aktifitas->id)->get();
        foreach($data as $a){
            $tgl = $a->tgl;
            $activity = $a->aktifitas;
            $potensi = $a->potensi;
            $foto = $a->foto;
            $nama = $a->nama;
            $kecamatan = $a->kecamatan;
            $kelurahan = $a->kelurahan;
            $rt = $a->rt;
            $rw = $a->rw;
            $pj = $a->pj;
        }
        EditedActivity::create([
            'tgl' => $tgl,
            'aktifitas' => $activity,
            'potensi' => $potensi,
            'foto' => $foto,
            'nama' => $nama,
            'kecamatan' => $kecamatan,
            'kelurahan' => $kelurahan,
            'rt' => $rt,
            'rw' => $rw,
            'pj_edit' => $pj,
            'nama_edit' => Auth::user()->name,
            'kecamatan_edit' => Auth::user()->kecamatan,
            'kelurahan_edit' => Auth::user()->kelurahan,
            'rt_edit' => Auth::user()->rt,
            'rw_edit' => Auth::user()->rw,
            'tgl_edit' => date('Y-m-d'),
            'status' => 'DELETED'
        ]);
        Aktifitas::destroy($aktifitas->id);
        return back()->with('success', 'Aktifitas Berhasil Di Hapus');
    }

    public function goDetail(Aktifitas $aktifitas){
        return view('aplikasi.detailActivity', compact('aktifitas'));
    }

    public function update(Request $request){
        if($request->foto == NULL){
            $data = Aktifitas::where('id',$request->id)->get();
            foreach($data as $a){
                $tgl = $a->tgl;
                $activity = $a->aktifitas;
                $potensi = $a->potensi;
                $foto = $a->foto;
                $nama = $a->nama;
                $kecamatan = $a->kecamatan;
                $kelurahan = $a->kelurahan;
                $rt = $a->rt;
                $rw = $a->rw;
                $pj = $a->pj;
            }
            EditedActivity::create([
                'tgl' => $tgl,
                'aktifitas' => $activity,
                'potensi' => $potensi,
                'foto' => $foto,
                'nama' => $nama,
                'kecamatan' => $kecamatan,
                'kelurahan' => $kelurahan,
                'rt' => $rt,
                'rw' => $rw,
                'pj_edit' => $pj,
                'nama_edit' => Auth::user()->name,
                'kecamatan_edit' => Auth::user()->kecamatan,
                'kelurahan_edit' => Auth::user()->kelurahan,
                'rt_edit' => Auth::user()->rt,
                'rw_edit' => Auth::user()->rw,
                'tgl_edit' => date('Y-m-d'),
                'status' => 'EDITED'
            ]);

            Aktifitas::where('id',$request->id)->update([
                'tgl' => date('Y-m-d'),
                'aktifitas' => $request->aktifitas,
                'potensi' => $request->potensi,
                'nama' => Auth::user()->name,
                'kecamatan' => Auth::user()->kecamatan,
                'kelurahan' => Auth::user()->kelurahan,
                'rt' => Auth::user()->rt,
                'rw' => Auth::user()->rw,
                'pj' => Auth::user()->pj
            ]);
        }else{
            $data = Aktifitas::where('id',$request->id)->get();
            foreach($data as $a){
                $tgl = $a->tgl;
                $activity = $a->aktifitas;
                $potensi = $a->potensi;
                $foto = $a->foto;
                $nama = $a->nama;
                $kecamatan = $a->kecamatan;
                $kelurahan = $a->kelurahan;
                $rt = $a->rt;
                $rw = $a->rw;
                $pj = $a->pj;
            }
            EditedActivity::create([
                'tgl' => $tgl,
                'aktifitas' => $activity,
                'potensi' => $potensi,
                'foto' => $foto,
                'nama' => $nama,
                'kecamatan' => $kecamatan,
                'kelurahan' => $kelurahan,
                'rt' => $rt,
                'rw' => $rw,
                'pj_edit' => $pj,
                'nama_edit' => Auth::user()->name,
                'kecamatan_edit' => Auth::user()->kecamatan,
                'kelurahan_edit' => Auth::user()->kelurahan,
                'rt_edit' => Auth::user()->rt,
                'rw_edit' => Auth::user()->rw,
                'tgl_edit' => date('Y-m-d'),
                'status' => 'EDITED'
            ]);
            $nm = $request->foto;
            $filename = $nm->getClientOriginalName();
            $nm->move(public_path().'/img/aktifitas',$filename);

            Aktifitas::where('id',$request->id)->update([
                'tgl' => date('Y-m-d'),
                'aktifitas' => $request->aktifitas,
                'potensi' => $request->potensi,
                'foto' => $filename,
                'nama' => Auth::user()->name,
                'kecamatan' => Auth::user()->kecamatan,
                'kelurahan' => Auth::user()->kelurahan,
                'rt' => Auth::user()->rt,
                'rw' => Auth::user()->rw,
                'pj' => Auth::user()->pj
            ]);
        }
        return redirect('/activity')->with('success','Aktifitas Berhasil Di Ubah');
    }
}
