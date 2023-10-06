<?php


require('staff.inc.php');
require_once(INCLUDE_DIR.'class.ticket.php');

$nav->setTabActive('timebill');
$inc='timebill.inc.php';

if($_REQUEST['id']) {
	switch(strtolower($_GET['view'])){
		case 'invoice':
			$inc='timebill-invoice-view.inc.php';
			break;
		case 'time':
			$inc='timebill-time-view.inc.php';
			break;
	}
}

require_once(STAFFINC_DIR.'header.inc.php');
require_once(STAFFINC_DIR.$inc);
require_once(STAFFINC_DIR.'footer.inc.php');
?>
