<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Perizinan;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Illuminate\Http\Request;
use PDF;

class AdminPerizinanController extends Controller
{
    public function index()
    {
        $perizinan = Perizinan::all();
        return \view('admin.perizinan.index', ['data' => $perizinan]);
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

        return \redirect()->route('admin.sukses', \base64_encode($simpanData->id));
    }

    public function sukses($id)
    {
        $id2 = \base64_decode($id);

        $perizinan = Perizinan::findOrFail($id2);

        //menyesuaikan format ke indonesia
        $dt = Carbon::parse($perizinan->masa_berlaku)->locale('id');
        $dt->settings(['formatFunction' => 'translatedFormat']);
        $disahkan = Carbon::parse($perizinan->disahkan_tanggal)->locale('id');
        $disahkan->settings(['formatFunction' => 'translatedFormat']);

        return \view('admin.perizinan.sukses', ['data' => $perizinan, 'dt' => $dt->format('j F Y'), 'disahkan' => $disahkan->format('j F Y')]);
    }

    // fungsi preview/melihat detail
    public function detail($id)
    {

        $id2 = \base64_decode($id);

        $perizinan = Perizinan::findOrFail($id2);

        //menyesuaikan format ke indonesia
        $dt = Carbon::parse($perizinan->masa_berlaku)->locale('id');
        $dt->settings(['formatFunction' => 'translatedFormat']);
        $disahkan = Carbon::parse($perizinan->disahkan_tanggal)->locale('id');
        $disahkan->settings(['formatFunction' => 'translatedFormat']);

        return \view('admin.perizinan.detail', ['data' => $perizinan, 'dt' => $dt->format('j F Y'), 'disahkan' => $disahkan->format('j F Y')]);
    }

    public function download($id)
    {
        $id2 = \base64_decode($id);

        $perizinan = Perizinan::findOrFail($id2);

        //menyesuaikan format ke indonesia
        $dt = Carbon::parse($perizinan->masa_berlaku)->locale('id');
        $dt->settings(['formatFunction' => 'translatedFormat']);
        $disahkan = Carbon::parse($perizinan->disahkan_tanggal)->locale('id');
        $disahkan->settings(['formatFunction' => 'translatedFormat']);


        return \view('admin.perizinan.print', ['data' => $perizinan, 'dt' => $dt->format('j F Y'), 'disahkan' => $disahkan->format('j F Y')]);
    }
}
