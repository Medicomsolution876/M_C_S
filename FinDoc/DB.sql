-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 18, 2018 at 09:30 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `MediCom`
--

-- --------------------------------------------------------

--
-- Table structure for table `check_symptoms`
--

CREATE TABLE `check_symptoms` (
  `sym_id` int(11) NOT NULL,
  `sym_name` varchar(50) NOT NULL,
  `di_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `check_symptoms`
--

INSERT INTO `check_symptoms` (`sym_id`, `sym_name`, `di_id`) VALUES
(1, 'cough', 1),
(2, 'diarrhoea', 1),
(3, 'respiratory difficulties', 1),
(4, 'fever', 1),
(5, 'headache', 1),
(6, 'runny nose', 1),
(7, 'sore throat', 1),
(8, 'joint pain', 2),
(9, 'rash', 2),
(10, 'fear of water', 2),
(11, 'fever', 2),
(12, 'fatigue', 2),
(13, 'headache', 2),
(14, 'dehydartion', 3),
(15, 'diarrhoea', 3),
(16, 'headache', 4),
(17, 'joint pain', 4),
(18, 'nausea', 4),
(19, 'vomiting', 4),
(20, 'pain behind eyes', 4),
(21, 'sowllen glands', 4),
(22, 'rash', 4),
(23, 'fever', 5),
(24, 'headache', 5),
(25, 'muscle ache', 5),
(26, 'fatigue', 5),
(27, 'diarrhoea', 6),
(28, 'nausea', 6),
(29, 'abdominal pain', 6),
(30, 'vomiting', 6),
(31, 'fever', 6),
(32, 'abdominal pain', 7),
(33, 'fatigue', 7),
(34, 'vomiting', 7),
(35, 'weight loss', 7),
(36, 'dark urine', 7),
(37, 'pale stool', 7),
(38, 'fever', 8),
(39, 'shaking chills', 8),
(40, 'sweating', 8),
(41, 'headache', 8),
(42, 'nausea', 8),
(43, 'vomiting', 8),
(44, 'convulsions', 8),
(45, 'bloody stools', 8),
(46, 'anemia', 8),
(47, 'fever', 9),
(48, 'cough', 9),
(49, 'light sensitivity', 9),
(50, 'redness in the eye', 9),
(51, 'muscle ache', 9),
(52, 'sore throat', 9),
(53, 'white spots inside the mouth', 9),
(54, 'muscle weakness', 10),
(55, 'fever', 10),
(56, 'tingling', 10),
(57, 'fast heart rate', 11),
(58, 'fever', 11),
(59, 'high blood pressure', 11),
(60, 'sweating', 11),
(61, 'abdominal pain', 12),
(62, 'constipation', 12),
(63, 'weakness', 12),
(64, 'headache', 12),
(65, 'fever', 13),
(66, 'headache', 13),
(67, 'joint pain', 13),
(68, 'redness in the eye', 13),
(69, 'rash', 13),
(70, 'muscle ache', 13);

-- --------------------------------------------------------

--
-- Table structure for table `doctor_reg`
--

CREATE TABLE `doctor_reg` (
  `id` int(11) NOT NULL,
  `name_register` text NOT NULL,
  `lastname_register` text NOT NULL,
  `specialization` varchar(50) NOT NULL,
  `city_register` varchar(30) NOT NULL,
  `country_register` varchar(30) NOT NULL,
  `address_register` varchar(50) NOT NULL,
  `pin_register` int(15) NOT NULL,
  `office_phone_register` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor_reg`
--

INSERT INTO `doctor_reg` (`id`, `name_register`, `lastname_register`, `specialization`, `city_register`, `country_register`, `address_register`, `pin_register`, `office_phone_register`, `email`, `password`) VALUES
(2, 'Kshitij', 'Mishra', 'Adolescent medicine specialist', 'Kanpur Nagar', 'India', 'Manglabihar', 208007, '2147483647', 'kshitijmishra0@gmail', ''),
(14, 'Akash', 'Dixit', 'l', 'Kanpur Nagar', 'India', '119/438 Darshan Purwa', 208012, '+918299718258', 'anshudixit00011@gmai', ''),
(24, 'Manan', 'Mishra', 'Adolescent medicine specialist', 'Noida', 'India', '119/438 Darshan Purwa', 208012, '+918299718251', 'anshudixit000111@gmail.com', 'password'),
(25, 'Sky', 'Dixit', 'Adolescent medicine specialist', 'Kanpur Nagar', 'India', '119/438 Darshan Purwa', 208012, '08299718258', 'anshudixit0001111@gmail.com', '123'),
(26, 'Vishal', 'Singh', 'Adolescent medicine specialist', 'Kanpur Nagar', 'India', '119/438 Darshan Purwa', 208012, '+918299718258', 'Vishal123@gmail.com', '1234'),
(27, 'Vish', 'Singh', 'Adolescent medicine specialist', 'Kanpur Nagar', 'India', '119/438 Darshan Purwa', 208012, '+918299718258', 'an123@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `find_Disease`
--

CREATE TABLE `find_Disease` (
  `di_id` int(11) NOT NULL,
  `di_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `find_Disease`
--

INSERT INTO `find_Disease` (`di_id`, `di_name`) VALUES
(1, 'Bird flu'),
(2, 'Chikunguniya'),
(3, 'Cholera'),
(4, 'Dengue Fever'),
(5, 'Ebola'),
(6, 'Ganstroneteritis'),
(7, 'Jaundice'),
(8, 'Malaria'),
(9, 'Measles'),
(10, 'Rabies'),
(11, 'Tetanus'),
(12, 'Typhoid Fever'),
(13, 'Zika');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstName` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `lastName` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(15) NOT NULL,
  `tokenExpire` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstName`, `lastName`, `email`, `password`, `token`, `tokenExpire`) VALUES
(1, 'Akash', 'Dixit', 'nsimone@test.com', '123456', 'opn6aykvtg', '2018-09-07 09:47:38'),
(2, 'Rahul', 'Arora', 'rahulcs@gmail.com', '123', '', ''),
(3, 'Beenu', 'Gautam', 'beenu112@gmail.com', '12345', '', ''),
(4, 'Nina', 'Simone', 'nsimone134@test.com', '12345', '', ''),
(5, 'Vishal', 'Rajpoot', 'vishal00@gmail.com', '1234', '', ''),
(6, 'Raj', 'Kumar', 'raj098@gmail.com', '1234', '', ''),
(7, 'Kshitij', 'Mishra', 'kshitij234@gmail.com', '1234', '', ''),
(13, 'Rajesh', 'Yadav', 'pyhton2.7php5.3@gmail.com', '123as', 'prkgcdamoe', '2018-09-05 13:45:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `check_symptoms`
--
ALTER TABLE `check_symptoms`
  ADD PRIMARY KEY (`sym_id`);

--
-- Indexes for table `doctor_reg`
--
ALTER TABLE `doctor_reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `find_Disease`
--
ALTER TABLE `find_Disease`
  ADD PRIMARY KEY (`di_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `check_symptoms`
--
ALTER TABLE `check_symptoms`
  MODIFY `sym_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `doctor_reg`
--
ALTER TABLE `doctor_reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `find_Disease`
--
ALTER TABLE `find_Disease`
  MODIFY `di_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
