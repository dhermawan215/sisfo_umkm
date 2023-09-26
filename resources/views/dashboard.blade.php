@extends('layout.admin')
@section('admin_content')
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3"><strong>Selamat Datang </strong> Di Sistem Informasi Pendaftaran UMKM</h1>

        <div class="row">
            <div class="col-xl-12 col-xxl-12 d-flex">
                <div class="w-100">
                    <div class="row mt-2">
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col mt-0">
                                            <h5 class="card-title text-success">Waktu</h5>
                                        </div>

                                        <div class="col-auto">
                                            <div class="stat text-primary">
                                                <i class="align-middle" data-feather="clock"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <h1 id="datetimepicker-time" class="mt-1 mb-3"></h1>
                                    <div class="mb-0">
                                        <span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i>Tanggal:
                                            {{ date('d-m-Y') }} </span>
                                        {{-- <span class="text-muted">Since last week</span> --}}
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col mt-0">
                                            <h5 class="card-title text-success">Perizinan Terdaftar</h5>
                                        </div>

                                        <div class="col-auto">
                                            <div class="stat text-primary">
                                                <i class="align-middle" data-feather="file-text"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <h1 class="mt-1 mb-3">{{ $perizinan }} Izin Penerbitan</h1>
                                    <div class="mb-0">
                                        <span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i>
                                        </span>
                                        <span class="text-success"><a href="{{ route('admin.perizinan') }}"
                                                class="text-decoration-none">Selengkapnya >></a></span>
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
@push('custom_js_admin')
    <script>
        $(document).ready(function() {
            setInterval('updateClock()', 1000);
        });

        function updateClock() {
            var currentTime = new Date();
            var currentHours = currentTime.getHours();
            var currentMinutes = currentTime.getMinutes();
            var currentSeconds = currentTime.getSeconds();

            // Pad the minutes and seconds with leading zeros, if required
            currentMinutes = (currentMinutes < 10 ? "0" : "") + currentMinutes;
            currentSeconds = (currentSeconds < 10 ? "0" : "") +
                currentSeconds; // Choose either "AM" or "PM" as appropriate // var timeOfDay=(currentHours < 12) ? "AM" : "PM" ; // Convert the hours component to 12-hour format if needed // currentHours=(currentHours> 12) ? currentHours - 12 : currentHours;

            // // Convert an hours component of "0" to "12"
            // currentHours = (currentHours == 0) ? 12 : currentHours;

            // Compose the string for display
            var currentTimeString = currentHours + ":" + currentMinutes + ":" + currentSeconds;


            $("#datetimepicker-time").html(currentTimeString);
        }
    </script>
@endpush
