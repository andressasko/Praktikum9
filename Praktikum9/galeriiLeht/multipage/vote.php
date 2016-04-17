<?php require_once('head.html'); ?>

<div id="wrap">
	<h3>Vali oma lemmik :)</h3>
	
<form action="tulemus.php" method="GET">
<!--
<select name="Picture">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
</select>
<input type="submit" name="submit" value="Get Selected Values" />
</form>
-->

<input type="radio" name="radio" value="Pilt 1">Pilt 1
<input type="radio" name="radio" value="Pilt 2">Pilt 2
<input type="radio" name="radio" value="Pilt 3">Pilt 3
<input type="radio" name="radio" value="Pilt 3">Pilt 4
<input type="radio" name="radio" value="Pilt 3">Pilt 5
<input type="radio" name="radio" value="Pilt 3">Pilt 6
<input type="submit" name="submit" value="Kinnita" />
</form>

<?php
/*
	$largeArray = glob("pildid/*.jpg");
	$counter = 0; 
		foreach (glob("pildid/*.jpg") as $thumb)
	{
	echo ("<div class='thumbnail'><a href='$largeArray[$counter]'><img src='$thumb'/></a></div>");
	$counter++;
	}
*/


$dirname = "pildid/";
$images = glob($dirname."*.jpg");
foreach($images as $image) {
	echo '<img src="'.$image.'" /><br />';
}


?>

</form>

<?php require_once('foot.html'); ?>