<style>
body{
background:#ccc;
}</style>
<center><b>把图片上传到服务器</b><br></center>
<form method="post" action="upload.php" enctype="multipart/form-data"> 
<table border=0 cellspacing=0 cellpadding=0 align=center width="300px"> 
<tr> 
<td width=55 height=20 align="center">
<input type="hidden" name="MAX_FILE_SIZE" value="2000000">文件:</td> 
<td height="16"> 
<input name="file" type="file" value="浏览" > 
</td>
</tr>
<tr><td align="center" colspan="2">
<br><input type="submit" value="上传" name="B1">
</td>
</tr>
</table>
</form>