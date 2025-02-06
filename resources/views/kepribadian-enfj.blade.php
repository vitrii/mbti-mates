@extends('layouts.theme')

@section('kepribadian-enfj')
<title>The Protagonist - ENFJ</title>
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


<!-- Hero-ENFJ Section -->
<section id="hero-ENFJ" class="hero-ENFJ section">

<div class="container" data-aos="fade-up" data-aos-delay="100">

  <div class="row align-items-center">
    <div class="col-lg-6">
      <div class="hero-ENFJ-content" data-aos="fade-up" data-aos-delay="200">
        <h1 style="color:#fefeff;">
          The Protagonist <br>
        </h1>
        <h2><b>Kepribadian ENFJ</b><br></h2>

        <p style="color: #fefeff;">
        ENFJ adalah singkatan dari Extraverted, Intuitive, Feeling, Judging. ENFJ dikenal sebagai "The Protagonist", sosok yang 
        karismatik, inspiratif, dan peduli terhadap orang lain. Mereka secara alami memiliki kemampuan memimpin 
        dan menciptakan lingkungan yang harmonis dengan mendukung dan memotivasi orang di sekitar mereka.
        </p>
      </div>
    </div>

    <div class="col-lg-6">
      <div class="hero-ENFJ-image" data-aos="zoom-out" data-aos-delay="300">
        <img src="assets/img/illustration-1.webp" alt="Hero-ENFJ Image" class="img-fluid">

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

<!-- /Hero-ENFJ Section -->

    <div class="content">
        <h2 class="centered" style="color: #0c6e29;"><b>Protagonis</h2></b>
        <blockquote>
            <b>"The future rewards those who press on. I don’t have time to feel sorry for myself. 
                I don’t have time to complain. I’m going to press on."</b><br>
            <i>("Masa depan memberi penghargaan bagi mereka yang terus maju. Saya tidak punya waktu 
                untuk mengasihani diri sendiri. Saya tidak punya waktu untuk mengeluh. Saya akan terus maju.")</i>
            <footer style="display: flex; justify-content: flex-end; align-items: center; margin-top: 10px;">
                <span style="margin-left: 10px;">— Barack Obama </span>
                <img src="assets/img/barack-obama.jpg" alt="Barack Obama" class="profile-pic">
            </footer>
        </blockquote>
    </div>

    <div class="content">
        <p>ENFJ adalah individu yang ekstrovert, penuh empati, dan suka memotivasi orang lain untuk 
            mencapai potensi terbaik mereka. Mereka adalah pemimpin yang karismatik, penuh perhatian, 
            dan senang membangun hubungan bermakna.
        </p>
        </div>

    <div class="content">
        <h2 class="left-aligned" style="color: #0c6e29;"><b>Karakteristik<br></h2></b>
        <p>
        Karismatik: ENFJ memiliki aura alami yang membuat mereka menarik dan dipercaya oleh orang lain.
        <br>
        Empatik: Mereka memiliki kemampuan luar biasa untuk memahami perasaan dan kebutuhan orang lain.
        <br>
        Optimistis: ENFJ percaya pada kebaikan manusia dan potensi semua orang untuk berubah menjadi lebih baik.
        <br>
        Altruistis: Mereka sering mendahulukan kebutuhan orang lain dibanding diri mereka sendiri.
        <br>
        Visioner: Mereka memiliki pandangan jangka panjang tentang masa depan dan bekerja keras untuk mencapainya.
        <br>
        Suka Bersosialisasi: Sebagai ekstrovert, mereka merasa energik dalam lingkungan sosial dan senang membangun hubungan.
        <br>
        Terorganisir: ENFJ pandai dalam perencanaan dan mengatur berbagai tugas untuk mencapai tujuan bersama.
        </p>
    </div>

    <div class="content">
        <h2 class="left-aligned" style="color: #0c6e29"><b>Kelebihan</h2></b>
        <p>
        <b>(1.) Pemimpin yang Inspirasional:</b><br>Pemimpin yang inspiratif adalah sosok yang dapat memotivasi dan menginspirasi orang lain untuk mencapai potensi mereka.
        ENFJ memotivasi orang lain untuk mencapai potensi terbaik mereka.
        </p>
        <p>
        <b>(2.) Pendengar yang Baik:</b> ENFJ mendengarkan dengan tulus, memahami, dan memberikan solusi penuh perhatian.
        </p>
        <p><b>(3.) Diplomatis:</b><br>Sikap yang mempertimbangkan sebelum berbicara atau bertindak agar bisa mengambil keputusan yang tepat.
            Kemampuan ENFJ menyelesaikan konflik dengan cara damai sangat luar biasa.
        </p>
        <p><b>(4.) Komitmen yang Tinggi:</b><br>Komitmen yang tinggi adalah sikap konsisten dan fokus untuk mencapai tujuan yang diinginkan.
            ENFJ sangat berdedikasi terhadap pekerjaan, hubungan, dan komunitas mereka.
        </p>
        <p><b>(5.) Berorientasi pada Tim:</b><br>Bekerja sama dengan baik dengan orang lain, dan memprioritaskan kepentingan tim di atas kepentingan diri sendiri.
            ENFJ selalu mencari cara untuk membuat tim mereka berhasil.
        </p>
    </div>

    <div class="content">
        <h2 class="left-aligned" style="color: #0c6e29"><b>Kekurangan</h2></b>
        <p><b>(1.) Terlalu Memikirkan Orang Lain:</b> ENFJ sering mengabaikan kebutuhan pribadi demi membantu orang lain.
        </p>
        <p><b>(2.) Perfeksionis: </b> ENFJ memiliki ekspektasi tinggi terhadap diri sendiri dan orang lain, yang bisa menjadi beban.
        </p>
        <p><b>(3.) Sulit Menghadapi Kritik:</b> Karena ENFJ sangat peduli pada hubungan, kritik bisa terasa sangat menyakitkan.
        </p>
        <p><b>(4.) Cenderung Overcommit:</b><br>Overcommitting adalah kondisi ketika seseorang terlalu berkomitmen atau melakukan sesuatu yang melebihi apa yang seharusnya. 
            ENFJ sering mengambil terlalu banyak tanggung jawab sehingga merasa kewalahan.
        </p>
        <p><b>(5.) Terlalu Optimis:</b> ENFJ kadang terlalu fokus pada hal-hal positif sehingga mengabaikan potensi risiko.
        </p>
    </div>

    <div class="content">
        <h2 class="left-aligned" style="color:#0c6e29"><b>Karir yang cocok untuk ENFJ</b></h2>
        <p></p>
        <ul>
        <li><strong>Politisi atau Aktivis:</strong><br>Dengan kepedulian mereka terhadap orang lain, ENFJ cocok memimpin perubahan sosial.</li>
        <li><strong>Ahli Hubungan Masyarakat:</strong><br>ENFJ pandai berkomunikasi dan membangun hubungan profesional.</li>
        <li><strong>Pelatih atau Mentor:</strong><br>ENFJ senang membantu orang lain mencapai tujuan mereka.</li>
        <li><strong>Pekerja Sosial:</strong><br>ENFJ merasa puas membantu masyarakat dan menciptakan perubahan positif.</li>
        <li><strong>Guru atau Dosen:</strong><br>ENFJ suka menginspirasi dan mendukung pertumbuhan orang lain melalui pendidikan.</li>
        <li><strong>Konselor atau Psikolog:</strong><br>Kemampuan empati mereka membuat mereka ahli dalam memahami dan membantu orang lain.</li>
        <li><strong>Manajer atau Pemimpin Tim:</strong><br></li>ENFJ memiliki keterampilan kepemimpinan alami untuk memotivasi tim.
    </ul>
    </div>

    <div class="content">
        <h2 class="left-aligned" style="color:#0c6e29"><b>Pasangan Ideal untuk ENFJ</b></h2>
        <p>Pasangan ideal untuk ENFJ adalah tipe kepribadian yang dapat memahami kebutuhan emosional mereka, 
            menghargai dedikasi mereka dalam hubungan, dan memberikan keseimbangan dengan pandangan yang lebih 
            praktis atau introspektif. Tipe yang sering dianggap cocok untuk ENFJ adalah INFP dan INTP.</p>
        <ul>
        <li><strong>Kenapa INFP Cocok dengan ENFJ?</strong><br>
        INFP ("The Mediator") memiliki kedalaman emosional dan nilai-nilai yang kuat, yang dapat selaras dengan visi idealis ENFJ.
        INFP menawarkan stabilitas emosional dan introspeksi, sementara ENFJ membawa energi, karisma, dan dorongan untuk bertindak.
        Hubungan ini biasanya harmonis karena keduanya mengutamakan empati, makna mendalam, dan hubungan emosional.
        </li>
        <li><strong>Kenapa INTP Cocok dengan ENFJ?</strong><br>
        INTP ("The Thinker") menawarkan perspektif logis dan analitis, yang melengkapi kecenderungan ENFJ untuk fokus pada emosi dan hubungan sosial.
        INTP membantu ENFJ berpikir secara kritis dan rasional, sementara ENFJ membantu INTP mengekspresikan emosi mereka dengan lebih baik.
        Keseimbangan ini membuat hubungan keduanya dinamis, di mana ENFJ memberikan struktur dan motivasi, dan INTP memberikan kebebasan berpikir.
        </li>
        <li><strong>Pasangan Lain yang Mungkin Cocok untuk ENFJ :</strong> ISFP ("The Adventurer"):<br>Hubungan yang lembut dan artistik, dengan ISFP yang menghargai sisi emosional dan ekspresif ENFJ.
        </li>
        </ul>
    </div>

    <div class="content">
        <h2 class="left-aligned" style="color: #0c6e29"><b>Fakta Menarik tentang ENFJ</h2></b>
        <p>(1.) ENFJ adalah salah satu tipe kepribadian yang paling karismatik dan mudah disukai.
        </p>
        <p>(2.) Mereka hanya mencakup sekitar 2–5% populasi, membuat mereka cukup langka.
        </p>
        <p>(3.) Banyak ENFJ menjadi pemimpin terkenal, seperti Nelson Mandela, Barack Obama dan Martin Luther King Jr.
        </p>
        <p>(4.) ENFJ sering berjuang untuk membuat dunia menjadi tempat yang lebih baik, baik melalui pekerjaan maupun hubungan mereka.
        </p>
        <p>(5.) Mereka mudah mengenali bakat orang lain dan senang membantu mereka mengembangkannya.
        </p>
    </div>
</body>
@endsection