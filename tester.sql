-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Gegenereerd op: 14 jan 2016 om 17:46
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
  `sunday` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=105 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `members`
--

INSERT INTO `members` (`memberID`, `username`, `password`, `email`, `active`, `activeAdmin`, `resetToken`, `resetComplete`, `firstname`, `lastname`, `address`, `zipcode`, `city`, `phone`, `sex`, `image`, `description`, `NL`, `GE`, `EN`, `ES`, `RU`, `FR`, `IT`, `CH`, `usertype`, `monday`, `tuesday`, `wednesday`, `thursday`, `friday`, `saturday`, `sunday`, `twitter`, `facebook`, `linkedin`) VALUES
(1, 'Jair', '$2y$10$/bwIM6Psrg/kijouoO/./eJS.ZfMSJtzsLSLyW/h3/dbVzChOZTJ2', 'test@gmail.com', 'Yes', 'Yes', NULL, 'No', 'Jair', 'Zijp', '1', '1531PV', 'Wormer', '0642049060', '', 'e3161b2f6e6c75ad4b3c6e16bc55823b.png', 'Hello, it''s me', 'good', 'good', 'good', 'good', 'moderate', 'good', 'good', 'good', '', '12:00 - 15:31', '12:00 - 15:25', '9:00 - 15:00', '9:00 - 15:00', '9:00 - 15:00', '9:00 - 15:00', '10:00 - 16:00', 'Jair Zijp', 'facebook.com/jairzijp', 'Jair Zijp'),
(103, 'admin', '$2y$10$/bwIM6Psrg/kijouoO/./eJS.ZfMSJtzsLSLyW/h3/dbVzChOZTJ2', 'jairzijp123@gmail.com', 'Yes', 'Yes', NULL, 'No', 'Admin', 'Admin', 'admin', 'admin', 'admin', '06', '', 'e703f6dfb08ec143a7151378aa08a751.png', 'Hi I''m the admin.', 'goed', 'goed', 'matig', 'goed', 'goed', 'onvoldoende', 'goed', 'matig', 'admin', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `reviews`
--

CREATE TABLE IF NOT EXISTS `reviews` (
  `id` int(11) NOT NULL,
  `memberID` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `rating` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `reviews`
--

INSERT INTO `reviews` (`id`, `memberID`, `username`, `name`, `email`, `phone`, `message`, `rating`, `created_at`) VALUES
(2, 1, 'Jair', 'Jair', 'jairzijp123@gmail.com', '0642049060', 'Super leuk', '4', '2016-01-13 22:51:33'),
(4, 104, 'jair@dutchwebdevelopment.nl', 'Jaja', 'jairzijp123@gmail.com', 'a12345', 'sdsdfsrgsgr', '2', '2016-01-13 23:15:50'),
(5, 1, 'Jair', 'Jaja', 'jair@dutchwebdevelopment.nl', '0642049060', 'sfsdfrgsrg', '4', '2016-01-13 23:18:01'),
(6, 1, 'Jair', 'Jair Zijp', 'jair@dutchwebdevelopment.nl', '0642049060', 'sdasdsdfsdf', '1', '2016-01-13 23:18:58');

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
  `disabled` varchar(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `tours`
--

INSERT INTO `tours` (`id`, `memberID`, `username`, `name`, `image`, `price`, `description`, `adults`, `aged`, `children`, `disabled`) VALUES
(64, 1, 'Jair', 'Vondelpark', 'dfd804c9da24aff3f6f4e7d99e3cd1c0.jpg', 8, 'Leuke tour door het vondelpark', 'Yes', 'Yes', 'Yes', 'Yes'),
(65, 1, 'Jair', 'De Dam', 'ceb39caf378e103d16237e2a48251162.jpg', 5, 'Leuke tour over de Dam!', 'Yes', 'Yes', 'Yes', 'Yes'),
(66, 1, 'Jair', 'Rembrandtplein', '9830898bf4ed2de80155ca4ea74f3c70.jpg', 11, 'Leuke tour over Rembrandtplein', 'Yes', 'Yes', 'Yes', 'Yes');

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
-- Indexen voor tabel `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT voor een tabel `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
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
