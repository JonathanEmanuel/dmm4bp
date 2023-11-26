-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-11-2023 a las 20:49:32
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
-- Base de datos: `peliculas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id_comentario` int(11) NOT NULL,
  `contenido` varchar(150) NOT NULL,
  `id_peli` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id_comentario`, `contenido`, `id_peli`, `id_usuario`) VALUES
(1, 'Holaa', 4, 1),
(2, 'mu y buena peli', 1, 2),
(3, 'ok', 2, 1),
(4, 'dsds', 4, 1),
(5, 'Muy buena peli :D', 1, 1),
(6, 'No me gusto', 1, 5),
(7, 'No me gusto x2', 1, 5),
(8, 'Holaaaaa', 4, 5),
(9, 'Muy buena :D\r\n', 3, 4),
(10, 'dsads', 1, 4),
(11, 'Holaaaa', 2, 4),
(12, 'Fue genial', 1, 4),
(13, 'dsdas', 2, 1),
(14, 'un comentarios', 6, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pelis`
--

CREATE TABLE `pelis` (
  `id_peli` int(11) NOT NULL,
  `nombre` varchar(64) NOT NULL,
  `foto` varchar(1000) NOT NULL,
  `poster` varchar(256) NOT NULL,
  `detalle` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pelis`
--

INSERT INTO `pelis` (`id_peli`, `nombre`, `foto`, `poster`, `detalle`) VALUES
(1, 'Capitán América: El primer vengador', 'images/capitan-america.jpg', 'images/capitan-america-poster.jpg', 'No es la primera película producida por Marvel pero sí que es la primera película que debes ver para poder entender la historia del Universo Cinematográfico de Marvel, ya que está ambientada en la Segunda Guerra Mundial.\r\n\r\nSinopsis: Se centra en los primeros días del Universo Marvel, cuando Steve Rogers (Chris Evans) se ofrece voluntario para participar en un programa experimental que lo convierte en el super soldado conocido como Capitán América. Rogers se une a Bucky Barnes (Sebastian Stan) y Peggy Carter (Hayley Atwell) para hacer la guerra a los malvados de la organización HYDRA, dirigido por el villano Red Skull (Hugo Weaving).'),
(2, 'Capitana Marvel', 'images/capitana-marvel.jpg', 'images/capitana-marvel-poster.jpg', 'La película es la historia de origen de Capitana Marvel, y no solo está ambientada en los años 90, sino que sentará las bases sobre todo lo que ocurre en la Fase 4. Cronológicamente, debes verla en este orden.\r\n\r\nSinopsis: Situada en los años 90, la trama sigue las aventuras de Carol Danvers (Brie Larson), una poderosa guerrera que intenta mediar en un conflicto entre dos razas alienígenas que ha terminado llegando a la Tierra.'),
(3, 'Iron Man', 'images/iron-man.jpg', 'images/iron-man-poster.jpg', 'La película que dio el pistoletazo de salida al Universo Cinematográfico de Marvel (UCM) y al cambio más grande en el cine de Hollywood. Conocemos a Tony Stark, que será el personaje sobre el que gire toda la franquicia hasta \'Vengadores: Endgame\'. Una de las mejores películas de superhéroes de la historia.\r\n\r\nSinopsis: Tony Stark (Robert Downey Jr.) se dedica a vender armas y lo tiene todo: dinero, poder, mujeres... Durante una demostración en Afganistán, un poderoso traficante lo captura. Gravemente herido (un fragmento de metralla está junto a su corazón), Stark se construye una armadura que le mantiene con vida y gracias a la cual escapa. Ya en USA, jura usar su nuevo traje para salvar a la gente.'),
(4, 'Iron Man 2', 'images/iron-man-2-poster.jpg', '', ''),
(5, 'Hulk', 'images/el-increible-hulk-portada.jpg', 'images/el-increible-hulk.jpg', 'Peli del hombre Verde'),
(6, 'Thor', 'images/thor-porta.jpg', 'images/thor-poster.jpg', 'La mejor Peli :D');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id_rol` int(11) NOT NULL,
  `nombre` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id_rol`, `nombre`) VALUES
(1, 'administrador'),
(2, 'visitante');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(64) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `id_rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `email`, `password`, `id_rol`) VALUES
(1, 'Juan', 'Juan@mail.com', '1234', 1),
(2, 'Sofia', 'sofia@mail.com', '0000', 2),
(3, 'Leandro', 'lean@gmail.com', '1234', 2),
(4, 'Esteban', 'esteban@mail.com', '1234', 2),
(5, 'Azul', 'azul@mail.com', 'azul', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id_comentario`);

--
-- Indices de la tabla `pelis`
--
ALTER TABLE `pelis`
  ADD PRIMARY KEY (`id_peli`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `pelis`
--
ALTER TABLE `pelis`
  MODIFY `id_peli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
