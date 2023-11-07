<?php
$conn = mysqli_connect("localhost","root","","php-ajax") or die("Connection Failed");

$sql = "SELECT distinct(user_city) FROM users WHERE user_city LIKE '%{$_POST['city']}%'";
$query = mysqli_query($conn, $sql) or die("Query Failed");
$output = "<ul>";
if(mysqli_num_rows($query) > 0){
	while($row=mysqli_fetch_assoc($query)){
		$output.= "<li>{$row['user_city']}</li>";
	}
}else{
	$output.= "<li>City not found.</li>";
}
$output.= "</ul>";

echo $output;