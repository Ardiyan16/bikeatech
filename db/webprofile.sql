-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Jun 2022 pada 12.28
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webprofile`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `role` varchar(2) DEFAULT NULL,
  `status` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `role`, `status`) VALUES
(1, 'admin', 'admin', '2', '1'),
(2, 'superadmin', 'superadmin', '1', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `date_blog` date DEFAULT NULL,
  `category` varchar(150) DEFAULT NULL,
  `tag` varchar(200) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `images` varchar(500) NOT NULL,
  `writer` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `blog`
--

INSERT INTO `blog` (`id`, `title`, `date_blog`, `category`, `tag`, `description`, `images`, `writer`) VALUES
(1, 'Kenapa Harus Vue.js ?', '2022-06-12', 'Website Developer', 'Web Developer, Frontend Developer, Javascript, Vue Js', '<p id=\"daab\" class=\"pw-post-body-paragraph km kn ja ko b kp kq kr ks kt ku kv kw kx ky kz la lb lc ld le lf lg lh li lj it gc\" style=\"box-sizing: inherit; margin: 2em 0px -0.46em; color: rgb(41, 41, 41); word-break: break-word; line-height: 32px; letter-spacing: -0.003em; font-family: charter, Georgia, Cambria, \"Times New Roman\", Times, serif; font-size: 20px;\">Vue (cara pengucapannya /vjuː/, seperti “<em class=\"lk\" style=\"box-sizing: inherit;\">view”</em>) adalah sebuah kerangka kerja nan progresif untuk membangun antarmuka pengguna. Tidak seperti beberapa kerangka kerja monolitik yang lain, Vue dirancang dari dasar sekali agar dapat diadopsi secara bertahap. Pustaka intinya difokuskan pada <em class=\"lk\" style=\"box-sizing: inherit;\">layer </em>tampilan saja, dan sangat mudah untuk diintegrasikan dengan pustaka yang lain atau dengan proyek yang sudah ada.</p><p id=\"f7ba\" class=\"pw-post-body-paragraph km kn ja ko b kp kq kr ks kt ku kv kw kx ky kz la lb lc ld le lf lg lh li lj it gc\" style=\"box-sizing: inherit; margin: 2em 0px -0.46em; color: rgb(41, 41, 41); word-break: break-word; line-height: 32px; letter-spacing: -0.003em; font-family: charter, Georgia, Cambria, \"Times New Roman\", Times, serif; font-size: 20px;\">Vue.js, sebagai pendatang baru di dunia Front-end Development sukses berada di jajaran Top Front-End Framework, sejajar atau bahkan melebihi popularitas <em class=\"lk\" style=\"box-sizing: inherit;\">top framework</em> lainnya seperti <span class=\"ko jb\" style=\"box-sizing: inherit; font-weight: 700;\">React </span>dan <span class=\"ko jb\" style=\"box-sizing: inherit; font-weight: 700;\">Angular</span>. Lantas, alasan apa yang membuat orang memilih <span class=\"ko jb\" style=\"box-sizing: inherit; font-weight: 700;\">Vue </span>sebagai <em class=\"lk\" style=\"box-sizing: inherit;\">front-end framework</em> alih-alih dua pendahulunya itu? Ini dia ulasannya.</p><h1 id=\"4ace\" class=\"ll lm ja bn ln lo lp lq lr ls lt lu lv lw lx ly lz ma mb mc md me mf mg mh mi gc\" style=\"box-sizing: inherit; margin: 3.14em 0px -0.37em; font-family: sohne, \"Helvetica Neue\", Helvetica, Arial, sans-serif; color: rgb(41, 41, 41); line-height: 28px; font-weight: 600; font-size: 22px;\">1. Sederhana</h1><p id=\"9042\" class=\"pw-post-body-paragraph km kn ja ko b kp mj kr ks kt mk kv kw kx ml kz la lb mm ld le lf mn lh li lj it gc\" style=\"box-sizing: inherit; margin: 0.86em 0px -0.46em; color: rgb(41, 41, 41); word-break: break-word; line-height: 32px; letter-spacing: -0.003em; font-family: charter, Georgia, Cambria, \"Times New Roman\", Times, serif; font-size: 20px;\">Alasan pertama mengapa harus memakai Vue.js dibandingkan <em class=\"lk\" style=\"box-sizing: inherit;\">front-end framework</em> lainnya adalah Vue.js itu simpel dan tidak <em class=\"lk\" style=\"box-sizing: inherit;\">ribet</em>. Mulai dari sintaks yang pendek, <em class=\"lk\" style=\"box-sizing: inherit;\">data binding</em> yang mudah, <em class=\"lk\" style=\"box-sizing: inherit;\">two-way data binding</em> yang <em class=\"lk\" style=\"box-sizing: inherit;\">powerful</em>, Vue Component, sampai integrasi dengan <em class=\"lk\" style=\"box-sizing: inherit;\">back-end framework</em> yang sangat mudah.</p><p id=\"63c8\" class=\"pw-post-body-paragraph km kn ja ko b kp kq kr ks kt ku kv kw kx ky kz la lb lc ld le lf lg lh li lj it gc\" style=\"box-sizing: inherit; margin: 2em 0px -0.46em; color: rgb(41, 41, 41); word-break: break-word; line-height: 32px; letter-spacing: -0.003em; font-family: charter, Georgia, Cambria, \"Times New Roman\", Times, serif; font-size: 20px;\">Menambahkan Vue.js dalam proyek yang sudah ada juga relatif mudah. Kita bisa mulai meng-<em class=\"lk\" style=\"box-sizing: inherit;\">coding</em> Vue.js tanpa harus tahu JSX, ES2015, ataupun Webpack. Selama kita familiar dengan HTML dan JavaScript, kita bisa membaca dokumentasinya dan mulai membuat sesuatu yang mendasar dalam waktu satu hari, yang mana ini menjadi keuntungan besar bagi pengembangan web yang notabene membutuhkan penyelesaian cepat.</p><h1 id=\"288f\" class=\"ll lm ja bn ln lo lp lq lr ls lt lu lv lw lx ly lz ma mb mc md me mf mg mh mi gc\" style=\"box-sizing: inherit; margin: 3.14em 0px -0.37em; font-family: sohne, \"Helvetica Neue\", Helvetica, Arial, sans-serif; color: rgb(41, 41, 41); line-height: 28px; font-weight: 600; font-size: 22px;\">2. Fleksibel</h1><p id=\"b907\" class=\"pw-post-body-paragraph km kn ja ko b kp mj kr ks kt mk kv kw kx ml kz la lb mm ld le lf mn lh li lj it gc\" style=\"box-sizing: inherit; margin: 0.86em 0px -0.46em; color: rgb(41, 41, 41); word-break: break-word; line-height: 32px; letter-spacing: -0.003em; font-family: charter, Georgia, Cambria, \"Times New Roman\", Times, serif; font-size: 20px;\">Dengan Vue, kita bisa membuat aplikasi mulai dari yang berskala kecil sampai yang berskala besar. Kita bisa membuat aplikasi kecil dengan sangat cepat dan langsung menjalankannya di browser, atau bila ingin kita juga bisa membuat aplikasi yang sangat kompleks menggunakan ES6, Vuex, components, dan routing.</p><p id=\"0ec7\" class=\"pw-post-body-paragraph km kn ja ko b kp kq kr ks kt ku kv kw kx ky kz la lb lc ld le lf lg lh li lj it gc\" style=\"box-sizing: inherit; margin: 2em 0px -0.46em; color: rgb(41, 41, 41); word-break: break-word; line-height: 32px; letter-spacing: -0.003em; font-family: charter, Georgia, Cambria, \"Times New Roman\", Times, serif; font-size: 20px;\">Vue sangat fleksibel untuk kita tulis. Misalnya, kita bisa menggunakan HTML, JavaScript, atau bahkan JSX sebagai template. Untuk penulisan skripnya juga sangat fleksibel. Kita bisa memakai ES5, ES6, atau bahkan TypeScript.</p><p id=\"2c97\" class=\"pw-post-body-paragraph km kn ja ko b kp kq kr ks kt ku kv kw kx ky kz la lb lc ld le lf lg lh li lj it gc\" style=\"box-sizing: inherit; margin: 2em 0px -0.46em; color: rgb(41, 41, 41); word-break: break-word; line-height: 32px; letter-spacing: -0.003em; font-family: charter, Georgia, Cambria, \"Times New Roman\", Times, serif; font-size: 20px;\">Vue juga memberi kebebasan kepada developer tentang bagaimana kita menstruktur aplikasi kita. Walaupun untuk beberapa hal seperti struktur folder, hasil generate Vue CLI sudah diatur sedemikian rupa untuk memudahkan developer dalam mengembangkan aplikasi. Namun, Vue tidak membatasi kreativitas para developer dalam mengembangkan aplikasinya.</p><h1 id=\"6bcf\" class=\"ll lm ja bn ln lo lp lq lr ls lt lu lv lw lx ly lz ma mb mc md me mf mg mh mi gc\" style=\"box-sizing: inherit; margin: 3.14em 0px -0.37em; font-family: sohne, \"Helvetica Neue\", Helvetica, Arial, sans-serif; color: rgb(41, 41, 41); line-height: 28px; font-weight: 600; font-size: 22px;\">3. Dokumentasi yang Komprehensif</h1><p id=\"45b2\" class=\"pw-post-body-paragraph km kn ja ko b kp mj kr ks kt mk kv kw kx ml kz la lb mm ld le lf mn lh li lj it gc\" style=\"box-sizing: inherit; margin: 0.86em 0px -0.46em; color: rgb(41, 41, 41); word-break: break-word; line-height: 32px; letter-spacing: -0.003em; font-family: charter, Georgia, Cambria, \"Times New Roman\", Times, serif; font-size: 20px;\">Dokumentasi Vue.js sangat lengkap, sangat detail, mudah dimengerti dan disertai beberapa contoh kode dan hasilnya. Vue juga memiliki komunitas developer yang bagus dan berkembang. Komunitas ini bisa menawarkan bantuan kepada kita saat dibutuhkan.</p><h1 id=\"43df\" class=\"ll lm ja bn ln lo lp lq lr ls lt lu lv lw lx ly lz ma mb mc md me mf mg mh mi gc\" style=\"box-sizing: inherit; margin: 3.14em 0px -0.37em; font-family: sohne, \"Helvetica Neue\", Helvetica, Arial, sans-serif; color: rgb(41, 41, 41); line-height: 28px; font-weight: 600; font-size: 22px;\">4. Modern</h1><p id=\"e48b\" class=\"pw-post-body-paragraph km kn ja ko b kp mj kr ks kt mk kv kw kx ml kz la lb mm ld le lf mn lh li lj it gc\" style=\"box-sizing: inherit; margin: 0.86em 0px -0.46em; color: rgb(41, 41, 41); word-break: break-word; line-height: 32px; letter-spacing: -0.003em; font-family: charter, Georgia, Cambria, \"Times New Roman\", Times, serif; font-size: 20px;\">Vue boleh dibilang merupakan pendatang baru dalam dunia Front-end. Namun, itu menjadi sebuah keunggulan tersendiri karena mereka menggunakan teknologi, library, dan tools yang baru, kekinian dan modern seperti ES6; Webpack; Vuex; dan lain-lain.</p><h1 id=\"3e81\" class=\"ll lm ja bn ln lo lp lq lr ls lt lu lv lw lx ly lz ma mb mc md me mf mg mh mi gc\" style=\"box-sizing: inherit; margin: 3.14em 0px -0.37em; font-family: sohne, \"Helvetica Neue\", Helvetica, Arial, sans-serif; color: rgb(41, 41, 41); line-height: 28px; font-weight: 600; font-size: 22px;\">5. Ada Komunitas</h1><p id=\"5ee0\" class=\"pw-post-body-paragraph km kn ja ko b kp mj kr ks kt mk kv kw kx ml kz la lb mm ld le lf mn lh li lj it gc\" style=\"box-sizing: inherit; margin: 0.86em 0px -0.46em; color: rgb(41, 41, 41); word-break: break-word; line-height: 32px; letter-spacing: -0.003em; font-family: charter, Georgia, Cambria, \"Times New Roman\", Times, serif; font-size: 20px;\">Vue.js telah berkembang pesat dari tahun ke tahun. Komunitasnya pun sudah terbentuk. Semakin banyak juga acara baik dalam maupun luar negeri yang membahas Vue. Salah satu acara Vue yang paling menonjol adalah <span class=\"ko jb\" style=\"box-sizing: inherit; font-weight: 700;\">VueConf</span>, yaitu sebuah <em class=\"lk\" style=\"box-sizing: inherit;\">event </em>besar bagi pengguna Vue.js. Biasanya, event ini diisi oleh para tim inti dan kreator Vue.js yang akan memberikan info terbaru tentang status dan perkembangan bagaimana Vue.js selanjutnya.</p>', 'blog1.png', 'Ardiyan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `category_portfolio`
--

CREATE TABLE `category_portfolio` (
  `id_cat` int(11) NOT NULL,
  `category` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `category_portfolio`
--

INSERT INTO `category_portfolio` (`id_cat`, `category`) VALUES
(1, 'Website'),
(3, 'Mobile Apps'),
(4, 'Dekstop '),
(5, 'Design UI / UX');

-- --------------------------------------------------------

--
-- Struktur dari tabel `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `name` varchar(25) DEFAULT NULL,
  `ceo` varchar(25) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `no_telp` varchar(13) DEFAULT NULL,
  `instagram` varchar(20) DEFAULT NULL,
  `facebook` varchar(20) DEFAULT NULL,
  `twitter` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `company`
--

INSERT INTO `company` (`id`, `name`, `ceo`, `address`, `no_telp`, `instagram`, `facebook`, `twitter`) VALUES
(1, 'Bikea Tech', 'Aji Pratama S.Tr.Kom', 'Jl. Darmokali Gang Irigasi No 87 Wonokromo Surabaya', '082132881252', 'bikea_tech', 'bikea tech', 'bikeatech');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_img`
--

CREATE TABLE `detail_img` (
  `id` int(11) NOT NULL,
  `id_portfolio` int(11) DEFAULT NULL,
  `images` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `detail_img`
--

INSERT INTO `detail_img` (`id`, `id_portfolio`, `images`) VALUES
(1, 1, '2.PNG'),
(2, 1, '3.PNG'),
(3, 1, '4.PNG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(13) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `partner`
--

CREATE TABLE `partner` (
  `id` int(11) NOT NULL,
  `name_partner` varchar(200) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `images` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `partner`
--

INSERT INTO `partner` (`id`, `name_partner`, `address`, `images`) VALUES
(1, 'PT Pertamina Group', 'Jl Soekarno Hatta Jakarta', 'Pertamina.png'),
(3, 'Rumah Sakit Blambangan Banyuwangi', 'Banyuwangi Jawa Timur', 'Banyuwangi.png'),
(4, '11 Mart', 'Bangsalsari Jember', '11mart.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `title` varchar(200) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `id_category` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `id_partner` int(11) DEFAULT NULL,
  `picture` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `portfolio`
--

INSERT INTO `portfolio` (`id`, `title`, `date`, `id_category`, `description`, `id_partner`, `picture`) VALUES
(1, 'Website Sistem Antrian Klinik Kesehatan RS Blambangan', '2022-06-14', '1', '<p>website ini adalah sistem antrian yang digunakan oleh pasien untuk mendaftarkan pengobatan secara online dan mendapatkan nomor antrian secara online sehingga tidak perlu melakukan pendaftaran secara manual sehingga ketika sampai di klinik pasien hanya tinggal menunggu sesuai no antrian yang telah terdaftar secara online<br></p>', 3, 'Klinik_Antrian.png'),
(5, 'Website Sistem Kasir 11 Mart', '2022-06-14', '1', '<p>sistem kasir 11 mart ini berbasis website dimana didalamnya terdapat 2 akses antara admin(owner) mini market dan kasir (pegawai) dimana kasir hanya dapat mengakses menu transaksi dan laporan pendapatan harian dan stok bulanan sedangkan admin memiliki akses untuk melihat laporan keuangan harian dan hasil perhitungan transaksi harian untuk dicocokkan hasilnya serta stok bulanan dan stok asli di admin. karena admin memiliki akses untuk menajemen stok. pada sistem ini admin juga dapat melihat laba rugi bulanan dan harian secara otomatis. admin juga dapat melihat dashboard berupa diagram grafik transaksi selama setahun<br></p>', 4, '11mart.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `position` varchar(100) DEFAULT NULL,
  `age` varchar(5) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `skill` varchar(255) DEFAULT NULL,
  `picture` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `team`
--

INSERT INTO `team` (`id`, `name`, `position`, `age`, `description`, `skill`, `picture`) VALUES
(3, 'Bawik Ardiyan Ramadhan', 'Fullstack Website Developer', '23', 'Bawik Ardiyan merupakan lulusan D4 Teknik Informatika Politeknik Negeri Jember tahun 2021, bawik adalah fullstack web developer dengan keahlian PHP dan Javascript', 'PHP, Code Igniter, Laravel, Angular Js, jQuery, Javascript', 'me2.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `category_portfolio`
--
ALTER TABLE `category_portfolio`
  ADD PRIMARY KEY (`id_cat`);

--
-- Indeks untuk tabel `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `detail_img`
--
ALTER TABLE `detail_img`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `partner`
--
ALTER TABLE `partner`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `category_portfolio`
--
ALTER TABLE `category_portfolio`
  MODIFY `id_cat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `detail_img`
--
ALTER TABLE `detail_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `partner`
--
ALTER TABLE `partner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
