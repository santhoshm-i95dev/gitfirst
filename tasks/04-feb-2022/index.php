<?php
#establishing a database connection

$connection = new  mysqli("localhost", "i95dev", "i95dev" , "test");

# if condition will displays if the connection not gets established
if ($connection->connect_error==true) {
    echo("Database connection failed: ");
}
# else block will displays if the connection gets established
else {
    echo "connection  established" ;
    echo "<br>";
    $query = ' CREATE TABLE people(
    PersonID int NOT NULL PRIMARY KEY auto_increment ,
    LastName varchar(255),
    FirstName varchar(255),
    Address varchar(255),
    City varchar(255)
)' ;
    if ( $connection -> query ($query)){
        echo "table created"; }
    else{
        echo " table not created";} echo "<br>";
    #insert into the table
$insertinto = 'insert into Persons(PersonID,LastName,FirstName,Address,city) values(001,"kumar","anthanoy","bangalore","vijaynagar")';
    $insertinto = 'insert into Persons(PersonID,LastName,FirstName,Address,city) values(001,"kumar","anthanoy","bangalore","vijaynagar")';
    $insertinto = 'insert into Persons(PersonID,LastName,FirstName,Address,city) values(002,"dd","anthagagfgnoy","bangalore","vijaynagar")';
    $insertinto = 'insert into Persons(PersonID,LastName,FirstName,Address,city) values(003,"kudddmar","gaga","bangalore","vijaynagar")';
    $insertinto = 'insert into Persons(PersonID,LastName,FirstName,Address,city) values(004,"kugggmar","anhgfshstyhthanoy","bangalore","vijaynagar")';
if ($connection->query($insertinto)){
        echo "the valuee inserted into the table";
    }
    else { echo "values not inserted";} echo "<br>";

    #inserting the values into the table human ;
    $insertintoq = 'insert into human( PersonID ,LastName, FirstName ,Address,City ) values (50,"abc","def","blore","rajblore")';

    if ($connection->query($insertintoq)){
        echo "the human valuee inserted into the table";
    }
    else { echo "human values not inserted";} echo "<br>";

}

?>