-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2024 at 10:55 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `todolist`
--

-- --------------------------------------------------------

--
-- Table structure for table `todos`
--

CREATE TABLE `todos` (
  `id` int(11) NOT NULL,
  `task` varchar(255) NOT NULL,
  `status` enum('pending','completed','deleted') DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `todos`
--

INSERT INTO `todos` (`id`, `task`, `status`) VALUES
(1, 'makan', 'deleted'),
(2, 'makan', 'deleted'),
(3, 'makan', 'deleted'),
(4, 'Anje sedang memasak nasi goreng, sambal, dan ikan lele', 'deleted'),
(5, 'minum', 'deleted'),
(6, 'makan', 'deleted'),
(7, 'minum', 'deleted'),
(8, 'berlari', 'deleted'),
(9, 'Angel sedang belajar Rest Api', 'deleted'),
(10, 'Angel sedang belajar Rest Api', 'deleted'),
(11, 'Makan', 'deleted'),
(12, 'Angel sedang membuat aplikasi Todolist', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'jeje', '$2y$10$0LNEbFNn7zkI3/rwg4G1IuvqdWl3nmwy9PxxQYt86uKACaBVzTSn2'),
(2, 'Arin', '$2y$10$SykzQHfvYA7LbHgTKEnbc.diGuYxr8AzZjORuAAVVETj/8lt7TlOy'),
(3, 'Ricky', '$2y$10$ZFRL4hrd.lGBSjShI6vJRex5UFk2z44qd7J8XxJKAqg3STlEt98yq'),
(4, 'nina', '$2y$10$mE4.odTueJ2Zvo259fnqiO6l2vB3EQiVf6S.QHb5F4MzlQ3rv218W'),
(5, 'Admin', '$2y$10$7LQND.tKt6oFQJY3g5uU.O5qlOLpVTKVH7oRQzr6YMeJqePO3kb2u');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `todos`
--
ALTER TABLE `todos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `todos`
--
ALTER TABLE `todos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
