<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
Use Alert;
use PDF;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $users = User::all();
        return view('admin.user.index', compact('users'));
    }

    public function register()
    {
        //
        return view('halaman.register.index');
    }

    public function registerStore(Request $request)
    {
        //
        $request->validate([
            'username'=>'required|unique:user|max:30',
            'password'=>'required|max:40',
            'email'=>'required|email',
            'role_id'=>'required|numeric',
            'alamat'=>'max:50',
            'foto'=>'nullable|image|mimes:jpg,jpeg,gif,png,svg|max:2048'
        ],[
            'username.required'=>'Username tidak boleh kosong!',
            'username.unique'=>'Username sudah terdaftar!',
            'username.max'=>'Maximal 30 karakter!',
            'password.required'=>'Password tidak boleh kosong!',
            'password.max'=>'Maximal 40 karakter!',
            'email.required'=>'Email tidak boleh kosong!',
            'email.email'=>'Format email salah!',
            'role_id.required'=>'Tipe user tidak boleh kosong!',
            'role_id.numeric'=>'Pilihan tipe user harus angka!',
            'alamat.max'=>'Maksimal 50 karakter!',
            'foto.image'=>'Bukan Foto!',
            'foto.mimes'=>'Foto hanya diperbolehkan jpg,jpeg,gif,png,svg!',
            'foto.max'=>'Ukuran maksimal foto adalah 2MB!',
        ]);

        $user = new User;
        $user->username = $request->username;
        $user->password = $request->password;
        $user->role_id = $request->role_id;
        $user->email = $request->email;
        $user->alamat = $request->alamat;
        if ($request->hasFile('foto')) {
            // Generate unique filename using timestamp
            $timestamp = now()->timestamp;
            $filename = $timestamp . '.' . $request->foto->Extension();
    
            // Move the file
            $request->foto->move(public_path('halaman/img/user'), $filename);
    
            $user->foto = $filename;
        }
        $user->save();
        toast('Berhasil Menambahkan Akun!','success');
        return redirect('hal/login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $role = Role::all();
        return view('admin.user.create', compact('role'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'username'=>'required|unique:user|max:30',
            'password'=>'required|max:40',
            'email'=>'required|email',
            'role_id'=>'required|numeric',
            'alamat'=>'max:50',
            'foto'=>'nullable|image|mimes:jpg,jpeg,gif,png,svg|max:2048'
        ],[
            'username.required'=>'Username tidak boleh kosong!',
            'username.unique'=>'Username sudah terdaftar!',
            'username.max'=>'Maximal 30 karakter!',
            'password.required'=>'Password tidak boleh kosong!',
            'password.max'=>'Maximal 40 karakter!',
            'email.required'=>'Email tidak boleh kosong!',
            'email.email'=>'Format email salah!',
            'role_id.required'=>'Tipe user tidak boleh kosong!',
            'role_id.numeric'=>'Pilihan tipe user harus angka!',
            'alamat.max'=>'Maksimal 50 karakter!',
            'foto.image'=>'Bukan Foto!',
            'foto.mimes'=>'Foto hanya diperbolehkan jpg,jpeg,gif,png,svg!',
            'foto.max'=>'Ukuran maksimal foto adalah 2MB!',
        ]);

        $user = new User;
        $user->username = $request->username;
        $user->password = $request->password;
        $user->role_id = $request->role_id;
        $user->email = $request->email;
        $user->alamat = $request->alamat;
        if ($request->hasFile('foto')) {
            // Generate unique filename using timestamp
            $timestamp = now()->timestamp;
            $filename = $timestamp . '.' . $request->foto->Extension();
    
            // Move the file
            $request->foto->move(public_path('halaman/img/user'), $filename);
    
            $user->foto = $filename;
        }
        $user->save();
        toast('Berhasil Menambahkan Akun!','success');
        return redirect('admin/user');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $user =  User::join('role', 'role_id', '=', 'role.id')
        ->select('user.*', 'role.nama as role')
        ->where('user.id', $id)
        ->get();
        return view('admin.user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $user =  User::all()->where('id',$id);
        $role = Role::all();
        return view('admin.user.edit', compact('user','role'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $user = User::find($id);
        // Hapus foto lama jika ada
    if ($user->foto) {
        $oldPhotoPath = public_path('halaman/img/user/' . $user->foto);
        if (file_exists($oldPhotoPath)) {
            unlink($oldPhotoPath);
        }
    }

        $request->validate([
            'username'=>'required|max:30',
            'password'=>'required|max:40',
            'email'=>'required|email',
            'role_id'=>'required|numeric',
            'alamat'=>'max:50',
            'foto'=>'nullable|image|mimes:jpg,jpeg,gif,png,svg|max:2048'
        ],[
            'username.required'=>'Username tidak boleh kosong!',
            'username.max'=>'Maximal 30 karakter!',
            'password.required'=>'Password tidak boleh kosong!',
            'password.max'=>'Maximal 40 karakter!',
            'email.required'=>'Email tidak boleh kosong!',
            'email.email'=>'Format email salah!',
            'role_id.required'=>'Tipe user tidak boleh kosong!',
            'role_id.numeric'=>'Pilihan tipe user harus angka!',
            'alamat.max'=>'Maksimal 50 karakter!',
            'foto.image'=>'Bukan Foto!',
            'foto.mimes'=>'Foto hanya diperbolehkan jpg,jpeg,gif,png,svg!',
            'foto.max'=>'Ukuran maksimal foto adalah 2MB!',
        ]);

        $user = User::find($id);
        $user->username = $request->username;
        $user->password = $request->password;
        $user->role_id = $request->role_id;
        $user->email = $request->email;
        $user->alamat = $request->alamat;
        if ($request->hasFile('foto')) {
            // Generate unique filename using timestamp
            $timestamp = now()->timestamp;
            $filename = $timestamp . '.' . $request->foto->Extension();
    
            // Move the file
            $request->foto->move(public_path('halaman/img/user'), $filename);
    
            $user->foto = $filename;
        }
        $user->save();
        toast('Berhasil Mengedit Akun!','success');
        return redirect('admin/user');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        // Temukan user berdasarkan ID
    $user = User::find($id);

    // Pastikan user ditemukan sebelum melanjutkan
    if (!$user) {
        toast('User tidak ditemukan', 'error');
        return redirect('admin/user');
    }

    // Hapus foto lama jika ada
    if ($user->foto) {
        $oldPhotoPath = public_path('assets/img/user/' . $user->foto);
        if (file_exists($oldPhotoPath)) {
            unlink($oldPhotoPath);
        }
    }

    // Hapus user
    $user->delete();

    // Berhasil menghapus data
    toast('Berhasil Menghapus Akun!', 'success');
    return redirect('admin/user');
    }

    public function exportPDF()
    {
        $user = User::join('role', 'role_id', '=', 'role.id')
        ->select('user.*', 'role.nama as role')
        ->get();
        $tgl = now();
        $pdf = PDF::loadView('admin.user.exportPDF', ['user'=>$user,'tgl'=>$tgl])->setPaper('a4', 'landscape');
        return $pdf->stream();
    }
}
