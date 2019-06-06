<?php include 'mountainjson.php';
?>
<html>
<head>
<title>Portfolio 1 - Mountain Info</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="bootstrap/bootstrap-3.3.7/dist/css/bootstrap.min.css">

<link rel="shortcut icon" href="images/favicon.png" />
<link rel="stylesheet" type="text/css" href="http://mayar.abertay.ac.uk/~1602294/Year3_Web/Portfolio1/css/style.css">
</head>
<body>
<div id="container">
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
	  <a href="index.php"><img src="images/logo-p.png"></a>
    </div>
    <div class="collapse navbar-collapse">
	  <ul class="nav navbar-nav">
        <li><a href="index.php">Home</a></li>
      </ul>
    </div>
  </div>
</nav>
    <div class="col-sm-12 text-center"> 
<?php
$id = $_GET['id'];
$mountaintxt = getMountainById($id);
$mountainjson = json_decode($mountaintxt);
echo $mountainjson;
?>

</div>
<footer class="container-fluid text-center">
  <p>Design by James F</p>
</footer>

</div>

<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>



