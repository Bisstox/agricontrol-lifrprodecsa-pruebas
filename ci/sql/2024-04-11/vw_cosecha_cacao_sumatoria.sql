-- Adminer 4.8.1 MySQL 8.0.31 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP VIEW IF EXISTS `vw_cosecha_cacao_sumatoria`;
CREATE TABLE `vw_cosecha_cacao_sumatoria` (`finca` int, `supervisor` int, `fecha` varchar(10), `hora` varchar(5), `tarea` int, `subtarea` int, `trabajador` int, `lote` int, `modulo` int, `total_cosecha` decimal(23,2));


DROP TABLE IF EXISTS `vw_cosecha_cacao_sumatoria`;
CREATE ALGORITHM=UNDEFINED DEFINER=`admin`@`%` SQL SECURITY DEFINER VIEW `vw_cosecha_cacao_sumatoria` AS select `z_cosecha_cacao`.`finca` AS `finca`,`z_cosecha_cacao`.`supervisor` AS `supervisor`,`z_cosecha_cacao`.`fecha` AS `fecha`,`z_cosecha_cacao`.`hora` AS `hora`,`z_cosecha_cacao`.`tarea` AS `tarea`,`z_cosecha_cacao`.`subtarea` AS `subtarea`,`z_cosecha_cacao`.`trabajador` AS `trabajador`,`z_cosecha_cacao`.`lote` AS `lote`,`z_cosecha_cacao`.`modulo` AS `modulo`,((((((((((((((`z_cosecha_cacao`.`saco1` + `z_cosecha_cacao`.`saco2`) + `z_cosecha_cacao`.`saco3`) + `z_cosecha_cacao`.`saco4`) + `z_cosecha_cacao`.`saco5`) + `z_cosecha_cacao`.`saco6`) + `z_cosecha_cacao`.`saco7`) + `z_cosecha_cacao`.`saco8`) + `z_cosecha_cacao`.`saco9`) + `z_cosecha_cacao`.`saco10`) + `z_cosecha_cacao`.`saco11`) + `z_cosecha_cacao`.`saco12`) + `z_cosecha_cacao`.`saco13`) + `z_cosecha_cacao`.`saco14`) + `z_cosecha_cacao`.`saco15`) AS `total_cosecha` from `z_cosecha_cacao` limit 50;

-- 2024-04-12 04:15:56
