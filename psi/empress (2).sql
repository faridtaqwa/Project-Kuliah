-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2019 at 07:37 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `empress`
--

-- --------------------------------------------------------

--
-- Table structure for table `aturan`
--

CREATE TABLE `aturan` (
  `id` int(11) NOT NULL,
  `variable1` varchar(255) NOT NULL,
  `logika` varchar(255) NOT NULL,
  `variable2` varchar(255) NOT NULL,
  `kesimpulan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aturan`
--

INSERT INTO `aturan` (`id`, `variable1`, `logika`, `variable2`, `kesimpulan`) VALUES
(1, 'tinggi', 'dan', 'banyak', 'tinggi'),
(2, 'tinggi', 'dan', 'sedikit', 'tinggi'),
(3, 'rendah', 'dan', 'banyak', 'tinggi'),
(4, 'rendah', 'dan', 'sedikit', 'rendah');

-- --------------------------------------------------------

--
-- Table structure for table `desa`
--

CREATE TABLE `desa` (
  `id` int(11) NOT NULL,
  `namaDesa` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `id_logistik` int(10) NOT NULL,
  `stok_logistik` varchar(255) NOT NULL,
  `id_distribusi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `desa`
--

INSERT INTO `desa` (`id`, `namaDesa`, `lokasi`, `id_logistik`, `stok_logistik`, `id_distribusi`) VALUES
(1, 'Bokoharjo', 'Sleman', 4, '3', 1);

--
-- Triggers `desa`
--
DELIMITER $$
CREATE TRIGGER `distribusi_logstik` AFTER INSERT ON `desa` FOR EACH ROW BEGIN
	UPDATE logistik SET kuantitas=kuantitas-NEW.stok_logistik
    WHERE id = NEW.id_logistik;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `distribusi`
--

CREATE TABLE `distribusi` (
  `id` int(11) NOT NULL,
  `namaPengirim` varchar(255) NOT NULL,
  `namaPenerima` varchar(255) NOT NULL,
  `tgl_distribusi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `distribusi`
--

INSERT INTO `distribusi` (`id`, `namaPengirim`, `namaPenerima`, `tgl_distribusi`) VALUES
(1, 'farid', 'aqil', '2019-07-01');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategoris` int(10) NOT NULL,
  `jenisKategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategoris`, `jenisKategori`) VALUES
(5, 'Pangan'),
(6, 'Minuman'),
(7, 'Alat Bangunan'),
(8, 'Alat Kebersihan'),
(9, 'Obat-obatan'),
(10, 'Pakaian'),
(11, 'Perlengkapan Bayi');

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id` int(10) NOT NULL,
  `jenis` varchar(191) NOT NULL,
  `logistik_diperlukan` varchar(191) NOT NULL,
  `kabupaten` varchar(191) NOT NULL,
  `kecamatan` varchar(191) NOT NULL,
  `desa` varchar(191) NOT NULL,
  `kodepos` varchar(191) NOT NULL,
  `jumlahKorban` int(11) NOT NULL,
  `tingkatKerusakan` int(11) NOT NULL,
  `prioritas` varchar(255) NOT NULL,
  `id_trc` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id`, `jenis`, `logistik_diperlukan`, `kabupaten`, `kecamatan`, `desa`, `kodepos`, `jumlahKorban`, `tingkatKerusakan`, `prioritas`, `id_trc`) VALUES
(1, 'Banjir', '30 Pakaian , 35 Makanan Instan , 15 Minuman', 'Gunung Kidul', 'Karangmojo', 'Gedangrejo', '55572', 10, 1, 'rendah', 1),
(2, 'Longsor', '10 Sekop , 5 Seng , 13 First Aid Kit', 'Kabupaten', 'Gunung Kidul', 'Desa', '55573', 50, 90, 'Tinggi', 1),
(3, 'Banjir', 'Logistik', 'Kabupaten', 'Kecamatan', 'Desa', 'Kodepos', 11, 11, 'Rendah', 1),
(4, 'longsor', 'beras', 'kabupaten', 'sleman', 'kimpulan', '5555', 11, 40, 'Rendah', 1),
(5, 'cdnj', 'dsjnds', 'dsbds', 'dsjnjds', 'dsbds', 'hbdhsd', 1000, 50, 'Tinggi', 1),
(6, 'dsnds', 'sd', 'sdsd', 'ds', 'sd', 'ds', 10, 1, 'Rendah', 1),
(7, 'Banjir', 'logistik', 'Kabupaten', 'Kecamatan', 'Desa', 'kodepos', 15, 30, 'Rendah', 1);

-- --------------------------------------------------------

--
-- Table structure for table `logistik`
--

CREATE TABLE `logistik` (
  `id` int(10) NOT NULL,
  `namaLogistik` varchar(191) NOT NULL,
  `kuantitas` int(10) NOT NULL,
  `tgl_kedaluwarsa` date NOT NULL,
  `id_kategori` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logistik`
--

INSERT INTO `logistik` (`id`, `namaLogistik`, `kuantitas`, `tgl_kedaluwarsa`, `id_kategori`) VALUES
(4, 'Beras', 6, '2020-07-05', 5),
(5, 'Pakaian', 20, '0001-01-01', 10),
(6, 'Sekop', 2, '0001-01-01', 7),
(7, 'Pakaian Bayi', 11, '0001-01-01', 11),
(8, 'Mie Instan', 15, '2020-01-01', 5),
(9, 'Obat Diare', 7, '2020-08-01', 9),
(10, 'Seng', 30, '2020-02-22', 7),
(11, 'Susu', 12, '2020-08-01', 6),
(12, 'Sapu lidi', 12, '0001-01-01', 8);

-- --------------------------------------------------------

--
-- Table structure for table `pusdalops`
--

CREATE TABLE `pusdalops` (
  `id` int(10) NOT NULL,
  `nama` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `alamat` varchar(191) NOT NULL,
  `kabupaten` varchar(191) NOT NULL,
  `desa` varchar(191) NOT NULL,
  `kecamatan` varchar(191) NOT NULL,
  `kodepos` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pusdalops`
--

INSERT INTO `pusdalops` (`id`, `nama`, `email`, `password`, `alamat`, `kabupaten`, `desa`, `kecamatan`, `kodepos`) VALUES
(1, 'Farid', 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3', 'Ngablak', 'Sleman', 'Prambanan', 'Bokoharjo', '55573');

-- --------------------------------------------------------

--
-- Table structure for table `trc`
--

CREATE TABLE `trc` (
  `id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trc`
--

INSERT INTO `trc` (`id`, `username`, `password`, `nama`) VALUES
(1, 'trc', '500b8afdc35b66099d38010dc4e0efb7', 'trc'),
(2, 'empress', 'f2bcb202581c20f9553215335acd7ec4', 'empress');

-- --------------------------------------------------------

--
-- Table structure for table `variable`
--

CREATE TABLE `variable` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `himpunan1` varchar(255) NOT NULL,
  `hiimpunan2` varchar(255) NOT NULL,
  `min` int(11) NOT NULL,
  `max` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `variable`
--

INSERT INTO `variable` (`id`, `nama`, `himpunan1`, `hiimpunan2`, `min`, `max`) VALUES
(1, 'prioritas', 'rendah', 'tinggi', 1, 10),
(2, 'tingkatKerusakan', 'rendah', 'tinggi', 1, 100),
(3, 'jumlahKorban', 'sedikit', 'banyak', 10, 1000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aturan`
--
ALTER TABLE `aturan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `desa`
--
ALTER TABLE `desa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_distribusi` (`id_distribusi`);

--
-- Indexes for table `distribusi`
--
ALTER TABLE `distribusi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategoris`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_trc` (`id_trc`);

--
-- Indexes for table `logistik`
--
ALTER TABLE `logistik`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `pusdalops`
--
ALTER TABLE `pusdalops`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trc`
--
ALTER TABLE `trc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `variable`
--
ALTER TABLE `variable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aturan`
--
ALTER TABLE `aturan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `desa`
--
ALTER TABLE `desa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `distribusi`
--
ALTER TABLE `distribusi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategoris` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `logistik`
--
ALTER TABLE `logistik`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pusdalops`
--
ALTER TABLE `pusdalops`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `trc`
--
ALTER TABLE `trc`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `variable`
--
ALTER TABLE `variable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `desa`
--
ALTER TABLE `desa`
  ADD CONSTRAINT `desa_ibfk_1` FOREIGN KEY (`id_distribusi`) REFERENCES `distribusi` (`id`);

--
-- Constraints for table `laporan`
--
ALTER TABLE `laporan`
  ADD CONSTRAINT `laporan_ibfk_1` FOREIGN KEY (`id_trc`) REFERENCES `trc` (`id`);

--
-- Constraints for table `logistik`
--
ALTER TABLE `logistik`
  ADD CONSTRAINT `logistik_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategoris`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
