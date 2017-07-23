-- phpMyAdmin SQL Dump
-- version 4.0.10.18
-- https://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jul 22, 2017 at 07:04 PM
-- Server version: 5.6.35-cll-lve
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `perfectsnap`
--

-- --------------------------------------------------------

--
-- Table structure for table `perfectsnap`
--

CREATE TABLE IF NOT EXISTS `perfectsnap` (
  `username` varchar(50) NOT NULL,
  `useremail` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perfectsnap`
--

INSERT INTO `perfectsnap` (`username`, `useremail`) VALUES
('ken looo', 'knlockett@yahoo.com'),
('Andrea Lockett', 'hairnology@gmail.com'),
('Testman', 'Test@gmail.com'),
('Akita Smith', 'lip@yahoo.com'),
('Testman', 'Test@gmail.com'),
('Testman', 'Test@gmail.com'),
('Akita Smith', 'lip@yahoo.com'),
('Akita Smith', 'lip@yahoo.com'),
('Akita Smith', 'lip@yahoo.com'),
('Eric Jr Bailey', 'ebj@gmail.com'),
('june28th', 'fake@fake.com'),
('asdasdasd', 'asdas@test.com'),
('Eric Jr Bailey', 'test@test.com'),
('asdadasdasdasd', 'test@test.com'),
('example', 'test@test.com'),
('<?php echo $_GET[''username'']; ?>', '<?php echo $_GET[''password'']; ?>'),
('<?php echo $_POST[''username'']; ?>', '<?php echo $_POST[''password'']; ?>'),
('test', '<?php echo $_POST[''<script>alert("test")</script>'''),
('Test', 'Ken@gmail.com'),
('carl thomas', 'ct@gmail.com'),
('Joao assis', 'electric@gmail.com'),
('Andrea lockett', 'Hair@yahoo.com'),
('Andrea lockett', 'Hair@yahoo.com'),
('Andrea lockett', 'Hair@yahoo.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
