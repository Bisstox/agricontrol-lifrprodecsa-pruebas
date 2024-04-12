<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-10-24 00:14:31 --> 404 Page Not Found: Api2/index
ERROR - 2023-10-24 11:00:25 --> 404 Page Not Found: Api2/fincas
ERROR - 2023-10-24 11:00:26 --> 404 Page Not Found: Api2/cultivos
ERROR - 2023-10-24 11:00:26 --> 404 Page Not Found: Api2/lotes
ERROR - 2023-10-24 11:00:26 --> 404 Page Not Found: Api2/personal
ERROR - 2023-10-24 11:00:26 --> 404 Page Not Found: Api2/modulos
ERROR - 2023-10-24 11:00:26 --> 404 Page Not Found: Api2/fincas
ERROR - 2023-10-24 11:00:27 --> 404 Page Not Found: Api2/ulabores
ERROR - 2023-10-24 11:00:27 --> 404 Page Not Found: Api2/subtareas
ERROR - 2023-10-24 11:00:27 --> 404 Page Not Found: Api2/cultivos
ERROR - 2023-10-24 11:00:27 --> 404 Page Not Found: Api2/lotes
ERROR - 2023-10-24 11:00:27 --> 404 Page Not Found: Api2/personal
ERROR - 2023-10-24 11:00:28 --> 404 Page Not Found: Api2/modulos
ERROR - 2023-10-24 11:00:28 --> 404 Page Not Found: Api2/fincas
ERROR - 2023-10-24 11:00:28 --> 404 Page Not Found: Api2/ulabores
ERROR - 2023-10-24 11:00:28 --> 404 Page Not Found: Api2/subtareas
ERROR - 2023-10-24 11:00:28 --> 404 Page Not Found: Api2/cultivos
ERROR - 2023-10-24 11:00:29 --> 404 Page Not Found: Api2/lotes
ERROR - 2023-10-24 11:00:29 --> 404 Page Not Found: Api2/personal
ERROR - 2023-10-24 11:00:29 --> 404 Page Not Found: Api2/modulos
ERROR - 2023-10-24 11:00:29 --> 404 Page Not Found: Api2/ulabores
ERROR - 2023-10-24 11:00:29 --> 404 Page Not Found: Api2/subtareas
ERROR - 2023-10-24 12:29:53 --> Severity: Notice --> Undefined variable: IdFinca /app/myapp/application/views/Crud/pm-report.php 25
ERROR - 2023-10-24 12:29:53 --> Severity: Notice --> Undefined variable: IdFinca /app/myapp/application/views/Crud/pm-report.php 25
ERROR - 2023-10-24 12:29:53 --> Severity: Notice --> Undefined variable: IdFinca /app/myapp/application/views/Crud/pm-report.php 25
ERROR - 2023-10-24 12:30:01 --> 404 Page Not Found: Cosechacacao/index
ERROR - 2023-10-24 12:30:08 --> 404 Page Not Found: Cosechacacao/index
ERROR - 2023-10-24 12:57:01 --> Query error: Unknown column 'vw_cosecha_cacao_resumen.supervisor' in 'on clause' - Invalid query: SELECT `vw_cosecha_cacao_resumen`.*, j09348c20.nombre AS s09348c20, jd019f3b5.nombre_subtarea AS sd019f3b5, jd33ef40c.nombre AS sd33ef40c, j293c7f68.nombre AS s293c7f68, j5f59e63e.nombre AS s5f59e63e, j35389aaf.lote AS s35389aaf, `vw_cosecha_cacao_resumen`.lote AS 'vw_cosecha_cacao_resumen.lote', j5dcb4a1e.modulo AS s5dcb4a1e, `vw_cosecha_cacao_resumen`.modulo AS 'vw_cosecha_cacao_resumen.modulo'
FROM `vw_cosecha_cacao_resumen`
LEFT JOIN `z_personal` as `j09348c20` ON `j09348c20`.`id` = `vw_cosecha_cacao_resumen`.`supervisor`
LEFT JOIN `z_subtarea` as `jd019f3b5` ON `jd019f3b5`.`id` = `vw_cosecha_cacao_resumen`.`subtarea`
LEFT JOIN `z_finca` as `jd33ef40c` ON `jd33ef40c`.`id` = `vw_cosecha_cacao_resumen`.`finca`
LEFT JOIN `z_personal` as `j293c7f68` ON `j293c7f68`.`id` = `vw_cosecha_cacao_resumen`.`trabajador`
LEFT JOIN `z_tarea` as `j5f59e63e` ON `j5f59e63e`.`id` = `vw_cosecha_cacao_resumen`.`tarea`
LEFT JOIN `z_lote` as `j35389aaf` ON `j35389aaf`.`id` = `vw_cosecha_cacao_resumen`.`lote`
LEFT JOIN `z_modulo` as `j5dcb4a1e` ON `j5dcb4a1e`.`id` = `vw_cosecha_cacao_resumen`.`modulo`
ERROR - 2023-10-24 12:57:21 --> Query error: Unknown column 'vw_cosecha_cacao_resumen.supervisor' in 'on clause' - Invalid query: SELECT `vw_cosecha_cacao_resumen`.*, j09348c20.nombre AS s09348c20, jd019f3b5.nombre_subtarea AS sd019f3b5, jd33ef40c.nombre AS sd33ef40c, j293c7f68.nombre AS s293c7f68, j5f59e63e.nombre AS s5f59e63e, j35389aaf.lote AS s35389aaf, `vw_cosecha_cacao_resumen`.lote AS 'vw_cosecha_cacao_resumen.lote', j5dcb4a1e.modulo AS s5dcb4a1e, `vw_cosecha_cacao_resumen`.modulo AS 'vw_cosecha_cacao_resumen.modulo'
FROM `vw_cosecha_cacao_resumen`
LEFT JOIN `z_personal` as `j09348c20` ON `j09348c20`.`id` = `vw_cosecha_cacao_resumen`.`supervisor`
LEFT JOIN `z_subtarea` as `jd019f3b5` ON `jd019f3b5`.`id` = `vw_cosecha_cacao_resumen`.`subtarea`
LEFT JOIN `z_finca` as `jd33ef40c` ON `jd33ef40c`.`id` = `vw_cosecha_cacao_resumen`.`finca`
LEFT JOIN `z_personal` as `j293c7f68` ON `j293c7f68`.`id` = `vw_cosecha_cacao_resumen`.`trabajador`
LEFT JOIN `z_tarea` as `j5f59e63e` ON `j5f59e63e`.`id` = `vw_cosecha_cacao_resumen`.`tarea`
LEFT JOIN `z_lote` as `j35389aaf` ON `j35389aaf`.`id` = `vw_cosecha_cacao_resumen`.`lote`
LEFT JOIN `z_modulo` as `j5dcb4a1e` ON `j5dcb4a1e`.`id` = `vw_cosecha_cacao_resumen`.`modulo`
ERROR - 2023-10-24 12:58:40 --> Query error: Unknown column 'vw_cosecha_cacao_resumen.supervisor' in 'on clause' - Invalid query: SELECT `vw_cosecha_cacao_resumen`.*, j09348c20.nombre AS s09348c20, jd019f3b5.nombre_subtarea AS sd019f3b5, jd33ef40c.nombre AS sd33ef40c, j293c7f68.nombre AS s293c7f68, j5f59e63e.nombre AS s5f59e63e, j35389aaf.lote AS s35389aaf, `vw_cosecha_cacao_resumen`.lote AS 'vw_cosecha_cacao_resumen.lote', j5dcb4a1e.modulo AS s5dcb4a1e, `vw_cosecha_cacao_resumen`.modulo AS 'vw_cosecha_cacao_resumen.modulo'
FROM `vw_cosecha_cacao_resumen`
LEFT JOIN `z_personal` as `j09348c20` ON `j09348c20`.`id` = `vw_cosecha_cacao_resumen`.`supervisor`
LEFT JOIN `z_subtarea` as `jd019f3b5` ON `jd019f3b5`.`id` = `vw_cosecha_cacao_resumen`.`subtarea`
LEFT JOIN `z_finca` as `jd33ef40c` ON `jd33ef40c`.`id` = `vw_cosecha_cacao_resumen`.`finca`
LEFT JOIN `z_personal` as `j293c7f68` ON `j293c7f68`.`id` = `vw_cosecha_cacao_resumen`.`trabajador`
LEFT JOIN `z_tarea` as `j5f59e63e` ON `j5f59e63e`.`id` = `vw_cosecha_cacao_resumen`.`tarea`
LEFT JOIN `z_lote` as `j35389aaf` ON `j35389aaf`.`id` = `vw_cosecha_cacao_resumen`.`lote`
LEFT JOIN `z_modulo` as `j5dcb4a1e` ON `j5dcb4a1e`.`id` = `vw_cosecha_cacao_resumen`.`modulo`
ERROR - 2023-10-24 13:00:01 --> Query error: Unknown column 'vw_cosecha_cacao_resumen.subtarea' in 'on clause' - Invalid query: SELECT `vw_cosecha_cacao_resumen`.*, j09348c20.nombre AS s09348c20, jd019f3b5.nombre_subtarea AS sd019f3b5, jd33ef40c.nombre AS sd33ef40c, j293c7f68.nombre AS s293c7f68, j5f59e63e.nombre AS s5f59e63e, j35389aaf.lote AS s35389aaf, `vw_cosecha_cacao_resumen`.lote AS 'vw_cosecha_cacao_resumen.lote', j5dcb4a1e.modulo AS s5dcb4a1e, `vw_cosecha_cacao_resumen`.modulo AS 'vw_cosecha_cacao_resumen.modulo'
FROM `vw_cosecha_cacao_resumen`
LEFT JOIN `z_personal` as `j09348c20` ON `j09348c20`.`id` = `vw_cosecha_cacao_resumen`.`supervisor`
LEFT JOIN `z_subtarea` as `jd019f3b5` ON `jd019f3b5`.`id` = `vw_cosecha_cacao_resumen`.`subtarea`
LEFT JOIN `z_finca` as `jd33ef40c` ON `jd33ef40c`.`id` = `vw_cosecha_cacao_resumen`.`finca`
LEFT JOIN `z_personal` as `j293c7f68` ON `j293c7f68`.`id` = `vw_cosecha_cacao_resumen`.`trabajador`
LEFT JOIN `z_tarea` as `j5f59e63e` ON `j5f59e63e`.`id` = `vw_cosecha_cacao_resumen`.`tarea`
LEFT JOIN `z_lote` as `j35389aaf` ON `j35389aaf`.`id` = `vw_cosecha_cacao_resumen`.`lote`
LEFT JOIN `z_modulo` as `j5dcb4a1e` ON `j5dcb4a1e`.`id` = `vw_cosecha_cacao_resumen`.`modulo`
ERROR - 2023-10-24 15:46:05 --> Severity: Notice --> Undefined variable: IdFinca /app/myapp/application/views/Crud/pm-report.php 25
ERROR - 2023-10-24 15:46:05 --> Severity: Notice --> Undefined variable: IdFinca /app/myapp/application/views/Crud/pm-report.php 25
ERROR - 2023-10-24 15:46:05 --> Severity: Notice --> Undefined variable: IdFinca /app/myapp/application/views/Crud/pm-report.php 25
ERROR - 2023-10-24 19:27:10 --> Severity: Notice --> Undefined variable: IdFinca /app/myapp/application/views/Crud/pm-report.php 25
ERROR - 2023-10-24 19:27:10 --> Severity: Notice --> Undefined variable: IdFinca /app/myapp/application/views/Crud/pm-report.php 25
ERROR - 2023-10-24 19:27:10 --> Severity: Notice --> Undefined variable: IdFinca /app/myapp/application/views/Crud/pm-report.php 25
ERROR - 2023-10-24 21:57:44 --> Severity: Notice --> Undefined variable: IdFinca /app/myapp/application/views/Crud/pm-report.php 25
ERROR - 2023-10-24 21:57:44 --> Severity: Notice --> Undefined variable: IdFinca /app/myapp/application/views/Crud/pm-report.php 25
ERROR - 2023-10-24 21:57:44 --> Severity: Notice --> Undefined variable: IdFinca /app/myapp/application/views/Crud/pm-report.php 25
ERROR - 2023-10-24 23:12:56 --> Severity: 8192 --> Creation of dynamic property CI_URI::$config is deprecated C:\Users\raymundo\Documents\_desarrollo\_giteaBisstox\BellitaAgricontrolWeb\system\core\URI.php 101
ERROR - 2023-10-24 23:12:56 --> Severity: 8192 --> Creation of dynamic property CI_Router::$uri is deprecated C:\Users\raymundo\Documents\_desarrollo\_giteaBisstox\BellitaAgricontrolWeb\system\core\Router.php 127
ERROR - 2023-10-24 23:12:57 --> Severity: 8192 --> Creation of dynamic property Inicio::$benchmark is deprecated C:\Users\raymundo\Documents\_desarrollo\_giteaBisstox\BellitaAgricontrolWeb\system\core\Controller.php 82
ERROR - 2023-10-24 23:12:57 --> Severity: 8192 --> Creation of dynamic property Inicio::$hooks is deprecated C:\Users\raymundo\Documents\_desarrollo\_giteaBisstox\BellitaAgricontrolWeb\system\core\Controller.php 82
ERROR - 2023-10-24 23:12:57 --> Severity: 8192 --> Creation of dynamic property Inicio::$config is deprecated C:\Users\raymundo\Documents\_desarrollo\_giteaBisstox\BellitaAgricontrolWeb\system\core\Controller.php 82
ERROR - 2023-10-24 23:12:57 --> Severity: 8192 --> Creation of dynamic property Inicio::$log is deprecated C:\Users\raymundo\Documents\_desarrollo\_giteaBisstox\BellitaAgricontrolWeb\system\core\Controller.php 82
ERROR - 2023-10-24 23:12:57 --> Severity: 8192 --> Creation of dynamic property Inicio::$utf8 is deprecated C:\Users\raymundo\Documents\_desarrollo\_giteaBisstox\BellitaAgricontrolWeb\system\core\Controller.php 82
ERROR - 2023-10-24 23:12:57 --> Severity: 8192 --> Creation of dynamic property Inicio::$uri is deprecated C:\Users\raymundo\Documents\_desarrollo\_giteaBisstox\BellitaAgricontrolWeb\system\core\Controller.php 82
ERROR - 2023-10-24 23:12:57 --> Severity: 8192 --> Creation of dynamic property Inicio::$exceptions is deprecated C:\Users\raymundo\Documents\_desarrollo\_giteaBisstox\BellitaAgricontrolWeb\system\core\Controller.php 82
ERROR - 2023-10-24 23:12:57 --> Severity: 8192 --> Creation of dynamic property Inicio::$router is deprecated C:\Users\raymundo\Documents\_desarrollo\_giteaBisstox\BellitaAgricontrolWeb\system\core\Controller.php 82
ERROR - 2023-10-24 23:12:57 --> Severity: 8192 --> Creation of dynamic property Inicio::$output is deprecated C:\Users\raymundo\Documents\_desarrollo\_giteaBisstox\BellitaAgricontrolWeb\system\core\Controller.php 82
ERROR - 2023-10-24 23:12:57 --> Severity: 8192 --> Creation of dynamic property Inicio::$security is deprecated C:\Users\raymundo\Documents\_desarrollo\_giteaBisstox\BellitaAgricontrolWeb\system\core\Controller.php 82
ERROR - 2023-10-24 23:12:57 --> Severity: 8192 --> Creation of dynamic property Inicio::$input is deprecated C:\Users\raymundo\Documents\_desarrollo\_giteaBisstox\BellitaAgricontrolWeb\system\core\Controller.php 82
ERROR - 2023-10-24 23:12:57 --> Severity: 8192 --> Creation of dynamic property Inicio::$lang is deprecated C:\Users\raymundo\Documents\_desarrollo\_giteaBisstox\BellitaAgricontrolWeb\system\core\Controller.php 82
ERROR - 2023-10-24 23:12:57 --> Severity: error --> Exception: Undefined constant "EXT" C:\Users\raymundo\Documents\_desarrollo\_giteaBisstox\BellitaAgricontrolWeb\application\core\MY_Loader.php 174
ERROR - 2023-10-24 23:12:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\Users\raymundo\Documents\_desarrollo\_giteaBisstox\BellitaAgricontrolWeb\system\core\Exceptions.php:271) C:\Users\raymundo\Documents\_desarrollo\_giteaBisstox\BellitaAgricontrolWeb\system\core\Common.php 570
ERROR - 2023-10-24 23:14:05 --> Severity: 8192 --> Creation of dynamic property CI_URI::$config is deprecated C:\Users\raymundo\Documents\_desarrollo\_giteaBisstox\BellitaAgricontrolWeb\system\core\URI.php 101
ERROR - 2023-10-24 23:14:05 --> Severity: 8192 --> Creation of dynamic property CI_Router::$uri is deprecated C:\Users\raymundo\Documents\_desarrollo\_giteaBisstox\BellitaAgricontrolWeb\system\core\Router.php 127
ERROR - 2023-10-24 23:14:05 --> Severity: 8192 --> Creation of dynamic property Inicio::$benchmark is deprecated C:\Users\raymundo\Documents\_desarrollo\_giteaBisstox\BellitaAgricontrolWeb\system\core\Controller.php 82
ERROR - 2023-10-24 23:14:05 --> Severity: 8192 --> Creation of dynamic property Inicio::$hooks is deprecated C:\Users\raymundo\Documents\_desarrollo\_giteaBisstox\BellitaAgricontrolWeb\system\core\Controller.php 82
ERROR - 2023-10-24 23:14:05 --> Severity: 8192 --> Creation of dynamic property Inicio::$config is deprecated C:\Users\raymundo\Documents\_desarrollo\_giteaBisstox\BellitaAgricontrolWeb\system\core\Controller.php 82
ERROR - 2023-10-24 23:14:05 --> Severity: 8192 --> Creation of dynamic property Inicio::$log is deprecated C:\Users\raymundo\Documents\_desarrollo\_giteaBisstox\BellitaAgricontrolWeb\system\core\Controller.php 82
ERROR - 2023-10-24 23:14:05 --> Severity: 8192 --> Creation of dynamic property Inicio::$utf8 is deprecated C:\Users\raymundo\Documents\_desarrollo\_giteaBisstox\BellitaAgricontrolWeb\system\core\Controller.php 82
ERROR - 2023-10-24 23:14:05 --> Severity: 8192 --> Creation of dynamic property Inicio::$uri is deprecated C:\Users\raymundo\Documents\_desarrollo\_giteaBisstox\BellitaAgricontrolWeb\system\core\Controller.php 82
ERROR - 2023-10-24 23:14:05 --> Severity: 8192 --> Creation of dynamic property Inicio::$exceptions is deprecated C:\Users\raymundo\Documents\_desarrollo\_giteaBisstox\BellitaAgricontrolWeb\system\core\Controller.php 82
ERROR - 2023-10-24 23:14:05 --> Severity: 8192 --> Creation of dynamic property Inicio::$router is deprecated C:\Users\raymundo\Documents\_desarrollo\_giteaBisstox\BellitaAgricontrolWeb\system\core\Controller.php 82
ERROR - 2023-10-24 23:14:05 --> Severity: 8192 --> Creation of dynamic property Inicio::$output is deprecated C:\Users\raymundo\Documents\_desarrollo\_giteaBisstox\BellitaAgricontrolWeb\system\core\Controller.php 82
ERROR - 2023-10-24 23:14:05 --> Severity: 8192 --> Creation of dynamic property Inicio::$security is deprecated C:\Users\raymundo\Documents\_desarrollo\_giteaBisstox\BellitaAgricontrolWeb\system\core\Controller.php 82
ERROR - 2023-10-24 23:14:05 --> Severity: 8192 --> Creation of dynamic property Inicio::$input is deprecated C:\Users\raymundo\Documents\_desarrollo\_giteaBisstox\BellitaAgricontrolWeb\system\core\Controller.php 82
ERROR - 2023-10-24 23:14:05 --> Severity: 8192 --> Creation of dynamic property Inicio::$lang is deprecated C:\Users\raymundo\Documents\_desarrollo\_giteaBisstox\BellitaAgricontrolWeb\system\core\Controller.php 82
ERROR - 2023-10-24 23:14:05 --> Severity: error --> Exception: Undefined constant "EXT" C:\Users\raymundo\Documents\_desarrollo\_giteaBisstox\BellitaAgricontrolWeb\application\core\MY_Loader.php 174
ERROR - 2023-10-24 23:14:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\Users\raymundo\Documents\_desarrollo\_giteaBisstox\BellitaAgricontrolWeb\system\core\Exceptions.php:271) C:\Users\raymundo\Documents\_desarrollo\_giteaBisstox\BellitaAgricontrolWeb\system\core\Common.php 570
ERROR - 2023-10-24 23:23:11 --> Severity: error --> Exception: Undefined constant "EXT" C:\Users\raymundo\Documents\_desarrollo\_giteaBisstox\BellitaAgricontrolWeb\application\core\MY_Loader.php 174
ERROR - 2023-10-24 23:24:54 --> Severity: Warning --> Use of undefined constant EXT - assumed 'EXT' (this will throw an Error in a future version of PHP) C:\Users\raymundo\Documents\_desarrollo\_giteaBisstox\BellitaAgricontrolWeb\application\core\MY_Loader.php 174
ERROR - 2023-10-24 23:24:54 --> Severity: Warning --> ini_set(): Headers already sent. You cannot change the session module's ini settings at this time C:\Users\raymundo\Documents\_desarrollo\_giteaBisstox\BellitaAgricontrolWeb\system\libraries\Session\Session.php 282
ERROR - 2023-10-24 23:24:54 --> Severity: Warning --> session_set_cookie_params(): Cannot change session cookie parameters when headers already sent C:\Users\raymundo\Documents\_desarrollo\_giteaBisstox\BellitaAgricontrolWeb\system\libraries\Session\Session.php 294
ERROR - 2023-10-24 23:24:54 --> Severity: Warning --> ini_set(): Headers already sent. You cannot change the session module's ini settings at this time C:\Users\raymundo\Documents\_desarrollo\_giteaBisstox\BellitaAgricontrolWeb\system\libraries\Session\Session.php 304
ERROR - 2023-10-24 23:24:54 --> Severity: Warning --> ini_set(): Headers already sent. You cannot change the session module's ini settings at this time C:\Users\raymundo\Documents\_desarrollo\_giteaBisstox\BellitaAgricontrolWeb\system\libraries\Session\Session.php 314
ERROR - 2023-10-24 23:24:54 --> Severity: Warning --> ini_set(): Headers already sent. You cannot change the session module's ini settings at this time C:\Users\raymundo\Documents\_desarrollo\_giteaBisstox\BellitaAgricontrolWeb\system\libraries\Session\Session.php 315
ERROR - 2023-10-24 23:24:54 --> Severity: Warning --> ini_set(): Headers already sent. You cannot change the session module's ini settings at this time C:\Users\raymundo\Documents\_desarrollo\_giteaBisstox\BellitaAgricontrolWeb\system\libraries\Session\Session.php 316
ERROR - 2023-10-24 23:24:54 --> Severity: Warning --> ini_set(): Headers already sent. You cannot change the session module's ini settings at this time C:\Users\raymundo\Documents\_desarrollo\_giteaBisstox\BellitaAgricontrolWeb\system\libraries\Session\Session.php 317
ERROR - 2023-10-24 23:24:54 --> Severity: Warning --> ini_set(): Headers already sent. You cannot change the session module's ini settings at this time C:\Users\raymundo\Documents\_desarrollo\_giteaBisstox\BellitaAgricontrolWeb\system\libraries\Session\Session.php 375
ERROR - 2023-10-24 23:24:54 --> Severity: error --> Exception: Call to undefined function mysqli_init() C:\Users\raymundo\Documents\_desarrollo\_giteaBisstox\BellitaAgricontrolWeb\system\database\drivers\mysqli\mysqli_driver.php 135
ERROR - 2023-10-24 23:24:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\Users\raymundo\Documents\_desarrollo\_giteaBisstox\BellitaAgricontrolWeb\system\core\Exceptions.php:271) C:\Users\raymundo\Documents\_desarrollo\_giteaBisstox\BellitaAgricontrolWeb\system\core\Common.php 570
ERROR - 2023-10-24 23:39:00 --> Severity: Parsing Error --> syntax error, unexpected 'function' (T_FUNCTION), expecting identifier (T_STRING) or \\ (T_NS_SEPARATOR) C:\Users\raymundo\Documents\_desarrollo\_laragon-6.0.0\www\BellitaAgricontrolWeb\application\vendor\myclabs\deep-copy\src\DeepCopy\deep_copy.php 5
ERROR - 2023-10-24 23:43:46 --> Severity: Warning --> Use of undefined constant EXT - assumed 'EXT' (this will throw an Error in a future version of PHP) C:\Users\raymundo\Documents\_desarrollo\_laragon-6.0.0\www\BellitaAgricontrolWeb\application\core\MY_Loader.php 174
ERROR - 2023-10-24 23:43:46 --> Severity: Warning --> ini_set(): Headers already sent. You cannot change the session module's ini settings at this time C:\Users\raymundo\Documents\_desarrollo\_laragon-6.0.0\www\BellitaAgricontrolWeb\system\libraries\Session\Session.php 282
ERROR - 2023-10-24 23:43:46 --> Severity: Warning --> session_set_cookie_params(): Cannot change session cookie parameters when headers already sent C:\Users\raymundo\Documents\_desarrollo\_laragon-6.0.0\www\BellitaAgricontrolWeb\system\libraries\Session\Session.php 294
ERROR - 2023-10-24 23:43:46 --> Severity: Warning --> ini_set(): Headers already sent. You cannot change the session module's ini settings at this time C:\Users\raymundo\Documents\_desarrollo\_laragon-6.0.0\www\BellitaAgricontrolWeb\system\libraries\Session\Session.php 304
ERROR - 2023-10-24 23:43:46 --> Severity: Warning --> ini_set(): Headers already sent. You cannot change the session module's ini settings at this time C:\Users\raymundo\Documents\_desarrollo\_laragon-6.0.0\www\BellitaAgricontrolWeb\system\libraries\Session\Session.php 314
ERROR - 2023-10-24 23:43:46 --> Severity: Warning --> ini_set(): Headers already sent. You cannot change the session module's ini settings at this time C:\Users\raymundo\Documents\_desarrollo\_laragon-6.0.0\www\BellitaAgricontrolWeb\system\libraries\Session\Session.php 315
ERROR - 2023-10-24 23:43:46 --> Severity: Warning --> ini_set(): Headers already sent. You cannot change the session module's ini settings at this time C:\Users\raymundo\Documents\_desarrollo\_laragon-6.0.0\www\BellitaAgricontrolWeb\system\libraries\Session\Session.php 316
ERROR - 2023-10-24 23:43:46 --> Severity: Warning --> ini_set(): Headers already sent. You cannot change the session module's ini settings at this time C:\Users\raymundo\Documents\_desarrollo\_laragon-6.0.0\www\BellitaAgricontrolWeb\system\libraries\Session\Session.php 317
ERROR - 2023-10-24 23:43:46 --> Severity: Warning --> ini_set(): Headers already sent. You cannot change the session module's ini settings at this time C:\Users\raymundo\Documents\_desarrollo\_laragon-6.0.0\www\BellitaAgricontrolWeb\system\libraries\Session\Session.php 375
ERROR - 2023-10-24 23:43:46 --> Severity: error --> Exception: Call to undefined function mysqli_init() C:\Users\raymundo\Documents\_desarrollo\_laragon-6.0.0\www\BellitaAgricontrolWeb\system\database\drivers\mysqli\mysqli_driver.php 135
ERROR - 2023-10-24 23:43:46 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\Users\raymundo\Documents\_desarrollo\_laragon-6.0.0\www\BellitaAgricontrolWeb\system\core\Exceptions.php:271) C:\Users\raymundo\Documents\_desarrollo\_laragon-6.0.0\www\BellitaAgricontrolWeb\system\core\Common.php 570
ERROR - 2023-10-24 23:45:57 --> Severity: Warning --> Use of undefined constant EXT - assumed 'EXT' (this will throw an Error in a future version of PHP) C:\Users\raymundo\Documents\_desarrollo\_laragon-6.0.0\www\BellitaAgricontrolWeb\application\core\MY_Loader.php 174
ERROR - 2023-10-24 23:46:00 --> Severity: Warning --> mysqli::real_connect(): php_network_getaddresses: getaddrinfo failed: No such host is known.  C:\Users\raymundo\Documents\_desarrollo\_laragon-6.0.0\www\BellitaAgricontrolWeb\system\database\drivers\mysqli\mysqli_driver.php 203
ERROR - 2023-10-24 23:46:00 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): php_network_getaddresses: getaddrinfo failed: No such host is known.  C:\Users\raymundo\Documents\_desarrollo\_laragon-6.0.0\www\BellitaAgricontrolWeb\system\database\drivers\mysqli\mysqli_driver.php 203
ERROR - 2023-10-24 23:46:00 --> Unable to connect to the database
ERROR - 2023-10-24 23:46:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\Users\raymundo\Documents\_desarrollo\_laragon-6.0.0\www\BellitaAgricontrolWeb\system\core\Exceptions.php:271) C:\Users\raymundo\Documents\_desarrollo\_laragon-6.0.0\www\BellitaAgricontrolWeb\system\core\Common.php 570
ERROR - 2023-10-24 23:46:41 --> Severity: Warning --> Use of undefined constant EXT - assumed 'EXT' (this will throw an Error in a future version of PHP) C:\Users\raymundo\Documents\_desarrollo\_laragon-6.0.0\www\BellitaAgricontrolWeb\application\core\MY_Loader.php 174
ERROR - 2023-10-24 23:57:02 --> Severity: Parsing Error --> syntax error, unexpected 'function' (T_FUNCTION), expecting identifier (T_STRING) or \\ (T_NS_SEPARATOR) C:\Users\raymundo\Documents\_desarrollo\_laragon-6.0.0\www\BellitaAgricontrolWeb\application\vendor\myclabs\deep-copy\src\DeepCopy\deep_copy.php 5
