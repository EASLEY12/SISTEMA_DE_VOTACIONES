-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-06-2015 a las 21:45:10
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `sistema_de_elecciones`
--
CREATE DATABASE IF NOT EXISTS `sistema_de_elecciones` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sistema_de_elecciones`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `candidatura`
--

CREATE TABLE IF NOT EXISTS `candidatura` (
`id_candidatura` int(11) NOT NULL,
  `tipo_candidatura` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `candidatura`
--

INSERT INTO `candidatura` (`id_candidatura`, `tipo_candidatura`) VALUES
(1, 'partidaria'),
(2, 'independiente'),
(3, 'Coalicion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargos`
--

CREATE TABLE IF NOT EXISTS `cargos` (
`id_cargos` int(11) NOT NULL,
  `tipo_cargo` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cargos`
--

INSERT INTO `cargos` (`id_cargos`, `tipo_cargo`) VALUES
(1, 'presidente'),
(2, 'diputado'),
(3, 'alcalde');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudadano`
--

CREATE TABLE IF NOT EXISTS `ciudadano` (
`id_ciudadano` int(11) NOT NULL,
  `dui` varchar(10) NOT NULL,
  `nombres` varchar(30) NOT NULL,
  `apellidos` varchar(30) NOT NULL,
  `fecha_vencimiento` date NOT NULL,
  `genero` varchar(2) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `id_departamento` varchar(11) NOT NULL,
  `id_municipios` varchar(11) NOT NULL,
  `direccion` varchar(150) NOT NULL,
  `estadodeVoto` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ciudadano`
--

INSERT INTO `ciudadano` (`id_ciudadano`, `dui`, `nombres`, `apellidos`, `fecha_vencimiento`, `genero`, `foto`, `id_departamento`, `id_municipios`, `direccion`, `estadodeVoto`) VALUES
(4, '33333333-3', 'Patricia Alejandra', 'Cerna Rivera', '2015-05-15', 'F', 'Imagenes/amormovimiento-19653.jpg', '03', '0301', 'esujkl', 'si voto'),
(5, '44444444-4', 'Kevin ', 'Fortyn Mena', '2015-05-15', 'M', 'Imagenes/imagen-de-amor-en-movimiento (2).gif', '04', '0401', 'esujkl', 'no voto'),
(6, '55555555-3', 'Roxana Carrillos', 'Carrillos Abarca', '2015-05-14', 'F', 'Imagenes/imagenes-de-amor-en-movimiento.gif', '05', '0501', 'esujkl', 'si voto'),
(7, '66666666-6', 'Alexander', 'Luis mendez', '2015-05-14', 'M', 'Imagenes/final.jpg', '06', '0601', 'esujkl', 'no voto'),
(8, '77777777-7', 'Rutillio', 'Lopez', '2015-05-14', 'M', 'Imagenes/Bleach_gif_3_by_Wings_87.gif', '07', '0701', 'esujkl', 'si voto'),
(9, '88888888-8', 'cristhian alexander', 'gonzales puros', '2015-05-29', 'M', 'Imagenes/amigos.jpg', '14', '1411', 'colonia las margaritas', 'no voto'),
(10, '99999999-9', 'carolina', 'bernal', '2015-06-12', 'F', 'Imagenes/788031603_1039097.gif', '06', '0619', 'calle 15 de septiembre', 'no voto'),
(11, '12345678-9', 'carmen alicia', 'delgado', '2015-08-21', 'F', 'Imagenes/10422187_364776177020649_4263700307110433', '04', '0415', 'colonia las pampas', 'no voto'),
(12, '98765432-1', 'geovany', 'ventura', '2015-07-18', 'M', 'Imagenes/Bleach_gif_3_by_Wings_87.gif', '13', '1312', 'lotificacion san martin', 'no voto'),
(13, '12121212-1', 'Ernesto', 'Hernandez', '2015-06-21', 'M', 'Imagenes/amigos.jpg', '08', '0813', 'En su casa', 'no voto'),
(14, '13131313-1', 'Ronald', 'alfaro', '2015-08-21', 'M', 'Imagenes/788031603_1039097.gif', '05', '0518', 'eeasdfghj', 'si voto'),
(15, '14141414-1', 'Xiomara', 'Martinez', '2015-08-05', 'F', 'Imagenes/Bleach_gif_3_by_Wings_87.gif', '12', '1202', 'fjdlfkdjfdlfd', 'no voto'),
(16, '20202020-2', 'carlos', 'gutierrez', '2015-09-12', 'M', 'Imagenes/Bleach_gif_3_by_Wings_87.gif', '08', '0819', 'avenida anastacio aquino, barrio la palma', 'no voto'),
(17, '26262626-2', 'acevedo', 'deisy', '2015-07-17', 'F', 'Imagenes/788031603_1039097.gif', '10', '1011', 'barrio el calvario', 'no voto'),
(18, '89776543-2', 'hkjgy', 'hghg', '2015-06-18', 'M', 'Imagenes/imagesCAUN1S7E.jpg', '13', '1301', 'ytrtrtu', 'no voto');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `coalicion`
--

CREATE TABLE IF NOT EXISTS `coalicion` (
`id_coalicion` int(11) NOT NULL,
  `Nombre_coalicion` varchar(100) NOT NULL,
  `Localidad` varchar(6) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `coalicion`
--

INSERT INTO `coalicion` (`id_coalicion`, `Nombre_coalicion`, `Localidad`) VALUES
(1, '1', ''),
(2, '1', ''),
(3, '1/3', ''),
(4, 'FMLN/GANA', ''),
(5, 'FMLN/ARENA', ''),
(6, 'FMLN/ARENA/GANA/PCN', ''),
(7, 'FMLN/ARENA//', ''),
(8, 'FMLN/PCN//', ''),
(9, 'FMLN/ARENA//', '05'),
(10, 'ARENA/FMLN/GANA/', '08'),
(11, 'FMLN/ARENA/GANA/', '0819'),
(12, 'FMLN/ARENA/GANA/', '0401'),
(13, 'FMLN/ARENA/GANA/', ''),
(14, 'dgdfgdfg', ''),
(15, 'dkfjdfkgjf', ''),
(16, 'lkjhg', '03'),
(17, 'lkjhg', '03'),
(18, '', ''),
(19, '', ''),
(20, '', ''),
(21, '', '03'),
(22, 'sddgdg', '04'),
(23, 'sdfsdf', '05'),
(24, 'sdfsdf', '05'),
(25, 'sdfsdf', '05'),
(26, '', '04'),
(27, '2/3/1/', '11'),
(28, 'ARENA/GANA/PCN/', '04'),
(29, 'ARENA/FMLN/GANA/PCN', '04'),
(30, 'FMLN/ARENA/GANA/', '05'),
(31, 'GANA/ARENA/FMLN/', '05'),
(32, '1/2/3/', '09'),
(33, 'FMLN/ARENA/GANA/', '09'),
(34, '1/2/4/5', ''),
(35, '///', ''),
(36, '///', ''),
(37, '///', ''),
(38, '///', ''),
(39, '3/1/5/', '03'),
(40, '1/2//', '03'),
(41, '///', ''),
(42, '1/2//', '05'),
(43, '2/3//', '03'),
(44, '1/2//', '07'),
(45, '///', ''),
(46, '///', ''),
(47, '///', ''),
(48, '///', ''),
(49, '3/2//', '07'),
(50, '1/2//', '06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--

CREATE TABLE IF NOT EXISTS `departamentos` (
`id_departamento` int(11) NOT NULL,
  `departamento` varchar(50) NOT NULL,
  `codigo_departamento` varchar(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `departamentos`
--

INSERT INTO `departamentos` (`id_departamento`, `departamento`, `codigo_departamento`) VALUES
(1, 'Ahuachapán', '01'),
(2, 'Santa Ana', '02'),
(3, 'Sonsonate', '03'),
(4, 'Chalatenango', '04'),
(5, 'La Libertad', '05'),
(6, 'San Salvador', '06'),
(7, 'Cuscatlán', '07'),
(8, 'La Paz', '08'),
(9, 'Cabañas', '09'),
(10, 'San Vicente', '10'),
(11, 'Usulután', '11'),
(12, 'San Miguel', '12'),
(13, 'Morazán', '13'),
(14, 'La Unión', '14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_coalision`
--

CREATE TABLE IF NOT EXISTS `detalle_coalision` (
`id_detalleCoalision` int(11) NOT NULL,
  `id_partido` int(11) NOT NULL,
  `id_coalision` int(11) NOT NULL,
  `codigo_registro` varchar(3) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `detalle_coalision`
--

INSERT INTO `detalle_coalision` (`id_detalleCoalision`, `id_partido`, `id_coalision`, `codigo_registro`) VALUES
(1, 2, 21, ''),
(2, 1, 21, ''),
(3, 4, 21, ''),
(4, 3, 21, ''),
(5, 2, 22, ''),
(6, 1, 22, ''),
(7, 3, 22, ''),
(8, 1, 23, ''),
(9, 2, 23, ''),
(10, 3, 23, ''),
(11, 4, 23, ''),
(12, 1, 24, ''),
(13, 2, 24, ''),
(14, 3, 24, ''),
(15, 4, 24, ''),
(16, 1, 25, ''),
(17, 2, 25, ''),
(18, 3, 25, ''),
(19, 4, 25, ''),
(20, 2, 26, ''),
(21, 1, 26, ''),
(22, 4, 26, ''),
(23, 2, 27, ''),
(24, 3, 27, ''),
(25, 1, 27, ''),
(26, 0, 28, ''),
(27, 0, 28, ''),
(28, 0, 28, ''),
(29, 0, 29, ''),
(30, 0, 29, ''),
(31, 0, 29, ''),
(32, 0, 29, ''),
(33, 0, 30, ''),
(34, 0, 30, ''),
(35, 0, 30, ''),
(36, 0, 31, ''),
(37, 0, 31, ''),
(38, 0, 31, ''),
(39, 1, 32, ''),
(40, 2, 32, ''),
(41, 3, 32, ''),
(42, 0, 33, ''),
(43, 0, 33, ''),
(44, 0, 33, ''),
(45, 1, 34, ''),
(46, 2, 34, ''),
(47, 4, 34, ''),
(48, 5, 34, ''),
(49, 3, 39, ''),
(50, 1, 39, ''),
(51, 5, 39, ''),
(52, 1, 40, ''),
(53, 2, 40, ''),
(54, 1, 42, ''),
(55, 2, 42, ''),
(56, 2, 43, ''),
(57, 3, 43, ''),
(58, 1, 44, ''),
(59, 2, 44, ''),
(60, 3, 49, ''),
(61, 2, 49, ''),
(62, 1, 50, ''),
(63, 2, 50, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripcion_candidato`
--

CREATE TABLE IF NOT EXISTS `inscripcion_candidato` (
`id_inscripcion_candidato` int(11) NOT NULL,
  `dui` varchar(10) NOT NULL,
  `nombres` varchar(30) NOT NULL,
  `apellidos` varchar(30) NOT NULL,
  `imagen_partido` varchar(50) NOT NULL,
  `imagen_candidato` varchar(50) NOT NULL,
  `codigo_departamento` varchar(2) NOT NULL,
  `codigo_municipio` varchar(4) NOT NULL,
  `Representacion_coalision` varchar(4) NOT NULL,
  `id_candidatura` int(11) NOT NULL,
  `id_cargos` int(11) NOT NULL,
  `id_partidos` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=83 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `inscripcion_candidato`
--

INSERT INTO `inscripcion_candidato` (`id_inscripcion_candidato`, `dui`, `nombres`, `apellidos`, `imagen_partido`, `imagen_candidato`, `codigo_departamento`, `codigo_municipio`, `Representacion_coalision`, `id_candidatura`, `id_cargos`, `id_partidos`) VALUES
(50, '17171717-1', 'Margarita', 'Villalta', '', 'Imagenes/imagen-de-amor-en-movimiento.gif', '08', '', '', 1, 2, 2),
(51, '18181818-1', 'Jose', 'Mendez', '', 'Imagenes/imagen-de-amor-en-movimiento (2).gif', '04', '', '', 1, 2, 2),
(52, '19191919-1', 'ALEJANDRA', 'Argueta', '', 'Imagenes/imagen-de-amor-en-movimiento.gif', '05', '', '', 1, 2, 3),
(53, '20202020-2', 'cristabel', 'campos', '', 'Imagenes/imagen-de-amor-en-movimiento.gif', '06', '', '', 1, 2, 3),
(54, '21212121-2', 'salvador', 'Lara', '', 'Imagenes/imagen-de-amor-en-movimiento.gif', '07', '', '', 1, 2, 4),
(56, '23232323-2', 'ramiro', 'caseres', '', 'Imagenes/imagesCAUN1S7E.jpg', '09', '', '', 1, 2, 1),
(58, '25252525-2', 'Glenda ', 'Villalta jovel', '', 'Imagenes/imagen-de-amor-en-movimiento (2).gif', '11', '', '', 1, 2, 2),
(59, '26262626-2', 'Nancy', 'Nohemi', '', 'Imagenes/imagen-de-amor-en-movimiento.gif', '12', '', '', 1, 2, 2),
(60, '39393939-3', 'Yancy', 'Yamilet', '', 'Imagenes/imagen-de-amor-en-movimiento (2).gif', '13', '', '', 1, 2, 3),
(61, '30303003-0', 'Karla', 'DE martinez', '', 'Imagenes/imagesCAPKCJ5J.jpg', '14', '', '', 1, 2, 3),
(63, '84574598-4', 'susana', 'casadad', '', '', '01', '', '', 1, 2, 4),
(67, '33333333-3', 'dsfsdf', 'sdfdsf', '', 'Imagenes/f466e29f1c2952af17d3c2e8ed7eed22.jpg', '01', '', '', 1, 2, 2),
(73, '67676767-6', 'hola', 'que hace', '', '', '08', '0819', '', 1, 3, 5),
(74, '44747477-4', 'hola', 'que', '', 'Imagenes/gradient.png', '08', '', '', 1, 2, 1),
(75, '67676767-6', 'hola', 'que tal', '', 'Imagenes/pass-icon.png', '08', '', '', 1, 2, 2),
(76, '43434343-4', 'fdgdfg', 'dfgdfg', '', '', '08', '0819', '', 1, 3, 4),
(77, '56565656-5', 'nestor', 'mejia', '', 'Imagenes/bg.png', '05', '', '', 1, 2, 2),
(78, '98809809-8', 'Roxana', 'Carrillos', '', 'Imagenes/gradient.png', '01', '', '', 1, 2, 5),
(79, '67676767-6', 'gerardo', 'barrios', '', '', '05', '0510', '', 1, 3, 1),
(80, '56565656-5', 'LUIS ', 'Mendez', '', '', '', '', '', 1, 1, 1),
(81, '12312312-3', 'dfgdfg', 'dfgdfg', '', '', '', '', '', 1, 1, 2),
(82, '23542343-2', 'dfgdfgdfg', 'sdfsdfsdf', '', '', '', '', '', 1, 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipios`
--

CREATE TABLE IF NOT EXISTS `municipios` (
`id_municipios` int(11) NOT NULL,
  `municipios` varchar(100) NOT NULL,
  `codigo_municipio` varchar(4) DEFAULT NULL,
  `codigo_depart` varchar(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=263 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `municipios`
--

INSERT INTO `municipios` (`id_municipios`, `municipios`, `codigo_municipio`, `codigo_depart`) VALUES
(1, 'Ahuachapán', '0101', '01'),
(2, 'Apaneca', '0102', '01'),
(3, 'Atiquizaya', '0103', '01'),
(4, 'Concepción de Ataco', '0104', '01'),
(5, 'El Refugio', '0105', '01'),
(6, 'Guaymango', '0106', '01'),
(7, 'Jujutla', '0107', '01'),
(8, 'San Francisco Menéndez', '0108', '01'),
(9, 'San Lorenzo', '0109', '01'),
(10, 'San Pedro Puxtla', '0110', '01'),
(11, 'Tacuba', '0111', '01'),
(12, 'Turín', '0112', '01'),
(13, 'Candelaria de la Frontera', '0201', '02'),
(14, 'Coatepeque', '0202', '02'),
(15, 'Chalchuapa', '0203', '02'),
(16, 'El Congo', '0204', '02'),
(17, 'El Porvenir', '0205', '02'),
(18, 'Masahuat', '0206', '02'),
(19, 'Metapán', '0207', '02'),
(20, 'San Antonio Pajonal', '0208', '02'),
(21, 'San Sebastián Salitrillo', '0209', '02'),
(22, 'Santa Ana', '0210', '02'),
(23, 'Santa Rosa Guachipilín', '0211', '02'),
(24, 'Santiago de la Frontera', '0212', '02'),
(25, 'Texistepeque', '0213', '02'),
(26, 'Acajutla', '0301', '03'),
(27, 'Armenia', '0302', '03'),
(28, 'Caluco', '0303', '03'),
(29, 'Cuisnahuat', '0304', '03'),
(30, 'Santa Isabel Ishuatán', '0305', '03'),
(31, 'Izalco', '0306', '03'),
(32, 'Juayúa', '0307', '03'),
(33, 'Nahuizalco', '0308', '03'),
(34, 'Nahulingo', '0309', '03'),
(35, 'Salcoatitán', '0310', '03'),
(36, 'San Antonio del Monte', '0311', '03'),
(37, 'San Julián', '0312', '03'),
(38, 'Santa Catarina Masahuat', '0313', '03'),
(39, 'Santo Domingo de Guzmán', '0314', '03'),
(40, 'Sonsonate', '0315', '03'),
(41, 'Sonzacate', '0316', '03'),
(42, 'Agua Caliente', '0401', '04'),
(43, 'Arcatao', '0402', '04'),
(44, 'Azacualpa', '0403', '04'),
(45, 'Citalá', '0404', '04'),
(46, 'Comalapa', '0405', '04'),
(47, 'Concepción Quezaltepeque', '0406', '04'),
(48, 'Chalatenango', '0407', '04'),
(49, 'Dulce Nombre de María', '0408', '04'),
(50, 'El Carrizal', '0409', '04'),
(51, 'El Paraíso', '0410', '04'),
(52, 'La Laguna', '0411', '04'),
(53, 'La Palma', '0412', '04'),
(54, 'La Reina', '0413', '04'),
(55, 'Las Vueltas', '0414', '04'),
(56, 'Nombre de Jesús', '0415', '04'),
(57, 'Nueva Concepción', '0416', '04'),
(58, 'Nueva Trinidad', '0417', '04'),
(59, 'Ojos de Agua', '0418', '04'),
(60, 'Potonico', '0419', '04'),
(61, 'San Antonio de la Cruz', '0420', '04'),
(62, 'San Antonio Los Ranchos', '0421', '04'),
(63, 'San Fernando', '0422', '04'),
(64, 'San Francisco Lempa', '0423', '04'),
(65, 'San Francisco Morazán', '0424', '04'),
(66, 'San Ignacio', '0425', '04'),
(67, 'San Isidro Labrador', '0426', '04'),
(68, 'San José Cancasque', '0427', '04'),
(69, 'San José Las Flores ', '0428', '04'),
(70, 'San Luis del Carmen', '0429', '04'),
(71, 'San Miguel de Mercedes', '0430', '04'),
(72, 'San Rafael', '0431', '04'),
(73, 'Santa Rita', '0432', '04'),
(74, 'Tejutla', '0433', '04'),
(75, 'Antiguo Cuscatlán', '0501', '05'),
(76, 'Ciudad Arce', '0502', '05'),
(77, 'Colón', '0503', '05'),
(78, 'Comasagua', '0504', '05'),
(79, 'Chiltiupán', '0505', '05'),
(80, 'Huizúcar', '0506', '05'),
(81, 'Jayaque', '0507', '05'),
(82, 'Jicalapa', '0508', '05'),
(83, 'La Libertad', '0509', '05'),
(84, 'Nuevo Cuscatlán', '0510', '05'),
(85, 'Santa Tecla', '0511', '05'),
(86, 'Quezaltepeque', '0512', '05'),
(87, 'Sacacoyo', '0513', '05'),
(88, 'San José Villanueva', '0514', '05'),
(89, 'San Juan Opico', '0515', '05'),
(90, 'San Matías', '0516', '05'),
(91, 'San Pablo Tacachico', '0517', '05'),
(92, 'Tamanique', '0518', '05'),
(93, 'Talnique', '0519', '05'),
(94, 'Teotepeque', '0520', '05'),
(95, 'Tepecoyo', '0521', '05'),
(96, 'Zaragoza', '0522', '05'),
(97, 'Aguilares', '0601', '06'),
(98, 'Apopa', '0602', '06'),
(99, 'Ayutuxtepeque', '0603', '06'),
(100, 'Cuscatancingo', '0604', '06'),
(101, 'El Paisnal', '0605', '06'),
(102, 'Guazapa', '0606', '06'),
(103, 'Ilopango', '0607', '06'),
(104, 'Mejicanos', '0608', '06'),
(105, 'Nejapa', '0609', '06'),
(106, 'Panchimalco', '0610', '06'),
(107, 'Rosario de Mora', '0611', '06'),
(108, 'San Marcos', '0612', '06'),
(109, 'San Martín', '0613', '06'),
(110, 'San Salvador', '0614', '06'),
(111, 'Santiago Texacuangos', '0615', '06'),
(112, 'Santo Tomás', '0616', '06'),
(113, 'Soyapango', '0617', '06'),
(114, 'Tonacatepeque', '0618', '06'),
(115, 'Delgado', '0619', '06'),
(116, 'Candelaria', '0701', '07'),
(117, 'Cojutepeque', '0702', '07'),
(118, 'El Carmen', '0703', '07'),
(119, 'El Rosario', '0704', '07'),
(120, 'Monte San Juan', '0705', '07'),
(121, 'Oratorio de Concepción', '0706', '07'),
(122, 'San Bartolomé Perulapía', '0707', '07'),
(123, 'San Cristóbal', '0708', '07'),
(124, 'San José Guayabal', '0709', '07'),
(125, 'San Pedro Perulapán', '0710', '07'),
(126, 'San Rafael Cedros', '0711', '07'),
(127, 'San Ramón', '0712', '07'),
(128, 'Santa Cruz Analquito', '0713', '07'),
(129, 'Santa Cruz Michapa', '0714', '07'),
(130, 'Suchitoto', '0715', '07'),
(131, 'Tenancingo', '0716', '07'),
(132, 'Cuyultitán', '0801', '08'),
(133, 'El Rosario', '0802', '08'),
(134, 'Jerusalén', '0803', '08'),
(135, 'Mercedes La Ceiba', '0804', '08'),
(136, 'Olocuilta', '0805', '08'),
(137, 'Paraíso de Osorio', '0806', '08'),
(138, 'San Antonio Masahuat', '0807', '08'),
(139, 'San Emigdio', '0808', '08'),
(140, 'San Francisco Chinameca', '0809', '08'),
(141, 'San Juan Nonualco', '0810', '08'),
(142, 'San Juan Talpa', '0811', '08'),
(143, 'San Juan Tepezontes', '0812', '08'),
(144, 'San Luis Talpa', '0813', '08'),
(145, 'San Miguel Tepezontes', '0814', '08'),
(146, 'San Pedro Masahuat', '0815', '08'),
(147, 'San Pedro Nonualco', '0816', '08'),
(148, 'San Rafael Obrajuelo', '0817', '08'),
(149, 'Santa María Ostuma', '0818', '08'),
(150, 'Santiago Nonualco', '0819', '08'),
(151, 'Tapalhuaca', '0820', '08'),
(152, 'Zacatecoluca', '0821', '08'),
(153, 'San Luis La Herradura', '0822', '08'),
(154, 'Cinquera', '0901', '09'),
(155, 'Guacotecti', '0902', '09'),
(156, 'Ilobasco', '0903', '09'),
(157, 'Jutiapa', '0904', '09'),
(158, 'San Isidro', '0905', '09'),
(159, 'Sensuntepeque', '0906', '09'),
(160, 'Tejutepeque', '0907', '09'),
(161, 'Victoria', '0908', '09'),
(162, 'Villa Dolores', '0909', '09'),
(163, 'Apastepeque', '1001', '10'),
(164, 'Guadalupe', '1002', '10'),
(165, 'San Cayetano Istepeque', '1003', '10'),
(166, 'Santa Clara', '1004', '10'),
(167, 'Santo Domingo', '1005', '10'),
(168, 'San Esteban Catarina', '1006', '10'),
(169, 'San Ildefonso', '1007', '10'),
(170, 'San Lorenzo', '1008', '10'),
(171, 'San Sebastián', '1009', '10'),
(172, 'San Vicente', '1010', '10'),
(173, 'Tecoluca', '1011', '10'),
(174, 'Tepetitán', '1012', '10'),
(175, 'Verapaz', '1013', '10'),
(176, 'Alegría', '1101', '11'),
(177, 'Berlín', '1102', '11'),
(178, 'California', '1103', '11'),
(179, 'Concepción Batres', '1104', '11'),
(180, 'El Triunfo', '1105', '11'),
(181, 'Ereguayquín', '1106', '11'),
(182, 'Estanzuelas', '1107', '11'),
(183, 'Jiquilisco', '1108', '11'),
(184, 'Jucuapa', '1109', '11'),
(185, 'Jucuarán', '1110', '11'),
(186, 'Mercedes Umaña', '1111', '11'),
(187, 'Nueva Granada', '1112', '11'),
(188, 'Ozatlán', '1113', '11'),
(189, 'Puerto El Triunfo', '1114', '11'),
(190, 'San Agustín', '1115', '11'),
(191, 'San Buenaventura', '1116', '11'),
(192, 'San Dionisio', '1117', '11'),
(193, 'Santa Elena', '1118', '11'),
(194, 'San Francisco Javier', '1119', '11'),
(195, 'Santa María', '1120', '11'),
(196, 'Santiago de María', '1121', '11'),
(197, 'Tecapán', '1122', '11'),
(198, 'Usulután', '1123', '11'),
(199, 'Carolina', '1201', '12'),
(200, 'Ciudad Barrios', '1202', '12'),
(201, 'Comacarán', '1203', '12'),
(202, 'Chapeltique', '1204', '12'),
(203, 'Chinameca', '1205', '12'),
(204, 'Chirilagua', '1206', '12'),
(205, 'El Tránsito', '1207', '12'),
(206, 'Lolotique', '1208', '12'),
(207, 'Moncagua', '1209', '12'),
(208, 'Nueva Guadalupe', '1210', '12'),
(209, 'Nuevo Edén de San Juan', '1211', '12'),
(210, 'Quelepa', '1212', '12'),
(211, 'San Antonio del Mosco', '1213', '12'),
(212, 'San Gerardo', '1214', '12'),
(213, 'San Jorge', '1215', '12'),
(214, 'San Luis de la Reina', '1216', '12'),
(215, 'San Miguel', '1217', '12'),
(216, 'San Rafael Oriente', '1218', '12'),
(217, 'Sesori', '1219', '12'),
(218, 'Uluazapa', '1220', '12'),
(219, 'Arambala', '1301', '13'),
(220, 'Cacaopera', '1302', '13'),
(221, 'Corinto', '1303', '13'),
(222, 'Chilanga', '1304', '13'),
(223, 'Delicias de Concepción', '1305', '13'),
(224, 'El Divisadero', '1306', '13'),
(225, 'El Rosario', '1307', '13'),
(226, 'Gualococti', '1308', '13'),
(227, 'Guatajiagua', '1309', '13'),
(228, 'Joateca', '1310', '13'),
(229, 'Jocoaitique', '1311', '13'),
(230, 'Jocoro', '1312', '13'),
(231, 'Lolotiquillo', '1313', '13'),
(232, 'Meanguera', '1314', '13'),
(233, 'Osicala', '1315', '13'),
(234, 'Perquín', '1316', '13'),
(235, 'San Carlos', '1317', '13'),
(236, 'San Fernando', '1318', '13'),
(237, 'San Francisco Gotera', '1319', '13'),
(238, 'San Isidro', '1320', '13'),
(239, 'San Simón', '1321', '13'),
(240, 'Sensembra', '1322', '13'),
(241, 'Sociedad', '1323', '13'),
(242, 'Torola', '1324', '13'),
(243, 'Yamabal', '1325', '13'),
(244, 'Yoloaiquín', '1326', '13'),
(245, 'Anamorós', '1401', '14'),
(246, 'Bolívar', '1402', '14'),
(247, 'Concepción de Oriente', '1403', '14'),
(248, 'Conchagua', '1404', '14'),
(249, 'El Carmen', '1405', '14'),
(250, 'El Sauce', '1406', '14'),
(251, 'Intipucá', '1407', '14'),
(252, 'La Unión', '1408', '14'),
(253, 'Lilisque', '1409', '14'),
(254, 'Meanguera del Golfo', '1410', '14'),
(255, 'Nueva Esparta', '1411', '14'),
(256, 'Pasaquina', '1412', '14'),
(257, 'Polorós', '1413', '14'),
(258, 'San Alejo', '1414', '14'),
(259, 'San José', '1415', '14'),
(260, 'Santa Rosa de Lima', '1416', '14'),
(261, 'Yayantique', '1417', '14'),
(262, 'Yucuaiquín', '1418', '14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `partidos`
--

CREATE TABLE IF NOT EXISTS `partidos` (
`id_partidos` int(11) NOT NULL,
  `nombre_partido` varchar(50) NOT NULL,
  `Codigo_Registro` varchar(3) NOT NULL,
  `imagen` varchar(100) NOT NULL,
  `represent_partido` varchar(40) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `partidos`
--

INSERT INTO `partidos` (`id_partidos`, `nombre_partido`, `Codigo_Registro`, `imagen`, `represent_partido`) VALUES
(1, 'FMLN', '', 'Imagenes/Bandera FMLN.jpg', 'hoy'),
(2, 'ARENA', '', 'Imagenes/Bandera_Alianza_Republicana_Nacionalista.jpg', 'alguien'),
(4, 'PCN', '', 'Imagenes/sv}pcn.gif', 'Roberto'),
(5, 'GANA', '', 'Imagenes/150px-Bandera_de_GANA.jpg', 'alguien');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resultados_elecciones`
--

CREATE TABLE IF NOT EXISTS `resultados_elecciones` (
`id_votosAlcalde` int(11) NOT NULL,
  `id_partidos` int(11) NOT NULL,
  `id_cargos` int(11) NOT NULL,
  `inscripcion_candidato` int(11) NOT NULL,
  `id_departamento` varchar(3) NOT NULL,
  `id_municipios` varchar(11) NOT NULL,
  `numeros_votos` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `resultados_elecciones`
--

INSERT INTO `resultados_elecciones` (`id_votosAlcalde`, `id_partidos`, `id_cargos`, `inscripcion_candidato`, `id_departamento`, `id_municipios`, `numeros_votos`) VALUES
(2, 1, 0, 0, '08', '0', 38),
(4, 1, 0, 0, '10', '0', 2),
(7, 1, 0, 0, '02', '0', 2),
(8, 2, 0, 0, '03', '0', 9),
(9, 2, 0, 0, '04', '0', 1),
(10, 2, 0, 0, '12', '0', 2),
(11, 3, 0, 0, '06', '0', 1),
(12, 4, 0, 0, '', '0', 1),
(13, 1, 0, 0, '09', '0', 10),
(18, 4, 0, 0, '01', '0', 14),
(20, 2, 0, 0, '01', '0', 19),
(21, 1, 0, 0, '01', '0', 6),
(23, 5, 0, 0, '08', '0', 1),
(24, 4, 0, 0, '08', '819', 12),
(26, 0, 0, 0, '01', '101', 1),
(27, 0, 0, 0, '03', '301', 1),
(28, 4, 0, 0, '07', '0', 1),
(29, 0, 0, 0, '07', '701', 1),
(30, 2, 0, 0, '05', '0', 2),
(31, 0, 0, 0, '05', '501', 1),
(32, 5, 0, 0, '01', '0', 1),
(33, 1, 0, 0, '05', '0', 1),
(34, 0, 0, 0, '05', '518', 1),
(35, 4, 0, 0, '08', '0819', 1),
(36, 2, 0, 0, '08', '', 1),
(37, 5, 0, 0, '08', '0819', 1),
(38, 0, 0, 0, '', '', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_de_eleccion`
--

CREATE TABLE IF NOT EXISTS `tipo_de_eleccion` (
`id` int(11) NOT NULL,
  `tipo_eleccion1` varchar(50) NOT NULL,
  `fecha` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
`id_usuario` int(11) NOT NULL,
  `nombres` varchar(40) NOT NULL,
  `apellidos` varchar(40) NOT NULL,
  `nomb_usuario` varchar(40) NOT NULL,
  `clave` varchar(65) NOT NULL,
  `fecha_creacion` date NOT NULL,
  `tipo_de_usuario` varchar(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombres`, `apellidos`, `nomb_usuario`, `clave`, `fecha_creacion`, `tipo_de_usuario`) VALUES
(1, 'Marvin', 'Eduardo', 'EASLEY', 'f91bf30ab73f806503a2a32b5eb3c167b1560879', '2015-05-25', '1'),
(2, 'Marvin', 'Eduardo', 'Rigardo', '40d6bb3ed7fef516c73274131d5a837c16de74fd', '2015-05-25', ''),
(4, 'elizabeth', 'abarca', 'liza', '7e31b076c038116b711593886947b7ee669cdd6a', '2015-05-25', '2'),
(5, 'Roxana Carrillos', 'abarca', 'Ely', '2ac015d62b7e0c3d644e7f45f71d854ce617fc24', '2015-05-27', '2'),
(6, 'Rigardo', 'Easley', 'Prisilla', '0095b0a36755ef5ccb08137215a9bf52607240b0', '2015-05-27', '2'),
(7, 'hhdhd', 'dfgdfg', 'dfg', '17ba0791499db908433b80f37c5fbc89b870084b', '2015-05-27', '2'),
(8, 'glenda', 'jovel', 'glenda', '847ab895bd58226b715cb27ebed4104743e646eb', '2015-05-28', '2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `votos`
--

CREATE TABLE IF NOT EXISTS `votos` (
`id_votos` int(11) NOT NULL,
  `dui_ciudadano` tinyint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `candidatura`
--
ALTER TABLE `candidatura`
 ADD PRIMARY KEY (`id_candidatura`);

--
-- Indices de la tabla `cargos`
--
ALTER TABLE `cargos`
 ADD PRIMARY KEY (`id_cargos`);

--
-- Indices de la tabla `ciudadano`
--
ALTER TABLE `ciudadano`
 ADD PRIMARY KEY (`id_ciudadano`);

--
-- Indices de la tabla `coalicion`
--
ALTER TABLE `coalicion`
 ADD PRIMARY KEY (`id_coalicion`);

--
-- Indices de la tabla `departamentos`
--
ALTER TABLE `departamentos`
 ADD PRIMARY KEY (`id_departamento`), ADD UNIQUE KEY `codigo` (`codigo_departamento`);

--
-- Indices de la tabla `detalle_coalision`
--
ALTER TABLE `detalle_coalision`
 ADD PRIMARY KEY (`id_detalleCoalision`);

--
-- Indices de la tabla `inscripcion_candidato`
--
ALTER TABLE `inscripcion_candidato`
 ADD PRIMARY KEY (`id_inscripcion_candidato`), ADD KEY `id_candidatura` (`id_candidatura`), ADD KEY `id_cargos` (`id_cargos`);

--
-- Indices de la tabla `municipios`
--
ALTER TABLE `municipios`
 ADD PRIMARY KEY (`id_municipios`), ADD UNIQUE KEY `codigo` (`codigo_municipio`);

--
-- Indices de la tabla `partidos`
--
ALTER TABLE `partidos`
 ADD PRIMARY KEY (`id_partidos`);

--
-- Indices de la tabla `resultados_elecciones`
--
ALTER TABLE `resultados_elecciones`
 ADD PRIMARY KEY (`id_votosAlcalde`);

--
-- Indices de la tabla `tipo_de_eleccion`
--
ALTER TABLE `tipo_de_eleccion`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
 ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `votos`
--
ALTER TABLE `votos`
 ADD PRIMARY KEY (`id_votos`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `candidatura`
--
ALTER TABLE `candidatura`
MODIFY `id_candidatura` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `cargos`
--
ALTER TABLE `cargos`
MODIFY `id_cargos` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `ciudadano`
--
ALTER TABLE `ciudadano`
MODIFY `id_ciudadano` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT de la tabla `coalicion`
--
ALTER TABLE `coalicion`
MODIFY `id_coalicion` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT de la tabla `departamentos`
--
ALTER TABLE `departamentos`
MODIFY `id_departamento` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `detalle_coalision`
--
ALTER TABLE `detalle_coalision`
MODIFY `id_detalleCoalision` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT de la tabla `inscripcion_candidato`
--
ALTER TABLE `inscripcion_candidato`
MODIFY `id_inscripcion_candidato` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=83;
--
-- AUTO_INCREMENT de la tabla `municipios`
--
ALTER TABLE `municipios`
MODIFY `id_municipios` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=263;
--
-- AUTO_INCREMENT de la tabla `partidos`
--
ALTER TABLE `partidos`
MODIFY `id_partidos` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `resultados_elecciones`
--
ALTER TABLE `resultados_elecciones`
MODIFY `id_votosAlcalde` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT de la tabla `tipo_de_eleccion`
--
ALTER TABLE `tipo_de_eleccion`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `votos`
--
ALTER TABLE `votos`
MODIFY `id_votos` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `inscripcion_candidato`
--
ALTER TABLE `inscripcion_candidato`
ADD CONSTRAINT `inscripcion_candidato_ibfk_2` FOREIGN KEY (`id_candidatura`) REFERENCES `candidatura` (`id_candidatura`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
