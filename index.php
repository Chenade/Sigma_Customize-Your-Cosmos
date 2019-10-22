<!DOCTYPE html>
<html lang="en" >

<head>
	<meta charset="UTF-8">
	<title>HTML5 Canvas 3D天体运行动画DEMO演示</title>
	<link rel="stylesheet" href="css/style.css">
	<script src="/gg_bd_ad_720x90.js" type="text/javascript"></script>
	<script src="/follow.js" type="text/javascript"></script>
	
<style>

	.start2{
		width:400px;
		height:350px;
		position:absolute;
		left:75vw;
		top:60vh;
	}
	.start3{
		
		position:absolute;
		
		top:1vh;
	}

</style>


</head>

<body>
	<div style="text-align:center;clear:both">  </div>
	<div id="container"></div>
	
	<script src='js/three.min.js'></script>
	<script src='js/CopyShader.js'></script>
	<script src='js/EffectComposer.js'></script>
	<script src='js/FilmPass.js'></script>
	<script src='js/FilmShader.js'></script>
	<script src='js/ShaderPass.js'></script>
	<script src='js/RenderPass.js'></script>
	<script  src="js/index.js"></script>
	
	
	<input type="image" class="start3" src="img/LOGO6.png" alt="send" />
	<input type="image" class="start2" src="img/LOGO4.png" alt="send" name="start" id="start" onclick="send()" onmouseover="hhover()" onmouseout="nor()"/>
	
	
</body>

</html>


<script>
function send(){
	
	window.location.assign("star_create.php");
	
}

function hhover(){
	var a = document.getElementById("start");
	a.src="img/STA3.png";
}

function nor(){
	var a = document.getElementById("start");
	a.src="img/LOGO4.png";
}
</script>