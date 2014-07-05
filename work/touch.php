<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html>
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>rotate &mdash; </title>
    <meta name="author" content="" />
<script type='text/javascript' src='js/jquery-git.js'></script>
      <link rel="stylesheet" type="text/css" href="css/spectrum.css">
      <script type='text/javascript' src="js/spectrum.js"></script>
  <!--  <link rel="stylesheet" href="css/experiment.css" /> -->
<style>
h2 {
    margin-top: 0;
}


.viewport {
    -webkit-perspective: 800;
    -webkit-perspective-origin: 50% 200px;
    

    -moz-perspective: 800;
    -moz-perspective-origin: 50% 200px;
    
}

.cube {
    position: relative;
    margin: 0 auto;
    height: 400px;
    width: 400px;
    -webkit-transition: -webkit-transform 50ms linear;
    -webkit-transform-style: preserve-3d;
    -webkit-transform: rotateX(-10deg) rotateY(20deg);

    -moz-transition: -moz-transform 50ms linear;
    -moz-transform-style: preserve-3d;
    -moz-transform: rotateX(-10deg) rotateY(20deg);
}

.cube h2 {
    color: #fff;
    padding-top: 0;
    margin-top: 0;
}

.cube a {
    color: #fff;
}

.cube > div {
	position: absolute;
	height: 360px;
	width: 360px;
	padding: 20px;
	background-color: rgba(50, 50, 50, 0.75);
	border: 1px solid #555;
	border-radius: 3px;
	left: 1px;
	top: 2px;
}

.cube > div:first-child {
	display:none;
    -webkit-transform: rotateX(90deg) translateZ(200px);
    -moz-transform: rotateX(90deg) translateZ(200px);
}

.cube > div:nth-child(2) {
	display:none;
    -webkit-transform: translateZ(200px);
    -moz-transform: translateZ(200px);
}

.cube > div:nth-child(4) {
	
	opacity:1;
    -webkit-transform: rotateY(90deg) translateZ(200px);
    -moz-transform: rotateY(90deg) translateZ(200px);
    
}

.cube > div:nth-child(5) {

    -webkit-transform: rotateY(180deg) translateZ(200px);
    -moz-transform: rotateY(180deg) translateZ(200px);
}

.cube > div:nth-child(6) {
    -webkit-transform: rotateY(-90deg) translateZ(200px);
    -moz-transform: rotateY(-90deg) translateZ(200px);
}

.cube > div:nth-child(7) {
	

    -webkit-transform: rotateX(-90deg) rotate(180deg) translateZ(200px);
    -moz-transform: rotateX(-90deg) rotate(180deg) translateZ(200px);
}
.tileplace{
background-image:url('any.jpg');
}

object {
    opacity: 0;
}

iframe{
	width:100%;
	height: 36px;
	bottom:0%;
	position:absolute;
}
.color {
    width: 50px;
    height: 50px;
    display: block;
    float: left;

}

div[id^='zz']{
height:36px; width:36px; right:5%; position:absolute;
}
.bg
{
	background-image:url('any0.jpg');
	
	height:36px; width:36px;
}

</style>
    </head>
<body class="experiment">
<input type='text' id="full"/>

  


<script type='text/javascript'>//<![CDATA[ 

$(".basic").spectrum({
    color: "#f00",
    change: function(color) {
        $("#basic-log").text("change called: " + color.toHexString());
    }
});

$("#full").spectrum({
    color: "#ECC",
    showInput: true,
    className: "full-spectrum",
    showInitial: true,
    showPalette: true,
    showSelectionPalette: true,
    maxPaletteSize: 10,
    preferredFormat: "hex",
    localStorageKey: "spectrum.demo",
    move: function (color) {
        
    },
    show: function () {
    
    },
    beforeShow: function () {
    
    },
    hide: function () {
    
    },
    change: function() {
		alert(color);
        //$('.cube > div').css('background-color', color.toHexString());
    },
    palette: [
        ["rgb(0, 0, 0)", "rgb(67, 67, 67)", "rgb(102, 102, 102)",
        "rgb(204, 204, 204)", "rgb(217, 217, 217)","rgb(255, 255, 255)"],
        ["rgb(152, 0, 0)", "rgb(255, 0, 0)", "rgb(255, 153, 0)", "rgb(255, 255, 0)", "rgb(0, 255, 0)",
        "rgb(0, 255, 255)", "rgb(74, 134, 232)", "rgb(0, 0, 255)", "rgb(153, 0, 255)", "rgb(255, 0, 255)"], 
        ["rgb(230, 184, 175)", "rgb(244, 204, 204)", "rgb(252, 229, 205)", "rgb(255, 242, 204)", "rgb(217, 234, 211)", 
        "rgb(208, 224, 227)", "rgb(201, 218, 248)", "rgb(207, 226, 243)", "rgb(217, 210, 233)", "rgb(234, 209, 220)", 
        "rgb(221, 126, 107)", "rgb(234, 153, 153)", "rgb(249, 203, 156)", "rgb(255, 229, 153)", "rgb(182, 215, 168)", 
        "rgb(162, 196, 201)", "rgb(164, 194, 244)", "rgb(159, 197, 232)", "rgb(180, 167, 214)", "rgb(213, 166, 189)", 
        "rgb(204, 65, 37)", "rgb(224, 102, 102)", "rgb(246, 178, 107)", "rgb(255, 217, 102)", "rgb(147, 196, 125)", 
        "rgb(118, 165, 175)", "rgb(109, 158, 235)", "rgb(111, 168, 220)", "rgb(142, 124, 195)", "rgb(194, 123, 160)",
        "rgb(166, 28, 0)", "rgb(204, 0, 0)", "rgb(230, 145, 56)", "rgb(241, 194, 50)", "rgb(106, 168, 79)",
        "rgb(69, 129, 142)", "rgb(60, 120, 216)", "rgb(61, 133, 198)", "rgb(103, 78, 167)", "rgb(166, 77, 121)",
        "rgb(91, 15, 0)", "rgb(102, 0, 0)", "rgb(120, 63, 4)", "rgb(127, 96, 0)", "rgb(39, 78, 19)", 
        "rgb(12, 52, 61)", "rgb(28, 69, 135)", "rgb(7, 55, 99)", "rgb(32, 18, 77)", "rgb(76, 17, 48)"]
    ]
});

//]]>  

</script>

<style>
div[id^='zk']{
right:0%;	
	position:absolute;
	height:40px;
	width:40px;
}

</style>

<div class="wrapper">
<?php

$dirname = "./wtiles";
$i=0;$k=0;
$images = scandir($dirname);
foreach($images as $curimg){
	if($i<2)
	$i=$i+1;
	else
	
  { echo "<div  id=\"zz".($i-1)."\" style=\"top:".($k)."px;\"><img src='./wtiles/$curimg' height=\"36\" width=\"36\"></img></div><br>\n";
  $i=$i+1;
  $k=$k+40;
  }
  
}; 
$dirname = "./floortiles";
$i=0;
$k=0;
$images = scandir($dirname);
foreach($images as $curimg){
	if($i<2)
	$i=$i+1;
	else
	
  { echo "<div  id=\"zk".($i-1)."\" style=\"top:".($k)."px;\">
  	<img src='./floortiles/$curimg' height=\"36\" width=\"36\">
  	</img>
  </div><br>\n";
  $i=$i+1;
  $k=$k+40;
  }
  
};     
?>
  <br>
<br>
<br>
<br>
<br>
<?php
$wal=1;
$wal=$_POST['wall'];
?>     
<article class="viewport">
    <section class="cube">
      <div></div>
		
		
		
	  <div>
            </div>
        
	  <div style="display:none;">
		</div>
	  <div>
		<div style="margin:0px; border:0px; postion:relative; top:-20px; left:-20px; ">
		<?php
		$c=0;
		for ($i=($wal/10); $i<=9; $i++)
		{
			for ($j=0; $j<=9; $j++)
			{
             			echo "<div class=\"bg\" id=\"a".($i+$c)."\" style=\"position:absolute;top:".($i*10)."%;left:".($j*10)."%;\"> 
              			</div>";
						$c=$c+1;
     		}
       	}
        	?>
        </div>
		
		
        </div>
        
		
		<div >
           
		 
		 	<div>
		
		<?php
		$c=0;
		for ($i=($wal/10); $i<=9; $i++)
		{
			for ($j=0; $j<=9; $j++)
			{ 
             			echo "<div class=\"bg\" id=\"a".($i+$c)."\" style=\" position:absolute;top:".($i*10)."%;left:".($j*10)."%;\"> 
              			</div>";
						$c=$c+1;
	     	}
        }
        	?>
        	</div>	
    	</div>
		 
        
	  <div>
		
		<div style="margin:0px; border:0px; postion:relative; top:-20px; left:-20px; -webkit-transform-origin:0% 0%; -moz-transform-origin:0% 0%;">
		
		 <?php
		$d=0;
				
		for ($i=($wal/10); $i<=9; $i++)
		{
		for ($j=0; $j<=9; $j++)
			{
          echo "<div id=\"a".($i+$d)."\" style=\"position:absolute;top:".($i*10)."%;left:".($j*10)."%;\"> 
		  <img src=\"any2.jpg\" height=\"36\" width=\"36\"> </img>
          </div>";
		$d=$d+1;
		}
  }
?>
        </div>
		</div>	
		
        <div>
		
        <div>
		<!-- floor here -->
		 <?php
		$c=0;
		for ($i=0; $i<=9; $i++)
		{
		for ($j=0; $j<=10; $j++)
			{
  				echo "<div class=\"bg\" id=\"a".($i+$c)."\" style=\" position:absolute;top:".($i*10)."%;left:".($j*9)."%;height:36px; width:33px;\"> 
  			</div>";
			$c=$c+1;
			}
  		}
?>
        </div>
        </div>
	
    </section>
</article>
</div>
<script src="jquery.min.js"></script>
<script src="js/change.js"></script>
<script src="js/bg.js"> </script>
<script>
	alert(dwtile.substring(2));
	$('div[id^=a]').html("<img src=\"any"+dwtile.substring(2)+".jpg\" height=\"36\" width=\"36\" />");
</script>
<script src="js/experiment.js"></script>
<script type="text/javascript">
$("#full").spectrum({
    color: "#ECC",
    showInput: true,
    className: "full-spectrum",
    showInitial: true,
    showPalette: true,
    showSelectionPalette: true,
    maxPaletteSize: 10,
    preferredFormat: "hex",
    localStorageKey: "spectrum.demo",
    move: function (color) {
        
    },
    show: function () {
    
    },
    beforeShow: function () {
    
    },
    hide: function () {
    
    },
    change: function() {
        
    },
    palette: [
        ["rgb(0, 0, 0)", "rgb(67, 67, 67)", "rgb(102, 102, 102)",
        "rgb(204, 204, 204)", "rgb(217, 217, 217)","rgb(255, 255, 255)"],
        ["rgb(152, 0, 0)", "rgb(255, 0, 0)", "rgb(255, 153, 0)", "rgb(255, 255, 0)", "rgb(0, 255, 0)",
        "rgb(0, 255, 255)", "rgb(74, 134, 232)", "rgb(0, 0, 255)", "rgb(153, 0, 255)", "rgb(255, 0, 255)"], 
        ["rgb(230, 184, 175)", "rgb(244, 204, 204)", "rgb(252, 229, 205)", "rgb(255, 242, 204)", "rgb(217, 234, 211)", 
        "rgb(208, 224, 227)", "rgb(201, 218, 248)", "rgb(207, 226, 243)", "rgb(217, 210, 233)", "rgb(234, 209, 220)", 
        "rgb(221, 126, 107)", "rgb(234, 153, 153)", "rgb(249, 203, 156)", "rgb(255, 229, 153)", "rgb(182, 215, 168)", 
        "rgb(162, 196, 201)", "rgb(164, 194, 244)", "rgb(159, 197, 232)", "rgb(180, 167, 214)", "rgb(213, 166, 189)", 
        "rgb(204, 65, 37)", "rgb(224, 102, 102)", "rgb(246, 178, 107)", "rgb(255, 217, 102)", "rgb(147, 196, 125)", 
        "rgb(118, 165, 175)", "rgb(109, 158, 235)", "rgb(111, 168, 220)", "rgb(142, 124, 195)", "rgb(194, 123, 160)",
        "rgb(166, 28, 0)", "rgb(204, 0, 0)", "rgb(230, 145, 56)", "rgb(241, 194, 50)", "rgb(106, 168, 79)",
        "rgb(69, 129, 142)", "rgb(60, 120, 216)", "rgb(61, 133, 198)", "rgb(103, 78, 167)", "rgb(166, 77, 121)",
        "rgb(91, 15, 0)", "rgb(102, 0, 0)", "rgb(120, 63, 4)", "rgb(127, 96, 0)", "rgb(39, 78, 19)", 
        "rgb(12, 52, 61)", "rgb(28, 69, 135)", "rgb(7, 55, 99)", "rgb(32, 18, 77)", "rgb(76, 17, 48)"]
    ]
});
</script>
</body>
</html>


