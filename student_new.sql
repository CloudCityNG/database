-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 25, 2016 at 10:05 PM
-- Server version: 10.0.27-MariaDB-0ubuntu0.16.04.1
-- PHP Version: 7.0.8-0ubuntu0.16.04.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE `assignment` (
  `id` int(11) NOT NULL,
  `assignment_description` varchar(255) DEFAULT NULL,
  `exam` tinyint(1) DEFAULT NULL,
  `percent_of_grade` double DEFAULT NULL,
  `maximum_point` float DEFAULT NULL,
  `class_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`id`, `assignment_description`, `exam`, `percent_of_grade`, `maximum_point`, `class_id`) VALUES
(1, 'Short Quiz on Basics', 1, 0.1, 100, 1),
(2, 'Midterm Exam', 1, 0.5, 200, 1),
(3, 'Final Exam', 1, 0.3, 200, 1),
(4, 'Weekly Assignment', 1, 0.05, 100, 1),
(5, 'Pop Quiz', 1, 0.05, 15, 1),
(6, 'Weekly Assignment', 0, 0.15, 100, 2),
(7, 'Midterm Exam', 1, 0.2, 200, 2),
(8, 'Final Exam', 1, 0.4, 200, 2),
(9, 'Project', 0, 0.25, 150, 2),
(10, 'Weekly Assignment', 0, 0.2, 100, 3),
(11, 'Project 1 - Tables', 0, 0.1, 100, 3),
(12, 'Project 2 - Queries', 0, 0.1, 100, 3),
(13, 'Project 3 - Forms', 0, 0.1, 100, 3),
(14, 'Final Exam', 1, 0.5, 300, 3);

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id` int(11) NOT NULL,
  `class_name` varchar(50) NOT NULL,
  `section` int(11) NOT NULL,
  `term` varchar(30) NOT NULL,
  `units` varchar(30) NOT NULL,
  `year` int(11) NOT NULL,
  `location` varchar(255) NOT NULL,
  `days_and_times` varchar(20) NOT NULL,
  `note` longtext,
  `department_id` int(11) NOT NULL,
  `instructor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `class_name`, `section`, `term`, `units`, `year`, `location`, `days_and_times`, `note`, `department_id`, `instructor_id`) VALUES
(1, 'Access Master Class', 2, 'Fall', '3', 2016, '300-120', 'MWF 1:00', NULL, 4, 14),
(2, 'Thermodynamics Theory', 2, 'Fall', '3', 2006, '100', 'MWF 8:00', NULL, 3, 4),
(3, 'Relational Database Design', 3, 'Fall', '3', 2006, '101', 'TR 8:00', NULL, 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `department_name` varchar(50) NOT NULL,
  `department_number` int(11) NOT NULL,
  `department_manager` varchar(50) NOT NULL,
  `department_chairperson` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `department_name`, `department_number`, `department_manager`, `department_chairperson`) VALUES
(1, 'Psychology', 120, 'john', 'john'),
(2, 'Chemistry', 130, 'john', 'john'),
(3, 'Math', 140, 'john', 'john'),
(4, 'Computer Science', 150, 'john', 'john'),
(5, 'English', 160, 'john', 'john'),
(8, 'test eeee', 170, 'john', 'john'),
(9, 'test wwww', 180, 'john', 'john');

-- --------------------------------------------------------

--
-- Table structure for table `instructor`
--

CREATE TABLE `instructor` (
  `id` int(11) NOT NULL,
  `instructor_name` varchar(50) NOT NULL,
  `email_name` varchar(50) NOT NULL,
  `phone_number` varchar(30) NOT NULL,
  `extension` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `instructor`
--

INSERT INTO `instructor` (`id`, `instructor_name`, `email_name`, `phone_number`, `extension`) VALUES
(1, 'Doyle, Patricia', 'patricia', '3105550134', ''),
(2, 'Rusko, Amy', 'amy', '3105550143', ''),
(3, 'Beck, Bradley', 'bradley', '3105550121', ''),
(4, 'Wright, David', 'david', '3105550188', ''),
(5, 'Beebe, Ann', 'ann', '3105550167', ''),
(14, 'Access-Templates.Com', 'support@access-templates.com', '999999999', '99');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id` int(11) NOT NULL,
  `report_name` varchar(50) NOT NULL,
  `report_desc` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`id`, `report_name`, `report_desc`) VALUES
(1, 'Class Listing by Department', ''),
(2, 'Class Results Summary', ''),
(3, 'Results by Assignment', ''),
(4, 'Results by Student', ''),
(5, 'Student Schedules', ''),
(6, 'Students', '');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `assignment_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `score` double DEFAULT NULL,
  `late` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`assignment_id`, `student_id`, `score`, `late`) VALUES
(1, 1, 55, 0),
(1, 2, 56, 1),
(1, 3, 23, 0),
(1, 4, 45, 0),
(1, 6, 78, 1),
(2, 1, 100, 0),
(2, 2, 89, 0),
(2, 3, 93, 0),
(2, 4, 78, 1),
(2, 6, 85, 0),
(3, 1, 90, 0),
(3, 2, 90, 0),
(3, 3, 90, 0),
(3, 4, 90, 0),
(3, 6, 90, 0),
(4, 1, 100, 0),
(4, 2, 88, 0),
(4, 3, 67, 0),
(4, 4, 87, 0),
(4, 6, 99, 0),
(5, 1, 89, 0),
(5, 2, 98, 1),
(5, 3, 87, 0),
(5, 4, 73, 0),
(6, 1, 100, 1),
(6, 4, 99, 0),
(6, 5, 87, 0),
(6, 6, 90, 0),
(6, 7, 93, 0),
(7, 1, 190, 0),
(7, 4, 185, 0),
(7, 5, 192, 0),
(7, 6, 191, 0),
(7, 7, 180, 0),
(8, 1, 200, 0),
(8, 4, 150, 0),
(8, 5, 178, 0),
(8, 6, 153, 0),
(8, 7, 194, 0),
(9, 1, 143, 0),
(9, 4, 123, 0),
(9, 5, 100, 1),
(9, 6, 150, 0),
(9, 7, 141, 0),
(10, 1, 87, 1),
(10, 2, 99, 0),
(10, 4, 98, 0),
(10, 5, 90, 0),
(10, 6, 99, 0),
(11, 1, 100, 0),
(11, 2, 100, 0),
(11, 4, 100, 0),
(11, 5, 95, 1),
(11, 6, 100, 0),
(12, 1, 100, 0),
(12, 2, 100, 0),
(12, 4, 100, 0),
(12, 5, 100, 0),
(12, 6, 100, 0),
(13, 1, 90, 0),
(13, 2, 89, 0),
(13, 4, 93, 0),
(13, 5, 95, 0),
(13, 6, 94, 0),
(14, 1, 300, 0),
(14, 2, 279, 0),
(14, 4, 260, 0),
(14, 5, 280, 0),
(14, 6, 296, 0);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `father_name` varchar(50) DEFAULT NULL,
  `mother_name` varchar(50) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(50) DEFAULT NULL,
  `state_or_province` varchar(20) NOT NULL,
  `postal_code` varchar(20) DEFAULT NULL,
  `phone_number` varchar(30) NOT NULL,
  `email_name` varchar(50) NOT NULL,
  `major` varchar(50) NOT NULL,
  `student_number` varchar(30) NOT NULL,
  `note` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `firstname`, `lastname`, `father_name`, `mother_name`, `address`, `city`, `state_or_province`, `postal_code`, `phone_number`, `email_name`, `major`, `student_number`, `note`) VALUES
(1, 'Jennifer', 'Riegle', 'Love Riegle', 'Bill Riegle', '1234 Elm Parkway E.\r\nApt. 2A', 'Seattle', 'WA', '89322', '5145550178', 'jennifer', 'MIS', '14020121', NULL),
(2, 'Alan', 'Shen', 'Live Shen', 'Help Shen', '9876 Aluminum Drive', 'Tacoma', 'WA', '89541', '5145550182', 'alan', 'Marketing', '14020122', NULL),
(3, 'Conor', 'Cunningham', 'Liu Cunningham', 'Best Cunningham', '4567 Daisy Blvd.', 'Kirkland', 'WA', '89403', '5145550112', 'conor', 'Medicine', '14020123', NULL),
(4, 'Nancy', 'Anderson', 'Ben Anderson', 'Bo Anderson', '3210 Old Oak Rd.', 'Redmond', 'WA', '89602', '5145550122', 'nancy', 'Political Science', '14020124', NULL),
(5, 'Michael', 'Allen', 'Gun Allen', 'Bomb Allen', '12 Coffee Hill N.', 'Seattle', 'WA', '89654', '5145550189', 'michael', 'Computer Science', '14020125', NULL),
(6, 'Erik', 'Andersen', 'Nou Andersen', 'Len Andersen', '321 Truffle Way', 'Kirkland', 'WA', '89404', '5145550157', 'erik', 'English', '14020126', NULL),
(7, 'Maria', 'Hammond', 'Bo Hammond', 'Bin Hammond', '7654 Thatta Way E.\r\nSuite 3B', 'Seattle', 'WA', '89328', '5145550112', 'maria', 'Computer Science', '14020127', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student_and_class`
--

CREATE TABLE `student_and_class` (
  `class_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `grade` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student_and_class`
--

INSERT INTO `student_and_class` (`class_id`, `student_id`, `grade`) VALUES
(1, 1, 'A'),
(1, 2, 'A'),
(1, 3, 'B'),
(1, 4, 'C'),
(1, 6, 'B'),
(2, 1, 'A'),
(2, 4, 'B'),
(2, 5, 'B'),
(2, 6, 'B+'),
(2, 7, 'A'),
(3, 1, 'A'),
(3, 2, 'A'),
(3, 4, 'A'),
(3, 5, 'A'),
(3, 6, 'A');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assignment`
--
ALTER TABLE `assignment`
  ADD PRIMARY KEY (`id`,`class_id`),
  ADD KEY `fk_assignment_class_idx` (`class_id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`,`department_id`,`instructor_id`),
  ADD UNIQUE KEY `class_name_UNIQUE` (`class_name`),
  ADD KEY `fk_class_department1_idx` (`department_id`),
  ADD KEY `fk_class_instructor1_idx` (`instructor_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `department_number_UNIQUE` (`department_number`);

--
-- Indexes for table `instructor`
--
ALTER TABLE `instructor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`assignment_id`,`student_id`),
  ADD KEY `fk_assignment_has_student_student1_idx` (`student_id`),
  ADD KEY `fk_assignment_has_student_assignment1_idx` (`assignment_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `student_number_UNIQUE` (`student_number`);

--
-- Indexes for table `student_and_class`
--
ALTER TABLE `student_and_class`
  ADD PRIMARY KEY (`class_id`,`student_id`),
  ADD KEY `fk_class_has_student_student1_idx` (`student_id`),
  ADD KEY `fk_class_has_student_class1_idx` (`class_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assignment`
--
ALTER TABLE `assignment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `instructor`
--
ALTER TABLE `instructor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--

-- AUTO_INCREMENT for table 'department'
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
-- Constraints for dumped tables
--

--
-- Constraints for table `assignment`
--
ALTER TABLE `assignment`
  ADD CONSTRAINT `fk_assignment_class` FOREIGN KEY (`class_id`) REFERENCES `class` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `class`
--
ALTER TABLE `class`
  ADD CONSTRAINT `fk_class_department1` FOREIGN KEY (`department_id`) REFERENCES `department` (`id`),
  ADD CONSTRAINT `fk_class_instructor1` FOREIGN KEY (`instructor_id`) REFERENCES `instructor` (`id`);

--
-- Constraints for table `result`
--
ALTER TABLE `result`
  ADD CONSTRAINT `fk_assignment_has_student_assignment1` FOREIGN KEY (`assignment_id`) REFERENCES `assignment` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_assignment_has_student_student1` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student_and_class`
--
ALTER TABLE `student_and_class`
  ADD CONSTRAINT `fk_class_has_student_class1` FOREIGN KEY (`class_id`) REFERENCES `class` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_class_has_student_student1` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
