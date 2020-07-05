<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(Request $req)
    {
    	// dd($req->all());
    	$artikel = \App\artikel::all();
    	return view('artikel.index', ['artikel' => $artikel]);
    }


    public function create()
    {
    	return view('artikel.add');
    }

    public function store(Request $req)
    {
    	// dd($req->all());
    	$artikel = \App\Artikel::create($req->all());
    	return redirect('/artikel');
    }

    public function edit(Request $req, $id)
    {
        $artikel = \App\Artikel::find($id);
        //dd($siswa); daydam buat ngecek saja.
        return view('artikel.edit',['artikel'=>$artikel]);
    }

    public function update (Request $request, $id)
    {
        // $artikel = \App\Artikel::find($id);
        // $artikel->update($req->all());


    	$artikel = \App\Artikel::find($id);
    	$artikel->judul = $request->get('judul');
    	$artikel->isi = $request->get('isi');
    	$artikel->update();
        return redirect('/artikel');
    }

    public function delete($id)
    {
        $artikel = \App\Artikel::find($id);
        $artikel->delete($artikel);
        return redirect('/artikel');
    }

    public function detail($id)
    {
    	$artikel = \App\Artikel::find($id);
    	$tags = \App\Tags::all();
    	// dd($pertanyaan->jawaban);
    	return view('artikel.detail', ['artikel' => $artikel, 'tags' => $tags]);

    	// return view('jawaban.index', ['pertanyaan' => $pertanyaan, 'jawaban'=> $jawaban]);

    }
}
