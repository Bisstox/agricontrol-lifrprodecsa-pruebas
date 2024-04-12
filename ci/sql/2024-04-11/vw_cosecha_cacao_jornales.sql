-- Adminer 4.8.1 MySQL 8.0.31 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP VIEW IF EXISTS `vw_cosecha_cacao_jornales`;
CREATE TABLE `vw_cosecha_cacao_jornales` (`finca` int, `supervisor` int, `fecha` varchar(10), `lote` int, `Count_trabajador` bigint);


DROP TABLE IF EXISTS `vw_cosecha_cacao_jornales`;
CREATE ALGORITHM=UNDEFINED DEFINER=`admin`@`%` SQL SECURITY DEFINER VIEW `vw_cosecha_cacao_jornales` AS select `z_cosecha_cacao`.`finca` AS `finca`,`z_cosecha_cacao`.`supervisor` AS `supervisor`,`z_cosecha_cacao`.`fecha` AS `fecha`,`z_cosecha_cacao`.`lote` AS `lote`,count(distinct `z_cosecha_cacao`.`trabajador`) AS `Count_trabajador` from `z_cosecha_cacao` group by `z_cosecha_cacao`.`finca`,`z_cosecha_cacao`.`supervisor`,`z_cosecha_cacao`.`fecha`,`z_cosecha_cacao`.`lote`;

-- 2024-04-12 04:15:43
