<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-07-29 12:29:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/controllers/V3.php:1141) /var/www/html/system/core/Common.php 570
ERROR - 2024-07-29 12:29:31 --> Severity: Compile Error --> Cannot redeclare V3::postHarvestWeight_post() /var/www/html/application/controllers/V3.php 1141
ERROR - 2024-07-29 12:36:33 --> Severity: Notice --> Undefined variable: postharvest_model /var/www/html/application/controllers/V3.php 1161
ERROR - 2024-07-29 12:36:33 --> Severity: error --> Exception: Call to a member function createWeightFromAPI() on null /var/www/html/application/controllers/V3.php 1161
ERROR - 2024-07-29 12:36:33 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/system/core/Exceptions.php:271) /var/www/html/system/core/Common.php 570
ERROR - 2024-07-29 22:27:55 --> Query error: Unknown column 'lot_number' in 'field list' - Invalid query: INSERT INTO `z_postharvest_lotsharvest` (`lot_number`, `container_weight`, `lot_weight`, `supervisor_id`, `supervisor_name`, `operation_date`, `comments`, `selected_lots_harvest`) VALUES (15, 33, 12914, '1', 'BALÓN FIGUEROA MIGUEL ALFREDO', '2024-07-30T02:42:10.826Z', '', '')
ERROR - 2024-07-29 22:31:24 --> Query error: Unknown column 'lot_number' in 'field list' - Invalid query: INSERT INTO `z_postharvest_lotsharvest` (`lot_number`, `container_weight`, `lot_weight`, `supervisor_id`, `supervisor_name`, `operation_date`, `comments`, `selected_lots_harvest`) VALUES (16, 123, 296627, '1', 'BALÓN FIGUEROA MIGUEL ALFREDO', '2024-07-30T03:30:28.962Z', '', '')
ERROR - 2024-07-29 23:25:42 --> Query error: Unknown column 'lot_number' in 'field list' - Invalid query: INSERT INTO `z_postharvest_lotsharvest` (`lot_number`, `container_weight`, `lot_weight`, `supervisor_id`, `supervisor_name`, `operation_date`, `comments`, `selected_lots_harvest`) VALUES (17, 3245, 8034, '1', 'BALÓN FIGUEROA MIGUEL ALFREDO', '2024-07-30T04:25:30.694Z', '', '')
ERROR - 2024-07-29 23:33:14 --> Query error: Unknown column 'selected_lots_harvest' in 'field list' - Invalid query: INSERT INTO `z_postharvest_weight` (`lot_number`, `container_weight`, `lot_weight`, `supervisor_id`, `supervisor_name`, `operation_date`, `comments`, `selected_lots_harvest`) VALUES (18, 343, 5250, '1', 'BALÓN FIGUEROA MIGUEL ALFREDO', '2024-07-30T04:32:46.976Z', '', '')
ERROR - 2024-07-29 23:38:14 --> Severity: Notice --> Array to string conversion /var/www/html/system/database/DB_driver.php 1471
ERROR - 2024-07-29 23:38:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '0) VALUES (Array)' at line 1 - Invalid query: INSERT INTO `z_postharvest_weight` (0) VALUES (Array)
ERROR - 2024-07-29 23:38:14 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/system/core/Exceptions.php:271) /var/www/html/system/core/Common.php 570
ERROR - 2024-07-29 23:41:15 --> Severity: Notice --> Array to string conversion /var/www/html/system/database/DB_driver.php 1471
ERROR - 2024-07-29 23:41:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '0) VALUES (Array)' at line 1 - Invalid query: INSERT INTO `z_postharvest_weight` (0) VALUES (Array)
ERROR - 2024-07-29 23:41:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/system/core/Exceptions.php:271) /var/www/html/system/core/Common.php 570
ERROR - 2024-07-29 23:56:36 --> Query error: Unknown column 'lfp_agricontrol_dev.z_postharvest_weight.lot_date' in 'on clause' - Invalid query: SELECT `lot_date`, `lot_number`, `lot_weight`
FROM `vw_harvest_pending_lots`
WHERE (lot_number IS NULL OR lot_number = "")
ERROR - 2024-07-29 23:56:37 --> Query error: Unknown column 'lfp_agricontrol_dev.z_postharvest_weight.lot_date' in 'on clause' - Invalid query: SELECT `lot_date`, `lot_number`, `lot_weight`
FROM `vw_harvest_pending_lots`
WHERE (lot_number IS NULL OR lot_number = "")
ERROR - 2024-07-29 23:56:37 --> Query error: Unknown column 'lfp_agricontrol_dev.z_postharvest_weight.lot_date' in 'on clause' - Invalid query: SELECT `lot_date`, `lot_number`, `lot_weight`
FROM `vw_harvest_pending_lots`
WHERE (lot_number IS NULL OR lot_number = "")
ERROR - 2024-07-29 23:56:51 --> Query error: Unknown column 'lfp_agricontrol_dev.z_postharvest_weight.lot_date' in 'on clause' - Invalid query: SELECT `lot_date`, `lot_number`, `lot_weight`
FROM `vw_harvest_pending_lots`
WHERE (lot_number IS NULL OR lot_number = "")
ERROR - 2024-07-29 23:56:51 --> Query error: Unknown column 'lfp_agricontrol_dev.z_postharvest_weight.lot_date' in 'on clause' - Invalid query: SELECT `lot_date`, `lot_number`, `lot_weight`
FROM `vw_harvest_pending_lots`
WHERE (lot_number IS NULL OR lot_number = "")
ERROR - 2024-07-29 23:56:51 --> Query error: Unknown column 'lfp_agricontrol_dev.z_postharvest_weight.lot_date' in 'on clause' - Invalid query: SELECT `lot_date`, `lot_number`, `lot_weight`
FROM `vw_harvest_pending_lots`
WHERE (lot_number IS NULL OR lot_number = "")
ERROR - 2024-07-29 23:57:11 --> Query error: Unknown column 'lfp_agricontrol_dev.z_postharvest_weight.lot_date' in 'on clause' - Invalid query: SELECT `lot_date`, `lot_number`, `lot_weight`
FROM `vw_harvest_pending_lots`
WHERE (lot_number IS NULL OR lot_number = "")
ERROR - 2024-07-29 23:57:12 --> Query error: Unknown column 'lfp_agricontrol_dev.z_postharvest_weight.lot_date' in 'on clause' - Invalid query: SELECT `lot_date`, `lot_number`, `lot_weight`
FROM `vw_harvest_pending_lots`
WHERE (lot_number IS NULL OR lot_number = "")
ERROR - 2024-07-29 23:57:12 --> Query error: Unknown column 'lfp_agricontrol_dev.z_postharvest_weight.lot_date' in 'on clause' - Invalid query: SELECT `lot_date`, `lot_number`, `lot_weight`
FROM `vw_harvest_pending_lots`
WHERE (lot_number IS NULL OR lot_number = "")
ERROR - 2024-07-29 23:58:30 --> Query error: Unknown column 'lfp_agricontrol_dev.z_postharvest_weight.lot_date' in 'on clause' - Invalid query: SELECT `lot_date`, `lot_number`, `lot_weight`
FROM `vw_harvest_pending_lots`
WHERE (lot_number IS NULL OR lot_number = "")
ERROR - 2024-07-29 23:59:49 --> Query error: Duplicate entry '12' for key 'z_postharvest_weight.lot_number_unique' - Invalid query: INSERT INTO `z_postharvest_weight` (`lot_number`, `container_weight`, `lot_weight`, `supervisor_id`, `supervisor_name`, `operation_date`, `comments`) VALUES (12, 23, 2386, '1', 'BALÓN FIGUEROA MIGUEL ALFREDO', '2024-07-30T04:59:29.311Z', '')
