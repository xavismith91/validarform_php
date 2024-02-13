-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-02-2024 a las 23:43:30
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `loginsesion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `nombre` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `contrasena` varchar(50) NOT NULL,
  `telefono` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`nombre`, `apellidos`, `correo`, `usuario`, `contrasena`, `telefono`) VALUES
('Francisco Xavier', 'Silva Solano', 'xaviersolano91@gmail.com', 'XaviSmith', 'k3p8zj1.x33', '5583274936'),
('Gabriel ', 'Ezqueda Gonzalez', 'egonzalez@hotmail.com', 'ggonzalez', 'es1buenaidea', '5578192356'),
('Oscar', 'Alcántara', 'ocalcantara@gmail.com', 'ocalcantara', '123456', '91238674321'),
('Francisco ', 'Silva ', 'xavirock25@hotmail.com', 'Administrador', 'password91', '5583274936'),
('Alonso ', 'Sanchez', 'asanchez@ce2000.mx', 'asanchez', 'costosce2000', '5593820376');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
