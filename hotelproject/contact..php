<?php
include 'connection.php';
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $message=$_POST['message'];
$qry="INSERT INTO contact(name,email,phone,message)VALUES('$name','$email','$phone','$message')";
mysqli_query($conn,$qry)or die(mysqli_error($conn));
 header("Location: contact-us.php");

}

?>