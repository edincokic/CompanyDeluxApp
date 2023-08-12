<?php 

  $MYSQL_HOST = "localhost"; 
  $MYSQL_USER = "root";
  $MYSQL_PW = "";
  $MYSQL_DB = "deluxplast";
   
 if(!$db = mysqli_connect($MYSQL_HOST, $MYSQL_USER, $MYSQL_PW, $MYSQL_DB))
  {
    die("Konekcija nije uspjela");
  }
 ?>