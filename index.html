
<!doctype html> 
<html lang="en"> 
<head> 
	<title>Canvas</title> 
	<script src="https://ajax.googleapis.com/ajax/libs/mootools/1.3.2/mootools-yui-compressed.js"></script> 
	<script> 
	var xinc = 0;
	
	var Point3D = new Class({
	
		x: 0, y: 0, z: 0,
	
		initialize:  function( x, y, z ) {
			this.x = x;
			this.y = y;
			this.z = z;
		},
	
		rotateX: function( angle ) {
			var rad = angle * Math.PI / 180;
			var cosa = Math.cos(rad);
			var sina = Math.sin(rad);
			var y = this.y * cosa - this.z * sina;
			var z = this.y * sina + this.z * cosa;
			return new Point3D(this.x, y, z);
		},
	
		rotateY: function( angle ) {
			var rad = angle * Math.PI / 180;
			var cosa = Math.cos(rad);
			var sina = Math.sin(rad);
			var z = this.z * cosa - this.x * sina;
			var x = this.z * sina + this.x * cosa;
			return new Point3D(x, this.y, z)
		},
	
		rotateZ: function( angle ) {
			var rad = angle * Math.PI / 180;
			var cosa = Math.cos(rad);
			var sina = Math.sin(rad);
			var x = this.x * cosa - this.y * sina;
			var y = this.x * sina + this.y * cosa;
			return new Point3D(x, y, this.z);
		},
	
		project: function( width, height, fov, viewerDistance ) {
			var factor = parseFloat(fov) / (viewerDistance + this.z);
			var x = this.x * factor + width / 2;
			y = (0 - this.y) * factor + height / 2;
			 return new Point3D(x,y,this.z);
		}
	
	});
	
	var drawfun = function(xinc) {
		
	
		var img_width  = 600;
		var img_height = 600;
	
		var width = 5;// + Math.sin( xinc / 10 ) * 3;
		var height = 5;
		var depth = 5;
	
		var hWidth = width / 2;
		var hHeight = height / 2;
		var hDepth = depth / 2;
	
		/* Define the 8 vertices of the cube. */
		var vertices = [
		  new Point3D(-hWidth,	hHeight,	-hDepth),
		  new Point3D(hWidth,	hHeight,	-hDepth),
		  new Point3D(hWidth,	-hHeight,	-hDepth),
		  new Point3D(-hWidth,	-hHeight,	-hDepth),
		  new Point3D(-hWidth,	hHeight,	hDepth),
		  new Point3D(hWidth,	hHeight,	hDepth),
		  new Point3D(hWidth,	-hHeight,	hDepth),
		  new Point3D(-hWidth,	-hHeight,	hDepth)
		];
		
		var colors = ['#F0F0F0','#C8C8C8','#DCDCDC','#B4B4B4','#A0A0A0','#EEE'];
		
		var faces = [[0,1,2,3],[1,5,6,2],[5,4,7,6],[4,0,3,7],[0,4,5,1],[3,2,6,7]];
	
		var angleX = -35 + xinc;
		var angleZ = 15 + xinc * .8;
		var angleY = -30 + xinc + .5 ;
	
		var t = [];
	
		vertices.each(function(v,i){
			t.push( v.rotateX(angleX).rotateY(angleY).rotateZ(angleZ).project(img_width,img_height,256,6) );
		});
	
		var avgZ = {};
		faces.each(function( f, i ){
			avgZ[i] = (t[f[0]].z + t[f[1]].z + t[f[2]].z + t[f[3]].z) / 4.0;
		});
		
		for (index in avgZ) {
			var z = avgZ[index];
			var f = faces[index];
			
			c2.fillStyle = colors[index];
			c2.beginPath();
			c2.moveTo( t[f[0]].x , t[f[0]].y );
			c2.lineTo( t[f[1]].x , t[f[1]].y );
			c2.lineTo( t[f[2]].x , t[f[2]].y );
			c2.lineTo( t[f[3]].x , t[f[3]].y );
			c2.closePath();
			c2.fill();
			
		}
		
	};
	
	var x1 = 10;
	var x2 = 30;
	var x3 = 50;
	var x4 = 70;
	
	function mainLoop() {
		//ie hack
		canvas.width = canvas.width;
		
		x4 += 1.4;
		drawfun( x4 );
		
		x2 += 1.4;
		drawfun( x2 );
		
		x3 += 1.4;
		drawfun( x3 );
		
		x1 += 1.4;
		drawfun( x1 );
		
	}
	
	window.onload = function(){ 
		canvas = document.getElementById("xcanvas");
		c2 = canvas.getContext("2d");
		mainLoop.periodical(50); 
	}
	</script> 
</head> 
<body> 
<canvas id="xcanvas" width="600" height="600" /> 
</body> 
</html>