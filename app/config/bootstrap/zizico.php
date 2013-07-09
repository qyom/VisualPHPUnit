<?php
# Define the Domain & The Secure Domain
define('DOMAIN', "http://zizico.local");
define('PURE_DOMAIN', 'zizico.local');
define('PURE_DOMAIN_LIVE', 'zizico.com');

// The root folder
define('ROOT_DIR', $rootZizico);
// The public folder
define('PUBLIC_DIR', $rootZizico . '/public_html');
// The cofig folder
define('CONFIG_DIR', $rootZizico . '/config');

define('ENV', 'test');


set_include_path(
    get_include_path()
        . PATH_SEPARATOR . $rootZizico . '/tests'
);

include_once(CONFIG_DIR . "/bootstrap.php");