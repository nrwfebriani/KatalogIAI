-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2023 at 02:04 PM
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
-- Database: `book2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `full_name`, `email`, `password`) VALUES
(1, 'Elias', 'eliasfsdev@gmail.com', '$2y$10$Nqq/y251QX2Ccvb1Ax7hUuMqQSkG3yRLCxN2KPdetnSP3oaXVH70a'),
(2, 'greg', 'gregorius@gmail.com', 'ogre'),
(3, 'feb', 'febriawan@gmail.com', 'irbef');

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `name`) VALUES
(1, 'Rick Riordan'),
(2, 'J.K. Rowling'),
(3, 'Nicholas Sparks'),
(4, 'R.L. Stine'),
(5, 'Stephen Hawkings');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `category_id` int(11) NOT NULL,
  `cover` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `stock` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `author_id`, `description`, `category_id`, `cover`, `file`, `stock`) VALUES
(1, 'Percy Jackson & The Olympians: The Lightning Thief', 1, 'Percy, who has dyslexia, is surprised to discover that he is a demigod. When he is accused of stealing Zeus\'s lightning bolt, he sets off to find the bolt and settle the fight between the gods.', 3, '647ae7e68cb9f8.00699454.jpg', '647ae7e68d1801.95925762.pdf', 0),
(2, 'Harry Potter and the Philosopher\'s Stone', 2, 'Harry Potter and the Philosopher\'s Stone is a fantasy novel written by British author J. K. Rowling.', 5, '647af458a9ab10.47448644.jpg', '647af458aa3218.47369291.pdf', 1),
(3, 'A Walk To Remember', 3, 'A Walk to Remember is a novel by American writer Nicholas Sparks, released in October 1999. The novel, set in 1958–1959 in Beaufort, North Carolina, is a story of two teenagers who fall in love with each other despite the disparity of their personalities. A Walk to Remember is adapted in the film of the same name.', 1, '647af54352b6b8.58897426.jpeg', '647af54352d3c6.32675567.pdf', 1),
(4, 'Night of the Living Dummy', 4, 'Kris\'s twin sister has just gotten a ventriloquist\'s dummy and it\'s all anyone - their parents, their friends - seem to care about. Kris is tired of being ignored so she gets a dummy of her own. But double the dummies start to mean double the trouble...and horror.', 2, '647afab525dff2.18389422.jpg', '647afab52653a8.37565108.pdf', 1),
(5, 'A Brief History of Time', 5, 'A Brief History of Time: From the Big Bang to Black Holes is a book on theoretical cosmology by English physicist Stephen Hawking. It was first published in 1988. Hawking wrote the book for readers who had no prior knowledge of physics.', 4, '647b0099969135.27429310.jpg', '647b0099970d77.18967047.pdf', 1),
(6, 'Percy Jackson & The Olympians: The Last Olympian', 1, 'The Last Olympian is a fantasy-adventure novel based on Greek mythology by Rick Riordan, published on May 5, 2009. It is the fifth and final novel of the Percy Jackson & the Olympians series and serves as the direct sequel to The Battle of the Labyrinth.', 3, '647b110c878bc3.50474304.jpg', '647b110c87fe72.60437938.pdf', 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Romance'),
(2, 'Horror'),
(3, 'Adventure'),
(4, 'Non Fiction'),
(5, 'Fiction');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
