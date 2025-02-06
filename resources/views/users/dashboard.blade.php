@extends('layouts.theme')

<head>
    @include('layouts.head', ['title' => 'Mulai Test'])
    <!--  Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
</head>

<body>
    <div class="flex items-center justify-center">
        <div class="container">
            @csrf
            <form action="/hasil" method="post">
                {{ csrf_field() }}
                <div class="w-full mb-8 mt-5 overflow-hidden ">
                    <div class="w-full overflow-x-auto">
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="flex justify-center w-full h-screen items-center">
                                        <input type="text" name="nama" id="nama" placeholder="Nama Anda"
                                            class="block mb-2 p-2 rounded-md border-2 border-indigo-500 shadow-md focus:outline-none focus:border-indigo-600 text-center uppercase"
                                            maxlength="10" required>
                                    </div>
                                </div>
                                @php
                                    $begin = 0;
                                @endphp
                                @for ($i = 0; $i < count($questions) / 3; $i++)
                                    <div class="swiper-slide">
                                        @foreach ($questions->slice($begin, 3) as $question)
                                            <div class="flex justify-center my-4 w-full cursor-pointer">
                                                <div class="flex-row w-1/2">
                                                    <p class="my-3">
                                                        {{ $question->id }}.{{ $question->pertanyaan }}
                                                    </p>
                                                    <div
                                                        class="rounded-md shadow-md py-3 px-4 w-full mb-3 border-solid border-2 border-indigo-500 transform transition duration-500  hover:-translate-y-1">
                                                        <input type="radio" name="{{ $question->id }}"
                                                            id="{{ $question->type_satu }}"
                                                            value="{{ $question->type_satu }}" required>
                                                        <label
                                                            for="{{ $question->type_satu }}">{{ $question->jawaban_satu }}</label>
                                                    </div>
                                                    <div
                                                        class="rounded-md shadow-md py-3 px-4 w-full border-solid border-2 border-indigo-500 transform transition duration-500  hover:-translate-y-1">
                                                        <input type="radio" name="{{ $question->id }}"
                                                            id="{{ $question->type_dua }}"
                                                            value="{{ $question->type_dua }}">
                                                        <label
                                                            for="{{ $question->type_dua }}">{{ $question->jawaban_dua }}</label>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    @php
                                        $begin += 3;
                                    @endphp
                                @endfor
                                <div class="swiper-slide">
                                    <div class="flex justify-center h-screen items-center">
                                        <input type="submit"
                                            class="transform transition duration-500 hover:scale-105 hover:-translate-y-1 bg-indigo-600 hover:scale-11 hover:bg-indigo-800 text-white py-3 px-6 rounded-md"
                                            value="Lihat hasil">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                </div>
            </form>
        {{-- footer area --}}
            <footer id="footer" class="footer">

                <div class="container footer-top">
                <div class="row gy-4">
                    <div class="col-lg-4 col-md-6 footer-about">
                    <a href="index.html" class="d-flex align-items-center">
                        <span class="sitename">MBTI-MATES</span>
                    </a>
                    <div class="footer-contact pt-3">
                        <p>A108 Adam Street</p>
                        <p>New York, NY 535022</p>
                        <p class="mt-3"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
                        <p><strong>Email:</strong> <span>info@example.com</span></p>
                    </div>
                    </div>

                    <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="{{url('/')}}">Beranda</a></li>
                        <li><a href="{{url('/')}}#mbti">Apa itu MBTI?</a></li>
                        <li><a href="{{url('/')}}#about">Tentang</a></li>
                        <li><a href="{{url('/personality-type')}}">Tipe Kepribadian</a></li>
                        <li><a href="{{url('/')}}#guide">Panduan</a></li>
                    </ul>
                    </div>

                    <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i>Test Tipe Kepribadian gratis</li>
                        <li><i class="bi bi-chevron-right"></i>Info seputar Tipe Kepribadian</li>
                        <li><i class="bi bi-chevron-right"></i>Menyarankan karier yang cocok untuk setiap tipe kepribadian</li>
                    </ul>
                    </div>

                    <div class="col-lg-4 col-md-12">
                    <h4>Follow Us</h4>
                    <p></p>
                    <div class="social-links d-flex">
                        <a href=""><i class="bi bi-twitter-x"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                    </div>

                    </div>
                </div>

            <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">MBTI-MATES</strong> <span>All Rights Reserved</span></p>
            <div class="credits">
                <p>by Vitri</p>
            </div>
            </div>

        </footer>
        {{-- end footer --}}

        </div>
        <!-- Swiper JS -->
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <script>
            var swiper = new Swiper('.mySwiper', {
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });
        </script>
</body>

