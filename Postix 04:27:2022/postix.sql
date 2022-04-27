-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 27, 2022 at 06:44 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `postix`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(50) NOT NULL,
  `name` varchar(150) DEFAULT NULL,
  `descrip` text DEFAULT NULL,
  `temail` varchar(150) DEFAULT NULL,
  `stdate` varchar(50) DEFAULT NULL,
  `edate` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `roster`
--

CREATE TABLE `roster` (
  `id` int(50) DEFAULT NULL,
  `stu` varchar(75) DEFAULT NULL,
  `name` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roster`
--

INSERT INTO `roster` (`id`, `stu`, `name`) VALUES
(NULL, 'test@test.edu', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `semail` varchar(150) NOT NULL,
  `suser` varchar(150) DEFAULT NULL,
  `spass` varchar(150) DEFAULT NULL,
  `creation` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`semail`, `suser`, `spass`, `creation`) VALUES
('apple@montclair.edu', 'Jace Otis', 'wheelman', '2022-04-14 14:04:59'),
('godskin@montclair.edu', 'God Skin', 'noble285', '2022-04-20 20:01:31'),
('test@test.edu', 'test', '12345678', '2022-04-02 13:21:15');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(20) NOT NULL,
  `title` varchar(350) NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `temail` varchar(150) NOT NULL,
  `tuser` varchar(150) DEFAULT NULL,
  `tpass` varchar(150) DEFAULT NULL,
  `creation` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`temail`, `tuser`, `tpass`, `creation`) VALUES
('test@test.edu', 'test', '12345678', '2022-04-02 13:18:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roster`
--
ALTER TABLE `roster`
  ADD UNIQUE KEY `stu` (`stu`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`semail`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`temail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `course_ibfk_1` FOREIGN KEY (`temail`) REFERENCES `Teacher` (`temail`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
