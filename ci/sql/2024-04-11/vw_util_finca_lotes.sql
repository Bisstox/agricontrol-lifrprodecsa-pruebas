-- Adminer 4.8.1 MySQL 8.0.31 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP VIEW IF EXISTS `vw_util_finca_lotes`;
CREATE TABLE `vw_util_finca_lotes` (`id` int, `nombre_finca` varchar(100), `ha_finca` int, `lote` varchar(100), `ha_lote` decimal(8,2), `finca_id` int, `estado_lote` varchar(1));


DROP TABLE IF EXISTS `vw_util_finca_lotes`;
CREATE ALGORITHM=UNDEFINED DEFINER=`admin`@`%` SQL SECURITY DEFINER VIEW `vw_util_finca_lotes` AS select `zlo`.`id` AS `id`,`zfi`.`nombre` AS `nombre_finca`,`zfi`.`ha` AS `ha_finca`,`zlo`.`lote` AS `lote`,`zlo`.`ha` AS `ha_lote`,`zlo`.`finca_id` AS `finca_id`,`zlo`.`estado` AS `estado_lote` from (`z_lote` `zlo` join `z_finca` `zfi` on((`zfi`.`id` = `zlo`.`finca_id`)));

-- 2024-04-12 04:16:27
