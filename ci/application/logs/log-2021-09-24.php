<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-09-24 11:59:26 --> Query error: Unknown column 'vw_reporte_am.responsable_id' in 'on clause' - Invalid query: SELECT `vw_reporte_am`.*, jd33ef40c.nombre AS sd33ef40c, j1ba06e10.nombre AS s1ba06e10, j1657c8b9.nombre AS s1657c8b9, jd0ea3e58.lote AS sd0ea3e58, `vw_reporte_am`.lote AS 'vw_reporte_am.lote', j4df638e8.nombre AS s4df638e8, jafcab4e7.nombre_subtarea AS safcab4e7
FROM `vw_reporte_am`
LEFT JOIN `z_finca` as `jd33ef40c` ON `jd33ef40c`.`id` = `vw_reporte_am`.`finca`
LEFT JOIN `z_personal` as `j1ba06e10` ON `j1ba06e10`.`id` = `vw_reporte_am`.`responsable_id`
LEFT JOIN `z_cultivo` as `j1657c8b9` ON `j1657c8b9`.`id` = `vw_reporte_am`.`cultivo_id`
LEFT JOIN `z_lote` as `jd0ea3e58` ON `jd0ea3e58`.`id` = `vw_reporte_am`.`lote_id`
LEFT JOIN `z_personal` as `j4df638e8` ON `j4df638e8`.`id` = `vw_reporte_am`.`personal_id`
LEFT JOIN `z_subtarea` as `jafcab4e7` ON `jafcab4e7`.`id` = `vw_reporte_am`.`subtarea_id`
ERROR - 2021-09-24 11:59:26 --> Severity: error --> Exception: Call to a member function result() on bool /home/yodanmur/SitiosClientes/bellitaweb/application/models/Grocery_crud_model.php 91
ERROR - 2021-09-24 12:08:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `vw_reporte_am`' at line 2 - Invalid query: SELECT `vw_reporte_am`.
FROM `vw_reporte_am`
ERROR - 2021-09-24 12:08:03 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/yodanmur/SitiosClientes/bellitaweb/application/models/Grocery_crud_model.php 198
ERROR - 2021-09-24 12:11:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `vw_reporte_am`' at line 2 - Invalid query: SELECT `vw_reporte_am`.
FROM `vw_reporte_am`
ERROR - 2021-09-24 12:11:58 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/yodanmur/SitiosClientes/bellitaweb/application/models/Grocery_crud_model.php 198
ERROR - 2021-09-24 12:28:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `vw_reporte_am`' at line 2 - Invalid query: SELECT `vw_reporte_am`.
FROM `vw_reporte_am`
ERROR - 2021-09-24 12:28:47 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/yodanmur/SitiosClientes/bellitaweb/application/models/Grocery_crud_model.php 198
ERROR - 2021-09-24 13:23:18 --> Query error: Unknown column 'modulos' in 'field list' - Invalid query: SELECT `id`, `modulos`
FROM `z_modulo`
ERROR - 2021-09-24 13:23:18 --> Severity: error --> Exception: Call to a member function result() on bool /home/yodanmur/SitiosClientes/bellitaweb/application/controllers/AM.php 46
