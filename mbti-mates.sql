-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2025 at 08:10 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mbti-mates`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_10_22_080645_create_questions_table', 1),
(6, '2024_10_22_080714_create_reports_table', 1),
(7, '2024_11_07_015008_create_user_answers_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pertanyaan` varchar(255) NOT NULL,
  `jawaban_satu` varchar(255) NOT NULL,
  `jawaban_dua` varchar(255) NOT NULL,
  `type_satu` varchar(2) NOT NULL,
  `type_dua` varchar(2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `pertanyaan`, `jawaban_satu`, `jawaban_dua`, `type_satu`, `type_dua`, `created_at`, `updated_at`) VALUES
(1, 'Kamu adalah tipikal orang yang?', 'Spontan, Fleksibel, tidak diikat waktu', 'Terencana dan memiliki deadline jelas', 'P', 'J', NULL, NULL),
(2, 'Kamu adalah tipikal orang yang?', 'Lebih memilih berkomunikasi dengan menulis', 'Lebih memilih berkomunikasi dengan bicara', 'I', 'E', NULL, NULL),
(3, 'Kamu adalah tipikal orang yang?', 'Tidak menyukai hal-hal yang bersifat mendadak dan di luar perencanaan', 'Perubahan mendadak tidak jadi masalah', 'J', 'P', NULL, NULL),
(4, 'Kamu adalah tipikal orang yang?', 'Obyektif', 'Subyektif', 'T', 'F', NULL, NULL),
(5, 'Kamu adalah tipikal orang yang?', 'Menemukan dan mengembangkan ide dengan mendiskusikannya', 'Menemukan dan mengembangkan ide dengan merenungkan', 'E', 'I', NULL, NULL),
(6, 'Kamu adalah tipikal orang yang?', 'Bergerak dari gambaran umum baru ke detail', 'Bergerak dari detail ke gambaran umum sebagai kesimpulan akhir', 'N', 'S', NULL, NULL),
(7, 'Kamu adalah tipikal orang yang?', 'Berorientasi pada dunia eksternal (kegiatan, orang)', 'Berorientasi pada dunia internal (memori, pemikiran, ide)', 'E', 'I', NULL, NULL),
(8, 'Kamu adalah tipikal orang yang?', 'Berbicara mengenai masalah yang dihadapi hari ini dan langkah-langkah praktis mengatasinya', 'Berbicara mengenai visi masa depan dan konsep-konsep mengenai visi tersebut', 'S', 'N', NULL, NULL),
(9, 'Kamu adalah tipikal orang yang?', 'Diyakinkan dengan penjelasan yang menyentuh perasaan', 'Diyakinkan dengan penjelasan yang masuk akal', 'F', 'T', NULL, NULL),
(10, 'Kamu adalah tipikal orang yang?', 'Fokus pada sedikit hobi namun mendalam', 'Fokus pada banyak hobi secara luas dan umum', 'I', 'E', NULL, NULL),
(11, 'Kamu adalah tipikal orang yang?', 'Tertutup dan mandiri', 'Sosial dan ekspresif', 'I', 'E', NULL, NULL),
(12, 'Kamu adalah tipikal orang yang?', 'Aturan, jadwal dan target sangat mengikat dan membebani', 'Aturan, jadwal dan target akan sangat membantu dan memperjelas tindakan', 'P', 'J', NULL, NULL),
(13, 'Kamu adalah tipikal orang yang?', 'Menggunakan pengalaman sebagai pedoman', 'Menggunakan imajinasi dan perenungan sebagai pedoman', 'S', 'N', NULL, NULL),
(14, 'Kamu adalah tipikal orang yang?', 'Berorientasi tugas dan job description', 'Berorientasi pada manusia dan hubungan', 'T', 'F', NULL, NULL),
(15, 'Kamu adalah tipikal orang yang?', 'Pertemuan dengan orang lain dan aktivitas sosial melelahkan', 'Bertemu orang dan aktivitas sosial membuat bersemangat', 'I', 'E', NULL, NULL),
(16, 'Kamu adalah tipikal orang yang?', 'SOP sangat membantu', 'SOP sangat membosankan', 'S', 'N', NULL, NULL),
(17, 'Kamu adalah tipikal orang yang?', 'Mengambil keputusan berdasar logika dan aturan main', 'Mengambil keputusan berdasar perasaan pribadi dan kondisi orang lain', 'T', 'F', NULL, NULL),
(18, 'Kamu adalah tipikal orang yang?', 'Bebas dan dinamis', 'Prosedural dan tradisional', 'N', 'S', NULL, NULL),
(19, 'Kamu adalah tipikal orang yang?', 'Berorientasi pada hasil', 'Berorientasi pada proses', 'J', 'P', NULL, NULL),
(20, 'Kamu adalah tipikal orang yang?', 'Beraktifitas sendirian di rumah menyenangkan', 'Beraktifitas sendirian di rumah membosankan', 'I', 'E', NULL, NULL),
(21, 'Kamu adalah tipikal orang yang?', 'Membiarkan orang lain bertindak bebas asalkan tujuan tercapai', 'Mengatur orang lain dengan tata tertib agar tujuan tercapai', 'P', 'J', NULL, NULL),
(22, 'Kamu adalah tipikal orang yang?', 'Memilih ide inspiratif lebih penting daripada fakta', 'Memilih fakta lebih penting daripada ide inspiratif', 'N', 'S', NULL, NULL),
(23, 'Kamu adalah tipikal orang yang?', 'Mengemukakan tujuan dan sasaran lebih dahulu', 'Mengemukakan kesepakatan terlebih dahulu', 'T', 'F', NULL, NULL),
(24, 'Kamu adalah tipikal orang yang?', 'Fokus pada target dan mengabaikan hal-hal baru', 'Memperhatikan hal-hal baru dan siap menyesuaikan diri serta mengubah target', 'J', 'P', NULL, NULL),
(25, 'Kamu adalah tipikal orang yang?', 'Kontinuitas dan stabilitas lebih diutamakan', 'Perubahan dan variasi lebih diutamakan', 'S', 'N', NULL, NULL),
(26, 'Kamu adalah tipikal orang yang?', 'Pendirian masih bisa berubah tergantung situasi nantinya', 'Berpegang teguh pada pendirian', 'P', 'J', NULL, NULL),
(27, 'Kamu adalah tipikal orang yang?', 'Bertindak step by step dengan timeframe yang jelas', 'Bertindak dengan semangat tanpa menggunakan timeframe', 'S', 'N', NULL, NULL),
(28, 'Kamu adalah tipikal orang yang?', 'Berinisiatif tinggi hampir dalam berbagai hal meskipun tidak berhubungan dengan dirinya', 'Berinisiatif bila situasi memaksa atau berhubungan dengan kepentingan sendiri', 'E', 'I', NULL, NULL),
(29, 'Kamu adalah tipikal orang yang?', 'Lebih memilih tempat yang tenang dan pribadi untuk berkonsentrasi', 'Lebih memilih tempat yang ramai dan banyak interaksi / aktifitas', 'I', 'E', NULL, NULL),
(30, 'Kamu adalah tipikal orang yang?', 'Menganalisa', 'Berempati', 'T', 'F', NULL, NULL),
(31, 'Kamu adalah tipikal orang yang?', 'Berpikir secara matang sebelum bertindak', 'Berani bertindak tanpa terlalu lama berfikir', 'I', 'E', NULL, NULL),
(32, 'Kamu adalah tipikal orang yang?', 'Menghargai seseorang karena sifat dan perilakunya', 'Menghargai seseorang karena skill dan faktor teknis', 'F', 'T', NULL, NULL),
(33, 'Kamu adalah tipikal orang yang?', 'Merasa nyaman bila situasi tetap terbuka terhadap pilihan-pilihan lain', 'Merasa tenang bila semua sudah diputuskan', 'P', 'J', NULL, NULL),
(34, 'Kamu adalah tipikal orang yang?', 'Menarik kesimpulan dengan lama dan hati-hati', 'menarik kesimpulan dengan cepat sesuai naluri', 'S', 'N', NULL, NULL),
(35, 'Kamu adalah tipikal orang yang?', 'Mengekspresikan semangat', 'Menyimpan semangat dalam hati', 'E', 'I', NULL, NULL),
(36, 'Kamu adalah tipikal orang yang?', 'Mengklarifikasi ide dan teori sebelum dipraktekkan', 'Memahami ide dan teori saat mempraktekkannya langsung', 'S', 'N', NULL, NULL),
(37, 'Kamu adalah tipikal orang yang?', 'Melibatkan perasaan itu tidak profesional', 'Terlalu kaku pada peraturan dan pekerjaan itu kejam', 'T', 'F', NULL, NULL),
(38, 'Kamu adalah tipikal orang yang?', 'Mencari kesempatan untuk berkomunikasi secara perorangan', 'Memilih berkomunikasi pada sekelompok orang', 'I', 'E', NULL, NULL),
(39, 'Kamu adalah tipikal orang yang?', 'Yang penting situasi harmonis terjaga', 'Yang penting tujuan tercapai', 'F', 'T', NULL, NULL),
(40, 'Kamu adalah tipikal orang yang?', 'Ketidakpastian itu seru, menegangkan dan membuat hati lebih senang', 'Ketidakpastian membuat bingung dan meresahkan', 'P', 'J', NULL, NULL),
(41, 'Kamu adalah tipikal orang yang?', 'Berfokus pada masa kini (apa yang bisa diperbaiki sekarang)', 'Berfokus pada masa depan (apa yang mungkin dicapai di masa depan)', 'S', 'N', NULL, NULL),
(42, 'Kamu adalah tipikal orang yang?', 'Mempertanyakan', 'Mengakomodasi', 'T', 'F', NULL, NULL),
(43, 'Kamu adalah tipikal orang yang?', 'Secara konsisten mengamati dan mengingat detail', 'Mengamati dan mengingat detail hanya bila berhubungan dengan pola', 'S', 'N', NULL, NULL),
(44, 'Kamu adalah tipikal orang yang?', 'Situasi last minute membuat bersemangat dan memunculkan potensi', 'Situasi last minute sangat menyiksa, membuat stress dan merupakan kesalahan', 'P', 'J', NULL, NULL),
(45, 'Kamu adalah tipikal orang yang?', 'Lebih suka komunikasi tidak langsung (telp, surat, e-mail)', 'Lebih suka komunikasi langsung (tatap muka)', 'I', 'E', NULL, NULL),
(46, 'Kamu adalah tipikal orang yang?', 'Praktis', 'Konseptual', 'S', 'N', NULL, NULL),
(47, 'Kamu adalah tipikal orang yang?', 'Perubahan adalah musuh', 'Perubahan adalah semangat hidup', 'J', 'P', NULL, NULL),
(48, 'Kamu adalah tipikal orang yang?', 'Sering dianggap keras kepala', 'Sering dianggap terlalu memihak', 'T', 'F', NULL, NULL),
(49, 'Kamu adalah tipikal orang yang?', 'Bersemangat saat menolong orang keluar dari kesalahan dan meluruskan', 'Bersemangat saat mengkritik dan menemukan kesalahan', 'T', 'F', NULL, NULL),
(50, 'Kamu adalah tipikal orang yang?', 'Bertindak sesuai situasi dan kondisi yang terjadi saat itu', 'Bertindak sesuai apa yang sudah direncanakan', 'P', 'J', NULL, NULL),
(51, 'Kamu adalah tipikal orang yang?', 'Menggunakan keterampilan yang sudah dikuasai', 'Menyukai tantangan untuk menguasai keterampilan baru', 'S', 'N', NULL, NULL),
(52, 'Kamu adalah tipikal orang yang?', 'Membangun ide pada saat berbicara', 'Membangun ide dengan matang baru membicarakannya', 'E', 'I', NULL, NULL),
(53, 'Kamu adalah tipikal orang yang?', 'Memilih cara yang sudah ada dan sudah terbukti', 'Memilih cara yang unik dan belum dipraktekkan orang lain', 'S', 'N', NULL, NULL),
(54, 'Kamu adalah tipikal orang yang?', 'Hidup harus sudah diatur dari awal', 'Hidup seharusnya mengalir sesuai kondisi', 'J', 'P', NULL, NULL),
(55, 'Kamu adalah tipikal orang yang?', 'Standar harus ditegakkan di atas segalanya (itu menunjukkan kehormatan dan harga diri)', 'Perasaan manusia lebih penting dari sekadar standar (yang adalah benda mati)', 'T', 'F', NULL, NULL),
(56, 'Kamu adalah tipikal orang yang?', 'Daftar dan checklist adalah panduan penting', 'Daftar dan checklist adalah tugas dan beban', 'J', 'P', NULL, NULL),
(57, 'Kamu adalah tipikal orang yang?', 'Menuntut perlakuan yang adil dan sama pada semua orang', 'Menuntut perlakuan khusus sesuai karakteristik masing-masing orang', 'T', 'F', NULL, NULL),
(58, 'Kamu adalah tipikal orang yang?', 'Mementingkan sebab-akibat', 'Mementingkan nilai-nilai personal', 'T', 'F', NULL, NULL),
(59, 'Kamu adalah tipikal orang yang?', 'Puas ketika mampu beradaptasi dengan momentum yang terjadi', 'Puas ketika mampu menjalankan semuanya sesuai rencana', 'P', 'J', NULL, NULL),
(60, 'Kamu adalah tipikal orang yang?', 'Spontan, Easy Going, fleksibel', 'Berhati-hati, penuh pertimbangan, kaku', 'E', 'I', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `P` int(11) NOT NULL,
  `I` int(11) NOT NULL,
  `J` int(11) NOT NULL,
  `T` int(11) NOT NULL,
  `E` int(11) NOT NULL,
  `N` int(11) NOT NULL,
  `S` int(11) NOT NULL,
  `F` int(11) NOT NULL,
  `result` char(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_answers`
--

CREATE TABLE `user_answers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question_id` bigint(20) UNSIGNED NOT NULL,
  `report_id` bigint(20) UNSIGNED NOT NULL,
  `answer` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reports_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_answers`
--
ALTER TABLE `user_answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_answers_question_id_foreign` (`question_id`),
  ADD KEY `user_answers_report_id_foreign` (`report_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_answers`
--
ALTER TABLE `user_answers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reports`
--
ALTER TABLE `reports`
  ADD CONSTRAINT `reports_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_answers`
--
ALTER TABLE `user_answers`
  ADD CONSTRAINT `user_answers_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_answers_report_id_foreign` FOREIGN KEY (`report_id`) REFERENCES `reports` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
