-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 02-04-2024 a las 23:40:52
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `colegio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `id_alum` int(11) NOT NULL,
  `nom_alum` varchar(50) NOT NULL,
  `apod_alum` varchar(50) NOT NULL,
  `dni_alum` int(8) NOT NULL,
  `naci_alum` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id_alum`, `nom_alum`, `apod_alum`, `dni_alum`, `naci_alum`) VALUES
(8, 'Kylie E. Shapiama Sala', 'Salas Sangam Carmen', 92637350, '2021-11-23'),
(9, 'Anjhaly Inocente Yamili', 'Espernza Paredes S.', 0, '2020-09-09'),
(10, 'MIlagros K. Quispe Tam', 'Josselyn Tam Castañeda', 92050205, '2020-10-06'),
(11, 'Adrian Edy Guzman Qquellon', 'Doris Qquellon Huaman', 91382571, '2019-06-19'),
(12, 'Ian Gael Pumarino Rubio', 'Nathaly Rubio Delgado', 91759653, '2020-03-05'),
(13, 'Rodrigo Benjamin Aguilar Córdova', 'Yenica Cordova Echevaria', 91365840, '2019-05-26'),
(14, 'Noe Esteban Zolentino Castro', 'Lidia Castro Parra', 91586959, '2019-10-11'),
(15, 'Enyell Khalesy Aira Peña', 'Joselyn Peña Guzman', 91729620, '2020-02-15'),
(16, 'Elsa Saira Tafur Paulino', 'Cristian Tafur Chicona', 91441935, '2019-08-04'),
(17, 'Yerac J Fatima maritinez', '', 0, '2019-10-17'),
(18, 'Edrick Ismael Anchahua Flores', 'Karina Flores Apaza', 90730132, '2018-04-10'),
(19, 'Giovanni Andree Repetto Lopez', 'Nicole Lopez Hilares', 91033240, '2018-11-01'),
(20, 'Arlet Laveriano Baltzar', 'Manuel Laveriano Luna', 90888041, '2018-07-25'),
(21, 'Sergio Roriguez Pumahillca', 'Luz Marina Puma huillca', 91279198, '2019-03-12'),
(22, 'Alice Josselyn Quispe Tam', 'Josselyn Tam Castañeda', 90994587, '2018-09-26'),
(23, 'Ianm Jared Montenegro Tam', 'Janie Betsy Tam Castañeda', 91078540, '2018-11-28'),
(24, 'Mijael Ruiz Condori Ruiz', 'Susana Ruiz Osorio', 81710965, '2017-08-19'),
(25, 'Maria Paz Llaja Altamirano', 'Miriam Altamirano Guzman', 90222023, '2017-05-05'),
(26, 'Flabia Fernanda Anchahua Flores', 'Maritza Flores Huaman', 90186689, '2017-04-07');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id_alum`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id_alum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
