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
            size: A4 portrait;
            margin: 0;
        }
    </style>
    <style>
        /* print styles */
        /* Styles for the page content */
        body {
            /* background-color: white; */
            margin: 0;
            padding: 0;
            font-family: Georgia, 'Times New Roman', Times, serif;

        }

        .page-container {
            width: 210mm;
            /* A4 width in portrait mode */
            height: 297mm;
            /* A4 height in portrait mode */
            margin: 0 auto;
            box-sizing: border-box;
            background-image: url('http://192.168.56.56/asset/images/blangko1-bg.jpg');
            /* Replace 'your-image.jpg' with the path to your background image */
            background-size: cover;
            /* Adjust as needed to fit the background image */
            background-repeat: no-repeat;
            position: relative;
        }

        .content {
            padding: 20mm;

        }

        /* Additional styling for content within the page border */
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            text-align: center;
        }

        /* header {
            display: flex;
            align-items: center;
        } */

        #text-header {
            margin-top: 15px;
            /* max-height: 100px; */
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

        header {
            display: flex;
            align-items: center;
        }

        #logo {
            margin: auto;
            margin-left: 10px;
            margin-right: 30px;
            margin-top: 15px;
        }

        #tempat-tgl {
            margin-left: 0px;
            margin-top: 8px;
            margin-bottom: 8px;
            font-size: 11pt;
            text-align: justify;
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
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .kotak {
            border-radius: 5px;
            /* background-color: #d6d6d6; */
            margin-left: 75px;
            padding: 2px;
            width: 70px;
            height: 90px;
            border: 2px solid #474747;
        }

        .disahkan {
            flex: 5;
            /* Occupy all available space on the right */
            text-align: center;
            margin-left: 150px;
            /* Right-align content in .disahkan */
        }

        #ttd p {
            margin: 0;

        }

        #ttd p p {
            margin: 0;

        }

        /* style print */

        @media print {
            .page-container {
                background-image: url('http://192.168.56.56/asset/images/blangko1-bg.jpg');
                /* Replace with your page border image path */
                background-size: cover;
                /* Cover the entire page with the background image */
                background-repeat: no-repeat;
            }

            header {
                display: flex;
                align-items: center;
                /* justify-content: center; */
                /* Center contents horizontally */
            }

            #logo {
                margin-right: 5px;
                /* Adjust as needed */
            }

            #text-header {
                flex: 1;
                /* Allow the text to take up the remaining space in the row */
            }

            #ttd {
                font-size: 11pt;
                display: flex;
                align-items: center;
                justify-content: space-between;
            }

            .kotak {
                border-radius: 5px;
                /* background-color: #d6d6d6; */
                margin-left: 75px;
                padding: 2px;
                width: 70px;
                height: 90px;
                border: 2px solid #474747;
            }

            .disahkan {
                flex: 5;
                /* Occupy all available space on the right */
                text-align: center;
                margin-left: 150px;
                /* Right-align content in .disahkan */
            }

            #ttd p {
                margin: 0;

            }

            #ttd p p {
                margin: 0;

            }
        }
    </style>

    <script>
        window.print();
    </script>
</head>

<body>

    <!-- Each sheet element should have the class "sheet" -->
    <!-- "padding-**mm" is optional: you can set 10, 15, 20 or 25 -->


    <!-- Write HTML just like a web page -->
    <div class="page-container">
        <div class="content">
            <!-- Your content goes here -->
            <div class="blangko">
                <header>
                    <!-- <div class="row"> -->
                    <div id="img" class="">
                        <img id="logo" src="{{ asset('asset/images/logo.png') }}" width="110" height="115" />
                    </div>
                    <div id="text-header" class="">
                        <h3 class="kablogo">PEMERINTAH KABUPATEN TULANG BAWANG BARAT</h3>
                        <h1 class="keclogo">KECAMATAN BATU PUTIH</h1>
                        <h6 class="alamatlogo">Jl.Poros Tiyuh Margo Mulya nomor 01 Kode Pos 34483
                        </h6>
                        <h5 class="kodeposlogo">email. batuputihkec@gmail.com</h5>
                    </div>
                    <div class=""></div>
                    <!-- </div> -->
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
                    <!-- <div id="ttd" class="row mt-2">
                        <div class="col-md-1"></div>
                        <div class="col-md-2">
                            <div class="container mx-2 py-5">
                                <p class="kotak text-center ">
                                    PAS FOTO
                                </p>
                            </div>
                        </div>
                        <div class="col-md-3"></div>
                        <div class="col-md-6 disahkan">
                            <p>Dikeluarkan di: Batu Putih</p>
                            <p>Pada Tanggal: {{ $disahkan }}</p>
                            <p id="camat">Camat Batu Putih,</p>
                            <div id="nama-camat"><strong>MURHASAN, SE</strong><br />
                                Penata Tk 1<br />
                                NIP 19730614 199703 1 005</div>
                        </div>
                    </div> -->
                    <div id="ttd">
                        <div class="kotak text-center">
                            PAS FOTO
                        </div>
                        <div class="disahkan">
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

</body>

</html>