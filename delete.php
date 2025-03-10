<?php

include("db.php");


$id=$_GET['id'];

echo $id;

$sql="DELETE FROM `form` WHERE id='$id'";

$result=mysqli_query($connection,$sql);

if($result){
    echo"record delete ";

    header("location:display.php");
}

else{
    echo"
    record not found
    ";
}


?>


