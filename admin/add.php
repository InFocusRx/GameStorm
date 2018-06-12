<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
include_once("config.php");

if(isset($_POST['Submit'])) {	
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$price = mysqli_real_escape_string($mysqli, $_POST['price']);
	$age = mysqli_real_escape_string($mysqli, $_POST['age']);
	$description = mysqli_real_escape_string($mysqli, $_POST['description']);
	$date = mysqli_real_escape_string($mysqli, $_POST['date']);
	$raiting = mysqli_real_escape_string($mysqli, $_POST['raiting']);
	$image = mysqli_real_escape_string($mysqli, $_POST['image']);
	$trailer = mysqli_real_escape_string($mysqli, $_POST['trailer']);

	if(empty($name) || empty($price) || empty($age)) {
				
		if(empty($name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($price)) {
			echo "<font color='red'>Price field is empty.</font><br/>";
		}
		
		if(empty($age)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}
		
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
			
		$result = mysqli_query($mysqli, "INSERT INTO products(name,price,age_raiting,description,release_date,raiting,img,trailer) VALUES('$name','$price','$age','$description','$date','$raiting','$image','$trailer')");
		
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='home.php'>View Result</a>";
	}
}
?>
</body>
</html>
