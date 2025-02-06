@extends('layouts.theme')

@section('kepribadian-enfp')
<title>The Campaigner - ENFP</title>
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


<!-- Hero-ENFP Section -->
<section id="hero-ENFP" class="hero-ENFP section">

<div class="container" data-aos="fade-up" data-aos-delay="100">

  <div class="row align-items-center">
    <div class="col-lg-6">
      <div class="hero-ENFP-content" data-aos="fade-up" data-aos-delay="200">
        <h1 style="color:#fefeff;">
          The Campaigner <br>
        </h1>
        <h2><b>Kepribadian ENFP</b><br></h2>

        <p style="color: #fefeff;">
            ENFP adalah singkatan dari Extraverted, Intuitive, Feeling, Perceiving. 
            ENFP sering disebut sebagai "The Campaigner", dikenal sebagai pribadi yang kreatif, antusias, dan berpikiran terbuka. 
            Mereka suka mengeksplorasi ide-ide baru, terhubung dengan orang lain, dan memiliki rasa ingin tahu yang tinggi.
        </p>
      </div>
    </div>

    <div class="col-lg-6">
      <div class="hero-ENFP-image" data-aos="zoom-out" data-aos-delay="300">
        <img src="assets/img/illustration-1.webp" alt="Hero-ENFP Image" class="img-fluid">

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

<!-- /Hero-ENFP Section -->

    <div class="content">
        <h2 class="centered" style="color: #0c6e29;"><b>Juru Kampanye</h2></b>
        <blockquote>
            <b>"Do not go where the path may lead, go instead where there is no path and leave a trail."</b><br>
            <i>("Jangan pergi ke tempat yang ada jalannya, pergilah ke tempat yang tidak ada jalan dan tinggalkan jejak.")</i>
            <footer style="display: flex; justify-content: flex-end; align-items: center; margin-top: 10px;">
                <span style="margin-left: 10px;">— Ralph Waldo Emerson </span>
                <img src="assets/img/Ralph-Waldo-Emerson.jpg" alt="Ralph Waldo Emerson" class="profile-pic">
            </footer>
        </blockquote>
    </div>

    <div class="content">
        <p>ENFP adalah individu yang ekstrovert, kreatif, dan emosional, yang senang mengeksplorasi kemungkinan baru dan terhubung dengan orang lain melalui ide-ide inovatif dan energi positif.</p>
        </div>

    <div class="content">
        <h2 class="left-aligned" style="color: #0c6e29;"><b>Karakteristik<br></h2></b>
        <p>
        Bersemangat: ENFP dikenal penuh energi dan semangat dalam segala hal yang mereka lakukan.
        <br>
        Kreatif: Mereka memiliki imajinasi yang kuat dan suka memikirkan ide-ide baru.
        <br>
        Rasa Ingin Tahu Tinggi: ENFP selalu tertarik untuk mempelajari hal-hal baru dan mengeksplorasi berbagai kemungkinan.
        <br>
        Empatik: Mereka peduli terhadap perasaan orang lain dan memiliki kemampuan alami untuk memahami perspektif orang lain.
        <br>
        Optimistis: ENFP cenderung melihat sisi baik dari situasi, bahkan di tengah kesulitan.
        <br>
        Tidak Suka Rutinitas: Mereka tidak suka pekerjaan monoton dan lebih suka fleksibilitas dalam segala hal.
        <br>
        Suka Hubungan Mendalam: Meskipun ramah kepada banyak orang, ENFP menghargai hubungan yang bermakna dan autentik.
        </p>
    </div>

    <div class="content">
        <h2 class="left-aligned" style="color: #0c6e29"><b>Kelebihan</h2></b>
        <p>
        <b>(1.) Pemimpin yang Menginspirasi:</b><br>Pemimpin yang menginspirasi adalah sosok yang mampu memotivasi orang-orang di sekitarnya untuk mencapai visi bersama. 
        ENFP sering memotivasi orang lain dengan antusiasme dan ide-ide mereka.
        </p>
        <p>
        <b>(2.) Fleksibel dan Adaptif:</b><br>Fleksibel dan adaptif adalah dua sifat yang berbeda, namun keduanya penting untuk beradaptasi dan menyesuaikan diri.  
        ENFP bisa beradaptasi dengan cepat terhadap perubahan dan tantangan baru.
        </p>
        <p><b>(3.) Komunikator yang Baik:</b> ENFP pandai mengekspresikan ide mereka dan membangun hubungan yang kuat.
        </p>
        <p><b>(4.) Berorientasi pada Orang:</b><br>Berorientasi pada orang adalah pendekatan manajemen atau gaya kepemimpinan yang mengutamakan kesejahteraan, hubungan, dan gagasan anggota tim.
            ENFP peduli pada kebahagiaan dan kesejahteraan orang lain.
        </p>
        <p><b>(5.) Penuh Ide Inovatif:</b><br>Ide inovatif adalah ide atau gagasan yang diciptakan dari temuan yang sudah ada sebelumnya untuk meningkatkan efisiensi.
            ENFP sering membawa pendekatan baru dan solusi kreatif dalam berbagai situasi.
        </p>
    </div>

    <div class="content">
        <h2 class="left-aligned" style="color: #0c6e29"><b>Kekurangan</h2></b>
        <p><b>(1.) Mudah Kehilangan Fokus:</b> ENFP sering beralih dari satu ide ke ide lainnya tanpa menyelesaikan sesuatu.
        </p>
        <p><b>(2.) Terlalu Optimistis:</b> ENFP kadang mengabaikan realitas karena terlalu fokus pada potensi positif.
        </p>
        <p><b>(3.) Overthinking:</b> Mereka cenderung terlalu menganalisis hal-hal kecil, terutama dalam hubungan.
        </p>
        <p><b>(4.) Takut Akan Komitmen:</b> Rutinitas atau tanggung jawab jangka panjang bisa terasa membatasi bagi mereka.
        </p>
        <p><b>(5.) Terlalu Emosional:</b> ENFP kadang sulit mengendalikan emosi mereka, terutama saat merasa tidak dihargai.
        </p>
    </div>

    <div class="content">
        <h2 class="left-aligned" style="color:#0c6e29"><b>Karir yang cocok</b></h2>
        <p>ENFP cocok untuk karir yang memungkinkan mereka menggunakan kreativitas, berinteraksi dengan orang lain, dan memiliki fleksibilitas. Beberapa pilihan karir:</p>
        <ul>
        <li><strong>Penulis atau Jurnalis: </strong><br>Kemampuan mereka mengekspresikan ide cocok untuk bidang ini.</li>
        <li><strong>Pengusaha:</strong><br>ENFP suka mengeksplorasi ide baru dan mengambil risiko.</li>
        <li><strong>Psikolog atau Konselor:</strong><br>Empati mereka membuat mereka ahli dalam memahami orang lain.</li>
        <li><strong>Guru atau Pelatih:</strong><br>Mereka menikmati menginspirasi dan membimbing orang lain.</li>
        <li><strong>Pekerja Sosial atau Aktivis:</strong><br>ENFP peduli pada isu sosial dan senang membantu masyarakat.</li>
        <li><strong>Pemasaran atau Hubungan Masyarakat:</strong><br>Kreativitas dan kemampuan komunikasi mereka sangat membantu dalam bidang ini.</li>
        <li><strong>Seniman atau Desainer:</strong><br>Imajinasi mereka cocok untuk profesi yang melibatkan seni dan ekspresi.</li>
    </ul>
    </div>

    <div class="content">
        <h2 class="left-aligned" style="color:#0c6e29"><b>Pasanngan yang cocok</b></h2>
        <p>Pasangan ideal ENFP adalah tipe yang bisa memahami energi mereka dan memberikan dukungan emosional. Tipe yang sering dianggap cocok:</p>
        <ul>
        <li><strong>INFJ ("The Advocate"):</strong><br>INFJ menawarkan kedalaman emosional dan visi jangka panjang, yang melengkapi semangat eksplorasi ENFP.</li>
        <li><strong>INTJ ("The Architect"):</strong><br>INTJ memberikan stabilitas dan pemikiran logis, sementara ENFP membawa kreativitas dan fleksibilitas dalam hubungan.</li>
        </ul>
        <p><b>Kunci Hubungan:</b>  ENFP membutuhkan pasangan yang dapat menghargai spontanitas mereka sambil memberikan keseimbangan yang menenangkan.</p>
    </div>

    <div class="content">
        <h2 class="left-aligned" style="color: #0c6e29"><b>Fakta Menarik tentang ENFP</h2></b>
        <p>(1.) ENFP mencakup sekitar 7–8% populasi, menjadikannya salah satu tipe MBTI yang lebih umum.
        </p>
        <p>(2.) Mereka sering dijuluki "ide generator" karena kemampuan mereka menghasilkan ide-ide kreatif dengan cepat.
        </p>
        <p>(3.) ENFP sering memiliki banyak hobi dan minat karena mereka suka mengeksplorasi hal-hal baru.
        </p>
        <p>(4.) Mereka biasanya sangat ramah, tetapi membutuhkan waktu untuk membangun hubungan yang mendalam.
        </p>
        <p>(5.) Banyak tokoh terkenal seperti Robin Williams, Jennifer Aniston, dan Will Smith dianggap memiliki kepribadian ENFP.
        </p>
    </div>
</body>
@endsection