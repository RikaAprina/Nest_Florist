-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Nov 2019 pada 05.07
-- Versi server: 10.1.30-MariaDB
-- Versi PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama_lengkap`, `gambar`) VALUES
(1, 'rika', 'rika123', 'rika aprina', 'rika.jpg'),
(15, 'rika.aprina1007', '202cb962ac59075b964b07152d234b70', 'rika aprina', 'rika.jpg'),
(16, 'tasha', 'e32994c67f9a773e841f9e97bd26f014', 'rika aprina', 'rika.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `categori`
--

CREATE TABLE `categori` (
  `categori_id` int(11) NOT NULL,
  `bunga` int(11) NOT NULL,
  `bucket` int(11) NOT NULL,
  `pagar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `categori`
--

INSERT INTO `categori` (`categori_id`, `bunga`, `bucket`, `pagar`) VALUES
(1, 1, 2, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `onkir`
--

CREATE TABLE `onkir` (
  `id_onkir` int(11) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `onkir`
--

INSERT INTO `onkir` (`id_onkir`, `alamat`, `harga`) VALUES
(1, 'Lampung', 50000),
(2, 'Jakarta', 100000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `papan bunga`
--

CREATE TABLE `papan bunga` (
  `id_papan` int(11) NOT NULL,
  `categori` int(11) NOT NULL,
  `custom` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `alamat_lengkap` varchar(255) NOT NULL,
  `no_hp` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `papan bunga`
--

INSERT INTO `papan bunga` (`id_papan`, `categori`, `custom`, `size`, `alamat_lengkap`, `no_hp`) VALUES
(2, 0, '12344', 'fwf', '12345', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `email_pelanggan` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_pelanggan` varchar(255) NOT NULL,
  `telepon` varchar(25) NOT NULL,
  `alamat_pelanggan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `email_pelanggan`, `password`, `nama_pelanggan`, `telepon`, `alamat_pelanggan`) VALUES
(1, 'beepgoofy@yahoo.com', 'rika123', 'muhammad risky', '085768616461', '0'),
(2, 'risky@yahoo.com', 'rika123', 'rudi rama wulan', '082379651970', '0'),
(3, 'rika@yahoo.com', 'rika123', 'rika', '082379651970', 'cidawang'),
(4, 'blie.r@yahoo.com', 'e32994c67f9a773e841f9e97bd26f014', 'rika aprina', '082379651970', 'lampung,sumatra selatan,muaradua,tanjung amat rt/rw2'),
(5, 'dzihan@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055', 'DzihanSepti', '082379651970', 'lampung');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_pembelian` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `bank` varchar(100) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `bukti_pembayaran` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_pembelian`, `nama`, `bank`, `jumlah`, `tanggal`, `bukti_pembayaran`) VALUES
(1, 0, '', '', 0, '0000-00-00', ''),
(2, 0, '', '', 0, '0000-00-00', ''),
(3, 27, 'rika aprina', 'BTN', 0, '2019-07-18', ''),
(4, 28, 'Rudi rama wulan', 'MANDIRI', 0, '2019-07-04', ''),
(5, 22, 'rika aprina', 'BNI', 0, '2019-07-06', ''),
(6, 23, 'risky', 'BNI', 60, '2019-07-17', '5d1df6593528b.bandicam 2018-05-03 11-26-33-071.jpg'),
(7, 24, 'rika aprina', 'MANDIRI', 190000, '2019-07-05', '5d20a0d91dd38.s2.PNG'),
(8, 0, 'rosa', 'BNI', 7050000, '2019-07-17', ''),
(9, 0, 'rosa', 'BNI', 7050000, '2019-07-17', ''),
(10, 25, 'rosa', 'BNI', 7050000, '2019-07-17', '5d20a2b2c55bb.zx.PNG'),
(11, 30, 'rika aprina', 'BNI', 2105000, '2019-10-11', '5db31ec8556f9.a.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian`
--

CREATE TABLE `pembelian` (
  `id_pembelian` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `id_onkir` int(11) NOT NULL,
  `tanggal_pembelian` date NOT NULL,
  `total_pembelian` int(11) NOT NULL,
  `custom` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `Alamat_lengkap` varchar(100) NOT NULL,
  `status_pembelian` varchar(100) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembelian`
--

INSERT INTO `pembelian` (`id_pembelian`, `id_pelanggan`, `id_onkir`, `tanggal_pembelian`, `total_pembelian`, `custom`, `harga`, `Alamat_lengkap`, `status_pembelian`) VALUES
(22, 1, 1, '2019-06-30', 7170000, '', 50000, '', 'Berhasil di bayar'),
(23, 2, 1, '2019-06-30', 60050000, '', 50000, '', 'Berhasil di bayar'),
(24, 2, 1, '2019-06-30', 190000, '', 50000, '', 'Berhasil di bayar'),
(25, 2, 1, '2019-06-30', 7050000, '', 50000, '', 'Berhasil di bayar'),
(26, 2, 1, '2019-06-30', 7050000, '', 50000, 'Martapura,okut Timur Sumatra selatan  					\r\n			 				', 'pending'),
(27, 1, 1, '2019-06-30', 7050000, '', 50000, 'Martapura,palembang,sumatra selatan			 					\r\n			 				', 'Berhasil di bayar'),
(29, 2, 4, '2019-07-02', 67050000, '', 50000, '			 	bandung,pelabuahn ratu,rt/rw 1 kecamatan bandung utara,bengkulu jawa timur				\r\n			 				', 'berhasil'),
(30, 1, 2, '2019-07-05', 21050000, '', 50000, '			 					\r\n			 			martapura	', 'Berhasil di bayar'),
(35, 1, 1, '2019-10-17', 7390000, '', 50000, 'Martapura ,sumtra selatan,Palembang			 					\r\n			 				', 'pending'),
(36, 1, 4, '2019-10-25', 425410000, '', 50000, '			 					\r\n			 				', 'pending'),
(37, 1, 4, '2019-10-25', 500000, '', 50000, 'Martapura,Oku Timur,Sumatra-Selatan			 					\r\n			 				', 'pending'),
(38, 4, 2, '2019-10-26', 7050000, '', 50000, 'Martapura,oku timur sumatra selatan			 					\r\n			 				', 'pending'),
(39, 4, 1, '2019-10-27', 316180000, '', 50000, 'Lampung,sumtara selatan,okut timur			 					\r\n			 		', 'pending'),
(40, 4, 0, '2019-10-27', 210000, '', 50000, '			 					\r\n			 		', 'pending'),
(46, 4, 0, '2019-11-20', 8212000, 'Rika Aprina S.T.M.eng', 50000, '			Martapura 					\r\n			 		', 'pending'),
(47, 4, 0, '2019-11-20', 8212000, 'Rika Aprina S.T.M.eng', 50000, '			Martapura 					\r\n			 		', 'pending'),
(48, 5, 1, '2019-11-20', 70000, 'bunga', 50000, '		Tanggerang	 					\r\n			 		', 'pending');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian_produk`
--

CREATE TABLE `pembelian_produk` (
  `id_pembelian_produk` int(11) NOT NULL,
  `id_pembelian` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `subharga` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `custom` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembelian_produk`
--

INSERT INTO `pembelian_produk` (`id_pembelian_produk`, `id_pembelian`, `id_produk`, `nama`, `harga`, `subharga`, `jumlah`, `custom`) VALUES
(53, 32, 17, 'bunga melati', 340000, 680000, 2, ''),
(54, 33, 16, 'bunga mawar', 450000, 450000, 1, ''),
(55, 33, 17, 'bunga melati', 340000, 340000, 1, ''),
(56, 34, 16, 'bunga mawar', 450000, 450000, 1, ''),
(57, 34, 17, 'bunga melati', 340000, 340000, 1, ''),
(58, 35, 17, 'bunga melati', 340000, 340000, 1, ''),
(59, 35, 20, 'bucket bunga putih', 7000000, 7000000, 1, ''),
(60, 36, 16, 'bunga mawar', 450000, 7200000, 16, ''),
(61, 36, 24, 'bunga', 1000000, 18000000, 18, ''),
(62, 36, 22, 'bucket bunga putih', 7000000, 392000000, 56, ''),
(63, 36, 23, 'bucket aja', 340000, 8160000, 24, ''),
(64, 37, 16, 'bunga mawar', 450000, 450000, 1, ''),
(65, 38, 20, 'bucket bunga putih', 7000000, 7000000, 1, ''),
(66, 39, 16, 'bunga mawar', 450000, 450000, 1, ''),
(67, 39, 20, 'bucket bunga putih', 7000000, 315000000, 45, ''),
(68, 39, 17, 'bunga melati', 340000, 340000, 1, ''),
(69, 39, 23, 'bucket aja', 340000, 340000, 1, ''),
(70, 40, 28, 'Bucket bunga small', 50000, 50000, 1, ''),
(71, 40, 29, 'Bucket bunga black', 10000, 10000, 1, ''),
(72, 40, 33, 'Bucket bunga flow', 45000, 45000, 1, ''),
(73, 40, 37, 'Bucket bunga Terkini', 43000, 43000, 1, ''),
(78, 0, 47, 'NSC 002', 5000000, 5000000, 1, ''),
(79, 47, 28, 'Bucket bunga small', 50000, 1150000, 23, 'Rika Aprina S.T.M.eng'),
(80, 47, 46, 'NSC 001', 7000000, 7000000, 1, 'Rika Aprina S.T.M.eng'),
(81, 47, 42, 'POT BUNGA ITEM', 12000, 12000, 1, 'Rika Aprina S.T.M.eng'),
(82, 48, 30, 'Bucket bunga pink', 20000, 20000, 1, 'bunga');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `harga_produk` int(11) NOT NULL,
  `foto_produk` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `stok` int(5) NOT NULL,
  `categori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `harga_produk`, `foto_produk`, `deskripsi`, `stok`, `categori`) VALUES
(28, 'Bucket bunga small', 50000, 'bc1.jpg', '* Ukuran buket +- 40 x 30 cm<br>\r\n* Bunga terbuat dari kain flanel premium<br>\r\n* Isi buket (SESUAI FOTO PRODUK) : 3 tangkai sunflower, 1 tangkai mini daisy, dedaunan<br>\r\n* Wrapping kain spundbon hitam - kuning<br>\r\n* Jika mau variasi warna bunga/wrapping custom, silahkan tulis di kolom catatan saat checkout!', -12, 2),
(29, 'Bucket bunga black', 10000, 'bc2.jpg', '* Ukuran buket +- 40 x 30 cm<br>\r\n* Bunga terbuat dari kain flanel premium<br>\r\n* Isi buket (SESUAI FOTO PRODUK) : 3 tangkai sunflower, 1 tangkai mini daisy, dedaunan<br>\r\n* Wrapping kain spundbon hitam - kuning<br>\r\n* Jika mau variasi warna bunga/wrapping custom, silahkan tulis di kolom catatan saat checkout!', 9, 2),
(30, 'Bucket bunga pink', 20000, 'bc3.jpg', '* Ukuran buket +- 40 x 30 cm<br>\r\n* Bunga terbuat dari kain flanel premium<br>\r\n* Isi buket (SESUAI FOTO PRODUK) : 3 tangkai sunflower, 1 tangkai mini daisy, dedaunan<br>\r\n* Wrapping kain spundbon hitam - kuning<br>\r\n* Jika mau variasi warna bunga/wrapping custom, silahkan tulis di kolom catatan saat checkout!', 3, 2),
(31, 'Bucket bunga fit', 20000, 'bc4.jpg', '* Ukuran buket +- 40 x 30 cm<br>\r\n* Bunga terbuat dari kain flanel premium<br>\r\n* Isi buket (SESUAI FOTO PRODUK) : 3 tangkai sunflower, 1 tangkai mini daisy, dedaunan<br>\r\n* Wrapping kain spundbon hitam - kuning<br>\r\n* Jika mau variasi warna bunga/wrapping custom, silahkan tulis di kolom catatan saat checkout!', 21, 2),
(32, 'Bucket bunga indah', 100000, 'bc5.jpg', '* Ukuran buket +- 40 x 30 cm<br>\r\n* Bunga terbuat dari kain flanel premium<br>\r\n* Isi buket (SESUAI FOTO PRODUK) : 3 tangkai sunflower, 1 tangkai mini daisy, dedaunan<br>\r\n* Wrapping kain spundbon hitam - kuning<br>\r\n* Jika mau variasi warna bunga/wrapping custom, silahkan tulis di kolom catatan saat checkout!', 5, 2),
(33, 'Bucket bunga flow', 45000, 'bc6.jpg', '* Ukuran buket +- 40 x 30 cm<br>\r\n* Bunga terbuat dari kain flanel premium<br>\r\n* Isi buket (SESUAI FOTO PRODUK) : 3 tangkai sunflower, 1 tangkai mini daisy, dedaunan<br>\r\n* Wrapping kain spundbon hitam - kuning<br>\r\n* Jika mau variasi warna bunga/wrapping custom, silahkan tulis di kolom catatan saat checkout!', 49, 2),
(34, 'Bucket bunga cool', 12000, 'bc7.jpg', '* Ukuran buket +- 40 x 30 cm<br>\r\n* Bunga terbuat dari kain flanel premium<br>\r\n* Isi buket (SESUAI FOTO PRODUK) : 3 tangkai sunflower, 1 tangkai mini daisy, dedaunan<br>\r\n* Wrapping kain spundbon hitam - kuning<br>\r\n* Jika mau variasi warna bunga/wrapping custom, silahkan tulis di kolom catatan saat checkout!', 2, 2),
(35, 'Bucket bunga uff', 10000, 'bc8.jpg', '* Ukuran buket +- 40 x 30 cm<br>\r\n* Bunga terbuat dari kain flanel premium<br>\r\n* Isi buket (SESUAI FOTO PRODUK) : 3 tangkai sunflower, 1 tangkai mini daisy, dedaunan<br>\r\n* Wrapping kain spundbon hitam - kuning<br>\r\n* Jika mau variasi warna bunga/wrapping custom, silahkan tulis di kolom catatan saat checkout!', 34, 2),
(36, 'Bucket bunga shadow', 25000, 'bc9.jpg', '* Ukuran buket +- 40 x 30 cm<br>\r\n* Bunga terbuat dari kain flanel premium<br>\r\n* Isi buket (SESUAI FOTO PRODUK) : 3 tangkai sunflower, 1 tangkai mini daisy, dedaunan<br>\r\n* Wrapping kain spundbon hitam - kuning<br>\r\n* Jika mau variasi warna bunga/wrapping custom, silahkan tulis di kolom catatan saat checkout!', 12, 2),
(37, 'Bucket bunga Terkini', 43000, 'bc10.jpg', '* Ukuran buket +- 40 x 30 cm<br>\r\n* Bunga terbuat dari kain flanel premium<br>\r\n* Isi buket (SESUAI FOTO PRODUK) : 3 tangkai sunflower, 1 tangkai mini daisy, dedaunan<br>\r\n* Wrapping kain spundbon hitam - kuning<br>\r\n* Jika mau variasi warna bunga/wrapping custom, silahkan tulis di kolom catatan saat checkout!', 20, 2),
(38, 'Pot bunga bagus', 25000, 'p1.jpg', 'Pot NKT Vanda Model Kotak Warna Putih merupakan pot khusus yang dapat digunakan untuk tanaman anggrek. Bentuknya menyerupai keranjang (basket) berukuran 14 cm.<br> \r\n Detail Produk:<br>\r\n\r\nMerk: Vanda<br>\r\nTipe: NKT<br>\r\nBahan: Plastik<br>\r\nModel: Kotak<br>\r\nWarna: Putih<br>\r\nDiameter atas: 14 cm<br>\r\nDiameter bawah: 10 cm<br>\r\nTinggi: 8,5 cm<br>\r\n ', 9, 1),
(39, 'Pot bunga indah', 340000, 'p2.jpg', 'Pot NKT Vanda Model Kotak Warna Putih merupakan pot khusus yang dapat digunakan untuk tanaman anggrek. Bentuknya menyerupai keranjang (basket) berukuran 14 cm.<br> \r\n Detail Produk:<br>\r\n\r\nMerk: Vanda<br>\r\nTipe: NKT<br>\r\nBahan: Plastik<br>\r\nModel: Kotak<br>\r\nWarna: Putih<br>\r\nDiameter atas: 14 cm<br>\r\nDiameter bawah: 10 cm<br>\r\nTinggi: 8,5 cm<br>\r\n ', 12, 1),
(40, 'Vas bunga indah', 450000, 'p3.jpg', 'Pot NKT Vanda Model Kotak Warna Putih merupakan pot khusus yang dapat digunakan untuk tanaman anggrek. Bentuknya menyerupai keranjang (basket) berukuran 14 cm.<br> \r\n Detail Produk:<br>\r\n\r\nMerk: Vanda<br>\r\nTipe: NKT<br>\r\nBahan: Plastik<br>\r\nModel: Kotak<br>\r\nWarna: Putih<br>\r\nDiameter atas: 14 cm<br>\r\nDiameter bawah: 10 cm<br>\r\nTinggi: 8,5 cm<br>\r\n ', 34, 1),
(41, 'Pot bunga wow', 100000, 'p4.png', 'Pot NKT Vanda Model Kotak Warna Putih merupakan pot khusus yang dapat digunakan untuk tanaman anggrek. Bentuknya menyerupai keranjang (basket) berukuran 14 cm.<br> \r\n Detail Produk:<br>\r\n\r\nMerk: Vanda<br>\r\nTipe: NKT<br>\r\nBahan: Plastik<br>\r\nModel: Kotak<br>\r\nWarna: Putih<br>\r\nDiameter atas: 14 cm<br>\r\nDiameter bawah: 10 cm<br>\r\nTinggi: 8,5 cm<br>\r\n ', 3, 1),
(42, 'POT BUNGA ITEM', 12000, 'p5.jpg', 'Pot NKT Vanda Model Kotak Warna Putih merupakan pot khusus yang dapat digunakan untuk tanaman anggrek. Bentuknya menyerupai keranjang (basket) berukuran 14 cm.<br> \r\n Detail Produk:<br>\r\n\r\nMerk: Vanda<br>\r\nTipe: NKT<br>\r\nBahan: Plastik<br>\r\nModel: Kotak<br>\r\nWarna: Putih<br>\r\nDiameter atas: 14 cm<br>\r\nDiameter bawah: 10 cm<br>\r\nTinggi: 8,5 cm<br>\r\n ', 19, 1),
(43, 'Pot cantik', 32000, 'p6.jpg', 'Pot NKT Vanda Model Kotak Warna Putih merupakan pot khusus yang dapat digunakan untuk tanaman anggrek. Bentuknya menyerupai keranjang (basket) berukuran 14 cm.<br> \r\n Detail Produk:<br>\r\n\r\nMerk: Vanda<br>\r\nTipe: NKT<br>\r\nBahan: Plastik<br>\r\nModel: Kotak<br>\r\nWarna: Putih<br>\r\nDiameter atas: 14 cm<br>\r\nDiameter bawah: 10 cm<br>\r\nTinggi: 8,5 cm<br>\r\n ', 12, 1),
(44, 'Pot bunga cool', 210000, 'p9.jpg', 'Pot NKT Vanda Model Kotak Warna Putih merupakan pot khusus yang dapat digunakan untuk tanaman anggrek. Bentuknya menyerupai keranjang (basket) berukuran 14 cm.<br> \r\n Detail Produk:<br>\r\n\r\nMerk: Vanda<br>\r\nTipe: NKT<br>\r\nBahan: Plastik<br>\r\nModel: Kotak<br>\r\nWarna: Putih<br>\r\nDiameter atas: 14 cm<br>\r\nDiameter bawah: 10 cm<br>\r\nTinggi: 8,5 cm<br>\r\n ', 23, 1),
(45, 'Pot bungaku', 23000, 'p10.jpg', 'Pot NKT Vanda Model Kotak Warna Putih merupakan pot khusus yang dapat digunakan untuk tanaman anggrek. Bentuknya menyerupai keranjang (basket) berukuran 14 cm.<br> \r\n Detail Produk:<br>\r\n\r\nMerk: Vanda<br>\r\nTipe: NKT<br>\r\nBahan: Plastik<br>\r\nModel: Kotak<br>\r\nWarna: Putih<br>\r\nDiameter atas: 14 cm<br>\r\nDiameter bawah: 10 cm<br>\r\nTinggi: 8,5 cm<br>\r\n ', 23, 1),
(46, 'NSC 001', 7000000, 'ppn1.jpg', '* Ukuran buket +- 40 x 30 cm<br>\r\n* Bunga terbuat dari kain flanel premium<br>\r\n* Isi buket (SESUAI FOTO PRODUK) : 3 tangkai sunflower, 1 tangkai mini daisy, dedaunan<br>\r\n* Wrapping kain spundbon hitam - kuning<br>\r\n* Jika mau variasi warna bunga/wrapping custom, silahkan tulis di kolom catatan saat checkout!', 10, 3),
(47, 'NSC 002', 5000000, 'ppn2.jpg', '* Ukuran buket +- 40 x 30 cm<br>\r\n* Bunga terbuat dari kain flanel premium<br>\r\n* Isi buket (SESUAI FOTO PRODUK) : 3 tangkai sunflower, 1 tangkai mini daisy, dedaunan<br>\r\n* Wrapping kain spundbon hitam - kuning<br>\r\n* Jika mau variasi warna bunga/wrapping custom, silahkan tulis di kolom catatan saat checkout!', 2, 3),
(48, 'NSC 003', 1500000, 'ppn3.jpg', '* Ukuran buket +- 40 x 30 cm<br>\r\n* Bunga terbuat dari kain flanel premium<br>\r\n* Isi buket (SESUAI FOTO PRODUK) : 3 tangkai sunflower, 1 tangkai mini daisy, dedaunan<br>\r\n* Wrapping kain spundbon hitam - kuning<br>\r\n* Jika mau variasi warna bunga/wrapping custom, silahkan tulis di kolom catatan saat checkout!', 50, 3),
(49, 'NCS 004', 5000000, 'ppn4.jpg', '* Ukuran buket +- 40 x 30 cm<br>\r\n* Bunga terbuat dari kain flanel premium<br>\r\n* Isi buket (SESUAI FOTO PRODUK) : 3 tangkai sunflower, 1 tangkai mini daisy, dedaunan<br>\r\n* Wrapping kain spundbon hitam - kuning<br>\r\n* Jika mau variasi warna bunga/wrapping custom, silahkan tulis di kolom catatan saat checkout!', 3, 3),
(50, 'NSc 005', 7000000, 'ppn5.jpg', '* Ukuran buket +- 40 x 30 cm<br>\r\n* Bunga terbuat dari kain flanel premium<br>\r\n* Isi buket (SESUAI FOTO PRODUK) : 3 tangkai sunflower, 1 tangkai mini daisy, dedaunan<br>\r\n* Wrapping kain spundbon hitam - kuning<br>\r\n* Jika mau variasi warna bunga/wrapping custom, silahkan tulis di kolom catatan saat checkout!', 50, 3),
(51, 'NSC 006', 5000000, 'ppn6.jpg', '* Ukuran buket +- 40 x 30 cm<br>\r\n* Bunga terbuat dari kain flanel premium<br>\r\n* Isi buket (SESUAI FOTO PRODUK) : 3 tangkai sunflower, 1 tangkai mini daisy, dedaunan<br>\r\n* Wrapping kain spundbon hitam - kuning<br>\r\n* Jika mau variasi warna bunga/wrapping custom, silahkan tulis di kolom catatan saat checkout!', 3, 3),
(52, 'NSC 007', 7000000, 'ppn7.jpg', '* Ukuran buket +- 40 x 30 cm<br>\r\n* Bunga terbuat dari kain flanel premium<br>\r\n* Isi buket (SESUAI FOTO PRODUK) : 3 tangkai sunflower, 1 tangkai mini daisy, dedaunan<br>\r\n* Wrapping kain spundbon hitam - kuning<br>\r\n* Jika mau variasi warna bunga/wrapping custom, silahkan tulis di kolom catatan saat checkout!', 34, 3),
(53, 'NSC 008', 5000000, 'ppn8.jpg', '* Ukuran buket +- 40 x 30 cm<br>\r\n* Bunga terbuat dari kain flanel premium<br>\r\n* Isi buket (SESUAI FOTO PRODUK) : 3 tangkai sunflower, 1 tangkai mini daisy, dedaunan<br>\r\n* Wrapping kain spundbon hitam - kuning<br>\r\n* Jika mau variasi warna bunga/wrapping custom, silahkan tulis di kolom catatan saat checkout!', 2, 3),
(54, 'pot bunga murni', 112345, '5dd543736a05a.p7.jpeg', 'Pot NKT Vanda Model Kotak Warna Putih merupakan pot khusus yang dapat digunakan untuk tanaman anggrek. Bentuknya menyerupai keranjang (basket) berukuran 14 cm.<br> \r\n Detail Produk:<br>\r\n\r\nMerk: Vanda<br>\r\nTipe: NKT<br>\r\nBahan: Plastik<br>\r\nModel: Kotak<br>\r\nWarna: Putih<br>\r\nDiameter atas: 14 cm<br>\r\nDiameter bawah: 10 cm<br>\r\nTinggi: 8,5 cm<br>\r\n ', 12, 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `categori`
--
ALTER TABLE `categori`
  ADD PRIMARY KEY (`categori_id`);

--
-- Indeks untuk tabel `onkir`
--
ALTER TABLE `onkir`
  ADD PRIMARY KEY (`id_onkir`);

--
-- Indeks untuk tabel `papan bunga`
--
ALTER TABLE `papan bunga`
  ADD PRIMARY KEY (`id_papan`);

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indeks untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id_pembelian`);

--
-- Indeks untuk tabel `pembelian_produk`
--
ALTER TABLE `pembelian_produk`
  ADD PRIMARY KEY (`id_pembelian_produk`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `categori`
--
ALTER TABLE `categori`
  MODIFY `categori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `onkir`
--
ALTER TABLE `onkir`
  MODIFY `id_onkir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `papan bunga`
--
ALTER TABLE `papan bunga`
  MODIFY `id_papan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id_pembelian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT untuk tabel `pembelian_produk`
--
ALTER TABLE `pembelian_produk`
  MODIFY `id_pembelian_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
