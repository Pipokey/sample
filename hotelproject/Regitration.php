<?php
include 'connection.php';
if(isset($_POST['submit']))
{
    $id=$_POST['ID'];
    $name=$_POST['name'];
    $age=$_POST['Age'];
   
$qry="INSERT INTO reservation(id,name,age)VALUES('$id','$name','$age')";
mysqli_query($conn,$qry)or die(mysqli_error($conn));
header("Location: room.php");
}
?>