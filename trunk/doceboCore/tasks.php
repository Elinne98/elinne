<?php

/* ======================================================================== \
| 	DOCEBO - The E-Learning Suite											|
| 																			|
| 	Copyright (c) 2008 (Docebo)												|
| 	http://www.docebo.com													|
|   License 	http://www.gnu.org/licenses/old-licenses/gpl-2.0.txt		|
\ ======================================================================== */

/*
 * Verify that request was made by localhost.
 * Remove this control if you want to call tasks porcessor by
 * remote but it's *dangerous*
 */
if( $_SERVER['REMOTE_ADDR'] != '127.0.0.1' ) {
	die("You can't do this opertation from remote.");
}

define("CORE", true);
define("IN_DOCEBO", true);
define("_deeppath_", '../');
require(dirname(__FILE__).'/../base.php');

// start buffer
ob_start();

// initialize
require(_base_.'/lib/lib.bootstrap.php');
Boot::init(BOOT_DATETIME);
// some specific lib to load
require_once(_base_.'/lib/lib.platform.php');
require_once(_adm_.'/lib/lib.permission.php');
require_once(_adm_.'/lib/lib.istance.php');
require_once(_adm_.'/class.module/class.definition.php');

// -----------------------------------------------------------------------------

header('Content-type: text/xml');

echo '<?xml version="1.0"?'.'>';
echo '<tasks>';

echo '<remote_addr>'.$_SERVER['REMOTE_ADDR'].'</remote_addr>';

// do io task operations
echo '<iotasks>';

$module_cfg =& createModule('iotask');
echo $module_cfg->doTasks();

echo '</iotasks>';

echo '</tasks>';

// -----------------------------------------------------------------------------

// finalize
Boot::finalize();

// flush buffer
ob_end_flush();

?>