# ************************************************************
# Sequel Pro SQL dump
# Version 4135
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: localhost (MySQL 5.5.34)
# Database: Catalogo
# Generation Time: 2014-12-05 23:29:03 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table categorias
# ------------------------------------------------------------

DROP TABLE IF EXISTS `categorias`;

CREATE TABLE `categorias` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `categorias` WRITE;
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;

INSERT INTO `categorias` (`id`, `nombre`)
VALUES
	(1,'Escritura'),
	(2,'Oficina'),
	(3,'Juegos'),
	(4,'Herramientas'),
	(5,'Hogar'),
	(6,'Bebidas'),
	(7,'Electrónicos'),
	(8,'Accesorios'),
	(9,'Llaveros'),
	(10,'Maletas'),
	(11,'Mouses');

/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table productos
# ------------------------------------------------------------

DROP TABLE IF EXISTS `productos`;

CREATE TABLE `productos` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL DEFAULT '',
  `descripcion` text NOT NULL,
  `frente` varchar(255) DEFAULT NULL,
  `altura` varchar(255) DEFAULT NULL,
  `profundidad` varchar(255) DEFAULT NULL,
  `diametro` varchar(255) DEFAULT NULL,
  `peso` varchar(255) DEFAULT NULL,
  `dimension_impresion` varchar(255) NOT NULL DEFAULT '',
  `imagen` varchar(255) DEFAULT NULL,
  `imagen_2` varchar(255) DEFAULT NULL,
  `categoria_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `productos` WRITE;
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `frente`, `altura`, `profundidad`, `diametro`, `peso`, `dimension_impresion`, `imagen`, `imagen_2`, `categoria_id`)
VALUES
	(1,'Bolígrafo Italiano Icon-Green','Mecanismo Twist. Te brinda 2000 metros de escritura.',NULL,'14 cm',NULL,'1','11','3 x 1.3','icon_green1.png','icon_green2.png',1),
	(2,'Bolígrafo Italiano Tag Sólido','Te brinda 2500 metros de escritura.',NULL,'14 cm',NULL,'1','13','4 x 1.3','tag_solido1.png','tag_solido2.png',1),
	(3,'Bolígrafo Italiano View Sólido','Con clip metálico y mecanismo twist. Te brinda 2500 metros de escritura.','1.1 cm','13.8 cm',NULL,NULL,'11','3 x 1.5','view_solido1.png','view_solido2.png',1),
	(4,'Bolígrafo Ecológico Click','Cartón. Punta y clip plástico.',NULL,'13.8 cm',NULL,'1','6','4.5 x 0.7','ecologico_click.png','ecologico_click.png',1),
	(5,'Bolígrafo Star','Con Touch. ',NULL,'13.2 cm',NULL,'1.4','19','3 x 0.7','star1.png','star2.png',1),
	(6,'Bolígrafo Magic','Con touch. Cuenta con sistema de gravedad que al girarlo se muestra o se oculta el bolígrafo.',NULL,'12.8 cm',NULL,'1','6','1.2 x 6','magic1.png','magic2.png',1),
	(7,'Bolígrafo Ultra con Grip 3 en 1','Con señalador láser y lámpara led. ',NULL,'14 cm',NULL,'1.5','15','3 x 0.7','ultra_grip3en1.png','ultra_grip3en1.png',1),
	(8,'Bolígrafo Aros','Metálico y acabado brillante. Te brinda 1000 metros de escritura.',NULL,'13.8 cm',NULL,'0.9','20','4 x 0.6','aros.png','aros.png',1),
	(9,'Juego de Escritura Twin','Metálico. Bolígrafo y lapicero.',NULL,'14 cm',NULL,'1.3','20','4 x 0.7','escritura_twin1.png','escritura_twin2.png',1),
	(10,'Set de 3 Marcadores Lucent','Tinta líquida de larga duración. Con base de plástico.',NULL,'8.7 cm','5.2 cm',NULL,'0','4 x 3','3marcadores_color.png','3marcadores_color.png',1),
	(12,'Porta Gafete Roll Color','De plástico, retráctil en colores translúcidos. Cuerda de 57.5 cm, sujetador de metal.',NULL,NULL,'','3.2','10','2 x 2','portaGafete_roll_color.png','portaGafete_roll_color.png',2),
	(13,'Set de Notas Adhesivas Ubud','De cartón.','8.2 cm','5.4 cm','0.3',NULL,'8','7 x 2.8','notasAdhesivas_ubud1.png','notasAdhesivas_ubud2.png',2),
	(14,'Libreta Sky','Con 80 hojas. Con banda elástica y separador.','7.5 cm','12.5 cm','1.3',NULL,'70','10 x 5','libreta_sky1.png','libreta_sky2.png',2),
	(15,'Libreta Eco','De cartón, incluye bolígrafo. Con 60 hojas rayadas.','15.5 cm','21 cm','1.5',NULL,'170','9 x 9','libreta_eco1.png','libreta_eco2.png',2),
	(16,'Libreta 4 en 1 Terra','Con notas adhesivas, porta tarjetas, folder y pluma. Con 60 hojas.','17.5 cm','21.2 cm','1.2',NULL,'290','8 x 8','libreta4en1_terra.png','libreta4en1_terra.png',2),
	(17,'Carpeta porta Tablet iTech Field & Co. ','De curpiel, bolsillo para documentos al frente, porta bolígrafo, espacio para Tablet ajustable con velcro de hasta 10\" y limpia pantalla.','22 cm','27 cm','2.5',NULL,'385','10 x 7','porta_tablet_iTech1.png','porta_tablet_iTech2.png',2),
	(18,'Tarjetero Acordeón','Material plástico.','7.5 cm','2 cm','11',NULL,'70','6 x 3.5','tarjetero_acordeon1.png','tarjetero_acordeon2.png',2),
	(19,'Tarjetero Carte','Fabricado en vinipiel.','10 cm','6.3 cm','1.5',NULL,'65','1.3 x 6','tarjetero_carte1.png','tarjetero_carte2.png',2),
	(20,'Reloj multifunción Desk','Con ventana transparente. Multifunciones: alarma, termómetro y calendario.','13 cm','7 cm','3',NULL,'95','10 x 2.3','relojMultifuncional_desk.png','relojMultifuncional_desk.png',2),
	(21,'Calculadora Solar Magic','Acabado en acrílico transparente.','8.2 cm','12 cm','0.6',NULL,'50','6 x 2','calculadoraSolar_magic1.png','calculadoraSolar_magic2.png',2),
	(22,'Set Escolar Recicla','Incluye: lápiz, regla, sacapuntas y goma. En empaque de cartón.','8 cm','1.2 cm','18',NULL,'30','8 x 4','setEscolar_recicla.png','setEscolar_recicla.png',2),
	(23,'Stress Ball Happy','Con pisa papel.','4.6 cm','6.2 cm','5.4',NULL,'65','3.2 x 2.5','stressBall_happy1.png','stressBall_happy2.png',3),
	(25,'Estuche de Juego Póquer','Incluye cartas profesionales, dados y fichas.','20 cm','20 cm','60.5',NULL,'1900','6 x 4','estuche_poquer1.png','estuche_poquer2.png',3),
	(26,'Juego de Domino Win','En estuche de vinipiel.','21 cm','12.7 cm','3.3',NULL,'590','6 x 4','domino_win.png','domino_win.png',3),
	(27,'Stress Ball Circle','De hule espuma.',NULL,NULL,NULL,'6.3','22','3 x 3','stressBall_circle1.png','stressBall_circle2.png',3),
	(29,'Set de Herramientas Tools','Estuche con 10 piezas.','13 cm','21 cm','3',NULL,'355','4 x 7','herramientas_tools1.png','herramientas_tools2.png',4),
	(30,'Linterna Led Antorcha','Material metálico, con llavero.',NULL,NULL,'7','1.1','22','2.5 x 0.6','linternaLed_antorcha.png','linternaLed_antorcha.png',4),
	(31,'Cinta Métrica Button','De plástico. Con 1.5 metros de largo, incluye carabinero.',NULL,'1.8 cm',NULL,'5.4','32','3 x 3','cintaMetrica_button.png','cintaMetrica_button.png',4),
	(32,'Cinta Métrica Lavoro','De metal y protector de plástico, 5 metros de largo, con seguro y clip para sujeción, inclutye correa de plástico para colgar.','6.4 cm','6.3 cm','3',NULL,'113','2.5 x 2','cintaMetrica_lavoro.png','cintaMetrica_lavoro.png',4),
	(33,'Navaja Everest','De bolsillo con 5 funciones.','6 cm','1.5 cm','1',NULL,'20','4 x 4','navaja_everest1.png','navaja_everest2.png',4),
	(34,'Navaja Silver','Material metálico con 8 funciones.','9 cm','2 cm','1.5',NULL,'80','4 x 1.3','navaja_silver1.png','navaja_silver2.png',4),
	(35,'Herramienta multiusos Strong','De acero inoxidable, seguro en ambos lados y 11 funciones: Desarmador de cruz y plano, navaja, sierra, cascanueces, lima, abrelatas, pelador y cortador de cable, cuña y pinzas. ','6.4 cm','6 cm','3',NULL,'113','3.5 x 0.5','multiusos_strong.png','multiusos_strong.png',4),
	(37,'Alcancía Cochinito','De plástico. Acabado liso. Trompa removible para vaciado.','8 cm','8 cm','8.5',NULL,'80','2 x 2','alcancia_cochinito.png','alcancia_cochinito.png',5),
	(38,'Portarretrato Curve','Fabricada en aluminio, para fotografías de 6.5 x 9 cm.','8.2 cm','10.2 cm','1.8',NULL,'37','4 x 1','portarretratos_curve.png','portarretratos_curve.png',5),
	(39,'Set de Cuchillos Master Chef','Incluye 3 cuchillos de acero inoxidable color negro y mando rubber.','30 cm','16 cm','3',NULL,'380','1.2 x 5','cuchillos_masterChef.png','cuchillos_masterChef.png',5),
	(40,'Aireador de Vinos Merlot','Incluye aireador, stand anti goteo y bolsa.','7.5 cm','22.5 cm','8',NULL,'420','2 x 2','aireador_vinosMerlot.png','aireador_vinosMerlot.png',5),
	(41,'Set de Vino Salute','Incluye 3 accesorios: vertedor, sacacorchos y ataja gotas.',NULL,'23.5 cm',NULL,'6','250','8 x 5','set_vinoSalute.png','set_vinoSalute.png',5),
	(43,'Mochila Ejecutiva Jack','Fabricado en poliéster. Con compartimento para Laptop con broches de doble seguridad, bolsa frontal, correa absorbente de peso al hombro acojinada.','28 cm','46 cm','17',NULL,'615','9 x 4','ejecutiva_jack1.png','ejecutiva_jack2.png',10),
	(44,'Bolsa Simple','Fabricada en nonwoven.','38 cm','41.5 cm',NULL,NULL,'20','20 x 20','simple1.png','simple2.png',10),
	(45,'Bolsa Store con Fuelle','Fabricada en nonwoven.','40 cm','40 cm','14.2',NULL,'91','25 x 25','store_fuelle1.png','store_fuelle2.png',10),
	(46,'Bolsa Deluxe','Fabricada en poliéster, bolsa principal con velcro, bolsa frontal con panel organizador, bolsa de malla lateral y gancho para llavero con bolsa para memoria USB.','36.8 cm','39.4 cm','10.2',NULL,NULL,'16 x 10','deluxe1.png','deluxe2.png',10),
	(47,'Morral Adventure','Fabricado en poliéster.','39 cm','47 cm',NULL,NULL,'50','20 x 20','adventure1.png','adventure2.png',10),
	(48,'Mochila Juven','Fabricada en poliéster. Con bolsillo frontal.','37 cm','47 cm','14',NULL,'420','10 x 5','juven1.png','juven2.png',10),
	(49,'Mochila Rucksack Field & Co.','Fabricado en algodón. Espacio principal con jareta, broche principal asegurado, bolsillos laterales con cierre de velcro. Correa y asas ajustables.','30 cm','40 cm','14',NULL,'525','10 x 7','rucksack1.png','rucksack2.png',10),
	(50,'Mochila Ejecutiva Armor Elleven','Fabricado en poléster, con diseño exclusivo a prueba de aplastamiento, panel frontal a prueba de golpes para proteger todos sus dispositivos móviles más importantes y valiosos, bolsillo a prueba de golpes, cuenta con cierre innovador que actúan como elementos anti-robo, bolsillos externos laterales con protección adicional, acojinado en la espalda y correas para mayor comodidad, correa ajustable para el pecho para ayudar a aligerar la carga sobre la espalda.','32 cm','50 cm','15 cm',NULL,'1000','10 x 10','ejecutivoArmor1.png','ejecutivoArmor2.png',10),
	(51,'Mochila Young','Fabricada en poliéster con bolsa frontal.','28 cm','35 cm','10.5',NULL,'255','15 x 8','young.png','young.png',10),
	(52,'Portafolio Messenger Field & Co.','Fabricado en algodón, compartimiento principal con acojinado y bolsillo interno con cierre porta Tablet de hasta 15\", bolsillos laterales con cierre de velcro, correa y asa ajustable.','42 cm','30 cm','11',NULL,'620','10 x 7','portafolio_messenger1.png','portafolio_messenger1.png',10),
	(53,'Maleta Duffel Field & Co.','Fabricada en algodón, excelente espacio interior, bolsillo frontal con cierre y asas reforzada, el tamaño puede ser ajustado a los lados.','50 cm','26 cm','27',NULL,'570','10 x 7','maleta_duffel1.png','maleta_duffel1.png',10),
	(55,'Vaso Térmico Great','De plástico, con mecanismo push. Con doble pared. Capacidad 380 ml.',NULL,'21.5 cm',NULL,'8.2','250','10 x 6','vaso_termico_great.png','vaso_termico_great.png',6),
	(56,'Vaso Térmico Star','De acero inoxidable. Capacidad 354 ml.',NULL,'14.5 cm',NULL,'8','140','3.5 x 4','vaso_termico_star.png','vaso_termico_star.png',6),
	(57,'Taza Glaciar','De acero inoxidable. Con doble pared. Capacidad 473 ml.',NULL,'17.5 cm',NULL,'8.5','250','6 x 6','termo_glaciar.png','termo_glaciar.png',6),
	(58,'Cilindro Surf','De plástico con vàlvula de seguridad. Capacidad 600 ml.',NULL,'23 cm',NULL,'7.3','55','8 x 3','cilindro_surf.png','cilindro_surf.png',6),
	(59,'Cilindro Coral Mix','De PET, tapa con sistema de rosca. Capacidad 750 ml.',NULL,'22.5 cm',NULL,'6.9',NULL,'6 x 6','cilindro_coral_mix.png','cilindro_coral_mix.png',6),
	(60,'Cilindro Bike','De plástico biodegradable, libre de BPA. Capacidad 568 ml.',NULL,'18 cm',NULL,'7.2','60','10 x 6','cilindro_bike.png','cilindro_bike.png',6),
	(61,'Cilindro Fingers','De plástico biodegradable, libre de BPA. Capacidad 852 ml.',NULL,'20 cm',NULL,'8.5','60','6 x 4.5','cilindro_fingers1.png','cilindro_fingers1.png',6),
	(63,'Bocina Bluetooth Barrel','Acabado Rubber. Compatible con cualquier dispositivo de Bluetooth, con altavoz de gran alcance y batería recargable de Litio.',NULL,'8 cm',NULL,'7.5','255','5 x 2','bocina_bluetooth_barrel.png','bocina_bluetooth_barrel.png',7),
	(64,'Memoria USB Mix & Match ','De 8 GB. Incluye caja individual.','1.9 cm','5.4 cm','1',NULL,'15','1.4 x 1.4','usb_mix_match.png','usb_mix_match.png',7),
	(65,'Memoria USB Key','Metálica, con cadena metálica y bolsa de regalo.','5.55 cm','2.4 cm','0.4',NULL,'12','3 x 8','usb_key.png','usb_key.png',7),
	(66,'Bolígrafo con USB Plus','Acabado rubber con memoria USB desprendible, con punta touch.',NULL,'15 cm',NULL,'1','15','3 x 0.7','boligrafo_usb_plus1.png','boligrafo_usb_plus1.png',7),
	(67,'Banco de energía PowerBank ','De 2200 mAh. Accesos USB para carga y descarga. Incluye caja de regalo. *Colores sobre pedido.','2 cm','2 cm','10',NULL,NULL,'7 x 1.5','banco_energia_powerbank1.png','banco_energia_powerbank1.png',7),
	(68,'Adaptador para auto Car','De plàstico. Para cargar celulares y MP3.',NULL,'5.5 cm',NULL,'2.4','13','1.8 x 0.9','adaptador_auto_car.png','adaptador_auto_car.png',7),
	(69,'Adaptador de Corriente Square','De plàstico. Para cargar celulares y MP3.','2.5 cm','2.5 cm','4.5',NULL,'18','2 x 1.2','adaptador_corriente_square1.png','adaptador_corriente_square1.png',7),
	(70,'Señalador Touch','Un producto multifuncional, punta para tabletas y señalador láser con lámpara led.',NULL,'9 cm',NULL,'2','15','3 x 0.7','señalador_touch.png','señalador_touch.png',7),
	(71,'Mouse pad gel','Con descansa muñeca. Ideal para cualquier tipo de mouse.',NULL,'25.5 cm',NULL,'20','150','10 x 10','mouse_pad_gel.png','mouse_pad_gel.png',7),
	(72,'Mouse Inalámbrico Arc','Plegable con compartimento. No incluye baterías.','6 cm','9 cm','4',NULL,'40','2.5 x 2','mouse_arc1.png','mouse_arc1.png',7),
	(73,'Kit USB Travel','Incluye: USB HUB 2.0 con 4 puertos, cable USB 3 en 1, cargador para pared, audifonos retráctiles y cable para compartir el audio con 2 entradas.','17 cm','9 cm','5',NULL,'145','5 x 3.5','kit_usb_travel.png','kit_usb_travel.png',7),
	(74,'Audífonos Chaos','De lujo. Con control de VolÏmen y micrÑfono. Incluye caja de regalo.',NULL,'7 cm',NULL,'18.5','170','4 x 1.5','audifonos_chaos1.png',NULL,7),
	(75,'Audífonos Bluetooth Titán','De lujo. Se conecta con cualquier dispositivo que cuente con Bluetooth. Con caja de regalo.',NULL,'7 cm',NULL,'16','220','4 x 1.5','audifonos_bluetooth_titan.png',NULL,7),
	(76,'Porta Tablet Waffle Zoom','Para Tablet de hasta 10\"','21 cm','25 cm','2',NULL,'170','16 x 7','porta_tablet_waffle1.png',NULL,7),
	(77,'Porta Tablet Collection Field & Co.','De algodón, interior acojinado, organizador al interior y correa ajustable.','23 cm','26 cm','6',NULL,'280','10 x 7','porta_tablet_collection1.png',NULL,7),
	(78,'Bolso Porta Laptop Italia','Fabricado en microfibra con compartimento para laptop.','41 cm','31 cm','1.5',NULL,'340','10 x 10','bolso_laptop_italia1.png',NULL,7),
	(79,'Porta Laptop Line','Fabricado en poliéster. Con división para laptop, compartimentos externos, 2 internos e interiores para celular y bolígrafos.','32 cm','40 cm','6',NULL,'465','12 x 12','porta_laptop_line1.png',NULL,7),
	(80,'Carpeta porta Tablet Hyde','De curpiel, con cierre, bolsillo frontal para documentos y estuche para iPad con panel organizador interior.','25 cm','35 cm','3',NULL,'695','7 x 7','tablet_hyde1.png',NULL,7),
	(82,'Reloj Square','Con función touch. Incluye caja individual.','25.5 cm','4 cm','0.7',NULL,'32','2.5 x 0.4','reloj_square1.png',NULL,8),
	(83,'Cosmetiquera Beauty','De nylon con cierre.','16.5 cm','10 cm','7',NULL,'30','10 x 5','cosmetiquera_beauty.png',NULL,8),
	(84,'Necessaire Life','Fabricado en poliéster, 5 compartimentos interiores , uno exterior y cuenta con gancho de metal.','22.5 cm','17.5 cm','7.7',NULL,'160','4.5 x 9','necessaire_life1.png',NULL,8),
	(85,'Tarjetero / Cigarrera Gala','Material vinipiel con cierre magnético.','6.4 cm','10.6 cm','2.1',NULL,'84','1.5 x 1.5','tarjetero_cigarrera.png',NULL,8),
	(86,'Sanitizador Care','En spray de 10 ml.',NULL,'14 cm',NULL,'1.9','25','1.5 x 6','sanitizador_care.png',NULL,8),
	(87,'Pastillero Pads','De plástico, con 3 compartimentos y 2 tapas, contiene navaja corta pastillas.','9.6 cm','4.8 cm','1.8',NULL,'35','4.5 x 2.5','pastillero_pads.png',NULL,8),
	(88,'Lámpara Doctor','Con Luz Led. Incluye batería.',NULL,'11 cm',NULL,'1.4','30','0.8 x 5','lampara_doctor1.png',NULL,8),
	(90,'Llavero Clip Carabinero','Material aluminio.','3.5 cm','6 cm','0.8',NULL,'15','3 x 0.5','clip_carabinero.png',NULL,9),
	(91,'Llavero Circle','Material metálico para gota de resina o láser. Incluye caja individual.',NULL,'3.8 cm','0.9',NULL,'25','2.2 x 2.2','circle1.png',NULL,9),
	(92,'Llavero Carelo','Material metálico. Incluye caja individual.','3.5 cm','8.5 cm','0.8',NULL,'31','3 x 1.3','carelo.png',NULL,9),
	(93,'Llavero Luna','Material metálico, una cara con acabado mate y otra con acabado brillante. Incluye caja individual.','3.5 cm','7 cm','0.4',NULL,'35','2 x 1.8','luna1.png',NULL,9);

/*!40000 ALTER TABLE `productos` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
