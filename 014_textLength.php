<?
header("Content-type:text/html;charset=utf-8");
?>
<div>leave message</div>
<form name="myForm" action="014_chkLen.php" method="post" onsubmit="return check()">
	<textarea name="message"></textarea>
	<br><br>
	<input type="submit" value="submit">
</form>

<script>
	function check(){
		if(document.myForm.message.value==""){
			alert("Please fill out message");
			return false;
		}
		return true;
	}
</script>