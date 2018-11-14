<?php

if ($_GET['name'] && $_GET['email'] && $_GET['msg'])
{
    $msg = $_GET['name'] . " (" . $_GET['email'] . ")\r\n\r\n" . $_GET['msg'];

    mail("madde120@mail.chapman.edu", "FAQ", $msg);

    echo $msg;
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Frequently Asked Questions</title>
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

			<div class="fit-in-area">

				<h1>Frequently Asked Questions</h1>
        <hr>

				<p style="text-align: left; margin-left: 15px">

					<h3 style="margin-bottom: 0;">What is the first question?</h3>
					<p style="margin-bottom: 15px">-If I had to guess, something like this.</p><br>

					<h3 style="margin-bottom: 0;">What is the second question?</h3>
					<p style="margin-bottom: 15px">-I'm not entirely sure, but I'm gonna find out.</p><br>

					<h3 style="margin-bottom: 0;">What is the third question, which could be a little longer?</h3>
					<p style="margin-bottom: 15px">-IDK.</p><br>

          <hr>

          <h3>Request a Question!</h3>

          <form action="" method="get">
            <div class="form-group">
                <label for="exampleInputName1" style="text-align: left; width: 100%">Name: </label>
                <input type="text" name="name" class="form-control not-100" id="exampleInputName1" aria-describedby="nameHelp" placeholder="Enter name here!">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1" style="text-align: left; width: 100%">Email Address: </label>
                <input type="email" name="email" class="form-control not-100" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email here!">
                <small id="emailHelp" class="form-text text-muted" style="text-align: left; width: 100%">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleTextarea" style="text-align: left; width: 100%">Question:</label>
                <textarea name="question" class="form-control not-100" id="exampleTextarea" rows="5" placeholder="Enter your question here!"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </p>

			</div>


		</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
  </body>
</html>
