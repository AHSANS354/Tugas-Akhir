<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $user = User::join('role', 'role_id', '=', 'role.id')
        ->select('user.*', 'role.nama as role')
        ->get();
        return view('admin.user.index', compact('user'));
    }

    public function register()
    {
        //
        return view('halaman.register.index');
    }

    public function registerStore(Request $request)
    {
        //
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
        return redirect('admin/user');
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
}
