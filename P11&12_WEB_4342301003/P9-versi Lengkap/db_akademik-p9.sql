-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2023 at 06:43 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_akademik`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin'),
('aldy', 'aldy');

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `NIK` varchar(30) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `unit_kerja` varchar(100) NOT NULL,
  `prodi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`NIK`, `Nama`, `email`, `jabatan`, `unit_kerja`, `prodi`) VALUES
('100017', 'Dr. Metta Santiputri, S.T., M.Sc, Ph.D', 'metta@polibatam.ac.id', 'Dosen Pengajar', 'Teknik Informatika', ' D3 - Informatika '),
('113104', 'Selly Artaty Zega, S.ST., M.Sc', 'selly@polibatam.ac.id', 'Kepala Program Studi', 'Teknik Informatika', ' D4 - Animasi   '),
('113105', 'Supardianto, M.Eng.', 'supardianto@polibatam.ac.id', 'Kepala Program Studi', 'Teknik Informatika', ' D4 - Teknologi rekayasa Perangkat Lunak  '),
('113106', 'Sandi Prasetyaningsih, S.ST., M.Media', 'sandi@polibatam.ac.id', 'Kepala Program Studi', 'Teknik Informatika', ' D4 - Teknologi Rekayasa Multimedia   '),
('113110', 'Sudra Irawan, S.Pd.Si., M.Sc', 'sudra@polibatam.ac.id', 'Kepala Jurusan', 'Teknik Informatika', ' D3 - Teknologi Geomatika '),
('115143', 'Ahmad Hamim Thohari, S.S.T., M.T.', 'hamim@polibatam.ac.id', 'Kepala Program Studi', 'Teknik Informatika', ' D3 - Informatika '),
('117175', 'Hamdani Arif, S.Pd., M.Sc', 'hamdaniarif@polibatam.ac.id', 'Kepala Program Studi', 'Teknik Informatika', ' D4 - Rekayasa Keamanan Siber  '),
('118207', 'Siti Noor Chayati, S.T., M.Sc', 'sitinoorcahyati@polibatam.ac.id', 'Dosen Pengajar', 'Teknik Informatika', ' D3 - Teknologi Geomatika '),
('118208', 'Ir. Farouki Dinda Rassarandi, S.T., M.Eng.', 'farouki@polibatam.ac.id', 'Kepala Program Studi', 'Teknik Informatika', ' D3 - Teknologi Geomatika '),
('122275', 'Ahmadi Irmansyah Lubis, S.Kom., M.Kom.', 'ahmadi@polibatam.ac.id', 'Dosen Pengajar', 'Teknik Informatika', ' D4 - Teknologi rekayasa Perangkat Lunak  '),
('122277', 'Noper Ardi, S.Pd., M.Eng', 'noperardi@polibatam.ac.id', 'Dosen Pengajar', 'Teknik Informatika', ' D4 - Teknologi rekayasa Perangkat Lunak  '),
('122279', 'Alena Uperiati, S.T., M.Cs', 'alena@polibatam.ac.id', 'Dosen Pengajar', 'Teknik Informatika', ' D4 - Teknologi rekayasa Perangkat Lunak  '),
('222331', 'Gilang Bagus Ramadhan, A.Md. Kom', 'gilang@polibatam.ac.id', 'Assisten Dosen', 'Teknik Informatika', ' D3 - Informatika ');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `matkul` varchar(100) NOT NULL,
  `kode_matkul` varchar(30) NOT NULL,
  `ruang` varchar(30) NOT NULL,
  `dp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`tanggal`, `jam`, `matkul`, `kode_matkul`, `ruang`, `dp`) VALUES
('2023-11-21', '09:00:00', 'Algoritma dan Dasar pemograman', 'RPL102', 'TA 12.4', 'Alena Uperiati, S.T., M.Cs'),
('2023-11-23', '14:30:00', 'Matematika Diskrit', 'RPL103 ', 'TA 12.4', 'Siti Noor Chayati, S.T., M.Sc'),
('2023-11-21', '08:00:00', 'Analisis dan spesifikasi Kebutuhan Perangkat Lunak', 'RPL104 ', 'TA 12.5', 'Supardianto, M.Eng.'),
('2023-11-22', '12:00:00', 'Pemograman Berbasis Website', 'RPL105', 'TA 12.4', 'Noper Ardi, S.Pd., M.Eng'),
('2023-11-24', '08:00:00', 'Pengatar Basis Data', 'RPL106 ', 'TA 12.4', 'Ahmadi Irmansyah Lubis, S.kom., M.kom.');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` char(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `prodi` varchar(100) NOT NULL,
  `kelas` enum('pagi','malam') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `alamat`, `jurusan`, `prodi`, `kelas`) VALUES
('3232301036', 'Michael Jotham Horas Tamba', 'Perumahan Bida Ayu Blok D', 'Teknik Elektronika', ' D3 - Teknik Instrumentasi ', 'pagi'),
('3312311118', 'Yusuf Daniswara', 'Sagulung', 'Teknik Informatika', ' D3 - Informatika ', 'malam'),
('4332311044', 'Adhitya Pramadhan', 'Perumahan GMP', 'Teknik Informatika', ' D3 - Teknik Perawatan Pesawat udara  ', 'pagi'),
('4342301003', 'Aldy Jhonatan Hutasoit', 'Pancur Swadaya Blok M no. 06', 'Teknik Informatika', ' D4 - Teknologi rekayasa Perangkat Lunak', 'pagi'),
('4342301030', 'Yocelyn Theona Setiawan', 'Perumahan Botania', 'Teknik Informatika', ' D4 - Teknologi rekayasa Perangkat Lunak', 'pagi');

-- --------------------------------------------------------

--
-- Table structure for table `pengawai`
--

CREATE TABLE `pengawai` (
  `NP` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `gedung` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengawai`
--

INSERT INTO `pengawai` (`NP`, `nama`, `role`, `gedung`) VALUES
(1000323, 'Jannah Sudirman', 'Pustakawan', 'Gedung Utama');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`NIK`),
  ADD UNIQUE KEY `Nama` (`Nama`),
  ADD KEY `Nama_2` (`Nama`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`kode_matkul`),
  ADD KEY `Matkul` (`matkul`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `pengawai`
--
ALTER TABLE `pengawai`
  ADD PRIMARY KEY (`NP`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
