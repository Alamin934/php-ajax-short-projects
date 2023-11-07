<?php
$conn = mysqli_connect("localhost","root","","php-ajax") or die("Connection failed");
$state = $_POST['type'];
$output = "";

if($state == ""){
	$sql = "SELECT * FROM country_tb";
	$query = mysqli_query($conn, $sql) or die("Query unsuccessfull");
	
	if(mysqli_num_rows($query) > 0){
		while($row = mysqli_fetch_assoc($query)){
			$output.= "<option value='{$row['cid']}'>{$row['cname']}</option>";
		}
	}
}else if($state == "stateData"){
	$sql = "SELECT * FROM state_tb WHERE country = {$_POST['id']}";
	$query = mysqli_query($conn, $sql) or die("Query unsuccessfull");
	
	if(mysqli_num_rows($query) > 0){
		while($row = mysqli_fetch_assoc($query)){
			$output.= "<option value='{$row['sid']}'>{$row['sname']}</option>";
		}
	}
}

echo $output;