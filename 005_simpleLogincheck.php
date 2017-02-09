<?php
	if(isset ($_POST)){
		if($_POST['username'] == 'mocca' && $_POST['pswd'] == 'mocca'){
			echo "
			<script type='text/javascript'>
			alert ('login successful');
			</script>
				";
		}else{
			echo "<script type='text/javascript'>
			alert ('login failed');
			</script>";
		}
		
	}

?>