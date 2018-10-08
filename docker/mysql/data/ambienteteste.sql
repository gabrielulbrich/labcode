-- Adminer 4.6.3 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

USE `ambienteteste`;

DROP TABLE IF EXISTS `ci_sessions`;
CREATE TABLE `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('0491dab6c3a5b4144598398e83fa0fdb74771347',	'127.0.0.1',	1538160050,	'__ci_last_regenerate|i:1538159792;user_id|i:1;username|s:7:\"Gabriel\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;erro|a:1:{s:3:\"msg\";s:36:\"<p>The Email field is required.</p>\n\";}__ci_vars|a:1:{s:4:\"erro\";s:3:\"old\";}'),
('147b843fb43ce67342d16fab203be317ebaaaf79',	'127.0.0.1',	1538402315,	'__ci_last_regenerate|i:1538402283;user_id|i:1;username|s:7:\"Gabriel\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),
('200597d83d5ff545037adff6e1175a4dab4c7259',	'127.0.0.1',	1538400690,	'__ci_last_regenerate|i:1538400402;user_id|i:1;username|s:7:\"Gabriel\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),
('2722effaf9546dd8712dae7611f0aa6c621da0dd',	'127.0.0.1',	1538157854,	'__ci_last_regenerate|i:1538157554;user_id|i:1;username|s:7:\"Gabriel\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),
('2bd6fcfbf11007730ac9f214bfa4e7759fdda2d0',	'127.0.0.1',	1538158112,	'__ci_last_regenerate|i:1538157855;user_id|i:1;username|s:7:\"Gabriel\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),
('3288b9800809875b201291cf3178ca89271e8f09',	'127.0.0.1',	1538157174,	'__ci_last_regenerate|i:1538156909;user_id|i:1;username|s:7:\"Gabriel\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),
('36b9d177ca77aafdc6f9b9df84fe73abdd77028b',	'127.0.0.1',	1538159080,	'__ci_last_regenerate|i:1538158790;user_id|i:1;username|s:7:\"Gabriel\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),
('3f76554ff0e079c80fae6439e8cb6a2d9be1d53d',	'127.0.0.1',	1538159791,	'__ci_last_regenerate|i:1538159491;user_id|i:1;username|s:7:\"Gabriel\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),
('41bdc378017b7592b80d27ebce4c75d894708d64',	'127.0.0.1',	1538162295,	'__ci_last_regenerate|i:1538162062;user_id|i:1;username|s:7:\"Gabriel\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),
('59df77a4314b568e524e60abf7bfb769ff120085',	'127.0.0.1',	1538404223,	'__ci_last_regenerate|i:1538403948;user_id|i:1;username|s:7:\"Gabriel\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),
('5bf6642140989d829d6115d2e5a0dedd6027c676',	'127.0.0.1',	1538413990,	'__ci_last_regenerate|i:1538413985;'),
('7078f213d406cc9a839b87f27d381bf44d2a1cc1',	'127.0.0.1',	1538164376,	'__ci_last_regenerate|i:1538164376;user_id|i:1;username|s:7:\"Gabriel\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),
('7195375e62e7eaf9f6700922e8a7d9fca0a5ef60',	'127.0.0.1',	1538159452,	'__ci_last_regenerate|i:1538159172;user_id|i:1;username|s:7:\"Gabriel\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;erro|a:1:{s:3:\"msg\";s:36:\"<p>The Email field is required.</p>\n\";}__ci_vars|a:1:{s:4:\"erro\";s:3:\"old\";}'),
('75af0d2d4efed5f034d449e3c5e065ee0d223d4d',	'127.0.0.1',	1538162608,	'__ci_last_regenerate|i:1538162392;user_id|i:1;username|s:7:\"Gabriel\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),
('774064547c7256594f6752196afe23e3cc7123e9',	'127.0.0.1',	1538400316,	'__ci_last_regenerate|i:1538400050;user_id|i:1;username|s:7:\"Gabriel\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),
('8667d6fb919a0678365a274a28989aa3c7d343a3',	'127.0.0.1',	1538160350,	'__ci_last_regenerate|i:1538160103;user_id|i:1;username|s:7:\"Gabriel\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;erro|a:1:{s:3:\"msg\";s:36:\"<p>The Email field is required.</p>\n\";}__ci_vars|a:1:{s:4:\"erro\";s:3:\"old\";}'),
('8720561633cde690c6745911dcf4d2bd9da09244',	'127.0.0.1',	1538160607,	'__ci_last_regenerate|i:1538160448;user_id|i:1;username|s:7:\"Gabriel\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),
('91494f8efaa2efda15d1c3f8e584f9f5a348aade',	'127.0.0.1',	1538158608,	'__ci_last_regenerate|i:1538158384;user_id|i:1;username|s:7:\"Gabriel\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),
('96a75e8e6218462097e2625731853d8e6293ac20',	'127.0.0.1',	1538404421,	'__ci_last_regenerate|i:1538404421;user_id|i:1;username|s:7:\"Gabriel\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),
('aea2c786b723936482d2e98ac3e3bbaede7a09af',	'127.0.0.1',	1538399936,	'__ci_last_regenerate|i:1538399719;'),
('af2e2ece737579beae0ce395bee3049bc8b25d49',	'127.0.0.1',	1538157498,	'__ci_last_regenerate|i:1538157225;user_id|i:1;username|s:7:\"Gabriel\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),
('b19b3a943bc04078da32221cf21847bbfcb28419',	'127.0.0.1',	1538403484,	'__ci_last_regenerate|i:1538403282;user_id|i:1;username|s:7:\"Gabriel\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),
('b7c13b2fe507101839d10bbe8806db7f7b3d9078',	'127.0.0.1',	1538161876,	'__ci_last_regenerate|i:1538161713;user_id|i:1;username|s:7:\"Gabriel\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),
('be7c302bc21fff79c1b866930bec3d47a5b9a748',	'127.0.0.1',	1538399719,	'__ci_last_regenerate|i:1538399719;'),
('c59fa029a8adbc83059792c0be00738e2054d089',	'127.0.0.1',	1538161192,	'__ci_last_regenerate|i:1538161192;user_id|i:1;username|s:7:\"Gabriel\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),
('cc423c95551fdb7c3fd03acd2a06450a4f2d0b40',	'127.0.0.1',	1538160987,	'__ci_last_regenerate|i:1538160807;user_id|i:1;username|s:7:\"Gabriel\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),
('d7026588683cb031707db723475569ba3b450434',	'127.0.0.1',	1538400888,	'__ci_last_regenerate|i:1538400713;user_id|i:1;username|s:7:\"Gabriel\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),
('d792b75d43d1b143d1c54b8f970c015d58198c68',	'127.0.0.1',	1538163761,	'__ci_last_regenerate|i:1538163612;user_id|i:1;username|s:7:\"Gabriel\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),
('d8f5eb1d7f7d0236fe236cfb390e71d28cbf2476',	'127.0.0.1',	1538163008,	'__ci_last_regenerate|i:1538162774;user_id|i:1;username|s:7:\"Gabriel\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),
('df2450618e11489425826538c1dd7113a0e8ba43',	'127.0.0.1',	1538401282,	'__ci_last_regenerate|i:1538401246;user_id|i:1;username|s:7:\"Gabriel\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;');

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE `cliente` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL DEFAULT '',
  `sexo` varchar(255) NOT NULL DEFAULT '',
  `cpf` varchar(11) NOT NULL DEFAULT '',
  `email` varchar(100) NOT NULL DEFAULT '',
  `endereco` varchar(100) NOT NULL DEFAULT '',
  `numero` varchar(5) NOT NULL DEFAULT '',
  `referencia` varchar(100) DEFAULT NULL,
  `cidade` varchar(100) NOT NULL DEFAULT '',
  `estado` varchar(100) NOT NULL DEFAULT '',
  `cep` varchar(15) NOT NULL DEFAULT '',
  `avatar` varchar(255) DEFAULT 'default.jpg',
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `is_deleted` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `form`;
CREATE TABLE `form` (
  `idform` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  `senha` varchar(45) DEFAULT NULL,
  `email` varchar(45) NOT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`idform`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `form` (`idform`, `nome`, `senha`, `email`) VALUES
(1,	'Teste',	'gabriel',	'gabriel.u10@hotmail.com'),
(2,	'Gabriel',	'',	'a'),
(3,	'Gabs',	'Gabsss',	'banco@banco.teste'),
(4,	'Jose',	'ttt',	'gabriel.ulbrich@mirumagency.com'),
(5,	'Joao',	'jjjj',	'gabriel@gabriel.com'),
(6,	'Maria',	'aaa',	'a'),
(7,	'Pedro',	'*&(ˆˆ*(',	'gabriel.u10@hotmail.com'),
(8,	'marli',	'214421421',	'gaga'),
(9,	'',	'',	'teste@teste.com'),
(10,	'aaa',	'bbbb',	'gabriel_ulbrich@outlook.com');

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL DEFAULT '',
  `email` varchar(255) NOT NULL DEFAULT '',
  `password` varchar(255) NOT NULL DEFAULT '',
  `avatar` varchar(255) DEFAULT 'default.jpg',
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `is_admin` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_confirmed` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_deleted` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `users` (`id`, `username`, `email`, `password`, `avatar`, `created_at`, `updated_at`, `is_admin`, `is_confirmed`, `is_deleted`) VALUES
(1,	'Gabriel',	'gabriel.ulbrich@mirumagency.com',	'$2y$10$WDgXumP4FGJIDCX8pHbReOT760bzkPey0rI19uOZY9Bl1T7ntp4Q6',	'default.jpg',	'2018-09-27 20:04:42',	NULL,	0,	0,	0);

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`) VALUES
(1,	'Gabriel Ulbrich de Souza',	'gabriel.ulbrih@mirumagency.com',	'123');

-- 2018-10-01 17:18:05
