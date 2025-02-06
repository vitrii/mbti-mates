@extends('layouts.theme')
<head>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>

@section('hero')

  <!-- Hero Section -->
  <section id="hero" class="hero section">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="hero-content" data-aos="fade-up" data-aos-delay="200">
            {{-- <div class="company-badge mb-4">
              <i class="bi bi-gear-fill me-2"></i>
              Working for your success
            </div> --}}

            <h1 class="mb-4">
              Hi! Welcome to <br>
              {{-- Consectetur Led <br> --}}
              <span class="accent-text">MBTI-MATES</span>
            </h1>

            <p class="mb-4 mb-md-5">
              Website yang dirancang khusus untuk membantu individu menemukan dan memahami tipe kepribadian MBTI (Myers-Briggs Type Indicator). 
              MBTI-MATES bertujuan untuk membantu individu dalam proses penemuan diri melalui pemahaman tipe kepribadian mereka.
            </p>

            <div class="d-flex flex-column flex-md-row" data-aos="fade-up" data-aos-delay="200">
              <a href="/mulai-test-mbti" class="btn-get-started">Mulai test <i class="bi bi-arrow-right"></i></a>
              {{-- <a href="https://youtu.be/1trtyvc0r1s?si=u5NEtvl9OvLNkTk7" class="glightbox btn-watch-video d-flex align-items-center justify-content-center ms-0 ms-md-4 mt-4 mt-md-0"><i class="bi bi-play-circle"></i><span>Watch Video mbti-mbti</span></a> --}}

               <!-- Button kedua -->
              <a href="{{url('/login')}}" class="btn-get-started ms-0 ms-md-4 mt-4 mt-md-0">Login</a>

            </div>
          </div>
        </div>

        <div class="col-lg-6">
          {{-- <div class="hero-image" data-aos="zoom-out" data-aos-delay="300">
            <img src="assets/img/illustration-1.webp" alt="Hero Image" class="img-fluid">
            <div class="customers-badge">
              <div class="customer-avatars">
                <img src="assets/img/avatar-1.webp" alt="Customer 1" class="avatar">
                <img src="assets/img/avatar-2.webp" alt="Customer 2" class="avatar">
                <img src="assets/img/avatar-3.webp" alt="Customer 3" class="avatar">
                <img src="assets/img/avatar-4.webp" alt="Customer 4" class="avatar">
                <img src="assets/img/avatar-5.webp" alt="Customer 5" class="avatar">
                <span class="avatar more">12+</span>
              </div>
              <p class="mb-0 mt-2">12,000+ lorem ipsum dolor sit amet consectetur adipiscing elit</p>
            </div>
          </div> --}}
        </div>
      </div>

    </div>

  </section><!-- /Hero Section -->
<!-- /Hero Section -->

   <!-- mbti Section -->
   <section id="mbti" class="mbti section">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4 align-items-center justify-content-between">

        <div class="col-xl-5" data-aos="fade-up" data-aos-delay="200">
          {{-- <span class="mbti-meta"></span> --}}
          <h2 class="mbti-title">Apa itu MBTI dan Tes MBTI?</h2>
          <p class="mbti-description">
            MBTI adalah singkatan dari Myers-Briggs Type Indicator, yaitu tes psikotes yang mengelompokkan kepribadian manusia menjadi 16 tipe. Tes ini dirancang 
            untuk mengukur preferensi psikologis seseorang dalam melihat dunia dan membuat keputusan.
          </p>
          <hr>
          <p class="mbti-description">
            Tes MBTI dikembangkan pada tahun 1940-an oleh Isabel Myers dan ibunya, Katherina Briggs, berdasarkan teori kepribadian 
            Carl Jung. Tes ini dapat memberikan gambaran umum tentang kepribadian, preferensi, dan kekuatan seseorang. 
          </p>
          <div class="mbti-description">
            <a href="#" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
              <span>Read More</span>
              <i class="bi bi-arrow-right"></i>
            </a>
          </div>
          <div class="watch-video d-flex align-items-center position-relative">
            <i class="fab fa-youtube" style="color: red; font-size: 40px;"></i>
            <a href="https://youtu.be/1trtyvc0r1s?si=OX6rhJ4GbtmA_EAG" class="glightbox stretched-link"> Watch Video mbti MBTI</a>
         </div>
        </div>

        <div class="col-xl-6" data-aos="fade-up" data-aos-delay="300">
          <div class="image-wrapper">
            <div class="images position-relative" data-aos="zoom-out" data-aos-delay="400">
              <img src="assets/img/download (2).jpg" alt="Business Meeting" class="img-fluid main-image rounded-4">
              {{-- <img src="assets/img/mbtiorang.png" alt="Team Discussion" class="img-fluid small-image rounded-4"> --}}
            </div>
            <div class="experience-badge floating">
              <div class="col-lg-7 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="300">
                <img src="assets/img/apa-itu-mbti.png" class="img-fluid animated" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </section><!-- /mbti Section -->

   <!-- Faq Section -->
    <section class="faq-9 faq section light-background" id="faq">

      <div class="container">
        <div class="row">

          <div class="col-lg-5" data-aos="fade-up">
            <h2 class="faq-title">Ada pertanyaan? <br>
              Cek pertanyaan yang sering ditanyakan.</h2>
            <p class="faq-description">Berikut ini adalah beberapa pertanyaan yang sering diajukan (FAQ) 
              untuk tes MBTI yang bisa membantu pengguna dalam memahami tes ini dengan lebih baik.</p>
            <div class="faq-arrow d-none d-lg-block" data-aos="fade-up" data-aos-delay="200">
              <svg class="faq-arrow" width="200" height="211" viewBox="0 0 200 211" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M198.804 194.488C189.279 189.596 179.529 185.52 169.407 182.07L169.384 182.049C169.227 181.994 169.07 181.939 168.912 181.884C166.669 181.139 165.906 184.546 167.669 185.615C174.053 189.473 182.761 191.837 189.146 195.695C156.603 195.912 119.781 196.591 91.266 179.049C62.5221 161.368 48.1094 130.695 56.934 98.891C84.5539 98.7247 112.556 84.0176 129.508 62.667C136.396 53.9724 146.193 35.1448 129.773 30.2717C114.292 25.6624 93.7109 41.8875 83.1971 51.3147C70.1109 63.039 59.63 78.433 54.2039 95.0087C52.1221 94.9842 50.0776 94.8683 48.0703 94.6608C30.1803 92.8027 11.2197 83.6338 5.44902 65.1074C-1.88449 41.5699 14.4994 19.0183 27.9202 1.56641C28.6411 0.625793 27.2862 -0.561638 26.5419 0.358501C13.4588 16.4098 -0.221091 34.5242 0.896608 56.5659C1.8218 74.6941 14.221 87.9401 30.4121 94.2058C37.7076 97.0203 45.3454 98.5003 53.0334 98.8449C47.8679 117.532 49.2961 137.487 60.7729 155.283C87.7615 197.081 139.616 201.147 184.786 201.155L174.332 206.827C172.119 208.033 174.345 211.287 176.537 210.105C182.06 207.125 187.582 204.122 193.084 201.144C193.346 201.147 195.161 199.887 195.423 199.868C197.08 198.548 193.084 201.144 195.528 199.81C196.688 199.192 197.846 198.552 199.006 197.935C200.397 197.167 200.007 195.087 198.804 194.488ZM60.8213 88.0427C67.6894 72.648 78.8538 59.1566 92.1207 49.0388C98.8475 43.9065 106.334 39.2953 114.188 36.1439C117.295 34.8947 120.798 33.6609 124.168 33.635C134.365 33.5511 136.354 42.9911 132.638 51.031C120.47 77.4222 86.8639 93.9837 58.0983 94.9666C58.8971 92.6666 59.783 90.3603 60.8213 88.0427Z" fill="currentColor"></path>
              </svg>
            </div>
          </div>

          <div class="col-lg-7" data-aos="fade-up" data-aos-delay="300">
            <div class="faq-container">

              <div class="faq-item faq-active">
                <h3>Apa itu MBTI?</h3>
                <div class="faq-content">
                  <p>MBTI (Myers-Briggs Type Indicator) adalah tes psikologi yang mengelompokkan kepribadian menjadi 16 tipe berdasarkan cara seseorang memandang dunia dan membuat keputusan. 
                    Tes ini berdasarkan teori psikologi Carl Jung dan dikembangkan oleh Isabel Myers dan Katharine Briggs.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>Apa tujuan dari tes MBTI?</h3>
                <div class="faq-content">
                  <p>Tujuan dari MBTI adalah untuk membantu seseorang memahami preferensi kepribadian mereka, 
                    yang mencakup bagaimana mereka berinteraksi dengan orang lain, bagaimana mereka mengambil 
                    keputusan, dan bagaimana mereka memproses informasi. 
                    MBTI bisa membantu seseorang dalam pengembangan pribadi, hubungan, dan karier.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>Apakah MBTI adalah tes yang ilmiah?</h3>
                <div class="faq-content">
                  <p>MBTI adalah alat populer untuk memahami kepribadian, tetapi tidak selalu dianggap sebagai tes 
                    ilmiah oleh komunitas psikologi akademik. Meskipun begitu, tes ini sangat membantu dalam memberikan
                     wawasan tentang preferensi kepribadian seseorang.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>Apakah MBTI dapat membantu dalam karier?</h3>
                <div class="faq-content">
                  <p>Ya! MBTI sering digunakan dalam bimbingan karier karena dapat membantu 
                    individu memahami bagaimana mereka bekerja, berkomunikasi, dan menyelesaikan
                     masalah. Beberapa tipe MBTI mungkin cocok dengan peran tertentu, tetapi penting
                      untuk diingat bahwa setiap individu adalah unik.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>Berapa lama tes MBTI berlangsung?</h3>
                <div class="faq-content">
                  <p>Tes MBTI biasanya memakan waktu sekitar 10 hingga 20 menit atau 30 menit, 
                    tergantung pada jumlah pertanyaan dan kecepatan pengguna dalam menjawab.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>Apa yang dimaksud dengan 4 Dimensi MBTI?</h3>
                <div class="faq-content">
                  <p>
                    Empat dimensi utama dalam MBTI: <br>
                    (1.) Ekstrovert (E) atau Introvert (I): Dimensi ini melihat bagaimana seseorang mendapatkan energi. <br>
                    (2.) Sensing (S) atau Intuition (N): Dimensi ini melihat bagaimana seseorang memproses informasi. <br>
                    (3.) Thinking (T) atau Feeling (F): Dimensi ini melihat bagaimana seseorang membuat keputusan. <br>
                    (4.) Judging (J) atau Perceiving (P): Dimensi ini melihat bagaimana seseorang menjalani hidup sehari-hari.<br></p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

            </div>
          </div>

        </div>
      </div>
    </section>
  <!-- /End Faq Section -->

  <!-- Guide Section -->
 <section id="guide" class="guide section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <hr>
    <p></p>
    <h2>Panduan</h2>
    <p></p>
    <p>Panduan dalam Mengisi Tes MBTI<br></p>
  </div><!-- End Section Title -->

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