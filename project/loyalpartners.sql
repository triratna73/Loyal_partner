-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2021 at 08:59 AM
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
-- Database: `loyalpartners`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `book_id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `prop_id` int(255) NOT NULL,
  `start_time` date NOT NULL,
  `end_time` date NOT NULL,
  `status` varchar(255) NOT NULL,
  `cred_detail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `message_by` varchar(255) NOT NULL,
  `message_to` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `message_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `notif_id` int(11) NOT NULL,
  `notif_title` varchar(255) NOT NULL,
  `notif_msg` varchar(255) NOT NULL,
  `notif_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `role` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`notif_id`, `notif_title`, `notif_msg`, `notif_date`, `role`) VALUES
(1, 'Covid19 Safety', 'Hi! Please be posted with the updates from government and follow the rules. Please stay safe and enjoy your stay at our premises.', '2021-06-09 02:49:23', 'Everyone');

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `prop_id` int(255) NOT NULL,
  `prop_name` varchar(255) NOT NULL,
  `prop_type` varchar(255) NOT NULL,
  `prop_StreetName` varchar(255) NOT NULL,
  `prop_suburb` varchar(255) NOT NULL,
  `prop_state` varchar(255) NOT NULL,
  `prop_postCode` int(4) NOT NULL,
  `prop_det` varchar(255) NOT NULL,
  `prop_occupancy` int(11) NOT NULL DEFAULT 1,
  `price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`prop_id`, `prop_name`, `prop_type`, `prop_StreetName`, `prop_suburb`, `prop_state`, `prop_postCode`, `prop_det`, `prop_occupancy`, `price`) VALUES
(1, 'Luxury 3 Bed FULL Ocean View Sky Suite Apartment!', 'Apartment', '1 street name', 'Sydney', 'NSW', 2145, '3 living , 1 cooking, 1 bathroom, Free Parking', 4, '500'),
(2, 'Mantra Legends Deluxe Queen with Kitchen', 'Town_House', '10 street name', 'N Sydney', 'NSW', 2222, '2 Bedroom with double beds, free wifi', 4, '110'),
(3, 'Oceanview Exex 19th level 1 Bedroom Beach Apt', 'Apartment', '2 street name', 'Chatswood', 'NSW', 2222, '1 Bedroom with queen bed, free wifi, parkin', 3, '120'),
(4, 'The Last Minute! Waterfront Studio Apartment', 'Apartment', '100 street name', 'Artamon', 'NSW', 2220, '2 Bedroom with queen beds, free wifi, parking, gym, spa', 3, '130'),
(5, 'Masterbedroom with work station, lounge & ensuite', 'Unit', '12 Central Street', 'Surry Hills', 'NSW', 2000, '2 bedroom with queen beds each, access to hot tub, kitchen WiFi, TV, washing machine', 4, '99'),
(6, 'The Kirketon Hotel', 'Hotel', '20 Name street', 'Sydney', 'NSW', 2000, 'Room in boutique hotel in Darlinghurst. Free Parking and Wifi. 1 bedroom 1 Bathroom', 2, '87'),
(7, 'Sydney CBD Near Traun UTS ', 'Unit', '1 Railway St', 'Surry Hills', 'NSW', 2001, 'Private room in house. 1 bedroom, 1 single bed, private bathroom. Kitchen, Free WiFi, TV and free parking', 1, '87'),
(8, 'Beautiful spaciour Sydney Harbour View property', 'Apartment', '2 Second Avenue', 'Neutral Bay', 'NSW', 2400, 'Private room in apartment having 1 bedroom with 2 beds and 1 shared bathroom. Access to beach, WiFi, street parking, TV and pets are allowed as well', 2, '60');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `firstname`, `lastname`, `username`, `password`, `email`, `role`) VALUES
(1, 'admin', 'admin', 'admin', 'admin', 'admin@admin.com', 'admin'),
(2, 'staff', 'staff', 'staff', 'staff', 'staff@staff.com', 'staff');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`notif_id`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`prop_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `book_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `message_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `notif_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `prop_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
