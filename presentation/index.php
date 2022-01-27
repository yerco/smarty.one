<?php

require_once 'include/config.php';

require_once PRESENTATION_DIR . 'application.php';

$application = new Application();

$application->force_compile = true;
$application->compile_check = true;
$application->testInstall();

$application->assign('varia', 'Cannibalito');

$application->display('index.tpl');
