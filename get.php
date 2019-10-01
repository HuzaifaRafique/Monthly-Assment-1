<?php
ob_start();
session_start();
//var_dump ($_SESSION ['name']);
//echo  implode($_SESSION ['name']);


$reverse = array_reverse($_SESSION['name']) ;
$arrlength = count($reverse);

for($x = 0; $x < $arrlength; $x++){
	echo $x. '<br>'  .$reverse[$x];
	
?>
	
<form method="POST">

	<input type="hidden" name="hide" value="<?php echo $reverse[$x]; ?>">
<input type="submit" name="remove" value="remove">
<input type="submit" name="update" value="update">

</form>
<?php
 
}

echo '<br>';
echo '<br>';

?>

<a href="submit.php">Back to form</a>

<?php

	if (isset($_POST['update'])) {
    $key = array_search($_POST['hide'], $reverse);
		//var_dump($key);
		$_SESSION['key'] = $key;
		header("Location: http://localhost/update.php");
		ob_end_flush();
} 
	
	if(isset($_POST['remove'])){
		 $key = array_search($_POST['hide'], $reverse);
		 $del = array($_POST['hide']);
		 //$_SESSION['key'] = $key;  
		var_dump($del);
		
		$_SESSION['name'] = array_diff($reverse,$del);
		$_SESSION['name']= array_reverse($_SESSION['name']);
						
header("Location: http://localhost/get.php");
	

	}	

?>