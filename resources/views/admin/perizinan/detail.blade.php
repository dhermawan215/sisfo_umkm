@extends('layout.admin')
@section('admin_content')
<style>
    .blangko {
        font-family: Georgia, 'Times New Roman', Times, serif
    }

    h1,
    h3,
    h5,
    h6 {
        text-align: center;
        padding-right: 200px;
    }

    .row {
        margin-top: 20px;
    }

    .keclogo {
        font-size: 18pt;
        font-size: 18pt;
    }

    .kablogo {
        font-size: 16pt;
    }

    .alamatlogo {
        font-size: 14pt;
    }

    .kodeposlogo {
        font-size: 14pt;
    }

    #tls {
        text-align: right;
    }

    .alamat-tujuan {
        margin-left: 50%;
    }

    .garis1 {
        border-top: 3px solid black;
        height: 2px;
        border-bottom: 1px solid black;
    }

    #pembuka {
        font-size: 12pt;

        margin: 0;
        /* text-indent: 2rem; */
        text-align: justify;
    }

    #isi {
        font-size: 12pt;

        margin: 0;
        /* text-indent: 2rem; */
        text-align: justify;
    }

    #logo {
        margin: auto;
        margin-left: 50%;
        margin-right: auto;
    }

    #tempat-tgl {
        margin-left: 0px;
        margin-top: 12px;
        margin-bottom: 12px;
        font-size: 12pt;
        text-align: justify;
    }

    .kotak {
        border-radius: 5px;
        /* background-color: #d6d6d6; */
        padding: 20px;
        width: 120px;
        height: 150px;
        border: 2px solid #474747;
    }

    #tempat-tgl2 {
        margin-left: 0px;
        margin-top: 12px;
        margin-bottom: 12px;
        font-size: 12pt;
        text-align: justify;

    }

    #camat {
        text-align: center;
    }

    #nama-camat {
        margin-top: 100px;
        text-align: center;
    }

    #ttd {
        font-size: 12pt;
    }

    #ttd p {
        margin: 0;

    }

    #ttd p p {
        margin: 0;

    }
</style>

<div class="container-fluid p-0">

    <h2 class="h3 mb-3"><strong>Detail/Preview</strong> Perizinan</h2>
    <div class="row">
        <div class="col-12 col-lg-12 col-xxl-12">
            <div class="card flex-fill">
                <div class="card-header">
                    <div class="d-flex">
                        <a href="{{ route('admin.download', base64_encode($data->id)) }}" class="btn btn-success m-2 px-2 "> <i class="bi bi-printer"></i> Print</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="blangko">
                        <header>
                            <div class="row">
                                <div id="img" class="col-md-3">
                                    <img id="logo" src="{{ asset('asset/images/logo.png') }}" width="140" height="160" />
                                </div>
                                <div id="text-header" class="col-md-9">
                                    <h3 class="kablogo">PEMERINTAH KABUPATEN TULANG BAWANG BARAT</h3>
                                    <h1 class="keclogo">KECAMATAN BATU PUTIH</h1>
                                    <h6 class="alamatlogo">Jl.Poros Tiyuh Margo Mulya nomor 01 Kode Pos 34483
                                    </h6>
                                    <h5 class="kodeposlogo">email. batuputihkec@gmail.com</h5>
                                </div>
                            </div>
                        </header>

                        <div class="container">
                            <hr class="garis1" />
                            <div id="alamat" class="row ">
                                <h5 class="text-center">SURAT IZIN USAHA MIKRO DAN KECIL</h5>
                                <div class="col-lg-12 col-md-12 justify-content-center">
                                    @php
                                    $bulan = date('m');
                                    @endphp
                                    @switch($bulan)
                                    @case('01')
                                    @php
                                    $showName = 'Januari';
                                    @endphp
                                    @break

                                    @case('02')
                                    @php
                                    $showName = 'Februari';
                                    @endphp
                                    @break

                                    @case('03')
                                    @php
                                    $showName = 'Maret';
                                    @endphp
                                    @break

                                    @case('04')
                                    @php
                                    $showName = 'April';
                                    @endphp
                                    @break

                                    @case('05')
                                    @php
                                    $showName = 'Mei';
                                    @endphp
                                    @break

                                    @case('06')
                                    @php
                                    $showName = 'Juni';
                                    @endphp
                                    @break

                                    @case('07')
                                    @php
                                    $showName = 'Juli';
                                    @endphp
                                    @break

                                    @case('08')
                                    @php
                                    $showName = 'Agustus';
                                    @endphp
                                    @break

                                    @case('09')
                                    @php
                                    $showName = 'September';
                                    @endphp
                                    @break

                                    @case('10')
                                    @php
                                    $showName = 'Oktober';
                                    @endphp
                                    @break

                                    @case('11')
                                    @php
                                    $showName = 'November';
                                    @endphp
                                    @break

                                    @default
                                    @php
                                    $showName = 'Desember';
                                    @endphp
                                    @endswitch
                                    <p class="text-center">Nomor: IMUK/ <span class="ms-2 me-2"></span>/{{ $showName }}/{{ date('Y') }}
                                    </p>
                                </div>
                            </div>

                            <div id="pembuka" class="row">Berdasarkan Peraturan Presiden no 98
                                Tahun 2014 tentang Perizinan Untuk Usaha Mikro dan Kecil ( Lembar Negara Republik
                                Indonesia Tahun 2014 nomor 222 ), Peraturan Menteri Dalam Negeri Republik Indonesia
                                nomor 81 Tahun 2014 tentang Pedoman Pemberian Izin Usaha Mikro dan Kecil,Peraturan
                                Bupati Tulang Bawang Barat nomor 13 Tahun 2016 tentang Pendelagasian Kewenangan
                                Pelaksanaan Izin Usaha Mikro dan Kecil ( IUMK ) kepada Camat di Kabupaten Tulang Bawang
                                Barat, bersama ini menyatakan dan memberikan izin kepada :</div>
                            <div id="tempat-tgl">
                                <table>
                                    <tr>
                                        <td>Nama</td>
                                        <td>: </td>
                                        <td>{{ $data->nama_pemohon }}</td>
                                    </tr>
                                    <tr>
                                        <td>Nomor KTP</td>
                                        <td>: </td>
                                        <td>{{ $data->no_ktp }}</td>
                                    </tr>
                                    <tr>
                                        <td>Alamat</td>
                                        <td>: </td>
                                        <td>{{ $data->alamat_pemohon }}</td>
                                    </tr>
                                    <tr>
                                        <td>Nomor Telepon/Handhpone</td>
                                        <td>:</td>
                                        <td>{{ $data->no_telp_hp }}</td>
                                    </tr>
                                </table>
                            </div>
                            <div id="isi" class="row">Untuk mendirikan Usaha Mikro dan Kecil yang mencakup
                                perizinan dasar yang berupa menempati lokasi/domisili, melakukan kegiatan usaha baik
                                produksi maupun penjualan barang dan jasa, dengan identitas :</div>
                            <div id="tempat-tgl2">
                                <table>

                                    <tr>
                                        <td>Nama Perusahaan</td>
                                        <td>: </td>
                                        <td>{{ $data->nama_perusahaan }}</td>
                                    </tr>
                                    <tr>
                                        <td>Bentuk Perusahaan</td>
                                        <td>: </td>
                                        <td>{{ $data->bentuk_perusahaan }}</td>
                                    </tr>
                                    <tr>
                                        <td>NPWP</td>
                                        <td>: </td>
                                        <td>{{ $data->npwp }}</td>
                                    </tr>
                                    <tr>
                                        <td>Kegiatan Usaha</td>
                                        <td>:</td>
                                        <td>{{ $data->kegiatan_usaha }}</td>
                                    </tr>
                                    <tr>
                                        <td>Sarana Usaha yang<br>
                                            Digunakan
                                        </td>
                                        <td>:</td>
                                        <td>{{ $data->sarana_usaha }}</td>
                                    </tr>
                                    <tr>
                                        <td>Alamat Usaha</td>
                                        <td>:</td>
                                        <td>{{ $data->alamat_usaha }}</td>
                                    </tr>
                                    <tr>
                                        <td>Jumlah Modal Usaha</td>
                                        <td>:</td>
                                        <td>{{ 'Rp. ' . number_format($data->jumlah_modal, 0, ',', '.') }}</td>
                                    </tr>
                                    <tr>
                                        <td>Nomor Pendaftaran</td>
                                        <td>:</td>
                                        <td> 03 (JANGAN DIISI)</td>
                                    </tr>
                                    <tr>
                                        <td>SIUMK ini diterbitkan <br>
                                            dengan ketentuan berlaku s.d.<br>
                                            tanggal ( untuk proses<br>
                                            her-registtrasi )
                                        </td>
                                        <td>:</td>
                                        <td>{{ $dt }}</td>
                                    </tr>
                                </table>
                            </div>
                            <div id="ttd" class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-2 mt-5">
                                    <div class="container">
                                        <p class="kotak text-center">
                                            PAS FOTO
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4"></div>
                                <div class="col-md-4">
                                    <p>Dikeluarkan di: Batu Putih</p>
                                    <p>Pada Tanggal: {{ $disahkan }}</p>
                                    <p id="camat">Camat Batu Putih,</p>
                                    <div id="nama-camat"><strong>MURHASAN, SE</strong><br />
                                        Penata Tk 1<br />
                                        NIP 19730614 199703 1 005</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection