<?php
	$day = $_POST['day'];
	$month = $_POST['month'];
	$year = $_POST['year'];
	$birthday = mktime(0,0,0,$month,$day,$year);
	$nowUNIX = time();	
	$age = $nowUNIX - $birthday;
	$age = floor($age / (365*24*60*60));
	echo "<script>alert('You are ".$age."')</script>";

?>