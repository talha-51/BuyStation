-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2023 at 07:27 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buy_station`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `employee_id` int(11) NOT NULL,
  `employee_username` varchar(11) NOT NULL,
  `employee_password` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`employee_id`, `employee_username`, `employee_password`) VALUES
(1, 'emp1', 'emp#1'),
(2, 'emp2', 'emp#2');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(30) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_details` varchar(300) NOT NULL,
  `thumbnail_image` varchar(30) NOT NULL,
  `product_image1` varchar(30) NOT NULL,
  `product_image2` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_price`, `product_details`, `thumbnail_image`, `product_image1`, `product_image2`) VALUES
(13, 'Samsung Galaxy S23 Ultra', 235999, 'Dimensions: 78.1x163.4 x 8.9 mm. Weight: 233g. Display: 6.8” Quad HD+ Dynamic AMOLED 2X Infinity-O Display. Chipset: Qualcomm SM8550-AC Snapdragon 8 Gen 2 (4 nm). GPU: Adreno 740 OS. Android 13, Sensors: Fingerprint (under display, ultrasonic). Battery: Li-Ion 5000 mAh. Fast charging 45W', 'images/1702057960-1.png', 'images/1702057960-2.jpg', 'images/1702057960-3.png'),
(14, 'Apple iPhone 15', 200000, 'The iPhone 15 display has rounded corners that follow a beautiful curved design, and these corners are within a standard rectangle. When measured as a standard rectangular shape, the screen is 6.12 inches diagonally (actual viewable area is less).', 'images/1702058184-1.jpg', 'images/1702058184-2.jpg', 'images/1702058184-3.jpg'),
(15, 'Nothing Phone (2)', 100000, 'Uniquely designed Nothing OS 2.0 New Glyph Interface  50 MP dual rear camera + 32 MP front camera  6.7” flexible LTPO AMOLED display  Snapdragon® 8+ Gen 1', 'images/1702058544-1.jpg', 'images/1702058544-2.png', 'images/1702058544-3.png'),
(16, 'OnePlus 9', 90000, 'The smartphone is powered by Qualcomm SM8350 Snapdragon 888 Octa-core and it comes with 6.55 inches Fluid AMOLED screen. The resolution of the screen is 1080 x 2400 pixels while it is protected by Corning Gorilla Glass.', 'images/1702058796-1.jpg', 'images/1702058796-2.png', 'images/1702058796-3.jpg'),
(17, 'Xiaomi Redmi Note 12', 21499, 'With the 4G version of the most affordable Redmi Note 12 this year out of the way, it\'s time to take time to know the 5G alteration as well. The thing is, the Redmi Note 12 4G and Note 12 5G employ different hardware so the user experience might vary quite a bit. It\'s not just the 5G part.', 'images/1702058954-1.png', 'images/1702058954-2.jpg', 'images/1702058954-3.png'),
(18, 'Xinmeng M87 Royal Purple', 4500, '-5pin hotswap -South facing Led, full RGB with driver support -5layers of sound dampening  -PBT double shot keycaps', 'images/1702059031-1.jpg', 'images/1702059031-2.jpg', 'images/1702059031-3.jpg'),
(19, 'Leobog Hi75', 65000, '>hi75 barebone >Akko starry night keycaps >Leobog Ice soul switch >stock config and no mod is done', 'images/1702059221-1.jpg', 'images/1702059221-2.jpg', 'images/1702059221-3.jpg'),
(20, 'Logitech G102', 2100, 'Make the most of play time with G102—a gaming mouse in a variety of vibrant colors. With LIGHTSYNC technology, a gaming-grade sensor and a classic 6-button design, you’ll light up your game and your desk', 'images/1702059405-1.jpg', 'images/1702059405-2.png', 'images/1702059405-3.jpg'),
(21, 'Fantech HG11 Captain', 2650, 'Fantech HG11 Captain 7.1 Surround Sound Space Edition RGB USB Gaming Headphone White has a Mic size of 6.0*5MM and sensitivity of -40dB +/- 3 dB and Frequency of 50- 10KHz. The Mic is Omni Directional meaning that you can speak from any direction and it will be heard.', 'images/1702059606-1.jpg', 'images/1702059606-2.jpg', 'images/1702059606-3.jpg'),
(22, 'NZXT H510 ELITE', 12600, 'This compact mid-tower is ideal for highlighting RBG-focused builds with a front tempered glass panel that showcases included Aer 2 RGB fans along with the easy-to-build-in features of the H510.', 'images/1702059802-1.png', 'images/1702059802-2.jpg', 'images/1702059802-3.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
