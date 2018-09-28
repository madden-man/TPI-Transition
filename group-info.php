<?php

$group = "";

if ($_GET['group'])
{
	if ($_GET['group'] === "individuals")
	{
		$group = "Individuals with Disabilities";
	}
	else if ($_GET['group'] === "families")
	{
		$group = "Families of Individuals";
	}
	else if ($_GET['group'] === "business_partners")
	{
		$group = "Business Partners";
	}
	else if ($_GET['group'] === "educators")
	{
		$group = "Educators";
	}
	else if ($_GET['group'] === "service_providers")
	{
		$group = "Service Providers";
	}
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TPI: <?php echo $group ?></title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="css/index.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
		<?php include("top_bar.php"); ?>


		<div class="container-fluid">

      <?php include("side_bar.php"); ?>

			<div style="width: 85%; text-align: center">

				<h1><?php echo $group; ?></h1>
				Here is where you'll put your content!

			</div>


		</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
  </body>
</html>
