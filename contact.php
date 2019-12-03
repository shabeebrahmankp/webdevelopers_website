<html>
	<head>
		
		<title>web developers</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
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
		    <li><a href="index.php">Home</a></li>
	        <li><a href="account.html">Account</a></li>
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
            <div id="wrapper">

				<!-- Banner -->
					<section id="intro" class="main">
						<span class="icon fas fa-diamond major"></span>
						<head>
							<meta name="viewport" content="width=device-width, initial-scale=1">
							<style>
							#more {display: none;}
							</style>
							</head>
							
                           
							<body>
	<div class="container">
		<div class="innerwrap">
		
			<section class="section1 clearfix">
				<div class="textcenter">
					<span class="shtext">Contact Us</span>
					
					<ul class="icons">
							<li><a  class="icon fa-phone"><span class="label">phone</span> +91 9495736803</a></li>
							<li><a  class="icon fa-map-marker"><span class="label">location</span>abcd road , calicut , pin:673637</a></li>
							</ul>
					<span class="seperator"></span>
					<span class="shtext">Locate Us</span>
				</div>
			</section>
		
			<section class="section2 clearfix">
				<div class="col2 column1 first">
					<script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div class="sec2map" style='overflow:hidden;height:550px;width:100%;'><div id='gmap_canvas' style='height:100%;width:100%;'></div><div><small><a href="http://embedgooglemaps.com">									embed google maps							</a></small></div><div><small><a href="http://freedirectorysubmissionsites.com/">free web directories</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:14,center:new google.maps.LatLng(19.075314480255834,72.88153973865361),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(19.075314480255834,72.88153973865361)});infowindow = new google.maps.InfoWindow({content:'<strong>My Location</strong><br>mumbai<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
				</div>
				<br><br><br><div class="w-50 m-auto">
					
					<form action="userinfo.php"method="POST">
					<link rel="stylesheet" href="loginsignup/css/details.css">
        <div class="form-style-5">
            <form>
            <fieldset>
            <legend><span class="number">1</span> Drop us a message</legend>
            <input type="text" name="user" placeholder="Your Name *" required>
            <input type="email" name="email" placeholder="Your Email *" required>
            <input type="text" name="mobile" placeholder="Your contact number *" required> 
            <textarea name="comment" placeholder="enter your comments here"></textarea>
            </fieldset>
            <input type="submit" value="send" />
            </form>
            </div>
					</div>

				</div>
			</section>
		
		</div>
	</div>
</body>
	</section>
<!-- Footer -->
<footer id="footer">
						<ul class="icons">
							<li><a href="#" class="icon fa-whatsapp"><span class="label">Whatsapp</span></a></li>
							<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li>
							<li><a href="#" class="icon fa-envelope"><span class="label">Email</span></a></li>
						</ul>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="Content-Script-Type" content="text/javascript">
<meta name="Content-Style-Type" content="text/css">

<script type="text/javascript">
document.write ('<p>Current time : <span id="date-time">', new Date().toLocaleString(), '<\/span>.<\/p>')
if (document.getElementById) onload = function () {
	setInterval ("document.getElementById ('date-time').firstChild.data = new Date().toLocaleString()", 50)
}
</script>

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
