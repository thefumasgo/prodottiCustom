-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Apr 27, 2021 alle 20:53
-- Versione del server: 10.4.14-MariaDB
-- Versione PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `custom`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `products`
--

CREATE TABLE `products` (
  `ID` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `characteristics` text NOT NULL,
  `price` float NOT NULL,
  `data` date DEFAULT NULL,
  `potenza` int(5) NOT NULL,
  `categoria` varchar(16) NOT NULL,
  `colorazione` varchar(32) NOT NULL,
  `img` varchar(32) NOT NULL,
  `file` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `products`
--

INSERT INTO `products` (`ID`, `name`, `characteristics`, `price`, `data`, `potenza`, `categoria`, `colorazione`, `img`, `file`) VALUES
(1, 'Lampada', 'Lampada da lettura', 19.99, '2021-04-27', 17, 'Esterni', 'bianco', 'lampada.jpg', ''),
(3, 'lampadina', 'lampadina che fa luce', 5.99, '2021-04-08', 20, 'esterni', 'bianco', 'lampadina.jpg', 'lampadina.pdf'),
(4, 'lampione', 'lampione da giardino', 56.5, '2021-04-10', 80, 'ottiche', 'carbone', 'lampione.jpg', ''),
(5, 'bajour', 'bajour per leggere', 32, '2021-04-11', 12, 'Esterni', 'nero', 'bajour.jpg', 'bajour.pdf'),
(6, 'lampadario', 'lampadario rinascimentale ', 129.99, '2021-04-18', 60, 'interni', 'blu', 'lampadario.jpg', 'lampadario.pdf');

-- --------------------------------------------------------

--
-- Struttura della tabella `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `Username` varchar(64) NOT NULL,
  `Password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `users`
--

INSERT INTO `users` (`ID`, `Username`, `Password`) VALUES
(1, 'pippo', 'f7b2993185f755d2212840328001bb2f');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Name` (`name`);

--
-- Indici per le tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `products`
--
ALTER TABLE `products`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT per la tabella `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
