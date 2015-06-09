-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2015 at 01:17 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `prodavnicaodjeceibbaza`
--

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE IF NOT EXISTS `komentar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `novost` int(11) NOT NULL,
  `tekst` varchar(10000) COLLATE utf8_slovenian_ci NOT NULL,
  `vrijeme` timestamp NOT NULL,
  `korisnikstranice` varchar(100) COLLATE utf8_slovenian_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `novost` (`novost`),
  KEY `korisnikstranice` (`korisnikstranice`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci AUTO_INCREMENT=67 ;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id`, `novost`, `tekst`, `vrijeme`, `korisnikstranice`) VALUES
(1, 1, 'Vaša kolekcijaa je odličnaa!!!', '2015-06-09 11:12:05', 'Ilvana'),
(65, 5, 'jksjakjak', '2015-06-09 11:15:01', 'Ilvana'),
(66, 5, 'jsjsjnkas', '2015-06-09 11:15:40', 'Anoniman');

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

CREATE TABLE IF NOT EXISTS `korisnik` (
  `korisnickoime` varchar(100) COLLATE utf8_slovenian_ci NOT NULL,
  `sifra` varchar(100) COLLATE utf8_slovenian_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_slovenian_ci NOT NULL,
  `tip` varchar(100) COLLATE utf8_slovenian_ci NOT NULL,
  PRIMARY KEY (`korisnickoime`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`korisnickoime`, `sifra`, `email`, `tip`) VALUES
('Anoniman', '', '', ''),
('Ilvana', '60b74b6c82497a7dc08d19c77d63cadb', 'ibrankovic1@etf.unsa.ba', 'admin'),
('Irfan', 'irfan', 'iprazina1@etf.unsa.ba', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `novost`
--

CREATE TABLE IF NOT EXISTS `novost` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `datum` timestamp NOT NULL,
  `autor` varchar(200) COLLATE utf8_slovenian_ci NOT NULL,
  `naslov` varchar(200) COLLATE utf8_slovenian_ci NOT NULL,
  `slika` varchar(200) COLLATE utf8_slovenian_ci NOT NULL,
  `sazetak` varchar(1000) COLLATE utf8_slovenian_ci NOT NULL,
  `tekst` varchar(10000) COLLATE utf8_slovenian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci AUTO_INCREMENT=15 ;

--
-- Dumping data for table `novost`
--

INSERT INTO `novost` (`id`, `datum`, `autor`, `naslov`, `slika`, `sazetak`, `tekst`) VALUES
(1, '2015-05-23 17:42:20', 'Ilvana Branković', 'Božićno sniženje', 'http://wannabemagazine.com/wp-content/uploads/2012/12/snizenje.jpg', 'Poštovani kupci, u toku sniženje na svu odjeću iz zimske kolekcije. Naglašavamo da sniženje traje...', 'Poštovani kupci, u toku sniženje na svu odjeću iz zimske kolekcije. \nNaglašavamo da sniženje traje do 31.12.2014.\nIskoristite priliku i poklonite sebi nešto za Božić.'),
(2, '2015-05-23 17:45:29', 'Ilvana Branković', 'Nova kolekcija', 'http://static.bershka.net/4/photos2/2015/V/0/1/p/6683/483/250/6683483250_1_1_3.jpg?t=1431102844520', 'Poštovani kupci, u našu prodavnicu je stigla kolekcija proljeće/ljeto......', 'Poštovani kupci, u našu prodavnicu je stigla kolekcija proljeće/ljeto.Također, smo počeli i sa prodajom odjeće za djecu, pa je u ovu kolekciju uključena i odjeća upravo za njih.\nPožurite i posjetite naše prodavnice!'),
(3, '2015-05-23 17:46:57', 'Ilvana Branković', 'Oglas', 'http://www.rtvslon.ba/wp-content/uploads/2013/03/trazite_posao.jpg', 'U našoj prodavnici odjeće potrebna je radnica,zainteresovani se mogu prijaviti na.......', 'U našoj prodavnici odjeće potrebna je radnica.\nZainteresovani neka nas kontaktiraju na broj 033-645-977, kako bi dobili dodatne informacije.'),
(4, '2015-05-23 17:48:14', 'Ilvana Branković', 'Praznično sniženje', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQBXutiltT3vLu_gsaVjMiOByoM4diMfZ51I-HpTY9im4_99asTEw', 'Poštovani kupci, u toku sniženje na svu žensku odjeću, povodom predstojećeg praznika...', 'Poštovani kupci, u toku sniženje na svu žensku odjeću, povodom predstojećeg praznika Božiæa. \nSvi artkli će biti sniženi u iznosu od 30% do 70%.\n'),
(5, '2015-05-23 17:50:34', 'Ilvana Branković', 'Zimsko sniženje', 'http://www.fashionparkoutlet.rs/media/_VEST-VZS.PNG', 'Poštovani kupci, u toku sniženje na zimsku kolekciju. Sva odjeća iz te kolekcije je snižena od 30% do...', 'Poštovani kupci, u toku sniženje na zimsku kolekciju. Sva odjeća iz te kolekcije je snižena od 30% do 50%. \nSniženje će trajati do 01.02.2015., pa iskoristite priliku koja Vam se pruža.');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `komentar_ibfk_1` FOREIGN KEY (`novost`) REFERENCES `novost` (`id`),
  ADD CONSTRAINT `komentar_ibfk_2` FOREIGN KEY (`korisnikstranice`) REFERENCES `korisnik` (`korisnickoime`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
