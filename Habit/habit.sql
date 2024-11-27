-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 16, 2019 at 09:11 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `habit`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

DROP TABLE IF EXISTS `address`;
CREATE TABLE IF NOT EXISTS `address` (
  `add_id` int(11) NOT NULL AUTO_INCREMENT,
  `F_name` varchar(30) NOT NULL,
  `L_name` varchar(10) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Post` varchar(50) NOT NULL,
  `Town` varchar(20) NOT NULL,
  `State` varchar(20) NOT NULL,
  `Pincode` varchar(11) NOT NULL,
  `order_id` varchar(10) NOT NULL,
  `Phone` varchar(10) NOT NULL,
  PRIMARY KEY (`add_id`),
  KEY `order_id` (`order_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`add_id`, `F_name`, `L_name`, `Address`, `Post`, `Town`, `State`, `Pincode`, `order_id`, `Phone`) VALUES
(3, 'Align', 'Agith', 'Mount Pleasant', 'Kozhencherry P.O.', 'Pathanamthitta', 'Kerala', '689641', '8944', '9387206533'),
(11, 'Athul', 'Juby', 'Habit,Opp.AIDA Hotel', 'Kottayam P.O.', 'Kottayam', 'Kerala', '686001', '7849', '6238280217'),
(12, 'Akshaye', 'Anil', 'Habit,Opp.AIDA Hotel', 'Kottayam P.O.', 'Kottayam', 'Kerala', '686001', '4721', '8765321561'),
(13, 'Aegis', 'Agith', 'Mount pleasant', 'Kozhencherry P.O.', 'Pathanamthitta', 'Kerala', '689641', '4742', '8606830197');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `cart_id` int(11) NOT NULL AUTO_INCREMENT,
  `Uname` varchar(20) NOT NULL,
  `item_id` int(11) NOT NULL,
  `item_name` varchar(30) NOT NULL,
  `item_quan` int(11) NOT NULL,
  `item_price` int(11) NOT NULL,
  `item_pic` varchar(50) NOT NULL,
  PRIMARY KEY (`cart_id`),
  KEY `item_id` (`item_id`),
  KEY `Uname` (`Uname`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `Uname`, `item_id`, `item_name`, `item_quan`, `item_price`, `item_pic`) VALUES
(18, 'Align', 2, 'Pepe Jeans', 1, 1500, 'images/j1.jpg'),
(23, 'Aegis', 1, ' Van Heusen', 1, 2000, ' images/pw1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(20) NOT NULL,
  `SUPPLIER_ID` int(10) NOT NULL,
  PRIMARY KEY (`cat_id`),
  KEY `SUPPLIER_ID` (`SUPPLIER_ID`),
  KEY `cat_id` (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `SUPPLIER_ID`) VALUES
(1, 'SHIRTS', 1),
(2, 'JEANS', 2),
(3, 'T-SHIRTS', 3),
(4, 'PANTS', 125);

-- --------------------------------------------------------

--
-- Table structure for table `employe`
--

DROP TABLE IF EXISTS `employe`;
CREATE TABLE IF NOT EXISTS `employe` (
  `EMP_ID` int(11) NOT NULL AUTO_INCREMENT,
  `FIRST_NAME` varchar(30) NOT NULL,
  `SECOND_NAME` varchar(20) NOT NULL,
  `GENDER` varchar(10) NOT NULL,
  `HOUSE_NAME` varchar(30) NOT NULL,
  `POST_OFFICE` varchar(50) NOT NULL,
  `CITY` varchar(15) NOT NULL,
  `JOIN_DATE` date NOT NULL,
  `DESIGNATION` varchar(20) NOT NULL,
  `CONTACT_NO` varchar(10) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  PRIMARY KEY (`EMP_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employe`
--

INSERT INTO `employe` (`EMP_ID`, `FIRST_NAME`, `SECOND_NAME`, `GENDER`, `HOUSE_NAME`, `POST_OFFICE`, `CITY`, `JOIN_DATE`, `DESIGNATION`, `CONTACT_NO`, `EMAIL`) VALUES
(1, 'Alen', 'Joseph', 'Male', 'Ambattu parambil', 'Meeenadom P.O', 'Kottayam', '2019-10-30', 'Manager', '9876543210', 'alenjoseph@gmail.com'),
(5, 'Jessy', 'Agith', 'Female', 'Mount Pleasant', 'Kozhencherry East P.O', 'Pathanamthitta', '2019-12-31', 'Saleswoman', '8606830197', 'aegisagith1@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `fid` int(100) NOT NULL AUTO_INCREMENT,
  `content` varchar(100) NOT NULL,
  `id` int(11) NOT NULL,
  `Uname` varchar(100) NOT NULL,
  `Rate` varchar(200) NOT NULL,
  PRIMARY KEY (`fid`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fid`, `content`, `id`, `Uname`, `Rate`) VALUES
(6, 'Great Product..Thanks to Habit', 2, 'Aegis', '4.8');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

DROP TABLE IF EXISTS `item`;
CREATE TABLE IF NOT EXISTS `item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `quan` int(10) NOT NULL,
  `price` int(11) NOT NULL,
  `sub_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `pic` varchar(30) NOT NULL,
  `fabric` varchar(20) NOT NULL,
  `color` varchar(20) NOT NULL,
  `pattern` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`),
  KEY `sub_id` (`sub_id`),
  KEY `cat_id` (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=93 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `name`, `quan`, `price`, `sub_id`, `cat_id`, `pic`, `fabric`, `color`, `pattern`) VALUES
(1, 'Van Heusen', 2, 2000, 2, 1, 'images/pw1.jpg', 'polycotton', 'light blue', 'printed'),
(2, 'Pepe Jeans', 8, 1500, 6, 2, 'images/j1.jpg', 'denim', 'navy blue', 'shady'),
(3, 'U.S polo', 5, 700, 8, 3, 'images/ts1.jpg', 'cotton', 'gray', 'solid'),
(4, 'Wrangler', 10, 1000, 7, 2, 'images/j4.jpg', 'denim blend', 'black,gray', 'shady'),
(5, 'Louis Philippe', 4, 900, 1, 1, 'images/ff2.jpg', 'linen', 'gray', 'solid'),
(6, 'Allen Solly', 2, 800, 2, 1, 'images/c1.jpg', 'cotton', 'blue', 'check'),
(7, 'Peter England', 0, 500, 11, 4, 'images/sk5.jpg', 'polycotton', 'navy blue', 'solid'),
(8, 'Denizen', 2, 1000, 4, 1, 'images/d4.jpg', 'linen', 'blue shade', 'solid'),
(9, 'Arrow', 2, 300, 8, 3, 'images/n6.jpg', 'cotton', 'blue,black,white', 'check'),
(10, 'Flying Machine', 4, 1500, 1, 1, 'images/f9.jpg', 'cotton', 'light blue', 'solid'),
(11, 'Allen Solly', 3, 900, 1, 1, 'images/f8.jpg', 'cotton', 'pink', 'solid'),
(12, 'Heisenberg', 2, 750, 1, 1, 'images/f10.jpg', 'cotton', 'white', 'solid'),
(13, 'Tommy Hilfiger', 1, 800, 1, 1, 'images/ff1.jpg', 'linen', 'aqua blue', 'solid'),
(14, 'Classic Polo', 2, 1000, 1, 1, 'images/f11.jpg', 'polycotton', 'magenta', 'solid'),
(15, 'Allen Solly', 2, 2000, 2, 1, 'images/c3.jpg', 'cotton', 'blue,black', 'color blocked'),
(16, 'Louis Philippe', 4, 600, 2, 1, 'images/c5.jpg', 'polycotton', 'white,black', 'check'),
(17, 'Lee', 1, 700, 2, 1, 'images/c4.jpg', 'polyster', 'blue,pink', 'self-design'),
(18, 'Pepe Jeans', 1, 400, 2, 1, 'images/c8.jpg', 'cotton', 'gray', 'color blocked'),
(19, 'U.S polo', 3, 1000, 2, 1, 'images/n2.jpg', 'denim', 'black,red', 'color blocked'),
(20, 'Pepe Jeans', 1, 950, 4, 1, 'images/d9.jpg', 'denim', 'blue', 'shady'),
(21, 'Louis Philippe', 3, 1500, 4, 1, 'images/d8.jpg', 'denim', 'light blue', 'solid'),
(22, 'Denizen', 2, 2000, 4, 1, 'images/d5.jpg', 'denim', 'blue', 'self-design'),
(23, 'U.S polo', 1, 1000, 4, 1, 'images/d3.jpg', 'denim blend', 'dark blue', 'self-design'),
(24, 'Arrow', 2, 800, 4, 1, 'images/d12.jpg', 'denim', 'black', 'shady'),
(25, 'Louis Philippe', 0, 3500, 3, 1, 'images/pw11.jpg', 'linen', 'white', 'printed'),
(26, 'Tommy Hilfiger', 1, 4000, 3, 1, 'images/pw10.jpg', 'cotton', 'blue', 'printed'),
(27, 'Van Heusen', 0, 3000, 3, 1, 'images/pw8.jpg', 'polycotton', 'navy blue', 'self-design'),
(28, 'Lee', 1, 1000, 3, 1, 'images/pw9.jpg', 'cotton', 'blue', 'printed'),
(29, 'Allen Solly', 1, 900, 3, 1, 'images/pw12.jpg', 'cotton', 'black', 'self-design'),
(30, 'Diesel', 2, 1000, 5, 2, 'images/jc1.jpg', 'denim blend', 'blue', 'shady'),
(31, 'Lee', 1, 850, 5, 2, 'images/jc2.jpg', 'denim', 'navy blue', 'solid'),
(32, 'Wrangler', 2, 700, 5, 2, 'images/jc3.jpg', 'denim blend', 'blue', 'shady'),
(33, 'Levi\'s', 2, 900, 5, 2, 'images/jc4.jpg', 'denim', 'blue', 'shady'),
(34, 'Pepe Jeans', 1, 750, 5, 2, 'images/jc5.jpg', 'denim', 'blue', 'solid'),
(35, 'Denizen', 1, 999, 5, 2, 'images/jc6.jpg', 'denim', 'black', 'shady'),
(36, 'Vintage', 1, 1200, 6, 2, 'images/jd2.jpg', 'denim blend', 'black', 'self-design'),
(37, 'Tommy Hilfiger', 3, 1000, 6, 2, 'images/j2.jpg', 'denim', 'blue', 'solid'),
(38, 'Spykar', 2, 1500, 6, 2, 'images/j3.jpg', 'denim blend', 'blue', 'solid'),
(39, 'Trigger', 1, 1000, 6, 2, 'images/jd6.jpg', 'denim', 'light blue', 'self-design'),
(40, 'Denizen', 2, 700, 6, 2, 'images/jj1.jpg', 'denim', 'blue', 'self-design'),
(41, 'Pepe Jeans', 1, 800, 7, 2, 'images/js2.jpg', 'polycotton', 'black', 'solid'),
(42, 'Diesel', 3, 1300, 7, 2, 'images/js3.jpg', 'denim blend', 'blue,black', 'solid'),
(43, 'Spykar', 1, 850, 7, 2, 'images/js4.jpg', 'denim', 'blue', 'solid'),
(44, 'Pepe Jeans', 3, 900, 7, 2, 'images/js5.jpg', 'denim', 'blue', 'solid'),
(45, 'Lee', 2, 1100, 7, 2, 'images/js6.jpg', 'denim blend', 'gray', 'shady'),
(46, 'Arrow', 2, 700, 8, 3, 'images/tc1.jpg', 'cotton', 'black', 'solid'),
(47, 'puma', 3, 400, 8, 3, 'images/tc4.jpg', 'cotton', 'pink', 'solid'),
(48, 'Nike', 1, 600, 8, 3, 'images/tc5.jpg', 'polycotton', 'white', 'solid'),
(49, 'Adidas', 3, 800, 8, 3, 'images/tc6.jpg', 'cotton blend', 'blue,white', 'self-design'),
(50, 'Flying Machine', 1, 700, 9, 3, 'images/tf1.jpg', 'cotton', 'black', 'solid'),
(51, 'Peter England', 3, 550, 9, 3, 'images/tf2.jpg', 'cotton', 'black,white', 'solid'),
(52, 'U.S polo', 2, 700, 9, 3, 'images/tf3.jpg', 'cotton', 'gray', 'solid'),
(53, 'Arrow', 1, 900, 9, 3, 'images/tf4.jpg', 'cotton blend', 'blue shade', 'self-design'),
(54, 'Flying Machine', 1, 500, 9, 3, 'images/tf5.jpg', 'twill', 'blue,red', 'self-design'),
(55, 'U.S polo', 1, 1000, 9, 3, 'images/tf6.jpg', 'cotton blend', 'blue shade', 'self-design'),
(56, 'Puma', 2, 450, 10, 3, 'images/ts2.jpg', 'polycotton', 'green', 'solid'),
(57, 'Arrow', 3, 750, 10, 3, 'images/ts3.jpg', 'cotton', 'red', 'solid'),
(58, 'Allen Solly', 4, 700, 10, 3, 'images/ts4.jpg', 'cotton blend', 'aqua blue', 'solid'),
(59, 'U.S polo', 2, 800, 10, 3, 'images/ts5.jpg', 'cotton', 'black', 'solid'),
(60, 'Adidas', 1, 700, 10, 3, 'images/ts6.jpg', 'cotton', 'dark blue', 'solid'),
(61, 'Flying Machine', 3, 500, 10, 3, 'images/ts8.jpg', 'cotton blend', 'violet', 'solid'),
(62, 'Raymond', 2, 1000, 11, 4, 'images/ca6.jpg', 'ryon', 'blue', 'solid'),
(63, 'Pepe Jeans', 1, 800, 11, 4, 'images/ca7.jpg', 'polycotton', 'black', 'solid'),
(64, 'Park Avenue', 2, 1500, 11, 4, 'images/ca9.jpg', 'ryon', 'blue', 'self-design'),
(65, 'U.S polo', 1, 1200, 11, 4, 'images/ca11.jpg', 'cotton', 'light pink', 'solid'),
(66, 'Van Heusen', 1, 1700, 11, 4, 'images/ca12.jpg', 'ryon', 'gray', 'self-design'),
(67, 'Tommy Hilfiger', 3, 750, 12, 4, 'images/cpa2.jpg', 'cotton', 'green shade', 'solid'),
(68, 'Levi\'s', 2, 800, 12, 4, 'images/cpa3.jpg', 'cotton', 'black', 'solid'),
(69, 'BASICS', 3, 1100, 12, 4, 'images/cpa5.jpg', 'polycotton', 'black', 'solid'),
(70, 'Allen Solly', 1, 1000, 12, 4, 'images/cpa7.jpg', 'cotton', 'cream', 'solid'),
(71, 'Park Avenue', 1, 950, 12, 4, 'images/cpa9.jpg', 'cotton', 'blue', 'self-design'),
(72, 'Arrow', 1, 700, 12, 4, 'images/cpa10.jpg', 'ryon', 'gray', 'self-design'),
(73, 'Flying Machine', 3, 950, 13, 4, 'images/jo1.jpg', 'dobby', 'gray', 'solid'),
(74, 'MAX', 4, 800, 13, 4, 'images/jo2.jpg', 'cotton', 'black', 'self-design'),
(75, 'Arrow', 2, 750, 13, 4, 'images/jo3.jpg', 'polycotton', 'blue', 'self-design'),
(76, 'Flying Machine', 2, 500, 13, 4, 'images/jo4.jpg', 'cotton', 'black', 'self-design'),
(77, 'BASICS', 3, 950, 13, 4, 'images/jo5.jpg', 'cotton', 'grey', 'solid'),
(78, 'Allen Solly', 3, 700, 13, 4, 'images/jo9.jpg', 'dobby', 'blue', 'solid'),
(85, 'Men Cargo', 10, 1200, 10, 4, 'images/a4.jpg', 'Cotton', 'Dark Brown', 'Solid'),
(86, 'Finite Cargo', 6, 800, 10, 4, 'images/a6.jpg', 'Cotton', 'Light Brown', 'Solid'),
(87, 'Arizona Cargo', 7, 700, 10, 4, 'images/a5.jpg', 'Cotton', 'Beige', 'Solid'),
(88, 'Denim T-Shirts', 9, 400, 7, 3, 'images/a3.jpg', 'Cotton', 'Black', 'Plain'),
(89, 'Jockey T-Shirts', 8, 600, 7, 3, 'images/a2.jpg', 'Cotton', 'Greyish Black', 'Solid'),
(90, 'Puma T-Shirt', 6, 700, 7, 3, 'images/a1.jpg', 'Cotton', 'Maroon', 'Plain');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `type` varchar(10) NOT NULL,
  `status` varchar(5) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `type`, `status`) VALUES
('admin', 'admin', 'admin', '1'),
('Aegis', '1234', 'user', '1'),
('Akshaye', '1234', 'user', '1'),
('Alen', '4321', 'employee', '0'),
('Align', '9876', 'user', '0'),
('Athul.vj', '12345', 'user', '0'),
('Gokul', '4321', 'user', '0'),
('hai', '123', 'user', '0'),
('Jessy', '987', 'employee', '0'),
('photo', '123', 'user', '0');

-- --------------------------------------------------------

--
-- Table structure for table `myorder`
--

DROP TABLE IF EXISTS `myorder`;
CREATE TABLE IF NOT EXISTS `myorder` (
  `Uname` varchar(20) NOT NULL,
  `order_id` varchar(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `quan` varchar(11) NOT NULL,
  `price` varchar(11) NOT NULL,
  `pic` varchar(30) NOT NULL,
  `order_date` date NOT NULL,
  `order_status` varchar(20) NOT NULL,
  `order_price` varchar(11) NOT NULL,
  `del_type` varchar(15) NOT NULL,
  PRIMARY KEY (`order_id`),
  KEY `Uname` (`Uname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `myorder`
--

INSERT INTO `myorder` (`Uname`, `order_id`, `name`, `quan`, `price`, `pic`, `order_date`, `order_status`, `order_price`, `del_type`) VALUES
('Akshaye', '4721', ' Allen Solly', '1', '800', ' images/c1.jpg', '2019-12-14', 'Packed', '800', 'In Shop'),
('Aegis', '4742', 'Allen Solly', '1', '800', 'images/c1.jpg', '2019-12-15', 'Ordered', '860', 'Home Delivery'),
('Athul.vj', '7849', ' Wrangler', '1', '1000', ' images/j4.jpg', '2019-12-14', 'Ordered', '1000', 'In Shop'),
('Align', '8944', ' Pepe Jeans', '1', '1500', ' images/j1.jpg', '2019-12-14', 'Ordered', '1560', 'Home Delivery');

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

DROP TABLE IF EXISTS `offers`;
CREATE TABLE IF NOT EXISTS `offers` (
  `offerid` int(20) NOT NULL AUTO_INCREMENT,
  `offerprice` varchar(20) NOT NULL,
  `offerdiscount` varchar(20) NOT NULL,
  `offeritem` varchar(20) NOT NULL,
  `id` int(11) NOT NULL,
  PRIMARY KEY (`offerid`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`offerid`, `offerprice`, `offerdiscount`, `offeritem`, `id`) VALUES
(1, '750', '50', 'images/f11.jpg', 14),
(2, '450', '50', 'images/ff2.jpg', 5),
(3, '750', '50', 'images/ca9.jpg', 64),
(4, '500', '50', 'images/pw9.jpg', 28);

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

DROP TABLE IF EXISTS `reg`;
CREATE TABLE IF NOT EXISTS `reg` (
  `Uname` varchar(20) NOT NULL,
  `Pass` varchar(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Phone` varchar(10) NOT NULL,
  `Image` varchar(30) NOT NULL,
  PRIMARY KEY (`Uname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`Uname`, `Pass`, `Email`, `Gender`, `Phone`, `Image`) VALUES
('Aegis', '1234', 'aegisagith1@gmail.com', 'Male', '8606830197', 'avatar/Aegis.jpg'),
('Akshaye', '1234', 'akshaye21@gmail.com', 'Female', '8765321561', 'avatar/Akshaye.jpg'),
('Align', '9876', 'alignagith@gmail.com', 'Female', '9387206533', 'avatar/Align.jpg'),
('Athul.vj', '12345', 'athulvarghesejuby882@gmail.com', 'Male', '6238280217', 'avatar/default.jpg'),
('Gokul', '4321', 'gokul12@gmail.com', 'Male', '9876543210', 'avatar/Gokul.jpg'),
('hai', '123', 'asd@gmail.com', 'Female', '1234567', 'avatar/default.jpg'),
('photo', '123', 'Ichan@yahoo.co.in', 'Male', '12345', 'avatar/photo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

DROP TABLE IF EXISTS `sub_category`;
CREATE TABLE IF NOT EXISTS `sub_category` (
  `sub_id` int(11) NOT NULL AUTO_INCREMENT,
  `sub_name` varchar(20) NOT NULL,
  `cat_id` int(11) NOT NULL,
  PRIMARY KEY (`sub_id`),
  KEY `cat_id` (`cat_id`),
  KEY `sub_id` (`sub_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`sub_id`, `sub_name`, `cat_id`) VALUES
(1, 'Formal', 1),
(2, 'Casual', 1),
(3, 'Party Wear', 1),
(4, 'Denim', 1),
(5, 'Skinny', 2),
(6, 'Solid', 2),
(7, 'V Neck', 3),
(8, 'Half Sleeve', 3),
(9, 'Full Sleeve', 3),
(10, 'Cargo', 4),
(11, 'Formal', 4),
(12, 'Casual', 4),
(13, 'Jogger', 4);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

DROP TABLE IF EXISTS `supplier`;
CREATE TABLE IF NOT EXISTS `supplier` (
  `SUPPLIER_ID` int(10) NOT NULL AUTO_INCREMENT,
  `SUPPLIER_NAME` varchar(30) NOT NULL,
  `HOUSE_NUMBER` varchar(20) NOT NULL,
  `STREET_NAME` varchar(20) NOT NULL,
  `STREET_TYPE` varchar(20) NOT NULL,
  `POST_OFFICE` varchar(20) NOT NULL,
  `CONTACT` varchar(10) NOT NULL,
  `EMAIL` varchar(40) NOT NULL,
  PRIMARY KEY (`SUPPLIER_ID`),
  KEY `SUPPLIER_ID` (`SUPPLIER_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=127 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`SUPPLIER_ID`, `SUPPLIER_NAME`, `HOUSE_NUMBER`, `STREET_NAME`, `STREET_TYPE`, `POST_OFFICE`, `CONTACT`, `EMAIL`) VALUES
(1, 'APL Distributors', '102', 'Palarivattom', 'Ernakulam', 'Edappally P.O', '9876543210', 'apl@gmail.com'),
(2, 'Mahima Textiles', '321', 'Sreekariyam', 'Pothencode', 'Powdikkonam P.O', '9980505815', 'mahimatext@gmail.com'),
(3, 'Fab Distributors', '23', 'Airport Road', 'Kochi university', 'Kalamassery P.O', '776', 'fdistributors@gmail.com'),
(125, 'Hot \'n Cool', '145/F', 'Opp.12to12', 'Main Road', 'Kottayam P.O', '8866753102', 'hotcool@gmail.com');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `address_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `myorder` (`order_id`);

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`Uname`) REFERENCES `reg` (`Uname`),
  ADD CONSTRAINT `cart_ibfk_3` FOREIGN KEY (`item_id`) REFERENCES `item` (`id`);

--
-- Constraints for table `category`
--
ALTER TABLE `category`
  ADD CONSTRAINT `category_ibfk_1` FOREIGN KEY (`SUPPLIER_ID`) REFERENCES `supplier` (`SUPPLIER_ID`);

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`id`) REFERENCES `item` (`id`);

--
-- Constraints for table `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `item_ibfk_3` FOREIGN KEY (`cat_id`) REFERENCES `category` (`cat_id`),
  ADD CONSTRAINT `item_ibfk_4` FOREIGN KEY (`sub_id`) REFERENCES `sub_category` (`sub_id`);

--
-- Constraints for table `myorder`
--
ALTER TABLE `myorder`
  ADD CONSTRAINT `myorder_ibfk_1` FOREIGN KEY (`Uname`) REFERENCES `reg` (`Uname`);

--
-- Constraints for table `offers`
--
ALTER TABLE `offers`
  ADD CONSTRAINT `offers_ibfk_1` FOREIGN KEY (`id`) REFERENCES `item` (`id`);

--
-- Constraints for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD CONSTRAINT `sub_category_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `category` (`cat_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
