<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-11-01 12:02:35 --> Severity: Notice --> Undefined variable: IdFinca C:\Users\raymundo\Documents\_desarrollo\_giteaBisstox\BellitaAgricontrolWeb\application\views\Crud\pm-report.php 25
ERROR - 2023-11-01 12:02:35 --> Severity: Notice --> Undefined variable: IdFinca C:\Users\raymundo\Documents\_desarrollo\_giteaBisstox\BellitaAgricontrolWeb\application\views\Crud\pm-report.php 25
ERROR - 2023-11-01 12:02:35 --> Severity: Notice --> Undefined variable: IdFinca C:\Users\raymundo\Documents\_desarrollo\_giteaBisstox\BellitaAgricontrolWeb\application\views\Crud\pm-report.php 25
ERROR - 2023-11-01 12:04:41 --> Severity: Notice --> Undefined variable: IdFinca C:\Users\raymundo\Documents\_desarrollo\_giteaBisstox\BellitaAgricontrolWeb\application\views\Crud\date-range_filter.php 25
ERROR - 2023-11-01 12:04:41 --> Severity: Notice --> Undefined variable: IdFinca C:\Users\raymundo\Documents\_desarrollo\_giteaBisstox\BellitaAgricontrolWeb\application\views\Crud\date-range_filter.php 25
ERROR - 2023-11-01 12:04:41 --> Severity: Notice --> Undefined variable: IdFinca C:\Users\raymundo\Documents\_desarrollo\_giteaBisstox\BellitaAgricontrolWeb\application\views\Crud\date-range_filter.php 25
ERROR - 2023-11-01 12:05:27 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lfp_prodapp_dev.z_cosecha_cacao.supervisor' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `vw_cosecha_cacao_resumen`.*, j09348c20.nombre AS s09348c20, jd33ef40c.nombre AS sd33ef40c, j35389aaf.lote AS s35389aaf, `vw_cosecha_cacao_resumen`.lote AS 'vw_cosecha_cacao_resumen.lote', j5dcb4a1e.modulo AS s5dcb4a1e, `vw_cosecha_cacao_resumen`.modulo AS 'vw_cosecha_cacao_resumen.modulo'
FROM `vw_cosecha_cacao_resumen`
LEFT JOIN `z_personal` as `j09348c20` ON `j09348c20`.`id` = `vw_cosecha_cacao_resumen`.`supervisor`
LEFT JOIN `z_finca` as `jd33ef40c` ON `jd33ef40c`.`id` = `vw_cosecha_cacao_resumen`.`finca`
LEFT JOIN `z_lote` as `j35389aaf` ON `j35389aaf`.`id` = `vw_cosecha_cacao_resumen`.`lote`
LEFT JOIN `z_modulo` as `j5dcb4a1e` ON `j5dcb4a1e`.`id` = `vw_cosecha_cacao_resumen`.`modulo`
ERROR - 2023-11-01 23:20:50 --> Severity: Notice --> Undefined variable: IdFinca C:\Users\raymundo\Documents\_desarrollo\_giteaBisstox\BellitaAgricontrolWeb\application\views\Crud\pm-report.php 25
ERROR - 2023-11-01 23:20:50 --> Severity: Notice --> Undefined variable: IdFinca C:\Users\raymundo\Documents\_desarrollo\_giteaBisstox\BellitaAgricontrolWeb\application\views\Crud\pm-report.php 25
ERROR - 2023-11-01 23:20:50 --> Severity: Notice --> Undefined variable: IdFinca C:\Users\raymundo\Documents\_desarrollo\_giteaBisstox\BellitaAgricontrolWeb\application\views\Crud\pm-report.php 25
ERROR - 2023-11-01 23:21:05 --> Query error: Unknown column 'vw_cosecha_cacao_resumen.modulo' in 'on clause' - Invalid query: SELECT `vw_cosecha_cacao_resumen`.*, j09348c20.nombre AS s09348c20, jd33ef40c.nombre AS sd33ef40c, j35389aaf.lote AS s35389aaf, `vw_cosecha_cacao_resumen`.lote AS 'vw_cosecha_cacao_resumen.lote', j5dcb4a1e.modulo AS s5dcb4a1e
FROM `vw_cosecha_cacao_resumen`
LEFT JOIN `z_personal` as `j09348c20` ON `j09348c20`.`id` = `vw_cosecha_cacao_resumen`.`supervisor`
LEFT JOIN `z_finca` as `jd33ef40c` ON `jd33ef40c`.`id` = `vw_cosecha_cacao_resumen`.`finca`
LEFT JOIN `z_lote` as `j35389aaf` ON `j35389aaf`.`id` = `vw_cosecha_cacao_resumen`.`lote`
LEFT JOIN `z_modulo` as `j5dcb4a1e` ON `j5dcb4a1e`.`id` = `vw_cosecha_cacao_resumen`.`modulo`
ERROR - 2023-11-01 23:21:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROM `vw_cosecha_cacao_resumen`' at line 2 - Invalid query: SELECT `vw_cosecha_cacao_resumen`.
FROM `vw_cosecha_cacao_resumen`
ERROR - 2023-11-01 23:54:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROM `vw_cosecha_cacao_resumen`' at line 2 - Invalid query: SELECT `vw_cosecha_cacao_resumen`.
FROM `vw_cosecha_cacao_resumen`
