-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2023 at 04:48 AM
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
-- Database: `db_clinic`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_checkup`
--

CREATE TABLE `tbl_checkup` (
  `c_id` int(10) NOT NULL,
  `c_number` int(20) NOT NULL,
  `c_day` varchar(3) NOT NULL,
  `c_month` varchar(10) NOT NULL,
  `c_year` varchar(10) NOT NULL,
  `temperature` float NOT NULL,
  `bp_sys` int(11) NOT NULL,
  `bp_dia` int(11) NOT NULL,
  `symptom` varchar(255) NOT NULL,
  `physical_remarks` varchar(255) NOT NULL,
  `pat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_checkup`
--

INSERT INTO `tbl_checkup` (`c_id`, `c_number`, `c_day`, `c_month`, `c_year`, `temperature`, `bp_sys`, `bp_dia`, `symptom`, `physical_remarks`, `pat_id`) VALUES
(1, 25, '24', 'November', '2023', 37, 110, 70, 'Fever, Sore Throat', 'Weight of The Patient is 60 kg and Height is 165 cm', 3),
(2, 27, '15', 'November', '2023', 38, 120, 80, 'Fever and Cough', 'Take medicines as prescribed', 2),
(3, 22, '1', 'November', '2023', 39, 120, 70, 'Fever', 'Take Prescribed Medicines', 8),
(40, 11, '1', 'January\"', '2023', 38, 120, 80, 'Fever and Back Pain', 'Take prescribed medicines', 6),
(41, 11, '2', 'December', '2023', 38, 120, 80, 'Fever and Sore Throat', 'Take Medicines Prescribed', 10),
(42, 11, '1', 'January', '2023', 38, 120, 70, 'Ftfsajfj', 'asiudiuadsj', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_medicine`
--

CREATE TABLE `tbl_medicine` (
  `m_id` int(11) NOT NULL,
  `m_name` varchar(50) NOT NULL,
  `m_class` varchar(50) NOT NULL,
  `m_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_medicine`
--

INSERT INTO `tbl_medicine` (`m_id`, `m_name`, `m_class`, `m_quantity`) VALUES
(6, 'Cetirizine', 'Antihistamine', 50),
(7, 'Amoxicilin', 'Antibiotic', 80),
(8, 'Katialis', 'Antifungal', 120),
(9, 'Alaxan', 'Analgesic', 60),
(10, 'Paracetamol', 'Antipyretic', 35),
(11, 'Penicillin', 'Antibiotic', 90),
(12, 'Kremil-S', 'Antacid', 35),
(13, 'Ibuprofen', 'NSAID', 35);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `ord_id` int(10) NOT NULL,
  `ord_med` varchar(100) NOT NULL,
  `ord_quantity` int(4) NOT NULL,
  `presc_id` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_patient`
--

CREATE TABLE `tbl_patient` (
  `pat_id` int(20) NOT NULL,
  `pat_lname` varchar(25) NOT NULL,
  `pat_fname` varchar(35) NOT NULL,
  `pat_mname` varchar(25) NOT NULL,
  `pat_gender` varchar(10) NOT NULL,
  `pat_age` int(3) NOT NULL,
  `pat_mun` varchar(50) NOT NULL,
  `pat_bar` varchar(50) NOT NULL,
  `pat_cpnum` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_patient`
--

INSERT INTO `tbl_patient` (`pat_id`, `pat_lname`, `pat_fname`, `pat_mname`, `pat_gender`, `pat_age`, `pat_mun`, `pat_bar`, `pat_cpnum`) VALUES
(1, 'Castillo', 'James Adamor', 'Lucero', 'Male', 20, 'Luna', 'Tallaoen', '09084425001'),
(2, 'Balboa', 'Rocky', 'Rocky', 'Male', 45, 'Luna', 'Alcala', '09084425006'),
(3, 'Igwe', 'Emmanuella', 'Denilson', 'Male', 16, 'Balaoan', 'Apatut', '09087773456'),
(4, 'Castle', 'Jeimseu', 'Lucero', 'Male', 20, 'Luna', 'Tallaoen', '09084425008'),
(6, 'Villasis', 'John', 'Carlos', 'Male', 41, 'City of San Fernando', 'Lingsat', '09084455001'),
(7, 'Dulay', 'Renzo', 'P', 'Male', 69, 'Agoo', 'Payukpok', '09999999912'),
(8, 'Creed', 'Apollo', 'P', 'Male', 33, 'Balaoan', 'Camilo Osias', '09090988873'),
(9, 'Juwowl', 'Jowil', 'aaa', 'Male', 10, 'Balaoan', 'Camilo', '09020250501'),
(10, 'acd', 'sc', 'sc', 'Male', 20, 'Agoo', 'fdfd', '09999999999'),
(11, 'Lambanog', 'Mike', 'Borja', 'Male', 20, 'Santol', 'Paagan', '09999991912');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_prescription`
--

CREATE TABLE `tbl_prescription` (
  `presc_id` int(10) NOT NULL,
  `presc_med` varchar(255) NOT NULL,
  `presc_quantity` int(4) NOT NULL,
  `presc_dosage` varchar(255) NOT NULL,
  `c_id` int(11) NOT NULL,
  `med_id` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_prescription`
--

INSERT INTO `tbl_prescription` (`presc_id`, `presc_med`, `presc_quantity`, `presc_dosage`, `c_id`, `med_id`) VALUES
(1, 'Paracetamol', 10, '3 Times a Day', 1, 10),
(2, 'Amoxicillin', 10, '2 Times A Day', 1, 7),
(3, 'Paracetamol', 10, '2 times per Day', 3, 10),
(4, 'Paracetamol', 10, '3 times a Day', 40, 10),
(5, 'Paracetamol', 10, 'Every 6 hours', 41, 10),
(6, 'Amoxicilin', 10, '2 x a day for 5 days', 1, 7);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `uid` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `userlevel` varchar(20) NOT NULL,
  `s_lname` varchar(150) NOT NULL,
  `s_fname` varchar(150) NOT NULL,
  `s_mname` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`uid`, `username`, `password`, `userlevel`, `s_lname`, `s_fname`, `s_mname`) VALUES
(1, 'admin', 'admin', 'Administrator', 'Castro', 'Mark', 'Lopez'),
(2, 'doktor', 'medicine', 'Doctor', 'Lopez', 'John', 'Marcus'),
(3, 'parmacia', 'borje123', 'Pharmacist', 'Borja', 'Mark', 'Santos'),
(4, 'asdas', 'dsaas', 'Doctor', 'C', 'AS', 'M');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_checkup`
--
ALTER TABLE `tbl_checkup`
  ADD PRIMARY KEY (`c_id`),
  ADD KEY `FOREIGN` (`pat_id`);

--
-- Indexes for table `tbl_medicine`
--
ALTER TABLE `tbl_medicine`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`ord_id`),
  ADD KEY `FK_PrescID` (`presc_id`);

--
-- Indexes for table `tbl_patient`
--
ALTER TABLE `tbl_patient`
  ADD PRIMARY KEY (`pat_id`);

--
-- Indexes for table `tbl_prescription`
--
ALTER TABLE `tbl_prescription`
  ADD PRIMARY KEY (`presc_id`),
  ADD KEY `FK_CID` (`c_id`),
  ADD KEY `FK_MedicineTable` (`med_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `Unique_Username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_checkup`
--
ALTER TABLE `tbl_checkup`
  MODIFY `c_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `tbl_medicine`
--
ALTER TABLE `tbl_medicine`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `ord_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_patient`
--
ALTER TABLE `tbl_patient`
  MODIFY `pat_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_prescription`
--
ALTER TABLE `tbl_prescription`
  MODIFY `presc_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_checkup`
--
ALTER TABLE `tbl_checkup`
  ADD CONSTRAINT `tbl_checkup_ibfk_1` FOREIGN KEY (`pat_id`) REFERENCES `tbl_patient` (`pat_id`);

--
-- Constraints for table `tbl_prescription`
--
ALTER TABLE `tbl_prescription`
  ADD CONSTRAINT `tbl_prescription_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `tbl_checkup` (`c_id`),
  ADD CONSTRAINT `tbl_prescription_ibfk_2` FOREIGN KEY (`med_id`) REFERENCES `tbl_medicine` (`m_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
