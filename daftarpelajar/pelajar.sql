-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2024 at 05:48 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asasphp`
--

-- --------------------------------------------------------

--
-- Table structure for table `pelajar`
--

CREATE TABLE `pelajar` (
  `id` int(11) NOT NULL,
  `fname` char(100) NOT NULL,
  `lname` char(100) NOT NULL,
  `nokp` char(12) NOT NULL,
  `ndp` char(12) NOT NULL,
  `email` char(100) NOT NULL,
  `kursus` char(50) NOT NULL,
  `gambar` char(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pelajar`
--

INSERT INTO `pelajar` (`id`, `fname`, `lname`, `nokp`, `ndp`, `email`, `kursus`, `gambar`) VALUES
(1, 'Muhammad Riyani', 'Makhtar', '000505101023', '190405062002', 'riyani@yehaa.com', 'Teknologi Keselamataan Siber', 'man.png'),
(2, 'Cahaya Purnama', 'Malam Terang', '011011436226', '200405062001', 'cahaya@purnama.com', 'Teknologi Jahitan Pakaian', 'woman.png'),
(3, 'John', 'Doe', '150212566213', '212023251223', 'john@email.com', 'Teknologi Pemesinan', 'boy.png'),
(4, 'Black', 'Widow', '161220124732', '220232231024', 'wblack@yuhuu.com', 'Teknologi Perisikan', 'girl.png'),
(5, 'Thor', 'Odin', '123', '456', 'thor@email.com', 'Lighting', 'man.png'),
(6, 'Tony', 'Stark', '456', '123', 'ironman@email.com', 'Robotic', 'man.png'),
(7, 'Captain', 'America', '789', '654', 'captain@email.com', 'Avengers', 'boy.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pelajar`
--
ALTER TABLE `pelajar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pelajar`
--
ALTER TABLE `pelajar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
