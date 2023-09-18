<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;


class AdminUserController extends Controller
{
    public function index()
    {
        $dataUser = User::where('roles', '=', 'user')->get();
        $collect = \collect($dataUser);
        return \view('admin.user.index', ['data' => $collect]);
    }

    // fungsi tampilan tambah user
    public function daftar()
    {
        return \view('admin.user.registrasi');
    }

    // fungsi simpan data user
    public function store(Request $request)
    {
        $requestAll = $request->all();
        $validasi = Validator::make($requestAll, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'unique:users', 'string', 'max:255'],
            'password' =>  ['required', 'confirmed', 'string', Password::min(8)->mixedCase()->numbers()],
            'password_confirmation' => ['required', 'string'],
        ]);


        if ($validasi->fails()) {
            return Redirect::back()->withErrors($validasi);
        }

        $requestAll['roles'] = 'user';
        $user = User::create([
            'name' => $requestAll['name'],
            'email' => $requestAll['email'],
            'roles' => $requestAll['roles'],
            'password' => Hash::make($requestAll['password']),
        ]);

        if (!$user) {
            return \redirect()->route('admin.user_register')->with('danger', 'silahkan dicoba kembali!');
        }

        return \redirect()->route('admin.user_management')->with('success', 'berhasil menambahkan user!');
    }

    public function deleteUser($id)
    {
        $id2 = \base64_decode($id);
        $user = User::findOrFail($id2);
        $user->delete();
        return \redirect()->route('admin.user_management')->with('success', 'berhasil menghapus user terpilih!');
    }
}
