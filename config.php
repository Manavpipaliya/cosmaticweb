<?php


$servername = "localhost";
$username="root";
$password="";
$dbname="cos";


$conn = mysqli_connect($servername,$username,$password,$dbname);


if(!$conn){
    die("sorry we failed to connect:".mysqli_connect_error());
}
else{
    echo"connection was successful";
}






?>