<?php
/* Create connection*/
$conn = mysqli_connect("localhost", "root", "","php-ajax");

/* Check connection*/
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

if($_FILES['file']['name'] != ''){

	$file = $_FILES['file']['name'];
	$tmp_name = $_FILES['file']['tmp_name'];

	$file_names = '';

	for($i = 0; $i<count($file); $i++){
		$file_name = $file[$i];
		$extension = pathinfo($file_name, PATHINFO_EXTENSION);
		$valid_extension = ['png', 'jpg', 'jpeg'];

		if(in_array($extension, $valid_extension)){
			$new_name = rand().".".$extension;
			$path = "images/".$new_name;

			move_uploaded_file($tmp_name[$i], $path);
			$file_names.= $new_name." , ";
		}
	}

	$sql = "INSERT INTO uploads(file_name) VALUES('{$file_names}')";
	if(mysqli_query($conn, $sql)){
		echo "true";
	}else{
		echo "false";
	}

}