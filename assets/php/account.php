<!doctype html>

<html>
	<head>
		<title> Transparent Login form </title>
		<link rel="stylesheet" href="style.css">
		<div class="header">
	 
			<div class="navbar" id='nav'>
		
			  <ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="#">Gallery</a></li>
					<li><a href="contact.php">Contact us</a></li>
					<li><a href="about.php">About us</a></li>
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

	</head>
	<body>
	<div class="loginBox">
		
		<img src="user.png" class="user">
		<h2>Log In Here</h2>
		<form>
			<p>Email</p>
			<input type="text" name = "" placeholder="Enter Email">
			<p>Password</p>
			<input type="password" name = "" placeholder="Enter Password">
			<input type="submit" name = "" value="sign In">
			<a href="#"> Forget Password</a> 
			
		</form>
	</div>
	</body>
</html>