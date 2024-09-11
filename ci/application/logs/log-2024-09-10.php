<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-09-10 17:40:56 --> Query error: The user specified as a definer ('admin'@'%') does not exist - Invalid query: SELECT `vw_reporte_pm`.*, j35389aaf.lote AS s35389aaf, `vw_reporte_pm`.lote AS 'vw_reporte_pm.lote'
FROM `vw_reporte_pm`
LEFT JOIN `z_lote` as `j35389aaf` ON `j35389aaf`.`id` = `vw_reporte_pm`.`lote`
WHERE `fecha` >= "1969-12-31"
AND `fecha` <= "1969-12-31"
ERROR - 2024-09-10 17:40:56 --> Severity: Warning --> chmod(): Operation not permitted /var/www/html/system/core/Log.php 233
ERROR - 2024-09-10 17:40:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/system/core/Exceptions.php:271) /var/www/html/system/core/Common.php 570
ERROR - 2024-09-10 17:41:27 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-report.php 28
ERROR - 2024-09-10 17:41:27 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-report.php 28
ERROR - 2024-09-10 17:41:27 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-report.php 28
ERROR - 2024-09-10 17:41:32 --> Query error: Expression #3 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lfp_devapp.zta.finca' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `vw_reporte_am_base`.*
FROM `vw_reporte_am_base`
WHERE `fecha` = '1969-12-31'
ERROR - 2024-09-10 17:46:15 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-report.php 28
ERROR - 2024-09-10 17:46:15 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-report.php 28
ERROR - 2024-09-10 17:46:15 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-report.php 28
ERROR - 2024-09-10 17:46:17 --> Severity: Notice --> Undefined variable: data /var/www/html/application/views/Crud/farm-date_filter.php 20
ERROR - 2024-09-10 17:46:17 --> Severity: Notice --> Trying to access array offset on value of type null /var/www/html/application/views/Crud/farm-date_filter.php 20
ERROR - 2024-09-10 17:46:17 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/application/views/Crud/farm-date_filter.php 24
ERROR - 2024-09-10 17:46:20 --> Severity: Notice --> Undefined variable: data /var/www/html/application/views/Crud/farm-date_filter.php 20
ERROR - 2024-09-10 17:46:20 --> Severity: Notice --> Trying to access array offset on value of type null /var/www/html/application/views/Crud/farm-date_filter.php 20
ERROR - 2024-09-10 17:46:20 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/application/views/Crud/farm-date_filter.php 24
ERROR - 2024-09-10 17:46:22 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/date-range_filter.php 25
ERROR - 2024-09-10 17:46:22 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/date-range_filter.php 25
ERROR - 2024-09-10 17:46:22 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/date-range_filter.php 25
ERROR - 2024-09-10 17:46:24 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/date-range_filter.php 25
ERROR - 2024-09-10 17:46:24 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/date-range_filter.php 25
ERROR - 2024-09-10 17:46:24 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/date-range_filter.php 25
ERROR - 2024-09-10 17:46:26 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/date-range_filter.php 25
ERROR - 2024-09-10 17:46:26 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/date-range_filter.php 25
ERROR - 2024-09-10 17:46:26 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/date-range_filter.php 25
ERROR - 2024-09-10 17:46:40 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/farm-date_filter.php 25
ERROR - 2024-09-10 17:46:40 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/farm-date_filter.php 25
ERROR - 2024-09-10 17:46:40 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/farm-date_filter.php 25
ERROR - 2024-09-10 17:46:42 --> Query error: The user specified as a definer ('admin'@'%') does not exist - Invalid query: SELECT `z_tabla_pm`.*, jd33ef40c.nombre AS sd33ef40c, j636d61cf.nombre AS s636d61cf, j293c7f68.nombre AS s293c7f68, jbf700765.nombre AS sbf700765, CONCAT('', COALESCE(j35389aaf.nombre_finca, ''), '&nbsp;-&nbsp;Lote&nbsp;', COALESCE(j35389aaf.lote, ''), '') as s35389aaf, jd019f3b5.nombre_subtarea AS sd019f3b5
FROM `z_tabla_pm`
LEFT JOIN `z_finca` as `jd33ef40c` ON `jd33ef40c`.`id` = `z_tabla_pm`.`finca`
LEFT JOIN `z_personal` as `j636d61cf` ON `j636d61cf`.`id` = `z_tabla_pm`.`responsable`
LEFT JOIN `z_personal` as `j293c7f68` ON `j293c7f68`.`id` = `z_tabla_pm`.`trabajador`
LEFT JOIN `z_cultivo` as `jbf700765` ON `jbf700765`.`id` = `z_tabla_pm`.`cultivo`
LEFT JOIN `vw_util_finca_lotes` as `j35389aaf` ON `j35389aaf`.`id` = `z_tabla_pm`.`lote`
LEFT JOIN `z_subtarea` as `jd019f3b5` ON `jd019f3b5`.`id` = `z_tabla_pm`.`subtarea`
WHERE `fecha` >= "1969-12-31"
AND `fecha` <= "1969-12-31"
ERROR - 2024-09-10 17:47:26 --> Query error: The user specified as a definer ('admin'@'%') does not exist - Invalid query: SELECT `z_tabla_pm`.*, jd33ef40c.nombre AS sd33ef40c, j636d61cf.nombre AS s636d61cf, j293c7f68.nombre AS s293c7f68, jbf700765.nombre AS sbf700765, CONCAT('', COALESCE(j35389aaf.nombre_finca, ''), '&nbsp;-&nbsp;Lote&nbsp;', COALESCE(j35389aaf.lote, ''), '') as s35389aaf, jd019f3b5.nombre_subtarea AS sd019f3b5
FROM `z_tabla_pm`
LEFT JOIN `z_finca` as `jd33ef40c` ON `jd33ef40c`.`id` = `z_tabla_pm`.`finca`
LEFT JOIN `z_personal` as `j636d61cf` ON `j636d61cf`.`id` = `z_tabla_pm`.`responsable`
LEFT JOIN `z_personal` as `j293c7f68` ON `j293c7f68`.`id` = `z_tabla_pm`.`trabajador`
LEFT JOIN `z_cultivo` as `jbf700765` ON `jbf700765`.`id` = `z_tabla_pm`.`cultivo`
LEFT JOIN `vw_util_finca_lotes` as `j35389aaf` ON `j35389aaf`.`id` = `z_tabla_pm`.`lote`
LEFT JOIN `z_subtarea` as `jd019f3b5` ON `jd019f3b5`.`id` = `z_tabla_pm`.`subtarea`
WHERE `fecha` >= "1969-12-31"
AND `fecha` <= "1969-12-31"
ERROR - 2024-09-10 22:46:50 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-report.php 28
ERROR - 2024-09-10 22:46:50 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-report.php 28
ERROR - 2024-09-10 22:46:50 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-report.php 28
ERROR - 2024-09-10 22:46:52 --> Query error: The user specified as a definer ('admin'@'%') does not exist - Invalid query: SELECT `z_tabla_pm`.*, jd33ef40c.nombre AS sd33ef40c, j636d61cf.nombre AS s636d61cf, j293c7f68.nombre AS s293c7f68, jbf700765.nombre AS sbf700765, CONCAT('', COALESCE(j35389aaf.nombre_finca, ''), '&nbsp;-&nbsp;Lote&nbsp;', COALESCE(j35389aaf.lote, ''), '') as s35389aaf, jd019f3b5.nombre_subtarea AS sd019f3b5
FROM `z_tabla_pm`
LEFT JOIN `z_finca` as `jd33ef40c` ON `jd33ef40c`.`id` = `z_tabla_pm`.`finca`
LEFT JOIN `z_personal` as `j636d61cf` ON `j636d61cf`.`id` = `z_tabla_pm`.`responsable`
LEFT JOIN `z_personal` as `j293c7f68` ON `j293c7f68`.`id` = `z_tabla_pm`.`trabajador`
LEFT JOIN `z_cultivo` as `jbf700765` ON `jbf700765`.`id` = `z_tabla_pm`.`cultivo`
LEFT JOIN `vw_util_finca_lotes` as `j35389aaf` ON `j35389aaf`.`id` = `z_tabla_pm`.`lote`
LEFT JOIN `z_subtarea` as `jd019f3b5` ON `jd019f3b5`.`id` = `z_tabla_pm`.`subtarea`
WHERE `fecha` >= "1969-12-31"
AND `fecha` <= "1969-12-31"
ERROR - 2024-09-10 22:47:20 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-09-10 22:47:20 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-09-10 22:47:20 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/pm-edit.php 27
ERROR - 2024-09-10 22:47:23 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/farm-date_filter.php 25
ERROR - 2024-09-10 22:47:23 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/farm-date_filter.php 25
ERROR - 2024-09-10 22:47:23 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/farm-date_filter.php 25
ERROR - 2024-09-10 22:47:34 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/date-range_filter.php 25
ERROR - 2024-09-10 22:47:34 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/date-range_filter.php 25
ERROR - 2024-09-10 22:47:34 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/date-range_filter.php 25
ERROR - 2024-09-10 22:47:36 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/date-range_filter.php 25
ERROR - 2024-09-10 22:47:36 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/date-range_filter.php 25
ERROR - 2024-09-10 22:47:36 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/date-range_filter.php 25
ERROR - 2024-09-10 22:47:37 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/date-range_filter.php 25
ERROR - 2024-09-10 22:47:37 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/date-range_filter.php 25
ERROR - 2024-09-10 22:47:37 --> Severity: Notice --> Undefined variable: IdFinca /var/www/html/application/views/Crud/date-range_filter.php 25
ERROR - 2024-09-10 22:47:40 --> Severity: Notice --> Undefined variable: data /var/www/html/application/views/Crud/farm-date_filter.php 20
ERROR - 2024-09-10 22:47:40 --> Severity: Notice --> Trying to access array offset on value of type null /var/www/html/application/views/Crud/farm-date_filter.php 20
ERROR - 2024-09-10 22:47:40 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/application/views/Crud/farm-date_filter.php 24
ERROR - 2024-09-10 22:47:42 --> Severity: Notice --> Undefined variable: data /var/www/html/application/views/Crud/farm-date_filter.php 20
ERROR - 2024-09-10 22:47:42 --> Severity: Notice --> Trying to access array offset on value of type null /var/www/html/application/views/Crud/farm-date_filter.php 20
ERROR - 2024-09-10 22:47:42 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/application/views/Crud/farm-date_filter.php 24
