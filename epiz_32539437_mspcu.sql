-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql305.epizy.com
-- Generation Time: Aug 22, 2024 at 10:12 PM
-- Server version: 10.6.19-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_32539437_mspcu`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `role` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `pass`, `role`) VALUES
(1, 'Sara Hakim', '1485SS', 'VP OC'),
(2, 'Bassant Shawky', '1484BB', ' President'),
(3, 'Ahmed Ebeid', 'notottinoparty@10', 'IT Head'),
(7, 'Sara Sayed', '1806/sarsar', 'IT VPHead');

-- --------------------------------------------------------

--
-- Table structure for table `committee`
--

CREATE TABLE `committee` (
  `id` int(11) NOT NULL,
  `cname` varchar(255) NOT NULL,
  `cdetails` varchar(1000) NOT NULL,
  `cpics` varchar(255) NOT NULL,
  `type-ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `committee`
--

INSERT INTO `committee` (`id`, `cname`, `cdetails`, `cpics`, `type-ID`) VALUES
(7, 'IT', 'Leading and training the committee members throughout the season. Maintain and develop MSP website. Providing needed software and technical support for the sessions and events.', 'it.png', 1),
(8, 'PR', 'Leading and training the committee members throughout the season. Shaping and enhancing the image of MSPCU. Contacting speakers, trainers and media sponsor. Representing MSPCU in events and media channels.  Getting the needed permissions for all MSPCU projects.', 'pr.png', 1),
(9, 'HR', 'Participate in planning & development to achieve our goals. Recruitment and selection of participants. Conduct the participants’ interview. Create & maintain good spirit between the members of the crew. Ensure that every member is following the rules. Write meeting minutes. Help the members to solve the problems that face them during the year. Helping & supporting members to achieve their goals through transferring the knowledge & experiences. Conduct individual meetings with all members to solve any problem. Prepare members\' profiles. Send an official mail to each member about his/her feedback with effective solutions for their weakness points. Send reports to the head of the committee covering the performance of members. Responsible for maintaining the ethics & values of MSP.', 'human-resources.png', 1),
(10, 'Media and Design', 'Leading and training the committee members throughout the season. Shaping and enhancing the image of MSPCU. Contacting speakers, trainers and media sponsor. Representing MSPCU in events and media channels. Getting the needed permissions for all MSPCU projects.', 'media.png', 1),
(11, 'Digital Marketing', 'Leading and training the committee members throughout the season. Shaping and enhancing the image of MSPCU. Contacting speakers, trainers and media sponsor. Representing MSPCU in events and media channels. Getting the needed permissions for all MSPCU projects.', 'digital-merketing.png', 1),
(12, 'FR', 'Leading and training the committee members throughout the season. Manage sponsors’ contacts and info. Approaching and making sponsorship and partnership deals. Documentations and relations management such as proposals, contracts, emails. Events Management.', 'fundraiser.png', 1),
(13, 'Logistics ', 'Leading and training the committee members throughout the season. Managing all activities and decorations whether for sessions or events. Planning for the weekly activities theme. Making affordable deal for t-shirts. Responsible for the booth and all its needed materials.', 'logistics.png', 1),
(14, 'Mobile Application', 'You will Learn how to build a well design mobile application, best part is we will use the new technology flutter, that works for both android and iOS.', 'mobile-app.png', 2),
(15, 'Web Development', 'You will build your website from scratch by learning every technology you need to know about Front-end development you will learn how to wireframe your website then you will convert it into code with different technologieslike HTML, CSS, Bootstrap. you will be able to animate your website to make it more professional with JavaScript, and before you know it you will know all about websites & ready to enter the market. If you\'re in computer science or the faculty of engineering or generally interested in this field, then this workshop is the perfect choice for you.', 'web-development.png', 2),
(16, 'Interaction Design', 'You need the attributes that enable you to engage in meaningful interactions with others. Since most jobs require teamwork, it\'s important to possess soft skills to enhance your employability, achieve your dream job, and the perfect personality.', 'graphic-design.png', 2),
(17, 'Marketing', 'Here you can find tips and tricks about offline marketing, online marketing, and how to implement a marketing plan. Also, you will learn about advertising and how to promote your products which will be a piece of cake. You will learn how to make a business plan for offline and most importantly, online marketing.', 'marketing-workshop.png', 2),
(18, 'Soft Skills', 'You need the attributes that enable you to engage in meaningful interactions with others. Since most jobs require teamwork, it\'s important to possess soft skills to enhance your employability, achieve your dream job, and the perfect personality.', 'soft-skills.png', 2),
(19, 'Competitive Programming', 'The aim of competitive programming is to write source code of computer programs which are able to solve given problems. A vast majority of problems appearing in programming contests are mathematical or logical in nature.', 'programming.png', 2);

-- --------------------------------------------------------

--
-- Table structure for table `committee-cate`
--

CREATE TABLE `committee-cate` (
  `cate-ID` int(11) NOT NULL,
  `cate-name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `committee-cate`
--

INSERT INTO `committee-cate` (`cate-ID`, `cate-name`) VALUES
(1, 'OC'),
(2, 'AC'),
(3, 'best team');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `cont_ID` int(11) NOT NULL,
  `usmail` varchar(30) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `descriptions` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`cont_ID`, `usmail`, `fname`, `lname`, `descriptions`) VALUES
(4, 'tarekwafaa482@gmail.com', 'wafaa', 'tarek', 'I hope to be a member with you '),
(5, 'radwamahmoudy155@gmail.com', 'Radwa', 'Mahmoud ', 'I hope to join you this year.'),
(6, 'nourmoustafa25666@gmail.com', 'Nariman', 'Mostafa', 'I want to apply to this activity '),
(7, 'sarasaid52@gmail.com', 'Sara', 'Sayed', '... ');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `abroad_img` varchar(500) NOT NULL,
  `elink` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `title`, `abroad_img`, `elink`) VALUES
(15, 'Members Recruitment ', 'members-recruitment (1).png', 'https://www.facebook.com/events/597781791373948/?acontext=%7B%22event_action_history%22%3A[%7B%22surface%22%3A%22page%22%7D]%7D'),
(16, 'Participants Recuitmentâ€™22', 'participants-recruitment.png', 'https://www.facebook.com/events/1574540146224425/?acontext=%7B%22event_action_history%22%3A[%7B%22surface%22%3A%22page%22%7D]%7D	'),
(17, 'Opening Ceremony', 'opening-ceremony.png', 'https://www.facebook.com/events/467801848356983/?acontext=%7B%22event_action_history%22%3A[%7B%22surface%22%3A%22page%22%7D]%7D'),
(18, 'Be Helpful', 'be helpful.png', 'https://www.facebook.com/events/551938662934142/?acontext=%7B%22event_action_history%22%3A[%7B%22surface%22%3A%22page%22%7D]%7D'),
(19, 'Main Conference', 'conference.png', 'https://www.facebook.com/events/575169707569373/?acontext=%7B%22event_action_history%22%3A[%7B%22surface%22%3A%22page%22%7D]%7D');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `mid` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `pics` varchar(255) NOT NULL,
  `comm` int(10) DEFAULT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`mid`, `name`, `pics`, `comm`, `role`) VALUES
(52, 'Ahmed Ebeid', 'Ahmed Hussein.jpg', 7, 1),
(53, 'Sara Sayed', 'Sara Sayed.jpg', 7, 4),
(54, 'Mostafa Soliman', 'Mostafa Ahmed.jpg', 7, 2),
(58, 'Omar Kamal', 'Omar kamaleldeen.jpg.png', 7, 2),
(59, 'Shahd Atef', 'shahd atef.jpeg.png', 7, 2),
(60, 'Omnia Mostafa', 'Omnia moustafa.jpg.png', 7, 2),
(62, 'Shimaa Reda', 'Shimaa Reda.jpg.png', 7, 2),
(63, 'Ebrahem Karm', 'Ebrahem Karm.jpg', 7, 2),
(64, 'Amr Mohamed', 'Amr Mohamed_.jpg', 7, 2),
(130, 'Youssef Osama', 'D88ED83E-CEF9-4864-B23A-BADEFF6A09EC.jpeg', 7, 2),
(131, 'Yasmin Kamal', 'yasmin kamal.jpeg', 7, 2),
(132, 'Mostafa Nasser', 'ca32422a-17b9-4559-a68c-749ff1264a33.jpg', 7, 2),
(162, 'Youssef Mohamed ', 'IMG-20220314-WA0064.jpg', 7, 2),
(163, 'Abdelrahman Mohamed', 'abdelrahman mohamed.png', NULL, 3);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role-ID` int(11) NOT NULL,
  `role-tit` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role-ID`, `role-tit`) VALUES
(1, 'head'),
(2, 'member'),
(3, 'president'),
(4, 'vice head'),
(5, 'OC Vice President '),
(6, 'AC Vice President '),
(9, 'deputy vice president OC'),
(10, 'deputy vice president AC'),
(11, 'HR Vice President '),
(12, 'HR Vice President ');

-- --------------------------------------------------------

--
-- Table structure for table `sponsers`
--

CREATE TABLE `sponsers` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `details` varchar(255) DEFAULT NULL,
  `pics` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `committee`
--
ALTER TABLE `committee`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type-ID` (`type-ID`);

--
-- Indexes for table `committee-cate`
--
ALTER TABLE `committee-cate`
  ADD PRIMARY KEY (`cate-ID`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`cont_ID`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`mid`),
  ADD KEY `role` (`role`),
  ADD KEY `comm` (`comm`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role-ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `committee`
--
ALTER TABLE `committee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `cont_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `mid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=165;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role-ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `committee`
--
ALTER TABLE `committee`
  ADD CONSTRAINT `committee_ibfk_1` FOREIGN KEY (`type-ID`) REFERENCES `committee-cate` (`cate-ID`) ON DELETE CASCADE;

--
-- Constraints for table `members`
--
ALTER TABLE `members`
  ADD CONSTRAINT `members_ibfk_1` FOREIGN KEY (`comm`) REFERENCES `committee` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `members_ibfk_2` FOREIGN KEY (`role`) REFERENCES `role` (`role-ID`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
