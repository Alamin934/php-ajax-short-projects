<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP & Ajax</title>
  <!-- jquery ui css -->
  <link rel="stylesheet" href="css/jquery-ui.min.css">
  <!-- style.css -->
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div id="main">
    <div id="header">
        <h1>Search in Date Range <br>using PHP & Ajax</h1>
    </div>

    <div id="date-wrap">
      <label for="from">From</label>
      <input type="text" id="from" autocomplete="off">
      
      <label for="to">to</label>
      <input type="text" id="to" autocomplete="off">
    </div>

    <div id="content">
      <table id="table-data" border="0" width="100%" cellpadding="10px">
        <thead>
          <th width="50px">Id</th>
          <th>Name</th>
          <th width="130px">DOB</th>
          <th width="90px">City</th>
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


