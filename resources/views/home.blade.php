@extends('layouts.home')

@section('content')
    {{-- motto --}}
    <section id="hero">
        <div class="container text-left text-white">
            <div class="hero-title">
                <h1 id="title-motto">"PT. Bukit Asam berkomitmen dalam meningkatkan pendidikan generasi penerus di
                    wilayah sekitar operasionalnya."</h1>
                {{-- <h1>Membangun Peradaban,</h1>
                <h1>Meningkatkan kesejahteraan,</h1>
                <h1>Dan Menciptakan Kehidupan</h1>
                <h1>Yang Lebih Baik</h1> --}}
            </div>

        </div>
    </section>

    {{-- program --}}

    <section id="program">
        <div class="container">
            <div class="row justify-content-center"> <!-- Menambahkan kelas justify-content-center -->
                <div class="col-lg-3">
                    <div class="bg-white rounded-3 shadow p-3 mx-auto">
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="text-center">
                                <img src="asset/icon/bslogo.png" height="67" width="60" alt="">
                                <h5>Bidiksiba</h5>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- <div class="col-lg-3">
                    <div class="bg-white rounded-3 shadow p-3 d-flex align-items-center">
                        <div>
                            <h5 style="margin-right: 50px">Improving Prosperity</h5>
                        </div>
                        <img src="asset/icon/kesejahteraan.png" height="60" width="60" alt="">
                    </div>
                </div> --}}
                {{-- <div class="col-lg-3">
                    <div class="bg-white rounded-3 shadow p-3 d-flex align-items-center">
                        <div>
                            <h5 style="margin-right: 50px">Creating a Better Life</h5>
                        </div>
                        <img src="asset/icon/kehidupan.png" height="60" width="60" alt="">
                    </div>
                </div> --}}
            </div>
        </div>
    </section>

    {{-- slideshow --}}
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ asset('asset/css/slider.css') }}">
    <section id="listprogram">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <!-- Slide One - Set the background image for this slide in the line below -->
                <div class="carousel-item active"
                    style="background-image: url('../../asset/slideshow/polinema-bidiksiba.png')">

                </div>
                <!-- Slide Two - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image: url('../../asset/slideshow/polsri-bidiksiba.png')">

                </div>
                <!-- Slide Three - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image: url('../../asset/slideshow/polinela-bidiksiba.png')">

                </div>
            </div>
            <a class="carousel-control-prev custom-button" href="#carouselExampleIndicators" role="button"
                data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <a class="carousel-control-next custom-button" href="#carouselExampleIndicators" role="button"
                data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        </div>
    </section>

    {{-- berita --}}
    <section id="berita">
        <link rel="stylesheet" href="{{ asset('asset/css/news.css') }}">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!------ Include the above in your HEAD tag ---------->

        <div class="header-berita text-center">
            <h2 style="color: white; padding-top: 50px; padding-bottom:50px;" class="fw-bold">
                Berita Seputar Beasiswa PT. Bukit Asam Tbk
            </h2>
        </div>
        {{-- <div class="container-fluid bg-full p-30px">
            <div class="row col-sm-10 text-center m-auto">
                @php $count = 0; @endphp
                @foreach ($berita->chunk(4) as $chunk)
                    @foreach ($chunk as $berita)
                        @if ($count < 3)
                            <div class="col-lg-4 item-fa example p-3">
                                <div class="item-container">
                                    <div class="wrapper">
                                        <div class="item-date">{{ $berita->updated_at }}</div>
                                        <div class="icon my-4"><img src="{{ $berita->gambar }}"></div>
                                        <div class="item-title clearfix">
                                            <a href="#">
                                                <h4 class="text-light pt-3 clamp-3-lines">{{ $berita->judul }}</h4>
                                            </a>
                                        </div>
                                        <br>
                                        <div class="item-description text-white clamp-3-lines">{{ $berita->deskripsi }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @php $count++; @endphp
                        @endif
                    @endforeach
                @endforeach
            </div>
        </div> --}}
        <div class="text-right">
            <a class="beritalain" aria-current="page" href="#">Berita Lainnya -></a>
        </div>

    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
@endsection
