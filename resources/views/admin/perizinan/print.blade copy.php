<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print</title>
    <link href="{{ asset('be/static/css/app.css') }}" rel="stylesheet">
</head>

<body>
    <style>
        /* .book {
            margin: 0;
            padding: 0;
            background-color: #FAFAFA;
            font: 12pt;
        }

        * {
            box-sizing: border-box;
            -moz-box-sizing: border-box;
        }

        .page {
            display: block;
            margin: 20mm;
            width: 210mm;
            height: 297mm;
            border: 1px #D3D3D3 solid;
            border-radius: 5px;
            background: white;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);

        }



        .subpage {
            margin: 20mm;
            width: 210mm;
            height: 297mm;
            outline: 0cm #FAFAFA solid;
        }

        @page {
            size: A4;
            margin: 0;
        }

        @media print {
            .page {
                margin: 0;
                border: initial;
                border-radius: initial;
                width: initial;
                min-height: initial;
                box-shadow: initial;
                background: initial;
                page-break-after: always;
            }
        } */

        .page {
            /* margin: 20mm; */
            width: 210mm;
            height: 297mm;
            /* height: 842px;
            width: 595px; */
            /* to centre page on screen*/
            margin-left: auto;
            margin-right: auto;
            font-family: Georgia, 'Times New Roman', Times, serif;

            border: 5px solid #000;
            border-bottom: 0;
            height: 10px;
            margin-top: 15px;
        }

        .blangko {
            background: #fff;
            text-align: center;
            border-left: 5px solid #000;
            border-right: 5px solid #000;
            height: 25px;
            line-height: 25px;
            width: 150px;
            margin: -15px auto 0;
            /* height 25px + 5px border = 30/2 = 15 */
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
            margin-top: 20px;
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
            margin-left: 10px;
            margin-right: auto;
            margin-top: 30px;
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
        <div class="row">
            <div class="col-12 col-lg-12 col-xxl-12">
                <div class="book">
                    <div class="page">
                        <!-- subpage (inti konten) -->
                        <div class="csbg">
                            <div class="blangko">
                                <header>
                                    <div class="row">
                                        <div id="img" class="col-md-3">
                                            <img id="logo" src="{{ asset('asset/images/logo.png') }}" width="120" height="125" />
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
                                    <div id="alamat" class="row">

                                    </div>
                                    <div id="pembuka" class="row">Berdasarkan Peraturan Presiden no 98
                                        Tahun 2014 tentang Perizinan Untuk Usaha Mikro dan Kecil ( Lembar Negara Republik
                                        Indonesia Tahun 2014 nomor 222 ), Peraturan Menteri Dalam Negeri Republik Indonesia
                                        nomor 81 Tahun 2014 tentang Pedoman Pemberian Izin Usaha Mikro dan Kecil,Peraturan
                                        Bupati Tulang Bawang Barat nomor 13 Tahun 2016 tentang Pendelagasian Kewenangan
                                        Pelaksanaan Izin Usaha Mikro dan Kecil ( IUMK ) kepada Camat di Kabupaten Tulang
                                        Bawang
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
                                        <div class="col-md-1"></div>
                                        <div class="col-md-2 mt-5">
                                            <div class="container">
                                                <p class="kotak text-center">
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
                </div>
            </div>
        </div>
    </div>
</body>

</html>