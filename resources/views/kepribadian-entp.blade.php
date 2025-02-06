@extends('layouts.theme')

@section('kepribadian-entp')
<title>Ahli Debat - ENTP</title>
<style>
    /* Reset */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial, sans-serif;
    }

    body {
        background-color: #f4f4f4;
    }

    /* Main content */
    .content {
        margin: 40px auto;
        max-width: 800px;
        text-align: center;
    }

    .content h2 {
        font-size: 2.5rem;
        margin-left: 20px; /* untuk memberi jarak dari kiri */
        color: #333;
        margin-bottom: 20px;
    }

    .centered {
        text-align: center;
        margin-top: 20px;
        margin-bottom: 20px;
    }

    .left-aligned {
        text-align: left;
        margin-top: 20px;
        margin-bottom: 20px;
    }

    .content blockquote {
        font-size: 18px; /* atau ukuran lain yang kamu inginkan */
        line-height: 1.6;
        font-style: italic;
        color: #555;
        padding: 20px;
        border-left: 5px solid #1fadfa;
        background-color: #f9f9f9;
        margin: 0 20px 30px 20px; /* margin-bottom 30px untuk jarak dengan paragraf */
    }

     .content p         {
        font-size: 18px;
        color: #333;
        line-height: 1.6;
        margin: 20px 20px 0; /* margin-top 20px untuk jarak dengan blockquote */
        text-align: justify;
    }

        p, li            {
        font-size: 18px; /* Sesuaikan dengan ukuran font <p> kamu */
        line-height: 1.5; /* Sesuaikan jika ingin jarak baris yang sama */
    }

          ul {
          padding-left: 20px; /* Jarak dari tepi kiri */
          list-style-position: outside; /* Bullet tetap di luar */
          text-align: left;
    }

        li {
            margin-bottom: 8px; /* Jarak antar item list */
            line-height: 1.5; /* Jarak antar baris */
            padding-left: 0;
      }

      .profile-pic {
            width: 60px; /* Sesuaikan ukuran gambar */
            height: 60px; /* Sama dengan lebar untuk bentuk lingkaran */
            border-radius: 50%; /* Membuat gambar bulat */
            object-fit: cover; /* Memastikan gambar tidak terdistorsi */
            border: 2px solid #ccc; /* Opsional: Tambahkan border agar lebih estetis */
     }

</style>
<body>
  <!-- Hero-ENTP Section -->
<section id="hero-ENTP" class="hero-ENTP section">

    <div class="container" data-aos="fade-up" data-aos-delay="100">
    
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="hero-ENTP-content" data-aos="fade-up" data-aos-delay="200">
            <h1 style="color:#fefeff;">
              The Debater <br>
            </h1>
            <h2><b>Kepribadian ENTP</b><br></h2>
    
            <p style="color: #fefeff;">
              ENTP (The Debater) adalah tipe kepribadian yang kreatif, penuh energi, dan suka mengeksplorasi
               ide-ide baru. ENTP sangat suka berdiskusi, menyelami perspektif berbeda, dan mencari solusi 
               inovatif untuk berbagai masalah. Mereka sering dikenal sebagai "pemantik ide" yang mahir 
               menginspirasi dan memotivasi orang lain.
            </p>
          </div>
        </div>
    
        <div class="col-lg-6">
          <div class="hero-ENTP-image" data-aos="zoom-out" data-aos-delay="300">
            <img src="assets/img/illustration-1.webp" alt="Hero-ENTP Image" class="img-fluid">
    
            <div class="customers-badge">
              <div class="customer-avatars">
                <img src="assets/img/avatar-1.webp" alt="Customer 1" class="avatar">
                <img src="assets/img/avatar-2.webp" alt="Customer 2" class="avatar">
                <img src="assets/img/avatar-3.webp" alt="Customer 3" class="avatar">
                <img src="assets/img/avatar-4.webp" alt="Customer 4" class="avatar">
                <img src="assets/img/avatar-5.webp" alt="Customer 5" class="avatar">
              </div>
            </div>
          </div>
        </div>
      </div>
    
    </div>
    
    </section>
    
    <!-- /Hero-ENTP Section -->
    
        <div class="content">
            <h2 class="centered" style="color: #682286;"><b>Ahli Debat</h2></b>
            <blockquote>
              <b>"A person with a new idea is a crank until the idea succeeds."</b><br>
              <i>("Seseorang yang memiliki ide baru adalah orang yang gila sampai idenya berhasil.")</i>
              <footer style="display: flex; justify-content: flex-end; align-items: center; margin-top: 10px;">
                  <span style="margin-left: 10px;">— Mark Twain </span>
                  <img src="assets/img/Mark-Twain.jpg" alt="Mark Twain" class="profile-pic">
              </footer>
          </blockquote>
        </div>
    
        <div class="content">
            <p>ENTP adalah pembicara yang mahir, kreatif, dan suka tantangan. Mereka unggul dalam memikirkan solusi inovatif dan selalu mencari cara baru untuk memperluas wawasan mereka.            </p>
            </div>
    
        <div class="content">
            <h2 class="left-aligned" style="color: #682286;"><b>Karakteristik<br></h2></b>
            <p>
              Suka Berdebat: ENTP suka menantang ide dan berdiskusi untuk mengeksplorasi berbagai sudut pandang.
              <br>
              Berwawasan Luas: Mereka memiliki rasa ingin tahu yang tinggi dan selalu ingin mempelajari hal baru.
              <br>
              Kreatif: Ide-ide out-of-the-box sering kali datang dari mereka.
              <br>
              Percaya Diri: Mereka nyaman menyampaikan pendapat di depan umum.
              <br>
              Fleksibel: Mudah beradaptasi dengan situasi baru atau perubahan.
              <br>
              Cerdas dan Cepat Berpikir: ENTP memiliki kemampuan berpikir kritis dan menyelesaikan masalah dengan cepat.
              <br>
              Optimis: Cenderung melihat peluang daripada masalah dalam setiap situasi.
            </p>
        </div>
    
        <div class="content">
            <h2 class="left-aligned" style="color: #682286"><b>Kelebihan</h2></b>
            <p>
            <b>(1.) Kemampuan Berkomunikasi:</b><br>
            kemampuan untuk menyampaikan dan menerima pesan secara efektif, baik melalui media lisan maupun tertulis.
            Mereka hebat dalam menjelaskan ide-ide dengan cara yang menarik dan persuasif.
            </p>
            <p>
            <b>(2.) Pemecah Masalah:</b><br>
            Pemecahan masalah atau problem solving adalah kemampuan untuk memahami tantangan dan menemukan solusi yang efektif.
            ENTP jago menemukan solusi kreatif untuk masalah yang kompleks. 
            </p>
            <p><b>(3.) Berenergi Tinggi: </b>Selalu antusias dan penuh semangat dalam mengeksplorasi hal baru.
            </p>
            <p><b>(4.) Berpikiran Terbuka:</b><br>
              kemampuan untuk menerima, mempertimbangkan, dan mengakui ide, pandangan, dan pendekatan yang berbeda tanpa prasangka.
              Tidak cepat menghakimi dan siap menerima ide-ide baru.
            <p><b>(5.) Pandai Bergaul:</b> Mudah menjalin hubungan dengan berbagai macam orang.</p>
        <br>
            </p>
        </div>
    
        <div class="content">
            <h2 class="left-aligned" style="color: #682286"><b>Kekurangan</h2></b>
            <p><b>(1.) Cenderung Tidak Fokus:</b> Sering melompat dari satu ide ke ide lain tanpa menyelesaikannya.
            </p>
            <p><b>(2.) Suka Berdebat Berlebihan:</b> Kadang terlalu menikmati diskusi hingga terlihat seperti ingin menang saja.
            </p>
            <p><b>(3.) Kurang Stabil:</b> Kesulitan berkomitmen pada satu rencana jangka panjang.
            </p>
            <p><b>(4.) Impulsif:</b> Terkadang bertindak tanpa mempertimbangkan konsekuensinya.
            </p>
            <p><b>(5.) Kurang Sabar:</b> Bisa merasa frustrasi dengan orang yang lebih lambat dalam berpikir atau bertindak.
            </p>
        </div>
    
        <div class="content">
            <h2 class="left-aligned" style="color:#682286"><b>Karir yang cocok</b></h2>
            <p>ENTP unggul di bidang yang membutuhkan kreativitas, fleksibilitas, dan pemikiran cepat. Beberapa karir yang cocok:</p>
            <ul>
            <li><strong>Pengusaha atau Wirausaha</strong><br>ENTP suka tantangan dan kebebasan untuk menciptakan sesuatu dari nol.</li>
            <li><strong>Public Relations atau Marketing</strong><br>Kemampuan mereka dalam berkomunikasi dan berpikir kreatif sangat cocok untuk promosi.</li>
            <li><strong>Pengembang Produk atau Inovator</strong><br>ENTP ahli dalam menciptakan ide baru yang inovatif, sehingga ini cocok sebagai profesi.</li>
            <li><strong>Jurnalis atau Presenter Media</strong><br>ENTP suka mengeksplorasi ide-ide baru dan menyampaikan informasi dengan cara yang menarik.</li>
            <li><strong>Pengacara atau Negosiator</strong><br>Keahlian mereka dalam berdebat dan membangun argumen logis menjadikan ini karir ideal.</li>
            <li><strong>Pekerja Kreatif atau Seni</strong><br>Misalnya penulis skenario, komedian, atau sutradara.</li>
            <li><strong>Konsultan Bisnis atau Strategi</strong><br>ENTP senang memberikan saran yang inovatif dan membantu perusahaan berkembang.</li>
        </ul>
        </div>
    
        <div class="content">
            <h2 class="left-aligned" style="color:#682286"><b>Pasanngan yang cocok</b></h2>
            <p>Pasangan yang ideal untuk ENTP adalah tipe yang bisa memberikan tantangan intelektual tetapi tetap memberikan stabilitas emosional. Pasangan ideal mereka meliputi:</p>
            <ul>
            <li><strong>INFJ (The Advocate):</strong><br>Melengkapi kreativitas ENTP dengan pendekatan yang mendalam dan empatik.</li>
            <li><strong>INTJ (The Mastermind):</strong><br> Sama-sama visioner tetapi lebih terstruktur, membantu menyeimbangkan sifat spontan ENTP.</li>
            <li><strong>ENTP (The Debater):</strong><br>Dua ENTP dapat menciptakan hubungan yang penuh tawa, tantangan intelektual, dan eksperimen. Mereka saling memahami kebutuhan untuk kebebasan dan ruang untuk berpikir kreatif.</li>
            <li><strong>ENFP (The Campaigner):</strong><br>ENFP yang sama-sama energik dan kreatif bisa menciptakan hubungan yang penuh petualangan. Mereka menikmati eksplorasi ide bersama, tetapi juga memiliki kemampuan untuk saling memahami di tingkat emosional.</li>
            </ul>
        </div>

        <div class="content">
          <h2 class="left-aligned" style="color: #682286"><b>Fakta Menarik Tentang ENTP</h2></b>
          <p><b>(1.) Menantang Status Quo:</b> ENTP suka mengguncang norma dan menemukan cara baru untuk melakukan sesuatu.
          </p>
          <p><b>(2.) Selalu Punya Ide Baru:</b> Bahkan di situasi santai, mereka bisa muncul dengan ide-ide unik.
          </p>
          <p><b>(3.) Suka Humor Cerdas:</b> ENTP sering membuat lelucon berbasis logika atau konsep.
          </p>
          <p><b>(4.) Rendah Hati Meski Cerdas:</b> Mereka suka belajar dari siapa saja, meskipun sudah sangat cerdas.
          </p>
          <p><b>(5.) Tidak Takut Gagal:</b> Bagi ENTP, kegagalan adalah pelajaran berharga.
          </p>
          <p><b>(6.) Gemar Diskusi Mendalam:</b> Bahkan topik sederhana bisa menjadi pembicaraan serius dan panjang.
          </p>
          <p><b>(7.) Sangat Adaptif:</b> Mereka bisa menyesuaikan diri dengan cepat di lingkungan baru.
          </p>
          <p><b>(8.) Ramah dan Energik:</b> Sifatnya membuat mereka mudah diterima dalam berbagai kelompok.
          </p>
      </div>
</body>
@endsection