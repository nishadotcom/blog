-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 20, 2019 at 12:16 AM
-- Server version: 5.7.27-0ubuntu0.16.04.1
-- PHP Version: 7.0.33-0ubuntu0.16.04.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_article`
--

CREATE TABLE `blog_article` (
  `article_id` int(12) NOT NULL,
  `article_category` int(6) NOT NULL COMMENT 'Refers to blog_menu(menu_id)',
  `article_title` varchar(1200) NOT NULL,
  `article_content` text NOT NULL,
  `article_status` enum('Published','Suspended','Deleted','Waiting For Approval') NOT NULL DEFAULT 'Waiting For Approval',
  `article_author` int(12) NOT NULL COMMENT 'Refers to blog_user(user_id)',
  `article_created_on` datetime NOT NULL,
  `article_updated_on` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog_article`
--

INSERT INTO `blog_article` (`article_id`, `article_category`, `article_title`, `article_content`, `article_status`, `article_author`, `article_created_on`, `article_updated_on`) VALUES
(5, 1, 'Finance in Banking', '<h2 style="backface-visibility: hidden; color: rgb(0, 0, 0); margin-top: 10px; margin-right: 0px; margin-left: 0px; padding: 0px; border: 0px; font-size: 1.8rem; vertical-align: baseline; font-weight: 700; letter-spacing: -0.02em; line-height: 1.4; overflow: hidden; width: 740px; font-family: Roboto, sans-serif;"><strong style="margin: 0px; padding: 0px; border: 0px; font-size: 28.8px; vertical-align: baseline;">An Old Man Lived in the Village</strong></h2><p data-slot-rendered-dynamic="true" style="margin-bottom: 20px; padding: 0px; border: 0px; font-size: 1.32rem; vertical-align: baseline; line-height: 2.4rem; font-family: &quot;PT Serif&quot;, sans-serif;"><picture class="alignnone size-full wp-image-8767 sp-no-webp"><source data-srcset="https://cdn.shortpixel.ai/client/q_lossy,ret_img/https://cdn.wealthygorilla.com/wp-content/uploads/2016/10/Short-Moral-Stories-An-Old-Man.webp 700w,https://cdn.wealthygorilla.com/wp-content/uploads/2016/10/Short-Moral-Stories-An-Old-Man-450x225.webp 450w,https://cdn.wealthygorilla.com/wp-content/uploads/2016/10/Short-Moral-Stories-An-Old-Man-680x340.webp 680w,https://cdn.wealthygorilla.com/wp-content/uploads/2016/10/Short-Moral-Stories-An-Old-Man-696x348.webp 696w" sizes="(max-width: 700px) 100vw, 700px" type="image/webp" srcset="https://cdn.shortpixel.ai/client/q_lossy,ret_img/https://cdn.wealthygorilla.com/wp-content/uploads/2016/10/Short-Moral-Stories-An-Old-Man.webp 700w,https://cdn.wealthygorilla.com/wp-content/uploads/2016/10/Short-Moral-Stories-An-Old-Man-450x225.webp 450w,https://cdn.wealthygorilla.com/wp-content/uploads/2016/10/Short-Moral-Stories-An-Old-Man-680x340.webp 680w,https://cdn.wealthygorilla.com/wp-content/uploads/2016/10/Short-Moral-Stories-An-Old-Man-696x348.webp 696w"><source data-srcset="https://cdn.shortpixel.ai/client/q_lossy,ret_img/https://cdn.wealthygorilla.com/wp-content/uploads/2016/10/Short-Moral-Stories-An-Old-Man.jpg 700w, https://cdn.wealthygorilla.com/wp-content/uploads/2016/10/Short-Moral-Stories-An-Old-Man-450x225.jpg 450w, https://cdn.wealthygorilla.com/wp-content/uploads/2016/10/Short-Moral-Stories-An-Old-Man-680x340.jpg 680w, https://cdn.wealthygorilla.com/wp-content/uploads/2016/10/Short-Moral-Stories-An-Old-Man-696x348.jpg 696w" sizes="(max-width: 700px) 100vw, 700px" srcset="https://cdn.shortpixel.ai/client/q_lossy,ret_img/https://cdn.wealthygorilla.com/wp-content/uploads/2016/10/Short-Moral-Stories-An-Old-Man.jpg 700w, https://cdn.wealthygorilla.com/wp-content/uploads/2016/10/Short-Moral-Stories-An-Old-Man-450x225.jpg 450w, https://cdn.wealthygorilla.com/wp-content/uploads/2016/10/Short-Moral-Stories-An-Old-Man-680x340.jpg 680w, https://cdn.wealthygorilla.com/wp-content/uploads/2016/10/Short-Moral-Stories-An-Old-Man-696x348.jpg 696w"><img src="https://cdn.shortpixel.ai/client/to_webp,q_lossy,ret_img,w_700,h_350/https://cdn.wealthygorilla.com/wp-content/uploads/2016/10/Short-Moral-Stories-An-Old-Man.jpg" data-src="https://cdn.shortpixel.ai/client/to_webp,q_lossy,ret_img,w_700,h_350/https://cdn.wealthygorilla.com/wp-content/uploads/2016/10/Short-Moral-Stories-An-Old-Man.jpg" class="alignnone size-full wp-image-8767 sp-no-webp lazyloaded" alt="Short Moral Stories - An Old Man" height="350" width="700" data-srcset="https://cdn.shortpixel.ai/client/to_webp,q_lossy,ret_img,w_700/https://cdn.wealthygorilla.com/wp-content/uploads/2016/10/Short-Moral-Stories-An-Old-Man.jpg 700w, https://cdn.shortpixel.ai/client/q_lossy,ret_img,w_450/https://cdn.wealthygorilla.com/wp-content/uploads/2016/10/Short-Moral-Stories-An-Old-Man-450x225.jpg 450w, https://cdn.shortpixel.ai/client/q_lossy,ret_img,w_680/https://cdn.wealthygorilla.com/wp-content/uploads/2016/10/Short-Moral-Stories-An-Old-Man-680x340.jpg 680w, https://cdn.shortpixel.ai/client/q_lossy,ret_img,w_696/https://cdn.wealthygorilla.com/wp-content/uploads/2016/10/Short-Moral-Stories-An-Old-Man-696x348.jpg 696w" data-sizes="(max-width: 700px) 100vw, 700px" sizes="(max-width: 700px) 100vw, 700px" srcset="https://cdn.shortpixel.ai/client/to_webp,q_lossy,ret_img,w_700/https://cdn.wealthygorilla.com/wp-content/uploads/2016/10/Short-Moral-Stories-An-Old-Man.jpg 700w, https://cdn.shortpixel.ai/client/q_lossy,ret_img,w_450/https://cdn.wealthygorilla.com/wp-content/uploads/2016/10/Short-Moral-Stories-An-Old-Man-450x225.jpg 450w, https://cdn.shortpixel.ai/client/q_lossy,ret_img,w_680/https://cdn.wealthygorilla.com/wp-content/uploads/2016/10/Short-Moral-Stories-An-Old-Man-680x340.jpg 680w, https://cdn.shortpixel.ai/client/q_lossy,ret_img,w_696/https://cdn.wealthygorilla.com/wp-content/uploads/2016/10/Short-Moral-Stories-An-Old-Man-696x348.jpg 696w" style="max-width: 100%; height: auto; backface-visibility: hidden; margin: 0px; padding: 0px; font-size: 21.12px; vertical-align: baseline; opacity: 1; transition: opacity 300ms ease 0s;"></picture></p><p style="margin-bottom: 20px; padding: 0px; border: 0px; font-size: 1.32rem; vertical-align: baseline; line-height: 2.4rem; font-family: &quot;PT Serif&quot;, sans-serif;">An old man lived in the village. He was one of the most unfortunate people in the world. The whole village was tired of him; he was always gloomy, he constantly complained and was always&nbsp;in a bad mood.</p>', 'Waiting For Approval', 1, '2019-09-07 19:14:41', NULL),
(6, 1, 'Future is Banking', '<p>Future is <b><u style="color: rgb(0, 255, 0);">Banking</u></b><br></p>', 'Waiting For Approval', 1, '2019-09-17 10:47:52', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blog_menu`
--

CREATE TABLE `blog_menu` (
  `menu_id` int(6) NOT NULL,
  `menu_name` varchar(150) NOT NULL,
  `menu_description` tinytext,
  `menu_status` enum('Active','Suspend') NOT NULL DEFAULT 'Active',
  `menu_link_id` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog_menu`
--

INSERT INTO `blog_menu` (`menu_id`, `menu_name`, `menu_description`, `menu_status`, `menu_link_id`) VALUES
(1, 'Banking', 'Banking', 'Active', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blog_user`
--

CREATE TABLE `blog_user` (
  `user_id` int(12) NOT NULL,
  `user_name` varchar(250) NOT NULL,
  `user_detail` text,
  `user_role` enum('Author','Reader') NOT NULL DEFAULT 'Reader'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog_user`
--

INSERT INTO `blog_user` (`user_id`, `user_name`, `user_detail`, `user_role`) VALUES
(1, 'ritu', 'Ritu', 'Author');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_article`
--
ALTER TABLE `blog_article`
  ADD PRIMARY KEY (`article_id`),
  ADD KEY `FK_article_category` (`article_category`),
  ADD KEY `FK_article_author` (`article_author`);

--
-- Indexes for table `blog_menu`
--
ALTER TABLE `blog_menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `blog_user`
--
ALTER TABLE `blog_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog_article`
--
ALTER TABLE `blog_article`
  MODIFY `article_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `blog_menu`
--
ALTER TABLE `blog_menu`
  MODIFY `menu_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `blog_user`
--
ALTER TABLE `blog_user`
  MODIFY `user_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog_article`
--
ALTER TABLE `blog_article`
  ADD CONSTRAINT `FK_article_author` FOREIGN KEY (`article_author`) REFERENCES `blog_user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_article_category` FOREIGN KEY (`article_category`) REFERENCES `blog_menu` (`menu_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
