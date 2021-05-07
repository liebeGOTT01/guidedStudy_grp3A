<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Admin | Hopia Sales and Inventory System</title>
 	

<?php include('./header.php'); ?>
<?php include('./db_connect.php'); ?>
<?php 
session_start();
if(isset($_SESSION['login_id']))
header("location:index.php?page=home");

// $query = $conn->query("SELECT * FROM system_settings limit 1")->fetch_array();
		// foreach ($query as $key => $value) {
		// 	if(!is_numeric($key))
		// 		$_SESSION['setting_'.$key] = $value;
		// }
?>

</head>
<style>
	body{
		width: 100%;
	    height: calc(100%);
		}
	main#main{
		width:100%;
		height: calc(100%);
		background:white;
	}
	#login-right{
		position: absolute;
		right:0;
		width:40%;
		height: calc(100%);
		background:white;
		display: flex;
		align-items: center;
	}
	#login-left{
		position: absolute;
		left:0;
		width:60%;
		height: calc(100%);
		background:#00000061;
		display: flex;
		align-items: center;
		background-image: url('img/h1.jpg');
		background-position:center;
		background-size:cover;
		background-repeat:no-repeat;
		border-right:4px solid black;
		
	}

	#login-right .card{
		margin: auto;
		
	}
	.logo {
    margin: auto;
    font-size: 8rem;
    background: white;
    padding: .5em 0.8em;
    border-radius: 50% 50%;
    color: #000000b3;
}

#login-form .avatar img {
	position: absolute;
	margin: 0 auto;
	left: 0;
	right: 0;
	top: -50px;
	width: 95px;
	height: 95px;
	border-radius: 50%;
	z-index: 9;
	padding: 0;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
}	
</style>

<body>


  <main id="main" class="bg-dark">
  		<div id="login-left">
  		</div>
  		<div id="login-right">  
  			<div class="card col-md-8 border border-info"><br>
  				<div class="card-body">
  					<form id="login-form">
					  <div class="form-group">
					  <div class="avatar">
						<img src="img/admin.png" alt="Avatar" style="">
					</div>
					<h2 class="text-center mt-2 text-primary">Member Login</h2>  
					  </div>
  						<div class="form-group">
  							<label for="username" class="control-label">Username</label>
  							<input type="text" id="username" name="username" class="form-control">
  						</div>
  						<div class="form-group">
  							<label for="password" class="control-label">Password</label>
  							<input type="password" id="password" name="password" class="form-control">
  						</div>
  						<center><button class="btn-sm btn-block btn-wave col-md-4 btn-primary">Login</button></center>
  					</form>
  				</div>
  			</div>
  		</div>
   

  </main>

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>


</body>
<script>
	$('#login-form').submit(function(e){
		e.preventDefault()
		$('#login-form button[type="button"]').attr('disabled',true).html('Logging in...');
		if($(this).find('.alert-danger').length > 0 )
			$(this).find('.alert-danger').remove();
		$.ajax({
			url:'ajax.php?action=login',
			method:'POST',
			data:$(this).serialize(),
			error:err=>{
				console.log(err)
		$('#login-form button[type="button"]').removeAttr('disabled').html('Login');

			},
			success:function(resp){
				if(resp == 1){
					location.href ='index.php?page=home';
				}else if(resp == 2){
					location.href ='voting.php';
				}else{
					$('#login-form').prepend('<div class="alert alert-danger">Username or password is incorrect.</div>')
					$('#login-form button[type="button"]').removeAttr('disabled').html('Login');
				}
			}
		})
	})
</script>	
</html>