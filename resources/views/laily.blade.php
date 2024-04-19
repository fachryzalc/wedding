@extends('layouts.master')

@push('meta')
    <meta name="title" content="Laily & Fachryzal Wedding">
    <meta name="description" content="Minggu, 05 Mei 2024">
@endpush

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
<link rel="stylesheet" href="{{ asset('/css/front.css') }}">
<script src="{{ asset('js/simplyCountdown.min.js') }}"></script>

@push('style')
    <style>
        :root {
            --pink: #f14e95;
            --bg: #0a0a0a;
            --shadow: 0 5px 5px rgba(0, 0, 0, 0.3);
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-size: 1.2rem;
            font-family: "Poppins", sans-serif;
        }

        .dark-shadow {
            text-shadow: var(--shadow);
        }
    </style>
@endpush

@section('content')

    <body>
        <section id="hero"
            class="hero h-100 p-3 mx-auto text-center d-flex justify-content-center align-items-center text-white">
            <main>
                <h4 class="mb-3 dark-shadow" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-offset="0"
                    data-aos-delay="500" data-aos-easing="ease-in-out" data-aos-duration="1000">Undangan Pernikahan
                </h4>
                @if ($name)
                    <h4 class="mb-5 dark-shadow" data-aos="fade-up" data-aos-delay="450" data-aos-easing="ease-in-out"
                        data-aos-duration="1500" data-aos-anchor-placement="top-bottom">Kepada <span
                            class="text-capitalize">{{ $name }}</span></h4>
                @endif
                <h1 class="p-5 dark-shadow" data-aos="zoom-in" data-aos-duration="1500">Laily & Fachryzal</h1>
                <h4 data-aos="fade-down text" data-aos-delay="450" data-aos-easing="ease-in-out" data-aos-duration="1500">
                    05.05.2024</h4>
                <div class="countdown mb-5 dark-shadow" data-aos="fade-down" data-aos-delay="500"
                    data-aos-easing="ease-in-out" data-aos-duration="1000"></div>
                <a href="#home" class="btn btn-lg mt-5 shadow" data-aos="fade-down" data-aos-delay="550"
                    data-aos-easing="ease-in-out" data-aos-duration="500" onclick="enableScroll()" data-aos-offset="75"><i
                        class="bx bx-envelope-open"></i> Buka
                    Undangan</a>
                <p class="mt-1 dark-shadow test-anchor" data-aos="fade-down" data-aos-delay="600"
                    data-aos-easing="ease-in-out" data-aos-duration="0" data-aos-anchor-placement="top-bottom">
                    #LailyFachryzal
                </p>
            </main>
        </section>

        <section id="home" class="home text-white" style="background-position-y:30%;">
            <div class="container" style="margin-top: 10%">
                <div class="row justify-content-center">
                    <div class="col-md-8 text-center">
                        <h3 class="mb-2 dark-shadow" data-aos="fade-down" data-aos-delay="500" data-aos-duration="1000">
                            Pernikahan
                        </h3>
                        <h1 class="p-3 fw-semi-bold dark-shadow" data-aos="zoom-in" data-aos-delay="100"
                            data-aos-duration="2000">Laily
                            &
                            Fachryzal</h1>
                        <h4 class="dark-shadow" data-aos="fade-down" data-aos-delay="500" data-aos-duration="1000">
                            Minggu, 05 Mei
                            2024</h4>
                        <p class="dark-shadow" data-aos="fade-down" data-aos-delay="550" data-aos-duration="500">
                            #LailyFachryzal
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section id="quotes"
            class="quotes w-100 h-100 p-3 mx-auto text-center d-flex justify-content-center align-items-center">
            <div class="d-flex justify-content-center align-items-center flex-wrap-reverse">
                <div class="p-5">
                    <img class="rounded-5 img-fluid object-fit-cover" src="{{ asset('img/quotes.jpg') }}" alt=""
                        style="position:sticky;box-shadow:5px 10px 20px rgba(0, 0, 0, 0.3);aspect-ratio: 1 / 1; width:400px;color:#7D4F50"
                        data-aos="fade-right" data-aos-delay="50">
                </div>
                <div class="p-5">
                    <img class="img-fluid mb-4" src="{{ asset('img/lf.png') }}" alt="" data-aos="fade-left"
                        data-aos-delay="50" style="max-width:50px;margin-left:-20px;">
                    <p data-aos="fade-down" data-aos-delay="100" class="fs-1">وَمِنْ كُلِّ شَيْءٍ خَلَقْنَا
                        زَوْجَيْنِ
                        لَعَلَّكُمْ تَذَكَّرُوْنَ</p>
                    <p data-aos="fade-down" data-aos-delay="150">“Dan segala sesuatu kami jadikan berpasang-pasangan,
                        supaya
                        kamu mengingat kebesaran Allah.”</p>
                    <h4 class="mb-4 bold" data-aos="fade-down" data-aos-delay="50">QS. Adz Dzariyaat (51) : 49</h4>
                </div>
            </div>
        </section>

        <section id="couple" class="couple">
            <div class="d-flex align-items-center flex-column justify-content-center p-5">
                <div class="container text-center">
                    <img class="img-fluid" src="{{ asset('img/lf.png') }}" alt="" data-aos="fade-down"
                        data-aos-delay="50" style="max-width:50px">
                    <h1 class="title">Tentang Kami</h1>
                </div>
                <div class="row mt-5 text-center">
                    <div class="col-lg-6 col-md-6 col-sm-12 mb-5">
                        <img class="rounded-circle border border-5 img-fluid object-fit-cover"
                            src="{{ asset('img/woman.jpg') }}" alt="" data-aos="fade-down"
                            style="position:sticky;box-shadow:5px 10px 20px rgba(0, 0, 0, 0.3);aspect-ratio: 1 / 1; width:400px;color:#d1be9c">
                        <div class="container" data-aos="fade-down" data-aos-delay="150">
                            <h1 class="mt-5">Laily</h1>
                            <h3 class="mt-5">Laili Nurhidayah</h3>
                            <hr>
                            <h4 class="lead">Putri pertama dari Bpk. Abdul Aziz & Ibu Muntiari</h4>
                            <span><i class="bx bxl-instagram rounded-circle p-2 mt-3"
                                    style="font-size: 2.4rem; background-color:#f9eae1; cursor: pointer;"></i></span>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <img class="rounded-circle border border-5 img-fluid object-fit-cover"
                            src="{{ asset('img/man.jpg') }}" alt="" data-aos="fade-up"
                            style="position:sticky;box-shadow:5px 10px 20px rgba(0, 0, 0, 0.3);aspect-ratio: 1 / 1; width:400px;color:#d1be9c">
                        <div class="container" data-aos="fade-up" data-aos-delay="150">
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
                    <div class="col-12 text-center mb-3">
                        <img class="img-fluid" src="{{ asset('img/lf-light.png') }}" alt="" data-aos="fade-down"
                            data-aos-delay="50" style="max-width:50px">
                    </div>
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
                        <img class="rounded-5 img-fluid object-fit-cover" src="{{ asset('img/akad.jpg') }}"
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
                            <img class="rounded-5 img-fluid object-fit-cover" src="{{ asset('img/resepsi.jpg') }}"
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
                        <img class="img-fluid" src="{{ asset('img/lf.png') }}" alt="" data-aos="fade-down"
                            data-aos-delay="50" style="max-width:50px">
                        <h1>Galeri Foto</h1>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 text-center p-5">
                        <a href="{{ asset('/img/galery-1.jpg') }}" data-toggle="lightbox"
                            data-gallery="example-gallery">
                            <img class="rounded-5 galery img-fluid object-fit-cover " data-aos="zoom-in-up"
                                src="{{ asset('/img/galery-1.jpg') }}" alt=""
                                style="position:sticky;box-shadow:5px 10px 20px rgba(0, 0, 0, 0.3);aspect-ratio: 1 / 1; width:400px;">
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 text-center p-5">
                        <a href="{{ asset('img/galery-2.jpg') }}" data-toggle="lightbox" data-gallery="example-gallery">
                            <img class="rounded-5 galery img-fluid object-fit-cover " data-aos="zoom-in-up"
                                src="{{ asset('img/galery-2.jpg') }}" alt=""
                                style="position:sticky;box-shadow:5px 10px 20px rgba(0, 0, 0, 0.3);aspect-ratio: 1 / 1; width:400px;">
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 text-center p-5">
                        <a href="{{ asset('img/galery-3.jpg') }}" data-toggle="lightbox" data-gallery="example-gallery">
                            <img class="rounded-5 galery img-fluid object-fit-cover " data-aos="zoom-in-up"
                                src="{{ asset('img/galery-3.jpg') }}" alt=""
                                style="position:sticky;box-shadow:5px 10px 20px rgba(0, 0, 0, 0.3);aspect-ratio: 1 / 1; width:400px;">
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12 text-center p-5">
                        <a href="{{ asset('img/galery-4.jpg') }}" data-toggle="lightbox" data-gallery="example-gallery">
                            <img class="rounded-5 galery img-fluid object-fit-cover " data-aos="zoom-in-up"
                                data-aos-delay="150" src="{{ asset('img/galery-4.jpg') }}" alt=""
                                style="position:sticky;box-shadow:5px 10px 20px rgba(0, 0, 0, 0.3);aspect-ratio: 1 / 1; width:400px;">
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 text-center p-5">
                        <a href="{{ asset('img/galery-5.jpg') }}" data-toggle="lightbox" data-gallery="example-gallery">
                            <img class="rounded-5 galery img-fluid object-fit-cover " data-aos="zoom-in-up"
                                data-aos-delay="150" src="{{ asset('img/galery-5.jpg') }}" alt=""
                                style="position:sticky;box-shadow:5px 10px 20px rgba(0, 0, 0, 0.3);aspect-ratio: 1 / 1; width:400px;">
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 text-center p-5">
                        <a href="{{ asset('img/galery-6.jpg') }}" data-toggle="lightbox" data-gallery="example-gallery">
                            <img class="rounded-5 galery img-fluid object-fit-cover " data-aos="zoom-in-up"
                                data-aos-delay="150" src="{{ asset('img/galery-6.jpg') }}" alt=""
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
                        <img class="img-fluid" src="{{ asset('img/lf.png') }}" alt="" data-aos="fade-down"
                            data-aos-delay="50" style="max-width:50px">
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
                                        <h4>Bank Mandiri</h4>
                                        <h5>a.n Laili Nurhidayah</h5>
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
                <source src="{{ asset('song/soundtrack.mp3') }}" type="audio/mp3">
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
    </script>
@endpush
