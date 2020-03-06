-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 06, 2020 at 08:25 AM
-- Server version: 5.7.26
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `disc_name` varchar(100) NOT NULL,
  `disc_year` varchar(100) NOT NULL,
  `disc_label` varchar(255) NOT NULL,
  `disc_genre` varchar(255) NOT NULL,
  `disc_prix` varchar(4) NOT NULL,
  `disc_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `disc_name`, `disc_year`, `disc_label`, `disc_genre`, `disc_prix`, `disc_image`) VALUES
(293, '', '', '', '', '', 'assets/img/local/.'),
(297, '', '', '', '', '', 'assets/img/local/.'),
(298, '', '', '', '', '', 'assets/img/local/.'),
(299, '', '', '', '', '', 'assets/img/local/.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=300;
