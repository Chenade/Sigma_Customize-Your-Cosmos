
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
		background-image:url(img/cosmos.jpg);
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
  
  
    .control{
	  position:absolute;
	  top:90vh;
	  height:10vh;
	  width:100vw;
	  
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
	
	
		<div class="forward">
			
			<input type="image" class="start" id="start" src="img/play1.png" onclick="forward()" onmouseover="hhover()" onmouseout="nor()"/>
			
		</div>
		
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
		
		<div class="information" align="center">
			
			<p>information</p>
			
			<p><span>種類</span><span id="in_cat">star</span></p>
			
		
		
		</div>
		
		<div class="control">
		
			<div align="center" style="width:33vw; position:relative; float:left;"><input type="image" class="btn" src="img/E1.png" onclick="place()"></div>
			<div align="center" style="width:33vw; position:relative; float:left;"><input type="image" class="btn" src="img/E2.png" onclick="create()"></div>
			<div align="center" style="width:33vw; position:relative; float:left;"><input type="image" class="btn" src="img/E3.png" onclick="finish()"></div>
		
		</div>
		
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
	
	</div>
	
</body></html>	

<?php
	
	$con = mysqli_connect("localhost","root","","nasa") or die("connect failed");
	$db = mysqli_select_db($con,"planet");
	$sql = "SELECT * FROM `planet` WHERE `alive` = 'true'";
	$run = mysqli_query($con,$sql);
	
	echo '<script language="javascript">;';		
	echo 'var vv=0; var team = new Array();';
	echo '</script>';
	$abc="";$tiger_script="";
	while($row=mysqli_fetch_array($run)){
		
		echo '<div class="dd'.$row['id'].'" id="dd'.$row['id'].'"  style="position: absolute; width:150px; height:150px; left: 60vw; top: 40vh;">';
		echo '<canvas width="150" height="150" id="'.$row["id"].'" onclick="tiger'.$row['id'].'(this.id)" class="position:absolute;left:14vw; top:1vh;">';
		echo '</div>';
		
		$tiger_script= $tiger_script.'
			function tiger'.$row['id'].'(){
				
				var z = document.getElementById("in_cat").innerHTML="'.$row['category'].'";
				
			}
		
		';
		
		if ($row['id']!="1"){
		if($row['state']=="normal"){
			//正常軌跡
			$abc =  $abc.'
					var i = 0;
					
					 setInterval(function(){
						
						var w = document.documentElement.clientWidth ; 
						var h = document.documentElement.clientHeight;
						w = w/2+220;
						h = h/2-150;
						r=250;
						
						var a = i,b=w,c=h,d=r;
						
						setTimeout(update'.$row["id"].'(a,b,c,d),500);
						i+=1; 	
							
						}
						
					, 20);
				
			function update'.$row["id"].'(i,h,k,r){ 
				var j = i % 360;
				var x = h + r*Math.sin(j*3.14/180);
				var y = k + r*Math.cos(j*3.14/180);
				
				var aaa = document.getElementById("dd'.$row['id'].'").style.left=x;
				var bbb = document.getElementById("dd'.$row['id'].'").style.top=y;
				}
				
				
				vv+=1;
			';
		}else{
			//飛出去 setInterval(fly_out,1000);
			$abc =  $abc. '
				var xxx = document.getElementById("dd'.$row['id'].'").style.left="1420px";
				setInterval(fly_out,1);
				
				function fly_out(){	
					move(".dd'.$row['id'].'")
					.rotate(1080).translate(1300).rotate(0).scale(.5)
					.duration("5s")
					.then()
						.set("opacity", 0)
						.set("display","none")
					.pop()
					.end();
				}';
			$ssql="UPDATE `planet` SET `state`='out', `alive`='die' WHERE `id`='".$row["id"]."'";
			//echo $ssql;
			mysqli_query($con,$ssql);
		}
		}else{}
			
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
	
		//動畫
		echo '<script language="javascript">;';	
		echo $abc;
		echo '</script>';
		//button onclick
		echo '<script language="javascript">;';	
		echo $tiger_script;
		echo '</script>';


?>
		