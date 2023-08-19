<?php

namespace App\Http\Controllers;

use App\Models\Perizinan;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminPerizinanController extends Controller
{
    public function index()
    {
        return \view('admin.perizinan.index');
    }

    public function daftar()
    {
        return \view('admin.perizinan.daftar-perizinan');
    }

    public function simpan(Request $request)
    {
        // validasi request
        $messages = [
            'required' => ':attribute wajib diisi!',
            'min' => ':attribute harus diisi minimal :min karakter!',
            'max' => ':attribute harus diisi maksimal :max karakter!',
        ];

        $request->validate([
            'nama_pemohon' => 'required',
            'no_ktp' => 'required',
            'alamat_pemohon' => 'required',
            'no_telp_hp' => 'required',
            'nama_perusahaan' => 'required',
            'bentuk_perusahaan' => 'required',
            'npwp' => 'required',
            'kegiatan_usaha' => 'required',
            'sarana_usaha' => 'required',
            'alamat_usaha' => 'required',
            'jumlah_modal' => 'required',
            'masa_berlaku' => 'required',
        ], $messages);

        $requestAll = $request->all();
        $date = Carbon::now();
        $requestAll['disahkan_tanggal'] = $date->toDateString();

        $simpanData = Perizinan::create($requestAll);

        \dd($simpanData);
    }
}
