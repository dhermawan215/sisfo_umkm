<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sisfo UMKM - Pemerintah Kecamatan Batu Putih</title>
    <style>
        /* Reset some default styles */
        body,
        html {
            margin: 0;
            padding: 0;
        }

        /* Navbar styles */
        .navbar {
            background-color: #007BFF;
            color: #fff;
            padding: 20px;
        }

        .navbar a {
            color: #fff;
            text-decoration: none;
            margin-right: 20px;
        }

        /* Hero section styles */
        .hero {
            background-image: url('{{ asset('asset/images/landinghome.png') }}');
            background-size: cover;
            background-position: center;
            color: #fff;
            text-align: center;
            padding: 100px 0;
            height: 66.3vh;
        }

        .hero h1 {
            font-size: 3rem;
            margin-bottom: 20px;
            margin-top: 100px;
        }

        .hero h2 {
            font-size: 2rem;
            margin-bottom: 20px;
            /* margin-top: 100px; */
        }

        .hero p {
            font-size: 1.5rem;
        }
    </style>
</head>

<body>


    <!-- Hero section -->
    <div class="hero">
        <h1>Selamat Datang </h1>
        <h2>Di Sistem Informasi Pendaftaran UMKM</h2>
        <p>Pemerintah Kecamatan Batu Putih - Tulang Bawang Barat</p>
        @auth
            <a href="{{ route('admin.dashboard') }}"
                style="background-color: #007BFF; color: #fff; padding: 10px 20px; text-decoration: none; border-radius: 5px;">Mulai</a>
        @else
            <a href="{{ route('login') }}"
                style="background-color: #007BFF; color: #fff; padding: 10px 20px; text-decoration: none; border-radius: 5px;">Mulai</a>
        @endauth
    </div>
</body>

</html>
