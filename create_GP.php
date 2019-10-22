
<!-- saved from url=(0043)http://seenjs.io/demo-material-gallery.html -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><style id="stndz-style"></style>
  <title>Materials gallery | seen.js</title>
  
  <link href="./Materials gallery _ seen.js_files/css" rel="stylesheet" type="text/css">
  
  <link href="./Materials gallery _ seen.js_files/theme.css" rel="stylesheet" type="text/css">
  
  <script src="./Materials gallery _ seen.js_files/seen.min.js"></script>
  <script src="./Materials gallery _ seen.js_files/coffee-script.min.js"></script>
	  
	<style>
		.bg{
			width:100vw; 
			height:100vh; 
			background-image:url(img/cosmos.jpg);
			background-size:100% 100%; 
			background-repeat: no-repeat; 
			margin:0;
		}
		.parameters-container {
			width:30vw;
			height:95vh;
			overflow:auto;
			background-color:rgba(0, 54, 134, 0.5);
		}
		
		.left {
			width:30vw;
			height:100vh;
			display:flex;
			flex-direction:column;
			
		}
		.right{
			width:70vw;
			height:100vh;
			display:flex;
			flex-direction:column;
			
		}

		.ui-widget {
			font-size: 0.8em;
		}

		h4 {
			margin-bottom : 4px;
			margin-left : 0px;
		}

		h5 {
			margin-top    : 4px;
			margin-bottom : 4px;
		}
		span{
			color:white;
		}
		hr{
			margin:35px;
		}
		
		.text{
			background-color:transparent;
			border:solid white 2px;
			width:15vw;;
			height:50px;
			font-size:30px;
			color:white;
		}
		
		.submit{
			background-color:transparent;
			border:solid white 2px;
			height:5vh;
			width:29vw;
			color:white;
			font-size:30px;
			margin:10px;
		}
		
		.page_container{
			display:flex;
			flex-direction:row;
			justify-content:center;
			align-items:center;
			height:100vh;
		}
		
		.detail{
			height:15vh;
			width:100vw;
			display:flex;
			justify-content:center;
			align-items:center;
		}
		
		.canvas{
			width:70vw;
			height:92vh;
			justify-content:center;
			display:flex;
			align-items:center;
		}
		.slider{
			width:50vw;
			height:8vh;
			align:center;
			display:flex;
			align-items:center;
		}
		
		
		
		/* The container */
		.container {
			display: block;
			position: relative;
			padding-left: 35px;
			margin-bottom: 12px;
			cursor: pointer;
			font-size: 22px;
			-webkit-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none;
		}

		/* Hide the browser's default checkbox */
		.container input {
		  position: absolute;
		  opacity: 0;
		  cursor: pointer;
		  height: 0;
		  width: 0;
		}

		/* Create a custom checkbox */
		.checkmark {
		  position: absolute;
		  top: 0;
		  left: 0;
		  height: 25px;
		  width: 25px;
		  background-color: #eee;
		}

		/* On mouse-over, add a grey background color */
		.container:hover input ~ .checkmark {
		  background-color: #ccc;
		}

		/* When the checkbox is checked, add a blue background */
		.container input:checked ~ .checkmark {
		  background-color: #2196F3;
		}

		/* Create the checkmark/indicator (hidden when not checked) */
		.checkmark:after {
		  content: "";
		  position: absolute;
		  display: none;
		}

		/* Show the checkmark when checked */
		.container input:checked ~ .checkmark:after {
		  display: block;
		}

		/* Style the checkmark/indicator */
		.container .checkmark:after {
		  left: 9px;
		  top: 5px;
		  width: 5px;
		  height: 10px;
		  border: solid white;
		  border-width: 0 3px 3px 0;
		  -webkit-transform: rotate(45deg);
		  -ms-transform: rotate(45deg);
		  transform: rotate(45deg);
		}
	</style>
</head>

<script src="./Materials gallery _ seen.js_files/jquery.min.js"></script>
<script src="./Materials gallery _ seen.js_files/jquery-ui.min.js"></script>
<link href="./Materials gallery _ seen.js_files/jquery-ui.css" rel="stylesheet" type="text/css">


<body style="margin:0px;">
<div class="bg">
    
<div class="light" id="bulb_box"><input type="image" id="bulb" style="position:absolute; left:20vw; top:26vh; height:120px; width:150px;" src="img/1-2.png"  /></div>
			
	<div align="center" id="light" class="display:none; position:absolute; left:30vw; top:0vh;">
		<img src="k1.png">
		
	</div>

<script>

		function light_show(){
			var a = document.getElementById("bulb").src="url(img/1-2-1.png)";
		}
		
		function light_none(){
			var a = document.getElementById("bulb").src="url(img/1-2.png)";
		}
		

</script>
	
	
	
	
	
	
	<div class="page_container">
		<div class="left">
			<div class="parameters-container">
				<div align="center"><p style="color:white; font-size:50px;">類地行星</p><hr></div>
				<div style="margin:25px;">
		
		<form action="save.php" method="post">
				<p style="margin:20px;">
					<span style="font-size:35px;">行星名稱：</span>
					<span><input type="text" name="name" class="text" placeholder="Please enter"  autocomplete="off"  required></span>
				</p>
				
				
				<hr>
				
				
				<label class="container"><span>大氣元素</span>
				  <input type="checkbox"  onclick="water()">
				  <span class="checkmark"></span>
				</label>

				<script>
					var wwater=1;
					
					function water(){
						
						if (wwater>0){
							wwater=0;
							var a = document.getElementById("water").style.display="inline";
							var c = document.getElementById("amt").style="display:flex; flex-direction:row; flex-wrap:wrap; justify-content:space-between;	";
						}else{
							wwater=1;
							var b = document.getElementById("water1").checked=false;
							var a = document.getElementById("water").style.display="none";
							var c = document.getElementById("amt").style.display="none";
						}
					}
						
				</script>

				<div id="amt" style="display:none;">
					  <div id="watergas_box" class="ui-buttonset" style="position:relative; float:left;">
							<input type="checkbox" id="watergas" name="red-checkbox" class="ui-helper-hidden-accessible" value="5">
								<label for="watergas" class="ui-state-active ui-button ui-widget ui-state-default ui-button-text-only ui-corner-left" role="button" aria-disabled="false" style="background-color:transparent; margin:25px; width:240px;">
									<span class="ui-button-text">水蒸氣</span>
								</label>
						</div>


						<div id="nitrogen_box" class="ui-buttonset" style="position:relative; float:left;">
							<input type="checkbox" id="nitrogen" name="red-checkbox" class="ui-helper-hidden-accessible" value="5">
								<label for="nitrogen" class="ui-state-active ui-button ui-widget ui-state-default ui-button-text-only ui-corner-left" role="button" aria-disabled="false" style="background-color:transparent; margin:25px; width:240px;">
									<span class="ui-button-text">氮氣</span>
								</label>
						</div>


						<div id="oxygen_box" class="ui-buttonset" style="position:relative; float:left;">
							<input type="chaeckbox" id="oxygen" name="red-checkbox" class="ui-helper-hidden-accessible" value="5">
								<label for="oxygen" class="ui-state-active ui-button ui-widget ui-state-default ui-button-text-only ui-corner-left" role="button" aria-disabled="false" style="background-color:transparent; margin:25px; width:240px;">
									<span class="ui-button-text">氧氣</span>
								</label>
						</div>


						<div id="argon_box" class="ui-buttonset" style="position:relative; float:left;">
							<input type="chaeckbox" id="argon" name="red-checkbox" class="ui-helper-hidden-accessible" value="5">
								<label for="argon" class="ui-state-active ui-button ui-widget ui-state-default ui-button-text-only ui-corner-left" role="button" aria-disabled="false" style="background-color:transparent; margin:25px; width:240px;">
									<span class="ui-button-text">氬氣</span>
								</label>
						</div>


						<div id="carbondioxide_box" class="ui-buttonset" style="position:relative; float:left;">
							<input type="chaeckbox" id="carbondioxide" name="red-checkbox" class="ui-helper-hidden-accessible" value="5">
								<label for="carbondioxide" class="ui-state-active ui-button ui-widget ui-state-default ui-button-text-only ui-corner-left" role="button" aria-disabled="false" style="background-color:transparent; margin:25px; width:240px;">
									<span class="ui-button-text">二氧化碳</span>
								</label>
						</div>


						<div id="neon_box" class="ui-buttonset" style="position:relative; float:left;">
							<input type="chaeckbox" id="neon" name="red-checkbox" class="ui-helper-hidden-accessible" value="5">
								<label for="neon" class="ui-state-active ui-button ui-widget ui-state-default ui-button-text-only ui-corner-left" role="button" aria-disabled="false" style="background-color:transparent; margin:25px; width:240px;">
									<span class="ui-button-text">氖氣</span>
								</label>
						</div>


						<div id="helium_box" class="ui-buttonset" style="position:relative; float:left;">
							<input type="chaeckbox" id="helium" name="red-checkbox" class="ui-helper-hidden-accessible" value="5">
								<label for="helium" class="ui-state-active ui-button ui-widget ui-state-default ui-button-text-only ui-corner-left" role="button" aria-disabled="false" style="background-color:transparent; margin:25px; width:240px;">
									<span class="ui-button-text">氦氣</span>
								</label>
						</div>


						<div id="methane_box" class="ui-buttonset" style="position:relative; float:left;">
							<input type="chaeckbox" id="methane" name="red-checkbox" class="ui-helper-hidden-accessible" value="5">
								<label for="methane" class="ui-state-active ui-button ui-widget ui-state-default ui-button-text-only ui-corner-left" role="button" aria-disabled="false" style="background-color:transparent; margin:25px; width:240px;">
									<span class="ui-button-text">甲烷</span>
								</label>
						</div>


						<div id="krypton_box" class="ui-buttonset" style="position:relative; float:left;">
							<input type="chaeckbox" id="krypton" name="red-checkbox" class="ui-helper-hidden-accessible" value="5">
								<label for="krypton" class="ui-state-active ui-button ui-widget ui-state-default ui-button-text-only ui-corner-left" role="button" aria-disabled="false" style="background-color:transparent; margin:25px; width:240px;">
									<span class="ui-button-text">氪</span>
								</label>
						</div>


						<div id="hydrogen_box" class="ui-buttonset" style="position:relative; float:left;">
							<input type="chaeckbox" id="hydrogen" name="red-checkbox" class="ui-helper-hidden-accessible" value="5">
								<label for="hydrogen" class="ui-state-active ui-button ui-widget ui-state-default ui-button-text-only ui-corner-left" role="button" aria-disabled="false" style="background-color:transparent; margin:25px; width:240px;">
									<span class="ui-button-text">氫氣</span>
								</label>
						</div>


						<div id="nitrousoxide_box" class="ui-buttonset" style="position:relative; float:left;">
							<input type="chaeckbox" id="nitrousoxide" name="red-checkbox" class="ui-helper-hidden-accessible" value="5">
								<label for="nitrousoxide" class="ui-state-active ui-button ui-widget ui-state-default ui-button-text-only ui-corner-left" role="button" aria-disabled="false" style="background-color:transparent; margin:25px; width:240px;">
									<span class="ui-button-text">一氧化二氮</span>
								</label>
						</div>


						<div id="carbonmonoxide_box" class="ui-buttonset" style="position:relative; float:left;">
							<input type="chaeckbox" id="carbonmonoxide" name="red-checkbox" class="ui-helper-hidden-accessible" value="5">
								<label for="carbonmonoxide" class="ui-state-active ui-button ui-widget ui-state-default ui-button-text-only ui-corner-left" role="button" aria-disabled="false" style="background-color:transparent; margin:25px; width:240px;">
									<span class="ui-button-text">一氧化碳</span>
								</label>
						</div>


						<div id="xenon_box" class="ui-buttonset" style="position:relative; float:left;">
							<input type="chaeckbox" id="xenon" name="red-checkbox" class="ui-helper-hidden-accessible" value="5">
								<label for="xenon" class="ui-state-active ui-button ui-widget ui-state-default ui-button-text-only ui-corner-left" role="button" aria-disabled="false" style="background-color:transparent; margin:25px; width:240px;">
									<span class="ui-button-text">二氧化氙</span>
								</label>
						</div>


						<div id="ozone_box" class="ui-buttonset" style="position:relative; float:left;">
							<input type="chaeckbox" id="ozone" name="red-checkbox" class="ui-helper-hidden-accessible" value="5">
								<label for="ozone" class="ui-state-active ui-button ui-widget ui-state-default ui-button-text-only ui-corner-left" role="button" aria-disabled="false" style="background-color:transparent; margin:25px; width:240px;">
									<span class="ui-button-text">臭氧</span>
								</label>
						</div>


						<div id="nitrogendioxide_box" class="ui-buttonset" style="position:relative; float:left;">
							<input type="chaeckbox" id="nitrogendioxide" name="red-checkbox" class="ui-helper-hidden-accessible" value="5">
								<label for="nitrogendioxide" class="ui-state-active ui-button ui-widget ui-state-default ui-button-text-only ui-corner-left" role="button" aria-disabled="false" style="background-color:transparent; margin:25px; width:240px;">
									<span class="ui-button-text">二氧化氮</span>
								</label>
						</div>


						<div id="indine_box" class="ui-buttonset" style="position:relative; float:left;">
							<input type="chaeckbox" id="indine" name="red-checkbox" class="ui-helper-hidden-accessible" value="5">
								<label for="indine" class="ui-state-active ui-button ui-widget ui-state-default ui-button-text-only ui-corner-left" role="button" aria-disabled="false" style="background-color:transparent; margin:25px; width:240px;">
									<span class="ui-button-text">碘氣</span>
								</label>
						</div>


						<div id="ammonia_box" class="ui-buttonset" style="position:relative; float:left;">
							<input type="chaeckbox" id="ammonia" name="red-checkbox" class="ui-helper-hidden-accessible" value="5">
								<label for="ammonia" class="ui-state-active ui-button ui-widget ui-state-default ui-button-text-only ui-corner-left" role="button" aria-disabled="false" style="background-color:transparent; margin:25px; width:240px;">
									<span class="ui-button-text">氨氣</span>
								</label>
						</div>



						<div id="sulfer_box" class="ui-buttonset" style="position:relative; float:left;">
							<input type="chaeckbox" id="sulfer" name="red-checkbox" class="ui-helper-hidden-accessible" value="5">
								<label for="sulfer" class="ui-state-active ui-button ui-widget ui-state-default ui-button-text-only ui-corner-left" role="button" aria-disabled="false" style="background-color:transparent; margin:25px; width:240px;">
									<span class="ui-button-text">硫</span>
								</label>
						</div>


					  <br><br><br>
				</div>
				  
				  
				<hr>
				<label class="container" ><span>組成元素</span>
					<input type="checkbox" checked="checked" disabled>
					<span class="checkmark"></span>
				</label>


				<div align="center" style="display:flex; flex-direction:row; flex-wrap:wrap; justify-content:space-between;">
										
										
					<div id="SiO2_box" class="ui-buttonset" style="position:relative; float:left;">
						  <input type="checkbox" id="SiO2" name="red-checkbox" class="ui-helper-hidden-accessible" value="5">
						   <label for="SiO2" class="ui-state-active ui-button ui-widget ui-state-default ui-button-text-only ui-corner-left" role="button" aria-disabled="false" style="background-color:transparent; margin:25px; width:240px;">
							<span class="ui-button-text">二氧化矽(SiO<sub>2</sub>)</span>
						   </label>
						   </div>
					<div id="Al2O3_box" class="ui-buttonset" style="position:relative; float:left;">
						  <input type="checkbox" id="Al2O3" name="red-checkbox" class="ui-helper-hidden-accessible" value="5">
						   <label for="Al2O3" class="ui-state-active ui-button ui-widget ui-state-default ui-button-text-only ui-corner-left" role="button" aria-disabled="false" style="background-color:transparent;margin:25px;width:240px;"> 
							<span class="ui-button-text">氧化鋁(Al<sub>2</sub>O<sub>3</sub>)</span>
						   </label>
						   </div>
					<div id="CaO_box" class="ui-buttonset" style="position:relative; float:left;">
						  <input type="checkbox" id="CaO" name="red-checkbox" class="ui-helper-hidden-accessible" value="5">
						   <label for="CaO" class="ui-state-active ui-button ui-widget ui-state-default ui-button-text-only ui-corner-left" role="button" aria-disabled="false" style="background-color:transparent; margin:25px; width:240px;">
							<span class="ui-button-text">氧化鈣(CaO)</span>
						   </label>
						   </div>
					<div id="MgO_box" class="ui-buttonset" style="position:relative; float:left;">
						  <input type="checkbox" id="MgO" name="red-checkbox" class="ui-helper-hidden-accessible" value="5">
						   <label for="MgO" class="ui-state-active ui-button ui-widget ui-state-default ui-button-text-only ui-corner-left" role="button" aria-disabled="false" style="background-color:transparent; margin:25px; width:240px;">
							<span class="ui-button-text">氧化鎂(MgO)</span>
						   </label>
						   </div>
					<div id="FeO_box" class="ui-buttonset" style="position:relative; float:left;">
						  <input type="checkbox" id="FeO" name="red-checkbox" class="ui-helper-hidden-accessible" value="5">
						   <label for="FeO" class="ui-state-active ui-button ui-widget ui-state-default ui-button-text-only ui-corner-left" role="button" aria-disabled="false" style="background-color:transparent; margin:25px; width:240px;">
						   <span class="ui-button-text">氧化亞鐵 (FeO) </span>
						   </label>
						   </div>
					<div id="Na2O_box" class="ui-buttonset" style="position:relative; float:left;">
						  <input type="checkbox" id="Na2O" name="red-checkbox" class="ui-helper-hidden-accessible" value="5">
						   <label for="Na2O" class="ui-state-active ui-button ui-widget ui-state-default ui-button-text-only ui-corner-left" role="button" aria-disabled="false" style="background-color:transparent; margin:25px; width:240px;">
							<span class="ui-button-text">氧化鈉(Na<sub>2</sub>O)</span>
						   </label>
						   </div>
					<div id="K2O_box" class="ui-buttonset" style="position:relative; float:left;">
						  <input type="checkbox" id="K2O" name="red-checkbox" class="ui-helper-hidden-accessible" value="5">
						   <label for="K2O" class="ui-state-active ui-button ui-widget ui-state-default ui-button-text-only ui-corner-left" role="button" aria-disabled="false" style="background-color:transparent;margin:25px; width:240px;">
							<span class="ui-button-text">氧化鉀(K<sub>2</sub>O)</span>
						   </label>
						   </div>
					<div id="Fe2O3_box" class="ui-buttonset" style="position:relative; float:left;">
						  <input type="checkbox" id="Fe2O3" name="red-checkbox" class="ui-helper-hidden-accessible" value="5">
						   <label for="Fe2O3" class="ui-state-active ui-button ui-widget ui-state-default ui-button-text-only ui-corner-left" role="button" aria-disabled="false" style="background-color:transparent;margin:25px; width:240px;">
							<span class="ui-button-text">氧化鐵(Fe<sub>2</sub>O<sub>3</sub>)</span>
						   </label>
						   </div>
					<div id="TiO2_box" class="ui-buttonset" style="position:relative; float:left;">
						  <input type="checkbox" id="TiO2" name="red-checkbox" class="ui-helper-hidden-accessible" value="5">
						   <label for="TiO2" class="ui-state-active ui-button ui-widget ui-state-default ui-button-text-only ui-corner-left" role="button" aria-disabled="false" style="background-color:transparent;margin:25px; width:240px;">
							<span class="ui-button-text">二氧化鈦(TiO<sub>2</sub>)</span>
						   </label>
						   </div>
					<div id="P2O5_box" class="ui-buttonset" style="position:relative; float:left;">
						  <input type="checkbox" id="P2O5" name="red-checkbox" class="ui-helper-hidden-accessible" value="5">
						   <label for="P2O5" class="ui-state-active ui-button ui-widget ui-state-default ui-button-text-only ui-corner-left" role="button" aria-disabled="false" style="background-color:transparent;margin:25px; width:240px;">
							<span class="ui-button-text">五氧化二磷(P<sub>2</sub>O<sub>5</sub>)</span>
						   </label>
					</div>
				
				</div>
				
				
				  
				 
				  

				<div id="water" style="display:none;">
					<br><br><br><hr>
					<label class="container" disabled="true"><span>水</span>
					  <input type="checkbox" id="water1">
					  <span class="checkmark"></span>
					</label>
					
				</div>
				
				</div>
			</div>
			
			<div style="background-color:transparent;">
				<input type="submit" value="save" class="submit">	
			</div>
			
		</div>
		
		<div class="right">
		
			<div align="center" class="canvas">
				<canvas width="900" height="900" id="seen-canvas"></canvas> 
			</div>
			
			<div align="center" style="width:69vw; height:10vh; display:flex; flex-direction:row; justify-content:center;">
				<div align="center" style="width:10vw;">
						<p><span style="color:white; font-size:35px;">行星質量</span></p>
				</div>
				<div align="center" class="slider">
					<div id="hue-slider" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" aria-disabled="false" style="width:50vw;">
						<a class="ui-slider-handle ui-state-default ui-corner-all" href="http://seenjs.io/demo-material-gallery.html#" style="left: 50%; background-color:transparent; border:none; background-image:url(img/H5.png); background-size:100% 100%; transform:scale(5);"></a>
					</div>
				</div>
			</div>
		</div>
		
		<input type="hidden" id="category" name="category" value="jovian_planet">
		<input type="hidden" id="red" name="R" value="0">
		<input type="hidden" id="green"  name="G" value="0">
		<input type="hidden" id="blue"  name="B" value="0">
		<input type="hidden" id="radius"  name="radius" value="20">
		<input type="hidden" id="element"  name="element" value="20	">
		
		</form>
		
	</div>
</div>
</body></html>

<script language="javascript" id="code">
(function() {
  var context, dragger, group, height, resizew, scene, shape, shapeFactory, updateHue, updateLightingModel, updateLights, updateMetallic, updateShape, updateShinyness, width, r=5;
  var red,green=0,blue=0,updatered,updatered2,updateblue,save,red1=0;
  
  red =0;

  width = 900;

  height = 900;

  scene = new seen.Scene({
    model: seen.Models["default"](),
    viewport: seen.Viewports.center(width, height)
  });

  context = seen.Context('seen-canvas', scene).render();

  group = scene.model.append().scale(100);

  shape = null;

  dragger = new seen.Drag(document.getElementById('seen-canvas'), {
    inertia: true
  });

  dragger.on('drag.rotate', function(e) {
    var xform, _ref;
    xform = (_ref = seen.Quaternion).xyToTransform.apply(_ref, e.offsetRelative);
    group.transform(xform);
    return context.render();
  });

  shapeFactory = function(){
		
    return seen.Shapes.sphere(3).scale(2);
  };
  
  updatered = function() {
  	var redplus = parseFloat(document.getElementById("R1").value);
	var dis = document.getElementById("R1").checked=true;
	
	
		red = parseFloat(red,10);
		red = red+redplus
		var a = document.getElementById("red").value=red;
		updateHue();
		return context.render();
	
  };
  
   updatered2 = function() {
  	var plus = parseFloat(document.getElementById("G").value);
	var dis = document.getElementById("G").checked=true;
	green = parseFloat(green,10);
	green = green+plus;
	var a = document.getElementById("green").value=green;
	updateHue();
	return context.render();
  };
  
  updateblue = function() { 
  	var plus = parseFloat(document.getElementById("B").value);
	var dis = document.getElementById("B").checked=true;
	blue = parseFloat(blue,10);
	blue = blue+plus;
	var a = document.getElementById("blue").value=blue;
	updateHue();
	return context.render();
  };
  
  updateHue = function() {
    var hue, surf, _i, _len, _ref;
    hue = parseFloat($('#hue-slider').slider('value')) / 100.0;
    _ref = shape.surfaces;
	
		for (_i = 0, _len = _ref.length; _i < _len; _i++) {
      surf = _ref[_i];
      surf.fillMaterial.color = seen.Colors.rgb(red,green,blue);
      surf.fillMaterial.specularColor = surf.fillMaterial.color;
      surf.dirty = true;
    }
    return context.render();
  };

  updateShinyness = function() {
    var shinyness, surf, _i, _len, _ref;
    shinyness = 15;
    _ref = shape.surfaces;
    for (_i = 0, _len = _ref.length; _i < _len; _i++) {
      surf = _ref[_i];
      surf.fillMaterial.specularExponent = shinyness;
      surf.dirty = true;
    }
    return context.render();
  };

  updateMetallic = function() {
    var metallic, surf, _i, _len, _ref;
    metallic = $('input[name=metallic-radio]:checked').val() === 'yes';
    _ref = shape.surfaces;
    for (_i = 0, _len = _ref.length; _i < _len; _i++) {
      surf = _ref[_i];
      surf.fillMaterial.metallic = metallic;
      surf.dirty = true;
    }
    return context.render();
  };

  updateShape = function(r) {
    
    shapeType = $('#shape-sphere').val();
    group.children = [shape = shapeFactory(r)];
    updateHue();
	updateLights();
    updateShinyness();
    updateMetallic();
    return context.render();
  };

  updateLights = function() {
    
	scene.model.lights[0].enabled = true;
	scene.model.lights[1].enabled = false;
	scene.model.lights[2].enabled = false;
	
	return context.render();
  };

  updateLightingModel = function() {
    var shaderType;
    shaderType = $('#model-phong').val();
    scene.shader = seen.Shaders[shaderType]();
    return context.render();
  };
  
  
  updatequality=function(){
	var quality = parseFloat($('#hue-slider').slider('value')) /10;
	shape = seen.Shapes.sphere(3).scale(quality);
	
	var a = document.getElementById("radius").value=quality*10;
	shapeType = $('#shape-sphere').val();
    group.children = [shape = seen.Shapes.sphere(3).scale(quality)];
    updateHue();
	updateLights();
    updateShinyness();
    updateMetallic();
	
    return context.render();
  };
	
	var record="",watergas_count=0,nitrigen_count=0,oxygen_count=0,ammonia_count= 0,helium_count=0,sulfur_count=0,methane_count=0,krypton_count=0,idodine_count=0,hydrogen_count=0,nitrousoxide_count=0,ozone_count=0,xenon_count=0,carbonmonoxide_count;
	
	watergas = function() {
  	if(watergas_count < 1){record = record + "H<sub>2</sub>O_g,"; var dd = document.getElementById("element").value = record;}
	watergas_count+=1;
	updateHue();
	return context.render();
	
	};



	nitrigen = function() {
  	if(nitrigen_count < 1){record = record + "N<sub>2</sub>,"; var dd = document.getElementById("element").value = record;}
        nitrigen_count+=1;
	updateHue();
	return context.render();
	
	};



	oxygen = function() {
		
    if(oxygen_count < 1){record = record + "O<sub>2</sub>,"; var dd = document.getElementById("element").value = record;}
		oxygen_count+=1;
		updateHue();
	return context.render();
	
	};


	argon = function() {
        if(argon_count < 1){record = record + "Ar,"; var dd = document.getElementById("element").value = record;}
  	argon_count+=1;
	updateHue();
	return context.render();
	
	};


	carbondioxide = function() {
        if(carbondioxide_count < 1){record = record + "CO<sub>2</sub>,"; var dd = document.getElementById("element").value = record;}
  	carbondioxide_count+=1;
	updateHue();
	return context.render();
	
	};


	neon = function() {
        if(neon_count < 1){record = record + "Ne,"; var dd = document.getElementById("element").value = record;}
  	neon_count+=1;
	updateHue();
	return context.render();
	
	};


	helium = function() {
        if(helium_count < 1){record = record + "He,"; var dd = document.getElementById("element").value = record;}
  	helium_count+=1;
	updateHue();
	return context.render();
	
	};



	methane = function() {
      
	   if(methane_count < 1){record = record + "CH<sub>4</sub>,"; 
	   var dd = document.getElementById("element").value = record;}
	   
  	
	methane_count+=1;
	var redplus = 3.74;
	var greenplus = 4.08;
	var blueplus = 9.32;

	var dis = document.getElementById("methane").checked=true;
	
	
	red = parseFloat(red,10);
	
	
	green = parseFloat(green,10);
	blue = parseFloat(blue,10);
	
	red = red + redplus; 
	
	
	green = green+greenplus;
	blue = blue+blueplus;
	var a = document.getElementById("blue").value=blue;
	var a = document.getElementById("red").value=blue;
	var a = document.getElementById("green").value=blue;
	updateHue();
	return context.render();
	
	};


	krypton = function() {
        if(krypton_count < 1){record = record + "Kr,"; var dd = document.getElementById("element").value = record;}
  	krypton_count+=1;
	updateHue();
	return context.render();
	
	};


	hydrogen = function() {
        if(hydrogen_count < 1){record = record + "H<sub>2</sub>,"; var dd = document.getElementById("element").value = record;}
  	hydrogen_count+=1;
	updateHue();
	return context.render();
	
	};


	nitrousoxide = function() {
        if(nitrousoxide_count < 1){record = record + "N<sub>2</sub>O,"; var dd = document.getElementById("element").value = record;}
  	nitrousoxide_count+=1;
	updateHue();
	return context.render();
	
	};


	carbonmonoxide = function() {
        if(carbonmonoxide_count < 1){record = record + "CO,"; var dd = document.getElementById("element").value = record;}
  	carbonmonoxide_count+=1;
	updateHue();
	return context.render();
	
	};


	xenon = function() {
        if(xenon_count < 1){record = record + "Xe,"; var dd = document.getElementById("element").value = record;}
  	xenon_count+=1;
	updateHue();
	return context.render();
	
	};


	ozone = function() {
        if(ozone_count < 1){record = record + "O<sub>3</sub>,"; var dd = document.getElementById("element").value = record;}
	ozone_count+=1;
  	var redplus = 3.74;
	var greenplus = 4.08;
	var blueplus = 4.66;
	var dis = document.getElementById("ozone").checked=true;
	
	
	red = parseFloat(red,10);
	green = parseFloat(green,10);
	blue = parseFloat(blue,10);
	
	blue = blue+blueplus;
	red = red+redplus;
	green = green+greenplus;
	var a = document.getElementById("blue").value=blue;
	var a = document.getElementById("red").value=blue;
	var a = document.getElementById("green").value=blue;
	updateHue();
	return context.render();
	
	};


	idodine = function() {
        if(idodine_count < 1){record = record + "I<sub>2</sub>,"; var dd = document.getElementById("element").value = record;}
  	idodine_count+=1;
	var redplus =2.18 ;
	var blueplus = 1.12;
	var greenplus =2.68;
	var dis = document.getElementById("idodine").checked=true;
	
	
	red = parseFloat(red,10);
	green = parseFloat(green,10);
	blue = parseFloat(blue,10);
	blue = blue+blueplus;
	red = red+redplus;
	green = green+greenplus;

	var a = document.getElementById("blue").value=blue;
	var a = document.getElementById("red").value=blue;
	var a = document.getElementById("green").value=blue;
	updateHue();
	return context.render();
	
	};


	sulfur = function() {
        if(sulfur_count < 1){record = record + "S,"; var dd = document.getElementById("element").value = record;}
  	sulfur_count+=1;
	var redplus =4.47 ;
	var blueplus = 5.1;
	var greenplus =0.66;
	var dis = document.getElementById("sulfur").checked=true;
	
	
	red = parseFloat(red,10);
	green = parseFloat(green,10);
	blue = parseFloat(blue,10);
	blue = blue+blueplus;
	red = red+redplus;
	green = green+greenplus;

	var a = document.getElementById("blue").value=blue;
	var a = document.getElementById("red").value=blue;
	var a = document.getElementById("green").value=blue;
	updateHue();
	return context.render();
	
	};




	ammonia = function() {
        if(ammonia_count < 1){record = record + "NH<sub>3</sub>,"; var dd = document.getElementById("element").value = record;}
  	ammonia_count+=1;
	updateHue();
	return context.render();
	
	};
	
	
	var SiO2_count = 0, Al2O3_count=0,CaO_count=0,MgO_count=0,Fe2O3_count=0,FeO_count=0,TiO2_count=0,P2O5_count=0;;
	
		SiO2 = function() {
			
			
			if(SiO2_count < 1){record = record + "SiO<sub>2</sub>,"; var dd = document.getElementById("element").value = record;}
			SiO2_count  = SiO2_count+1;;
			
			var redplus = 5;
			var dis = document.getElementById("SiO2").checked=true;
			red = parseFloat(red,10);
			red = red+redplus;
			var a = document.getElementById("red").value=red;
			
			var greenplus = 5;
			var dis = document.getElementById("SiO2").checked=true;
			green = parseFloat(green,10);
			green = green+greenplus;
			var a = document.getElementById("green").value=green;
			 
			var blueplus = 5;
			var dis = document.getElementById("SiO2").checked=true;
			blue = parseFloat(blue,10);
			blue = blue+blueplus;
			var a = document.getElementById("blue").value=blue;
			
			
			updateHue();
			return context.render();
		};
		
		Al2O3 = function() {
			
			if(Al2O3_count < 1){record = record + "Al<sub>2</sub>O<sub>,"; var dd = document.getElementById("element").value = record;}
			Al2O3_count +=1;
			
			var redplus = 5;
			var dis = document.getElementById("Al2O3").checked=true;
			red = parseFloat(red,10);
			red = red+redplus;
			var a = document.getElementById("red").value=red;
			
			var greenplus = 5;
			var dis = document.getElementById("Al2O3").checked=true;
			green = parseFloat(green,10);
			green = green+greenplus;
			var a = document.getElementById("green").value=green;
			 
			var blueplus = 5;
			var dis = document.getElementById("Al2O3").checked=true;
			blue = parseFloat(blue,10);
			blue = blue+blueplus;
			var a = document.getElementById("blue").value=blue;
			
			updateHue();
			return context.render();
		};
			
		CaO = function() {
			
			if(CaO_count < 1){record = record + "CaO,"; var dd = document.getElementById("element").value = record;}
			CaO_count +=1;
			
			var redplus = 5;
			var dis = document.getElementById("CaO").checked=true;
			red = parseFloat(red,10);
			red = red+redplus;
			var a = document.getElementById("red").value=red;
		
			var greenplus = 5;
			var dis = document.getElementById("CaO").checked=true;
			green = parseFloat(green,10);
			green = green+greenplus;
			var a = document.getElementById("green").value=green;
			
			var blueplus = 5;
			var dis = document.getElementById("CaO").checked=true;
			blue = parseFloat(blue,10);
			blue = blue+blueplus;
			var a = document.getElementById("blue").value=blue;
			
			updateHue();
			return context.render();
		};

		MgO = function() {
			
			if(MgO_count < 1){record = record + "MgO,"; var dd = document.getElementById("element").value = record;}
			MgO_count +=1;
			
			var redplus = 5;
			var dis = document.getElementById("MgO").checked=true;
			red = parseFloat(red,10);
			red = red+redplus;
			var a = document.getElementById("red").value=red;
			 
			var greenplus =5;
			var dis = document.getElementById("MgO").checked=true;
			green = parseFloat(green,10);
			green = green+greenplus;
			
			var blueplus = 5;
			var dis = document.getElementById("MgO").checked=true;
			 
			 
			blue = parseFloat(blue,10);
			blue = blue+blueplus;
			var a = document.getElementById("blue").value=blue;
			
			updateHue();
			return context.render();
		};

		FeO = function() {
			
			if(FeO_count < 1){record = record + "FeO,"; 
			var dd = document.getElementById("element").value = record;}
			FeO_count +=1;
			
			var redplus = 3.66;
			var dis = document.getElementById("FeO").checked=true;
			red = parseFloat(red,10);
			red = red+redplus;
			var a = document.getElementById("red").value=red;
			
			var greenplus = 5.52;
			var dis = document.getElementById("FeO").checked=true;
			green = parseFloat(green,10);
			green = green+greenplus;
			var a = document.getElementById("green").value=green;
			
			var blueplus =6.04;
			var dis = document.getElementById("FeO").checked=true;
			blue = parseFloat(blue,10);
			blue = blue+blueplus;
			var a = document.getElementById("blue").value=blue;
			
			updateHue();
			return context.render();
		};

		Na2O = function() {
			
			if(Na2O_count < 1){record = record + "Na<sub>2</sub>O,"; var dd = document.getElementById("element").value = record;}
			Na2O_count +=1;
			
			
			var redplus =5;
			var dis = document.getElementById("Na2O").checked=true;
			red = parseFloat(red,10);
			red = red+redplus;
			var a = document.getElementById("red").value=red;
			
			var greenplus = 5;
			var dis = document.getElementById("Na2O").checked=true;
			green = parseFloat(green,10);
			green = green+greenplus;
			var a = document.getElementById("green").value=green;
			
			var blueplus = 5;
			var dis = document.getElementById("Na2O").checked=true;
			blue = parseFloat(blue,10);
			blue = blue+blueplus;
			var a = document.getElementById("blue").value=blue;
			
			updateHue();
			return context.render();
		};



		K2O = function() {
			
			if(K2O_count < 1){record = record + "K<sub>2</sub>O,"; var dd = document.getElementById("element").value = record;}
			K2O_count +=1;
			
			var redplus = 2.24;
			var dis = document.getElementById("K2O").checked=true;
			red = parseFloat(red,10);
			red = red+redplus;
			var a = document.getElementById("red").value=red;
			 
			var greenplus = 2.56;
			var dis = document.getElementById("K2O").checked=true;
			green = parseFloat(green,10);
			green = green+greenplus;
			var a = document.getElementById("green").value=green;
			
			var blueplus = 2.88;
			var dis = document.getElementById("K2O").checked=true;
			blue = parseFloat(blue,10);
			blue = blue+blueplus;
			var a = document.getElementById("blue").value=blue;
			
			updateHue();
			return context.render();
		};

		Fe2O3 = function() {
			
			
			if(Fe2O3_count < 1){record = record + "Fe<sub>2</sub>O<sub>3</sub>,"; var dd = document.getElementById("element").value = record;}
			Fe2O3_count +=1;
			
			
			var redplus = 3.3;
			var dis = document.getElementById("Fe2O3").checked=true;
			red = parseFloat(red,10);
			red = red+redplus;
			var a = document.getElementById("red").value=red;
			
			var greenplus = 0.84;
			var dis = document.getElementById("Fe2O3").checked=true;
			green = parseFloat(green,10);
			green = green+greenplus;
			var a = document.getElementById("green").value=green;
			
			var blueplus = 0.84;
			var dis = document.getElementById("Fe2O3").checked=true;
			blue = parseFloat(blue,10);
			blue = blue+blueplus;
			var a = document.getElementById("blue").value=blue;
			
			updateHue();
			return context.render();
		};

		TiO2 = function() {
			
			
			if(TiO2_count < 1){record = record + "TiO<sub>2</sub>,"; var dd = document.getElementById("element").value = record;}
			TiO2_count=+1;
			
			var redplus = 5;
			var dis = document.getElementById("TiO2").checked=true;
			red = parseFloat(red,10);
			red = red+redplus;
			
			var greenplus = 5;
			var dis = document.getElementById("TiO2").checked=true;
			green = parseFloat(green,10);
			green = green+greenplus;
			var a = document.getElementById("green").value=green;
			
			var blueplus = 5;
			var dis = document.getElementById("TiO2").checked=true;
			blue = parseFloat(blue,10);
			blue = blue+blueplus;
			var a = document.getElementById("blue").value=blue;
			
			updateHue();
			return context.render();
		};
		
		P2O5 = function() {
			
			if(P2O5_count < 1){record = record + "P<sub>2</sub>O<sub>5</sub>,"; var dd = document.getElementById("element").value = record;}
			P2O5_count +=1;
			
			var redplus = 5;
			var dis = document.getElementById("P2O5").checked=true;
			red = parseFloat(red,10);
			red = red+redplus;
			var a = document.getElementById("red").value=red;
			
			var greenplus = 5;
			var dis = document.getElementById("P2O5").checked=true;
			green = parseFloat(green,10);
			green = green+greenplus;
			var a = document.getElementById("green").value=green;
			
			var blueplus = 5;
			var dis = document.getElementById("P2O5").checked=true;
			blue = parseFloat(blue,10);
			blue = blue+blueplus;
			var a = document.getElementById("blue").value=blue;
			
			updateHue();
			return context.render();
		};
	
	
	
	
  save = function(){
	  var a =  document.getElementById("name").innerHTML;
	  window.location.assign("save.php?name="+ a +"&red="+red+"&blue="+blue+"&green="+green);
  };
  
  
  $(document).ready(function() {
    $('#shape-radios').buttonset().click(updateShape);
    $('#hue-slider').slider({
      slide: updatequality,
	  value: 10,
      min: 1,
      max: 20,
      step: 1
    });
    $('#shinyness-slider').slider().slider({
      slide: updateShinyness,
      value: 15,
      min: 1,
      max: 60,
      step: 1
    });
    $('#metallic-radios').buttonset().click(updateMetallic);
    $('#light-toggles').buttonset().click(updateLights);
    $('#lighting-model-radios').buttonset().click(updateLightingModel);
	$('#red_elements').buttonset().click(updatered);
	$('#red2_elements').buttonset().click(updatered2);
	$('#blue_elements').buttonset().click(updateblue);
	

	$('#watergas_box').buttonset().click(watergas);
	$('#nitrigen_box').buttonset().click(nitrogen);
	$('#oxygen_box').buttonset().click(oxygen);
	$('#argon_box').buttonset().click(argon);
	$('#carbondioxide_box').buttonset().click(carbondioxide);
	$('#neon_box').buttonset().click(neon);
	$('#helium_box').buttonset().click(helium);
	$('#methane_box').buttonset().click(methane);
	$('#krypton_box').buttonset().click(krypton);
	$('#hydrogen_box').buttonset().click(hydrogen);
	$('#nitrousoxide_box').buttonset().click(nitrousoxide);
	$('#carbonmonoxide_box').buttonset().click(carbonmonoxide);
	$('#xenon_box').buttonset().click(xenon);
	$('#ozone_box').buttonset().click(ozone);
	$('#nitrogendioxide_box').buttonset().click(nitrogendioxide);
	$('#indine_box').buttonset().click(indine);
	$('#ammonia_box').buttonset().click(ammonia);
	$('#sulfer_box').buttonset().click(sulfer);
	$('#save').buttonset().click(save);
	$('#save').buttonset().click(save);
	
	
 $('#metallic-radios').buttonset().click(updateMetallic);
 $('#light-toggles').buttonset().click(updateLights);
 $('#lighting-model-radios').buttonset().click(updateLightingModel);
 $('#red_elements').buttonset().click(updatered);
 $('#red2_elements').buttonset().click(updatered2);
 $('#blue_elements').buttonset().click(updateblue);
 $('#SiO2_box').buttonset().click(SiO2);
 $('#Al2O3_box').buttonset().click(Al2O3);
 $('#CaO_box').buttonset().click(CaO);
 $('#MgO_box').buttonset().click(MgO);
 $('#FeO_box').buttonset().click(FeO);
 $('#Na2O_box').buttonset().click(Na2O);
 $('#K2O_box').buttonset().click(K2O);
 $('#Fe2O3_box').buttonset().click(Fe2O3);
 $('#TiO2_box').buttonset().click(TiO2);
 $('#P2O5_box').buttonset().click(P2O5);
 $('#save').buttonset().click(save);
	
	
	
	
    return updateShape();
  });

}).call(this);

</script>
     
  