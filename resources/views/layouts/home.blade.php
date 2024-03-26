<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Beasiswa PT Bukit Asam</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="{{ asset('asset/css/footer.css') }}">
    <!------ Include the above in your HEAD tag ---------->

    {{-- <link href="https://raw.githubusercontent.com/daneden/animate.css/master/animate.css" rel="stylesheet"> --}}
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg bg navbar-dark py-3 fixed-top" id="navbar">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('asset/PTBA white.png') }}" height="30" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Program</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Berita</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="login">Beasiswa</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        
        
        

        <main class="">
            @yield('content')
        </main>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

<footer class="section footer-classic context-dark bg-image" style="background: white">
    <div class="container">
        <div class="row row-30">
            <div class="col-md-4 col-xl-5">
                <div class="pr-xl-4">
                    <div class="mb-2">
                        <a class="brand" href="index.html"><img class="brand-logo-light"
                                src=" {{ asset('asset/bukitasam.png') }}" alt="" width="auto" height="37">
                        </a>
                    </div>
                    <p class="parag">Sejalan dengan visi menjadi perusahaan energi kelas dunia yang peduli terhadap lingkungan, Bukit
                        Asam terus melakukan inovasi dalam bisnis energi berbasis batubara, energi terbarukan, dan
                        proyek hilirisasi batubara.</p>
                </div>
            </div>
            <div class="col-md-4">
                <h5>Contacts</h5>
                <dl class="contact-list">
                    <dt>Address:</dt>
                    <dd>Jl. Parigi No. 1 Tanjung Enim 31716, Sumatera Selatan</dd>
                </dl>
                <dl class="contact-list">
                    <dt>Email:</dt>
                    <dd><a href="mailto:#">corsec@bukitasam.co.id</a></dd>
                </dl>
                <dl class="contact-list">
                    <dt>Phones:</dt>
                    <dd><a href="tel:#">+(62) 734 451 096 </a>
                    </dd>
                </dl>
            </div>
            <div class="col-md-4 col-xl-3">
                <h5 class="judul">Sosial Media</h5>
                <ul class="nav-list">
                    <li><a href="https://www.facebook.com/BukitAsamOfficial/">Facebook</a></li>
                    <li><a href="https://www.instagram.com/bukitasamptba">Instagram</a></li>
                    <li><a href="https://twitter.com/BukitAsamPTBA">Twitter</a></li>
                    <li><a href="https://www.linkedin.com/company/pt-bukit-asam-persero-tbk/">Linked In</a></li>
                    <li><a href="https://www.youtube.com/channel/UC0dK2FdtrEeenwBlrATkBlQ/videos">Youtube</a></li>
                    <li><a href="https://www.tiktok.com/@bukitasam_official">Tiktok</a></li>
                </ul>
            </div>
            <!-- Rights-->
            <p class="rights"><span>©Copyright  </span>
                <span class="copyright-year">2024</span><span> </span><span>PT Bukit Asam Tbk All Rights Reserved</span><span>. </span></p>
        </div>
    </div>
</footer>

</html>
