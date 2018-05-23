<?php

require "instagram.php";

$instagram = new Instagram();

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Carousel Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>
  <body>

    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">Instagram</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Disabled</a>
            </li>
          </ul>
          <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
    </header>

    <main role="main">

      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="first-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide">
            <div class="container">
              <div class="carousel-caption text-left">
                <h1>Example headline.</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
            <div class="container">
              <div class="carousel-caption">
                <h1>Another example headline.</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
            <div class="container">
              <div class="carousel-caption text-right">
                <h1>One more for good measure.</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>


      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->
      <br><br>
      <div class="container">

        
        <div class="row">
          <div class="col-lg-12", align="center">
            
            <?php 
         
            $pic = $instagram->getRecentInfo(329489839);
            echo "<img class='rounded-circle' src='{$pic->profile_picture}' width='140'>";
            
            ?>
            <h2 class="my-4", align="center">
               <?php 
               
                $info = $instagram->getRecentInfo(329489839);
                echo "$info->username";

               ?></h2>
            <p><?php 
         
              $info = $instagram->getRecentInfo(329489839);
              echo "$info->bio";

             ?></p>
            <p><a class="btn btn-secondary" href="https://www.instagram.com/trammieee/" target="_blank" role="button">View details &raquo;</a></p>
            
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->


        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
            <p class="lead">bla bla bla.</p>
          </div>
          <div class="col-md-5">
            <?php 
                try {
                   $medias = $instagram->getRecentMedia(329489839, 1);
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

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7 ">
            <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
            <p class="lead">bla bla bla</p>
          </div>
          <div class="col-md-5 order-md-1">
            <?php 
                try {
                   $medias = $instagram->getRecentMedia(329489839, 1);
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

        <hr class="featurette-divider">

        

        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->

      </div><!-- /.container -->


      <!-- FOOTER -->
      <footer class="container">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>&copy; 2017-2018 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>
    </main>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="js/vendor/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="js/vendor/holder.min.js"></script>
  </body>
</html>







<!--!DOCTYPE html>
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
        
        
        </div>
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

</html-->

