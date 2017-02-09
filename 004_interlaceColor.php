<?php 
$color = "";
echo "colorful list";
echo "<ul>";
	for($i = 1; $i<=5; $i++){
		if($i%2 == 0){
			$color = "lightblue";
		}else {
			$color = "lightpink";
		}
		echo "<li style='background-color:".$color.";width:200'>第".$i."行内容</li>";
	}
echo "</ul>";

?>