<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Thompson Policy Institute: Transitioning Students Well</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="css/index.css" rel="stylesheet">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
		<?php include("top_bar.php"); ?>


		<div class="container-fluid">

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      
      <?php include("side_bar.php"); ?>

      <div class="carousel-inner" style="float: right; width: 85%;">
        <div class="carousel-item active">

          <img src="img/individual.png" style="width: 100%; height: 520px;" alt="Background Picture"/>		
        
          <a href="group-info.php?group=individuals"><h1 style="color: #ffffff; position: absolute; top: 70%; left: 60%">Fancy Title: Individuals</h1></a>
        </div>
        <div class="carousel-item">

          <img src="img/fpo.jpg" style="width: 100%; height: 520px;" alt="Background Picture">

          <a href="group-info.php?group=families"><h1 style="color: #ffffff; position: absolute; top: 70%; left: 60%">Fancy Title: Families</h1></a>
        </div>
        <div class="carousel-item">
          
          <img src="img/fpo.jpg" style="width: 100%; height: 520px;" alt="Background Picture">
        
          <a href="group-info.php?group=business_partners"><h1 style="color: #ffffff; position: absolute; top: 70%; left: 60%">Fancy Title: Employers</h1></a>

        </div>
        <div class="carousel-item">
          
          <img src="img/fpo.jpg" style="width: 100%; height: 520px;" alt="Background Picture">
        
          <a href="group-info.php?group=educators"><h1 style="color: #ffffff; position: absolute; top: 70%; left: 60%">Fancy Title: Educators</h1></a>

        </div>
        <div class="carousel-item">
          
          <img src="img/service_providers.jpg" style="width: 100%; height: 520px;" alt="Background Picture">
        
          <a href="group-info.php?group=service_providers"><h1 style="color: #ffffff; position: absolute; top: 70%; left: 60%">Fancy Title: Providers</h1></a>

        </div>

      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

      </div>
    </div>

			<div class="mr-2" role="group" aria-label="User Types Group" style="width: 85%; display: flex; float: right">
				<a type="button" href="group-info.php?group=individuals" class="btn btn-primary sm-margin flex-1"><h3>Individuals</h3></a>
				<a type="button" href="group-info.php?group=families" class="btn btn-info sm-margin flex-1"><h3>Families</h3></a>
				<a type="button" href="group-info.php?group=business_partners" class="btn btn-success sm-margin flex-1"><h3>Business Partners</h3></a>
				<a type="button" href="group-info.php?group=educators" class="btn btn-purple sm-margin flex-1"><h3>Educators</h3></a>
				<a type="button" href="group-info.php?group=service_providers" class="btn btn-orange sm-margin flex-1"><h3>Service Providers</h3></a>
			</div>

		</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
  </body>
</html>
