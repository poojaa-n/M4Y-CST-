<?php

$con = mysqli_connect('localhost','root');

if($con){
    echo "Connection successful";
}else{
    echo "No connection";
}

mysqli_select_db($con, 'm4ycontactusdata');

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$query = " insert into contactusdata (name, email, phone, message)
values('$name', '$email', '$phone', '$message');";

echo"$query";

mysqli_query($con, $query);

header('location:thank.php');

?>