@extends('layout.admin')
@section('admin_content')
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3"><strong>Menu</strong> User Management</h1>
        <div class="row">
            <div class="col-12 col-lg-12 col-xxl-12">
                <div class="card flex-fill">
                    <div class="card-header">

                        <h5 class="card-title mb-0">Data User Yang Terdaftar</h5>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('admin.user_register') }}" class="btn btn-sm btn-success m-2 px-2 ">+ Registrasi
                            User</a>
                        <div class="mt-2">
                            <table class="table table-hover table-striped my-0" id="tableUserManagement" style="width:100%">
                                <thead class="bg-primary text-white">
                                    <tr>
                                        <th>#</th>
                                        <th class="d-none d-xl-table-cell">Nama</th>
                                        <th class="d-none d-xl-table-cell">Email</th>
                                        <th>Roles</th>
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
                                            <td>{{ $row->name }}</td>
                                            <td class="d-none d-md-table-cell">{{ $row->email }}</td>
                                            <td class="d-none d-md-table-cell">{{ $row->roles }}</td>
                                            <td class="d-none d-md-table-cell">
                                                <form action="{{ route('admin.delete_user', \base64_encode($row->id)) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-sm btn-danger delete-user">Hapus
                                                        Akun</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td></td>
                                            <td>
                                                <h5>Data Not Found</h5>
                                            </td>
                                        </tr>
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
        // datatable client side
        $(document).ready(function() {
            $("#tableUserManagement").DataTable({
                responsive: true,
                autoWidth: true,
            });
        });

        $('.delete-user').click(function(e) {
            e.preventDefault() // Don't post the form, unless confirmed
            if (confirm('Apakah anda yakin?')) {
                // Post the form
                $(e.target).closest('form').submit() // Post the surrounding form
            }
        });

        // alert

        @if (Session::has('success'))
            toastr.success("{{ Session::get('success') }}")
        @endif
    </script>
@endpush
