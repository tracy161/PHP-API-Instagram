<?php

require "instagram.php";

$instagram = new Instagram();
try{
	$medias = $instagram->getRecentMedia(329489839, 100);
	foreach($medias as $media){
		echo "<img src='{$media->images->thumbnail->url}' width='100'>";
	}

}
	catch(Exception $e){
		die($e->getMessage());
	}



?>

