<?php


  $servername = "localhost";

  $dbuser = "root";

  $dbpass = "";

  $dbname = "csrizzle_GameStorm";

  $conn = new MySQLi($servername,$dbuser,$dbpass,$dbname);

    

     if ($conn->connect_errno) {

         die("ERROR : -> ".$DBcon->connect_error);

     }