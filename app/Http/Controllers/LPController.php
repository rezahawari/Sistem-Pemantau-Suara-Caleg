<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class LPController extends Controller
{
    //


    public function coba(){
        return view('coba');
    }

    public function goHome(){
        // $isi = Artikel::latest()->get()->take(6);

        // return view('LP.home', compact('isi'));
        return redirect('/dashboard');
    }

    public function goArtikel(Artikel $artikel){
        // $artikel = Artikel::where('id', $artikel->id)->get();
        // $berita = Artikel::latest()->get()->take(6);
        // return view('LP.artikel', ['artikel' => $artikel , 'berita' => $berita]);
        return redirect('/dashboard');
    }

    public function goAllNews()
    {
        # code...
        // return view('LP.allNews', ['artikel' => Artikel::latest()->paginate(4)]);
        return redirect('/dashboard');
    }
}
