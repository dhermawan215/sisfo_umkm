<?php

namespace App\Http\Controllers;

use PDO;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class AuthController extends Controller
{
    public function login()
    {
        return \view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $credentials =  $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return \redirect()->intended('/admin');
        }

        return \back()->with(
            'loginError',
            'ada kesalahan, silahkan cek email dan password',
        );
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return \redirect('/');
    }

    public function changePassword()
    {
        return \view('auth.change-password');
    }

    public function updatePassword(Request $request)
    {
        # Validation
        $request->validate([
            'password_lama' => ['required'],
            'password_baru' =>  ['required', 'confirmed', 'string', Password::min(8)->mixedCase()->numbers()],
            'password_baru_confirmation' => ['required', 'string'],
        ]);

        #Match The Old Password
        if (!Hash::check($request->password_lama, auth()->user()->password)) {
            return back()->withErrors("Password lama tidak sama!");
        }

        #Update the new Password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->password_baru)
        ]);

        return back()->with("success", "Password berhasil diubah!");
    }
}
