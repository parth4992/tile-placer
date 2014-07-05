<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html>
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>rotate &mdash; </title>
    <meta name="author" content="" />
	<!--<script type='text/javascript' src='js/jquery-git.js'></script>
      <link rel="stylesheet" type="text/css" href="css/spectrum.css">
      <script type='text/javascript' src="js/spectrum.js"></script>
      <script type='text/javascript' src="js/jquerycolor.js"></script> -->
     <!-- TEST PART BEGINS HERE -->
    <link rel="stylesheet" type="text/css" href="css/spectrum.css">
    <link rel="stylesheet" type="text/css" href="js/bootstrap.css">
    <script type="text/javascript" src="jquery.min.js"></script>
    <script type="text/javascript" src="js/experiment.js"></script>
    <script type="text/javascript" src="js/change.js"> </script>
    <script type="text/javascript" src="js/spectrum.js"></script>
    <script type='text/javascript' src='js/docs.js'></script>

    <!-- TEST PART ENDS HERE -->
     
     
     
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
	height: 340px;
	width: 340px;
	padding: 29px;
	background-color: rgba(50, 50, 50, 0.75);
	border: 1px solid #555;
	border-radius: 3px;
	right: 1px;
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

.bg
{
	background-image:url('any0.jpg');	
	height:36px; width:36px;
}

</style>
    </head>
<body class="experiment" bgcolor="#fffadc">
<div style="background-color:#1c1c1c">
<img src="pic1.png" />
</div>
<div id='docs'>
    <div id='docs-content'>
    <br />
    <br />
  <strong>Choose the wall color :</strong> 
  <input id="fullto" />
</div>
</div>






<style>
.flo{
top:45%;
position:absolute;	
}
.wal
{
	top:20%;
	position:absolute;
}
</style>

<div class="wrapper">



<?php
$wal=1;
$wal=$_POST['wall'];
$wa=$_POST['wa'];
$fl=$_POST['fl'];
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
		for ($i=($wal/10); $i<=10; $i++)
		{
			for ($j=0; $j<=10; $j++)
			{
             			echo "<div id=\"a".($i+$c)."\" style=\"position:absolute;top:".($i*9)."%;left:".($j*9)."%;\"><img src='./wtiles/tile".$wa.".jpg' height=\"36\" width=\"36\">
  	</img> 
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
		for ($i=($wal/10); $i<=10; $i++)
		{
			for ($j=0; $j<=10; $j++)
			{ 
             			echo "<div id=\"a".($i+$c)."\" style=\" position:absolute;top:".($i*9)."%;left:".($j*9)."%;\"> <img src='./wtiles/tile".$wa.".jpg' height=\"36\" width=\"36\">
  	</img> 
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
				
		for ($i=($wal/10); $i<=10; $i++)
		{
		for ($j=0; $j<=10; $j++)
			{
          echo "<div id=\"a".($i+$d)."\" style=\"position:absolute;top:".($i*9)."%;left:".($j*9)."%;\"> <img src='./wtiles/tile".$wa.".jpg' height=\"36\" width=\"36\">
  	</img> 
		 
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
		for ($i=0; $i<=10; $i++)
		{
		for ($j=0; $j<=10; $j++)
			{
  				echo "<div id=\"a".($i+$c)."\" style=\" position:absolute;top:".($i*9)."%;left:".($j*9)."%;height:36px; width:36px;\"><img src='./floortiles/tile".$fl.".jpg' height=\"36\" width=\"36\">
  	</img>  
  			</div>";
			$c=$c+1;
			}
  		}
?>
        </div>
        </div>
	
    </section>
    <div class="flo" style="overflow-y:scroll auto; height:100px;" >
<strong>Pick your tile: </strong>
<table border="0" width="20%">
<?php

$dirname = "./floortiles";
$images = scandir($dirname);
$i=0;$k=0;
foreach($images as $curimg1){
	if($k==0)
	echo "<tr>";
	if($i<2)
	$i=$i+1;
	else
	{
  echo "<td><div  id=\"zk".($i-1)."\"><img src='./floortiles/$curimg1' width=\"36\"></img></div></td>";
  $i=$i+1;$k++;
	}
	 if($k==5)
  {
	  $k=0;
	  echo "</tr>";
  }
}; 
    
?> 
</table> 

<table border="0" width="20%"><?php

$dirname = "./wtiles";
$i=0;$k=0;
$images = scandir($dirname);
foreach($images as $curimg){
	if($k==0)
	echo "<tr>";
	if($i<2)
	$i=$i+1;
	else
	
  { 
  	echo "<td><div  id=\"zz".($i-1)."\"><img src='./wtiles/$curimg' width=\"36\"></img></div></td>";
  	$i=$i+1;
	$k++;
  }
  
  if($k==5)
  {
	  $k=0;
	  echo "</tr>";
  }
}; 
    
?>
</table> 
</div>
</article>


</div>
<img src="apps.jpg" style="bottom:0%; right:0%; position:absolute;" width="100px" />
</body>
</html>


