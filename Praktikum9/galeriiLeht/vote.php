<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Praktikum  - Ülesanne</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div id="header">
	<ul>
		<li><a href="pealeht.html">Pealeht</a></li>
		<li><a href="galerii.html">Galerii</a></li>
		<li><a href="vote.html">Hääletamine</a></li>
	</ul>
</div>
<div id="banner">
	<img src="banner1.jpg" alt="banner">
</div>

<div id="wrap">
	<h3>Vali oma lemmik :)</h3>
	
	<form action="tulemus.php" method="GET">
	<?php
	
	$largeArray = glob("pildid/*.jpg");
	$counter = 0; 
		foreach (glob("pildid/*.jpg") as $thumb)
	{
	echo ("<div class='thumbnail'><a href='$largeArray[$counter]'><img src='$thumb'/></a></div>");
	$counter++;
	}
	

/*	
$directory = "pildid/*.jpg";
$images = glob($directory . "*.jpg");

foreach($images as $image)
{
  echo $image;
}
*/
?>
	</form>

</div>
<div id="footer">&copy; 2015</div>
</body>
</html>