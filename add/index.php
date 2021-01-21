<?php
$mysqli = new mysqli("localhost","root","","test");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

 $url  = explode("/",$_SERVER['REQUEST_URI']);
 $name = ($url[2]);
 $n =($url[3]);
 $p =($url[4]);
  $s = "INSERT INTO users(id ,user_name, name,password)
       values ('','$name','$n','$p')";
  $e=($mysqli->query($s));{
    print_r($e);
  }
  $mydate = getdate(date("U"));
  echo "$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year]";
  
?>