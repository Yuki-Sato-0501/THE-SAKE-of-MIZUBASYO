-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 29, 2021 at 01:23 PM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kredo_it_abroad`
--
CREATE DATABASE IF NOT EXISTS `kredo_it_abroad` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `kredo_it_abroad`;

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `salary` int(11) NOT NULL,
  `department` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `first_name`, `last_name`, `salary`, `department`) VALUES
(1, 'Johon', 'Davis', 20500, 'Audit'),
(2, 'JACK', 'DAWSON', 32000, 'LEGAL'),
(3, 'Janet', 'Jackson', 23000, 'Audit'),
(4, 'Rose', 'Bukater', 40500, 'Technology'),
(5, 'Emily', 'Jackson', 30000, 'Legal'),
(6, 'Jack', 'Smith', 21000, 'Human Resource');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Database: `kredo_school`
--
CREATE DATABASE IF NOT EXISTS `kredo_school` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `kredo_school`;

-- --------------------------------------------------------

--
-- Table structure for table `mtStudents`
--

CREATE TABLE `mtStudents` (
  `id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mtStudents`
--

INSERT INTO `mtStudents` (`id`, `first_name`, `last_name`, `email`) VALUES
(1, 'Yuki', 'Sato', 'yukisato@icloud.com'),
(2, 'Naoko', 'Yamaguchi', 'Ms.naoko@gmail.com'),
(3, 'Yuki', 'Iwasaki', 'yuki-iwasaki@gmail.com'),
(21, 'test', 'test', 'test@icloud.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mtStudents`
--
ALTER TABLE `mtStudents`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mtStudents`
--
ALTER TABLE `mtStudents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- Database: `library_pm`
--
CREATE DATABASE IF NOT EXISTS `library_pm` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `library_pm`;

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `book_id` int(11) NOT NULL,
  `book_name` varchar(100) NOT NULL,
  `book_genre` varchar(100) NOT NULL,
  `book_author` varchar(100) NOT NULL,
  `date_added` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `book_name`, `book_genre`, `book_author`, `date_added`) VALUES
(4, 'Lemon', 'sad', 'yonezu', '2021-03-09'),
(6, 'Hakujitu', 'sad', 'Kingnu', '2021-03-09'),
(7, 'Alone', 'happy', 'ba', '2021-03-10'),
(8, 'sample', 'happy', 'Kingnu', '2021-03-09'),
(9, 'sample', 'sample', 'sampl[e', '2021-03-09'),
(10, 'hey there delilah', 'sad', 'sad', '2021-03-10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Database: `Sake Library`
--
CREATE DATABASE IF NOT EXISTS `Sake Library` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `Sake Library`;
--
-- Database: `SAKE_database`
--
CREATE DATABASE IF NOT EXISTS `SAKE_database` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `SAKE_database`;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `sake_id` int(11) NOT NULL,
  `sake_name` varchar(100) NOT NULL,
  `sake_price` varchar(100) NOT NULL,
  `sake_stock` varchar(100) NOT NULL,
  `sake_detail` varchar(1000) NOT NULL,
  `sake_img` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`sake_id`, `sake_name`, `sake_price`, `sake_stock`, `sake_detail`, `sake_img`) VALUES
(26, 'MIZUBASYO PREMIUM', '12000', '100', ' Aiming for the ultimate Junmai Daiginjo, sake brewed with the highest specifications. Please enjoy the techniques that have been handed down for many years and the harmony of water and rice. The gorgeous scent is reminiscent of lychee and passion fruit, and is characterized by an elegant taste.\r\n                    ', 'premium.png'),
(27, 'Mizubasyo Original', '5500', '100', 'The contract ice rice Yamada Nishiki is used 100%, and there is the taste of Oze\'s nature and climate.', 'daiginjyo.png'),
(28, 'Mizubasyo \"SUI\" -翠-', '3200', '100', 'The taste most associated with the flowers of skunk cabbage. The soft and gentle flavors of white peach and pear wrap the heart of the drinker. Please enjoy with a wine glass etc.', 'sui.png'),
(29, 'Junmai Ginjyo ', '2600', '100', 'Contract-grown rice Yamada Nishiki\'s rice flavor is condensed into this gem. We will wrap it while enhancing the taste of various dishes. You can enjoy it chilled in a wine glass or cooked.', 'jyunmaiginjyo.png'),
(30, 'Ginjyo ', '2200', '100', 'While expressing the profound characteristics of contract-grown rice Yamada Nishiki, it is characterized by its elegant and sharp taste. You can enjoy it chilled in a wine glass or cooked.', 'ginjyo.png'),
(31, 'Mizubasho - PURE Sparkling', '2000', '100', 'The sake that became the basis for the development of MIZUBASHO PURE. Sparkling sake with fine bubbles that makes the cage look like a white fairy. A dry and elegant liquor. Enjoy with flute glass.', 'spicysparkling.png'),
(33, 'Mizubasyo AMAZAKE -甘酒-', '1500', '100', 'Using 100% Yamada Nishiki, the king of sake rice, we made the best use of the technique of ginjo brewing to maximize the flavor of Jiuqu. The refreshing and elegant sweetness is recommended for summer nutrition.', 'amazake.png'),
(34, 'YUKIHOTAKA -雪ほたか-', '5000', '100', ' The phantom rice \"Yukihotaka\" in Kawaba Village is a rice that is filled with the passion, dreams, and hopes of everyone in Kawaba Village, where all of nature such as sunlight, natural water, and climate is condensed. With that in mind, Mizubasho Yukihotaka Junmai Daiginjo was born. We will disseminate it to the world as a new product of Kawaba Village.\r\n                    ', 'yukihotaka.png'),
(35, 'Mizubasyo AMAZAKE -甘酒-', '2000', '100', ' This is Amazake\r\n                    ', 'vintage.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone_number` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `email`, `password`, `phone_number`, `address`) VALUES
(1, 'Yuki Sato', 'yukisato@gmail.com', 'yukisato', '120-3333', 'tokyo meguro 222'),
(2, 'manami onizawa', 'manami@gmail.com', 'manami', '123-333', 'tokyo oshiage'),
(3, 'satoyuki_chan', 'satoyukichan@gmail.com', 'yukichan', '090-0099-090', 'edogawa'),
(4, 'satoyuki_chan', 'satoyukichan@gmail.com', 'yukichan', '090-0099-090', 'edogawa'),
(5, 'satoyuki_chan', 'satoyukichan@gmail.com', 'yukichan', '090-0099-090', 'edogawa'),
(6, 'satoyuki_chan', 'satoyukichan@gmail.com', 'yukichan', '090-0099-090', 'edogawa'),
(7, 'yuki sato', 'yuki@gmail.com', 'sato', '08008080808', 'shibuya');

-- --------------------------------------------------------

--
-- Table structure for table `user_cart`
--

CREATE TABLE `user_cart` (
  `cart_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `total` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_cart`
--

INSERT INTO `user_cart` (`cart_id`, `product_name`, `price`, `quantity`, `total`, `user_id`) VALUES
(1, 'MIZUBASYO PREMIUM-純米大吟醸Premiun-', '10000', '3', '30000', 2),
(3, 'Mizubasyo Original -純米大吟醸-', '7000', '5', '35000', 2),
(5, 'Mizubasyo Original -純米大吟醸-', '7000', '5', '35000', 3),
(7, 'Mizubasyo ', '3200', '10', '32000', 2),
(8, 'Mizubasyo ', '3200', '10', '32000', 3),
(15, 'MIZUBASYO PREMIUM', '12000', '1', '12000', 1),
(16, 'MIZUBASYO PREMIUM', '12000', '1', '12000', 1),
(17, 'MIZUBASYO PREMIUM', '12000', '1', '12000', 1),
(18, 'MIZUBASYO PREMIUM', '12000', '1', '12000', 1),
(19, 'MIZUBASYO PREMIUM', '12000', '2', '24000', 1),
(20, 'YUKIHOTAKA -雪ほたか-', '5000', '2', '10000', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`sake_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_cart`
--
ALTER TABLE `user_cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `sake_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_cart`
--
ALTER TABLE `user_cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- Database: `sample`
--
CREATE DATABASE IF NOT EXISTS `sample` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `sample`;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
