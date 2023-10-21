-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2023 at 08:32 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webprog`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `menu_name` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `menu_price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `menu_name`, `user_id`, `menu_id`, `menu_price`, `quantity`) VALUES
(22, 'CanapÃ©', 9, 3, 150000, 1),
(23, 'Nasi Goreng', 10, 2, 20000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `resto`
--

CREATE TABLE `resto` (
  `id` int(5) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `harga` varchar(15) NOT NULL,
  `deskripsi` varchar(250) NOT NULL,
  `img` blob NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `resto`
--

INSERT INTO `resto` (`id`, `nama`, `harga`, `deskripsi`, `img`, `category`) VALUES
(1, 'Cincau Sultan', '20000', 'Cincau sultan enak bet', 0x52657365702d45732d43696e6361752d556e74756b2d42696b696e2d42756b612d50756173612d4a6164692d54616d6261682d4e696b6d61742d31323030783930302e6a7067, 'drinks'),
(2, 'Nasi Goreng', '20000', 'Makanan enak nasi digoreng', 0x646f776e6c6f61642e6a706567, 'lunch'),
(3, 'CanapÃ©', '150000', ' terbuat dari roti berukuran sekali gigit yang di atasnya diberi aneka topping, mulai dari tuna hingga keju', 0x63616e6170652e6a7067, 'appetizer');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `lahir` date NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `password`, `lahir`, `gender`) VALUES
(8, 'Matt', 'BJ', 'mattbj@gmail.com', '7a8c2933c736d1ab59d3710cf83dfab6', '2004-05-21', ''),
(9, 'bryan', 'ngetes aja', 'bryan@gmail.com', '202cb962ac59075b964b07152d234b70', '2023-10-16', 'Male'),
(10, 'mark', 'vincent', 'mark@gmail.com', '202cb962ac59075b964b07152d234b70', '2023-10-05', 'Male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resto`
--
ALTER TABLE `resto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `resto`
--
ALTER TABLE `resto`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
