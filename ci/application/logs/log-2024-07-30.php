<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-07-30 00:04:49 --> Severity: Notice --> Array to string conversion /var/www/html/system/database/DB_driver.php 1471
ERROR - 2024-07-30 00:04:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '0) VALUES (Array)' at line 1 - Invalid query: INSERT INTO `z_postharvest_weight` (0) VALUES (Array)
ERROR - 2024-07-30 00:04:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/system/core/Log.php:233) /var/www/html/system/core/Common.php 570
ERROR - 2024-07-30 00:07:50 --> Severity: Notice --> Array to string conversion /var/www/html/system/database/DB_driver.php 1471
ERROR - 2024-07-30 00:07:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '0) VALUES (Array)' at line 1 - Invalid query: INSERT INTO `z_postharvest_lotsharvest` (0) VALUES (Array)
ERROR - 2024-07-30 00:07:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/system/core/Exceptions.php:271) /var/www/html/system/core/Common.php 570
ERROR - 2024-07-30 00:09:50 --> Severity: Notice --> Array to string conversion /var/www/html/system/database/DB_query_builder.php 1592
ERROR - 2024-07-30 00:09:50 --> Query error: Table 'lfp_agricontrol_dev.table_name' doesn't exist - Invalid query: INSERT INTO `table_name` (`date`, `id`, `name`, `supervisor`, `weight`) VALUES ('2024-02-03','6','2024-02-03 | 63494.00 lb',Array,63494)
ERROR - 2024-07-30 00:09:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/system/core/Exceptions.php:271) /var/www/html/system/core/Common.php 570
ERROR - 2024-07-30 00:11:51 --> Query error: Table 'lfp_agricontrol_dev.table_name' doesn't exist - Invalid query: INSERT INTO `table_name` (`date`, `id`, `name`, `weight`) VALUES ('2024-02-04','7','2024-02-04 | 51914.00 lb',51914)
ERROR - 2024-07-30 00:12:50 --> Query error: Unknown column 'date' in 'field list' - Invalid query: INSERT INTO `z_postharvest_lotsharvest` (`date`, `id`, `name`, `weight`) VALUES ('2024-02-05','8','2024-02-05 | 189576.00 lb',189576)
ERROR - 2024-07-30 09:32:34 --> Query error: Column 'lot_id' cannot be null - Invalid query: INSERT INTO `z_postharvest_fermentation` (`lot_id`, `start_date`, `end_date`, `comments`) VALUES (NULL, NULL, NULL, '')
