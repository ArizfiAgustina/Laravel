<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\negara;
use Illuminate\Http\Request;

class negaraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = negara::orderBy('kode_negara','asc')->get();
        return response()->json([
            'status' => true,
            'message' => 'Data berhasil ditemukan',
            'data' => $data
        ],200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
