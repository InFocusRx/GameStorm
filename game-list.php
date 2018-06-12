<?php 
require_once("php/database_connection.php"); 

$result = mysqli_query($conn, "SELECT product_id, name, img FROM products ORDER BY product_id");

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>GameStorm</title>
		<link rel="shortcut icon" href="img/icon.png" />
		<link rel="apple-touch-icon-precomposed" href="img/icon-apple.png" />		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
		<link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" href="css/menu.css">
		<link rel="stylesheet" href="css/hamburger.css">
		<link rel="stylesheet" href="css/game-list.css">
		<link rel="stylesheet" href="css/search.css">

		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	</head>
	<body>
		<?php require_once("templates/header.php"); ?>

			<hr>

			<section>
				<div class="container">
					<div class="row">
			        <?php 
				        while($res = mysqli_fetch_array($result)) {
				        echo "<div class='col-xl-2 col-md-4 col-sm-12 cover'>";
				        echo "<img class='img-thumbnail image' src=" . $res['img'] . " >";

				        echo '<a href="game.php?product_id='.$res['product_id'].'">

				            <div class="middle">
				            <div class="text"><i class="fas fa-search"></i></div>
				            </div>			            
				          	</a>';
				        echo "<div class='img-text-bottom gamename'>" .$res['name']."</div>";
				        echo "</div>";          
				      
				        }
				        ?>	
					</div>					

				</div>	        		        				
			</section>

		</main>
		
		<?php require_once("templates/footer.php"); ?>		
	</body>
</html>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<script src="js/hamburger.js"></script>

<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="js/search.js"></script>
