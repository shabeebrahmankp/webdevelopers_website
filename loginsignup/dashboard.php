<?php
include_once 'source/session.php';
?>


    <?php if(!isset($_SESSION['username'])): header("location: logout.php");?>

    <?php else: ?>

    <?php endif ?>

	<?php $_SESSION['username'] ?>
	
	<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>web developers</title>
	
 

	<html>
	<head>
		
		<title>web developers</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="../assets/css/main.css" />
		<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	</head>
	<body>

		<!-- Header -->
			<header id="header" class="alt">
					<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

					<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
					

				<div class="inner">
					<h1>website developers</h1>
					<p>contact us for the best websites for your company</br>[ this website gives you a brief knowledge about the languages and methods used for the website creation ]</p>
				</div>
				
<div class="header">
	 
	<div class="navbar" id='nav'>

	  <ul>
	        <li><a href="../index.php">home</a></li>
            <li><a href="logout.php">Logout</a></li>
	  </ul>

	</div>

</div>

<div class="box"></div>


<!-- add some javascript code -->

  <script type="text/javascript">
	  
	   var  nav = document.getElementById('nav');
	 
	 window.onscroll = function(){

		 if (window.pageYOffset >100) {

			 nav.style.background = "#303133";
		 }
		 else{
			 nav.style.background = "transparent";
			 nav.style.boxShadow = "none";
		 }
	 }



  </script>



<!-- add css style -->

<style type="text/css">
	  
	  *{
		  padding: 0px;
		  margin:0px;
		  box-sizing: border-box;
	  }

	  .header{
		   width: 100%;
		   height: 100%;
		   background-size: cover;

	  }

	  .navbar{
		  width: 100%;
		  padding: 20px;
		  position: fixed;
		  top: 0px;
		  text-align: center;
		  transition: .5s;
	  }

	  .navbar ul li{
		  list-style-type: none;
		  display:inline-block;
		  padding: 10px 50px;
		  color: white;
		  font-size: 20px;
		  font-family: sans-serif;
		  cursor: pointer;
		  border-radius:10px;
		  transition: .5s;
	  }

	  .navbar ul li:hover{
		  background: rgb(27, 20, 7);
	  }

</style>
			</header>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Banner -->
					<section id="intro" class="main">

<div class="container">
  <h4>welcome to your account</h4>
  <ul class="list-group">
    <h6><a href="activities.html"><li class="list-group-item">Activities and Services</li></a></h6>
    <h6><a href="details.html"><li class="list-group-item">what kind of website you need? click to send the details</li></a></h6>
  </ul>
</div>
<footer id="footer">
						<ul class="icons">
							<li><a href="#" class="icon fa-whatsapp"><span class="label">Whatsapp</span></a></li>
							<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li>
							<li><a href="#" class="icon fa-envelope"><span class="label">Email</span></a></li>
						</ul>
						<p class="copyright">&copy; web developers | All rights reserved</p>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>


							