<?php

	if(isset($_POST['chose'])){
		
		if($_POST['cat']=="wood"){
			header("Location:create_WP.php?name=".$_POST['name']."&radius=".$_POST['radius']);
		}else{
			header("Location:create_GP.php?name=".$_POST['name']."&radius=".$_POST['radius']);
		}
		
	}

?>

<html>
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><style id="stndz-style"></style>
	<title>Materials gallery | seen.js</title>
  
	
</head>

<body style="">

<form action="create_planet.php" method="post">

	name:<input type="text" name="name" placehoder="Please enter" required><br>
	radius:<input type="number" name="radius" value="200"><br>
	<input type="radio" name="cat" value="wood" required>類木行星<br>
	<input type="radio" name="cat" value="ground" required>類地行星<br>
	
	<input type="hidden" name="chose" value="chose">
	<input type="submit">
	
</form>



</body>

</html>