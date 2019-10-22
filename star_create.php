
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
		width:70vw; 
		height:85vh; 
		background-image:url(img/cosmos.jpg);
		background-size:100% 100%; 
		background-repeat: no-repeat; 
		margin:0;
		opacity:0.78;
	}
	.canvas{
		
		position:absolute;
		left:15vw;
		top:1.5vh;
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
		
		background-size:100% 100%;
		height:85vh;
		width:31.25vw;
		position:absolute;
		left:0vw;
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
		height:16.75vh;
		background-image:url(img/R1.png);
		background-size:100% 100%;
		position:absolute;
		left:0vw;
		top:83.25vh;
	}
	
	.infor{
		background-image:url(img/S1.png);
		background-size:100% 100%;
		height:85vh;
		width:31.25vw;
		position:absolute;
		left:68.75vw;
		top:0vh;
		display:flex;
		align-items:flex-begin;
		justify-content:center;
		flex-direction:column;
	}
	.start{
		width:30vw;
		height:15vh;
		position:absolute;
		left:70vw;
		top:85vh;
	}
	
	.light{
		
		width:180px;
		height:160px;
		z-index:10;
		position:absolute;
		left:31vw;
		top:0vh;
		
	}
	
	.msgbox{
		
		background-image:url(img/S1.png);
		background-size:100% 100%;
		height:85vh;
		width:31.25vw;
		position:absolute;
		left:68.75vw;
		top:0vh;
		display:flex;
		align-items:flex-begin;
		justify-content:center;
		flex-direction:column;
		z-index:500;
		display:none;
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
  hr{
	  
	  width:20vw;
  }
</style>


</head>
<body style="margin:0;">
 
    <div class="bg"></div>
			
		<canvas width="900" height="900" id="seen-canvas" class="canvas"></canvas>
		
		<div class="customize2"></div>
		<div class="customize">
		
			<p style="color:white; font-size:45px; ">decide the quality of your star</p>
			
			<div id="hue-slider" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" style="left:700px; top:-75px;" aria-disabled="false">
				<a class="ui-slider-handle ui-state-default ui-corner-all" href="http://seenjs.io/demo-material-gallery.html#" style="left: 23.7288%; transform: scale(7); border:none; background-size:100% 100%; background-color:transparent; background-image:url(img/LOGO2.png);"></a>
			</div>

		</div>
		
		
		
		<div class="light" id="bulb_box"><input type="image" id="bulb" class="light" src="img/1-2.png"  onmouseover="light_show()" onmouseout="light_none()"/></div>
		
		<div align="center" id="light" class="msgbox">
			<input type="image" src="img/k1.png" style="width:31.25vw; height:85vh;">
		
		</div>
		
		</div>
		
		<form>
		<div align="center" class="infor">
			
			<p id="name" style="color:white; font-size:30px;">Name：<span><input type="text" id="namee" class="text" placeholder="Please Enter" name="name" autocomplete="off" Required></span></p>
			<hr>
			<p style="color:red; font-size:40px;"><strong>Each Parameter</strong></p>
			<p style="color:white; font-size:30px;">Tempature(Kelvin): <span id="tempature" style="color:white; font-size:30px;">10000</span> </p>
			<p style="color:white; font-size:30px;">Luminosity: <span id="luminosity" style="color:white; font-size:30px;">1000000</span>  </p>
			<p style="color:white; font-size:30px;">quality：<span id="radius" style="color:white; font-size:30px;">3</span> *M</p>
			<p style="color:white; font-size:30px;">Lifetime(year)：<span id="lifetime" style="color:white; font-size:30px;">3010000000</span>	</p>	
			
			
			<p style="color:white; font-size:30px; display:none;"><span id="hue" style="color:white; font-size:30px;">30</span></p>
			<p style="color:white; font-size:30px; display:none;"><span id="l" style="color:white; font-size:30px;">30</span></p>
		</div>
		</form>
		<div class="forward">
			
			
			<input type="button" class="start" id="start" style="background-image:url(img/confirm1.png); background-color:transparent; background-size:100% 100%; " onclick="forward2()" 	/>
			
		</div>
		
	</div>

		<script language="javascript">
		
		function forward2(){
			
			var a = document.getElementById("namee").value;
			var b = document.getElementById("radius").innerHTML;
			var c = document.getElementById("hue").innerHTML;
			var d = document.getElementById("l").innerHTML;
			var e = 0.5;
			var f = document.getElementById("luminosity").innerHTML;
			var g = document.getElementById("tempature").innerHTML;
			var h = document.getElementById("lifetime").innerHTML;
			
			var aaa = hsltorgb(c,d,e);
			
			function hsltorgb(h,s,l){
				var h=h/360;
				var s=s/100;
				var l=l/100;
				var rgb=[];

				if(s==0){
					rgb=[Math.round(l*255),Math.round(l*255),Math.round(l*255)];
				}else{
					var q=l>=0.5?(l+s-l*s):(l*(1+s));
					var p=2*l-q;
					var tr=rgb[0]=h+1/3;
					var tg=rgb[1]=h;
					var tb=rgb[2]=h-1/3;
					for(var i=0; i<rgb.length;i++){
						var tc=rgb[i];
						console.log(tc);
						if(tc<0){
							tc=tc+1;
						}else if(tc>1){
							tc=tc-1;
						}
						switch(true){
							case (tc<(1/6)):
								tc=p+(q-p)*6*tc;
								break;
							case ((1/6)<=tc && tc<0.5):
								tc=q;
								break;
							case (0.5<=tc && tc<(2/3)):
								tc=p+(q-p)*(4-6*tc);
								break;
							default:
								tc=p;
								break;
						}
						rgb[i]=Math.round(tc*255);
					}
				}
				
				return rgb;
			}
			
			
			alert(aaa);
			
			window.location.assign("star_save.php?name=" + a + "&radius=18" + "&R=204" + "&G=55" + "&B=0.5"+ "&tempature="+ g +  "&luminosity=" + f + "&lifetime=" +h);
		}
		
		
		function big(){
			var a = document.getElementById("bulb_box").style="transform:scale(2);";
			
		}
		
		function light_show(){
			var a = document.getElementById("light").style="display:inline;";
		}
		
		function light_none(){
			var a = document.getElementById("light").style="display:none;";
		}
		
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
		
    return seen.Shapes.sphere(3).scale(3);
  };
  
  
  updateHue = function() {
    var hue, surf, _i, _len, _ref,l=0.5;
    hue = parseFloat($('#hue-slider').slider('value')) / 100.0;
    _ref = shape.surfaces;
	hue = 1-hue;
	
	if (hue>0.6){hue = 0.6;}
	if(hue < 0.5 && hue > 0.2){l=1;}
	
	var b = document.getElementById("hue");
	b.innerHTML=hue;
	var bb = document.getElementById("l");
	bb.innerHTML=l;
	
	for (_i = 0, _len = _ref.length; _i < _len; _i++) {
      surf = _ref[_i];
      surf.fillMaterial.color = seen.Colors.hsl(hue,0.5,l);
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
	var quality = parseFloat($('#hue-slider').slider('value')) /25;
	shape = seen.Shapes.sphere(3).scale(quality);
	quality=4-quality+0.5;
	if(quality>4){quality=4;}
	var a = document.getElementById("radius");
	a.innerHTML=quality;
	
	var y = Math.pow(10,9)*quality+ Math.pow(10,7);
	//alert(y);
	var aa = document.getElementById("lifetime");
	aa.innerHTML=y;
	
	var t = quality ;
	t = t*6750;
	var aaa = document.getElementById("tempature");
	aaa.innerHTML=t;
	
	var L = quality ;
	L = -250000*L+Math.pow(10,6);
	var aaaa = document.getElementById("luminosity");
	aaaa.innerHTML=L;
	
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
      max: 101,
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
  

  
    
  

</body></html>