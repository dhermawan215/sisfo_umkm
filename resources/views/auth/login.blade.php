<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
    <meta name="author" content="AdminKit">
    <meta name="keywords"
        content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="{{ asset('be/static/img/icons/icon-48x48.png') }}" />

    <title>Sign In - Sistem Infotmasi Pendaftaran UMKM</title>

    <link href="{{ asset('be/static/css/app2.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
    <main class="d-flex w-100 bg-primary">
        <div class="container d-flex flex-column">
            <div class="row vh-100">
                <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                    <div class="d-table-cell align-middle">

                        <div class="text-center mt-4 mb-2">
                            <div class="d-flex">
                                <div class="row">
                                    <div id="img">
                                        <img id="logo" src="{{ asset('asset/images/logo.png') }}" width="90"
                                            height="90" />
                                    </div>
                                </div>
                                <div class="row text-white">
                                    <h1 class="h2 text-white fs-2">Sistem Informasi Pendaftaran UMKM</h1>
                                    <p class="lead">
                                        Pemerintah Kecamatan Batu Putih
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="card mt-2">
                            <div class="card-body ">
                                <div class="m-sm-4">
                                    <form action="#" method="post">
                                        @csrf
                                        <div class="mb-3">
                                            <label class="form-label">Email</label>
                                            <input class="form-control form-control-lg" type="email" name="email"
                                                placeholder="Enter your email" />
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Password</label>
                                            <input class="form-control form-control-lg" type="password" name="password"
                                                placeholder="Enter your password" />
                                        </div>

                                        <div class="text-center mt-3">
                                            <button type="submit" class="btn btn-lg btn-primary">Sign in</button>
                                            <!-- <button type="submit" class="btn btn-lg btn-primary">Sign in</button> -->
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <footer>

                <div class="row text-muted">
                    <div class="col-12 text-center">
                        <p class="mb-0">
                            <a class="text-white text-decoration-none"><strong>Sistem Informasi Izin Usaha
                                    UMKM &copy; 2023</strong></a>
                        </p>
                    </div>

                </div>

            </footer>
        </div>
    </main>


    <script src="{{ asset('be/static/js/app.js') }}"></script>

</body>

</html>
