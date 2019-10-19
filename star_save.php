<?php

	$con = mysqli_connect("localhost","root","","nasa") or die("failed");
	$db = mysqli_select_db($con,"nasa");
	$sql = "SELECT * FROM `planet`";
	$run = mysqli_query($con,$sql);
	$count = mysqli_num_rows ($run) ;
	
	if ($count > 0 ){
		
		$sql ="UPDATE `planet` SET `category`='star',`name`='".$_GET['name']."',
		`radius`='".$_GET['radius']."',`R`='".$_GET['R']."',`G`='".$_GET['G']."',`B`='".$_GET['B']."' WHERE `id`='1'";
		//echo $sql;
		mysqli_query($con,$sql);
	}else{
		
		$sql = "INSERT INTO `planet`(`category`, `name`, `radius`, `R`, `G`, `B`) 
		VALUES ('star','".$_GET['name']."','".$_GET['radius']."','".$_GET['R']."','".$_GET['G']."','".$_GET['B']."')";
		//echo $sql;
		mysqli_query($con,$sql);
		
	}
	header("Location:main.php");
	echo $count;
?>