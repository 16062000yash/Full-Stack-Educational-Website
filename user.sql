-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2022 at 06:07 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidates applied`
--

CREATE TABLE `candidates applied` (
  `ID` int(11) NOT NULL,
  `Rname` varchar(255) NOT NULL,
  `Applying` text NOT NULL,
  `Branch` text NOT NULL,
  `Year` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `candidates applied`
--

INSERT INTO `candidates applied` (`ID`, `Rname`, `Applying`, `Branch`, `Year`) VALUES
(1, 'yash goyal', 'web development', 'electronics', 'third year'),
(2, 'alex', 'php', 'electronics', 'third year'),
(3, 'himanshu lulla', 'php', 'computer science', 'b.tech fourth year');

-- --------------------------------------------------------

--
-- Table structure for table `chart`
--

CREATE TABLE `chart` (
  `S.No` int(20) NOT NULL,
  `Task` varchar(255) NOT NULL,
  `no_students` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chart`
--

INSERT INTO `chart` (`S.No`, `Task`, `no_students`) VALUES
(1, 'Email Subscribers', 3),
(2, 'Registered Candidates', 3),
(3, 'courses offered', 16),
(4, 'feedback', 2),
(5, 'candidates applied', 3),
(6, 'queries', 5);

-- --------------------------------------------------------

--
-- Table structure for table `chart2`
--

CREATE TABLE `chart2` (
  `S.No` int(11) NOT NULL,
  `Domain` varchar(255) NOT NULL,
  `no_students` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chart2`
--

INSERT INTO `chart2` (`S.No`, `Domain`, `no_students`) VALUES
(1, 'Web Development', 12),
(2, 'Artificial Intelligence', 4),
(3, 'Cyber Security', 5),
(4, 'Data Science', 4),
(5, 'Ansys', 5),
(6, 'Webpreneurship', 4),
(7, 'Robotics', 5),
(8, 'AUTOCAD/CATIA', 4),
(9, 'PHP', 10),
(10, 'JAVA', 10),
(11, 'C/C++', 8),
(12, 'Python', 7),
(13, 'IOT', 5),
(14, 'Machine Learning', 4),
(15, 'Cloud Computing', 10),
(16, 'Hybrid Vechicle', 4);

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `S.No` int(50) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Contact_Number` varchar(10) NOT NULL,
  `Message` text NOT NULL,
  `Response` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`S.No`, `Name`, `Email`, `Contact_Number`, `Message`, `Response`) VALUES
(1, 'alex hales', 'en18el301209@medicaps.ac.in', '7354736992', 'hello', ''),
(3, 'alex ', 'demo16062000@gmail.om', '7354736992', 'hi', 'hello'),
(4, 'himanshu lulla', 'en18el301209@medicaps.ac.in', '7354736992', 'hello', 'how may i help you'),
(9, 'himanshu lulla', 'demo16062000@gmail.om', '7354736992', 'please tell me about the domain name AI?', ''),
(10, 'himanshu lulla', 'en18el301209@medicaps.ac.in', '7354736992', 'hi', '');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `ID` int(11) NOT NULL,
  `Course_name` varchar(255) NOT NULL,
  `Course_desc` text NOT NULL,
  `Price` varchar(20) NOT NULL,
  `Total_seats` int(20) NOT NULL,
  `Seats_available` int(20) NOT NULL,
  `Duration` varchar(20) NOT NULL,
  `Modules` int(20) NOT NULL,
  `Time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`ID`, `Course_name`, `Course_desc`, `Price`, `Total_seats`, `Seats_available`, `Duration`, `Modules`, `Time`) VALUES
(10, 'IOT', 'The Internet of Things (IoT) describes the network of physical objects—“things”—that are embedded with sensors, software, and other technologies for the purpose of connecting and exchanging data with other devices and systems over the internet.', '1468', 20, 5, '1 month', 10, '2 hours'),
(11, 'php', 'PHP is a general-purpose scripting language geared towards web development.', '1468', 20, 14, '2 months', 12, '2 hours'),
(12, 'C/C++', 'C/C++ is a general-purpose programming language.', '1468', 20, 4, '2 months', 10, '2 hours'),
(13, 'python', 'Python is an interpreted high-level general-purpose programming language. Its design philosophy emphasizes code readability with its use of significant indentation. Its language constructs as well as its object-oriented approach aim to help programmers write clear, logical code for small and large-scale projects.', '1468', 20, 4, '2 months', 12, '2 hours'),
(14, 'java', 'Java is a high-level, class-based, object-oriented programming language that is designed to have as few implementation dependencies as possible.', '1468', 20, 3, '2 months', 12, '2 hours');

-- --------------------------------------------------------

--
-- Table structure for table `emailsubscriber`
--

CREATE TABLE `emailsubscriber` (
  `S.No` int(20) NOT NULL,
  `Email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emailsubscriber`
--

INSERT INTO `emailsubscriber` (`S.No`, `Email`) VALUES
(1, 'en18el301209@medicaps.ac.in'),
(2, 'demo16062000@gmail.com'),
(6, 'en18el301209@medicaps.ac.in');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `S.No` int(10) NOT NULL,
  `Student_Name` varchar(255) NOT NULL,
  `Course_name` varchar(255) NOT NULL,
  `Feedback` text NOT NULL,
  `Ratings` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`S.No`, `Student_Name`, `Course_name`, `Feedback`, `Ratings`) VALUES
(1, 'himanshu lulla', 'php', 'good', 9),
(2, 'himanshu lulla', 'web development', 'good', 8);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(110) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Cpassword` varchar(255) NOT NULL,
  `phone_no` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`ID`, `Name`, `Email`, `Password`, `Cpassword`, `phone_no`) VALUES
(5, 'himanshu lulla', 'demo16062000@gmail.com', '1234', '1234', '9893209333'),
(6, 'alex ', 'en18el301209@medicaps.ac.in', '1234', '1234', '7354736992'),
(8, 'yash goyal', 'yashgoyal16062000@gmail.com', 'Yash@123', 'Yash@123', '7354736992');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidates applied`
--
ALTER TABLE `candidates applied`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `chart`
--
ALTER TABLE `chart`
  ADD PRIMARY KEY (`S.No`);

--
-- Indexes for table `chart2`
--
ALTER TABLE `chart2`
  ADD PRIMARY KEY (`S.No`);

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`S.No`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `emailsubscriber`
--
ALTER TABLE `emailsubscriber`
  ADD PRIMARY KEY (`S.No`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`S.No`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidates applied`
--
ALTER TABLE `candidates applied`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `chart`
--
ALTER TABLE `chart`
  MODIFY `S.No` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `chart2`
--
ALTER TABLE `chart2`
  MODIFY `S.No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `S.No` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `emailsubscriber`
--
ALTER TABLE `emailsubscriber`
  MODIFY `S.No` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `S.No` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
