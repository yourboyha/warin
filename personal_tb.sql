-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2023 at 04:42 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `warin_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `personal_tb`
--

CREATE TABLE `personal_tb` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `type` enum('ผู้บริหาร','ครู','เจ้าหน้าที่','นักการภารโรง/แม่บ้าน') NOT NULL,
  `age` int(3) NOT NULL,
  `tel` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `personal_tb`
--

INSERT INTO `personal_tb` (`id`, `name`, `type`, `age`, `tel`) VALUES
(1, 'นายวุฒิพงศ์ วิมลพัชร', 'ครู', 30, 1111111111),
(2, 'นายแดง สีใส', 'เจ้าหน้าที่', 30, 1234567891),
(3, 'นายกำไล สวยดี', 'ผู้บริหาร', 50, 1234567890),
(4, 'นางสาวจริงใจ จริงจริง', 'เจ้าหน้าที่', 20, 123456789);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `personal_tb`
--
ALTER TABLE `personal_tb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `personal_tb`
--
ALTER TABLE `personal_tb`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
