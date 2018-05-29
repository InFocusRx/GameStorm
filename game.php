<?php
require_once("php/database_connection.php");  
$query = "SELECT name, price, age_raiting, description, release_date, raiting, img FROM products WHERE product_id=".intval($_REQUEST['product_id']); 
$result = mysqli_query($conn, $query)
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>GameStorm - Product</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	</head>
	<body>

		<div class="container">
				<?php 
				while($res = mysqli_fetch_array($result)) {
/*--------------------------------------------------------*/
				echo "<div class='row'>";

				echo "<div class='col-4'>";
				echo "<h1>".$res['name']."</h1>";
				echo "</div>";

				echo "</div>";
/*--------------------------------------------------------*/
				echo "<div class='row'>";

				echo "<div class='col-4'>";
				echo "<h3>Price: ".$res['price']."$</h3>";
				echo "</div>";

				echo "</div>";
/*--------------------------------------------------------*/
				echo "<div class='row'>";

				echo "<div class='col-12'>";
				echo "<h3>Description: <br><br>".$res['description']."</h3><br>";
				echo "</div>";

				echo "</div>";	
/*--------------------------------------------------------*/
				echo "<div class='row'>";

				echo "<div class='col-4'>";
				echo "<h3>Raiting: ".$res['raiting']."</h3>";
				echo "</div>";

				echo "</div>";
/*--------------------------------------------------------*/
				echo "<div class='row'>";

				echo "<div class='col-4'>";
				echo "<h3>Release date: ".$res['release_date']."</h3>";
				echo "</div>";

				echo "</div>";	
/*--------------------------------------------------------*/
				echo "<div class='row'>";

				echo "<div class='col-4'>";
				echo "<img src=".$res["img"]." />";
				echo "</div>";

				echo "</div>";															
				}
				?>	
		</div>


		

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	</body>
</html>