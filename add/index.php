<?php
$mysqli = new mysqli("localhost","root","","test_db");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

 $url  = explode("/",$_SERVER['REQUEST_URI']);
 $name = ($url[2]);
  $s = "INSERT INTO users(id ,user_name, name,password)
       values ('','ebi','m','112')";
  $e=($mysqli->query($s));{
    print_r($e);
  }

  
?>