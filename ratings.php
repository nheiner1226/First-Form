<!DOCTYPE html>
<html lang="EN">
  <head> 
	<title>response to customer satisfaction survey</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link rel="stylesheet" type="text/css" href="form_proc.css" />
  </head>

  <body>

  <?php
  	if ((isset($_POST["movie_name"]) && (!empty($_POST["movie_name"]))) &&
  	(isset($_POST["rating"]) && (!empty($_POST["rating"])))
  	)

  	{
  
  	$movieName = $_POST["movie_name"];
  	$movieRating = $_POST["rating"];

  ?>

  <p>

  You have given the movie titled <?php echo $movieName ?>
  a rating of <?php echo $movieRating ?>. <br/>
  Thank you for your feedback. 

  </p>

  <?php
  }

  else {
  	echo "<p>You need to enter values for the movie name and rating.</p>";
  }
	?>

  </body>

</html>