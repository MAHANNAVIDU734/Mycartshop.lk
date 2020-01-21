<?php

session_start();
if(!isset($_SESSION["uid"])){
	header("location:index.php");
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>mycartshop.lk</title>
		<link rel="icon" href="product_images/1.ico" type="image/ico">
		<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
		<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<script src="js/jquery-1.10.2.min.js"></script>
		<script src="js/jquery-ui.js"></script>
		<script async type="text/javascript" src="//userlike-cdn-widgets.s3-eu-west-1.amazonaws.com/4033ab2ac4c9c4f7c843caa35ef5ae3585328d21ee271c77ff3c56a5dfb0d1a6.js"></script>
		<script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
<script>
  var OneSignal = window.OneSignal || [];
  OneSignal.push(function() {
    OneSignal.init({
      appId: "e44e77c8-82b6-4289-bc9f-aca45c7bd48d",
    });
  });
</script>
    
    <link href = "css/jquery-ui.css" rel = "stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
		<script>
  var OneSignal = window.OneSignal || [];
  OneSignal.push(function() {
    OneSignal.init({
      appId: "b2e092fd-30cb-4b6b-87c0-6e43f02ec8c9",
    });
  });
  </script>
		<style>
			@media screen and (max-width:480px){
				#search{width:80%;}
				#search_btn{width:30%;float:right;margin-top:-32px;margin-right:10px;}
			}
			
		.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5px auto; /* 15% from the top and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button */
.close {
  /* Position it in the top right corner outside of the modal */
  position: absolute;
  right: 25px;
  top: 0; 
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

/* Close button on hover */
.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}

@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}
.mySlides {
	display:none;
	width:1000px;
	height:500px;
}
		</style>
	</head>
<body>
	<div class="navbar navbar-default navbar-fixed-top navbar-blue">
		<div class="container-fluid">	
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
					<span class="sr-only"> navigation toggle</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="#" class="navbar-brand">mycartshop.lk</a>
			</div>
		<div class="collapse navbar-collapse" id="collapse">
			<ul class="nav navbar-nav">
				<li><a href="index.php"><span class="glyphicon glyphicon-home"></span></a></li>
				<li><a href="index.php">Product</a></li>
				<li style="width:300px;left:10px;top:10px;"><input type="text" class="form-control" id="search"></li>
				<li style="top:10px;left:20px;"><button class="btn btn-default" id="search_btn">Search</button></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
			<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"onclick="document.getElementById('id02').style.display='block'"><span class="glyphicon glyphicon-shopping-cart"></span>Cart<span class="badge">0</span></a>
					<div class="modal" style="width:400px;" id="id02">
					<span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
						<div class="panel panel-success">
							<div class="panel-heading">
								<div class="row">
									<div class="col-md-3">No</div>
									<div class="col-md-3">Product Image</div>
									<div class="col-md-3">Product Name</div>
									<div class="col-md-3">Price in $.</div>
								</div>
							</div>
							<div class="panel-body">
								<div id="cart_product">
								<!--<div class="row">
									<div class="col-md-3">Sl.No</div>
									<div class="col-md-3">Product Image</div>
									<div class="col-md-3">Product Name</div>
									<div class="col-md-3">Price in $.</div>
								</div>-->
								</div>
							</div>
							<div class="panel-footer"></div>
						</div>
					</div>
				</li>
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span><?php echo "Hi,".$_SESSION["name"]; ?></a>
					<ul class="dropdown-menu">
						<li><a href="cart.php" style="text-decoration:none; color:blue;"><span class="glyphicon glyphicon-shopping-cart"></span>My Cart</a></li>
						<li class="divider"></li>
						<li><a href="customer_order.php" style="text-decoration:none; color:blue;">Orders</a></li>
						<li class="divider"></li>
						<li><a href="logout.php" style="text-decoration:none; color:blue;">Logout</a></li>
					</ul>
				</li>
				<li><div class="row">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
       
	</div>
</li>
			</ul>
		</div>
	</div>
	</div>
	<div class="w3-content w3-section" >
	<div class="container">
  <img class="mySlides" src="product_images/slide/sl3.jpg" >
  <img class="mySlides" src="product_images/slide/sl2.jpg" >
  <img class="mySlides" src="product_images/slide/sl1.jpg" >
	<img class="mySlides" src="product_images/slide/pt.jpg" >
	</div>
</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-2">
				<div id="get_category">
				</div>
				<!--<div class="nav nav-pills nav-stacked">
					<li class="active"><a href="#"><h4>Categories</h4></a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
				</div> -->
				<hr >
				<div id="get_brand">
				</div>
				<!--<div class="nav nav-pills nav-stacked">
					<li class="active"><a href="#"><h4>Brand</h4></a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
				</div> -->
			</div>
			<div class="col-md-8">	
				<div class="row">
					<div class="col-md-12 col-xs-12" id="product_msg">
					</div>
				</div>
				<div class="panel panel-success" id="scroll">
					<div class="panel-heading"><h1>Our Products</h1></div>
					<div class="panel-body">
						<div id="get_product">
							<!--Here we get product jquery Ajax Request-->
						</div>
						<!--<div class="col-md-4">
							<div class="panel panel-info">
								<div class="panel-heading">Samsung Galaxy</div>
								<div class="panel-body">
									<img src="product_images/images.JPG"/>
								</div>
								<div class="panel-heading">$.500.00
									<button style="float:right;" class="btn btn-danger btn-xs">AddToCart</button>
								</div>
							</div>-->
						</div> 
				   </div>
					<div class="panel-footer"></div>
				</div>
			</div>
			<div class="col-md-1"></div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<center>
					<ul class="pagination" id="pageno">
						<li><a href="#">1</a></li>
					</ul>
				</center>
			</div>
		</div>
	</div>
	<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Policies</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a onclick="document.getElementById('id03').style.display='block'">Terms of Use</a></li>
								<div id="id03" class="modal">
								
								<div class="jumbotron">
							    	<div class="container">
										
										<h1>Terms of Use</h1>
										<span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
								<p>By Accepting these terms of service or otherwise using
								the service (As defined below), you agree to the terms
								and conditions in these terms of service.if you are 
								entering into these terms of service as an individual
								the term "you" refers to you.if you are entering into this 
								agreement on behalf of a company or other legal
								entity and represent that you have the authority to bind
								such entity and its affilates to these terms and conditions,
								in which case the term "you" shall refer to such entity.if you
								do not agree with these terms and conditions,you must not accept these 
								terms of service and may not use the service.</p>
								<!--<button type="accept" class="btn btn-accept" id="accept" value="accept">Accept</button>
								<div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id03').style.display='none'" class="cancelbtn">Cancel</button>-->
								</div>
								</div>
								
                </div>
								
								
      
								<li><a onclick="document.getElementById('id04').style.display='block'">Privecy Policy</a></li>
                <div id="id04" class="modal">
								
								<div class="jumbotron">
							    	<div class="container">
										
										<h1>Privacy Policy</h1>
										<span onclick="document.getElementById('id04').style.display='none'" class="close" title="Close Modal">&times;</span>
								<p>
In order for the website to provide a safe and useful service, it is important for mycartshop.lk to collect, use, and share personal information.</p>

<h2>Collection</h2>
<p>
Information posted on mycartshop.lk is publicly available. If you choose to provide us with personal information, you are consenting to the transfer and storage of that information on our servers. We collect and store the following personal information:</p>

<ul>Email address, contact information, and (depending on the service used) sometimes financial information</ul>
Computer sign-on data, statistics on page views, traffic to and from mycartshop.lk and response to advertisements
<ul>Other information, including users' IP address and standard web log information.</ul>
<h2>Use</h2>
<p>We use users' personal information to:</p>
<ul>
<li>Provide our services</li>
<li>Resolve disputes, collect fees, and troubleshoot problems</li>
<li>Encourage safe trading and enforce our policies</li>
<li>Customize users experience, measure interest in our services</li>
<li>Improve our services and inform users about services and updates</li>
<li>Communicate marketing and promotional offers to you according to your preferences</li>
<li>Do other things for users as described when we collect the information</li>
</ul>
<h2>Disclosure</h2>
<p>
We don't sell or rent users' personal information to third parties for their marketing purposes without users' explicit consent. We may disclose personal information to respond to legal requirements, enforce our policies, respond to claims that a posting or other content violates other's rights, or protect anyone's rights, property, or safety.</p>

<h2>Communication and email tools</h2>
<p>
You agree to receive marketing communications about consumer goods and services on behalf of our third party advertising partners unless you tell us that you prefer not to receive such communications. If you don't wish to receive marketing communications from us, simply indicate your preference by following directions provided with the communication. You may not use our site or communication tools to harvest addresses, send spam or otherwise breach our Terms of Use or Privacy Policy. We may automatically scan and manually filter email messages sent via our communication tools for malicious activity or prohibited content. If you use our tools to send content to a friend, we don't permanently store your friends' addresses or use or disclose them for marketing purposes. To report spam from other users, please contact customer support.
</p>
<h2>Security</h2>
<p>We use lots of tools (encryption, passwords, physical security) to protect your personal information against unauthorized access and disclosure.</p>

<p>All personal electronic details will be kept private by the Service except for those that you wish to disclose.
It is unacceptable to disclose the contact information of others through the Service.
If you violate the laws of your country of residence and/or the terms of use of the Service you forfeit your privacy rights over your personal information.</p>

<h2>Contact details</h2>
<p>Customer Support e-mail:</p><a href="support@mycartshop.lk"> support@mycartshop.lk</a>

<h2>Unsubscribe information</h2>
<p>
If at any time you wish to have your information removed from our active databases, please contact us. Additionally, you will be able to unsubscribe anytime by clicking on the unsubscribe link at the bottom of all our email communications.</p>
<p>
This website makes use of Display Advertising, and uses Remarketing technology with Google Analytics to advertise online. Third-party vendors, including Google, may show our ads on various websites across the Internet, using first-party cookies and third-party cookies together to inform, optimize, and serve ads based on past visits to our website.</p>

<p>Visitors can opt-out of Google Analytics for Display Advertising and customize Google Display Network ads using the Ads Preferences Manager.</p>
							<!--<button type="accept" class="btn btn-accept" id="accept" value="accept">Accept</button>-->
								<!--<div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id03').style.display='none'" class="cancelbtn">Cancel</button>-->
								</div>
								</div>
								
                </div>
								
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>About mycartshop.lk</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">Company Information</a></li>
								<li><a href="">Careers</a></li>
								<li><a href="">Store Location</a></li>
								<li><a href="">Affillate Program</a></li>
								<li><a href="">Copyright</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>About mycartshop.lk</h2>
								<p>Get the most recent updates from <br />our site and be updated your self...</p>
							
						</div>
					</div>

				</div>
			</div>
		</div>

		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2019 Mycartshop.lk Inc. All rights reserved.</p>
					<p class="pull-right">Designed by <span>Mahan Navidu Malporu</span></p>
				</div>
			</div>
		</div>

	</footer><!--/Footer-->
	<script>
// Get the modal
var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}

</script>
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

<script>
// Get the modal
var modal = document.getElementById('id03');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
</body>
</html>
















































