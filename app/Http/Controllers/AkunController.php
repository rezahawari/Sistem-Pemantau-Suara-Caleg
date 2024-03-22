<?php

namespace App\Http\Controllers;

use App\Models\Akun;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

class AkunController extends Controller
{
    //
    public function store(Request $request){
        $nm = $request->ktp;
        $filename = $nm->getClientOriginalName();
        $nm->move(public_path().'/img/ktp',$filename);

        Akun::create([
            'name' => $request->nama,
            'email' => $request->username,
            'password' => Hash::make($request->pass),
            'pass_view' => Crypt::encrypt($request->pass),
            'role' => $request->role,
            'nik' => $request->nik,
            'ktp' => $filename,
            'tgl_lahir' => $request->tgl,
            'alamat' => $request->alamat,
            'kecamatan' => $request->kecamatan,
            'kelurahan' => $request->kelurahan,
            'rt' => $request->rt,
            'rw' => $request->rw,
            'potensi' => $request->potensi,
            'pj' => $request->pj,
            'foto_profil' => NULL
        ]);

        return back()->with('success', 'Akun Berhasil Dibuat');
    }

    public function update(Request $request){
        if($request->ktp == NULL){
            Akun::where('id',$request->id)->update([
                'name' => $request->nama,
                'email' => $request->username,
                'password' => Hash::make($request->pass),
                'pass_view' => Crypt::encrypt($request->pass),
                'role' => $request->role,
                'nik' => $request->nik,
                'tgl_lahir' => $request->tgl,
                'alamat' => $request->alamat,
                'kecamatan' => $request->kecamatan,
                'kelurahan' => $request->kelurahan,
                'rt' => $request->rt,
                'rw' => $request->rw,
                'potensi' => $request->potensi,
                'pj' => $request->pj
            ]);
        }else{
            $nm = $request->ktp;
            $filename = $nm->getClientOriginalName();
            $nm->move(public_path().'/img/ktp',$filename);

            Akun::where('id',$request->id)->update([
                'name' => $request->nama,
                'email' => $request->username,
                'password' => Hash::make($request->pass),
                'pass_view' => Crypt::encrypt($request->pass),
                'role' => $request->role,
                'nik' => $request->nik,
                'ktp' => $filename,
                'tgl_lahir' => $request->tgl,
                'alamat' => $request->alamat,
                'kecamatan' => $request->kecamatan,
                'kelurahan' => $request->kelurahan,
                'rt' => $request->rt,
                'rw' => $request->rw,
                'potensi' => $request->potensi,
                'pj' => $request->pj
            ]);
        }
        return back()->with('success', 'Data Berhasil Di Update');
    }

    public function destroy(Akun $akun){
        Akun::destroy($akun->id);
        return back()->with('success', 'Akun Berhasil Dihapus');
    }
}
