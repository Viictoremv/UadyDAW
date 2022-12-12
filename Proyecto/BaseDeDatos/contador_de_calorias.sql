-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-12-2022 a las 23:03:36
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `contador de calorias`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alimentos`
--

CREATE TABLE `alimentos` (
  `NomAlimento` varchar(30) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `CantAlimento` varchar(30) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `UnidadAlimento` varchar(30) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `calAlimento` varchar(30) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `alimentos`
--

INSERT INTO `alimentos` (`NomAlimento`, `CantAlimento`, `UnidadAlimento`, `calAlimento`) VALUES
('Leche', '100', 'ml', '52'),
('Cereal', '100', 'g', '379'),
('Chuleta de cerdo', '100', 'g', '231'),
('Frijol pinto', '100', 'g', '347'),
('Coca-cola', '100', 'ml', '35'),
('Agua', '100', 'ml', '0'),
('Huevo', '100', 'g', '155'),
('Salchicha', '100', 'g', '346');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Nombre` varchar(30) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `Correo` varchar(30) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `Contraseña` varchar(30) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Nombre`, `Correo`, `Contraseña`) VALUES
('dummy', 'usuario', '1234'),
('John Doe', 'johndoe@hotmail.com', '1234');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
