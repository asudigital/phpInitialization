<?php
echo "Welcome to the stage where we are ready to connected to a database  <br>"; 

$servername = "localhost";
$username = "root";
$password = "";


//create a conneection 
$conn = mysqli_connect($servername , $username , $password);

//die if if connection was not successful
if(!$conn){
die("sorry we failed to connect:". mysqli_connect_error());
}
else{

    echo "Connection was successful";
}


?>