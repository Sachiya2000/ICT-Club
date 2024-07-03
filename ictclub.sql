-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2024 at 08:10 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ictclub`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(4) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`) VALUES
(4, 'siril', 'gymboysrilanka2001@g', '2222'),
(5, 'Admin', 'admin@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `event_id` int(10) NOT NULL,
  `event_name` varchar(20) NOT NULL,
  `event_img` varchar(250) NOT NULL,
  `description` varchar(150) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_id`, `event_name`, `event_img`, `description`, `date`) VALUES
(5, 'Designthon', 'IMG-65f9133a4e0963.17562317.jpg', 'djhjjdfjf jiosqfi  jweijfoij wjiojrdj i32iji wijijeweioew uh2euihiu huehiuwqh ue2io 2oijoij o21joj ', '2024-03-06'),
(6, ' Industry Visit', 'IMG-66175e50275c89.05281822.jpg', 'We went to industry visit Virtusa. That is wonderful day.', '2024-03-04'),
(7, 'Desigthon', 'IMG-66175faf262698.52684200.jpg', 'This best design event for ui/ux designers', '2023-11-25'),
(8, 'Hackthon', 'IMG-661760f041c884.62613588.jpg', 'This Is a best Developer Event ', '2023-11-25'),
(9, 'Wrap Up Party', 'IMG-66176163138fd3.12642841.jpg', 'For a Our Graduate Student', '2023-12-19'),
(10, 'Workshop', 'IMG-661761b5a63177.69378840.jpg', 'This is a Cyber Security workshop ', '2024-09-11'),
(11, 'Workshop', 'IMG-6617620796aa66.49788998.jpg', 'This is a QA Workshop', '2024-07-11'),
(12, 'Workshop', 'IMG-661762935ea508.71206597.jpg', 'This is a Software Engineer Workshop', '2024-08-14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`event_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `event_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
