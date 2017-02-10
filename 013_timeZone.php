<?php
	date_default_timezone_set('NZ');
	echo "New Zealand timezone: ";
	echo date("d-m-Y h:i:s")."<br>";
	date_default_timezone_set('PRC');
	echo "China timezone: ";
	echo date("d-m-Y h:i:s")."<br>";
	date_default_timezone_set('America/New_YORK');
	echo "America timezone: ";
	echo date("d-m-Y h:i:s")."<br>";
	date_default_timezone_set('Japan');
	echo "Japan timezone: ";
	echo date("d-m-Y h:i:s")."<br>";
?>