
<form action="007_randNumCheck.php" type="post">
verification code: 
<input type="text" name="randNum" value="">
<?php
$str = "0123456789abcdefghijklmnopqrstuvwxyz";
$n = 8;
$s = "";
$len = strlen($str)-1;
for($i=0 ; $i<$n; $i++){
$s .= $str[rand(0,$len)];
}
echo $s . "<br>";
?>
<br>
<input type="submit" name="submit" value="submit">
</form>

