<?php

require "instagram.php";

$instagram = new Instagram();

?>

<!DOCTYPE html>
<html>
<head>
	<title>My new Instagram page</title>

</head>
<body>
	<div class="container">

      <h1 class="my-4", align="center"> Welcome to My Instagram</h1>
      <div class="card h-100", align="center">
        <?php 
         
            $pic = $instagram->getRecentInfo(329489839);
            echo "<img src='{$pic->profile_picture}' width='100'>";
        ?>

      </div>
      <h2 class="my-4", align="center">Username:
         <?php 
         
          $info = $instagram->getRecentInfo(329489839);
          echo "$info->username";

         ?></h2>
      <h3 class="my-4", align="center">
         <?php 
         
          $info = $instagram->getRecentInfo(329489839);
          echo "$info->bio";

         ?></h3>
      <div class="row">
        
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100", align="center">
          	<?php 
				    try {
  					   $medias = $instagram->getRecentMedia(329489839);
  					   foreach($medias as $media){
  						  echo "<img src='{$media->images->standard_resolution->url}' width='500'>";
  					     }
  					   }
  					catch(Exception $e){
  						die($e->getMessage());
					 } 
			   ?>

          </div>
      </div>
  </div>
</div>

</body>

</html>

