-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2024 at 04:38 AM
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
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'riyani', '$2y$10$4j8xcPyIZL.VNv2haOJRROfeVmQ9ZsxULQ6oD63POswnX1ZyIl1dq'),
(2, 'admin', '$2y$10$kUtDZDZrigUW6ym3ZSdwXecvIiIcYzYEBp1vFrwGKIK9AhF2qGwGG');

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
  `gambar` char(17) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pelajar`
--

INSERT INTO `pelajar` (`id`, `fname`, `lname`, `nokp`, `ndp`, `email`, `kursus`, `gambar`) VALUES
(1, 'Muhammad Riyani', 'Makhtar', '000505101023', '190405062002', 'riyani@yehaa.com', 'Teknologi Keselamataan Siber', '000505101023.png'),
(2, 'Cahaya Purnama', 'Malam Terang', '011011436226', '200405062001', 'cahaya@purnama.com', 'Teknologi Jahitan Pakaian', '011011436226.png'),
(3, 'John', 'Doe', '150212566213', '212023251223', 'john@email.com', 'Teknologi Pemesinan', '150212566213.png'),
(4, 'Black', 'Widow', '161220124732', '220232231024', 'wblack@yuhuu.com', 'Teknologi Perisikan', '161220124732.png'),
(5, 'Thor', 'Odin', '911239856321', '456', 'thor@email.com', 'Lighting', '911239856321.png'),
(6, 'Tony', 'Stark', '847896321546', '123', 'ironman@email.com', 'Robotic', '847896321546.png'),
(7, 'Captain', 'America', '852134679582', '654', 'captain@email.com', 'Avengers', '852134679582.png'),
(8, 'Test', 'Test1', '123456789741', '987456123965', 'test@email.com', 'Masakan', '123456789741.png'),
(9, 'Aman', 'Buble', '963214785264', '213564879524', 'aman@email.com', 'Swimming', '963214785264.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelajar`
--
ALTER TABLE `pelajar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pelajar`
--
ALTER TABLE `pelajar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
