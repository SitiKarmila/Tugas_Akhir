-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2023 at 06:50 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `monitoringproyek`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `nohp` varchar(225) NOT NULL,
  `gambar` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `username`, `password`, `nohp`, `gambar`) VALUES
(1, 'admin', 'admin', 'admin', '08', 'team-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id_banner` int(11) NOT NULL,
  `judul` varchar(225) NOT NULL,
  `foto` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id_banner`, `judul`, `foto`) VALUES
(2, 'Selamat Datang di Sistem Monitoring Proyek', 'photo_2023-06-19_21-11-08.jpg'),
(3, 'Selamat Datang di Sistem Monitoring Proyek', 'WhatsApp Image 2023-04-12 at 17.05.16.jpeg'),
(4, 'Selamat Datang di Sistem Monitoring Proyek', 'pu3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=Active, 0=Block'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `date`, `created`, `modified`, `status`) VALUES
(0, 'mm', '2023-07-19', '2023-07-19 16:55:40', '2023-07-19 16:55:40', 1);

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `title` text NOT NULL,
  `id_proyek` varchar(11) NOT NULL,
  `id_pengawas` varchar(11) NOT NULL,
  `id_spj` varchar(11) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `title`, `id_proyek`, `id_pengawas`, `id_spj`, `date`, `status`) VALUES
(2, 'PERBAIKAN JALAN', '27', '1', '3', '2023-07-21', 'Baru'),
(3, 'PERBAIKAN JALAN', '27', '1', '3', '2023-07-31', 'Baru');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id_karyawan` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `nik` varchar(225) NOT NULL,
  `bpjskesehatan` varchar(225) NOT NULL,
  `bpjsketenagakerjaan` varchar(225) NOT NULL,
  `fotokaryawan` varchar(225) NOT NULL,
  `id_proyek` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `nama`, `nik`, `bpjskesehatan`, `bpjsketenagakerjaan`, `fotokaryawan`, `id_proyek`) VALUES
(1549, 'BA', '3', '4', '5', '', '27'),
(1550, 'v', '7', '8', '9', '', '27'),
(1551, 'darisman', '4865689708', '123', '098', 'santi.jpeg', '29'),
(1552, 'bay haki', '6114080249689', '456', '765', 'liong.jpeg', '29');

-- --------------------------------------------------------

--
-- Table structure for table `kategoriproyek`
--

CREATE TABLE `kategoriproyek` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategoriproyek`
--

INSERT INTO `kategoriproyek` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Kontruksi'),
(2, 'Jalan');

-- --------------------------------------------------------

--
-- Table structure for table `keritikandansaran`
--

CREATE TABLE `keritikandansaran` (
  `id_keritikan` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `subjek` varchar(225) NOT NULL,
  `keritikandansaran` text NOT NULL,
  `tgl` date NOT NULL,
  `jam` time NOT NULL,
  `status` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keritikandansaran`
--

INSERT INTO `keritikandansaran` (`id_keritikan`, `nama`, `email`, `subjek`, `keritikandansaran`, `tgl`, `jam`, `status`) VALUES
(5, 'dolah', 'aliong2345@gmail.com', 'kaeak', 'ape jak lah', '2023-06-26', '22:20:39', 'Terbaca'),
(6, 'mus', 'aliong2345@gmail.com', 'kaeak', 'sdfsdfsdf', '2023-08-18', '23:18:59', 'Terbaca');

-- --------------------------------------------------------

--
-- Table structure for table `kontraktor`
--

CREATE TABLE `kontraktor` (
  `id_kontraktor` int(11) NOT NULL,
  `namapt` varchar(225) NOT NULL,
  `namadirektur` varchar(225) NOT NULL,
  `logo` varchar(225) NOT NULL,
  `tgl_berdiri` date NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `nohp` varchar(225) NOT NULL,
  `status` varchar(225) NOT NULL,
  `siup` varchar(225) NOT NULL,
  `npwp` varchar(225) NOT NULL,
  `domisili` varchar(225) NOT NULL,
  `tdp` varchar(225) NOT NULL,
  `siujk` varchar(225) NOT NULL,
  `sbu` varchar(225) NOT NULL,
  `dokumen` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kontraktor`
--

INSERT INTO `kontraktor` (`id_kontraktor`, `namapt`, `namadirektur`, `logo`, `tgl_berdiri`, `alamat`, `nohp`, `status`, `siup`, `npwp`, `domisili`, `tdp`, `siujk`, `sbu`, `dokumen`) VALUES
(6, 'PT.SEMBRANG RUDU js', 'ABDULLAH', 'a2.jpg', '2023-05-28', 'JLAN KYAI TAPAH', '23212', 'Aktif', '', '', '', '', '', '', '11.jpg'),
(7, 'CV.PAGI BUTAK', 'JUNAI', 'logo pt.png', '2023-06-21', 'jl,kiay', '232132', 'Aktif', '', '', '', '', '', '', '20190704_185648.jpg'),
(8, 'PT.SEMBRANG RUDU', 'sdsdsad', 'a3.jpg', '2023-08-05', 'fasfsfdf', 'dfsdafsad', 'Aktif', '', '', '', '', '', '', 'pita.jpeg'),
(9, 'PT ANGIN RIBUT', 'JUNAI', 'photo_2022-12-03_12-33-46.jpg', '2015-07-18', 'NDSFDSF SDFDSF SDF', '232132', 'Aktif', '23213123', '2323123', '2321321323', '23213123213', '23213232', '234323223', 'DAFTAR ISI.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `laporanproyek`
--

CREATE TABLE `laporanproyek` (
  `id_laporan` int(11) NOT NULL,
  `id_proyek` varchar(225) NOT NULL,
  `id_pengawas` varchar(225) NOT NULL,
  `dokumen` varchar(225) NOT NULL,
  `persentase` varchar(225) NOT NULL,
  `tgl_pengawasan` date NOT NULL,
  `anggarankeluar` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laporanproyek`
--

INSERT INTO `laporanproyek` (`id_laporan`, `id_proyek`, `id_pengawas`, `dokumen`, `persentase`, `tgl_pengawasan`, `anggarankeluar`) VALUES
(8, '27', '1', '11.jpg', '50%', '2023-07-01', '60000');

-- --------------------------------------------------------

--
-- Table structure for table `pengawas`
--

CREATE TABLE `pengawas` (
  `id_pengawas` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `pddk` varchar(225) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `id_kategori` varchar(225) NOT NULL,
  `no_hp` varchar(225) NOT NULL,
  `nip` varchar(22) NOT NULL,
  `foto` varchar(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengawas`
--

INSERT INTO `pengawas` (`id_pengawas`, `nama`, `pddk`, `alamat`, `id_kategori`, `no_hp`, `nip`, `foto`, `username`, `password`) VALUES
(1, 'dolah', 'S1', 'jl,kiay', '1', 'a', '32', 'a2.jpg', 'pengawas', 'pengawas');

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `id_profil` int(11) NOT NULL,
  `tentangkami` text NOT NULL,
  `maps` text NOT NULL,
  `email` varchar(225) NOT NULL,
  `telpon` varchar(225) NOT NULL,
  `wa` varchar(225) NOT NULL,
  `logo` varchar(225) NOT NULL,
  `embed` text NOT NULL,
  `cover` varchar(225) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`id_profil`, `tentangkami`, `maps`, `email`, `telpon`, `wa`, `logo`, `embed`, `cover`, `alamat`) VALUES
(1, '<p style="text-align:justify"><span style="font-size:14px">Dalam sebuah proyek, ujian sesungguhnya terletak pada tahap Proyek Eksekusi yang berjalan beriringan dengan tahap controlling. Tugas pengelola proyek pada tahap ini adalah memfasilistasi dan mengawasi tim, agar dapat bekerja sesuai dengan dokumen planning. Process utama dalam tahap ini adalah mengarahkan dan mengelola pelaksanaan proyek ke arah penyelesaian, sesuai dokumen perencanaan revisi terakhir. Seorang Project Manager yang efektif tidak perlu melibatkan dirinya dalam pekerjaan teknis, namun, cukup dengan mengarahkan, menjelaskan, dan memotivasi timnya. Dan, semuanya itu tentu menuntut kemampuan kepemimpinan dan komunikasi yang baik. Kegiatan-kegiatan utama dalam tahap execution adalah :</span></p>\r\n\r\n<ol>\r\n	<li style="text-align:justify"><span style="font-size:14px">Pengawasan jalannya proses pelaksanaan kegiatan dalam bentuk quality assurance</span></li>\r\n	<li style="text-align:justify"><span style="font-size:14px">Merekrut tim (dari dalam maupun luar perusahaan), meningkatkan kinerja kolektif tim, dan mengelola tim.</span></li>\r\n	<li style="text-align:justify"><span style="font-size:14px">Melaksanakan proses procurement barang dan jasa.</span></li>\r\n	<li style="text-align:justify"><span style="font-size:14px">Distribusi imformasi dan laporan kepada stakeholder, dengan menggunakan sarana yang relevan sesuai communication plan. Disamping itu, informasi mengenai stakeholder juga harus selalu dipantau dan diperbaharui. Dan, yang paling penting adalah melakukan tindakan-tindakan untuk mengelola ekspektasi stakeholder.</span></li>\r\n</ol>\r\n', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd', 'jenadi144@gmail.com', '4502', '8121121', 'Untitled-1.jpg', 'https://www.youtube.com/embed/DWRcNpR6Kdc', 'feature.jpg', 'jl.R.supratman no.9');

-- --------------------------------------------------------

--
-- Table structure for table `proyek`
--

CREATE TABLE `proyek` (
  `id_proyek` int(11) NOT NULL,
  `id_kontraktor` varchar(11) NOT NULL,
  `id_pengawas` varchar(11) NOT NULL,
  `namaproyek` varchar(225) NOT NULL,
  `id_kategori` varchar(225) NOT NULL,
  `dana` varchar(225) NOT NULL,
  `lamapekerjaan` varchar(225) NOT NULL,
  `status` varchar(225) NOT NULL,
  `longitude` varchar(225) NOT NULL,
  `latitude` varchar(225) NOT NULL,
  `tgl` date NOT NULL,
  `keterangan` text NOT NULL,
  `rab` varchar(225) NOT NULL,
  `tahunanggaran` varchar(225) NOT NULL,
  `foto` varchar(225) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `spk` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proyek`
--

INSERT INTO `proyek` (`id_proyek`, `id_kontraktor`, `id_pengawas`, `namaproyek`, `id_kategori`, `dana`, `lamapekerjaan`, `status`, `longitude`, `latitude`, `tgl`, `keterangan`, `rab`, `tahunanggaran`, `foto`, `tgl_mulai`, `tgl_selesai`, `spk`) VALUES
(27, '7', '1', 'PERBAIKAN JALAN', '2', '200000', '2', 'Finish', '109.958246', '-1.824624', '2023-07-09', '', 'pita.jpeg', '2023', 'liong.jpeg', '2023-07-01', '2023-07-31', 'santi.jpeg'),
(29, '8', '1', 'hambalang', '1', '10000000', '36', 'Finish', '109.995654', '-1.796314', '2023-08-06', 'sdsdsd', 'dedb3978e855cd97a6e19997fa5b177f.jfif', '2023', 'Supplier-Sparepart-Motor-Surabaya-Lengkap-Barang-Original.jpg', '2023-08-06', '2024-08-06', '207552-sistem-informasi-persediaan-suku-cadang.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `spj`
--

CREATE TABLE `spj` (
  `id_spj` int(11) NOT NULL,
  `id_pengawas` varchar(225) NOT NULL,
  `id_proyek` varchar(11) NOT NULL,
  `spj` varchar(225) NOT NULL,
  `keterangan` text NOT NULL,
  `status` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spj`
--

INSERT INTO `spj` (`id_spj`, `id_pengawas`, `id_proyek`, `spj`, `keterangan`, `status`) VALUES
(3, '1', '27', 'ketapang.jpeg', 'abs', 'Sudah Konfirmasi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id_banner`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indexes for table `kategoriproyek`
--
ALTER TABLE `kategoriproyek`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `keritikandansaran`
--
ALTER TABLE `keritikandansaran`
  ADD PRIMARY KEY (`id_keritikan`);

--
-- Indexes for table `kontraktor`
--
ALTER TABLE `kontraktor`
  ADD PRIMARY KEY (`id_kontraktor`);

--
-- Indexes for table `laporanproyek`
--
ALTER TABLE `laporanproyek`
  ADD PRIMARY KEY (`id_laporan`);

--
-- Indexes for table `pengawas`
--
ALTER TABLE `pengawas`
  ADD PRIMARY KEY (`id_pengawas`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- Indexes for table `proyek`
--
ALTER TABLE `proyek`
  ADD PRIMARY KEY (`id_proyek`);

--
-- Indexes for table `spj`
--
ALTER TABLE `spj`
  ADD PRIMARY KEY (`id_spj`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id_banner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id_karyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1553;
--
-- AUTO_INCREMENT for table `kategoriproyek`
--
ALTER TABLE `kategoriproyek`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `keritikandansaran`
--
ALTER TABLE `keritikandansaran`
  MODIFY `id_keritikan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `kontraktor`
--
ALTER TABLE `kontraktor`
  MODIFY `id_kontraktor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `laporanproyek`
--
ALTER TABLE `laporanproyek`
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `pengawas`
--
ALTER TABLE `pengawas`
  MODIFY `id_pengawas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
  MODIFY `id_profil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `proyek`
--
ALTER TABLE `proyek`
  MODIFY `id_proyek` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `spj`
--
ALTER TABLE `spj`
  MODIFY `id_spj` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
