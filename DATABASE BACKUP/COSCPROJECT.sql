-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 01, 2017 at 09:19 PM
-- Server version: 5.7.20-0ubuntu0.16.04.1
-- PHP Version: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `COSCPROJECT`
--

-- --------------------------------------------------------

--
-- Table structure for table `TASKS`
--

CREATE TABLE `TASKS` (
  `task_id` int(11) NOT NULL,
  `actor` varchar(10) NOT NULL,
  `task_name` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `status` varchar(10) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_closed` datetime DEFAULT NULL,
  `priority` varchar(10) NOT NULL,
  `user_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `TASKS`
--

INSERT INTO `TASKS` (`task_id`, `actor`, `task_name`, `description`, `status`, `date_created`, `date_closed`, `priority`, `user_email`) VALUES
(1, 'test', 'Deploy OM1P network on Sandman Hotel Chain', 'Gary Pena has asked you to install 2000 OM1P (high functioning autistic) access points. Please do so on your own time, without expecting pay.', 'Closed', '2017-11-30 02:11:21', '2017-12-01 20:37:14', 'High', 'test@gmail.com'),
(32, 'test', 'Get Subway', 'Get dinner so life won&#39;t suck as much.', 'Closed', '2017-11-30 02:15:44', '2017-11-30 04:15:44', 'High', 'test@gmail.com'),
(33, 'test', 'Sweep the Kitchen', 'Grab a broom and sweep the kitchen. Make sure to mop afterwards!', 'Closed', '2017-11-30 01:19:40', '2017-11-30 03:56:40', 'Low', 'test@gmail.com'),
(34, 'test', 'Mop the floors', 'Mop the floors - do this after sweeping the kitchen!', 'Closed', '2017-11-30 03:20:03', NULL, 'Low', 'test@gmail.com'),
(35, 'test', 'Conquer the World', 'Try to limit violence. Go for a culture dictatorship if possible.', 'Closed', '2017-11-30 03:38:33', '2017-12-01 20:37:25', 'Medium', 'test@gmail.com'),
(36, 'test', 'Finish the task average time module', 'Complete module, assure math is correct, profit. ', 'Closed', '2017-11-30 02:54:35', '2017-12-01 16:49:39', 'High', 'test@gmail.com'),
(37, 'brett', 'Needs Cowbell', 'More Cowbell required.', 'Closed', '2017-11-30 04:14:03', NULL, 'High', 'brett@gmail.com'),
(38, 'brett', 'Never enough Cowbell', 'Need more.', 'Open', '2017-11-30 04:14:20', NULL, 'High', 'brett@gmail.com'),
(39, 'test', 'This is a high priority task', 'DO THIS NOW OR YOU&#39;RE FIRED!', 'Closed', '2017-11-30 04:36:10', '2017-12-01 20:38:00', 'High', 'test@gmail.com'),
(40, 'test', 'Low priority task', 'Find a good teacher for 213 at OC....', 'Closed', '2017-11-30 04:36:35', '2017-12-01 20:37:39', 'Low', 'test@gmail.com'),
(41, 'test', 'This is another high priority Task', 'Feed the baby or it&#39;ll starve!', 'Closed', '2017-11-30 04:38:54', '2017-12-01 20:38:07', 'High', 'test@gmail.com'),
(42, 'brett', 'Come&#39;ere Georgie', 'Just. One. More. Step. :)', 'Open', '2017-11-30 04:53:34', NULL, 'High', 'brett@gmail.com'),
(43, 'moo', 'Find cow.', 'Profit.', 'Open', '2017-11-30 05:01:40', NULL, 'Medium', 'cowking@gmail.com'),
(44, 'moo', 'Make army of cows', 'Kill Adventurers', 'Open', '2017-11-30 05:02:00', NULL, 'High', 'cowking@gmail.com'),
(45, 'moo', 'Moo', 'Don&#39;t forget to moo.', 'Open', '2017-11-30 05:20:31', NULL, 'Low', 'cowking@gmail.com'),
(47, 'moo', 'testing', 'for time', 'Open', '2017-11-30 20:16:43', '2017-11-30 20:50:00', 'Medium', 'cowking@gmail.com'),
(50, 'test', 'Pass Courses', 'Do so with 86% or higher average.', 'Open', '2017-12-01 05:00:13', NULL, 'High', 'test@gmail.com'),
(51, 'test', 'Get baked.', 'And drink slushie.', 'Closed', '2017-12-01 05:00:33', '2017-12-01 16:49:16', 'Low', 'test@gmail.com'),
(52, 'test', 'Lorem Sopraium', 'Lorem ipsum dolor sit amet, animal antiopam eum id. Mei in accusamus gloriatur, no vel solet albucius, sed cu amet nostrum. Dicam congue soluta sit eu. Vim id atqui mundi epicuri.', 'Open', '2017-12-01 05:02:32', NULL, 'High', 'test@gmail.com'),
(53, 'john', 'Finish Website', 'The website needs to be finished. ', 'Open', '2017-12-01 06:01:31', '2017-12-01 06:21:31', 'High', 'jsmith1234@gmail.com'),
(54, 'john', 'Please Finish Website?', 'It REALLY needs to be finished!', 'Open', '2017-12-01 06:03:03', NULL, 'Medium', 'jsmith1234@gmail.com'),
(55, 'test', 'HEY LISTEN!', 'LINK MAH BOI', 'Open', '2017-12-01 06:28:29', NULL, 'High', 'test@gmail.com'),
(56, 'test', 'DO A BARREL ROLL!!!', 'Do a barrel roll.', 'Open', '2017-12-01 06:29:01', NULL, 'High', 'test@gmail.com'),
(57, 'john', 'Test', '123', 'Open', '2017-12-01 06:30:07', '2017-12-01 06:34:07', 'Low', 'jsmith1234@gmail.com'),
(58, 'john', 'Test', '2233', 'Open', '2017-12-01 06:31:17', NULL, 'Low', 'jsmith1234@gmail.com'),
(59, 'test', 'TROLOLOLOLOLOLOLOLOLOLOLOLOLOLOLOLOLOLOLOLOLOLOLOLOLOLOLOLOLOLOLOLOLOLOLOLOLOL', 'So...does your system handle and display long task names properly?', 'Closed', '2017-12-01 06:32:36', '2017-12-01 16:49:01', 'High', 'test@gmail.com'),
(60, 'john', 'dasdas', 'asdads', 'Open', '2017-12-01 06:35:57', NULL, '', 'jsmith1234@gmail.com'),
(61, 'john', 'This is another task', 'Make sure ya finish it!', 'Open', '2017-12-01 06:51:16', NULL, 'High', 'jsmith1234@gmail.com'),
(62, 'john', 'Test #5', 'This is my task that I&#39;m making using a text area!', 'Open', '2017-12-01 07:07:14', NULL, 'Medium', 'jsmith1234@gmail.com'),
(63, 'john', 'Test', 'This is a brief description This is a brief description This is a brief description This is a brief description This is a brief description This is a brief description This is a brief description This is a brief description This is a brief description This is a brief description This is a brief description This is a brief description This is a brief description ', 'Open', '2017-12-01 07:08:07', NULL, 'Medium', 'jsmith1234@gmail.com'),
(64, 'john', 'Test', 'This is a brief description This is a brief description This is a brief description This is a brief description This is a brief description This is a brief description This is a brief description This is a brief description This is a brief description This is a brief description This is a brief description This is a brief description This is a brief description This is a brief description This is a brief description This is a brief description This is a brief description This is a brief descript', 'Open', '2017-12-01 07:08:28', NULL, 'High', 'jsmith1234@gmail.com'),
(65, 'john', 'My Task', 'This is my task!', 'Open', '2017-12-01 07:20:09', '2017-12-01 07:24:09', 'Medium', 'jsmith1234@gmail.com'),
(66, 'test', 'THE LIMIT OF MY MIND IS THIS LONG JK IT KEEPS GOING MY MIND IS ENDLESS JUST LIKE MY GREAT LOOKS AND ', 'Long strings break site.. THX tash', 'Closed', '2017-12-01 08:04:34', '2017-12-01 16:48:48', 'Medium', 'test@gmail.com'),
(67, 'tester', 'This is Natasha&#39;s account. ', 'She needs to do the dishes! JK dont kill me.', 'Open', '2017-12-01 08:07:07', NULL, 'High', 'test123@gmail.com'),
(68, 'tester', 'Natashas Second Task', 'Stop breaking the site, because I want to be done it already. I&#39;m tired and it&#39;s time for bed.', 'Open', '2017-12-01 08:07:40', NULL, 'High', 'test123@gmail.com'),
(69, 'john', 'nsert a brief description about your task here! (500 Character Limit)nsert a brief description about', 'Insert a brief description about your task here! (500 Character Limit)nsert a brief description about your task here! (500 Character Limit)nsert a brief description about your task here! (500 Character Limit)nsert a brief description about your task here! (500 Character Limit)nsert a brief description about your task here! (500 Character Limit)nsert a brief description about your task here! (500 Character Limit)nsert a brief description about your task here! (500 Character Limit)nsert a brief de', 'Open', '2017-12-01 08:10:47', NULL, 'High', 'jsmith1234@gmail.com'),
(70, 'steven', 'Fix Scaling Issue For Task Description', 'When task description is long (exceeding 200 characters), it scales to a point where the page formatting breaks. Find the issue and resolve. ', 'Closed', '2017-12-01 08:19:43', '2017-12-01 20:32:49', 'Medium', 'stevenabucholtz@gmail.com'),
(71, 'steven', 'Complete Settings Page', 'Settings page needs to be formatted and completed. ', 'Open', '2017-12-01 08:20:11', NULL, 'Low', 'stevenabucholtz@gmail.com'),
(72, 'steven', 'Password Update Feature', 'Complete password update feature on settings page. ', 'Closed', '2017-12-01 08:21:29', NULL, 'Low', 'stevenabucholtz@gmail.com'),
(73, 'steven', 'Complete Email Update Feature', 'Complete Email Update feature on settings page. Possibly have email sent to user on successful password change?', 'Open', '2017-12-01 08:21:53', NULL, 'Low', 'stevenabucholtz@gmail.com'),
(74, 'steven', 'Assign Tasks to Other Users', 'It would be awesome to assign tasks to other users. I don&#39;t think it&#39;ll happen before we are done the project, but I would love to complete it one day.', 'Open', '2017-12-01 08:24:40', NULL, 'Low', 'stevenabucholtz@gmail.com'),
(75, 'steven', 'Ggggggggghhhhhhhhasssssssggcxsfhjjgddgjhfdyjfdyfdgjffyhddhjsfhfdhbcyjvddgvjjjjjjjjjjjhhhhhhhhhhhhhhh', 'Insert a brief description about your task here! (500 Character Limit)', 'Closed', '2017-12-01 16:40:59', NULL, 'Medium', 'stevenabucholtz@gmail.com'),
(76, 'test', 'Test1', 'Insert a brief description about your task here! (500 Character Limit)', 'Open', '2017-12-01 19:02:24', NULL, 'Low', 'test@gmail.com'),
(77, 'test', 'Test2', 'Insert a brief description about your task here! (500 Character Limit)', 'Open', '2017-12-01 19:02:28', NULL, 'Medium', 'test@gmail.com'),
(78, 'test', 'Test3', 'Insert a brief description about your task here! (500 Character Limit)', 'Open', '2017-12-01 19:02:32', NULL, 'Low', 'test@gmail.com'),
(79, 'test', 'Test4', 'Insert a brief description about your task here! (500 Character Limit)', 'Open', '2017-12-01 19:02:36', NULL, 'High', 'test@gmail.com'),
(80, 'test', 'Test5', 'Insert a brief description about your task here! (500 Character Limit)', 'Open', '2017-12-01 19:02:39', NULL, 'Low', 'test@gmail.com'),
(81, 'test', 'Test6', 'Insert a brief description about your task here! (500 Character Limit)', 'Open', '2017-12-01 19:02:45', NULL, 'High', 'test@gmail.com'),
(82, 'test', 'Test7', 'Insert a brief description about your task here! (500 Character Limit)', 'Open', '2017-12-01 19:02:50', NULL, 'Low', 'test@gmail.com'),
(83, 'test', 'Test6', 'Insert a brief description about your task here! (500 Character Limit)', 'Open', '2017-12-01 19:06:08', NULL, 'Medium', 'test@gmail.com'),
(84, 'test', 'Testy6', 'Insert a brief description about your task here! (500 Character Limit)', 'Open', '2017-12-01 19:06:12', NULL, 'High', 'test@gmail.com'),
(85, 'test', 'Test8', 'Insert a brief description about your task here! (500 Character Limit)', 'Open', '2017-12-01 19:06:18', NULL, 'High', 'test@gmail.com'),
(86, 'steven', 'Finish Website ', 'The website is to be presented on December 6th. Polish it up so it looks awesome, and we can snag that 100%!', 'Open', '2017-12-01 20:45:42', NULL, 'High', 'projectshowcase@gmail.com'),
(87, 'steven', 'Showcase Website', 'Present the website to Dan during our present time. Do a good job so we can get a good mark!', 'Open', '2017-12-01 20:46:28', NULL, 'High', 'projectshowcase@gmail.com'),
(88, 'steven', 'Get Groceries', 'The fridge is empty, and we need groceries. Get the ingredients to make Pad Thai.', 'Open', '2017-12-01 20:47:03', NULL, 'Medium', 'projectshowcase@gmail.com'),
(89, 'steven', 'This is a task that will be closed', 'This task is going to be closed to show how the average time query works based on the time between the query creation, and the date it is set to closed.', 'Closed', '2017-12-01 20:47:51', '2017-12-01 20:49:34', 'Low', 'projectshowcase@gmail.com'),
(90, 'steven', 'Clean Aquarium', 'Algae is growing on the fish tank. Scrape it off!', 'Open', '2017-12-01 20:48:10', NULL, 'Low', 'projectshowcase@gmail.com'),
(91, 'steven', 'Feed the Cat', 'The cat won&#39;t stop meowing. Go ahead and feed it, will ya?', 'Open', '2017-12-01 20:48:31', NULL, 'Medium', 'projectshowcase@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `USERS`
--

CREATE TABLE `USERS` (
  `FIRST_NAME` varchar(20) NOT NULL,
  `LAST_NAME` varchar(20) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `PASSWORD` varchar(100) NOT NULL,
  `DATE_JOIN` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Table for user registration: http://165.227.40.78/index.html';

--
-- Dumping data for table `USERS`
--

INSERT INTO `USERS` (`FIRST_NAME`, `LAST_NAME`, `EMAIL`, `PASSWORD`, `DATE_JOIN`) VALUES
('anothertest', 'account', 'anothertest@gmail.com', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', '2017-11-30'),
('asd', 'asd', 'asd@asd', 'f10e2821bbbea527ea02200352313bc059445190', '2017-11-02'),
('asdads', 'asdads', 'asdasd@d', '0e747aaa0f03a7b7bb9a964f47fe7c508be7b086', '2017-11-02'),
('sad', 'asd', 'asddsa@asdads', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', '2017-11-30'),
('asdfff', 'asfdff', 'asff@asfasffas', '3da541559918a808c2402bba5012f6c60b27661c', '2017-11-02'),
('brett', 's', 'brett@gmail.com', '24a56b37819e0452df9c07432e5dd2e2b5cebf48', '2017-11-28'),
('moo', 'cow', 'cowking@gmail.com', '24a56b37819e0452df9c07432e5dd2e2b5cebf48', '2017-11-30'),
('asdas', 'asdads', 'dasasd@adssdaads', '3da541559918a808c2402bba5012f6c60b27661c', '2017-11-05'),
('Dax', 'Rynan', 'Dman@gmail.com', 'b7a875fc1ea228b9061041b7cec4bd3c52ab3ce3', '2017-11-02'),
('George', 'Harrison', 'Gharrison@gmail.com', 'b7a875fc1ea228b9061041b7cec4bd3c52ab3ce3', '2017-11-01'),
('john', 'doe', 'jdoe2@gmail.com', '3da541559918a808c2402bba5012f6c60b27661c', '2017-12-01'),
('Joseph', 'Doe', 'jdoe@gmail.com', 'b7a875fc1ea228b9061041b7cec4bd3c52ab3ce3', '2017-11-02'),
('john', 'mckinley', 'jmck@gmail.com', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '2017-11-05'),
('notfeelingit', 'atall', 'joasdads@gmail.com', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', '2017-11-05'),
('testr123', 'testr123', 'jognsmioth2@gmail.com', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', '2017-11-30'),
('john', 'smith', 'john_smith@gmail.com', 'b7a875fc1ea228b9061041b7cec4bd3c52ab3ce3', '2017-11-05'),
('Jorge', 'Herandez', 'Jorge_Harandez@gmail.com', '4b2c5a6d33c70caa171639d1e5a76a81f83c3cfb', '2017-11-04'),
('john', 'smith', 'jsmith1234@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '2017-12-01'),
('john', 'smith', 'jsmith@gmail.com', 'b7a875fc1ea228b9061041b7cec4bd3c52ab3ce3', '2017-11-05'),
('joseph', 'stalin', 'jstaling@hotmail.com', '03be2876821080056584e5ef439d8fdbb17faee2', '2017-11-05'),
('Joseph', 'Herandez', 'J_Herandez@gmail.com', '13d4f12e3e382c46d49e4d6df9d5c25e6e73634d', '2017-11-03'),
('kay', 'h', 'kaylan.horne3@gmail.com', 'b7a875fc1ea228b9061041b7cec4bd3c52ab3ce3', '2017-11-01'),
('matt', 'wall', 'mattwall0@gmail.com', '3d6023b6a72781a792834de3acc22bf4c617ae4d', '2017-12-01'),
('Natasha', 'Lacroix', 'natasha_lacroix@gmail.com', 'c5255e6bd91d972cc2af117e2d46dbc74fadc661', '2017-11-03'),
('natasha', 'lacroix', 'nlacroix@gmail.com', '4e90fc5b4ecbdb9d5741485e8e72e2030a796876', '2017-11-05'),
('natasha', 'lacroix', 'nlacroixnl@gmail.com', '2d5be0401459b72c93fd140857890d5ed300a093', '2017-11-12'),
('steven', 'brett', 'projectshowcase@gmail.com', 'b7a875fc1ea228b9061041b7cec4bd3c52ab3ce3', '2017-12-01'),
('Brett', 'Steck', 'steck.brett@gmail.com', '076d3e6c4b9f654b5b220b9045b7458ab6b4cbc6', '2017-11-01'),
('Steven', 'Bucholtz', 'stevenabucholtz@gmail.com', 'b7a875fc1ea228b9061041b7cec4bd3c52ab3ce3', '2017-11-01'),
('steven', 'bucholtz', 'steven_bucholtz@gmail.com', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '2017-11-13'),
('test', 'test', 'steven_bucholtz@hotmail.com', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', '2017-11-28'),
('sup', 'sup ', 'sup@sup.sup', '3844b17b367801f41a3ff27aab7d5ca297c2b984', '2017-11-29'),
('tester', 'tesads', 'test123@gmail.com', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', '2017-12-01'),
('test', 'test', 'test@gmail.com', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', '2017-11-13'),
('newaccount', 'toteststuff', 'thisisatest@gmail.com', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', '2017-11-30'),
('william', 'paul', 'william.paul@myokanagan.bc.ca', '7c60903edaf0efcc501c0f689c01bef2773947cc', '2017-11-03'),
('Jon', 'Doe', 'Xenoncide@gmail.com', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '2017-11-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `TASKS`
--
ALTER TABLE `TASKS`
  ADD PRIMARY KEY (`task_id`);

--
-- Indexes for table `USERS`
--
ALTER TABLE `USERS`
  ADD PRIMARY KEY (`EMAIL`),
  ADD UNIQUE KEY `EMAIL` (`EMAIL`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `TASKS`
--
ALTER TABLE `TASKS`
  MODIFY `task_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
