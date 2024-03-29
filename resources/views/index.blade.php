@extends('layouts.master')
@section('title', 'Laili & Fachryzal Wedding')
<!-- Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Beau+Rivage&family=Corinthia:wght@400;700&family=WindSong:wght@400;500&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">
<link
    href="https://fonts.googleapis.com/css2?family=Corinthia:wght@400;700&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">
<link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">

<link
    href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<link rel="stylesheet" href="{{ asset('/css/simplyCountdown.theme.default.css') }}">
<script src="{{ asset('js/simplyCountdown.min.js') }}"></script>
@push('style')
    <style>
        :root {
            --pink: #f14e95;
            --bg: #0a0a0a;
            --shadow: 0 2px 2px rgba(0, 0, 0, 0.5);
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-size: 1.2rem;
            font-family: 'Poppins', sans-serif;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('/img/hero.jpg');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            z-index: -1;
            filter: saturate();
        }

        .hero {
            position: relative;
            min-height: 100vh;

        }

        .hero h1 {
            font-family: 'WindSong', cursive;
            font-size: 6rem;
            font-style: italic;
        }

        .hero h4 {
            letter-spacing: 5px;
            font-size: 1.6rem;
        }

        .hero p {
            letter-spacing: 2px;
            font-weight: 300;
        }

        .hero a {
            background-color: rgba(255, 255, 255, 0.5);
        }

        .hero a:hover {
            background-color: rgba(255, 255, 255, 1);
            color: black;
        }


        .home {
            background-image: url('img/home.jpeg');
            background-size: cover;
            background-position: center;
            min-height: 100vh;
            padding-top: 10rem;
        }

        .home h1 {
            font-family: 'WindSong', cursive;
            font-size: 5rem;
            font-style: italic;
        }

        .home h3 {
            letter-spacing: 5px;
            font-size: 1.6rem;
        }

        .home h4 {
            letter-spacing: 2px;
            font-size: 1.6rem;
        }

        .home p {
            letter-spacing: 2px;
            font-weight: 300;
        }

        .quotes {
            background-color: #F5EDEA;
            min-height: 100vh;
            color: #552018;
        }

        .couple {
            background-color: #DFD1C4;
            color: #552018;
        }

        .couple .title {
            font-family: 'WindSong', cursive;
            font-size: 4rem;
        }

        .couple .potrait h1 {
            font-family: 'WindSong', cursive;
            font-size: 4rem;
        }

        .couple .potrait h3 {
            letter-spacing: 0.3rem;
        }

        .couple .potrait h4 {
            font-size: 1.2rem;
        }

        .about-us {
            background-color: #DFD1C4;
            /* min-height: 100vh; */
        }

        .about-us h1 {
            font-family: 'WindSong', cursive;
            font-size: 4rem;
            color: #552018;
        }

        .main-content {
            background-image: url('img/home.jpeg');
            background-size: cover;
            background-position: center;
            min-height: 100vh;
        }

        .main-content h1 {
            font-family: 'WindSong', cursive;
            font-size: 5rem;
            font-style: italic;
        }

        .main-content h2 {
            font-family: 'Cormorant Garamond', cursive;
            font-weight: 700;
            letter-spacing: 5px;
        }

        .main-content h4 {
            font-weight: 300;
        }

        .angpao {
            background-color: #f9eae1;
            color: #552018;
        }

        .copy-text button:before {
            content: "Copied";
            position: absolute;
            top: -45px;
            right: 0px;
            background: #5c81dc;
            padding: 8px 10px;
            border-radius: 20px;
            font-size: 15px;
            display: none;
        }

        .copy-text button:after {
            content: "";
            position: absolute;
            top: -20px;
            right: 25px;
            width: 10px;
            height: 10px;
            background: #5c81dc;
            transform: rotate(45deg);
            display: none;
        }

        .audio-icon-wrapper {
            width: 4rem;
            height: 4rem;
            font-size: 4rem;
            position: fixed;
            bottom: 2.5rem;
            right: 2rem;
            cursor: pointer;
            color: white;
            opacity: 0.5;
            mix-blend-mode: difference;
            animation: rotating 4s linear infinite;
            transform-origin: center;
            display: flex;
            justify-content: center;
            align-items: center;
            line-height: 0;
        }

        @keyframes rotating {
            from {
                transform: rotate(0)
            }

            to {
                transform: rotate(360deg)
            }
        }

        @media (max-width:992px) {
            html {
                font-size: 75%;
            }

            .potrait {
                width: 300px !important;
            }

            .galery {
                width: 250px !important;
            }
        }

        @media (max-width:768px) {
            html {
                font-size: 65%;
            }

            .potrait {
                width: 300px !important;
            }

            .galery {
                width: 250px;
            }
        }

        @media (max-width:576px) {
            html {
                font-size: 57.5%;
            }

            .potrait {
                width: 250px !important;
            }

            .galery {
                width: 250px;
            }
        }
    </style>
@endpush

@section('content')

    <body>
        <section id="hero"
            class="hero h-100 p-3 mx-auto text-center d-flex justify-content-center align-items-center text-white">
            <main>
                <h4 class="mb-3" data-aos="fade-up" data-aos-delay="500" data-aos-easing="ease-in-out"
                    data-aos-duration="1000">Undangan Pernikahan
                </h4>
                <h4 class="mb-5" data-aos="fade-up" data-aos-delay="450" data-aos-easing="ease-in-out"
                    data-aos-duration="1500">Kepada <span class="text-capitalize"></span></h4>
                <h1 class="p-5" data-aos="zoom-in" data-aos-duration="1500">Laily & Fachryzal</h1>
                <h4 data-aos="fade-down" data-aos-delay="450" data-aos-easing="ease-in-out" data-aos-duration="1500">
                    05.05.2024</h4>
                <div class="countdown mb-5" data-aos="fade-down" data-aos-delay="500" data-aos-easing="ease-in-out"
                    data-aos-duration="1000"></div>
                <a href="#home" class="btn btn-lg mt-5" data-aos="fade-down" data-aos-delay="550"
                    data-aos-easing="ease-in-out" data-aos-duration="500" onclick="enableScroll()"><i
                        class="bx bx-envelope-open"></i> Buka
                    Undangan</a>
                <p class="mt-1" data-aos="fade-down" data-aos-delay="600" data-aos-easing="ease-in-out"
                    data-aos-duration="0">#LailyFachryzal
                </p>
            </main>
        </section>

        <section id="home" class="home text-white">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 text-center">
                        <h3 class="mb-2" data-aos="fade-down" data-aos-delay="500" data-aos-duration="1000">Pernikahan
                        </h3>
                        <h1 class="p-3 fw-semi-bold" data-aos="zoom-in" data-aos-delay="100" data-aos-duration="2000">Laily
                            &
                            Fachryzal</h1>
                        <h4 data-aos="fade-down" data-aos-delay="500" data-aos-duration="1000"> Minggu, 05 Mei 2024</h4>
                        <p data-aos="fade-down" data-aos-delay="550" data-aos-duration="500">#LailyFachryzal</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="quotes"
            class="quotes w-100 h-100 p-3 mx-auto text-center d-flex justify-content-center align-items-center">
            <div class="d-flex justify-content-center align-items-center flex-wrap-reverse">
                <div class="p-5">
                    <img class="rounded-5 img-fluid object-fit-cover" src="{{ asset('img/home.jpeg') }}" alt=""
                        style="position:sticky;box-shadow:5px 10px 20px rgba(0, 0, 0, 0.3);aspect-ratio: 1 / 1; width:400px;color:#7D4F50"
                        data-aos="fade-right" data-aos-delay="50">
                </div>
                <div class="p-5">
                    <img class="img-fluid mb-4" src="{{ asset('img/cosmos.png') }}" alt="" data-aos="fade-left"
                        data-aos-delay="50" style="max-width:200px;margin-left:-20px;">
                    <p data-aos="fade-down" data-aos-delay="100" class="fs-1">وَمِنْ كُلِّ شَيْءٍ خَلَقْنَا
                        زَوْجَيْنِ
                        لَعَلَّكُمْ تَذَكَّرُوْنَ</p>
                    <p data-aos="fade-down" data-aos-delay="150">“Dan segala sesuatu kami jadikan berpasang-pasangan, supaya
                        kamu mengingat kebesaran Allah.”</p>
                    <h4 class="mb-4 bold" data-aos="fade-down" data-aos-delay="50">QS. Adz Dzariyaat (51) : 49</h4>
                </div>
            </div>
        </section>

        <section id="couple" class="couple">
            <div class="d-flex align-items-center flex-column justify-content-center p-5">
                <div class="container text-center">
                    <img class="img-fluid" src="{{ asset('img/cosmos.png') }}" alt="" data-aos="fade-down"
                        data-aos-delay="50" style="max-width:200px">
                    <h1 class="title">Tentang Kami</h1>
                </div>
                <div class="d-flex flex-wrap justify-content-center">
                    <div class="p-5 w-50 potrait text-center">
                        <img class="rounded-circle border border-5 img-fluid object-fit-cover"
                            src="{{ asset('img/home.jpeg') }}" alt="" data-aos="fade-right"
                            style="position:sticky;box-shadow:5px 10px 20px rgba(0, 0, 0, 0.3);aspect-ratio: 1 / 1; width:400px;color:#d1be9c">
                        <div class="container" data-aos="fade-right" data-aos-delay="150">
                            <h1 class="mt-5">Laily</h1>
                            <h3 class="mt-5">Laili Nurhidayah</h3>
                            <hr>
                            <h4 class="lead">Putri pertama dari Bpk. Abdul Aziz & Ibu Muntiari</h4>
                            <span><i class="bx bxl-instagram rounded-circle p-2 mt-3"
                                    style="font-size: 2.4rem; background-color:#f9eae1; cursor: pointer;"></i></span>
                        </div>
                    </div>
                    <div class="p-5 w-50 potrait text-center">
                        <img class="rounded-circle border border-5 img-fluid object-fit-cover"
                            src="{{ asset('img/home.jpeg') }}" alt="" data-aos="fade-left"
                            style="position:sticky;box-shadow:5px 10px 20px rgba(0, 0, 0, 0.3);aspect-ratio: 1 / 1; width:400px;color:#7D4F50">
                        <div class="container" data-aos="fade-left" data-aos-delay="150">
                            <h1 class="mt-5">Fachryzal</h1>
                            <h3 class="mt-5">Fachryzal Candra Trisnawan</h3>
                            <hr>
                            <h4 class="lead">Putra pertama dari Bpk. Sutrisno & Ibu Susilowati</h4>
                            <span><i class="bx bxl-instagram rounded-circle p-2 mt-3"
                                    style="font-size: 2.4rem; background-color:#f9eae1; cursor: pointer;"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="main-content">
            <div class="container text-center text-white p-5">
                <div class="row">
                    <div class="col-12 mb-5 ">
                        <h1 class="fw-semi-bold" data-aos="fade-up" data-aos-delay="200">Menuju<br>Hari Bahagia</h1>
                    </div>
                    <div class="col-12 mb-2">
                        <h3 data-aos="zoom-in" class="fw-semi-bold">Minggu, 05 Mei 2024</h3>
                    </div>
                    <div class="col-12">
                        <div class="countdown-master fw-semi-bold pb-5" data-aos="fade-down" data-aos-delay="200"
                            style="word-spacing: 15px;">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 mb-5" data-aos="zoom-in">
                        <img class="rounded-5 img-fluid object-fit-cover" src="{{ asset('img/home.jpeg') }}"
                            alt=""
                            style="position:sticky;box-shadow:5px 10px 20px rgba(0, 0, 0, 0.3);aspect-ratio: 1 / 1; width:400px;color:#7D4F50">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 mb-5">
                        <h2 class="p-2 fs-1" data-aos="zoom-in">
                            AKAD NIKAH
                        </h2>
                        <h4 class="p-2" data-aos="zoom-in">
                            05 Mei 2024
                        </h4>
                        <h4 class="p-2" data-aos="zoom-in">
                            07.30 WIB
                        </h4>
                        <h4 class="p-2" data-aos="zoom-in">
                            Masjid Nurul Yaqin <br>
                            Jl. Sumbergondo, Sumbergondo, Kec. Bumiaji, Kota Batu, Jawa Timur 65335
                        </h4>
                        <a href="https://maps.app.goo.gl/JB98RC8mSgJJmrbm6" target="_blank" rel="noopener noreferrer"
                            class="btn btn-lg btn-light rounded-5 w-50 fw-light opacity-75" data-aos="zoom-in">Lihat
                            Peta</a>
                    </div>
                    <div class="d-flex flex-wrap-reverse justify-content-center">
                        <div class="col-lg-6 col-md-6 col-sm-12 mb-5">
                            <h2 class="p-2 fs-1" data-aos="zoom-in">
                                RESEPSI
                            </h2>
                            <h4 class="p-2" data-aos="zoom-in">
                                05 Mei 2024
                            </h4>
                            <h4 class="p-2" data-aos="zoom-in">
                                13.00 - 21.00 WIB
                            </h4>
                            <h4 class="p-2" data-aos="zoom-in">
                                Jl. Sumbergondo, Sumbergondo, Kec. Bumiaji, Kota Batu, Jawa Timur 65335
                            </h4>
                            <a href="https://maps.app.goo.gl/fUsGKJ3g42HptH6X8" target="_blank" rel="noopener noreferrer"
                                class="btn btn-lg btn-light rounded-5 w-50 fw-light opacity-75" data-aos="zoom-in">Lihat
                                Peta</a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 mb-5">
                            <img class="rounded-5 img-fluid object-fit-cover" src="{{ asset('img/home.jpeg') }}"
                                alt="" data-aos="zoom-in"
                                style="position:sticky;box-shadow:5px 10px 20px rgba(0, 0, 0, 0.3);aspect-ratio: 1 / 1; width:400px;color:#7D4F50">
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section id="about-us" class="about-us">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center p-5 title">
                        <h1>Galeri Foto</h1>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 text-center p-5">
                        <a href="{{ asset('img/home.jpeg') }}" data-toggle="lightbox" data-gallery="example-gallery">
                            <img class="rounded-5 galery img-fluid object-fit-cover " data-aos="zoom-in-up"
                                src="{{ asset('img/home.jpeg') }}" alt=""
                                style="position:sticky;box-shadow:5px 10px 20px rgba(0, 0, 0, 0.3);aspect-ratio: 1 / 1; width:400px;">
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 text-center p-5">
                        <a href="{{ asset('img/hero.jpg') }}" data-toggle="lightbox" data-gallery="example-gallery">
                            <img class="rounded-5 galery img-fluid object-fit-cover " data-aos="zoom-in-up"
                                src="{{ asset('img/hero.jpg') }}" alt=""
                                style="position:sticky;box-shadow:5px 10px 20px rgba(0, 0, 0, 0.3);aspect-ratio: 1 / 1; width:400px;">
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 text-center p-5">
                        <a href="{{ asset('img/hero.jpg') }}" data-toggle="lightbox" data-gallery="example-gallery">
                            <img class="rounded-5 galery img-fluid object-fit-cover " data-aos="zoom-in-up"
                                src="{{ asset('img/hero.jpg') }}" alt=""
                                style="position:sticky;box-shadow:5px 10px 20px rgba(0, 0, 0, 0.3);aspect-ratio: 1 / 1; width:400px;">
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12 text-center p-5">
                        <a href="{{ asset('img/home.jpeg') }}" data-toggle="lightbox" data-gallery="example-gallery">
                            <img class="rounded-5 galery img-fluid object-fit-cover " data-aos="zoom-in-up"
                                data-aos-delay="150" src="{{ asset('img/home.jpeg') }}" alt=""
                                style="position:sticky;box-shadow:5px 10px 20px rgba(0, 0, 0, 0.3);aspect-ratio: 1 / 1; width:400px;">
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 text-center p-5">
                        <a href="{{ asset('img/hero.jpg') }}" data-toggle="lightbox" data-gallery="example-gallery">
                            <img class="rounded-5 galery img-fluid object-fit-cover " data-aos="zoom-in-up"
                                data-aos-delay="150" src="{{ asset('img/hero.jpg') }}" alt=""
                                style="position:sticky;box-shadow:5px 10px 20px rgba(0, 0, 0, 0.3);aspect-ratio: 1 / 1; width:400px;">
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 text-center p-5">
                        <a href="{{ asset('img/home.jpeg') }}" data-toggle="lightbox" data-gallery="example-gallery">
                            <img class="rounded-5 galery img-fluid object-fit-cover " data-aos="zoom-in-up"
                                data-aos-delay="150" src="{{ asset('img/home.jpeg') }}" alt=""
                                style="position:sticky;box-shadow:5px 10px 20px rgba(0, 0, 0, 0.3);aspect-ratio: 1 / 1; width:400px;">
                        </a>
                    </div>
                </div>
            </div>
        </section>



        <section id="angpao" class="angpao">
            <div class="container text-center p-5">
                <div class="row">
                    <div class="col-sm-12 p-5">
                        <h1 data-aos="zoom-in" data-aos-anchor-placement="bottom-bottom">Amplop Digital</h1>
                        <p data-aos="zoom-in" data-aos-anchor-placement="bottom-bottom">Kehadiran & doa
                            Anda adalah hadiah
                            terindah untuk
                            kami,
                            namun jika Anda ingin
                            memberi lebih,
                            silakan
                            gunakan informasi di bawah ini</p>
                        <button class="btn btn-light p-3 rounded-5 fst-normal opacity-75 nav-toggle" href="#collapse1"
                            data-aos="zoom-in" data-aos-anchor-placement="bottom-bottom">Tampilkan</button>
                    </div>
                    <div class="col-12">
                        <div class="container angpao-info" id="collapse1" style="display:none">
                            <div class="card text-center bg-light border border-light rounded-5">
                                <div class="row p-4">
                                    <div class="col-12 mb-3">
                                        Detail Bank Transfer
                                    </div>
                                    <div class="col-12">
                                        <h4>Bank Maybank Indonesia</h4>
                                        <h5>a.n Chrissy Gunawan</h5>
                                    </div>
                                    <div class="copy-text">
                                        <button class="copy-text btn btn-outline-dark" type="button" id="button-addon2">
                                            <div class="d-flex justify-content-between ">
                                                <div class="p-2 flex-fill">
                                                    <input class="rekening" type="text" value="12345678911"
                                                        class="text" style="all:unset;">
                                                    {{-- <p class="rekening">123456789</p> --}}
                                                </div>
                                                <div class="p-2">
                                                    <i class="bx bx-copy"></i>
                                                </div>
                                            </div>
                                        </button>
                                    </div>
                                    <span id="answer"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div id="audio-container">
            <audio id="song" loop>
                <source src="{{ asset('song/LeeHi - ONLY.mp3') }}" type="audio/mp3">
            </audio>

            <div class="audio-icon-wrapper" style="display: none">
                <i class='bx bxs-volume-full'></i>
            </div>
        </div>
    </body>
@endsection

@push('script')
    <script src="https://cdn.jsdelivr.net/npm/bs5-lightbox@1.8.3/dist/index.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            offset: 120, // offset (in px) from the original trigger point
            delay: 0, // values from 0 to 3000, with step 50ms
            duration: 700, // values from 0 to 3000, with step 50ms
            easing: 'ease', // default easing for AOS animations
            once: false, // whether animation should happen only once - while scrolling down
            mirror: true, // whether elements should animate out while scrolling past them
            anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

        });
    </script>
    <script>
        const rootElement = document.querySelector(":root")
        const audioIconWrapper = document.querySelector('.audio-icon-wrapper')
        const audioIcon = document.querySelector('.audio-icon-wrapper i')
        let isPlaying = false;
        const song = document.querySelector('#song');

        function disableScroll() {
            scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            scrollLeft = window.pageXOffset || document.documentElement.scrollLeft;

            window.onload = function() {
                window.scrollTo(scrollTop, scrollLeft);
            }
            window.onscroll = function() {
                window.scrollTo(scrollTop, scrollLeft);
            }

            rootElement.style.scrollBehavior = 'auto'
        }


        function enableScroll() {
            window.onscroll = function() {}
            rootElement.style.scrollBehavior = 'smooth';
            playAudio();
        }


        function playAudio() {
            song.volume = 0.1;
            audioIconWrapper.style.display = 'flex';
            song.play();
            isPlaying = true;
        }

        audioIconWrapper.onclick = function() {
            if (isPlaying) {
                song.pause();
                audioIcon.classList.remove('bxs-volume-full');
                audioIcon.classList.add('bx-pause-circle');
            } else {
                song.play();
                audioIcon.classList.remove('bx-pause-circle');
                audioIcon.classList.add('bxs-volume-full');
            }

            isPlaying = !isPlaying;
        }

        disableScroll();

        simplyCountdown('.countdown', {
            year: 2024, // required
            month: 5, // required
            day: 5, // required
            hours: 7, // Default is 0 [0-23] integer
            minutes: 30, // Default is 0 [0-59] integer
            seconds: 0, // Default is 0 [0-59] integer
            words: { //words displayed into the countdown
                days: {
                    singular: 'Hari',
                    plural: 'Hari'
                },
                hours: {
                    singular: 'Jam',
                    plural: 'Jam'
                },
                minutes: {
                    singular: 'Menit',
                    plural: 'Menit'
                },
                seconds: {
                    singular: 'Detik',
                    plural: 'Detik'
                }
            },
            inline: true,
            // inlineClass: 'simply-countdown-inline',
        });

        simplyCountdown('.countdown-master', {
            year: 2024, // required
            month: 5, // required
            day: 5, // required
            hours: 7, // Default is 0 [0-23] integer
            minutes: 30, // Default is 0 [0-59] integer
            seconds: 0, // Default is 0 [0-59] integer
            words: { //words displayed into the countdown
                days: {
                    singular: 'Hari',
                    plural: 'Hari'
                },
                hours: {
                    singular: 'Jam',
                    plural: 'Jam'
                },
                minutes: {
                    singular: 'Menit',
                    plural: 'Menit'
                },
                seconds: {
                    singular: 'Detik',
                    plural: 'Detik'
                }
            },
            inline: true,
            // inlineClass: 'simply-countdown-inline',
        });

        let copyText = document.querySelector(".copy-text");
        let answer = document.getElementById("answer");
        copyText.querySelector("button").addEventListener("click", function() {
            let input = copyText.querySelector("input");
            input.select();


            // The important part (copy selected text)
            var ok = document.execCommand('copy');

            if (ok) {
                input.blur();
                answer.innerHTML = 'Copied!';
                setTimeout(function() {
                    answer.innerHTML = '';
                }, 1000);
            }

        });

        $(document).ready(function() {
            $('.nav-toggle').click(function() {
                //get collapse content selector
                var collapse_content_selector = $(this).attr('href');
                let pageBottom = document.querySelector(".angpao-info")
                //make the collapse content to be shown or hide
                var toggle_switch = $(this);
                $(collapse_content_selector).slideToggle("slow", function() {
                    if ($(this).css('display') == 'none') {
                        //change the button label to be 'Show'
                        toggle_switch.html('Tampilkan');
                    } else {
                        pageBottom.scrollIntoView()
                        //change the button label to be 'Hide'
                        toggle_switch.html('Sembunyikan');
                    }
                });
            });
        });

        const urlParams = new URLSearchParams(window.location.search);
        const nama = urlParams.get('nama') || 'Bapak/Ibu/Saudara/i';

        const namaContainer = document.querySelector('.hero h4 span');
        namaContainer.innerText = nama;
    </script>
@endpush
