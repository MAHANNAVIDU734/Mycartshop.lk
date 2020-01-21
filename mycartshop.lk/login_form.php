<?php
if (isset($_SESSION["uid"])) {
	header("location:profile.php");
}

if (isset($_POST["login_user_with_product"])) {
	
	$product_list = $_POST["product_id"];
	
	$json_e = json_encode($product_list);
	
	setcookie("product_list",$json_e,strtotime("+1 day"),"/","","",TRUE);

}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>mycartshop.lk</title>
		<link rel="icon" href="product_images/1.ico" type="image/ico">
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
<script>
  var OneSignal = window.OneSignal || [];
  OneSignal.push(function() {
    OneSignal.init({
      appId: "e44e77c8-82b6-4289-bc9f-aca45c7bd48d",
    });
  });
</script>
		<link rel="stylesheet" type="text/css" href="css/style.css">   
		<!--<link rel="stylesheet" type="text/css" href="style.css">-->
	</head>
<body>
<div class="wait overlay">
	<div id="loading"></div>
</div>
	<div class="navbar navbar-default navbar-fixed-top navbar-blue">
		<div class="container-fluid">	
			<div class="navbar-header">
				<a href="#" class="navbar-brand">mycartshop.lk</a>
			</div>
			<ul class="nav navbar-nav">
				<li><a href="index.php"><span class="glyphicon glyphicon-home"></span></a></li>
				<li><a href="index.php">Product</a></li>
			</ul>
		</div>
	</div>
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8" id="signup_msg">
				<!--Alert from signup form-->
			</div>
			<div class="col-md-2"></div>
		</div>
		<!--<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<div class="panel panel-primary">-->
	<div class="login-box">
				<div class="panel-heading" style="align:center;">Customer Login Form</div>
					<!--<div class="panel-body">-->
					<img src="product_images/avatar.png" class="avatar">
						<!--User Login Form-->
						<form onsubmit="return false" id="login">
							<label for="email">Email</label>
							<input type="email" class="form-control" name="email" id="email" required/>
							<label for="email">Password</label>
							<input type="password" class="form-control" name="password" id="password" required/>
							<p><br/></p>
							<a href="#" style="color:#333; list-style:none;">Forgotten Password</a><input type="submit" class="btn btn-success" style="float:right;" Value="Login">
							
							<div><a href="customer_registration.php?register=1">Create a new account?</a></div>						
						</form>
				<!--</div>-->
				
			<!--</div>-->
		<!--</div>-->
		<div class="col-md-4"></div>
	</div>
	<style>
#loading
{
	text-align:center; 
	background: url('loader.gif') no-repeat center; 
	height: 150px;
}


</style>

</body>
</html>






















