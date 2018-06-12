<?php 
session_start();
$connect = mysqli_connect("d70750.mysql.zonevs.eu", "d70750sa176992", "DHjb464w", "d70750_store");

if(isset($_POST["add_to_cart"]))
{
  if(isset($_SESSION["shopping_cart"]))
  {
    $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
    if(!in_array($_GET["product_id"], $item_array_id))
    {
      $count = count($_SESSION["shopping_cart"]);
      $item_array = array(
        'item_id'      =>  $_GET["product_id"],
        'item_name'      =>  $_POST["hidden_name"],
        'item_price'    =>  $_POST["hidden_price"],
        'item_quantity'    =>  $_POST["quantity"]
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
      'item_id'      =>  $_GET["product_id"],
      'item_name'      =>  $_POST["hidden_name"],
      'item_price'    =>  $_POST["hidden_price"],
      'item_quantity'    =>  $_POST["quantity"]
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
        //echo '<script>alert("Item Removed")</script>';
        echo '<script>window.location="cart.php"</script>';
      }
    }
  }
}


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Cart</title> 
    <link rel="shortcut icon" href="../img/icon.png" />
    <link rel="apple-touch-icon-precomposed" href="../img/icon-apple.png" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="../css/hamburger.css">
    <link rel="stylesheet" href="../css/search.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">


    <script>
    function goBack() {
        window.history.back();
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
        <a href="#">Login</a>
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
            <div class="col-2"><a href="../index.php"><img src="../img/logo.png" width="100%" alt="LOGO"></a></div>
            <div class="col-1"><a class='a' href="../game-list.php">Games</a></div>
            <div class="col-1"><a class='a' href="../faq.php">FAQ</a></div>
            <div class="col-5"> </div>
            <div class="col-1">
 
            </div>
            <div class="col-2"><b class='a'><i class="fas fa-shopping-cart"></i> Already in Cart</b></div>
          </div>
        </div>
      </section>     
      <hr>

    <div class="container" style="height: 800px;">

      <h3>Order Details</h3>
      <div class="table-responsive">
        <table class="table table-bordered">
          <tr>
            <th width="40%">Game Name</th>
            <th width="10%">Quantity</th>
            <th width="20%">Price</th>
            <th width="15%">Total</th>
            <th width="5%">Action</th>
          </tr>
          <?php
          $result = "";
          $counts .= $values['item_quantity'];
          if(!empty($_SESSION["shopping_cart"]))
          {

            function nums()
            {
              $chars = array(0,1,2,3,4,5,6,7,8,9,'A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');              
              $serial = '';
              $max = count($chars)-1;              
              for($i=0;$i<20;$i++){
                $GLOBALS['serial'] .= (!($i % 5) && $i ? '-' : '').$chars[rand(0, $max)];
              }
            }
            nums();
            //echo $serial;

            $total = 0;
            foreach($_SESSION["shopping_cart"] as $keys => $values)
            {
            
            
            

            $counts .= $values['item_quantity'];

            for($q=1;$q<=$counts;$q++)
            {
              $serial = '';
              nums();

              $result .= $values['item_name'] . ' - ' . $serial . "\r\n\r\n" . "\r\n\r\n";
              $result_order .= $values['item_name'] . ' - [ ' . $serial . " ]<br>";
            }

            

            //$xx = str_repeat($serial, $counts);




              //$result .=  $values['item_name'] . "\r\n\r\n" . 'Counts: ' . $counts . "\r\n\r\n" . "Game key(s)" . "\r\n\r\n" . str_repeat($serial,$counts)";

              //$result .= $values['item_name'] . " (" . $counts . ")" . "\r\n\r\n" . "Key(s):" . "\r\n\r\n" . $serial . "\r\n\r\n";

              $counts = '';
            

          ?>



          <tr>
            <td class="td"><?php echo "<a class='a' target='_blank' href='../game.php?product_id=".$values['item_id']."'>".$values['item_name']."</a>"; ?></td>
            <td><?php echo $values["item_quantity"]; ?></td>
            <td>&euro; <?php echo $values["item_price"]; ?></td>
            <td>&euro; <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
            <td><a href="cart.php?action=delete&product_id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
          </tr>
          <?php
              $total = $total + ($values["item_quantity"] * $values["item_price"]);
            }

          ?>
          <tr>
            <td colspan="3" align="right">Total</td>
            <td align="right">&euro; <?php $m = number_format($total, 2); echo $m; ?></td>
            <td></td>
          </tr>
          <?php
          }

          if(isset($_POST['submit']))
          {

            //echo $result; - game list
            //echo number_format($total, 2); - price for all games
            //echo $_POST['email'];

            $email = $_POST['email'];

            $result_order = preg_replace('/[^\p{L}\p{N}\s<>:-[]]/u', '', $result_order);
            // for fix error with symbols!

            $to      = $email;
            $subject = 'Successful purchase';
            $message = "You have successfully bought games:" . "\r\n\r\n" . "\r\n\r\n" . 'Your keys:' . "\r\n\r\n" . "\r\n\r\n" . $result . "\r\n" . "You spent: " . $m . "€";
            $headers = 'From: support@gamestorm.ee' . "\r\n" .
                'Reply-To: nikitarezvan@gmail.com' . "\r\n" .
                'X-Mailer: PHP/' . phpversion();

            mail($to, $subject, $message, $headers);  

            $sql = "INSERT INTO orders (games,total, mail) VALUES ('$result_order', '$m', '$email')";       

            if (mysqli_query($connect, $sql)) {
                echo "SUCCESSFULY MAILED";
                echo '<script>window.location="../payment.php"</script>';
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($connect);
            }

            session_destroy();
          }

          ?>
            
        </table>

        <form action="cart.php" method="post">

           <input type="text" name="email" placeholder="Enter your mail: " />

          <input type="submit" name="submit" value="Submit" />
        
        </form>
        
        <br><a href="../game-list.php">Go back to list</a><br>
        <button onclick="goBack()">Go Back</button>


      </div>




    </div><?php require_once('../templates/footer.php'); ?>
  </div>


  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>

<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="../js/search-cart.js"></script>