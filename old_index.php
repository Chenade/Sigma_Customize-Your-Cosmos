
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
  .start{
	width : 200px;
	height : 200px;
	position:absolute;
	left:80vw;
	top:60vh;
	
  }
 
  </style>
	
</head>

<body style="margin:0;">

	
	
	<div class="bg"> </"div>

	<input type="image" class="start" src="img/play1.png" alt="send" name="start" id="start" onclick="send()" onmouseover="hhover()" onmouseout="nor()"/>


</body>

</html>

<script>
function send(){
	
	window.location.assign("star_create.php");
	
}

function hhover(){
	var a = document.getElementById("start");
	a.src="img/play22.png";
}

function nor(){
	var a = document.getElementById("start");
	a.src="img/play1.png";
}
</script>