<?php

$conn = mysqli_connect("localhost","root","","php-ajax") or die("Connection Failed");

$name = $_POST['name'];
$languages = $_POST['lang'];

if(!empty($name) && !empty($languages)){
    $sql = "INSERT INTO languages(name, language) VALUES('{$name}','{$languages}')";
    if(mysqli_query($conn, $sql)){
        echo "Data Inserted Successfully.";
    }else{
        echo "Data Not Inserted.";
    }
}else{
    echo "Fields can't be empty.";
}