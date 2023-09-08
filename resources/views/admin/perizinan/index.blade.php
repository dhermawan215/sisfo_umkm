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
                        <div class="mt-2">
                            <table class="table table-hover table-striped my-0" id="tablePerizinan" style="width:100%">
                                <thead class="bg-primary text-white">
                                    <tr>
                                        <th>#</th>
                                        <th class="d-none d-xl-table-cell">Nama Pemohon</th>
                                        <th class="d-none d-xl-table-cell">NIK</th>
                                        <th>Nama Usaha</th>
                                        <th class="d-none d-md-table-cell">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @forelse ($data as $row)
                                        <tr>
                                            <td class="d-none d-xl-table-cell">{{ $no++ }}</td>
                                            <td>{{ $row->nama_pemohon }}</td>
                                            <td class="d-none d-md-table-cell">{{ $row->no_ktp }}</td>
                                            <td class="d-none d-md-table-cell">{{ $row->nama_perusahaan }}</td>
                                            <td><a href="{{ route('admin.detail', \base64_encode($row->id)) }}"
                                                    class="text-decoration-none"><span
                                                        class="badge bg-success">Detail</span></a></td>
                                        </tr>
                                    @empty
                                        <h5>Data Not Found</h5>
                                    @endforelse

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('custom_js_admin')
    <script>
        $(document).ready(function() {
            $("#tablePerizinan").DataTable({
                responsive: true,
                autoWidth: true,
            });
        });
    </script>
@endpush
