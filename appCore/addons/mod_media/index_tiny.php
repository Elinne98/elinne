<?php

/* ======================================================================== \
|   FORMA - The E-Learning Suite                                            |
|                                                                           |
|   Copyright (c) 2013 (Forma)                                              |
|   http://www.formalms.org                                                 |
|   License  http://www.gnu.org/licenses/old-licenses/gpl-2.0.txt           |
|                                                                           |
|   from docebo 4.0.5 CE 2008-2012 (c) docebo                               |
|   License http://www.gnu.org/licenses/old-licenses/gpl-2.0.txt            |
\ ======================================================================== */

if($_GET['type'] == 'file') define("POPUP_MOD_NAME", "mod_link");
else define("POPUP_MOD_NAME", "mod_media");


// ----------- Popup Options ---------------
$GLOBALS["popup"]["editor"]="tiny";
// -----------------------------------------

require_once("../mod_index/index.php");


?>