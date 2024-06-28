<?php
echo "Welcome to the stage where we are ready to connected to a database  <br>"; 

$servername = "localhost";
$username = "root";
$password = "";


//create a conneection 
$conn = mysqli_connect($servername , $username , $password);

if(!$conn){
    die("sorry we failed to connect:". mysqli_connect_error());
    }
    else{
    
        echo "Connection was successful<br>";
    }

// create a db
$sql = "CREATE DATABASE asudb";

if (mysqli_query($conn, $sql)) {
    echo "Database created successfully<br>";
} else {
    echo "Error creating database: " . mysqli_error($conn) . "<br>";
}

mysqli_close($conn);


//die if if connection was not successful


?>