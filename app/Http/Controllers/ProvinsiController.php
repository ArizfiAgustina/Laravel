<?php

namespace App\Http\Controllers;

use App\Models\Provinsi;
use Illuminate\Http\Request;

class ProvinsiController extends Controller
{
    public function index() 
    {
        $provinsi = Provinsi::all();
        return view ('provinsi.index', compact(['provinsi']));
    }

    public function create() 
    {
        return view ('provinsi.create');
    }

    public function store(Request $request) 
    {
    
        Provinsi::create([
            'kode_provinsi'=> $request->kode_provinsi,
            'nama_provinsi'=> $request->nama_provinsi,
            'kota'=> $request->kota,
        ]);

        return redirect('/provinsi');
    }

    public function edit($id){
        
        $provinsi = Provinsi::find ($id);
        return view ('provinsi.edit', compact(['provinsi']));
    }

    public function update(Request $request, $id){

        $provinsi = Provinsi::find($id);
        $provinsi->update([
            'kode_provinsi'=> $request->kode_provinsi,
            'nama_provinsi'=> $request->nama_provinsi,
            'kota'=> $request->kota,
        ]);
        return redirect('/provinsi');
    }
}
