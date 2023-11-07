<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Upload Using PHP & Ajax</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div id="main">
		<div id="header">
			<h1>Upload & Remove Files<br> Using PHP & jQuery Ajax</h1>
		</div>
		<div id="content">
			<form id="submit_form" >  
        <div class="form-group">  
          <label>Select Image</label>  
          <input type="file" name="file" id="upload_file" />  
          <span class="help-block">Allowed File Type - jpg, jpeg, png, gif</span>  
        </div>  
       <input type="submit" name="upload_button" id="upload_btn" value="Upload" />  
      </form>  
      <br />  
      <div id="preview">
        <h3>Image Preview</h3>  
        <div id="image_preview"></div> 
      </div> 
		</div>
	</div>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
</body>
</html>
