<?php
apc_clear_cache();
echo 'WTF';
require_once 'inexistent_file.php';
require_once 'include/config.php';

require_once PRESENTATION_DIR . 'application.php';

$application = new Application();
var_dump($application);
$application->force_compile = true;
$application->compile_check = true;
$application->testInstall();

$application->assign('nombre', 'Cannibalitox');

$application->display('index.tpl');
