-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2024 at 06:07 PM
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
-- Database: `itrs`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_signup`
--

CREATE TABLE `admin_signup` (
  `admin_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telephone_number` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `approved`
--

CREATE TABLE `approved` (
  `id` int(11) DEFAULT NULL,
  `village_leader_id` int(11) DEFAULT NULL,
  `Cell_leader_id` int(11) DEFAULT NULL,
  `Sector_leader_id` int(11) DEFAULT NULL,
  `recommendation_text` varchar(255) DEFAULT NULL,
  `recommendation_date` date DEFAULT NULL,
  `actions_cell_leader` varchar(255) DEFAULT NULL,
  `actions_sector_leader` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `approved_recommendations`
--

CREATE TABLE `approved_recommendations` (
  `id` int(11) NOT NULL,
  `village_leader_id` int(11) DEFAULT NULL,
  `recommendation_text` text DEFAULT NULL,
  `recommendation_date` date DEFAULT NULL,
  `cell_leader_id` int(11) DEFAULT NULL,
  `sector_leader_id` int(11) DEFAULT NULL,
  `approve_cell_leader` tinyint(1) DEFAULT NULL,
  `approved_sector_leader` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `approve_recommendations`
--

CREATE TABLE `approve_recommendations` (
  `id` int(11) NOT NULL,
  `village_leader_id` int(11) DEFAULT NULL,
  `recommendation_text` text DEFAULT NULL,
  `recommendation_date` date DEFAULT NULL,
  `cell_leader_id` int(11) DEFAULT NULL,
  `approve_cell_leader` varchar(255) DEFAULT NULL,
  `sector_leader_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `approve_recommendations`
--

INSERT INTO `approve_recommendations` (`id`, `village_leader_id`, `recommendation_text`, `recommendation_date`, `cell_leader_id`, `approve_cell_leader`, `sector_leader_id`) VALUES
(0, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE `biodata` (
  `id` int(11) NOT NULL,
  `names` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `province` varchar(50) DEFAULT NULL,
  `district` varchar(50) DEFAULT NULL,
  `sector` varchar(50) DEFAULT NULL,
  `cell` varchar(50) DEFAULT NULL,
  `village` varchar(50) DEFAULT NULL,
  `identification` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `reg_date` date NOT NULL,
  `family_members` text DEFAULT NULL,
  `others` text DEFAULT NULL,
  `children` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `biodata`
--

INSERT INTO `biodata` (`id`, `names`, `country`, `province`, `district`, `sector`, `cell`, `village`, `identification`, `gender`, `reg_date`, `family_members`, `others`, `children`) VALUES
(1, 'Irafasha Justine', 'Rwanda', 'West', 'Nyarugenge', 'Kigarama', 'Urukundo', 'Rutoki', 2147483647, 'female', '2024-01-03', '', '', ''),
(2, 'Irafasha Emmy', 'Rwanda', 'East', 'Nyarugenge', 'Kanombe', 'Mataba', 'Kirusagara', 2147483647, 'male', '2024-01-03', '', '', ''),
(3, 'Josiane ', 'Rwanda', 'West', 'Nyarugenge', 'Kigarama', 'Mataba', 'Kirusagara', 2147483647, 'female', '2024-01-03', '', '', ''),
(4, 'kamariza', 'Rwanda', 'West', 'Nyarugenge', 'Kigarama', 'Mataba', 'Rutoki', 2147483647, 'male', '2024-01-05', 'hjjjjjjjjjjkl', 'uiiiiiiiiiiiiiiiiiiiiiii', 'uiiiiiiiiiiiiiiiiiiiiiiiiiiii');

-- --------------------------------------------------------

--
-- Table structure for table `cell_leader`
--

CREATE TABLE `cell_leader` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `telephone_number` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` text DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `date_joined` date DEFAULT NULL,
  `cell_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `recommendations`
--

CREATE TABLE `recommendations` (
  `id` int(11) NOT NULL,
  `village_leader_id` int(11) DEFAULT NULL,
  `recommendation_text` text DEFAULT NULL,
  `recommendation_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `is_approved` tinyint(1) DEFAULT 0,
  `approve_cell_leader` varchar(255) DEFAULT NULL,
  `approved_sector_leader` tinyint(1) DEFAULT NULL,
  `cell_leader_id` int(11) DEFAULT NULL,
  `approve_sector_leader` varchar(255) DEFAULT NULL,
  `approve_village_leader` varchar(255) DEFAULT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recommendations`
--

INSERT INTO `recommendations` (`id`, `village_leader_id`, `recommendation_text`, `recommendation_date`, `is_approved`, `approve_cell_leader`, `approved_sector_leader`, `cell_leader_id`, `approve_sector_leader`, `approve_village_leader`, `role`) VALUES
(1, 1, 'Ngewe umuyobozi wumudugudu wa mahoro ndemezako uyu mukarukundo atuye muruyu mudugudu.', '2024-01-04 13:43:56', 0, 'Approved', NULL, 1, NULL, 'Approved', ''),
(2, 1, 'mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm', '2024-01-04 16:13:26', 0, 'Rejected', NULL, 1, NULL, 'Approved', ''),
(3, 2, 'hhhhhdhdhdhdhhdhdjshshdsjjkasjksjkdkdsjdhdhjds', '2024-01-04 16:14:52', 0, 'Approved', NULL, 1, NULL, 'Approved', ''),
(10, 2, 'gh1uikdjskjasJLKASDJKASJLASJKLDJS amakuru', '2024-01-05 14:46:48', 0, 'Approve Cell Leader', 0, 1, NULL, 'Approved', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `telephone` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `reg_date` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `telephone`, `email`, `name`, `country`, `province`, `district`, `reg_date`, `gender`, `password`) VALUES
(1, NULL, NULL, 'ffffd', 'f', 'EAST', 'cjhxjchxj', '0000-00-00', 'female', '$2y$10$C3etnhxQP37jz8LMwTe0JOGl4ElPSBtjYTTEygJHLXYs//S2m4.oO'),
(2, '0735025917', 'irafasha@gmail.com', 'Irafasha justine', 'rwanda', 'fffffffffffffff', 'sssssssssssssss', '2024-01-29', 'female', '$2y$10$vUXwERd8s8e7chULWqBamu6sLJBP30yoGKDv03vmGWKG9Idkif4Ee'),
(3, '0735025917', 'justine@gmail.com', ' justine', 'rwanda', 'hshsh', 'sssssssssssssss', '2024-01-02', 'female', '$2y$10$bRQS5Em/ezm5mWoO60SQM.EoSo1R1wLnK5Edty5lqHTXCUmFj/GSG'),
(4, '0735025917', 'josiane@gmail.com', 'josiane', 'rwanda', '', '', '2024-01-03', 'female', '$2y$10$L1hBvDiu669msl.DQdBqauE.PXWp9wy6YkVDSGmWuNHWq7.F891Xe'),
(5, '0735025917', 'irafashaemmy@gmail.com', 'Irafasha justine', 'rwanda', '', '', '2024-01-03', 'female', '$2y$10$1AT1yqv0IgZD8NWOR5rckOHGBETU9W8kd5/4CaMWZ8Xuzz5G0j5QK'),
(6, '0735025914', 'nelly@gmail.com', 'Nelly', 'rwanda', '', '', '2024-01-03', 'female', '$2y$10$gU2EiaGzUvx3rIlwZPOztustW72ZfRnUJP.iAcZ6E96YJKfSBBsu6'),
(7, '1212121212', 'user@gmail.com', 'user', 'rda', '', '', '2024-01-10', 'male', '$2y$10$zdt4GzAq15s3EvdTDqrSkOYVFMf/IpDTC3iYPp5pi0qLj2mEuqgja'),
(8, '11111111', 'user2@gmail.com', 'user2', 'congo', 'East', 'Bugesera', '2024-01-12', 'male', '$2y$10$K1JpquiltxxAR/eLqLsZiO3i2mWrQsRyWYFUV0hGMClpsV6BnMJ8e'),
(9, '2222222', 'adm@gmailcom', 'adm', 'rda', 'Kigali City', 'Gasabo', '2024-01-17', 'male', '$2y$10$NRrdrTw/fqGbESEcJzYsdutiJzbVqabsnFDTR8c2vU2JiGG8A.Ms2'),
(10, '', 'cjhxjchxj', '', 'rwanda', '', '', '0000-00-00', 'female', '$2y$10$Ym/lDPHZuvshFDB.K4mL3.nRg6NZdHhseffvKfZl55OoYPVWQHaNK');

-- --------------------------------------------------------

--
-- Table structure for table `user_signup`
--

CREATE TABLE `user_signup` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `telephone_number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name_of_country` varchar(255) NOT NULL,
  `name_of_province` varchar(255) NOT NULL,
  `name_of_district` varchar(255) NOT NULL,
  `reg_date` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `action` varchar(10) NOT NULL DEFAULT 'nonapprove',
  `role` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_signup`
--

INSERT INTO `user_signup` (`id`, `name`, `telephone_number`, `email`, `name_of_country`, `name_of_province`, `name_of_district`, `reg_date`, `gender`, `password`, `action`, `role`) VALUES
(1, 'Irafasha justine', '0789410101', 'irafashajustine@gmail.com', 'Rwanda', 'West', 'Nyarugenge', '2024-01-04', 'female', '$2y$10$JNezqztS5ueWiiCZ34BGaOhcoMdYWb4Jotcp4MpjmBlGdXTM.tlXC', 'nonapprove', NULL),
(2, 'Nelly', '0789410107', 'nelly@gmail.com', 'Rwanda', 'West', 'Nyarugenge', '2024-01-04', 'female', '$2y$10$pW68u0atiwKxXQ66USFAku9sAPc6WpRrBP2C36wBdvvAkPatfsTs2', 'nonapprove', NULL),
(3, 'josiane', '0789410109', 'josiane@gmail.com', 'Rwanda', 'East', 'Nyarugenge', '2024-01-04', 'female', '$2y$10$yZYyuJT1LM4Bc.M8gj5ZFObau2h2doYuWM8V6e2Gnc/ch6lhCcrIi', 'nonapprove', NULL),
(4, 'Irafasha Emmy ', '0789410100', 'irafashaemmy@gmail.com', 'Rwanda', 'West', 'Nyarugenge', '2024-01-04', 'male', '$2y$10$OD9ulImuIHz.FVRJDlxqHOwZquvw1zwhiTRsFo5nD3O/B9H1vGTLW', 'nonapprove', NULL),
(5, 'Nelly', '0789410109', 'nelly1@gmail.com', 'Rwanda', 'North', 'Gasabo', '2024-01-04', 'female', '$2y$10$bE6ca.GjRi2qc82X1PoMWulTMidCEr2loeW1C.tyfdUzVgO.Hu1aa', 'nonapprove', NULL),
(6, 'justine', '399987892', 'j@mail.com', 'rwanda', 'East', 'Gasabo', '2024-01-04', 'male', '$2y$10$5Val00.HvNNzN1nhKafjHelVwdxKnURZhrNcJ4JYx2AiGCTEGVaVq', 'nonapprove', NULL),
(7, 'justine', '399987892', 'j@mail.com', 'rwanda', 'East', 'Gasabo', '2024-01-04', 'male', '0000', 'nonapprove', NULL),
(8, 'justine', '399987892', 'j@mail.com', 'rwanda', 'East', 'Gasabo', '2024-01-04', 'male', '0000', 'nonapprove', NULL),
(9, 'welrwe', '475345', 'a@gmail.com', 'USA', 'West', 'Bugesera', '2024-01-04', 'female', '1111', 'nonapprove', NULL),
(10, 'adm', '222222', 'adm@gmailcom', 'Rwanda', 'West', 'Bugesera', '2024-01-05', 'male', '$2y$10$0p4NUXv7ca/lichc5sutFOrOZ9IdCt2a.DIQwoCjtyEIIL0JCOB/G', 'nonapprove', NULL),
(11, 'nene', '01010101', 'nene@gmail.com', 'Rwanda', 'East', 'Rulindo', '2024-01-26', 'female', '$2y$10$RkuF7kJnjYuVLicydD7bm.rTzuwdGrcuqmuIO6HbwES2Fh3r1pIxK', 'nonapprove', NULL),
(12, 'Nelly', '0789410107', 'nelly@gmail.com', 'Rwanda', 'East', 'Nyarugenge', '2024-01-11', 'female', '$2y$10$zsKpcnoGc0LvBU6yMcWWBe6RqHKV2P0.Vv.PHunZ2jxQ/gO45xHtq', 'nonapprove', NULL),
(13, 'Irafasha justine', '0789410109', 'irafashajustine@gmail.com', 'Rwanda', 'South', 'Nyarugenge', '2024-01-11', 'female', '$2y$10$3hRi47Tw6QSD2tObb8hL3Ow9iyc5FKmXjy.w5ubQQzY7aAS3NxgRu', 'nonapprove', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `village_leaders`
--

CREATE TABLE `village_leaders` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telephone_number` varchar(20) NOT NULL,
  `village_name` varchar(255) NOT NULL,
  `reg_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_signup`
--
ALTER TABLE `admin_signup`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `approved_recommendations`
--
ALTER TABLE `approved_recommendations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `approve_recommendations`
--
ALTER TABLE `approve_recommendations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cell_leader`
--
ALTER TABLE `cell_leader`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recommendations`
--
ALTER TABLE `recommendations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_signup`
--
ALTER TABLE `user_signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `village_leaders`
--
ALTER TABLE `village_leaders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_signup`
--
ALTER TABLE `admin_signup`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `biodata`
--
ALTER TABLE `biodata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cell_leader`
--
ALTER TABLE `cell_leader`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `recommendations`
--
ALTER TABLE `recommendations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_signup`
--
ALTER TABLE `user_signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `village_leaders`
--
ALTER TABLE `village_leaders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
