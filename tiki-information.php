<?php
// (c) Copyright 2002-2013 by authors of the Tiki Wiki CMS Groupware Project
// 
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: tiki-information.php 44444 2013-01-05 21:24:24Z changi67 $

require_once ('tiki-setup.php');
if (isset($_REQUEST['msg'])) {
	$smarty->assign('msg', $_REQUEST['msg']);
}
if (isset($_REQUEST['show_history_back_link'])) {
	$smarty->assign('show_history_back_link', $_REQUEST['show_history_back_link']);
}
$smarty->assign('mid', 'tiki-information.tpl');
$smarty->display("tiki.tpl");
