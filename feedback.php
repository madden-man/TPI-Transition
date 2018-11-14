<?php

if ($_GET['name'] && $_GET['email'] && $_GET['msg'])
{
    $msg = $_GET['name'] . " (" . $_GET['email'] . ")\r\n\r\n" . $_GET['msg'];

    mail("madde120@mail.chapman.edu", "Feedback", $msg);

    echo $msg;
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Feedback</title>
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

            <?php include("side_bar.php"); ?>

            <div class="fit-in-area" style="text-align: left;">
                <form action="" method="get">
                    <div class="form-group">
                        <label for="exampleInputName1">Name: </label>
                        <input type="text" name="name" class="form-control not-100" id="exampleInputName1" aria-describedby="nameHelp" placeholder="Enter name here!">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email Address: </label>
                        <input type="email" name="email" class="form-control not-100" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email here!">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleTextarea">Message:</label>
                        <textarea name="msg" class="form-control not-100" id="exampleTextarea" rows="5" placeholder="Enter your message here!"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
		</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
  </body>
</html>

