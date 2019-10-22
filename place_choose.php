
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
		height:100vh; 
		background-image:url(img/111.jpg);
		background-size:100% 100%; 
		background-repeat: no-repeat; 
		margin:0;
	}
	
	.HR_chart{
		position:absolute;
		left:68vw;
		top:25vh;
	}
	.customize{
		position:absolute;
		left:62vw;
		top:0vh;
	}
	.infor{
		position:absolute;
		left:1vw;
		top:1vh;
	}
	
	.information{
		
		position:fixed;
		left:0px;
		top:0px;
		height:90vh;
		width:28vw;
		background-image:url(img/S1.png);
		background-size:100% 105%;
		z-index:500;
		display:flex;
		flex-direction:column;
		justify-content:center;
		align-items:center;
		
	}
	
	.start{
		width : 200px;
		height : 200px;
		position:absolute;
		left:6vw;
		top:70vh;
	}
	
	.parameters-container {
		margin:0;
	  }

	.ui-widget {
		font-size: 0.8em;
	  }

	h4 {
		margin-bottom : 4px;
	  }

	h5 {
		margin-top    : 4px;
		margin-bottom : 4px;
	  }
	  p{
		  color:white;
		  font-size:30px;
		  
	  }
  
  
    .control{
	  position:absolute;
	  top:90vh;
	  height:10vh;
	  width:100vw;
	  z-index:500;
	  
	}
  
	.btn{
		height:10vh;
		width:34vw;
	}
 
</style>


</head>

<body style="margin:0;">
	<script type="text/javascript" src="js/move.js"></script>
    <div class="bg">
	
	
		
		
		<script>
		
		function forward(){
			window.location.assign("main.php");
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
		
		
		<input type="radio" id="shape-sphere" name="shape-radio" value="sphere" checked="checked" class="ui-helper-hidden-accessible">

		<div id="light-toggles" class="ui-buttonset">
			<input type="checkbox" id="light-key" name="lights-checkbox" checked="checked" class="ui-helper-hidden-accessible">
		</div>

		<div id="lighting-model-radios" class="ui-buttonset">
			<input type="radio" id="model-phong" name="model-radio" value="phong" checked="checked" class="ui-helper-hidden-accessible">
		</div>
		
		
		
	</div>
	
</body></html>	

<?php
	
	$con = mysqli_connect("localhost","root","","nasa") or die("connect failed");
	$db = mysqli_select_db($con,"planet");
	$sql = "SELECT * FROM `planet` WHERE `place` = 0";
	$run = mysqli_query($con,$sql);
	$x = 150;
	
	while($row=mysqli_fetch_array($run)){
		
		$x= + $x+250;
		
		echo '<script>';
		echo 'function tiger'.$row["id"].'(id){
			
				window.location.assign("place.php?id='.$row["id"].'");
			
			}		
		';	
		echo '</script>';
		
		echo '<div class="dd'.$row['id'].'" id="dd'.$row['id'].'"  style="position: absolute; width:150px; height:150px; left:'.$x.'px; top: 40vh;">';
		echo '<canvas width="150" height="150" id="'.$row["id"].'" onclick="tiger'.$row['id'].'(this.id)" class="position:absolute; left:'.$x.'px; top:1vh;">';
		echo '</div>';
		
		
		
			
		//echo $abc;
		echo '<script language="javascript">;';
			
		
		
		//畫圓
		echo '(function() {
		  var context, dragger, group, height, resizew, scene, shape, shapeFactory, updateHue, updateLightingModel, updateLights, updateMetallic, updateShape, updateShinyness, width, r=5;
		  var red,green=54,blue=134,updatered,updatered2,updateblue,save,updatequality;
		  
		  red =0;

		  width = 150;

		  height = 150;

		  scene = new seen.Scene({
			model: seen.Models["default"](),
			viewport: seen.Viewports.center(width, height)
		  });

		  context = seen.Context("'.$row["id"].'", scene).render();

		  group = scene.model.append().scale(100);

		  shape = null;

		  dragger = new seen.Drag(document.getElementById("'.$row["id"].'"), {
			inertia: true
		  });

		  dragger.on("drag.rotate", function(e) {
			var xform, _ref;
			xform = (_ref = seen.Quaternion).xyToTransform.apply(_ref, e.offsetRelative);
			group.transform(xform);
			return context.render();
		  });

		  shapeFactory = function(){
			return seen.Shapes.sphere(3).scale(0.5);
		  };
		  
		  
		  updateHue = function() {
			var hue, surf, _i, _len, _ref;
			hue = parseFloat($("#hue-slider").slider("value")) / 100.0;
			_ref = shape.surfaces;
			
			for (_i = 0, _len = _ref.length; _i < _len; _i++) {
			  surf = _ref[_i];
			  surf.fillMaterial.color = seen.Colors.rgb('.$row["R"].','.$row["G"].','.$row["B"].');
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
			metallic = $("input[name=metallic-radio]:checked").val() === "yes";
			_ref = shape.surfaces;
			for (_i = 0, _len = _ref.length; _i < _len; _i++) {
			  surf = _ref[_i];
			  surf.fillMaterial.metallic = metallic;
			  surf.dirty = true;
			}
			return context.render();
		  };

		  updateShape = function(r) {
			
			shapeType = $("#shape-sphere").val();
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
			shaderType = $("#model-phong").val();
			scene.shader = seen.Shaders[shaderType]();
			return context.render();
		  };

		  
		  $(document).ready(function() {
			return updateShape();
		  });

		}).call(this);';
		
		echo '</script>';
		echo '</div>';
	}
		
?>
		