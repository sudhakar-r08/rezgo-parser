<?php 
	// This is the printable version of booking_complete.php
	
	require('rezgo/include/page_header.php');
	
	// start a new instance of RezgoSite
	$site = new RezgoSite();
	
	// grab and decode the trans_num if it was set
	$trans_num = $site->decode($_REQUEST['trans_num']);
	
	// send the user home if they shoulden't be here
	if(!$trans_num) $site->sendTo($site->base."/booking-not-found");
	
	$site->setMetaTags('<meta name="robots" content="noindex, nofollow">');
	
?>

<? /*=$site->getTemplate('booking_complete_print.php')*/?>

<? if(strlen($trans_num) == 16) { ?>
	
	<?=$site->getTemplate('booking_order_print.php')?>
	
<? } else { ?>

	<?=$site->getTemplate('booking_complete_print.php')?>

<? } ?>
