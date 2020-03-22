-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2020 at 02:56 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aplikasi_donor_baru`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `url` varchar(50) NOT NULL,
  `konten` text NOT NULL,
  `thumbnail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul`, `url`, `konten`, `thumbnail`) VALUES
(15, 'Percobaan awal', 'percobaan', '<p>percobaan awal</p><p><img src=\"http://localhost/donor/uploads/bahan.jpg\" style=\"width: 25%;\"></p><p>selesai</p>', 'thubnail1.jpg'),
(18, 'hal apa saja yang perlu diperhatikan saat donor darah', 'coba', '<p><img src=\"http://localhost/donor/uploads/thubnail51.jpg\" style=\"width: 50%;\"></p><p>Donor darah merupakan salah satu kegiatan kemanusiaan yang cukup mulia. Ya, dengan mendonorkan darah, secara tidak langsung kamu telah membantu orang-orang yang sedang membutuhkan darah.</p><p><br></p><p>Nah, buat kamu yang baru pertama kali berantusias ingin mendonorkan darah, ternyata ada beberapa persiapan yang perlu diketahui dan dilakukan sebelum mendonorkan darah. Kenapa?</p><p><br></p><p>Ternyata, walaupun donor darah sifatnya sukarela, tetap saja tidak semua orang boleh menyumbangkan darahnya. Nah, jika kamu baru pertama kali melakukannya, tak perlu cemas. Kamu hanya perlu memperhatikan beberapa hal berikut ini agar proses donor darah dapat berjalan lancar dan aman.</p><p><br></p><p>Berikut ini, Liputan6.com, Minggu (9/6/2019) telah merangkum dari berbagai sumber tentang persiapan yang perlu dilakukan sebelum donor darah. Dengan memperhatikan beberapa hal ini, selain mendapatkan pengalaman yang menyenangkan, kamu juga akan semakin sehat.</p><p><br></p><p>Bagi kamu yang ingin mendonorkan darah, hal pertama dan utama yang perlu diperhatikan adalah memiliki kondisi tubuh yang sehat. Pastikan kamu calon pendonor darah sudah berusia 17-60 tahun dengan berat badan minimal 45 kilogram, dan tentunya dalam keadaan jasmani yang sehat.</p><p>						</p>', 'thubnail51.jpg'),
(19, 'hal apa saja yang perlu diperhatikan saat donor darah', 'coba', '<p><img src=\"http://localhost/donor/uploads/thubnail51.jpg\" style=\"width: 50%;\"></p><p>Donor darah merupakan salah satu kegiatan kemanusiaan yang cukup mulia. Ya, dengan mendonorkan darah, secara tidak langsung kamu telah membantu orang-orang yang sedang membutuhkan darah.</p><p><br></p><p>Nah, buat kamu yang baru pertama kali berantusias ingin mendonorkan darah, ternyata ada beberapa persiapan yang perlu diketahui dan dilakukan sebelum mendonorkan darah. Kenapa?</p><p><br></p><p>Ternyata, walaupun donor darah sifatnya sukarela, tetap saja tidak semua orang boleh menyumbangkan darahnya. Nah, jika kamu baru pertama kali melakukannya, tak perlu cemas. Kamu hanya perlu memperhatikan beberapa hal berikut ini agar proses donor darah dapat berjalan lancar dan aman.</p><p><br></p><p>Berikut ini, Liputan6.com, Minggu (9/6/2019) telah merangkum dari berbagai sumber tentang persiapan yang perlu dilakukan sebelum donor darah. Dengan memperhatikan beberapa hal ini, selain mendapatkan pengalaman yang menyenangkan, kamu juga akan semakin sehat.</p><p><br></p><p>Bagi kamu yang ingin mendonorkan darah, hal pertama dan utama yang perlu diperhatikan adalah memiliki kondisi tubuh yang sehat. Pastikan kamu calon pendonor darah sudah berusia 17-60 tahun dengan berat badan minimal 45 kilogram, dan tentunya dalam keadaan jasmani yang sehat.</p><p>						</p>', 'thubnail51.jpg'),
(20, 'hal apa saja yang perlu diperhatikan saat donor darah', 'coba', '<p><img src=\"http://localhost/donor/uploads/thubnail51.jpg\" style=\"width: 50%;\"></p><p>Donor darah merupakan salah satu kegiatan kemanusiaan yang cukup mulia. Ya, dengan mendonorkan darah, secara tidak langsung kamu telah membantu orang-orang yang sedang membutuhkan darah.</p><p><br></p><p>Nah, buat kamu yang baru pertama kali berantusias ingin mendonorkan darah, ternyata ada beberapa persiapan yang perlu diketahui dan dilakukan sebelum mendonorkan darah. Kenapa?</p><p><br></p><p>Ternyata, walaupun donor darah sifatnya sukarela, tetap saja tidak semua orang boleh menyumbangkan darahnya. Nah, jika kamu baru pertama kali melakukannya, tak perlu cemas. Kamu hanya perlu memperhatikan beberapa hal berikut ini agar proses donor darah dapat berjalan lancar dan aman.</p><p><br></p><p>Berikut ini, Liputan6.com, Minggu (9/6/2019) telah merangkum dari berbagai sumber tentang persiapan yang perlu dilakukan sebelum donor darah. Dengan memperhatikan beberapa hal ini, selain mendapatkan pengalaman yang menyenangkan, kamu juga akan semakin sehat.</p><p><br></p><p>Bagi kamu yang ingin mendonorkan darah, hal pertama dan utama yang perlu diperhatikan adalah memiliki kondisi tubuh yang sehat. Pastikan kamu calon pendonor darah sudah berusia 17-60 tahun dengan berat badan minimal 45 kilogram, dan tentunya dalam keadaan jasmani yang sehat.</p><p>						</p>', 'thubnail51.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `provinsi`
--

CREATE TABLE `provinsi` (
  `id_provinsi` int(11) NOT NULL,
  `nama_provinsi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `provinsi`
--

INSERT INTO `provinsi` (`id_provinsi`, `nama_provinsi`) VALUES
(1, 'Aceh'),
(2, 'Bali'),
(3, 'Bangka Belitung'),
(4, 'Banten'),
(5, 'Bengkulu'),
(6, 'Daerah Istimewa Yogyakarta'),
(7, 'DKI Jakarta'),
(8, 'Gorontalo'),
(9, 'Jawa Barat'),
(10, 'Jawa Tengah'),
(11, 'Jawa Timur'),
(12, 'Kalimantan Barat'),
(13, 'Kalimantan Selatan'),
(14, 'Kalimantan Tengah'),
(15, 'Kalimantan Timur'),
(16, 'Kepulauan Riau'),
(17, 'Lampung'),
(18, 'Maluku'),
(19, 'Maluku Utara'),
(20, 'Nusa Tenggara Barat'),
(21, 'Nusa Tenggara Timur'),
(22, 'Papua Barat'),
(23, 'Papua Tengah'),
(24, 'Papua Timur'),
(25, 'Riau'),
(26, 'Sulawesi Barat'),
(27, 'Sulawesi Selatan'),
(28, 'Sulawesi Tengah'),
(29, 'Sulawesi Tenggara'),
(30, 'Sulawesi Utara'),
(31, 'Sumatera Barat'),
(32, 'Sumatera Selatan'),
(33, 'Sumatera Utara');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_minta_darah`
--

CREATE TABLE `riwayat_minta_darah` (
  `id_riwayat_minta_darah` int(11) NOT NULL,
  `id_user` int(50) NOT NULL,
  `id_tempat` int(10) NOT NULL,
  `nama_pasien` varchar(100) NOT NULL,
  `golongan` varchar(2) NOT NULL,
  `rhesus` varchar(10) NOT NULL,
  `jenis_kelamin` varchar(6) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `nama_tempat` varchar(100) NOT NULL,
  `jumlah_darah` int(10) NOT NULL,
  `batas_waktu` date NOT NULL,
  `tanggal_konfirmasi` date NOT NULL,
  `kebutuhan` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `riwayat_minta_darah`
--

INSERT INTO `riwayat_minta_darah` (`id_riwayat_minta_darah`, `id_user`, `id_tempat`, `nama_pasien`, `golongan`, `rhesus`, `jenis_kelamin`, `alamat`, `nama_tempat`, `jumlah_darah`, `batas_waktu`, `tanggal_konfirmasi`, `kebutuhan`, `foto`, `status`) VALUES
(1, 2, 3273, 'umam', 'a', 'Positif', 'Pria', 'jakarta', 'UTD PMI Kota Bandung\r\nJl. Aceh No. 79 Bandung\r\n(022) 4207052', 1, '2020-03-07', '0000-00-00', 'operasi', 'avatar42.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_pendonor`
--

CREATE TABLE `riwayat_pendonor` (
  `id_riwayat_donor` int(11) NOT NULL,
  `id_user` int(10) NOT NULL,
  `nama_tempat` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `tanggal_donor` date NOT NULL,
  `status` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `riwayat_pendonor`
--

INSERT INTO `riwayat_pendonor` (`id_riwayat_donor`, `id_user`, `nama_tempat`, `alamat`, `tanggal_donor`, `status`) VALUES
(3, 1, 'UTD PMI Kabupaten Bandung\r\nPT CAHAYA TUNGGAL SANTOSA', 'Jl.Antapani', '2020-03-02', 1),
(5, 2, 'UTD PMI Kabupaten Bandung\r\nPT CAHAYA TUNGGAL SANTOSA', 'Jl.Antapani', '2020-03-20', 0),
(6, 2, 'UTD PMI Kabupaten Bandung\r\nPT CAHAYA TUNGGAL SANTOSA', 'Jl.Antapani', '2020-03-20', 0),
(7, 6, 'UTD PMI Kota Banda Aceh\r\nHotel Grand Permata Hati', 'Blang Oi', '2020-03-21', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `golongan_darah` varchar(2) NOT NULL,
  `rhesus` varchar(10) NOT NULL,
  `tanggal_mulai_donor` date NOT NULL,
  `tanggal_donor` date NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `nomor_hp` varchar(16) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `foto` varchar(20) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_users`, `nama`, `jenis_kelamin`, `golongan_darah`, `rhesus`, `tanggal_mulai_donor`, `tanggal_donor`, `tempat_lahir`, `tanggal_lahir`, `nomor_hp`, `alamat`, `email`, `password`, `foto`, `status`) VALUES
(1, 'admin', 'Wanita', 'b', 'Negatif', '2020-01-01', '2020-04-01', 'Tempat 2', '1999-01-06', '08154662554', 'Alamat 2', 'admin@gmail.com', '$2y$10$43X2C7b18bkZnWIYrShaTOgk1mphCPR1Jc3l8P1alDf5tHL/6FvLK', 'avatar21.png', 1),
(6, 'user', 'Pria', 'a', 'Positif', '2020-01-01', '2020-04-01', 'Jakarta', '2020-01-01', '081546685547', 'Jln.kartajaya', 'user@gmail.com', '$2y$10$x3ZX0oEqMYOmC9UuWjwK..jUPYgWCXFbdxJTJwMTPfzNpstEh2kz.', 'user8-128x128.jpg', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`id_provinsi`);

--
-- Indexes for table `riwayat_minta_darah`
--
ALTER TABLE `riwayat_minta_darah`
  ADD PRIMARY KEY (`id_riwayat_minta_darah`);

--
-- Indexes for table `riwayat_pendonor`
--
ALTER TABLE `riwayat_pendonor`
  ADD PRIMARY KEY (`id_riwayat_donor`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `provinsi`
--
ALTER TABLE `provinsi`
  MODIFY `id_provinsi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `riwayat_minta_darah`
--
ALTER TABLE `riwayat_minta_darah`
  MODIFY `id_riwayat_minta_darah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `riwayat_pendonor`
--
ALTER TABLE `riwayat_pendonor`
  MODIFY `id_riwayat_donor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
