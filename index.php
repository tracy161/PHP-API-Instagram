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

      <h1 class="my-4", align="center">Welcome to My Instagram</h1>

      <div class="row">
        
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100", align="center">
          	<?php 
				try{
					$medias = $instagram->getRecentMedia(329489839, 30);
					foreach($medias as $media){
						echo "<img src='{$media->images->standard_resolution->url}' width='200'>";
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

