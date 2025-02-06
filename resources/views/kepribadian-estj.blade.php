@extends('layouts.theme')

@section('kepribadian-estj')
<title>The Executive - ESTJ</title>
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


<!-- Hero-ESTJ Section -->
<section id="hero-ESTJ" class="hero-ESTJ section">

<div class="container" data-aos="fade-up" data-aos-delay="100">

  <div class="row align-items-center">
    <div class="col-lg-6">
      <div class="hero-ESTJ-content" data-aos="fade-up" data-aos-delay="200">
        <h1 style="color:#fefeff;">
          The Executive <br>
        </h1>
        <h2><b>Kepribadian ESTJ</b><br></h2>

        <p style="color: #fefeff;">
            ESTJ adalah singkatan dari Extraverted, Sensing, Thinking, Judging.
            ESTJ dikenal sebagai "The Executive" karena mereka suka mengambil tanggung jawab, 
            memimpin dengan tegas, dan mengorganisasi lingkungan sekitar. 
            Mereka menghargai tradisi, efisiensi, dan hasil nyata.
        </p>
      </div>
    </div>

    <div class="col-lg-6">
      <div class="hero-ESTJ-image" data-aos="zoom-out" data-aos-delay="300">
        <img src="assets/img/illustration-1.webp" alt="Hero-ESTJ Image" class="img-fluid">

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

<!-- /Hero-ESTJ Section -->

    <div class="content">
        <h2 class="centered" style="color: #164791;"><b>Eksekutif</h2></b>
        <blockquote>
            <b>"Watch your thoughts, for they will make your actions. Watch your actions, for they will make your… destiny"</b><br>
            <i>("Perhatikan pikiranmu, karena itu akan menentukan tindakanmu. Jagalah tindakanmu, karena itu akan menentukan… takdirmu.")</i>
            <footer style="display: flex; justify-content: flex-end; align-items: center; margin-top: 10px;">
                <span style="margin-left: 10px;">— Margaret Thatcher </span>
                <img src="assets/img/Margaret-Thatcher.jpg" alt="Margaret Thatcher" class="profile-pic">
            </footer>
        </blockquote>
    </div>

    <div class="content">
        <p>ESTJ adalah pemimpin yang praktis, logis, dan berorientasi pada hasil, yang senang menjaga keteraturan dan tradisi.</p>
        </div>

    <div class="content">
        <h2 class="left-aligned" style="color: #164791;"><b>Karakteristik<br></h2></b>
        <p>
        Pemimpin yang Tegas: Mereka suka mengambil alih situasi dan memastikan semuanya berjalan sesuai rencana.
        <br>
        Berorientasi pada Tradisi: ESTJ menghormati aturan dan norma yang sudah ada.
        <br>
        Logis dan Objektif: Keputusan mereka didasarkan pada fakta dan logika, bukan emosi.
        <br>
        Terorganisir: Mereka memiliki kemampuan alami untuk menciptakan struktur dan keteraturan.
        <br>
        Percaya Diri: ESTJ yakin pada kemampuan mereka dan tidak takut mengambil tindakan.
        <br>
        Berorientasi pada Hasil: Mereka bekerja keras untuk mencapai target dan efisiensi.
        <br>
        Praktis: ESTJ fokus pada solusi yang nyata dan dapat diterapkan.
        </p>
    </div>

    <div class="content">
        <h2 class="left-aligned" style="color: #164791"><b>Kelebihan</h2></b>
        <p>
        <b>(1.) Keterampilan Kepemimpinan yang Kuat:</b><br>Pemimpin yang efektif mampu berkomunikasi secara bijaksana, ringkas, dan efektif. 
        Pemimpin yang kuat membuat keputusan yang objektif dan teruji untuk mengarahkan organisasi mencapai tujuannya.
        Pemimpin yang kuat memiliki keterampilan berpikir strategis dan kritis. ESTJ tahu cara memotivasi orang lain untuk bekerja bersama mencapai tujuan.
        </p>
        <p>
        <b>(2.) Keandalan Tinggi:</b> ESTJ adalah orang yang dapat diandalkan untuk menyelesaikan tugas.
        </p>
        <p><b>(3.) Sangat Terorganisir:</b><br> Semua aktivitas berjalan sesuai rencana dan tidak ada hal yang menghambat pekerjaan. 
            ESTJ biasanya sangat terorganisir, teliti, dan terstruktur. Mereka suka membuat rencana untuk setiap hal dalam hidupnya, 
            mereka menjaga efisiensi di lingkungan kerja atau rumah.
        </p>
        <p><b>(4.) Berprinsip:</b><br>Sikap memiliki keyakinan yang kuat pada suatu hal, dan memiliki dasar yang kuat dari keyakinan tersebut.
            ESTJ menghormati nilai-nilai dan etika yang mereka anggap penting.
        </p>
        <p><b>(5.) Komunikasi yang Jelas:</b><br>Kemampuan untuk menyampaikan pesan dengan jelas dan efektif sehingga dipahami oleh lawan bicara. 
            ESTJ mampu menyampaikan ide dan instruksi dengan efektif.
        </p>
    </div>

    <div class="content">
        <h2 class="left-aligned" style="color: #164791"><b>Kekurangan</h2></b>
        <p><b>(1.) Cenderung Kaku:</b> Kadang terlalu berpegang pada aturan atau tradisi, sehingga sulit beradaptasi.
        </p>
        <p><b>(2.) Kurang Peka terhadap Perasaan:</b> Fokus pada logika membuat mereka sulit memahami kebutuhan emosional orang lain.
        </p>
        <p><b>(3.) Perfeksionis:</b> Mereka bisa menjadi terlalu kritis terhadap diri sendiri dan orang lain.
        </p>
        <p><b>(4.) Terlalu Mendominasi:</b> ESTJ bisa dianggap terlalu memaksakan kehendak dalam lingkungan kelompok.
        </p>
        <p><b>(5.) Tidak Suka Ketidakpastian:</b>: Mereka merasa tidak nyaman jika menghadapi situasi yang ambigu.
        </p>
    </div>

    <div class="content">
        <h2 class="left-aligned" style="color:#164791"><b>Karir yang cocok untuk ESTJ</b></h2>
        <p>ESTJ unggul dalam pekerjaan yang membutuhkan kepemimpinan, keteraturan, dan kemampuan menyelesaikan masalah praktis. Karir yang cocok meliputi:</p>
        <ul>
        <li><strong>Manajer atau Eksekutif:</strong><br>Keterampilan organisasi mereka cocok untuk posisi kepemimpinan.</li>
        <li><strong>Pengacara:</strong><br>ESTJ yang berorientasi pada fakta dapat unggul dalam bidang hukum.</li>
        <li><strong>Akuntan atau Auditor:</strong><br>Kemampuan mereka dalam mengelola detail sangat bermanfaat di bidang ini.</li>
        <li><strong>Militer atau Penegak Hukum:</strong><br>ESTJ suka disiplin dan struktur yang ketat.</li>
        <li><strong>Guru atau Kepala Sekolah:</strong><br>Mereka dapat memimpin dan mendisiplinkan lingkungan pendidikan.</li>
        <li><strong>Insinyur atau Analis Proses:</strong><br>Mereka suka menciptakan solusi efisien untuk masalah teknis.</li>
        <li><strong>Politikus atau Administrator Publik:</strong><br>ESTJ menyukai peran yang memengaruhi masyarakat secara langsung.</li>
    </ul>
    </div>

    <div class="content">
        <h2 class="left-aligned" style="color:#164791"><b>Pasanngan yang cocok untuk ESTJ</b></h2>
        <p>Pasangan yang cocok bagi ESTJ adalah individu yang dapat menghormati sifat kepemimpinan mereka, memberikan dukungan emosional, dan menjaga stabilitas hubungan.</p>
        <ul>
        <li><strong>ISFJ ("The Defender"):</strong><br>ISFJ melengkapi sifat tegas ESTJ dengan empati dan dukungan emosional.</li>
        <li><strong>ISTJ ("The Logistician"):</strong><br>ISTJ dan ESTJ berbagi nilai-nilai tradisional dan kepraktisan.</li>
        <li><strong>ESFJ ("The Consul"):</strong><br>ESFJ membawa keseimbangan sosial dan perhatian pada hubungan, melengkapi sifat ESTJ yang fokus pada tugas.</li>
        </ul>
        <p><b>Kunci Hubungan:</b> ESTJ membutuhkan pasangan yang memahami komitmen mereka terhadap tanggung jawab dan menghargai stabilitas hubungan.</p>
    </div>

    <div class="content">
        <h2 class="left-aligned" style="color: #164791"><b>Fakta Menarik tentang ESTJ</h2></b>
        <p>(1.) ESTJ mencakup sekitar 8-12% dari populasi, menjadikannya salah satu tipe kepribadian yang umum.
        </p>
        <p>(2.) Mereka sering disebut "pilar masyarakat" karena peran mereka dalam menjaga tradisi dan struktur sosial.
        </p>
        <p>(3.) ESTJ sangat suka membuat jadwal dan memastikan segala sesuatu berjalan sesuai rencana.
        </p>
        <p>(4.) Mereka sering menjadi tokoh otoritas di lingkungan kerja atau keluarga.
        </p>
        <p>(5.) ESTJ cenderung menghargai kesederhanaan dan kepraktisan dalam kehidupan sehari-hari.
        </p>
    </div>
</body>
@endsection