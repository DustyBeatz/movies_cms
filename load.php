<?php
define('ABSPATH', __DIR__);
define('ADMIN_PATH',ABSPATH.'/admin');
define('ADMIN_SCRIPT_PATH',ADMIN_PATH.'/scripts');

##turn display error on, Debug only!!
## ini_set('display_error', 1);

require_once ABSPATH.'/config/database.php';
require_once ADMIN_SCRIPT_PATH.'/read.php';
require_once ADMIN_SCRIPT_PATH.'/login.php';