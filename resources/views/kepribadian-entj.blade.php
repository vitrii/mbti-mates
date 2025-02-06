@extends('layouts.theme')

@section('kepribadian-entj')

<title>The Commander - ENTJ</title>
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


<!-- Hero-ENTJ Section -->
<section id="hero-ENTJ" class="hero-ENTJ section">

<div class="container" data-aos="fade-up" data-aos-delay="100">

  <div class="row align-items-center">
    <div class="col-lg-6">
      <div class="hero-ENTJ-content" data-aos="fade-up" data-aos-delay="200">
        <h1 style="color:#fefeff;">
          The Commander <br>
        </h1>
        <h2><b>Kepribadian ENTJ</b><br></h2>

        <p style="color: #fefeff;">
            ENTJ (The Commander) adalah tipe kepribadian yang tegas, visioner, dan memiliki kemampuan alami 
            untuk memimpin. ENTJ dikenal karena ambisi dan efisiensinya, mereka selalu mencari cara untuk 
            mencapai tujuan secara strategis dan efektif.
        </p>
      </div>
    </div>

    <div class="col-lg-6">
      <div class="hero-ENTJ-image" data-aos="zoom-out" data-aos-delay="300">
        <img src="assets/img/illustration-1.webp" alt="Hero-ENTJ Image" class="img-fluid">

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

<!-- /Hero-ENTJ Section -->

    <div class="content">
        <h2 class="centered" style="color: #682286;"><b>Komandan</h2></b>
        <blockquote>
            <b>"Leadership is not about being in charge. It is about taking care of those in your charge."</b><br>
            <i>("Kepemimpinan bukanlah tentang memegang kendali. Ini tentang menjaga orang-orang yang bertanggung jawab atas Anda.")</i>
            <footer style="display: flex; justify-content: flex-end; align-items: center; margin-top: 10px;">
                <span style="margin-left: 10px;">— Simon Sinek </span>
                <img src="assets/img/Simon-Sinek.jpg" alt="Simon Sinek" class="profile-pic">
            </footer>
        </blockquote>
    </div>

    <div class="content">
        <p>ENTJ adalah pemimpin alami yang berorientasi pada tujuan, suka merencanakan, dan cenderung 
            mengambil kendali untuk memastikan segala sesuatu berjalan dengan baik.</p>
        </div>

    <div class="content">
        <h2 class="left-aligned" style="color: #682286;"><b>Karakteristik<br></h2></b>
        <p>
         Pemimpin Alami: ENTJ nyaman mengambil peran sebagai pemimpin dalam situasi apa pun.
        <br>
        Berorientasi pada Tujuan: Mereka fokus pada hasil dan efisiensi.
        <br>
        Percaya Diri: ENTJ memiliki keyakinan yang kuat pada kemampuan mereka untuk mencapai apa pun.
        <br>
        Visioner: Mampu melihat gambaran besar dan merencanakan strategi jangka panjang.
        <br>
        Logis: Memprioritaskan logika dan fakta daripada emosi dalam pengambilan keputusan.
        <br>
        Karismatik: ENTJ sering menarik perhatian karena wibawa dan keterampilan berbicara mereka.
        <br>
        Kompetitif: Mereka menikmati tantangan dan bekerja keras untuk menjadi yang terbaik.
        </p>
    </div>

    <div class="content">
        <h2 class="left-aligned" style="color: #682286"><b>Kelebihan</h2></b>
        <p>
        <b>(1.) Kepemimpinan yang Kuat:</b><br>
        Kepemimpinan yang kuat adalah kemampuan untuk memotivasi, memengaruhi, dan menantang tim untuk mencapai tujuan.
        </p>
        <p>
        <b>(2.) Kepemimpinan strategis:</b><br>
        Kemampuan untuk merencanakan, memimpin, dan mengoptimalkan sumber daya yang tersedia untuk mencapai tujuan secara efektif. 
        Mampu merancang rencana yang matang dan berjangka panjang. 
        </p>
        <p><b>(3.) Efisien:</b>
            Berfokus pada cara terbaik untuk menyelesaikan pekerjaan.
        </p>
        <p><b>(4.) Komunikator Hebat:</b>
            Jelas dan tegas dalam menyampaikan ide atau arahan.
        </p>
    </div>

    <div class="content">
        <h2 class="left-aligned" style="color: #682286"><b>Kekurangan</h2></b>
        <p><b>(1.) Terlalu Keras:</b> Bisa dianggap terlalu mendominasi atau kurang peka terhadap perasaan orang lain.
        </p>
        <p><b>(2.) Tidak Sabar:</b> Sering tidak sabar dengan orang yang lambat atau tidak kompeten.
        </p>
        <p><b>(3.) Perfeksionis:</b> Menuntut standar tinggi yang sulit dicapai orang lain.
        </p>
        <p><b>(4.) Sulit Menunjukkan Kerentanan:</b> ENTJ jarang menunjukkan kelemahan emosional.
        </p>
        <p><b>(5.) Cenderung Mendikte:</b> Kadang terlalu mengontrol dalam situasi kelompok.</p>
    </div>

    <div class="content">
        <h2 class="left-aligned" style="color:#682286"><b>Karir yang cocok</b></h2>
        <p>ENTJ unggul di bidang yang membutuhkan kepemimpinan, strategi, dan pengambilan keputusan cepat. Beberapa karir yang cocok:</p>
        <ul>
        <li><strong>CEO atau Manajer Eksekutif</strong><br>Posisi ini memungkinkan ENTJ untuk memimpin dan mengatur tim besar.</li>
        <li><strong>Pengacara</strong><br>Kemampuan berbicara, berpikir logis, dan membuat argumen kuat menjadikan ini karir ideal.</li>
        <li><strong>Wirausaha</strong><br>ENTJ suka mengambil risiko dan membangun bisnis dari awal.</li>
        <li><strong>Konsultan Strategis</strong><br>Merancang strategi untuk organisasi adalah keahlian mereka.</li>
        <li><strong>Politikus atau Diplomat</strong><br>ENTJ karismatik dan pandai membuat keputusan besar untuk kepentingan banyak orang.</li>
        <li><strong>Ahli Keuangan atau Ekonom</strong><br>Mereka unggul dalam menganalisis tren dan mengelola sumber daya.</li>
        <li><strong>Manajer Proyek</strong><br>ENTJ dapat mengelola proyek besar dengan efisiensi tinggi.</li>
    </ul>
    </div>

    <div class="content">
        <h2 class="left-aligned" style="color:#682286"><b>Pasanngan Ideal ENTJ</b></h2>
        <p>Pasangan yang ideal untuk ENTJ adalah tipe yang bisa memberikan dukungan emosional sambil menghargai visi mereka. ENTJ sering cocok dengan:</p>
        <ul>
        <li><strong>INTP (The Thinker):</strong>Memberikan ide logis yang dapat melengkapi strategi ENTJ.</li>
        <li><strong>INFJ (The Advocate):</strong>Menyediakan dukungan emosional dan perspektif mendalam.</li>
        <li><strong>ENTP (The Debater):</strong>Sama-sama energik dan menyukai diskusi intelektual.</li>
        <li><strong>INTJ (The Mastermind):</strong>Cocok karena sama-sama logis dan fokus pada tujuan jangka panjang.</li>
        </ul>
    </div>

    <div class="content">
        <h2 class="left-aligned" style="color: #682286"><b>Fakta Menarik Tentang ENTJ</h2></b>
        <p><b>(1.) Kurang dari 2% populasi:</b> ENTJ adalah salah satu tipe MBTI yang paling langka, terutama di kalangan perempuan.
        </p>
        <p><b>(2.) Pemimpin di mana-mana:</b> ENTJ sering secara alami mengambil alih peran kepemimpinan, bahkan dalam situasi sosial.
        </p>
        <p><b>(3.) Tidak Takut Konflik:</b> Mereka cenderung menghadapi konflik langsung untuk menyelesaikan masalah.
        </p>
        <p><b>(4.) Pembelajar Cepat: </b> ENTJ bisa memahami konsep baru dengan sangat cepat.
        </p>
        <p><b>(5.) Suka Tantangan:</b> Semakin sulit tantangan, semakin besar semangat mereka untuk menang.
        </p>
        <p><b>(6.) Serba Efisien:</b> Mereka sangat tidak menyukai pemborosan waktu atau sumber daya.
        </p>
        <p><b>(7.) Tertarik pada Pengembangan Diri:</b> ENTJ selalu mencari cara untuk menjadi lebih baik.
        </p>
        <p><b>(8.) Berani dan Ambisius:</b> ENTJ memiliki ambisi besar yang mendorong mereka untuk mencapai puncak.
        </p>
    </div>
</body>
@endsection