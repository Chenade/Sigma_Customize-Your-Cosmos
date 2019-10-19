
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
			font-size:35px;
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
    
	
	
	<div class="page_container">
		<div class="left">
			<div class="parameters-container">
			 
				<div style="margin:25px;">
				<form action="save.php" method="post">
				<p style="margin:20px;">
					<span style="font-size:35px;">行星名稱：</span>
					<span><input type="text" name="name" class="text" placeholder="Please enter"  autocomplete="off"  required></span>
				</p>
				
				
				<hr>
				
				
				
				  
				
				<label class="container" ><span>組成元素</span>
					<input type="checkbox" checked="checked" disabled>
					<span class="checkmark"></span>
				</label>


				<div align="center">
										
										
					<div id="SiO2_box" class="ui-buttonset" style="position:relative; float:left;">
						  <input type="checkbox" id="SiO2" name="red-checkbox" class="ui-helper-hidden-accessible" value="5">
						   <label for="SiO2" class="ui-state-active ui-button ui-widget ui-state-default ui-button-text-only ui-corner-left" role="button" aria-disabled="false" style="background-color:transparent; margin:25px;">
							<span class="ui-button-text">二氧化矽(透明)</span>
						   </label>
						   </div>
					<div id="Al2O3_box" class="ui-buttonset" style="position:relative; float:left;">
						  <input type="checkbox" id="Al2O3" name="red-checkbox" class="ui-helper-hidden-accessible" value="5">
						   <label for="Al2O3" class="ui-state-active ui-button ui-widget ui-state-default ui-button-text-only ui-corner-left" role="button" aria-disabled="false" style="background-color:transparent;margin:25px;"> 
							<span class="ui-button-text">氧化鋁(白色)</span>
						   </label>
						   </div>
					<div id="CaO_box" class="ui-buttonset" style="position:relative; float:left;">
						  <input type="checkbox" id="CaO" name="red-checkbox" class="ui-helper-hidden-accessible" value="5">
						   <label for="CaO" class="ui-state-active ui-button ui-widget ui-state-default ui-button-text-only ui-corner-left" role="button" aria-disabled="false" style="background-color:transparent; margin:25px;">
							<span class="ui-button-text">氧化鈣(白色)</span>
						   </label>
						   </div>
					<div id="MgO_box" class="ui-buttonset" style="position:relative; float:left;">
						  <input type="checkbox" id="MgO" name="red-checkbox" class="ui-helper-hidden-accessible" value="5">
						   <label for="MgO" class="ui-state-active ui-button ui-widget ui-state-default ui-button-text-only ui-corner-left" role="button" aria-disabled="false" style="background-color:transparent; margin:25px;">
							<span class="ui-button-text">氧化鎂(白色)</span>
						   </label>
						   </div>
					<div id="FeO_box" class="ui-buttonset" style="position:relative; float:left;">
						  <input type="checkbox" id="FeO" name="red-checkbox" class="ui-helper-hidden-accessible" value="5">
						   <label for="FeO" class="ui-state-active ui-button ui-widget ui-state-default ui-button-text-only ui-corner-left" role="button" aria-disabled="false" style="background-color:transparent; margin:25px;">
							<span class="ui-button-text">氧化亞鐵(藍灰色)</span>
						   </label>
						   </div>
					<div id="Na2O_box" class="ui-buttonset" style="position:relative; float:left;">
						  <input type="checkbox" id="Na2O" name="red-checkbox" class="ui-helper-hidden-accessible" value="5">
						   <label for="Na2O" class="ui-state-active ui-button ui-widget ui-state-default ui-button-text-only ui-corner-left" role="button" aria-disabled="false" style="background-color:transparent; margin:25px;">
							<span class="ui-button-text">氧化鈉(白色)</span>
						   </label>
						   </div>
					<div id="K2O_box" class="ui-buttonset" style="position:relative; float:left;">
						  <input type="checkbox" id="K2O" name="red-checkbox" class="ui-helper-hidden-accessible" value="5">
						   <label for="K2O" class="ui-state-active ui-button ui-widget ui-state-default ui-button-text-only ui-corner-left" role="button" aria-disabled="false" style="background-color:transparent;margin:25px;">
							<span class="ui-button-text">氧化鉀(灰色)</span>
						   </label>
						   </div>
					<div id="Fe2O3_box" class="ui-buttonset" style="position:relative; float:left;">
						  <input type="checkbox" id="Fe2O3" name="red-checkbox" class="ui-helper-hidden-accessible" value="5">
						   <label for="Fe2O3" class="ui-state-active ui-button ui-widget ui-state-default ui-button-text-only ui-corner-left" role="button" aria-disabled="false" style="background-color:transparent;margin:25px;">
							<span class="ui-button-text">氧化鐵(紅棕色)</span>
						   </label>
						   </div>
					<div id="TiO2_box" class="ui-buttonset" style="position:relative; float:left;">
						  <input type="checkbox" id="TiO2" name="red-checkbox" class="ui-helper-hidden-accessible" value="5">
						   <label for="TiO2" class="ui-state-active ui-button ui-widget ui-state-default ui-button-text-only ui-corner-left" role="button" aria-disabled="false" style="background-color:transparent;margin:25px;">
							<span class="ui-button-text">二氧化鈦(白色)</span>
						   </label>
						   </div>
					<div id="P2O5_box" class="ui-buttonset" style="position:relative; float:left;">
						  <input type="checkbox" id="P2O5" name="red-checkbox" class="ui-helper-hidden-accessible" value="5">
						   <label for="P2O5" class="ui-state-active ui-button ui-widget ui-state-default ui-button-text-only ui-corner-left" role="button" aria-disabled="false" style="background-color:transparent;margin:25px;">
							<span class="ui-button-text">五氧化二磷(白色)</span>
						   </label>
					</div>
				
				</div>7
				
				
				  
				 
				  

				
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
			
			<div align="center" style="width:69vw; display:flex; flex-direction:row; justify-content:center;">
				<div align="center" style="width:10vw;">
						<p><span style="color:white; font-size:35px;">行星質量</span></p>
				</div>
				<div align="center" class="slider">
					<div id="hue-slider" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" aria-disabled="false" style="width:50vw;">
						<a class="ui-slider-handle ui-state-default ui-corner-all" href="http://seenjs.io/demo-material-gallery.html#" style="left: 50%;"></a>
					</div>
				</div>
			</div>
		</div>
		
		<input type="hidden" id="category" name="category" value="terrestrial_planet">
		<input type="hidden" id="red" name="R" value="0">
		<input type="hidden" id="green"  name="G" value="0">
		<input type="hidden" id="blue"  name="B" value="0">
		<input type="hidden" id="radius"  name="radius" value="20">
		
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
	red = red+redplus;
	var a = document.getElementById("red").value=red;
	updateHue();
	return context.render();
	
  };
  
   updatered2 = function() {
  	var plus = parseFloat(document.getElementById("G").value);
	var dis = document.getElementById("G").checked=true;
	green = parseFloat(green,10);
	green = green+plus;
	var b = document.getElementById("green").value=green;
	updateHue();
	return context.render();
  };
  
  updateblue = function() { 
  	var plus = parseFloat(document.getElementById("B").value);
	var dis = document.getElementById("B").checked=true;
	blue = parseFloat(blue,10);
	blue = blue+plus;
	var c = document.getElementById("blue").value=blue;
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
		SiO2 = function() {
			   
			 updateHue();
			 return context.render();
			 
		};
		
		Al2O3 = function() {
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
	  value: 20,
      min: 1,
      max: 41,
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
     
  