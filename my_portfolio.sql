-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2023 at 01:34 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `contact_id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(250) NOT NULL,
  `last_name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`contact_id`, `first_name`, `last_name`, `email`, `phone`) VALUES
(1, 'garce', 'chisambi', 'chisambigrace@gmail.com', 991633282),
(2, 'grace', 'chisambi', 'chisambigrace@gmail.com', 991633282);

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `description`) VALUES
(1, '<p align=\"center\"><font size=\"30\">  Hello there!!!</font></p>'),
(2, '<p align=\"center\"><font size=\"30\">Am Grace Chisambi</font></p>'),
(3, '<p align=\"center\"><font size=\"30\"> web designer / programmer</font></p>'),
(4, '<p align=\"left\"> I am still pursuing my studies in Mzuzu University, I create beautiful brands and outstanding digital products like websites, mobile apps,complex tools and platforms. I am a person who thrives when facing complex and creative challenges,I am a tolerant person and a team player </p>\r\n'),
(5, ' <p><font size=\"30\">Goal</font></p>'),
(6, '<p align=\"left\">My goal as a web designer and programmer is to build accessible interface for mobile and computers which interacts with end users successfully </p>  \r\n');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `project_id` bigint(20) UNSIGNED NOT NULL,
  `project_name` varchar(250) NOT NULL,
  `Description` text NOT NULL,
  `Images` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`project_id`, `project_name`, `Description`, `Images`) VALUES
(1, 'StuddyEbuddy', 'Programmed to track student progress', 0),
(2, 'My Portfolio', 'One of my School Project', 0),
(3, 'Fake', 'Graphic design project', 0),
(4, 'Allula', 'fake lotion designed the outer layer', 0);

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `skills_id` bigint(20) UNSIGNED NOT NULL,
  `skills_name` varchar(250) NOT NULL,
  `Description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`skills_id`, `skills_name`, `Description`) VALUES
(1, 'CSS', 'Styling my web pages'),
(2, 'HTML', 'Structuring my web pages'),
(3, 'Graphic Designing', 'logos, Artworks'),
(4, 'C Programming', 'creating complex apps e.g mobile apps like games');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD UNIQUE KEY `contact_id` (`contact_id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD UNIQUE KEY `project_id` (`project_id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD UNIQUE KEY `skills_id` (`skills_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `contact_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `project_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `skills_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
