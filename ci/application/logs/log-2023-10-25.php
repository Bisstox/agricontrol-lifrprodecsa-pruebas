<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-10-25 00:24:40 --> Severity: error --> Exception: syntax error, unexpected end of file, expecting function (T_FUNCTION) or const (T_CONST) C:\Users\raymundo\Documents\_desarrollo\_laragon-6.0.0\www\BellitaAgricontrolWeb\application\controllers\V1.php 18
ERROR - 2023-10-25 00:49:44 --> Severity: Notice --> Undefined property: V2::$http_status C:\Users\raymundo\Documents\_desarrollo\_laragon-6.0.0\www\BellitaAgricontrolWeb\application\vendor\chriskacerguis\codeigniter-restserver\src\RestController.php 542
ERROR - 2023-10-25 00:49:44 --> Severity: Notice --> Trying to access array offset on value of type null C:\Users\raymundo\Documents\_desarrollo\_laragon-6.0.0\www\BellitaAgricontrolWeb\application\vendor\chriskacerguis\codeigniter-restserver\src\RestController.php 542
ERROR - 2023-10-25 00:49:44 --> Severity: Warning --> Use of undefined constant HTTP_OK - assumed 'HTTP_OK' (this will throw an Error in a future version of PHP) C:\Users\raymundo\Documents\_desarrollo\_laragon-6.0.0\www\BellitaAgricontrolWeb\application\vendor\chriskacerguis\codeigniter-restserver\src\RestController.php 659
ERROR - 2023-10-25 00:56:54 --> Severity: error --> Exception: syntax error, unexpected '$this' (T_VARIABLE) C:\Users\raymundo\Documents\_desarrollo\_laragon-6.0.0\www\BellitaAgricontrolWeb\application\controllers\V2.php 349
ERROR - 2023-10-25 00:59:43 --> Severity: Notice --> Undefined property: V2::$http_status C:\Users\raymundo\Documents\_desarrollo\_laragon-6.0.0\www\BellitaAgricontrolWeb\application\vendor\chriskacerguis\codeigniter-restserver\src\RestController.php 542
ERROR - 2023-10-25 00:59:43 --> Severity: Notice --> Trying to access array offset on value of type null C:\Users\raymundo\Documents\_desarrollo\_laragon-6.0.0\www\BellitaAgricontrolWeb\application\vendor\chriskacerguis\codeigniter-restserver\src\RestController.php 542
ERROR - 2023-10-25 00:59:43 --> Severity: Warning --> Use of undefined constant HTTP_OK - assumed 'HTTP_OK' (this will throw an Error in a future version of PHP) C:\Users\raymundo\Documents\_desarrollo\_laragon-6.0.0\www\BellitaAgricontrolWeb\application\vendor\chriskacerguis\codeigniter-restserver\src\RestController.php 659
ERROR - 2023-10-25 01:00:24 --> Severity: Notice --> Undefined property: V2::$http_status C:\Users\raymundo\Documents\_desarrollo\_laragon-6.0.0\www\BellitaAgricontrolWeb\application\vendor\chriskacerguis\codeigniter-restserver\src\RestController.php 542
ERROR - 2023-10-25 01:00:24 --> Severity: Notice --> Trying to access array offset on value of type null C:\Users\raymundo\Documents\_desarrollo\_laragon-6.0.0\www\BellitaAgricontrolWeb\application\vendor\chriskacerguis\codeigniter-restserver\src\RestController.php 542
ERROR - 2023-10-25 01:00:24 --> Severity: Warning --> Use of undefined constant HTTP_OK - assumed 'HTTP_OK' (this will throw an Error in a future version of PHP) C:\Users\raymundo\Documents\_desarrollo\_laragon-6.0.0\www\BellitaAgricontrolWeb\application\vendor\chriskacerguis\codeigniter-restserver\src\RestController.php 659
ERROR - 2023-10-25 01:02:06 --> Query error: Column 'supervisor' cannot be null - Invalid query: INSERT INTO `z_riego` (`supervisor`, `fecha`, `hora`, `finca`, `codigo_subtarea`, `lote`, `modulo`, `tiempo_riego`, `volumen_riego`, `observaciones`) VALUES (NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL)
ERROR - 2023-10-25 01:03:18 --> Query error: Column 'supervisor' cannot be null - Invalid query: INSERT INTO `z_riego` (`supervisor`, `fecha`, `hora`, `finca`, `codigo_subtarea`, `lote`, `modulo`, `tiempo_riego`, `volumen_riego`, `observaciones`) VALUES (NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL)
ERROR - 2023-10-25 01:09:11 --> Severity: error --> Exception: Call to undefined method CI_Loader::js() C:\Users\raymundo\Documents\_desarrollo\_laragon-6.0.0\www\BellitaAgricontrolWeb\application\controllers\Auth.php 43
ERROR - 2023-10-25 01:10:02 --> Severity: error --> Exception: Call to undefined method CI_Loader::js() C:\Users\raymundo\Documents\_desarrollo\_laragon-6.0.0\www\BellitaAgricontrolWeb\application\controllers\Auth.php 43
ERROR - 2023-10-25 01:14:30 --> Severity: error --> Exception: Call to undefined method CI_Loader::js() C:\Users\raymundo\Documents\_desarrollo\_laragon-6.0.0\www\BellitaAgricontrolWeb\application\controllers\Auth.php 43
ERROR - 2023-10-25 01:23:46 --> Query error: Expression #1 of ORDER BY clause is not in SELECT list, references column 'lfp_prodapp_dev.ztp.fecha_registro' which is not in SELECT list; this is incompatible with DISTINCT - Invalid query: SELECT `vw_reporte_pm`.*, j35389aaf.lote AS s35389aaf, `vw_reporte_pm`.lote AS 'vw_reporte_pm.lote'
FROM `vw_reporte_pm`
LEFT JOIN `z_lote` as `j35389aaf` ON `j35389aaf`.`id` = `vw_reporte_pm`.`lote`
WHERE `fecha` >= "1969-12-31"
AND `fecha` <= "1969-12-31"
ERROR - 2023-10-25 01:24:17 --> 404 Page Not Found: Ap/index
ERROR - 2023-10-25 01:24:21 --> Query error: Expression #3 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lfp_prodapp_dev.zta.finca' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `vw_reporte_am_base`.*
FROM `vw_reporte_am_base`
WHERE `fecha` = '1969-12-31'
ERROR - 2023-10-25 10:49:49 --> Query error: Expression #1 of ORDER BY clause is not in SELECT list, references column 'lfp_prodapp_dev.ztp.fecha_registro' which is not in SELECT list; this is incompatible with DISTINCT - Invalid query: SELECT `vw_reporte_pm`.*, j35389aaf.lote AS s35389aaf, `vw_reporte_pm`.lote AS 'vw_reporte_pm.lote'
FROM `vw_reporte_pm`
LEFT JOIN `z_lote` as `j35389aaf` ON `j35389aaf`.`id` = `vw_reporte_pm`.`lote`
WHERE `fecha` >= "1969-12-31"
AND `fecha` <= "1969-12-31"
ERROR - 2023-10-25 10:50:22 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lfp_prodapp_dev.z_cosecha_cacao.supervisor' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `vw_cosecha_cacao_resumen`.*, j09348c20.nombre AS s09348c20, jd33ef40c.nombre AS sd33ef40c, j35389aaf.lote AS s35389aaf, `vw_cosecha_cacao_resumen`.lote AS 'vw_cosecha_cacao_resumen.lote', j5dcb4a1e.modulo AS s5dcb4a1e, `vw_cosecha_cacao_resumen`.modulo AS 'vw_cosecha_cacao_resumen.modulo'
FROM `vw_cosecha_cacao_resumen`
LEFT JOIN `z_personal` as `j09348c20` ON `j09348c20`.`id` = `vw_cosecha_cacao_resumen`.`supervisor`
LEFT JOIN `z_finca` as `jd33ef40c` ON `jd33ef40c`.`id` = `vw_cosecha_cacao_resumen`.`finca`
LEFT JOIN `z_lote` as `j35389aaf` ON `j35389aaf`.`id` = `vw_cosecha_cacao_resumen`.`lote`
LEFT JOIN `z_modulo` as `j5dcb4a1e` ON `j5dcb4a1e`.`id` = `vw_cosecha_cacao_resumen`.`modulo`
ERROR - 2023-10-25 10:50:30 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lfp_prodapp_dev.z_cosecha_cacao.supervisor' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `vw_cosecha_cacao_resumen`.*, j09348c20.nombre AS s09348c20, jd33ef40c.nombre AS sd33ef40c, j35389aaf.lote AS s35389aaf, `vw_cosecha_cacao_resumen`.lote AS 'vw_cosecha_cacao_resumen.lote', j5dcb4a1e.modulo AS s5dcb4a1e, `vw_cosecha_cacao_resumen`.modulo AS 'vw_cosecha_cacao_resumen.modulo'
FROM `vw_cosecha_cacao_resumen`
LEFT JOIN `z_personal` as `j09348c20` ON `j09348c20`.`id` = `vw_cosecha_cacao_resumen`.`supervisor`
LEFT JOIN `z_finca` as `jd33ef40c` ON `jd33ef40c`.`id` = `vw_cosecha_cacao_resumen`.`finca`
LEFT JOIN `z_lote` as `j35389aaf` ON `j35389aaf`.`id` = `vw_cosecha_cacao_resumen`.`lote`
LEFT JOIN `z_modulo` as `j5dcb4a1e` ON `j5dcb4a1e`.`id` = `vw_cosecha_cacao_resumen`.`modulo`
ERROR - 2023-10-25 11:02:08 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lfp_prodapp_dev.z_cosecha_cacao.supervisor' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `vw_cosecha_cacao_resumen`.*, j09348c20.nombre AS s09348c20, jd33ef40c.nombre AS sd33ef40c, j35389aaf.lote AS s35389aaf, `vw_cosecha_cacao_resumen`.lote AS 'vw_cosecha_cacao_resumen.lote', j5dcb4a1e.modulo AS s5dcb4a1e, `vw_cosecha_cacao_resumen`.modulo AS 'vw_cosecha_cacao_resumen.modulo'
FROM `vw_cosecha_cacao_resumen`
LEFT JOIN `z_personal` as `j09348c20` ON `j09348c20`.`id` = `vw_cosecha_cacao_resumen`.`supervisor`
LEFT JOIN `z_finca` as `jd33ef40c` ON `jd33ef40c`.`id` = `vw_cosecha_cacao_resumen`.`finca`
LEFT JOIN `z_lote` as `j35389aaf` ON `j35389aaf`.`id` = `vw_cosecha_cacao_resumen`.`lote`
LEFT JOIN `z_modulo` as `j5dcb4a1e` ON `j5dcb4a1e`.`id` = `vw_cosecha_cacao_resumen`.`modulo`
ERROR - 2023-10-25 13:27:42 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No connection could be made because the target machine actively refused it.
 C:\Users\raymundo\Documents\_desarrollo\_giteaBisstox\BellitaAgricontrolWeb\system\database\drivers\mysqli\mysqli_driver.php 203
ERROR - 2023-10-25 13:27:42 --> Unable to connect to the database
ERROR - 2023-10-25 13:30:20 --> Query error: Expression #1 of ORDER BY clause is not in SELECT list, references column 'lfp_prodapp_dev.ztp.fecha_registro' which is not in SELECT list; this is incompatible with DISTINCT - Invalid query: SELECT `vw_reporte_pm`.*, j35389aaf.lote AS s35389aaf, `vw_reporte_pm`.lote AS 'vw_reporte_pm.lote'
FROM `vw_reporte_pm`
LEFT JOIN `z_lote` as `j35389aaf` ON `j35389aaf`.`id` = `vw_reporte_pm`.`lote`
WHERE `fecha` >= "1969-12-31"
AND `fecha` <= "1969-12-31"
ERROR - 2023-10-25 18:56:58 --> Query error: Expression #1 of ORDER BY clause is not in SELECT list, references column 'lfp_prodapp_dev.ztp.fecha_registro' which is not in SELECT list; this is incompatible with DISTINCT - Invalid query: SELECT `vw_reporte_pm`.*, j35389aaf.lote AS s35389aaf, `vw_reporte_pm`.lote AS 'vw_reporte_pm.lote'
FROM `vw_reporte_pm`
LEFT JOIN `z_lote` as `j35389aaf` ON `j35389aaf`.`id` = `vw_reporte_pm`.`lote`
WHERE `fecha` >= "1969-12-31"
AND `fecha` <= "1969-12-31"
ERROR - 2023-10-25 18:58:29 --> Severity: Warning --> date() expects at least 1 parameter, 0 given C:\Users\raymundo\Documents\_desarrollo\_giteaBisstox\BellitaAgricontrolWeb\application\controllers\V2.php 939
ERROR - 2023-10-25 18:58:29 --> Query error: Unknown column 'created_at' in 'field list' - Invalid query: INSERT INTO `z_riego` (`supervisor`, `fecha`, `hora`, `finca`, `codigo_subtarea`, `lote`, `modulo`, `tiempo_riego`, `volumen_riego`, `observaciones`, `created_at`) VALUES ('26', '2023-10-25', '3:30', '1', '17', '2', '1', '2:15', '213', 'sin novedad', 0)
ERROR - 2023-10-25 18:58:44 --> Query error: Unknown column 'created_at' in 'field list' - Invalid query: INSERT INTO `z_riego` (`supervisor`, `fecha`, `hora`, `finca`, `codigo_subtarea`, `lote`, `modulo`, `tiempo_riego`, `volumen_riego`, `observaciones`, `created_at`) VALUES ('26', '2023-10-25', '3:30', '1', '17', '2', '1', '2:15', '213', 'sin novedad', '2023-10-25')
ERROR - 2023-10-25 20:57:51 --> Query error: Unknown column 'fecha_registro' in 'field list' - Invalid query: INSERT INTO `z_cosecha_cacao` (`supervisor`, `fecha`, `hora`, `finca`, `tarea`, `subtarea`, `trabajador`, `lote`, `modulo`, `saco1`, `saco2`, `saco3`, `saco4`, `saco5`, `saco6`, `saco7`, `saco8`, `saco9`, `saco10`, `saco11`, `saco12`, `saco13`, `saco14`, `saco15`, `observaciones`, `fecha_registro`) VALUES (' 1', ' \'2023-10-30\'', ' \'5:00\'', ' 2', ' 17', ' 1', ' 25', ' 1', ' 1', ' 322', '211', ' 123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-25')
ERROR - 2023-10-25 20:59:17 --> Query error: Column 'saco4' cannot be null - Invalid query: INSERT INTO `z_cosecha_cacao` (`supervisor`, `fecha`, `hora`, `finca`, `tarea`, `subtarea`, `trabajador`, `lote`, `modulo`, `saco1`, `saco2`, `saco3`, `saco4`, `saco5`, `saco6`, `saco7`, `saco8`, `saco9`, `saco10`, `saco11`, `saco12`, `saco13`, `saco14`, `saco15`, `observaciones`, `created_at`) VALUES (' 1', ' \'2023-10-30\'', ' \'5:00\'', ' 2', ' 17', ' 1', ' 25', ' 1', ' 1', ' 322', '211', ' 123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-25')
ERROR - 2023-10-25 21:16:13 --> Severity: error --> Exception: Call to undefined method Grocery_CRUD::callback_before_show() C:\Users\raymundo\Documents\_desarrollo\_giteaBisstox\BellitaAgricontrolWeb\application\controllers\Cosechacacao.php 56
