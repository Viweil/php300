<?php
include("check.php");//�����Զ��庯���ļ�
$uploaddir = "./files/";//�����ļ�����Ŀ¼ ע�����/ 
$type=array("jpg","gif","bmp","jpeg","png");//���������ϴ��ļ������� 
//�ж��ϴ��ļ��������Ƿ��ڷ�Χ��
if(!in_array(strtolower(fileext($_FILES['file']['name'])),$type)) { 
$text=implode(",",$type); 
echo "��ֻ���ϴ����������ļ�: ",$text,"<br>"; 
} 
//����Ŀ���ļ����ļ��� 
else{ 
$filename=explode(".",$_FILES['file']['name']); 
do 
{ 
$filename[0]=random(10); //������������� 
$name=implode(".",$filename);  
$uploadfile=$uploaddir.$name; 
} 
while(file_exists($uploadfile)); 

if(is_uploaded_file($_FILES['file']['tmp_name'])){ 
if(move_uploaded_file($_FILES['file']['tmp_name'],$uploadfile)){
echo "<center>�����ļ��Ѿ��ϴ���� �ϴ�ͼƬԤ��: </center><br><center><img src='$uploadfile'></center>"; 
echo"<br><center><a href='javascript:history.go(-1)'>�����ϴ�</a></center>"; 
}else{
echo "�ϴ�ʧ��";
}
} 
}
?>