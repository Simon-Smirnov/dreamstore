<?php
// HTTP
define('HTTP_SERVER', 'http://dreamsstore/');

// HTTPS
define('HTTPS_SERVER', 'http://dreamsstore/');

// DIR
define('DIR_APPLICATION', 'C:/OpenServer/domains/dreamsstore/catalog/');
define('DIR_SYSTEM', 'C:/OpenServer/domains/dreamsstore/system/');
define('DIR_IMAGE', 'C:/OpenServer/domains/dreamsstore/image/');
define('DIR_STORAGE', DIR_SYSTEM . 'storage/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/theme/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');
define('DB_DATABASE', 'dreamsstore');
define('DB_PORT', '3306');
define('DB_PREFIX', 'ds_');

define('MODE', 0); // 0 - DEV, 1 - PROD
define('ASSETS', MODE ? '/catalog/view/theme/dreamsstore/resources/app' : '/catalog/view/theme/dreamsstore/resources/dev');
