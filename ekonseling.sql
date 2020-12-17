-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2020 at 04:13 PM
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
-- Database: `ekonseling`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `nama_admin`, `username`, `password`) VALUES
(1, 'Muhammad Hanafi Abror', 'MHAbror', 'mha'),
(2, 'Achmad Rafinaldi ', 'AldiRyan', 'aldi'),
(3, 'Dini Vega Safitri', 'DiniVegas', 'dini');

-- --------------------------------------------------------

--
-- Table structure for table `tb_chat`
--

CREATE TABLE `tb_chat` (
  `id_chat` int(11) NOT NULL,
  `tgl_chat` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `topik_chat` text NOT NULL,
  `id_mhs` int(11) NOT NULL,
  `id_doswal` int(11) NOT NULL,
  `id_kaprodi` int(11) NOT NULL,
  `id_pusatkarir` int(11) NOT NULL,
  `id_psikolog` int(11) NOT NULL,
  `status_chat` varchar(10) NOT NULL,
  `kesimpulan_chat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_chat`
--

CREATE TABLE `tb_detail_chat` (
  `id_detail_chat` int(10) NOT NULL,
  `id_chat` int(10) NOT NULL,
  `isi_chat` text NOT NULL,
  `tanggal_chat` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_dosenwali`
--

CREATE TABLE `tb_dosenwali` (
  `id_doswal` int(11) NOT NULL,
  `nip_doswal` int(20) DEFAULT NULL,
  `nama_doswal` varchar(100) DEFAULT NULL,
  `password_doswal` varchar(20) DEFAULT NULL,
  `alamat_doswal` varchar(100) NOT NULL,
  `nohp_doswal` varchar(13) NOT NULL,
  `email_doswal` varchar(50) DEFAULT NULL,
  `nidn_doswal` varchar(11) DEFAULT NULL,
  `jabatan_doswal` varchar(30) DEFAULT NULL,
  `status_pegawai` varchar(30) DEFAULT NULL,
  `gol_doswal` varchar(20) DEFAULT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `prodi_doswal` varchar(30) NOT NULL,
  `foto_doswal` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_dosenwali`
--

INSERT INTO `tb_dosenwali` (`id_doswal`, `nip_doswal`, `nama_doswal`, `password_doswal`, `alamat_doswal`, `nohp_doswal`, `email_doswal`, `nidn_doswal`, `jabatan_doswal`, `status_pegawai`, `gol_doswal`, `tempat_lahir`, `tanggal_lahir`, `prodi_doswal`, `foto_doswal`) VALUES
(1, 2147483647, 'I Putu Dody Lesmana, ST, MT', '197909212005011001', '', '', 'IPutuDody@polije.ac.id', '0021097903', 'Lektor', 'PNS', 'Penata/IIIc', 'Jember', '1979-09-21', 'Teknik Informatika', ''),
(2, 2147483647, 'Nugroho Setyo Wibowo, ST, MT', '197405192003121002', '', '085236329999', 'nugroho@polije.ac.id', '0019057403', 'Lektor', 'PNS', 'Pembina/IVa', '', '1974-05-19', 'Teknik Informatika', ''),
(3, 2147483647, 'Adi Heru Utomo, S.Kom., M.Kom', '197111151998021001', '', '085236010820', 'adiheru@polije.ac.id', '0015117106', 'Lektor Kepala', 'PNS', 'Pembina/IVa', '', '1971-11-15', 'Teknik Informatika', ''),
(4, 2147483647, 'Didit Rahmat Hartadi, S.Kom., MT', '197709292005011003', 'Jember', '', 'didithartadi@polije.ac.id', '0029097704', 'Lektor', 'PNS', 'Penata/IIIc', 'Jember', '1977-09-29', 'Manajemen Informatika', ''),
(5, 2147483647, 'Hariyono Rakhmad, Spd., M.Kom', '197011282003121001', '', '', 'harirakhmad@polije.ac.id', '0028117002', 'Lektor', 'PNS', 'Penata Tk.I/IId', '', '1970-11-28', 'Teknik Komputer', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kaprodi`
--

CREATE TABLE `tb_kaprodi` (
  `id_kaprodi` int(11) NOT NULL,
  `nip_kaprodi` varchar(20) DEFAULT NULL,
  `nama_kaprodi` varchar(100) DEFAULT NULL,
  `password_kaprodi` varchar(20) DEFAULT NULL,
  `alamat_kaprodi` varchar(100) NOT NULL,
  `nohp_kaprodi` varchar(13) NOT NULL,
  `email_kaprodi` varchar(50) DEFAULT NULL,
  `nidn_kaprodi` varchar(11) DEFAULT NULL,
  `jabatan_kaprodi` varchar(30) DEFAULT NULL,
  `status_kaprodi` varchar(30) DEFAULT NULL,
  `golongan_kaprodi` varchar(20) DEFAULT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `prodi_kaprodi` varchar(100) DEFAULT NULL,
  `foto_kaprodi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kaprodi`
--

INSERT INTO `tb_kaprodi` (`id_kaprodi`, `nip_kaprodi`, `nama_kaprodi`, `password_kaprodi`, `alamat_kaprodi`, `nohp_kaprodi`, `email_kaprodi`, `nidn_kaprodi`, `jabatan_kaprodi`, `status_kaprodi`, `golongan_kaprodi`, `tempat_lahir`, `tanggal_lahir`, `prodi_kaprodi`, `foto_kaprodi`) VALUES
(1, '199002272018032001', 'Trismayanti Dwi P, S.Kom., M.C', '199002272018032001', '', '085859184555', 'trismayantidwipuspitasari@gmail.com', '8868110016', 'Tenaga Pengajar', 'PNS', '', '', '1990-02-27', 'Teknik Informatika', ''),
(2, '197808192005012001', 'Ika Widiastuti, S.ST, MT', '197808192005012001', '', '081249794912', 'ika_widiastuti@polije.ac.id', '0019087803', 'Lektor', 'PNS', 'Penata/IIIc', '', '1978-08-19', 'Manajemen Informatika', ''),
(3, '197009292003121001', 'Yogiswara, ST, MT', '197009292003121001', '', '081249735955', 'yogipoltek@gmail.com', '0029097005', 'Lektor', 'PNS', 'Penata/IIIc', '', '1970-09-29', 'Teknik Komputer', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mhs`
--

CREATE TABLE `tb_mhs` (
  `id_mhs` int(11) NOT NULL,
  `nim_mhs` varchar(9) DEFAULT NULL,
  `password_mhs` varchar(20) DEFAULT NULL,
  `nama_mhs` varchar(50) DEFAULT NULL,
  `alamat_mhs` varchar(100) NOT NULL,
  `nohp_mhs` varchar(13) NOT NULL,
  `prodi_mhs` varchar(30) DEFAULT NULL,
  `semester_mhs` int(11) DEFAULT NULL,
  `gol_mhs` enum('A','B','C','D','E','Inter','BWS A','BWS B') DEFAULT NULL,
  `status_mhs` enum('Aktif','Tidak Aktif','','') DEFAULT NULL,
  `email_mhs` varchar(50) DEFAULT NULL,
  `id_doswal` int(11) DEFAULT NULL,
  `foto_mhs` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mhs`
--

INSERT INTO `tb_mhs` (`id_mhs`, `nim_mhs`, `password_mhs`, `nama_mhs`, `alamat_mhs`, `nohp_mhs`, `prodi_mhs`, `semester_mhs`, `gol_mhs`, `status_mhs`, `email_mhs`, `id_doswal`, `foto_mhs`) VALUES
(1, 'E41180749', 'E41180749', 'Muhammad Hanafi Abror', 'Jl. Tawangmangu 115A', '085854817899', 'Teknik Informatika', 5, 'B', 'Aktif', 'E41180749@student.polije.ac.id', 1, ''),
(2, 'E41180747', 'E41180747', 'Achmad Rafinaldi', 'Jl. Danau Toba', '085156373686', 'Teknik Informatika', 5, 'B', 'Aktif', 'E41180747@student.polije.ac.id', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_psikolog`
--

CREATE TABLE `tb_psikolog` (
  `id_psikolog` int(11) NOT NULL,
  `nama_psikolog` varchar(30) DEFAULT NULL,
  `nohp_psikolog` varchar(13) NOT NULL,
  `email_psikolog` varchar(50) DEFAULT NULL,
  `alamat_psikolog` varchar(100) NOT NULL,
  `bidang_psikolog` varchar(20) DEFAULT NULL,
  `foto_psikolog` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pusatkarir`
--

CREATE TABLE `tb_pusatkarir` (
  `id_pusatkarir` int(11) NOT NULL,
  `nip_pusatkarir` varchar(20) DEFAULT NULL,
  `nama_pusatkarir` varchar(30) DEFAULT NULL,
  `password_pusatkarir` varchar(20) DEFAULT NULL,
  `alamat_pusatkarir` varchar(100) NOT NULL,
  `nohp_pusatkarir` varchar(13) NOT NULL,
  `email_pusatkarir` varchar(50) DEFAULT NULL,
  `nidn_pusatkarir` varchar(11) DEFAULT NULL,
  `jabatan_pusatkarir` varchar(30) DEFAULT NULL,
  `status_pusatkarir` varchar(30) DEFAULT NULL,
  `golongan_pusatkarir` varchar(10) DEFAULT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `prodi_pusatkarir` varchar(20) NOT NULL,
  `foto_pusatkarir` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_chat`
--
ALTER TABLE `tb_chat`
  ADD PRIMARY KEY (`id_chat`);

--
-- Indexes for table `tb_detail_chat`
--
ALTER TABLE `tb_detail_chat`
  ADD PRIMARY KEY (`id_detail_chat`);

--
-- Indexes for table `tb_dosenwali`
--
ALTER TABLE `tb_dosenwali`
  ADD PRIMARY KEY (`id_doswal`);

--
-- Indexes for table `tb_kaprodi`
--
ALTER TABLE `tb_kaprodi`
  ADD PRIMARY KEY (`id_kaprodi`);

--
-- Indexes for table `tb_mhs`
--
ALTER TABLE `tb_mhs`
  ADD PRIMARY KEY (`id_mhs`);

--
-- Indexes for table `tb_psikolog`
--
ALTER TABLE `tb_psikolog`
  ADD PRIMARY KEY (`id_psikolog`);

--
-- Indexes for table `tb_pusatkarir`
--
ALTER TABLE `tb_pusatkarir`
  ADD PRIMARY KEY (`id_pusatkarir`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_chat`
--
ALTER TABLE `tb_chat`
  MODIFY `id_chat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_detail_chat`
--
ALTER TABLE `tb_detail_chat`
  MODIFY `id_detail_chat` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_dosenwali`
--
ALTER TABLE `tb_dosenwali`
  MODIFY `id_doswal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_kaprodi`
--
ALTER TABLE `tb_kaprodi`
  MODIFY `id_kaprodi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_mhs`
--
ALTER TABLE `tb_mhs`
  MODIFY `id_mhs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_psikolog`
--
ALTER TABLE `tb_psikolog`
  MODIFY `id_psikolog` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_pusatkarir`
--
ALTER TABLE `tb_pusatkarir`
  MODIFY `id_pusatkarir` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
