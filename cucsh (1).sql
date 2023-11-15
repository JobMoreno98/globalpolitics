-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 04-07-2023 a las 17:39:43
-- Versión del servidor: 8.0.31
-- Versión de PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cucsh`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

DROP TABLE IF EXISTS `estudiantes`;
CREATE TABLE IF NOT EXISTS `estudiantes` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `especializacion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no disponible',
  `tutor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no disponible',
  `estudiante` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no disponible',
  `proyecto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no disponible',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `estudiantes`
--

INSERT INTO `estudiantes` (`id`, `especializacion`, `tutor`, `estudiante`, `proyecto`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'dd', 'dd', 'sosslss', 'alala', '2023-07-01 06:29:45', NULL, NULL),
(2, 'djjsksks', 'slalaksks', 'sosslss', 'dd', '2023-07-02 01:23:57', NULL, NULL),
(3, 'djjsksks', 'slalaksks', 'sosslss', 'asa', '2023-07-02 01:25:12', NULL, NULL),
(4, 'djjsksks', 'slalaksks', 'n', 'hjjhhjgjhgjhgjhgjhgj', '2023-07-02 01:24:26', NULL, NULL),
(5, 'djjsksks', 'slalaksks', 'sosslss', 'asa', NULL, NULL, NULL),
(6, 'djjsksks', 'slalaksks', '1111', 'n', NULL, NULL, NULL),
(7, 'd', 'dd', 'sosslss', 'dd', NULL, NULL, NULL),
(8, 'juan', 'd', 'sosslss', 'e', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

DROP TABLE IF EXISTS `eventos`;
CREATE TABLE IF NOT EXISTS `eventos` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `titulo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no disponible',
  `subtitulo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no disponible',
  `descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `fecha` date NOT NULL DEFAULT '2023-01-01',
  `imagen` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'imagen no disponible',
  `enlace` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Enlace no disponible',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`id`, `titulo`, `subtitulo`, `descripcion`, `deleted_at`, `fecha`, `imagen`, `enlace`, `created_at`, `updated_at`) VALUES
(1, 'AMLO presenta declaración patrimonial; informa cuánto gana y que ya cobra pensión del bienestar', 'dice que Biden se encuentra bien después de un tropezón durante una ceremonia de graduación de la Academia de la Fuerza Aérea', 'El histórico Partido Revolucionario Institucional (PRI) está en crisis. La formación tricolor que gobernó durante más de 70 años atraviesa un momento de grave división bajo la dirigencia de Alejandro Alito Moreno. Unos 320 priistas, encabezados por el senador Miguel Ángel Osorio Chong, han anunciado este lunes su renuncia al partido. También han dejado la formación los senadores Claudia Ruiz Massieu, Nuvia Mayorga y Eruviel Ávila. “Hoy, con tristeza, pero con congruencia anuncio nuestra renuncia al PRI”, ha dicho en una conferencia de prensa Osorio Chong, entre lamentos y fuertes críticas al presidente del partido. “Rompió con la unidad de los priistas”, ha agregado. La formación, que actualmente está en coalición con los otros partidos de la oposición, lleva unas semanas difíciles con decenas de bajas en otras entidades. Los que se han marchado este lunes han lanzado además una nueva plataforma política llamada “Congruencia por México”.', '2023-07-04 22:05:37', '2023-06-30', 'images/imagenes-eventos/1688172573-gmail.png', 'https://www.forbes.com.mx/acciones-de-grupo-mexico-suben-2-90-tras-acordar-pago-de-cuota-y-8-anos-mas-de-concesion-con-gobierno-de-amlo/', NULL, NULL),
(2, 'AMLO presenta declaración patrimonial; informa cuánto gana y que ya cobra pensión del bienestar', 'dice que Biden se encuentra bien después de un tropezón durante una ceremonia de graduación de la Academia de la Fuerza Aérea', '44444', '2023-07-04 22:05:40', '2023-06-29', 'images/imagenes-eventos/1688172607-servicio-al-cliente.png', 'https://bbbootstrap.com/snippets/bootstrap-fixed-responsive-left-sidebar-menu-34380762', NULL, NULL),
(3, 'Decisiones del Poder Judicial pretenden dar \"un golpe de estado técnico\": AMLO', 'dice que Biden se encuentra bien después de un tropezón durante una ceremonia de graduación de la Academia de la Fuerza Aérea', '543333', '2023-07-04 22:05:44', '2023-06-26', 'images/imagenes-eventos/1688172669-1686190600-medio_siglo.png', 'https://mdbootstrap.com/docs/standard/extended/social-media/', NULL, NULL),
(4, 'Partido Verde declina a favor de Armando Guadiana en Coahuila', 'dice que Biden se encuentra bien después de un tropezón durante una ceremonia de graduación de la Academia de la Fuerza Aérea', 'holaaaaa2', '2023-07-04 22:05:50', '2023-01-01', 'no disponible por el momento', 'no disponible', NULL, NULL),
(5, 'Partido Verde declina a favor de Armando Guadiana en Coahuila', 'dice que Biden se encuentra bien después de un tropezón durante una ceremonia de graduación de la Academia de la Fuerza Aérea', '-', NULL, '2023-01-01', 'images/imagenes-eventos/1688421860-estudiante2.jpg', 'no disponible', NULL, NULL),
(6, 'AMLO presenta declaración patrimonial; informa cuánto gana y que ya cobra pensión del bienestar', 'dice que Biden se encuentra bien después de un tropezón durante una ceremonia de graduación de la Academia de la Fuerza Aérea', '-', NULL, '2023-07-04', 'images/imagenes-eventos/1688486699-conferencia.png', 'no disponible', NULL, NULL),
(7, 'da', 'dice que Biden se encuentra bien después de un tropezón durante una ceremonia de graduación de la Academia de la Fuerza Aérea', '-', NULL, '2023-01-01', 'no disponible por el momento', 'no disponible', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galerias`
--

DROP TABLE IF EXISTS `galerias`;
CREATE TABLE IF NOT EXISTS `galerias` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `imagen` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no disponible',
  `tipo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no disponible',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `galerias`
--

INSERT INTO `galerias` (`id`, `imagen`, `nombre`, `tipo`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'images/imagenes-galerias/1688172131-mapa.png', 'Roberto Hernández Hernández', 'inicio', '2023-07-02 02:16:10', NULL, NULL),
(2, 'images/imagenes-galerias/1688242344-takako.jpg', 'Roberto Hernández Hernández', 'requisitos', NULL, NULL, NULL),
(3, 'images/imagenes-galerias/1688330358-uwu5.jpg', 'juan', 'plan', NULL, NULL, NULL),
(4, 'images/imagenes-galerias/1688330374-uwu3.jpg', 'e', 'plan', NULL, NULL, NULL),
(5, 'images/imagenes-galerias/1688419670-requisitos_carrusel.jpg', 'd', 'inicio', NULL, NULL, NULL),
(6, 'images/imagenes-galerias/1688419684-requisitos1.jpg', 'juan', 'inicio', NULL, NULL, NULL),
(7, 'images/imagenes-galerias/1688422062-tutorias.jpg', 'ivan', 'plan', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `investigadores`
--

DROP TABLE IF EXISTS `investigadores`;
CREATE TABLE IF NOT EXISTS `investigadores` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no disponible',
  `especialidad` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no disponible',
  `correo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no disponible',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `puesto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `biografia` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `linea` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `proyectos` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publicaciones` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `orientacion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no disponible',
  `imagen` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `investigadores`
--

INSERT INTO `investigadores` (`id`, `nombre`, `especialidad`, `correo`, `deleted_at`, `puesto`, `biografia`, `linea`, `proyectos`, `publicaciones`, `descripcion`, `orientacion`, `imagen`, `created_at`, `updated_at`) VALUES
(1, 'Roberto Hernández Hernández', 'Doctor en Ciencias Sociales', 'roberto.hhernandez@academicos.udg.mx', NULL, 'djdjdjdjdjd', 'dhjdhdjd', 'dhdhdhdh', 'dhjddh', 'dhjddh', 'dhdhdh', 'Japon', 'images/imagenes-NAB/1688172995-1685654866-1685056216-arturo_santa_cruz.jpg', NULL, NULL),
(2, 'juan', 'Doctor en Ciencias Sociales', 'ana.cuevas@academicos.udg.mx', NULL, 'dhdjkhdjkdh', '-', '-', '-', '-', '-', 'Alemania', 'images/imagenes-NAB/1688173021-1685653995-1685031167-daisuke.jpg', NULL, NULL),
(3, 'Ivan 2', 'Doctor', 'daisuke.kishi@academicos.udg.mx', '2023-07-04 04:02:48', '-', '-', '-', '-', '-', '-', 'Australia', 'images/imagenes-NAB/1688173063-carlos_maya.jpg', NULL, NULL),
(4, 'Carlos Gabriel Becerra', 'Albañil', 'd@a.com', '2023-07-02 02:51:47', '-', '-', '-', '-', '-', '-', 'Mexico', 'images/imagenes-NAB/1688173096-cristobal.jpg', NULL, NULL),
(5, 'Roberto Hernández Hernández', 'Doctor en Ciencias Sociales', 'elmai@mail.com', NULL, '-', '-', '-', '-', '-', '-', 'Alemania', 'images/imagenes-NAB/1688244693-jose_bravo.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(12, '2014_10_12_000000_create_users_table', 1),
(13, '2014_10_12_100000_create_password_resets_table', 1),
(14, '2019_08_19_000000_create_failed_jobs_table', 1),
(15, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(16, '2023_05_09_230950_create_eventos_table', 1),
(17, '2023_05_09_231209_create_galerias_table', 1),
(18, '2023_05_09_231232_create_investigadors_table', 1),
(19, '2023_05_09_231259_create_noticias_table', 1),
(20, '2023_06_08_220212_create_estudiantes_table', 1),
(21, '2023_06_08_220523_create_requisitos_table', 1),
(22, '2023_06_08_221218_create_requisitosconhortes_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

DROP TABLE IF EXISTS `noticias`;
CREATE TABLE IF NOT EXISTS `noticias` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `titulo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no disponible',
  `descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `fecha` date NOT NULL DEFAULT '2023-01-01',
  `imagen` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'imagen no disponible',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id`, `titulo`, `descripcion`, `deleted_at`, `fecha`, `imagen`, `created_at`, `updated_at`) VALUES
(1, 'AMLO presenta declaración patrimonial; informa cuánto gana y que ya cobra pensión del bienestar', 'ddjdjdjd', NULL, '2023-06-14', 'images/imagenes-noticias/1688172805-1685654866-1685056216-arturo_santa_cruz.jpg', NULL, NULL),
(2, 'Decisiones del Poder Judicial pretenden dar \"un golpe de estado técnico\": AMLO', 'jjjjjjj', NULL, '2023-06-29', 'images/imagenes-noticias/1688172818-1686195610-estudantes_carrusel.jpg', NULL, NULL),
(3, 'Acribillan a dueños de \"Dolls Drinks\", populares licuachelas de Tepito', 'iuuiyuiyuiyuiy', NULL, '2023-06-29', 'images/imagenes-noticias/1688172835-1686609392-cucsh2.jpg', NULL, NULL),
(4, 'da', '-', NULL, '2023-01-01', 'images/imagenes-noticias/1688243676-carrusel.index.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('2118100638@soy.utj.edu.mx', '$2y$10$GX9mCSQKkgd5gYaQHQBIbOruExU8QKw2WeTX4TQsAlv.CkSOjVEdS', '2023-07-02 23:27:46'),
('vg278816@gmail.com', '$2y$10$PxBdx17k0Pk/GYuo7/LPqevA7.zWbUV6dGCHGknL.eJw54GX89dV6', '2023-07-04 03:59:54');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `requisitos`
--

DROP TABLE IF EXISTS `requisitos`;
CREATE TABLE IF NOT EXISTS `requisitos` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tipo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no disponible',
  `descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `requisitos`
--

INSERT INTO `requisitos` (`id`, `tipo`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 'DURACIÓN Y COSTOS', 'El histórico Partido Revolucionario Institucional (PRI) está en crisis. La formación tricolor que gobernó durante más de 70 años atraviesa un momento de grave división bajo la dirigencia de Alejandro Alito Moreno. Unos 320 priistas, encabezados por el senador Miguel Ángel Osorio Chong, han anunciado este lunes su renuncia al partido. También han dejado la formación los senadores Claudia Ruiz Massieu, Nuvia Mayorga y Eruviel Ávila. “Hoy, con tristeza, pero con congruencia anuncio nuestra renuncia al PRI”, ha dicho en una conferencia de prensa Osorio Chong, entre lamentos y fuertes críticas al presidente del partido. “Rompió con la unidad de los priistas”, ha agregado. La formación, que actualmente está en coalición con los otros partidos de la oposición, lleva unas semanas difíciles con decenas de bajas en otras entidades. Los que se han marchado este lunes han lanzado además una nueva plataforma política llamada “Congruencia por México”.', NULL, NULL),
(2, 'REQUISITOS DE ADMICIÓN Y PROCESO DE INGRESO', '-', NULL, NULL),
(3, 'REQUISITOS DE TITULACIÓN', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `requisitosconhortes`
--

DROP TABLE IF EXISTS `requisitosconhortes`;
CREATE TABLE IF NOT EXISTS `requisitosconhortes` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `generacion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no disponible',
  `ingreso` int DEFAULT NULL,
  `tasa` decimal(5,2) DEFAULT NULL,
  `eficiencia` decimal(5,2) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `requisitosconhortes`
--

INSERT INTO `requisitosconhortes` (`id`, `generacion`, `ingreso`, `tasa`, `eficiencia`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '2001-2011', 3221, '67.00', '54.00', '2023-07-02 00:54:35', NULL, NULL),
(2, '2001-2011', 33, '45.00', '32.00', NULL, NULL, NULL),
(3, '2001-2020', 33, '66.00', '66.00', NULL, NULL, NULL),
(4, '2012-2014', NULL, '23.00', '21.00', NULL, NULL, NULL),
(5, '2001-2011', 99999, '78.00', '76.00', NULL, NULL, NULL),
(6, '2020-2023', 89, '89.00', '9.00', NULL, NULL, NULL),
(7, '2001-2022', 89, '0.20', '0.20', NULL, NULL, NULL),
(8, '2001-2050', 89, '0.30', '0.45', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'estandar',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `tipo`, `deleted_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Carlos Gabriel Becerra Gallardo', '2118100638@soy.utj.edu.mx', NULL, '$2y$10$hXsHGEAmJ.un1.Ude7kZ8u846zVKHl80t4WRjYYJQbCKD.Dx8HbjS', 'Administrador', NULL, 'n61DB4gpeMqK0fQ1m9k7W0QO3FJwccl7zHKgJVaklfjn6uDXKhXDy4aGueVe', '2023-06-30 03:54:18', '2023-07-02 23:26:04'),
(2, 'juan7771111111', 'juan@gmail.com', NULL, '$2y$10$X2uh66RoN1VLoL3B0giKP.T6jRS59d/rJZRQKZZkh7QyXyum7DiS6', 'Admin', NULL, NULL, '2023-07-01 07:59:26', '2023-07-01 07:59:26'),
(3, 'Jorge', 'Villalobos@gmail.com', NULL, '$2y$10$7sHGdLNh1Ffaifdeofo4UO/NRKm2vUYr.HQoLw6YALEXWIxj7PhCi', 'Editor', NULL, NULL, '2023-07-02 04:25:30', '2023-07-02 04:25:30'),
(4, 'Gabriel Montero', 'gabrielutj@gmail.com', NULL, '$2y$10$V.U7Nvbe6OlHwiKpMQM2qe89cqC8UbQyciCy6fToXUKkpc.9oU0o2', 'estandar', NULL, NULL, '2023-07-02 20:57:47', '2023-07-02 20:57:47'),
(5, 'ivan', 'juan111222@gmail.com', NULL, '$2y$10$gvGGu8sqsCg9RU4pl1H.teTDe.QCSXyxa5yCn9pP9NB7DkpwyLqRu', 'estandar', NULL, NULL, '2023-07-02 22:36:15', '2023-07-02 22:36:15'),
(6, 'Francisco Javier', 'lovecar225@dronetz.com', NULL, '$2y$10$sNEFAoAY7dw6NE2Q4NnEi.Qe6tG6j4hBKojYV6G.VR.e.5v4gAy.e', 'estandar', NULL, '1yvZPio98y20G9crXXVOK2aMVyL3kUtfVytV5lYyVD0DTi1Lmmy1Y1NzeDuo', '2023-07-02 22:55:29', '2023-07-02 23:03:38'),
(7, 'Victor', 'vg278816@gmail.com', NULL, '$2y$10$oxxV.RI/2jS8GpsEcgVsz.X7tPwd0mlUJN7JOy0mNFQpfk/BqldrS', 'estandar', NULL, NULL, '2023-07-04 03:58:50', '2023-07-04 03:58:50');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
