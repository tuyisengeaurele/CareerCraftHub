-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2024 at 05:16 PM
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
-- Database: `careercrafthub`
--

-- --------------------------------------------------------

--
-- Table structure for table `employer`
--

CREATE TABLE `employer` (
  `Employerid` int(11) NOT NULL,
  `EmployerName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employer`
--

INSERT INTO `employer` (`Employerid`, `EmployerName`) VALUES
(1, 'UR'),
(2, 'LOYOLA Tech Solutions'),
(3, 'SKAT Construction'),
(4, 'GENECO'),
(6, 'OPTIMA Clays');

-- --------------------------------------------------------

--
-- Table structure for table `jobapplication`
--

CREATE TABLE `jobapplication` (
  `jobapplicationid` int(11) NOT NULL,
  `names` varchar(255) DEFAULT NULL,
  `jobtitle` varchar(255) DEFAULT NULL,
  `employerid` int(11) DEFAULT NULL,
  `applicationdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobapplication`
--

INSERT INTO `jobapplication` (`jobapplicationid`, `names`, `jobtitle`, `employerid`, `applicationdate`) VALUES
(2, 'Irumva Gad', 'Software Engineer', 2, '2024-01-19 17:15:36');

-- --------------------------------------------------------

--
-- Table structure for table `joblistings`
--

CREATE TABLE `joblistings` (
  `jobid` int(11) NOT NULL,
  `jobtitle` varchar(255) NOT NULL,
  `jobdescription` varchar(200) NOT NULL,
  `Employerid` int(11) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `industry` varchar(255) DEFAULT NULL,
  `posteddate` timestamp NOT NULL DEFAULT current_timestamp(),
  `expirydate` date DEFAULT NULL,
  `salary` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `joblistings`
--

INSERT INTO `joblistings` (`jobid`, `jobtitle`, `jobdescription`, `Employerid`, `location`, `industry`, `posteddate`, `expirydate`, `salary`) VALUES
(2, 'Software Engineer', 'Seeking software engineer with atleast 3 years of experience in this field.', 2, 'Kigali', 'Technology', '2024-01-17 12:45:40', '2024-02-10', 1000000.00),
(3, 'Marketing manager', 'Seeking an experienced marketing manager with at least 2 years of experience in this position and excellent communication skills.', 4, 'Kigali', 'Sales and Marketing', '2024-01-17 12:48:10', '2024-02-10', 2000000.00),
(4, 'Water Engineer', 'Seeking an experienced water engineer with at least 2 years of experience in this field.', 3, 'Kigali', 'Construction', '2024-01-19 10:17:54', '2024-02-10', 2000000.00);

-- --------------------------------------------------------

--
-- Table structure for table `support`
--

CREATE TABLE `support` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` mediumtext NOT NULL,
  `timestamp` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `support`
--

INSERT INTO `support` (`name`, `email`, `message`, `timestamp`) VALUES
('irumva', 'irumvagadanaclet@gmail.com', 'hello, your help on these things of signing up.', '2024-01-11'),
('tuyisenge', 'tuyisengeauris@gmail.com', 'Mwabigoryi mwe murabona ibi bintu wabiha lecturer akabyemera', '2024-01-11'),
('Irumva Gad', 'irumvagadanaclet@gmail.com', 'Help me with logout options', '2024-01-11'),
('tuyisenge', 'tuyisengeauris@gmail.com', 'tt\\r\\n', '2024-01-11'),
('Kevine Neza', 'nezakevine@gmail.com', 'efefa', '2024-01-15'),
('Serge Mugisha', 'mugiserge@gmail.com', 'tuyiedjhksjwe', '2024-01-15');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `role` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `firstname` varchar(500) NOT NULL,
  `lastname` varchar(500) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` int(10) NOT NULL,
  `educationbg` varchar(200) NOT NULL,
  `department` varchar(200) NOT NULL,
  `password` varchar(500) NOT NULL,
  `timestamp` date NOT NULL DEFAULT current_timestamp(),
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`role`, `username`, `firstname`, `lastname`, `sex`, `address`, `email`, `phone`, `educationbg`, `department`, `password`, `timestamp`, `userid`) VALUES
('other', 'tuyisenge', 'Ange Aurele', 'Tuyisenge', 'male', 'Kimironko', 'tuyisengeauris@gmail.com', 780605880, 'Bachelor\'s', 'ICT', 'tuyisenge', '2024-01-11', 1),
('Applicant', 'irumvag', 'Irumva', 'Gad', 'male', 'Kimironko', 'irumvagadanaclet@gmail.com', 792104747, 'secondary school graduate', 'ict', 'irumva', '2024-01-11', 2),
('Applicant', 'mugiserge', 'Serge', 'Mugisha', 'male', 'Kimironko', 'mugiserge@gmail.com', 789159301, 'masters', 'medecine', 'mugisha', '2024-01-12', 3),
('Applicant', 'kevine', 'Kevine', 'Neza', 'female', 'Kacyiru', 'nezakevine@gmail.com', 788640901, 'masters', 'photography', 'kevine', '2024-01-17', 13),
('Applicant', 'kercie', 'Kercie', 'Kamanzi', 'female', 'kimironko', 'kercie@gmail.com', 790114243, 'batchelor\'s', 'photography', 'kercie', '2024-01-17', 14),
('employer', 'GENECO', 'Murenzi', 'Theoneste', 'male', 'Kimironko', 'info@geneco.co.rw', 788309821, 'masters', 'engineering', 'geneco', '2024-01-18', 15),
('employer', 'OPTIMA Clays', 'Murekeyisoni', 'Eurelie', 'female', 'Muhanga', 'eureliemu@optimaclays.co.rw', 788880880, 'batchelor\'s', 'engineering', 'murekeyisoni', '2024-01-19', 16),
('employer', 'UR', 'Jean de Dieu', 'Muhirwa', 'male', 'Rwanda', 'info@ur.ac.rw', 789123214, 'phd', 'sciences', 'ur', '2024-01-19', 17),
('employer', 'SKAT Construction', 'Jacques', 'Ndashimye', 'male', 'Rwanda, Europe', 'skat@co.rw', 788306080, 'masters', 'engineering', 'skat', '2024-01-19', 18),
('employer', 'LOYOLA Tech Solutions', 'Pacifique', 'Tuyisenge', 'male', 'Kigali', 'info@loyolats.co.rw', 787341234, 'phd', 'ict', 'loyola', '2024-01-19', 19);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employer`
--
ALTER TABLE `employer`
  ADD PRIMARY KEY (`Employerid`);

--
-- Indexes for table `jobapplication`
--
ALTER TABLE `jobapplication`
  ADD PRIMARY KEY (`jobapplicationid`),
  ADD KEY `employerid` (`employerid`);

--
-- Indexes for table `joblistings`
--
ALTER TABLE `joblistings`
  ADD PRIMARY KEY (`jobid`),
  ADD KEY `Employerid` (`Employerid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employer`
--
ALTER TABLE `employer`
  MODIFY `Employerid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `jobapplication`
--
ALTER TABLE `jobapplication`
  MODIFY `jobapplicationid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `joblistings`
--
ALTER TABLE `joblistings`
  MODIFY `jobid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jobapplication`
--
ALTER TABLE `jobapplication`
  ADD CONSTRAINT `jobapplication_ibfk_1` FOREIGN KEY (`employerid`) REFERENCES `employer` (`Employerid`);

--
-- Constraints for table `joblistings`
--
ALTER TABLE `joblistings`
  ADD CONSTRAINT `joblistings_ibfk_1` FOREIGN KEY (`Employerid`) REFERENCES `employer` (`Employerid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
