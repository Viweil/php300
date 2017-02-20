<?php
include("check.php");//引入自定义函数文件
$uploaddir = "./files/";//设置文件保存目录 注意包含/ 
$type=array("jpg","gif","bmp","jpeg","png");//设置允许上传文件的类型 
//判断上传文件的类型是否在范围内
if(!in_array(strtolower(fileext($_FILES['file']['name'])),$type)) { 
$text=implode(",",$type); 
echo "您只能上传以下类型文件: ",$text,"<br>"; 
} 
//生成目标文件的文件名 
else{ 
$filename=explode(".",$_FILES['file']['name']); 
do 
{ 
$filename[0]=random(10); //设置随机数长度 
$name=implode(".",$filename);  
$uploadfile=$uploaddir.$name; 
} 
while(file_exists($uploadfile)); 

if(is_uploaded_file($_FILES['file']['tmp_name'])){ 
if(move_uploaded_file($_FILES['file']['tmp_name'],$uploadfile)){
echo "<center>您的文件已经上传完毕 上传图片预览: </center><br><center><img src='$uploadfile'></center>"; 
echo"<br><center><a href='javascript:history.go(-1)'>继续上传</a></center>"; 
}else{
echo "上传失败";
}
} 
}
?>