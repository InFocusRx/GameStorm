<?php
require_once("php/database_connection.php");  
$query = "SELECT name, description FROM products WHERE product_id=".intval($_REQUEST['product_id']); 
$result = mysqli_query($conn, $query)
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>123</title>
</head>
<body>

<?php 
while($res = mysqli_fetch_array($result)) {
echo $res['name'];
}
?>	
	
</body>
</html>