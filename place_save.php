<?php

	$con = mysqli_connect("localhost","root","","nasa") or die("failed");
	
	$sql = "UPDATE `planet` SET `alive`='true',`state`='normal',`place`= ".$_GET['place']." WHERE `id` = " . $_GET['id'];
	echo $sql;
	
	
	mysqli_query($con,$sql);
	
	header("Location:main.php");
?>