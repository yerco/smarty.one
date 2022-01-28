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
define('CONFIG_DIR', PRESENTATION_DIR . '/include/configs/');

// These should be true while developing web site
define('IS_WARNING_FATAL', true);
define('DEBUGGING', true);

// The error types to be reported
define('ERROR_TYPES', E_ALL);

// Settings about mailing the error message to admin
define('SEND_ERROR_MAIL', false);
define('ADMIN_ERROR_MAIL', 'Administrator@example');
define('SENDMAIL_FROM', 'Errors@example.com');
ini_set('sendmail_from', SENDMAIL_FROM);

// By default we don't log errors to a file
define('LOG_ERRORS', false);
define('LOG_ERRORS_FILE', '/Users/yjorquera/Sites/log_errors.log');
/* Generic error message to be displayed instead of debug info
    (when DEBUGGING is false) */
define('SITE_GENERIC_ERROR_MESSAGE', '<h1>Se ha producido un error</h1>');
