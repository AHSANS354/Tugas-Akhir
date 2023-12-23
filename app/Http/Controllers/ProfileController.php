<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\User;

class ProfileController extends Controller
{
    //
    public function index()
    {
        // $customer = Customer::whereId(auth()->user()->customer->id);
        $user = User::all()->where('id', auth()->user()->id);
        // dd($user);
        return view('profile', compact('user'));
    }

    public function edit()
    {
        return view('halaman.profile.edit');
    }

    public function store(Request $request)
    {
        // validasi data yang diinputkan oleh user
        $validatedData = $request->validate([
            'nama_lengkap' => 'required|max:255',
            'nama_panggilan' => 'required|max:255',
            'email' => 'required|email:dns|',
            'no_telp' => 'numeric',
            'alamat' => 'nullable',
        ],[
            'nama_lengkap.required'=>'Nama Lengkap harus diisi!',
            'nama_panggilan.required'=>'Nama Panggilan harus diisi!',
            'email.required'=>'Email harus diisi!',
            'email.email'=>'Format Email salah! Contoh : example@mail.com',
            'no_telp.numeric'=>'No Telpon hanya boleh angka!'

        ]);

        User::whereId(auth()->user()->id)->update([
            'name' => $validatedData['nama_panggilan'],
            'email' => $validatedData['email']
        ]);

        Customer::whereUserId(auth()->user()->id)->update([
            'nama' => $validatedData['nama_lengkap'],
            'no_telp' => $validatedData['no_telp'],
            'alamat' => $validatedData['alamat']
        ]);

        return redirect('profile');
    }
}
