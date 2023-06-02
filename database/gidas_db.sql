-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gidas_db`
--

-- --------------------------------------------------------


CREATE TABLE `uzimtumas` (
  `id` int(30) NOT NULL,
  `laikas` varchar(200) NOT NULL,
  `vieta` text NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `administratorius` (
  `id` int(30) NOT NULL,
  `email` varchar(200) NOT NULL,
  `slaptazodis` text NOT NULL,

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `uzimtumas`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `administratorius`
  ADD PRIMARY KEY (`id`);

--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

