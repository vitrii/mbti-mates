@extends('layouts.theme')
<head>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>

@section('personality-type')
<!-- Personality Type Analinis Section -->

<section id="personality" class="personality section">

  <!-- kepribadian Section -->

  <section id="kepribadian" class="kepribadian section">

    <!-- Hero-kelompok Section -->
<section id="hero-kelompok" class="hero-kelompok section">

  <div class="container" data-aos="fade-up" data-aos-delay="100">
  

    <div class="container section-title" data-aos="fade-up">
      <h2>16 Tipe Kepribadian</h2>
      <p><br>Kelompok Analisis</p>
      <li><span>Fokus pada pemikiran logis dan analisis objektif.</span></li>
      <li><span>Ciri khas: independen, rasional dan sangat logis.</span></li>
    </div><!-- End Section Title -->

  <div class="container">

    <div class="row gy-4">

      <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
        <div class="kepribadian-tem free-plan">
          <!-- Add your image here -->
          <img src="assets/img/arsitek-removebg.png" alt="Free Plan Image" class="img-fluid" style="width: 100%; height: auto; border-radius: 10px;">
          
          <h3 style="color: #ffffff;">INTJ <br>
            (The Architect) <br>
          </h3>
          <p>Visioner, pemikir strategis, sangat percaya diri, analitis, mandiri, kritis, berpikiran maju dan tekun</p>
              <a href="{{url('/kepribadian-intj')}}" class="read-more stretched-link" style="
                    display: inline-flex; 
                    align-items: center; 
                    padding: 10px 20px; 
                    font-size: 16px; 
                    font-weight: bold; 
                    color: #fff; 
                    background-color: #7D4A9A; 
                    border-radius: 8px; 
                    text-decoration: none;
                    transition: background-color 0.3s ease, transform 0.2s ease;
                    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                <span>Read More</span> <i class="bi bi-arrow-right" style="margin-left: 8px;"></i>
               </a>
           </div>
        </div>

      <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
        <div class="kepribadian-tem free-plan">
          <!-- Add your image here -->
          <img src="assets/img/ahli-logika-removebg.png" alt="Free Plan Image" class="img-fluid" style="width: 100%; height: auto; border-radius: 10px;">
          
          <h3 style="color: #ffffff;">INTP <br>
            (The Thinker) <br>
          </h3>
          <p>Penasaran dan logis, menyukai analisis mendalam, eksplorasi ide dan inovatif.</p>
          <a href="{{url('/kepribadian-intp')}}" class="read-more stretched-link" style="
                display: inline-flex; 
                align-items: center; 
                padding: 10px 20px; 
                font-size: 16px; 
                font-weight: bold; 
                color: #fff; 
                background-color: #7D4A9A; 
                border-radius: 8px; 
                text-decoration: none;
                transition: background-color 0.3s ease, transform 0.2s ease;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                <span>Read More</span> <i class="bi bi-arrow-right" style="margin-left: 8px;"></i>
            </a>
        </div>
      </div>

      <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
        <div class="kepribadian-tem free-plan">
          <!-- Add your image here -->
          <img src="assets/img/komandan-removebg.png" alt="Free Plan Image" class="img-fluid" style="width: 100%; height: auto; border-radius: 10px;">
          
          <h3 style="color: #ffffff;">ENTJ <br>
            (The Commander) <br>
          </h3>
          <p>Pemimpin alami yang tegas dan strategis, dominan, berpikiran logis, ambisius dan tegas.</p>
            <a href="{{url('/kepribadian-entj')}}" class="read-more stretched-link" style="
                  display: inline-flex; 
                  align-items: center; 
                  padding: 10px 20px; 
                  font-size: 16px; 
                  font-weight: bold; 
                  color: #fff; 
                  background-color: #7D4A9A; 
                  border-radius: 8px; 
                  text-decoration: none;
                  transition: background-color 0.3s ease, transform 0.2s ease;
                  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
              <span>Read More</span> <i class="bi bi-arrow-right" style="margin-left: 8px;"></i>
           </a>
        </div>
      </div>

      <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
        <div class="kepribadian-tem free-plan">
          <!-- Add your image here -->
          <img src="assets/img/ahli-debat-removebg.png" alt="Free Plan Image" class="img-fluid" style="width: 100%; height: auto; border-radius: 10px;">
          
          <h3 style="color: #ffffff;">ENTP <br>
            (The Debater) <br>
          </h3>
          <p>Pemikir yang suka tantangan dan perdebatan, argumentatif, cepat tanggap, logis dan inovatif.</p>
            <a href="{{url('/kepribadian-entp')}}" class="read-more stretched-link" style="
                  display: inline-flex; 
                  align-items: center; 
                  padding: 10px 20px; 
                  font-size: 16px; 
                  font-weight: bold; 
                  color: #fff; 
                  background-color: #7D4A9A; 
                  border-radius: 8px; 
                  text-decoration: none;
                  transition: background-color 0.3s ease, transform 0.2s ease;
                  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                <span>Read More</span> <i class="bi bi-arrow-right" style="margin-left: 8px;"></i>
              </a>
            </div>
          </div>
        <!-- Section Kelompok Diplomat Title -->
      <div class="container section-title" data-aos="fade-up">
        <p><br>Kelompok Diplomat</p>
        <li><span>Fokus pada hubungan antarpribadi, empati dan komunikasi.</span></li>
        <li><span>Ciri khas: peka terhadap emosi, idealis dan suka bekerja sama.</span></li>
      </div><!-- End Section Kelompok Diplomat Title -->

      <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
        <div class="kepribadian-tem starter-plan">
          <span class="featured"></span>
          <!-- Add your image here -->
          <img src="assets/img/advokat-removebg.png" alt="Starter Plan Image" class="img-fluid" style="width: 100%; height: auto; border-radius: 10px;">
          <h3 style="color: #ffffff;">INFJ <br>
            (The Advocate) <br>
          </h3>
          <p>Idealistis dengan fokus pada visi dan misi, penuh empati, tenang, berorientasi pada tujuan dan berwawasan luas.</p>
          <a href="{{url('/kepribadian-infj')}}" class="read-more stretched-link" style="
                display: inline-flex; 
                align-items: center; 
                padding: 10px 20px; 
                font-size: 16px; 
                font-weight: bold; 
                color: #fff; 
                background-color: #3cb371; 
                border-radius: 8px; 
                text-decoration: none;
                transition: background-color 0.3s ease, transform 0.2s ease;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
            <span>Read More</span> <i class="bi bi-arrow-right" style="margin-left: 8px;"></i>
            </a>
        </div>
      </div>

      
      <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
        <div class="kepribadian-tem starter-plan">
          <span class="featured"></span>
          <!-- Add your image here -->
          <img src="assets/img/mediator-removebg.png" alt="Starter Plan Image" class="img-fluid" style="width: 100%; height: auto; border-radius: 10px;">
          <h3 style="color: #ffffff;">INFP <br>
            (The Mediator) <br>
          </h3>
          <p>Idealistis, fokus pada nilai-nilai pribadi, penyayang, kreatif, introspektif, empatik dan penyendiri.</p>
          <a href="{{url('/kepribadian-infp')}}" class="read-more stretched-link" style="
              display: inline-flex; 
              align-items: center; 
              padding: 10px 20px; 
              font-size: 16px; 
              font-weight: bold; 
              color: #fff; 
              background-color: #3cb371; 
              border-radius: 8px; 
              text-decoration: none;
              transition: background-color 0.3s ease, transform 0.2s ease;
              box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
            <span>Read More</span> <i class="bi bi-arrow-right" style="margin-left: 8px;"></i>
            </a>
        </div>
      </div>

      
      <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
        <div class="kepribadian-tem starter-plan">
          <span class="featured"></span>
          <!-- Add your image here -->
          <img src="assets/img/protagonis-removebg.png" alt="Starter Plan Image" class="img-fluid" style="width: 100%; height: auto; border-radius: 10px;">
          <h3 style="color: #ffffff;">ENFJ <br>
            (The Protagonist) <br>
          </h3>
          <p>Inspiratif,karismatik, ramah, empatik, antusias, persuasif, penggerak tim dan senang membantu orang lain.</p>
          <a href="{{url('/kepribadian-enfj')}}" class="read-more stretched-link" style="
              display: inline-flex; 
              align-items: center; 
              padding: 10px 20px; 
              font-size: 16px; 
              font-weight: bold; 
              color: #fff; 
              background-color: #3cb371; 
              border-radius: 8px; 
              text-decoration: none;
              transition: background-color 0.3s ease, transform 0.2s ease;
              box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
             <span>Read More</span> <i class="bi bi-arrow-right" style="margin-left: 8px;"></i>
          </a>
        </div>
      </div>

      
      <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
        <div class="kepribadian-tem starter-plan">
          <span class="featured"></span>
          <!-- Add your image here -->
          <img src="assets/img/juru-kampanye-removebg.png" alt="Starter Plan Image" class="img-fluid" style="width: 100%; height: auto; border-radius: 10px;">
          <h3 style="color: #ffffff;">ENFP <br>
            (The Campaigner) <br>
          </h3>
          <p>Kreatif, penuh inspirasi, senang dengan perubahan, energik, penuh imajinasi dan sangat ramah.</p>
            <a href="{{url('/kepribadian-enfp')}}" class="read-more stretched-link" style="
                display: inline-flex; 
                align-items: center; 
                padding: 10px 20px; 
                font-size: 16px; 
                font-weight: bold; 
                color: #fff; 
                background-color: #3cb371; 
                border-radius: 8px; 
                text-decoration: none;
                transition: background-color 0.3s ease, transform 0.2s ease;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
              <span>Read More</span> <i class="bi bi-arrow-right" style="margin-left: 8px;"></i>
            </a>
        </div>
      </div>

       <!-- Section Kelompok Sentinel Title -->
      <div class="container section-title" data-aos="fade-up">
          <p><br>Kelompok Sentinel</p>
          <li><span>Fokus pada stabilitas, tanggung jawab dan keteraturan.</span></li>
          <li><span>Ciri khas: konservatif, praktis dan dapat diandalkan.</span></li>
      </div><!-- End Section Kelompok Sentinel Title -->

      <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
        <div class="kepribadian-tem business-plan">
          <!-- Add your image here -->
          <img src="assets/img/ahli-logistik-removebg.png" alt="Business Plan Image" class="img-fluid" style="width: 100%; height: auto; border-radius: 10px;">
          <h3 style="color: #ffffff;">ISTJ <br>
            (The Logistician) <br>
          </h3>
          <p>Tipe yang suka keteraturan, struktur, stabilitas, disiplin, logis dan bertanggung jawab</p>
          <a href="{{url('/kepribadian-istj')}}" class="read-more stretched-link" style="
                display: inline-flex; 
                align-items: center; 
                padding: 10px 20px; 
                font-size: 16px; 
                font-weight: bold; 
                color: #fff; 
                background-color: #4682b4; 
                border-radius: 8px; 
                text-decoration: none;
                transition: background-color 0.3s ease, transform 0.2s ease;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
              <span>Read More</span> <i class="bi bi-arrow-right" style="margin-left: 8px;"></i>
           </a>
        </div>
      </div>

      <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
        <div class="kepribadian-tem business-plan">
          <!-- Add your image here -->
          <img src="assets/img/pembela-removebg.png" alt="Business Plan Image" class="img-fluid" style="width: 100%; height: auto; border-radius: 10px;">
          <h3 style="color: #ffffff;">ISFJ <br>
            (The Defender) <br>
          </h3>
          <p>Seseorang yang suka membela, pelindung yang sangat setia, penyayang, peduli, loyal, teliti dan ramah. </p>
          <a href="{{url('/kepribadian-isfj')}}" class="read-more stretched-link" style="
              display: inline-flex; 
              align-items: center; 
              padding: 10px 20px; 
              font-size: 16px; 
              font-weight: bold; 
              color: #fff; 
              background-color: #4682b4; 
              border-radius: 8px; 
              text-decoration: none;
              transition: background-color 0.3s ease, transform 0.2s ease;
              box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
            <span>Read More</span> <i class="bi bi-arrow-right" style="margin-left: 8px;"></i>
          </a>
        </div>
      </div>

      <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
        <div class="kepribadian-tem business-plan">
          <!-- Add your image here -->
          <img src="assets/img/eksekutif-removebg.png" alt="Business Plan Image" class="img-fluid" style="width: 100%; height: auto; border-radius: 10px;">
          <h3 style="color: #ffffff;">ESTJ <br>
            (The Executive) <br>
          </h3>
          <p>Pemimpin yang dapat diandalkan, tegas, terstruktur, disiplin, logis, realistis dan praktis</p>
          <a href="{{url('/kepribadian-estj')}}" class="read-more stretched-link" style="
              display: inline-flex; 
              align-items: center; 
              padding: 10px 20px; 
              font-size: 16px; 
              font-weight: bold; 
              color: #fff; 
              background-color: #4682b4; 
              border-radius: 8px; 
              text-decoration: none;
              transition: background-color 0.3s ease, transform 0.2s ease;
              box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
              <span>Read More</span> <i class="bi bi-arrow-right" style="margin-left: 8px;"></i>
           </a>
        </div>
      </div>

      <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
        <div class="kepribadian-tem business-plan">
          <!-- Add your image here -->
          <img src="assets/img/konsul-removebg.png" alt="Business Plan Image" class="img-fluid" style="width: 100%; height: auto; border-radius: 10px;">
          <h3 style="color: #ffffff;">ESFJ <br> 
            (The Consul) <br>
          </h3>
          <p>Konselor, suka berinteraksi, membantu, ramah, perhatian, komunikatif, bertanggung jawab, penuh perhatian dan sangat sosial.</p>
          <a href="{{url('/kepribadian-esfj')}}" class="read-more stretched-link" style="
              display: inline-flex; 
              align-items: center; 
              padding: 10px 20px; 
              font-size: 16px; 
              font-weight: bold; 
              color: #fff; 
              background-color: #4682b4; 
              border-radius: 8px; 
              text-decoration: none;
              transition: background-color 0.3s ease, transform 0.2s ease;
              box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
             <span>Read More</span> <i class="bi bi-arrow-right" style="margin-left: 8px;"></i>
          </a>
        </div>
      </div>

       <!-- Section Kelompok Explorer Title -->
      <div class="container section-title" data-aos="fade-up">
        <p><br>Kelompok Explorer</p>
        <li><span>Fokus pada kebebasan, spontanitas dan fleksibilitas.</span></li>
        <li><span>Ciri khas: berjiwa bebas, praktis dan suka tantangan.</span></li>
      </div><!-- End Section Kelompok Explorer Title -->

      <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
        <div class="kepribadian-tem ultimate-plan">
          <!-- Add your image here -->
          <img src="assets/img/virtuoso-removebg.png" alt="Ultimate Plan Image" class="img-fluid" style="width: 100%; height: auto; border-radius: 10px;">
          <h3 style="color: #ffffff;">ISTP <br>
            (The Virtuoso) <br>
          </h3>
          <p>Pemecah masalah yang pemberani, praktis, adaptif, logis, tenang, fleksibel, Spontan, fleksibel dan suka tantangan</p>
            <a href="{{url('/kepribadian-istp')}}" class="read-more stretched-link" style="
                display: inline-flex; 
                align-items: center; 
                padding: 10px 20px; 
                font-size: 16px; 
                font-weight: bold; 
                color: #fff; 
                background-color: #e4ae3a; 
                border-radius: 8px; 
                text-decoration: none;
                transition: background-color 0.3s ease, transform 0.2s ease;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
            <span>Read More</span> <i class="bi bi-arrow-right" style="margin-left: 8px;"></i>
          </a>
        </div>
      </div>

      <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
        <div class="kepribadian-tem ultimate-plan">
          <!-- Add your image here -->
          <img src="assets/img/petualang-removebg.png" alt="Ultimate Plan Image" class="img-fluid" style="width: 100%; height: auto; border-radius: 10px;">
          <h3 style="color: #ffffff;">ISFP <br>
            (The Adventurer) <br>
          </h3>
          <p>Seniman yang berjiwa bebas, sensitif, artistik, fleksibel, mudah beradaptasi, penuh kreativitas dan suka menjalani hidup dengan santai. </p>
            <a href="{{url('/kepribadian-isfp')}}" class="read-more stretched-link" style="
                display: inline-flex; 
                align-items: center; 
                padding: 10px 20px; 
                font-size: 16px; 
                font-weight: bold; 
                color: #fff; 
                background-color: #e4ae3a; 
                border-radius: 8px; 
                text-decoration: none;
                transition: background-color 0.3s ease, transform 0.2s ease;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
            <span>Read More</span> <i class="bi bi-arrow-right" style="margin-left: 8px;"></i>
          </a>
        </div>
      </div>

      <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
        <div class="kepribadian-tem ultimate-plan">
          <!-- Add your image here -->
          <img src="assets/img/pengusaha-removebg.png" alt="Ultimate Plan Image" class="img-fluid" style="width: 100%; height: auto; border-radius: 10px;">
          <h3 style="color: #ffffff;">ESTP <br>
             (The Entrepreneur) <br>
            </h3>
            <p>Pribadi yang berani, suka mengambil risiko, berpikir cepat, antusias, tangkas, suka tantangan, dan sangat praktis.</p>
            <a href="{{url('/kepribadian-estp')}}" class="read-more stretched-link" style="
                display: inline-flex; 
                align-items: center; 
                padding: 10px 20px; 
                font-size: 16px; 
                font-weight: bold; 
                color: #fff; 
                background-color: #e4ae3a; 
                border-radius: 8px; 
                text-decoration: none;
                transition: background-color 0.3s ease, transform 0.2s ease;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
            <span>Read More</span> <i class="bi bi-arrow-right" style="margin-left: 8px;"></i>
          </a>
        </div>
      </div>

      <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
        <div class="kepribadian-tem ultimate-plan">
          <!-- Add your image here -->
          <img src="assets/img/penghibur-removebg.png" alt="Ultimate Plan Image" class="img-fluid" style="width: 100%; height: auto; border-radius: 10px;">
          <h3 style="color: #ffffff;">ESFP <br>
            (The Entertainer)</h3>
          <p>Energik, spontan, ceria, ramah, humoris, optimis, fleksibel, suka bersosialisasi, dan sangat suka berada di pusat perhatian.</p>
            <a href="{{url('/kepribadian-esfp')}}" class="read-more stretched-link" style="
              display: inline-flex; 
              align-items: center; 
              padding: 10px 20px; 
              font-size: 16px; 
              font-weight: bold; 
              color: #fff; 
              background-color: #e4ae3a; 
              border-radius: 8px; 
              text-decoration: none;
              transition: background-color 0.3s ease, transform 0.2s ease;
              box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
            <span>Read More</span> <i class="bi bi-arrow-right" style="margin-left: 8px;"></i>
          </a>
        </div>
      </div>

    </div><!-- End kepribadian row -->

  </div>

</section>

  <!-- /kepribadian Section -->


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

  <script>
    document.querySelector('.read-more').addEventListener('mouseover', function() {
        this.style.backgroundColor = '#5C2F74';
        this.style.transform = 'translateY(-3px)';
    });
    document.querySelector('.read-more').addEventListener('mouseout', function() {
        this.style.backgroundColor = '#7D4A9A';
        this.style.transform = 'translateY(0)';
    });
</script>
@endsection