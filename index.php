<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script type="text/javascript" src="jquery.min.js"></script>
</head>

<body bgcolor="#fffadc">
<div style="background-color:#1c1c1c">
<img src="pic1.png" />
</div>
<form action="touch.php" method="post">
<br />
Enter the percentage of Wall  &nbsp;&nbsp;
<input type="text" name="wall"/>
<br />
<strong>Select Default Floor Tile</strong>
<div style="overflow-y:scroll auto; height:200px;">
<table border="0" width="100%">
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
  echo "<td><div  id=\"kk".($i-1)."\"><img src='./floortiles/$curimg1' width=\"36\"></img></div></td>";
  $i=$i+1;$k++;
	}
	 if($k==9)
  {
	  $k=0;
	  echo "</tr>";
  }
}; 
    
?> 
</table>
</div>

<strong>Select Default Wall Tile </strong>
<div style="overflow:auto; height:200px;">
<table border="0"><?php

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
  	echo "<td><div  id=\"ll".($i-1)."\"><img src='./wtiles/$curimg'></img></div></td>";
  	$i=$i+1;
	$k++;
  }
  
  if($k==9)
  {
	  $k=0;
	  echo "</tr>";
  }
}; 
    
?>
</table> 
</div>
<p>
 <input type="hidden" id="wa" name="wa" value="" />
 <input type="hidden" id="fl" name="fl" value="" />
  <input type="submit" id="submit" />
</p>
<script>
$('div[id^=ll]').click(function(){
	sajj=$(this).attr('id').substring(2);
	$('input[name=wa]').attr('value',sajj);

	
});
</script>
<script>
$('div [id^=kk]').click(function(){
	par=$(this).attr('id').substring(2);
	
		$('input[name=fl]').attr('value',par);	

});
</script>
</form>
<img src="apps.jpg" style="bottom:0%; right:0%; position:absolute;" width="100px" />
</body>
</html>