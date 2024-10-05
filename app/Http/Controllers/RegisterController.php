<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller
{
    public function register()
    {
        return view('register');
    }
    
    public function actionregister(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'nip' => $request->nip,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'active' => 1
        ]);

        Session::flash('message', 'Register Berhasil. Akun Anda sudah Aktif <br>Silahkan Login menggunakan NIP dan password.');
        return redirect('register');
    }
}
