<?php
include_once("config.php");

if(isset($_POST['update']))
{	

	$id = mysqli_real_escape_string($mysqli, $_POST['product_id']);

	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$price = mysqli_real_escape_string($mysqli, $_POST['price']);
	$age = mysqli_real_escape_string($mysqli, $_POST['age']);
	$description = mysqli_real_escape_string($mysqli, $_POST['description']);
	$date = mysqli_real_escape_string($mysqli, $_POST['date']);
	$raiting = mysqli_real_escape_string($mysqli, $_POST['raiting']);
	$image = mysqli_real_escape_string($mysqli, $_POST['image']);
	$trailer = mysqli_real_escape_string($mysqli, $_POST['trailer']);	
	
	if(empty($name) || empty($price) || empty($raiting)) {	
			
		if(empty($name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($price)) {
			echo "<font color='red'>Price field is empty.</font><br/>";
		}
		
		if(empty($raiting)) {
			echo "<font color='red'>Raiting field is empty.</font><br/>";
		}	
		if(empty($description)) {
			echo "<font color='red'>Description field is empty.</font><br/>";
		}				
	} else {	
		$result = mysqli_query($mysqli, "UPDATE products SET name='$name',price='$price',raiting='$raiting',description='$description', release_date='$date', raiting='$raiting', img='$image', trailer='$trailer' WHERE product_id=$id");
		
		header("Location: home.php");
	}
}
?>
<?php
$id = $_GET['product_id'];

$result = mysqli_query($mysqli, "SELECT * FROM products WHERE product_id=$id");

while($res = mysqli_fetch_array($result))
{
	$name = $res['name'];
	$price = $res['price'];
	$raiting = $res['raiting'];
	$description = $res['description'];
	$date = $res['release_date'];
	$raiting = $res['raiting'];
	$image = $res['img'];
	$trailer = $res['trailer'];
}
?>
<html>
<head>
	<title>Edit Item</title>
	<link rel="stylesheet" type="text/css" href="../css/admin.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
		<link rel="stylesheet" href="../css/main.css">
		<link rel="stylesheet" href="../css/menu.css">
		<link rel="stylesheet" href="../css/hamburger.css">
		<link rel="stylesheet" href="../css/search.css">

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
			  <a href="home.php?logout='1'" style="color: red;">logout</a>
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
					<a href="#"><i class="fab fa-facebook-f"></i></a>
					<a href="#"><i class="fab fa-vk"></i></a>
					<a href="#"><i class="fab fa-instagram"></i></a>
					<a href="#"><i class="fab fa-twitter"></i></a>
					</div>

				</div>
			</div>
				
		</header>

		<main>
			<div class="container">
				<div class="row">
					<div class="col">
						<section class="second-menu">
								<div class="row menu">
									<div class="col-2"><a href="../index.php">GAMESTORM</a></div>
									<div class="col-1 rev">Reviews</div>
									<div class="col-1"><a href="../game-list.php">Games</a></div>
									<div class="col-1">FAQ</div>
									<div class="col-4">Story</div>
									<div class="col-1">

									</div>
									<div class="col-1"><a href="home.php?logout='1'" style="color: red;">logout</a></div>
									<div class="col-1">Cart</div>
								</div>
						</section>						
					</div>					
				</div>
				<hr>
			<div class="row">
				<div class="col">
					<form name="form1" method="post" action="edit.php">
						<table border="0">
							<tr> 
								<td>Name</td>
								<td><input type="text" name="name" value="<?php echo $name;?>"></td>
							</tr>
							<tr> 
								<td>Price</td>
								<td><input type="text" name="price" value="<?php echo $price;?>"></td>
							</tr>
							<tr> 
								<td>Raiting</td>
								<td><input type="text" name="raiting" value="<?php echo $raiting;?>"></td>
							</tr>
							<tr>
								<td>Description</td>
								<td><textarea rows="10" cols='45' name="description"><?php echo $description;?></textarea></td>
							</tr>
							<tr>
								<td>Release Data</td>
								<td><input type="date" name="date" value="<?php echo $date;?>"></td>
							</tr>
							<tr>
								<td>Raiting</td>
								<td><input type="text" name="raiting" value="<?php echo $raiting;?>"></td>
							</tr>
							<tr>
								<td>Image</td>
								<td><input type="text" name="image" value="<?php echo $image;?>"></td>
							</tr>
							<tr>
								<td>Trailer</td>
								<td><input type="text" name="trailer" value="<?php echo $trailer;?>"></td>
							</tr>						
							<tr>
								<td><input type="hidden" name="product_id" value=<?php echo $_GET['product_id'];?>></td>
								<td><input type="submit" name="update" value="Update"></td>
							</tr>							
						</table>
					</form>					
				</div>
			</div>
	</div>	

</body>
</html>
