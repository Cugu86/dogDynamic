-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Creato il: Feb 17, 2016 alle 17:59
-- Versione del server: 5.5.42
-- Versione PHP: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `queen`
--
CREATE DATABASE IF NOT EXISTS `queen` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `queen`;

-- --------------------------------------------------------

--
-- Struttura della tabella `bookings`
--

CREATE TABLE `bookings` (
  `bookingID` int(10) unsigned NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `comments` longtext NOT NULL,
  `insertDateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL,
  `service_FK` int(11) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `bookingUser`
--

CREATE TABLE `bookingUser` (
  `booking_FK` int(11) unsigned NOT NULL,
  `user_FK` int(11) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `Breeds`
--

CREATE TABLE `Breeds` (
  `BreedID` int(10) unsigned NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `Breeds`
--

INSERT INTO `Breeds` (`BreedID`, `name`, `description`) VALUES
(1, 'Unknown', 'Pastore tedesco bello ed intrigante '),
(2, 'Pittbull', 'Il Pittbul se tenuto in cattività puo diventare aggressivo'),
(3, 'German Shepherd', 'Il pastore tedesco è un cane a pelo medio e folto . . .'),
(4, 'American Pit Bull Terrier', 'American Pit Bull Terrier is a very nice dog '),
(5, 'Beagle', 'Beagle');

-- --------------------------------------------------------

--
-- Struttura della tabella `comments`
--

CREATE TABLE `comments` (
  `dog_FK` int(10) unsigned NOT NULL,
  `user_FK` int(10) unsigned NOT NULL,
  `photo_FK` int(10) unsigned NOT NULL,
  `comment` longtext NOT NULL,
  `commentID` int(100) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `Dogs`
--

CREATE TABLE `Dogs` (
  `dogID` int(10) unsigned NOT NULL,
  `name` varchar(20) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `age` int(11) NOT NULL,
  `insertDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `comments` longtext NOT NULL,
  `profilePicDog` varchar(500) NOT NULL,
  `status` varchar(10) NOT NULL,
  `user_FK` int(10) unsigned NOT NULL,
  `breed_FK` int(10) unsigned NOT NULL,
  `size_FK` int(10) unsigned NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `Dogs`
--

INSERT INTO `Dogs` (`dogID`, `name`, `sex`, `age`, `insertDate`, `comments`, `profilePicDog`, `status`, `user_FK`, `breed_FK`, `size_FK`) VALUES
(1, 'Camilla', 'female', 4, '0000-00-00 00:00:00', 'Camilla Ã¨ dispettosa', '', 'a', 35, 5, 3),
(2, 'Camilla', 'female', 4, '0000-00-00 00:00:00', 'Camilla Ã¨ dispettosa', '', 'a', 35, 5, 3),
(3, 'Camilla', 'female', 4, '0000-00-00 00:00:00', 'Camilla Ã¨ dispettosa', '', 'a', 35, 5, 3),
(4, 'Camilla', 'female', 4, '0000-00-00 00:00:00', 'Camilla Ã¨ dispettosa', '', 'a', 35, 5, 3),
(5, 'Camilla', 'female', 4, '0000-00-00 00:00:00', 'Camilla Ã¨ dispettosa', '', 'a', 35, 5, 3),
(6, 'Camilla', 'female', 4, '0000-00-00 00:00:00', 'Camilla Ã¨ dispettosa', '', 'a', 35, 5, 3),
(7, 'Camilla', 'female', 4, '0000-00-00 00:00:00', 'Camilla Ã¨ dispettosa', '', 'a', 35, 5, 3),
(11, 'Marco', 'female', 4, '0000-00-00 00:00:00', 'ciao ', '', 'a', 35, 5, 1),
(12, 'Marco', 'female', 4, '0000-00-00 00:00:00', 'ciao ', '', 'a', 35, 5, 1),
(13, 'Marco', 'female', 4, '0000-00-00 00:00:00', 'ciao ', '', 'a', 35, 5, 1),
(14, 'Marco', 'female', 4, '0000-00-00 00:00:00', 'ciao ', '', 'a', 35, 5, 1),
(15, 'Pallino', 'male', 7, '0000-00-00 00:00:00', 'bello', '', 'a', 35, 2, 2),
(16, 'Pallino', 'male', 7, '0000-00-00 00:00:00', 'bello', '', 'a', 35, 2, 2),
(17, 'leonarda', 'female', 24, '0000-00-00 00:00:00', 'Leonarda Ã¨ una bomba', '', 'a', 11, 3, 4),
(18, 'leonarda', 'female', 24, '0000-00-00 00:00:00', 'Leonarda Ã¨ una bomba', '', 'a', 11, 3, 4),
(19, 'lorena', 'male', 67, '0000-00-00 00:00:00', 'lorellona', '', 'a', 11, 2, 3),
(20, 'lorena', 'male', 67, '0000-00-00 00:00:00', 'lorellona', '', 'a', 11, 2, 3),
(21, 'Sara', 'male', 3, '0000-00-00 00:00:00', 'Sara Ã¨ povera', '', 'a', 11, 1, 4),
(22, 'Sara', 'male', 3, '0000-00-00 00:00:00', 'Sara Ã¨ povera', '', 'a', 11, 1, 4),
(23, 'Sara', 'male', 3, '0000-00-00 00:00:00', 'Sara Ã¨ povera', '', 'a', 11, 1, 4),
(24, 'Sara', 'male', 3, '0000-00-00 00:00:00', 'Sara Ã¨ povera', '', 'a', 11, 1, 4),
(25, 'Sara', 'male', 3, '0000-00-00 00:00:00', 'Sara Ã¨ povera', '', 'a', 11, 1, 4),
(26, 'freccia', 'female', 3, '0000-00-00 00:00:00', 'Freccia Ã¨ il massimo', '', 'a', 11, 5, 3),
(27, 'Priscilla', 'female', 3, '0000-00-00 00:00:00', 'Priscilla Ã¨ gay', '', 'a', 35, 3, 2),
(28, 'lallo', 'male', 1, '0000-00-00 00:00:00', 'lola', '', 'a', 35, 5, 2),
(29, 'mincetta', 'male', 2, '0000-00-00 00:00:00', 'mincetta Ã¨ bella ', '', 'a', 7, 3, 4),
(30, 'vaginetta', 'female', 5, '0000-00-00 00:00:00', 'ciao', '', 'a', 7, 2, 2),
(31, 'mariella', 'female', 45, '0000-00-00 00:00:00', 'mariella cicciona', '', 'a', 7, 5, 3),
(32, 'Pianta', 'female', 4, '0000-00-00 00:00:00', 'bobo', '', 'a', 7, 1, 2),
(33, 'Lolita', 'female', 4, '0000-00-00 00:00:00', 'lolita is sexy', '', 'a', 36, 5, 4),
(34, 'fuffi', 'male', 6, '0000-00-00 00:00:00', '', '', 'a', 24, 3, 4),
(35, 'Pinky', 'male', 6, '0000-00-00 00:00:00', 'ciao', '', 'a', 39, 2, 3),
(36, 'Marcellina', 'male', 7, '0000-00-00 00:00:00', 'Marcellina Ã¨ biricchina', '', 'a', 24, 5, 3),
(37, 'Vannuccia', 'female', 5, '0000-00-00 00:00:00', 'E bellissimo ', '', 'a', 24, 3, 2),
(38, 'bill', 'male', 6, '0000-00-00 00:00:00', 'Bill Ã¨ stupendo', '1489d95c505880d5e3308ade80bd639f.jpg', 'a', 24, 3, 4),
(39, 'Pallino', 'male', 4, '0000-00-00 00:00:00', 'E in calore', 'c39a037c3fae20cfe18750fcc55b1c3f.jpg', 'a', 40, 2, 3),
(40, 'Furia', 'male', 6, '0000-00-00 00:00:00', 'Stupendo', '1489d95c505880d5e3308ade80bd639f.jpg', 'a', 40, 3, 4),
(41, 'Ciuffetta', 'female', 8, '0000-00-00 00:00:00', 'i che bellino', 'e7913352ccf24cc2848d162b28e12c00.jpg', 'a', 24, 5, 2),
(42, 'Lolita', 'female', 5, '0000-00-00 00:00:00', 'caz ', '', 'a', 55, 3, 2),
(43, 'machetta', 'female', 56, '0000-00-00 00:00:00', 'ce bellinu', 'default-user-image.png', 'a', 55, 5, 3),
(44, 'mammamea', 'male', 4, '0000-00-00 00:00:00', 'ola', 'd41d8cd98f00b204e9800998ecf8427e.', 'a', 55, 5, 1),
(45, 'fuffi', 'male', 1, '0000-00-00 00:00:00', 'Fufi Ã¨ una troia ', '7a4b3f70bf05ea624761f2374a29004a.jpg', 'a', 58, 4, 2),
(46, 'Lolita', 'female', 3, '0000-00-00 00:00:00', '', '9403df5d5bbd967a6c1d2c6b7a006718.jpg', 'a', 58, 3, 4);

-- --------------------------------------------------------

--
-- Struttura della tabella `photos`
--

CREATE TABLE `photos` (
  `photoID` int(10) unsigned NOT NULL,
  `URL` varchar(100) NOT NULL,
  `description` mediumtext NOT NULL,
  `dataInsert` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(10) NOT NULL,
  `dog_FK` int(11) unsigned NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `photos`
--

INSERT INTO `photos` (`photoID`, `URL`, `description`, `dataInsert`, `status`, `dog_FK`) VALUES
(1, 'default-user-image.png', 'Dog Main Image', '0000-00-00 00:00:00', 'a', 24),
(2, 'default-user-image.png', 'Dog Main Image', '0000-00-00 00:00:00', 'a', 25),
(3, 'default-user-image.png', 'Dog Main Image', '0000-00-00 00:00:00', 'a', 26),
(4, 'default-user-image.png', 'Dog Main Image', '0000-00-00 00:00:00', 'a', 27),
(5, 'default-user-image.png', 'Dog Main Image', '0000-00-00 00:00:00', 'a', 28),
(6, 'default-user-image.png', 'Dog Main Image', '0000-00-00 00:00:00', 'a', 29),
(7, 'default-user-image.png', 'Dog Main Image', '0000-00-00 00:00:00', 'a', 30),
(8, 'default-user-image.png', 'Dog Main Image', '0000-00-00 00:00:00', 'a', 31),
(9, 'default-user-image.png', 'Dog Main Image', '0000-00-00 00:00:00', 'a', 32),
(10, 'default-user-image.png', 'Dog Main Image', '0000-00-00 00:00:00', 'a', 33),
(11, 'default-user-image.png', 'Dog Main Image', '0000-00-00 00:00:00', 'a', 34),
(12, 'default-user-image.png', 'Dog Main Image', '0000-00-00 00:00:00', 'a', 35),
(13, 'e7913352ccf24cc2848d162b28e12c00.jpg', 'Dog Main Image', '0000-00-00 00:00:00', 'a', 36),
(14, '1489d95c505880d5e3308ade80bd639f.jpg', 'Dog Main Image', '0000-00-00 00:00:00', 'a', 37);

-- --------------------------------------------------------

--
-- Struttura della tabella `role`
--

CREATE TABLE `role` (
  `roleID` int(11) NOT NULL,
  `nomeRole` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `role`
--

INSERT INTO `role` (`roleID`, `nomeRole`) VALUES
(1, 'Admin'),
(2, 'Membro');

-- --------------------------------------------------------

--
-- Struttura della tabella `services`
--

CREATE TABLE `services` (
  `serviceID` int(10) unsigned NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` int(10) NOT NULL,
  `duration` int(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  `description` longtext NOT NULL,
  `insertDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `size`
--

CREATE TABLE `size` (
  `sizeID` int(10) unsigned NOT NULL,
  `name` varchar(30) NOT NULL,
  `description` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `size`
--

INSERT INTO `size` (`sizeID`, `name`, `description`) VALUES
(1, 'Mini', 'mini dogs'),
(2, 'Small', 'small dogs '),
(3, 'Medium', 'medium dogs '),
(4, 'Big', 'large dogs ');

-- --------------------------------------------------------

--
-- Struttura della tabella `user`
--

CREATE TABLE `user` (
  `userID` int(10) unsigned NOT NULL,
  `name` varchar(20) NOT NULL,
  `surname` varchar(20) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `telephone` int(30) NOT NULL,
  `activationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fotoURL` varchar(200) NOT NULL,
  `status` varchar(10) NOT NULL,
  `role_FK` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `user`
--

INSERT INTO `user` (`userID`, `name`, `surname`, `mail`, `password`, `telephone`, `activationDate`, `fotoURL`, `status`, `role_FK`) VALUES
(1, 'Giovanna', 'Maria', 'gianna@gianna.it', 'f5888d0bb58d611107e11f7cbc41c97a', 45678, '2016-01-19 12:09:59', '', 'a', 2),
(2, 'Marco', 'Gnani', 'lacugurra6@gmail.com', 'f5888d0bb58d611107e11f7cbc41c97a', 557778, '2016-01-19 12:11:50', '', 'a', 2),
(7, 'Salvatore', 'Ricciu', 'tore@tore.it', 'f5888d0bb58d611107e11f7cbc41c97a', 7654, '2016-01-19 12:32:15', '', 'a', 2),
(8, 'Salvatore', 'Ricciu', 'salvatore.ricciu@gmail.com', 'f5888d0bb58d611107e11f7cbc41c97a', 87537, '2016-01-19 12:33:12', '', 'a', 1),
(9, 'Sansa', 'Stark', 'sansa@sansa.it', 'f5888d0bb58d611107e11f7cbc41c97a', 78636, '2016-01-19 12:47:00', '', 'a', 2),
(10, 'mariuccia', 'Todaro', 'lacugurra@gmail.com', 'b7dba5a1bc3605a87b59ac8147512c97', 479218230, '2016-01-19 12:49:26', '', 'a', 1),
(11, 'Andrea', 'Deidda', 'anna@anna.it', 'f5888d0bb58d611107e11f7cbc41c97a', 87635238, '2016-01-19 13:24:38', '', 'a', 2),
(13, 'Giulia', 'Porcu', 'giulia@giulia.it', 'f5888d0bb58d611107e11f7cbc41c97a', 749379, '2016-01-19 13:38:59', '', 'a', 2),
(14, 'Maria', 'Todaro', 'marcotodaro@hotmail.co.uk', 'f5888d0bb58d611107e11f7cbc41c97a', 876470, '2016-01-19 16:15:05', '', 'a', 2),
(15, 'Mariuccia', 'Cherchi', 'mariuccia@mariuccia.it', 'f5888d0bb58d611107e11f7cbc41c97a', 84657298, '2016-01-20 16:58:46', '', 'a', 2),
(16, 'Gioconda', 'LaMarchettara', 'gioconda@ciao.it', 'f5888d0bb58d611107e11f7cbc41c97a', 748369, '2016-01-20 17:02:19', '', 'a', 2),
(17, 'Franco ', 'Todaro', 'francesco-todaro@alice.it', 'f5888d0bb58d611107e11f7cbc41c97a', 2147483647, '2016-01-21 13:50:57', '', 'a', 2),
(18, 'Marilu', 'Maccioni', 'marco@marco.it', 'f5888d0bb58d611107e11f7cbc41c97a', 8476258, '2016-01-21 15:30:30', '', 'a', 2),
(19, 'mary', 'mary', 'caz@caz.it', 'f5888d0bb58d611107e11f7cbc41c97a', 73576, '2016-01-21 15:33:12', '', 'a', 2),
(20, 'Marco Todaro', 'Todaro', 'lacugurra43@gmail.com', 'f5888d0bb58d611107e11f7cbc41c97a', 393495526, '2016-01-21 15:37:37', '', 'a', 2),
(21, 'mary', 'mary', 'lacugurra333@gmail.com', 'f5888d0bb58d611107e11f7cbc41c97a', 0, '2016-01-21 15:41:05', '', 'a', 2),
(22, 'mary', 'mary', 'lacugurra345@gmail.com', 'f5888d0bb58d611107e11f7cbc41c97a', 74537, '2016-01-21 15:47:06', '', 'a', 2),
(23, 'Marco Todaro', 'Todaro', 'lacugurra12@gmail.com', 'f5888d0bb58d611107e11f7cbc41c97a', 2147483647, '2016-01-21 15:51:37', 'a62c2aec1af4691f1f2c1832fc6c227c.png', 'a', 2),
(24, 'Filipe', 'Correia', 'lacugurra11@gmail.com', 'f5888d0bb58d611107e11f7cbc41c97a', 748939, '2016-01-21 18:38:38', 'a62c2aec1af4691f1f2c1832fc6c227c.png', 'a', 2),
(25, 'Mariano', 'Ano', 'salvo@salvo.it', 'f5888d0bb58d611107e11f7cbc41c97a', 745835, '2016-01-22 08:15:24', '030a637f3cc18f0977dd198625986338.jpg', 'd', 2),
(26, 'Anna', 'Cioccia', 'anna2@anna.it', 'f5888d0bb58d611107e11f7cbc41c97a', 798235, '2016-01-22 08:36:24', 'd41d8cd98f00b204e9800998ecf8427e.', 'a', 2),
(27, 'laura', 'orani', 'lacugurra13@gmail.com', 'f5888d0bb58d611107e11f7cbc41c97a', 6483, '2016-01-22 08:43:38', 'd41d8cd98f00b204e9800998ecf8427e.', 'a', 2),
(28, 'gionny', 'cash', 'lacugurra14@gmail.com', 'f5888d0bb58d611107e11f7cbc41c97a', 78, '2016-01-22 08:47:03', 'd41d8cd98f00b204e9800998ecf8427e.', 'a', 2),
(29, 'oriana', 'fallaci', 'lacugurra15@gmail.com', 'f5888d0bb58d611107e11f7cbc41c97a', 8749, '2016-01-22 08:56:45', 'd41d8cd98f00b204e9800998ecf8427e.', 'a', 2),
(30, 'ricco', 'ricco', 'lacugurra16@gmail.com', 'f5888d0bb58d611107e11f7cbc41c97a', 7890, '2016-01-22 09:04:37', '', 'a', 2),
(31, 'Mariano ', 'ano', 'lacugurra17@gmail.com', 'f5888d0bb58d611107e11f7cbc41c97a', 6589, '2016-01-22 09:05:49', 'default-user-image.png', 'a', 2),
(32, 'lolla', 'lalla', 'lacugurra20@gmail.com', 'f5888d0bb58d611107e11f7cbc41c97a', 455, '2016-01-22 09:09:02', 'default-user-image.png', 'a', 2),
(33, 'sonia', 'tilocca', 'lacugurra22@gmail.com', 'f5888d0bb58d611107e11f7cbc41c97a', 74839, '2016-01-22 10:54:53', 'default-user-image.png', 'a', 2),
(34, 'Franco', 'Todaro', 'lacugurra23@gmail.com', 'f5888d0bb58d611107e11f7cbc41c97a', 2147483647, '2016-01-22 10:57:15', 'default-user-image.png', 'a', 2),
(35, 'Franca', 'Ricciu', 'lacugurra555@gmail.com', 'f5888d0bb58d611107e11f7cbc41c97a', 6328237, '2016-01-25 12:07:14', 'default-user-image.png', 'a', 2),
(36, 'Laura', 'Degortes', 'laura@gmail.com', 'f5888d0bb58d611107e11f7cbc41c97a', 987, '2016-01-25 23:13:45', 'default-user-image.png', 'a', 2),
(37, 'Silvia', 'Cossu', 'silvia@silvia.it', 'f5888d0bb58d611107e11f7cbc41c97a', 87653, '2016-01-27 10:57:39', 'default-user-image.png', 'a', 1),
(38, 'giulietta', 'piscetta', 'lacugurra1234@gmail.com', 'f5888d0bb58d611107e11f7cbc41c97a', 333, '2016-01-27 12:38:44', 'default-user-image.png', 'a', 2),
(39, 'Salvatore', 'mele', 'lacugurra09@gmail.com', 'f5888d0bb58d611107e11f7cbc41c97a', 8654, '2016-01-27 12:44:31', '2e2878533c5b4041ff5c67d1286d0f5b.png', 'a', 2),
(40, 'Luciano', 'Todaro', 'lucio@lucio.it', 'f5888d0bb58d611107e11f7cbc41c97a', 64832689, '2016-01-27 13:53:01', '5dafd88d96f8fd76144d5380163849db.jpg', 'a', 2),
(41, 'Marco', 'Todaro', 'lacugurra00@gmail.com', 'f5888d0bb58d611107e11f7cbc41c97a', 2147483647, '2016-02-10 13:40:24', 'd41d8cd98f00b204e9800998ecf8427e.', 'a', 2),
(42, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', 0, '2016-02-11 13:15:27', 'default-user-image.png', 'a', 2),
(43, 'luana', 'masala', 'lacugurra3333@gmail.com', 'f5888d0bb58d611107e11f7cbc41c97a', 4444, '2016-02-11 13:16:30', '', 'a', 2),
(44, 'andrea', 'dedda', 'lacugurra098@gmail.com', 'f5888d0bb58d611107e11f7cbc41c97a', 86750, '2016-02-11 13:22:29', '', 'a', 2),
(45, 'Salvatore', 'Mannoni', 'lacugurra1010@gmail.com', 'f5888d0bb58d611107e11f7cbc41c97a', 89743, '2016-02-11 13:33:12', '', 'a', 2),
(46, 'Salvatore', 'laconi', 'lacugurra8989@gmail.com', 'f5888d0bb58d611107e11f7cbc41c97a', 758, '2016-02-11 13:38:30', 'd41d8cd98f00b204e9800998ecf8427e.', 'a', 2),
(47, 'andrea', 'sluz', 'lacugurra65454@gmail.com', 'f5888d0bb58d611107e11f7cbc41c97a', 89890, '2016-02-11 13:40:01', 'd41d8cd98f00b204e9800998ecf8427e.', 'a', 2),
(48, 'laura', 'dedda', 'lacugurra6677@gmail.com', 'f5888d0bb58d611107e11f7cbc41c97a', 890, '2016-02-11 13:45:00', 'd41d8cd98f00b204e9800998ecf8427e.', 'a', 2),
(49, 'lola', 'minchia', 'lacugurra234556@gmail.com', 'f5888d0bb58d611107e11f7cbc41c97a', 64849, '2016-02-11 13:49:14', 'd41d8cd98f00b204e9800998ecf8427e.', 'a', 2),
(50, 'caz ', 'xaz', 'lacugurra3335@gmail.com', 'f5888d0bb58d611107e11f7cbc41c97a', 74849, '2016-02-11 13:50:24', 'd41d8cd98f00b204e9800998ecf8427e.', 'a', 2),
(51, 'gnogno', 'casula', 'lacugurra23232@gmail.com', 'f5888d0bb58d611107e11f7cbc41c97a', 75849, '2016-02-11 13:51:44', 'd41d8cd98f00b204e9800998ecf8427e.', 'a', 2),
(52, 'silvia ', 'saint', 'lacugurrasilvia@gmail.com', 'f5888d0bb58d611107e11f7cbc41c97a', 74949, '2016-02-11 13:58:27', 'd41d8cd98f00b204e9800998ecf8427e.', 'a', 2),
(53, 'santiago', 'merella', 'lacugurra21214@gmail.com', 'f5888d0bb58d611107e11f7cbc41c97a', 85649, '2016-02-11 14:00:56', 'd41d8cd98f00b204e9800998ecf8427e.', 'a', 2),
(54, 'la cugurra', 'todaro', 'lacugurra7869@gmail.com', 'f5888d0bb58d611107e11f7cbc41c97a', 4557, '2016-02-11 14:05:38', 'd41d8cd98f00b204e9800998ecf8427e.', 'a', 2),
(55, 'Susanna', 'Camusso', 'lacugurra89876@gmail.com', 'f5888d0bb58d611107e11f7cbc41c97a', 75850, '2016-02-11 15:21:54', '2e2878533c5b4041ff5c67d1286d0f5b.png', 'a', 2),
(56, 'Salvatore', 'Mannu', 'lacugurramannu@gmail.com', 'f5888d0bb58d611107e11f7cbc41c97a', 57459, '2016-02-12 17:02:53', '', 'a', 2),
(57, 'Rob', 'Stark', 'lacugurra1122@gmail.com', 'f5888d0bb58d611107e11f7cbc41c97a', 123, '2016-02-15 18:55:23', 'default-user-image.png', 'a', 2),
(58, 'Aria ', 'Stark', 'lacugurra1112@gmail.com', 'f5888d0bb58d611107e11f7cbc41c97a', 123, '2016-02-15 19:12:27', '0c971f00d491d72dec9e12e8c2e2b50e.jpg', 'a', 1);

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`bookingID`),
  ADD KEY `service_FK` (`service_FK`);

--
-- Indici per le tabelle `bookingUser`
--
ALTER TABLE `bookingUser`
  ADD KEY `booking_FK` (`booking_FK`),
  ADD KEY `user_FK` (`user_FK`);

--
-- Indici per le tabelle `Breeds`
--
ALTER TABLE `Breeds`
  ADD PRIMARY KEY (`BreedID`);

--
-- Indici per le tabelle `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`commentID`),
  ADD KEY `dog_FK` (`dog_FK`),
  ADD KEY `user_FK` (`user_FK`),
  ADD KEY `photo_FK` (`photo_FK`);

--
-- Indici per le tabelle `Dogs`
--
ALTER TABLE `Dogs`
  ADD PRIMARY KEY (`dogID`),
  ADD KEY `user_FK` (`user_FK`),
  ADD KEY `breed_FK` (`breed_FK`),
  ADD KEY `size_FK` (`size_FK`);

--
-- Indici per le tabelle `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`photoID`),
  ADD KEY `dog_FK` (`dog_FK`);

--
-- Indici per le tabelle `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`roleID`);

--
-- Indici per le tabelle `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`serviceID`);

--
-- Indici per le tabelle `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`sizeID`);

--
-- Indici per le tabelle `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`),
  ADD UNIQUE KEY `MAIL_ID` (`mail`),
  ADD UNIQUE KEY `mail` (`mail`),
  ADD KEY `role_FK` (`role_FK`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `bookings`
--
ALTER TABLE `bookings`
  MODIFY `bookingID` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT per la tabella `Breeds`
--
ALTER TABLE `Breeds`
  MODIFY `BreedID` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT per la tabella `comments`
--
ALTER TABLE `comments`
  MODIFY `commentID` int(100) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT per la tabella `Dogs`
--
ALTER TABLE `Dogs`
  MODIFY `dogID` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT per la tabella `photos`
--
ALTER TABLE `photos`
  MODIFY `photoID` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT per la tabella `services`
--
ALTER TABLE `services`
  MODIFY `serviceID` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT per la tabella `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=59;
--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_ibfk_1` FOREIGN KEY (`service_FK`) REFERENCES `services` (`serviceID`);

--
-- Limiti per la tabella `bookingUser`
--
ALTER TABLE `bookingUser`
  ADD CONSTRAINT `bookinguser_ibfk_1` FOREIGN KEY (`booking_FK`) REFERENCES `bookings` (`bookingID`),
  ADD CONSTRAINT `bookinguser_ibfk_2` FOREIGN KEY (`user_FK`) REFERENCES `user` (`userID`);

--
-- Limiti per la tabella `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`dog_FK`) REFERENCES `Dogs` (`dogID`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`user_FK`) REFERENCES `user` (`userID`),
  ADD CONSTRAINT `comments_ibfk_3` FOREIGN KEY (`photo_FK`) REFERENCES `photos` (`photoID`);

--
-- Limiti per la tabella `Dogs`
--
ALTER TABLE `Dogs`
  ADD CONSTRAINT `dogs_ibfk_1` FOREIGN KEY (`user_FK`) REFERENCES `user` (`userID`),
  ADD CONSTRAINT `dogs_ibfk_2` FOREIGN KEY (`breed_FK`) REFERENCES `Breeds` (`BreedID`),
  ADD CONSTRAINT `dogs_ibfk_3` FOREIGN KEY (`size_FK`) REFERENCES `size` (`sizeID`);

--
-- Limiti per la tabella `photos`
--
ALTER TABLE `photos`
  ADD CONSTRAINT `photos_ibfk_1` FOREIGN KEY (`dog_FK`) REFERENCES `Dogs` (`dogID`);

--
-- Limiti per la tabella `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role_FK`) REFERENCES `role` (`roleID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
