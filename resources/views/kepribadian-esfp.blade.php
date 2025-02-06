@extends('layouts.theme')

@section('kepribadian-esfp')
<title>The Entertainer - ESFP</title>
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


<!-- Hero-ESFP Section -->
<section id="hero-ESFP" class="hero-ESFP section">

<div class="container" data-aos="fade-up" data-aos-delay="100">

  <div class="row align-items-center">
    <div class="col-lg-6">
      <div class="hero-ESFP-content" data-aos="fade-up" data-aos-delay="200">
        <h1 style="color:#fefeff;">
          The Entertainer <br>
        </h1>
        <h2><b>Kepribadian ESFP</b><br></h2>

        <p style="color: #fefeff;">
            ESFP adalah singkatan dari Extraverted, Sensing, Feeling, Perceiving. 
            Tipe ini dikenal sebagai "The Entertainer" karena mereka sangat energik, 
            ramah, dan menyukai pengalaman baru. ESFP hidup untuk saat ini, menikmati 
            kehidupan, dan membawa kebahagiaan ke orang-orang di sekitar mereka.
        </p>
      </div>
    </div>

    <div class="col-lg-6">
      <div class="hero-ESFP-image" data-aos="zoom-out" data-aos-delay="300">
        <img src="assets/img/illustration-1.webp" alt="Hero-ESFP Image" class="img-fluid">

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

<!-- /Hero-ESFP Section -->

    <div class="content">
        <h2 class="centered" style="color: #82780b;"><b>Penghibur</h2></b>
        <blockquote>
            <b>"Keep smiling, because life is a beautiful thing and there's so much to smile about."</b><br>
            <i>("Tetaplah tersenyum, karena hidup adalah hal yang indah dan ada banyak hal yang bisa membuat kita tersenyum.")</i>
            <footer style="display: flex; justify-content: flex-end; align-items: center; margin-top: 10px;">
                <span style="margin-left: 10px;">— Marilyn Monroe </span>
                <img src="assets/img/Marilyn-Monroe.jpg" alt="Marilyn Monroe" class="profile-pic">
            </footer>
        </blockquote>
    </div>

    <div class="content">
        <p>ESFP adalah tipe kepribadian yang energik, hangat, dan menikmati kehidupan dengan fokus pada kebahagiaan diri sendiri dan orang lain.</p>
        </div>

    <div class="content">
        <h2 class="left-aligned" style="color: #82780b;"><b>Karakteristik<br></h2></b>
        <p>
        Bersemangat dan Menyenangkan: ESFP dikenal membawa keceriaan di lingkungan mereka.
        <br>
        Hidup di Saat Ini: Mereka menikmati setiap momen dan suka menghadapi tantangan baru.
        <br>
        Ramah dan Sosial: ESFP sangat pandai membangun hubungan dengan orang lain.
        <br>
        Sensitif dan Perhatian: Mereka memperhatikan kebutuhan emosional orang di sekitar mereka.
        <br>
        Menyukai Pengalaman Baru: Mereka tidak suka rutinitas dan selalu mencari petualangan.
        <br>
        Adaptif dan Fleksibel: Mereka dengan mudah menyesuaikan diri dengan perubahan situasi.
        <br>
        Optimis: ESFP selalu melihat sisi positif dalam situasi apa pun.
        </p>
    </div>

    <div class="content">
        <h2 class="left-aligned" style="color: #82780b"><b>Kelebihan</h2></b>
        <p>
        <b>(1.) Karismatik dan Ramah:</b> Mudah membangun hubungan dengan berbagai tipe orang.
        </p>
        <p>
        <b>(2.) Praktis dan Realistis:</b> Mereka berfokus pada apa yang bisa dilakukan sekarang.
        </p>
        <p><b>(3.) Spontan:</b> Mereka penuh kejutan dan sering membuat momen menyenangkan.
        </p>
        <p><b>(4.) Empati yang Tinggi:</b> Peduli pada kebutuhan emosional orang lain.
        </p>
        <p><b>(5.) Pintar Menghibur:</b> ESFP pandai menciptakan suasana santai dan bahagia.
        </p>
    </div>

    <div class="content">
        <h2 class="left-aligned" style="color: #82780b"><b>Kekurangan</h2></b>
        <p><b>(1.) Kurang Fokus pada Masa Depan:</b> Cenderung mengabaikan perencanaan jangka panjang.
        </p>
        <p><b>(2.) Terlalu Impulsif:</b> Keputusan mereka kadang didasarkan pada emosi sesaat.
        </p>
        <p><b>(3.) Hindari Konflik:</b> Mereka tidak suka situasi yang membutuhkan diskusi sulit.
        </p>
        <p><b>(4.) Sulit Menangani Kritik:</b> Karena sifat sensitif, mereka bisa terluka oleh kritik.
        </p>
        <p><b>(5.) Mudah Bosan:</b> Tidak suka tugas yang monoton atau terlalu teknis.
        </p>
    </div>

    <div class="content">
        <h2 class="left-aligned" style="color:#82780b"><b>Karir yang cocok</b></h2>
        <p>ESFP unggul dalam pekerjaan yang melibatkan orang lain dan membutuhkan kreativitas serta spontanitas. Karir yang sesuai meliputi:</p>
        <ul>
        <li><strong>Entertainer atau Aktor:</strong><br>Kemampuan alami mereka untuk menghibur sangat cocok dengan karir ini.</li>
        <li><strong>Pemandu Wisata:</strong><br>Kombinasi cinta petualangan dan keterampilan sosial membuat pekerjaan ini ideal.</li>
        <li><strong>Guru Anak-Anak:</strong><br>Mereka energik dan memiliki pendekatan menyenangkan untuk mengajar.</li>
        <li><strong>Public Relations atau Marketing:</strong><br>Karisma dan kemampuan berbicara mereka sangat bermanfaat.</li>
        <li><strong>Desainer Interior:</strong><br>Kreativitas mereka unggul dalam bidang ini.</li>
        <li><strong>Pekerja Sosial:</strong><br>ESFP peduli pada kesejahteraan orang lain.</li>
        <li><strong>Event Organizer:</strong><br>Mereka pandai merancang acara yang kreatif dan penuh semangat.</li>
    </ul>
    </div>

    <div class="content">
        <h2 class="left-aligned" style="color:#82780b"><b>Pasanngan yang cocok untuk ESFP</b></h2>
        <p>ESFP membutuhkan pasangan yang fleksibel, menyukai kehidupan yang menyenangkan, dan mampu memberikan dukungan emosional. Pasangan ideal meliputi:</p>
        <ul>
        <li><strong>ISFJ ("The Defender"):</strong><br>ISFJ memberikan kestabilan dan dukungan untuk melengkapi spontanitas ESFP.</li>
        <li><strong>INFJ ("The Advocate"):</strong><br>INFJ membantu membawa kedalaman emosional ke dalam hubungan.</li>
        <li><strong>ESTP ("The Entrepreneur"):</strong><br>ESTP berbagi energi dan semangat untuk menjalani petualangan bersama.</li>
        </ul>
        <p><b>Kunci Hubungan:</b> ESFP membutuhkan pasangan yang memahami kebutuhan mereka untuk kebebasan dan eksplorasi, tetapi juga memberikan stabilitas emosional.</p>
    </div>

    <div class="content">
        <h2 class="left-aligned" style="color: #82780b"><b>fakta</h2></b>
        <p><b>(1.) Ahli Membuat Orang Tertawa:</b> ESFP dikenal sebagai jiwa pesta dan suka membuat orang di sekitarnya bahagia.
        </p>
        <p><b>(2.) Berorientasi pada Pengalaman:</b> Mereka lebih menghargai pengalaman daripada benda materi.
        </p>
        <p><b>(3.) Cepat Beradaptasi:</b> Mereka mudah menyesuaikan diri dengan lingkungan baru.
        </p>
        <p><b>(4.) Sangat Emosional:</b> Meskipun terlihat ceria, ESFP juga memiliki sisi emosional yang dalam.
        </p>
        <p><b>(5.) Bisa Jadi Spontan dan Nekat:</b> Mereka suka mengambil keputusan secara mendadak untuk mencari pengalaman baru.
        </p>
    </div>
</body>
@endsection