-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 21-12-2017 a las 23:39:10
-- Versión del servidor: 5.7.19
-- Versión de PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `phsperu`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

DROP TABLE IF EXISTS `categoria`;
CREATE TABLE IF NOT EXISTS `categoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(150) NOT NULL,
  `estado` char(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `nombres`, `estado`) VALUES
(1, 'Servicios', '1'),
(2, 'Blog', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contenidos`
--

DROP TABLE IF EXISTS `contenidos`;
CREATE TABLE IF NOT EXISTS `contenidos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(150) NOT NULL,
  `resumen` text NOT NULL,
  `descripcion` text NOT NULL,
  `imagen` varchar(150) NOT NULL,
  `estado` char(1) NOT NULL DEFAULT '1',
  `categoria_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contenidos`
--

INSERT INTO `contenidos` (`id`, `titulo`, `resumen`, `descripcion`, `imagen`, `estado`, `categoria_id`) VALUES
(1, 'SERVICIO DE CARGA', 'Servicio de Transporte de Carga en General y de Maquinaria Pesada a Nivel Nacional e Internacional.', '<p>Brindamos el servicio de transporte de carga a nivel local, nacional e internacional, en función a los requerimientos de los <s><em>clientes; para ello contamos con una amplia y moderna flota de camiones, furgones, plataformas especialmente acondicionadas para cada operación; todas nuestras unidades son monitoreadas a lo largo de</em></s> todo el proceso por un sistema de control satelital GPS las 24 horas del día y en tiempo real, además cuentan con un sistema integrado de gestión SIG; lo cual nos permite garantizar un excelente servicio asegurándose de que su <em><strong>carga</strong></em> llegue de manera oportuna, segura y sin problemas a su destino.</p>\r\n', 'tipos-de-contenedores-maritimos-enero2-800x5001.jpg', '1', 1),
(3, 'SERVICIO DE ALMACENAJE', 'Brindamos el Servicio de Almacenaje de su mercadería, muebles de hogar, documentos y/o paquetes.', '<p>Brindamos el Servicio de Almacenaje de su mercadería, muebles de hogar, documentos y/o paquetes; involucrando en ello todas las actividades necesarias para la recepción, manejo de inventarios y despacho de la misma, para ello contamos con moderna infraestructura, seguridad las 24 horas del día y una tecnología de punta.</p>', 'servicio-logistica.jpg', '1', 1),
(4, 'SERVICIO DE MUDANZA', 'Brindamos el servicio de Mudanza a nivel local y nacional', '<p>Brindamos el servicio de Mudanza a nivel local y nacional, para ello contamos con el personal especializado que se encargan del pre embalaje en cajas de primera calidad, de igual manera disponemos de una flota de camiones con mantenimiento controlado y sistema de control satelital GPS; así mismo, conductores calificados que aseguran un traslado rápido y seguro.</p>\r\n\r\n<p>Desembalaje y retiro de material en destino, además, nos encargamos de la documentación para el tránsito de puerta a puerta ante las autoridades pertinentes.</p>', 'mudanza-casa-800x500.jpg', '1', 1),
(5, 'SERVICIO COURIER', 'Soluciones en la distribución de documentos en el ámbito local, nacional e internacional.', '<p>Brindamos soluciones en la distribución de documentos en el ámbito local, nacional e internacional de acuerdo a los plazos coordinados previamente con el cliente. Nuestro personal especializado es continuamente capacitado y es exclusivo de AFE Courier.</p>', '115cae1bc15ae20b352e31f928e699f7.jpg', '1', 1),
(6, 'Claves para una logística eficiente', 'Alejandro Singer, director del área de Maplink, la empresa que eligió Google para gestionar sus mapas, apuesta a la información integrada', '<p>Toda organización dedicada al movimiento de productos y mercaderías encuentra en sus operaciones un enorme desafío logístico y, desde hace unos años, también debe solucionar otras exigencias como la optimización de flota y rutas de entrega, bajar costos sin descuidar la satisfacción del cliente o estimar al máximo el horario de una entrega, sobre todo en negocios online o servicios con delivery. Frente a este panorama, la empresa Maplink, dedicada a tecnologías de logística y geolocalización en la nube y partner premier de Google Maps, investiga y desarrolla soluciones para resolver las nuevas complejidades que surgen en los procesos logísticos que, cada vez, son más atravesados por las nuevas tecnologías.</p>\r\n\r\n<p><br>\r\nCon más de 1200 clientes en 19 países, la compañía llegó al país para fortalecer la oferta de sus productos y acompañar la expansión que inició hace 3 años con la apertura de oficinas en México, Colombia y Chile. En la Argentina, ya brinda servicios para Nestlé, Mastellone, Axion Energy, Musimundo, Syngenta, Cheeky o Ribeiro, entre otras; con gran presencia en los segmentos de retail, automotriz y agro. \"El enfoque es afianzar la posición en América latina y transformar nuestras soluciones en una herramienta fundamental tanto para pymes que cuentan con procesos básicos de reparto, como para grandes empresas que necesitan reducir costos\", explica Alejandro Singer, director de Logística para la marca en el país.</p>\r\n\r\n<p><strong>-¿Cómo impactará en el futuro de la logística la creciente participación de aplicaciones y tecnologías?</strong></p>\r\n\r\n<p>-Las apps y tecnologías móviles están teniendo un significativo impacto. La naturaleza del entorno en el que trabajan las compañías con procesos de distribución hace que se vean obligadas a incorporar tecnología para la especialización y obtención de resultados. Los profesionales de la logística y el transporte utilizan dispositivos móviles porque se adaptan mejor a la eficiencia, la transparencia y brindan la posibilidad de tomar decisiones en tiempo real con una precisión que antes era impensada. Las nuevas tecnologías están empujando a operadores logísticos fuera de su zona de confort, rompiendo con antiguos paradigmas de muchos años. Por ejemplo, se obtiene mayor colaboración entre los actores de la cadena logística, aumentando la transparencia, reduciendo los costos e impactando favorablemente en el nivel de servicio.</p>\r\n\r\n<p><img alt=\"\" src=\"http://bucket1.glanacion.com/anexos/fotos/50/comercio-exterior-2595650w640.jpg\" xss=removed></p>', 'econoticias-grupollopis-construccion-sostenible-51-870x400-gray.jpg', '1', 2),
(7, 'Operadores logísticos esperan mejora de la red vial', 'Infraestructura vial es clave para la competitividad y esperan una mejora en el gobierno de Pedro Pablo Kuczynski, señalaron', '<p>La prioridad del Ejecutivo debe ser mejorar y ampliar la infraestructura de transporte así como combatir la inseguridad y la informalidad y promover la gestión de calidad, la expansión del conocimiento y las buenas prácticas, afirman ejecutivos del sector logístico.</p>\r\n\r\n<p>“Mejorar la infraestructura vial comenzado por los caminos que salen del puerto o terminan en él, para elevar nuestros niveles de eficiencia y ahorro de tiempo. Todo ello redundará en grandes beneficios al disminuir el número de camiones que transitan en las ciudades y carreteras del país y adicionalmente contribuirá a reducir la contaminación ambiental”, apunta Rafael Belmont, presidente de GS1 Perú y gerente general de Perufarma. </p>\r\n\r\n<p><img alt=\"\" src=\"https://cde.3.elcomercio.pe/ima/0/1/6/9/3/1693202.jpg\" xss=removed></p>', 'flotas2.jpg', '1', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `slider`
--

DROP TABLE IF EXISTS `slider`;
CREATE TABLE IF NOT EXISTS `slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(200) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `url` varchar(100) NOT NULL,
  `estado` char(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `slider`
--

INSERT INTO `slider` (`id`, `nombres`, `descripcion`, `imagen`, `url`, `estado`) VALUES
(1, 'WE DELIVER YOUR GOODS FAST', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.', 'sea-freight-global-transport.jpg', '#', '1'),
(2, '¿Cuales son los Operadores Logísticos de mayor confianza en el Perú?', ' ¿Sabes qué factores se deben tomar en cuenta para escoger un operador logístico? ', 'header-bg51.jpg', '#', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(100) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `contrasena` varchar(100) NOT NULL,
  `estado` char(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombres`, `usuario`, `contrasena`, `estado`) VALUES
(1, 'PHS Perú', 'admin', 'admin', '1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
