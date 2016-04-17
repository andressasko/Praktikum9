<?php require_once('head.html'); ?>

<?php
$dirname = "pildid/";
$images = glob($dirname."*.jpg");
foreach($images as $image) {
echo '<img src="'.$image.'" /><br />';
}
?>




<?php 
$page = "";
if (!empty($_GET["page"])){
	$page = $_GET["page"];
}

	switch($page){
       	case "galerii":
			include("galerii.html");
        break;
    	case "vote":
       		include("vote.html");
        break;
    	default:
    		include("pealeht.html");
        break;
		}
?>
<?php
if(isset($_POST['submit'])) {
if(isset($_POST['radio'])){
echo "Valitud oli: ".$_POST['radio'];  //  Displaying Selected Value
}
else{
	echo "Pilt polnud valitud";
}
}
?>
