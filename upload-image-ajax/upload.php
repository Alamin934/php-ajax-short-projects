<?php

if($_FILES['file']['name'] != ''){
	$file_name = $_FILES['file']['name'];
	$file_tmp = $_FILES['file']['tmp_name'];

	$extension = pathinfo($file_name, PATHINFO_EXTENSION);
	$valid_extension = ["jpg", "jpeg", "png", "gif"];
	
	if(in_array($extension, $valid_extension)){

		$basename = basename($file_name, ".".$extension);
		$new_name = $basename . rand() . "." . $extension;
		$path = "images/".$new_name;
		if(move_uploaded_file($file_tmp, $path)){
			echo "<img src='{$path}'> <br><br><button data-path='{$path}' id='delete_btn'>Delete</button>";
		}

	}else{
		echo "<script>alert('Invalid File Format.');</script>";
	}
	
}else{
	echo "<script>alert('Please Select File.');</script>";
}


