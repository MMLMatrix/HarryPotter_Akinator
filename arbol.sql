-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-09-2022 a las 07:07:50
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `hq_harrypotter`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `arbol`
--

CREATE TABLE `arbol` (
  `nodo` int(11) NOT NULL,
  `texto` varchar(500) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `pregunta` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `arbol`
--

INSERT INTO `arbol` (`nodo`, `texto`, `pregunta`) VALUES
(1, 'estar en Hogwarts(libro3)', 1),
(2, 'pertenecer a Gryffindor', 1),
(3, 'trabajar para el ministerio', 1),
(4, 'estar en el quipo de quidditch', 1),
(5, 'pertenecer a Slytherin', 1),
(6, 'ser auror', 1),
(7, 'ser partidario del señor tenebroso', 1),
(8, 'ser hombre', 1),
(9, 'ser del mismo año que Harry Potter', 1),
(10, 'estar en el equipo de quidditch', 1),
(11, 'pertenecer a Ravenclaw', 1),
(12, 'haber conocido a Harry Potter', 1),
(13, 'pertenece a la Oficina para la Detencion y Confiscacion de Falsificacion de los Hechizos Defensivos y Objetos de Proteccion', 1),
(14, 'haber ido a Askaban', 1),
(15, 'ser mujer', 1),
(16, 'ser capitan del equipo de quidditch', 1),
(17, 'que sera capitana del equipo de quidditch', 1),
(18, 'ser pelirrojo', 1),
(19, 'ser prefecto', 1),
(20, 'ser rubio', 1),
(21, 'ser mujer', 1),
(22, 'tener el pelo rubio', 1),
(23, 'ser hombre', 1),
(24, 'ser cambiaformas', 1),
(25, 'ser hombre', 1),
(26, 'ser pelirrojo', 1),
(27, 'ser el ministro', 1),
(28, 'ser mujer', 1),
(29, 'es rubio', 1),
(30, 'ser ama de casa', 1),
(31, 'ser director de una revista', 1),
(32, 'Oliver Wood', 0),
(33, 'Fred Weasley', 0),
(34, 'Angelina Johnson', 0),
(35, 'Alicia Spinnet', 0),
(36, 'Ron Weasley', 0),
(37, 'ser mujer', 1),
(38, 'Percy Weasley', 0),
(39, 'Ser un fantasma', 1),
(40, 'Draco Malfoy', 0),
(41, 'Marcos Flint', 0),
(42, 'Pansy Parkinson', 0),
(43, 'Vincent Crabbe', 0),
(44, 'Luna Lovegood', 0),
(45, 'Cho Chang', 0),
(46, 'Cedric Digorry', 0),
(47, 'Hannah Abbott', 0),
(48, 'Nymphadora Tonks', 0),
(49, 'Alastor Moody', 0),
(50, 'Theseus Scamander', 0),
(51, 'Leta Lestrange', 0),
(52, 'Arthur Weasley', 0),
(53, 'Perkins', 0),
(54, 'Cornelius Fudge', 0),
(55, 'Dolores Umbrige', 0),
(56, 'Bellatrix Lestrange', 0),
(57, 'Rodolphus Lestrange', 0),
(58, 'Lucius Malfoy', 0),
(59, 'Peter Pettigrew', 0),
(60, 'Molly Weasley', 0),
(61, 'Pandora Lovegood', 0),
(62, 'Xenophilius Lovegood', 0),
(63, 'ser padrino de Harry Potter', 1),
(74, 'Hermione Granger', 0),
(75, 'Neville Longbottom', 0),
(78, 'Nick Casi Decapitado', 0),
(79, 'Ser Director de Hogwarts', 1),
(126, 'Sirius Black', 0),
(127, 'Ser un Elfo Domestico', 1),
(158, 'Albus Dumbledore', 0),
(159, 'Ser Guardabosques', 1),
(254, 'Dobby', 0),
(255, 'Mundungus Fetcher', 0),
(318, 'Rubeus Hagrid', 0),
(319, 'Collin Creevey', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `arbol`
--
ALTER TABLE `arbol`
  ADD PRIMARY KEY (`nodo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
