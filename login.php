<?php include('php/functions.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <link rel="stylesheet" type="text/css" href="css/login-style.css">
</head>
<body>
    <div class="login-form">
        <form action="login.php" method="post">
            <?php echo display_error(); ?>

            <a href="index.php"><i class="fas fa-home" style="color: black; font-size: 18px;"></i></a>
            <h2 class="text-center">Log in</h2>

            <div class="form-group">
                <input type="text" class="form-control" placeholder="Username" name="username" required="required">
            </div>

            <div class="form-group">
                <input type="password" class="form-control" placeholder="Password" name="password" required="required">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block" name="login_btn">Log in</button>
            </div>  

        </form>
        <p class="text-center"><a href="sign-up.php">Create an Account</a></p>
    </div>
</body>
</html>                                		                            