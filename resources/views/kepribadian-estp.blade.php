@extends('layouts.theme')

@section('kepribadian-estp')
<title>The Entrepreneur - ESTP</title>
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


<!-- Hero-ESTP Section -->
<section id="hero-ESTP" class="hero-ESTP section">

<div class="container" data-aos="fade-up" data-aos-delay="100">

  <div class="row align-items-center">
    <div class="col-lg-6">
      <div class="hero-ESTP-content" data-aos="fade-up" data-aos-delay="200">
        <h1 style="color:#fefeff;">
          The Entrepreneur <br>
        </h1>
        <h2><b>Kepribadian ESTP</b><br></h2>

        <p style="color: #fefeff;">
            ESTP adalah singkatan dari Extraverted, Sensing, Thinking, Perceiving. 
            ESTP dikenal sebagai "The Entrepreneur" atau "The Dynamo" karena mereka berani, 
            energik, dan sangat pragmatis. Mereka menikmati tantangan dan senang mengambil 
            risiko dalam kehidupan. ESTP sering kali hidup di saat ini, membuat keputusan cepat, 
            dan menyukai aksi serta petualangan.
        </p>
      </div>
    </div>

    <div class="col-lg-6">
      <div class="hero-ESTP-image" data-aos="zoom-out" data-aos-delay="300">
        <img src="assets/img/illustration-1.webp" alt="Hero-ESTP Image" class="img-fluid">

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

<!-- /Hero-ESTP Section -->

    <div class="content">
        <h2 class="centered" style="color: #82780b;"><b>Pengusaha</h2></b>
        <blockquote>
            <b>"Never mistake motion for action."</b><br>
            <i>("Jangan pernah salah mengartikan gerakan dengan tindakan.")</i>
            <footer style="display: flex; justify-content: flex-end; align-items: center; margin-top: 10px;">
                <span style="margin-left: 10px;">— Ernest Hemingway </span>
                <img src="assets/img/Ernest-Hemingway.jpg" alt="Ernest Hemingway" class="profile-pic">
            </footer>
        </blockquote>
    </div>

    <div class="content">
        <p>ESTP adalah tipe kepribadian yang energik, spontan, dan cenderung hidup untuk saat ini, dengan kemampuan cepat menyesuaikan diri dalam situasi apa pun.</p>
        </div>

    <div class="content">
        <h2 class="left-aligned" style="color: #82780b;"><b>Karakteristik<br></h2></b>
        <p>
        Berani dan Spontan: ESTP suka bertindak langsung dan mengambil risiko.
        <br>
        Sangat Praktis: Mereka fokus pada apa yang nyata dan bisa dilakukan sekarang.
        <br>
        Cepat Membaca Situasi: ESTP memiliki kemampuan luar biasa untuk memahami apa yang terjadi di sekitar mereka secara instan.
        <br>
        Komunikator Hebat: Mereka pandai berbicara dan memiliki karisma yang memukau.
        <br>
        Menyukai Tantangan: ESTP sangat termotivasi oleh situasi yang menuntut keberanian dan keterampilan cepat.
        <br>
        Hidup di Saat Ini: Mereka jarang memikirkan masa depan yang jauh dan lebih suka menikmati apa yang ada sekarang.
        <br>
        Suka Petualangan: ESTP mencari pengalaman baru dan tidak suka rutinitas.
        </p>
    </div>

    <div class="content">
        <h2 class="left-aligned" style="color: #82780b"><b>Kelebihan</h2></b>
        <p>
        <b>(1.) Cepat Bertindak:</b> ESTP membuat keputusan cepat dan berani dalam situasi krisis.
        </p>
        <p>
        <b>(2.) Karismatik dan Meyakinkan:</b> Mereka pandai mempengaruhi orang lain dengan sikap percaya diri.
        </p>
        <p><b>(3.) Adaptif:</b> ESTP mudah menyesuaikan diri dengan perubahan dan lingkungan baru.
        </p>
        <p><b>(4.) Sangat Realistis:</b> Mereka selalu fokus pada apa yang praktis dan dapat dicapai.
        </p>
        <p><b>(5.) Enerjik:</b> ESTP memiliki stamina dan energi tinggi yang membuat mereka selalu aktif.
        </p>
    </div>

    <div class="content">
        <h2 class="left-aligned" style="color: #82780b"><b>Kekurangan</h2></b>
        <p><b>(1.) Kurang Sabar:</b> Mereka tidak suka menunggu atau terjebak dalam proses panjang.
        </p>
        <p><b>(2.) Terkadang Ceroboh:</b> Kecenderungan untuk bertindak cepat bisa menyebabkan kesalahan.
        </p>
        <p><b>(3.) Hindari Hal Emosional:</b> ESTP cenderung tidak nyaman membahas perasaan yang mendalam.
        </p>
        <p><b>(4.) Kurang Fokus pada Jangka Panjang:</b> Mereka sering mengabaikan perencanaan jangka panjang.
        </p>
        <p><b>(5.) Impulsif:</b> Sering mengambil risiko tanpa mempertimbangkan konsekuensi sepenuhnya.
        </p>
    </div>

    <div class="content">
        <h2 class="left-aligned" style="color:#82780b"><b>Karir yang cocok untuk ESTP</b></h2>
        <p>ESTP cocok dengan pekerjaan yang melibatkan aksi, interaksi sosial, dan pemecahan masalah langsung. Karir yang sesuai meliputi:</p>
        <ul>
        <li><strong>Pengusaha (Entrepreneur):</strong><br>ESTP memiliki insting bisnis yang tajam dan keberanian mengambil risiko.</li>
        <li><strong>Marketing atau Sales:</strong><br>Karisma mereka membuat mereka sangat efektif dalam bidang ini.</li>
        <li><strong>Atlet Profesional:</strong><br>Energi tinggi dan cinta untuk tantangan menjadikan bidang ini cocok.</li>
        <li><strong>Paramedis atau Polisi:</strong><br>Kemampuan mereka bertindak cepat sangat berguna di situasi darurat.</li>
        <li><strong>Pilot atau Pengemudi Profesional:</strong><br>Kecintaan mereka pada petualangan cocok dengan pekerjaan ini.</li>
        <li><strong>Public Relations:</strong><br>Keterampilan komunikasi ESTP sangat bermanfaat dalam membangun hubungan.</li>
        <li><strong>Event Organizer:</strong><br>Kemampuan multitasking dan perhatian pada detail mendukung pekerjaan ini.</li>
    </ul>
    </div>

    <div class="content">
        <h2 class="left-aligned" style="color:#82780b"><b>Pasanngan yang cocok untuk ESTP</b></h2>
        <p>ESTP membutuhkan pasangan yang menghargai energi mereka dan mampu menyeimbangkan spontanitas mereka. Pasangan yang cocok meliputi:</p>
        <ul>
        <li><strong>ISFJ ("The Defender"):</strong><br>ISFJ memberikan stabilitas dan kehangatan untuk melengkapi energi ESTP.</li>
        <li><strong>INFJ ("The Advocate"):</strong><br>INFJ membawa kedalaman emosional yang membantu ESTP terhubung lebih dalam.</li>
        <li><strong>ESFP ("The Entertainer"):</strong><br>ESFP dan ESTP berbagi semangat untuk hidup dan cinta pada pengalaman baru.</li>
        </ul>
        <p><b>Kunci Hubungan:</b> ESTP membutuhkan pasangan yang mendukung kebebasan mereka dan menghargai sikap mereka yang hidup di saat ini.</p>
    </div>

    <div class="content">
        <h2 class="left-aligned" style="color: #82780b"><b>Fakta Menarik tentang ESTP</h2></b>
        <p><b>(1.) Suka Adrenalin:</b> ESTP sering mencari sensasi dan menikmati kegiatan yang mendebarkan.
        </p>
        <p><b>(2.) Cepat Membuat Teman:</b> Mereka mudah didekati dan biasanya memiliki lingkaran sosial yang besar.
        </p>
        <p><b>(3.) Pemecah Masalah:</b> ESTP pandai menemukan solusi kreatif di saat yang mendesak.
        </p>
        <p><b>(4.) Bukan Penggemar Rutinitas:</b> Mereka mudah bosan dengan pekerjaan monoton atau terstruktur.
        </p>
        <p><b>(5.) Menguasai Situasi:</b> ESTP sering mengambil alih kendali dalam situasi yang kacau.
        </p>
    </div>
</body>
@endsection