<?php
echo "Welcome to the stage where we are ready to connected to a database  <br>"; 

$servername = "localhost";
$username = "root";
$password = "";
$database = "asudb";

//create a conneection 
$conn = mysqli_connect($servername , $username , $password , $database);

if(!$conn){
    die("sorry we failed to connect:". mysqli_connect_error());
    }
    else{
    
        echo "Connection was successful Asuj<br>";
    }

// create a table in database
$sql = CREATE TABLE `asudb`.`phpTrip` (`sno` INT(6) NOT NULL AUTO_INCREMENT , `name` VARCHAR(12) NOT NULL , `dest` VARCHAR(12) NOT NULL , PRIMARY KEY (`sno`));

$result = mysqli_query($conn , $sql);

if($result)
{
    echo "The table is created is created successfully!<br>";
}
else{

    echo"The table is not created successfully because of this error -->".mysqli_error(&conn);
}
?>