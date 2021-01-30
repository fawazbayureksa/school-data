-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2021 at 02:07 PM
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
-- Database: `pendidikan`
--

-- --------------------------------------------------------

--
-- Table structure for table `school_tb`
--

CREATE TABLE `school_tb` (
  `id` int(11) NOT NULL,
  `NPSN` varchar(20) NOT NULL,
  `name_school` varchar(30) NOT NULL,
  `address` text NOT NULL,
  `logo_school` varchar(50) NOT NULL,
  `school_level` varchar(20) NOT NULL,
  `status_school` varchar(20) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `school_tb`
--

INSERT INTO `school_tb` (`id`, `NPSN`, `name_school`, `address`, `logo_school`, `school_level`, `status_school`, `user_id`) VALUES
(1, '40313348', 'SDN BONTO PAJJA', 'Bontopajja, LEMBANG PARANG, Kec. Barombong, Kab. Gowa Prov. Sulawesi Selatan', 'sdbtpj.jpg', 'Elementary school', 'Negeri', 1),
(2, '40313305', ' SMP NEGERI 2 BAROMBONG', 'Jl. Poros Kanjilo, KANJILO, Kec. Barombong, Kab. Gowa Prov. Sulawesi Selatan', 'smpbar1.jpg', 'Junior High School', 'Negeri', 1),
(3, '69939808', ' SMAN 22 GOWA', 'Tamannyeleng Kec. Barombong, Tamanyeleng, Kec. Barombong, Kab. Gowa Prov. Sulawesi Selatan', 'sma22gowa.jpg', 'Senior High School', 'Negeri', 2),
(4, '60729098', ' SMP IT AL-FITYAN SCHOOL', ' JL. PALLANTIKANG 1 , Tombolo, Kec. Somba Opu, Kab. Gowa Prov. Sulawesi Selatan', 'alfityan.jpg', 'Junior High School', 'Swasta', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`) VALUES
(1, 'Fawwaz Bayureksa', 'fawwazbayureksa@gmail.com', 'fawaz123'),
(2, 'nanna', 'nanna@gmail.com', 'nanna123'),
(3, 'Ainul', 'ainul@gmail.com', 'ainul');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `school_tb`
--
ALTER TABLE `school_tb`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `school_tb`
--
ALTER TABLE `school_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
