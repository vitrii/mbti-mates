@extends('layouts.theme')

@section('kepribadian-infj')
<title>Advokat - INFJ</title>
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


<!-- Hero-INFJ Section -->
<section id="hero-INFJ" class="hero-INFJ section">

<div class="container" data-aos="fade-up" data-aos-delay="100">

  <div class="row align-items-center">
    <div class="col-lg-6">
      <div class="hero-INFJ-content" data-aos="fade-up" data-aos-delay="200">
        <h1 style="color:#fefeff;">
          The Advocate <br>
        </h1>
        <h2><b>Kepribadian INFJ</b><br></h2>

        <p style="color: #fefeff;">
            INFJ adalah tipe kepribadian yang penuh empati, visioner, dan memiliki keinginan mendalam untuk membuat perubahan 
            positif. Mereka sering disebut sebagai "pemimpin tenang" karena kepribadian mereka yang introvert namun peduli 
            terhadap orang lain dan memiliki pandangan strategis yang kuat.
        </p>
      </div>
    </div>

    <div class="col-lg-6">
      <div class="hero-INFJ-image" data-aos="zoom-out" data-aos-delay="300">
        <img src="assets/img/illustration-1.webp" alt="Hero-INFJ Image" class="img-fluid">

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

<!-- /Hero-INFJ Section -->

    <div class="content">
        <h2 class="centered" style="color: #0c6e29;"><b>Advokat</h2></b>
        <blockquote>
            <b>"Be the change that you wish to see in the world."</b><br>
            <i>("Jadilah perubahan yang ingin Anda lihat di dunia.")</i>
            <footer style="display: flex; justify-content: flex-end; align-items: center; margin-top: 10px;">
                <span style="margin-left: 10px;">— Mahatma Gandhi </span>
                <img src="assets/img/Mahatma-Gandhi.jpg" alt="Mahatma Gandhi" class="profile-pic">
            </footer>
        </blockquote>
    </div>

    <div class="content">
        <p>INFJ adalah tipe kepribadian yang langka, introspektif, penuh kasih, dan memiliki kemampuan untuk memahami emosi serta motivasi orang lain secara mendalam.
        </p>
        </div>

    <div class="content">
        <h2 class="left-aligned" style="color: #0c6e29;"><b>Karakteristik<br></h2></b>
        <p>
        Berorientasi pada Tujuan: INFJ memiliki visi jangka panjang yang jelas dan ingin mewujudkan hal-hal besar.
        <br>
        Empati Tinggi: Mereka mampu memahami perasaan dan kebutuhan orang lain dengan mendalam.
        <br>
        Pendengar yang Baik: INFJ sering menjadi tempat curhat karena kemampuan mereka untuk mendengarkan tanpa menghakimi.
        <br>
        Perfeksionis: Mereka cenderung memiliki standar tinggi untuk diri sendiri dan orang lain.
        <br>
        Berprinsip: INFJ sangat menghargai integritas dan sering bertindak berdasarkan nilai-nilai yang mereka yakini.
        <br>
        Visioner: Mampu melihat gambaran besar, INFJ sering membayangkan cara dunia bisa menjadi lebih baik.
        <br>
        Introvert yang Sosial: Meski introvert, mereka menikmati hubungan mendalam dengan orang-orang yang dekat.
        <br>
        Berpikir Mendalam: INFJ suka merenung dan memahami makna di balik suatu situasi.
        </p>
    </div>

    <div class="content">
        <h2 class="left-aligned" style="color: #0c6e29"><b>Kelebihan</h2></b>
        <p>
        <b>(1.) Kreatif dan Visioner:</b><br>
        karakteristik yang saling berkaitan dan dapat diartikan sebagai kemampuan untuk berpikir di luar kotak, serta menghasilkan ide-ide unik dan inovatif.
        INFJ memiliki imajinasi yang kuat untuk menciptakan ide-ide yang unik dan bermakna.
        </p>
        <p>
        <b>(2.) Berempati:</b><br>
        kemampuan untuk memahami apa yang dirasakan orang lain, melihat sesuatu dari sudut pandang orang lain, dan juga membayangkan diri sendiri berada di posisi orang tersebut.
        INFJ Sangat peduli pada kesejahteraan orang lain dan mampu memahami emosi mereka.
        </p>
        <p><b>(3.) Pendukung yang Kuat:</b> INFJ akan mendukung orang-orang yang mereka percayai hingga akhir.
        </p>
        <p><b>(4.) Pemimpin Alami:</b><br>Pemimpin alami adalah orang yang memiliki kemampuan untuk memimpin tanpa pelatihan formal yang ekstensif.
            Meskipun tenang, INFJ memiliki kemampuan untuk memimpin secara efektif dengan wibawa.
        </p>
        <p><b>(5.) Komitmen Tinggi:</b><br>
            Komitmen tinggi adalah sikap konsisten dan fokus pada tujuan yang ingin dicapai. 
            Jika INFJ memiliki tujuan, INFJ akan bekerja keras untuk mencapainya.
        </p>
    </div>

    <div class="content">
        <h2 class="left-aligned" style="color: #0c6e29"><b>Kekurangan</h2></b>
        <p><b>(1.) Perfeksionis:</b><br>
            Perfeksionis adalah orang yang memiliki standar tinggi dan menuntut diri sendiri maupun orang lain untuk menghasilkan sesuatu yang sempurna.
            Standar yang terlalu tinggi dapat membuat INFJ sulit merasa puas.
        </p>
        <p><b>(2.) Sulit Berkata Tidak:</b><br>
            Bisa jadi tanda bahwa seorang memiliki kecenderungan menjadi people pleaser, INFJ tidak selalu menjadi people pleaser, itu karena
            INFJ cenderung mengambil terlalu banyak tanggung jawab karena ingin membantu orang lain.
        </p>
        <p><b>(3.) Mudah Lelah Secara Emosional:</b> Empati tinggi INFJ kadang membuat mereka terbebani oleh masalah orang lain.
        </p>
        <p><b>(4.) Sulit Membuka Diri:</b> INFJ sering menahan perasaan mereka sendiri untuk menjaga hubungan.
        </p>
        <p><b>(4.) Cenderung Overthinking:</b><br>INFJ sering mengalami overthinking karena kombinasi unik dari sifat kepribadian mereka yang intuitif, emosional, dan berorientasi pada detail. 
            Sering memikirkan terlalu dalam, bahkan hal-hal kecil.
         </p>
    </div>

    <div class="content">
        <h2 class="left-aligned" style="color:#0c6e29"><b>Karir yang cocok untuk INFJ</b></h2>
        <p>INFJ cocok dalam pekerjaan yang memungkinkan mereka membantu orang lain sambil memanfaatkan 
            kreativitas dan pemikiran strategis mereka. Beberapa karir yang ideal:</p>
        <ul>
        <li><strong>Psikolog atau Konselor</strong><br>INFJ pandai memahami perasaan dan motivasi orang lain, sehingga mereka bisa membantu orang lain mengatasi masalah emosional atau psikologis.</li>
        <li><strong>Penulis atau Pengarang</strong><br>INFJ memiliki kreativitas tinggi dan kemampuan untuk mengekspresikan ide-ide mendalam melalui tulisan. Mereka juga suka mengeksplorasi emosi dan hubungan manusia dalam karya mereka.</li>
        <li><strong>Guru atau Dosen</strong><br>INFJ menyukai pekerjaan yang memungkinkan mereka mendidik dan membimbing orang lain. Mereka merasa puas saat melihat siswa mereka berkembang.</li>
        <li><strong>Pekerja Sosial atau Aktivis</strong><br>INFJ sering merasa terdorong untuk membantu masyarakat dan memperjuangkan keadilan. Mereka sangat peduli terhadap perubahan sosial yang positif.</li>
        <li><strong>Desainer atau Seniman</strong><br>INFJ memiliki kemampuan kreatif dan estetika yang kuat, serta senang membuat karya yang mencerminkan visi unik mereka.</li>
        <li><strong>Dokter atau Ahli Kesehatan</strong><br>INFJ dapat menggabungkan empati dan dedikasi mereka untuk merawat pasien. Profesi ini memberi mereka kesempatan untuk membuat perbedaan nyata dalam kehidupan orang lain.</li>
        <li><strong>Peneliti atau Ilmuwan</strong><br>INFJ memiliki rasa ingin tahu dan kesabaran untuk mendalami penelitian tentang manusia, lingkungan, atau teknologi.</li>
    </ul>
    </div>

    <div class="content">
        <h2 class="left-aligned" style="color:#0c6e29"><b>Pasangan Ideal untuk INFJ</b></h2>
        <p>Pasangan yang ideal untuk INFJ adalah tipe yang mendukung mereka secara emosional, 
            menghargai kedalaman pemikiran mereka, dan mampu menciptakan hubungan yang penuh makna.</p>
        <ul>
        <li><strong>ENFP (The Campaigner):</strong><br>Membawa energi positif dan spontanitas ke dalam hubungan, melengkapi INFJ yang introspektif.</li>
        <li><strong>ENFJ (The Protagonist):</strong><br>Sama-sama peduli dan berorientasi pada hubungan yang bermakna.</li>
        <li><strong>INTP (The Thinker):</strong><br>Memberikan tantangan intelektual dan membantu INFJ tetap rasional.</li>
        <li><strong>ENTP (The Debater):</strong><br>Dinamis dan penuh semangat, mereka mendorong INFJ untuk keluar dari zona nyaman.</li>
        </ul>
    </div>

    <div class="content">
        <h2 class="left-aligned" style="color: #0c6e29"><b>Fakta Menarik Tentang INFJ</h2></b>
        <p><b>(1.) Tipe Kepribadian Paling Langka:</b> Hanya sekitar 1-2% populasi dunia adalah INFJ.
        </p>
        <p><b>(2.) Pemimpin Tenang:</b> INFJ sering diandalkan dalam situasi sulit meskipun sifatnya introvert.
        </p>
        <p><b>(3.) Berpikiran Kompleks:</b> Mereka bisa melihat pola-pola yang orang lain abaikan.
        </p>
        <p><b>(4.) Suka Hubungan Mendalam:</b> INFJ lebih suka memiliki sedikit teman tetapi dengan ikatan yang kuat.
        </p>
        <p><b>(5.) Idealistis:</b> Mereka percaya dunia dapat menjadi tempat yang lebih baik dan berusaha mewujudkannya.
        </p>
        <p><b>(6.) Sensitif terhadap Konflik:</b> INFJ sering menghindari konfrontasi yang tidak perlu.
        </p>
        <p><b>(7.) Suka Merenung:</b> INFJ sering memikirkan makna kehidupan atau tujuan jangka panjang.
        </p>
        <p><b>(8.) Mampu Menyeimbangkan Logika dan Emosi:</b> Mereka bisa berpikir logis tetapi tetap mempertimbangkan perasaan orang lain.
        </p>
    </div>
</body>
@endsection