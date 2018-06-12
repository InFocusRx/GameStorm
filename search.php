<?php


$link = mysqli_connect("d70750.mysql.zonevs.eu", "d70750sa176992", "DHjb464w", "d70750_store");

 

if($link === false){

    die("ERROR: Could not connect. " . mysqli_connect_error());

}

 

if(isset($_REQUEST['term'])){



    $sql = "SELECT * FROM products WHERE name LIKE ?";

    

    if($stmt = mysqli_prepare($link, $sql)){


        mysqli_stmt_bind_param($stmt, "s", $param_term);

        


        $param_term = $_REQUEST['term'] . '%';

        


        if(mysqli_stmt_execute($stmt)){

            $result = mysqli_stmt_get_result($stmt);

            


            if(mysqli_num_rows($result) > 0){


                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){

                    echo "<a href='game.php?product_id=".$row['product_id']."'>" . "<p>" . $row["name"] . "</p>" . "</a>";

                }

            } else{

                echo "<p>No matches found</p>";

            }

        } else{

            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

        }

    }

     

    // Close statement

    mysqli_stmt_close($stmt);

}

 

// close connection

mysqli_close($link);

?>