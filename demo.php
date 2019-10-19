<!DOCTYPE html>
<html>
  <head>
    <title>Move.js Demo</title>
    <link rel="stylesheet" type="text/css" href="styles.css"> 
	<style>
	
	.box {
	  margin-left: 10px;
	  width: 100px;
	  height: 100px;
	  background: #7C9DD4;
	  box-shadow: 5px 5px 0px #D1D1D1;
	}
	#playButton {
	  display: block;
	  font-size: 20px;
	  margin: 20px 10px;
	  font-weight: bold;
	  color: #222;
	  text-decoration: none;
	}
	
	</style>
  </head>
  <body>
    <a href="#" id="playButton">Play</a>
    <div class="box"></div>
    <script type="text/javascript" src="js/move.js"></script>
    <script type="text/javascript">
      document.getElementById('playButton').onclick = function(e){
		  alert("45");
        move('.box')
          .to(500, 200).rotate(180).scale(.5)
		  .set('background-color', '#FF0551')
		  .set('border-color', 'black')
		  .duration('3s')
		  .skew(50, -10)
		  .then()
		  .set('opacity', 0)
		  .duration('0.3s')
		  .scale(0.1)
		  .pop()
		  .end();
      };
    </script>
  </body>
</html>