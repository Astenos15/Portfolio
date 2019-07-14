-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2019 at 07:13 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `multi_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `image_text` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image`, `image_text`) VALUES
(210, 'bg3.jpeg', '<h2>Roasted Pork</h2>\r\n<hr>\r\n<h3>Ingredients</h3>\r\n-1/4 cup extra-virgin olive oil <br>\r\n-plus more for drizzling 4 thyme <br>\r\n-minced garlic <br>\r\n-plus 2 heads of garlic <br>\r\n-chopped rosemary leaves 1/4 <br>\r\n-teaspoon ground cumin 8 <br>\r\n-lamb loin chops Salt <br>\r\n-freshly ground black pepper <br>\r\n-White Bean Puree <br>\r\n<hr>\r\n<h3>How To Make It</h3>\r\n<h3>Step 1</h3>\r\nIn a large, shallow dish, combine the 1/4 cup of olive oil with the thyme, minced garlic, rosemary and cumin. Add the lamb chops and turn to coat with the marinade. Refrigerate overnight.\r\n\r\n<h3>Step 2</h3>\r\nPreheat the oven to 350Â°. Set the halved heads of garlic cut side up on a large sheet of foil and drizzle with oil. Wrap the garlic in the foil and roast for 1 hour, until tender.\r\n\r\n<h3>Step3</h3>\r\nLight a grill. Remove the chops from the marinade; discard the thyme and scrape off the garlic. Season the chops with salt and pepper and grill over moderate heat until lightly charred and medium-rare, 5 minutes per side. Serve the chops with the roasted garlic and White Bean Puree.\r\n      	'),
(212, 'lamb.jpg', '<h2>Lamb Chops</h2>\r\n<hr>\r\n<h3>Ingredients</h3>\r\n-1/4 cup extra-virgin olive oil <br>\r\n-plus more for drizzling 4 thyme <br>\r\n-minced garlic <br>\r\n-plus 2 heads of garlic <br>\r\n-chopped rosemary leaves 1/4 <br>\r\n-teaspoon ground cumin 8 <br>\r\n-lamb loin chops Salt <br>\r\n-freshly ground black pepper <br>\r\n-White Bean Puree <br>\r\n<hr>\r\n<h3>How To Make It</h3>\r\n<h3>Step 1</h3>\r\nIn a large, shallow dish, combine the 1/4 cup of olive oil with the thyme, minced garlic, rosemary and cumin. Add the lamb chops and turn to coat with the marinade. Refrigerate overnight.\r\n\r\n<h3>Step 2</h3>\r\nPreheat the oven to 350Â°. Set the halved heads of garlic cut side up on a large sheet of foil and drizzle with oil. Wrap the garlic in the foil and roast for 1 hour, until tender.\r\n\r\n<h3>Step3</h3>\r\nLight a grill. Remove the chops from the marinade; discard the thyme and scrape off the garlic. Season the chops with salt and pepper and grill over moderate heat until lightly charred and medium-rare, 5 minutes per side. Serve the chops with the roasted garlic and White Bean Puree.      	'),
(213, 'caro5.jpeg', '<h2>Grilled Cutlets</h2>\r\n<hr>\r\n<h3>Ingredients</h3>\r\n-1/4 cup extra-virgin olive oil <br>\r\n-plus more for drizzling 4 thyme <br>\r\n-minced garlic <br>\r\n-plus 2 heads of garlic <br>\r\n-chopped rosemary leaves 1/4 <br>\r\n-teaspoon ground cumin 8 <br>\r\n-lamb loin chops Salt <br>\r\n-freshly ground black pepper <br>\r\n-White Bean Puree <br>\r\n<hr>\r\n<h3>How To Make It</h3>\r\n<h3>Step 1</h3>\r\nIn a large, shallow dish, combine the 1/4 cup of olive oil with the thyme, minced garlic, rosemary and cumin. Add the lamb chops and turn to coat with the marinade. Refrigerate overnight.\r\n\r\n<h3>Step 2</h3>\r\nPreheat the oven to 350Â°. Set the halved heads of garlic cut side up on a large sheet of foil and drizzle with oil. Wrap the garlic in the foil and roast for 1 hour, until tender.\r\n\r\n<h3>Step3</h3>\r\nLight a grill. Remove the chops from the marinade; discard the thyme and scrape off the garlic. Season the chops with salt and pepper and grill over moderate heat until lightly charred and medium-rare, 5 minutes per side. Serve the chops with the roasted garlic and White Bean Puree.      	');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment`
--

CREATE TABLE `tbl_comment` (
  `comment_id` int(11) NOT NULL,
  `parent_comment_id` int(11) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `comment_sender_name` varchar(40) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_comment`
--

INSERT INTO `tbl_comment` (`comment_id`, `parent_comment_id`, `comment`, `comment_sender_name`, `date`) VALUES
(1, 0, 'yummy', 'raffy', '2019-07-14 17:12:36'),
(2, 1, 'Thanks!!!', 'Adrian', '2019-07-14 17:12:55');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `user_type`, `password`) VALUES
(1, 'Astenos14', 'Astenos15@gmail.com', 'user', 'a5c157ea082d329ffc4535b6f96815f3'),
(2, 'Astenos16', 'Shian14@gmail.com', 'admin', 'a5c157ea082d329ffc4535b6f96815f3'),
(3, 'Adrian', 'Adrian@gmail.com', 'user', '0cfe0ef3a357503c4a4538414b870ca1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=214;

--
-- AUTO_INCREMENT for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
