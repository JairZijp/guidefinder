-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Gegenereerd op: 24 nov 2015 om 10:10
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
  `usertype` varchar(255) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=104 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `members`
--

INSERT INTO `members` (`memberID`, `username`, `password`, `email`, `active`, `activeAdmin`, `resetToken`, `resetComplete`, `firstname`, `lastname`, `address`, `zipcode`, `city`, `phone`, `sex`, `image`, `description`, `NL`, `GE`, `EN`, `ES`, `RU`, `FR`, `IT`, `CH`, `usertype`) VALUES
(1, 'Jair', '$2y$10$/bwIM6Psrg/kijouoO/./eJS.ZfMSJtzsLSLyW/h3/dbVzChOZTJ2', '', 'Yes', 'Yes', NULL, 'No', '', '', '', '', '', '', '', 'b05c518ec11ad8f5713ecac06ba7cbad.png', 'Hi my name is Jair', 'good', 'good', 'moderate', 'good', 'good', 'inadequate', 'good', 'moderate', ''),
(103, 'admin', '$2y$10$/bwIM6Psrg/kijouoO/./eJS.ZfMSJtzsLSLyW/h3/dbVzChOZTJ2', 'jairzijp123@gmail.com', 'Yes', 'Yes', NULL, 'No', 'Admin', 'Admin', 'admin', 'admin', 'admin', '06', 'admin', 'e703f6dfb08ec143a7151378aa08a751.png', 'Hi I''m the admin.', 'good', 'good', 'moderate', 'good', 'good', 'inadequate', 'good', 'moderate', 'admin');

-- --------------------------------------------------------s

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
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `tours`
--

INSERT INTO `tours` (`id`, `memberID`, `username`, `name`, `image`, `price`, `description`, `adults`, `aged`, `children`, `disabled`, `monday`, `tuesday`, `wednesday`, `thursday`, `friday`, `saturday`, `sunday`) VALUES
(64, 1, 'Jair', '1234rwe', '3f5644796108e0ff673a6a51eec4de16.jpg', 1234, '2e2e2e', 'No', 'No', 'No', 'Yes', '23:43 03:23', '12:23 13:24', '11:24 12:23', '05:42 23:11', '12:03 14:12', '14:02 14:04', '14:14 21:02');

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
  MODIFY `memberID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=104;
--
-- AUTO_INCREMENT voor een tabel `tours`
--
ALTER TABLE `tours`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=65;
--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
