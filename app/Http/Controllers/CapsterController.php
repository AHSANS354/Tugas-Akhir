<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Capster;
use PDF;

class CapsterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $capster = Capster::all();
        return view('admin.capster.index', ['capster' => $capster]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.capster.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nama'=>'required|unique:capster|max:45',
            'no_telp'=>'required|numeric',
            'email'=>'required|email',
            'deskripsi'=>'max:50|min:6',
            'foto'=>'image|mimes:png,jpg,jpeg,svg|max:2048',
        ],
        [
            'nama.required'=>'Nama harus diisi!',
            'nama.unique'=>'Nama sudah ada!',
            'nama.max'=>'Maksimal 45 karakter!',
            'no_telp.required'=>'No Telpon harus diisi!',
            'no_telp.numeric'=>'Hanya boleh angka!',
            'email.required'=>'Email harus diisi!',
            'email.email'=>'Format email salah!',
            'deskripsi.required'=>'Deskripsi harus diisi!',
            'deskripsi.max'=>'Maximal 50 karakter!',
            'deskripsi.min'=>'Minimal 6 karakter!',
            'foto.image'=>'File yang dipilih bukan foto!',
            'foto.mimes'=>'Format foto hanya png, jpg dan svg!',
            'foto.max'=>'Ukuran maksimal 2MB!'
        ]);

        $capster = new Capster;
        $capster -> nama = $request->nama;
        $capster -> no_telp = $request->no_telp;
        $capster -> email = $request->email;
        $capster-> deskripsi = $request->deskripsi;
        if ($request->hasFile('foto')) {
            // Generate unique filename using timestamp
            $timestamp = now()->timestamp;
            $filename = $timestamp . '.' . $request->foto->Extension();
    
            // Move the file
            $request->foto->move(public_path('admin/img/capster'), $filename);
    
            $capster->foto = $filename;
        }
        $capster->save();
        toast('Berhasil Menambahkan Capster!', 'success');
        return redirect('admin/capster');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $capster = Capster::all()->where('id', $id);
        return view('admin.capster.show', compact('capster'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $capster = Capster::all()->where('id',$id);
        return view ('admin.capster.edit',compact('capster'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $capster = Capster::find($id);
        // Hapus foto lama jika ada
    if ($capster->foto) {
        $oldPhotoPath = public_path('admin/img/capster/' . $capster->foto);
        if (file_exists($oldPhotoPath)) {
            unlink($oldPhotoPath);
        }
    }

        $request->validate([
            'nama'=>'required|max:45',
            'no_telp'=>'required|numeric',
            'email'=>'required|email',
            'deskripsi'=>'max:50|min:6',
            'foto'=>'image|mimes:png,jpg,jpeg,svg|max:2048',
        ],
        [
            'nama.required'=>'Nama harus diisi!',
            'nama.max'=>'Maksimal 45 karakter!',
            'no_telp.required'=>'No Telpon harus diisi!',
            'no_telp.numeric'=>'Hanya boleh angka!',
            'email.required'=>'Email harus diisi!',
            'email.email'=>'Format email salah!',
            'deskripsi.required'=>'Deskripsi harus diisi!',
            'deskripsi.max'=>'Maximal 50 karakter!',
            'deskripsi.min'=>'Minimal 6 karakter!',
            'foto.image'=>'File yang dipilih bukan foto!',
            'foto.mimes'=>'Format foto hanya png, jpg dan svg!',
            'foto.max'=>'Ukuran maksimal 2MB!'
        ]);

        $capster = Capster::find($id);
        $capster -> nama = $request->nama;
        $capster -> no_telp = $request->no_telp;
        $capster -> email = $request->email;
        $capster-> deskripsi = $request->deskripsi;
        if ($request->hasFile('foto')) {
            // Generate unique filename using timestamp
            $timestamp = now()->timestamp;
            $filename = $timestamp . '.' . $request->foto->Extension();
    
            // Move the file
            $request->foto->move(public_path('admin/img/capster'), $filename);
    
            $capster->foto = $filename;
        }
        $capster->save();
        toast('Berhasil Mengubah Capster!', 'success');
        return redirect('admin/capster');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $capster = Capster::find($id);
    if (!$capster) {
        toast('Capster tidak ditemukan', 'error');
        return redirect('admin/capster');
    }

    // Hapus foto lama jika ada
    if ($capster->foto) {
        $oldPhotoPath = public_path('admin/img/capster/' . $capster->foto);
        if (file_exists($oldPhotoPath)) {
            unlink($oldPhotoPath);
        }
    }

    // Hapus user
    $capster->delete();

    // Berhasil menghapus data
    toast('Berhasil Menghapus Capster!', 'success');
    return redirect('admin/capster');
    }
}
