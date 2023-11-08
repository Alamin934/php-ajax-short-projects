<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Range Slider</title>
  <!-- jquery ui css -->
  <link rel="stylesheet" href="css/jquery-ui.min.css">
  <!-- style.css -->
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div id="main">

    <div id="header">
        <h1>Search with Range Slider <br>using PHP & Ajax</h1>
    </div>

    <div id="slider-wrap">

      <div>
        <label>Age Between:</label>
        <span id="age"></span>
      </div>

      <div id="slider-range"></div>
      
    </div>

    <div id="content">
      <table id="table-data" border="0" width="80%" cellpadding="10px">
        <thead>
          <th width="50px">Id</th>
          <th>Name</th>
          <th width="50px">Age</th>
          <th width="120px">City</th>
        </thead>
        <tbody></tbody>
      </table>
    </div>

  </div>
  <!-- jquery -->
  <script src="js/jquery-1.12.4.min.js"></script>
  <!-- jquery ui -->
  <script src="js/jquery-ui-1.12.1.min.js"></script>
  <script src="js/custom.js"></script>
</body>
</html> 


