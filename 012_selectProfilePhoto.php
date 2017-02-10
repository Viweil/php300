<div>select your photo</div>
	<div>
		<select name="myMenu" id="change" onchange="check(this)">
			<option value="img/profilepics/1.png">pic-1</option>
			<option value="img/profilepics/2.png">pic-2</option>
			<option value="img/profilepics/3.png">pic-3</option>
			<option value="img/profilepics/4.png">pic-4</option>
			<option value="img/profilepics/5.png">pic-5</option>
			<option value="img/profilepics/6.png">pic-6</option>
			<option value="img/profilepics/7.png">pic-7</option>
		</select>
		<img id="showTime" src="img/profilepics/1.png">
	</div>
	
	
	<script>
		function check(obj){
			var src = obj.value;   // get option's value
			$("showTime").src = src;	// get img label and define the value of src is the value of what you got		
		}
		
		function $(obj){   // get label object that contains ID
			return document.getElementById(obj);
		}
	</script>
	
	
	