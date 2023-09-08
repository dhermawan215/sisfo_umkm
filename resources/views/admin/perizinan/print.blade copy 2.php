<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print</title>
    <link href="http://192.168.56.56/be/static/css/app.css" rel="stylesheet">

    <!-- Normalize or reset CSS with your favorite library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">

    <!-- Load paper.css for happy printing -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.4.1/paper.css">

    <!-- Set page size here: A5, A4 or A3 -->
    <!-- Set also "landscape" if you need -->
    <style>
        @page {
            size: A4
        }
    </style>
    <style>
        /* body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 200vh;
            background-color: #fff;
        } */

        /* body { */
        /* margin: 0;
            padding: 0;
            display: block;
            justify-content: center; */
        /* Change to display block for printing */
        /* min-height: initial; */
        /* Reset min-height for printing */
        /* background-color: transparent; */
        /* Set a transparent background for printing */
        /* } */



        .border-image {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-image: url('http://192.168.56.56/asset/images/blangko1.png');
            /* Replace with your border image path */
            background-size: cover;
            /* pointer-events: none; */
            /* Make sure the border image doesn't interfere with content */
        }

        .content {
            font-family: Georgia, 'Times New Roman', Times, serif;
            /* position: absolute; */
            /* top: 20px; */
            /* Adjust to match border width */
            /* left: 20px; */
            /* Adjust to match border width */
            /* right: 20px; */
            /* Adjust to match border width */
            /* bottom: 20px; */
            /* Adjust to match border width */

            /* box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); */
            /* overflow: hidden; */
        }


        h1,
        h3,
        h5,
        h6 {
            text-align: center;
            padding-right: 10px;
        }

        #text-header {
            margin-top: 35px;
            /* max-height: 100px; */
        }

        .row {
            margin-top: -37px;
        }

        .keclogo {
            font-size: 18pt;
            font-size: 18pt;
        }

        .kablogo {
            font-size: 12pt;
        }

        .alamatlogo {
            font-size: 11pt;
        }

        .kodeposlogo {
            font-size: 11pt;
        }

        #tls {
            text-align: right;
        }

        .alamat-tujuan {
            margin-left: 50%;
        }

        .garis1 {
            border-top: 5px solid black;
            height: 2px;
            border-bottom: 1px solid black;
        }

        #pembuka {
            font-size: 11pt;

            margin: 2px 0 0 0;

            /* text-indent: 2rem; */
            text-align: justify;
        }

        .siuk {
            font-size: 11pt;

        }

        #alamat {
            margin-top: 7px;
            text-align: center;
        }

        #isi {
            font-size: 11pt;

            margin: 0;
            /* text-indent: 2rem; */
            text-align: justify;
        }

        #logo {
            margin: auto;
            margin-left: 10px;
            margin-right: auto;
            margin-top: 30px;
        }

        #tempat-tgl {
            margin-left: 0px;
            margin-top: 8px;
            margin-bottom: 8px;
            font-size: 11pt;
            text-align: justify;
        }

        .kotak {
            border-radius: 5px;
            /* background-color: #d6d6d6; */

            padding: 2px;
            width: 70px;
            height: 80px;
            border: 2px solid #474747;
        }

        #tempat-tgl2 {
            margin-left: 0px;
            margin-top: 8px;
            margin-bottom: 2px;
            font-size: 11pt;
            text-align: justify;

        }

        #camat {
            text-align: center;

        }

        #nama-camat {
            margin-top: 50px;
            text-align: center;
        }

        #ttd {
            font-size: 11pt;
        }

        #ttd p {
            margin: 0;

        }

        #ttd p p {
            margin: 0;

        }

        /* print styles */
    </style>
</head>

<body class="A4">

    <!-- Each sheet element should have the class "sheet" -->
    <!-- "padding-**mm" is optional: you can set 10, 15, 20 or 25 -->
    <section class="sheet padding-10mm">

        <!-- Write HTML just like a web page -->
        <!-- <article>This is an A4 document.</article> -->
        <div class="page-container">
            <div class="border-image"></div>
            <div class="content">
                <!-- Your content goes here -->
                <div class="blangko">
                    <header>
                        <div class="row">
                            <div id="img" class="col-md-2">
                                <img id="logo" src="{{ asset('asset/images/logo.png') }}" width="110" height="115" />
                            </div>
                            <div id="text-header" class="col-md-9">
                                <h3 class="kablogo">PEMERINTAH KABUPATEN TULANG BAWANG BARAT</h3>
                                <h1 class="keclogo">KECAMATAN BATU PUTIH</h1>
                                <h6 class="alamatlogo">Jl.Poros Tiyuh Margo Mulya nomor 01 Kode Pos 34483
                                </h6>
                                <h5 class="kodeposlogo">email. batuputihkec@gmail.com</h5>
                            </div>
                            <div class="col-md-1"></div>
                        </div>
                    </header>

                    <div class="">
                        <hr class="garis1" />
                        <div id="alamat" class="row ">
                            <div class="col-lg-12 col-md-12 justify-content-center">
                                <h5 class="text-center siuk">SURAT IZIN USAHA MIKRO DAN KECIL</h5>
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
                        <div id="pembuka" class="row">
                            Berdasarkan Peraturan Presiden no 98
                            Tahun 2014 tentang Perizinan Untuk Usaha Mikro dan Kecil ( Lembar Negara Republik
                            Indonesia Tahusn 2014 nomor 222 ), Peraturan Menteri Dalam Negeri Republik Indonesia
                            nomor 81 Tahun 2014 tentang Pedoman Pemberian Izin Usaha Mikro dan Kecil,Peraturan
                            Bupati Tulang Bawang Barat nomor 13 Tahun 2016 tentang Pendelagasian Kewenangan
                            Pelaksanaan Izin Usaha Mikro dan Kecil ( IUMK ) kepada Camat di Kabupaten Tulang
                            Bawang
                            Barat, bersama ini menyatakan dan memberikan izin kepada :
                        </div>
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
                                    <td>Nomor Telepon/HP</td>
                                    <td>: </td>
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
                                    <td>Sarana Usaha
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
                                    <td>Masa Berlaku</td>
                                    <td>:</td>
                                    <td>{{ $dt }}</td>
                                </tr>
                            </table>
                        </div>
                        <div id="ttd" class="row mt-2">
                            <div class="col-md-1"></div>
                            <div class="col-md-2">
                                <div class="container mx-2 py-5">
                                    <p class="kotak text-center ">
                                        PAS FOTO
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
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

    </section>

</body>

</html>