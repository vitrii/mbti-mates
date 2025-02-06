@extends('layouts.theme')

@section('kepribadian-isfj')
<title>The Defender - ISFJ</title>
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


<!-- Hero-ISFJ Section -->
<section id="hero-ISFJ" class="hero-ISFJ section">

<div class="container" data-aos="fade-up" data-aos-delay="100">

  <div class="row align-items-center">
    <div class="col-lg-6">
      <div class="hero-ISFJ-content" data-aos="fade-up" data-aos-delay="200">
        <h1 style="color:#fefeff;">
          The Defender <br>
        </h1>
        <h2><b>Kepribadian ISFJ</b><br></h2>

        <p style="color: #fefeff;">
            ISFJ adalah singkatan dari Introverted, Sensing, Feeling, Judging. 
            ISFJ dikenal sebagai "The Defender" karena mereka adalah individu yang peduli, andal, 
            dan suka membantu orang lain, terutama orang yang mereka sayangi. Mereka menghargai tradisi, 
            bekerja keras, dan memiliki perhatian yang luar biasa terhadap detail.
        </p>
      </div>
    </div>

    <div class="col-lg-6">
      <div class="hero-ISFJ-image" data-aos="zoom-out" data-aos-delay="300">
        <img src="assets/img/illustration-1.webp" alt="Hero-ISFJ Image" class="img-fluid">

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

<!-- /Hero-ISFJ Section -->

    <div class="content">
        <h2 class="centered" style="color: #164791;"><b>Pembela</h2></b>
        <blockquote>
            <b>"Spread love everywhere you go. Let no one ever come to you without leaving happier."</b><br>
            <i>("Sebarkan cinta ke mana pun Anda pergi. Jangan biarkan seorang pun datang kepadamu tanpa pergi dengan lebih bahagia.")</i>
            <footer style="display: flex; justify-content: flex-end; align-items: center; margin-top: 10px;">
                <span style="margin-left: 10px;">— Mother Teresa </span>
                <img src="assets/img/Mother-Teresa.jpg" alt="Mother Teresa" class="profile-pic">
            </footer>
        </blockquote>
    </div>

    <div class="content">
        <p></p>
        </div>

    <div class="content">
        <h2 class="left-aligned" style="color: #164791;"><b>Karakteristik<br></h2></b>
        <p>
        Penyayang: ISFJ memiliki kepedulian besar terhadap kesejahteraan orang lain.
        <br>
        Setia dan Berdedikasi: Mereka menghormati komitmen dan bekerja keras untuk memenuhi tanggung jawab.
        <br>
        Praktis dan Terorganisir: ISFJ suka merencanakan dan menjaga keteraturan di sekitarnya.
        <br>
        Berorientasi pada Detail: Mereka memperhatikan hal-hal kecil yang sering diabaikan orang lain.
        <br>
        Menghargai Tradisi: ISFJ merasa nyaman dengan norma dan nilai-nilai yang sudah mapan.
        <br>
        Pendengar yang Baik: Mereka sabar dan penuh perhatian dalam memahami orang lain.
        <br>
        Introvert yang Sosial: Walaupun introvert, mereka senang menjalin hubungan yang dekat dengan orang-orang yang penting bagi mereka.
        </p>
    </div>

    <div class="content">
        <h2 class="left-aligned" style="color: #164791"><b>Kelebihan</h2></b>
        <p>
        <b>(1.) Sangat Empatik:</b><br>Sangat empatik adalah sikap memahami, merasakan, dan berbagi perasaan, pikiran, dan pengalaman orang lain. 
        ISFJ peduli pada kebutuhan orang lain dan sering memberikan dukungan emosional.
        </p>
        <p>
        <b>(2.) Konsisten dan Dapat Diandalkan:</b><br> sifat atau perilaku yang menunjukkan keteguhan, kestabilan, dan keseragaman dalam melakukan sesuatu.
         ISFJ akan memastikan tugas diselesaikan dengan baik.
        </p>
        <p><b>(3.) Mampu Beradaptasi:</b><br>Kemampuan untuk menyesuaikan diri dengan perubahan lingkungan dan situasi yang ada di sekitar.
            Meskipun menghargai tradisi, ISFJ fleksibel dalam membantu orang lain.
        </p>
        <p><b>(4.) Berorientasi pada Solusi:</b><br>
            Orientasi pada solusi adalah pendekatan untuk memandang masalah sebagai peluang untuk menemukan solusi, bukan sebagai hambatan yang tidak dapat diatasi.
            ISFJ fokus pada cara terbaik untuk menyelesaikan masalah praktis.
        </p>
        <p><b>(5.) Loyalitas yang Tinggi:</b>ISFJ sangat setia terhadap orang yang mereka cintai dan pekerjaan mereka.
        </p>
    </div>

    <div class="content">
        <h2 class="left-aligned" style="color: #164791"><b>Kekurangan</h2></b>
        <p><b>(1.) Cenderung Menyimpan Perasaan:</b> Mereka sering menyembunyikan emosi untuk menghindari konflik.
        </p>
        <p><b>(2.) Terlalu Fokus pada Orang Lain:</b> ISFJ kadang mengabaikan kebutuhan diri sendiri demi orang lain.
        </p>
        <p><b>(3.) Kesulitan Menghadapi Kritik:</b> Mereka bisa merasa terluka oleh kritik yang dirasa tidak adil.
        </p>
        <p><b>(4.) Perfeksionis:</b> Dorongan untuk menyelesaikan segalanya dengan sempurna dapat menjadi beban.
        </p>
        <p><b>(5.) Cenderung Pasif dalam Konflik:</b><br>Mereka lebih suka menghindari konfrontasi langsung.
            Menghindari konfrontasi dan cenderung menyetujui orang lain, walaupun bertentangan dengan keinginan sendiri. 
        </p>
    </div>

    <div class="content">
        <h2 class="left-aligned" style="color:#164791"><b>Karir yang cocok untuk ISFJ</b></h2>
        <p>ISFJ unggul dalam pekerjaan yang membutuhkan perhatian terhadap detail, dedikasi, dan pelayanan. Karir yang cocok meliputi:</p>
        <ul>
        <li><strong>Perawat atau Dokter:</strong><br>Sifat peduli mereka sangat ideal untuk bidang medis.</li>
        <li><strong>Guru atau Dosen:</strong><br> Mereka menyukai peran yang memungkinkan mereka membantu orang belajar dan berkembang.</li>
        <li><strong>Pekerja Sosial:</strong><br>ISFJ memiliki empati untuk mendukung individu dan keluarga yang membutuhkan bantuan.</li>
        <li><strong>Administrasi atau Sekretaris:</strong><br>Kemampuan organisasi mereka sangat bermanfaat di bidang ini.</li>
        <li><strong>Desainer Interior:</strong><br>Perhatian mereka terhadap detail cocok untuk menciptakan ruang yang nyaman dan indah.</li>
        <li><strong>Ahli Arsip atau Pustakawan:</strong><br>Kepribadian terorganisir mereka membantu menjaga dan mengelola informasi.</li>
        <li><strong>Psikolog atau Konselor:</strong><br>Mereka mendukung orang lain dengan pemahaman emosional yang mendalam.</li>
    </ul>
    </div>

    <div class="content">
        <h2 class="left-aligned" style="color:#164791"><b>Pasanngan yang cocok</b></h2>
        <p>Pasangan yang ideal bagi ISFJ adalah tipe yang memberikan dukungan emosional, menghormati nilai-nilai mereka, dan menjaga hubungan dengan stabilitas.</p>
        <ul>
        <li><strong>ESFP ("The Entertainer"):</strong><br>ESFP membawa energi dan spontanitas yang melengkapi sifat stabil ISFJ.</li>
        <li><strong>ISFP ("The Adventurer"):</strong><br>ISFP dan ISFJ sama-sama peduli pada keharmonisan dan nilai-nilai pribadi.</li>
        <li><strong>ESTP ("The Entrepreneur"):</strong><br>ESTP membawa dinamika baru yang memperkaya hubungan dengan ISFJ.</li>
        </ul>
        <p>Kunci Hubungan: ISFJ membutuhkan pasangan yang menghargai kebaikan hati mereka dan memberi mereka ruang untuk mengekspresikan diri.</p>
    </div>

    <div class="content">
        <h2 class="left-aligned" style="color: #164791"><b>Fakta Menarik tentang ISFJ</h2></b>
        <p>(1.) ISFJ mencakup sekitar 13-14% dari populasi, menjadikannya salah satu tipe kepribadian yang paling umum.
        </p>
        <p>(2.) Mereka sering disebut sebagai "pelindung diam-diam" karena kebaikan mereka sering tidak terlihat langsung.
        </p>
        <p>(3.) ISFJ sangat baik dalam mengingat detail, terutama yang berkaitan dengan orang-orang penting dalam hidup mereka.
        </p>
        <p>(4.) Mereka sering menjadi pilar dalam keluarga dan komunitas mereka, menjaga harmoni dan stabilitas.
        </p>
        <p>(5.) Meski pendiam, ISFJ sangat sosial dengan orang-orang yang dekat dengan mereka.
        </p>
    </div>
</body>
@endsection