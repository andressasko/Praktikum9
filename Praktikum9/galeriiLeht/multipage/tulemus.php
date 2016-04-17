<?php require_once('head.html'); ?>

<div id="wrap">
	<h3>Valiku tulemus</h3>
<?php
/*	
if(isset($_GET['submit'])){
$selected_val = $_GET['Picture'];  // Storing Selected Value In Variable
echo "You have selected :" .$selected_val;  // Displaying Selected Value
}
*/

if(isset($_GET['submit'])) {
if(isset($_GET['radio'])){
	echo "Valitud oli: ".$_GET['radio'];  //  Displaying Selected Value
}
else{
	echo "Pilt polnud valitud";
}
}
?>



<?php require_once('foot.html'); ?>