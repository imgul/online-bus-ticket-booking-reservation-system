-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2022 at 12:26 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bustick`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `cust_fname` varchar(255) NOT NULL,
  `cust_lname` varchar(255) NOT NULL,
  `cust_email` varchar(255) NOT NULL,
  `cust_phone` varchar(15) NOT NULL,
  `route` varchar(255) NOT NULL,
  `seat` int(255) NOT NULL,
  `cost_per_seat` int(11) NOT NULL,
  `booking_amount` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `cust_id`, `cust_fname`, `cust_lname`, `cust_email`, `cust_phone`, `route`, `seat`, `cost_per_seat`, `booking_amount`, `created_at`) VALUES
(12, 25, 'User', 'One', 'user1@gmail.com', '03331122331', 'RT-535363', 1, 4200, 4200, '2022-06-23 02:09:22'),
(13, 25, 'User', 'One', 'user1@gmail.com', '03331122331', 'RT-12125', 4, 700, 2800, '2022-06-23 02:09:29'),
(14, 26, 'User', 'Two', 'user2@gmail.com', '03223344224', 'RT-535363', 1, 4200, 4200, '2022-06-23 02:10:44'),
(15, 26, 'User', 'Two', 'user2@gmail.com', '03223344224', 'RT-553774', 10, 5100, 51000, '2022-06-23 02:10:49'),
(16, 26, 'User', 'Two', 'user2@gmail.com', '03223344224', 'RT-12125', 2, 700, 1400, '2022-06-23 02:10:58'),
(17, 25, 'User', 'One', 'user1@gmail.com', '03331122331', 'RT-205926', 3, 1500, 4500, '2022-06-23 02:15:48'),
(18, 25, 'User', 'One', 'user1@gmail.com', '03331122331', 'RT-553774', 2, 5100, 10200, '2022-06-25 01:43:10'),
(19, 25, 'User', 'One', 'user1@gmail.com', '03331122331', 'RT-535363', 2, 4200, 8400, '2022-06-25 01:43:19'),
(20, 25, 'User', 'One', 'user1@gmail.com', '03331122331', 'RT-535363', 1, 4200, 4200, '2022-06-25 01:43:22');

-- --------------------------------------------------------

--
-- Table structure for table `buses`
--

CREATE TABLE `buses` (
  `id` int(11) NOT NULL,
  `bus_no` varchar(30) NOT NULL,
  `bus_assigned` tinyint(1) NOT NULL DEFAULT 0,
  `bus_capacity` int(100) NOT NULL,
  `bus_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buses`
--

INSERT INTO `buses` (`id`, `bus_no`, `bus_assigned`, `bus_capacity`, `bus_created`) VALUES
(4, 'LHR1010', 1, 25, '2022-06-16 05:30:59'),
(5, 'LHR3223', 1, 45, '2022-06-16 05:31:31'),
(7, 'ISB2020', 0, 25, '2022-06-16 06:54:18'),
(9, 'SWL2102', 0, 45, '2022-06-16 06:55:40'),
(12, 'MTN1020', 1, 30, '2022-06-23 09:12:06');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(100) NOT NULL,
  `customer_id` varchar(255) NOT NULL,
  `customer_name` varchar(30) NOT NULL,
  `customer_phone` varchar(10) NOT NULL,
  `customer_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `routes`
--

CREATE TABLE `routes` (
  `id` int(255) NOT NULL,
  `route_id` varchar(255) NOT NULL,
  `bus_no` varchar(155) NOT NULL,
  `route_cities` varchar(255) NOT NULL,
  `route_dep_date` date NOT NULL,
  `route_dep_time` time NOT NULL,
  `route_step_cost` int(100) NOT NULL,
  `route_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `routes`
--

INSERT INTO `routes` (`id`, `route_id`, `bus_no`, `route_cities`, `route_dep_date`, `route_dep_time`, `route_step_cost`, `route_created`) VALUES
(3, 'RT-535363', 'LHR1010', 'LAHORE, ISLAMABAD', '2022-06-17', '10:40:00', 4200, '2022-06-16 04:40:52'),
(4, 'RT-553774', 'LHR3223', 'KARACHI, LAHORE', '2022-06-17', '11:11:00', 5100, '2022-06-16 05:11:43'),
(5, 'RT-12125', 'LHR1010', 'PESHAWAR, ISLAMABAD', '2022-06-18', '09:38:00', 700, '2022-06-17 03:38:10'),
(6, 'RT-205926', 'MTN1020', 'LAHORE, MULTAN', '2022-06-29', '13:20:00', 1500, '2022-06-23 02:14:28');

-- --------------------------------------------------------

--
-- Table structure for table `seats`
--

CREATE TABLE `seats` (
  `bus_no` varchar(155) NOT NULL,
  `seat_booked` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seats`
--

INSERT INTO `seats` (`bus_no`, `seat_booked`) VALUES
('ISB2020', NULL),
('LHR1010', NULL),
('LHR3222', NULL),
('LHR3223', NULL),
('MNA', NULL),
('MTN1020', NULL),
('SWL2102', NULL),
('SWL9191', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `phone`, `password`, `is_admin`, `created_at`) VALUES
(24, 'Muhammad', 'Asadullah', 'asad@gmail.com', '03099890481', '$2y$10$7wg7TA01G/V4IkIPy.Y4LeRArYpDSi25LxD4lHsP0HOPw7USvFcW6', 1, '2022-06-23 09:04:29'),
(25, 'User', 'One', 'user1@gmail.com', '03331122331', '$2y$10$aXKEzOFqaMpFeVoLlqgO7.oX/TpiIJ2FiyR09FfrfriFixjZ9K64u', 1, '2022-06-23 09:07:43'),
(26, 'User', 'Two', 'user2@gmail.com', '03223344224', '$2y$10$CaUrLS9.aDr9JhObmBh5seMBGrU.DCSBzygSsKt/GSeLek7CO/aru', 0, '2022-06-23 09:10:25'),
(27, 'saad', 'wattu', 'usr2@gmail.com', '031221221212', '$2y$10$1bpNqiql4zwHb2/NkNmFL.3Kf8Qgus9/nki9LwdEdDsLWnJ19fOBS', 0, '2022-06-24 20:46:44'),
(28, 'saad', 'wattu', 'sadw7386@gmail.com', 'usr2@gmail.com', '$2y$10$tg/VtaFgC5mzyTQCn8y2A.XZoIfv2X3ILwtNChNbN/0rxkdX4P9/e', 0, '2022-06-25 09:08:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buses`
--
ALTER TABLE `buses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `routes`
--
ALTER TABLE `routes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seats`
--
ALTER TABLE `seats`
  ADD PRIMARY KEY (`bus_no`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `buses`
--
ALTER TABLE `buses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `routes`
--
ALTER TABLE `routes`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
