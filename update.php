<?php

session_start();
 
 $reverse = array_reverse($_SESSION['name']) ;
 //echo($reverse);

echo '<br>';
$x = ($_SESSION['key']);


?>


<!DOCTYPE HTML>
<html>
<head>
<title>monthly assignment</title>
</head>
<body>
<form method="POST">
	 <div>
		<input type="text" name="name" value="<?php echo $reverse[$x]; ?>" >
			

	 </div>
	<div>
		<input type="submit" name="submit" value="Submit">  <br> <br>
				
				
	</div>
	
</form>

<div><a href="get.php">Bact to Form</a></div>

<?php
 
 echo '<br>';
 if(isset($_POST['submit'])){
	 if(!empty($_POST['name'])){
		 $new = array($x => $_POST['name']);
		 
		 //$_SESSION['new'] = $new;
		 $_SESSION['name'] = array_replace($reverse,$new);
	$_SESSION['name']= array_reverse($_SESSION['name']);
	//var_dump($_SESSION['name']);
 

		 
header("Location: http://localhost/get.php");

	 }
 }

?>

</body>
</html>