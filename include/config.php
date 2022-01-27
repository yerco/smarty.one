<?php
// SITE_ROOT contains the full path to the smarty.one folder
define('SITE_ROOT', dirname(dirname(__FILE__)));

// Application directories (view, controller)
define('PRESENTATION_DIR', SITE_ROOT . '/presentation/');
define('BUSINESS_DIR', SITE_ROOT . '/business/');

// Settings needed to configure the Smarty template engine
define('SMARTY_DIR', SITE_ROOT . '/libs/smarty/');
define('TEMPLATE_DIR', SITE_ROOT . '/presentation/templates/');
define('COMPILE_DIR', PRESENTATION_DIR . '/templates_c/');
define('CACHE_DIR', PRESENTATION_DIR . '/cache/');
define('CONFIG_DIR', PRESENTATION_DIR . '/configs/');
