-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2017 at 12:47 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kelompok`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'wahyu', '32c9e71e866ecdbc93e497482aa6779f');

-- --------------------------------------------------------

--
-- Table structure for table `kelompok`
--

CREATE TABLE `kelompok` (
  `id` int(11) NOT NULL,
  `kelompok_matkul` varchar(200) NOT NULL,
  `objectives` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelompok`
--

INSERT INTO `kelompok` (`id`, `kelompok_matkul`, `objectives`) VALUES
(5, 'DATA MINING', 'BELUM DITENTUKAN'),
(6, 'fisika', 'buat bundelan'),
(8, 'mtk', 'latihan kelompok'),
(9, 'Fisika dasar', 'buat laporan'),
(10, 'a', 'bikin laporan'),
(11, 'warehouse', 'bikin laporan'),
(12, 'sistem informasi', 'kelompok 2');

-- --------------------------------------------------------

--
-- Table structure for table `mhs`
--

CREATE TABLE `mhs` (
  `id` int(11) NOT NULL,
  `nim` varchar(200) NOT NULL,
  `nama` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mhs`
--

INSERT INTO `mhs` (`id`, `nim`, `nama`) VALUES
(11, 'F1E114002', 'NOVITRIANI'),
(12, 'F1E114003', 'BUKHORI'),
(13, 'F1E114004', 'AFRIANA'),
(14, 'F1E114005', 'RAHMAT DIKA A'),
(15, 'F1E114006', 'FADLI FATUL'),
(16, 'F1E114008', 'TISYA QINTARI'),
(17, 'F1E114009', 'PRATAMA A. AKBAR'),
(18, 'F1E114010', 'PADLI'),
(19, 'F1E114011', 'RIZKY R. UTAMI'),
(20, 'F1E114012', 'AIDA ZURAINI'),
(21, 'F1E114013', 'ZERI AGUSTIN'),
(22, 'F1E114014', 'RISA LOREN S.'),
(23, 'F1E114015', 'M.AMIN L. LUTHFI'),
(24, 'F1E114016', 'A. ARIEF ARIEZA'),
(25, 'F1E114017', 'AUDINA NURHANI'),
(26, 'F1E114021', 'ANDI SUSANTO'),
(27, 'F1E114022', 'AFDHAL PRATAMA P'),
(28, 'F1E114023', 'ULIA NIATI'),
(29, 'F1E114024', 'WAHYU BUDIMAN'),
(31, 'F1E114026', 'LASMAULI SIMANJUNTAK'),
(32, 'F1E114028', 'DEDI KURNIAWAN'),
(33, 'F1E114029', 'YOGIE AJIE P.'),
(34, 'F1E114030', 'SITI NURASIAH'),
(35, 'F1E114031', 'HONARIS CAUSA'),
(36, 'F1E114032', 'EKA KUMALA'),
(37, 'F1E114033', 'NUR ANGGRAINI'),
(38, 'F1E114035', 'M. FURQAN HAKIM'),
(39, 'F1E114037', 'M. ABROR'),
(69, 'F1E114025', 'ADHA MUJIBURRAHMAN'),
(70, 'F1E114018', 'ANDRE OKTARI'),
(71, 'F1E113019', 'AGUSTAN CRISTOVER SIAGIAN'),
(72, 'F1E115030', 'PRIANDIP');

-- --------------------------------------------------------

--
-- Table structure for table `mhs_kelompok`
--

CREATE TABLE `mhs_kelompok` (
  `id` int(11) NOT NULL,
  `id_kelompok` varchar(200) NOT NULL,
  `no_kelompok` int(11) NOT NULL,
  `anggota` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mhs_kelompok`
--

INSERT INTO `mhs_kelompok` (`id`, `id_kelompok`, `no_kelompok`, `anggota`) VALUES
(0, '', 0, ''),
(209, '1', 1, 'F1E114009'),
(210, '1', 1, 'F1E114004'),
(211, '1', 1, 'F1E114030'),
(212, '1', 1, 'F1E114002'),
(213, '1', 1, 'F1E114006'),
(214, '1', 2, 'F1E114033'),
(215, '1', 2, 'F1E114012'),
(216, '1', 2, 'F1E114024'),
(217, '1', 2, 'F1E114013'),
(218, '1', 2, 'F1E114010'),
(219, '1', 3, 'F1E114037'),
(220, '1', 3, 'F1E114014'),
(221, '1', 3, 'F1E114015'),
(222, '1', 3, 'F1E114016'),
(223, '1', 3, 'F1E114018'),
(224, '1', 4, 'F1E114023'),
(225, '1', 4, 'F1E114035'),
(226, '1', 4, 'F1E114026'),
(227, '1', 4, 'F1E114025'),
(228, '1', 4, 'F1E114003'),
(229, '1', 5, 'F1E114031'),
(230, '1', 5, 'F1E114005'),
(231, '1', 5, 'F1E114011'),
(232, '1', 5, 'F1E114022'),
(233, '1', 5, 'F1E114017'),
(234, '1', 6, 'F1E114021'),
(235, '1', 6, 'F1E114008'),
(236, '1', 6, 'F1E114032'),
(237, '1', 6, 'F1E114029'),
(238, '1', 6, 'F1E114028'),
(239, '2', 1, 'F1E114022'),
(240, '2', 1, 'F1E114017'),
(241, '2', 1, 'F1E114028'),
(242, '2', 1, 'F1E114014'),
(243, '2', 2, 'F1E114003'),
(244, '2', 2, 'F1E114032'),
(245, '2', 2, 'F1E114015'),
(246, '2', 2, 'F1E114011'),
(247, '2', 3, 'F1E114008'),
(248, '2', 3, 'F1E114037'),
(249, '2', 3, 'F1E114023'),
(250, '2', 3, 'F1E114012'),
(251, '2', 4, 'F1E114026'),
(252, '2', 4, 'F1E114018'),
(253, '2', 4, 'F1E114005'),
(254, '2', 4, 'F1E114025'),
(255, '2', 5, 'F1E114031'),
(256, '2', 5, 'F1E114016'),
(257, '2', 5, 'F1E114024'),
(258, '2', 5, 'F1E114021'),
(259, '2', 6, 'F1E114004'),
(260, '2', 6, 'F1E114002'),
(261, '2', 6, 'F1E114035'),
(262, '2', 6, 'F1E114009'),
(263, '2', 6, 'F1E114006'),
(264, '2', 7, 'F1E114030'),
(265, '2', 7, 'F1E114010'),
(266, '2', 7, 'F1E114033'),
(267, '2', 7, 'F1E114013'),
(268, '2', 7, 'F1E114029'),
(269, '5', 1, 'F1E114011'),
(270, '5', 1, 'F1E113019'),
(271, '5', 1, 'F1E114035'),
(272, '5', 1, 'F1E114030'),
(273, '5', 1, 'F1E114002'),
(274, '5', 2, 'F1E114015'),
(275, '5', 2, 'F1E114023'),
(276, '5', 2, 'F1E114009'),
(277, '5', 2, 'F1E114010'),
(278, '5', 2, 'F1E114017'),
(279, '5', 3, 'F1E114029'),
(280, '5', 3, 'F1E114026'),
(281, '5', 3, 'F1E114012'),
(282, '5', 3, 'F1E114021'),
(283, '5', 3, 'F1E114006'),
(284, '5', 4, 'F1E114033'),
(285, '5', 4, 'F1E114013'),
(286, '5', 4, 'F1E114022'),
(287, '5', 4, 'F1E114024'),
(288, '5', 4, 'F1E114018'),
(289, '5', 5, 'F1E114016'),
(290, '5', 5, 'F1E114014'),
(291, '5', 5, 'F1E114032'),
(292, '5', 5, 'F1E114008'),
(293, '5', 5, 'F1E114025'),
(294, '5', 1, 'F1E114003'),
(295, '5', 2, 'F1E114031'),
(296, '5', 3, 'F1E114004'),
(297, '5', 4, 'F1E114005'),
(299, '5', 5, 'F1E114028'),
(300, '10', 1, 'F1E114026'),
(301, '10', 1, 'F1E114032'),
(302, '10', 1, 'F1E114005'),
(303, '10', 1, 'F1E114031'),
(304, '10', 1, 'F1E114029'),
(305, '10', 2, 'F1E114024'),
(306, '10', 2, 'F1E114017'),
(307, '10', 2, 'F1E114037'),
(308, '10', 2, 'F1E114033'),
(309, '10', 2, 'F1E114030'),
(310, '10', 3, 'F1E114008'),
(311, '10', 3, 'F1E114011'),
(312, '10', 3, 'F1E114006'),
(313, '10', 3, 'F1E114002'),
(314, '10', 3, 'F1E114018'),
(315, '10', 4, 'F1E114013'),
(316, '10', 4, 'F1E114023'),
(317, '10', 4, 'F1E114010'),
(318, '10', 4, 'F1E114009'),
(319, '10', 4, 'F1E113019'),
(320, '10', 5, 'F1E114014'),
(321, '10', 5, 'F1E114035'),
(322, '10', 5, 'F1E114028'),
(323, '10', 5, 'F1E114016'),
(324, '10', 5, 'F1E114003'),
(325, '10', 6, 'F1E114004'),
(326, '10', 6, 'F1E114012'),
(327, '10', 6, 'F1E114021'),
(328, '10', 6, 'F1E114022'),
(329, '10', 6, 'F1E114025'),
(330, '10', 6, 'F1E114015'),
(331, '11', 1, 'F1E114016'),
(332, '11', 1, 'F1E114026'),
(333, '11', 1, 'F1E114018'),
(334, '11', 1, 'F1E114005'),
(335, '11', 1, 'F1E114032'),
(336, '11', 2, 'F1E114030'),
(337, '11', 2, 'F1E114014'),
(338, '11', 2, 'F1E114033'),
(339, '11', 2, 'F1E114037'),
(340, '11', 2, 'F1E114028'),
(341, '11', 3, 'F1E114021'),
(342, '11', 3, 'F1E114013'),
(343, '11', 3, 'F1E114006'),
(344, '11', 3, 'F1E114017'),
(345, '11', 3, 'F1E114011'),
(346, '11', 4, 'F1E114023'),
(347, '11', 4, 'F1E114031'),
(348, '11', 4, 'F1E114009'),
(349, '11', 4, 'F1E114012'),
(350, '11', 4, 'F1E114015'),
(351, '11', 5, 'F1E114003'),
(352, '11', 5, 'F1E114002'),
(353, '11', 5, 'F1E114024'),
(354, '11', 5, 'F1E114035'),
(355, '11', 5, 'F1E114004'),
(356, '11', 6, 'F1E114029'),
(357, '11', 6, 'F1E113019'),
(358, '11', 6, 'F1E114010'),
(359, '11', 6, 'F1E114022'),
(360, '11', 6, 'F1E114025'),
(361, '11', 6, 'F1E114008');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelompok`
--
ALTER TABLE `kelompok`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mhs`
--
ALTER TABLE `mhs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nim` (`nim`);

--
-- Indexes for table `mhs_kelompok`
--
ALTER TABLE `mhs_kelompok`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `kelompok`
--
ALTER TABLE `kelompok`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `mhs`
--
ALTER TABLE `mhs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
--
-- AUTO_INCREMENT for table `mhs_kelompok`
--
ALTER TABLE `mhs_kelompok`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=362;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
