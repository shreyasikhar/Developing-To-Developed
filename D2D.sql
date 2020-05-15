-- phpMyAdmin SQL Dump
-- version 5.0.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 15, 2020 at 03:35 PM
-- Server version: 8.0.20-0ubuntu0.20.04.1
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `D2D`
--

-- --------------------------------------------------------

--
-- Table structure for table `css`
--

CREATE TABLE `css` (
  `srno` int NOT NULL,
  `uniqid` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `srno` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `income` int NOT NULL,
  `religion` varchar(255) NOT NULL,
  `category` enum('OPEN','OBC','SC','ST','NT','VJ') NOT NULL,
  `customerSegment` enum('Farmer','seniorCitizen') NOT NULL,
  `gender` enum('Male','Female','Other') NOT NULL,
  `district` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` bigint NOT NULL,
  `status` enum('Registered','Applied') NOT NULL DEFAULT 'Registered'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`srno`, `name`, `dob`, `income`, `religion`, `category`, `customerSegment`, `gender`, `district`, `email`, `contact`, `status`) VALUES
(1, 'Ankit Pareek123', '1999-12-12', 152154, 'sdfsa', 'ST', 'Farmer', 'Male', 'smom', 'ankitpareek@gmail.com', 9876543210, 'Registered'),
(2, '', '0000-00-00', 0, '', '', 'Farmer', 'Male', '', 'ankitpareek123@gmail.com', 9876543201, 'Registered'),
(1235, 'Ankit Pareek', '1999-09-26', 111111, 'Religion', 'OBC', 'Farmer', 'Male', 'Nashik', 'ankitpareek@gmail.com', 9876543210, 'Registered');

-- --------------------------------------------------------

--
-- Table structure for table `forgotpassword`
--

CREATE TABLE `forgotpassword` (
  `id` int NOT NULL,
  `code` varchar(25) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forgotpassword`
--

INSERT INTO `forgotpassword` (`id`, `code`, `email`) VALUES
(1, '$code', '$emailTo'),
(2, '15dfed8e2bce83', 'aarushi23tikkal@gmail.com'),
(3, '15dfed9ebba651', 'aarushi23tikkal@gmail.com'),
(4, '15dfedad09272b', 'aarushi23tikkal@gmail.com'),
(5, '15dfedd2b1f8e4', 'aarushi23tikkal@gmail.com'),
(6, '15dfeddbd1fded', 'aarushi23tikkal@gmail.com'),
(7, '15dfede1751a12', 'aarushi23tikkal@gmail.com'),
(8, '15dfede481a2de', 'aarushi23tikkal@gmail.com'),
(9, '15dfedf0c8d394', 'aarushi23tikkal@gmail.com'),
(10, '15dfedf321b522', 'aarushi23tikkal@gmail.com'),
(11, '15dfedfe6a7a30', 'aarushi23tikkal@gmail.com'),
(12, '15dfee163770ed', 'aarushi23tikkal@gmail.com'),
(17, '15dfee7d4f36ee', 'gautamhelange025@gmail.com'),
(23, '15dff0642583d2', 'aarushi23tikkal@gmail.com'),
(25, '15dff089209e62', 'aarushi23tikkal@gmail.com'),
(26, '15dff08ec7d5d1', 'ankitat7517@gmail.com'),
(27, '15dff091c3d83b', 'ankitat7517@gmail.com'),
(28, '15dff098dea3ab', 'aarushi23tikkal@gmail.com'),
(29, '15dff0b7e81ed2', 'ankitat7517@gmail.com'),
(31, '15dff9ce9914b3', 'aarushi23tikkal@gmail.com'),
(32, '15dff9d482dff7', 'aarushi23tikkal@gmail.com'),
(33, '15dff9d68d48d3', 'ankitat7517@gmail.com'),
(34, '15dff9d98f04d4', 'aarushi23tikkal@gmail.com'),
(36, '15dff9e953e0c2', 'ankitat7517@gmail.com'),
(37, '15dffa053c11a9', 'aarushi23tikkal@gmail.com'),
(39, '15dffa66da7a29', 'aarushi23tikkal@gmail.com'),
(41, '15dffafd7bf5ae', 'aarushi23tikkal@gmail.com'),
(42, '15dffb001972e6', 'aarushi23tikkal@gmail.com'),
(44, '15dffb09b47ab1', 'aarushi23tikkal@gmail.com'),
(46, '15dffb2148d25a', 'aarushi23tikkal@gmail.com'),
(47, '15e008f66b2822', 'aarushi23tikkal@gmail.com'),
(50, '15e0091aad9d8c', 'aarushi23tikkal@gmail.com'),
(51, '15e00925def462', 'aarushi23tikkal@gmail.com'),
(52, '15e00988fb7023', 'aarushi23tikkal@gmail.com'),
(53, '15e0098a0bf6cb', 'aarushi23tikkal@gmail.com'),
(54, '15e009a11f246c', 'aarushi23tikkal@gmail.com'),
(55, '15e009a57ee2b4', 'aarushi23tikkal@gmail.com'),
(56, '15e009b37ec992', 'aarushi23tikkal@gmail.com'),
(57, '15e00e509e7436', ''),
(62, '15e00f0f2cb522', 'aarushi23tikkal@gmail.com'),
(63, '15e00f1a012a3f', 'aarushi23tikkal@gmail.com'),
(64, '15e0245b42796d', 'aarushi23tikkal@gmail.com'),
(65, '15e024611b7d95', 'aarushi23tikkal@gmail.com'),
(77, '15e024dbb1c589', 'aarushi23tikkal@gmail.com'),
(78, '15e024dfd996cf', 'aarushi23tikkal@gmail.com'),
(79, '15e024ec133d32', 'aarushi23tikkal@gmail.com'),
(80, '15e024f3a11b4f', 'aarushi23tikkal@gmail.com'),
(81, '15e024fdd8705d', 'aarushi23tikkal@gmail.com'),
(82, '15e02501410ccb', 'aarushi23tikkal@gmail.com'),
(83, '15e0250a47c7fd', 'aarushi23tikkal@gmail.com'),
(85, '15e0252274a639', 'aarushi23tikkal@gmail.com'),
(88, '15e0253f4de96d', 'aarushi23tikkal@gmail.com'),
(93, '15e02566c5d774', 'aarushi23tikkal@gmail.com'),
(94, '15e0258346849b', 'aarushi23tikkal@gmail.com'),
(111, '15e031a5b7c784', 'aarushi23tikkal@gmail.com'),
(123, '15e04d8fbd599a', 'shreyasikhar26@gmail.com'),
(124, '15e04d90ab3003', ''),
(125, '15e04d935b0f5e', 'enlectic@gmail.com'),
(126, '15e04db9fcd80d', 'shreyasikhar26@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `scheme`
--

CREATE TABLE `scheme` (
  `srno` int NOT NULL,
  `uniqid` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `eligibility` mediumtext NOT NULL,
  `type` enum('farmer','seniorCitizen') NOT NULL,
  `category` mediumtext NOT NULL,
  `documents` mediumtext NOT NULL,
  `validity` varchar(255) NOT NULL,
  `benefit` mediumtext NOT NULL,
  `benefit_form` varchar(255) NOT NULL,
  `weblink` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scheme`
--

INSERT INTO `scheme` (`srno`, `uniqid`, `name`, `eligibility`, `type`, `category`, `documents`, `validity`, `benefit`, `benefit_form`, `weblink`) VALUES
(21, '5e0dccc6d3582', 'Pradhan Mantri Krishi Sinchayee Yojana - Per Drop More Crop (Micro-irrigation Component) ', '\"1. Ownership should be the land in the name of the farmer             2. Irrigation facilities should be available to the farmer                 3. There should be a permanent electrical connection to the electrical pump.                       4. Have a nationalized bank account. \"', 'farmer', '', '\"1. Aadhaar Card 2. 7/12 Certificate 3. 8-A Certificate 4. Electricity Bill Invoice Proof of The Purchase Made 5. Pre Sanction Letter                                                          Caste certificate(SC,ST)    6. Xerox copy of the front page of the Bank Passbook,  \"', 'Till 15 March 2020.', '\"The grants payable to the beneficiaries under the Scheme as per the guidelines of the Central Government shall be as under:  1. Small and marginal farmers - 55% 2. Other farmers - 45%\"', 'Subsidy', 'https://mahadbtmahait.gov.in/Farmer/SchemeData/SchemeData?str=E9DDFA703C38E51AC7B56240D6D84F28 '),
(22, '5e0dccfb98489', 'Magel Tyala Shettale Yojana (Soil Conservation) ', '\"1. The farmers should have at least 0.60 hectare of land in his name. There is no maximum limit. 2. The beneficiary farmer\'s land needs to be technically eligible for farming. So that it is possible to fill or refill rainwater in the fields. 3. Earlier, the applicant should not have benefited from the government schemes for the fields, community farms or the bodily produce along with rice mules. \"', 'farmer', '', '\" 1. 7/12 of land 2. Extract of 8a 3. Poverty Line card / Suicide family heritage certificate\"', 'Whole Year', 'Subsidy (Maximum Rs.50000 / -)', 'Subsidy', 'https://egs.mahaonline.gov.in/MTS/Create?q=%2bobrUBB4oJU%3d'),
(23, '5e0dcd18e2f2b', 'Predictive Weather pamplet Based Crop Protection Scheme 2016-17 (Crop Protection Scheme)', '\"1. The scheme is applicable to the revenue board having at least 20 hectares area of â€‹â€‹planks.                2. Airline compensation will be payable only if the weather hazard is registered at the Revenue Board\'s automatic weather station. Likewise, the hailstorm and wind chill (for banana crop) will not be eligible for compensation only at the automated weather station. Must be done.Pancham as prescribed The level of damage and the amount of compensation will be determined adoption damage.                            3. Risk loss-protection for loss of clients due to the following reasons:  a. Rain-lesspower, overpower, rainforest                       b. Temperature-humid temperature, relative humidity, velocity, precipitation (Add-on / Index plus) \"', 'farmer', '', 'NO DOCUMENTS PROVIDED', 'Season to Season Varry', 'Compensation amount is deposited in the beneficiary\'s bank account within 45 days of the time the weather risks apply.', 'indemnification', 'Note : Link is not available'),
(28, '5e0dcd37c17ea', '\"Gopinath Munde Shetkari Accident Insurance Scheme for farmers (Other Schemes) \"', '\"There should be 7/12 holders in the age group of 10 to 75 in the state of Maharashtra. \"', 'farmer', 'No category required', '\"All 7/12 holding farmers in the state \"', 'Whole year', 'Grant Limit: - Rs. Insurance cover up to 2 lakhs', 'Indemnification', 'http://mahaschemes.maharashtra.gov.in/en/Krushi%20itar%20yojana.html'),
(25, '5e0dcd48aa792', 'Indra Gandhi National Old Age Pension', 'Age 65 years or above.                                            Beneficiary must belong to Below Poverty Line family.', 'seniorCitizen', '', 'BPL Certificate.                                         Age Proof certificate attested by Block Medical Officer.                                                 Income Certificate.                                                        Bank Details.                                                       Passport size Photographs.', 'Whole Year', 'Rs. 600/- per month', 'Financial Assistance.', 'https://drive.google.com/file/d/1q_zYSkofltrfNridKYPZoUh8DL8cAHrb/view'),
(31, '5e0dcd5a34f03', 'Indira Gandhi National Widow Pension Scheme', '\" Criteria	A widow in age group of 40 to 65 years whose family falls under Below Poverty Line is eligible under this Scheme. \"', 'seniorCitizen', 'All', '\"1. Application Form. 2. Certificate of Age. 3. Proof of Below Poverty Line family 4. Death Certificate of Husband.\"', 'whole year', 'Under this scheme, Rs. 600 per month is given to each beneficiary.', 'Pension', 'https://sjsa.maharashtra.gov.in/en/schemes-page?scheme_nature=37'),
(33, '5e0dcd6b8bf60', 'Shravan bal seva  rajya Nivruttivetan Yojana', '\"Category - (A) Under this Scheme every destitute person of age 65 years & above &whose annual family income is below Rs. 21000/- & whose name is not included in the BPL List get Rs.600/- per month from the state Govt.  Category - (B)Also under this scheme, every destitute person of age 65 years and above and belonging to BPL  family is eligible to get pension of Rs. 400/- per month from the state Govt. and the same beneficiary also receives pension of Rs.200/- per month from the Central Govt., under Indira Gandhi National Old Age pension Scheme.\"', 'seniorCitizen', 'All', '\"Application Form Certificate of Residence Certificate of Age Certificate of Income / Proof of Below Poverty Line family.\"', 'whole Year', 'Under this scheme, Rs. 600 per month is given to each beneficiary.', 'Money', 'https://sjsa.maharashtra.gov.in/en/scheme-category/special-assistance');

-- --------------------------------------------------------

--
-- Table structure for table `suggestion`
--

CREATE TABLE `suggestion` (
  `srno` int NOT NULL,
  `suggestorId` varchar(255) NOT NULL,
  `schemeName` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `srno` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `gender` enum('Male','Female','Other') NOT NULL,
  `designation` enum('admin','employee','dataManipulator') NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` bigint NOT NULL,
  `password` varchar(255) NOT NULL,
  `time` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`srno`, `name`, `dob`, `gender`, `designation`, `email`, `contact`, `password`) VALUES
(176, 'Gautam Helange', '1999-02-17', 'Male', 'dataManipulator', 'gautamhelange025@gmail.com', 7517424135, '3a6c5982ca43a19f6d99f9071b02c845'),
(178, 'Abhishek Wadmare', '1999-06-27', 'Male', 'employee', 'abhishek.wadmare@gmail.com', 9067649737, '5bedeb22097286442bdb908104090f2a'),
(1, 'Shreyas Ikhar', '1999-09-26', 'Male', 'admin', 'shreyasikhar26@gmail.com', 9049441721, 'bbf49155503e3f853c08a400787b9fed');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `css`
--
ALTER TABLE `css`
  ADD PRIMARY KEY (`srno`),
  ADD UNIQUE KEY `uniqid` (`uniqid`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`srno`);

--
-- Indexes for table `forgotpassword`
--
ALTER TABLE `forgotpassword`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scheme`
--
ALTER TABLE `scheme`
  ADD PRIMARY KEY (`srno`),
  ADD UNIQUE KEY `uniqid` (`uniqid`);

--
-- Indexes for table `suggestion`
--
ALTER TABLE `suggestion`
  ADD PRIMARY KEY (`srno`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`srno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `css`
--
ALTER TABLE `css`
  MODIFY `srno` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `srno` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1236;

--
-- AUTO_INCREMENT for table `forgotpassword`
--
ALTER TABLE `forgotpassword`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT for table `scheme`
--
ALTER TABLE `scheme`
  MODIFY `srno` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `suggestion`
--
ALTER TABLE `suggestion`
  MODIFY `srno` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `srno` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=181;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

