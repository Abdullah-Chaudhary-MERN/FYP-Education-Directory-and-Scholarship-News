-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2022 at 10:32 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eds`
--

-- --------------------------------------------------------

--
-- Table structure for table `addmissionform`
--

CREATE TABLE `addmissionform` (
  `id` int(200) NOT NULL,
  `name` varchar(500) NOT NULL,
  `father` varchar(500) NOT NULL,
  `number` varchar(500) NOT NULL,
  `cinc` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `address` varchar(500) NOT NULL,
  `upload` varchar(500) NOT NULL,
  `degree` varchar(500) NOT NULL,
  `year` varchar(500) NOT NULL,
  `institute` varchar(500) NOT NULL,
  `marks` varchar(500) NOT NULL,
  `resultcard` varchar(500) NOT NULL,
  `inter` varchar(500) NOT NULL,
  `student` varchar(500) NOT NULL,
  `domicel` varchar(500) NOT NULL,
  `fathercinc` varchar(500) NOT NULL,
  `nts` varchar(500) NOT NULL,
  `character` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addmissionform`
--

INSERT INTO `addmissionform` (`id`, `name`, `father`, `number`, `cinc`, `email`, `address`, `upload`, `degree`, `year`, `institute`, `marks`, `resultcard`, `inter`, `student`, `domicel`, `fathercinc`, `nts`, `character`) VALUES
(17, 'haider', 'ali akbar', '2345678987', '2345678909876543', 'dfghjklfgh@gmail.com', 'dfghjkdfg', '098.webp', 'Graduation', '4444', '', '5', '098.webp', '098.webp', '098.webp', '098.webp', '098.webp', '7', '098.webp'),
(18, 'haider', 'ali akbar', '2345678987', '2345678909876543', 'dfghjklfgh@gmail.com', 'dfghjkdfg', '098.webp', 'Graduation', '4444', '', '5', '098.webp', '098.webp', '098.webp', '098.webp', '098.webp', '', '098.webp'),
(19, 'haider', 'ali akbar', '2345678987', '2345678909876543', 'dfghjklfgh@gmail.com', 'dfghjkdfg', '098.webp', 'Graduation', '4444', '', '5', '098.webp', '098.webp', '098.webp', '098.webp', '098.webp', '', '098.webp'),
(20, 'haider', 'ali akbar', '2345678987', '2345678909876543', 'dfghjklfgh@gmail.com', 'dfghjkdfg', '098.webp', 'Graduation', '4444', '', '5', '098.webp', '098.webp', '098.webp', '098.webp', '098.webp', '', '098.webp'),
(21, 'haider', 'ali akbar', '2345678987', '2345678909876543', 'dfghjklfgh@gmail.com', 'dfghjkdfg', '098.webp', 'Graduation', '4444', '', '5', '098.webp', '098.webp', '098.webp', '098.webp', '098.webp', '', '098.webp'),
(22, 'haider', 'ali akbar', '2345678987', '2345678909876543', 'dfghjklfgh@gmail.com', 'dfghjkdfg', '0099.webp', 'DAE', '4444', '', '5', '0099.webp', '0099.webp', '0099.webp', '0099.webp', '0099.webp', '', '0099.webp'),
(23, 'haider', 'ali akbar', '2345678987', '2345678909876543', 'dfghjklfgh@gmail.com', 'dfghjkdfg', '0099.webp', 'DAE', '4444', '', '5', '0099.webp', '0099.webp', '0099.webp', '0099.webp', '0099.webp', '', '0099.webp'),
(24, 'haider', 'ali akbar', '2345678987', '2345678909876543', 'dfghjklfgh@gmail.com', 'dfghjkdfg', '0099.webp', 'DAE', '4444', '', '5', '0099.webp', '0099.webp', '0099.webp', '0099.webp', '0099.webp', '', '0099.webp'),
(25, 'haider', 'ali akbar', '2345678987', '2345678909876543', 'dfghjklfgh@gmail.com', 'dfghjkdfg', '', 'DAE', '4444', '', '5', '0099.webp', '0099.webp', '0099.webp', '0099.webp', '0099.webp', '', '0099.webp'),
(26, 'haider', 'ali akbar', '2345678987', '2345678909876543', 'dfghjklfgh@gmail.com', 'dfghjkdfg', '0099.webp', 'DAE', '4444', '', '5', '0099.webp', '0099.webp', '0099.webp', '0099.webp', '0099.webp', '', '0099.webp'),
(27, 'haider', 'ali akbar', '2345678987', '2345678909876543', 'dfghjklfgh@gmail.com', 'dfghjkdfg', '0099.webp', 'DAE', '4444', 'jhgfds', '5', '0099.webp', '0099.webp', '0099.webp', '0099.webp', '0099.webp', '78', '0099.webp'),
(28, 'haider', 'ali akbar', '2345678987', '2345678909876543', 'dfghjklfgh@gmail.com', 'dfghjkdfg', '0099.webp', 'DAE', '4444', 'jhgfds', '5', '567.jpg', '0099.webp', '0000.webp', '0099.webp', '533.jpg', '78', '09.png'),
(29, 'haider', 'aliakbar', '+92321-1234567', '36502-1234567-1', 'gggg@gmail.com', 'dfghj', '3.jpg', 'FA', '2022', 'Arid', '4.00', '4.jpg', '23.webp', '09.png', '000.webp', '0000.webp', '7', '2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `admission form`
--

CREATE TABLE `admission form` (
  `id` int(200) NOT NULL,
  `fpname` varchar(500) NOT NULL,
  `uname` varchar(500) NOT NULL,
  `ayear` varchar(500) NOT NULL,
  `adstart` varchar(500) NOT NULL,
  `adend` varchar(500) NOT NULL,
  `cprog` varchar(500) NOT NULL,
  `ccata` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admission form`
--

INSERT INTO `admission form` (`id`, `fpname`, `uname`, `ayear`, `adstart`, `adend`, `cprog`, `ccata`, `image`) VALUES
(7, 'Arid', 'ajkgfas', '2022', '2022-09-14', '2022-09-13', 'PHD', 'Graduation', 'WhatsApp Image 2022-09-14 at 12.20.26 AM.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(200) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `subject` varchar(400) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`) VALUES
(3, 'abdullah ramay', 'abdullahramy7@gmail.com', 'asfah', 'asfhasjf');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(200) NOT NULL,
  `pname` varchar(500) NOT NULL,
  `ename` varchar(500) NOT NULL,
  `sname` varchar(500) NOT NULL,
  `mname` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `pname`, `ename`, `sname`, `mname`) VALUES
(1, 'haider', 'dfghjklfgh@gmail.com', 'gfdfgfgdfgtredfgtre', 'mname'),
(2, 'haider', 'dfghjklfgh@gmail.com', 'gfdfgfgdfgtredfgtre', 'mname'),
(3, 'haider', 'dfghjklfgh@gmail.com', 'gfdfgfgdfgtredfgtre', 'mname'),
(4, 'haider', 'dfghjklfgh@gmail.com', 'gfdfgfgdfgtredfgtre', 'mname'),
(5, 'haider', 'dfghjklfgh@gmail.com', 'gfdfgfgdfgtredfgtre', 'mname'),
(6, 'submit', 'dfghjklfgh@gmail.com', 'mname', 'mname');

-- --------------------------------------------------------

--
-- Table structure for table `focal person registration`
--

CREATE TABLE `focal person registration` (
  `id` int(200) NOT NULL,
  `flname` varchar(500) NOT NULL,
  `cnic` varchar(500) NOT NULL,
  `dob` varchar(500) NOT NULL,
  `address` varchar(500) NOT NULL,
  `uname` varchar(500) NOT NULL,
  `uemail` varchar(500) NOT NULL,
  `ucontact` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `designation` varchar(500) NOT NULL,
  `ucard` varchar(500) NOT NULL,
  `uprofilepic` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `focal person registration`
--

INSERT INTO `focal person registration` (`id`, `flname`, `cnic`, `dob`, `address`, `uname`, `uemail`, `ucontact`, `email`, `designation`, `ucard`, `uprofilepic`) VALUES
(8, 'asfnm,b', 'aklsfjka', '2022-09-19', '        ASFJKASHF', 'AJSFHAJKF', 'abdullahramay8@outlook.com', 'ASHKFG', 'abdullahramay8@outlook.c', 'zdfadfas', 'ghfgc', 'screencapture-paf-gov-pk-2022-08-30-09_17_22.png');

-- --------------------------------------------------------

--
-- Table structure for table `instute`
--

CREATE TABLE `instute` (
  `id` int(200) NOT NULL,
  `name` varchar(500) NOT NULL,
  `subcam` varchar(500) NOT NULL,
  `maincam` varchar(500) NOT NULL,
  `directorcam` varchar(500) NOT NULL,
  `phoneno` varchar(500) NOT NULL,
  `address` varchar(500) NOT NULL,
  `link` varchar(500) NOT NULL,
  `backimg` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `instute`
--

INSERT INTO `instute` (`id`, `name`, `subcam`, `maincam`, `directorcam`, `phoneno`, `address`, `link`, `backimg`) VALUES
(5, 'Fast University', 'no', 'yes', 'Waseem Shahzad', '051831410029', ' A.K Brohi Road, H 11/4, Islamabad', 'http://isb.nu.edu.pk/', 'screencapture-isb-nu-edu-pk-Home-Home-2022-09-21-13_16_14.png'),
(6, 'beacon house university', 'no', 'yes', 'Mr. Rashid Rana', '04238100156', 'Tarogil Campus 13 Km Off Thokar Niazbeg - Raiwind Road, Tarogil, Lahore', 'www.bnu.edu.pk', 'screencapture-bnu-edu-pk-bnu-2022-09-21-13_28_03.png'),
(7, 'comsats university ', 'no', 'yes', ' Mr. Rizwan Ahmed', '9251904950325', 'Park Road, Tarlai Kalan, Islamabad 45550, Pakistan', 'https://www.comsats.edu.pk/', 'screencapture-comsats-edu-pk-2022-09-21-13_45_45.png'),
(8, 'comsats university ', 'Sahiwal, Lahore , Vehari ,Abbottabad, Attock', 'Islamabad', 'Prof. Dr. Muhammad T. Afzal', '0519247000', 'Park Road, Tarlai Kalan, Islamabad 45550, Pakistan', 'https://www.comsats.edu.pk/default.aspx', 'screencapture-comsats-edu-pk-2022-09-21-13_45_45.png'),
(9, 'comsats university', 'sahiwal', 'Islamabad', 'Dr Nazeer Ahmad Zafar', '0405678999', 'Park Road, Tarlai Kalan, Islamabad 45550, Pakistan', 'https://swl-cms.comsats.edu.pk/', 'cui.png');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(200) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `password`) VALUES
(1, 'gggg@gmail.com', '23456');

-- --------------------------------------------------------

--
-- Table structure for table `loginform`
--

CREATE TABLE `loginform` (
  `id` int(200) NOT NULL,
  `ename` varchar(500) NOT NULL,
  `pname` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loginform`
--

INSERT INTO `loginform` (`id`, `ename`, `pname`) VALUES
(2, 'gggg@gmail.com', '23456'),
(4, 'gggg@gmail.com', '23456');

-- --------------------------------------------------------

--
-- Table structure for table `newsreport`
--

CREATE TABLE `newsreport` (
  `id` int(200) NOT NULL,
  `news` varchar(500) NOT NULL,
  `date` varchar(500) NOT NULL,
  `text` varchar(500) NOT NULL,
  `upload` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `newsreport`
--

INSERT INTO `newsreport` (`id`, `news`, `date`, `text`, `upload`) VALUES
(2, 'haider', '2022-09-14T21:47', 'Enter News Data', '098.webp'),
(3, 'admission open', '2022-10-11T13:58', 'New admission in many universities are started you will soon get the information.', 'admission open.jfif');

-- --------------------------------------------------------

--
-- Table structure for table `scholarship`
--

CREATE TABLE `scholarship` (
  `id` int(200) NOT NULL,
  `name` varchar(500) NOT NULL,
  `title` varchar(500) NOT NULL,
  `detail` varchar(5000) NOT NULL,
  `title1` varchar(500) NOT NULL,
  `detail1` varchar(5000) NOT NULL,
  `scdate` varchar(500) NOT NULL,
  `scend` varchar(500) NOT NULL,
  `upload` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `scholarship`
--

INSERT INTO `scholarship` (`id`, `name`, `title`, `detail`, `title1`, `detail1`, `scdate`, `scend`, `upload`) VALUES
(4, 'haider', 'jhjhh', 'rtyjk', 'sdfghjk', 'sdfghj', '2022-09-13', '2022-09-22', '098.webp'),
(5, 'Ehsaas Scholarship Program', 'dfghjk', 'fgyyuhi ', 'dfghj', 'fgyyuhi ', '2022-09-22', '2022-10-08', '533.jpg'),
(6, 'Ehsaas Scholarship Program', 'Ehsaas Eligibility Criteria', 'The selection of the student is based on the CGPA criterial and financial background that either student deserve that scholarship.', 'Student Selection criteria', 'The selection of the student is based on the CGPA criterial and financial background that either student deserve that scholarship.', '2022-09-22', '2022-10-08', '533.jpg'),
(7, 'Ehsaas Scholarship Program', 'Ehsaas Eligibility Criteria', 'The selection of the student is based on the CGPA criterial and financial background that either student deserve that scholarship.', 'Student Selection criteria', 'The selection of the student is based on the CGPA criterial and financial background that either student deserve that scholarship.', '2022-09-22', '2022-10-08', '533.jpg'),
(8, 'Ehsaas Scholarship Program', 'Ehsaas Eligibility Criteria', 'The selection of the student is based on the CGPA criterial and financial background that either student deserve that scholarship. The selection of the student is based on the CGPA criterial and financial background that either student deserve that scholarship. The selection of the student is based on the CGPA criterial and financial background that either student deserve that scholarship.', 'Student Selection criteria', 'The selection of the student is based on the CGPA criterial and financial background that either student deserve that scholarship. The selection of the student is based on the CGPA criterial and financial background that either student deserve that scholarship. The selection of the student is based on the CGPA criterial and financial background that either student deserve that scholarship.', '2022-09-22', '2022-10-08', '533.jpg'),
(9, 'Ehsaas Scholarship Program', 'Students Selection Ehsas Scholarship Criteria', 'The selection of the student is based on the CGPA criterial and financial background that either student deserve that scholarship. The selection of the student is based on the CGPA criterial and financial background that either student deserve that scholarship. The selection of the student is based on the CGPA criterial and financial background that either student deserve that scholarship.', 'Student Selection criteria', 'The selection of the student is based on the CGPA criterial and financial background that either student deserve that scholarship. The selection of the student is based on the CGPA criterial and financial background that either student deserve that scholarship. The selection of the student is based on the CGPA criterial and financial background that either student deserve that scholarship.', '2022-09-22', '2022-10-08', '533.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(200) NOT NULL,
  `name` varchar(500) NOT NULL,
  `fname` varchar(500) NOT NULL,
  `dob` varchar(500) NOT NULL,
  `cnic` varchar(500) NOT NULL,
  `pnum` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `address` varchar(500) NOT NULL,
  `gender` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `upload` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `name`, `fname`, `dob`, `cnic`, `pnum`, `email`, `address`, `gender`, `password`, `upload`) VALUES
(1, 'haider', 'ali', '2022-09-02', '34567', '2345678987', 'gggg@gmail.com', 'dfghjkdfg', 'Male', '23456', ''),
(2, 'submit', 'ali', '2022-09-28', '23456789876543', '2345678987654', 'gggg@gmail.com', 'dfghjkdfg', 'Male', '23456', ''),
(3, 'haider ali', 'ali akbar', '2022-10-18', '33302-5820012-1', '923497575276', 'gggg@gmail.com', 'kamalia', 'Male', '23456', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addmissionform`
--
ALTER TABLE `addmissionform`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admission form`
--
ALTER TABLE `admission form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `focal person registration`
--
ALTER TABLE `focal person registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `instute`
--
ALTER TABLE `instute`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loginform`
--
ALTER TABLE `loginform`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsreport`
--
ALTER TABLE `newsreport`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scholarship`
--
ALTER TABLE `scholarship`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addmissionform`
--
ALTER TABLE `addmissionform`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `admission form`
--
ALTER TABLE `admission form`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `focal person registration`
--
ALTER TABLE `focal person registration`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `instute`
--
ALTER TABLE `instute`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `loginform`
--
ALTER TABLE `loginform`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `newsreport`
--
ALTER TABLE `newsreport`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `scholarship`
--
ALTER TABLE `scholarship`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
