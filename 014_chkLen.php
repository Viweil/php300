<?php
	if(!empty($_POST['message'])){
		$str = $_POST['message'];
		preg_match_all("/./us",$str,$match);
		$num = count($match[0]);
		print_r($match);
		if($num <= 6){
			echo "<script>alert('no less than 6 character');</script>";
		}else{
			echo "<script>alert('submit successful');</script>";
		}
	}
?>