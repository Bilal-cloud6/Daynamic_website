<?php

$server="localhost";
$username="root";
$password="";
$database="crude";

$connection= new mysqli($server,$username,$password,$database);

if($connection->connect_error){
    die("connection failed".$connection->connect_error);
}

else{
    //echo"connection ok";
}

?>