-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2024 at 02:17 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pms`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `name` varchar(25) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `email` varchar(25) NOT NULL,
  `feedback` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `phone`, `email`, `feedback`) VALUES
('bablu', 5986201470, 'baabu@gmail.com', 'very good service'),
('diya', 5848446487, 'diya@gmail.com', 'Hi freshers target, \r\nFinally got placed in my dream company thanks for the services provided by you'),
('madhu', 638792802123, 'madhu@gmail.com', 'nice web'),
('nivetha', 7892001452, 'nivetha@yahoo.com', 'want more job listings');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `job_id` varchar(25) NOT NULL,
  `name` varchar(25) NOT NULL,
  `role` varchar(25) NOT NULL,
  `domain` enum('IT','Sales','Management','') NOT NULL,
  `location` varchar(25) NOT NULL,
  `salary` int(5) NOT NULL,
  `description` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`job_id`, `name`, `role`, `domain`, `location`, `salary`, `description`, `link`) VALUES
(' 67743', 'S&P Global', 'data associate', 'IT', 'mumbai', 30000, 'Support team members in executing high-priority projects.\r\nConduct research and gather pertinent information to back ongoing initiatives.', 'https://careers.spglobal.com/jobs/300637?lang=en-us'),
('527cDTY', 'Zoho', 'Sales Executive', 'Sales', 'chennai', 25000, 'Build rapport with contacts and understand where the prospect is in the buying process.\r\nIdentify opportunities that meet a minimum qualification criteria for the sales team.\r\nTend incoming sales calls and emails, and assign them to sales reps.', 'https://careers.zohocorp.com/jobs/Careers/2803000614929688/Sales-Executives?source=CareerSite'),
('607', 'Ipsos', 'Management Trainee', 'Management', 'bangalore', 15000, 'should have effective communication', 'https://ecqf.fa.em2.oraclecloud.com/hcmUI/CandidateExperience/en/sites/IpsosCareers/job/607'),
('85RL100', 'Accenture', 'hr associate', 'Management', 'mumbai', 30000, 'Ability to manage multiple stakeholders and  to perform under pressure', 'https://www.accenture.com/in-en/careers/jobdetails?id=AIOC-S01508243_en&SRC=RECNau'),
('85W1Nz', 'Zoho', 'QA Engineers', 'IT', 'chennai', 30000, 'Experience in manual and automation testing.\r\nKnowledge of Java Programming (data types, variables, operators, flow control statements, methods (built-in as well as user-defined), Exception handling, File Handling, Database Operations, and OOPS concepts.\r', 'https://www.zoho.com/careers/jobdetails/?job_id=2803000614913581'),
('AL458', 'CTS', 'programmer analyst', 'IT', 'bangalore', 15000, 'Understanding the functional aspects of the clients requirement.', 'https://careers.cognizant.com/in/en/job/00042905731/Programmer-Analyst-Trainee');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(25) NOT NULL,
  `dob` date NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `qualification` enum('B.E/B.Tech/M.E/M.Tech','BBA/MBA/B.Com/M.Com','M.Sc/MCA/B.Sc/BCA','M.A/B.A') NOT NULL,
  `domain` enum('IT','Sales','Management','') NOT NULL,
  `city` varchar(20) NOT NULL,
  `year` enum('2024','2023','2022','2021','2020') NOT NULL,
  `phone` bigint(10) NOT NULL,
  `email` varchar(25) NOT NULL,
  `new_password` varchar(15) NOT NULL,
  `confirm_password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `dob`, `gender`, `qualification`, `domain`, `city`, `year`, `phone`, `email`, `new_password`, `confirm_password`) VALUES
('ammu', '2004-09-08', 'Female', 'BBA/MBA/B.Com/M.Com', 'Sales', 'madurai', '2024', 2486119734, 'ammu@gmail.com', 'ammu1234', 'ammu1234'),
('bablu', '2005-07-20', 'Male', 'BBA/MBA/B.Com/M.Com', 'Management', 'chennai', '2022', 8902341168, 'bablu@gmail.com', 'bablu123', 'bablu123'),
('diya', '2004-03-25', 'Female', 'B.E/B.Tech/M.E/M.Tech', 'Sales', 'chennai', '2024', 5848446487, 'diya@gmail.com', 'diya1234', 'diya1234'),
('kannan', '2003-04-09', 'Male', 'M.A/B.A', 'Management', 'mysore', '2023', 8016459870, 'kannan@gmail.com', 'laddoo123', 'laddoo123'),
('madhumitha', '2002-03-26', 'Female', 'M.Sc/MCA/B.Sc/BCA', 'IT', 'madurai', '2024', 5865697368, 'madhumitha@gmail.com', 'madhu263', 'madhu263'),
('nivetha', '2004-07-26', 'Female', 'M.A/B.A', 'Management', 'madurai', '2024', 7892001452, 'nivetha@yahoo.com', 'nivipapa', 'nivipapa'),
('peter', '2004-11-17', 'Male', 'B.E/B.Tech/M.E/M.Tech', 'Management', 'madurai', '2024', 1455785542, 'peter@gmail.com', 'peter1117', 'peter1117'),
('yamini', '2005-02-23', 'Female', 'B.E/B.Tech/M.E/M.Tech', 'IT', 'kerala', '2023', 8965412580, 'yamini@gmail.com', 'yamini95', 'yamini95');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
