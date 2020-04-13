-- phpMyAdmin SQL Dump
-- version 2.10.1
-- http://www.phpmyadmin.net
-- 
-- Gazda (Host): localhost
-- Timp de generare: Dec 22, 2019 at 09:18 PM
-- Versiune server: 5.0.41
-- Versiune PHP: 5.2.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Baza de date: `evidenta_parinti`
-- 

-- --------------------------------------------------------

-- 
-- Structura de tabel pentru tabelul `copii`
-- 

CREATE TABLE `copii` (
  `id_copil` int(11) NOT NULL auto_increment,
  `nume_copil` varchar(50) default NULL,
  `id_parinte` int(11) default NULL,
  KEY `id_copil` (`id_copil`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

-- 
-- Salvarea datelor din tabel `copii`
-- 

INSERT INTO `copii` (`id_copil`, `nume_copil`, `id_parinte`) VALUES 
(1, 'Miriam', 2),
(2, 'Denis', 2),
(3, 'Maria', 3),
(4, 'Alex', 4),
(5, 'Ana', 1);

-- --------------------------------------------------------

-- 
-- Structura de tabel pentru tabelul `parinti`
-- 

CREATE TABLE `parinti` (
  `id` int(11) NOT NULL auto_increment,
  `nume` varchar(50) NOT NULL,
  `prenume` varchar(50) NOT NULL,
  `meserie` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

-- 
-- Salvarea datelor din tabel `parinti`
-- 

INSERT INTO `parinti` (`id`, `nume`, `prenume`, `meserie`) VALUES 
(1, 'Cozma', 'Rebeca', 'Programator'),
(2, 'Popovici', 'Adriana', 'Croitor'),
(3, 'Andreescu', 'Daniel', 'Profesor'),
(4, 'Popescu', 'Maria', 'Croitor'),
(5, 'Popa', 'Ioana', 'Medic');

-- 
-- Restrictii pentru tabele sterse
-- 

-- 
-- Restrictii pentru tabele `copii`
-- 
ALTER TABLE `copii`
  ADD CONSTRAINT `copii_ibfk_1` FOREIGN KEY (`id_copil`) REFERENCES `parinti` (`id`);
