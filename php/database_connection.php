<?php

  $servername = "d70750.mysql.zonevs.eu";
  $dbuser = "d70750sa176992";

  $dbpass = "DHjb464w";

  $dbname = "d70750_store";

  $conn = new MySQLi($servername,$dbuser,$dbpass,$dbname);

    

     if ($conn->connect_errno) {

         die("ERROR : -> ".$DBcon->connect_error);

     }