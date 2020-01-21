-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2019 at 10:25 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mycartshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_active` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `is_active`) VALUES
(8, 'MAHAN MALPORU', 'mahan.navidu@gmail.com', '$2y$10$hfoV9/ecuoz969dj1qVj7uNukIQq5/sbCpt3H55AA2qiuRapdv9Ju', '0'),
(9, 'Ganidu', 'ganidu@gmail.com', '$2y$10$hhhONgIxfCNG6uwIDLvQTe/ULeNnd50AlP1lcK/8V6XXR7/L3TIri', '0'),
(10, 'Ruwan', 'ruwan@gmail.com', '$2y$10$za57l/qwqSh0saKZyV1WJOMU3/4PPav3lAgcI1zuk/pASzK5WIRJK', '0'),
(11, 'Uvindu', 'uvindu@gmail.com', '$2y$10$D4qLa9tr/HvI0I0DjTb1BOis4OcURx6pUTflfRbdce7d1RWKLZKvu', '0'),
(12, 'ion', 'jenisha@gmail.com', '$2y$10$4bckIwpnL.OH7g4AYxAqMOCHpbBCHBTlGdTmKF/qQa0WQjkzS5/ka', '0'),
(13, 'Sarath', 'sarath@gmail.com', '$2y$10$BodgjHuOJRRlVURSVVMDpurJzdqnX8.q.xqwD3xeO.LmUHsLyHap6', '0'),
(14, 'uijiij', 'ihihn', '$2y$10$1Sa4vAlKQpgBWaMD1qWcVO89v3n6/F8ctsF5iMG5bLCuIxhhTZQKq', '0');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE IF NOT EXISTS `brands` (
  `brand_id` int(100) NOT NULL AUTO_INCREMENT,
  `brand_title` text NOT NULL,
  PRIMARY KEY (`brand_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES
(1, 'HP'),
(2, 'Samsung'),
(3, 'Apple'),
(4, 'Sony'),
(5, 'LG'),
(6, 'Adidas'),
(7, 'Bagatt'),
(8, 'Boss Hugo Boss'),
(9, 'Baby cloths'),
(10, 'Spirit'),
(11, 'Mens Cloths'),
(12, 'Women Cloths'),
(13, 'Lenova'),
(14, 'furnitures'),
(18, 'Canon');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(250) NOT NULL,
  `user_id` int(10) DEFAULT NULL,
  `qty` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=139 ;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `p_id`, `ip_add`, `user_id`, `qty`) VALUES
(110, 1, '::1', 9, 1),
(111, 2, '::1', 9, 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `cat_id` int(100) NOT NULL AUTO_INCREMENT,
  `cat_title` text NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(2, 'Ladies Wears'),
(3, 'Mens Wears'),
(4, 'Kids Wears'),
(5, 'Furnitures'),
(6, 'Home Appliances'),
(10, 'Electronics'),
(12, 'Mobile Phones');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `trx_id` varchar(255) NOT NULL,
  `p_status` varchar(20) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int(100) NOT NULL AUTO_INCREMENT,
  `product_cat` int(11) NOT NULL,
  `product_brand` int(100) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_price` varchar(255) NOT NULL,
  `product_qty` int(11) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` text NOT NULL,
  `product_keywords` text NOT NULL,
  PRIMARY KEY (`product_id`),
  KEY `fk_product_cat` (`product_cat`),
  KEY `fk_product_brand` (`product_brand`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_cat`, `product_brand`, `product_title`, `product_price`, `product_qty`, `product_desc`, `product_image`, `product_keywords`) VALUES
(1, 12, 2, 'Samsung Galaxy S10', '10000', 50, 'Its a good phone', '1552670517_sumsung galaxy s8.png', 'samsung, mobile, galaxy'),
(2, 12, 3, 'Iphone 7 plus', '40000', 5000, 'Iphone is a good phone', '1552670718_iphone-7-plus.jpg', 'apple, iphone, mobile'),
(4, 12, 2, 'Samsung Galaxy S6', '5000', 100, 'Samsung is a good phone', '1552670857_samsung galaxy s6.jpg', 'samsung, mobile, s6'),
(5, 12, 2, 'Samsung Galaxy S10', '5000', 5000, 'Samsung Galaxy S10', '1552671096_7-2-samsung-mobile-phone-png-clipart-thumb.png', 'samsung, mobile, s10'),
(6, 4, 9, 'Yellow child cloth', '400', 7, 'Yellow shirt, trouser and pair of shoes', '1.0x0.jpg', 'Yellow shirt, trouser and pair of shoes,match for young ages'),
(7, 3, 10, 'Mens Trouser', '800', 10, 'silver color long trouser', '41OJZebRUoL._SL246_SX190_CR0,0,190,246_.jpg', 'Silver color long trouser for man'),
(8, 3, 11, 'Winter Swater for men for better look', '1000', 23, 'Winter Sweater for better outlook for modern gensis', '2012-Winter-Sweater-for-Men-for-better-outlook.jpg', 'winter swater for using winter session and handsome outlook.Winter swater for men for better outlook'),
(10, 10, 13, 'Lenova Laptop', '2500', 2, 'Lenova 8 th gen laptop i9 processor for gsming ', '12039452_525963140912391_6353341236808813360_n.png', 'lenovo laptop for gaming windows 10 operating system '),
(11, 10, 1, 'Usb port pc controlling mouse', '144', 34, 'easy for controlling mouse very expensive hp brand mouse', '1551984873_c03330229.png', 'electroni hp brand mouse'),
(12, 12, 12, 'Samsung galaxy s8', '600', 34, 'Samsung Galaxy s8 2gb ram,16px camera,android nouget version mobile phone', '1552670517_sumsung galaxy s8.png', 'samsung galaxy s'),
(14, 10, 2, 'Samsung Galaxy S6', '800', 45, 'Samasung Galaxy S6 ', '1552670857_samsung galaxy s6.jpg', 'samsung Galaxy S6'),
(15, 5, 14, 'Dining Furnitures', '2000', 8, 'Four confortabl cushion work and varnish painted round table and carbord.', 'amer-furniture.jpg', 'amer furnitures for sweet home furnitures applience'),
(17, 5, 14, 'Full Bed for bedroom furnitures', '3000', 5, 'Full bed for sweet home applience', 'bedroom-furniture-250x250.jpg', 'full bed for bedroom furnitures'),
(18, 5, 14, 'cache furnitures for twin for home bed room furntures', '1000', 5, 'twin bed for sweet home applience', 'cache-furnitures-ltd-cot-j6619q-wos-60x75.jpg', 'twin bed for cache furnitures'),
(19, 10, 4, 'Sony DSLR Camera', '600', 7, 'Sony alpha s75 Mark 11 (with 18-135mm Lens ILCA-68M)', 'camera.jpg', 'Sony Powerful Alpha lens camera '),
(20, 6, 5, 'Electronic dual freezer fridge', '2599', 8, 'Keep your food and beverages fresh for longer on the LG 570L Slim Fresh door fridge with ice and water Dispencer ', 'CT_WM_BTS-BTC-AppliancesHome_20150723.jpg', 'Keep your food and beverages fresh for longer on the LG 570L Slim Fresh door fridge with ice and water Dispencer '),
(21, 4, 9, 'Kurutha Shirt and trousers', '300', 23, 'Many color your want select and buy in this brand for childrens', 'download.jpg', 'Kurutha Shirt and trousers'),
(22, 6, 4, 'Emergency Light', '500', 67, 'Expensive Emergency Light for better hoe conditions', 'emergency light.jpg', 'emergency light'),
(24, 3, 8, 'Gents party wear suits', '1500', 6, 'Mens party jackets', 'gents-party-wear-suits-500x500.jpg', 'gents wear'),
(25, 4, 10, 'Flowers added girls wear', '300', 56, 'girls kid wear', 'GirlsClothing_Widgets.jpg', 'Girls cloth'),
(26, 2, 12, 'girls Skirts', '300', 45, 'girls walking skirts', 'girl-walking.jpg', 'girl walking'),
(27, 4, 9, 'smart Kids shirts', '400', 23, 'childs wears', 'image28.jpg', 'kids wears'),
(28, 3, 8, 'winter fashion men burst sweater', '200', 12, 'mens winter burst sweater', 'Winter-fashion-men-burst-sweater.png', 'winter men jackets'),
(29, 5, 14, 'storage cot wardrobes doors office furnitures', '3456', 33, 'Home furnitures', 'storage-cot-wardrobes-doors-office-furnitures-250x250.png', 'home furnitures'),
(30, 10, 18, 'Canon', '24433', 23, 'Canon caemra', 'download (1).jpg', 'camera');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE IF NOT EXISTS `supplier` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `supplier_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` int(15) NOT NULL,
  `country` varchar(50) NOT NULL,
  `address_1` varchar(255) NOT NULL,
  `address_2` varchar(255) NOT NULL,
  `age` int(3) NOT NULL,
  `profile_image` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id`, `supplier_name`, `email`, `phone_number`, `country`, `address_1`, `address_2`, `age`, `profile_image`) VALUES
(1, 'Mahan Navidu', 'mahan.navidu@gmail.com', 987654321, 'Sri Lanka', '140/2,Udurwana,Wattegam', 'Wattegama', 45, 'gents-formal-250x250.jpg'),
(2, 'tharindu', 'thrindu@gmail.com', 134567890, 'Sri Lanka', '143/6,indigama,Wattegama', 'Wattegama', 34, 'shortname.jpg'),
(3, 'dgfwgrg', 'sdfdf@gmail.com', 343122342, 'Rumaniya', '34/687,perl road,united palce,rumw', 'rumw', 34, 'kids-wear-121.jpg'),
(4, 'asdafasafa', 'asdsadd@gmail.com', 234235324, 'India', '23/45,Manin Street,Dilhi', 'Dilhi', 23, 'red dress.jpg'),
(5, '23', 'wewawdwd@gmail.com', 345645667, 'Sri Lanka', '12/34,yutytr,asff', 'efrwefwe', 33, 'shortname.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE IF NOT EXISTS `user_info` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `address1` varchar(300) NOT NULL,
  `address2` varchar(11) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `first_name`, `last_name`, `email`, `password`, `mobile`, `address1`, `address2`) VALUES
(3, 'MAHAN', 'MALPORU', 'mahan.navidu@gmail.com', '38605936583282b9ea93698c8de1f9a0', '0712192296', '140/2,Udurawana,Wattegama', 'Wattegama'),
(4, 'Danushka', 'Silva', 'danushka.silva@gmail.com', '95d9cd510c469c78e1068fc8d8d49ff5', '0368265789', '23/A,Openage Road,Ohia', 'Ohia'),
(5, 'Jehan', 'Rambukwela', 'jehan.kalu@gmail.com', 'ea4ce35c2860112178e8ae2285579919', '9987654321', '34/90/A,Theldeniya Road,Madawala', 'kandy'),
(6, 'Ruwan', 'Ranaweera', 'ruwan.ranaweera@gmail.com', 'c0f81b42d6f3769b032f5fc427f2f42e', '2334445343', '23/45A,yatawara,Wattegama', 'Wattegama'),
(7, 'Jehan', 'Rathnayaka', 'jehan.rathnayaka@gmail.com', '1b2de2499e5f93e00a5a90e79a9da4b1', '7856452333', '45/67/A.,Aruppola Mw,Polgolla', 'Kandy'),
(8, 'Ranul', 'Wikramasigha', 'ranul@gmail.com', 'b94fae78500ba485282ea6fdb2e4a124', '4545454545', '34/78/AB,orange park,welawatta', 'welawatta'),
(9, 'Dilshan', 'Krau', 'dilshan.karu@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f', '5634234456', '140/2,Udurawana,Wattegama', 'Wattegama');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_product_brand` FOREIGN KEY (`product_brand`) REFERENCES `brands` (`brand_id`),
  ADD CONSTRAINT `fk_product_cat` FOREIGN KEY (`product_cat`) REFERENCES `categories` (`cat_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
