-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 22. Nov 2017 um 16:14
-- Server-Version: 10.1.26-MariaDB
-- PHP-Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `searchlove`
--
DROP DATABASE IF EXISTS `searchlove`;
CREATE DATABASE IF NOT EXISTS `searchlove` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `searchlove`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `passwort` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `vorname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nachname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`id`, `email`, `passwort`, `vorname`, `nachname`, `created_at`, `updated_at`) VALUES
(4, 'seline.and2@gmail.com', '$2y$10$WSgvLXASBSvASksvTXtwRezoHZKVu10OhsWvlyTXJZVavboAxpBcm', 'Seline', 'Andenmatten', '2017-10-24 14:10:11', NULL),
(5, 'sabine@hesso.ch', '$2y$10$j.o0eYO9EQTULY4h1mCQbe0Kv14vyY1ceK9EV3ah2NChaUk8OokfC', 'Sabine', 'Andenmatten', '2017-10-24 15:02:38', NULL);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users2`
--

CREATE TABLE `users2` (
  `id` int(11) NOT NULL,
  `name` varchar(11) DEFAULT NULL,
  `vorname` varchar(9) DEFAULT NULL,
  `jahrgang` int(5) DEFAULT NULL,
  `geschlecht` varchar(5) DEFAULT NULL,
  `interessiert` varchar(18) DEFAULT NULL,
  `suchenach` varchar(10) DEFAULT NULL,
  `hobby1` varchar(20) DEFAULT NULL,
  `hobby2` varchar(16) DEFAULT NULL,
  `hobby3` varchar(17) DEFAULT NULL,
  `profilbild` varchar(20) DEFAULT NULL,
  `infos` varchar(20) DEFAULT NULL,
  `bild1` varchar(20) DEFAULT NULL,
  `bild2` varchar(20) DEFAULT NULL,
  `bild3` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `users2`
--
INSERT INTO `users2` (`id`, `name`, `vorname`, `jahrgang`, `geschlecht`, `interessiert`, `suchenach`, `hobby1`, `hobby2`, `hobby3`, `profilbild`, `infos`, `bild1`, `bild2`, `bild3`) VALUES
(1, 'Krebs', ' Natascha', 1996, ' weiblich', ' Männer', ' Freunde', ' Einzel... Teamsport', ' Reisen', ' Film und Foto', 0, 0, 0, 0, 0),
(2, 'Meyer', ' Alicia', 1999, ' weiblich', ' Männer', ' Beziehung', ' Gamen', ' Freunde treffen', ' Musik', 0, 0, 0, 0, 0),
(3, 'Chang', ' Lia', 2001, ' weiblich', ' Frauen', ' Beziehung', ' Freunde treffen', ' Musik', ' Socialmedia', 0, 0, 0, 0, 0),
(6, 'Weber', ' Brigitt', 1995, ' weiblich', ' Männer', ' Beziehung', ' Einzelsport', ' Shopping', ' Freunde treffen', 0, 0, 0, 0, 0),
(7, 'Keller', ' Franca', 1989, ' weiblich', ' Männer', ' Beziehung', ' Musik', ' Freunde treffen', ' Kunst', 0, 0, 0, 0, 0),
(8, 'Schmid', ' Kirsten', 1987, ' weiblich', ' Männer', ' Beziehung', ' Kunst', ' Sport', ' ', 0, 0, 0, 0, 0),
(9, 'Huber', ' Maria', 1984, ' weiblich', ' Frauen und Männer', ' Freunde', ' Sport', ' Freunde treffen', ' ', 0, 0, 0, 0, 0),
(10, 'Baumann', ' Petra', 1999, ' weiblich', ' Männer', ' Beziehung', ' Freunde treffen', ' ', ' ', 0, 0, 0, 0, 0),
(11, 'Moser', ' Ruth', 1957, ' weiblich', ' Männer', ' Beziehung', ' Theater', ' Literatur', ' ', 0, 0, 0, 0, 0),
(12, 'centino', ' Celina', 1998, ' weiblich', ' Männer', ' Beziehung', ' Socialmedia', ' ', ' ', 0, 0, 0, 0, 0),
(13, 'Müller', ' Philippe', 1998, ' männlich', ' Frauen', ' Beziehung', ' Sport', ' ', ' ', 0, 0, 0, 0, 0),
(14, 'Koch', ' Luca', 1997, ' männlich', ' Männer', ' Beziehung', ' Kochen', ' Kino', ' ', 0, 0, 0, 0, 0),
(15, 'Buchs', ' Rafael', 1987, ' männlich', ' Frauen', ' Beziehung', ' Musik', ' ', ' ', 0, 0, 0, 0, 0),
(16, 'Ritz', ' Tim', 1952, ' männlich', ' Frauen', ' Beziehung', ' Theater', ' ', ' ', 0, 0, 0, 0, 0),
(17, 'Studer', ' Peter', 1992, ' männlich', ' Frauen', ' Beziehung', ' Musik', ' ', ' ', 0, 0, 0, 0, 0),
(18, 'Salzgeber', ' Brett', 1982, ' männlich', ' Frauen und Männer', ' Beziehung', ' Freunde treffen', ' Musik', ' ', 0, 0, 0, 0, 0),
(19, 'Zimmermann', ' Michael', 1987, ' männlich', ' Männer', ' Beziehung', ' Sport', ' Shopping', ' Freunde treffen', 0, 0, 0, 0, 0),
(20, 'Schmidt', ' Sandro', 1992, ' männlich', ' Frauen', ' Beziehung', ' Musik', ' Freunde treffen', ' ', 0, 0, 0, 0, 0),
(21, 'Eggel', ' Jan', 1989, ' männlich', ' Männer', ' Beziehung', ' Kunst', ' Sport', ' Musik', 0, 0, 0, 0, 0),
(22, 'Neuer', ' Tom', 1995, ' männlich', ' Frauen', ' Beziehung', ' Sport', ' Musik', ' Freunde treffen', 0, 0, 0, 0, 0),
(23, 'Adao', ' Ebenezer', 1980, ' männlich', ' Frauen', ' Beziehung', ' Kino', ' ', ' ', 0, 0, 0, 0, 0),
(4, 'Andenmatten', 'Seline', 1998, 'weiblich', 'mann', 'beziehung', 'literatur', 'Kunst', 'foto', 0, 0, 0, 0, 0);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `users/users2`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

ALTER TABLE `users2`
  ADD PRIMARY KEY (`id`); 
  
--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
