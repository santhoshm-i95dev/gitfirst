<?php
#echo "this is php file";
echo "</br>" ;

#php form variables

$First_name=$_POST["validationCustom01"];
$Last_name=$_POST["validationCustom02"];
$Username=$_POST["validationCustomUsername"];
$City=$_POST["validationCustom03"];
$State=$_POST["validationCustom04"];
$Zip=$_POST["validationCustom05"];


# database connection validating

$sql = new mysqli("localhost","i95dev","i95dev","test");

if($sql->connect_error=="true")
{
    echo "Database connection failed";
}
else {
 #   echo " Database connection established"; echo "</br>" ;

    $tc = "create table practice(
    
    First_name varchar(255) not null,
    Last_name varchar(255)not null,
    Username varchar(255) not null,
    City varchar(255) not null,
    State varchar(255) not null,
    Zip varchar(255) not null)";

    if($sql -> query($tc))
    {
        echo "Table is created in Database ";
    }
    else {
       # echo " Table is not created in the Database ";
        echo "</br>" ;

        $tv = 'insert into practice (First_name,Last_name,Username,City,State,Zip) values ("'.$First_name.'" , "'.$Last_name.'","'.$Username.'","'.$City.'","'.$State.'","'.$Zip.'")';
    if($sql->query($tv)){
        echo "Data submitted successfully";
    }
    else echo"Dot not submitted";
    }
}

exit();
?>