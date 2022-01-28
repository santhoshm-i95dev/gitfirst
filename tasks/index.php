<?php 

#establishing a database connection

$connection =new  mysqli("localhost","root","","database_connection");

// if($connection->connect_error==true)
// {
//   echo("database connetion established successfully");
// }

# if condition will displays if the connection gets established

if ($connection->connect_error) {
    echo("Database connection failed: " );
  }

# else block will displays if the connection not gets established
else {
    echo "connection not established".$connection->connect_error."";
}


?>
