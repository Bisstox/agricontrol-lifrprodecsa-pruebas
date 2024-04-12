-- Adminer 4.8.1 MySQL 8.0.31 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP VIEW IF EXISTS `vw_reporte_pm`;
CREATE TABLE `vw_reporte_pm` (`nombre_trabajador` varchar(250), `id_finca` int, `nombre_finca` varchar(100), `cedula` varchar(15), `descripcion_estado` varchar(150), `nombre_supervisor` varchar(250), `grupo_labor` varchar(150), `codigo_labor` varchar(10), `nombre_labor` varchar(150), `lote` int, `modulo` varchar(50), `cantidad` decimal(7,3), `unidad_labor` varchar(100), `tarifa` decimal(7,3), `total` varchar(53), `cultivo` varchar(150), `comentario` varchar(255), `fecha` varchar(10));


DROP TABLE IF EXISTS `vw_reporte_pm`;
CREATE ALGORITHM=UNDEFINED DEFINER=`admin`@`%` SQL SECURITY DEFINER VIEW `vw_reporte_pm` AS select distinct `zpe`.`nombre` AS `nombre_trabajador`,`ztp`.`finca` AS `id_finca`,`zfi`.`nombre` AS `nombre_finca`,`zpe`.`cedula` AS `cedula`,`zpe2`.`descripcion_estado` AS `descripcion_estado`,`zpe1`.`nombre` AS `nombre_supervisor`,`zta`.`nombre` AS `grupo_labor`,`zsu`.`codigo_subtarea` AS `codigo_labor`,`zsu`.`nombre_subtarea` AS `nombre_labor`,`ztp`.`lote` AS `lote`,`ztp`.`modulo` AS `modulo`,`ztp`.`cantidad` AS `cantidad`,`zul`.`ulabor_nombre` AS `unidad_labor`,`zsu`.`tarifa` AS `tarifa`,format((`ztp`.`cantidad` * `zsu`.`tarifa`),3) AS `total`,`zcu`.`nombre` AS `cultivo`,`ztp`.`comentario` AS `comentario`,`ztp`.`fecha` AS `fecha` from ((((((((`z_tabla_pm` `ztp` join `z_personal` `zpe` on((`ztp`.`trabajador` = `zpe`.`id`))) join `z_personal` `zpe1` on((`ztp`.`responsable` = `zpe1`.`id`))) join `z_subtarea` `zsu` on((`ztp`.`subtarea` = `zsu`.`id`))) join `z_personal_estado` `zpe2` on((`zpe`.`estado` = `zpe2`.`id`))) join `z_cultivo` `zcu` on((`ztp`.`cultivo` = `zcu`.`id`))) join `z_ulabor` `zul` on((`zsu`.`unidad_labor_id` = `zul`.`id`))) join `z_tarea` `zta` on((`zta`.`id` = `zsu`.`tarea_id`))) join `z_finca` `zfi` on((`zfi`.`id` = `ztp`.`finca`))) group by `zpe`.`nombre`,`ztp`.`finca`,`zfi`.`nombre`,`zpe`.`cedula`,`zpe2`.`descripcion_estado`,`zpe1`.`nombre`,`zta`.`nombre`,`zsu`.`codigo_subtarea`,`zsu`.`nombre_subtarea`,`ztp`.`lote`,`ztp`.`modulo`,`ztp`.`cantidad`,`zul`.`ulabor_nombre`,`zsu`.`tarifa`,format((`ztp`.`cantidad` * `zsu`.`tarifa`),3),`zcu`.`nombre`,`ztp`.`comentario`,`ztp`.`fecha`,`ztp`.`fecha_registro` order by `ztp`.`fecha`,`nombre_trabajador`;

-- 2024-04-12 04:16:22
