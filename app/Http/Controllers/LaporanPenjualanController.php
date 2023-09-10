<?php

namespace App\Http\Controllers;

use App\Models\DataPenjualan;
use Illuminate\Http\Request;

class LaporanPenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DataPenjualan::all();
        return view('pages.laporanpenjualan.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
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

    public function filter(Request $request){

        $start_date =$request->start_date;
        $end_date =$request->end_date;

        $data = DataPenjualan::whereDate('created_at','>=',$start_date)
                                ->whereDate('created_at','<=',$end_date)
                                ->get();

        return view('pages.laporanpenjualan.index',compact('data'));
    }
}
