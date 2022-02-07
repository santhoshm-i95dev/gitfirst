<?php

 $first_name = $_POST['first-name'];
 $last_name = $_POST['last-name'];
  $address = $_POST['address'];
   $city =  $_POST['city'];

//echo "email".$_POST['customer-email'];
//
//echo "getdata -".$_GET['myurl'];


$connection = new  mysqli("localhost", "i95dev", "i95dev" , "test");

# if condition will displays if the connection not gets established
if ($connection->connect_error==true) {
    echo("Database connection failed: ");
}
# else block will displays if the connection gets established
else {
    $insertinto = 'insert into people(LastName,FirstName,Address,city) values("'.$first_name.'","'.$last_name.'","'.$address.'","'.$city.'")';
    if ($connection->query($insertinto)){
        echo "the valuee inserted into the table";
    }
    else {
        echo "data not inserted";
    }

}


?>
