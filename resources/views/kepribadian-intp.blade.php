@extends('layouts.theme')

@section('kepribadian-intp')

<title>The Thinker - INTP</title>
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


<!-- Hero-INTP Section -->
<section id="hero-INTP" class="hero-INTP section">

<div class="container" data-aos="fade-up" data-aos-delay="100">

  <div class="row align-items-center">
    <div class="col-lg-6">
      <div class="hero-INTP-content" data-aos="fade-up" data-aos-delay="200">
        <h1 style="color:#fefeff;">
          The Thinker <br>
        </h1>
        <h2><b>Kepribadian INTP</b><br></h2>

        <p style="color: #fefeff;">
        INTP dikenal sebagai "The Thinker" atau "Ahli Logika." 
        Orang dengan tipe ini sangat analitis, logis, dan suka memahami konsep mendalam. Mereka cenderung fokus 
        pada ide-ide abstrak dan senang mengeksplorasi teori atau prinsip yang mendasari suatu fenomena.
        </p>
      </div>
    </div>

   

  </div>

</div>

</section>

<!-- /Hero-INTP Section -->

    <div class="content">
        <h2 class="centered" style="color: #682286;"><b>Ahli Logika</h2></b>
        <blockquote>
            <b>"I have no special talents. I am only passionately curious."</b><br>
            <i>("Saya tidak punya bakat khusus. Saya hanya sangat ingin tahu.")</i>
            <footer style="display: flex; justify-content: flex-end; align-items: center; margin-top: 10px;">
                <span style="margin-left: 10px;">— Albert Einstein </span>
                <img src="assets/img/Albert-Einstein.jpg" alt="Albert Einstein" class="profile-pic">
            </footer>
        </blockquote>
    </div>

    <div class="content">
        <p>INTP, atau singkatan dari Introverted, Intuitive, Thinking, Perceiving.
        INTP (The Thinker) adalah tipe kepribadian yang cenderung analitis, logis, 
        dan suka mengeksplorasi ide atau konsep. Mereka sangat penasaran, suka berpikir
         mendalam, dan lebih nyaman dengan dunia teori daripada praktik.
        </p>
        </div>

    <div class="content">
        <h2 class="left-aligned" style="color: #682286;"><b>Karakteristik<br></h2></b>
        <p>
        Analitis & Logis: INTP sangat menghargai logika dan mencari penjelasan rasional atas segala sesuatu.
        <br>
        Penasaran: Mereka selalu tertarik untuk belajar dan mengeksplorasi hal baru.  
        <br>
        Pemikir Abstrak: Lebih nyaman dengan konsep, ide, dan teori daripada detail praktis.
        <br>
        Mandiri: Suka bekerja sendiri dan tidak terlalu membutuhkan validasi dari orang lain.
        <br>
        Santai: Mereka cenderung memiliki gaya hidup yang fleksibel dan tidak menyukai rutinitas kaku.
        <br>
        Introvert: Memerlukan waktu sendiri untuk mengisi energi, tetapi tetap senang berbincang tentang topik intelektual dengan orang-orang yang mereka percayai.
        </p>
    </div>

    <div class="content">
        <h2 class="left-aligned" style="color: #682286"><b>Kelebihan</h2></b>
        <p>
        <b>(1.) Pemecah Masalah Hebat:</b><br>
        Mampu melihat solusi kreatif untuk masalah kompleks.
        <br>
        </p>
        <p>
        <b>(2.) Kreativitas & Inovasi:</b><br>
        Pikiran mereka penuh dengan ide-ide unik dan perspektif baru.
        <br> 
        </p>
        <p><b>(3.) Objektif:</b><br>
        Cenderung membuat keputusan berdasarkan fakta, bukan emosi.
        <br>
        </p>
        <p><b>(4.) Adaptif:</b><br>
        Terbuka untuk ide-ide baru dan pandangan yang berbeda.
        <br>
        </p>
    </div>

    <div class="content">
        <h2 class="left-aligned" style="color: #682286"><b>Kekurangan</h2></b>
        <p><b>(1.) Overthinking:</b><br>
        Sering terjebak dalam pikiran sendiri dan sulit mengambil tindakan nyata.
        <br>
        </p>
        <p><b>(2.) Kurang Perhatian pada Detail Praktis:</b><br>
        Mereka bisa melupakan hal-hal kecil atau kewajiban sehari-hari.
        <br>
        </p>
        <p><b>(3.) Sulit Mengekspresikan Emosi:</b><br>
        INTP kadang terlihat dingin atau tidak peduli karena lebih fokus pada logika.
        <br>
        </p>
        <p><b>(4.) Prokrastinasi:</b><br>
        Cenderung menunda pekerjaan, terutama jika mereka tidak merasa terinspirasi.
        <br>
        </p>
    </div>

    <div class="content">
        <h2 class="left-aligned" style="color:#682286"><b>Karir yang cocok</b></h2>
        <p>INTP cenderung tertarik pada pekerjaan yang memungkinkan eksplorasi ide-ide abstrak dan pemecahan masalah.
         Berikut adalah beberapa karir yang cocok untuk INTP :</p>
        <ul>
        <li><strong>Ilmuwan atau Peneliti:</strong> <br>INTP memiliki rasa ingin tahu yang tinggi dan suka mengeksplorasi 
        konsep-konsep baru. Karir dalam bidang sains, seperti fisika, kimia, atau biologi.</li>
        <li><strong>Programmer atau Pengembang Perangkat Lunak:</strong> <br> INTP unggul dalam logika dan pemecahan masalah, 
            menjadikan dunia pemrograman ideal untuk mereka. Karir ini menawarkan kebebasan kreatif untuk merancang sistem, memecahkan bug, dan mengembangkan teknologi baru.</li>
        <li><strong> Filsuf atau Penulis:</strong><br>Sebagai pemikir mendalam, INTP sering memiliki ide-ide unik yang dapat dituangkan dalam tulisan. Mereka bisa menjadi filsuf, penulis, atau jurnalis yang mengeksplorasi teori dan menyampaikan pemikiran mereka kepada dunia.</li>
        <li><strong>Insinyur atau Teknisi:</strong><br>INTP suka memahami bagaimana sesuatu bekerja dan mencari cara untuk memperbaikinya. Karir di bidang teknik memungkinkan mereka untuk memecahkan masalah teknis dengan pendekatan logis dan inovatif.</li>
    </ul>
    </div>

    <div class="content">
        <h2 class="left-aligned" style="color:#682286"><b>Pasangan Ideal INTP</b></h2>
        <p></p>
        <ul>
        <li><strong>ENTP (The Debater):</strong><br>Sama-sama suka diskusi intelektual, tetapi lebih ekstrovert.</li>
        <li><strong>INTJ (The Mastermind):</strong><br>Menghargai logika dan memiliki visi yang terarah.</li>
        <li><strong>INFJ (The Advocate):</strong><br>Memberikan dukungan emosional yang tenang dan stabil.</li>
        <li><strong>ENFP (The Campaigner):</strong><br>Membawa energi, spontanitas, dan kreativitas yang membuat hubungan lebih hidup.</li>
        </ul>
    </div>

    <div class="content">
        <h2 class="left-aligned" style="color: #682286"><b>Fakta Menarik Tentang INTP</h2></b>
        <p><b>(1.) Ahli Logika:</b> INTP sering dianggap pemikir paling logis di antara tipe MBTI lainnya.
        </p>
        <p><b>(2.) Overthinker Alami:</b> Mereka bisa menghabiskan banyak waktu menganalisis hingga melupakan tindakan nyata.
        </p>
        <p><b>(3.) Kreatif:</b> Sering punya ide-ide out-of-the-box yang unik.
        </p>
        <p><b>(4.) Santai Tapi Penuh Tekanan Internal:</b> Meskipun terlihat tenang, pikiran mereka sering dipenuhi oleh banyak skenario dan analisis.
        </p>
        <p><b>(5.) Pemikir Mandiri:</b> INTP suka bekerja sendiri dan tidak terlalu bergantung pada orang lain.
        </p>
        <p><b>(6.) Misterius:</b> Sulit ditebak karena mereka cenderung tertutup secara emosional.
        </p>
        <p><b>(7.) Dunia Imajinasi yang Kaya:</b> Pikiran mereka penuh dengan ide abstrak, teori, atau konsep mendalam.
        </p>
        <p><b>(8.) Perfeksionis Dalam Pikiran:</b> Mereka sering menetapkan standar tinggi untuk diri sendiri meskipun terlihat santai.
        </p>
        <p><b>(9.) Canggung Secara Sosial:</b> INTP tidak selalu nyaman dengan interaksi sosial yang terlalu formal atau emosional.
        </p>
        <p><b>(10.) Suka Debat:</b> Menikmati diskusi intelektual tetapi tidak bermaksud menyerang orang lain.
        </p>
    </div>
</body>
@endsection