-- Adminer 4.8.1 MySQL 8.0.31 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP VIEW IF EXISTS `vw_reporte_am`;
CREATE TABLE `vw_reporte_am` (`anno` int, `semana` int, `fecha` varchar(10), `hora` varchar(8), `finca` varchar(100), `supervisor` varchar(250), `cultivo` varchar(150), `lote` varchar(100), `operario` varchar(250), `subtarea` varchar(150));


DROP TABLE IF EXISTS `vw_reporte_am`;
CREATE ALGORITHM=UNDEFINED DEFINER=`admin`@`%` SQL SECURITY DEFINER VIEW `vw_reporte_am` AS select year(`zta`.`fecha`) AS `anno`,week(`zta`.`fecha`,0) AS `semana`,`zta`.`fecha` AS `fecha`,`zta`.`hora` AS `hora`,upper(`zfi`.`nombre`) AS `finca`,upper(`zpe1`.`nombre`) AS `supervisor`,upper(`zcu`.`nombre`) AS `cultivo`,`zlo`.`lote` AS `lote`,upper(`zpe`.`nombre`) AS `operario`,upper(`zsu`.`nombre_subtarea`) AS `subtarea` from ((((((`z_tabla_am` `zta` join `z_personal` `zpe` on((`zta`.`personal_id` = `zpe`.`id`))) join `z_finca` `zfi` on((`zfi`.`id` = `zta`.`finca`))) join `z_personal` `zpe1` on((`zpe1`.`id` = `zta`.`responsable_id`))) join `z_cultivo` `zcu` on((`zcu`.`id` = `zta`.`cultivo_id`))) join `z_lote` `zlo` on((`zlo`.`id` = `zta`.`lote_id`))) join `z_subtarea` `zsu` on((`zsu`.`id` = `zta`.`subtarea_id`))) group by year(`zta`.`fecha`),week(`zta`.`fecha`,0),`zta`.`fecha`,`zta`.`hora`,upper(`zfi`.`nombre`),upper(`zpe1`.`nombre`),upper(`zcu`.`nombre`),`zlo`.`lote`,upper(`zpe`.`nombre`),upper(`zsu`.`nombre_subtarea`) order by `zta`.`fecha`,`zta`.`hora`,`operario`,`subtarea`;

-- 2024-04-12 04:16:00
