@extends('layout.admin')
@section('admin_content')
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3"><strong>Menu</strong> Perizinan</h1>
        <div class="row">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.perizinan') }}">Perizinan</a></li>
                    <li class="breadcrumb-item active fw-bold" aria-current="page">Registrasi Izin Usaha</li>
                </ol>
            </nav>
            <div class="col-12 col-lg-12 col-xxl-12">
                <div class="card flex-fill">
                    <div class="card-header bg-primary">

                        <h5 class="card-title mb-0 text-white">Registrasi Izin Usaha Baru</h5>
                    </div>
                    @if ($errors->any())
                        <div class="alert alert-danger m-2 p-2">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="card-body">
                        <form action="{{ route('admin.simpan_perizinan') }}" method="post">
                            @csrf
                            <div class="mb-1">
                                <p class="text-primary fw-bold">Data Pribadi Pemohon</p>
                            </div>
                            <div class="mb-2">
                                <label for="nama" class="form-label">Nama Pemohon</label>
                                <input type="text" id="nama" name="nama_pemohon" class="form-control"
                                    placeholder="Nama pemohon">
                            </div>
                            <div class="mb-2">
                                <label for="no_ktp" class="form-label">Nomor KTP</label>
                                <input type="text" id="no_ktp" name="no_ktp" class="form-control"
                                    placeholder="Nomor KTP">
                            </div>
                            <div class="mb-2">
                                <label for="alamat" class="form-label">Alamat</label>
                                <textarea name="alamat_pemohon" id="alamat" class="form-control" cols="20" rows="3" placeholder="Alamat"></textarea>
                            </div>
                            <div class="mb-2">
                                <label for="no_telp_hp" class="form-label">No Telephon/HP</label>
                                <input type="text" name="no_telp_hp" id="no_telp_hp" class="form-control"
                                    placeholder="No Telepon / HP"></input>
                            </div>
                            <div class="mb-1">
                                <p class="text-primary fw-bold">Data Perusahaan</p>
                            </div>
                            <div class="mb-2">
                                <label for="nama_perusahaan" class="form-label">Nama Perusahaan</label>
                                <input type="text" name="nama_perusahaan" id="nama_perusahaan" class="form-control"
                                    placeholder="Nama Perusahaan"></input>
                            </div>
                            <div class="mb-2">
                                <label for="bentuk_perusahaan" class="form-label">Bentuk Perusahaan</label>
                                <input type="text" name="bentuk_perusahaan" id="bentuk_perusahaan" class="form-control"
                                    placeholder="Bentuk Perusahaan"></input>
                            </div>
                            <div class="mb-2">
                                <label for="npwp" class="form-label">NPWP</label>
                                <input type="text" name="npwp" id="npwp" class="form-control"
                                    placeholder="NPWP"></input>
                            </div>
                            <div class="mb-2">
                                <label for="kegiatan_usaha" class="form-label">Kegiatan Usaha</label>
                                <input type="text" name="kegiatan_usaha" id="kegiatan_usaha" class="form-control"
                                    placeholder="Kegiatan Usaha"></input>
                            </div>
                            <div class="mb-2">
                                <label for="sarana_usaha" class="form-label">Sarana Usaha Yang Digunakan</label>
                                <input type="text" name="sarana_usaha" id="sarana_usaha" class="form-control"
                                    placeholder="Sarana Usaha Yang Digunakan"></input>
                            </div>
                            <div class="mb-2">
                                <label for="alamat_usaha" class="form-label">Alamat Usaha</label>
                                <textarea name="alamat_usaha" id="alamat_usaha" class="form-control" cols="20" rows="3"
                                    placeholder="Alamat Usaha"></textarea>
                            </div>
                            <div class="mb-2">
                                <label for="jumlah_modal" class="form-label">Jumlah Modal Usaha</label>
                                <input type="number" name="jumlah_modal" id="jumlah_modal" class="form-control"
                                    placeholder="Sarana Usaha Yang Digunakan"></input>
                            </div>
                            <div class="mb-2">
                                <label for="masa_berlaku" class="form-label">Masa Berlaku</label>
                                <input type="date" name="masa_berlaku" id="masa_berlaku"
                                    class="form-control"></input>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
