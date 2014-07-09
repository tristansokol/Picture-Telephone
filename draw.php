<?php require("header.php") ?>
<script type="text/javascript" charset="utf-8"> 
	window.addEventListener('load',function(){
		// get the canvas element and its context
		var canvas = document.getElementById('sketchpad');
		var context = canvas.getContext('2d');
		context.fillStyle = $('#color').val(); // red
		context.strokeStyle = $('#color').val(); // red
		context.lineWidth = 4;
		// create a drawer which tracks touch movements
		var drawer = {
			isDrawing: false,
			touchstart: function(coors){
				context.beginPath();
				context.moveTo(coors.x, coors.y);
				this.isDrawing = true;
			},
			touchmove: function(coors){
				if (this.isDrawing) {
					context.lineTo(coors.x, coors.y);
					context.stroke();
				}
			},
			touchend: function(coors){
				if (this.isDrawing) {
					this.touchmove(coors);
					this.isDrawing = false;
				}
			},
			mousedown: function(coors){
				context.beginPath();
				context.moveTo(coors.x, coors.y);
				this.isDrawing = true;
			},
			mousemove: function(coors){
				if (this.isDrawing) {
					context.lineTo(coors.x, coors.y);
					context.stroke();
				}
			},
			mouseup: function(coors){
				if (this.isDrawing) {
					this.touchmove(coors);
					this.isDrawing = false;
				}
			}
		};
		// create a function to pass touch events and coordinates to drawer
		function draw(event){
			// get the touch coordinates
			if(event.targetTouches !== undefined){
				var coors = {
					x: event.targetTouches[0].pageX,
					y: event.targetTouches[0].pageY-50//offset tweaked for calibration
				};
			}else{
				var coors = {
					x: event.clientX-18,
					y: event.clientY-55
				}
			}
			// pass the coordinates to the appropriate handler
			drawer[event.type](coors);
		}
		
		// attach the touchstart, touchmove, touchend event listeners.
		canvas.addEventListener('touchstart',draw, false);
		canvas.addEventListener('touchmove',draw, false);
		canvas.addEventListener('touchend',draw, false);
		
		// //Try addding support for mice
		canvas.addEventListener('mousedown',draw, false);
		canvas.addEventListener('mouseup',draw, false);
		canvas.addEventListener('mousemove',draw, false);

		// prevent elastic scrolling
		document.body.addEventListener('touchmove',function(event){
			event.preventDefault();
		},false);	// end body.onTouchMove
		
	},false);	// end window.onLoad





$( window ).width();
$( document ).ready(function() {
	var canvas = document.getElementsByTagName('canvas')[0];
	canvas.width  = $( document ).width()*.95;
	canvas.height = $( document ).height()*.6;

	$( "#save" ).click(function() {
		var data = document.getElementById("sketchpad").toDataURL();
		$.post("process.php", {
			imageData : data,
			gameName : '<?php echo $_GET['name'];?>',
			num : <?php echo $_GET['num'];?>,
		}, function(data) {
			window.location = data;
		});
	});
	$("#color").change(function(){
		var canvas = document.getElementById('sketchpad');
		var context = canvas.getContext('2d');
		context.fillStyle = $('#color').val(); // red
		context.strokeStyle = $('#color').val(); // red
	})
	$("#lwidth").change(function(){
		var canvas = document.getElementById('sketchpad');
		var context = canvas.getContext('2d');
		context.lineWidth = $('#lwidth').val();
	})
});
$(window).bind('orientationchange', function(event) {
	var canvas = document.getElementsByTagName('canvas')[0];
	canvas.width  = $( document ).width()*.9;
	if(window.innerHeight < window.innerWidth){//landscape
		canvas.height = $( document ).height()*.5;
	}else{//portrait
		canvas.height = $( document ).height()*.7;
	}

});

</script>
<style type="text/css"><!--
	#sketchpad{
		border: 1px solid #000;
		margin: 0 auto;
	}

--></style> 
<body> 

	<div data-add-back-btn="true" data-role="page">


		<div data-add-back-btn="true" data-role="header" >
			<a href="#" data-rel="back" data-icon="arrow-l">Back</a>
			<h1><?php echo str_replace("+", " ", $_GET['phrase']);?></h1>
		</div><!-- /header -->

		<div data-role="content" style="text-align:center">	

			<canvas id="sketchpad" > 
				Sorry, your browser is not supported, loser
			</canvas>	

			

			<div class="ui-grid-a">
				<div class="ui-block-a">
					<label for="name">color</label>
					<input type="text" id="color" value="#222">
				</div>
				<div class="ui-block-b">					
					<form>
						<label for="slider-2">Size</label>
						<input type="range" name="slider-2" id="lwidth" data-highlight="true" min="0" max="50" value="4">
					</form>
				</div>
			</div><!-- /grid-b -->
							<input type="submit" id="save" value="submit">

		</div><!-- /content -->


	</div><!-- /page -->

</body>
</html>