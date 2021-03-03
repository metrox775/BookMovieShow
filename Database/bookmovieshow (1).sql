-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 03, 2021 at 02:14 PM
-- Server version: 5.7.33-0ubuntu0.16.04.1
-- PHP Version: 7.1.33-29+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookmovieshow`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking_info`
--

CREATE TABLE `booking_info` (
  `id` int(10) NOT NULL,
  `movie_name` varchar(30) NOT NULL,
  `theater_name` varchar(40) NOT NULL,
  `timing` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `phone` int(40) NOT NULL,
  `booking_seat` varchar(50) NOT NULL,
  `total_seat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking_info`
--

INSERT INTO `booking_info` (`id`, `movie_name`, `theater_name`, `timing`, `username`, `phone`, `booking_seat`, `total_seat`) VALUES
(2, 'Aliens', 'city Gold ', '09:30', 'parth', 152, '40', ''),
(3, 'Aliens', 'city Gold ', '09:30', 'parth', 152, '40', ''),
(4, 'Aliens', 'city Gold ', '09:30', 'parth', 152, '40', ''),
(5, 'Aliens', 'city Gold ', '09:30', 'parth', 152, '40', ''),
(6, 'Aliens', 'city Gold ', '09:30', 'parth', 152, '40', '50'),
(7, 'Aliens', 'city Gold ', '09:30', 'parth', 152, '40', '50'),
(8, 'Aliens', 'city Gold ', '09:30', 'parth', 152, '40', '50'),
(9, 'Aliens', 'city Gold ', '09:30', 'parth', 152, '40', '50'),
(10, 'Aliens', 'city Gold ', '09:30', 'parth', 152, '40', '50'),
(11, 'Aliens', 'city Gold ', '09:30', 'parth', 152, '40', '50'),
(12, 'Aliens', 'city Gold ', '09:30', 'parth', 152, '40', '50'),
(13, 'Aliens', 'city Gold ', '09:30', 'parth', 152, '40', '50'),
(14, 'Aliens', 'city Gold ', '09:30', 'parth', 152, '40', '50'),
(15, 'Aliens', 'city Gold ', '09:30', 'parth', 152, '40', '50'),
(16, 'Aliens', 'city Gold ', '09:30', 'parth', 152, '40', '50'),
(17, 'Aliens', 'city Gold ', '09:30', 'parth', 152, '40', '50'),
(18, 'Aliens', 'city Gold ', '09:30', 'parth', 152, '40', '50'),
(19, 'Aliens', 'city Gold ', '09:30', 'parth', 152, '', '50'),
(20, 'Aliens', 'city Gold ', '09:30', 'parth', 152, '', '50'),
(21, 'Aliens', 'city Gold ', '09:30', 'parth', 152, '', '50'),
(22, 'Aliens', 'city Gold ', '09:30', 'parth', 152, '', '50'),
(23, 'Aliens', 'city Gold ', '09:30', 'parth', 152, '10', '50'),
(24, 'Aliens', 'city Gold ', '09:30', 'parth', 152, '10', '50'),
(25, 'Aliens', 'city Gold ', '09:30', 'parth', 152, '10', '50'),
(26, 'Aliens', 'city Gold ', '09:30', 'parth', 152, '10', '50'),
(27, 'Aliens', 'city Gold ', '09:30', 'parth', 152, '10', '50'),
(28, 'Aliens', 'city Gold ', '09:30', 'parth', 152, '26', '50'),
(29, 'Aliens', 'city Gold ', '09:30', 'parth', 152, '10', '50'),
(30, 'Aliens', 'city Gold ', '09:30', 'parth', 152, '10', '50'),
(31, 'Aliens', 'city Gold ', '09:30', 'parth', 152, '10', '50'),
(32, 'Aliens', 'city Gold ', '09:30', 'parth', 152, '48', '50'),
(33, 'Aliens', 'city Gold ', '09:30', 'parth', 152, '10', '50');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(10) NOT NULL,
  `city_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `city_name`) VALUES
(1, 'Ahmedabad');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(10) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `Movie`
--

CREATE TABLE `Movie` (
  `id` int(10) NOT NULL,
  `movie_name` varchar(40) NOT NULL,
  `movie_description` longtext NOT NULL,
  `movie_img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Movie`
--

INSERT INTO `Movie` (`id`, `movie_name`, `movie_description`, `movie_img`) VALUES
(40, 'Aliens', 'cowboys and aliens story ', 'images/03012021170302movie1.jpg'),
(42, 'ironman', 'Iron Man is a fictional superhero who wears a suit of armor. His alter ego is Tony Stark. He was created by Stan Lee, Jack Kirby and Larry Lieber for Marvel Comics in Tales of Suspense #39 in the year 1963 and appears in their comic books. He is also one of the main protagonists in the Marvel Cinematic Universe.', 'images/03012021171652movie4.jpg'),
(45, 'TomJarry ', 'In July 2015, Warner Bros. announced plans to release a solo Green Lantern film titled Green Lantern Corps, with an original release date scheduled for June 19, 2020. The film will be an installment in the DC Extended Universe. Hal Jordan and John Stewart will reportedly be the Green Lanterns focused on in the film.', 'images/03012021172752movie8.jpg'),
(46, 'marvalHero', 'Marvel counts among its characters such well-known superheroes as Spider-Man, Iron Man, Captain America, the Hulk, Thor, Wolverine, Ant-Man, the Wasp, Black Widow, Captain Marvel, Black Panther, Doctor Strange, Ghost Rider, Blade, Daredevil, the Punisher and Deadpool.', 'images/03012021172950movie7.jpg'),
(47, 'GreenLantern', 'Green Lantern is a 2011 American superhero film based on the DC Comics character of the same name. The film stars Ryan Reynolds, Blake Lively, Peter Sarsgaard, Mark Strong, Angela Bassett and Tim Robbins, with Martin Campbell directing a script by Greg Berlanti and comic book writers Michael Green and Marc Guggenheim, which was subsequently rewritten by Michael Goldenberg.[4] The film tells the story of Hal Jordan, a test pilot who is selected to become the first human member of the Green Lantern Corps. Hal is given a ring that grants him superpowers, and must confront Parallax, who threatens to upset the balance of power in the universe.', 'images/03012021173129movie5.jpg'),
(48, 'Triple9', 'Box office. $25.9 million. Triple 9 is a 2016 American action thriller film directed by John Hillcoat and written by Matt Cook. The film stars an ensemble cast featuring Casey Affleck, Chiwetel Ejiofor, Anthony Mackie, Aaron Paul, Clifton Collins Jr., Norman Reedus, Teresa Palmer, Michael K.\r\n', 'images/03012021173240movie6.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `email`, `phone`, `password`) VALUES
(1, 'parth', 'panchalparth5099@gmail.com', '9016375702', 'parth');

-- --------------------------------------------------------

--
-- Table structure for table `theater`
--

CREATE TABLE `theater` (
  `id` int(20) NOT NULL,
  `theater_name` longtext NOT NULL,
  `movie_name` varchar(40) NOT NULL,
  `movie_timing` varchar(50) NOT NULL,
  `total_sheets` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `theater`
--

INSERT INTO `theater` (`id`, `theater_name`, `movie_name`, `movie_timing`, `total_sheets`) VALUES
(8, 'city Gold ', 'Aliens', '09:30', '50'),
(9, 'C T Gold, Ashram road , Ahmedabad', 'Aliens', '12:00', '120');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking_info`
--
ALTER TABLE `booking_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Movie`
--
ALTER TABLE `Movie`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `theater`
--
ALTER TABLE `theater`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking_info`
--
ALTER TABLE `booking_info`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `Movie`
--
ALTER TABLE `Movie`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `theater`
--
ALTER TABLE `theater`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
