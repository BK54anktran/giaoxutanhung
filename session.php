<?php

/**
 * NukeViet Content Management System
 * @version 4.x
 * @author VINADES.,JSC <contact@vinades.vn>
 * @copyright (C) 2009-2021 VINADES.,JSC. All rights reserved
 * @license GNU/GPL version 2 or any later version
 * @see https://github.com/nukeviet The NukeViet CMS GitHub project
 */

register_shutdown_function("fatal_handler");

function fatal_handler()
{
    $error = error_get_last();
    if ($error !== NULL) {
        echo ('<pre><code>' . print_r($error, true) . '</code></pre>');
    }
}

define('NV_SYSTEM', true);

// Xac dinh thu muc goc cua site
define('NV_ROOTDIR', pathinfo(str_replace(DIRECTORY_SEPARATOR, '/', __FILE__), PATHINFO_DIRNAME));

require NV_ROOTDIR . '/includes/mainfile.php';
require NV_ROOTDIR . '/includes/core/user_functions.php';

$sess = $_SESSION;

echo '<pre><code>';

if ($nv_Request->isset_request('checksession', 'session')) {
    echo "Session is: " . $nv_Request->get_title('checksession', 'session', '') . "\n";
} else {
    echo "Set session, reload to check\n";

    $nv_Request->set_Session('checksession', NV_CURRENTTIME);
}

echo htmlspecialchars(print_r($sess, true));
die('</code></pre>');
?>