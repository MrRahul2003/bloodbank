-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2022 at 04:28 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloodbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments_bloodbank`
--

CREATE TABLE `appointments_bloodbank` (
  `login_user_id` int(255) NOT NULL,
  `dononation_appointment_id` int(255) NOT NULL,
  `donation_hospital_id` int(255) NOT NULL,
  `donor_name` varchar(255) NOT NULL,
  `donor_email` varchar(255) NOT NULL,
  `donation_state` varchar(255) NOT NULL,
  `donation_location` varchar(255) NOT NULL,
  `donation_sublocation` varchar(255) NOT NULL,
  `donation_hospital` varchar(255) NOT NULL,
  `donation_phone` varchar(255) NOT NULL,
  `donation_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bloodbank_donate`
--

CREATE TABLE `bloodbank_donate` (
  `login_user_id` int(255) NOT NULL,
  `dononation_id` int(255) NOT NULL,
  `donor_name` varchar(255) NOT NULL,
  `donor_email` varchar(255) NOT NULL,
  `donor_state` varchar(255) NOT NULL,
  `donor_city` varchar(255) NOT NULL,
  `donor_comment` text NOT NULL,
  `donation_date_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bloodbank_donate`
--

INSERT INTO `bloodbank_donate` (`login_user_id`, `dononation_id`, `donor_name`, `donor_email`, `donor_state`, `donor_city`, `donor_comment`, `donation_date_time`) VALUES
(1, 1, 'Rahul', 'rahul@gmail.com', 'Maharashtra', 'kurla', 'asf', '2022-09-25 09:35:48'),
(1, 2, 'Rahul', 'rahul@gmail.com', 'Maharashtra', 'bandra', 'fasdf', '2022-09-28 14:14:30');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `login_user_index` int(255) NOT NULL,
  `contact_index` int(255) NOT NULL,
  `contact_firstname` varchar(255) NOT NULL,
  `contact_lastname` varchar(255) NOT NULL,
  `contact_email` varchar(255) NOT NULL,
  `contact_phone` varchar(255) NOT NULL,
  `contact_description` text NOT NULL,
  `contact_date_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hospitals`
--

CREATE TABLE `hospitals` (
  `hospital_index` int(255) NOT NULL,
  `hospital_name` varchar(255) NOT NULL,
  `hospital_category` varchar(255) NOT NULL,
  `hospital_phone` varchar(255) NOT NULL,
  `hospital_state` varchar(255) NOT NULL,
  `hospital_location` varchar(255) NOT NULL,
  `hospital_sublocation` varchar(255) NOT NULL,
  `hospital_address` varchar(255) NOT NULL,
  `Beds_available` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospitals`
--

INSERT INTO `hospitals` (`hospital_index`, `hospital_name`, `hospital_category`, `hospital_phone`, `hospital_state`, `hospital_location`, `hospital_sublocation`, `hospital_address`, `Beds_available`) VALUES
(1, 'P D Hinduja National Hospital & Research Centre', 'Allergy, Breast Cancer, Cancer Surgery', '022 2445 1515', 'Maharashtra', 'Mumbai', 'Mahim West', 'SVS Rd, Mahim West, Shivaji Park 400016', 70),
(2, 'Lilavati Hospital and Research Centre', 'Orthopaedics, Cardiology, dentist', '022 2656 8000', 'Maharashtra', 'Mumbai', 'Bandra West', 'Lilavati Hospital, A-791, Bandra Reclamation Rd, Bandra West 400050', 323),
(3, 'Balabhai Nanavati Hospital', 'Dermatology, Pathology, Radiology, Ophthalmology', ' 022 2626 7500', 'Maharashtra', 'Mumbai', 'Vile Parle West', 'SV Rd, near LIC, LIC Colony, Suresh Colony 400056', 350),
(4, 'Hiranandani Hospital', 'Allergy, Asthma Clinic, Nerve & Muscle Clinic, Pain Clinic, Sleep Medicine', '022 2576 3500', 'Maharashtra', 'Mumbai', 'Powai', 'Hillside Rd, Hiranandani Gardens, IIT Area, Powai 400076', 240),
(5, 'Jaslok Hospital', 'Endocrinology, Gynaecology, Mental Health , Nuclear Medicine, ENT, Physiotherapy,General Surgery, Radiology, Internal Medicine', '022 6657 3014', 'Maharashtra', 'Mumbai', 'Cumbala hills', '15, Pedder Rd, IT Colony, Cumballa Hill 400026', 364),
(6, 'Kohinoor Hospital', 'Arthroscopic Surgery, Spinal Surgery, Neurosciences, Pulmonology', '022 6755 6755', 'Maharashtra', 'Mumbai', 'Kurla West', 'Kirol Road, Off, Lalbahadur Shastri Rd, Kurla West400070', 70),
(7, 'Fortis Hospitals', 'Cardiology, cardiac surgery, urology, nephrology, neurosciences, Oncology.', '096060 47050', 'Maharashtra', 'Mumbai', 'Kurla West', 'Kirol Road, Off, Lalbahadur Shastri Rd, Kurla West 400070', 300),
(8, 'Seven Hills Healthcare', 'Cardiology, Neurosciences, Orthopedic, Oncology, Nephrology, Cosmetic Dermatology', '022 6767 6767', 'Maharashtra', 'Mumbai', 'Andheri East', 'Marol Maroshi Rd, Shivaji Nagar JJC, Marol, Andheri East 400059', 1500),
(9, 'Kokilaben Dhirubhai Ambani Hospital & Medical Research Institute', 'Arthroscopic Surgery, Spinal Surgery, Neurosciences', '022 3069 6969', 'Maharashtra', 'Mumbai', 'Andheri West', 'Rao Saheb, Achutrao Patwardhan Marg, Four Bungalows, Andheri West 400053', 225),
(10, 'Saifee Hospital', ' Arthroscopic Surgery, Spinal Surgery, Neurosciences.', '022 6757 0111', 'Maharashtra', 'Mumbai', 'Girgaon', '15/17, Maharshi Karve Rd, Charni Road East, Opera House, Girgaon 400004', 254),
(11, 'MGM New Bombay Hospital', 'Arthroscopic Surgery, Spinal Surgery,  Cardio Vascular Thoracic Cancer, Neurosciences, Pulmonology, Spine Care', '022 5066 6777', 'Maharashtra', 'Mumbai', 'Navi Mumbai', 'Plot No.35, Atmashanti Society, Sector 3, Vashi 400703', 176),
(12, 'Wockhardt Hospital', 'Arthroscopic Surgery, Spinal Surgery,  Cardio Vascular Thoracic Cancer, Neurosciences', '082911 01001', 'Maharashtra', 'Mumbai', 'Agripada', 'Police Station, 1877 Doctor Anandrao Nair Marg Near Agripada 400011', 45),
(13, 'Sir H.N. Reliance Foundation Hospital and Research Centre', 'Cardiac Sciences, Nephro-Urology, Neuro Sciences, Oncology, Orthopaedics & Spine', '1800 22 1166', 'Maharashtra', 'Mumbai', 'Girgaon', 'Prarthana Samaj, Raja Rammohan Roy Rd, Charni Road East, Khetwadi, Girgaon', 150),
(14, 'Godrej Memorial Hospital', 'Cardio Vascular Thoracic Surgery, Joint Replacement, Arthroscopic Surgery, Spinal Surgery', '22 6641 7100', 'Maharashtra', 'Mumbai', 'Vikhroli', 'Eastern Express Highway Opposite Godrej Tower, Pirojshanagar, Vikhroli 400079', 220),
(15, 'Holy Spirit Hospital', ' Neurology, Neuro Surgery, Nephrology, , Plastic Surgery, Rheumatology, Vitreo Retinal Surgery, Onco-Radiation, Urology,  Oculoplastic Surgery', '022 2824 8500', 'Maharashtra', 'Mumbai', 'Andheri East', 'Mahakali Caves Rd, Sher E Punjab Colony, Andheri East 400093', 300),
(16, 'SRCC Children’s Hospital', 'Cardiology, Cardiac Surgery, Orthopaedics, Neurosurgery, Neurology, Neonatology, Gastroenterology, Pulmonology', '80675 06885', 'Maharashtra', 'Mumbai', 'Mahalakshmi', '1-1A, Keshavrao Khadye Marg, Haji Ali, Haji Ali Government Colony, Mahalakshmi 400034', 233),
(17, 'Asian Heart Institute and Research Centre', 'ECG, 2-Dimensional Echocardiography,Stress Echocardiography, CT Coronary Angiography.', ' 022 6698 6666', 'Maharashtra', 'Mumbai', 'Bandra East', 'Bandra Kurla Complex, G / N, Bandra E 400051', 250),
(18, 'Breach Candy Hospital Trust', 'Cardiology, Dermatology, Endoscopy, Endocrinology, ENT', '022 2366 7788', 'Maharashtra', 'Mumbai', 'Cumballa Hill', '60 A, Bhulabhai Desai Marg, Breach Candy, Cumballa Hill 400026', 173),
(19, 'Raheja (A Fortis Associate) Hospital', 'Cardiac Surgery , Organ transplant , Orthopaedics, Spine Surgery , Orthopedics', '022 6652 9666, 022 6652 9999', 'Maharashtra', 'Mumbai', 'Mahim West', 'Raheja Rugnalaya Marg, Mahim West, Mahim 400016', 140),
(20, 'Bombay Hospital and Medical Research Centre', 'Cardiac Surgery , Organ transplant , Orthopedics, Pediatric Cardiology', '022 2206 7676', 'Maharashtra', 'Mumbai', 'Marine Lines', '12, Vitthaldas Thackersey Marg, Near to Liberty Cinema, New Marine Lines 400020', 830);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments_bloodbank`
--
ALTER TABLE `appointments_bloodbank`
  ADD PRIMARY KEY (`dononation_appointment_id`);

--
-- Indexes for table `bloodbank_donate`
--
ALTER TABLE `bloodbank_donate`
  ADD PRIMARY KEY (`dononation_id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`contact_index`);

--
-- Indexes for table `hospitals`
--
ALTER TABLE `hospitals`
  ADD PRIMARY KEY (`hospital_index`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments_bloodbank`
--
ALTER TABLE `appointments_bloodbank`
  MODIFY `dononation_appointment_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `bloodbank_donate`
--
ALTER TABLE `bloodbank_donate`
  MODIFY `dononation_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `contact_index` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hospitals`
--
ALTER TABLE `hospitals`
  MODIFY `hospital_index` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
