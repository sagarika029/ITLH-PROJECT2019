-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jan 04, 2019 at 09:29 AM
-- Server version: 5.6.34-log
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `undandy`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `size` int(11) NOT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `name`, `quantity`, `size`, `price`, `status`, `created_at`, `updated_at`) VALUES
(9, 2, '\'15 By Powell', 1, 38, '253', 1, NULL, NULL),
(10, 8, '\'15 By Eric', 5, 41, '234', 1, NULL, NULL),
(11, 2, '\'31 By Mathews', 1, 41, '208', 1, NULL, NULL),
(12, 2, '\'31 By Mathews', 1, 41, '208', 1, NULL, NULL),
(13, 3, '\'48 By Rhett Butler', 1, 39, '909', 1, NULL, NULL),
(14, 3, '\'48 By Rhett Butler', 1, 39, '909', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_11_13_080335__carts', 1),
(4, '2018_11_13_080418__products', 1),
(5, '2018_11_13_080430__payment', 1),
(6, '2018_11_13_080442__order', 1),
(8, '2018_12_11_075257_order', 2),
(9, '2018_12_17_091653_order_review', 2);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(10) UNSIGNED NOT NULL,
  `number` int(11) NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pincode` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `number`, `address`, `city`, `state`, `pincode`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 978654344, 'karanja,navapada', 'navi mumbai', 'maharashtre', 400702, 'sagarika', 1, NULL, NULL),
(2, 978654344, 'karanja,navapada', 'navi mumbai', 'maharashtre', 400702, 'sagarika', 1, NULL, NULL),
(3, 978654344, 'karanja,navapada', 'navi mumbai', 'maharashtre', 400702, 'sagarika', 1, NULL, NULL),
(4, 978654344, 'karanja,navapada', 'navi mumbai', 'maharashtre', 400702, 'sagarika', 1, NULL, NULL),
(5, 978654344, 'karanja,navapada', 'navi mumbai', 'maharashtre', 400702, 'sagarika', 1, NULL, NULL),
(6, 2147483647, 'karanja,navapada', 'navi mumbai', 'maharashtre', 400702, 'nikesh', 1, NULL, NULL),
(7, 2147483647, 'karanja,navapada', 'navi mumbai', 'maharashtre', 400702, 'nikesh', 1, NULL, NULL),
(8, 2147483647, 'karanja,navapada', 'navi mumbai', 'maharashtre', 400702, 'nikesh', 1, NULL, NULL),
(9, 978654344, 'karanja,navapada', 'navi mumbai', 'maharashtre', 400702, 'sagarika', 1, NULL, NULL),
(10, 978654344, 'karanja,navapada', 'navi mumbai', 'maharashtre', 400702, 'sagarika', 1, NULL, NULL),
(11, 978654344, 'karanja,navapada', 'navi mumbai', 'maharashtre', 400702, 'sagarika', 1, NULL, NULL),
(12, 2446767, 'karanja,navapada', 'navi mumbai', 'maharashtra', 400702, 'harshal', 1, NULL, NULL),
(13, 2446767, 'karanja,navapada', 'panvel', 'maharashtra', 400702, 'harshal', 1, NULL, NULL),
(14, 2446767, 'karanja,navapada', 'panvel', 'maharashtra', 400702, 'harshal', 1, NULL, NULL),
(15, 2147483647, 'karanja,navapada', 'navi mumbai', 'maharashtre', 400702, 'nikesh', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `mode` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `amount` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `size` int(11) NOT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `quantity`, `size`, `price`, `image`, `description`, `status`, `created_at`, `updated_at`) VALUES
(20, '\'31 By Mathews', 1, 41, '208', '/public/assets/images/uploads/31ByMathews.jpg', 'Buckle up fellow gentlemen, it’s time to get acquainted with the most fashion forward boot, the Monk Strap. The buckle monk strap boot has become a benchmark for the fashion forward as well as the classically inclined city slicker. Beautifully handcrafted', 1, NULL, NULL),
(21, '\'15 By Powell', 1, 38, '253', '/public/assets/images/uploads/shoe1.jpg', 'The ‘15 by Powell’s unique wooden-like effect is the result of a careful and precise hand painting technique. Crafted with the finest leathers, these oxfords breath tradition and heritage. They are a perfect match for any occasion, a true must have in eve', 1, NULL, NULL),
(22, '\'92 By Hacket', 8, 39, '173', '/public/assets/images/uploads/shoe2.jpg', 'The \'92 by Hacket is the lovechild of a beautiful relationship between a classic shoe and a casual sneaker, combining a full brogued leather body with a comfortable rubber sole. And it has the mother\'s beautiful green eyes. We mean laces.', 1, NULL, NULL),
(23, '\'THE GENTLEMEN\'S BOOT', 6, 40, '208', '/public/assets/images/uploads/shoe3.jpg', 'Built to endure the longest (suit) rides and the most extreme beverage sipping, the Gentleman\'s Boot comes in Brownish Motor Oil Glossy leather, with a Tarmac Black sole, finished with Under-The-Sun-Orange stitching, Old Tire Rubber on the heels, and a sh', 1, NULL, NULL),
(24, '\'48 By Heath', 8, 40, '567', '/public/assets/images/uploads/48ByHeathjpg.jpg', 'A pyschology study in 2010 at the University of Rochester found that men pictured wearing rosy or red hues were considered more sexually attractive by women than when wearing any other colour. After that there\'s not much more we can say about the 48 by He', 1, NULL, NULL),
(25, '\'15 By Eric', 10, 41, '234', '/public/assets/images/uploads/eric.jpg', 'A walk in nature is said to soothe the soul, therefore it stands to reason that the 15 by Eric, handcrafted in earthy tones of moss green suede with a tan sole, is the perfect accompaniment for long walks and getting back to nature.', 1, NULL, NULL),
(26, '\'48 By Vincent', 9, 40, '548', '/public/assets/images/uploads/vincent.jpg', 'The King rightfully coined Blue Suede Shoes, but we like to think we nailed the Blue Patina shoes. The ‘48 by Vincent Derby is the perfect Spring shoe.', 1, NULL, NULL),
(27, '\'48 By Rhett Butler', 5, 39, '909', '/public/assets/images/uploads/image6.jpg', 'A man daring enough to take on the spirited southern belle Scarlet O’Hara, ‘Frankly my dear, I don’t give a damn,’ Rhett Butler, iconically played by Clark Gable is the epitome of a roguish Southern gent, with scrupulous morals but ultimately a heart of g', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `number` int(11) NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pincode` int(11) NOT NULL,
  `landmark` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `number`, `password`, `address`, `city`, `state`, `pincode`, `landmark`, `status`, `type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', 2147483647, '$2y$10$FclJvWsa0UBqfmXEep000OHyHah25inLwz79GfxvJSQcnDvZ/dJom', 'karanja,navapada', 'navi mumbai', 'maharashtre', 400702, 'hanuman mandir', 0, 'admin', 'LLZ3M24csos7GfX2t2NqA7jhJJFn5fQfMazEtiQb5TJUOx5nJDjjUzvbZoED', '2018-12-01 04:55:35', '2018-12-01 04:55:35'),
(2, 'sagarika', 'sagarika@gmail.com', 978654344, '$2y$10$NRjlLhZ6zQMbcJJ7OCEraei.6gaZMWrOFIgbXgXzxRatABHiXsmDu', 'karanja,navapada', 'navi mumbai', 'maharashtre', 400702, 'hanuman mandir', 0, 'Customer', '2dwHRuda7neHWeaYIHPEICMO1hVQLES0NWxU0mVkhF7ic499sH0J64y4Cwio', '2018-12-01 04:57:28', '2018-12-01 04:57:28'),
(3, 'nikesh', 'nikesh@gmail.com', 2147483647, '$2y$10$G1HZX.i84.zchEmScyt2Tutard2oX4PaLkzoxohrFN/U9BV8/KZbS', 'karanja,navapada', 'navi mumbai', 'maharashtre', 400702, 'gram panchayat', 0, 'Customer', 'fDhShT5FpGIPjeYzjvFkugwMuleeKlDjk4FQmYesGljbF804U6d39BUldx12', '2018-12-01 04:58:41', '2018-12-01 04:58:41'),
(4, 'vrushali', 'vrushali@gmail.com', 2147483647, '$2y$10$A7rqaak.YowI1T69w6nBPO.Y78huAUk.ZH1K37W3u0.XFE/3.dt6u', 'karanja,navapada', 'navi mumbai', 'maharashtre', 400702, 'hanuman mandir', 0, 'Customer', NULL, '2018-12-11 04:46:47', '2018-12-11 04:46:47'),
(5, 'keval', 'keval@gmail.com', 12678965, '$2y$10$zS7x6iBPdFCVIoSsJHsTLOYJOov7K5..gzpr5s5HQGm8oWPznCVEu', 'karanja,navapada', 'navi mumbai', 'maharashtra', 400702, 'gram panchayat', 0, 'Customer', NULL, '2018-12-19 00:07:19', '2018-12-19 00:07:19'),
(6, 'ram', 'ram1234@amil.com', 978654233, '$2y$10$qqPUqPgHTbDeJjLUzNQPEetzrnbsoAaBCp5kO0LIIST/cE8xHQxOC', 'karanja,navapada', 'navi mumbai', 'maharashtrah', 400702, 'hanuman mandir', 0, 'Customer', NULL, '2018-12-19 00:10:50', '2018-12-19 00:10:50'),
(7, 'Pranoti', 'Adekar@ytbk', 2147483647, '$2y$10$ryoXTHi0e.WkAGav0qaUReMpd5IjWILoblL28ZjXWIb0UZIG.b.pG', 'B-201, Sai Sangam', 'Mumbai', 'Maharashtra', 0, 'Test', 0, 'Customer', NULL, '2018-12-19 01:59:44', '2018-12-19 01:59:44'),
(8, 'harshal', 'harshal@gmail.com', 2446767, '$2y$10$hlz2FOYfSvRoLYLiO6oNR.OlQ/FQl5ATo.yB/ATiyfzINi/PMDWwK', 'karanja,navapada', 'navi mumbai', 'maharashtra', 400702, 'hanuman mandir', 0, 'Customer', NULL, '2018-12-24 02:44:55', '2018-12-24 02:44:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
