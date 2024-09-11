<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-07-24 22:03:24 --> Severity: error --> Exception: Call to undefined method Postharvest_model::getPendingPostharvestLots() /var/www/html/application/controllers/V3.php 849
ERROR - 2024-07-24 22:03:24 --> Severity: Warning --> chmod(): Operation not permitted /var/www/html/system/core/Log.php 233
ERROR - 2024-07-24 22:03:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/system/core/Exceptions.php:271) /var/www/html/system/core/Common.php 570
ERROR - 2024-07-24 22:03:28 --> Severity: error --> Exception: Call to undefined method Postharvest_model::getPendingPostharvestLots() /var/www/html/application/controllers/V3.php 849
ERROR - 2024-07-24 22:04:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '''' at line 4 - Invalid query: SELECT `lot_date`, `lot_number`, `lot_weight`
FROM `vw_harvest_pending_lots`
WHERE `lot_number` IS NULL
AND `lot_number` = `==` ''
ERROR - 2024-07-24 22:04:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '''' at line 4 - Invalid query: SELECT `lot_date`, `lot_number`, `lot_weight`
FROM `vw_harvest_pending_lots`
WHERE `lot_number` IS NULL
AND `lot_number` = `=` ''
ERROR - 2024-07-24 22:46:57 --> Severity: error --> Exception: Call to undefined method Postharvest_model::get_all() /var/www/html/application/controllers/V3.php 847
