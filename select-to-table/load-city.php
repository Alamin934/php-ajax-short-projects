<?php
$conn = mysqli_connect("localhost","root","","php-ajax") or die("Connection Failed");

$sql = "SELECT distinct(user_city) FROM users";
$query = mysqli_query($conn, $sql) or die("Query Failed");

if(mysqli_num_rows($query) > 0){
  // while($row = mysqli_fetch_assoc($query)){
  //   echo "<option value='{$row['user_city']}'>{$row['user_city']}</option>";
  // }
  $output = mysqli_fetch_all($query, MYSQLI_ASSOC);
  echo json_encode($output);
}else{
  echo "Record not found";
}


