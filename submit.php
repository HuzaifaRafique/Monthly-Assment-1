<?php
session_start();
if(isset($_POST['submit'])){
	if(!empty($_POST['name'])){
		echo $_POST['name'];
		if(!isset($_SESSION['name'])){
			$_SESSION['name'] = array();
			$name = $_POST['name'];
			array_push($_SESSION['name'], $name);
								
header("Location: http://localhost/get.php");
		}else{
			$name = $_POST['name'];
			array_push($_SESSION['name'], $name);
			
					
header("Location: http://localhost/get.php");
				
		}
	}
}






?>


 
 
<!DOCTYPE HTML>
<html>
<head>
<title>monthly assignment</title>
</head>
<body>
<form method="POST">
	 <div>
		<input type="text" name="name" placeholder="User_task" >
			

	 </div>
	<div>
		<input type="submit" name="submit" value="submit">  <br> <br>
	</div>
	
</form>
<div><a href='get.php'>Task List</a></div> 
</body>
</html>

