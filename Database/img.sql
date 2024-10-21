-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Jul 04, 2023 at 08:34 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `upload`
--

-- --------------------------------------------------------

--
-- Table structure for table `img`
--

CREATE TABLE `img` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `img`
--

INSERT INTO `img` (`id`, `name`, `image`) VALUES
(0, 'The real Struggle', '637b4a9ad8a0c.png'),
(0, 'Classic Danny Ricc', '637b4ada84ae0.png'),
(0, 'Ferrari 2022', '637b4b373e59a.png'),
(0, 'Definitely ', '637b4b7d42184.png'),
(0, 'Gotifi', '637b4b9a82339.png'),
(0, 'Mick & Seb', '637b4c2d85d27.png'),
(0, 'The evolution of helmet', '637b4c5392885.png'),
(0, 'F1 logo', '637b4c83555b1.png'),
(0, 'F1 Fans', '637b4cb83f109.png'),
(0, 'leclerc', '637b4cd88ae3a.png'),
(0, 'Champion of Walls', '637b4d1ee5201.png'),
(0, 'Mazspin', '637b4d451c24a.png'),
(0, 'Father and Son', '637b4d6280bc1.png'),
(0, 'Bottas :((', '637b4d825504d.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
