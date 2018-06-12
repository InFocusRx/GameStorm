<?php 
	include('../php/functions.php');

	if (!isAdmin()) {
		$_SESSION['msg'] = "You must log in first";
		header('location: ../login.php');
	}

include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM products ORDER BY product_id DESC");
$orders = mysqli_query($mysqli, "SELECT * FROM orders ORDER BY id DESC LIMIT 10");

?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
	<link rel="stylesheet" type="text/css" href="../css/admin.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
		<link rel="stylesheet" href="../css/main.css">
		<link rel="stylesheet" href="../css/menu.css">
		<link rel="stylesheet" href="../css/hamburger.css">
		<link rel="stylesheet" href="../css/search.css">
	    <link rel="shortcut icon" href="../img/icon.png" />
	    <link rel="apple-touch-icon-precomposed" href="../img/icon-apple.png" />
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">



		<script type="text/javascript">
		var TRange=null;

		function findString (str) {
		 if (parseInt(navigator.appVersion)<4) return;
		 var strFound;
		 if (window.find) {

		  strFound=self.find(str);
		  if (!strFound) {
		   strFound=self.find(str,0,1);
		   while (self.find(str,0,1)) continue;
		  }
		 }
		 else if (navigator.appName.indexOf("Microsoft")!=-1) {


		  if (TRange!=null) {
		   TRange.collapse(false);
		   strFound=TRange.findText(str);
		   if (strFound) TRange.select();
		  }
		  if (TRange==null || strFound==0) {
		   TRange=self.document.body.createTextRange();
		   strFound=TRange.findText(str);
		   if (strFound) TRange.select();
		  }
		 }
		 else if (navigator.appName=="Opera") {
		  alert ("Opera browsers not supported, sorry...")
		  return;
		 }
		 if (!strFound) alert ("String '"+str+"' not found!")
		 return;
		}
		</script>


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
<form id="f1" name="f1" action="javascript:void()" onsubmit="if(this.t1.value!=null &amp;&amp; this.t1.value!='')
parent.findString(this.t1.value);return false;">
<input type="text" id="t1" name="t1" value="text" size="20">
<input type="submit" name="b1" value="Find">
</form>			  
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
									<div class="col-2"><a href="../index.php"><img src="../img/logo.png" alt="LOGO" width="100%"></a></div>
									<div class="col-1 rev"> </div>
									<div class="col-1"><a href="../game-list.php"> </a></div>
									<div class="col-1"> </div>
									<div class="col-2"> </div>
									<div class="col-4">
<form id="f1" name="f1" action="javascript:void()" onsubmit="if(this.t1.value!=null &amp;&amp; this.t1.value!='')
parent.findString(this.t1.value);return false;">
<input type="text" id="t1" name="t1" placeholder="Find by name:" size="36">
<input type="submit" name="b1" value="Find">
</form>										
									</div>
									<div class="col-1"><a href="home.php?logout='1'" style="color: red;">logout</a></div>
								</div>
						</section>						
					</div>					
				</div>
				<hr>
				<div class="row">
					<div class="col">
			<div>
				<?php  if (isset($_SESSION['user'])) :?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>
					      <div class="tab-pane" id="tab2">
					        <div class="panel-group" id="help-accordion-2">      
					          <div class="panel panel-default panel-help">
					            <a href="#help-three" class="xx" data-toggle="collapse" data-parent="#help-accordion-2">
					              <div class="panel-heading">
					              	&nbsp; <span id="ordx">+ orders</span>
									&nbsp; <a href="add.html"> + add new game</a>
									&nbsp; <a href="create_user.php"> + add user</a>						              	
					              </div>
					            </a>
					            <div id="help-three" class="collapse in">
					              <div class="panel-body">
									<table width='100%' border=0 style="margin-top: 10px;">

									<tr style="border: 1px solid black; font-size: 16px;" bgcolor='#CCCCCC'>
										
										<td style='padding: 5px;'>Games</td>
										<td style='padding: 5px;'>Total</td>
										<td style='padding: 5px;'>Email</td>
										<td style='padding: 5px;'>Date</td>
									</tr>
									<?php 
									while($ord = mysqli_fetch_array($orders)) { 	

										echo "<tr style='border: 1px solid black; font-size: 16px;'>";
										echo "<td style='padding: 5px;'>".$ord['games']."</td>";	
										echo "<td style='padding: 5px;'>".$ord['total']." &euro;</td>";
										echo "<td style='padding: 5px;'>".$ord['mail']."</td>";
										echo "<td style='padding: 5px;'><p style='text-align: center;'>".$ord['date']."<br><a href=\"delete.php?id=".$ord['id']."\" onClick=\"return confirm('Are you sure you want to delete?')\"><i style='color: red; font-size: 28px; margin-top: 15px;' class='fas fa-times'></i></a></p></td>";

										echo "</tr>";


									}
									?>
									</table>
					              </div>
					            </div>
					          </div>
					        </div>	
					</small>
				<?php endif ?>
			</div>	<br>	


							<table width='100%' border=0>

							<tr style="border: 1px solid black;" bgcolor='#CCCCCC'>
								<td style='padding: 5px;'>Name</td>
								<td style='padding: 5px;'>Price</td>
								<td style='padding: 5px;'>Raiting</td>
								<td style='padding: 5px;'>Update</td>
							</tr>
							<?php
							$x = 0;
							while($res = mysqli_fetch_array($result)) { 
								$x++;
								$rating = (int)$res['raiting'];

								if ($rating > 50)
								{
									$color = 'green';
								}
								if ($rating <= 50)
								{
									$color = 'red';
								}

								echo "<tr style='border: 1px solid black;'>";
								echo "<td style='padding: 5px;'><a class='a' target='_blank' href='../game.php?product_id=".$res['product_id']."'>".$x.". ".$res['name']."</a></td>";	
								echo "<td style='padding: 5px;'>".$res['price']." &euro;</td>";
								echo "<td style='padding: 5px;'>".$rating."% <span style='color: ".$color.";'>positive</span></td>";	
								echo "<td style='padding: 5px;'><a href=\"edit.php?product_id=".$res['product_id']."\">Edit</a> | <a href=\"delete.php?product_id=".$res['product_id']."\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";

								echo "</tr>";


							}
							?>
							</table>						
					</div>
				</div>
			</div>
			

			<hr>

			<section>
				<div class="container">
					<div class="row">
						<div class="col-12">
							
						</div>
					</div>
				</div>
			</section>


		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

</main>

<footer class="page-footer font-small unique-color-dark pt-0">

    <div class="container-fluid mt-5 mb-4 text-center text-md-left footer-links">
		<div class="container">
			<div class="row">
				<div class="col">
        <div class="row mt-3">

            <div class="col-md-3 col-lg-4 col-xl-3 mb-4">
                <h6 class="text-uppercase font-weight-bold">
                    <strong>Company name</strong>
                </h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut suscipit tempora ratione, unde facilis eos.</p>
            </div>

            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                <h6 class="text-uppercase font-weight-bold">
                    <strong>Products</strong>
                </h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                    <a href="#!">MDBootstrap</a>
                </p>
                <p>
                    <a href="#!">MDWordPress</a>
                </p>
                <p>
                    <a href="#!">BrandFlow</a>
                </p>
                <p>
                    <a href="#!">Bootstrap Angular</a>
                </p>
            </div>

            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                <h6 class="text-uppercase font-weight-bold">
                    <strong>Useful links</strong>
                </h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                    <a href="#!">Your Account</a>
                </p>
                <p>
                    <a href="#!">Become an Affiliate</a>
                </p>
                <p>
                    <a href="#!">Shipping Rates</a>
                </p>
                <p>
                    <a href="#!">Help</a>
                </p>
            </div>

            <div class="col-md-4 col-lg-3 col-xl-3">
                <h6 class="text-uppercase font-weight-bold">
                    <strong>Contact</strong>
                </h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                    <i class="fa fa-home mr-3"></i> New York, NY 10012, US</p>
                <p>
                    <i class="fa fa-envelope mr-3"></i>
					<a href="mailto:nikitarezvan@gmail.com">nikitarezvan@gmail.com</a>
                </p>
                <p>
                    <i class="fa fa-phone mr-3"></i>
					<a href="tel:37258415552">+ 372 58 415 5552</a>
                </p>
                <p>
                    <i class="fa fa-print mr-3"></i>
					<a href="tel:37253640404">+ 372 53 640 0404</a>
                </p>
            </div>

        </div>					
				</div>
			</div>
		</div>
    </div>

    <div class="footer-copyright py-3 text-center" style="background-color: #1A1A1A;">
        © 2018 Copyright:
        <a href="#">
            <b style="color: #FFDF01;"> gamestore.com</b>
        </a>

    </div>

    <div style="background-color: #232323; padding: 25px; text-align: center;">
    </div>




</footer>
</body>

</html>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<script src="../js/hamburger.js"></script>

<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="../js/search.js"></script>
<script src="https://cdn.jsdelivr.net/mark.js/7.0.0/jquery.mark.min.js"></script>

<script type="text/javascript">
	$(function() {
		$('.list-group-item').on('click',function(e){

			var previous = $(this).closest(".list-group").children(".active");
			previous.removeClass('active'); 
			$(e.target).addClass('active'); 
		});
	});
</script>

		<script>
			var x = 1;
			 $("a.xx").click(function(){
			 	

			 	if (x == 1)
			 	{
			   		document.getElementById('ordx').innerHTML = '- orders';
			   		x++;
				}
				else
				{
					document.getElementById('ordx').innerHTML = '+ orders';
					x=1;
				}
			   //alert('123');
			 });			
		</script>