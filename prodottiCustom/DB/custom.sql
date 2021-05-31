-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Mag 31, 2021 alle 18:15
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
-- Database: `5a_custom`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `products`
--

CREATE TABLE `products` (
  `ID` int(11) NOT NULL,
  `img` varchar(32) NOT NULL,
  `file` varchar(32) NOT NULL,
  `projectName` varchar(32) NOT NULL,
  `idUtente` int(11) NOT NULL,
  `partnersName` varchar(32) NOT NULL,
  `Specifier` varchar(32) NOT NULL,
  `leadTime` int(11) NOT NULL,
  `costumizationType` varchar(32) NOT NULL,
  `colorTemperature` int(11) NOT NULL,
  `CRI` int(11) NOT NULL,
  `stepMacAdam` int(2) NOT NULL,
  `beamAngle` int(11) NOT NULL,
  `ipRate` varchar(32) NOT NULL,
  `power` int(11) NOT NULL,
  `lumenOutput` int(11) NOT NULL,
  `intensity` int(11) NOT NULL,
  `efficacy` int(11) NOT NULL,
  `dimmability` int(1) NOT NULL,
  `driverIncluded` int(1) NOT NULL,
  `driverPosition` int(1) NOT NULL,
  `supplyVoltage` int(11) NOT NULL,
  `supplyFrequency` int(11) NOT NULL,
  `lifetime` varchar(32) NOT NULL,
  `madeIn` varchar(32) NOT NULL,
  `certification` varchar(32) NOT NULL,
  `colorFinish` varchar(32) NOT NULL,
  `reggianiRef` int(11) NOT NULL,
  `competitor` varchar(32) NOT NULL,
  `competitorProduct` varchar(32) NOT NULL,
  `targetPrice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `products`
--

INSERT INTO `products` (`ID`, `img`, `file`, `projectName`, `idUtente`, `partnersName`, `Specifier`, `leadTime`, `costumizationType`, `colorTemperature`, `CRI`, `stepMacAdam`, `beamAngle`, `ipRate`, `power`, `lumenOutput`, `intensity`, `efficacy`, `dimmability`, `driverIncluded`, `driverPosition`, `supplyVoltage`, `supplyFrequency`, `lifetime`, `madeIn`, `certification`, `colorFinish`, `reggianiRef`, `competitor`, `competitorProduct`, `targetPrice`) VALUES
(1, 'lampada.jpg', '', 'lampada', 0, '', '', 0, '', 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', 0, '', '', 0),
(3, 'lampadina.jpg', 'lampadina.pdf', 'lampadina', 0, '', '', 0, '', 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', 0, '', '', 0),
(4, 'lampione.jpg', '', 'lampione', 0, '', '', 0, '', 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', 0, '', '', 0),
(5, 'bajour.jpg', 'bajour.pdf', 'bajour', 0, '', '', 0, '', 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', 0, '', '', 0),
(6, 'lampadario.jpg', 'lampadario.pdf', 'lampadario', 0, '', '', 0, '', 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', 0, '', '', 0);

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
(1, 'pippo', '0c88028bf3aa6a6a143ed846f2be1ea4');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ID`);

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
