-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 29, 2024 at 05:18 AM
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
-- Table structure for table `company`
--

CREATE TABLE `company` (
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
-- Dumping data for table `company`
--

INSERT INTO `company` (`job_id`, `name`, `role`, `domain`, `location`, `salary`, `description`, `link`) VALUES
('0QIC9', 'Moon Team Private Limited', 'Sales Executive', 'Sales', 'chennai', 20000, 'Proficiency in English and prefer knowledge of the local language, especially when it is a field sales job (Example: distribution management in the retail sector)', 'https://www.freshersworld.com/jobs/sales-executive-jobs-opening-in-1-moon-team-private-limited-at-vepery-chennai-2264663'),
('23D0QX', 'UST Global', 'Python programmer', 'IT', 'kochi', 15000, ' Should be excel in Python or Python+ SQL and with good communication skills and enthusiastic working nature with excellent academic background.', 'https://www.freshersworld.com/jobs/company/ust-global-2266839'),
('445UBH', 'IBM', 'process associate', 'Management', 'hyderabad', 30000, 'Engage stakeholders to define, build and document hiring forecasts\r\nWork with hiring manager to set Service Level Agreements (SLA) expectations and requirements', 'https://www.naukri.com/job-listings-process-associate-recruitment-ibm-india-pvt-limited-hyderabad-0-to-2-years-260224904082?src=cluster&sid=17091787328081851_4&xp=2&px=1'),
('85RL100', 'accenture', 'hr associate', 'Management', 'mumbai', 30000, 'Ability to manage multiple stakeholders and  to perform under pressure', 'https://www.naukri.com/job-listings-hr-service-delivery-new-associate-accenture-solutions-pvt-ltd-mumbai-0-to-1-years-270224906507?src=cluster&sid=17091787328081851_3&xp=4&px=1'),
('85RL89', 'Purple technologies', 'Marketing intern', 'Sales', 'hyderabad', 10000, 'Faster learning ability and passion for sales\r\nSelf-motivated professional with a result-oriented approach', 'https://www.freshersworld.com/jobs/marketing-intern-jobs-opening-in-fianance-credit-at-a-s-rao-nagar-kukatpally-andheri-west-mumbai-kolkata-hyderabad-2273983'),
('9648gk', 'google', 'software engineer', 'IT', 'hyderabad', 30000, 'Bachelor’s degree or equivalent practical experience with software development in one or more programming languages (e.g., Python, C, C++, Java, JavaScript).', 'https://www.google.com/about/careers/applications/jobs/results/132262270928331462-software-engineer-fullstack-core'),
('AL458', 'CTS', 'programmer analyst', 'IT', 'bangalore', 15000, 'Understanding the functional aspects of the clients requirement.', 'https://careers.cognizant.com/in/en/job/00042905731/Programmer-Analyst-Trainee');

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
('baabu', 5986201470, 'baabu@gmail.com', 'very good service');

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
('abishek', '2000-12-26', 'Male', 'BBA/MBA/B.Com/M.Com', 'Sales', 'chennai', '2020', 7892148250, 'abishek@gmail.com', 'abi-2612', 'abi-2612'),
('ammu', '2003-10-08', 'Female', 'BBA/MBA/B.Com/M.Com', 'Management', 'bangalore', '2023', 4893205512, 'ammu@gmail.com', 'ammu1234', 'ammu1234'),
('baabu', '2003-06-20', 'Male', 'M.Sc/MCA/B.Sc/BCA', 'Management', 'bangalore', '2023', 5986201470, 'baabu@gmail.com', 'baabu123', 'baabu123'),
('madhu', '2002-03-26', 'Female', 'M.Sc/MCA/B.Sc/BCA', 'IT', 'madurai', '2024', 1234567890, 'madhumitha@gmail.com', 'madhu263', 'madhu263'),
('nivetha', '2004-07-26', 'Female', 'M.A/B.A', 'Sales', 'madurai', '2024', 4652159300, 'nivetha@gmail.com', 'nivipapa', 'nivipapa'),
('yamini', '2005-02-23', 'Female', 'B.E/B.Tech/M.E/M.Tech', 'IT', 'madurai', '2024', 7854553989, 'yamini@gmail.com', 'yamini123', 'yamini123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
