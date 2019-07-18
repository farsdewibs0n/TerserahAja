-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2019 at 09:03 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bunda`
--

-- --------------------------------------------------------

--
-- Table structure for table `curhatan`
--

CREATE TABLE `curhatan` (
  `id_curhat` int(11) NOT NULL,
  `isi_curhat` text NOT NULL,
  `judul_curhat` text NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `curhatan`
--

INSERT INTO `curhatan` (`id_curhat`, `isi_curhat`, `judul_curhat`, `tanggal`) VALUES
(1, 'Aku sayang alry', 'Harly Bopak', '2019-07-18 00:00:00'),
(2, 'qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq', 'qqqqqqqqqqqq', '2019-07-18 00:00:00'),
(3, 'oke', 'buat', '0000-00-00 00:00:00'),
(4, 'asdfasdfsdfsdfdfs', 'asdfasdfsdfsdfsd', '0000-00-00 00:00:00'),
(5, 'min mau curhat dong. aku punya pacar namanya irwan dia selingkuhi aku', 'Irwan Selingkuhi aku', '0000-00-00 00:00:00'),
(6, 'projek error terus', 'sakit hati', '0000-00-00 00:00:00'),
(7, 'Min mau curhat dong gimana cara ngadapi kawan yang telah nikung kita??', 'Dwi Safitra', '0000-00-00 00:00:00'),
(8, 'Kapan kalian pergi dari sini sejak siang disini ngga mau pulang apaa?\r\n', 'Hantu McD', '0000-00-00 00:00:00'),
(9, 'Kapan saya bisa pulang', 'Fahtur ', '0000-00-00 00:00:00'),
(10, 'qqqq', 'qqq', '0000-00-00 00:00:00'),
(11, 'aaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaa', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `nama`, `password`) VALUES
(1, 'nofiarly', 'Nofiarly', '123'),
(2, 'nofiarly', 'Nofiarly Kadarisman', '123'),
(3, 'arly', 'arly', '111'),
(4, 'a', 'a', 'a'),
(15, 'nofiarly27', 'nofiarly', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `curhatan`
--
ALTER TABLE `curhatan`
  ADD PRIMARY KEY (`id_curhat`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `curhatan`
--
ALTER TABLE `curhatan`
  MODIFY `id_curhat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
