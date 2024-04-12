-- Adminer 4.8.1 MySQL 8.0.31 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP VIEW IF EXISTS `vw_cosecha_cacao_resumen`;
CREATE TABLE `vw_cosecha_cacao_resumen` (`id` bigint unsigned, `fecha` varchar(10), `supervisor` int, `finca` int, `lote` int, `modulos` varchar(3), `tarea` int, `subtarea` int, `total_peso` decimal(33,2), `total_sacos` decimal(32,0), `jornales` decimal(32,0));


DROP TABLE IF EXISTS `vw_cosecha_cacao_resumen`;
CREATE ALGORITHM=UNDEFINED DEFINER=`admin`@`%` SQL SECURITY DEFINER VIEW `vw_cosecha_cacao_resumen` AS select row_number() OVER (ORDER BY `cosecha`.`fecha` )  AS `id`,`cosecha`.`fecha` AS `fecha`,`cosecha`.`supervisor` AS `supervisor`,`cosecha`.`finca` AS `finca`,`cosecha`.`lote` AS `lote`,`modulo`.`modulo` AS `modulos`,`cosecha`.`tarea` AS `tarea`,`cosecha`.`subtarea` AS `subtarea`,sum(`cosecha`.`total_peso`) AS `total_peso`,sum(`cosecha`.`total_sacos`) AS `total_sacos`,sum(`cosecha`.`jornales`) AS `jornales` from (`z_cosecha_cacao` `cosecha` join `z_modulo` `modulo` on((`modulo`.`id` = `cosecha`.`modulo`))) group by `cosecha`.`fecha`,`cosecha`.`supervisor`,`cosecha`.`finca`,`cosecha`.`lote`,`cosecha`.`tarea`,`cosecha`.`subtarea`,`cosecha`.`modulo`;

-- 2024-04-12 04:15:50
