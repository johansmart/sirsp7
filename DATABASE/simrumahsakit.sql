-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 01 Mar 2019 pada 06.44
-- Versi Server: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `simrumahsakit`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `log_pegawai`
--

CREATE TABLE IF NOT EXISTS `log_pegawai` (
`kode` int(11) NOT NULL,
  `kode_pegawai` varchar(11) DEFAULT NULL,
  `kode_user` varchar(20) DEFAULT NULL,
  `action` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_bed`
--

CREATE TABLE IF NOT EXISTS `tbl_bed` (
  `kode` varchar(11) NOT NULL DEFAULT '',
  `uraian` varchar(100) DEFAULT NULL,
  `tersedia` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_bed`
--

INSERT INTO `tbl_bed` (`kode`, `uraian`, `tersedia`, `total`, `tanggal`) VALUES
('T00001', 'Kelas I', 20, 20, '2019-01-26'),
('T00002', 'Kelas II', 20, 300, '2019-01-26'),
('T00003', 'Kelas III', 100, 400, '2019-01-26'),
('T00004', 'Ruang Rawat Luka Bakar', 5, 10, '2019-01-26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_cara_bayar`
--

CREATE TABLE IF NOT EXISTS `tbl_cara_bayar` (
  `kode` varchar(11) NOT NULL,
  `uraian` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_cara_bayar`
--

INSERT INTO `tbl_cara_bayar` (`kode`, `uraian`) VALUES
('C00001', 'BPJS'),
('C00002', 'Membayar Sendiri (Umum)'),
('C00003', 'Asuransi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_fasilitas`
--

CREATE TABLE IF NOT EXISTS `tbl_fasilitas` (
  `kode` varchar(11) NOT NULL,
  `uraian` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_fasilitas`
--

INSERT INTO `tbl_fasilitas` (`kode`, `uraian`, `gambar`) VALUES
('F00001', 'Hemodialisa', 'latar gambar 1.jpg'),
('F00002', '3333', '12222.jpg'),
('F00003', '3333', 'penjualan.jpg'),
('F00004', '333333333333333', 'thumgambar.jpg'),
('F00005', 'Kelas I', 'vvvvvvvvvvvvvv.png'),
('F00006', 'Radiologi', 'radiologi.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jabatan`
--

CREATE TABLE IF NOT EXISTS `tbl_jabatan` (
  `kode` varchar(11) NOT NULL,
  `uraian` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_jabatan`
--

INSERT INTO `tbl_jabatan` (`kode`, `uraian`) VALUES
('J00001', 'Dokter Umum'),
('J00002', 'Dokter Spesialis'),
('J00003', 'Pegawai Tetap');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kunjungan`
--

CREATE TABLE IF NOT EXISTS `tbl_kunjungan` (
  `kode` varchar(11) NOT NULL,
  `kode_pasien` varchar(11) DEFAULT NULL,
  `kode_dokter` varchar(11) DEFAULT NULL,
  `kode_bayar` varchar(11) DEFAULT NULL,
  `tgl_kunjungan` date DEFAULT NULL,
  `keluhan` text,
  `verifikasi` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kunjungan`
--

INSERT INTO `tbl_kunjungan` (`kode`, `kode_pasien`, `kode_dokter`, `kode_bayar`, `tgl_kunjungan`, `keluhan`, `verifikasi`) VALUES
('K00001', 'R00001', '23', 'C00001', '2019-02-01', '111', NULL),
('K00002', 'R00001', '23', 'C00001', '2019-02-02', '111', NULL),
('K00003', 'R00001', '23', 'C00002', '2019-02-24', 'sakit kantong', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_news`
--

CREATE TABLE IF NOT EXISTS `tbl_news` (
  `kode` varchar(11) NOT NULL,
  `kode_pegawai` varchar(11) DEFAULT NULL,
  `tanggal` datetime NOT NULL,
  `judul` varchar(200) NOT NULL,
  `konten` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_news`
--

INSERT INTO `tbl_news` (`kode`, `kode_pegawai`, `tanggal`, `judul`, `konten`) VALUES
('B00003', '11', '2019-01-26 17:01:39', 'Rumah Sakit Terbaik di Indonesia Tp Bohong', '<p style="text-align:justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; BAB I</strong></p>\r\n\r\n<p style="text-align:justify"><strong>PENDAHULUAN</strong></p>\r\n\r\n<ol>\r\n	<li style="text-align:justify"><strong>Latar Belakang</strong></li>\r\n</ol>\r\n\r\n<p style="text-align:justify">Dalam bidang ilmu pengetahuan dan teknologi pada saat ini berkembang secara pesat, diantaranya adalah kemajuan teknologi komputer. Komputer merupakan&nbsp; alat pengolah data yang sangat banyak digunakan dalam bidang perkantoran, pendidikan dan bidang &ndash; bidang lainnya.</p>\r\n\r\n<p style="text-align:justify">Perusahaan &ndash; perusahaan rumah sakit maupun instansi &ndash; instansi swasta dan pemerintah menggunakan komputer, komputer merupakan suatu kecanggihan teknologi yang sangat mendukung pekerjaan dan menunjang majunya suatu perusahaan. Rumah Sakit Imelada Pekerja Indonesia merupakan slah satu instansi pelayanan kesehatan yang sangat mendukung pembelajaran komputer.</p>\r\n\r\n<p style="text-align:justify">Perkembangan usaha di era globalisasi semakin pesat, banyak usaha &ndash; usaha baru yang bermunculan,&nbsp; kemunculan berbagai perusahaan baik kecil maupun besar sudah merupakan fenomena yang biasa. hal ini mengakibatkan tingkat persaingan antar perusahaan menjadi semakin ketat.</p>\r\n\r\n<p style="text-align:justify">Setiap perusahaan yang didirikan prioritas dan memiliki tujuan untuk mempermudah kinerja dan serta pelayanan tehadap kunjungan pasien di Rumah Sakit Imelda Pekerja Indonesia, khusunya memanajemen kendaraan di parkir, validasi kartu penitipan kendaraan dan laporan keuangan yang lengkap di Rumah Sakit Imelda Pekerja Indonesia.</p>\r\n\r\n<p style="text-align:justify">Maka untuk itu dilakukan Praktek Kerja Lapangan agar penulis mengetahui sistem dan memanajemen parkir kendaraan &nbsp;dengan menggunakan sistem komputer di Rumah Sakit Imelda Pekerja Indonesia.</p>\r\n\r\n<p style="text-align:justify">&nbsp;</p>\r\n\r\n<p style="text-align:justify">&nbsp;</p>\r\n\r\n<ol>\r\n	<li style="text-align:justify"><strong>Tujuan</strong><strong> Praktek Kerja Lapangan (PKL)</strong></li>\r\n</ol>\r\n\r\n<p style="text-align:justify">Adapun&nbsp; tujuan Praktek Kerja Lapangan ini adalah sebagai berikut :</p>\r\n\r\n<ol>\r\n	<li style="text-align:justify">Untuk memperoleh ilmu pengetahuan tentang komputer serta sejauh mana penerapannya.</li>\r\n	<li style="text-align:justify">Untuk mengetahui proses pengolahan pembayaran iuran parkir di Rumah Sakit Imelda Pekerja Indonesia.</li>\r\n	<li style="text-align:justify">Meningkatkan wawasan pengetahuan, pengalaman, kemampuan dan keterampilan di dunia kerja.</li>\r\n	<li style="text-align:justify">Mengetahui secara langsung gambaran kegiatan perusahaan.</li>\r\n	<li style="text-align:justify">Memenuhi salah satu syarat kelulusan Program Studi Komputerisasi Akuntansi pada Amik Imelda Medan.</li>\r\n</ol>\r\n\r\n<p style="text-align:justify">&nbsp;</p>\r\n\r\n<ol>\r\n	<li style="text-align:justify"><strong>Manfaat</strong>\r\n\r\n	<ol>\r\n		<li><strong>Manfaat Bagi Penulis</strong></li>\r\n	</ol>\r\n	</li>\r\n</ol>\r\n\r\n<p style="text-align:justify">Adapun manfaat yang di peroleh penulis dari pelaksanaan praktek kerja lapangan ini adalah :</p>\r\n\r\n<ol>\r\n	<li style="text-align:justify">Agar penulis dapat mempersiapkan dirinya dalam menghadapi tantangan di dalam dunia kerja.</li>\r\n	<li style="text-align:justify">Menumbuhkan rasa percaya diri dan rasa tanggung jawab untuk melaksanakan tugas dengan baik dalam praktek kerja lapangan ini.</li>\r\n	<li style="text-align:justify">Agar penulis dapat mengetahui sistem kerja dalam suatu Instansi. Mengembangkan dan mengimplementasi pengetahuan penulis dalam Ilmu pengetahuan dan teknologi pada suatu Istansi.</li>\r\n</ol>\r\n\r\n<p style="margin-left:21.3pt; text-align:justify">&nbsp;</p>\r\n\r\n<ol>\r\n	<li style="text-align:justify"><strong>Manfaat bagi Instansi</strong></li>\r\n</ol>\r\n\r\n<p style="text-align:justify">Adapun manfaat yang di peroleh oleh perusahaan dalam pelaksanaan praktek kerja lapangan ini adalah sebagai berikut :</p>\r\n\r\n<ol>\r\n	<li style="text-align:justify">Menjalani suatu kerja sama yang baik dengan Akademik pada umumnya dan dengan mahasiswa pada khususnya.</li>\r\n	<li style="text-align:justify">Perusahaan dapat menilai sumber daya manusia yang di hasilkan oleh suatu lembaga pendidikan tertentu.</li>\r\n	<li style="text-align:justify">Memotivasi efektivitas dan efisiensi pegawai yang bekerja.</li>\r\n	<li style="text-align:justify">Dapat membantu pekerjaan pegawai pada Instansi tersebut.</li>\r\n</ol>\r\n\r\n<p style="margin-left:2cm; text-align:justify">&nbsp;</p>\r\n\r\n<ol>\r\n	<li style="text-align:justify"><strong>&nbsp;&nbsp;</strong><strong>Ruang Lingkup</strong></li>\r\n</ol>\r\n\r\n<p style="text-align:justify">Dalam penelitian ini perlu ditegaskan batas &ndash; batas atau ruang lingkup penelitian. Batas itu dibuat untuk menghindari penelitian tersebut menjadi mengambang sehingga menjadi tidak terarah.</p>\r\n\r\n<p style="text-align:justify">Adapun yang menjadi ruang lingkup dari penelitian ini adalah tentang kemampuan perusahaan untuk mempermudah pekerjaan dalam melakukan transaksi dan validasi kartu tanda bukti penitipan kendaraan serta pelaporan keuangan baik untuk kebutuhan secara internal dan ekternal seperti laporan kepada direktur, dinas pendapatan.</p>\r\n\r\n<p style="text-align:justify">&nbsp;</p>\r\n\r\n<p style="text-align:justify"><strong>1.5. Waktu dan tempat pelaksanaan Praktek Kerja Lapangan</strong></p>\r\n\r\n<p style="text-align:justify">Praktek kerja lapangan dilaksanakan pada di Rumah Sakit Imelda Pekerja Indonesia, Jln. Bilal no 24 Pulo Brayan Darat Medan. Pada saat melaksanakan Praktek Kerja Lapangan ini penulis mempunyai kesempatan untuk turut dalam kegiatan instansi selama satu bulan sejak tanggal 01 Agustus &nbsp;s/d 31 Agustus 2017.&nbsp; Adapun waktu masuk hari senin s/d sabtu yaitu pukul 08.00 wib s/d 16.00 wib dan waktu istirahat 1 jam pada pukul 12.00 s/d 13.00 wib.</p>\r\n\r\n<p style="text-align:justify">&nbsp;</p>\r\n\r\n<p style="text-align:justify">&nbsp;</p>\r\n'),
('B00004', '23', '2019-01-26 19:49:14', 'JODI', '<p>deeeeee<img alt="" src="/REGISTRASI/ckeditor/kcfinder/upload/images/gambar.jpg" style="height:764px; width:1250px" /></p>\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pasien`
--

CREATE TABLE IF NOT EXISTS `tbl_pasien` (
  `kode` varchar(11) NOT NULL,
  `nama` varchar(40) DEFAULT NULL,
  `jenis_kelamin` varchar(20) DEFAULT NULL,
  `tempat_lahir` varchar(100) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `nik_ktp` varchar(20) DEFAULT NULL,
  `alamat` text,
  `umur` varchar(20) DEFAULT NULL,
  `no_hp` varchar(14) DEFAULT NULL,
  `tgl_registrasi` datetime DEFAULT NULL,
  `user_name` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `verifikasi` int(11) DEFAULT NULL,
  `wali` varchar(30) DEFAULT NULL,
  `ayah` varchar(30) DEFAULT NULL,
  `ibu` varchar(30) DEFAULT NULL,
  `hp_keluarga` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pasien`
--

INSERT INTO `tbl_pasien` (`kode`, `nama`, `jenis_kelamin`, `tempat_lahir`, `tgl_lahir`, `nik_ktp`, `alamat`, `umur`, `no_hp`, `tgl_registrasi`, `user_name`, `password`, `verifikasi`, `wali`, `ayah`, `ibu`, `hp_keluarga`) VALUES
('R00001', 'DELISMAN HULU,Amd,Kom', 'Perempuan', 'Lawa-Lawa Luo', '1996-01-03', '2019389383839393939', 'Jln.Bilal NO.24 Medan', '25 Tahun', '081375653278', '2019-01-24 00:00:00', 'pasien', 'f5c25a0082eb0748faedca1ecdcfb131', NULL, 'Dekkerman Hulu', 'Faozatulo Hulu', 'Yuniati Ndruru', '081375653271'),
('R00002', 'DELISMAN', 'Perempuan', 'NIAS', '2019-02-24', '2929299', '2323', '20 Tahun', '12232323', '2019-02-24 17:20:17', '23232', '3579dccd1b96daaee5c30c0b565e9aa5', NULL, '2323', '2323', '2323', '2323'),
('RM201902001', '222', 'Perempuan', 'MEDAN', '2019-02-24', '22222', '1212', '123123213', '12222222', '2019-02-24 23:34:08', '1213213', '81dc9bdb52d04dc20036dbd8313ed055', NULL, '2121', '22121221', '12212', '21212');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pegawai`
--

CREATE TABLE IF NOT EXISTS `tbl_pegawai` (
  `kode` varchar(11) NOT NULL,
  `kode_spesialis` varchar(11) DEFAULT NULL,
  `kode_pekerjaan` varchar(11) DEFAULT NULL,
  `kode_pendidikan` varchar(11) DEFAULT NULL,
  `kode_jabatan` varchar(11) DEFAULT NULL,
  `nip` varchar(20) DEFAULT NULL,
  `nama` varchar(40) DEFAULT NULL,
  `tempat_lahir` varchar(100) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jenis_kelamin` varchar(50) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `handphone` varchar(15) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `keterangan` varchar(50) DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL,
  `hari_senin` varchar(50) DEFAULT NULL,
  `hari_selasa` varchar(50) DEFAULT NULL,
  `hari_rabu` varchar(50) DEFAULT NULL,
  `hari_kamis` varchar(50) DEFAULT NULL,
  `hari_jumat` varchar(50) DEFAULT NULL,
  `hari_sabtu` varchar(50) DEFAULT NULL,
  `hari_minggu` varchar(50) DEFAULT NULL,
  `tgl_update` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `alamat` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pegawai`
--

INSERT INTO `tbl_pegawai` (`kode`, `kode_spesialis`, `kode_pekerjaan`, `kode_pendidikan`, `kode_jabatan`, `nip`, `nama`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `email`, `handphone`, `password`, `keterangan`, `gambar`, `hari_senin`, `hari_selasa`, `hari_rabu`, `hari_kamis`, `hari_jumat`, `hari_sabtu`, `hari_minggu`, `tgl_update`, `alamat`) VALUES
('11', 'S00006', 'K00001', 'J00003', 'J00003', '123', 'Layanan Coding', '12', '2019-01-20', 'Perempuan', 'admin@gmail.com', '222', '21232f297a57a5a743894a0e4a801fc3', 'Aktif', 'pegwai.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('23', 'S00002', 'K00001', 'J00002', 'J00002', '2929292929929293', 'dr.Delisman Hulu, Sp.PD', 'MEDAN', '1996-01-24', 'Perempuan', 'dokter@gmail.com', '12081375653271', 'd22af4180eee4bd95072eb90f94930e5', 'Aktif', 'logo.png', '12:01', '12:01', '12:01', '12:02', '12:09', '11:01', 'Libur', '2019-02-04 01:42:51', 'JLN Pengerbangan'),
('P00004', 'S00005', 'K00001', 'J00001', 'J00003', '22333', 'Jodirman', 'Malang', '2019-02-10', 'Laki-Laki', 'jodi@gmail.com', '222', '$2y$10$KUAI7fAuRKY7pKu3Kh74dufKhCRWnOe7yl9XEYC38FaXARxSZT4b2', 'Aktif', 'pegwai.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-02-03 20:06:11', 'Malang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pekerjaan`
--

CREATE TABLE IF NOT EXISTS `tbl_pekerjaan` (
  `kode` varchar(11) NOT NULL,
  `uraian` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pekerjaan`
--

INSERT INTO `tbl_pekerjaan` (`kode`, `uraian`) VALUES
('K00001', 'Dokter');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pendidikan`
--

CREATE TABLE IF NOT EXISTS `tbl_pendidikan` (
  `kode` varchar(11) NOT NULL,
  `uraian` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pendidikan`
--

INSERT INTO `tbl_pendidikan` (`kode`, `uraian`) VALUES
('J00001', 'SD'),
('J00002', 'SMA'),
('J00003', 'SMP');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_spesialis`
--

CREATE TABLE IF NOT EXISTS `tbl_spesialis` (
  `kode` varchar(11) NOT NULL,
  `uraian` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_spesialis`
--

INSERT INTO `tbl_spesialis` (`kode`, `uraian`) VALUES
('S00001', 'SPESIALIS UROLOGI'),
('S00002', 'SPESIALIS SARAF'),
('S00003', 'SPESIALIS PARU'),
('S00004', 'SPESIALIS KEBIDANAN DAN KANDUNGAN'),
('S00005', 'SPESIALIS GIGI'),
('S00006', 'SPESIALIS BEDAH SARAF'),
('S00007', 'SPESIALIS BEDAH ANAK'),
('S00008', 'SPESIALIS KEJIWAAN'),
('S00009', 'SPESIALIS REHABILITASI MEDIK'),
('S00010', 'SPESIALIS BEDAH PLASTIK'),
('S00011', 'SPESIALIS PATOLOGI KLINIK'),
('S00012', 'SPESIALIS PATOLOGI ANATOMI'),
('S00013', 'SPESIALIS RADIOLOGI'),
('S00014', 'SPESIALIS ANASTASI'),
('S00015', 'SPESIALIS PENYAKIT ANAK'),
('S00016', 'SPESIALIS KANDUNGAN'),
('S00017', 'SPESIALIS MATA'),
('S00018', 'SPESIALIS KANDUNGAN'),
('S00019', 'SPESIALIS THT'),
('S00020', 'SPESIALIS PENYAKIT DALAM'),
('S00021', 'SPESIALIS BEDAH UMUM'),
('S00022', 'SPESIALIS BEDAH VASKULER'),
('S00023', 'SPESIALIS ORTHOPEDI DAN RAUMATOLOGI');

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_dokter`
--
CREATE TABLE IF NOT EXISTS `v_dokter` (
`kode` varchar(11)
,`kode_spesialis` varchar(11)
,`kode_pekerjaan` varchar(11)
,`kode_pendidikan` varchar(11)
,`kode_jabatan` varchar(11)
,`nip` varchar(20)
,`nama` varchar(40)
,`tempat_lahir` varchar(100)
,`tgl_lahir` date
,`jenis_kelamin` varchar(50)
,`email` varchar(100)
,`handphone` varchar(15)
,`password` varchar(100)
,`keterangan` varchar(50)
,`gambar` varchar(100)
,`hari_senin` varchar(50)
,`hari_selasa` varchar(50)
,`hari_rabu` varchar(50)
,`hari_kamis` varchar(50)
,`hari_jumat` varchar(50)
,`hari_sabtu` varchar(50)
,`hari_minggu` varchar(50)
,`tgl_update` datetime
,`pekerjaan` varchar(100)
,`pendidikan` varchar(100)
,`spesialis` varchar(100)
,`jabatan` varchar(100)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `v_kunjungan`
--
CREATE TABLE IF NOT EXISTS `v_kunjungan` (
`kode` varchar(11)
,`kode_pasien` varchar(11)
,`tgl_kunjungan` date
,`keluhan` text
,`pasien` varchar(40)
,`cara_bayar` varchar(100)
,`dokter` varchar(40)
);
-- --------------------------------------------------------

--
-- Struktur untuk view `v_dokter`
--
DROP TABLE IF EXISTS `v_dokter`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_dokter` AS select `tbl_pegawai`.`kode` AS `kode`,`tbl_pegawai`.`kode_spesialis` AS `kode_spesialis`,`tbl_pegawai`.`kode_pekerjaan` AS `kode_pekerjaan`,`tbl_pegawai`.`kode_pendidikan` AS `kode_pendidikan`,`tbl_pegawai`.`kode_jabatan` AS `kode_jabatan`,`tbl_pegawai`.`nip` AS `nip`,`tbl_pegawai`.`nama` AS `nama`,`tbl_pegawai`.`tempat_lahir` AS `tempat_lahir`,`tbl_pegawai`.`tgl_lahir` AS `tgl_lahir`,`tbl_pegawai`.`jenis_kelamin` AS `jenis_kelamin`,`tbl_pegawai`.`email` AS `email`,`tbl_pegawai`.`handphone` AS `handphone`,`tbl_pegawai`.`password` AS `password`,`tbl_pegawai`.`keterangan` AS `keterangan`,`tbl_pegawai`.`gambar` AS `gambar`,`tbl_pegawai`.`hari_senin` AS `hari_senin`,`tbl_pegawai`.`hari_selasa` AS `hari_selasa`,`tbl_pegawai`.`hari_rabu` AS `hari_rabu`,`tbl_pegawai`.`hari_kamis` AS `hari_kamis`,`tbl_pegawai`.`hari_jumat` AS `hari_jumat`,`tbl_pegawai`.`hari_sabtu` AS `hari_sabtu`,`tbl_pegawai`.`hari_minggu` AS `hari_minggu`,`tbl_pegawai`.`tgl_update` AS `tgl_update`,`tbl_pekerjaan`.`uraian` AS `pekerjaan`,`tbl_pendidikan`.`uraian` AS `pendidikan`,`tbl_spesialis`.`uraian` AS `spesialis`,`tbl_jabatan`.`uraian` AS `jabatan` from ((((`tbl_jabatan` join `tbl_pegawai` on((`tbl_pegawai`.`kode_jabatan` = `tbl_jabatan`.`kode`))) join `tbl_pendidikan` on((`tbl_pegawai`.`kode_pendidikan` = `tbl_pendidikan`.`kode`))) join `tbl_pekerjaan` on((`tbl_pegawai`.`kode_pekerjaan` = `tbl_pekerjaan`.`kode`))) join `tbl_spesialis` on((`tbl_pegawai`.`kode_spesialis` = `tbl_spesialis`.`kode`))) where (((`tbl_jabatan`.`uraian` = 'Dokter Umum') or (`tbl_jabatan`.`uraian` = 'Dokter Spesialis')) and (`tbl_pegawai`.`keterangan` = 'Aktif')) order by `tbl_pegawai`.`kode` desc;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_kunjungan`
--
DROP TABLE IF EXISTS `v_kunjungan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_kunjungan` AS select `tbl_kunjungan`.`kode` AS `kode`,`tbl_kunjungan`.`kode_pasien` AS `kode_pasien`,`tbl_kunjungan`.`tgl_kunjungan` AS `tgl_kunjungan`,`tbl_kunjungan`.`keluhan` AS `keluhan`,`tbl_pasien`.`nama` AS `pasien`,`tbl_cara_bayar`.`uraian` AS `cara_bayar`,`tbl_pegawai`.`nama` AS `dokter` from (((`tbl_kunjungan` join `tbl_pasien` on((`tbl_kunjungan`.`kode_pasien` = `tbl_pasien`.`kode`))) join `tbl_pegawai` on((`tbl_kunjungan`.`kode_dokter` = `tbl_pegawai`.`kode`))) join `tbl_cara_bayar` on((`tbl_kunjungan`.`kode_bayar` = `tbl_cara_bayar`.`kode`)));

--
-- Indexes for dumped tables
--

--
-- Indexes for table `log_pegawai`
--
ALTER TABLE `log_pegawai`
 ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `tbl_bed`
--
ALTER TABLE `tbl_bed`
 ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `tbl_cara_bayar`
--
ALTER TABLE `tbl_cara_bayar`
 ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `tbl_fasilitas`
--
ALTER TABLE `tbl_fasilitas`
 ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `tbl_jabatan`
--
ALTER TABLE `tbl_jabatan`
 ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `tbl_kunjungan`
--
ALTER TABLE `tbl_kunjungan`
 ADD PRIMARY KEY (`kode`), ADD KEY `kodeku1` (`kode_pasien`), ADD KEY `kodeku3` (`kode_bayar`), ADD KEY `kode_dokter` (`kode_dokter`);

--
-- Indexes for table `tbl_news`
--
ALTER TABLE `tbl_news`
 ADD PRIMARY KEY (`kode`), ADD KEY `kode124` (`kode_pegawai`);

--
-- Indexes for table `tbl_pasien`
--
ALTER TABLE `tbl_pasien`
 ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `tbl_pegawai`
--
ALTER TABLE `tbl_pegawai`
 ADD PRIMARY KEY (`kode`), ADD KEY `kodeku` (`kode_spesialis`), ADD KEY `jabatan` (`kode_jabatan`), ADD KEY `pekerjaan` (`kode_pekerjaan`), ADD KEY `pendidikan` (`kode_pendidikan`);

--
-- Indexes for table `tbl_pekerjaan`
--
ALTER TABLE `tbl_pekerjaan`
 ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `tbl_pendidikan`
--
ALTER TABLE `tbl_pendidikan`
 ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `tbl_spesialis`
--
ALTER TABLE `tbl_spesialis`
 ADD PRIMARY KEY (`kode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `log_pegawai`
--
ALTER TABLE `log_pegawai`
MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_kunjungan`
--
ALTER TABLE `tbl_kunjungan`
ADD CONSTRAINT `kodeku1` FOREIGN KEY (`kode_pasien`) REFERENCES `tbl_pasien` (`kode`),
ADD CONSTRAINT `kodeku3` FOREIGN KEY (`kode_bayar`) REFERENCES `tbl_cara_bayar` (`kode`),
ADD CONSTRAINT `tbl_kunjungan_ibfk_1` FOREIGN KEY (`kode_dokter`) REFERENCES `tbl_pegawai` (`kode`);

--
-- Ketidakleluasaan untuk tabel `tbl_news`
--
ALTER TABLE `tbl_news`
ADD CONSTRAINT `kode124` FOREIGN KEY (`kode_pegawai`) REFERENCES `tbl_pegawai` (`kode`);

--
-- Ketidakleluasaan untuk tabel `tbl_pegawai`
--
ALTER TABLE `tbl_pegawai`
ADD CONSTRAINT `jabatan` FOREIGN KEY (`kode_jabatan`) REFERENCES `tbl_jabatan` (`kode`),
ADD CONSTRAINT `pekerjaan` FOREIGN KEY (`kode_pekerjaan`) REFERENCES `tbl_pekerjaan` (`kode`),
ADD CONSTRAINT `pendidikan` FOREIGN KEY (`kode_pendidikan`) REFERENCES `tbl_pendidikan` (`kode`),
ADD CONSTRAINT `spesialis` FOREIGN KEY (`kode_spesialis`) REFERENCES `tbl_spesialis` (`kode`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
