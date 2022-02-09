<?php
#echo "this is php file";
echo "</br>" ;

#php form variables

$First_name=$_POST["fname"];
$Last_name=$_POST["lname"];
$Email=$_POST["email"];
$Num=$_POST["num"];
$Address=$_POST["address"];
$City=$_POST["state"];
$State=$_POST["city"];



# database connection validating

$sql = new mysqli("localhost","i95dev","i95dev","test");

if($sql->connect_error=="true")
{
    echo "Database connection failed";
}
else {
     echo " Database connection established"; echo "</br>" ;

    $tc = "create table jstasks(
    First_name varchar(255) not null,
    Last_name varchar(255)not null,
    Email varchar(255) not null,
    Num int not null,
    Address varchar(255) not null,
    City varchar(255) not null,
    State varchar(255) not null
  )";

    if($sql -> query($tc))
    {
        echo "Table is created in Database ";
    }
    else {
         echo " Table is not created in the Database ";
    }
        echo "</br>" ;

        $tv = 'insert into jstasks (First_name,Last_name,Email,Num,Address,City,State) values ("'.$First_name.'" , "'.$Last_name.'","'.$Email.'","'.$Num.'","'.$Address.'","'.$City.'","'.$State.'")';
        if($sql->query($tv)){
            echo "Data submitted successfully";
        }
        else echo"Data not submitted";

}

exit();
?>
