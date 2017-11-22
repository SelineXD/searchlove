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
  `name` varchar(11) DEFAULT NULL,
  `vorname` varchar(9) DEFAULT NULL,
  `jahrgang` int(5) DEFAULT NULL,
  `geschlecht` varchar(5) DEFAULT NULL,
  `interessiert` varchar(18) DEFAULT NULL,
  `suchenach` varchar(10) DEFAULT NULL,
  `hobby1` varchar(20) DEFAULT NULL,
  `hobby2` varchar(16) DEFAULT NULL,
  `hobby3` varchar(17) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `users2`
--

INSERT INTO `users2` (`name`, `vorname`, `jahrgang`, `geschlecht`, `interessiert`, `suchenach`, `hobby1`, `hobby2`, `hobby3`) VALUES
('Krebs', ' Natascha', 1996, ' Frau', ' Männer', ' Freunde', ' Einzel... Teamsport', ' Reisen', ' Film und Foto'),
('Meyer', ' Alicia', 1999, ' Frau', ' Männer', ' Beziehung', ' Gamen', ' Freunde treffen', ' Musik'),
('Chang', ' Lia', 2001, ' Frau', ' Frauen', ' Beziehung', ' Freunde treffen', ' Musik', ' Socialmedia'),
('Weber', ' Brigitt', 1995, ' Frau', ' Männer', ' Beziehung', ' Einzelsport', ' Shopping', ' Freunde treffen'),
('Keller', ' Franca', 1989, ' Frau', ' Männer', ' Beziehung', ' Musik', ' Freunde treffen', ' Kunst'),
('Schmid', ' Kirsten', 1987, ' Frau', ' Männer', ' Beziehung', ' Kunst', ' Sport', ' '),
('Huber', ' Maria', 1984, ' Frau', ' Frauen und Männer', ' Freunde', ' Sport', ' Freunde treffen', ' '),
('Baumann', ' Petra', 1999, ' Frau', ' Männer', ' Beziehung', ' Freunde treffen', ' ', ' '),
('Moser', ' Ruth', 1957, ' Frau', ' Männer', ' Beziehung', ' Theater', ' Literatur', ' '),
('centino', ' Celina', 1998, ' Frau', ' Männer', ' Beziehung', ' Socialmedia', ' ', ' '),
('Müller', ' Philippe', 1998, ' Mann', ' Frauen', ' Beziehung', ' Sport', ' ', ' '),
('Koch', ' Luca', 1997, ' Mann', ' Männer', ' Beziehung', ' Kochen', ' Kino', ' '),
('Buchs', ' Rafael', 1987, ' Mann', ' Frauen', ' Beziehung', ' Musik', ' ', ' '),
('Ritz', ' Tim', 1952, ' Mann', ' Frauen', ' Beziehung', ' Theater', ' ', ' '),
('Studer', ' Peter', 1992, ' Mann', ' Frauen', ' Beziehung', ' Musik', ' ', ' '),
('Salzgeber', ' Brett', 1982, ' Mann', ' Frauen und Männer', ' Beziehung', ' Freunde treffen', ' Musik', ' '),
('Zimmermann', ' Michael', 1987, ' Mann', ' Männer', ' Beziehung', ' Sport', ' Shopping', ' Freunde treffen'),
('Schmidt', ' Sandro', 1992, ' Mann', ' Frauen', ' Beziehung', ' Musik', ' Freunde treffen', ' '),
('Eggel', ' Jan', 1989, ' Mann', ' Männer', ' Beziehung', ' Kunst', ' Sport', ' Musik'),
('Neuer', ' Tom', 1995, ' Mann', ' Frauen', ' Beziehung', ' Sport', ' Musik', ' Freunde treffen'),
('Adao', ' Ebenezer', 1980, ' Mann', ' Frauen', ' Beziehung', ' Kino', ' ', ' '),
('Andenmatten', 'Seline', 1998, 'weibl', 'mann', 'beziehung', 'literatur', 'Kunst', 'foto');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
