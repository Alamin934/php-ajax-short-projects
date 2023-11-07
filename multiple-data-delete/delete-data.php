<?php
$conn = mysqli_connect("localhost","root","","php-ajax") or die("Connection Failed");

$user_id = $_POST['id'];
$id = implode(",",$user_id);

$sql = "DELETE FROM users WHERE user_id IN ({$id})";

if(mysqli_query($conn, $sql)){
    echo 1;
}else{
    echo 0;
}


