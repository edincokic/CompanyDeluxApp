-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2022 at 09:26 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `deluxeplast`

-- Table structure for table `registrovani`
--

CREATE TABLE `registrovani` (
  `korisnik` varchar(64) NOT NULL DEFAULT 'korisnik',
  `email` varchar(128) NOT NULL DEFAULT 'email@email.com',
  `sifra` varchar(64) NOT NULL DEFAULT '',
  `admin` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registrovani`
--

INSERT INTO `registrovani` (`korisnik`, `email`, `sifra`, `admin`) VALUES
('edin', 'edincokic@gmail.com', 'edin123', 1),
('ahmet', 'ahmet@gmail.com', 'ahmet123', 0);

