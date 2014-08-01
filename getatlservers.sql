-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 25, 2014 at 07:11 PM
-- Server version: 5.5.37
-- PHP Version: 5.4.4-14+deb7u10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `getatlservers`
--

-- --------------------------------------------------------

--
-- Table structure for table `modpack`
--

CREATE TABLE IF NOT EXISTS `modpack` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `logo` text NOT NULL,
  `name` text NOT NULL,
  `wget` text NOT NULL,
  `dl` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `modpack`
--

INSERT INTO `modpack` (`id`, `logo`, `name`, `wget`, `dl`) VALUES
(1, 'img/yogscast.png', 'Yogscast Complete Pack', 'http://getatlservers.com/packs/yogscast.zip', 'http://getatlservers.com/packs/yogscast.zip'),
(2, 'img/crackpack.png', 'The Crack Pack', 'http://getatlservers.com/packs/crackpack.zip', 'http://getatlservers.com/packs/crackpack.zip'),
(3, 'img/skyfactory.png', 'Sky Factory', 'http://getatlservers.com/packs/skyfactory.zip', 'http://getatlservers.com/packs/skyfactory.zip'),
(4, 'img/dnstechpack.png', 'DNS Techpack', 'http://getatlservers.com/packs/dnstechpack.zip', 'http://getatlservers.com/packs/dnstechpack.zip'),
(5, 'img/madpack.png', 'The MadPack', 'http://getatlservers.com/packs/madpack.zip', 'http://getatlservers.com/packs/madpack.zip'),
(6, 'img/resonantrise.png', 'Resonant Rise', 'http://getatlservers.com/packs/resonantrise.zip', 'http://getatlservers.com/packs/resonantrise.zip'),
(7, 'img/moonquest.png', 'MoonQuest', 'http://getatlservers.com/packs/moonquest.zip', 'http://getatlservers.com/packs/moonquest.zip'),
(8, 'img/solitarycraft.png', 'SolitaryCraft', 'http://getatlservers.com/packs/solitarycraft.zip', 'http://getatlservers.com/packs/solitarycraft.zip'),
(9, 'img/thenextdimension.png', 'Magicality: The Next Dimension', 'http://getatlservers.com/packs/thenextdimension.zip', 'ttp://getatlservers.com/packs/thenextdimension.zip'),
(10, 'img/ultrahardsurvival.png', 'Ultra Hard Survival', 'http://getatlservers.com/packs/ultrahardsurvival.zip', 'http://getatlservers.com/packs/ultrahardsurvival.zip'),
(11, 'img/vanillaoverhaul.png', 'Vanilla Overhaul', 'http://getatlservers.com/packs/vanillaoverhaul.zip', 'http://getatlservers.com/packs/vanillaoverhaul.zip');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
