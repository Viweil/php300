<?php
include("021_uploadImageToServer_check.php");
$uploaddir = "./files/";
$type=array("jpg","gif","bmp","jpeg","png");
if(!in_array(strtolower(fileext($_FILES['file']['name'])),$type)){
	$text=implode(",",$type);
	echo "You can only upload: ",$text,"<br>";	
	}else{
		$filename=explode(".",$_FILES['file']['name']);
		do{
			$filename[0]=random(10);
			$name=implode(".",$filename);
			$uploadfile=$uploaddir.$name;
		}
		while(file_exists($uploadfile));
		if(is_uploaded_file($_FILES['file']['tmp_name'])){
			if(move_uploaded_file($_FILES['file']['tmp_name'],$uploadfile)){
				echo "<center>your file has been uploaded</center><br>
				<center><img src='$uploadfile'></center>";
				echo"<br><center><a href='javascript:history.go(-1)'>continue to upload</a></center>";
			}else{
				echo "upload failed";
			}
		}
	}

?>