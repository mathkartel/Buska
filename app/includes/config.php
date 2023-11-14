<?php
error_reporting(0);
define('FIR', true);

define('DB_HOST', 'a');
define('DB_USER', 'a');
define('DB_NAME', 'a');
define('DB_PASS', 'a');

define('URL_PATH', 'https://agrandefloripa.com.br');

define('PUBLIC_PATH', 'public');
define('THEME_PATH', 'themes');
define('STORAGE_PATH', 'storage');
define('UPLOADS_PATH', 'uploads');

define('COOKIE_PATH', preg_replace('|https?://[^/]+|i', '', URL_PATH).'/');