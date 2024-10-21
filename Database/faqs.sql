-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Jul 04, 2023 at 08:59 PM
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
-- Database: `faq`
--

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` int(11) NOT NULL,
  `question` text DEFAULT NULL,
  `answer` text DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answer`, `created_at`) VALUES
(1, 'What kind of racing suit does F1 drivers wear?', 'It\'s a multi-layered Nomex suit. Even the suit\'s zip has to withstand the heat that it could potentially be exposed to. At one point, sponsor logos used to be sewed on with fireproof threads.', '2022-11-21 15:18:05'),
(2, 'Can I meet drivers at an F1 race?', 'If you want to see them up close, then you have to have a “Paddock pass” it allows you to wander around \r\nthe paddock and you most certainly will meet a F1 driver, since they usually hangout in the paddock.', '2022-11-21 15:18:32'),
(3, 'What is the speed of a F1 car with DRS?', 'Top speed is 300km/h / 186mph approx.', '2022-11-21 15:18:48'),
(4, 'Why do F1 drivers have to go through intense training?', 'Drivers experience such extreme physical demands for two reasons. First, the car generates an enormous \r\namount of heat from the engine so the driver experiences temperatures in their cockpit of around 50C (122F).\r\n\r\nSecond, there are the dreaded G-forces. During a race a driver is exposed to up to five times gravity pushing \r\ndown on them, making it harder to breathe, pump blood around their body and move their arms and legs. ', '2022-11-21 15:19:16'),
(5, 'why do they weigh the drivers after an f1 race ?', 'F1 drivers are weighed after races for two reasons. The first reason is to see how much weight the driver has lost during the race. The second is to make sure themselves and the car are above the minimum weight \r\nmentioned in the rules. All of the drivers are weighed immediately after a race.', '2022-11-21 15:19:46'),
(6, 'How much weight does f1 drivers loose after each race ?', 'Formula 1 drivers burn, on average, 1500 calories per race. The number of calories lost per race will depend on the length of the race, the speed of the track, the track conditions, and the weather. Each driver loses, on average, between two and four kilograms per race.', '2022-11-21 15:20:21'),
(7, 'What is F1?', 'It was motorsport where each team compete to win the World Campionship.', '2023-03-21 19:42:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
