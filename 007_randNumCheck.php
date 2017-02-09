<?php 
if(isset($_POST)){
	if($_POST['randNum'] == $_POST[$s]){
		echo "<script type='text/javascript'>alert('randNum correct');</script>";
	}
}else{
	echo "<script type='text/javascript'> alert ('randNum incorrect');</script>";
}

?>