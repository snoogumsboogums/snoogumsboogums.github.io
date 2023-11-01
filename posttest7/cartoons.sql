-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2023 at 09:56 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cartoon_recommendation`
--

-- --------------------------------------------------------

--
-- Table structure for table `cartoons`
--

CREATE TABLE `cartoons` (
  `id` int(11) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `picture` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cartoons`
--

INSERT INTO `cartoons` (`id`, `title`, `description`, `picture`) VALUES
(12, 'Sofia The First', 'Sofia is a little girl with a commoner\'s background until her mom marries the king and suddenly she is royalty.', 'sofia.jpg'),
(13, 'Handy Manny', 'A show about handyman Manny Garcia and his helpful talking tools, who make repairs and fix problems in the small town of Sheetrock Hills.', 'handymanny.jpeg'),
(14, 'Little Einstein', 'Four friends go on missions with their ever changing rocket ship. Every mission includes a classic song and a painting.', 'littleeinstein.jpg'),
(15, 'My Little Ponny', 'After learning that her friends, as well as herself, are the magical Elements of Harmony, studious unicorn Twilight Sparkle is sent by her mentor, Princess Celestia, to Ponyville to study the magic of friendship with help from her friends.', 'mylittlepony.jpg'),
(16, 'Sheriff Callie Wild West', 'A kids western centered on a kitty cat sheriff whose job is to ensure that the town of Nice and Friendly Corners remains the friendliest town in the West.', 'sherif.jpg'),
(17, 'Strawberry Shortcake', 'A girl named Strawberry Shortcake, along with her cat Custard and dog Pupcake, has adventures in friendship in Strawberryland.', 'strawberryshortcake.jpg'),
(18, 'Lilo and Stitch', 'A young and parentless girl adopts a dog from the local pound, completely unaware that its supposedly a dangerous scientific experiment thats taken refuge on Earth and is now hiding from its creator and those who see it as a menace.', 'stitch.jpg'),
(19, 'Winnie The Pooh', 'While searching for honey, Pooh and his friends embark on an adventure to find Eeyore missing tail and rescue Christopher Robin from an unknown monster called The Backson.', 'winnie.jpg'),
(20, 'Mickey Mouse Clubhouse', 'Mickey and his friends Minnie, Donald, Pluto, Daisy, Goofy, Pete, Clarabelle and more go on fun and educational adventures.', 'mickey.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cartoons`
--
ALTER TABLE `cartoons`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cartoons`
--
ALTER TABLE `cartoons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
