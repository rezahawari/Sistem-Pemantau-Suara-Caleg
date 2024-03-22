<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ArtikelController extends Controller
{
    //
    public function store(Request $request){
        $f1 = NULL;
        $f2 = NULL;
        $f3 = NULL;
        $f4 = NULL;
        $f5 = NULL;
        if($request->foto_1 != NULL){
            $foto_1 = $request->foto_1;
            $filename = $foto_1->getClientOriginalName();
            $foto_1->move(public_path().'/img/artikel',$filename);
            $f1 = $filename;
        }

        if($request->foto_2 != NULL){
            $foto_2 = $request->foto_2;
            $filename = $foto_2->getClientOriginalName();
            $foto_2->move(public_path().'/img/artikel',$filename);
            $f2 = $filename;
        }

        if($request->foto_3 != NULL){
            $foto_3 = $request->foto_3;
            $filename = $foto_3->getClientOriginalName();
            $foto_3->move(public_path().'/img/artikel',$filename);
            $f3 = $filename;
        }

        if($request->foto_4 != NULL){
            $foto_4 = $request->foto_4;
            $filename = $foto_4->getClientOriginalName();
            $foto_4->move(public_path().'/img/artikel',$filename);
            $f4 = $filename;
        }

        if($request->foto_5 != NULL){
            $foto_5 = $request->foto_5;
            $filename = $foto_5->getClientOriginalName();
            $foto_5->move(public_path().'/img/artikel',$filename);
            $f5 = $filename;
        }

        Artikel::create([
            'tgl' => date('Y-m-d'),
            'pengapload' => Auth::user()->name,
            'role' => Auth::user()->role,
            'slug' => Str::slug($request->judul,'-'),
            'judul' => $request->judul,
            'ringkasan' => $request->ringkasan,
            'isi' => $request->isi,
            'foto_1' => $f1,
            'foto_2' => $f2,
            'foto_3' => $f3,
            'foto_4' => $f4,
            'foto_5' => $f5,
        ]);

        return redirect('/kelola-artikel')->with('success', 'Artikel Berhasil Di Upload');
    }

    public function update(Request $request){
        $daFot = Artikel::where('id',$request->id)->get();
        foreach($daFot as $a){
            $f1 = $a->foto_1;
            $f2 = $a->foto_2;
            $f3 = $a->foto_3;
            $f4 = $a->foto_4;
            $f5 = $a->foto_5;
        }
        if($request->foto_1 != NULL){
            $foto_1 = $request->foto_1;
            $filename = $foto_1->getClientOriginalName();
            $foto_1->move(public_path().'/img/artikel',$filename);
            $f1 = $filename;

        }

        if($request->foto_2 != NULL){
            $foto_2 = $request->foto_2;
            $filename = $foto_2->getClientOriginalName();
            $foto_2->move(public_path().'/img/artikel',$filename);
            $f2 = $filename;
        }

        if($request->foto_3 != NULL){
            $foto_3 = $request->foto_3;
            $filename = $foto_3->getClientOriginalName();
            $foto_3->move(public_path().'/img/artikel',$filename);
            $f3 = $filename;
        }

        if($request->foto_4 != NULL){
            $foto_4 = $request->foto_4;
            $filename = $foto_4->getClientOriginalName();
            $foto_4->move(public_path().'/img/artikel',$filename);
            $f4 = $filename;
        }

        if($request->foto_5 != NULL){
            $foto_5 = $request->foto_5;
            $filename = $foto_5->getClientOriginalName();
            $foto_5->move(public_path().'/img/artikel',$filename);
            $f5 = $filename;
        }

        Artikel::where('id',$request->id)->update([
            'tgl' => date('Y-m-d'),
            'pengapload' => Auth::user()->name,
            'role' => Auth::user()->role,
            'slug' => Str::slug($request->judul,'-'),
            'judul' => $request->judul,
            'ringkasan' => $request->ringkasan,
            'isi' => $request->isi,
            'foto_1' => $f1,
            'foto_2' => $f2,
            'foto_3' => $f3,
            'foto_4' => $f4,
            'foto_5' => $f5,
        ]);

        
        return redirect('/kelola-artikel')->with('success', 'Artikel Berhasil Di Ubah');
    }

    public function destroy(Artikel $artikel){
        Artikel::destroy($artikel->id);
        return back()->with('success', 'Artikel Berhasil Di Hapus');
    }

    public function dest1(Artikel $artikel){
        Artikel::where('id' , $artikel->id)->update([
            'foto_1' => NULL
        ]);
        return back()->with('success', 'Foto 1 Berhasil Di Hapus');
    }
    
    public function dest2(Artikel $artikel){
        Artikel::where('id' , $artikel->id)->update([
            'foto_2' => NULL
        ]);
        return back()->with('success', 'Foto 2 Berhasil Di Hapus');
    }

    public function dest3(Artikel $artikel){
        Artikel::where('id' , $artikel->id)->update([
            'foto_3' => NULL
        ]);
        return back()->with('success', 'Foto 3 Berhasil Di Hapus');
    }

    public function dest4(Artikel $artikel){
        Artikel::where('id' , $artikel->id)->update([
            'foto_4' => NULL
        ]);
        return back()->with('success', 'Foto 4 Berhasil Di Hapus');
    }
    
    public function dest5(Artikel $artikel){
        Artikel::where('id' , $artikel->id)->update([
            'foto_5' => NULL
        ]);
        return back()->with('success', 'Foto 5 Berhasil Di Hapus');
    }

}
