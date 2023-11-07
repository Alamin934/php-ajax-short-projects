<?php
$conn = mysqli_connect("localhost","root","","php-ajax") or die("Connection Failed");

$sql = "SELECT * FROM users";
$query = mysqli_query($conn, $sql) or die("Query Field");

$output = "";
if(mysqli_num_rows($query)>0){
    $output.= "<table border='0' width='100%' cellpadding='10px' cellspacing='2'>
        <tr>
        <th width='30px'></th>
        <th width='60px'>Id</th>
        <th>Name</th> 
        <th width='90px'>Age</th>
        <th width='90px'>City</th>
        </tr>";
    $id=1;
    while($row = mysqli_fetch_assoc($query)){
        $output.="<tr>
                    <td align='center'><input type='checkbox' value='{$row['user_id']}'></td>
                    <td align='center'>{$id}</td>
                    <td align='center'>{$row['user_name']}</td>
                    <td align='center'>{$row['user_age']}</td>
                    <td align='center'>{$row['user_city']}</td>
                </tr>";
        $id++;
    }

    $output.="</table>";
    echo $output;
}else{
    echo "<h2>No Record Found.</h2>";
}