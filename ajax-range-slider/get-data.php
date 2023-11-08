<?php
$conn = mysqli_connect("localhost","root","","php-ajax") or die("Connection failed");

if(isset($_POST['range1']) && isset($_POST['range2'])){
    $min = $_POST['range1'];
    $max = $_POST['range2'];
    $sql = "SELECT * FROM users WHERE user_age BETWEEN {$min} AND {$max}";

}else{
    $min = '';
    $max = '';
    $sql = "SELECT * FROM users WHERE user_id ASC";
}
$query = mysqli_query($conn, $sql) or die("Query Failed");
$output = "";

if(mysqli_num_rows($query) > 0){
    while($row = mysqli_fetch_assoc($query)){
        $output.= "
            <tr>
                <td align='center'>{$row['user_id']}</td>
                <td>{$row['user_name']}</td>
                <td align='center'>{$row['user_age']}</td>
                <td>{$row['user_city']}</td>
            </tr>
        ";
    }
echo $output;
}