@extends('layout.admin')
@section('admin_content')
<div class="container-fluid p-0">

    <h1 class="h3 mb-3"><strong>Menu</strong> Perizinan</h1>
    <div class="row">
        <div class="col-12 col-lg-12 col-xxl-12">
            <div class="card flex-fill">
                <div class="card-header">

                    <h5 class="card-title mb-0">Data Perizinan Yang Terdaftar</h5>
                </div>
                <div class="card-body">
                    <a href="{{ route('admin.daftar_perizinan') }}" class="btn btn-sm btn-success m-2 px-2 ">+ Registerasi
                        Izin Baru</a>
                    <div class="table-responsive mt-2">
                        <table class="table table-hover my-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th class="d-none d-xl-table-cell">Nama Pemohon</th>
                                    <th class="d-none d-xl-table-cell">NIK</th>
                                    <th>Nama Usaha</th>
                                    <th class="d-none d-md-table-cell">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Project Apollo</td>
                                    <td class="d-none d-xl-table-cell">31/06/2021</td>
                                    <td><span class="badge bg-success">Done</span></td>
                                    <td class="d-none d-md-table-cell">Vanessa Tucker</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection