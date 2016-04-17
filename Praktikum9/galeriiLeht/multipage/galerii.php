<?php require_once('head.html'); ?>

<div id="wrap">
	<h3>Fotod</h3>
	<div id="gallery">

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

	</div>
</div>

<?php require_once('foot.html'); ?>