<?php
$mysqli = new mysqli("localhost","root","","test_db");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

 $url  = explode("/",$_SERVER['REQUEST_URI']);
 $name = $url[2];
  $s = "SELECT * FROM users WHERE user_name ='$name'";
  $e =  ($mysqli->query($s));
  while($G=$e->fetch_object()){
  print_r ($G);
  }
  
?>