<?php
$username = "root";

$password = "";

$hostname = "localhost"; 

$database="sih";

//connection to the mysql database,

$dbhandle = mysqli_connect($hostname, $username, $password,$database);
  $result = mysql_query("SELECT * FROM `users`");
  while($row = mysql_fetch_array( $result )) {
    echo $row['name'];
    echo "<br />";
  }
 ?>