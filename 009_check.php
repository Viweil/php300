<?php
$action=$_GET["action"];
switch ($action){
	case "add":
	echo "<script type='text/javascript'>alert('ADD')</script>";
	break;
	
	case "del":
	echo "<script type='text/javascript'>alert('DEL')</script>";
	break;
	
	case "update":
	echo "<script type='text/javascript'>alert('UPDATE')</script>";
	break;
	
	case "read":
	echo "<script type='text/javascript'>alert('READ')</script>";
	break;
	
}

?>