<?php

require_once 'include/config.php';

require_once PRESENTATION_DIR . 'application.php';

$application = new Application();

$application->assign('name', 'Ćannibal');

$application->display('index.tpl');
