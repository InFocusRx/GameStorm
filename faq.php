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
		<link rel="shortcut icon" href="img/icon.png" />
		<link rel="apple-touch-icon-precomposed" href="img/icon-apple.png" />		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
		<link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" href="css/menu.css">
		<link rel="stylesheet" href="css/hamburger.css">
		<link rel="stylesheet" href="css/game-list.css">
		<link rel="stylesheet" href="css/search.css">

		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

		<link rel="stylesheet" type="text/css" href="faq.css">

		<script type="text/javascript">
			$(function() {
			    // Since there's no list-group/tab integration in Bootstrap
			    $('.list-group-item').on('click',function(e){
			     	  var previous = $(this).closest(".list-group").children(".active");
			     	  previous.removeClass('active'); // previous list-item
			     	  $(e.target).addClass('active'); // activated list-item
			   	});
			});
		</script>
	</head>
	<body>

<?php require_once('templates/header.php'); ?>
<hr>
			<div class="container faq" style="margin-top: 30px;">
			  <div class="col-md-8">
			    <div class="tab-content panels-faq">
			      <div class="tab-pane active" id="tab1">
			        <div class="panel-group" id="help-accordion-1">
			          <div class="panel panel-default panel-help">
			            <a href="#opret-produkt" data-toggle="collapse" data-parent="#help-accordion-1">
			              <div class="panel-heading" style="color: black;">
			                <h2>What is this?</h2>
			              </div>
			            </a>
			            <div id="opret-produkt" class="collapse in">
			              <div class="panel-body">
			                <p>This is a web store of video games called GameStorm! We are glad you are here!</p>
			              </div>
			            </div>
			          </div>
			          <div class="panel panel-default panel-help">
			            <a href="#rediger-produkt" data-toggle="collapse" data-parent="#help-accordion-1">
			              <div class="panel-heading" style="color: black;">
			                <h2>Can I upload a game by myself?</h2>
			              </div>
			            </a>
			            <div id="rediger-produkt" class="collapse">
			              <div class="panel-body">
			                <p>Unfortunately for you, you can't do this. Admin is the only person can upload games.</p>
			              </div>
			            </div>
			          </div>
			          <div class="panel panel-default panel-help">
			            <a href="#ret-pris" data-toggle="collapse" data-parent="#help-accordion-1">
			              <div class="panel-heading" style="color: black;">
			                <h2>How long does this site exist?</h2>
			              </div>
			            </a>
			            <div id="ret-pris" class="collapse">
			              <div class="panel-body">
			                <p>The first launch of this site was in may 2018.</p>
			              </div>
			            </div>
			          </div>
			          <div class="panel panel-default panel-help">
			            <a href="#slet-produkt" data-toggle="collapse" data-parent="#help-accordion-1">
			              <div class="panel-heading" style="color: black;">
			                <h2>Are prices in this store lower or higher than competitors's?</h2>
			              </div>
			            </a>
			            <div id="slet-produkt" class="collapse">
			              <div class="panel-body">
			                <p>Our prices are approximately same than competitors's</p>
			              </div>
			            </div>
			          </div>
			        </div>
			      </div>
			      <div class="tab-pane" id="tab2">
			        <div class="panel-group" id="help-accordion-2">      
			          <div class="panel panel-default panel-help">
			            <a href="#help-three" data-toggle="collapse" data-parent="#help-accordion-2">
			              <div class="panel-heading">
			                <h2>Lorem ipsum?</h2>
			              </div>
			            </a>
			            <div id="help-three" class="collapse in">
			              <div class="panel-body">
			                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus nesciunt ut officiis accusantium quisquam minima praesentium, beatae fugit illo nobis fugiat adipisci quia distinctio repellat culpa saepe, optio aperiam est!</p>
			                <p><strong>Example: </strong>Facere, id excepturi iusto aliquid beatae delectus nemo enim, ad saepe nam et.</p>
			              </div>
			            </div>
			          </div>
			        </div>
			      </div>
			    </div>    
			  </div>
			</div>

		</main>
	<br>
<div class="container">
	<div class="row">
		<div class="col">
							<div class='embed-responsive embed-responsive-16by9'>
								<iframe width='100%' style='border: 2.5px solid #FFDF01;' height='480' src="https://www.youtube.com/embed/T6hM5aDU6wE" frameborder='0' gesture='media' allow='encrypted-media' allowfullscreen></iframe>
							</div>				
		</div>
	</div>
</div>
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
