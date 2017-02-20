<?php
	function fileext($filename){
		return substr(strrchr($filename, '.'),1);  // get file extension name
	}
	// generate random number
	function random($length){
		$hash = 'CR-';
		$chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz';
		$max = strlen($chars) - 1;   // get maximum index
		mt_srand((double)microtime() * 1000000);  // use random number
		for($i = 0; $i < $length; $i++){
			$hash .= $chars[mt_rand(0, $max)];
		}
		return $hash;
	}
?>