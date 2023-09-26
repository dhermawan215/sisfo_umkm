@extends('layout.admin')
@section('admin_content')
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3"><strong>User</strong> Control Panel</h1>
        <div class="row">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>

                </ol>
            </nav>
            <div class="col-12 col-lg-12 col-xxl-12">
                <div class="card flex-fill">
                    <div class="card-header bg-primary">

                        <h5 class="card-title mb-0 text-white">Ganti Password Akun:
                            {{ Auth::user()->name . ' (email: ' . Auth::user()->email . ')' }}</h5>
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
                        <form action="{{ route('update_password') }}" method="post">
                            @csrf
                            <div class="mb-2">
                                <label for="password" class="form-label">Password Lama</label>
                                <input type="password" id="passwordLama" name="password_lama" class="form-control"
                                    placeholder="Password">
                            </div>
                            <div class="mb-2">
                                <label for="password" class="form-label">Password Baru</label>
                                <input type="password" id="passwordBaru" name="password_baru" class="form-control"
                                    placeholder="Password">
                            </div>
                            <div class="mb-2">
                                <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
                                <input type="password" id="password_baru_confirmation" name="password_baru_confirmation"
                                    class="form-control" placeholder="Konfirmasi Password">
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('custom_js_admin')
    @if (Session::has('danger'))
        <script>
            toastr.success("{{ Session::get('danger') }}")
        </script>
    @endif
    @if (Session::has('success'))
        <script>
            toastr.success("{{ Session::get('success') }}")
        </script>
    @endif
@endpush
