-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Jul 04, 2023 at 08:33 PM
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
-- Database: `standing`
--

-- --------------------------------------------------------

--
-- Table structure for table `driver_2022`
--

CREATE TABLE `driver_2022` (
  `pos` int(11) NOT NULL,
  `driver` varchar(30) NOT NULL,
  `team` varchar(30) NOT NULL,
  `pts` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `driver_2022`
--

INSERT INTO `driver_2022` (`pos`, `driver`, `team`, `pts`) VALUES
(1, 'Max Verstappen', 'Red Bull Racing RBPT', 454),
(2, 'Charles Leclerc', 'Ferrari', 308),
(3, 'Serigo Perez', 'Red Bull Racing RBPT', 305),
(4, 'George Russell', 'Mercedes', 275),
(5, 'Carlos Sainz', 'Ferrari', 246),
(6, 'Lewis Hamilton', 'Mercedes', 240),
(7, 'Lando Norris', 'Mclaren Mercedes', 122),
(8, 'Esteban Ocon', 'Alpine Renault', 92),
(9, 'Fernando Alonso', 'Alpine Renault', 81),
(10, 'Valtteri Bottas', 'Alfa Romeo Ferrari', 49),
(11, 'Daniel Ricciardo', 'Mclaren Mercedes', 37),
(12, 'Sebastian Vettel', 'Aston Martin Aramco Mercedes', 37),
(13, 'Kevin Magnussen', 'Haas Ferrari', 25),
(14, 'Pierre Gasly', 'Alphatauri RBPT', 23),
(15, 'Lance Stroll', 'Aston Martin Aramco Mercedes', 18),
(16, 'Mick Schumacher', 'Haas Ferrari', 12),
(17, 'Yuki Tsunoda', 'Alphatauri RBPT', 12),
(18, 'Zhou Guanyu', 'Alfa Romeo Ferrari', 6),
(19, 'Alexander Albon', 'Williams Mercedes', 4),
(20, 'Nicholas Latifi', 'Williams Mercedes', 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
