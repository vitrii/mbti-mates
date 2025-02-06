@extends('layouts.theme')

@section('kepribadian-isfp')
<title>The Adventurer - ISFP</title>
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


<!-- Hero-ISFP Section -->
<section id="hero-ISFP" class="hero-ISFP section">

<div class="container" data-aos="fade-up" data-aos-delay="100">

  <div class="row align-items-center">
    <div class="col-lg-6">
      <div class="hero-ISFP-content" data-aos="fade-up" data-aos-delay="200">
        <h1 style="color:#fefeff;">
          The Adventurer <br>
        </h1>
        <h2><b>Kepribadian ISFP</b><br></h2>

        <p style="color: #fefeff;">
            ISFP adalah singkatan dari Introverted, Sensing, Feeling, Perceiving. 
            Tipe ini sering disebut "The Adventurer" karena mereka kreatif, fleksibel, 
            dan memiliki apresiasi mendalam terhadap keindahan dan ekspresi. ISFP adalah 
            orang yang tenang namun penuh semangat, selalu mencari cara untuk menjalani 
            kehidupan dengan makna dan kebebasan pribadi.
        </p>
      </div>
    </div>

    <div class="col-lg-6">
      <div class="hero-ISFP-image" data-aos="zoom-out" data-aos-delay="300">
        <img src="assets/img/illustration-1.webp" alt="Hero-ISFP Image" class="img-fluid">

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

<!-- /Hero-ISFP Section -->

    <div class="content">
        <h2 class="centered" style="color: #82780b;"><b>Petualang</h2></b>
        <blockquote>
            <b>"Carry out a random act of kindness, with no expectation of reward, safe in the knowledge that one day someone might do the same for you."</b><br>
            <i>("Lakukanlah tindakan kebaikan secara acak, tanpa mengharapkan imbalan, dengan aman karena mengetahui bahwa suatu hari seseorang mungkin akan melakukan hal yang sama untuk Anda.")</i>
            <footer style="display: flex; justify-content: flex-end; align-items: center; margin-top: 10px;">
                <span style="margin-left: 10px;">— Princess Diana </span>
                <img src="assets/img/Princess-Diana.jpg" alt="Princess Diana" class="profile-pic">
            </footer>
        </blockquote>
    </div>

    <div class="content">
        <p>ISFP adalah tipe kepribadian yang kreatif, berorientasi pada nilai pribadi, dan penuh dengan rasa empati serta apresiasi terhadap keindahan di dunia sekitar mereka.</p>
        </div>

    <div class="content">
        <h2 class="left-aligned" style="color: #82780b;"><b>Karakteristik<br></h2></b>
        <p>
        Kreatif: ISFP memiliki bakat dalam seni dan desain serta kecenderungan untuk mengekspresikan diri melalui kreativitas.
        <br>
        Empati Tinggi: Mereka sangat peduli pada perasaan orang lain dan sering memberikan dukungan emosional.
        <br>
        Mandiri: ISFP membutuhkan kebebasan untuk mengekspresikan diri tanpa terikat oleh aturan yang kaku.
        <br>
        Santai dan Fleksibel: Mereka tidak suka konflik dan lebih memilih kehidupan yang damai dan harmonis.
        <br>
        Menikmati Hidup: ISFP menghargai momen kecil dan memiliki kepekaan tinggi terhadap keindahan dalam kehidupan sehari-hari.
        <br>
        Sulit Dipahami: Mereka cenderung tertutup dan sering dianggap misterius oleh orang lain.
        </p>
    </div>

    <div class="content">
        <h2 class="left-aligned" style="color: #82780b"><b>Kelebihan</h2></b>
        <p>
        <b>(1.) Kreativitas Luar Biasa:</b> ISFP unggul dalam seni, desain, dan bidang kreatif lainnya.
        </p>
        <p>
        <b>(2.) Mudah Beradaptasi:</b> Mereka fleksibel dan bisa dengan cepat menyesuaikan diri dengan perubahan.
        </p>
        <p><b>(3.) Empati yang Mendalam:</b> ISFP peduli pada kesejahteraan orang lain dan pandai memahami perasaan.
        </p>
        <p><b>(4.) Berorientasi pada Nilai:</b> Mereka memegang teguh prinsip dan nilai pribadi mereka.
        </p>
        <p><b>(5.) Harmonis:</b> ISFP adalah tipe yang menghindari konflik dan berusaha menciptakan suasana damai.
        </p>
    </div>

    <div class="content">
        <h2 class="left-aligned" style="color: #82780b"><b>Kekurangan</h2></b>
        <p><b>(1.) Terlalu Sensitif:</b> Mereka mudah terluka oleh kritik atau situasi yang tidak menyenangkan.
        </p>
        <p><b>(2.) Tidak Menyukai Rutinitas:</b> ISFP cenderung merasa bosan dengan pekerjaan yang monoton atau terstruktur.
        </p>
        <p><b>(3.) Sulit Mengekspresikan Emosi:</b> Meskipun sangat emosional, mereka sering kesulitan berbicara tentang perasaan mereka secara terbuka.
        </p>
        <p><b>(4.) Cenderung Menunda-nunda:</b> Sifat spontanitas mereka terkadang membuat mereka menunda tugas penting.
        </p>
        <p><b>(5.) Mudah Kehilangan Fokus:</b> Mereka bisa kehilangan minat jika sesuatu tidak terasa menyenangkan atau bermakna.
        </p>
    </div>

    <div class="content">
        <h2 class="left-aligned" style="color:#82780b"><b>Karir yang cocok</b></h2>
        <p>ISFP cocok dengan pekerjaan yang memungkinkan mereka mengekspresikan kreativitas, memiliki fleksibilitas, dan berorientasi pada orang atau seni.
            Karir yang cocok meliputi:</p>
        <ul>
        <li><strong>Seniman atau Desainer:</strong><br>Kepekaan mereka terhadap estetika sangat mendukung pekerjaan ini.</li>
        <li><strong>Fotografer:</strong><br>ISFP dapat menangkap keindahan momen melalui kamera.</li>
        <li><strong>Penulis atau Penyair:</strong><br>Kemampuan mereka mengekspresikan emosi lewat kata-kata sangat menonjol.</li>
        <li><strong>Ahli Kesehatan atau Perawat:</strong><br>Empati mereka membuat mereka cocok untuk peran yang peduli pada orang lain.</li>
        <li><strong>Chef atau Ahli Kuliner:</strong><br>ISFP menikmati seni dalam memasak dan presentasi makanan.</li>
        <li><strong>Ahli Terapi atau Konselor:</strong><br>Mereka pandai mendengarkan dan membantu orang lain memahami emosi mereka.</li>
        <li><strong>Pekerja Sosial:</strong><br>ISFP peduli terhadap kesejahteraan masyarakat dan individu.</li>
    </ul>
    </div>

    <div class="content">
        <h2 class="left-aligned" style="color:#82780b"><b>Pasanngan yang cocok</b></h2>
        <p>ISFP membutuhkan pasangan yang menghargai kebebasan mereka dan mendukung ekspresi kreatif mereka. Pasangan yang cocok meliputi:</p>
        <ul>
        <li><strong>ESFP ("The Entertainer"):</strong><br>ESFP dan ISFP berbagi cinta terhadap kehidupan yang spontan dan penuh warna.</li>
        <li><strong>ENFP ("The Campaigner"):</strong><br>ENFP membawa semangat dan inspirasi yang melengkapi empati dan kelembutan ISFP.</li>
        <li><strong>INFJ ("The Advocate"):</strong><br>INFJ menghargai kedalaman emosi ISFP dan mendukung tujuan mereka.</li>
        </ul>
        <p><b>Kunci Hubungan:</b> ISFP mencari pasangan yang memahami kepribadian unik mereka dan memberikan ruang untuk mengekspresikan diri.</p>
    </div>

    <div class="content">
        <h2 class="left-aligned" style="color: #82780b"><b>Fakta Menarik tentang ISFP</h2></b>
        <p>(1.) Jarang Menonjolkan Diri: ISFP cenderung rendah hati dan tidak suka menarik perhatian.
        </p>
        <p>(2.) Cinta Alam: Mereka sering merasa damai di alam dan menikmati kegiatan luar ruangan.
        </p>
        <p>(3.) Berorientasi pada Pengalaman: ISFP lebih suka menciptakan kenangan daripada mengejar status atau kekayaan.
        </p>
        <p>(4.) Sangat Independen: Mereka menghargai kebebasan mereka di atas segalanya.
        </p>
        <p>(5.) Penuh Kejutan: ISFP sering memiliki sisi kreatif atau petualang yang tidak terduga.
        </p>
    </div>
</body>
@endsection