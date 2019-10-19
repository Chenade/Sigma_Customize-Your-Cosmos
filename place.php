
<!-- saved from url=(0043)http://seenjs.io/demo-material-gallery.html -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><style id="stndz-style"></style>
  <title>Materials gallery | seen.js</title>
  
  <link href="./Materials gallery _ seen.js_files/css" rel="stylesheet" type="text/css">
  
  <link href="./Materials gallery _ seen.js_files/theme.css" rel="stylesheet" type="text/css">
  
  
  <script src="./Materials gallery _ seen.js_files/seen.min.js"></script>
  
  <script src="./Materials gallery _ seen.js_files/coffee-script.min.js"></script>
  
  

<script src="./Materials gallery _ seen.js_files/jquery.min.js"></script>
<script src="./Materials gallery _ seen.js_files/jquery-ui.min.js"></script>
<link href="./Materials gallery _ seen.js_files/jquery-ui.css" rel="stylesheet" type="text/css">

<style>
	.bg{
		width:100vw; 
		height:85vh; 
		background-image:url(img/cosmos.jpg);
		background-size:100% 100%; 
		background-repeat: no-repeat; 
		margin:0;
		opacity:0.78;
	}
	.canvas2{
		
		position:absolute;
		left:1450px;
		top:30vh;
	}
	
	.star{
		position:absolute;
		left:-500px;
		top :20px;
		
	}
	
	
	.text{
		background-color:transparent;
		border:solid white 2px;
		width:15vw;;
		height:50px;
		font-size:30px;
		color:white;
	}
		
	.HR_chart{
		background-image:url(img/QQ.jpg);
		height:85vh;
		width:30vw;
		position:absolute;
		left:70vw;
		top:0vh;
	}
	.customize{
		width:35vw;
		height:15vh;
		
		position:absolute;
		left:3vw;
		top:85vh;
	}
	
	.customize2{
		width:70vw;
		height:15vh;
		background-image:url(img/QQ.jpg);
		position:absolute;
		left:0vw;
		top:85vh;
	}
	
	.infor{
		position:absolute;
		left:3vw;
		top:3vh;
	}
	.start{
		width:30vw;
		height:15vh;
		position:absolute;
		left:70vw;
		top:85vh;
	}
	
	.light{
		
		width:120px;
		height:120px;
		z-index:10;
		position:absolute;
		left:43vw;
		top:0vw;
		
	}
	
	.msgbox{
		
		width:500px;
		height:500px;
		background-image:url(img/M1.png);
		background-size:100% 100%;
		position:absolute;
		left:50vw;
		top:10vh;
		display:none;
		
	}
	
  .parameters-container {
    margin:0;
  }

  .ui-widget {
    font-size: 0.8em;
  }
	
	a :click{border:none;}
  h4 {
    margin-bottom : 4px;
  }

  h5 {
    margin-top    : 4px;
    margin-bottom : 4px;
  }
  .target{
	  
	  
  }
  
</style>


</head>
<body style="margin:0;">
 
    <div class="bg"></div>
			
			
			<div id="target"><canvas width="200" height="200" id="seen-canvas" class="canvas2"></canvas></div>
			<div id="target2"><canvas width="900" height="900" id="star" class="star"></canvas></div>
				
			<div><p style="color:white; font-size:48px; margin:50px; cellpadding:15px; position:absolute; left:550px; top:630px;">DISTANCES：
				<span id="dis">3<span> <span>AU</span>
			</p>
			
			</div>
			
			<div>
				<img src="img/T1.png" style="width:69vw;position:absolute; left:550px; top:680px;">
			</div>
			
			<div align="center" style="width:1200px; position:absolute; left:600px; top:800px;">	
				<div id="hue-slider" style="width:1500px;" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" aria-disabled="false">
					<a class="ui-slider-handle ui-state-default ui-corner-all" href="http://seenjs.io/demo-material-gallery.html#" style="left: 0%; transform:scale(10); border:none; background-size:100% 100%; background-color:transparent; background-image:url(img/H3.png);"></a>
				</div>
			</div>
			
			
			<div align="center" style="width:70vw; height:15vh; display:flex; flex-direction:row; align-items:center; background-image:url(img/R1.png); background-size:100% 100%;" >	
				<div><p style="color:white; font-size:48px; margin:50px; cellpadding:15px;"><span>VELOCITY</span><span id="vel" >speed=0</span></p></div>
				<div id="shinyness-slider" style="width:50vw;" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" aria-disabled="false">
				<a class="ui-slider-handle ui-state-default ui-corner-all" href="http://seenjs.io/demo-material-gallery.html#" style="left: 23.7288%; transform: scale(5) rotate(180deg); border:none; background-size:100% 100%; background-color:transparent; background-image:url(img/S2.png);"></a></div>
			<div>
			
		
			
		<div class="forward">
			
			<input type="image" class="start" id="start" src="img/confirm1.png" onclick="forward()" onmouseover="hhover()" onmouseout="nor()"/>
			
			<script>
				function forward(){
					var a = document.getElementById('vel').innerHTML;
					window.location.assign("place_save.php?state=" + a;);
				}
			</script>
		</div>
		
	</div>
	
    
	


<script language="javascript" id="code">
(function() {
  var context, dragger, group, height, resizew, scene, shape, shapeFactory, updateHue, updateLightingModel, updateLights, updateMetallic, updateShape, updateShinyness, width, r=5;
  var red,green=54,blue=134,updatered,updatered2,updateblue,save,updatequality;
  
  red =0;

  width = 200;

  height = 200;

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
		
    return seen.Shapes.sphere(3).scale(0.8);
  };
  
  
  updateHue = function() {
    
	var hue, surf, _i, _len, _ref,l=0.5;
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
	// alert("45");
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
  
  update_position = function() {
    //alert("12");
    var move = parseFloat($('#hue-slider').slider('value'))+450 ;
	var T_L = document.getElementById("seen-canvas").style.left = move;
	
	//alert("move");
	var move = parseFloat($('#hue-slider').slider('value'))+450 ;
	if(move<715){var au = 2.5 * move/265-992.5/265;}
	else{var au = 27* move/1335-15300/1335;}
	var aa = document.getElementById("dis").innerHTML=Math.round(au*100)/100+"AU";
	
	
	//alert(T_L);
	return context.render();	
  };
  
  update_speed = function() {
    //alert("45");
	var state="normal";
	var vell = parseFloat($('#shinyness-slider').slider('value')) ;
	//alert(vell);
	if(vell > 30){
		if(confirm("速度過快，有極大的可能性將脫離軌道，請問是否重新設定")){
			window.location.replace("place.php");
		}else{
			state="fly-out";
		}
	
	}
	var c = document.getElementById("vel").innerHTML="speed=" + vell + "&state=" + state;
	
	
    return context.render();
  };

  
  $(document).ready(function() {
    $('#shape-radios').buttonset().click(updateShape);
    $('#hue-slider').slider({
      slide: update_position,
	  value: 1000,
      min: 1,
      max: 1600,
      step: 1
    });
    $('#shinyness-slider').slider().slider({
      slide: update_speed,
      value: 25,
      min: 1,
      max: 40,
      step: 1
    });
    
	$('#save').buttonset().click(save);
	
	
	
    return updateShape();
  });

}).call(this);




</script>
  


<script language="javascript" id="code">
(function() {
  var context, dragger, group, height, resizew, scene, shape, shapeFactory, updateHue, updateLightingModel, updateLights, updateMetallic, updateShape, updateShinyness, width, r=5;
  var red,green=54,blue=134,updatered,updatered2,updateblue,save,updatequality;
  
  red =0;

  width = 900;

  height = 900;

  scene = new seen.Scene({
    model: seen.Models["default"](),
    viewport: seen.Viewports.center(width, height)
  });

  context = seen.Context('star', scene).render();

  group = scene.model.append().scale(100);

  shape = null;

  dragger = new seen.Drag(document.getElementById('star'), {
    inertia: true
  });

  dragger.on('drag.rotate', function(e) {
    var xform, _ref;
    xform = (_ref = seen.Quaternion).xyToTransform.apply(_ref, e.offsetRelative);
    group.transform(xform);
    return context.render();
  });

  shapeFactory = function(){
		
    return seen.Shapes.sphere(3).scale(4);
  };
  
  
  updateHue = function() {
    
	var hue, surf, _i, _len, _ref,l=0.5;
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
	// alert("45");
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
  

  
  $(document).ready(function() {
   
    
	$('#save').buttonset().click(save);
	
	
	
    return updateShape();
  });

}).call(this);




</script>
  
  

    
  

</body></html>