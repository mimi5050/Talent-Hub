-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2024 at 12:38 AM
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
-- Database: `onlinenatembea`

-- --------------------------------------------------------
CREATE DATABASE IF NOT EXISTS onlinenatembea;

--
-- Table structure for table `appointments`
--
USE onlinenatembea;

CREATE TABLE `appointments` (
  `AppointmentID` int(11) NOT NULL,
  `FullName` varchar(255) NOT NULL,
  `EmailAddress` varchar(255) NOT NULL,
  `PhoneNumber` varchar(20) NOT NULL,
  `SelectedDoctor` varchar(255) NOT NULL,
  `ReasonForAppointment` text NOT NULL,
  `AppointmentDate` date NOT NULL,
  `AppointmentTime` time NOT NULL,
  `CreatedAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `UserID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`AppointmentID`, `FullName`, `EmailAddress`, `PhoneNumber`, `SelectedDoctor`, `ReasonForAppointment`, `AppointmentDate`, `AppointmentTime`, `CreatedAt`, `UserID`) VALUES
(0, 'nono', 'balad@mailinator.com', '+1 (709) 469-9075', 'Eddy Kubwimana', 'kkkkkkkkkk', '1998-06-06', '01:29:00', '2024-03-15 23:49:09', 12),
(59, 'yawe mimi', 'rehorogy@mailinator.com', '+1 (424) 239-9978', 'Eddy Kubwimana', 'Cumque corporis nihi', '1998-06-06', '01:29:00', '2024-03-16 12:47:55', 12),
(65, 'Hayes Newton', 'zipexikal@mailinator.com', '+1 (957) 689-6201', 'Eddy Kubwimana', 'Possimus est est ex', '1994-09-14', '04:45:00', '2024-03-16 16:58:42', 16),
(67, 'Nasim Holt', 'kugutu@mailinator.com', '+1 (781) 485-4773', 'Eddy Kubwimana', 'Sint officiis enim o', '1986-05-31', '06:59:00', '2024-03-16 17:01:31', 16),
(70, 'Tashya Maddox', 'dutururo@mailinator.com', '+1 (652) 326-1689', 'Eddy Kubwimana', 'Velit voluptatem non', '2006-04-10', '23:17:00', '2024-03-17 00:25:01', 16),
(72, 'Roanna Nunez', 'rejytawed@mailinator.com', '+1 (629) 562-1239', 'Eddy Kubwimana', 'Harum est animi mo', '2003-10-08', '23:24:00', '2024-03-17 00:26:57', 16),
(75, 'Iona Dalton', 'xokibyjac@mailinator.com', '+1 (193) 593-4628', 'Miriam Uwingabiye', 'Voluptate dolorum ni', '2017-07-07', '17:56:00', '2024-03-17 02:15:33', 16),
(76, 'Nero Caldwell', 'xozoqiwo@mailinator.com', '+1 (564) 263-1103', 'Miriam Uwingabiye', 'Neque et exercitatio', '1992-06-06', '09:13:00', '2024-03-17 15:59:38', 20),
(77, 'Matthew Sims', 'jerono@mailinator.com', '+1 (671) 773-3428', 'Eddy Kubwimana', 'Nulla sed omnis sit', '1990-11-12', '01:03:00', '2024-03-17 15:59:54', 20);

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `ContactID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Message` text NOT NULL,
  `SubmissionDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`ContactID`, `Name`, `Email`, `Message`, `SubmissionDate`) VALUES
(1, 'Miriam Uwingabiye', 'uwingabiye.m2000@gmail.com', 'Hello!\r\nI want to book an appointment.\r\n', '2024-03-10 13:51:35'),
(2, 'Miriam Uwingabiye', 'uwingabiye.m2000@gmail.com', 'Hello!\r\nI want to book an appointment.\r\n', '2024-03-10 14:06:39'),
(3, 'Uwingabiye Miriam', 'uwingabiye.m2000@gmail.com', 'jhgfv,guerv', '2024-03-10 14:07:27'),
(4, 'Miriam Uwingabiye', 'uwingabiye.m2000@gmail.com', 'dawest', '2024-03-10 14:08:03'),
(5, 'Miriam Uwingabiye', 'uwingabiye.m2000@gmail.com', 'adhfgyews', '2024-03-10 14:11:40'),
(6, 'Miriam Uwingabiye', 'uwingabiye.m2000@gmail.com', 'Umwana', '2024-03-10 14:16:10'),
(7, 'Miriam Uwingabiye', 'uwingabiye.m2000@gmail.com', '4546', '2024-03-10 14:22:51'),
(8, 'Miriam Uwingabiye', 'uwingabiye.m2000@gmail.com', 'jhasyfg', '2024-03-10 14:23:35'),
(9, 'Miriam Uwingabiye', 'uwingabiye.m2000@gmail.com', 'Hejv', '2024-03-10 14:54:54'),
(10, 'Miriam Uwingabiye', 'uwingabiye.m2000@gmail.com', 'wwwwwwwwwwwwf', '2024-03-13 17:52:33'),
(11, 'Miriam Uwingabiye', 'uwingabiye.m2000@gmail.com', 'Miriam and LISA', '2024-03-13 18:00:18');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

--
-- Dumping data for table `doctors`
--


-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `subject`, `message`, `created_at`) VALUES
(1, 'Daphne Miles', 'diwilyhuzu@mailinator.com', 'Sunt incidunt qui e', 'Dolorem voluptate ma', '2024-03-14 12:54:25'),
(2, 'Paul Koch', 'myzi@mailinator.com', 'Est quasi quae sapie', 'Vel labore laboriosa', '2024-03-15 03:02:42'),
(3, 'Lacy Tucker', 'rebijagino@mailinator.com', 'Quia sapiente nemo a', 'Porro dignissimos su', '2024-03-15 18:07:47');

-- --------------------------------------------------------

--
-- Table structure for table `insurance`
--

CREATE TABLE `insurance` (
  `InsuranceID` int(11) NOT NULL,
  `InsuranceProvider` varchar(255) DEFAULT NULL,
  `PolicyNumber` varchar(255) DEFAULT NULL,
  `ExpirationDate` date DEFAULT NULL,
  `UserID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `insurance`
--

INSERT INTO `insurance` (`InsuranceID`, `InsuranceProvider`, `PolicyNumber`, `ExpirationDate`, `UserID`) VALUES
(3, 'Dominique miim', '0000', '1987-02-12', 7),
(4, 'Dominique miim', '0000', '1987-02-12', 7),
(5, 'Dominique miim', '0000', '1987-02-12', NULL),
(6, 'Dominique miim', '0000', '1987-02-12', NULL),
(9, 'Dominique miim', '0000', '1987-02-12', 7),
(19, 'Dominique miim', '0000', '1987-02-12', 12),
(20, 'Dominique miim', '0000', '1987-02-12', 12),
(21, 'Danny', '821', '2024-03-15', 12),
(22, 'Leigh Ochoa', '975', '1976-01-08', 16);

-- --------------------------------------------------------

--
-- Table structure for table `newsandblog`
--

CREATE TABLE `newsandblog` (
  `PostID` int(11) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Content` text NOT NULL,
  `DoctorName` varchar(255) NOT NULL,
  `PublishDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `newsandblog`
--

INSERT INTO `newsandblog` (`PostID`, `Title`, `Content`, `DoctorName`, `PublishDate`) VALUES
(4, 'The Importance of Sleep Hygiene for Optimal Health', 'Sleep is essential for overall health and well-being, yet many people neglect the importance of good sleep hygiene. Poor sleep habits can lead to a host of health problems, including increased risk of obesity, diabetes, heart disease, and mental health issues. Here\'s why prioritizing sleep hygiene is crucial for optimal health:\r\n\r\n1. Regulates Mood and Stress Levels: Adequate sleep is vital for regulating emotions and managing stress. Lack of sleep can lead to irritability, mood swings, and difficulty coping with daily challenges. By prioritizing sleep, you can improve your mood and enhance your ability to handle stressors effectively.\r\n\r\n2. Supports Cognitive Function: Sleep plays a critical role in cognitive function, including memory consolidation, problem-solving, and decision-making. Quality sleep allows the brain to process information and form new connections, optimizing learning and mental clarity.', 'Eddy Kubwimana', '2024-03-17'),
(5, 'Title: \"5 Essential Health Tips for a Vibrant Life', 'Prioritize Balanced Nutrition: A healthy diet is the cornerstone of overall well-being. Aim for a diverse range of fruits, vegetables, whole grains, lean proteins, and healthy fats. Minimize processed foods, sugary snacks, and excessive sodium intake. Remember, moderation is key, so allow yourself occasional treats while maintaining a primarily nutritious diet.\r\n\r\nStay Hydrated: Hydration is crucial for maintaining bodily functions, energy levels, and overall health. Aim to drink plenty of water throughout the day, especially during and after physical activity. Herbal teas, infused water, and fresh fruit juices are also excellent hydrating options. Pay attention to your body\'s signals and drink water whenever you feel thirsty.\r\n\r\nPrioritize Regular Exercise: Physical activity is essential for both physical and mental health. Aim for at least 30 minutes of moderate exercise most days of the week. This can include brisk walking, jogging, cycling, swimming, yoga, or any activity that gets your heart rate up and your body moving. Find activities you enjoy to make exercise a sustainable part of your lifestyle.', 'Eddy Kubwimana', '2024-03-17'),
(6, 'Nam maiores quos nem', 'Nisi exercitationem ', 'Miriam Uwingabiye', '1985-03-31');

-- --------------------------------------------------------

--
-- Table structure for table `patientrecord`
--

CREATE TABLE `patientrecord` (
  `RecordID` int(11) NOT NULL,
  `PatientName` varchar(255) NOT NULL,
  `DoctorName` varchar(255) DEFAULT NULL,
  `Diagnosis` text DEFAULT NULL,
  `Prescription` text DEFAULT NULL,
  `Date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patientrecord`
--

INSERT INTO `patientrecord` (`RecordID`, `PatientName`, `DoctorName`, `Diagnosis`, `Prescription`, `Date`) VALUES
(2, 'daniel', 'Danny danyy', 'Qui magnam est neque', 'Ex officia ducimus ', '1970-04-17'),
(4, 'Joseph Farmer', 'Price Gutierrez', 'Adipisicing aut occa', 'Dolor totam facilis ', '1979-03-21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserID` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `DateOfBirth` date DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Gender` varchar(255) DEFAULT NULL,
  `ContactInfo` varchar(255) DEFAULT NULL,
  `UserType` varchar(255) DEFAULT NULL,
  `MaritalStatus` varchar(255) DEFAULT NULL,
  `reset_token` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `Username`, `Password`, `DateOfBirth`, `Email`, `Gender`, `ContactInfo`, `UserType`, `MaritalStatus`, `reset_token`) VALUES
(7, 'Miriam Uwingabiye', '$2y$10$qsJpmY9aZ720Wr5bbwo/..ZpwC4RBKX.mN/.gBdRxP/ypKZqPMRVG', '2024-03-14', 'uwingabiye.m2000@gmail.com', 'Female', '0788478328', 'doctor', 'Single', '$2y$10$.LHDIkbz5sL/Z7WKkYe2HOGWq/zDwZbRc1ghw0RmUmUN3/Fbu5Yuq'),
(8, 'Miriam Uwingabiye', '$2y$10$.fazN6HO7lg.jUvmTc9b7Ou5S1cu65hV1/gudVRQFZ1S.jUGhdGau', '2024-03-07', 'miriam.uwingabiye@ashesi.edu.gh', 'Female', '0788478328', 'patient', 'Single', '$2y$10$gO6Btxm.3rYQdxB/ctxl.u4qUeLf/Q2mHNyZW4LAJWnf6Kuc51eOu'),
(9, 'Miriam Uwingabiye', '$2y$10$Y4MWXIVySQGTpjbW3DP.9.4IQwsYXnQULGvF7.jhGnqYVmkbo0Y2u', '2024-03-15', 'miriam.uwingabiye@ashesi.edu.gh', 'Female', '0788478328', 'patient', 'Single', '$2y$10$gO6Btxm.3rYQdxB/ctxl.u4qUeLf/Q2mHNyZW4LAJWnf6Kuc51eOu'),
(10, 'Lisa Gihoso', '$2y$10$UnJFUVpdJ2kLxYBqCS0kouxZmhhrcJlGkww7DTF/HXLHAK3rDTK2.', '2024-03-15', 'miriam.uwingabiye@ashesi.edu.gh', 'Female', '0788478328', 'patient', 'Single', '$2y$10$gO6Btxm.3rYQdxB/ctxl.u4qUeLf/Q2mHNyZW4LAJWnf6Kuc51eOu'),
(11, 'fajepe', '$2y$10$M/OTtdFvj0sTXBjcdy2iXelTmbSsAMQ0C/K3z4fH4a4ld9CaGFKNe', '1985-07-15', 'miriam.uwingabiye@ashesi.edu.gh', 'Others', '8991743020', 'patient', 'Single', '$2y$10$gO6Btxm.3rYQdxB/ctxl.u4qUeLf/Q2mHNyZW4LAJWnf6Kuc51eOu'),
(12, 'Nicole Ineza', '$2y$10$chF0aKT2FfEiKeUuF9yHzuwKmM1/v7Y/y3nB/V6fm1K0T1x5oWgQe', '2024-03-20', 'nicole.ineza@ashesi.edu.gh', 'Others', '8991743020', 'patient', 'Single', NULL),
(13, 'Eddy Kubwimana', '$2y$10$HSK5D.CzLxkZc/pKYS7cKuHPBAtVNqg/by8MWhJrnbauIu0rWbHsC', '2024-03-06', 'eddy.kubwimana@ashesi.edu.gh', 'Male', '0788478328', 'doctor', 'Married', NULL),
(14, 'Miriam Uwingabiye', '$2y$10$4IpsmAzd8emARxi/iALWG.kVJdfI0U5GwoIUqm3BocA3rIuTyGTHK', '2024-03-07', 'miriam.uwingabiye@ashesi.edu.gh', 'Female', '0788478328', 'patient', 'Single', '$2y$10$gO6Btxm.3rYQdxB/ctxl.u4qUeLf/Q2mHNyZW4LAJWnf6Kuc51eOu'),
(15, 'eddy', '$2y$10$Rg5zYwGVj7wJHmvlcSvAj.qPisRwr.pPtPdbQV8LWAeZg3oOuNja6', '2024-03-05', 'kubwimanaeddy@gmail.com', 'Male', '0788478324', 'patient', 'Married', NULL),
(16, 'Lisa Gihoso', '$2y$10$rLi.OnMojIAK4.BA81cYFePnBgOPWyCT6aoGE.qRJ2fg56NGQM5L6', '2024-02-28', 'gbikolisa@outlook.com', 'Others', '0788478328', 'patient', 'Married', NULL),
(17, 'Miriam Uwingabiye', '$2y$10$0TEWxWBHJMw3Ky9C8fmOeeeQ2Nww5RLV4.Jgvn43fd4kJoxoGNTiW', '2024-03-21', 'miriam.uwingabiye@ashesi.edu.gh', 'Female', '0788478328', 'patient', 'Single', '$2y$10$gO6Btxm.3rYQdxB/ctxl.u4qUeLf/Q2mHNyZW4LAJWnf6Kuc51eOu'),
(18, 'danny', '$2y$10$G484iFKpmEjubYswyvLFZueh1Nt4swjlIfSoX.e0u9ODltEwHO7.a', '2024-03-22', 'daniel.byiringiro@ashesi.edu.gh', 'Male', '0788478328', 'patient', 'Single', '$2y$10$5uSJmDr1YL4CvKjpg6GfkOoCEfnuLPg0le.d9kZ6GxwsEUU7X/mZu'),
(19, 'Miriam Uwingabiye', '$2y$10$kLYWD1yYHRc28PuItr6Qbeuh8TpFx34MIU7XUv35kgU0fEVQ6k4wC', '2024-02-28', 'gaju.angel@ashesi.edu.gh', 'Female', '0788478328', 'doctor', 'Single', NULL),
(20, 'lomytusit', '$2y$10$l9RG.q44PHuDKAnvXfWmGegmam5afSk/9.RmZaSJWw29ELaWuwgKm', '1985-05-25', 'angelgaju36@gmail.com', 'Female', '0788478328', 'patient', 'Single', NULL),
(21, 'K I', '$2y$10$/hAL7J/cM067i4ZjTgKL..8lOCdPbDPCIhfSmgp5FMsC4zYPl0Lp6', '2024-03-13', 'kasibra411@gmail.com', 'Female', '0559366687', 'patient', 'Single', '$2y$10$xiL5CoAmWM0u5xQdrxGb2.hUCZcIO60EKMaVyhhyAMf./zYsYd79O');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`AppointmentID`),
  ADD KEY `fk_UserID` (`UserID`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`ContactID`);

--
-- Indexes for table `doctors`


--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `insurance`
--
ALTER TABLE `insurance`
  ADD PRIMARY KEY (`InsuranceID`),
  ADD KEY `UserID` (`UserID`);

--
-- Indexes for table `newsandblog`
--
ALTER TABLE `newsandblog`
  ADD PRIMARY KEY (`PostID`);

--
-- Indexes for table `patientrecord`
--
ALTER TABLE `patientrecord`
  ADD PRIMARY KEY (`RecordID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `AppointmentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `ContactID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;



--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `insurance`
--
ALTER TABLE `insurance`
  MODIFY `InsuranceID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `newsandblog`
--
ALTER TABLE `newsandblog`
  MODIFY `PostID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `patientrecord`
--
ALTER TABLE `patientrecord`
  MODIFY `RecordID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `fk_UserID` FOREIGN KEY (`UserID`) REFERENCES `users` (`UserID`);

--
-- Constraints for table `doctors`
--


--
-- Constraints for table `insurance`
--
ALTER TABLE `insurance`
  ADD CONSTRAINT `insurance_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `users` (`UserID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
