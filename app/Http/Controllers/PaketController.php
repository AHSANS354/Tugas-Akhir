<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paket;
use PDF;
use Alert;

class PaketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $paket = Paket::all();
        return view('admin.paket.index', compact('paket'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.paket.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nama'=>'required|unique:paket|max:30',
            'haircut'=>'required|numeric',
            'keramas'=>'required|numeric',
            'tonic'=>'required|numeric',
            'creambath'=>'required|numeric',
            'harga'=>'required|numeric',
        ],[
            'nama.required'=>'Nama harus diisi!',
            'nama.unique'=>'Nama sudah ada!',
            'nama.max'=>'Maksimal 30 karakter!',
            'haircut.required'=>'Haircut harus diisi!',
            'haircut.numeric'=>'Haircut hanya boleh angka!',
            'keramas.required'=>'Keramas harus diisi!',
            'keramas.numeric'=>'Keramas hanya boleh angka!',
            'tonic.required'=>'Tonic harus diisi!',
            'tonic.numeric'=>'Tonic hanya boleh angka!',
            'creambath.required'=>'Creambath harus diisi!',
            'creambath.numeric'=>'Creambath hanya boleh angka!',
            'harga.required'=>'Harga harus diisi!',
            'harga.numeric'=>'Harap masukkan angka!'
        ]);

        $paket = new Paket;
        $paket->nama = $request->nama;
        $paket->haircut = $request->haircut;
        $paket->keramas = $request->keramas;
        $paket->tonic = $request->tonic;
        $paket->creambath = $request->creambath;
        $paket->harga = $request->harga;
        $paket->save();
        toast('Berhasil Menambahkan Paket!','success');
        return redirect('admin/paket');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $paket = Paket::all()->where('id', $id);
            return view('admin.paket.show', compact('paket'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $paket = Paket::all()->where('id', $id);
        return view('admin.paket.edit', compact('paket'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'nama'=>'required|max:30',
            'deskripsi'=>'required|max:100|min:8',
            'harga'=>'required|numeric',
        ],[
            'nama.required'=>'Nama harus diisi!',
            'nama.max'=>'Maksimal 30 karakter!',
            'deskripsi.required'=>'Deskripsi harus diisi!',
            'deskripsi.max'=>'Maximal 100 karakter!',
            'deskripsi.min'=>'Minimal 8 karakter!',
            'harga.required'=>'Harga harus diisi!',
            'harga.numeric'=>'Harap masukkan angka!'
        ]);
        $paket = Paket::find($id);
        $paket->nama = $request->nama;
        $paket->deskripsi = $request->deskripsi;
        $paket->harga = $request->harga;
        $paket->save();
        toast('Berhasil Mengubah Data!','success');
        return redirect('/admin/paket');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $paket = Paket::find($id);
        $paket->delete();
        toast('Berhasil Menghapus Paket!', 'success');
        return redirect('admin/paket');
    }

    public function exportPDF()
    {
        $paket = Paket::all();
        $tgl = now();
        $pdf = PDF::loadView('admin.paket.exportPDF', ['paket'=>$paket,'tgl'=>$tgl]);
        return $pdf->stream();
    }
}
