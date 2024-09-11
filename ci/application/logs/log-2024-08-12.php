<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-08-12 00:00:15 --> Query error: Column 'id_finca' in where clause is ambiguous - Invalid query: SELECT `z_tabla_pm`.*, jd33ef40c.nombre AS sd33ef40c, j636d61cf.nombre AS s636d61cf, j293c7f68.nombre AS s293c7f68, jbf700765.nombre AS sbf700765, j35389aaf.lote AS s35389aaf, `z_tabla_pm`.lote AS 'z_tabla_pm.lote', jd019f3b5.nombre_subtarea AS sd019f3b5
FROM `z_tabla_pm`
LEFT JOIN `z_finca` as `jd33ef40c` ON `jd33ef40c`.`id` = `z_tabla_pm`.`finca`
LEFT JOIN `z_personal` as `j636d61cf` ON `j636d61cf`.`id` = `z_tabla_pm`.`responsable`
LEFT JOIN `z_personal` as `j293c7f68` ON `j293c7f68`.`id` = `z_tabla_pm`.`trabajador`
LEFT JOIN `z_cultivo` as `jbf700765` ON `jbf700765`.`id` = `z_tabla_pm`.`cultivo`
LEFT JOIN `z_lote` as `j35389aaf` ON `j35389aaf`.`id` = `z_tabla_pm`.`lote`
LEFT JOIN `z_subtarea` as `jd019f3b5` ON `jd019f3b5`.`id` = `z_tabla_pm`.`subtarea`
WHERE `fecha` >= "2024-07-28"
AND `fecha` <= "2024-08-11"
AND `id_finca` = '1'
ERROR - 2024-08-12 00:00:15 --> Severity: Warning --> chmod(): Operation not permitted /var/www/html/system/core/Log.php 233
ERROR - 2024-08-12 00:00:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/system/core/Exceptions.php:271) /var/www/html/system/core/Common.php 570
ERROR - 2024-08-12 00:02:12 --> Severity: Notice --> Undefined variable: data /var/www/html/application/views/Crud/pm-report.php 20
ERROR - 2024-08-12 00:02:12 --> Severity: Notice --> Trying to access array offset on value of type null /var/www/html/application/views/Crud/pm-report.php 20
ERROR - 2024-08-12 00:02:12 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/application/views/Crud/pm-report.php 24
ERROR - 2024-08-12 00:02:19 --> Severity: Notice --> Undefined variable: data /var/www/html/application/views/Crud/pm-report.php 20
ERROR - 2024-08-12 00:02:19 --> Severity: Notice --> Trying to access array offset on value of type null /var/www/html/application/views/Crud/pm-report.php 20
ERROR - 2024-08-12 00:02:19 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/application/views/Crud/pm-report.php 24
ERROR - 2024-08-12 00:02:47 --> Severity: Notice --> Undefined variable: data /var/www/html/application/views/Crud/pm-edit.php 20
ERROR - 2024-08-12 00:02:47 --> Severity: Notice --> Trying to access array offset on value of type null /var/www/html/application/views/Crud/pm-edit.php 20
ERROR - 2024-08-12 00:02:47 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/application/views/Crud/pm-edit.php 24
ERROR - 2024-08-12 00:04:30 --> Severity: Notice --> Undefined variable: data /var/www/html/application/views/Crud/pm-edit.php 20
ERROR - 2024-08-12 00:04:30 --> Severity: Notice --> Trying to access array offset on value of type null /var/www/html/application/views/Crud/pm-edit.php 20
ERROR - 2024-08-12 00:04:30 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/application/views/Crud/pm-edit.php 24
ERROR - 2024-08-12 00:04:39 --> Severity: Notice --> Undefined variable: data /var/www/html/application/views/Crud/pm-edit.php 20
ERROR - 2024-08-12 00:04:39 --> Severity: Notice --> Trying to access array offset on value of type null /var/www/html/application/views/Crud/pm-edit.php 20
ERROR - 2024-08-12 00:04:39 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/application/views/Crud/pm-edit.php 24
ERROR - 2024-08-12 00:10:05 --> Severity: Notice --> Undefined variable: data /var/www/html/application/views/Crud/pm-edit.php 20
ERROR - 2024-08-12 00:10:05 --> Severity: Notice --> Trying to access array offset on value of type null /var/www/html/application/views/Crud/pm-edit.php 20
ERROR - 2024-08-12 00:10:05 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/application/views/Crud/pm-edit.php 24
ERROR - 2024-08-12 00:21:49 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-report.php 25
ERROR - 2024-08-12 00:21:49 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-report.php 25
ERROR - 2024-08-12 00:21:49 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-report.php 25
ERROR - 2024-08-12 00:22:41 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-report.php 25
ERROR - 2024-08-12 00:22:41 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-report.php 25
ERROR - 2024-08-12 00:22:41 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-report.php 25
ERROR - 2024-08-12 00:23:51 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-report.php 25
ERROR - 2024-08-12 00:23:51 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-report.php 25
ERROR - 2024-08-12 00:23:51 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-report.php 25
ERROR - 2024-08-12 00:23:55 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-report.php 25
ERROR - 2024-08-12 00:23:55 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-report.php 25
ERROR - 2024-08-12 00:23:55 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-report.php 25
ERROR - 2024-08-12 00:24:07 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-report.php 25
ERROR - 2024-08-12 00:24:07 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-report.php 25
ERROR - 2024-08-12 00:24:07 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-report.php 25
ERROR - 2024-08-12 00:24:11 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-report.php 25
ERROR - 2024-08-12 00:24:11 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-report.php 25
ERROR - 2024-08-12 00:24:11 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-report.php 25
ERROR - 2024-08-12 00:25:41 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-report.php 25
ERROR - 2024-08-12 00:25:41 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-report.php 25
ERROR - 2024-08-12 00:25:41 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-report.php 25
ERROR - 2024-08-12 00:25:48 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-report.php 25
ERROR - 2024-08-12 00:25:48 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-report.php 25
ERROR - 2024-08-12 00:25:48 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-report.php 25
ERROR - 2024-08-12 00:28:49 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-report.php 25
ERROR - 2024-08-12 00:28:49 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-report.php 25
ERROR - 2024-08-12 00:28:49 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-report.php 25
ERROR - 2024-08-12 00:29:11 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-report.php 25
ERROR - 2024-08-12 00:29:11 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-report.php 25
ERROR - 2024-08-12 00:29:11 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-report.php 25
ERROR - 2024-08-12 00:32:16 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-report.php 25
ERROR - 2024-08-12 00:32:16 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-report.php 25
ERROR - 2024-08-12 00:32:16 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-report.php 25
ERROR - 2024-08-12 00:33:58 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-report.php 25
ERROR - 2024-08-12 00:33:58 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-report.php 25
ERROR - 2024-08-12 00:33:58 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-report.php 25
ERROR - 2024-08-12 00:34:50 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-report.php 46
ERROR - 2024-08-12 00:34:50 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-report.php 46
ERROR - 2024-08-12 00:34:50 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-report.php 46
ERROR - 2024-08-12 00:35:17 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-report.php 46
ERROR - 2024-08-12 00:35:17 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-report.php 46
ERROR - 2024-08-12 00:35:17 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-report.php 46
ERROR - 2024-08-12 00:35:46 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-report.php 48
ERROR - 2024-08-12 00:35:46 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-report.php 48
ERROR - 2024-08-12 00:35:46 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-report.php 48
ERROR - 2024-08-12 00:36:44 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-report.php 46
ERROR - 2024-08-12 00:36:44 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-report.php 46
ERROR - 2024-08-12 00:36:44 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-report.php 46
ERROR - 2024-08-12 00:52:44 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-report.php 28
ERROR - 2024-08-12 00:52:44 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-report.php 28
ERROR - 2024-08-12 00:52:44 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-report.php 28
ERROR - 2024-08-12 00:53:59 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-report.php 28
ERROR - 2024-08-12 00:53:59 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-report.php 28
ERROR - 2024-08-12 00:53:59 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-report.php 28
ERROR - 2024-08-12 00:54:28 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-report.php 28
ERROR - 2024-08-12 00:54:28 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-report.php 28
ERROR - 2024-08-12 00:54:28 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-report.php 28
ERROR - 2024-08-12 00:55:02 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-report.php 28
ERROR - 2024-08-12 00:55:02 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-report.php 28
ERROR - 2024-08-12 00:55:02 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-report.php 28
ERROR - 2024-08-12 00:55:20 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-report.php 28
ERROR - 2024-08-12 00:55:20 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-report.php 28
ERROR - 2024-08-12 00:55:20 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-report.php 28
ERROR - 2024-08-12 00:56:53 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-report.php 28
ERROR - 2024-08-12 00:56:53 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-report.php 28
ERROR - 2024-08-12 00:56:53 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-report.php 28
ERROR - 2024-08-12 00:57:23 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-report.php 28
ERROR - 2024-08-12 00:57:23 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-report.php 28
ERROR - 2024-08-12 00:57:23 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-report.php 28
ERROR - 2024-08-12 00:58:26 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 50
ERROR - 2024-08-12 00:58:26 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 50
ERROR - 2024-08-12 00:58:26 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 50
ERROR - 2024-08-12 00:58:38 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 50
ERROR - 2024-08-12 00:58:38 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 50
ERROR - 2024-08-12 00:58:38 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 50
ERROR - 2024-08-12 00:58:40 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 50
ERROR - 2024-08-12 00:58:40 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 50
ERROR - 2024-08-12 00:58:40 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 50
ERROR - 2024-08-12 00:59:04 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 50
ERROR - 2024-08-12 00:59:04 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 50
ERROR - 2024-08-12 00:59:04 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 50
ERROR - 2024-08-12 00:59:32 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 29
ERROR - 2024-08-12 00:59:32 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 29
ERROR - 2024-08-12 00:59:32 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 29
ERROR - 2024-08-12 01:02:49 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 29
ERROR - 2024-08-12 01:02:49 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 29
ERROR - 2024-08-12 01:02:49 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 29
ERROR - 2024-08-12 01:03:58 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 14
ERROR - 2024-08-12 01:03:58 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 14
ERROR - 2024-08-12 01:03:58 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 14
ERROR - 2024-08-12 01:04:10 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 38
ERROR - 2024-08-12 01:04:10 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 38
ERROR - 2024-08-12 01:04:10 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 38
ERROR - 2024-08-12 01:04:39 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 50
ERROR - 2024-08-12 01:04:39 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 50
ERROR - 2024-08-12 01:04:39 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 50
ERROR - 2024-08-12 01:06:07 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 58
ERROR - 2024-08-12 01:06:07 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 58
ERROR - 2024-08-12 01:06:07 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 58
ERROR - 2024-08-12 01:06:18 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 58
ERROR - 2024-08-12 01:06:18 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 58
ERROR - 2024-08-12 01:06:18 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 58
ERROR - 2024-08-12 01:06:33 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 58
ERROR - 2024-08-12 01:06:33 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 58
ERROR - 2024-08-12 01:06:33 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 58
ERROR - 2024-08-12 01:08:52 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 56
ERROR - 2024-08-12 01:08:52 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 56
ERROR - 2024-08-12 01:08:52 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 56
ERROR - 2024-08-12 01:10:56 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 56
ERROR - 2024-08-12 01:10:56 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 56
ERROR - 2024-08-12 01:10:56 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 56
ERROR - 2024-08-12 01:11:52 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 01:11:52 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 01:11:52 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 01:12:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ', CONCAT('', COALESCE(nombre_finca, ''), '&nbsp;-&nbsp;', COALESCE(lote, ''), ''' at line 1 - Invalid query: SELECT vw_util_finca_lotes., CONCAT('', COALESCE(nombre_finca, ''), '&nbsp;-&nbsp;', COALESCE(lote, ''), '') as s35389aaf
FROM `vw_util_finca_lotes`
ORDER BY `s35389aaf`
ERROR - 2024-08-12 01:13:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ', CONCAT('', COALESCE(nombre_finca&nbsp;-&nbsp;lote, ''), '') as s35389aaf
FROM ' at line 1 - Invalid query: SELECT vw_util_finca_lotes., CONCAT('', COALESCE(nombre_finca&nbsp;-&nbsp;lote, ''), '') as s35389aaf
FROM `vw_util_finca_lotes`
ORDER BY `s35389aaf`
ERROR - 2024-08-12 01:13:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ', vw_util_finca_lotes.nombre_finca as s35389aaf
FROM `vw_util_finca_lotes`
ORDER' at line 1 - Invalid query: SELECT vw_util_finca_lotes., vw_util_finca_lotes.nombre_finca as s35389aaf
FROM `vw_util_finca_lotes`
ORDER BY `s35389aaf`
ERROR - 2024-08-12 01:14:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ', vw_util_finca_lotes.lote as s35389aaf
FROM `vw_util_finca_lotes`
ORDER BY `s35' at line 1 - Invalid query: SELECT vw_util_finca_lotes., vw_util_finca_lotes.lote as s35389aaf
FROM `vw_util_finca_lotes`
ORDER BY `s35389aaf`
ERROR - 2024-08-12 01:15:01 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 01:15:01 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 01:15:01 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 01:17:50 --> Severity: Notice --> Undefined property: stdClass::$nombre_finca /var/www/html/application/controllers/PM.php 248
ERROR - 2024-08-12 01:17:50 --> Severity: Notice --> Undefined property: stdClass::$lote /var/www/html/application/controllers/PM.php 248
ERROR - 2024-08-12 01:17:50 --> Severity: Notice --> Undefined property: stdClass::$nombre_finca /var/www/html/application/controllers/PM.php 248
ERROR - 2024-08-12 01:17:50 --> Severity: Notice --> Undefined property: stdClass::$lote /var/www/html/application/controllers/PM.php 248
ERROR - 2024-08-12 01:17:50 --> Severity: Notice --> Undefined property: stdClass::$nombre_finca /var/www/html/application/controllers/PM.php 248
ERROR - 2024-08-12 01:17:50 --> Severity: Notice --> Undefined property: stdClass::$lote /var/www/html/application/controllers/PM.php 248
ERROR - 2024-08-12 01:17:50 --> Severity: Notice --> Undefined property: stdClass::$nombre_finca /var/www/html/application/controllers/PM.php 248
ERROR - 2024-08-12 01:17:50 --> Severity: Notice --> Undefined property: stdClass::$lote /var/www/html/application/controllers/PM.php 248
ERROR - 2024-08-12 01:17:50 --> Severity: Notice --> Undefined property: stdClass::$nombre_finca /var/www/html/application/controllers/PM.php 248
ERROR - 2024-08-12 01:17:50 --> Severity: Notice --> Undefined property: stdClass::$lote /var/www/html/application/controllers/PM.php 248
ERROR - 2024-08-12 01:17:50 --> Severity: Notice --> Undefined property: stdClass::$nombre_finca /var/www/html/application/controllers/PM.php 248
ERROR - 2024-08-12 01:17:50 --> Severity: Notice --> Undefined property: stdClass::$lote /var/www/html/application/controllers/PM.php 248
ERROR - 2024-08-12 01:17:50 --> Severity: Notice --> Undefined property: stdClass::$nombre_finca /var/www/html/application/controllers/PM.php 248
ERROR - 2024-08-12 01:17:50 --> Severity: Notice --> Undefined property: stdClass::$lote /var/www/html/application/controllers/PM.php 248
ERROR - 2024-08-12 01:17:50 --> Severity: Notice --> Undefined property: stdClass::$nombre_finca /var/www/html/application/controllers/PM.php 248
ERROR - 2024-08-12 01:17:50 --> Severity: Notice --> Undefined property: stdClass::$lote /var/www/html/application/controllers/PM.php 248
ERROR - 2024-08-12 01:17:50 --> Severity: Notice --> Undefined property: stdClass::$nombre_finca /var/www/html/application/controllers/PM.php 248
ERROR - 2024-08-12 01:17:50 --> Severity: Notice --> Undefined property: stdClass::$lote /var/www/html/application/controllers/PM.php 248
ERROR - 2024-08-12 01:17:50 --> Severity: Notice --> Undefined property: stdClass::$nombre_finca /var/www/html/application/controllers/PM.php 248
ERROR - 2024-08-12 01:17:50 --> Severity: Notice --> Undefined property: stdClass::$lote /var/www/html/application/controllers/PM.php 248
ERROR - 2024-08-12 01:17:50 --> Severity: Notice --> Undefined property: stdClass::$nombre_finca /var/www/html/application/controllers/PM.php 248
ERROR - 2024-08-12 01:17:50 --> Severity: Notice --> Undefined property: stdClass::$lote /var/www/html/application/controllers/PM.php 248
ERROR - 2024-08-12 01:17:50 --> Severity: Notice --> Undefined property: stdClass::$nombre_finca /var/www/html/application/controllers/PM.php 248
ERROR - 2024-08-12 01:17:50 --> Severity: Notice --> Undefined property: stdClass::$lote /var/www/html/application/controllers/PM.php 248
ERROR - 2024-08-12 01:17:50 --> Severity: Notice --> Undefined property: stdClass::$nombre_finca /var/www/html/application/controllers/PM.php 248
ERROR - 2024-08-12 01:17:50 --> Severity: Notice --> Undefined property: stdClass::$lote /var/www/html/application/controllers/PM.php 248
ERROR - 2024-08-12 01:17:50 --> Severity: Notice --> Undefined property: stdClass::$nombre_finca /var/www/html/application/controllers/PM.php 248
ERROR - 2024-08-12 01:17:50 --> Severity: Notice --> Undefined property: stdClass::$lote /var/www/html/application/controllers/PM.php 248
ERROR - 2024-08-12 01:17:50 --> Severity: Notice --> Undefined property: stdClass::$nombre_finca /var/www/html/application/controllers/PM.php 248
ERROR - 2024-08-12 01:17:50 --> Severity: Notice --> Undefined property: stdClass::$lote /var/www/html/application/controllers/PM.php 248
ERROR - 2024-08-12 01:17:50 --> Severity: Notice --> Undefined property: stdClass::$nombre_finca /var/www/html/application/controllers/PM.php 248
ERROR - 2024-08-12 01:17:50 --> Severity: Notice --> Undefined property: stdClass::$lote /var/www/html/application/controllers/PM.php 248
ERROR - 2024-08-12 01:17:50 --> Severity: Notice --> Undefined property: stdClass::$nombre_finca /var/www/html/application/controllers/PM.php 248
ERROR - 2024-08-12 01:17:50 --> Severity: Notice --> Undefined property: stdClass::$lote /var/www/html/application/controllers/PM.php 248
ERROR - 2024-08-12 01:17:50 --> Severity: Notice --> Undefined property: stdClass::$nombre_finca /var/www/html/application/controllers/PM.php 248
ERROR - 2024-08-12 01:17:50 --> Severity: Notice --> Undefined property: stdClass::$lote /var/www/html/application/controllers/PM.php 248
ERROR - 2024-08-12 01:17:50 --> Severity: Notice --> Undefined property: stdClass::$nombre_finca /var/www/html/application/controllers/PM.php 248
ERROR - 2024-08-12 01:17:50 --> Severity: Notice --> Undefined property: stdClass::$lote /var/www/html/application/controllers/PM.php 248
ERROR - 2024-08-12 01:17:50 --> Severity: Notice --> Undefined property: stdClass::$nombre_finca /var/www/html/application/controllers/PM.php 248
ERROR - 2024-08-12 01:17:50 --> Severity: Notice --> Undefined property: stdClass::$lote /var/www/html/application/controllers/PM.php 248
ERROR - 2024-08-12 01:17:50 --> Severity: Notice --> Undefined property: stdClass::$nombre_finca /var/www/html/application/controllers/PM.php 248
ERROR - 2024-08-12 01:17:50 --> Severity: Notice --> Undefined property: stdClass::$lote /var/www/html/application/controllers/PM.php 248
ERROR - 2024-08-12 01:17:50 --> Severity: Notice --> Undefined property: stdClass::$nombre_finca /var/www/html/application/controllers/PM.php 248
ERROR - 2024-08-12 01:17:50 --> Severity: Notice --> Undefined property: stdClass::$lote /var/www/html/application/controllers/PM.php 248
ERROR - 2024-08-12 01:17:51 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 01:17:51 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 01:17:51 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 01:19:27 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 01:19:27 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 01:19:27 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 01:19:39 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 01:19:39 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 01:19:39 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 01:19:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ', vw_util_finca_lotes.lote as s35389aaf
FROM `vw_util_finca_lotes`
ORDER BY `s35' at line 1 - Invalid query: SELECT vw_util_finca_lotes., vw_util_finca_lotes.lote as s35389aaf
FROM `vw_util_finca_lotes`
ORDER BY `s35389aaf`
ERROR - 2024-08-12 01:20:14 --> Query error: Unknown database 'vw_util_finca_lotes' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `vw_util_finca_lotes`.`id`
ERROR - 2024-08-12 01:20:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '.`id`' at line 2 - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `lfp_agricontrol_dev`.`vw_util_finca_lotes`.`id`
ERROR - 2024-08-12 01:23:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ', vw_util_finca_lotes.lote as s35389aaf
FROM `vw_util_finca_lotes`
ORDER BY `s35' at line 1 - Invalid query: SELECT vw_util_finca_lotes., vw_util_finca_lotes.lote as s35389aaf
FROM `vw_util_finca_lotes`
ORDER BY `s35389aaf`
ERROR - 2024-08-12 01:23:46 --> Query error: Table 'lfp_agricontrol_dev.z_lotes' doesn't exist - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `z_lotes`
ERROR - 2024-08-12 01:23:59 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 01:23:59 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 01:23:59 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 01:24:51 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 56
ERROR - 2024-08-12 01:24:51 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 56
ERROR - 2024-08-12 01:24:51 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 56
ERROR - 2024-08-12 01:25:06 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 56
ERROR - 2024-08-12 01:25:06 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 56
ERROR - 2024-08-12 01:25:06 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 56
ERROR - 2024-08-12 01:25:52 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 56
ERROR - 2024-08-12 01:25:52 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 56
ERROR - 2024-08-12 01:25:52 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 56
ERROR - 2024-08-12 01:26:28 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 56
ERROR - 2024-08-12 01:26:28 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 56
ERROR - 2024-08-12 01:26:28 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 56
ERROR - 2024-08-12 01:29:12 --> 404 Page Not Found: PM/PM
ERROR - 2024-08-12 01:29:40 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 56
ERROR - 2024-08-12 01:29:40 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 56
ERROR - 2024-08-12 01:29:40 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 56
ERROR - 2024-08-12 01:35:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ', vw_util_finca_lotes.lote as s35389aaf
FROM `vw_util_finca_lotes`
ORDER BY `s35' at line 1 - Invalid query: SELECT vw_util_finca_lotes., vw_util_finca_lotes.lote as s35389aaf
FROM `vw_util_finca_lotes`
ORDER BY `s35389aaf`
ERROR - 2024-08-12 01:36:32 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 01:36:32 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 01:36:32 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 01:36:45 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 01:36:45 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 01:36:45 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 01:36:59 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 01:36:59 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 01:36:59 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 01:37:08 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 01:37:08 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 01:37:08 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 01:37:18 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 01:37:18 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 01:37:18 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 01:37:24 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 01:37:24 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 01:37:24 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 01:37:43 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 01:37:43 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 01:37:43 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 01:37:47 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 01:37:47 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 01:37:47 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 01:42:19 --> Severity: Notice --> Undefined property: stdClass::$id /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:20 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:20 --> Severity: Notice --> Undefined property: stdClass::$id /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:20 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:20 --> Severity: Notice --> Undefined property: stdClass::$id /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:20 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:20 --> Severity: Notice --> Undefined property: stdClass::$id /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:20 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:20 --> Severity: Notice --> Undefined property: stdClass::$id /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:20 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:20 --> Severity: Notice --> Undefined property: stdClass::$id /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:20 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:20 --> Severity: Notice --> Undefined property: stdClass::$id /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:20 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:20 --> Severity: Notice --> Undefined property: stdClass::$id /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:20 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:20 --> Severity: Notice --> Undefined property: stdClass::$id /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:20 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:20 --> Severity: Notice --> Undefined property: stdClass::$id /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:20 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:20 --> Severity: Notice --> Undefined property: stdClass::$id /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:20 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:20 --> Severity: Notice --> Undefined property: stdClass::$id /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:20 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:20 --> Severity: Notice --> Undefined property: stdClass::$id /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:20 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:20 --> Severity: Notice --> Undefined property: stdClass::$id /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:20 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:20 --> Severity: Notice --> Undefined property: stdClass::$id /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:20 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:20 --> Severity: Notice --> Undefined property: stdClass::$id /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:20 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:20 --> Severity: Notice --> Undefined property: stdClass::$id /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:20 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:20 --> Severity: Notice --> Undefined property: stdClass::$id /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:20 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:20 --> Severity: Notice --> Undefined property: stdClass::$id /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:20 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:20 --> Severity: Notice --> Undefined property: stdClass::$id /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:20 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:20 --> Severity: Notice --> Undefined property: stdClass::$id /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:20 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:20 --> Severity: Notice --> Undefined property: stdClass::$id /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:20 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:20 --> Severity: Notice --> Undefined property: stdClass::$id /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:20 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:20 --> Severity: Notice --> Undefined property: stdClass::$id /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:20 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:20 --> Severity: Notice --> Undefined property: stdClass::$id /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:20 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:20 --> Severity: Notice --> Undefined property: stdClass::$id /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:20 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:20 --> Severity: Notice --> Undefined property: stdClass::$id /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:20 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:20 --> Severity: Notice --> Undefined property: stdClass::$id /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:20 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:20 --> Severity: Notice --> Undefined property: stdClass::$id /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:20 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:20 --> Severity: Notice --> Undefined property: stdClass::$id /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:20 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:20 --> Severity: Notice --> Undefined property: stdClass::$id /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:20 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:20 --> Severity: Notice --> Undefined property: stdClass::$id /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:20 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:20 --> Severity: Notice --> Undefined property: stdClass::$id /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:20 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:20 --> Severity: Notice --> Undefined property: stdClass::$id /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:20 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:20 --> Severity: Notice --> Undefined property: stdClass::$id /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:20 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:20 --> Severity: Notice --> Undefined property: stdClass::$id /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:20 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:20 --> Severity: Notice --> Undefined property: stdClass::$id /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:20 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:20 --> Severity: Notice --> Undefined property: stdClass::$id /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:20 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:20 --> Severity: Notice --> Undefined property: stdClass::$id /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:20 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:20 --> Severity: Notice --> Undefined property: stdClass::$id /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:20 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:20 --> Severity: Notice --> Undefined property: stdClass::$id /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:20 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:20 --> Severity: Notice --> Undefined property: stdClass::$id /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:20 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:20 --> Severity: Notice --> Undefined property: stdClass::$id /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:20 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:20 --> Severity: Notice --> Undefined property: stdClass::$id /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:20 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:20 --> Severity: Notice --> Undefined property: stdClass::$id /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:20 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:20 --> Severity: Notice --> Undefined property: stdClass::$id /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:21 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:21 --> Severity: Notice --> Undefined property: stdClass::$id /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:21 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:21 --> Severity: Notice --> Undefined property: stdClass::$id /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:21 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:21 --> Severity: Notice --> Undefined property: stdClass::$id /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:21 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:21 --> Severity: Notice --> Undefined property: stdClass::$id /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:21 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:21 --> Severity: Notice --> Undefined property: stdClass::$id /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:21 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:21 --> Severity: Notice --> Undefined property: stdClass::$id /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:21 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:21 --> Severity: Notice --> Undefined property: stdClass::$id /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:21 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:21 --> Severity: Notice --> Undefined property: stdClass::$id /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:21 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:21 --> Severity: Notice --> Undefined property: stdClass::$id /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:21 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:21 --> Severity: Notice --> Undefined property: stdClass::$id /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:21 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:21 --> Severity: Notice --> Undefined property: stdClass::$id /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:21 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:21 --> Severity: Notice --> Undefined property: stdClass::$id /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:21 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:21 --> Severity: Notice --> Undefined property: stdClass::$id /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:21 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:21 --> Severity: Notice --> Undefined property: stdClass::$id /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:21 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:21 --> Severity: Notice --> Undefined property: stdClass::$id /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:21 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:21 --> Severity: Notice --> Undefined property: stdClass::$id /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:21 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:21 --> Severity: Notice --> Undefined property: stdClass::$id /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:21 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:21 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 01:42:21 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 01:42:21 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 01:42:40 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:40 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:40 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:40 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:40 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:40 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:40 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:40 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:40 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:40 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:40 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:40 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:40 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:40 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:40 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:40 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:40 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:40 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:40 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:40 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:40 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:40 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:40 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:40 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:40 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:40 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:40 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:40 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:40 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:40 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:40 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:40 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:40 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:40 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:40 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:40 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:40 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:40 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:40 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:40 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:40 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:40 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:40 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:40 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:40 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:40 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:40 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:40 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:40 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:40 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:40 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:40 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:40 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:40 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:40 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:40 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:40 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:40 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:40 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:40 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:40 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:40 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:40 --> Severity: Notice --> Undefined property: stdClass::$modulo /var/www/html/application/controllers/PM.php 257
ERROR - 2024-08-12 01:42:40 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 01:42:40 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 01:42:40 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 01:45:52 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 01:45:52 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 01:45:52 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 01:46:24 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 01:46:24 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 01:46:24 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 01:46:36 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 01:46:36 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 01:46:36 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 01:46:41 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 01:46:41 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 01:46:41 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 01:46:51 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 01:46:51 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 01:46:51 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 01:47:41 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 01:47:41 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 01:47:41 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 08:02:33 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-report.php 28
ERROR - 2024-08-12 08:02:33 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-report.php 28
ERROR - 2024-08-12 08:02:33 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-report.php 28
ERROR - 2024-08-12 08:03:51 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 08:03:51 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 08:03:51 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 08:06:41 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 08:06:41 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 08:06:41 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 08:07:48 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 08:07:48 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 08:07:48 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 08:10:28 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 08:10:28 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 08:10:28 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 08:12:02 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 08:12:02 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 08:12:02 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 08:15:04 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 08:15:04 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 08:15:04 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 08:15:19 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 08:15:19 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 08:15:19 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 09:53:05 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 09:53:05 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 09:53:05 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 10:00:53 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 10:00:53 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 10:00:53 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 10:02:20 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 10:02:20 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 10:02:20 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 10:02:27 --> Severity: error --> Exception: Call to undefined method CI_Form_validation::set_error_message() /var/www/html/application/controllers/PM.php 340
ERROR - 2024-08-12 10:03:45 --> Severity: error --> Exception: Call to undefined method CI_Form_validation::set_error_message() /var/www/html/application/controllers/PM.php 340
ERROR - 2024-08-12 10:03:49 --> Severity: error --> Exception: Call to undefined method CI_Form_validation::set_error_message() /var/www/html/application/controllers/PM.php 340
ERROR - 2024-08-12 10:04:41 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 10:04:41 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 10:04:41 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 10:26:23 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 10:26:23 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 10:26:23 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 10:26:27 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 10:26:27 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 10:26:27 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 10:31:04 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 10:31:04 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 10:31:04 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 10:31:58 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 10:31:58 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 10:31:58 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 10:32:03 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 10:32:03 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 10:32:03 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 10:32:06 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 10:32:06 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 10:32:06 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 10:33:11 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 10:33:11 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 10:33:11 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 10:33:29 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 10:33:29 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 10:33:29 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 10:33:33 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 10:33:33 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 10:33:33 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 10:33:40 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 10:33:40 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 10:33:40 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 10:34:00 --> Severity: error --> Exception: Call to undefined method CI_Form_validation::set_error_message() /var/www/html/application/controllers/PM.php 340
ERROR - 2024-08-12 11:03:36 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 11:03:36 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 11:03:36 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 11:18:33 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 11:18:33 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 11:18:33 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 21:51:12 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-report.php 28
ERROR - 2024-08-12 21:51:12 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-report.php 28
ERROR - 2024-08-12 21:51:12 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-report.php 28
ERROR - 2024-08-12 21:51:15 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 21:51:15 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 21:51:15 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 21:51:21 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 21:51:21 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 21:51:21 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 21:52:10 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 21:52:10 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 21:52:10 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 21:52:16 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 21:52:16 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 21:52:16 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 21:52:36 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 21:52:36 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 21:52:36 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 21:53:29 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-report.php 28
ERROR - 2024-08-12 21:53:29 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-report.php 28
ERROR - 2024-08-12 21:53:29 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-report.php 28
ERROR - 2024-08-12 21:53:31 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 21:53:31 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 21:53:31 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 21:54:10 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 21:54:10 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 21:54:10 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 21:54:17 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 21:54:17 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 21:54:17 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 21:55:44 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 21:55:44 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 21:55:44 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 21:56:29 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 21:56:29 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 21:56:29 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 21:56:47 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 21:56:47 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 21:56:47 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 22:45:03 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-report.php 28
ERROR - 2024-08-12 22:45:03 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-report.php 28
ERROR - 2024-08-12 22:45:03 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-report.php 28
ERROR - 2024-08-12 22:45:21 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/date-range_filter.php 25
ERROR - 2024-08-12 22:45:21 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/date-range_filter.php 25
ERROR - 2024-08-12 22:45:21 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/date-range_filter.php 25
ERROR - 2024-08-12 22:45:21 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/date-range_filter.php 25
ERROR - 2024-08-12 22:45:21 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/date-range_filter.php 25
ERROR - 2024-08-12 22:45:21 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/date-range_filter.php 25
ERROR - 2024-08-12 23:02:38 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 23:02:38 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 23:02:38 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 23:03:34 --> Severity: Notice --> Undefined index: modulo /var/www/html/application/controllers/PM.php 356
ERROR - 2024-08-12 23:03:34 --> Query error: Unknown column 'id_modulo' in 'where clause' - Invalid query: SELECT *
FROM `z_modulo`
WHERE `id_modulo` = ''
AND `lote_id` = '1'
ERROR - 2024-08-12 23:03:34 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/system/core/Exceptions.php:271) /var/www/html/system/core/Common.php 570
ERROR - 2024-08-12 23:03:55 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 23:03:55 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 23:03:55 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 23:04:00 --> Severity: Notice --> Undefined index: modulo /var/www/html/application/controllers/PM.php 356
ERROR - 2024-08-12 23:04:00 --> Query error: Unknown column 'id_modulo' in 'where clause' - Invalid query: SELECT *
FROM `z_modulo`
WHERE `id_modulo` = ''
AND `lote_id` = '1'
ERROR - 2024-08-12 23:04:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/system/core/Exceptions.php:271) /var/www/html/system/core/Common.php 570
ERROR - 2024-08-12 23:04:12 --> Severity: Warning --> explode() expects parameter 2 to be string, array given /var/www/html/application/controllers/PM.php 359
ERROR - 2024-08-12 23:04:12 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/application/controllers/PM.php 362
ERROR - 2024-08-12 23:07:39 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 23:07:39 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 23:07:39 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 23:07:51 --> Severity: Warning --> explode() expects parameter 2 to be string, array given /var/www/html/application/controllers/PM.php 359
ERROR - 2024-08-12 23:07:51 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/application/controllers/PM.php 362
ERROR - 2024-08-12 23:07:58 --> Severity: Warning --> explode() expects parameter 2 to be string, array given /var/www/html/application/controllers/PM.php 359
ERROR - 2024-08-12 23:07:58 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/application/controllers/PM.php 362
ERROR - 2024-08-12 23:08:07 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 23:08:07 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 23:08:07 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 23:08:16 --> Severity: Warning --> explode() expects parameter 2 to be string, array given /var/www/html/application/controllers/PM.php 359
ERROR - 2024-08-12 23:08:16 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/application/controllers/PM.php 362
ERROR - 2024-08-12 23:08:22 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 23:08:22 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 23:08:22 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 23:09:51 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 23:09:51 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 23:09:51 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 23:10:26 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 23:10:26 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 23:10:26 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-08-12 23:10:28 --> Severity: Warning --> explode() expects parameter 2 to be string, array given /var/www/html/application/controllers/PM.php 353
ERROR - 2024-08-12 23:10:28 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/application/controllers/PM.php 356
ERROR - 2024-08-12 23:16:02 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/date-range_filter.php 25
ERROR - 2024-08-12 23:16:02 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/date-range_filter.php 25
ERROR - 2024-08-12 23:16:03 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/date-range_filter.php 25
ERROR - 2024-08-12 23:16:11 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/farm-date_filter.php 25
ERROR - 2024-08-12 23:16:11 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/farm-date_filter.php 25
ERROR - 2024-08-12 23:16:11 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/farm-date_filter.php 25
ERROR - 2024-08-12 23:17:30 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/date-range_filter.php 25
ERROR - 2024-08-12 23:17:30 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/date-range_filter.php 25
ERROR - 2024-08-12 23:17:30 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/date-range_filter.php 25
ERROR - 2024-08-12 23:51:32 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/date-range_filter.php 25
ERROR - 2024-08-12 23:51:32 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/date-range_filter.php 25
ERROR - 2024-08-12 23:51:32 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/date-range_filter.php 25
ERROR - 2024-08-12 23:51:34 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/farm-date_filter.php 25
ERROR - 2024-08-12 23:51:34 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/farm-date_filter.php 25
ERROR - 2024-08-12 23:51:34 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/farm-date_filter.php 25
ERROR - 2024-08-12 23:52:28 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/farm-date_filter.php 25
ERROR - 2024-08-12 23:52:28 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/farm-date_filter.php 25
ERROR - 2024-08-12 23:52:28 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/farm-date_filter.php 25
ERROR - 2024-08-12 23:52:33 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/farm-date_filter.php 25
ERROR - 2024-08-12 23:52:33 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/farm-date_filter.php 25
ERROR - 2024-08-12 23:52:33 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/farm-date_filter.php 25
ERROR - 2024-08-12 23:53:31 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/date-range_filter.php 25
ERROR - 2024-08-12 23:53:32 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/date-range_filter.php 25
ERROR - 2024-08-12 23:53:32 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/date-range_filter.php 25
ERROR - 2024-08-12 23:53:34 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/date-range_filter.php 25
ERROR - 2024-08-12 23:53:34 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/date-range_filter.php 25
ERROR - 2024-08-12 23:53:34 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/date-range_filter.php 25
ERROR - 2024-08-12 23:55:03 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/date-range_filter.php 25
ERROR - 2024-08-12 23:55:03 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/date-range_filter.php 25
ERROR - 2024-08-12 23:55:03 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/date-range_filter.php 25
ERROR - 2024-08-12 23:55:17 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/date-range_filter.php 25
ERROR - 2024-08-12 23:55:17 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/date-range_filter.php 25
ERROR - 2024-08-12 23:55:17 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/date-range_filter.php 25
ERROR - 2024-08-12 23:59:17 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/date-range_filter.php 25
ERROR - 2024-08-12 23:59:17 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/date-range_filter.php 25
ERROR - 2024-08-12 23:59:17 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/date-range_filter.php 25
