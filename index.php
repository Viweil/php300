<?
header("Content-type:text/html;charset=utf-8");
?>
<style>
body{
background:#ccc;
}
</style>
论坛留言<br>
<form name="myForm" action="index.php" method="post" onsubmit="return check()">
<textarea name="message"></textarea>
<br><br>
<input type="submit" value="发布回帖">
</form>
<script>
function check(){
if(document.myForm.message.value==""){
alert("不能为空");
 return false;
}
return true;
}
</script>
<?php
if(!empty($_POST['message'])){
$str = $_POST['message'];
preg_match_all("/./us", $str, $match);
$num = count($match[0]);
print_r($match);
if($num <= 6) {
echo "<script>alert('输入内容的长度小于6');</script>";	
}else{
echo "<script>alert('发布成功');</script>";
}
}
?>