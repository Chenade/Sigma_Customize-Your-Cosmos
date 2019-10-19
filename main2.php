
<html>
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><style id="stndz-style"></style>
	<title>Materials gallery | seen.js</title>
  <style>
  .bg{
	width:100vw; 
	height:100vh; 
	background-image:url(img/cosmos.jpg);
	background-size:100% 100%; 
	background-repeat: no-repeat; 
	margin:0;">
  }
  
  .control{
	  position:absolute;
	  top:90vh;
	  
	  height:10vh;
	  width:100vw;
	  
  }
  
  .btn{
	height:10vh;
  }
  
 
  </style>
	
</head>

<body style="margin:0;">

	
	
	<div class="bg"> </"div>

	
	<div class="control">
		
		<div align="center" style="width:33vw; position:relative; float:left;"><input type="image" class="btn" src="img/earth.png" onclick="place()"></div>
		<div align="center" style="width:33vw; position:relative; float:left;"><input type="image" class="btn" src="img/jupiter.png" onclick="create()"></div>
		<div align="center" style="width:33vw; position:relative; float:left;"><input type="image" class="btn" src="img/mars.png" onclick="finish()"></div>
	
	</div>


</body>

</html>

<script>
function place(){
	window.location.assign("place.php");
}
function create(){
	window.location.assign("planet_create.php");
}
function finish(){
	window.location.assign("finish.php");
}
</script>