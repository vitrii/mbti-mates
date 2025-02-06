@extends('layouts.theme')

@section('kepribadian-istj')
<title>The Logistician - ISTJ</title>
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


<!-- Hero-ISTJ Section -->
<section id="hero-ISTJ" class="hero-ISTJ section">

<div class="container" data-aos="fade-up" data-aos-delay="100">

  <div class="row align-items-center">
    <div class="col-lg-6">
      <div class="hero-ISTJ-content" data-aos="fade-up" data-aos-delay="200">
        <h1 style="color:#fefeff;">
          The Logistician <br>
        </h1>
        <h2><b>Kepribadian ISTJ</b><br></h2>

        <p style="color: #fefeff;">
            ISTJ adalah singkatan dari Introverted, Sensing, Thinking, Judging. 
            ISTJ sering disebut sebagai "The Logistician" atau "The Inspector", dikenal sebagai individu 
            yang bertanggung jawab, berorientasi pada detail, dan memiliki etos kerja yang kuat. Mereka 
            cenderung praktis dan mengutamakan keteraturan serta kejujuran.
        </p>
      </div>
    </div>

    <div class="col-lg-6">
      <div class="hero-ISTJ-image" data-aos="zoom-out" data-aos-delay="300">
        <img src="assets/img/illustration-1.webp" alt="Hero-ISTJ Image" class="img-fluid">

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

<!-- /Hero-ISTJ Section -->

    <div class="content">
        <h2 class="centered" style="color: #164791;"><b>Ahli Logistik</h2></b>
        <blockquote>
            <b>"Discipline is the soul of an army. It makes small numbers formidable; procures success to the weak, and esteem to all."</b><br>
            <i>("Disiplin adalah jiwa dari seorang tentara. Hal ini membuat jumlah yang kecil menjadi besar; mendatangkan keberhasilan bagi yang lemah, dan penghargaan bagi semua orang.")</i>
            <footer style="display: flex; justify-content: flex-end; align-items: center; margin-top: 10px;">
                <span style="margin-left: 10px;">— George Washington </span>
                <img src="assets/img/George-Washington.jpg" alt="George Washington" class="profile-pic">
            </footer>
        </blockquote>
    </div>

    <div class="content">
        <p>ISTJ adalah orang yang disiplin, logis, dan andal, yang menghargai tradisi serta fokus pada pencapaian tugas dengan akurat dan efisien.</p>
        </div>

    <div class="content">
        <h2 class="left-aligned" style="color: #164791;"><b>Karakteristik<br></h2></b>
        <p>
        Praktis dan Terorganisir: ISTJ suka bekerja secara sistematis dan menghargai struktur.
        <br>
        Setia dan Bertanggung Jawab: Mereka dapat diandalkan untuk menyelesaikan tugas dengan baik.
        <br>
        Detail-Oriented: ISTJ memperhatikan detail kecil yang sering diabaikan orang lain.
        <br>
        Berpikir Logis: Mereka membuat keputusan berdasarkan fakta dan logika, bukan emosi.
        <br>
        Berorientasi pada Tradisi: ISTJ sering menghormati nilai-nilai tradisional dan aturan yang ada.
        <br>
        Independen: Mereka mandiri dan lebih suka bekerja sendiri daripada bergantung pada orang lain.
        <br>
        Kurang Ekspresif Secara Emosional: Cenderung tidak terlalu mengekspresikan perasaan mereka secara langsung.
        </p>
    </div>

    <div class="content">
        <h2 class="left-aligned" style="color: #164791"><b>Kelebihan</h2></b>
        <p>
        <b>(1.) Sangat Andal:</b> Jika diberi tanggung jawab, mereka akan melakukannya dengan sempurna.
        </p>
        <p>
        <b>(2.) Konsisten:</b> ISTJ selalu berpegang pada prinsip dan nilai mereka.
        </p>
        <p><b>(3.) Efisien:</b> Mereka tahu cara memanfaatkan waktu dan sumber daya secara maksimal.
        </p>
        <p><b>(4.) Berfokus pada Solusi:</b> ISTJ sangat baik dalam memecahkan masalah praktis.
        </p>
        <p><b>(5.) Setia:</b> Mereka menghargai hubungan yang stabil dan dapat dipercaya.
        </p>
    </div>

    <div class="content">
        <h2 class="left-aligned" style="color: #164791"><b>Kekurangan</h2></b>
        <p><b>(1.) Kurang Fleksibel:</b> Mereka kadang-kadang terlalu kaku dalam cara berpikir dan bekerja.
        </p>
        <p><b>(2.) Cenderung Terlalu Kritis:</b> ISTJ bisa terlalu fokus pada kesalahan kecil.
        </p>
        <p><b>(3.) Kurang Sensitif terhadap Emosi Orang Lain:</b> Mereka lebih fokus pada fakta daripada perasaan.
        </p>
        <p><b>(4.) Sulit Beradaptasi dengan Perubahan Cepat:</b> ISTJ lebih nyaman dengan rutinitas.
        </p>
        <p><b>(5.) Perfeksionis:</b>Tuntutan terhadap diri sendiri dan orang lain kadang terlalu tinggi.
        </p>
    </div>

    <div class="content">
        <h2 class="left-aligned" style="color:#164791"><b>Karir yang cocok</b></h2>
        <p>ISTJ cocok untuk pekerjaan yang membutuhkan organisasi, perhatian terhadap detail, dan keteraturan. Beberapa karir ideal:</p>
        <ul>
        <li><strong>Akuntan atau Auditor:</strong><br>Fokus pada angka dan aturan cocok untuk ISTJ.</li>
        <li><strong>Pekerjaan Militer:</strong><br>Disiplin dan struktur adalah kekuatan ISTJ.</li>
        <li><strong>Pengacara atau Hakim:</strong><br>ISTJ menghargai keadilan dan analisis logis.</li>
        <li><strong>Administrator atau Manajer Operasi:</strong><br>ISTJ ahli dalam memastikan semuanya berjalan lancar.</li>
        <li><strong>Arsitek atau Insinyur:</strong><br>Keahlian mereka dalam perencanaan dan presisi sangat bermanfaat.</li>
        <li><strong>Pustakawan:</strong><br>ISTJ menghargai ketertiban dan sistem pengorganisasian informasi.</li>
        <li><strong>Dokter atau Apoteker:</strong><br>Kemampuan ISTJ untuk mengikuti prosedur dan perhatian terhadap detail sangat penting di bidang ini.</li>
    </ul>
    </div>

    <div class="content">
        <h2 class="left-aligned" style="color:#164791"><b>Pasangan Ideal untuk ISTJ</b></h2>
        <p>Pasangan yang cocok dengan ISTJ biasanya adalah tipe yang menghargai stabilitas, tanggung jawab, dan struktur hubungan. Tipe yang sering dianggap ideal:</p>
        <ul>
        <li><strong>ESFP ("The Entertainer"):</strong><br>ESFP memberikan keceriaan dan spontanitas yang melengkapi ketenangan ISTJ.</li>
        <li><strong>ESTP ("The Entrepreneur"):</strong><br>ESTP membawa energi dan fleksibilitas dalam hubungan, sementara ISTJ memberikan stabilitas.</li>
        <li><strong>ISFJ ("The Defender"):</strong><br>Sama-sama menghargai nilai-nilai tradisional dan stabilitas.</li>
        </ul>
        <p><b>Kunci Hubungan:</b> ISTJ membutuhkan pasangan yang dapat menghormati nilai mereka akan kejujuran dan dedikasi, serta memberikan dukungan emosional secara halus.
        </p>
    </div>

    <div class="content">
        <h2 class="left-aligned" style="color: #164791"><b>Fakta Menarik tentang ISTJ</h2></b>
        <p>(1.) ISTJ mencakup sekitar 13% dari populasi, membuatnya salah satu tipe MBTI yang paling umum.
        </p>
        <p>(2.) Mereka sering menjadi tulang punggung organisasi karena sifat mereka yang andal dan terorganisir.
        </p>
        <p>(3.) ISTJ lebih suka hubungan yang jangka panjang dan serius daripada hubungan yang kasual.
        </p>
        <p>(4.) Mereka sangat menghargai waktu dan menganggap keterlambatan sebagai tanda tidak hormat.
        </p>
        <p>(5.) Banyak tokoh sejarah yang sukses dan disiplin, seperti George Washington dan Warren Buffett, adalah ISTJ.
        </p>
    </div>
</body>
@endsection