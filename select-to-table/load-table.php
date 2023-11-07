<?php

$conn = mysqli_connect("localhost","root","","php-ajax") or die("Connection Failed");

$current_city = $_POST['city'];

$sql = "SELECT * FROM users WHERE user_city='{$current_city}'";
$query = mysqli_query($conn, $sql) or die("Query Failed");
$output = "";
if(mysqli_num_rows($query) > 0){
  $output.= "<table border='0' width='100%'  cellpadding='10px'>
            <tr>
              <th width='60px'>Id</th>
              <th>Name</th>
              <th width='90px'>Age</th>
              <th width='90px'>City</th>
            </tr>";
    while($row = mysqli_fetch_assoc($query)){
      $output.= "<tr>
                  <td align='center'>{$row["user_id"]}</td>
                  <td>{$row["user_name"]}</td>
                  <td align='center'>{$row["user_age"]}</td>
                  <td align='center'>{$row["user_city"]}</td>
                </tr>";
    }
  $output.= "</table>";
echo $output;
}else{
  echo "Record not found";
}
