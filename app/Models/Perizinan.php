<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perizinan extends Model
{
    use HasFactory;

    protected $table = 'perizinan';

    protected $fillable = [
        'nama_pemohon',
        'no_ktp',
        'alamat_pemohon',
        'no_telp_hp',
        'nama_perusahaan',
        'bentuk_perusahaan',
        'npwp',
        'kegiatan_usaha',
        'sarana_usaha',
        'alamat_usaha',
        'jumlah_modal',
        'masa_berlaku',
        'disahkan_tanggal'
    ];
}
