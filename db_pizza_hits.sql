-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2021 at 06:41 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pizza_hits`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_pesanan`
--

CREATE TABLE `detail_pesanan` (
  `idPesanan` int(11) NOT NULL,
  `idmenu_makanan` int(11) NOT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `sub_total` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `menu_makanan`
--

CREATE TABLE `menu_makanan` (
  `idmenu_makanan` int(11) NOT NULL,
  `nama_menu` varchar(45) DEFAULT NULL,
  `harga_menu` int(11) DEFAULT NULL,
  `gambar_menu` varchar(100) DEFAULT NULL,
  `ukuran_menu` enum('Personal','Regular','Large') DEFAULT NULL,
  `deskripsi_makanan` varchar(245) DEFAULT NULL,
  `idtoping_makanan` int(11) DEFAULT NULL,
  `idpinggiran_makanan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu_makanan`
--

INSERT INTO `menu_makanan` (`idmenu_makanan`, `nama_menu`, `harga_menu`, `gambar_menu`, `ukuran_menu`, `deskripsi_makanan`, `idtoping_makanan`, `idpinggiran_makanan`) VALUES
(1, 'Tuna Hits', 25000, 'http://localhost/Kp_Pizzahits/images/gambar1.png', 'Personal', 'Potongan daging tuna, toping jagung dan saus mayonaise', NULL, NULL),
(2, 'American ', 45000, '	\r\nhttp://localhost/Kp_pizzahits/images/gambar3.png', 'Regular', 'Paperoni Sapi, daging sapi cincang dan jamur', NULL, NULL),
(3, 'Sate Pizza', 70000, 'http://localhost/Kp_pizzahits/images/gambar14.png', 'Large', 'Bawang bombay, jamur, daging sapi cincang, saus sate/bumbu kacang', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `idPesanan` int(11) NOT NULL,
  `status_pesanan` enum('Take away','Dine In') DEFAULT NULL,
  `iduser` int(11) NOT NULL,
  `tarif_pengiriman` int(11) DEFAULT NULL,
  `status_pengiriman` enum('Diproses','Dikirim','Sampai') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pinggiran_makanan`
--

CREATE TABLE `pinggiran_makanan` (
  `idpinggiran_makanan` int(11) NOT NULL,
  `nama_pinggiran` varchar(45) DEFAULT NULL,
  `ukuran_pinggiran` varchar(55) NOT NULL,
  `harga_pinggiran` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pinggiran_makanan`
--

INSERT INTO `pinggiran_makanan` (`idpinggiran_makanan`, `nama_pinggiran`, `ukuran_pinggiran`, `harga_pinggiran`) VALUES
(1, 'Stuffed Crust ', 'Personal', 10000),
(2, 'Crown Crust ', 'Personal', 10000),
(3, 'Cheesy Bites ', 'Personal', 10000),
(4, 'Stuffed Crush', 'Regular', 15000),
(5, 'Crown Crust', 'Regular', 15000),
(6, 'Cheesy Bites', 'Regular', 15000),
(7, 'Stuffed Crush', 'Large', 20000),
(8, 'Crown Crust', 'Large', 20000),
(9, 'Cheesy Bites', 'Large', 20000);

-- --------------------------------------------------------

--
-- Table structure for table `toping_makanan`
--

CREATE TABLE `toping_makanan` (
  `idtoping_makanan` int(11) NOT NULL,
  `nama_toping` varchar(45) DEFAULT NULL,
  `ukuran_toping` varchar(55) NOT NULL,
  `harga_toping` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `toping_makanan`
--

INSERT INTO `toping_makanan` (`idtoping_makanan`, `nama_toping`, `ukuran_toping`, `harga_toping`) VALUES
(1, 'Cheese ', 'Personal', 5000),
(2, 'Meat ', 'Personal', 3000),
(3, 'Vegetable ', 'Personal', 3000),
(4, 'Cheese', 'Regular', 7000),
(5, 'Meat', 'Regular', 5000),
(6, 'Vegetable', 'Regular', 5000),
(7, 'Cheese', 'Large', 10000),
(8, 'Meat', 'Large', 7000),
(9, 'Vegetable', 'Large', 7000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `iduser` int(11) NOT NULL,
  `username` varchar(45) DEFAULT NULL,
  `alamat` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `status` enum('Admin','Customer') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`iduser`, `username`, `alamat`, `email`, `password`, `status`) VALUES
(1, 'Muhammad Sani', 'Darmo Permai Selatan V/71-A', 's160416154@ubaya.ac.id', '81dc9bdb52d04dc20036dbd8313ed055', 'Customer'),
(2, 'Fernanda', 'kebraon', 'fernandaputra73@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_pesanan`
--
ALTER TABLE `detail_pesanan`
  ADD PRIMARY KEY (`idPesanan`,`idmenu_makanan`),
  ADD KEY `fk_pesanan_has_menu_makanan_menu_makanan1_idx` (`idmenu_makanan`),
  ADD KEY `fk_pesanan_has_menu_makanan_pesanan1_idx` (`idPesanan`);

--
-- Indexes for table `menu_makanan`
--
ALTER TABLE `menu_makanan`
  ADD PRIMARY KEY (`idmenu_makanan`),
  ADD KEY `fk_menu_makanan_toping_makanan1_idx` (`idtoping_makanan`),
  ADD KEY `fk_menu_makanan_pinggiran_makanan1_idx` (`idpinggiran_makanan`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`idPesanan`),
  ADD KEY `fk_pesanan_user1_idx` (`iduser`);

--
-- Indexes for table `pinggiran_makanan`
--
ALTER TABLE `pinggiran_makanan`
  ADD PRIMARY KEY (`idpinggiran_makanan`);

--
-- Indexes for table `toping_makanan`
--
ALTER TABLE `toping_makanan`
  ADD PRIMARY KEY (`idtoping_makanan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu_makanan`
--
ALTER TABLE `menu_makanan`
  MODIFY `idmenu_makanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `idPesanan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pinggiran_makanan`
--
ALTER TABLE `pinggiran_makanan`
  MODIFY `idpinggiran_makanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `toping_makanan`
--
ALTER TABLE `toping_makanan`
  MODIFY `idtoping_makanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_pesanan`
--
ALTER TABLE `detail_pesanan`
  ADD CONSTRAINT `fk_pesanan_has_menu_makanan_menu_makanan1` FOREIGN KEY (`idmenu_makanan`) REFERENCES `menu_makanan` (`idmenu_makanan`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pesanan_has_menu_makanan_pesanan1` FOREIGN KEY (`idPesanan`) REFERENCES `pesanan` (`idPesanan`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `menu_makanan`
--
ALTER TABLE `menu_makanan`
  ADD CONSTRAINT `fk_menu_makanan_pinggiran_makanan1` FOREIGN KEY (`idpinggiran_makanan`) REFERENCES `pinggiran_makanan` (`idpinggiran_makanan`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_menu_makanan_toping_makanan1` FOREIGN KEY (`idtoping_makanan`) REFERENCES `toping_makanan` (`idtoping_makanan`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `fk_pesanan_user1` FOREIGN KEY (`iduser`) REFERENCES `user` (`iduser`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
