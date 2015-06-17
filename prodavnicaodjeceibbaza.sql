-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Računalo: localhost
-- Vrijeme generiranja: Lip 17, 2015 u 05:37 PM
-- Verzija poslužitelja: 5.6.12-log
-- PHP verzija: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Baza podataka: `prodavnicaodjeceibbaza`
--
CREATE DATABASE IF NOT EXISTS `prodavnicaodjeceibbaza` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `prodavnicaodjeceibbaza`;

-- --------------------------------------------------------

--
-- Tablična struktura za tablicu `komentar`
--

CREATE TABLE IF NOT EXISTS `komentar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `novost` int(11) NOT NULL,
  `tekst` varchar(10000) COLLATE utf8_slovenian_ci NOT NULL,
  `vrijeme` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `korisnikstranice` varchar(100) COLLATE utf8_slovenian_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `novost` (`novost`),
  KEY `korisnikstranice` (`korisnikstranice`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci AUTO_INCREMENT=70 ;

--
-- Izbacivanje podataka za tablicu `komentar`
--

INSERT INTO `komentar` (`id`, `novost`, `tekst`, `vrijeme`, `korisnikstranice`) VALUES
(67, 5, 'Vaša kolekcija je superrr, oduševljena sammm!!!!', '2015-06-16 20:23:07', 'Anoniman');

-- --------------------------------------------------------

--
-- Tablična struktura za tablicu `korisnik`
--

CREATE TABLE IF NOT EXISTS `korisnik` (
  `korisnickoime` varchar(100) COLLATE utf8_slovenian_ci NOT NULL,
  `sifra` varchar(100) COLLATE utf8_slovenian_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_slovenian_ci NOT NULL,
  `tip` varchar(100) COLLATE utf8_slovenian_ci NOT NULL,
  PRIMARY KEY (`korisnickoime`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Izbacivanje podataka za tablicu `korisnik`
--

INSERT INTO `korisnik` (`korisnickoime`, `sifra`, `email`, `tip`) VALUES
('Anoniman', '', '', ''),
('Ilvana', '60b74b6c82497a7dc08d19c77d63cadb', 'ibrankovic1@etf.unsa.ba', 'admin'),
('Irfan', 'irfan', 'iprazina1@etf.unsa.ba', 'admin');

-- --------------------------------------------------------

--
-- Tablična struktura za tablicu `novost`
--

CREATE TABLE IF NOT EXISTS `novost` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `datum` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `autor` varchar(200) COLLATE utf8_slovenian_ci NOT NULL,
  `naslov` varchar(200) COLLATE utf8_slovenian_ci NOT NULL,
  `slika` varchar(200) COLLATE utf8_slovenian_ci NOT NULL,
  `sazetak` varchar(1000) COLLATE utf8_slovenian_ci NOT NULL,
  `tekst` varchar(10000) COLLATE utf8_slovenian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci AUTO_INCREMENT=9 ;

--
-- Izbacivanje podataka za tablicu `novost`
--

INSERT INTO `novost` (`id`, `datum`, `autor`, `naslov`, `slika`, `sazetak`, `tekst`) VALUES
(1, '2015-05-23 17:42:20', 'Ilvana Branković', 'Božićno sniženje', 'http://wannabemagazine.com/wp-content/uploads/2012/12/snizenje.jpg', 'Poštovani kupci, u toku sniženje na svu odjeću iz zimske kolekcije. Naglašavamo da sniženje traje...', 'Poštovani kupci, u toku sniženje na svu odjeću iz zimske kolekcije. \nNaglašavamo da sniženje traje do 31.12.2014.\nIskoristite priliku i poklonite sebi nešto za Božić.'),
(2, '2015-05-23 17:45:29', 'Ilvana Branković', 'Nova kolekcija', 'http://static.bershka.net/4/photos2/2015/V/0/1/p/6683/483/250/6683483250_1_1_3.jpg?t=1431102844520', 'Poštovani kupci, u našu prodavnicu je stigla kolekcija proljeće/ljeto......', 'Poštovani kupci, u našu prodavnicu je stigla kolekcija proljeće/ljeto.Također, smo počeli i sa prodajom odjeće za djecu, pa je u ovu kolekciju uključena i odjeća upravo za njih.\nPožurite i posjetite naše prodavnice!'),
(3, '2015-05-23 17:46:57', 'Ilvana Branković', 'Oglas', 'http://www.rtvslon.ba/wp-content/uploads/2013/03/trazite_posao.jpg', 'U našoj prodavnici odjeće potrebna je radnica,zainteresovani se mogu prijaviti na.......', 'U našoj prodavnici odjeće potrebna je radnica.\nZainteresovani neka nas kontaktiraju na broj 033-645-977, kako bi dobili dodatne informacije.'),
(4, '2015-05-23 17:48:14', 'Ilvana Branković', 'Praznično sniženje', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQBXutiltT3vLu_gsaVjMiOByoM4diMfZ51I-HpTY9im4_99asTEw', 'Poštovani kupci, u toku sniženje na svu žensku odjeću, povodom predstojećeg praznika...', 'Poštovani kupci, u toku sniženje na svu žensku odjeću, povodom predstojećeg praznika Božiæa. \nSvi artkli će biti sniženi u iznosu od 30% do 70%.\n'),
(5, '2015-05-23 17:50:34', 'Ilvana Branković', 'Zimsko sniženje', 'http://www.fashionparkoutlet.rs/media/_VEST-VZS.PNG', 'Poštovani kupci, u toku sniženje na zimsku kolekciju. Sva odjeća iz te kolekcije je snižena od 30% do...', 'Poštovani kupci, u toku sniženje na zimsku kolekciju. Sva odjeća iz te kolekcije je snižena od 30% do 50%. \nSniženje će trajati do 01.02.2015., pa iskoristite priliku koja Vam se pruža.');

--
-- Ograničenja za izbačene tablice
--

--
-- Ograničenja za tablicu `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `komentar_ibfk_1` FOREIGN KEY (`novost`) REFERENCES `novost` (`id`),
  ADD CONSTRAINT `komentar_ibfk_2` FOREIGN KEY (`korisnikstranice`) REFERENCES `korisnik` (`korisnickoime`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
