-- Adminer 4.8.1 MySQL 8.0.31 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP VIEW IF EXISTS `vw_reporte_pago2`;
CREATE TABLE `vw_reporte_pago2` (`numero_registro` varchar(20), `fecha_registro` datetime, `nombre` varchar(250), `cedula` varchar(15), `nombre1` varchar(250), `nombre_subtarea` varchar(150), `lote` int, `modulo` varchar(50), `cantidad` decimal(7,3), `tarifa` decimal(7,3), `total` decimal(14,6));


DROP TABLE IF EXISTS `vw_reporte_pago2`;
CREATE ALGORITHM=UNDEFINED DEFINER=`admin`@`%` SQL SECURITY DEFINER VIEW `vw_reporte_pago2` AS select `ztp`.`numero_registro` AS `numero_registro`,`ztp`.`fecha_registro` AS `fecha_registro`,`zpe`.`nombre` AS `nombre`,`zpe`.`cedula` AS `cedula`,`zpe1`.`nombre` AS `nombre1`,`zsu`.`nombre_subtarea` AS `nombre_subtarea`,`ztp`.`lote` AS `lote`,`ztp`.`modulo` AS `modulo`,`ztp`.`cantidad` AS `cantidad`,`zsu`.`tarifa` AS `tarifa`,(`ztp`.`cantidad` * `zsu`.`tarifa`) AS `total` from (((`z_tabla_pm` `ztp` join `z_personal` `zpe` on((`ztp`.`trabajador` = `zpe`.`id`))) join `z_personal` `zpe1` on((`ztp`.`responsable` = `zpe1`.`id`))) join `z_subtarea` `zsu` on((`ztp`.`subtarea` = `zsu`.`id`)));

-- 2024-04-12 04:16:17
