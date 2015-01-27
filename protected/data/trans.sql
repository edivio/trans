-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Янв 27 2015 г., 23:30
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `trans`
--

-- --------------------------------------------------------

--
-- Структура таблицы `car`
--

CREATE TABLE IF NOT EXISTS `car` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `car_type` varchar(255) DEFAULT NULL,
  `places` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Дамп данных таблицы `car`
--

INSERT INTO `car` (`id`, `car_type`, `places`) VALUES
(1, 'Mercedes-Benz', '28'),
(2, 'Opel', '18'),
(3, 'Volvo', '56'),
(4, 'ПАЗ', '20'),
(5, 'Daewoo Lestar', '32'),
(6, 'Mercedes-Benz', '15'),
(7, 'Opel Combo', '4'),
(8, 'Sprinter', '26'),
(9, 'Volvo', '42');

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `page_id` int(8) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `content` text NOT NULL,
  `status` int(8) NOT NULL,
  PRIMARY KEY (`page_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `pages`
--

INSERT INTO `pages` (`page_id`, `title`, `keywords`, `description`, `content`, `status`) VALUES
(1, 'Водители', 'водители', 'Водители', '<p style="margin: 0px 0px 19px; padding: 0px; outline: 0px; border: 0px; vertical-align: baseline; text-align: justify;">\r\n	<font face="Verdana, Arial, Tahoma"><span style="font-size: 15px; line-height: 22px; background-color: rgb(255, 255, 255);">Издавна у человека было две мечты &ndash; стремление к полету и быстрому перемещению по поверхности земли. Первая была связана со стремлением к познанию, а вторая позволила бы сократить время, которое столь быстротечно. Спустя века обе мечты были материализованы, и первый самобеглый экипаж стал поистине тем самым изобретением, которое изменило мир до неузнаваемости.</span></font></p>\r\n<p style="margin: 0px 0px 19px; padding: 0px; outline: 0px; border: 0px; vertical-align: baseline; text-align: center;">\r\n	<font face="Verdana, Arial, Tahoma"><span style="font-size: 15px; line-height: 22px; background-color: rgb(255, 255, 255);"><img alt="" height="226" src="/upload/userfiles/images/b98c3826774e59abda832afc4a3f9c05.jpg" width="450" /></span></font></p>\r\n<p style="margin: 0px 0px 19px; padding: 0px; outline: 0px; border: 0px; vertical-align: baseline; text-align: justify;">\r\n	&nbsp;</p>\r\n<p style="margin: 0px 0px 19px; padding: 0px; outline: 0px; border: 0px; vertical-align: baseline; text-align: justify;">\r\n	В наши дни автомобиль давно перестал быть лишь транспортным средством, созданным из металла, резины, пластика и стекла. Он превратился в настоящее продолжение человека, наделив его новыми способностями, дополнив иными органами осязания и безгранично расширив возможности. В свою же очередь в процессе своего развития бездушная машина также превратилась в нечто большее, обретая черты&hellip; самого человека и, возможно, впитав в себя некую душу.</p>\r\n<p style="margin: 0px 0px 19px; padding: 0px; outline: 0px; border: 0px; vertical-align: baseline; text-align: center;">\r\n	<img alt="" height="356" src="/upload/userfiles/images/e47bb7d6ed87ebfc5e92a64ec9550385.jpg" width="450" /></p>\r\n<p style="margin: 0px 0px 19px; padding: 0px; outline: 0px; border: 0px; vertical-align: baseline; text-align: justify;">\r\n	Первый автомобиль был создан Карлом Бенцем и это известно каждому, знакомому с историей автомобильной промышленности. Однако поистине массовым &laquo;безлошадный&raquo; экипаж стал благодаря гениальному промышленнику Генри Форду, который сумел выпустить с первого в мире конвейера модель &laquo;Т&raquo; &mdash; автомобиль, первый отправившийся на покорение планеты. Именно тогда человек оценил, насколько удобен автомобиль, и чем он может стать для него.</p>\r\n<p style="margin: 0px 0px 19px; padding: 0px; outline: 0px; border: 0px; vertical-align: baseline; text-align: justify;">\r\n	Конечно, первые автомобили были весьма несовершенны. Управление транспортным средством требовало не только умения, но и недюжинных физических усилий, ведь в те годы мир не знал автоматических трансмиссий, усилителей рулевого управления, современных пневмоподвесок и прочих достижений прогресса, без которых современные автолюбители не мыслят своего существования. Однако первые авто были надежны, неприхотливы и выполняли свою главную миссию &ndash; позволяли быстро и вовремя оказаться в нужное время и в нужном месте пространства.</p>\r\n<p style="margin: 0px 0px 19px; padding: 0px; outline: 0px; border: 0px; vertical-align: baseline; text-align: justify;">\r\n	Пожалуй, подлинный расцвет автомобилестроение пережило в 30-е годы прошлого столетия. Огромное количество марок, удивительные технические решения и открытия &ndash; все это заложило основу для будущей автомобилизации планеты. Удивительные формы, небывалое качество отделки, натуральные материалы &ndash; все это слилось в единый сплав, из которого создавались автомобили той поры.</p>\r\n<p style="margin: 0px 0px 19px; padding: 0px; outline: 0px; border: 0px; vertical-align: baseline; text-align: justify;">\r\n	Даже последовавшие годы Второй мировой войны не уничтожили тот прекрасный задел, который был создан конструкторами на заре века. Быть может, именно поэтому уже с пятидесятых годов начался своего рода Ренессанс автомобилестроения, когда десятки компаний по миру создали удивительные шедевры автопрома. Технический талант Фердинанда Порше, Энцо Феррари и других великих конструкторов создал потенциал развития на многие десятилетия вперед, превратив утилитарные авто в истинные произведения технического и дизайнерского гения.</p>\r\n', 1),
(2, 'Расписание', 'Расписание', 'Расписание', '<p style="margin: 0px 0px 19px; padding: 0px; outline: 0px; border: 0px; vertical-align: baseline; text-align: justify;">\r\n	<img align="left" alt="" height="126" hspace="10" src="/upload/userfiles/images/b98c3826774e59abda832afc4a3f9c05.jpg" style="float:left; margin-right:10px;" vspace="5" width="250" /><font face="Verdana, Arial, Tahoma"><span style="font-size: 15px; line-height: 22px; background-color: rgb(255, 255, 255);">Издавна у человека было две мечты &ndash; стремление к полету и быстрому перемещению по поверхности земли. Первая была связана со стремлением к познанию, а вторая позволила бы сократить время, которое столь быстротечно. Спустя века обе мечты были материализованы, и первый самобеглый экипаж стал поистине тем самым изобретением, которое изменило мир до неузнаваемости.</span></font></p>\r\n', 1),
(3, 'Автобусы', 'Автобусы', 'Автобусы', '<p style="margin: 0px 0px 19px; padding: 0px; outline: 0px; border: 0px; vertical-align: baseline; text-align: justify;">\r\n	<font face="Verdana, Arial, Tahoma"><span style="font-size: 15px; line-height: 22px; background-color: rgb(255, 255, 255);">Издавна у человека было две мечты &ndash; стремление к полету и быстрому перемещению по поверхности земли. Первая была связана со стремлением к познанию, а вторая позволила бы сократить время, которое столь быстротечно. Спустя века обе мечты были материализованы, и первый самобеглый экипаж стал поистине тем самым изобретением, которое изменило мир до неузнаваемости.</span></font></p>\r\n<p style="margin: 0px 0px 19px; padding: 0px; outline: 0px; border: 0px; vertical-align: baseline; text-align: center;">\r\n	<font face="Verdana, Arial, Tahoma"><span style="font-size: 15px; line-height: 22px; background-color: rgb(255, 255, 255);"><img alt="" height="226" src="/upload/userfiles/images/b98c3826774e59abda832afc4a3f9c05.jpg" width="450" /></span></font></p>\r\n<p style="margin: 0px 0px 19px; padding: 0px; outline: 0px; border: 0px; vertical-align: baseline; text-align: justify;">\r\n	&nbsp;</p>\r\n<p style="margin: 0px 0px 19px; padding: 0px; outline: 0px; border: 0px; vertical-align: baseline; text-align: justify;">\r\n	В наши дни автомобиль давно перестал быть лишь транспортным средством, созданным из металла, резины, пластика и стекла. Он превратился в настоящее продолжение человека, наделив его новыми способностями, дополнив иными органами осязания и безгранично расширив возможности. В свою же очередь в процессе своего развития бездушная машина также превратилась в нечто большее, обретая черты&hellip; самого человека и, возможно, впитав в себя некую душу.</p>\r\n<p style="margin: 0px 0px 19px; padding: 0px; outline: 0px; border: 0px; vertical-align: baseline; text-align: center;">\r\n	<img alt="" height="356" src="/upload/userfiles/images/e47bb7d6ed87ebfc5e92a64ec9550385.jpg" width="450" /></p>\r\n<p style="margin: 0px 0px 19px; padding: 0px; outline: 0px; border: 0px; vertical-align: baseline; text-align: justify;">\r\n	Первый автомобиль был создан Карлом Бенцем и это известно каждому, знакомому с историей автомобильной промышленности. Однако поистине массовым &laquo;безлошадный&raquo; экипаж стал благодаря гениальному промышленнику Генри Форду, который сумел выпустить с первого в мире конвейера модель &laquo;Т&raquo; &mdash; автомобиль, первый отправившийся на покорение планеты. Именно тогда человек оценил, насколько удобен автомобиль, и чем он может стать для него.</p>\r\n<p style="margin: 0px 0px 19px; padding: 0px; outline: 0px; border: 0px; vertical-align: baseline; text-align: justify;">\r\n	Конечно, первые автомобили были весьма несовершенны. Управление транспортным средством требовало не только умения, но и недюжинных физических усилий, ведь в те годы мир не знал автоматических трансмиссий, усилителей рулевого управления, современных пневмоподвесок и прочих достижений прогресса, без которых современные автолюбители не мыслят своего существования. Однако первые авто были надежны, неприхотливы и выполняли свою главную миссию &ndash; позволяли быстро и вовремя оказаться в нужное время и в нужном месте пространства.</p>\r\n<p style="margin: 0px 0px 19px; padding: 0px; outline: 0px; border: 0px; vertical-align: baseline; text-align: justify;">\r\n	Пожалуй, подлинный расцвет автомобилестроение пережило в 30-е годы прошлого столетия. Огромное количество марок, удивительные технические решения и открытия &ndash; все это заложило основу для будущей автомобилизации планеты. Удивительные формы, небывалое качество отделки, натуральные материалы &ndash; все это слилось в единый сплав, из которого создавались автомобили той поры.</p>\r\n<p style="margin: 0px 0px 19px; padding: 0px; outline: 0px; border: 0px; vertical-align: baseline; text-align: justify;">\r\n	Даже последовавшие годы Второй мировой войны не уничтожили тот прекрасный задел, который был создан конструкторами на заре века. Быть может, именно поэтому уже с пятидесятых годов начался своего рода Ренессанс автомобилестроения, когда десятки компаний по миру создали удивительные шедевры автопрома. Технический талант Фердинанда Порше, Энцо Феррари и других великих конструкторов создал потенциал развития на многие десятилетия вперед, превратив утилитарные авто в истинные произведения технического и дизайнерского гения.</p>\r\n', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `route`
--

CREATE TABLE IF NOT EXISTS `route` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `st_dispatch` varchar(255) DEFAULT NULL,
  `st_arrival` varchar(255) DEFAULT NULL,
  `time_dispatch` varchar(255) DEFAULT NULL,
  `date_dispatch` varchar(255) DEFAULT NULL,
  `hold` varchar(255) DEFAULT NULL,
  `time_arrival` varchar(255) DEFAULT NULL,
  `places` varchar(255) DEFAULT NULL,
  `car_id` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Дамп данных таблицы `route`
--

INSERT INTO `route` (`id`, `st_dispatch`, `st_arrival`, `time_dispatch`, `date_dispatch`, `hold`, `time_arrival`, `places`, `car_id`) VALUES
(2, '2', '3', '15-00 ', '12.01.2015', '25-00', '16-00 13.01', '12 500 руб', '6'),
(3, '2', '1', '15-00', '12.01.2015', '21-30', '12-30 13.01', '12 500 руб', '4'),
(4, '3', '1', '17-00', '12.01.2015', '23-30', '16-30 13.01', '12 500 руб', '2'),
(5, '3', '1', '18-00', '12.01.2015', '23-00', '17-00 13.01', '12 500 руб', '5'),
(6, '3', '2', '19-00', '12.01.2015', '21-30', '16-30 13.01', '12 500 руб', '3'),
(7, '4', '2', '20-00', '12.01.2015', '23-30', '19-30 13.01', '12 500 руб', '7'),
(8, '3', '4', '10-00', '12.01.2015', '09-30', '19-30 12.01', '5 000 руб', '2'),
(9, '5', '6', '12-30', '12.01.2015', '1.30', '14-00 12.01', '45 руб.', '8'),
(10, '5', '6', '12-30', '13.01.2015', '1.30', '14-00 12.01', '45 руб.', '8'),
(11, '2', '3', '15-00 ', '13.01.2015', '25-00', '16-00 14.01', '12 500 руб', '6'),
(12, '3', '1', '17-00', '13.01.2015', '23-30', '16-30 14.01', '12 500 руб', '2'),
(13, '3', '1', '18-00', '13.01.2015', '23-00', '17-00 14.01', '12 500 руб', '5'),
(14, '3', '2', '19-00', '13.01.2015', '21-30', '16-30 14.01', '12 500 руб', '3'),
(15, '4', '2', '20-00', '13.01.2015', '23-30', '19-30 14.01', '12 500 руб', '7'),
(16, '3', '4', '10-00', '13.01.2015', '09-30', '19-30 13.01', '5 000 руб', '2');

-- --------------------------------------------------------

--
-- Структура таблицы `station`
--

CREATE TABLE IF NOT EXISTS `station` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `st_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Дамп данных таблицы `station`
--

INSERT INTO `station` (`id`, `st_name`) VALUES
(1, 'Ростов-на-Дону'),
(2, 'Москва'),
(3, 'Самара'),
(4, 'Tirnova'),
(5, 'Popeasca'),
(6, 'Chisinau');

-- --------------------------------------------------------

--
-- Структура таблицы `tbl_profiles`
--

CREATE TABLE IF NOT EXISTS `tbl_profiles` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `lastname` varchar(50) NOT NULL DEFAULT '',
  `firstname` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `tbl_profiles`
--

INSERT INTO `tbl_profiles` (`user_id`, `lastname`, `firstname`) VALUES
(1, 'Admin', 'Administrator'),
(2, 'Demo', 'Demo'),
(3, 'Eremei', 'Edi');

-- --------------------------------------------------------

--
-- Структура таблицы `tbl_profiles_fields`
--

CREATE TABLE IF NOT EXISTS `tbl_profiles_fields` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `varname` varchar(50) NOT NULL,
  `title` varchar(255) NOT NULL,
  `field_type` varchar(50) NOT NULL,
  `field_size` varchar(15) NOT NULL DEFAULT '0',
  `field_size_min` varchar(15) NOT NULL DEFAULT '0',
  `required` int(1) NOT NULL DEFAULT '0',
  `match` varchar(255) NOT NULL DEFAULT '',
  `range` varchar(255) NOT NULL DEFAULT '',
  `error_message` varchar(255) NOT NULL DEFAULT '',
  `other_validator` varchar(5000) NOT NULL DEFAULT '',
  `default` varchar(255) NOT NULL DEFAULT '',
  `widget` varchar(255) NOT NULL DEFAULT '',
  `widgetparams` varchar(5000) NOT NULL DEFAULT '',
  `position` int(3) NOT NULL DEFAULT '0',
  `visible` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `varname` (`varname`,`widget`,`visible`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `tbl_profiles_fields`
--

INSERT INTO `tbl_profiles_fields` (`id`, `varname`, `title`, `field_type`, `field_size`, `field_size_min`, `required`, `match`, `range`, `error_message`, `other_validator`, `default`, `widget`, `widgetparams`, `position`, `visible`) VALUES
(1, 'lastname', 'Last Name', 'VARCHAR', '50', '3', 1, '', '', 'Incorrect Last Name (length between 3 and 50 characters).', '', '', '', '', 1, 3),
(2, 'firstname', 'First Name', 'VARCHAR', '50', '3', 1, '', '', 'Incorrect First Name (length between 3 and 50 characters).', '', '', '', '', 0, 3);

-- --------------------------------------------------------

--
-- Структура таблицы `tbl_users`
--

CREATE TABLE IF NOT EXISTS `tbl_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `activkey` varchar(128) NOT NULL DEFAULT '',
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastvisit_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `superuser` int(1) NOT NULL DEFAULT '0',
  `status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  KEY `status` (`status`),
  KEY `superuser` (`superuser`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `username`, `password`, `email`, `activkey`, `create_at`, `lastvisit_at`, `superuser`, `status`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'webmaster@example.com', 'cda244244e6687f2dcaa6cf44e8b4748', '2015-01-05 19:37:42', '2015-01-27 21:27:02', 1, 1),
(2, 'demo', '3f294c847694e21764856124deb5e7d1', 'demo@example.com', '31fc51ac6ef84932fc1dbbedf6df3cab', '2015-01-05 19:37:42', '2015-01-05 22:32:39', 0, 1),
(3, 'edivio', '3f294c847694e21764856124deb5e7d1', 'edivio@yandex.ru', 'b47c0b6bb6495a03eaefeb12ae993165', '2015-01-06 11:23:44', '2015-01-06 13:29:19', 0, 1);

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `tbl_profiles`
--
ALTER TABLE `tbl_profiles`
  ADD CONSTRAINT `user_profile_id` FOREIGN KEY (`user_id`) REFERENCES `tbl_users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
