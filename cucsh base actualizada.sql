-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 10-07-2023 a las 04:40:28
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
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(7, 'da', 'dice que Biden se encuentra bien después de un tropezón durante una ceremonia de graduación de la Academia de la Fuerza Aérea', '-', NULL, '2023-01-01', 'no disponible por el momento', 'no disponible', NULL, NULL),
(8, 'AMLO presenta declaración patrimonial; informa cuánto gana y que ya cobra pensión del bienestar', 'dice que Biden se encuentra bien después de un tropezón durante una ceremonia de graduación de la Academia de la Fuerza Aérea', '-', NULL, '2023-07-06', 'no disponible por el momento', 'https://www.forbes.com.mx/acciones-de-grupo-mexico-suben-2-90-tras-acordar-pago-de-cuota-y-8-anos-mas-de-concesion-con-gobierno-de-amlo/', NULL, NULL);

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
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `galerias`
--

INSERT INTO `galerias` (`id`, `imagen`, `nombre`, `tipo`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'images/imagenes-galerias/1688172131-mapa.png', 'Roberto Hernández Hernández', 'inicio', '2023-07-02 02:16:10', NULL, NULL),
(2, 'images/imagenes-galerias/1688242344-takako.jpg', 'Roberto Hernández Hernández', 'requisitos', '2023-07-07 02:46:59', NULL, NULL),
(3, 'images/imagenes-galerias/1688330358-uwu5.jpg', 'juan', 'plan', NULL, NULL, NULL),
(4, 'images/imagenes-galerias/1688330374-uwu3.jpg', 'e', 'plan', NULL, NULL, NULL),
(5, 'images/imagenes-galerias/1688419670-requisitos_carrusel.jpg', 'd', 'inicio', NULL, NULL, NULL),
(6, 'images/imagenes-galerias/1688419684-requisitos1.jpg', 'juan', 'inicio', NULL, NULL, NULL),
(7, 'images/imagenes-galerias/1688422062-tutorias.jpg', 'ivan', 'plan', NULL, NULL, NULL),
(8, 'images/imagenes-galerias/1688676361-basica-comun.jpg', 'Roberto Hernández Hernández', 'inicio', NULL, NULL, NULL),
(9, 'images/imagenes-galerias/1688676516-cohorte.jpg', 'plan estudios', 'plan', NULL, NULL, NULL);

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
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `investigadores`
--

INSERT INTO `investigadores` (`id`, `nombre`, `especialidad`, `correo`, `deleted_at`, `puesto`, `biografia`, `linea`, `proyectos`, `publicaciones`, `descripcion`, `orientacion`, `imagen`, `created_at`, `updated_at`) VALUES
(1, 'Roberto Hernández Hernández', 'Doctor en Ciencias Sociales', 'roberto.hhernandez@academicos.udg.mx', '2023-07-10 09:23:14', 'djdjdjdjdjd', 'dhjdhdjd', 'dhdhdhdh', 'dhjddh', 'dhjddh', 'dhdhdh', 'Japon', 'images/imagenes-NAB/1688172995-1685654866-1685056216-arturo_santa_cruz.jpg', NULL, NULL),
(2, 'juan', 'Doctor en Ciencias Sociales', 'ana.cuevas@academicos.udg.mx', '2023-07-10 09:23:09', 'dhdjkhdjkdh', '-', '-', '-', '-', '-', 'Alemania', 'images/imagenes-NAB/1688173021-1685653995-1685031167-daisuke.jpg', NULL, NULL),
(3, 'Ivan 2', 'Doctor', 'daisuke.kishi@academicos.udg.mx', '2023-07-04 04:02:48', '-', '-', '-', '-', '-', '-', 'Australia', 'images/imagenes-NAB/1688173063-carlos_maya.jpg', NULL, NULL),
(4, 'Carlos Gabriel Becerra', 'Albañil', 'd@a.com', '2023-07-02 02:51:47', '-', '-', '-', '-', '-', '-', 'Mexico', 'images/imagenes-NAB/1688173096-cristobal.jpg', NULL, NULL),
(5, 'Roberto Hernández Hernández', 'Doctor en Ciencias Sociales', 'elmai@mail.com', '2023-07-10 09:23:20', '-', '-', '-', '-', '-', '-', 'Alemania', 'images/imagenes-NAB/1688244693-jose_bravo.jpg', NULL, NULL),
(6, 'Roberto Hernández Hernández', 'Doctor en Ciencias Sociales', 'roberto.hhernandez@academicos.udg.mx', '2023-07-10 09:23:24', '-', '-', '-', '-', '-', '-', 'Japon', 'images/imagenes-NAB/1688676087-roberto.jpg', NULL, NULL),
(7, 'Roberto Hernández Hernández', 'Doctor en Ciencias Sociales', 'roberto.hhernandez@academicos.udg.mx', NULL, 'Jefe del Departamento de Estudios Internacionales\r\n\r\nProfesor Investigador Titular “C”\r\n\r\nSNI Nivel I\r\n\r\nPerfil Promep', 'Durante 30 años ha sido profesor-investigador del Departamento de Estudios del Pacífico y del Departamento de Estudios Internacionales de la Universidad de Guadalajara. Cursó la Licenciatura en Economía en la Universidad de Guadalajara, Maestría en Estudios de Asia y África en El Colegio de México; posgrado en Historia Moderna y Contemporánea de China en la Universidad de Beijing y Doctorado en Ciencias Sociales por la Universidad de Guadalajara. Diplomado sobre Relaciones Internacionales de México en el Instituto Matías Romero de Estudios Diplomáticos. Pertenece al Sistema Nacional de Investigadores. Ha fungido como Jefe del Departamento de Estudios del Pacífico y del Departamento de Estudios Internacionales de la UdeG. Pertenece a la Junta Académica de la Maestría en Relaciones Internacionales de los Gobiernos y Actores Locales y al Consejo Editorial de la Revista de México y la Cuenca del Pacífico. Sus áreas de interés académico son Historia, Economía y Relaciones Internacionales del Este de Asia con énfasis en China. Su docencia se centra en materias como Teoría de las Relaciones Internacionales, Gobierno y Política Exterior en Asia, Procesos de Integración Regional y Formación de Bloques Internacionales, Historia, Economía y Relaciones Internacionales de China y Seminario de Titulación.', 'El resurgimiento económico de China y su nuevo papel de gran potencia\r\nSeguridad Internacional de China\r\nLa Política de Cooperación Internacional de China\r\nProcesos de integración en el Este de Asia', '-El reposicionamiento de China como potencia económica y militar de alcance global.\r\n-La vía China para evadir la Trampa del Ingreso Medio; una perspectiva latinoamericana', 'Hernández H. Roberto (2020) “China y su política de seguridad nacional: ¿Hacia una nueva carrera armamentistas?”. En Alberto Lozano Vázquez y Abelardo Rodríguez Sumano (Coordinadores), Seguridad y Asuntos Internacionales. Teorías, Dimensiones, Interdisciplinas, Las Américas, Amenazas, Instituciones, Regiones, Política Mundial. Mexico, Siglo XXI Editores, Pags. 956-85. ISBN 978-67-03-1094-2.\r\n\r\nHernández H. Roberto (2020), “La estrategia comercial de China en el siglo XXI y sus implicaciones para la relación con Estados Unidos”. En José Ignacio Martínez Cortes (Coord.) América Latina y el Caribe y China. Relaciones políticas e internacionales, México, Unión de Universidades de América Latina y el Caribe (UDUAL). 1ª edición. Pags. 87-110. ISBN: 978-607-8066-51d-3\r\n\r\nHernández H. Roberto (2019), Retos de la Asociación Económica Regional comprehensiva (RECEP). En Luz Alicia Jiménez Portugal y Antonio Ruiz Porras (Coordinadores), Avances, retos y perspectivas de los procesos de integración en el siglo XXI: Análisis económicos e institucionales. México, Universidad de Guadalajara. 1º edición 2019.ISBN: 978-607-547-507-3 (versiòn impresa) 978-607-547-631-5 (versión digital)\r\n\r\nCapitulo de libro: Hernandez H. Roberto (2019). “The China’s International Cooperation, a Pathway to Escape the Meddle-Income Trap in Latin America?”, Fudan-Latin America University Consortium, China and Latin America. Parth to Overcoming the Middle-income Trap. Shanghai, Fudan University. pp. 170-188.\r\n\r\nHernández, H. Roberto (2017). “La política de cooperación internacional de China; una perspectiva global” en Martínez Cortés José Ignacio (Coord.). América Latina y el Caribe y China. Relaciones Políticas e Internacionales, 2017. México, UDUAL, UNAM pp. 219-240.\r\n\r\nHernández H. Roberto (2020), “La Relación China-Estados Unidos en el contexto de la COVID-19”. Revista México y la Cuenca del Pacífico, Vol. 9 Núm. 27/ septiembre-diciembre de 2020.DOI:10.32870/mycp.v9i27.710 Pags. ISSN: 2007-5308 (versión digital)\r\n\r\nHernández H. Roberto (2019) “El papel de la cooperación internacional en la estrategia de gran potencia de China”. Foreign Affairs Latinoamérica. México Pags.\r\n\r\nHernández H. Roberto (2018). “Procesos y escenarios geoeconómicos en Asia: Implicaciones para África y América Latina”. México y la Cuenca del Pacífico, Vol. 7, Núm. 20, mayo-agosto 2018, pp. 8-19.', 'Historia de China, Economía, Procesos de Integración en Asia Pacífico y Relaciones Internacionales.', 'CHINA', 'images/imagenes-NAB/1688959549-roberto.jpg', NULL, NULL),
(8, 'Geneviève Marchini', 'Doctora en Ciencias Económicass', 'genevieve.marchini@academicos.udg.mx', NULL, 'Jefe del Departamento de Estudios Internacionales\r\n\r\nProfesor Investigador Titular “C”\r\n\r\nSNI Nivel I\r\n\r\nPerfil Promep', 'Doctora en Ciencias Económicas (Universidad de Paris XIII). Magister en Economía (Pontificia Universidad Católica del Perú). Profesora-investigadora titular, Departamento de Estudios del Pacífico, Universidad de Guadalajara, e Investigadora nacional (SNI). Autora de tres libros, capítulos de libros y artículos arbitrados sobre crecimiento económico y desarrollo financiero en Asia, Oceanía y América Latina, Cooperación financiera en Asia y América Latina, experiencias de desarrollo en Asia (Corea del Sur, China) y relaciones económicas entre la Alianza del Pacífico y Asia del Este. Catedrática de los cursos de Sistema Financiero Internacional y Mercados Financieros Internacionales en la Licenciatura en Relaciones Internacionales, de Global Political Economy en la Maestría en Global Politics & Transpacific Studies, del Seminario de Economía Internacional y Nuevos Modelos de Desarrollo del Doctorado en Ciencia Política del CUCSH. Directora de Tesis en los niveles de Licenciatura, Maestría y Doctorado.', '-Relaciones económicas América Latina-Asia del Este\r\n\r\n-Desarrollo económico y financiero en América Latina y Asia del Este', '-Relaciones económicas entre la Alianza del Pacífico y China, Corea del Sur y Japón.\r\n\r\n-La Fintech en China\r\n\r\n-Criptomonedas y regulación pública en China, Corea del Sur y Japón', 'La Alianza del Pacífico a ocho años de su creación. Balance crítico y perspectivas. Anuario Latinoamericano Ciencias Políticas y Relaciones Internacionales. vol. 7, 2019. pp. 75–109. ISSN: 2392-0343, e-ISSN: 2449-8483. https://journals.umcs.pl/al/article/view/10214/7143\r\n\r\nLas relaciones económicas de la Alianza del Pacífico con Japón: especificidades y perspectivas, Contextualizaciones Latinoamericanas, Año 11, No. 22, Enero-Junio. pp. 140-166. ISSN: 2007-2120, http://contexlatin.cucsh.udg.mx/index.php/CL/article/view/7405/6533\r\n\r\nLa economía de la República de Corea. Fortalezas y retos en un contexto internacional incierto. en López, Nayelli (coord.). Península coreana: estrategias, reestructuración e inserción en el mundo global, México. UNAM. 2020, pp. 75-111. ISBN 978-607-30-4117-1.\r\n\r\nLa Alianza del Pacífico y Asia del Este: relaciones económicas, alcances del comercio intraindustrial y perspectivas de mayores encadenamientos productivos, en Ortiz Morales Catherine & Edgar Vieira Posada (Ed.) Nuevas propuestas de integración regional: tendencias y retos de transformación. Bogotá, Colombia: Universidad Cooperativa de Colombia. 2019. pp. 45-93. ISBN 978-958-760-201-2.\r\n\r\nIntegración y desarrollo financiero en la Alianza del Pacifico. en Calva, José Luis (coord). La globalización neo-liberal en crisis. México 2018-2024 Nueva estrategia de desarrollo. vol. 1, México: Juan Pablos Editor S.A., Consejo Nacional de Universitarios y Universidad de Guadalajara. 2018. ISBN 978-607-711-475-8.\r\n\r\nInversiones y préstamos de Asia del Este hacia la Alianza del Pacífico: balance y perspectivas. en Girón, Alicia & Eugenia Correa (coord.). Financiarización y ciclo económico entre Asia y África, México: UNAM. 2018. pp. 23-54. ISBN: 978-607-30-0936-2.\r\n\r\nLas relaciones económicas entre Corea del Sur y la Alianza del Pacífico: ¿Hacia una profundización de los lazos productivos?. en León-Manríquez, José Luis (coord.), Corea, ayer y hoy Aportaciones latinoamericanas, México: Universidad Autónoma Metropolitana, Unidad Xochimilco-Korea Foundation. 2017. pág. 425-446. ISBN: 978-970-31-0929-6\r\n\r\nAlianza del Pacífico y el futuro de sus relaciones con Corea, Japón y China”, en Girón, Alicia y Eugenia Correa (coord.), Reorganización financiera en Asia y América Latina en el periodo de postcrisis\". México: PUEAA-UNAM. 2017. pp. 365-398. ISBN: 978-607-02-9393-3\r\n\r\nLa Alianza del Pacífico y China: ¿hacia una relación comercial más diversificada?. en Dussel Peters, Enrique (coord.), América Latina y China - Economía, comercio e inversión 2017, México: Unión de Universidades de América Latina, 2017. pp. 279-298. ISBN: 978-607-8066-28-5.\r\n\r\nLa Alianza del Pacífico y sus relaciones con Asia del Este. en Buzo de la Peña, Ricardo & Víctor Manuel Cuevas Ahumada (coord..) El incierto panorama de la economía mundial, México: Universidad Autónoma Metropolitana Unidad Azcapotzalco. 2017. pp. 337-385. ISBN:978-607-28-1050-1.\r\n\r\nDiagnóstico y potencialidad de la integración económica en la Alianza del Pacífico. en Buzo de la Peña, Ricardo Marcos, Victor Manuel Cuevas Ahumada & María de la Paz Guzmán Plata (coord.). Nuevos Enfoques en el Análisis de la Economía Mundial. México: Universidad Autónoma Metropolitana Unidad Azcapotzalco, 2017. pp. 217-255. ISBN 978-607-28-1121-8.\r\n\r\nCrecimiento económico y desarrollo financiero en Asia-Pacífico, Vol. 1, “La industrialización de Asia del Este, Japón, Corea del Sur, Hong Kong y Singapur”. México: Universidad de Guadalajara. 2012. ISBN 978-607-450-491-0.\r\n\r\nCrecimiento económico y desarrollo financiero en Asia-Pacífico, Vol. 2, “Las economías primario-exportadoras de Oceanía y América Latina, Australia, Nueva Zelanda”, México: Universidad de Guadalajara. 2012.ISBN 978-607-450-628-0.', 'Relaciones Económicas Alianza del Pacífico-Asia Oriental, Economías de Asia Oriental y América Latina: Cooperación Financiera e Integración en el Sistema Financiero Internacional.', 'CHINA', 'images/imagenes-NAB/1688959751-genevieve_marchini.jpg', NULL, NULL),
(9, 'Ana Bertha Cuevas Tello', 'Doctora en Relaciones Transpacíficas', 'ana.cuevas@academicos.udg.mx', NULL, 'Miembro fundador del grupo interdisciplinario\r\ne interinstitucional China Global.\r\n\r\nProfesora investigadora Titular “A”\r\n\r\nSNI Nivel I\r\n\r\nPerfil Promep', 'Licenciada en estudios internacionales por la Universidad de Guadalajara. Maestría en Ciencias Sociales con especialidad en Relaciones Internacionales y Estudios del Pacífico, por la Universidad de Guadalajara. Doctorado en Relaciones Transpacíficas por la Universidad de Colima. Especialidad en economía circular por la Universidad de Berkeley. Perfil deseable PRODEP desde 2008. Miembro del Sistema Nacional de Investigadores (SNI) nivel I, desde 2015. Pertenece al cuerpo académico “Integración, política y medio ambiente en Asia Pacífico”. Miembro del comité ejecutivo de la Revista México y la Cuenca del Pacífico. Miembro consultivo del equipo One Health México.', '-La política internacional del cambio climático y los esfuerzos nacionales en Asia Pacífico.\r\n\r\n-Análisis comparativo de las políticas ambientales de las economías del APEC.', 'Pertenece al cuerpo académico “Integración, política y medio ambiente en Asia Pacífico”.\r\n\r\nPACMETRO\r\n\r\nGrupo interdisciplinario e interinstitucional China GlobaL\r\n\r\nONE HEALTH MX', 'Cuevas Tello, Ana B. (2016) Estrategias y acciones contra el cambio climático en las principales economías del APEC. México: Universidad de Guadalajara. ISBN 978-607-742-639-4\r\n\r\nCuevas Tello, Ana B. (2017). México ante el riesgo del cambio climático: vulnerabilidad y retos. Iberoamericana, XXXIX(1), 43-64. Universidad de Sofía, Japón. ISSN 23102799\r\n\r\nCuevas Tello, Ana B., Bravo Vergara, José J. y Rodríguez Alegría, Agustina (2017). La institucionalización del medio ambiente en la agenda internacional y el nacimiento del mercado de bienes y servicios ambientales: El caso de algunas economías de Asia Pacífico. Portes, 11(22), 7-30. ISSN 18706800\r\n\r\nCuevas Tello, Ana B. (2018). La interrelación de la educación y el empleo en la sociedad actual, el caso de México: 2005-2014. En Panorama de la educación pública en México (políticas educativas contemporáneas) (págs. 141-161). Universidad de Guadalajara. ISBN 978-607-547-031-\r\n\r\nCuevas Tello, Ana B. (2018). La postura de las economías del APEC en su compromiso de mantener el desarrollo a través de la ciencia, la tecnología y la innovación. En A. Ivanova Boncheva, L. F. Beltrán Morales y J. E. Rangel Delgado, Ciencia, Tecnología e Innovación para el Desarrollo. Experiencia de la región Asia Pacífico y México (págs. 59-76). Universidad Autónoma de Baja California Sur, Consejo Nacional de Ciencia y Tecnología, Centro de Investigaciones Biológicas del Noroeste Universidad de Colima, Consorcio Mexicano de Centros de Estudios APEC y Pacific Circle Consortium. ISBN: 978-607-7777-97-7\r\n\r\nCuevas Tello, Ana B. (2018). La vulnerabilidad de México frente al cambio climático y la respuesta nacional. En M. G. Moreno González y M. G. López Pedroza, Balance y prospectivas sociopolíticas de México para el sexenio 2018-2024 (págs. 469-489). Universidad de Guadalajara. ISBN 9786075473901\r\n\r\nCuevas Tello, Ana B. (2018). Asia Pacífico frente al Acuerdo de París contra el cambio climático: geopolítica y cooperación. Estudios de Asia y África, 53(1), 151-188. ISSN 2448654X\r\n\r\nCuevas Tello, Ana B. (2018). Potencial liderazgo chino en la lucha global contra el cambio climático en el siglo XXI. México y la Cuenca del Pacífico, 7(21), 95-120. ISSN 20075308\r\n\r\nCuevas Tello, Ana B. y Bravo Vergara, José J. (2018). Riesgo y vulnerabilidad, las dos caras del cambio climático: principales fallos en el cumplimiento de los acuerdos ambientales. En P. Ortega Gómez, Z. T. Infante Jimenez y C. Ortiz Paniagua, Transferencia del conocimiento y sistemas de Innovación para el desarrollo sustentable (págs. 135-149). Cenid Editorial. ISBN 9786078435586\r\n\r\nCuevas Tello, Ana B. y Preciado Caballero, Nora E. (2018). México ante los múltiples esfuerzos internacionales para frenar el cambio climático. En R. Rosales Ortega, A. Mercado Celis, A. Sánchez Almanza, D. Amparo Tello y C. Venegas Herrera, Teoría, impactos externos y políticas públicas para el desarrollo regional (págs. 79-100). UNAM, AMECIDER. ISBN 9786070299988\r\n\r\nCuevas Tello, Ana B. y Ivanova Boncheva, Antonina (2019). Cómo las políticas de mitigación del mecanismo de cooperación económica de Asia-Pacífico (APEC) contribuyen a alcanzar la meta de 1.5ºC. En J. C. Rueda Abad, ¿Aún estamos a tiempo para el 1.5oC? (págs. 35-50). UNAM. ISBN 978-607-30-20992\r\n\r\nCuevas Tello, Ana B. (2020). Desafíos mundiales sobre el cambio climático y la oportunidad de China para liderar con éxito el acuerdo de París. En A. F. Torres García, Divergencias en el desarrollo económico de México y China (págs. 213-246). Universidad Autónoma de Baja California Sur y Universidad Veracruzana. ISBN: 978-607-8654-22-2\r\n\r\nCuevas Tello, Ana B. y Ivanova Boncheva, Antonina (2020). Agenda ambiental y climática en el APEC a la luz del desarrollo sustentable. En C. Uscanga y J. J. Ramírez, El Foro de Cooperación Económica de Asia Pacífico apec: tres décadas de trayectoria y escenarios para el futuro (págs. 223-246). Universidad Nacional Autónoma de México (UNAM). ISBN 978-607-30-3429-6\r\n\r\nCuevas Tello, Ana B. (2021). La relación de la pandemia por COVID-19 y el cambio climático: la experiencia de China. Sociedad y ambiente (24), 1-26. ISSN 20076576\r\n\r\nCuevas Tello, Ana B. (2021). Evolución del Análisis del Medio Ambiente y los Recursos Naturales en las Relaciones Internacionales: El Antes y Después de la Problemática Ambiental Actual. En A. Villarruel Mora y D. Villarruel Reynoso, Tendencias, Actores y Procesos en el Estudio de las Relaciones Internacionales (págs. 83-111). Universidad de Guadalajara. ISBN: 978-607-571-108-9\r\n\r\nCuevas Tello, Ana B. (2021) Postura del APEC ante la problemática y los retos del Cambio Climático. En A. Girón, A. Ivanova y A. Zamora. México en APEC: Agenda en tiempos de pandemia (págs. 219-241). Secretaría de Economía. ISBN: 978-84-685-6381-7', 'Análisis comparativo de las políticas ambientales en la región de Asia-Pacífico y el comportamiento de las economías de Asia-Pacífico frente al cambio climático.', 'CHINA', 'images/imagenes-NAB/1688959893-bertha_cuevas.jpg', NULL, NULL),
(10, 'Karla Padilla', 'Doctora en Relaciones Transpacíficas', 'karla.padilla@academicos.udg.mx', NULL, 'Secretaría Académica de CULagos\r\n\r\nCoordinadora del e-School Program\r\nde la Fundación Corea para la UdeG.\r\n\r\nSecretaria de Vinculación de AMEI, A.C\r\n\r\nProfesora investigadora asociada A', 'Es Doctora en Relaciones Transpacíficas por la Universidad de Colima (2015-2019, Maestra en Ciencias Sociales con especialidad en Relaciones Internacionales y Estudios del Pacífico por la Universidad de Guadalajara (2004-2006) y Licenciada en Estudios Internacionales (1996-2000). Ha tomado cursos de especialización y posgrado en FLACSO sede Académica Argentina (2004), Universidad de Guadalajara (2004) y la Universidad Nacional de Seúl (2006), Corea del Sur.\r\n\r\nHa realizado estancias de investigación en la Seoul National University (SNU) en 2006 y en la Hankuk University of Foreign Studies (HUFS) en 2018, Seúl, Corea del Sur. Cuenta con Certificación en la metodología Content and Language Integrated Learning (CLIL Methodology) Teaching through English in Undergraduate Programs, Foreign Languages Institutional Program (FLIP-U de G).\r\n\r\nMiembro de la Junta Académica y del Núcleo académico básico de la Maestría en Relaciones Internacionales de los Gobiernos y Actores Locales. Miembro del Cuerpo Académico “Relaciones Internacionales y las Nuevas Diplomacias”, registro PRODEP, de la Red de Expertos en Paradiplomacia e Internacionalización Territorial (REPIT) miembro fundador. También es miembro del Pacific Economic Cooperación Council/ Consejo para la Cooperación Economica del Pacífico. (PECC) Capítulo México y es Representante institucional de la Universidad de Guadalajara ante el Consejo Técnico del EGEL-RI (Relaciones Internacionales) del Centro Nacional de Evaluación de la Educación Superior A.C. (CENEVAL) (2016-2022).', '-Relaciones Internacionales y Nuevas diplomacias: Diplomacia Corporativa, Diplomacia Pública, Diplomacia Económica, Diplomacia Cultural.\r\n\r\n-Corporativos y Empresarios en México y Corea del Sur\r\n\r\n-Relaciones Corea-América Latina; Diplomacia pública de Corea del Sur\r\n\r\n-Enseñanza de las relaciones Internacionales en México.', 'Las aportaciones de la diplomacia cultural coreana a la relación México-Corea\r\n\r\nLas aportaciones del sector privado a la relación bilateral México-Corea del Sur en el marco del inicio de las negociaciones del tratado de libre comercio.\r\n\r\nMercado laboral de los internacionalistas en el contexto post pandemia.', 'La Diplomacia Económica Coreana hacia México y Chile: el camino hacia la Alianza del Pacífico” en el libro: Tendencias, Actores y Procesos en el Estudio de las Relaciones Internacionales, Publicado, Universidad de Guadalajara, 2021, ISBN: 978-607-571-108-9.\r\n\r\n“El e-school program de Fundación Corea. Una estrategia exitosa de internacionalización de los estudios regionales desde casa”. Fecha de entrega: 04 de julio de 2020. Investigación Conjunta con la Mtra. Viviana Ávila Gómez. Publicación en libro: “Reimaginando la internacionalización del currículo: buenas prácticas y posibilidades prometedoras” editado por la Universidad de Guadalajara.\r\n\r\n“Diplomacia económica y turismo: oportunidades para la vinculación de Jalisco con China, Corea del Sur y Japón” para el libro titulado: Actores locales, impactos globales: aportes académicos en paradiplomacia. 2019, ISBN: 978 607 547 613 1. ANUIES-Universidad de Guadalajara.\r\n\r\n“La internacionalización en las Universidades Públicas en México: El caso del Centro Universitario de la Costa de la Universidad de Guadalajara” para el libro titulado: Universidad y sus entornos temáticos. Universidad de Guadalajara-Centro Universitario de la Costa. 2018. ISBN: 978 607 547 411 3', 'Relaciones México-Corea del Sur, Relaciones Transpacíficas, Corporaciones y Grupos Empresariales, Diplomacia Corporativa y Enseñanza de las Relaciones Internacionales en México.', 'CHINA-COREA DEL SUR', 'images/imagenes-NAB/1688960066-karla_padilla.jpg', NULL, NULL),
(11, 'Melba Falck', '-', 'melbafalck@gmail.com', NULL, '-', '-', '-', '-', '-', 'Relaciones económicas México-Japón y Relaciones económicas transpacíficas.', 'JAPÓN', 'images/imagenes-NAB/1688960294-melba_falck.jpg', NULL, NULL),
(12, 'Carlos Javier Maya Ambía', 'Doctor en Ciencias Económicas y Sociales', 'carlos.maya@academicos.udg.mx', NULL, 'Profesor Investigador Titular “B”\r\n\r\nCoordinador de Investigación del Centro\r\nde Estudios Japoneses\r\n\r\nMiembro del Consejo Editorial de la Revista\r\nVínculos, Sociología, análisis y opinión', 'Cursó la Licenciatura en economía en la UNAM, la Maestría en Ciencias Políticas y el Doctorado en Economía en la Universidad Libre de Berlin (Alemania Federal). Se ha desempeñado como docente e investigador en la UNAM, en el Instituto Nacional de Antropología e Historia, en la Universidad Libre de Berlín, en el Instituto Tecnológico y de Estudios Superiores de Monterrey, en la Universidad Autónoma de Sinaloa. Ha sido profesor-investigador invitado en El Colegio de Sonora, la Universidad Michoacana de San Nicolás de Hidalgo., la Universidad de Sevilla, la Universidad de California en Santa Cruz, la Universidad Sofia (Japón) y el Instituto de Economías en Desarrollo (Japón). Desde 2010 es profesor-investigador de la Universidad de Guadalajara, en el Departamento de Estudios del Pacífico. Miembro del núcleo académico básico del Doctorado en Ciencias Sociales y de la Maestría en Global Politics & Transpacific Studies. Docente en el Doctorado en Ciencia Política. Fundador y coordinador de investigación del Centro de Estudios Japoneses de la UdeG. Autor de siete libros, coordinador de diez y de más de cien artículos publicados en revistas científicas nacionales y extranjeras. Miembro del Consejo Editorial Internacional de la Revista México y la Cuenca del Pacífico.', 'Economía Política de la Agricultura y la Alimentación Teoría y Filosofía Política', '-La modernización de Japón: tensiones y disrupciones sociales\r\n-La modernización de la dieta japonesa', 'Maya, C. (2022). Japón: El cansancio de una nación. México: Universidad Nacional Autónoma de México.\r\nMaya, C. (2021). Introducción y expansión del consumo de lácteos en Japón, PORTES, Revista Mexicana de Estudios sobre la Cuenca del Pacífico, XV, 29, 123-145.\r\nMaya, C. (2021). Some reflections about the post-global economy after COVID-19, Sociology International Journal, V, 1, 10-11.\r\nMaya, C. (2020). Revisión de la discusión actual sobre la Covid-19 en el ámbito del pensamiento social, El Trimestre Económico, LXXXVII (4), 1233-1258.\r\nMaya, C. (2017), La crítica de Karl Polanyi a la teoría económica basada en el homo oeconomicus y la mentalidad de mercado, Ciencia Económica, VI (11), 2-46.', 'Economía Política de la Agricultura y la Alimentación en Japón, Tensiones Sociales en el Japón Contemporáneo, Estado y Política en el Japón Contemporáneo.', 'JAPÓN', 'images/imagenes-NAB/1688960448-carlos_maya.jpg', NULL, NULL),
(13, 'Daisuke Kishi', 'Doctor en Ciencias de la Educación', 'daisuke.kishi@academicos.udg.mx', NULL, 'Profesor investigador Titular “B”\r\n\r\nDirector del Centro de Estudios Japoneses', 'Licenciado en Filosofía y Letras (Universidad Nanzan, 1979). Maestría en Lingüística (Universidad Autónoma de Guadalajara, 1982). Maestría en Letras (Universidad de Estudios Extranjeros de Kioto, 1983). Doctorado en Ciencias de la Educación (Universidad Santander, 2020). Profesor de español en la Universidad de Chiba, Universidad Waseda, Universidad Hosei, Universidad de Estudios Internacionales de Kanda, Universidad Shumei, etc. en Japón (1984-2003). Profesor investigador en el Departamento de Estudios del Pacífico de la Universidad de Guadalajara (2003-actual) y Director del Centro de Estudios Japoneses (2016-actual).', 'Sociolingüística\r\n\r\nEnseñanza de japonés y español como L2', '-Nuevos retos en la enseñanza-aprendizaje del japonés básico durante la pandemia: Utilidades del uso de TICE\r\n\r\n-Dudas más comunes en estudiantes hispanohablantes del japonés básico', 'Kishi (2017). ¿Cómo enseñar a estudiantes extranjeros los verbos irregulares españoles en el presente de indicativo? Una aproximación, One Classroom. Many Languages. Universidad de Colima. 581-596.\r\n\r\nKishi (2018). Problemas y tendencias en el aprendizaje de la escritura japonesa katakana en estudiantes tapatíos, Panorama de la Enseñanza de Lenguas: diez años después. Universidad de Colima.\r\n\r\nKishi (2019). El aprendizaje de los adjetivos del japonés en mexicanos: un acercamiento al enfoque en competencias, Pedagogía 2019: Encuentro Internacional por la Unidad de Los Educadores. Ministerio de Educación, Cuba. 378-387.\r\n\r\nKishi (2021a). Algunos errores característicos en el aprendizaje de las letras japonesas hiragana en estudiantes extranjeros según distintas nacionalidades: en el caso de los hablantes de español, inglés, chino e indonesio. PORTES, revista mexicana de estudios sobre la Cuenca del Pacífico, 15 (29), 147-168.\r\n\r\nKishi (2021b). ¿Existe una estrategia y evaluación adecuada para la enseñanza-aprendizaje de Katakana del idioma japonés con estudiantes mexicanos?, Revista Lengua y Cultura, 2 (4), 22-29.', 'Sociolingüística del Japonés y el Español Mexicano, japonés como segunda lengua, español como segunda lengua.|', 'JAPÓN', 'images/imagenes-NAB/1688960579-daisuke.jpg', NULL, NULL),
(14, 'Cristóbal Collignon', '-', 'CristbalCollignon@gmail.com', NULL, '-', '-', '-', '-', '-', 'Relaciones y estudios mexicano-japoneses, Diplomacia Pública y Cultural, Teoría Crítica, Teoría de Género y Queer en Relaciones Internacionales, Industrias Creativas.', 'JAPÓN', 'images/imagenes-NAB/1688960702-cristobal.jpg', NULL, NULL),
(15, 'Takako Nakasone', 'Doctora en Ciencias Sociales', 'takako.nakasone@academicos.udg.mx', NULL, 'Coordinadora de Docencia del\r\nCentro de Estudios Japoneses\r\n\r\nTécnico Académico del Departamento\r\nde Estudios del Pacífico', 'Es doctora en Ciencias Sociales y maestra en Comunicación por la Universidad de Guadalajara y licenciada en Lengua y Cultura Hispánicas por la Universidad de las Ryukyus en Okinawa, Japón. Es coordinadora de Enseñanza de Japonés del Centro de Estudios Japoneses (CEJA) del Departamento de Estudios del Pacífico (DEP) del Centro Universitario de Ciencias Sociales y Humanidades (CUCSH) de la Universidad de Guadalajara. Profesora de Asignatura del Departamento de Lenguas Moderna', '-Migración japonesa a Guadalajara\r\n\r\n-Migración nikkei a Okinawa\r\n\r\n-Enseñanza del idioma japonés', '-Diversidad migratoria en Guadalajara y Chapala. Historias de arribo, asentamiento y procesos de transformación\r\n\r\n-Nuevos retos en la enseñanza-aprendizaje del japonés básico durante la pandemia: Utilidades del uso de TICE\r\n\r\n-Nueva realidad en el aula 2.0: prácticas docentes', 'Nakasone, T. y Yamaguchi L., V. K. (2020). Censo Nikkei de Guadalajara 2018. En M. Falck R. (Ed.), Presencia japonesa en Jalisco (pp.137-169).\r\n\r\nUniversidad de Guadalajara. http://www.publicaciones.cucsh.udg.mx/kiosko/2020/E-book_Presencia_japonesa_INTERNET_FINAL.pdf\r\n\r\nNakasone, T. (2016). Los perfiles de los residentes japoneses en Guadalajara en 2009. México y la Cuenca del Pacífico, 5(13), 57-88: http://www.mexicoylacuencadelpacifico.cucsh.udg.mx/index.php/mc/article/view/499/509\r\n\r\nNakasone, T. (2015). Imágenes sobre los japoneses: una visión de los empleados mexicanos en empresas japonesas. México y la Cuenca del Pacífico, 4(11), 89-112: http://www.mexicoylacuencadelpacifico.cucsh.udg.mx/index.php/mc/article/view/485/479\r\n\r\nNakasone, T. (2014). Diferencias culturales entre México y Japón: desde las perspectivas de los japoneses en Guadalajara. Portes, revista mexicana de estudios sobre la Cuenca del Pacífico, 3(16), 29-60: http://www.portesasiapacifico.com.mx/revistas/epocaiii/numero16/2.pdf', 'Migración contemporánea de Japón a México, el japonés como segunda lengua.', 'JAPÓN', 'images/imagenes-NAB/1688960973-takako.jpg', NULL, NULL),
(16, 'Rubén Casillas de la Torre', 'Doctor en Ciencia Política', 'ruben.casillas@academicos.udg.mx', NULL, 'Miembro del Grupo de Estudios sobre Eurasia (GESE)\r\n\r\nProfesor Docente Asociado “C”', 'Licenciado en Relaciones Internacionales, Maestro en Ciencias Sociales y Doctor en Ciencia Política por la Universidad de Guadalajara. Realizó una estancia de intercambio en Kanda University of International Studies entre los años 2009-2010 y posteriormente, en 2017, visitó de nuevo Japón para realizar una estancia corta de investigación con el apoyo del gobierno japonés. Ha impartido cursos pertenecientes a la disciplina de las Relaciones Internacionales en UVM, ITESO, UAG y UdeG, así como también de lengua japonesa en estas dos últimas instituciones. Actualmente es profesor de la Licenciatura en Lenguas y Culturas Extranjeras de CULagos y de la especialidad en Japón de la Maestría en Global Politics and Transpacific Studies del CUCSH. Miembro de ALADAA. Miembro del Centro de Estudios Japoneses (CEJA), CUCS', '°Seguridad de Japón en el Indo-Pacífico\r\n\r\n°Política exterior japonesa\r\n\r\n°Historia y cultura de Japón', 'Seguridad económico-militar de Japón en el Indo-Pacífico', 'Caldera Montes J.F., Pérez Pulido I., Torres Aceves A., Mora García O. & Casillas De la Torre R. (2022). Ajuste escolar y habilidades sociales en estudiantes mexicanos de educación superior. Revista Dilemas Contemporáneos: Educación, Política y Valores. Año: IX. Número: 2. Artículo no.:23. DOI: https://doi.org/10.46377/dilemas.v9i2.3064.', 'Política exterior japonesa y relaciones internacionales; Seguridad económica y militar japonesa en el Indo-Pacífico.', 'JAPÓN', 'images/imagenes-NAB/1688961150-ruben_casillas.jpg', NULL, NULL),
(17, 'Arturo Santa Cruz', 'Doctor en Ciencias Sociales', 'roberto.hhernandez@academicos.udg.mx', NULL, 'Jefe del Departamento de Estudios Internacionales\r\n\r\nProfesor Investigador Titular “C”\r\n\r\nSNI Nivel I\r\n\r\nPerfil Promep', 'Arturo Santa Cruz es Profesor-Investigador del Departamento de Estudios del Pacífico, y Director del Centro de Estudios sobre América del Norte (CESAN) de la Universidad de Guadalajara. Es doctor en Ciencias Políticas por la Universidad de Cornell. Es autor de “US Hegemony and the Americas: Power and Economic Statecraft in International Relations” (Routledge, 2020); “Mexico-United States Relations: The Semantics of Sovereignty” (Routledge, 2012); co-autor de América del Norte, Volumen 1 de la serie \"Historia de las relaciones internacionales de México, 1821-2010\" (Secretaría de Relaciones Exteriores, 2011); e “International Election Monitoring, Sovereignty, and the Western Hemisphere Idea: The Emergence of an International Norm” (Routledge, 2005). Es editor o coeditor de, entre otros libros, “Introducción a las Relaciones Internacionales: América Latina y la Política Global”, con Thomas Legler y Laura Zamudio (Oxford University Press, 2013); “The State and Security in Mexico: Transformation and Crisis in Regional Perspective”, con Brian Bow (Routledge, 2012), y “La política sin fronteras, o la ubicuidad de lo distintivo” (CIDE, 2012). También ha publicado en revistas especializadas, como International Organization, Journal of Latin American Studies, Estudios Internacionales y Foro Internacional, así como varios capítulos en libros.', '°Integración en América del Norte\r\n\r\n°Relaciones México-Estados Unidos\r\n\r\n°Teoría de Relaciones Internacionales', '°Regionalización en América del Norte\r\n\r\n°Relaciones Internacionales en México\r\n\r\n°Aspectos metodológicos del constructivismo', 'Santa Cruz, A. (en prensa). From Asia-Pacific to the Indo-Pacific, in three different world(view)s. México y la Cuenca del Pacífico, 11(32).\r\n\r\nCruz, A. (2021). La hegemonía estadounidense y el continente americano: Poder y diplomacia económica en las relaciones internacionales. Nueva York: Peter Lang.\r\n\r\nCruz, A; Legler, T. & Zamudio, L. (2021, reimpresión).\r\n\r\nIntroducción a las Relaciones Internacionales: América Latina y la Política Global. Ciudad de México: Universidad Iberoamericana.\r\n\r\nSanta Cruz, A. (2021). “Regionalism in Latin American Thought and Practice”. En Acharya, A.; Deciancio, M. & Tussie, D. (eds). Latin America in Global International Relations [163-181]. Nueva York: Routledge.\r\n\r\nSanta Cruz, A. (2021). “Dos Décadas de Conmoción en el Orden Hemisférico en las Américas”. En Secretaría de Relaciones Exteriores (ed). El sistema y la política internacionales: narrativas desde México [121-142]. Ciudad de México: Instituto Matías Romero.\r\n\r\nCruz, A. (2020). US Hegemony and the Americas: Power and Economic Statecraft in International Relations. Nueva York: Routledge.\r\n\r\nSanta Cruz, A. (2020). “La política de Enrique Peña Nieto hacia América del Norte: normalización y defensa de fronteras de políticas públicas”.\r\n\r\nEn Covarrubias, A. et al (eds). Fundamentos internos y externos de la política exterior de México (2012-2018) [103-123]. Ciudad de México: El Colegio de México.\r\n\r\nSanta Cruz, A. (2020). “Constructivismo y Seguridad”. En Lozano, A. & Rodríguez, A. (coords). Seguridad y Asuntos Internacionales [61-73]. Ciudad de México: Siglo Veintiuno Editores.', 'Teoría de las Relaciones Internacionales, Relaciones México-Estados Unidos, Integración Norteamericana.', 'América del Norte', 'images/imagenes-NAB/1688961349-arturo_santa_cruz.jpg', NULL, NULL),
(18, 'Jorge Chabat', '-', 'JorgeChabat@gmail.com', NULL, '-', '-', '-', '-', '-', 'Política Exterior Mexicana, Seguridad Internacional, Seguridad Nacional, Crimen Organizado Transnacional, Política Exterior de Estados Unidos y Relaciones México-Estados Unidos.', 'América del Norte', 'no disponible por el momento', NULL, NULL),
(19, 'Marcela López-Vallejo Olvera', 'Doctora en Relaciones Internacionales', 'marcela.lopezvallejo@academicos.udg.mx', NULL, 'Vicepresidenta de AMEI\r\n\r\nProfesora Investigadora Titular “C”\r\n\r\nSNI Nivel I\r\n\r\nPerfil Promep', 'Es profesora-investigadora del Centro de Estudios sobre América del Norte (CESAN) y del Departamento de Estudios del Pacífico en la Universidad de Guadalajara. Estudió su Doctorado y Maestría en la Universidad de las Américas Puebla y ha sido profesora de Relaciones Internacionales por más de 20 años en diversas universidades del país. Pertenece al Sistema Nacional de Investigadores y fue Secretaria General de la Asociación Mexicana de Estudios Internacionales (2017-2019), así como Vicepresidenta de la Sección de América Latina y el Caribe de la International Studies Association (2019-2021). Trabajó en la Secretaría de Relaciones Exteriores, en la Secretaría de Educación Pública y la firma de cabildeo Burson-México.\r\n\r\nPertenece al Consejo Editorial de la revista Latin American Policy y ha sido profesora visitante en el Instituto de Estudios de Energía de Oxford en Reino Unido, en la Universidad de Montreal, la Universidad de Ottawa y la Universidad Wilfried Laurier en Canadá. Sus más de 50 publicaciones se enfocan en el análisis sobre América del Norte con temas como diplomacias y gobernanzas locales, cambio climático, política energética, regionalismo y teoría de Relaciones Internacionales. Destacan sus dos últimos libros sobre gobernanza climática y política ambiental transregional en América del Norte.', '°Regionalización, integración y políticas en América del Norte\r\n\r\n°Políticas globales, regionales, nacionales y locales climáticas y energéticas\r\n\r\n°Sistemas de precios al CO2 (mercados e impuestos)\r\nGobernanza global\r\n\r\n°Paradiplomacia y cooperación descentralizada', '°New Geographies of Energy in Mexico (Baker Institute/BUAP)\r\n\r\n°North American Climate and Energy (University of Michigan)\r\n\r\n°Metodología y Métodos en Relaciones Internacionales (UDG/COLSAN/UMAR)\r\n\r\n°PACMetro (UDG/IMEPLAN)', 'López-Vallejo, Marcela (2014). Reconfiguring Global Climate Governance in North America: A Transregional Approach, Surrey, UK: Ashgate Publishing. (https://www.routledge.com/Reconfiguring-Global-Climate-Governance-in-North-America-A-Transregional/Lopez-Vallejo/p/book/9781138270718)\r\n\r\nHealy, Robert, Van Nijnatten, Debora, and Marcela López-Vallejo (2014). Environmental Policy in North America: Capacities, Approaches and Transboundary Issue management in Canada, the United States and Mexico, Boradview & University of Toronto Press. (http://www.utppublishing.com/Environmental-Policy-in-North-America-Approaches-Capacity-and-the-Management-of-Transboundary-Issues.html)\r\n\r\nSchiavon, Jorge, Adriana S. Ortega, Marcela López-Vallejo y Rafael Velázquez (eds.). (2021). Teorías de Relaciones Internacionales en el siglo XXI: Interpretaciones críticas desde México y América Latina (Nueva Edición), Ciudad de México: CIDE. (ISBN: 978-607-8508-90-72020).\r\n\r\nSchiavon, Jorge, Adriana S. Ortega, Marcela López-Vallejo y Rafael Velázquez (eds.) (2014 y 2016). Teorías de Relaciones Internacionales en el siglo XXI: Interpretaciones críticas desde México, México DF: BUAP, COLSAN UPAEP, UABC, UANL, Primera y Segunda Ediciones.\r\n\r\nLópez-Vallejo, Marcela, Ana Bárbara Mungaray, Fausto Quintana, Rafael Velázquez (eds.). (2013). Gobernanza global en un mundo interconectado, México D.F.: Universidad Autónoma de Baja California, Asociación Mexicana de Estudios Internacionales, A.C., Universidad Popular Autónoma del Estado de Puebla, A.C. (ISBN: 978-607-607-140-3). (http://www.amei.mx/home/las-noticias-de-amei/gobernanza-global-en-un-mundo-interconectado/)\r\n\r\nLópez-Vallejo, Marcela. (2021). “Mexican Sub-Federal Governments and Trade Politics: Variation on Supportive Conditions and Institutional Resources,” Regional and Federal Studies. DOI: 10.1080/13597566.2021.1919871.\r\n\r\nLópez-Vallejo, Marcela & Pilar Fuerte Celis. (2020). “Hybrid Governance in Northeastern Mexico: Crime, Violence, and Legal-Illegal Energy Markets,” Latina American Perspectives 48(1):103-125. doi:10.1177/0094582X20975016.\r\n\r\nLópez-Vallejo, Marcela. (2019). “Una nueva multilateralidad climática con liderazgo local,” Foreign Affairs Latinoamérica, Mayo. ITAM.\r\n\r\nMuñoz-Meléndez, Gabriela & López-Vallejo, Marcela. (2018). “Building a Transregional Governance Architecture for Electricity Integration in the Baja California–California Border Region: The Cases of Tijuana and Mexicali,” Latin American Policy, issue 9, number, November 349-372. DOI: https://doi.org/10.1111/lamp.12148\r\n\r\nLópez-Vallejo, Marcela. (2017). “En la frontera del debate global-local: La provisión de bienes públicos desde la gobernanza escalar.” Revista Española de Derecho Internacional, vol. 69, 2:171-194. ISSN: 0034-9380.\r\n\r\nLópez-Vallejo, Marcela. (2021). “Non-Additionality, Overestimation of Supply, and Double Counting in Offset Programs: Insight into the Mexican Carbon Market.” En Simone Lucatello and Camila Barragán (eds.), Towards an Emissions Trading System in Mexico: Rationale, Design and Connections with the Global Climate Agenda. Springer Editions.\r\n\r\nLópez-Vallejo, Marcela. (2021). “Gobernanza climática multi-escala en América del Norte: Tres modos de integración regional.” En Catherine Vézina (ed.). Historias Conectadas en América del Norte. Editorial CIDE.\r\n\r\nLópez-Vallejo, Marcela. (2021). “Políticas climáticas y el partidismo en Canadá: Estrategias federales y provinciales durante los gobiernos de S.Harper y J.Trudeau.” En Oliver Santín Peña (eds.), Canadá y sus paradojas en el Siglo XXI: Política exterior, paradiplomacia, economía, recursos naturales y medioambiente, Volumen 1, pp. 205-238. Ciudad de México, CISAN-UNAM.\r\n\r\nLópez-Vallejo, Marcela. (2021). “Gobernanza Global.” En Schiavon, Jorge, Adriana S. Ortega, Marcela López-Vallejo y Rafael Velázquez (eds.), Teorías de Relaciones Internacionales en el siglo XXI: Interpretaciones críticas desde México y América Latina (1a Edición), pp. 529-548. Ciudad de México: CIDE. (ISBN: 978-607-8508-90-72020).\r\n\r\nLópez-Vallejo, Marcela. (2020). “Seguridad ambiental.” En Alberto Lozano Vázquez y Abelardo Rodríguez Sumano (eds.) Teorías, Dimensiones, Interdisciplinas, Las Américas, Amenazas, Instituciones, Regiones y Política Mundial. Siglo XXI Editores y Asociación Mexicana de Estudios Internacionales. Ciudad de México.\r\n\r\nSchiavon, Jorge A. & Marcela López-Vallejo. (2020). “Mexican Sub-Federal Actors and the Negotiation and Implementation of Free-Trade Agreements.” En Jörg Broschek y Patricia Goff (eds.). Multilevel Trade Politics: Configurations, Dynamics, Mechanisms, pp. University of Toronto Press.\r\n\r\nVan Nijnatten, Debora and Marcela López-Vallejo. (2018). “Canada-United States Relations and a Low-Carbon Economy for North America?” En Stephen Bird y Andrea Olive (eds.) Transboundary Environmental Governance, Michigan State University Press.\r\n\r\nLópez-Vallejo, Marcela. (2017). “Mexico-US Energy Relations: Clean-Energy Integration falling behind?” En Stoett, Peter and Owen Temby Towards Continental Environmental Governance? North American Transnational Networks and Governance, pp. 276-306. New York: State University of New York.\r\n\r\nTaraska, Gwynne, Marcela López-Vallejo, Sam Adams, Erin Flanagan, Gustavo Alanís-Ortega, Cathleen Kelly, Andrew Light, Julia Martinez, and Joe Thwaites.(2016). Proposals for a North American Climate Strategy. Washington DC: Center for American Progress, World Resources Institute, Centro de Investigación y Docencia Económicas, Centro Mexicano de Derecho Ambiental, Pembina Institute, Canada 2020. https://cdn.americanprogress.org/wp-content/uploads/2016/06/17110956/NALS-report-spreads.pdf\r\n\r\nLópez-Vallejo, Marcela. (2016). “Electricidad renovable en América Latina: Marcos regulatorios y beneficios sociales locales,” en Beneficios Sociales de la Electricidad en América Latina. Ciudad de México: Secretaría de Energía.', 'Gobernanza Global, Integración Transregional en América del Norte, Diplomacia Local y Cooperación Descentralizada, Transiciones Energéticas, Gobernanza Climática EE.UU.-Canadá-México y Política Energética.', 'América del Norte', 'images/imagenes-NAB/1688961616-marcela.jpg', NULL, NULL),
(20, 'José Jesús Bravo Vergara', 'Doctor en Ciencias Sociales', 'jose.bvergara@academicos.udg.mx', NULL, 'Jefe del Departamento de Estudios Internacionales\r\n\r\nProfesor Investigador Titular “C”\r\n\r\nSNI Nivel I\r\n\r\nPerfil Promep', '-', 'Egresado de la Licenciatura de Asuntos de la Universidad de Guadalajara. Maestro en Ciencias Sociales con especialidad en Relaciones Internacionales y Estudios del Pacífico, perteneciente al Padrón de Excelencia de Conacyt. Doctorado en Ciencias Sociales de la Universidad de Guadalajara, perteneciente al Padrón de excelencia de Conacyt 2007-2011. Miembro del comité Editorial de la Revista México y la Cuenca del Pacífico. Miembro de AMEI.\r\n\r\nProfesor en la Universidad Panamericana en 2004 en la carrera de Negocios Internacionales. Profesor en la Universidad del Valle de Atemajac de 2002 a 2006 en las carreras de Negocios Internacionales, Derecho y Relaciones Internacionales. Profesor en el Doctorado de Administración Docente en el Instituto Mexicano de Estudios Pedagógicos de 2011 a 2013. Profesor en la Licenciatura de Relaciones Internacionales desde 2002, en la Maestría de las Relaciones Internacionales de los Actores Locales y en la Maestría en Global Politics and Transpacific Studies. Profesor docente adscrito al Departamento de Estudios del Pacífico, y miembros del Centro de Estudios para América del Norte. Coordinador de Capacitación electoral en el Distrito X del Consejo Electoral del Estado de Jalisco en la elección de 2003.', '-', '-', 'Política Exterior de América del Norte, Relaciones Transpacíficas Estados Unidos - China.', 'América del Norte', 'images/imagenes-NAB/1688961708-jose_bravo.jpg', NULL, NULL),
(21, 'Miguel Ángel Sigala Gómez', 'Maestro en Ciencias Sociales', 'miguel.sigala@academicos.udg.mx', NULL, 'Profesor Investigador Titular “A”', 'Estudió la maestría en Ciencias Sociales con orientación en Relaciones Internacionales y del Pacífico, y licenciatura en Estudios Internacionales, ambas por la Universidad de Guadalajara. Ha impartido cursos de historia y teoría de las Relaciones Internacionales; así como de historia y política comparada en América del Norte. Actualmente, estudia el programa de Doctorado en Transborder Studies en Arizona State University, Tempe. Fungió como Coordinador de programas internacionales y de internacionalización de la Universidad de Guadalajara.', '°Relaciones México-Estados Unidos.\r\n\r\n°Política comparada en América del Norte.', '°Bordering processes: a framework to study how the U.S. and Mexico shape each other.\r\n\r\n°U.S.-Mexico academic and scientific cooperation.\r\n\r\n°Enlightened self-interest in Canadian Foreign Policy.', 'Moreno C.I., Delgadillo C.B., Sigala M.Á., Cárdenas E.H. (2022) University of Guadalajara: Transforming and Innovating Through Stronger Collaboration Between Higher and Upper-Secondary Education During the Pandemic. En Reimers F.M., Marmolejo F.J. (eds) University and School Collaborations during a Pandemic. Knowledge Studies in Higher Education, vol 8. Springer, Cham. https://doi.org/10.1007/978-3-030-82159-3_11\r\n\r\nSigala, Miguel & Moreno, Carlos I. (2019). Las universidades como actores paradiplomáticos y de poder suave. En Villarruel Daniel. et al. (ed.), Actores locales, impactos globales: aportes académicos en paradiplomacia. Guadalajara: Editorial Universidad de Guadalajara.\r\n\r\nBravo Vergara, J.J., Sigala, M. (2016). Constructivismo. En Schiavon Uriegas, J.A., Ortega Ramírez A.S., Lopez Vallejo, M., Valezquez Flores, (eds). Teorías de las Relaciones Internacionales: Interpretaciones críticas desde México (2da ed). México: CIDE, AMEI, Colegio de San Luis, UANL, UPAEP.', 'Política Comparada en América del Norte, Identidades Nacionales en América del Norte y Política Exterior Canadiense.', 'América del Norte', 'images/imagenes-NAB/1688961830-miguel_sigala.jpg', NULL, NULL);
INSERT INTO `investigadores` (`id`, `nombre`, `especialidad`, `correo`, `deleted_at`, `puesto`, `biografia`, `linea`, `proyectos`, `publicaciones`, `descripcion`, `orientacion`, `imagen`, `created_at`, `updated_at`) VALUES
(22, 'Miguel Alejandro Híjar Chiapa', 'Maestro en Ciencias Sociales', 'miguel.hijar@academicos.udg.mx', NULL, 'President, Australian and New Zealand\r\nStudies Association of North America\r\n\r\nProfesor Investigador Asociado “B”', 'Miguel Alejandro Híjar Chiapa es Profesor Investigador en el Centro de Estudios sobre América del Norte del Departamento de Estudios del Pacífico de la Universidad de Guadalajara y Presidente de la Australian and New Zealand Studies Association of North America. También funge como Director de la sección de Australia y Oceanía y como Miembro del Comité Ejecutivo del Consortium of Indo-Pacific Researchers. Ha sido Profesor Visitante en el Centro Edward A. Clark de Estudios Australianos y Neozelandeses de la Universidad de Texas en Austin y en el Centro de Estudios sobre Seguridad y Defensa de la Universidad de Massey en Nueva Zelanda. Licenciado en Relaciones Internacionales por la Universidad del Valle de Atemajac y Maestro en Ciencias Sociales con orientación en Relaciones Internacionales y del Pacífico por la Universidad de Guadalajara.', '°Teoría de Relaciones internacionales\r\n\r\n°Seguridad en el Indo-Pacífico\r\n\r\n°Política Exterior y de Defensa de Australia, Nueva Zelanda, Canadá, Estados Unidos, Reino Unido e India', 'AUKUS, Quad, and the Indo-Pacific', 'Híjar-Chiapa, M. A. (2021). “Australia, New Zealand and the Quad Plus” in J. Panda & E. Gunasekara-Rockwell (Eds.), Quad Plus and Indo-Pacific: The Changing Profile of International Relations (pp. 94-107). Routledge.\r\n\r\nHíjar-Chiapa, M. A. (2021). “From Distant Relatives to Close Partners: India’s Relations with Australia and New Zealand” in A. Pande (Ed.), Routledge Handbook of South Asian Foreign Policy (pp. 216-230). Routledge.\r\n\r\nHíjar-Chiapa, M. A. (2020). A Quad Plus? The Prospects for Australia and New Zealand. Journal of Indo Pacific Affairs, 3(5), 87-105.\r\n\r\nHíjar-Chiapa, M. A. (2020). “Australia and the Construction of the Indo-Pacific” in A. Rossiter & B. Cannon (Eds.), Conflict and Cooperation in the Indo-Pacific: New Geopolitical Realities (pp. 78-93). Routledge.\r\n\r\nGallardo Ocampo, A. & Híjar-Chiapa, M. A. (2020). “Museums as Critical Spaces for Alterity in a Post-Truth World” in B. Jones & M. Guddonis (Eds.), History in a Post-Truth World: Theory and Praxis (pp. 251-265). Routledge.\r\n\r\nHíjar-Chiapa, M. A. (2020). “John G. Ruggie: Teórico de la Transformación” in R. Velázquez, J. Schiavon & D. Morales (Eds.), Los Clásicos de las Relaciones Internacionales: Ideas y conceptos para la construcción teórica de la disciplina (pp. 221-225). AMEI, CIDE & UABC.\r\n\r\nHíjar-Chiapa, M. A. (2018). Navigating Dangerous Waters: Australia and the Indo-Pacific. Rising Powers Quarterly, 3(2), 157-173.', 'Política Exterior de Australia, Canadá, Nueva Zelanda, Reino Unido y Estados Unidos; Seguridad en el Indo-Pacífico.', 'América del Norte', 'images/imagenes-NAB/1688961940-miguel_hijar.jpg', NULL, NULL);

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
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(8, '2001-2050', 89, '0.30', '0.45', NULL, NULL, NULL),
(9, '2012-2014', 68, '0.20', '0.67', NULL, NULL, NULL);

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
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `tipo`, `deleted_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Carlos Gabriel Becerra Gallardo', '2118100638@soy.utj.edu.mx', NULL, '$2y$10$YFQzaMxAS6dK9YUeWlxjv.4FXRbQvwmmMBt1vTmTdVTj5RnnY5Kry', 'Administrador', NULL, 'K87C2H3JV41unWeNIpyzOeqsICNoDQYNoqN6x4repgTUcfbU2S3MJGWWqVay', '2023-06-30 03:54:18', '2023-07-07 03:05:54'),
(2, 'juan7771111111', 'juan@gmail.com', NULL, '$2y$10$X2uh66RoN1VLoL3B0giKP.T6jRS59d/rJZRQKZZkh7QyXyum7DiS6', 'Admin', NULL, NULL, '2023-07-01 07:59:26', '2023-07-01 07:59:26'),
(3, 'Jorge', 'Villalobos@gmail.com', NULL, '$2y$10$7sHGdLNh1Ffaifdeofo4UO/NRKm2vUYr.HQoLw6YALEXWIxj7PhCi', 'Editor', NULL, NULL, '2023-07-02 04:25:30', '2023-07-02 04:25:30'),
(4, 'Gabriel Montero', 'gabrielutj@gmail.com', NULL, '$2y$10$kpzfEIGSwe7QlucE4E8t6OFpoflNuCSsg53xtgmbqgMUkDMw3Xih6', 'Editor', NULL, NULL, '2023-07-02 20:57:47', '2023-07-02 20:57:47'),
(5, 'ivan', 'juan111222@gmail.com', NULL, '$2y$10$gvGGu8sqsCg9RU4pl1H.teTDe.QCSXyxa5yCn9pP9NB7DkpwyLqRu', 'estandar', NULL, NULL, '2023-07-02 22:36:15', '2023-07-02 22:36:15'),
(6, 'Francisco Javier', 'lovecar225@dronetz.com', NULL, '$2y$10$sNEFAoAY7dw6NE2Q4NnEi.Qe6tG6j4hBKojYV6G.VR.e.5v4gAy.e', 'estandar', NULL, '1yvZPio98y20G9crXXVOK2aMVyL3kUtfVytV5lYyVD0DTi1Lmmy1Y1NzeDuo', '2023-07-02 22:55:29', '2023-07-02 23:03:38'),
(7, 'Victor', 'vg278816@gmail.com', NULL, '$2y$10$oxxV.RI/2jS8GpsEcgVsz.X7tPwd0mlUJN7JOy0mNFQpfk/BqldrS', 'estandar', NULL, NULL, '2023-07-04 03:58:50', '2023-07-04 03:58:50'),
(8, 'Carlos Gabriel Becerra Gallardo', '211810063448@soy.utj.edu.mx', NULL, '$2y$10$4KqFxQD1DdYyelYnUAoVzOoaFSa5AUGipNYkjwx5Mi912vzzSNQQS', 'Administrador', NULL, NULL, '2023-07-07 02:37:19', '2023-07-07 02:37:19');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
