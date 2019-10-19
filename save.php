<?php

	$con = mysqli_connect("localhost","root","","nasa") or die("failed");
	
	$sql = "INSERT INTO `test`(`category`, `name`, `radius`, `R`, `G`, `B`, `rotation`, `circle`, `place`) 
	VALUES ('".$_POST['category']."','".$_POST['name']."','".$_POST['radius']."','".$_POST['R']."','".$_POST['G']."','".$_POST['B']."','false','false','false')";
	echo $sql;
	mysqli_query($con,$sql);
	
	header("Location:main.php");
?>