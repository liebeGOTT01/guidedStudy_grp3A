
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://fontawesome.com/icons">
</head>

<style>
.top{
  background-color:#e74c3c;
}
</style>
<body>
<nav class="navbar navbar-dark top fixed-top " style="padding:15px;">
  <div class="container-fluid mt-2 mb-2">
  	<div class="col-lg-12">
      <div class="col-md-5 float-left text-white">
        <large><b>Hopia Pastries Sales and Inventory System</b></large>
      </div>
	  	<div class="col-md-2 float-right text-white">
	  		<a href="ajax.php?action=logout" class="text-white"><?php echo $_SESSION['login_name'] ?> <i class="fa fa-power-off"></i></a>
	    </div>
    </div>
  </div>
  
</nav>
</body>
</html>
<?php
include_once("header.php");
?>
