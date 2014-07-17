/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50534
Source Host           : localhost:3306
Source Database       : ladder

Target Server Type    : MYSQL
Target Server Version : 50534
File Encoding         : 65001

Date: 2014-07-17 17:38:24
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for ajustes
-- ----------------------------
DROP TABLE IF EXISTS `ajustes`;
CREATE TABLE `ajustes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ajuste_lang` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `ajuste_template` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `ajuste_url` varchar(500) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ajuste_interval_carousel` int(11) DEFAULT NULL,
  `ajuste_app_id` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ajuste_app_secret` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ajuste_plugins_folder` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ajuste_max_rep` int(11) DEFAULT NULL,
  `ajuste_max_lvl` int(11) DEFAULT NULL,
  `ajuste_max_din` int(11) DEFAULT NULL,
  `ajuste_twich_client_id` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ajuste_twich_client_secret` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- ----------------------------
-- Records of ajustes
-- ----------------------------
INSERT INTO `ajustes` VALUES ('1', 'ES_es', 'default', 'http://localhost/ladder', '5', '240362496094800', null, 'plugins', '1000', '1000', '20000', 't7daoxcmi5ta55091h094mlhscnlhxi', '3y7rt65b31vunnfe0vj5e0pmxdmowja');

-- ----------------------------
-- Table structure for grupos
-- ----------------------------
DROP TABLE IF EXISTS `grupos`;
CREATE TABLE `grupos` (
  `grupo_id` int(11) NOT NULL AUTO_INCREMENT,
  `grupo_nombre` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `grupo_color` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `grupo_acceso` int(1) DEFAULT NULL,
  PRIMARY KEY (`grupo_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- ----------------------------
-- Records of grupos
-- ----------------------------
INSERT INTO `grupos` VALUES ('1', 'Admin', 'd9534f', '1');
INSERT INTO `grupos` VALUES ('2', 'Moderador', '428bca', '4');
INSERT INTO `grupos` VALUES ('3', 'Miembros', '999999', '7');
INSERT INTO `grupos` VALUES ('4', 'Invitados', '99A8BB', '8');

-- ----------------------------
-- Table structure for noticias
-- ----------------------------
DROP TABLE IF EXISTS `noticias`;
CREATE TABLE `noticias` (
  `noticia_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `noticia_id_cat` int(11) unsigned DEFAULT NULL,
  `noticia_titulo_clean` varchar(300) CHARACTER SET utf8 DEFAULT NULL,
  `noticia_titulo` varchar(300) CHARACTER SET utf8 NOT NULL,
  `noticia_imagen` varchar(300) CHARACTER SET utf8 NOT NULL,
  `noticia_preview` varchar(500) CHARACTER SET utf8 NOT NULL,
  `noticia_contenido` text CHARACTER SET utf8,
  `noticia_autor` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `noticia_fecha` date NOT NULL,
  `noticia_activa` int(1) DEFAULT NULL,
  PRIMARY KEY (`noticia_id`)
) ENGINE=MyISAM AUTO_INCREMENT=71 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- ----------------------------
-- Records of noticias
-- ----------------------------
INSERT INTO `noticias` VALUES ('1', '1', 'titulo-de-la-noticia-test', 'Titulo de la noticia test', 'default.jpg', 'Hoy queremos compartir con todos la lista de los 50 mejores jugadores de la beta cerrada en las Américas. Muchos han estado compitiendo en el modo Jugar y aportando sus valiosos comentarios sobre Hearthstone, pero estos jugadores se han esforzado al máximo para escalar hacia lo más alto en el sistema de jerarquías y convertirse en los mejores jugadores de Hearthstone.', 'Este es el contenido completo de la noticia test, aqui pondremos imagenes etc.', 'silenoth', '2013-11-19', '1');
INSERT INTO `noticias` VALUES ('2', '2', 'lorem-ipsum-es-simplemente-el-texto-de-relleno-de-las-imprentas-y-archivos-de-texto', 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto', 'default.jpg', 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto', 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos', 'silenoth', '2013-11-21', '1');
INSERT INTO `noticias` VALUES ('3', '1', 'develamos-el-esbirro-sorpresa-de-hearthstone', '¡Develamos el esbirro sorpresa de Hearthstone™!', 'default.jpg', 'Completa tu colección de Hearthstone con la carta dorada de Los Tauren Chieftains, que viene en el botín de la BlizzCon junto con otros obsequios de StarCraft II, Diablo III y World of Warcraft.', '¿Estás listo para agregarle un poco de ROCK a Hearthstone? ¿No? ¿Qué tal mucho ROCK? ¡Eso es! Completa tu colección de Hearthstone con la carta dorada de Los Tauren Chieftains, que viene en el botín de la BlizzCon junto con otros obsequios de StarCraft II, Diablo III y World of Warcraft. ¿No puedes ir a la BlizzCon? ¡No hay problema! Todavía puedes conseguir la carta dorada de Los Tauren Chieftains de Hearthstone por medio del Boleto Virtual, el cual seguirá estando disponible si deseas comprarlo hasta una semana después del evento.', 'silenoth', '2013-11-21', '1');
INSERT INTO `noticias` VALUES ('40', '1', 'imagen-png', 'imagen png', 'jmsktfeyq2.png', 'asdasdas', 'asdasdas', 'silenoth', '2014-05-05', '1');
INSERT INTO `noticias` VALUES ('41', '1', 'imagen-png', 'imagen png', 'h2zywvip68.png', 'asdasdas', 'asdasdas', 'silenoth', '2014-05-05', '1');
INSERT INTO `noticias` VALUES ('39', '2', 'categoria-1-2-3-y-4', 'categoria 1 2 3 y 4', 'wwhbqmmljj.jpeg', 'asdasd', 'asdasdasdas', 'silenoth', '2014-05-05', '1');
INSERT INTO `noticias` VALUES ('8', '2', 'categoria-1-2-3-y-4', 'categoria 1 2 3 y 4', 'default.jpg', 'HOLA', 'HOLA', 'silenoth', '2014-05-05', '1');
INSERT INTO `noticias` VALUES ('9', '2', 'categoria-1-2-3-y-4', 'categoria 1 2 3 y 4', 'default.jpg', 'HOLA', 'HOLA', 'silenoth', '2014-05-05', '1');
INSERT INTO `noticias` VALUES ('42', '1', 'imagne-jpg', 'imagne jpg', '3npz1hkegf.jpeg', 'adsadsa', 'asdsadas', 'silenoth', '2014-05-05', '1');
INSERT INTO `noticias` VALUES ('43', '1', 'imagen-gif', 'imagen gif', 'h21ouaz1jq.gif', 'asdsada', 'asdsadas', 'silenoth', '2014-05-05', '1');
INSERT INTO `noticias` VALUES ('44', '2', 'sin-imagen', 'sin imagen', 'jeweq0tk6d.', 'aasdsad', 'asdsadsa', 'silenoth', '2014-05-05', '1');
INSERT INTO `noticias` VALUES ('38', '1', 'ahhhh', 'ahhhh', 'df92nefc0m.jpeg', 'asdsadasdas', 'asdasdasdsadsadsad', 'silenoth', '2014-05-05', '1');
INSERT INTO `noticias` VALUES ('45', '5', 'mi', 'mi', 'default.jpg', '', '', 'silenoth', '2014-05-14', null);
INSERT INTO `noticias` VALUES ('46', '5', 'mi', 'mi', 'default.jpg', '', '', 'silenoth', '2014-05-14', null);
INSERT INTO `noticias` VALUES ('47', null, '1234', '1234', 'default.jpg', '', '', 'silenoth', '2014-05-14', null);
INSERT INTO `noticias` VALUES ('48', null, '1234', '1234', 'default.jpg', '', '', 'silenoth', '2014-05-14', null);
INSERT INTO `noticias` VALUES ('49', null, '1234', '1234', 'default.jpg', '', '', 'silenoth', '2014-05-14', null);
INSERT INTO `noticias` VALUES ('50', '1', '1234', '1234', 'default.jpg', '', '', 'silenoth', '2014-05-14', '1');
INSERT INTO `noticias` VALUES ('51', '1', 'thumbnail', 'Thumbnail', 'dafault.jpg', 'thumbnail', 'Thumbnail compleeteeee', 'silenoth', '2014-05-15', '1');
INSERT INTO `noticias` VALUES ('52', '1', '1234', '1234', 'dafault.jpg', '', '', 'silenoth', '2014-05-15', '1');
INSERT INTO `noticias` VALUES ('53', '2', '1234', '1234', 'dafault.jpg', 'wewqeqweqwewqeqwewqeqwwqeqweqwe', 'qweqweqweqweqwewqeqweqweqweqweqweqweqweqweqwe', 'silenoth', '2014-05-15', '1');
INSERT INTO `noticias` VALUES ('54', '2', '1234', '1234', '3npz1hkegf.jpeg', 'wewqeqweqwewqeqwewqeqwwqeqweqwe', 'qweqweqweqweqwewqeqweqweqweqweqweqweqweqweqwe', 'silenoth', '2014-05-15', '1');
INSERT INTO `noticias` VALUES ('55', '2', '1234', '1234', 'default.jpg', 'wewqeqweqwewqeqwewqeqwwqeqweqwe', 'qweqweqweqweqwewqeqweqweqweqweqweqweqweqweqwe', 'silenoth', '2014-05-15', '1');
INSERT INTO `noticias` VALUES ('56', '1', 'holiwis', 'Holiwis', 'default.jpg', '[ul]\r\n[li]Titulo: Tiene que ser un titulo que atraiga al publico cuando lo vea. No puede exeder los 50 caracteres.[/li]\r\n\r\n[li]Imagen: Agregua una imagen que identifique la noticia. Formatos permitidos *.jpg, *.png, *.gif[/li]\r\n\r\n[/ul]\r\n', '[ul]\r\n[li]Titulo: Tiene que ser un titulo que atraiga al publico cuando lo vea. No puede exeder los 50 caracteres.[/li]\r\n\r\n[li]Imagen: Agregua una imagen que identifique la noticia. Formatos permitidos *.jpg, *.png, *.gif[/li]\r\n\r\n[/ul]\r\n', 'silenoth', '2014-05-16', '1');
INSERT INTO `noticias` VALUES ('57', '1', 'holiwis', 'Holiwis', 'default.jpg', '[ul]\r\n[li]Titulo: Tiene que ser un titulo que atraiga al publico cuando lo vea. No puede exeder los 50 caracteres.[/li]\r\n[li]Imagen: Agregua una imagen que identifique la noticia. Formatos permitidos *.jpg, *.png, *.gif[/li]\r\n[/ul]\r\n', '[ul]\r\n[li]Titulo: Tiene que ser un titulo que atraiga al publico cuando lo vea. No puede exeder los 50 caracteres.[/li]\r\n[li]Imagen: Agregua una imagen que identifique la noticia. Formatos permitidos *.jpg, *.png, *.gif[/li]\r\n[/ul]\r\n', 'silenoth', '2014-05-16', '1');
INSERT INTO `noticias` VALUES ('58', '1', 'holiwis', 'Holiwis', 'default.jpg', '[ul]\r\n[li]Titulo: Tiene que ser un titulo que atraiga al publico cuando lo vea. No puede exeder los 50 caracteres.[/li]\r\n[li]Imagen: Agregua una imagen que identifique la noticia. Formatos permitidos *.jpg, *.png, *.gif[/li]\r\n[/ul]\r\n', '[ul]\r\n[li]Titulo: Tiene que ser un titulo que atraiga al publico cuando lo vea. No puede exeder los 50 caracteres.[/li]\r\n[li]Imagen: Agregua una imagen que identifique la noticia. Formatos permitidos *.jpg, *.png, *.gif[/li]\r\n[/ul]\r\n', 'silenoth', '2014-05-16', '1');
INSERT INTO `noticias` VALUES ('59', '1', 'may-15th--hearthstone-top-ranked-players-–-americas', 'May 15th - Hearthstone™ Top Ranked Players – Americas', 'default.jpg', 'Today we’d like to share with you our top players of Ranked Play Season 2: Brave the Black Temple from the Americas region. Many of you have been participating in Ranked Play mode, but these players have worked their way up the current season’s ladder to become some of the top ranked Hearthstone players in the Americas region. ', 'Today we’d like to share with you our top players of Ranked Play Season 2: Brave the Black Temple from the Americas region. Many of you have been participating in Ranked Play mode, but these players have worked their way up the current season’s ladder to become some of the top ranked Hearthstone players in the Americas region. Additionally, the top 16 Legend players at the end of this season will qualify to participate in the Hearthstone Americas Qualifier Tournament happening later this year at BlizzCon! More information about that tournament can be found [url=http://us.battle.net/hearthstone/en/blog/13665270/]here[/url].\r\n\r\nThis information is currently not immediately visible in-game and we are offering it as a nod of appreciation to those who continue to participate and compete in our Ranked Play mode. The data below is up-to-date as of May 14, 2014.\r\n\r\nPull up a chair and join us in recognizing the top ranked Hearthstone players in the Americas region!\r\n[table][tr][td]Rank[/td]\r\n[td]BattleTag[/td]\r\n[/tr]\r\n[tr][td]1[/td]\r\n[td]StrifeCro[/td]\r\n[/tr]\r\n[tr][td]2[/td]\r\n[td]hyp3d[/td]\r\n[/tr]\r\n[tr][td]3[/td]\r\n[td]Tarei[/td]\r\n[/tr]\r\n[tr][td]4[/td]\r\n[td]hyped[/td]\r\n[/tr]\r\n[tr][td]5[/td]\r\n[td]Sender[/td]\r\n[/tr]\r\n[tr][td]6[/td]\r\n[td]reynad[/td]\r\n[/tr]\r\n[tr][td]7[/td]\r\n[td]Cyru[/td]\r\n[/tr]\r\n[tr][td]8[/td]\r\n[td]Strelzik[/td]\r\n[/tr]\r\n[tr][td]9[/td]\r\n[td]CountChocula[/td]\r\n[/tr]\r\n[tr][td]10[/td]\r\n[td]bma[/td]\r\n[/tr]\r\n[tr][td]11[/td]\r\n[td]yottiy4[/td]\r\n[/tr]\r\n[tr][td]12[/td]\r\n[td]rain[/td]\r\n[/tr]\r\n[tr][td]13[/td]\r\n[td]Neghr[/td]\r\n[/tr]\r\n[tr][td]14[/td]\r\n[td]Kurum[/td]\r\n[/tr]\r\n[tr][td]15[/td]\r\n[td]Staz[/td]\r\n[/tr]\r\n[tr][td]16[/td]\r\n[td]Failfellow[/td]\r\n[/tr]\r\n[tr][td]17[/td]\r\n[td]Thachzor[/td]\r\n[/tr]\r\n[tr][td]18[/td]\r\n[td]suuiche[/td]\r\n[/tr]\r\n[tr][td]19[/td]\r\n[td]IEATKITTENS[/td]\r\n[/tr]\r\n[tr][td]20[/td]\r\n[td]Sommer[/td]\r\n[/tr]\r\n[tr][td]21[/td]\r\n[td]Chance[/td]\r\n[/tr]\r\n[tr][td]22[/td]\r\n[td]Muirhead[/td]\r\n[/tr]\r\n[tr][td]23[/td]\r\n[td]Owatonka[/td]\r\n[/tr]\r\n[tr][td]24[/td]\r\n[td]Lotusx[/td]\r\n[/tr]\r\n[tr][td]25[/td]\r\n[td]Axtius[/td]\r\n[/tr]\r\n[tr][td]26[/td]\r\n[td]Bowles[/td]\r\n[/tr]\r\n[tr][td]27[/td]\r\n[td]Bounds[/td]\r\n[/tr]\r\n[tr][td]28[/td]\r\n[td]LennyFoulds[/td]\r\n[/tr]\r\n[tr][td]29[/td]\r\n[td]Vastuish[/td]\r\n[/tr]\r\n[tr][td]30[/td]\r\n[td]DuckWingFACE[/td]\r\n[/tr]\r\n[tr][td]31[/td]\r\n[td]AllHailMatt[/td]\r\n[/tr]\r\n[tr][td]32[/td]\r\n[td]SirBuckeye[/td]\r\n[/tr]\r\n[tr][td]33[/td]\r\n[td]Lifecoach[/td]\r\n[/tr]\r\n[tr][td]34[/td]\r\n[td]Razor[/td]\r\n[/tr]\r\n[tr][td]35[/td]\r\n[td]LiquidDiego[/td]\r\n[/tr]\r\n[tr][td]36[/td]\r\n[td]Revelaxion[/td]\r\n[/tr]\r\n[tr][td]37[/td]\r\n[td]Ironhead[/td]\r\n[/tr]\r\n[tr][td]38[/td]\r\n[td]Khymera[/td]\r\n[/tr]\r\n[tr][td]39[/td]\r\n[td]Ðart[/td]\r\n[/tr]\r\n[tr][td]40[/td]\r\n[td]surpass[/td]\r\n[/tr]\r\n[tr][td]41[/td]\r\n[td]allandang[/td]\r\n[/tr]\r\n[tr][td]42[/td]\r\n[td]Mandraxhair[/td]\r\n[/tr]\r\n[tr][td]43[/td]\r\n[td]Alleria[/td]\r\n[/tr]\r\n[tr][td]44[/td]\r\n[td]Coglorin[/td]\r\n[/tr]\r\n[tr][td]45[/td]\r\n[td]Blackacre[/td]\r\n[/tr]\r\n[tr][td]46[/td]\r\n[td]durr[/td]\r\n[/tr]\r\n[tr][td]47[/td]\r\n[td]Decoherence[/td]\r\n[/tr]\r\n[tr][td]48[/td]\r\n[td]Darkbunny[/td]\r\n[/tr]\r\n[tr][td]49[/td]\r\n[td]Haritsuka[/td]\r\n[/tr]\r\n[tr][td]50[/td]\r\n[td]puffin[/td]\r\n[/tr]\r\n[tr][td]51[/td]\r\n[td]skiLtor[/td]\r\n[/tr]\r\n[tr][td]52[/td]\r\n[td]koyuki[/td]\r\n[/tr]\r\n[tr][td]53[/td]\r\n[td]andrewC[/td]\r\n[/tr]\r\n[tr][td]54[/td]\r\n[td]jejune[/td]\r\n[/tr]\r\n[tr][td]55[/td]\r\n[td]Ghost[/td]\r\n[/tr]\r\n[tr][td]56[/td]\r\n[td]Lazy[/td]\r\n[/tr]\r\n[tr][td]57[/td]\r\n[td]winpo[/td]\r\n[/tr]\r\n[tr][td]58[/td]\r\n[td]Ratisil[/td]\r\n[/tr]\r\n[tr][td]59[/td]\r\n[td]Jesse[/td]\r\n[/tr]\r\n[tr][td]60[/td]\r\n[td]G37[/td]\r\n[/tr]\r\n[tr][td]61[/td]\r\n[td]Poisty1991[/td]\r\n[/tr]\r\n[tr][td]62[/td]\r\n[td]dog[/td]\r\n[/tr]\r\n[tr][td]63[/td]\r\n[td]TGO[/td]\r\n[/tr]\r\n[tr][td]64[/td]\r\n[td]Neobility[/td]\r\n[/tr]\r\n[tr][td]65[/td]\r\n[td]Hafu[/td]\r\n[/tr]\r\n[tr][td]66[/td]\r\n[td]hoodrych[/td]\r\n[/tr]\r\n[tr][td]67[/td]\r\n[td]Gertzferd[/td]\r\n[/tr]\r\n[tr][td]68[/td]\r\n[td]Kadu[/td]\r\n[/tr]\r\n[tr][td]69[/td]\r\n[td]Darklumiya[/td]\r\n[/tr]\r\n[tr][td]70[/td]\r\n[td]Kyle[/td]\r\n[/tr]\r\n[tr][td]71[/td]\r\n[td]Puree[/td]\r\n[/tr]\r\n[tr][td]72[/td]\r\n[td]Kageno[/td]\r\n[/tr]\r\n[tr][td]73[/td]\r\n[td]TONY[/td]\r\n[/tr]\r\n[tr][td]74[/td]\r\n[td]tarquin[/td]\r\n[/tr]\r\n[tr][td]75[/td]\r\n[td]FoSk[/td]\r\n[/tr]\r\n[tr][td]76[/td]\r\n[td]Kokobeast[/td]\r\n[/tr]\r\n[tr][td]77[/td]\r\n[td]unholy[/td]\r\n[/tr]\r\n[tr][td]78[/td]\r\n[td]Cleanner[/td]\r\n[/tr]\r\n[tr][td]79[/td]\r\n[td]yuri[/td]\r\n[/tr]\r\n[tr][td]80[/td]\r\n[td]muzzy[/td]\r\n[/tr]\r\n[tr][td]81[/td]\r\n[td]fizdarth[/td]\r\n[/tr]\r\n[tr][td]82[/td]\r\n[td]Proff[/td]\r\n[/tr]\r\n[tr][td]83[/td]\r\n[td]Gigaduckman[/td]\r\n[/tr]\r\n[tr][td]84[/td]\r\n[td]RAGESAUCE[/td]\r\n[/tr]\r\n[tr][td]85[/td]\r\n[td]DarkAngel[/td]\r\n[/tr]\r\n[tr][td]86[/td]\r\n[td]Sirslim[/td]\r\n[/tr]\r\n[tr][td]87[/td]\r\n[td]krypto9ite[/td]\r\n[/tr]\r\n[tr][td]88[/td]\r\n[td]sunshift[/td]\r\n[/tr]\r\n[tr][td]89[/td]\r\n[td]Freohr[/td]\r\n[/tr]\r\n[tr][td]90[/td]\r\n[td]EnergySeeker[/td]\r\n[/tr]\r\n[tr][td]91[/td]\r\n[td]Invoker[/td]\r\n[/tr]\r\n[tr][td]92[/td]\r\n[td]Jules[/td]\r\n[/tr]\r\n[tr][td]93[/td]\r\n[td]Beldareaver[/td]\r\n[/tr]\r\n[tr][td]94[/td]\r\n[td]Peter[/td]\r\n[/tr]\r\n[tr][td]95[/td]\r\n[td]Siky[/td]\r\n[/tr]\r\n[tr][td]96[/td]\r\n[td]ThaLucky1[/td]\r\n[/tr]\r\n[tr][td]97[/td]\r\n[td]Imamurgl[/td]\r\n[/tr]\r\n[tr][td]98[/td]\r\n[td]SofM[/td]\r\n[/tr]\r\n[tr][td]99[/td]\r\n[td]Brad[/td]\r\n[/tr]\r\n[tr][td]100[/td]\r\n[td]Rngezus[/td]\r\n[/tr]\r\n[/table]\r\n\r\nSee our top ranked players in the European region [url=http://eu.battle.net/hearthstone/en/blog/14138347/]here[/url].', 'silenoth', '2014-05-20', '0');
INSERT INTO `noticias` VALUES ('60', '1', '1234', '1234', 'default.jpg', '', '', 'silenoth', '2014-06-03', '0');
INSERT INTO `noticias` VALUES ('61', '5', 'testeando-libreria-de-imagen', 'Testeando libreria de imagen', 'Array', 'Imagen y a quien rechucha le importa saco de wea', 'Imagen y a quien rechucha le importa saco de wea', 'silenoth', '2014-07-16', '0');
INSERT INTO `noticias` VALUES ('62', '2', 'testeando-libreria-de-imagen', 'Testeando libreria de imagen', 'Array', 'Imagen y a quien rechucha le importa saco de wea', 'Imagen y a quien rechucha le importa saco de wea', 'silenoth', '2014-07-16', '0');
INSERT INTO `noticias` VALUES ('63', '5', 'testeando-libreria-de-imagen', 'Testeando libreria de imagen', '1enfeyzp96.jpg', '[color=#4e5658][size=3][font=Arvo, serif]Php es uno de los lenguajes mas usados en la programación de sitios web en el mundo por lo que hay muchas librerías que nos pueden echar una mano a la hora de desarrollar aplicaciones, en esta ocasión queremos mostrarles algunas, dejando las más obvias como curl o PDO por fuera ya que estas ya debes conocerlas.[/font][/size][/color]', '[color=#4e5658][size=3][font=Arvo, serif]Php es uno de los lenguajes mas usados en la programación de sitios web en el mundo por lo que hay muchas librerías que nos pueden echar una mano a la hora de desarrollar aplicaciones, en esta ocasión queremos mostrarles algunas, dejando las más obvias como curl o PDO por fuera ya que estas ya debes conocerlas.[/font][/size][/color]', 'silenoth', '2014-07-17', '0');
INSERT INTO `noticias` VALUES ('64', '2', 'testeando-libreria-de-imagen', 'Testeando libreria de imagen', '7a5tklzelh.jpg', 'Php es uno de los lenguajes mas usados en la programación de sitios web en el mundo por lo que hay muchas librerías que nos pueden echar una mano a la hora de desarrollar aplicaciones, en esta ocasión queremos mostrarles algunas, dejando las más obvias como curl o PDO por fuera ya que estas ya debes conocerlas.', 'Php es uno de los lenguajes mas usados en la programación de sitios web en el mundo por lo que hay muchas librerías que nos pueden echar una mano a la hora de desarrollar aplicaciones, en esta ocasión queremos mostrarles algunas, dejando las más obvias como curl o PDO por fuera ya que estas ya debes conocerlas.', 'silenoth', '2014-07-17', '0');
INSERT INTO `noticias` VALUES ('65', '1', 'testeando-libreria-de-imagen', 'Testeando libreria de imagen', 'etyws2irv2.jpg', 'addnewsokaddnewsokaddnewsokaddnewsokaddnewsokaddnewsok', 'addnewsokaddnewsokaddnewsokaddnewsokaddnewsokaddnewsokaddnewsokaddnewsokaddnewsokaddnewsokaddnewsokaddnewsok', 'silenoth', '2014-07-17', '0');
INSERT INTO `noticias` VALUES ('66', '5', 'may-15th--hearthstone-top-ranked-players-–-americas', 'May 15th - Hearthstone™ Top Ranked Players – Americas', 'sa12pypnlx.jpg', 'if(!empty($_SESSION[\'addnews\'])){\r\n        unset($_SESSION[\'addnews\']);\r\n    }', 'if(!empty($_SESSION[\'addnews\'])){\r\n        unset($_SESSION[\'addnews\']);\r\n    }', 'silenoth', '2014-07-17', '0');
INSERT INTO `noticias` VALUES ('67', '5', 'may-15th--hearthstone-top-ranked-players-–-americas', 'May 15th - Hearthstone™ Top Ranked Players – Americas', 'czvbuslrjc.jpg', 'if(!empty($_SESSION[\'addnews\'])){\r\n        unset($_SESSION[\'addnews\']);\r\n    }', 'if(!empty($_SESSION[\'addnews\'])){\r\n        unset($_SESSION[\'addnews\']);\r\n    }', 'silenoth', '2014-07-17', '0');
INSERT INTO `noticias` VALUES ('68', '2', '1234', '1234', 'he8mu9c2at.jpg', '$_SESSION[\'addnewsok\']$_SESSION[\'addnewsok\']$_SESSION[\'addnewsok\']$_SESSION[\'addnewsok\']$_SESSION[\'addnewsok\']', '$_SESSION[\'addnewsok\']$_SESSION[\'addnewsok\']$_SESSION[\'addnewsok\']$_SESSION[\'addnewsok\']$_SESSION[\'addnewsok\']$_SESSION[\'addnewsok\']', 'silenoth', '2014-07-17', '0');
INSERT INTO `noticias` VALUES ('69', '5', 'testeando-libreria-de-imagen', 'Testeando libreria de imagen', 'eojwsotcgo.jpg', 'addnewsokaddnewsokaddnewsokaddnewsokaddnewsokaddnewsok', 'addnewsokaddnewsokaddnewsokaddnewsokaddnewsokaddnewsokaddnewsokaddnewsokaddnewsokaddnewsokaddnewsokaddnewsokaddnewsokaddnewsok', 'silenoth', '2014-07-17', '0');
INSERT INTO `noticias` VALUES ('70', '1', 'testeando-libreria-de-imagen', 'Testeando libreria de imagen', 'iho4zayze7.jpg', 'addnewsokaddnewsokaddnewsokaddnewsokaddnewsokaddnewsokaddnewsok', 'addnewsokaddnewsokaddnewsokaddnewsokaddnewsokaddnewsokaddnewsok', 'silenoth', '2014-07-17', '0');

-- ----------------------------
-- Table structure for noticias_categorias
-- ----------------------------
DROP TABLE IF EXISTS `noticias_categorias`;
CREATE TABLE `noticias_categorias` (
  `cat_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cat_nombre` varchar(300) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of noticias_categorias
-- ----------------------------
INSERT INTO `noticias_categorias` VALUES ('1', 'General');
INSERT INTO `noticias_categorias` VALUES ('2', 'Noticias');
INSERT INTO `noticias_categorias` VALUES ('5', 'Eventos');

-- ----------------------------
-- Table structure for online
-- ----------------------------
DROP TABLE IF EXISTS `online`;
CREATE TABLE `online` (
  `online_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `online_grupo` int(11) DEFAULT NULL,
  `online_nick` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `online_nick_clean` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `online_ip` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `online_last` int(11) DEFAULT NULL,
  PRIMARY KEY (`online_id`)
) ENGINE=InnoDB AUTO_INCREMENT=396 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- ----------------------------
-- Records of online
-- ----------------------------
INSERT INTO `online` VALUES ('395', '1', 'silenoth', 'silenoth', '::1', '1405633034');

-- ----------------------------
-- Table structure for torneos
-- ----------------------------
DROP TABLE IF EXISTS `torneos`;
CREATE TABLE `torneos` (
  `tnmt_id` int(11) NOT NULL AUTO_INCREMENT,
  `tnmt_autor` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `tnmt_link` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `tnmt_titulo` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `tnmt_logo` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `tnmt_descripcion` text COLLATE utf8_spanish_ci,
  `tnmt_juego` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `tnmt_fecha` date DEFAULT NULL,
  `tnmt_ubicacion` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `tnmt_subida_replays` int(1) DEFAULT NULL,
  `tnmt_descarga_replays` int(1) DEFAULT NULL,
  `tnmt_ganadores` int(1) DEFAULT NULL,
  `tnmt_max_equipos` int(5) DEFAULT NULL,
  `tnmt_registrados_cont` int(5) DEFAULT NULL,
  `tnmt_confirmados_cont` int(5) DEFAULT NULL,
  `tnmt_modo` int(1) DEFAULT NULL,
  `tnmt_activo` int(1) DEFAULT NULL,
  `tnmt_terminado` int(1) DEFAULT NULL,
  PRIMARY KEY (`tnmt_id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- ----------------------------
-- Records of torneos
-- ----------------------------
INSERT INTO `torneos` VALUES ('17', 'silenoth', 'hearthstone-torneo-13', 'Hearthstone torneo 13', 'default.jpg', 'Reglas generales:\r\n1\r\n2\r\n3\r\n4', 'Hearthstone', '2014-06-15', 'Antofagasta', '0', '1', '3', '16', '20', '5', '0', '1', '0');
INSERT INTO `torneos` VALUES ('18', 'silenoth', 'torne2', 'torne2', 'default.jpg', 'asdasdas', 'Hearthstone', '2014-06-19', 'Antofagasta', '0', '0', '3', '128', '33', '0', '0', '1', '0');
INSERT INTO `torneos` VALUES ('19', 'silenoth', 'test-14', 'test 14', null, 'asdfghjmn mn mn mn mnmn mn mn mn mn mnmn mn mn mn ', 'Hearthstone', '2014-07-17', 'Antofagasta', '0', '0', '3', '2', '0', '0', '0', '1', '0');
INSERT INTO `torneos` VALUES ('20', 'silenoth', 'test-3', 'Test 3', 'default.jpg', 'KB2919442 es un prerrequisito para Windows 8.1 Update y debe instalarse antes de intentar la instalación de KB2919355', 'Hearthstone', '2014-07-17', 'Antofagasta', '0', '0', '3', '2', '0', '0', '0', '1', '0');
INSERT INTO `torneos` VALUES ('21', 'silenoth', 'as', 'as', 'default.jpg', 'KB2919442 es un prerrequisito para Windows 8.1 Update y debe instalarse antes de intentar la instalación de KB2919355', 'Hearthstone', '2014-07-17', 'Antofagasta', '2', '1', '3', '16', '1', '0', '0', '1', '0');
INSERT INTO `torneos` VALUES ('22', 'silenoth', 'test-14', 'test 14', 'default.jpg', 'asdas adsa das das d sad asd  ', 'Hearthstone', '2014-07-17', 'Antofagasta', '0', '0', '3', '2', '0', '0', '0', '1', '0');
INSERT INTO `torneos` VALUES ('23', 'silenoth', 'torneo-1313', 'Torneo 1313', 'ewgu3mgzv9.jpg', ' enctype=\"multipart/form-data\" enctype=\"multipart/form-data\" enctype=\"multipart/form-data\" enctype=\"multipart/form-data\" enctype=\"multipart/form-data\" enctype=\"multipart/form-data\" enctype=\"multipart/form-data\"', 'Hearthstone', '2014-07-17', 'Antofagasta', '0', '0', '3', '2', '0', '0', '0', '1', '0');
INSERT INTO `torneos` VALUES ('24', 'silenoth', 'test-11', 'test 11', 'ej527y4h6u.jpg', 'L\r\nk\r\nk\r\nk\r\nkk\r\nk\r\nk\r\nk\r\nk\r\nk\r\n', 'Hearthstone', '2014-07-17', 'Antofagasta', '0', '0', '3', '2', '0', '0', '0', '1', '0');

-- ----------------------------
-- Table structure for twitch
-- ----------------------------
DROP TABLE IF EXISTS `twitch`;
CREATE TABLE `twitch` (
  `twitch_id` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `twitch_name` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `twitch_token` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `twitch_scopes` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `twitch_code` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`twitch_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- ----------------------------
-- Records of twitch
-- ----------------------------

-- ----------------------------
-- Table structure for usuarios
-- ----------------------------
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `usuario_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `usuario_fb_id` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `usuario_grupo` int(10) DEFAULT NULL,
  `usuario_acceso` int(1) DEFAULT NULL,
  `usuario_hash` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `usuario_activo` int(1) DEFAULT NULL,
  `usuario_nick` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `usuario_nick_clean` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `usuario_pass` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `usuario_email` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `usuario_avatar` varchar(300) COLLATE utf8_spanish_ci DEFAULT NULL,
  `usuario_firma` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  `usuario_nombre` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `usuario_apellido` varchar(300) COLLATE utf8_spanish_ci DEFAULT NULL,
  `usuario_ciudad` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  `usuario_pais` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `usuario_sexo` int(1) NOT NULL,
  `usuario_fecha_nacimiento` date DEFAULT NULL,
  `usuario_fecha_ingreso` datetime NOT NULL,
  `usuario_ip` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `usuario_skype` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `usuario_gametag` varchar(35) COLLATE utf8_spanish_ci DEFAULT NULL,
  `usuario_reputacion` int(11) DEFAULT NULL,
  `usuario_nivel` int(11) DEFAULT NULL,
  `usuario_dinero` int(11) DEFAULT NULL,
  `usuario_facebook` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `usuario_twitter` varchar(35) COLLATE utf8_spanish_ci DEFAULT NULL,
  `usuario_twitch_id` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `usuario_twitch_user` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `usuario_twitch_token` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `usuario_twitch_code` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `usuario_twitch_scopes` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `usuario_ultima_pag` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `usuario_ultima_vis` datetime DEFAULT NULL,
  `usuario_ultimo_post` int(11) DEFAULT NULL,
  `usuario_ultima_adv` int(11) DEFAULT NULL,
  `usuario_sitio_web` varchar(300) COLLATE utf8_spanish_ci DEFAULT NULL,
  `usuario_alert` int(1) DEFAULT NULL,
  `usuario_torneo` int(11) DEFAULT NULL,
  `usuario_opciones` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`usuario_id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- ----------------------------
-- Records of usuarios
-- ----------------------------
INSERT INTO `usuarios` VALUES ('1', null, '1', '1', 'on0h7jl0e6tyg0blzwxzhc6m2p2040t7', '0', 'silenoth', 'silenoth', '13ea0514c9186bd1457c53ead28f84ef', 'satanichails@gmail.com', 'DimmuBorgir-InSorteDiaboli.jpg', '[b][i]video de youtube :) :) :) :) :) :)[/i][/b]\r\n[b][i][youtube]nTkSBp_IHzo[/youtube]\r\n[/i][/b]', 'Miguel', 'Pino', 'Antofagasta', 'Chile', '1', '1983-05-07', '2014-01-14 11:25:26', '::1', 'Darkn666s', 'silenoth#1632', '300', '72', '20000', 'https://www.facebook.com/Silenoth', 'lolchile', '12682827', 'silenoth', 'bjkg28xisz2nsofv49r9ysjf95vor91', '1dzl2xqbj60mwosp4ju5k4zpiz9ghf4', 'user_read;user_follows_edit', null, '2014-07-17 16:05:21', null, null, 'http://lolchile.com', '1', '5', '1;1;1;;1');
INSERT INTO `usuarios` VALUES ('26', null, '2', '7', 'evkoz9vayaokjzctwvpvu7b529r97ggm', '0', 'dark', 'dark', '13ea0514c9186bd1457c53ead28f84ef', 'darkinn_dream@hotmail.com', 'no-avatar.jpg', '[size=7]&lt;3[img]http://localhost/ladder/images/user/no-avatar.jpg[/img][url=http://localhost/ladder/perfil/dark#]C[color=#33ffff]omic Sans MS[/color][/url]\r\n[/size]\r\n[size=7][font=Arial Black]http://localhost/ladder/images/user/no-[color=#9933cc]avatar.j[/color][color=#ffffff]pg[/color][/font][/size]', 'karen', '', null, null, '0', null, '2014-01-14 13:45:42', '::1', '', 'Dark', '0', '0', null, '', '', null, null, null, null, null, null, '2014-07-09 02:59:07', null, null, '', '1', null, '1;1;1;1;1');
INSERT INTO `usuarios` VALUES ('31', null, '3', '7', 'gc6h75gqv15782aaxsvfuinuwcs5ugun', '0', 'solo yo', 'solo-yo', '13ea0514c9186bd1457c53ead28f84ef', 'eds.sword@live.clll', 'no-avatar.jpg', null, 'Miguel', '', null, null, '0', null, '2014-01-15 16:18:59', '::1', null, 'sireno', '0', '0', null, null, null, null, null, null, null, null, null, '2014-01-27 17:31:20', null, null, null, null, null, '0;0;0;0;0');
INSERT INTO `usuarios` VALUES ('32', null, '3', '7', '67rvnyxywgjjbif9dnl1tejiod62ihos', '0', 'este nick es separado y con ñ y weas :v', 'este-nick-es-separado-y-con-n-y-weas-v', '13ea0514c9186bd1457c53ead28f84ef', 'eds.sword@live.cl', 'no-avatar.jpg', null, 'Miguel', '', null, null, '0', null, '2014-01-15 16:32:11', '::1', null, 'asdfg', '0', '0', null, null, null, null, null, null, null, null, null, '2014-01-06 04:14:16', null, null, null, null, null, '0;0;0;0;0');
INSERT INTO `usuarios` VALUES ('40', null, '3', '7', 'b2me6cgsc8m47h2ypqomerslozmrpbja', '0', 'eñes', 'enes', '13ea0514c9186bd1457c53ead28f84ef', 'eness@gmail.com', 'no-avatar.jpg', null, 'Miguel', null, null, null, '0', null, '2014-02-14 20:09:32', '::1', null, 'satanic666', '0', '0', null, null, null, null, null, null, null, null, null, '2014-06-29 05:08:02', null, null, null, null, null, '0;0;0;0;0');

-- ----------------------------
-- Table structure for usuario_mensajes
-- ----------------------------
DROP TABLE IF EXISTS `usuario_mensajes`;
CREATE TABLE `usuario_mensajes` (
  `msj_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `msj_id_usuario_env` int(11) DEFAULT NULL,
  `msj_id_usuario_res` int(11) NOT NULL,
  `msj_prioridad` int(1) DEFAULT NULL,
  `msj_icono` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `msj_titulo` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `msj_mensaje` text COLLATE utf8_spanish_ci,
  `msj_fecha` date DEFAULT NULL,
  `msj_estado` int(1) DEFAULT NULL,
  PRIMARY KEY (`msj_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- ----------------------------
-- Records of usuario_mensajes
-- ----------------------------
INSERT INTO `usuario_mensajes` VALUES ('3', '0', '1', '1', 'warning', 'Confirmar participacion', 'Hola no olvides confirmar participacion', '2014-06-29', '0');
INSERT INTO `usuario_mensajes` VALUES ('4', '0', '0', '1', 'warning', 'Confirmar participacion', 'Hola no olvides confirmar participacion', '2014-06-29', '0');
INSERT INTO `usuario_mensajes` VALUES ('5', '0', '26', '1', 'warning', 'Confirmar participacion', 'Hola no olvides confirmar participacion', '2014-06-29', '0');
INSERT INTO `usuario_mensajes` VALUES ('6', '0', '1', '1', 'warning', 'Confirmar participacion', 'Hola no olvides confirmar participacion', '2014-07-17', '0');

-- ----------------------------
-- Table structure for usuario_torneo
-- ----------------------------
DROP TABLE IF EXISTS `usuario_torneo`;
CREATE TABLE `usuario_torneo` (
  `ut_id_torneo` int(11) NOT NULL,
  `ut_id_usuario` int(11) NOT NULL,
  `ut_id_actual` int(3) DEFAULT NULL,
  `ut_f128` int(3) DEFAULT NULL,
  `ut_f64` int(2) DEFAULT NULL,
  `ut_f32` int(2) DEFAULT NULL,
  `ut_f16` int(2) DEFAULT NULL,
  `ut_f8` int(1) DEFAULT NULL,
  `ut_f4` int(1) DEFAULT NULL,
  `ut_f2` int(1) DEFAULT NULL,
  `ut_f1` int(1) DEFAULT NULL,
  `ut_r128` int(2) DEFAULT NULL,
  `ut_r64` int(2) DEFAULT NULL,
  `ut_r32` int(2) DEFAULT NULL,
  `ut_r16` int(2) DEFAULT NULL,
  `ut_r8` int(2) DEFAULT NULL,
  `ut_r4` int(2) DEFAULT NULL,
  `ut_r2` int(2) DEFAULT NULL,
  `ut_r1` int(2) DEFAULT NULL,
  `ut_premio` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`ut_id_torneo`,`ut_id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- ----------------------------
-- Records of usuario_torneo
-- ----------------------------
INSERT INTO `usuario_torneo` VALUES ('17', '0', '16', null, null, null, '7', null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `usuario_torneo` VALUES ('17', '1', null, null, null, null, '5', null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `usuario_torneo` VALUES ('17', '26', '16', null, null, null, '4', null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `usuario_torneo` VALUES ('18', '1', '128', '120', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `usuario_torneo` VALUES ('21', '1', '16', null, null, null, '15', null, null, null, null, null, null, null, null, null, null, null, null, null);
