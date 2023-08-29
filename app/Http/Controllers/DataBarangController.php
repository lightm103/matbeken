<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDataBarangRequest;
use App\Models\DataBarang;
use Illuminate\Http\Request;

class DataBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $databarang = DataBarang::all();
        return view('pages.data-barang.index', compact('databarang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('pages.data-barang.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDataBarangRequest $request)
    {
        $data = $request->validated();

        $file = $data['foto'];
        $file_name = $file->getClientOriginalName();
        $file_ext = $file->getClientOriginalExtension();
        $file_path = md5(time() . $file_name) . "." . $file_ext;

        // Set Data Image
        $data['foto'] = $file_path;

        $file->storeAs('fotobarang', $file_path);

        DataBarang::create($data);
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('pages.data-barang.edit');
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
        $databarang = DataBarang::where('id',$id)->first();
        $databarang->delete();
        return back();
    }
}
