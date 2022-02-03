<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alfa6661\AutoNumber\AutoNumberTrait;

class BarangController extends Controller
{
    public function index()
    {

        return view('daftarbarang.index');
    }

    public function edit()
    {
        return view('daftarbarang.edit');
    }

    public function create()
    {
        return view('daftarbarang.create');
    }
    public function store(Request $request)
    {
        $suplier = Barang::create([
            'barang_id' => $request->barang_id,
            'nama_barang' => $request->nama_barang,
            'kode_barang' => $request->kode_barang,
            'quantity' => $request->quantity,
            'idr' => $request->idr,
        ]);

        flash()->success('Data Barang berhasil ditambahkan');

    return redirect()->back();
    }
    private function validateRequest()
    {
        return tap(request()->validate([
            'kode_barang' => 'required',
            'nama_barang' => 'required',
            'quantity' => 'required',
            'idr' => 'required',
            'image'  => 'required|mimes:jpeg,jpg,png|max:5000',
        ]), function () {
            if (request()->hasFile('image')) {
                request()->validate([
                    'image' => 'required|mimes:jpeg,jpg,png|max:5000',
                ]);
            }
        });
    }
    private function storeImage($moment)
    {
        if (request()->has('image')) {
            $moment->update([
                'image' => request()->image->store('uploads', 'public'),
            ]);

            $image = Image::make(public_path('storage/' . $moment->image))->fit(300, 300, null, 'top-left');
            $image->save();
        }
    }
}
