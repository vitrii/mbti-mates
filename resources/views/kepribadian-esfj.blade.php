@extends('layouts.theme')

@section('kepribadian-esfj')
<title>The Consul - ESFJ</title>
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


<!-- Hero-ESFJ Section -->
<section id="hero-ESFJ" class="hero-ESFJ section">

<div class="container" data-aos="fade-up" data-aos-delay="100">

  <div class="row align-items-center">
    <div class="col-lg-6">
      <div class="hero-ESFJ-content" data-aos="fade-up" data-aos-delay="200">
        <h1 style="color:#fefeff;">
          The Consul <br>
        </h1>
        <h2><b>Kepribadian ESFJ</b><br></h2>

        <p style="color: #fefeff;">
            ESFJ adalah singkatan dari Extraverted, Sensing, Feeling, Judging. 
            ESFJ dikenal sebagai "The Consul" karena sifat mereka yang peduli, 
            suportif, dan berorientasi pada hubungan sosial. Mereka suka membantu 
            orang lain dan menjaga harmoni dalam lingkungan mereka.
        </p>
      </div>
    </div>

    <div class="col-lg-6">
      <div class="hero-ESFJ-image" data-aos="zoom-out" data-aos-delay="300">
        <img src="assets/img/illustration-1.webp" alt="Hero-ESFJ Image" class="img-fluid">

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

<!-- /Hero-ESFJ Section -->

    <div class="content">
        <h2 class="centered" style="color: #164791;"><b>Konsul</h2></b>
        <blockquote>
            <b>"No matter what happens in life, be good to people. Being good to people is a wonderful legacy to leave behind."</b><br>
            <i>("Apa pun yang terjadi dalam hidup, bersikaplah baik kepada orang lain. Bersikap baik kepada orang lain adalah warisan indah yang harus ditinggalkan.")</i>
            <footer style="display: flex; justify-content: flex-end; align-items: center; margin-top: 10px;">
                <span style="margin-left: 10px;">— Taylor Swift </span>
                <img src="assets/img/Taylor-Swift.jpg" alt="Taylor Swift" class="profile-pic">
            </footer>
        </blockquote>
    </div>

    <div class="content">
        <p>ESFJ adalah tipe kepribadian yang ramah, suportif, dan peduli terhadap kebutuhan orang lain, dengan fokus pada membangun hubungan harmonis dan menjaga tradisi.</p>
        </div>

    <div class="content">
        <h2 class="left-aligned" style="color: #164791;"><b>Karakteristik<br></h2></b>
        <p>
        Peduli dan Suportif: ESFJ senang membantu orang lain dan memastikan kebutuhan mereka terpenuhi.
        <br>
        Berorientasi pada Hubungan Sosial: Mereka merasa nyaman dalam lingkungan sosial dan suka berinteraksi dengan orang lain.
        <br>
        Menghargai Tradisi: ESFJ sering memegang nilai-nilai tradisional dan senang menjaga stabilitas.
        <br>
        Sangat Empatik: Mereka memahami perasaan orang lain dan berusaha menciptakan suasana yang harmonis.
        <br>
        Terorganisir: ESFJ senang merencanakan sesuatu dengan baik dan menghindari kekacauan.
        <br>
        Ramah dan Ekspresif: Mereka senang berbicara dengan orang lain dan menyampaikan ide dengan jelas.
        <br>
        Berorientasi pada Komunitas: Mereka sering aktif dalam kegiatan sosial atau komunitas lokal.
        </p>
    </div>

    <div class="content">
        <h2 class="left-aligned" style="color: #164791"><b>Kelebihan</h2></b>
        <p>
        <b>(1.) Ramah dan Penuh Perhatian:</b> ESFJ unggul dalam menjaga hubungan yang hangat dan suportif.
        </p>
        <p>
        <b>(2.) Pemimpin yang Terorganisir:</b><br>Pemimpin yang terorganisir mampu mengatur tim dengan baik, mengelola sumber daya, dan memastikan tugas-tugas dijalankan dengan lancar.
         ESFJ dapat memimpin dengan baik, terutama dalam acara sosial atau kegiatan komunitas.
        </p>
        <p><b>(3.) Praktis dan Realistis:</b><br>Praktis dan realistis adalah dua hal yang berkaitan dengan cara berpikir dan bertindak seseorang.
            Orang yang praktis cenderung mencari solusi yang efektif dan dapat diterapkan dalam situasi nyata.
            Orang yang realistis adalah orang yang berpikir penuh perhitungan, sesuai dengan kemampuan, dan bertindak sesuai dengan kenyataan.
            ESFJ fokus pada solusi nyata yang dapat segera diterapkan.
        </p>
        <p><b>(4.) Memiliki Etika Kerja yang Tinggi:</b> ESFJ adalah pekerja keras yang bertanggung jawab.
        </p>
        <p><b>(5.) Mampu Membaca Emosi Orang Lain:</b> Kepekaan mereka terhadap kebutuhan orang lain membantu menciptakan lingkungan yang harmonis.
        </p>
    </div>

    <div class="content">
        <h2 class="left-aligned" style="color: #164791"><b>Kekurangan</h2></b>
        <p><b>(1.) Terlalu Sensitif:</b> Mereka mudah merasa tersinggung jika mendapat kritik.
        </p>
        <p><b>(2.) Cenderung Menyenangkan Orang Lain:</b> ESFJ sering mengutamakan kebahagiaan orang lain hingga mengabaikan kebutuhan mereka sendiri.
        </p>
        <p><b>(3.) Takut Konflik:</b> Mereka cenderung menghindari konfrontasi, bahkan jika itu diperlukan.
        </p>
        <p><b>(4.) Kurang Fleksibel:</b> Ketergantungan mereka pada tradisi membuat mereka sulit menerima perubahan.
        </p>
        <p><b>(5.) Terlalu Bergantung pada Validasi:</b> ESFJ sering mencari pengakuan dan apresiasi dari orang lain.
        </p>
    </div>

    <div class="content">
        <h2 class="left-aligned" style="color:#164791"><b>Karir yang cocok</b></h2>
        <p>ESFJ unggul dalam pekerjaan yang melibatkan interaksi sosial, pengelolaan, dan dukungan terhadap orang lain. Karir yang cocok meliputi:</p>
        <ul>
        <li><strong>Psikolog atau Konselor:</strong><br>Kepekaan terhadap emosi orang lain menjadikan mereka pendengar yang baik.</li>
        <li><strong>Humas atau Public Relations:</strong><br> ESFJ pandai membangun hubungan baik dengan berbagai pihak.</li>
        <li><strong>Guru atau Pendidik:</strong><br>ESFJ senang membantu dan mendukung siswa untuk berkembang.</li>
        <li><strong>Perawat atau Dokter:</strong><br>Mereka peduli terhadap kesehatan dan kesejahteraan orang lain.</li>
        <li><strong>Manajer Sumber Daya Manusia:</strong><br>ESFJ unggul dalam memahami kebutuhan karyawan dan menciptakan lingkungan kerja yang positif.</li>
        <li><strong>Pekerja Sosial:</strong><br>Mereka senang mendukung individu atau komunitas yang membutuhkan bantuan.</li>
        <li><strong>Event Organizer:</strong><br>Kemampuan organisasi mereka membuat ESFJ cocok untuk merencanakan acara.</li>
    </ul>
    </div>

    <div class="content">
        <h2 class="left-aligned" style="color:#164791"><b>Pasanngan yang cocok</b></h2>
        <p>Pasangan yang cocok untuk ESFJ adalah individu yang menghargai hubungan emosional, mendukung secara praktis, dan mampu memberikan rasa aman dalam hubungan.</p>
        <ul>
        <li><strong>ISFP ("The Adventurer"):</strong><br>ISFP membawa kreativitas dan kehangatan, melengkapi sifat ESFJ yang terorganisir.</li>
        <li><strong>ISTP ("The Virtuoso"):</strong><br>ISTP memberikan keseimbangan dengan pendekatan mereka yang logis dan praktis.</li>
        <li><strong>ESTP ("The Entrepreneur"):</strong><br>ESTP membawa energi dan spontanitas, menciptakan dinamika yang menarik dengan ESFJ.</li>
        </ul>
        <p><b>Kunci Hubungan:</b>ESFJ membutuhkan pasangan yang menghargai upaya mereka untuk menjaga hubungan tetap harmonis dan stabil.</p>
    </div>

    <div class="content">
        <h2 class="left-aligned" style="color: #164791"><b>Fakta Menarik tentang ESFJ</h2></b>
        <p>(1.) ESFJ mencakup sekitar 9-13% dari populasi, membuatnya salah satu tipe kepribadian yang paling umum.
        </p>
        <p>(2.) Mereka sering disebut sebagai "lem" yang menyatukan komunitas atau keluarga.
        </p>
        <p>(3.) ESFJ memiliki kemampuan alami untuk menjadi tuan rumah acara dan membuat orang lain merasa nyaman.
        </p>
        <p>(4.) Mereka sangat peka terhadap lingkungan sosial dan dapat merasakan perubahan suasana hati orang lain dengan cepat.
        </p>
        <p>(5.) Mereka dikenal sebagai tipe yang sangat setia terhadap keluarga dan teman-teman.
        </p>
    </div>
</body>
@endsection