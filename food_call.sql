-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2019 at 03:40 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food_call`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `regno` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email_id` varchar(35) NOT NULL,
  `password` varchar(20) NOT NULL,
  `phno` varchar(20) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `DOB` date NOT NULL,
  `hostel_block` varchar(10) NOT NULL,
  `profileimage` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`regno`, `name`, `email_id`, `password`, `phno`, `Gender`, `DOB`, `hostel_block`, `profileimage`) VALUES
('17BCE0387', 'Chaitanya Dave', 'chaitanyadave23@gmail.com', 'ok', '0', '', '0000-00-00', '', ''),
('17BCE0387', 'chaitany', 'chai@gmail.com', 'lk', '988999889', 'make', '2019-09-18', 'ok', 'ok'),
('17BCE0387', 'Chaitanya - Dave', 'chaitanyadave123@gmail.com', 'lk', '9106618364', 'on', '0000-00-00', 'Chaitanya ', 'Chaitanya - Dave'),
('17BCE0387', 'Chaitanya - Dave', 'chaitanyadave2323@gmail.com', 'lk', '9106618364', 'on', '0000-00-00', '', ''),
('17BCE0387', 'Nilam Dave', 'nileshsikri986@gmail.com', 'ok', '9106618364', 'on', '0000-00-00', '', ''),
('17BCE0387', 'chaitanya', 'okay@gmail.com', 'kk', '9106618364', 'on', '0000-00-00', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `main_menu`
--

CREATE TABLE `main_menu` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `price` varchar(20) NOT NULL,
  `description` varchar(50) NOT NULL,
  `type` varchar(11) NOT NULL,
  `rating` float NOT NULL,
  `image` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `main_menu`
--

INSERT INTO `main_menu` (`id`, `name`, `price`, `description`, `type`, `rating`, `image`) VALUES
(0, 'Pav Bhaji', '100', 'North Indian, Spicy', '0', 2.3, ''),
(0, 'Pav Bhaji', '100', 'North Indian, Spicy', 'Veg', 2.3, '');

-- --------------------------------------------------------

--
-- Table structure for table `suggestions`
--

CREATE TABLE `suggestions` (
  `email` varchar(30) NOT NULL,
  `Suggestion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suggestions`
--

INSERT INTO `suggestions` (`email`, `Suggestion`) VALUES
('', '0'),
('chaitanyadave23@gmail.com', '0'),
('chaitanyadave23@gmail.com', 'fsnsn');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
