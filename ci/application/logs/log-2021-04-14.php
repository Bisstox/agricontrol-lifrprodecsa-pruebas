<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-04-14 12:39:32 --> Query error: Cannot delete or update a parent row: a foreign key constraint fails (`yodanmur_bellita`.`z_tabla_pm`, CONSTRAINT `FK_ID_EMPLEADO` FOREIGN KEY (`trabajador`) REFERENCES `z_personal` (`id`)) - Invalid query: DELETE FROM `z_personal`
WHERE `id` = '39' LIMIT 1
ERROR - 2021-04-14 12:54:43 --> Query error: Cannot delete or update a parent row: a foreign key constraint fails (`yodanmur_bellita`.`z_tabla_am`, CONSTRAINT `z_tabla_am_ibfk_1` FOREIGN KEY (`personal_id`) REFERENCES `z_personal` (`id`)) - Invalid query: DELETE FROM `z_personal`
WHERE `id` = '54' LIMIT 1
ERROR - 2021-04-14 21:27:27 --> Query error: Unknown column 'z_tarifas_historia.subtarea_id' in 'on clause' - Invalid query: SELECT `z_tarifas_historia`.*, jafcab4e7.nombre_subtarea AS safcab4e7, jd07f240e.ulabor_nombre AS sd07f240e, j45e91be9.nombre AS s45e91be9, j2943ac20.descripcion AS s2943ac20
FROM `z_tarifas_historia`
LEFT JOIN `z_subtarea` as `jafcab4e7` ON `jafcab4e7`.`id` = `z_tarifas_historia`.`subtarea_id`
LEFT JOIN `z_ulabor` as `jd07f240e` ON `jd07f240e`.`id` = `z_tarifas_historia`.`unidad_labor_id`
LEFT JOIN `z_tarea` as `j45e91be9` ON `j45e91be9`.`id` = `z_tarifas_historia`.`tarea_id`
LEFT JOIN `z_tipo_pago` as `j2943ac20` ON `j2943ac20`.`id` = `z_tarifas_historia`.`tipo_pago_id`
ERROR - 2021-04-14 21:27:27 --> Severity: error --> Exception: Call to a member function result() on bool /home/yodanmur/SitiosClientes/bellitaweb/application/models/Grocery_crud_model.php 91
ERROR - 2021-04-14 21:30:03 --> Query error: Unknown column 'z_tarifas_historia.subtarea_id' in 'on clause' - Invalid query: SELECT `z_tarifas_historia`.*, jafcab4e7.nombre_subtarea AS safcab4e7, jd07f240e.ulabor_nombre AS sd07f240e, j45e91be9.nombre AS s45e91be9, j2943ac20.descripcion AS s2943ac20
FROM `z_tarifas_historia`
LEFT JOIN `z_subtarea` as `jafcab4e7` ON `jafcab4e7`.`id` = `z_tarifas_historia`.`subtarea_id`
LEFT JOIN `z_ulabor` as `jd07f240e` ON `jd07f240e`.`id` = `z_tarifas_historia`.`unidad_labor_id`
LEFT JOIN `z_tarea` as `j45e91be9` ON `j45e91be9`.`id` = `z_tarifas_historia`.`tarea_id`
LEFT JOIN `z_tipo_pago` as `j2943ac20` ON `j2943ac20`.`id` = `z_tarifas_historia`.`tipo_pago_id`
ERROR - 2021-04-14 21:30:03 --> Severity: error --> Exception: Call to a member function result() on bool /home/yodanmur/SitiosClientes/bellitaweb/application/models/Grocery_crud_model.php 91
ERROR - 2021-04-14 21:30:05 --> Query error: Unknown column 'z_tarifas_historia.subtarea_id' in 'on clause' - Invalid query: SELECT `z_tarifas_historia`.*, jafcab4e7.nombre_subtarea AS safcab4e7, jd07f240e.ulabor_nombre AS sd07f240e, j45e91be9.nombre AS s45e91be9, j2943ac20.descripcion AS s2943ac20
FROM `z_tarifas_historia`
LEFT JOIN `z_subtarea` as `jafcab4e7` ON `jafcab4e7`.`id` = `z_tarifas_historia`.`subtarea_id`
LEFT JOIN `z_ulabor` as `jd07f240e` ON `jd07f240e`.`id` = `z_tarifas_historia`.`unidad_labor_id`
LEFT JOIN `z_tarea` as `j45e91be9` ON `j45e91be9`.`id` = `z_tarifas_historia`.`tarea_id`
LEFT JOIN `z_tipo_pago` as `j2943ac20` ON `j2943ac20`.`id` = `z_tarifas_historia`.`tipo_pago_id`
ERROR - 2021-04-14 21:30:05 --> Severity: error --> Exception: Call to a member function result() on bool /home/yodanmur/SitiosClientes/bellitaweb/application/models/Grocery_crud_model.php 91
ERROR - 2021-04-14 21:33:32 --> Query error: Unknown column 'z_tarifas_historia.subtarea_id' in 'on clause' - Invalid query: SELECT `z_tarifas_historia`.*, jafcab4e7.nombre_subtarea AS safcab4e7, jd07f240e.ulabor_nombre AS sd07f240e, j45e91be9.nombre AS s45e91be9, j2943ac20.descripcion AS s2943ac20
FROM `z_tarifas_historia`
LEFT JOIN `z_subtarea` as `jafcab4e7` ON `jafcab4e7`.`id` = `z_tarifas_historia`.`subtarea_id`
LEFT JOIN `z_ulabor` as `jd07f240e` ON `jd07f240e`.`id` = `z_tarifas_historia`.`unidad_labor_id`
LEFT JOIN `z_tarea` as `j45e91be9` ON `j45e91be9`.`id` = `z_tarifas_historia`.`tarea_id`
LEFT JOIN `z_tipo_pago` as `j2943ac20` ON `j2943ac20`.`id` = `z_tarifas_historia`.`tipo_pago_id`
ERROR - 2021-04-14 21:33:32 --> Severity: error --> Exception: Call to a member function result() on bool /home/yodanmur/SitiosClientes/bellitaweb/application/models/Grocery_crud_model.php 91
ERROR - 2021-04-14 21:34:19 --> Query error: Unknown column 'z_tarifas_historia.subtarea_id' in 'on clause' - Invalid query: SELECT `z_tarifas_historia`.*, jafcab4e7.nombre_subtarea AS safcab4e7, jd07f240e.ulabor_nombre AS sd07f240e, j45e91be9.nombre AS s45e91be9, j2943ac20.descripcion AS s2943ac20
FROM `z_tarifas_historia`
LEFT JOIN `z_subtarea` as `jafcab4e7` ON `jafcab4e7`.`id` = `z_tarifas_historia`.`subtarea_id`
LEFT JOIN `z_ulabor` as `jd07f240e` ON `jd07f240e`.`id` = `z_tarifas_historia`.`unidad_labor_id`
LEFT JOIN `z_tarea` as `j45e91be9` ON `j45e91be9`.`id` = `z_tarifas_historia`.`tarea_id`
LEFT JOIN `z_tipo_pago` as `j2943ac20` ON `j2943ac20`.`id` = `z_tarifas_historia`.`tipo_pago_id`
ERROR - 2021-04-14 21:34:19 --> Severity: error --> Exception: Call to a member function result() on bool /home/yodanmur/SitiosClientes/bellitaweb/application/models/Grocery_crud_model.php 91
ERROR - 2021-04-14 21:38:19 --> Unable to load the requested class: Image_moo
ERROR - 2021-04-14 21:39:42 --> Unable to load the requested class: Image_moo
ERROR - 2021-04-14 21:42:33 --> Unable to load the requested class: Image_moo
