<?php

namespace App\Http\Controllers;

use App\Models\Negara;
use Illuminate\Http\Request;

class NegaraController extends Controller
{
    public function index(){

        $negara = Negara::all();
        return view ('negara.index', compact(['negara']));
    }

    public function create(){

        return view ('negara.create');
    }

    public function store(Request $request){

        Negara::create([
            'kode_negara'=> $request->kode_negara,
            'nama_negara'=> $request->nama_negara,
        ]);

        return redirect('/negara');
    }

    public function edit($id){
        
        $negara = Negara::find ($id);
        return view ('negara.edit', compact(['negara']));
    }

    public function update(Request $request, $id){

        $negara = Negara::find($id);
        $negara->update([
            'kode_negara'=> $request->kode_negara,
            'nama_negara'=> $request->nama_negara,
        ]);
        return redirect('/negara');
    }
}
