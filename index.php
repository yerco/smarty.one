<?php
require_once 'include/config.php';
require_once BUSINESS_DIR . 'error_handler.php';

// Set the error handler
ErrorHandler::SetHandler();

// Load the application page template
require_once PRESENTATION_DIR . 'application.php';

$application = new Application();
$application->force_compile = true;
$application->compile_check = true;
//$application->testInstall();
$application->assign('nombre', 'that was it');

$application->display('index.tpl');

