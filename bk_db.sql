-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2021 at 09:31 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bk_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id_guru` varchar(50) NOT NULL,
  `nama_guru` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `golongan` varchar(255) NOT NULL,
  `spesialis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id_guru`, `nama_guru`, `alamat`, `golongan`, `spesialis`) VALUES
('0011', 'Maria Ulfa S.,Ag', 'Jln. Sidodadi Bululawang, Malang', 'Honorer', 'Bimbingan Konseling');

-- --------------------------------------------------------

--
-- Table structure for table `kj`
--

CREATE TABLE `kj` (
  `id_KJ` varchar(50) NOT NULL,
  `nama_jurusan` varchar(25) NOT NULL,
  `Kelas` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kj`
--

INSERT INTO `kj` (`id_KJ`, `nama_jurusan`, `Kelas`) VALUES
('K_10_IPA', 'Ilmu Pengetahuan Alam', '10'),
('K_10_IPS', 'Ilmu Pengetahuan Sosial', '10'),
('K_11_IPA', 'Ilmu Pengetahuan Alam', '11'),
('K_11_IPS', 'Ilmu Pengetahuan Sosial', '11'),
('K_12_IPA', 'Ilmu Pengetahuan Alam', '12'),
('K_12_IPS', 'Ilmu Pengetahuan Sosial', '12');

-- --------------------------------------------------------

--
-- Table structure for table `konsultasi`
--

CREATE TABLE `konsultasi` (
  `id_konsultasi` int(11) NOT NULL,
  `id_siswa` varchar(50) NOT NULL,
  `id_perekapan` varchar(50) NOT NULL,
  `id_KJ` varchar(50) NOT NULL,
  `id_guru` int(50) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `nama_jurusan` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `catatan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konsultasi`
--

INSERT INTO `konsultasi` (`id_konsultasi`, `id_siswa`, `id_perekapan`, `id_KJ`, `id_guru`, `kelas`, `nama_jurusan`, `tanggal`, `catatan`) VALUES
(51, '200702', 'KP01', 'K_11_IPS', 11, '11', 'Ilmu Pengetahuan Sosial', '2021-02-22', ''),
(52, '200702', 'KP01', 'K_10_IPS', 11, '10', 'Ilmu Pengetahuan Sosial', '2021-02-22', ''),
(53, '200701', 'KP01', 'K_10_IPS', 11, '10', 'Ilmu Pengetahuan Sosial', '2021-02-22', '');

-- --------------------------------------------------------

--
-- Table structure for table `kp`
--

CREATE TABLE `kp` (
  `id_kp` varchar(11) NOT NULL,
  `tatib` varchar(50) NOT NULL,
  `bentuk_pelanggaran` varchar(255) NOT NULL,
  `bobot` varchar(255) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kp`
--

INSERT INTO `kp` (`id_kp`, `tatib`, `bentuk_pelanggaran`, `bobot`, `keterangan`) VALUES
('1.1', 'PAKAIAN SERAGAM', 'Tidak mengenakan seragam sekolah yang telah ditentukan (pakaian, sepatu, dasi, kaos kaki, sabuk, topi, tali sepatu hitam/putih) ', '3', ''),
('1.2', 'PAKAIAN SERAGAM', 'Tidak mengenakan pakaian olah raga yang telah di tentukan', '5', ''),
('2.1', 'RAMBUT, KUKU, TATO, MAKE-UP', 'Berambut gondrong/tidak rapi bagi laki-laki', '5', ''),
('2.2', 'RAMBUT, KUKU, TATO, MAKE-UP', 'Memakai aksesori yang tidak mencerminkan pribadi siswa', '3', ''),
('2.3', 'RAMBUT, KUKU, TATO, MAKE-UP', 'Mengecat rambut ', '15', ''),
('2.4', 'RAMBUT, KUKU, TATO, MAKE-UP', 'Bertato', '15', ''),
('2.5', 'RAMBUT, KUKU, TATO, MAKE-UP', 'Berkuku panjang, mengecat kuku', '2', ''),
('2.6', 'RAMBUT, KUKU, TATO, MAKE-UP', 'Membawa perlengkapan make up', '2', ''),
('3.1', 'MASUK DAN PULANG SEKOLAH', 'Tidak masuk sekolah tanpa keterangan / dinyatakan alpha', '8', ''),
('3.2', 'MASUK DAN PULANG SEKOLAH', 'Tidak masuk sekolah dengan membuat surat keterangan palsu', '8', ''),
('3.3', 'MASUK DAN PULANG SEKOLAH', 'Meninggalkan pelajaran tertentu tanpa izin (bolos sekolah)', '10', ''),
('3.4', 'MASUK DAN PULANG SEKOLAH', 'Tidak mengikuti kegiatan ekstrakurikuler tanpa izin (bagi kelas X/XI/XII)', '2', ''),
('3.5', 'MASUK DAN PULANG SEKOLAH', 'Tidak mengikuti kegiatan jam tambahan tanpa izin ( bagi kelas XII )', '2', ''),
('3.6', 'MASUK DAN PULANG SEKOLAH', 'Berada di luar lingkungan sekolah tanpa izin pada saat jam pelajaran ', '2', ''),
('3.7', 'MASUK DAN PULANG SEKOLAH', 'Datang terlambat tanpa alasan yang bisa dipertanggung jawabkan', '3', ''),
('4.1', 'KEBERSIHAN, KEDISIPLINAN, KETERTIBAN, KEHADIRAN', 'Tidak melaksanakan piket kebersihan, ketertiban dan keindahan kelas', '5', ''),
('4.2', 'KEBERSIHAN, KEDISIPLINAN, KETERTIBAN, KEHADIRAN', 'Makan / minum didalam kelas saat pelajaran berlangsung tanpa izin guru', '3', ''),
('4.3', 'KEBERSIHAN, KEDISIPLINAN, KETERTIBAN, KEHADIRAN', 'Membuang sampah tidak pada tempatnya', '3', ''),
('4.4', 'KEBERSIHAN, KEDISIPLINAN, KETERTIBAN, KEHADIRAN', 'Mencuri / memalak di lingkungan sekolah', '40', ''),
('4.5', 'KEBERSIHAN, KEDISIPLINAN, KETERTIBAN, KEHADIRAN', 'Menggelapkan, memanipulasi, menyalah gunakan uang sekolah', '25', ''),
('4.6', 'KEBERSIHAN, KEDISIPLINAN, KETERTIBAN, KEHADIRAN', 'Membocorkan soal ulangan harian, UTS, PAS, PAT', '15', ''),
('4.7', 'KEBERSIHAN, KEDISIPLINAN, KETERTIBAN, KEHADIRAN', 'Mengikuti organisasi terlarang (ajaran sesat)', '50', ''),
('4.8', 'KEBERSIHAN, KEDISIPLINAN, KETERTIBAN, KEHADIRAN', 'Berangkat sekolah dan menerima informasi siswa yang bolos', '10', ''),
('4.9', 'KEBERSIHAN, KEDISIPLINAN, KETERTIBAN, KEHADIRAN', 'Membuat kegaduhan / keributan selama proses belajar mengajar', '10', ''),
('5.1', 'SOPAN SANTUN/PERGAULAN', 'Terbukti memfitnah atau mencemarkan nama baik', '30', ''),
('5.2', 'SOPAN SANTUN/PERGAULAN', 'Bertingkahlaku tidak sopan, melecehkan kepala sekolah, guru, staff tata usaha, dan siswa ', '40', ''),
('5.3', 'SOPAN SANTUN/PERGAULAN', 'Berkata kasar / tidak sopan, terhadap kepala sekolah, guru, staff tata usaha', '30', ''),
('5.4', 'SOPAN SANTUN/PERGAULAN', 'Memalsukan tanda tangan kepala sekolah, guru, staff tata usaha', '75', ''),
('5.5', 'SOPAN SANTUN/PERGAULAN', 'Memalsukan tanda tangan orang tua', '20', ''),
('6.1', 'UPACARA BENDERA DAN PERINGATAN HARI BESAR', 'Tidak mengikuti upacara bendera (hari senin) sesuai ketentuan sekolah', '5', ''),
('6.2', 'UPACARA BENDERA DAN PERINGATAN HARI BESAR', 'Tidak mengikuti upacara hari besar nasional (hari kemerdekaan, hardiknas, hari pahlawan, hari sumpah pemuda, dll)', '15', ''),
('6.3', 'UPACARA BENDERA DAN PERINGATAN HARI BESAR', 'Tidak mengikuti upacara hari besar keagamaan', '15', ''),
('7.1', 'KEGIATAN KEAGAMAAN', 'Mempermainkan, melecehkan agama, baik agama sendiri/orang lain', '20', ''),
('7.2', 'KEGIATAN KEAGAMAAN', 'Tidak menjalankan sholat dhuhur (siswa muslim)', '10', ''),
('7.3', 'KEGIATAN KEAGAMAAN', 'Tidak mengikuti kegiatan dan pesantren ramadhan yang diadakan disekolah (siswa muslim)', '20', ''),
('7.4', 'KEGIATAN KEAGAMAAN', 'Bagi siswa muslim tidak mengikuti kegiatan keagamaan yang diatur oleh sekolah (tahfidz)', '15', ''),
('8.01', 'LARANGAN-LARANGAN', 'Membawa rokok, merokok di sekolah/lingkungan sekolah', '25', ''),
('8.02', 'LARANGAN-LARANGAN', 'Membawa / meminum minuman keras', '75', ''),
('8.03', 'LARANGAN-LARANGAN', 'Mengedarkan dan mengkonsumsi narkotika, psikotropika atau obat terlarang lainnya', '150', ''),
('8.04', 'LARANGAN-LARANGAN', 'Berlaku tidak senonoh di lingkungan sekolah', '50', ''),
('8.05', 'LARANGAN-LARANGAN', 'Berkelahi baik perorangan / kelompok di dalam sekolah / luar sekolah', '70', ''),
('8.06', 'LARANGAN-LARANGAN', 'Mengotori / mencoret-coret dinding sekolah, pagar sekolah, dll', '15', ''),
('8.07', 'LARANGAN-LARANGAN', 'Berbicara kotor, mengumpat, bergunjing, menghina, menyapa antar sesama / warga sekolah dengan kata-kata sapaan senonoh', '15', ''),
('8.08', 'LARANGAN-LARANGAN', 'Membawa barang yang tidak ada hubungan dengan kepentingan sekolah seperti senjata tajam atau alat-alat yang membahayakan orang lain', '50', ''),
('8.09', 'LARANGAN-LARANGAN', 'Membawa, membaca / mengedarkan bacaan, gambar, sketsa, video porno', '50', ''),
('8.10', 'LARANGAN-LARANGAN', 'Menikah / hamil', '150', ''),
('8.11', 'LARANGAN-LARANGAN', 'Membawa kartu dan bermain di lingkungan sekolah', '20', ''),
('8.12', 'LARANGAN-LARANGAN', 'Membawa alat komunikasi hp di perbolehkan, tetapi ketika jam belajar tidak dimatikan dan mengganggu proses belajar-mengajar', '20', '');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggaran`
--

CREATE TABLE `pelanggaran` (
  `id_pelanggaran` int(20) NOT NULL,
  `id_siswa` varchar(50) NOT NULL,
  `id_KJ` varchar(50) NOT NULL,
  `id_guru` varchar(50) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `nama_jurusan` varchar(50) NOT NULL,
  `id_kp` varchar(20) NOT NULL,
  `id_perekapan` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `catatan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggaran`
--

INSERT INTO `pelanggaran` (`id_pelanggaran`, `id_siswa`, `id_KJ`, `id_guru`, `kelas`, `nama_jurusan`, `id_kp`, `id_perekapan`, `tanggal`, `catatan`) VALUES
(6, '200702', 'K_10_IPA', '0011', '10', 'Ilmu Pengetahuan Alam', '4.2', 'KP01', '2021-02-22', '');

-- --------------------------------------------------------

--
-- Table structure for table `perekapan`
--

CREATE TABLE `perekapan` (
  `id_perekapan` varchar(50) NOT NULL,
  `thn_ajaran` varchar(50) NOT NULL,
  `semester` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perekapan`
--

INSERT INTO `perekapan` (`id_perekapan`, `thn_ajaran`, `semester`) VALUES
('KP01', '2020-2021', 'Ganjil'),
('KP02', '2020-2021', 'Genap');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` varchar(50) NOT NULL,
  `id_KJ` varchar(255) NOT NULL,
  `nilai_raport` varchar(255) DEFAULT NULL,
  `nama_siswa` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `nohp` varchar(25) NOT NULL,
  `ttl` date NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tinggal` varchar(50) DEFAULT NULL,
  `hoby` varchar(50) DEFAULT NULL,
  `prestasi` varchar(255) DEFAULT NULL,
  `cita_cita` varchar(255) DEFAULT NULL,
  `nama_ayah` varchar(50) DEFAULT NULL,
  `password_ortu` varchar(50) NOT NULL,
  `nama_ibu` varchar(50) DEFAULT NULL,
  `alamat_ortu` varchar(255) DEFAULT NULL,
  `pekerjaan_ayah` varchar(50) DEFAULT NULL,
  `pendidikan_ayah` varchar(50) DEFAULT NULL,
  `nohp_ayah` varchar(20) DEFAULT NULL,
  `pekerjaan_ibu` varchar(50) DEFAULT NULL,
  `pendidikan_ibu` varchar(50) DEFAULT NULL,
  `nohp_ibu` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `id_KJ`, `nilai_raport`, `nama_siswa`, `password`, `jenis_kelamin`, `alamat`, `nohp`, `ttl`, `tempat_lahir`, `tinggal`, `hoby`, `prestasi`, `cita_cita`, `nama_ayah`, `password_ortu`, `nama_ibu`, `alamat_ortu`, `pekerjaan_ayah`, `pendidikan_ayah`, `nohp_ayah`, `pekerjaan_ibu`, `pendidikan_ibu`, `nohp_ibu`) VALUES
('200701', 'K_10_IPA', '30', 'ahmad', '123', 'Laki-Laki', 'jl.kauman 2 margoyoso kec.Kalinyamatan kab.Jepara', '082230183334', '1999-12-03', 'malang', '', '', '', NULL, 'ibnu', '123', '', '', '', '', '', '', '', ''),
('200702', 'K_10_IPA', '', 'Amliana Adui', '200702', 'Perempuan', '', '', '2021-02-22', 'malang', '', '', '', NULL, '', '200702', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_sanksi`
--

CREATE TABLE `tabel_sanksi` (
  `id_sanksi` int(11) NOT NULL,
  `jenis_sanksi` varchar(255) NOT NULL,
  `poin_sanksi` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_sanksi`
--

INSERT INTO `tabel_sanksi` (`id_sanksi`, `jenis_sanksi`, `poin_sanksi`) VALUES
(5, 'Peringatan tertulis dan teguran oleh Wali Kelas / Guru BK', 30),
(6, 'Pembinaan (I) Pernyataan tertulis (1) Panggilan Orangtua (1)', 50),
(8, 'Pembinaan (II) Pernyataan tertulis (2) diketahui oleh waka Kesiswaan', 70),
(9, 'Pembinaan (III) Pernyataan tertulis (3) Panggilan Orangtua (2)', 90),
(10, 'Pembinaan (IV) Pernyataan tertulis (4) Panggilan Orangtua (3)', 110),
(11, 'Pembinaan (V) Pernyataan tertulis (5) Panggilan Orangtua (4) diketahui oleh wali kelas, Guru BK, Waka Kesiswaan', 130),
(12, 'Dikembalikan Kepada Orang tua/wali siswa (dikeluarkan dengan tidak hormat)', 150),
(13, 'Skorsing 1 hari + diberikan sanksi tugas dari sekolah', 60),
(14, 'Skorsing 2 hari + diberikan sanksi tugas dari sekolah', 80),
(15, 'Skorsing 3 hari + diberikan sanksi tugas dari sekolah', 120);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_user`
--

CREATE TABLE `tabel_user` (
  `id_user` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_user`
--

INSERT INTO `tabel_user` (`id_user`, `Username`, `password`, `level`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'Kepala Sekolah', 'kepsek123', 'user'),
(9, 'Kesiswaan', '123', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_walikelas`
--

CREATE TABLE `tabel_walikelas` (
  `id_walikelas` int(50) NOT NULL,
  `nip` varchar(50) CHARACTER SET latin1 NOT NULL,
  `id_KJ` varchar(50) CHARACTER SET latin1 NOT NULL,
  `nama_walikelas` varchar(50) CHARACTER SET latin1 NOT NULL,
  `password` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_walikelas`
--

INSERT INTO `tabel_walikelas` (`id_walikelas`, `nip`, `id_KJ`, `nama_walikelas`, `password`) VALUES
(1, '02151', 'K_10_IPA', 'daus', 'ganti');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `kj`
--
ALTER TABLE `kj`
  ADD PRIMARY KEY (`id_KJ`);

--
-- Indexes for table `konsultasi`
--
ALTER TABLE `konsultasi`
  ADD PRIMARY KEY (`id_konsultasi`),
  ADD KEY `id_perekapan` (`id_perekapan`) USING BTREE,
  ADD KEY `id_KJ` (`id_KJ`),
  ADD KEY `id_guru` (`id_guru`),
  ADD KEY `id_siswa` (`id_siswa`);

--
-- Indexes for table `kp`
--
ALTER TABLE `kp`
  ADD PRIMARY KEY (`id_kp`);

--
-- Indexes for table `pelanggaran`
--
ALTER TABLE `pelanggaran`
  ADD PRIMARY KEY (`id_pelanggaran`),
  ADD KEY `id_kp` (`id_kp`) USING BTREE,
  ADD KEY `id_perekapan` (`id_perekapan`) USING BTREE,
  ADD KEY `id_KJ` (`id_KJ`),
  ADD KEY `id_siswa` (`id_siswa`),
  ADD KEY `id_guru` (`id_guru`);

--
-- Indexes for table `perekapan`
--
ALTER TABLE `perekapan`
  ADD PRIMARY KEY (`id_perekapan`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`),
  ADD KEY `id_KJ` (`id_KJ`);

--
-- Indexes for table `tabel_sanksi`
--
ALTER TABLE `tabel_sanksi`
  ADD PRIMARY KEY (`id_sanksi`);

--
-- Indexes for table `tabel_user`
--
ALTER TABLE `tabel_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tabel_walikelas`
--
ALTER TABLE `tabel_walikelas`
  ADD PRIMARY KEY (`id_walikelas`),
  ADD KEY `id_KJ` (`id_KJ`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `konsultasi`
--
ALTER TABLE `konsultasi`
  MODIFY `id_konsultasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `pelanggaran`
--
ALTER TABLE `pelanggaran`
  MODIFY `id_pelanggaran` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tabel_sanksi`
--
ALTER TABLE `tabel_sanksi`
  MODIFY `id_sanksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tabel_user`
--
ALTER TABLE `tabel_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tabel_walikelas`
--
ALTER TABLE `tabel_walikelas`
  MODIFY `id_walikelas` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `konsultasi`
--
ALTER TABLE `konsultasi`
  ADD CONSTRAINT `konsultasi_ibfk_3` FOREIGN KEY (`id_perekapan`) REFERENCES `perekapan` (`id_perekapan`);

--
-- Constraints for table `pelanggaran`
--
ALTER TABLE `pelanggaran`
  ADD CONSTRAINT `pelanggaran_ibfk_3` FOREIGN KEY (`id_kp`) REFERENCES `kp` (`id_kp`),
  ADD CONSTRAINT `pelanggaran_ibfk_4` FOREIGN KEY (`id_perekapan`) REFERENCES `perekapan` (`id_perekapan`),
  ADD CONSTRAINT `pelanggaran_ibfk_7` FOREIGN KEY (`id_KJ`) REFERENCES `kj` (`id_KJ`),
  ADD CONSTRAINT `pelanggaran_ibfk_9` FOREIGN KEY (`id_guru`) REFERENCES `guru` (`id_guru`);

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_ibfk_1` FOREIGN KEY (`id_KJ`) REFERENCES `kj` (`id_KJ`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tabel_walikelas`
--
ALTER TABLE `tabel_walikelas`
  ADD CONSTRAINT `tabel_walikelas_ibfk_1` FOREIGN KEY (`id_KJ`) REFERENCES `kj` (`id_KJ`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
