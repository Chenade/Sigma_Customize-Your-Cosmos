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
	
	<style>
	.bg{
		width:100vw; 
		height:100vh; 
		background-image:url(img/cosmos.jpg);
		background-size:100% 100%; 
		background-repeat: no-repeat; 
		margin:0;
	}
	.container{
		width:99vw;
		height:100vh;
		display:flex;
		flex-direction:row;
		justify-content:center;
		align-items:center;
		
	}
	.container2{
		display:flex;
		flex-direction:row;
		justify-content:center;
		margin:15px;
		
	}
	
	.container3{
		display:flex;
		flex-direction:row;
		justify-content:flex-start;
		margin:15px;
		align-items:center;
	}
	
	.planet{
		
		background-color:#001540;
		opacity:0.8;
		height:85vh;
		width:38vw;
		margin:50px;
		border-radius:25px;
		
		
	}
	.jovian_planet{
		
		background-color:#001540;
		opacity:0.8;
		height:82vh;
		width:80vw;
		margin:10px;
		display:none;
	
	}
	.terrestrial_planet{
		background-color:#001540;
		opacity:0.8;
		height:82vh;
		width:80vw;
		margin:10px;
		display:none;
	}
	
	.input{
		
		background-color:#001540;
		opacity:0.8;
		height:82vh;
		width:80vw;
		margin:10px;
		display:none;
	
	}
	
	#title{
		height:10vh;
		width:100vw;
	}
	p{
		color:white;
		
	}
	span{
		margin:20px;
		font-size:24px;
		color:white;
	}
	hr{
		color:white;
		width:70%;
	}
	article{
		color:white;
	}
	
	.btn{
		background-color:transparent;
		border:solid white 2px;
		height:70px;
		width:180px;
		color:white;
		margin:10px;
		font-size:24px;
	}
	
	.text{
		background-color:transparent;
		border:solid white 2px;
		width:250px;
		height:50px;
		font-size:30px;
		color:white;
	}
	td,tr{
		
		align:left;
		margin:25px;
	}
  
	</style>
  
	
</head>

<body style=" margin:0;" >

	<div class="bg"> </"div>
	
	
	
	<div class="container">
	
		<div align="center" id="terrestrial_planet1" class="planet" onclick="TP()" onmousemove="hover(this.id)" onmouseout="hover_out(this.id)">
			<p style="font-size:36px; line-height:30px;">類地行星</p>
			<p style="font-size:36px; line-height:30px;">terrestrial_planet</p>
			<hr>
			<div style="display:flex; flex-direction:center;flex-wrap: wrap; justify-content:center; align-items:center;">
				<div style="margin:20px;"><img src="img/Z6.png" style="width:300px; " ></div>
				<div style="margin:20px;"><img src="img/Z1.png" style="width:300px; " ></div>
				<div style="margin:20px;"><img src="img/p3.png" style="width:300px; " ></div>
				<div style="margin:20px;"><img src="img/p4.png" style="width:300px; " ></div>
			</div>
		</div>
		
		<div align="center" id="jovian_planet1" class="planet" onclick="JP()" onmousemove="hover(this.id)" onmouseout="hover_out(this.id)">
			<p style="font-size:36px; line-height:30px;">類木行星</p>
			<p style="font-size:36px; line-height:30px;">jovian_planet</p>
			<hr>
			<div style="display:flex; flex-direction:center;flex-wrap: wrap; justify-content:center; align-items:center;">
				<div style="margin:20px;"><img src="img/p5.png" style="width:300px; " ></div>
				<div style="margin:20px;"><img src="img/Z4.png" style="width:300px; " ></div>
				<div style="margin:20px;"><img src="img/Z5.png" style="width:300px; " ></div>
				<div style="margin:20px;"><img src="img/Z2.png" style="width:300px; " ></div>
			</div>
		</div>
		
		<div align="center" id="terrestrial_planet2" class="terrestrial_planet">
			<p style="font-size:40px; line-height:60px;">類地行星 (Terrestrial Planet)</p>
			<hr><br>
			
			<div class="container2">
				
				<div style="flex: 0 0 33.3333%;"> <img src="img/earth1.png" style="width:500px; " ></div>
				<div style="width:650px;"><p style="font-size:30px; line-height:60px;">The inner Solar System, the region of the Solar System inside 4 AU, 
				was too warm for volatile molecules to condense, so the planetesimals that formed there could only form from compounds with high melting 
				points, and these rocky bodies would become the terrestrial planets, also called rocky planets.</p></div>
				
			</div>
			
			<input type="button" class="btn" id="back" value="back" onclick="menu()" onmousemove="hover(this.id)" onmouseout="hover_out(this.id)">
			<input type="button" class="btn" id="contiune" onclick="terrestrial_input()" value="contiune" onmousemove="hover(this.id)" onmouseout="hover_out(this.id)">
			
		</div>
		
		<div align="center" id="jovian_planet2" class="jovian_planet">
			<p style="font-size:36px; line-height:60px;">類木行星 (Jovian Planet)</p>
			<hr><br>
			
			<div class="container2">
				
				<div style="flex: 0 0 33.3333%;"> <img src="img/Z4.png" style="width:500px; " ></div>
				<div style="width:750px;"><p style="font-size:30px; line-height:60px;">When the terrestrial planets were forming, they remained immersed in a
				disk of gas and dust. The gas was partially supported by pressure and so did not orbit the Sun as rapidly as the planets. The Jovian planets 
				formed further out, beyond the fost line, which is the point between the orbits of Mars and Jupiter where the material is cool enough for
				volatile icy compounds to remain solid.  Today, the Jovian planet comprise just under 99% of all the mass orbiting the Sun.</p></div>
				
			</div>
			
			<input type="button" class="btn" id="back2" value="back" onclick="menu()" onmousemove="hover(this.id)" onmouseout="hover_out(this.id)">
			<input type="button" class="btn" id="contiune2" onclick="jovian_input()" value="contiune" onmousemove="hover(this.id)" onmouseout="hover_out(this.id)">
			
		</div>
		
		
		
		
		
		
	<div>

</body>

</html>

<script>

	function TP(){
		
		var a = document.getElementById("terrestrial_planet1").style.display="none";
		var b = document.getElementById("jovian_planet1").style.display="none";
		var c = document.getElementById("terrestrial_planet2").style.display="inline";

	}
	
	function JP(){
		
		var a = document.getElementById("terrestrial_planet1").style.display="none";
		var b = document.getElementById("jovian_planet1").style.display="none";
		var c = document.getElementById("jovian_planet2").style.display="inline";

	}
	
	function menu(){
		
		var a = document.getElementById("terrestrial_planet1").style.display="inline";
		var b = document.getElementById("jovian_planet1").style.display="inline";
		var c = document.getElementById("terrestrial_planet2").style.display="none";
		var c = document.getElementById("jovian_planet2").style.display="none";

	}
	
	function hover(x){
		
		var id = x;
		var a = document.getElementById(x).style.transform = "scale(1.051)";
		
	}
	
	function hover_out(x){
		
		var id = x;
		var a = document.getElementById(x).style.transform = "scale(1)";
		
	}
	
	function jovian_input(){
		
		window.location.assign("create_WP.php");
	}
	
	function terrestrial_input(){
		
		window.location.assign("create_GP.php");
	}
	
</script>


<script src="./Materials gallery _ seen.js_files/seen.min.js"></script>
<script src="./Materials gallery _ seen.js_files/coffee-script.min.js"></script>
<script src="./Materials gallery _ seen.js_files/jquery.min.js"></script>
<script src="./Materials gallery _ seen.js_files/jquery-ui.min.js"></script>

<script language="javascript" id="code">

  

(function() {
  var context, dragger, group, height, resizew, scene, shape, shapeFactory, updateHue, updateLightingModel, updateLights, updateMetallic, updateShape, updateShinyness, width, r=5;
  var red,green=0,blue=0,updatered,updatered2,updateblue,save,updatequality;
  
  red =0;

  width = 350;

  height = 350;

  scene = new seen.Scene({
    model: seen.Models["default"](),
    viewport: seen.Viewports.center(width, height)
  });

  context = seen.Context('show', scene).render();

  group = scene.model.append().scale(100);

  shape = null;

  dragger = new seen.Drag(document.getElementById('show'), {
    inertia: true
  });

  dragger.on('drag.rotate', function(e) {
    var xform, _ref;
    xform = (_ref = seen.Quaternion).xyToTransform.apply(_ref, e.offsetRelative);
    group.transform(xform);
    return context.render();
  });

  shapeFactory = function(){
		
    return seen.Shapes.sphere(3).scale(1.5);
  };
  
  
  updateHue = function() {
    var hue, surf, _i, _len, _ref;
    hue = parseFloat($('#hue-slider').slider('value')) / 100.0;
    _ref = shape.surfaces;
	
	for (_i = 0, _len = _ref.length; _i < _len; _i++) {
      surf = _ref[_i];
      surf.fillMaterial.color = seen.Colors.rgb(244,255,117);
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

  save = function(){
	window.location.replace("save.php?red="+red+"&blue="+blue+"&green="+green);
  };
  
  updatequality=function(){
	var quality = parseFloat($('#hue-slider').slider('value')) /10;
	shape = seen.Shapes.sphere(3).scale(quality);
	
	var a = document.getElementById("radius");
	a.innerHTML=quality;
	
	shapeType = $('#shape-sphere').val();
    group.children = [shape = seen.Shapes.sphere(3).scale(quality)];
    updateHue();
	updateLights();
    updateShinyness();
    updateMetallic();
	
    return context.render();
  };
  
  $(document).ready(function() {
    $('#shape-radios').buttonset().click(updateShape);
    $('#hue-slider').slider({
      slide: updatequality,
	  value: 35,
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
	$('#save').buttonset().click(save);
	
	
	
    return updateShape();
  });

}).call(this);


(function() {
  var context, dragger, group, height, resizew, scene, shape, shapeFactory, updateHue, updateLightingModel, updateLights, updateMetallic, updateShape, updateShinyness, width, r=5;
  var red,green=0,blue=0,updatered,updatered2,updateblue,save,updatequality;
  
  red =0;

  width = 350;

  height = 350;

  scene = new seen.Scene({
    model: seen.Models["default"](),
    viewport: seen.Viewports.center(width, height)
  });

  context = seen.Context('show2', scene).render();

  group = scene.model.append().scale(100);

  shape = null;

  dragger = new seen.Drag(document.getElementById('show2'), {
    inertia: true
  });

  dragger.on('drag.rotate', function(e) {
    var xform, _ref;
    xform = (_ref = seen.Quaternion).xyToTransform.apply(_ref, e.offsetRelative);
    group.transform(xform);
    return context.render();
  });

  shapeFactory = function(){
		
    return seen.Shapes.sphere(3).scale(1.5);
  };
  
  
  updateHue = function() {
    var hue, surf, _i, _len, _ref;
    hue = parseFloat($('#hue-slider').slider('value')) / 100.0;
    _ref = shape.surfaces;
	
	for (_i = 0, _len = _ref.length; _i < _len; _i++) {
      surf = _ref[_i];
      surf.fillMaterial.color = seen.Colors.rgb(244,255,117);
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

  save = function(){
	window.location.replace("save.php?red="+red+"&blue="+blue+"&green="+green);
  };
  
  updatequality=function(){
	var quality = parseFloat($('#hue-slider').slider('value')) /10;
	shape = seen.Shapes.sphere(3).scale(quality);
	
	var a = document.getElementById("radius");
	a.innerHTML=quality;
	
	shapeType = $('#shape-sphere').val();
    group.children = [shape = seen.Shapes.sphere(3).scale(quality)];
    updateHue();
	updateLights();
    updateShinyness();
    updateMetallic();
	
    return context.render();
  };
  
  $(document).ready(function() {
    $('#shape-radios').buttonset().click(updateShape);
    $('#hue-slider').slider({
      slide: updatequality,
	  value: 35,
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
	$('#save').buttonset().click(save);
	
	
	
    return updateShape();
  });

}).call(this);

</script>
  
