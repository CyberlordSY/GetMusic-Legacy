--   phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: fdb32.awardspace.net
-- Generation Time: May 14, 2023 at 11:54 AM
-- Server version: 5.7.40-log
-- PHP Version: 8.1.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `3969136_gautam`
--
CREATE DATABASE IF NOT EXISTS `3969136_gautam` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `3969136_gautam`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'siddharth yadav', '$2y$10$5YXmPEXAEoMWgftjqd/CM.aGonF2Vo7fom6Koq.98aVzI3VplhZSa');

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE `albums` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `artist` int(11) NOT NULL,
  `genre` int(11) NOT NULL,
  `artworkPath` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `albums`
--

INSERT INTO `albums` (`id`, `title`, `artist`, `genre`, `artworkPath`) VALUES
(1, 'War', 1, 1, 'assets/images/artwork/war.jpg'),
(2, 'Coolie No. 1', 4, 3, 'assets/images/artwork/coolie.jpg'),
(3, 'Hero no 1', 4, 3, 'assets/images/artwork/hero no 1.jpg'),
(4, 'Bahubali ', 13, 1, 'assets/images/artwork/bahubali.jpg'),
(5, 'Bahubali 2', 13, 1, 'assets/images/artwork/bahubali 2.jpg'),
(6, 'Street Dancer 3D', 25, 7, 'assets/images/artwork/Street Dancer 3D.jpg'),
(7, 'Hello Charlie ', 34, 8, 'assets/images/artwork/hello charlie.jpg'),
(8, 'Dhoom 3', 37, 1, 'assets/images/artwork/dhoom 3.jpg'),
(9, 'Krish 3', 41, 9, 'assets/images/artwork/krish.jpg'),
(10, 'Dangal', 44, 10, 'assets/images/artwork/dangal.jpg'),
(11, 'Happy New Year', 51, 7, 'assets/images/artwork/Happy New Year.jpg'),
(12, 'Housefull 4', 55, 11, 'assets/images/artwork/housefull 4.jpg'),
(13, 'shershaah', 60, 1, 'assets/images/artwork/Shershah.jpg'),
(14, 'Bhuj', 64, 4, 'assets/images/artwork/Wallpaper.jpg'),
(15, 'Kesari', 67, 1, 'assets/images/artwork/Poster.jpg'),
(16, 'The Forgotten Army - Azaadi Ke Liye', 72, 4, 'assets/images/artwork/forgoten army.jpg'),
(17, 'Taal', 74, 5, 'assets/images/artwork/Taal-Se-Taal-Alka-Yagnik-500-500.jpg'),
(18, 'Munna Bhai M.B.B.S', 76, 8, 'assets/images/artwork/MBBS.jpg'),
(19, 'Commando 3', 80, 1, 'assets/images/artwork/commando 3.jpg'),
(20, '3 Idiots', 76, 8, 'assets/images/artwork/3 Idiots.jpg'),
(21, 'Badshah', 84, 13, 'assets/images/artwork/Sajna,-Say-Yes-To-The-Dress-Badshah-500-500.jpg'),
(22, 'Super 30', 85, 11, 'assets/images/artwork/super 30.jpg'),
(23, 'Pushpa', 90, 11, 'assets/images/artwork/pushpa.jpg'),
(24, 'Boothnath', 92, 1, 'assets/images/artwork/bhoothnath.jpg'),
(25, 'Bhootnath Returns', 44, 1, 'assets/images/artwork/bhootnath returns.jpg'),
(26, 'Emiway Bantai', 99, 13, 'assets/images/artwork/Emiway Bantai.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `artists`
--

CREATE TABLE `artists` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artists`
--

INSERT INTO `artists` (`id`, `name`) VALUES
(1, 'Siddharth Anand'),
(2, 'Vishal Dadlani'),
(3, 'Shilpa Rao'),
(4, 'David Dhawan'),
(5, 'Alka Yagnik'),
(6, 'Monali Thakur'),
(7, 'Chandana Dixit'),
(8, 'Darshan Raval'),
(9, 'Neha Kakkar'),
(10, 'Raj Pandit'),
(11, 'Sadhana Sargam'),
(12, 'Sonu Nigam'),
(13, 'S. S. Rajamouli'),
(14, 'Ramya Behara'),
(15, 'Bombay Jayashri'),
(16, 'Swetha Raj'),
(17, 'Neeti Mohan'),
(18, 'Mounima'),
(19, 'Palak Muchhal'),
(20, 'Mohana Bhogaraju'),
(21, 'Kailash Kher'),
(22, 'Aditi Paul'),
(23, 'Madhushree'),
(24, 'Kaala Bhairava'),
(25, 'Remo D Souza'),
(26, 'Parampara Thakur'),
(27, 'Jasmine Sandlas'),
(28, 'Bohemia'),
(29, 'Tulsi Kumar'),
(30, 'Shankar Mahadevan'),
(31, 'Siddharth Basrur'),
(32, 'Kumar Sanu'),
(33, 'Udit Narayan'),
(34, 'Pankaj Saraswat'),
(35, 'Kanika Kapoor'),
(36, 'Nakash Aziz'),
(37, 'Vijay Krishna Acharya'),
(38, 'Julius Packiam'),
(39, 'Sunidhi Chauhan'),
(40, 'Mohit Chauhan'),
(41, 'Rakesh Roshan'),
(42, 'Alisha Chinai'),
(43, 'Shreya Ghoshal'),
(44, 'Nitesh Tiwari'),
(45, 'Daler Mehndi'),
(46, 'Sarwar Khan'),
(47, 'Jyoti Nooran'),
(48, 'Arijit Singh'),
(49, 'Raftaar'),
(50, 'Jonita Gandhi'),
(51, 'Farah Khan'),
(52, 'Mika Singh'),
(53, 'Sukhwinder Singh'),
(54, 'Instrumental'),
(55, 'Farhad Samji'),
(56, 'Jyotica Tangri'),
(57, 'Sohail Sen'),
(58, 'Danish Sabri'),
(59, 'Sajid Khan'),
(60, 'Vishnuvardhan'),
(62, 'B Praak'),
(63, 'Asees Kaur'),
(64, 'Abhishek Dudhaiya'),
(65, 'Jubin Nautiyal'),
(66, 'Pratibha Baghel'),
(67, ' Anurag Singh'),
(68, 'Jazzy B'),
(69, 'Jasleen Royal'),
(70, 'Jasbir Jassi'),
(71, 'Brijesh Shandilya'),
(72, 'Kabir Khan'),
(73, 'Shaan'),
(74, 'Subhash Ghai'),
(75, 'A.R. Rahman'),
(76, 'Rajkumar Hirani'),
(77, 'Arshad Warsi'),
(78, 'Vinod Rathod'),
(79, 'Anu Malik'),
(80, 'Aditya Datt'),
(81, 'Farhad Bhiwandiwala'),
(82, 'Ankit Tiwari'),
(83, 'Suraj Jagan'),
(84, 'Badshah'),
(85, 'Vikas Bahl'),
(86, 'Arohi Mhatre'),
(87, 'Hrithik Roshan'),
(88, 'Chaitally Parmar'),
(90, 'Sukumar'),
(91, 'Javed Ali'),
(92, 'Vivek Sharma'),
(93, 'Amitabh Bachchan'),
(94, 'Sneha Suresh'),
(95, 'anish'),
(96, 'Aman Trikha'),
(97, 'Yo Yo Honey Singh'),
(98, 'Rituraj'),
(99, 'Emiway Bantai');

-- --------------------------------------------------------

--
-- Table structure for table `genres`
--

CREATE TABLE `genres` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `genres`
--

INSERT INTO `genres` (`id`, `name`) VALUES
(1, 'Action'),
(2, 'Disco'),
(3, 'Romance'),
(4, 'war'),
(5, 'Bollywood'),
(6, 'musical'),
(7, 'dance'),
(8, 'Comedy'),
(9, 'Superhero'),
(10, 'sports'),
(11, 'Drama'),
(12, 'love'),
(13, 'Rap');

-- --------------------------------------------------------

--
-- Table structure for table `playlists`
--

CREATE TABLE `playlists` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `owner` varchar(50) NOT NULL,
  `dateCreated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `playlists`
--

INSERT INTO `playlists` (`id`, `name`, `owner`, `dateCreated`) VALUES
(2, 'my', 'praveen', '2021-11-18 00:00:00'),
(6, 'Gautam', 'gautamdis3433', '2021-11-19 00:00:00'),
(8, 'romantic', 'praveen', '2022-01-29 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `playlistsongs`
--

CREATE TABLE `playlistsongs` (
  `id` int(11) NOT NULL,
  `songId` int(11) NOT NULL,
  `playlistId` int(11) NOT NULL,
  `playlistOrder` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `playlistsongs`
--

INSERT INTO `playlistsongs` (`id`, `songId`, `playlistId`, `playlistOrder`) VALUES
(2, 68, 2, 1),
(6, 29, 2, 5),
(7, 73, 2, 6),
(8, 77, 2, 7),
(9, 61, 2, 8),
(10, 34, 2, 9),
(11, 45, 2, 10),
(12, 1, 2, 11),
(14, 50, 2, 13),
(15, 55, 2, 14),
(16, 58, 2, 15),
(18, 50, 6, 1),
(19, 54, 6, 2),
(20, 57, 6, 3),
(21, 58, 6, 4),
(22, 28, 6, 5),
(23, 29, 6, 6),
(24, 1, 6, 7),
(25, 61, 6, 8),
(26, 68, 6, 9),
(29, 93, 6, 10),
(30, 95, 6, 11),
(31, 89, 8, 1),
(32, 64, 8, 2),
(33, 65, 8, 3),
(34, 66, 8, 4),
(35, 67, 8, 5),
(36, 72, 8, 6),
(37, 71, 8, 7),
(38, 92, 8, 8);

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

CREATE TABLE `songs` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `artist` int(11) NOT NULL,
  `album` int(11) NOT NULL,
  `genre` int(11) NOT NULL,
  `duration` varchar(8) NOT NULL,
  `path` varchar(500) NOT NULL,
  `albumOrder` int(11) NOT NULL,
  `plays` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `songs`
--

INSERT INTO `songs` (`id`, `title`, `artist`, `album`, `genre`, `duration`, `path`, `albumOrder`, `plays`) VALUES
(1, 'Jai Jai Shankar ', 2, 1, 4, '3:50', 'assets/music/Jai Jai Shivshankar.mp3', 1, 20),
(2, 'Ghungroo', 3, 1, 5, '5:03', 'assets/music/Ghungroo.mp3', 2, 8),
(3, 'Mirchi Lagi', 5, 2, 3, '5:22', 'assets/music/Mirchi Lagi.mp3', 1, 25),
(4, 'Mummy Kassam', 6, 2, 3, '3:33', 'assets/music/MummyKassam.mp3', 2, 6),
(5, 'Husn Hai Suhana', 7, 2, 3, '4:27', 'assets/music/suhana.mp3', 3, 9),
(6, 'Tere Siva', 8, 2, 3, '3:07', 'assets/music/Tere Siva.mp3', 4, 7),
(7, 'Teri Bhabhi', 9, 2, 3, '3:22', 'assets/music/Teri Bhabhi.mp3', 5, 7),
(8, 'Title Track', 10, 2, 5, '2:07', 'assets/music/Title Track.mp3', 6, 21),
(9, 'Tum Humpe Marte Ho', 11, 3, 5, '5:14', 'assets/music/Tum Humpe Marte Ho.mp3', 1, 28),
(10, 'U.P Wala Thumka', 12, 3, 5, '4:56', 'assets/music/U.P Wala Thumka.mp3', 2, 32),
(11, 'Jiyo Re Bahubali', 14, 5, 1, '3:29', 'assets/music/jiyo_re_bahubali.mp3', 1, 37),
(12, 'Mamta Se Bhari', 15, 4, 1, '3:54', 'assets/music/Mamta Se Bhari.mp3', 1, 18),
(13, 'Swapn Sunehere', 16, 4, 1, '1:43', 'assets/music/Swapn Sunehere.mp3', 2, 17),
(14, 'Khoya Hain', 17, 4, 1, '5:40', 'assets/music/Khoya Hain.mp3', 3, 10),
(15, 'Kaun Hain Voh', 18, 4, 1, '3:23', 'assets/music/Kaun Hain Voh.mp3', 4, 11),
(16, 'Panchhi Bole', 19, 4, 1, '4:25', 'assets/music/Panchhi Bole.mp3', 5, 11),
(17, 'Manohari', 20, 4, 1, '3:42', 'assets/music/Manohari.mp3', 6, 16),
(18, 'Jal Rahin Hain', 21, 4, 1, '3:25', 'assets/music/Jal Rahin Hain.mp3', 7, 8),
(19, 'Veeron Ke Veer Aa', 22, 5, 1, '3:28', 'assets/music/Veeron Ke Veer.mp3', 2, 12),
(20, 'Soja Zara', 23, 5, 1, '4:56', 'assets/music/Soja Zara.mp3', 3, 32),
(21, 'Jay Jaykara', 21, 5, 1, '3:31', 'assets/music/Jay Jaykara.mp3', 4, 16),
(22, 'Shivam', 24, 5, 1, '2:56', 'assets/music/Shivam.mp3', 5, 30),
(23, 'Muqabla', 26, 6, 7, '2:56', 'assets/music/Muqabla.mp3', 1, 25),
(24, 'Garmi', 9, 6, 7, '3:02', 'assets/music/Garmi.mp3', 2, 27),
(25, 'Illegal Weapon 2.0', 27, 6, 7, '3:08', 'assets/music/Illegal Weapon 2.0.mp3', 3, 12),
(26, 'Dua Karo', 28, 6, 7, '4:29', 'assets/music/Dua Karo.mp3', 4, 17),
(27, 'Lagdi Lahore Di', 29, 6, 2, '3:35', 'assets/music/Lagdi Lahore Di.mp3', 5, 15),
(28, 'Hindustani', 30, 6, 7, '2:26', 'assets/music/Hindustani.mp3', 6, 45),
(29, 'Bezubaan Kab Se', 31, 6, 7, '4:31', 'assets/music/Bezubaan Kab Se.mp3', 7, 88),
(30, ' Mohabbat Ki Nahin Jaati', 11, 3, 3, '5:51', 'assets/music/Mohabbat Ki Nahin Jaati.mp3', 3, 19),
(31, 'Saaton Janam Tum', 32, 3, 3, '5:21', 'assets/music/Saaton Janam Tum.mp3', 4, 14),
(32, 'Sona Kitna Sona Hai', 33, 3, 3, '4:53', 'assets/music/Sona Kitna Sona Hai.mp3', 5, 11),
(33, 'Soneya Ve', 35, 7, 8, '2:36', 'assets/music/Soneya Ve.mp3', 2, 10),
(34, 'One Two One Two Dance', 36, 7, 8, '3:36', 'assets/music/One Two One Two Dance.mp3', 1, 15),
(35, 'Bande Hain Hum Uske', 38, 8, 1, '3:04', 'assets/music/Bande Hain Hum Uske.mp3', 1, 44),
(37, 'Kamli', 39, 8, 1, '3:55', 'assets/music/Kamli.mp3', 2, 16),
(38, ' Malang', 3, 8, 1, '4:33', 'assets/music/Malang.mp3', 3, 17),
(39, 'Tu Hi Junoon', 40, 8, 1, '5:07', 'assets/music/Tu Hi Junoon.mp3', 4, 18),
(40, ' Dil Tu Hi Bataa', 42, 9, 9, '6:40', 'assets/music/Dil Tu Hi Bataa.mp3', 1, 10),
(41, 'God Allah Aur Bhagwan', 43, 9, 9, '6:27', 'assets/music/God Allah Aur Bhagwan.mp3', 2, 33),
(42, 'Raghupati Raghav', 6, 9, 9, '5:21', 'assets/music/Raghupati Raghav.mp3', 3, 7),
(43, 'Dhaakad', 49, 10, 10, '2:56', 'assets/music/Dhaakad.mp3', 1, 11),
(44, 'Gilehriyaan', 50, 10, 10, '3:40', 'assets/music/Gilehriyaan.mp3', 2, 16),
(45, 'Haanikaarak Bapu', 46, 10, 10, '4:22', 'assets/music/Haanikaarak Bapu.mp3', 3, 7),
(48, 'tittle song', 45, 10, 10, '4:58', 'assets/music/Title Song.mp3', 4, 4),
(49, 'Dance Like A Chammiya', 39, 11, 7, '3:31', 'assets/music/Dance Like A Chammiya.mp3', 1, 26),
(50, 'India Waale', 17, 11, 7, '3:58', 'assets/music/India Waale.mp3', 2, 25),
(51, 'Kamlee', 35, 11, 7, '3:43', 'assets/music/Kamlee.mp3', 3, 14),
(52, 'Lovely', 35, 11, 7, '3:40', 'assets/music/Lovely.mp3', 4, 7),
(53, 'Manwa Laage', 43, 11, 7, '4:32', 'assets/music/Manwa Laage.mp3', 5, 7),
(54, 'Nonsense Ki Night', 52, 11, 7, '3:02', 'assets/music/Nonsense Ki Night.mp3', 6, 23),
(55, 'Satakli', 53, 11, 7, '3:42', 'assets/music/Satakli.mp3', 7, 16),
(56, 'Sharabi', 2, 11, 7, '4:20', 'assets/music/Sharabi.mp3', 8, 40),
(57, 'The Heist (Instrumental)', 54, 11, 7, '1:57', 'assets/music/The Heist (Instrumental).mp3', 9, 17),
(58, 'World Dance Medley', 17, 11, 7, '5:22', 'assets/music/World Dance Medley.mp3', 10, 12),
(59, 'Ek Chumma', 56, 12, 11, '4:05', 'assets/music/Ek Chumma.mp3', 1, 27),
(60, 'Shaitan Ka Saala', 57, 12, 11, '2:27', 'assets/music/Shaitan Ka Saala.mp3', 2, 27),
(61, 'The Bhoot Song', 52, 12, 11, '3:58', 'assets/music/The Bhoot Song.mp3', 3, 32),
(62, 'Chammo', 43, 12, 11, '4:35', 'assets/music/Chammo.mp3', 4, 20),
(63, 'Badla', 58, 12, 11, '2:32', 'assets/music/Badla.mp3', 5, 27),
(64, 'Kabhii Tumhhe', 8, 13, 1, '3:50', 'assets/music/kabhii-tumhhe-shershaah.mp3', 1, 53),
(65, 'Mann Bharryaa 2.0', 62, 13, 1, '4:26', 'assets/music/Mann Bharryaa 2.0.mp3', 2, 38),
(66, 'Raataan Lambiyan', 63, 13, 1, '3:50', 'assets/music/Raataan Lambiyan.mp3', 3, 39),
(67, 'Ranjha', 62, 13, 1, '3:48', 'assets/music/ranjha.mp3', 4, 30),
(68, 'Bhai Bhai ', 52, 14, 4, '3:40', 'assets/music/bhai-bhai.mp3', 1, 14),
(69, 'Desh Mere', 48, 14, 4, '3:23', 'assets/music/desh-mere.mp3', 2, 27),
(70, 'Hanjugam', 65, 14, 4, '3:45', 'assets/music/hanjugam-.mp3', 3, 13),
(71, ' Rammo Rammo', 33, 14, 4, '3:39', 'assets/music/rammo-rammo.mp3', 4, 4),
(72, 'Ishq Mera', 66, 14, 4, '2:00', 'assets/music/Ishq Mera.mp3', 5, 5),
(73, 'Ajj Singh Garjega', 68, 15, 1, '4:02', 'assets/music/Ajj Singh Garjega - jazzy B.mp3', 1, 13),
(74, 'Deh Shiva', 69, 15, 1, '2:36', 'assets/music/Deh Shiva (Female Version) - Jasleen Royal.mp3', 2, 12),
(76, 'Sanu Kehndi', 71, 15, 1, '2:48', 'assets/music/Sanu Kehndi -  Brijesh Shandilya.mp3', 3, 17),
(77, 'Teri Mitti', 62, 15, 1, '5:14', 'assets/music/Teri Mitti - B Praak.mp3', 4, 18),
(78, 'Ve Maahi', 48, 15, 1, '3:44', 'assets/music/Ve Maahi -  Arijit Singh.mp3', 5, 17),
(79, 'Azaadi Ke Liye', 48, 16, 4, '3:46', 'assets/music/Azaadi Ke Liye.mp3', 1, 33),
(80, 'Ae Dil Bata', 65, 16, 4, '5:02', 'assets/music/Ae Dil Bata.mp3', 2, 11),
(81, 'Chanda', 73, 16, 4, '3:55', 'assets/music/Chanda.mp3', 3, 9),
(82, 'Mere Watan', 48, 16, 4, '3:55', 'assets/music/Mere Watan.mp3', 4, 8),
(83, 'Taal Se Taal', 33, 17, 5, '6:18', 'assets/music/Taal Se Taal.mp3', 1, 21),
(84, 'Ramta Jogi', 5, 17, 5, '6:17', 'assets/music/Ramta Jogi.mp3', 3, 21),
(85, 'Raga Dance', 75, 17, 5, '2:53', 'assets/music/Raga Dance.mp3', 4, 5),
(86, 'Ni Main Samajh Gayi', 53, 17, 5, '4:33', 'assets/music/Ni Main Samajh Gayi.mp3', 5, 2),
(87, 'Taal Se Taal Western', 53, 17, 5, '2:34', 'assets/music/Taal Se Taal Western.mp3', 2, 25),
(88, 'Apun Jaise Tapori', 77, 18, 8, '5:31', 'assets/music/Apun Jaise Tapori.mp3', 1, 16),
(89, 'Chann Chann', 78, 18, 12, '6:59', 'assets/music/Chann Chann.mp3', 2, 22),
(90, 'Dekh Le', 79, 18, 12, '3:23', 'assets/music/Dekh Le.mp3', 3, 14),
(91, 'M Bole To', 78, 18, 8, '8:19', 'assets/music/M Bole To.mp3', 4, 7),
(92, 'Subha Ho Gayi Mamu', 73, 18, 5, '4:01', 'assets/music/Subha Ho Gayi Mamu.mp3', 5, 22),
(93, 'Tera Baap Aaya', 81, 19, 1, '2:45', 'assets/music/Tera Baap Aaya.mp3', 1, 47),
(94, 'Akhiyaan Milavanga', 48, 19, 1, '5:02', 'assets/music/Akhiyaan Milavanga.mp3', 2, 28),
(95, 'Iraade Kar Buland', 53, 19, 1, '3:48', 'assets/music/Iraade Kar Buland.mp3', 3, 31),
(96, 'Main Woh Raat Hoon', 82, 19, 1, '3:54', 'assets/music/Main Woh Raat Hoon.mp3', 4, 21),
(97, 'Aal Izz Well', 73, 20, 8, '4:34', 'assets/music/128-Aal Izz Well - 3 Idiots 128 Kbps.mp3', 1, 19),
(98, 'Behti Hawa Sa Tha Woh', 73, 20, 8, '4:59', 'assets/music/Behti Hawa Sa Tha Woh.mp3', 2, 28),
(99, 'Give Me Some Sunshine', 83, 20, 8, '4:05', 'assets/music/Give Me Some Sunshine.mp3', 3, 38),
(100, 'Jaane Nahin Denge Tujhe', 12, 20, 8, '3:30', 'assets/music/Jaane Nahin Denge Tujhe.mp3', 4, 20),
(101, 'Zoobi Doobi', 12, 20, 8, '4:06', 'assets/music/Zoobi Doobi.mp3', 5, 18),
(102, ' Zoobi Doobi (Remix)', 12, 20, 8, '3:27', 'assets/music/Zoobi Doobi (Remix).mp3', 6, 19),
(103, 'Sajna Say Yes To The Dress', 84, 21, 13, '2:38', 'assets/music/Sajna Say Yes To The Dress.mp3', 1, 50),
(104, 'Paani Paani', 84, 21, 13, '2:54', 'assets/music/Paani Paani.mp3', 2, 48),
(105, 'DJ Wale babu', 84, 21, 13, '2:36', 'assets/music/Badshah_-_DJ_Waley_Babu___feat_Aastha_Gill___Party_Anthem_Of_2015___DJ_Wale_Babu(128k)[1].mp3', 3, 23),
(106, 'Kamaal', 84, 21, 13, '2:58', 'assets/music/Kamaal.mp3', 4, 37),
(107, 'Genda Phool', 84, 21, 13, '2:50', 'assets/music/Genda Phool.mp3', 5, 23),
(108, 'Sab Sahi Hai Bro', 84, 21, 13, '2:49', 'assets/music/Sab Sahi Hai Bro.mp3', 6, 36),
(109, 'Paagal', 84, 21, 13, '2:49', 'assets/music/Paagal.mp3', 7, 18),
(110, 'Abhi Toh Party Shuru Hui Hai', 84, 21, 13, '2:59', 'assets/music/Abhi Toh Party Shuru Hui Hai.mp3', 8, 18),
(112, 'Jugraafiya', 43, 22, 12, '03:05', 'assets/music/Jugraafiya_-_Full_Video__Super_30__Hrithik_Roshan_&_Mrunal_Thakur__Udit_Narayan_&_Shreya_Ghoshal(128k).mp3', 1, 2),
(113, 'Niyam Ho', 86, 22, 12, '4:00', 'assets/music/Niyam_Ho.mp3', 2, 10),
(114, 'Paisa', 2, 22, 12, '3:52', 'assets/music/Paisa.mp3', 3, 9),
(115, 'Question Mark', 87, 22, 12, '2:49', 'assets/music/Question_Mark.mp3', 4, 21),
(116, 'Basanti No Dance', 88, 22, 7, '05:04', 'assets/music/Basanti_No_Dance.mp3', 5, 8),
(117, 'Srivalli', 91, 23, 12, '3:41', 'assets/music/Srivalli.mp3', 1, 37),
(118, 'Jaago Jaago Bakre', 2, 23, 1, '4:55', 'assets/music/Jaago Jaago Bakre.mp3', 2, 32),
(119, 'Eyy Bidda Ye Mera Adda', 36, 23, 1, '3:56', 'assets/music/Eyy Bidda Ye Mera Adda.mp3', 3, 15),
(120, 'Saami Saami', 39, 23, 1, '3:47', 'assets/music/Saami Saami.mp3', 4, 15),
(121, 'Oo Bolega Ya Oo Oo Bolega', 35, 23, 1, '3:46', 'assets/music/Oo Bolega Ya Oo Oo Bolega.mp3', 5, 4),
(122, 'Mere Buddy', 93, 24, 1, '4:23', 'assets/music/Mere Buddy.mp3', 1, 2),
(123, 'Hum To Hain Aandhi', 94, 24, 1, '4:40', 'assets/music/Hum To Hain Aandhi.mp3', 2, 2),
(124, 'Banku Bhaiyya', 53, 24, 1, '4:10', 'assets/music/Banku Bhaiyya.mp3', 3, 1),
(125, 'Samay Ka Pahiya', 53, 24, 1, '7:20', 'assets/music/Samay Ka Paisa.mp3', 4, 3),
(126, 'Chalo Jaane Do', 93, 24, 1, '5:06', 'assets/music/Chalo Jaane Do.mp3', 5, 2),
(127, 'Dharavi Rap', 95, 25, 1, '2:32', 'assets/music/Dharavi Rap.mp3', 1, 9),
(128, 'Har Har Gange', 96, 25, 1, '3:13', 'assets/music/Har Har Gange.mp3', 2, 5),
(129, 'Party To Banti Hai', 52, 25, 1, '4:19', 'assets/music/Party To Banti Hai.mp3', 3, 4),
(130, 'Party With The Bhoothnath', 97, 25, 1, '5:21', 'assets/music/Party With The Bhoothnath.mp3', 4, 11),
(131, 'Sahib', 98, 25, 1, '4:21', 'assets/music/Sahib.mp3', 5, 6),
(132, 'Firse Machayenge', 99, 26, 13, '3:27', 'assets/music/Firse Machayenge.mp3', 1, 38);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(255) NOT NULL,
  `Username` text NOT NULL,
  `Password` text NOT NULL,
  `Email` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(32) NOT NULL,
  `signup_date` datetime NOT NULL,
  `profile_pic` varchar(500) NOT NULL,
  `admin` enum('1','0') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `firstname`, `lastname`, `email`, `password`, `signup_date`, `profile_pic`, `admin`) VALUES
(1, 'siddharthyadav', 'Siddharth', 'Yadav', 'siddharthdis3432@gmail.com', 'f72e9a1ac26eb390ef16669c43bac7f3', '2021-11-02 00:00:00', 'assets/images/profile-pics/user.png', '1'),
(2, 'gautamdis3433', 'Gautam', 'Yadav', 'Dewamati2018@gmail.com', '246d49500885f797cb7e28e8ae692ca3', '2021-11-03 00:00:00', 'assets/images/profile-pics/user.png', '1'),
(3, 'Praveen', 'Praveen', 'Yadav', 'Praveen6206698995yadav@gmail.com', '884119a93539de6daa466116e801fdf5', '2021-11-03 00:00:00', 'assets/images/profile-pics/user.png', '0'),
(4, 'ganesh', 'Ganesh', 'Yadav', 'Glgop108@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-11-04 00:00:00', 'assets/images/profile-pics/user.png', '0'),
(7, 'Mukesh', 'Mukesh', 'Yadav', 'Mukeshkryadav115@gmail.com', '22492aa28321f17a5701e29298b437a5', '2022-03-05 00:00:00', 'assets/images/profile-pics/user.png', '0'),
(8, 'Krishnayadav', 'Krishna', 'Yadav', 'Krishnayadav42007@gmail.com', '6e599032120cdae705b7635b87917bd8', '2022-03-26 00:00:00', 'assets/images/profile-pics/user.png', '0'),
(9, 'Omicron', 'Omicron', 'Omicron', 'Omicron@yopmail.com', 'd035ecc1895d6d770b8ba7476410f651', '2022-08-11 00:00:00', 'assets/images/profile-pics/user.png', '0'),
(10, 'ShashiBhushan', 'Shashi', 'Yadav', 'Shashiyadav7462823203@gmail.com', 'd6de8aa75ef6ff6e5e7f9430e11cdae2', '2023-02-10 00:00:00', 'assets/images/profile-pics/user.png', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artists`
--
ALTER TABLE `artists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `playlists`
--
ALTER TABLE `playlists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `playlistsongs`
--
ALTER TABLE `playlistsongs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `songs`
--
ALTER TABLE `songs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD UNIQUE KEY `UNIQUE` (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `albums`
--
ALTER TABLE `albums`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `artists`
--
ALTER TABLE `artists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `genres`
--
ALTER TABLE `genres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `playlists`
--
ALTER TABLE `playlists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `playlistsongs`
--
ALTER TABLE `playlistsongs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `songs`
--
ALTER TABLE `songs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
