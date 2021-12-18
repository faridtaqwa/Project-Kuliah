-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Nov 2020 pada 00.51
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `revisisurat2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_kelahiran`
--

CREATE TABLE `data_kelahiran` (
  `id` int(11) NOT NULL,
  `no_kk` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nama_kk` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nik` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `jk` enum('L','P') COLLATE utf8_unicode_ci DEFAULT NULL,
  `tmpt_lahiran` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tmpt_lahir` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hari_lahir` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jam_lahir` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jenis_kelahiran` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `kelahiran_ke` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `penolong_lahir` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `berat` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `panjang` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ibu_nik` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ibu_nama` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ibu_tmpt_lahir` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ibu_tgl_lahir` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ibu_pekerjaan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ibu_alamat` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ibu_kewarganegaraan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ibu_tgl_kawin` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ayah_nik` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ayah_nama` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ayah_tmpt_lahir` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ayah_tgl_lahir` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ayah_pekerjaan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ayah_alamat` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ayah_kewarganegaraan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pelapor_nik` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pelapor_nama` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pelapor_tmp_lahir` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pelapor_tgl_lahir` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pelapor_umur` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pelapor_kerja` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pelapor_alamat` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tgl_lapor` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `saksi_nik` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `saksi_nama` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `saksi_umur` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `saksi_alamat` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `saksi_2_nik` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `saksi_2_nama` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `saksi_2_umur` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `saksi_2_alamat` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_kematian`
--

CREATE TABLE `data_kematian` (
  `id` int(11) NOT NULL,
  `nama_kk` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `no_kk` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nik` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `jk` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tmpt_lahir` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hari_meninggal` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tgl_lahir` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `umur` int(10) DEFAULT NULL,
  `agama` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pekerjaan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `anak_ke` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meninggal_tgl` date DEFAULT NULL,
  `tmpt_meninggal` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `jam_meninggal` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sebab` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tmpt_kematian` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `menerangkan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ibu_nik` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ibu_nama` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ibu_tmpt_lahir` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ibu_tgl_lahir` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ibu_pekerjaan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ibu_alamat` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ibu_kewarganegaraan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ayah_nik` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ayah_nama` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ayah_tmpt_lahir` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ayah_tgl_lahir` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ayah_pekerjaan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ayah_alamat` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ayah_kewarganegaraan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pelapor_nik` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pelapor_nama` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pelapor_tmp_lahir` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pelapor_tgl_lahir` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pelapor_umur` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pelapor_kerja` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pelapor_alamat` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tgl_lapor` date DEFAULT NULL,
  `saksi1_nik` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `saksi1_nama` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `saksi1_umur` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `saksi1_alamat` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `saksi2_nik` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `saksi2_nama` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `saksi2_umur` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `saksi2_alamat` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pengajuans`
--

CREATE TABLE `data_pengajuans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategori_surat_id` bigint(20) UNSIGNED NOT NULL,
  `warga_id` bigint(20) UNSIGNED DEFAULT NULL,
  `nama_pemesan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jenis_kelamin` enum('pria','wanita') COLLATE utf8_unicode_ci DEFAULT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tanggal_lahir` varchar(0) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nik` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pekerjaan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status_perkawinan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `agama` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `berkas` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `data` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `data_pengajuans`
--

INSERT INTO `data_pengajuans` (`id`, `kategori_surat_id`, `warga_id`, `nama_pemesan`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `nik`, `alamat`, `pekerjaan`, `status_perkawinan`, `agama`, `berkas`, `created_at`, `updated_at`, `data`) VALUES
(1, 5, NULL, 'adminpermohonanpindah', 'pria', NULL, NULL, NULL, NULL, NULL, 'kawin', 'islam', NULL, '2020-11-26 03:55:04', '2020-11-26 03:55:04', '1'),
(2, 6, NULL, 'adminsuratketeranganpindah', 'pria', NULL, NULL, NULL, NULL, NULL, 'kawin', 'islam', NULL, '2020-11-26 05:21:22', '2020-11-26 05:21:22', '1'),
(3, 6, NULL, '2adminpindahdatangwni', 'pria', NULL, NULL, NULL, NULL, NULL, 'kawin', 'islam', NULL, '2020-11-26 06:00:23', '2020-11-26 06:00:23', '2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pengantar_pindah`
--

CREATE TABLE `data_pengantar_pindah` (
  `id` int(11) NOT NULL,
  `nik` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tgl_lahir` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `no_kk` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nama_kk` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `desa` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `kecamatan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tujuan_alamat` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tujuan_desa` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tujuan_kecamatan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tujuan_kabupaten` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tujuan_provinsi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `jumlah_pindah` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pengantar_umum`
--

CREATE TABLE `data_pengantar_umum` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nik` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tgl_lahir` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `jk` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `agama` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status_kawin` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pekerjaan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tujuan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `keperluan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_permohonan_pindah`
--

CREATE TABLE `data_permohonan_pindah` (
  `id` int(11) NOT NULL,
  `no_kk` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nama_kk` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `desa` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `kecamatan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `kab` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `provinsi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `kodepos` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nik_pemohon` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tgl_lahir` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alasan_pindah` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tujuan_alamat_pindah` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tujuan_desa` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tujuan_kecamatan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tujuan_kab` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tujuan_prov` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tujuan_kodepos` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `jenis_pindah` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status_kk` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status_no_kk_pindah` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `data_permohonan_pindah`
--

INSERT INTO `data_permohonan_pindah` (`id`, `no_kk`, `nama_kk`, `alamat`, `desa`, `kecamatan`, `kab`, `provinsi`, `kodepos`, `nik_pemohon`, `tempat_lahir`, `tgl_lahir`, `nama`, `alasan_pindah`, `tujuan_alamat_pindah`, `tujuan_desa`, `tujuan_kecamatan`, `tujuan_kab`, `tujuan_prov`, `tujuan_kodepos`, `jenis_pindah`, `status_kk`, `status_no_kk_pindah`) VALUES
(1, '12123', 'adminpermohonanpindah', 'adminpermohonanpindah', 'adminpermohonanpindah', 'adminpermohonanpindah', 'adminpermohonanpindah', 'adminpermohonanpindah', 'adminpermohonanpindah', '332992731832', 'adminpermohonanpindah', '2020-07-15', 'adminpermohonanpindah', 'Pekerjaan', 'adminpermohonanpindah', 'adminpermohonanpindah', 'adminpermohonanpindah', 'adminpermohonanpindah', 'adminpermohonanpindah', 'adminpermohonanpindah', 'Kep. Keluarga', 'Numpang KK', 'Numpang KK');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_permohonan_pindah_datang`
--

CREATE TABLE `data_permohonan_pindah_datang` (
  `id` int(11) NOT NULL,
  `no_kk` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nama_kk` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `desa` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `kodepos` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `kecamatan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `kabupaten` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `provinsi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nik_pemohon` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tmpt_lahir` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tgl_lahir` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tujuan_kk` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tujuan_no_kk` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tujuan_nama_kk` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tgl_datang` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tujuan_alamat` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tujuan_desa` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tujuan_kecamatan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tujuan_kabupaten` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tujuan_provinsi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tujuan_kodepos` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_surat_pindah_datang`
--

CREATE TABLE `data_surat_pindah_datang` (
  `id` int(11) NOT NULL,
  `no_kk` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nama_kk` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `desa` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `kodepos` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `kecamatan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `kabupaten` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `provinsi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nik_pemohon` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tmpt_lahir` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tgl_lahir` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tujuan_kk` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tujuan_no_kk` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tujuan_nama_kk` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tgl_datang` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tujuan_alamat` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tujuan_desa` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tujuan_kecamatan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tujuan_kabupaten` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tujuan_provinsi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tujuan_kodepos` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `data_surat_pindah_datang`
--

INSERT INTO `data_surat_pindah_datang` (`id`, `no_kk`, `nama_kk`, `alamat`, `desa`, `kodepos`, `kecamatan`, `kabupaten`, `provinsi`, `nik_pemohon`, `tmpt_lahir`, `tgl_lahir`, `nama`, `tujuan_kk`, `tujuan_no_kk`, `tujuan_nama_kk`, `tgl_datang`, `tujuan_alamat`, `tujuan_desa`, `tujuan_kecamatan`, `tujuan_kabupaten`, `tujuan_provinsi`, `tujuan_kodepos`) VALUES
(1, '12123', 'adminsuratketeranganpindah', 'adminsuratketeranganpindah', 'adminsuratketeranganpindah', '5585', 'adminsuratketeranganpindah', 'adminsuratketeranganpindah', 'adminsuratketeranganpindah', '332992731832', 'sleman', '2020-07-15', 'adminsuratketeranganpindah', 'Membuat KK Baru', '4345343', 'adminsuratketeranganpindah', 'adminsuratketeranganpindah', 'adminsuratketeranganpindah', 'adminsuratketeranganpindah', 'adminsuratketeranganpindah', 'adminsuratketeranganpindah', 'adminsuratketeranganpindah', '2231'),
(2, '12123', '2adminpindahdatangwni', '2adminpindahdatangwni', '2adminpindahdatangwni', '2adminpindahdatangwni', '2adminpindahdatangwni', '2adminpindahdatangwni', '2adminpindahdatangwni', '332992731832', '2adminpindahdatangwni', '2020-07-15', '2adminpindahdatangwni', 'Membuat KK Baru', '4345343', '2adminpindahdatangwni', '22 oktober 2020', '2adminpindahdatangwni', '2adminpindahdatangwni', '2adminpindahdatangwni', '2adminpindahdatangwni', '2adminpindahdatangwni', '5531');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8_unicode_ci NOT NULL,
  `queue` text COLLATE utf8_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_surats`
--

CREATE TABLE `kategori_surats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kop_surat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kode_surat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alamat_instansi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `margin_bawah` int(11) DEFAULT NULL,
  `margin_atas` int(11) DEFAULT NULL,
  `margin_kekanan` int(11) DEFAULT NULL,
  `paragraf_awal` text COLLATE utf8_unicode_ci NOT NULL,
  `paragraf_akhir` text COLLATE utf8_unicode_ci NOT NULL,
  `nomor_pegawai_ttd` text COLLATE utf8_unicode_ci NOT NULL,
  `jabatan_ttd` text COLLATE utf8_unicode_ci NOT NULL,
  `nama_ttd` text COLLATE utf8_unicode_ci NOT NULL,
  `data_template` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `kategori_surats`
--

INSERT INTO `kategori_surats` (`id`, `nama`, `kop_surat`, `kode_surat`, `alamat_instansi`, `margin_bawah`, `margin_atas`, `margin_kekanan`, `paragraf_awal`, `paragraf_akhir`, `nomor_pegawai_ttd`, `jabatan_ttd`, `nama_ttd`, `data_template`, `created_at`, `updated_at`) VALUES
(1, 'surat keterangan kelahiran', '<p>p</p>', '472.11/nomer/220/P/X/2020', 'jl besi jangkang kaliurang km 14,4', 1, 1, 1, '<p>p</p>', '<p>p</p>', '11121212', 'Kepala Desa', 'Budiono', '\"{\\\"nama\\\":[\\\"nomer_kartu_keluarga\\\",\\\"nama_kepala_keluarga\\\",\\\"nama_lengkap_bayi\\\",\\\"jenis_kelamin_bayi\\\",\\\"tempat_dilahirkan\\\",\\\"tempat_kelahiran\\\",\\\"hari_dilahirkan\\\",\\\"tanggal_lahir\\\",\\\"jam_kelahiran\\\",\\\"jenis_kelahiran\\\",\\\"kelahiran_ke\\\",\\\"penolong_kelahiran\\\",\\\"berat_bayi\\\",\\\"panjang_bayi\\\",\\\"nik_ibu\\\",\\\"nama_lengkap_ibu\\\",\\\"tempat_tangga_lahir_ibu\\\",\\\"pekerjaan_ibu\\\",\\\"alamat_lengkap_ibu\\\",\\\"kewarga_negaraan_ibu\\\",\\\"tanggal_pernikahan\\\",\\\"nik_ayah\\\",\\\"nama_lengkap_ayah\\\",\\\"tempat_tanggal_lahir_ayah\\\",\\\"umur_ayah\\\",\\\"pakerjaan_ayah\\\",\\\"alamat_ayah\\\",\\\"kewarganegaraan_ayah\\\",\\\"nik_pelapor\\\",\\\"nama_lengkap_pelapor\\\",\\\"tempat_tanggal_lahir_pelapor\\\",\\\"umur_pelapor\\\",\\\"pekerjaan_pelapor\\\",\\\"alamat_pelapor\\\",\\\"tanggal_lapor\\\",\\\"nik_saksi1\\\",\\\"nama_lengkap_saksi1\\\",\\\"umur_saksi1\\\",\\\"alamat_saksi1\\\",\\\"nik_saksi2\\\",\\\"nama_lengkap_saksi2\\\",\\\"umur_saksi2\\\",\\\"alamat_saksi2\\\"],\\\"type\\\":[\\\"string\\\",\\\"string\\\",\\\"string\\\",\\\"string\\\",\\\"string\\\",\\\"string\\\",\\\"string\\\",\\\"date\\\",\\\"string\\\",\\\"string\\\",\\\"string\\\",\\\"string\\\",\\\"string\\\",\\\"string\\\",\\\"string\\\",\\\"string\\\",\\\"string\\\",\\\"string\\\",\\\"string\\\",\\\"string\\\",\\\"date\\\",\\\"string\\\",\\\"string\\\",\\\"string\\\",\\\"string\\\",\\\"string\\\",\\\"string\\\",\\\"string\\\",\\\"string\\\",\\\"string\\\",\\\"string\\\",\\\"string\\\",\\\"string\\\",\\\"string\\\",\\\"date\\\",\\\"string\\\",\\\"string\\\",\\\"string\\\",\\\"string\\\",\\\"string\\\",\\\"string\\\",\\\"string\\\",\\\"string\\\"]}\"', '2020-11-12 04:40:26', '2020-11-12 05:21:08'),
(2, 'surat keteragan kematian', '<p>p</p>', '472.12/nomer/200', 'jl besi jangkang kaliurang km 14,4', 1, 1, 1, '<p>p</p>', '<p>p</p>', '11111', 'Kepala Desa', 'Budiono', '\"{\\\"nama\\\":[\\\"nama_kepa_keluarga\\\",\\\"nomer_kartu_keluarga\\\",\\\"nik_jenazah\\\",\\\"nama_lengkap_jenazah\\\",\\\"jenis_kelamin_jenazah\\\",\\\"tempat_kelahiran_jenazah\\\",\\\"tanggal_lahir_jenazah\\\",\\\"umur_jenazah\\\",\\\"agama_jenazah\\\",\\\"pekerjaan_jenazah\\\",\\\"alamat_jenazah\\\",\\\"anak_ke\\\",\\\"hari_kematian\\\",\\\"tanggal_kematian\\\",\\\"tempat_meninggal\\\",\\\"jam_meninggal\\\",\\\"sebab\\\",\\\"tempat_kematian\\\",\\\"yang_menerangkan\\\"],\\\"type\\\":[\\\"string\\\",\\\"string\\\",\\\"string\\\",\\\"string\\\",\\\"string\\\",\\\"string\\\",\\\"date\\\",\\\"string\\\",\\\"string\\\",\\\"string\\\",\\\"string\\\",\\\"string\\\",\\\"string\\\",\\\"date\\\",\\\"string\\\",\\\"string\\\",\\\"string\\\",\\\"string\\\",\\\"string\\\"]}\"', '2020-11-12 06:29:25', '2020-11-12 06:29:25'),
(3, 'surat pengantar umum', '<p>PEMERINTAH KABUPATEN SLEMAN</p>\r\n\r\n<p>KECAMATAN NGEMPLAK</p>\r\n\r\n<p>PEMERINTAH DESA UMBULMARTANI</p>', '4721.21/210/p/bulan/2020', 'Grogolan, Umbulmartani, Ngemplak, Sleman, DIY 55584', 1, 1, 1, '<p>Yang bertanda tangan di bawah ini, menerangkan Permohonan PIndah Penduduk WNI dengan data debagai berikut:</p>', '<p>Adapun Pemohonan PIndah Penduduk WNI yang bersangkutan sebagaimana terlampir.</p>\r\n\r\n<p>Demikian surat Pengantar Pindah ini dibuat agar digunakan sebagaimana mestinya.</p>', '11121212', 'Kepala Desa', 'Budiono', '\"{\\\"nama\\\":[\\\"nik\\\",\\\"nama_lengkap\\\",\\\"tempat_lahir\\\",\\\"tanggal_lahir\\\",\\\"nomor_kartu_keluarga\\\",\\\"alamat_sekarang\\\",\\\"alamat_tujuan_pindah\\\",\\\"jumlah_keluarga__yang_pindah\\\"],\\\"type\\\":[\\\"string\\\",\\\"string\\\",\\\"string\\\",\\\"date\\\",\\\"string\\\",\\\"string\\\",\\\"string\\\",\\\"string\\\"]}\"', '2020-11-12 06:43:00', '2020-11-12 06:43:00'),
(4, 'surat pengantar pindah', '<p>c</p>', '10/p/X/2020', 'jl besi jangkang kaliurang km 14,4', 1, 1, 1, '<p>Saya yang bertanda tangan di bawah ini</p>\r\n\r\n<p>a. Nama:</p>\r\n\r\n<p>b Jabatan:</p>\r\n\r\n<p>dengan ini menrangkan bahwa:</p>', '<p>Berhubungan dengan keprluan yang bersangkutan, dimohon agar yang berwenang dapt memberikan bantuan serta fasilitas seperlunya.</p>\r\n\r\n<p>Demikina surat keterangan ini dibuat untuk dipergunakan seperlunya.</p>', '11121212', 'ssss12', 'Budiono', '\"{\\\"nama\\\":[\\\"nama\\\",\\\"nik\\\",\\\"tempat_lahir\\\",\\\"tanggal_lahir\\\",\\\"jenis_kelamin\\\",\\\"agama\\\",\\\"status_perkawinan\\\",\\\"pekerjaan\\\",\\\"alamat\\\",\\\"tujuan_ke\\\",\\\"keperluan\\\"],\\\"type\\\":[\\\"string\\\",\\\"string\\\",\\\"string\\\",\\\"date\\\",\\\"string\\\",\\\"string\\\",\\\"string\\\",\\\"string\\\",\\\"string\\\",\\\"string\\\",\\\"string\\\"]}\"', '2020-11-12 06:48:59', '2020-11-12 06:48:59'),
(5, 'formulir permohonan pindah', '<p>', '1234', 'jl besi jangkang', 1, 1, 1, '<p>', 'p', '1111111', '1111', 'Budiono', '121', '2020-11-22 16:33:03', '2020-11-22 16:33:07'),
(6, 'surat keterangan pindah datang', '<p>', '2222', 'jl besi', 1, 1, 1, 'pp', 'pp', '321', '31', 'Budiono', 'asds', '2020-11-22 16:34:09', '2020-11-22 16:34:15'),
(7, 'formulir permohonan pindah datang', '<p>', '3333', 'jl besi jangkah', 1, 1, 1, '112', '212', '21', '12', 'Budiono', '3232', '2020-11-22 16:34:58', '2020-11-22 16:35:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keluarga_datang`
--

CREATE TABLE `keluarga_datang` (
  `id` int(11) NOT NULL,
  `nik` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `masa_berlaku` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shdk` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_perm_pindah` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `keluarga_datang`
--

INSERT INTO `keluarga_datang` (`id`, `nik`, `nama`, `masa_berlaku`, `shdk`, `id_perm_pindah`) VALUES
(1, '12343434', 'adminsuratketeranganpindah1', '2020', 'Kepala keluarga', 1),
(2, '12343434', 'adminsuratketeranganpindah2', '2020', 'anak', 1),
(3, '12343434', 'adminsuratketeranganpindah3', '2020', 'anak', 1),
(4, '12343434', '2adminpindahdatangwni1', '2020', 'Kepala keluarga', 2),
(5, '12343434', '2adminpindahdatangwni2', '2020', 'Kepala keluarga', 2),
(6, '12343434', '2adminpindahdatangwni3', NULL, 'Kepala keluarga', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `keluarga_perm_datang`
--

CREATE TABLE `keluarga_perm_datang` (
  `id` int(11) NOT NULL,
  `nik` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `masa_berlaku` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shdk` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_perm_pindah` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `keluarga_pindah`
--

CREATE TABLE `keluarga_pindah` (
  `id` int(11) NOT NULL,
  `nik` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `masa_berlaku` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shdk` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_perm_pindah` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `keluarga_pindah`
--

INSERT INTO `keluarga_pindah` (`id`, `nik`, `nama`, `masa_berlaku`, `shdk`, `id_perm_pindah`) VALUES
(1, '12343434', 'adminpermohonanpindah', '2020', 'Kepala keluarga', 1),
(2, '12343434', 'adminpermohonanpindah', '2020', 'anak', 1),
(3, '12343434', 'adminpermohonanpindah', '2020', 'istri', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_07_08_121641_create_kategori_surats_table', 1),
(5, '2020_07_08_121747_create_wargas_table', 1),
(6, '2020_07_08_121821_create_data_pengajuans_table', 1),
(7, '2020_07_08_121841_create_pesanans_table', 1),
(8, '2020_07_10_133820_add_tglpesan_to_pesanan_table', 1),
(9, '2020_09_09_001302_add_margin_instansi_in_kategori_surat', 1),
(10, '2020_09_23_001104_make_isambil_to_pesanan', 1),
(11, '2020_11_05_100133_add_column_to_data_pengajuan', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanans`
--

CREATE TABLE `pesanans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `data_pengajuan_id` bigint(20) UNSIGNED NOT NULL,
  `pemverifikasi_id` bigint(20) UNSIGNED DEFAULT NULL,
  `nomer_surat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` char(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0' COMMENT '0: proses, 1: verifikasi, 2: jadi',
  `is_ambil` tinyint(1) NOT NULL DEFAULT 0,
  `tanggal_pesan` date DEFAULT NULL,
  `tanggal_verifikasi` date DEFAULT NULL,
  `tanggal_jadi` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `pesanans`
--

INSERT INTO `pesanans` (`id`, `data_pengajuan_id`, `pemverifikasi_id`, `nomer_surat`, `status`, `is_ambil`, `tanggal_pesan`, `tanggal_verifikasi`, `tanggal_jadi`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, 'nomor', '0', 0, '2020-11-26', NULL, NULL, '2020-11-26 03:55:04', '2020-11-26 04:00:15'),
(2, 2, NULL, 'nomor', '0', 0, '2020-11-26', NULL, NULL, '2020-11-26 05:21:23', '2020-11-26 05:21:23'),
(3, 3, NULL, 'nomor', '0', 0, '2020-11-26', NULL, NULL, '2020-11-26 06:00:23', '2020-11-26 06:00:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nomer_pegawai` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nomer_pegawai`, `nama`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ATT123', 'deni', 'deni@gmail.com', NULL, '$2y$10$50mjVm94RqXPmGMdonGzpePa4Rx8U0lL//EBj6shPdafFUsnpDBBu', 'admin', NULL, '2020-11-12 04:36:29', '2020-11-12 04:36:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `wargas`
--

CREATE TABLE `wargas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `wargas`
--

INSERT INTO `wargas` (`id`, `nama`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'warga', 'warga@gmail.com', '$2y$10$PcySRO8liqYf5HXzXllVRe5Dpb1ra/2jTFISBd9qN58i590pNqP8.', '2020-11-16 12:50:08', '2020-11-16 12:50:08'),
(2, 'dito', 'dito@mail.com', '$2y$10$50mjVm94RqXPmGMdonGzpePa4Rx8U0lL//EBj6shPdafFUsnpDBBu', '2020-11-22 07:46:36', '2020-11-22 07:46:36'),
(3, 'akuwarga', 'akuwarga@gmail.com', '$2y$10$8skzn4CJaoFfBacBk4scpuJCQBWQhv5SV2QEEYo6aPKSx0G/Anl3e', '2020-11-23 15:03:07', '2020-11-23 15:03:07');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_kelahiran`
--
ALTER TABLE `data_kelahiran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_kematian`
--
ALTER TABLE `data_kematian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_pengajuans`
--
ALTER TABLE `data_pengajuans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_pengantar_pindah`
--
ALTER TABLE `data_pengantar_pindah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_pengantar_umum`
--
ALTER TABLE `data_pengantar_umum`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_permohonan_pindah`
--
ALTER TABLE `data_permohonan_pindah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_permohonan_pindah_datang`
--
ALTER TABLE `data_permohonan_pindah_datang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_surat_pindah_datang`
--
ALTER TABLE `data_surat_pindah_datang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori_surats`
--
ALTER TABLE `kategori_surats`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `keluarga_datang`
--
ALTER TABLE `keluarga_datang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `keluarga_perm_datang`
--
ALTER TABLE `keluarga_perm_datang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `keluarga_pindah`
--
ALTER TABLE `keluarga_pindah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pesanans`
--
ALTER TABLE `pesanans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indeks untuk tabel `wargas`
--
ALTER TABLE `wargas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `wargas_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_kelahiran`
--
ALTER TABLE `data_kelahiran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `data_kematian`
--
ALTER TABLE `data_kematian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `data_pengajuans`
--
ALTER TABLE `data_pengajuans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `data_pengantar_pindah`
--
ALTER TABLE `data_pengantar_pindah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `data_pengantar_umum`
--
ALTER TABLE `data_pengantar_umum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `data_permohonan_pindah`
--
ALTER TABLE `data_permohonan_pindah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `data_permohonan_pindah_datang`
--
ALTER TABLE `data_permohonan_pindah_datang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `data_surat_pindah_datang`
--
ALTER TABLE `data_surat_pindah_datang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kategori_surats`
--
ALTER TABLE `kategori_surats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `keluarga_datang`
--
ALTER TABLE `keluarga_datang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `keluarga_perm_datang`
--
ALTER TABLE `keluarga_perm_datang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `keluarga_pindah`
--
ALTER TABLE `keluarga_pindah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `pesanans`
--
ALTER TABLE `pesanans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `wargas`
--
ALTER TABLE `wargas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
