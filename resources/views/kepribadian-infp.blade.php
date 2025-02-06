@extends('layouts.theme')

@section('kepribadian-infp')
<title>The Mediator - INFP</title>
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


<!-- Hero-INFP Section -->
<section id="hero-INFP" class="hero-INFP section">

<div class="container" data-aos="fade-up" data-aos-delay="100">

  <div class="row align-items-center">
    <div class="col-lg-6">
      <div class="hero-INFP-content" data-aos="fade-up" data-aos-delay="200">
        <h1 style="color:#fefeff;">
          The Mediator <br>
        </h1>
        <h2><b>Kepribadian INFP</b><br></h2>

        <p style="color: #fefeff;">
            INFP adalah singkatan dari Introverted, Intuitive, Feeling, Perceiving, salah satu tipe 
            kepribadian dalam teori MBTI (Myers-Briggs Type Indicator). INFP dikenal sebagai "The Mediator" 
            atau "Idealist", karena mereka sering berfokus pada harmoni, nilai-nilai pribadi, dan tujuan 
            hidup yang bermakna. Mereka adalah orang-orang yang idealis, penuh empati, dan berorientasi 
            pada kreativitas.
        </p>
      </div>
    </div>

    <div class="col-lg-6">
      <div class="hero-INFP-image" data-aos="zoom-out" data-aos-delay="300">
        <img src="assets/img/illustration-1.webp" alt="Hero-INFP Image" class="img-fluid">

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

<!-- /Hero-INFP Section -->

    <div class="content">
        <h2 class="centered" style="color: #0c6e29;"><b>Mediator</h2></b>
        <blockquote>
            <b>"For beautiful eyes, look for the good in others; for beautiful lips, speak only words
                of kindness; and for poise, walk with the knowledge that you are never alone."</b><br>
            <i>("Untuk mata yang indah, carilah kebaikan orang lain; untuk bibir yang indah, 
                ucapkan kata-kata yang baik saja; dan untuk ketenangan, berjalanlah dengan kesadaran 
                bahwa kamu tidak pernah sendirian.")</i>
            <footer style="display: flex; justify-content: flex-end; align-items: center; margin-top: 10px;">
                <span style="margin-left: 10px;">— Audrey Hepburn </span>
                <img src="assets/img/Audrey-Hepburn.jpg" alt="Audrey-Hepburn" class="profile-pic">
            </footer>
        </blockquote>
    </div>

    <div class="content">
        <p>INFP adalah tipe kepribadian yang introvert, kreatif, dan idealis, dengan fokus pada nilai-nilai 
            pribadi dan emosi mendalam. Mereka dikenal sebagai pencari makna dan sering menjadi perantara 
            dalam konflik karena kemampuan mereka memahami berbagai perspektif.</p>
        </div>

    <div class="content">
        <h2 class="left-aligned" style="color: #0c6e29;"><b>Karakteristik<br></h2></b>
        <p>
        Idealistis: Mereka selalu mencari dunia yang lebih baik dan memegang teguh nilai-nilai mereka.
        <br>
        Empatik: INFP memiliki kepekaan tinggi terhadap perasaan orang lain.
        <br>
        Kreatif: Mereka memiliki imajinasi yang luar biasa, sering mengekspresikan diri melalui seni atau tulisan.
        <br>
        Penyendiri: Mereka lebih nyaman di lingkungan kecil dan sering membutuhkan waktu untuk menyendiri.
        <br>
        Berorientasi pada Makna: INFP tidak menyukai hal yang dangkal; mereka mencari hubungan dan pengalaman yang mendalam.
        <br>
        Fleksibel: Mereka cenderung adaptif dan terbuka terhadap ide-ide baru.
        <br>
        Introspektif: INFP sering merenung dan memikirkan makna hidup atau pengalaman pribadi.
        </p>
    </div>

    <div class="content">
        <h2 class="left-aligned" style="color: #0c6e29"><b>Kelebihan</h2></b>
        <p>
        <b>(1.) Empati yang Tinggi:</b><br>Empati tinggi adalah kemampuan untuk memahami, menyadari, dan peka terhadap perasaan dan keadaan emosional orang lain. 
        INFP mampu memahami dan merasakan emosi orang lain secara mendalam.
        </p>
        <p>
        <b>(2.) Kreatif dan Imajinatif:</b><br>Kreatif dan imajinatif adalah dua kemampuan yang saling berkaitan dan dapat membantu seseorang untuk melihat dunia dengan cara yang berbeda.
        INFP sering menghasilkan ide-ide segar dalam seni, sastra, atau solusi masalah.
        </p>
        <p><b>(3.) Komitmen pada Nilai:</b><br>Komitmen pada nilai adalah janji untuk memberikan waktu dan energi kepada sesuatu atau seseorang yang dipercaya. INFP sangat setia pada prinsip dan moral mereka.
        </p>
        <p><b>(4.) Pendengar yang Baik:</b><br>Pendengar yang baik adalah orang yang memberikan perhatian, memahami, dan mendukung orang lain yang sedang berbicara. INFP memberikan dukungan emosional yang tulus pada orang lain.
        </p>
        <p><b>(5.) Optimisme:</b><br>Optimisme adalah sikap yang membuat seseorang percaya bahwa segala sesuatu akan berjalan ke arah kebaikan. Mereka percaya pada potensi terbaik dalam diri manusia.
        </p>
    </div>

    <div class="content">
        <h2 class="left-aligned" style="color: #0c6e29"><b>Kekurangan</h2></b>
        <p><b>(1.) Terlalu Sensitif:</b> INFP mudah merasa terluka oleh kritik atau konflik.
        </p>
        <p><b>(2.) Cenderung Menghindari Konflik:</b> Hal ini bisa membuat mereka menunda mengambil keputusan sulit.
        </p>
        <p><b>(3.) Overthinking:</b> Mereka sering memikirkan hal-hal terlalu dalam, bahkan yang tidak perlu.
        </p>
        <p><b>(4.) Perfeksionis:</b> Standar tinggi mereka kadang menghambat produktivitas.
        </p>
        <p><b>(5.) Sulit Menghadapi Realitas:</b> Karena sangat idealis, mereka kadang merasa sulit menghadapi kenyataan yang tidak sesuai harapan.
        </p>
    </div>

    <div class="content">
        <h2 class="left-aligned" style="color:#0c6e29"><b>Karir yang cocok</b></h2>
        <p>INFP mencari karir yang memungkinkan mereka mengekspresikan kreativitas dan memberi dampak positif. 
            Berikut adalah beberapa karir yang cocok untuk INFP</p>
        <ul>
        <li><strong>Penulis atau Pengarang:</strong><br>INFP pandai menyampaikan emosi dan cerita melalui kata-kata.</li>
        <li><strong>Psikolog atau Konselor:</strong><br> Dengan empati tinggi, mereka dapat membantu orang lain memahami dan mengatasi masalah emosional.</li>
        <li><strong>Seniman atau Ilustrator:</strong><br>Seni adalah cara ideal bagi mereka untuk mengekspresikan visi unik.</li>
        <li><strong>Pekerja Sosial:</strong><br>Membantu orang yang membutuhkan memberikan kepuasan mendalam.</li>
        <li><strong>Guru:</strong><br>INFP sering menjadi guru yang inspiratif karena pendekatan mereka yang penuh empati.</li>
        <li><strong>Ahli Humas atau Komunikasi:</strong><br>Mereka pandai membangun hubungan yang bermakna dengan orang lain.</li>
        <li><strong>Editor atau Kurator Konten:</strong><br>Kemampuan mereka untuk memperhatikan detail dan mencari makna cocok untuk bidang ini.</li>
        <li><strong>Aktivis atau Advokat:</strong><br>INFP suka memperjuangkan tujuan mulia dan hak-hak manusia.</li>
    </ul>
    </div>

    <div class="content">
        <h2 class="left-aligned" style="color:#0c6e29"><b>Pasanngan yang cocok</b></h2>
        <p>Pasangan ideal untuk INFP biasanya adalah tipe kepribadian yang dapat memahami emosi 
            mendalam mereka, menghormati nilai-nilai mereka, dan memberikan keseimbangan antara 
            kepribadian yang introspektif dan dunia nyata. Tipe pasangan yang sering dianggap cocok 
            untuk INFP adalah ENFJ dan ENTP.</p>
        <ul>
        <li><strong>Kenapa ENFJ Cocok dengan INFP?</strong><br>ENFJ ("The Protagonist") adalah tipe yang peduli, suportif, dan pandai membaca emosi orang lain, sehingga mereka memahami kebutuhan emosional INFP. 
            ENFJ cenderung lebih ekstrovert, memberikan INFP dorongan untuk keluar dari zona nyaman tanpa memaksakan perubahan besar. 
            Mereka memiliki visi yang selaras: ingin menciptakan hubungan yang penuh makna dan harmoni.
        </li>
        <li><strong>Kenapa ENTP Cocok dengan INFP?</strong><br>ENTP ("The Debater") adalah tipe yang penuh ide, suka tantangan, dan mendorong INFP untuk berpikir di luar kebiasaan. 
            ENTP menghormati kreativitas dan pandangan idealis INFP, sambil menawarkan pendekatan logis untuk mewujudkan ide-ide mereka. 
            Hubungan ini biasanya penuh dengan percakapan mendalam dan eksplorasi bersama.
        </li>
    </div>
    <div class="content">
        <h2 class="left-aligned" style="color: #0c6e29"><b>Fakta Menarik tentang INFP</h2></b>
        <p>(1.) INFP dikenal sebagai tipe kepribadian yang paling romantis dan setia dalam hubungan.
        </p>
        <p>(2.) Mereka sering bermimpi besar tetapi kadang merasa kesulitan untuk memulai tindakan nyata.
        </p>
        <p>(3.) Hanya sekitar 4–5% populasi dunia adalah INFP, membuat mereka cukup langka.
        </p>
        <p>(4.) INFP sering menyukai seni, musik, dan puisi, karena bidang ini memungkinkan ekspresi emosi mereka.
        </p>
        <p>(5.) Mereka sangat terhubung dengan alam dan sering merasa damai dalam lingkungan yang tenang.
        </p>
    </div>
</body>
@endsection