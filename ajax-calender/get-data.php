<?php
  $conn = mysqli_connect("localhost","root","","php-ajax") or die("Connection failed");

  if(isset($_POST['date1']) && isset($_POST['date2'])){
    $min = $_POST['date1'];
    $max = $_POST['date2'];
    $sql = "SELECT * FROM users WHERE date_of_birth BETWEEN '{$min}' AND '{$max}'";
  }else{
    $sql = "SELECT * FROM users ORDER BY user_id ASC";
  }

  $query = mysqli_query($conn, $sql) or die("Query Unsuccessfull");

  $output = "";

  if(mysqli_num_rows($query)>0){
    while($row = mysqli_fetch_assoc($query)){
      $dob = date('d M, Y', strtotime($row['date_of_birth']));
      $output.= "
          <tr>
            <td>{$row['user_id']}</td>
            <td>{$row['user_name']}</td>
            <td>{$dob}</td>
            <td>{$row['user_city']}</td>
          </tr>
      ";
    }
    echo $output;
  }else{
    echo "<tr><td colspan='4'><h2>Record Not Found</h2></td></tr>";
  }