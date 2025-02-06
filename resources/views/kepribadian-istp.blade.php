@extends('layouts.theme')

@section('kepribadian-istp')
<title>The Virtuoso - ISTP</title>
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


<!-- Hero-ISTP Section -->
<section id="hero-ISTP" class="hero-ISTP section">

<div class="container" data-aos="fade-up" data-aos-delay="100">

  <div class="row align-items-center">
    <div class="col-lg-6">
      <div class="hero-ISTP-content" data-aos="fade-up" data-aos-delay="200">
        <h1 style="color:#fefeff;">
          The Virtuoso <br>
        </h1>
        <h2><b>Kepribadian ISTP</b><br></h2>

        <p style="color: #fefeff;">
            ISTP adalah singkatan dari Introverted, Sensing, Thinking, Perceiving. 
            Tipe ini dikenal sebagai "The Virtuoso" karena kecenderungan mereka untuk 
            memecahkan masalah secara praktis dan kreativitas mereka dalam memahami cara
             kerja berbagai sistem atau benda. ISTP adalah orang yang mandiri, logis, 
             dan suka beraksi dalam situasi nyata.
        </p>
      </div>
    </div>

    <div class="col-lg-6">
      <div class="hero-ISTP-image" data-aos="zoom-out" data-aos-delay="300">
        <img src="assets/img/illustration-1.webp" alt="Hero-ISTP Image" class="img-fluid">

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

<!-- /Hero-ISTP Section -->

    <div class="content">
        <h2 class="centered" style="color: #82780b;"><b>Virtuoso</h2></b>
        <blockquote>
            <b>"Knowing is not enough, we must apply. Willing is not enough, we must do."</b><br>
            <i>("Mengetahui saja tidak cukup, kita harus menerapkannya. Berkemauan saja tidak cukup, kita harus melakukannya.")</i>
            <footer style="display: flex; justify-content: flex-end; align-items: center; margin-top: 10px;">
                <span style="margin-left: 10px;">— Bruce Lee </span>
                <img src="assets/img/Bruce-Lee.jpg" alt="Bruce Lee" class="profile-pic">
            </footer>
        </blockquote>
    </div>

    <div class="content">
        <p>ISTP adalah tipe kepribadian yang mandiri, logis, dan berorientasi pada tindakan. Mereka menyukai eksplorasi, kreativitas, dan bekerja secara praktis untuk memecahkan masalah.</p>
        </div>

    <div class="content">
        <h2 class="left-aligned" style="color: #82780b;"><b>Karakteristik<br></h2></b>
        <p>
        Pecinta Eksperimen: ISTP suka mencoba hal baru dan mengeksplorasi cara kerja sesuatu, baik itu mesin, teknologi, atau keterampilan baru.
        <br>
        Logis dan Praktis: Mereka fokus pada solusi yang masuk akal dan dapat diterapkan.
        <br>
        Misterius: ISTP sering dianggap sulit ditebak karena mereka jarang menunjukkan emosi atau rencana mereka.
        <br>
        Mandiri: ISTP suka bekerja sendiri dan jarang bergantung pada orang lain.
        <br>
        Fleksibel: Mereka dapat beradaptasi dengan cepat terhadap situasi baru dan menyelesaikan masalah dengan tenang.
        <br>
        Cenderung Spontan: ISTP suka tantangan dan sering mengikuti insting mereka untuk memulai sesuatu secara spontan.
        <br>
        Tangguh Secara Mental: Mereka tenang di bawah tekanan dan sangat terampil dalam mengambil keputusan cepat.
        </p>
    </div>

    <div class="content">
        <h2 class="left-aligned" style="color: #82780b"><b>Kelebihan</h2></b>
        <p>
        <b>(1.) Pemecah Masalah yang Hebat:</b> ISTP sangat baik dalam menganalisis dan menemukan solusi praktis.
        </p>
        <p>
        <b>(2.) Berani dan Spontan:</b> Mereka tidak takut menghadapi risiko untuk mencapai tujuan.
        </p>
        <p><b>(3.) Mahir Secara Teknis:</b> Kecintaan mereka terhadap mekanik atau teknologi membuat mereka terampil dalam bidang ini.
        </p>
        <p><b>(4.) Tenang dalam Tekanan:</b> ISTP dapat tetap fokus bahkan dalam situasi sulit.
        </p>
        <p><b>(5.) Suka Belajar:</b> Mereka terus belajar melalui pengalaman langsung, baik itu keterampilan teknis atau sosial.
        </p>
    </div>

    <div class="content">
        <h2 class="left-aligned" style="color: #82780b"><b>Kekurangan</h2></b>
        <p><b>(1.) Sulit Dipahami:</b> ISTP sering tertutup secara emosional, sehingga orang lain merasa sulit membaca mereka.
        </p>
        <p><b>(2.) Tidak Suka Dikekang:</b> Mereka tidak nyaman dengan aturan atau struktur yang terlalu kaku.
        </p>
        <p><b>(3.) Kurang Perhatian pada Detail Emosional:</b> Mereka cenderung mengabaikan perasaan orang lain saat fokus pada logika.
        </p>
        <p><b>(4.) Impulsif:</b> ISTP kadang membuat keputusan tanpa mempertimbangkan konsekuensi jangka panjang.
        </p>
        <p><b>(5.) Kurang Konsisten:</b> Mereka mungkin kehilangan minat pada sesuatu yang membutuhkan komitmen jangka panjang.
        </p>
    </div>

    <div class="content">
        <h2 class="left-aligned" style="color:#82780b"><b>Karir yang cocok</b></h2>
        <p>ISTP unggul dalam pekerjaan yang membutuhkan pemecahan masalah, keterampilan teknis, dan fleksibilitas. Karir yang cocok untuk mereka meliputi:</p>
        <ul>
        <li><strong>Insinyur atau Teknisi:</strong><br>Keahlian teknis mereka membuat ISTP cocok dalam bidang ini.</li>
        <li><strong>Pilot atau Pengemudi Profesional:</strong><br>ISTP menikmati tantangan dan memiliki fokus tinggi.</li>
        <li><strong>Pengembang Perangkat Keras atau Perangkat Lunak:</strong><br>Kreativitas dan logika ISTP mendukung peran ini.</li>
        <li><strong>Ahli Bedah atau Paramedik:</strong><br>Ketangkasan dan keberanian mereka membantu dalam situasi darurat.</li>
        <li><strong>Atlet atau Pelatih:</strong><br>Mereka suka tantangan fisik dan mental.</li>
        <li><strong>Detektif atau Agen Rahasia:</strong><br>Kecerdasan dan kemampuan analitis ISTP sangat berguna di bidang ini.</li>
        <li><strong>Tukang Kayu atau Mekanik:</strong><br>Pekerjaan praktis dengan hasil nyata menarik bagi ISTP.</li>
    </ul>
    </div>

    <div class="content">
        <h2 class="left-aligned" style="color:#82780b"><b>Pasanngan yang cocok</b></h2>
        <p>ISTP cocok dengan pasangan yang menghargai kemandirian mereka dan tidak mencoba mengendalikan atau membatasi kebebasan mereka.</p>
        <ul>
        <li><strong>ESTP ("The Entrepreneur"):</strong><br>ESTP berbagi spontanitas dan semangat petualangan dengan ISTP.</li>
        <li><strong>ISFP ("The Adventurer"):</strong><br>ISFP menghargai kebebasan yang diberikan ISTP dan menikmati eksplorasi bersama.</li>
        <li><strong>ENTP ("The Debater"):</strong><br>ENTP membawa tantangan intelektual yang menarik bagi ISTP.</li>
        </ul>
        <p><b>Kunci Hubungan:</b> ISTP membutuhkan pasangan yang dapat menghormati ruang pribadi mereka dan menikmati pengalaman baru bersama.</p>
    </div>

    <div class="content">
        <h2 class="left-aligned" style="color: #82780b"><b>Fakta Menarik tentang ISTP</h2></b>
        <p>(1.) ISTP mencakup sekitar 5-7% dari populasi, membuatnya cukup langka.
        </p>
        <p>(2.) Mereka sering disebut "jenius mekanis" karena kemampuan alami mereka memahami cara kerja mesin dan sistem.
        </p>
        <p>(3.) ISTP cenderung menyukai olahraga ekstrem atau aktivitas fisik yang memacu adrenalin.
        </p>
        <p>(4.) Mereka lebih suka belajar melalui praktik langsung daripada teori atau buku.
        </p>
        <p>(5.) ISTP memiliki kemampuan untuk tetap tenang dalam situasi darurat, menjadikan mereka pemimpin alami saat krisis.
        </p>
    </div>
</body>
@endsection