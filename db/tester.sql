-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Gegenereerd op: 09 dec 2015 om 11:59
-- Serverversie: 5.6.24
-- PHP-versie: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tester`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `memberID` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `active` varchar(255) NOT NULL,
  `activeAdmin` varchar(255) NOT NULL,
  `resetToken` varchar(255) DEFAULT NULL,
  `resetComplete` varchar(3) DEFAULT 'No',
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `zipcode` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'images/profile/profile,jpg',
  `description` varchar(2554) NOT NULL,
  `NL` varchar(255) NOT NULL,
  `GE` varchar(255) NOT NULL,
  `EN` varchar(255) NOT NULL,
  `ES` varchar(255) NOT NULL,
  `RU` varchar(255) NOT NULL,
  `FR` varchar(255) NOT NULL,
  `IT` varchar(255) NOT NULL,
  `CH` varchar(255) NOT NULL,
  `usertype` varchar(255) NOT NULL,
  `monday` varchar(255) NOT NULL,
  `tuesday` varchar(255) NOT NULL,
  `wednesday` varchar(255) NOT NULL,
  `thursday` varchar(255) NOT NULL,
  `friday` varchar(255) NOT NULL,
  `saturday` varchar(255) NOT NULL,
  `sunday` varchar(255) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=105 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `members`
--

INSERT INTO `members` (`memberID`, `username`, `password`, `email`, `active`, `activeAdmin`, `resetToken`, `resetComplete`, `firstname`, `lastname`, `address`, `zipcode`, `city`, `phone`, `sex`, `image`, `description`, `NL`, `GE`, `EN`, `ES`, `RU`, `FR`, `IT`, `CH`, `usertype`, `monday`, `tuesday`, `wednesday`, `thursday`, `friday`, `saturday`, `sunday`) VALUES
(1, 'Jair', '$2y$10$/bwIM6Psrg/kijouoO/./eJS.ZfMSJtzsLSLyW/h3/dbVzChOZTJ2', 'jair@dutchwebdevelopment.nl', 'Yes', 'Yes', NULL, 'No', 'Jair', 'Zijp', '1', '1531PV', 'Wormer', '0642049060', '', '', '                                                                                            ', '', '', '', '', '', '', '', '', '', '12:00 - 15:31', '', '', '', '', '', ''),
(104, 'jair@dutchwebdevelopment.nl', '$2y$10$.e5olF236aURDCyLcVnTee46eB8qxLFtxllr4q2fjkqnLmuHXlbwS', 'jair@dutchwebdevelopment.nl', '4bb048f53c9e643faa23051e104c4b07', '', NULL, 'No', 'Jair', 'Zijp', '1', '1531PV', 'Wormer', '0642049060', 'male', 'images/profile/profile,jpg', '', 'onvoldoende', 'onvoldoende', 'onvoldoende', 'onvoldoende', 'onvoldoende', 'onvoldoende', 'onvoldoende', 'onvoldoende', '', '', '', '', '', '', '', ''),
(103, 'admin', '$2y$10$/bwIM6Psrg/kijouoO/./eJS.ZfMSJtzsLSLyW/h3/dbVzChOZTJ2', 'jairzijp123@gmail.com', 'Yes', 'Yes', NULL, 'No', 'Admin', 'Admin', 'admin', 'admin', 'admin', '06', '', 'e703f6dfb08ec143a7151378aa08a751.png', 'Hi I''m the admin.', 'goed', 'goed', 'matig', 'goed', 'goed', 'onvoldoende', 'goed', 'matig', 'admin', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tours`
--

CREATE TABLE IF NOT EXISTS `tours` (
  `id` int(11) NOT NULL,
  `memberID` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `adults` varchar(11) NOT NULL,
  `aged` varchar(11) NOT NULL,
  `children` varchar(11) NOT NULL,
  `disabled` varchar(11) NOT NULL,
  `monday` varchar(255) NOT NULL,
  `tuesday` varchar(255) NOT NULL,
  `wednesday` varchar(255) NOT NULL,
  `thursday` varchar(255) NOT NULL,
  `friday` varchar(255) NOT NULL,
  `saturday` varchar(255) NOT NULL,
  `sunday` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `tours`
--

INSERT INTO `tours` (`id`, `memberID`, `username`, `name`, `image`, `price`, `description`, `adults`, `aged`, `children`, `disabled`, `monday`, `tuesday`, `wednesday`, `thursday`, `friday`, `saturday`, `sunday`) VALUES
(64, 1, 'Jair', '1234rwe', '3f5644796108e0ff673a6a51eec4de16.jpg', 1234, '2e2e2e', 'No', 'No', 'No', 'Yes', '23:43 03:23', '12:23 13:24', '11:24 12:23', '05:42 23:11', '12:03 14:12', '14:02 14:04', '14:14 21:02'),
(65, 1, 'Jair', 'asdfg', '9c70480418cd84515f15eee076de62c8.jpg', 1234, 'Test', 'No', 'No', 'Yes', 'No', '02:45 12:34', '12:45 12:59', '21:03 04:23', '05:03 12:03', '23:02 ', ' ', ' '),
(66, 1, 'Jair', 'Test 123', '44cf803d03b373804d20debc71df5797.jpg', 123, 'Leuke tour door het bos', 'Yes', 'Yes', 'Yes', 'Yes', ' ', ' ', ' ', '12:30 ', ' ', ' ', ' ');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `ID` int(11) NOT NULL,
  `username` varchar(255) CHARACTER SET utf8 NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 NOT NULL,
  `user_id` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`ID`, `username`, `password`, `user_id`) VALUES
(1, 'admin', 'admin', 1);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`memberID`);

--
-- Indexen voor tabel `tours`
--
ALTER TABLE `tours`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `members`
--
ALTER TABLE `members`
  MODIFY `memberID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=105;
--
-- AUTO_INCREMENT voor een tabel `tours`
--
ALTER TABLE `tours`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=67;
--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
