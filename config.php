<?php
// HTTP
define('HTTP_SERVER', 'http://localhost/opencart3/');

// HTTPS
define('HTTPS_SERVER', 'http://localhost/opencart3/');

// DIR
define('DIR_APPLICATION', 'S:/XAMP74/htdocs/opencart3/catalog/');
define('DIR_SYSTEM', 'S:/XAMP74/htdocs/opencart3/system/');
define('DIR_IMAGE', 'S:/XAMP74/htdocs/opencart3/image/');
define('DIR_STORAGE', 'S:/XAMP74/storage/');
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
define('DB_PASSWORD', '');
define('DB_DATABASE', 'opencart');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');