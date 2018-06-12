<?php
require_once("php/database_connection.php");  
$query = "SELECT product_id, name, price, age_raiting, description, release_date, raiting, img, trailer FROM products WHERE product_id=".intval($_REQUEST['product_id']); 
$result = mysqli_query($conn, $query);

if(isset($_POST["add_to_cart"]))
{
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
		if(!in_array($_GET["product_id"], $item_array_id))
		{
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'item_id'			=>	$_GET["product_id"],
				'item_name'			=>	$_POST["hidden_name"],
				'item_price'		=>	$_POST["hidden_price"],
				'item_quantity'		=>	$_POST["quantity"]
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
		}
		else
		{
			echo '<script>alert("Item Already Added")</script>';
		}
	}
	else
	{
		$item_array = array(
			'item_id'			=>	$_GET["product_id"],
			'item_name'			=>	$_POST["hidden_name"],
			'item_price'		=>	$_POST["hidden_price"],
			'item_quantity'		=>	$_POST["quantity"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}

if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["item_id"] == $_GET["product_id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("Item Removed")</script>';
				echo '<script>window.location="cart.php"</script>';
			}
		}
	}
}

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>GameStorm</title>
		<link rel="shortcut icon" href="img/icon.png" />
		<link rel="apple-touch-icon-precomposed" href="img/icon-apple.png" />
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
		<link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" href="css/menu.css">
		<link rel="stylesheet" href="css/hamburger.css">
		<link rel="stylesheet" href="css/search.css">

		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

	</head>
	<body>

			<div id="mySidenav" class="sidenav">
			  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
			  <a href="#"><b style="color: orange;">GameStorm</b></a>
			  <a href="#">About</a>
			  <a href="#">Our Sites</a>
			  <a href="#">Contact</a>
				<br>
			  <a href="#">Reviews</a>
			  <a href="#">Games</a>
			  <a href="#">FAQ</a>
			  <a href="#">Story</a>
				<br>
			  <a href="#">Login</a>
			  <a href="#">Search</a>
			  	<br>

			  	<table class="icons-mobile">
			  		<tr>
			  			<td><a href="#"><i class="fab fa-facebook-f"></i></a></td>
			  			<td><a href="#"><i class="fab fa-vk"></i></a></td>
			  			<td><a href="#"><i class="fab fa-instagram"></i></a></td>
			  		</tr>
					
					<tr>
						<td><a href="#"><i class="fab fa-google"></i></a></td>
						<td><a href="#"><i class="fab fa-twitter"></i></a></td>
						<td><a href="#"><i class="fab fa-github"></i></a></td>
					</tr>
			  	</table>

			</div>

			<div class="mobile-m">
				<span class="hamburger" onclick="openNav()">OPEN</span>
			</div>

				
		<header class="navbar-header">

			<div class="container">
				<div class="row">
					<div class="col-2 header-logo"><a href="#">GameStorm</a></div>
					<div class="col-1"><a href="#"></a></div>
					<div class="col-1"><a href="#"></a></div>
					<div class="col-6"><a href="#"></a></div>
					<div class="col-2 navbar-icons">
					<a class="ic" href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
					<a class="ic" href="https://www.vk.com" target="_blank"><i class="fab fa-vk"></i></a>
					<a class="ic" href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
					<a class="ic" href="https://www.twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
					</div>

				</div>
			</div>
				
		</header>

		<main>
			<section class="second-menu">
				<div class="container">
					<div class="row menu">
						<div class="col-2"><a href="index.php"><img src="img/logo.png" width="100%" alt="LOGO"></a></div>
						<div class="col-1"><a class='a' href="game-list.php">Games</a></div>
						<div class="col-1"><a class='a' href="faq.php">FAQ</a></div>
						<div class="col-5"> </div>
						<div class="col-1">

						</div>
						<div class="col-1"><a href="login.php"> </a></div>
						<div class="col-1"><a class='a' href="php/cart.php"><i class="fas fa-shopping-cart"></i> Cart </a></div>
					</div>
				</div>
			</section>	

			<section>

				<hr>

		<div class="container">
				<?php 
				while($res = mysqli_fetch_array($result)) {
/*--------------------------------------------------------*/
								$rating = (int)$res['raiting'];

								if ($rating > 50)
								{
									$color = 'green';
								}
								if ($rating <= 50)
								{
									$color = 'red';
								}
				echo "<div class='row'>";

				echo "<div class='col-8'>";
				echo "<h3>".$res['name']."</h3>";
				echo "<h4>Description:</h4><p class='des'><br>".$res['description']."<p>";
				echo "
							<div class='embed-responsive embed-responsive-16by9'>
								<iframe width='100%' style='border: 2.5px solid #FFDF01;' height='480' src=".$res['trailer']." frameborder='0' gesture='media' allow='encrypted-media' allowfullscreen></iframe>
							</div>
				";
				echo "</div>";

				echo "<div class='col-4'><br>";
				echo "<img style='width: 100%;' class='img' src=".$res["img"]." /><br><br>";


						echo "<table><tr><td><h6>Release: ".$res['release_date']."</h6></td>"; 
						echo "<td style='position: absolute; right: 20px;'><h6>Price: &euro;".$res['price'].".00</h6></td>";		
						echo "</tr><tr><td><h6>Raiting: ".$rating."%</td><td style='position: absolute; right: 40px;'><span style='font-weight: bold; color: ".$color.";'>Positive</span></td></h6></td></tr></table>";
							


/*--------------------------------------------------------*/
/*--------------------------------------------------------*/


				?>
				<br>

				<form method="post" action="php/cart.php?action=add&product_id=<?php echo $res["product_id"]; ?>">
					<div style="margin: 0 auto;width: 50%; border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding: 5px 0px 15px 0px;" align="center">
						<label for="#amount"><b>Amount</b></label>

						<input style="width: 50px; font-size: 14px;" type="text" id='amount' name="quantity" value="1" class="form-control" />

						<input type="hidden" name="hidden_name" value="<?php echo $res["name"]; ?>" />

						<input type="hidden" name="hidden_price" value="<?php echo $res["price"]; ?>" />

						<input type="submit" name="add_to_cart" style="margin-top:15px; background-color: #FFDF01; border: 1px solid black;" class="btn" value="Add to Cart" />

					</div>
				</form> <br><br>

				<?php




				echo "</div>";

				echo "</div>";	
/*--------------------------------------------------------*/

/*--------------------------------------------------------*/



/*
				echo "<p>Product ID: ".$res['product_id']."</p>";	
				echo "<p>Product name: ".$res['name']."</p>";

				echo "<form method='post' action='php/cart.php?action=add&product_id=".$res['product_id']."'>";
				echo "<input type='text' name='quantity' value='1'/>";


				echo "<input type='text' name='hidden_name' value=".$res['name']." />";


				echo "<input type='hidden' name='hidden_price' value=".$res['price']." />";
				echo "<input type='submit' name='add_to_cart' value='Add to cart'/>";
				echo "</form>";*/

			
				}

				?>	
		</div>
		</section>

		</main>

		<?php require_once('templates/footer.php'); ?>

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	</body>
</html>

<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="js/search.js"></script>