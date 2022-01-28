<?php
require_once 'include/config.php';

require_once PRESENTATION_DIR . 'application.php';

$application = new Application();

$application->assign('nombre', 'y ahora la wea funciona');

$application->display('index.tpl');
