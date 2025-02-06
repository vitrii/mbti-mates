@extends('layouts.theme')
<head>
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>

@section('guide')

 <!-- Guide Section -->
 <section id="guide" class="guide section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <hr>
    <p></p>
    <h2>Panduan</h2>
    <p></p>
    <p>Panduan dalam Mengisi Tes MBTI<br></p>
  </div>
  <!-- End Section Title -->

  <div class="container">

    <div class="">

      <div class="" data-aos="zoom-out" data-aos-delay="100">
        {{-- <img src="assets/img/guide.png" class="img-fluid" alt=""> --}}
      </div>

      <div class="">
        <div class="row align-self-center gy-4">

          <div class="" data-aos="fade-up" data-aos-delay="200">
            <div class="feature-box d-flex align-items-center">
              <i class="bi bi-check"></i>
              <h3>Siapkan waktu yang tenang sebelum memulai. Tes MBTI memerlukan
                 konsentrasi, jadi penting untuk berada dalam kondisi yang tenang dan santai.</h3>
            </div>
          </div><!-- End Feature Item -->

          <div class="" data-aos="fade-up" data-aos-delay="300">
            <div class="feature-box d-flex align-items-center">
              <i class="bi bi-check"></i>
              <h3>Jawab dengan jujur.
                ketika menjawab pertanyaan, pilihlah jawaban yang paling mencerminkan diri kamu secara alami, 
                bukan bagaimana kamu ingin terlihat atau bagaimana menurutmu seharusnya. 
                Tidak ada jawaban 
                "benar" atau "salah" dalam tes MBTI.</h3>
            </div>
          </div><!-- End Feature Item -->

          <div class="" data-aos="fade-up" data-aos-delay="400">
            <div class="feature-box d-flex align-items-center">
              <i class="bi bi-check"></i>
              <h3>
                Fokus pada pilihan yang paling umum. 
                Jika kamu menemukan pertanyaan yang sulit atau kamu merasa bisa menjawab dua jawaban, pilih yang paling sering menggambarkan perilakumu dalam kehidupan sehari-hari.
              </h3>
            </div>
          </div><!-- End Feature Item -->

          <div class="" data-aos="fade-up" data-aos-delay="500">
            <div class="feature-box d-flex align-items-center">
              <i class="bi bi-check"></i>
              <h3> Apabila kamu berhenti di tengah-tengah saat mengerjakan tes, maka jawaban selama proses tes akan hilang. 
                Jadi usahakan kamu menjawab semua pertanyaan, jawablah dengan santai karena tes kepribadian ini tidak dibatasi waktu.</h3>
            </div>
          </div><!-- End Feature Item -->

          <div class="" data-aos="fade-up" data-aos-delay="600">
            <div class="feature-box d-flex align-items-center">
              <i class="bi bi-check"></i>
              <h3>Jangan khawatir tentang hasilnya. 
                Hasil tes MBTI tidak menggambarkan "benar" atau "salah" tentang siapa kamu. Setiap tipe kepribadian memiliki nilai, kekuatan, dan tantangan yang unik. 
                Hasil ini adalah langkah pertama dalam pemahaman diri.</h3>
            </div>
          </div><!-- End Feature Item -->

          <div class="" data-aos="fade-up" data-aos-delay="500">
            <div class="feature-box d-flex align-items-center">
              <i class="bi bi-check"></i>
              <h3>Pelajari dan refleksikan hasilnya.
                Setelah kamu mendapatkan hasil tes MBTI, luangkan waktu untuk membaca tentang tipe kepribadianmu. Pahami kekuatan, preferensi, dan area yang dapat kamu kembangkan. 
                Ini akan membantumu dalam kehidupan sehari-hari, hubungan, dan karier.</h3>
            </div>
          </div><!-- End Feature Item -->

        </div>
      </div>

    </div>

  </div>

</section>
<!-- /End Guide Section -->

 {{-- footer --}}
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
@endsection