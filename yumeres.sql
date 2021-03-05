-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 05, 2021 at 08:24 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yumeres`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `img` longblob NOT NULL,
  `img2` blob NOT NULL,
  `prix` int(11) NOT NULL,
  `cat` varchar(255) NOT NULL,
  `marque` varchar(255) NOT NULL,
  `stock` int(11) NOT NULL,
  `livre` tinyint(1) NOT NULL DEFAULT '0',
  `descr` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `list_cat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `list_cat`) VALUES
(1, 'Informatique'),
(2, 'Accessoire'),
(3, 'Telephonie'),
(4, 'Electronique');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `mail` varchar(255) DEFAULT NULL,
  `tel_1` varchar(255) DEFAULT NULL,
  `tel_2` varchar(255) DEFAULT NULL,
  `active` enum('0','1') DEFAULT '0',
  `remember_token` varchar(255) DEFAULT '==',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `username`, `password`, `mail`, `tel_1`, `tel_2`, `active`, `remember_token`, `created_at`) VALUES
(1, 'Sensei', '$2y$10$NABMoEBEH/y1BtLF9TfWIOlBewknAHSKeID/g35ELHnfzaR0fa/0m', 'Sensei@gmail.com', '58591558', '', '1', 'Sensei@gmail.com==89f86e13048a5802943f601aa0b85b4c677f5c39', '2021-01-04 22:02:44'),
(2, 'sen', '$2y$10$mzb/QSJQ/FbNLXwftOiMCuaAyqGWOQjavycqjloPSAk912eF/gNB6', 'sen@gmail.com', '58591558', '', '1', '', '2021-01-05 22:53:38');

-- --------------------------------------------------------

--
-- Table structure for table `marques`
--

CREATE TABLE `marques` (
  `id` int(11) NOT NULL,
  `marque` varchar(255) NOT NULL,
  `id_sous_categorie` int(255) NOT NULL,
  `id_sous_categorie_infor` int(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `marques`
--

INSERT INTO `marques` (`id`, `marque`, `id_sous_categorie`, `id_sous_categorie_infor`) VALUES
(1, 'Samsung', 7, 0),
(2, 'HP', 0, 4);

-- --------------------------------------------------------

--
-- Table structure for table `sous_categories`
--

CREATE TABLE `sous_categories` (
  `id` int(11) NOT NULL,
  `list_cat` varchar(255) NOT NULL,
  `id_categories` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sous_categories`
--

INSERT INTO `sous_categories` (`id`, `list_cat`, `id_categories`) VALUES
(1, 'Ordinateur', 1),
(2, 'Ordinateur bureau', 1),
(3, 'Accessoire', 1),
(4, 'Montre connectee', 2),
(5, 'Power bank', 2),
(6, 'Tablette', 3),
(7, 'Smartphone', 3),
(8, 'Telephone', 3),
(9, 'Iphone', 3),
(10, 'Television', 4),
(11, 'Audio & Hifi', 4),
(12, 'Accessoire TV', 4);

-- --------------------------------------------------------

--
-- Table structure for table `sous_categories_infor`
--

CREATE TABLE `sous_categories_infor` (
  `id` int(11) NOT NULL,
  `list_cat` varchar(255) NOT NULL,
  `id_sous_categories` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sous_categories_infor`
--

INSERT INTO `sous_categories_infor` (`id`, `list_cat`, `id_sous_categories`) VALUES
(1, 'Vivobook', 1),
(2, 'Macbook', 1),
(3, 'Moniteur & Ecran', 2),
(4, 'Unite centrale', 2),
(5, 'Stockage de donnees', 3),
(6, 'Imprimante & Scanner', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ind_id` (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mail` (`mail`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `marques`
--
ALTER TABLE `marques`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sous_categories`
--
ALTER TABLE `sous_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ind_id` (`id`);

--
-- Indexes for table `sous_categories_infor`
--
ALTER TABLE `sous_categories_infor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `marques`
--
ALTER TABLE `marques`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sous_categories`
--
ALTER TABLE `sous_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `sous_categories_infor`
--
ALTER TABLE `sous_categories_infor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
