-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Mag 31, 2021 alle 23:00
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
  `img` varchar(128) NOT NULL,
  `file` varchar(128) NOT NULL,
  `projectName` varchar(32) NOT NULL,
  `idUtente` int(11) NOT NULL,
  `partnersName` varchar(32) NOT NULL,
  `Specifier` varchar(32) NOT NULL,
  `leadTime` int(11) NOT NULL,
  `customizationType` varchar(32) NOT NULL,
  `colorTemperature` int(11) NOT NULL,
  `CRI` varchar(32) NOT NULL,
  `stepMacAdam` varchar(32) NOT NULL,
  `beamAngle` varchar(32) NOT NULL,
  `ipRate` varchar(32) NOT NULL,
  `power` varchar(32) NOT NULL,
  `lumenOutput` varchar(32) NOT NULL,
  `intensity` varchar(32) NOT NULL,
  `efficacy` varchar(32) NOT NULL,
  `dimmability` tinyint(1) NOT NULL,
  `driverIncluded` tinyint(1) NOT NULL,
  `driverPosition` tinyint(1) NOT NULL,
  `supplyVoltage` varchar(32) NOT NULL,
  `supplyFrequency` varchar(32) NOT NULL,
  `lifetime` varchar(32) NOT NULL,
  `madeIn` varchar(32) NOT NULL,
  `certification` varchar(32) NOT NULL,
  `colorFinish` varchar(32) NOT NULL,
  `reggianiRef` int(11) NOT NULL,
  `competitor` varchar(32) NOT NULL,
  `competitorProduct` varchar(32) NOT NULL,
  `targetPrice` decimal(11,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `products`
--

INSERT INTO `products` (`ID`, `img`, `file`, `projectName`, `idUtente`, `partnersName`, `Specifier`, `leadTime`, `customizationType`, `colorTemperature`, `CRI`, `stepMacAdam`, `beamAngle`, `ipRate`, `power`, `lumenOutput`, `intensity`, `efficacy`, `dimmability`, `driverIncluded`, `driverPosition`, `supplyVoltage`, `supplyFrequency`, `lifetime`, `madeIn`, `certification`, `colorFinish`, `reggianiRef`, `competitor`, `competitorProduct`, `targetPrice`) VALUES
(1, 'lampada.jpg', '', '', 0, '', '', 0, '', 0, '0', '0', '0', '', '0', '0', '0', '0', 0, 0, 0, '0', '0', '', '', '', '', 0, '', '', '0.00'),
(3, 'lampadina.jpg', 'lampadina.pdf', '', 0, '', '', 0, '', 0, '0', '0', '0', '', '0', '0', '0', '0', 0, 0, 0, '0', '0', '', '', '', '', 0, '', '', '0.00'),
(4, 'lampione.jpg', '', '', 0, '', '', 0, '', 0, '0', '0', '0', '', '0', '0', '0', '0', 0, 0, 0, '0', '0', '', '', '', '', 0, '', '', '0.00'),
(5, 'bajour.jpg', 'bajour.pdf', '', 0, '', '', 0, '', 0, '0', '0', '0', '', '0', '0', '0', '0', 0, 0, 0, '0', '0', '', '', '', '', 0, '', '', '0.00'),
(6, 'lampadario.jpg', 'lampadario.pdf', '', 0, '', '', 0, '', 0, '0', '0', '0', '', '0', '0', '0', '0', 0, 0, 0, '0', '0', '', '', '', '', 0, '', '', '0.00'),
(22, 'lampada_da_parete.jpg', 'Relazione Windows Server 2012.pdf', 'erg', 34, 'rfg', 'rg', 243, 'Low', 2700, '80-90', '<4', 'Double asymmetric', 'IP20', '<10', '<1000', '>5000', '>80', 1, 1, 1, '220-240', '50-60', 'lphwe35', 'Italy', 'CE', 'Reggiani', 456, 'iGuzzini', 'ert3', '367.00');

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT per la tabella `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
