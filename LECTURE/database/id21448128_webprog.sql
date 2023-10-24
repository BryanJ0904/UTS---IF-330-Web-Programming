-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 24, 2023 at 12:43 PM
-- Server version: 10.5.20-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id21448128_webprog`
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
(27, 'Spaghetti', 9, 1, 15000, 5),
(29, 'Spaghetti', 1, 1, 15000, 5),
(30, 'Canape', 12, 3, 25000, 1),
(31, 'Es Cincau', 12, 2, 10000, 1);

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
(1, 'Spaghetti', '15000', 'Mie asal Italia yang menggoda selera..!', 0x2e2f64617461626173652f696d616765732f737061676574692e6a706567, 'lunch'),
(2, 'Es Cincau', '10000', 'Es cincau adalah minuman Indonesia yang menyegarkan, terbuat dari potongan cincau hitam yang disajikan dengan campuran gula merah cair, santan, dan es serut, menciptakan rasa manis dan gurih yang khas.', 0x2e2f64617461626173652f696d616765732f657363696e6361752e6a7067, 'drinks'),
(3, 'Canape', '25000', 'Canapé adalah hidangan pembuka kecil yang terdiri dari sepotong roti atau cracker kecil yang dihias dengan berbagai macam toping seperti daging, keju, selai, atau hidangan lainnya.', 0x2e2f64617461626173652f696d616765732f63616e6170652e6a7067, 'appetizer'),
(4, 'Sereal', '10000', 'Sereal adalah makanan yang terbuat dari biji-bijian yang diproses dan dimakan sebagai bagian dari makanan sarapan atau camilan.', 0x2e2f64617461626173652f696d616765732f63657265616c2e6a7067, 'breakfast');

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
(1, 'admin', 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '1999-01-01', 'admin');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `resto`
--
ALTER TABLE `resto`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
