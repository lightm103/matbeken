<?php

namespace App\Http\Controllers;

use App\Models\BuktiPembayaran;
use App\Models\DataBarang;
use App\Models\DataPenjualan;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index($id)
    {
        $data = DataBarang::where('id', $id)->first();
        return view('pages.checkout.index', compact('data'));
    }

    public function invoice(Request $request)
    {
        $data = $request->query();
        $produk = DataBarang::where('id', $data['product_id'])->first();
        $data['no_invoice'] = 'INVOICE-' . random_int(1000, 9999);
        $data['date'] = Carbon::now();
        $data['total'] = $produk->harga * $data['jumlah'];
        $data['harga'] = $produk->harga;

        $data['no_transaksi'] = $data['no_invoice'];
        $data['data_barang_id'] = $produk->id;
        $data['quantity'] = $data['jumlah'];
        $data['tanggal_transaksi'] = $data['date'];
        $penjualan = DataPenjualan::create($data);

        // dd($data);
        return view('pages.invoice.index', compact('data'));
    }

    public function confirm()
    {
        return view('pages.invoice.confirm');
    }

    public function storeconfirm(Request $request)
    {
        $data = $request->validate([
            'no_invoice' => 'required',
            'file' => 'required',
        ]);
        // dd($request);
        $file = $data['file'];
        $file_name = $file->getClientOriginalName();
        $file_ext = $file->getClientOriginalExtension();
        $file_path = md5(time() . $file_name) . "." . $file_ext;

        // Set Data Image
        $data['file'] = $file_path;

        $file->storeAs('invoice', $file_path);

        BuktiPembayaran::create($data);

        return redirect()->route('home');
    }
}
