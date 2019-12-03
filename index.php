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
	        <li><a href="account.html">Account</a></li>
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

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Banner -->
					<section id="intro" class="main">
						<span class="icon fa-diamond major"></span>
						<head>
							<meta name="viewport" content="width=device-width, initial-scale=1">
							<style>
							#more {display: none;}
							</style>
							</head>
							<body>
							
							<h2>premium websites</h2>
							<p>go premium for more exciting and styling websites</br>costing from 20k-40k</br> create an account to be a premium member.<span id="dots">...</span><span id="more">Your company website is often the first impression with a potential new client.  Your website needs to capture the core values of your business and convey them clearly to your clients.  It is the first step in building a quality relationship that is crucial for building your business</span></p>
							<button onclick="myFunction()" id="myBtn">Read more</button>
							
							<script>
							function myFunction() {
							  var dots = document.getElementById("dots");
							  var moreText = document.getElementById("more");
							  var btnText = document.getElementById("myBtn");
							
							  if (dots.style.display === "none") {
								dots.style.display = "inline";
								btnText.innerHTML = "Read more"; 
								moreText.style.display = "none";
							  } else {
								dots.style.display = "none";
								btnText.innerHTML = "Read less"; 
								moreText.style.display = "inline";
							  }
							}
							</script>
							
							</body>
						
					</section>
				<!-- Items -->
					<section class="main items">
						<article class="item">
							<header>
								<a href="#"><img src="images/css.png" alt="" /></a>
								<h3>the css magic</h3>
							</header>
							<p>The cascading style sheet will be used in all of our websites.</br>This is used for styling which makes your website more attractive.</br></p>					
							<ul class="actions">
								<li><a href="#" class="button">More</a></li>
							</ul>
						</article>
						<article class="item">
							<header>
								<a href="#"><img src="images/php.jpg" alt="" /></a>
								<h3>the php world</h3>
							</header>
							<p>pHp is used in our websites for server scripting.</br>word press is only using for ecommerce website creation</br>pHp is the server scripting language</p>
							<ul class="actions">
								<li><a href="#" class="button">More</a></li>
							</ul>
							</article>
						<article class="item">
							<header>
								<a href="#"><img src="images/wordpress.jpg" alt="" /></a>
								<h3>the easiest wordpress</h3>
							</header>
							<p>the ecommerce websites are created with WordPress, so it will be easy to maintain going forward. All websites have a dashboard where you can log in and easily update your website with content changes, images, and even blogging.</p>
							<ul class="actions">
								<li><a href="#" class="button">More</a></li>
							</ul>
						</article>
						<article class="item">
							<header>
								<a href=""><img src="images/html.jpg" alt="" /></a>
								<h3>html front end</h3>
							</header>
							<p>Hypertext Markup Language (HTML) is the standard markup language for documents designed to be displayed in a web browser. It can be assisted by technologies such as Cascading Style Sheets (CSS) and scripting languages such as JavaScript.</p>
							<ul class="actions">
								<li><a href="#" class="button">More</a></li>
							</ul>
						</article>
					</section>

				<!-- CTA -->
					<section id="cta" class="main special">
						<h2>send your details here</h2>
						<p>You will be directed to the account page</br>Create your own account and send us about the website you are expecting.</p>
						<ul class="actions">
							<li><a href="account.html" class="button big">Get Started</a></li>
						</ul>
					</section>

				<!-- Main -->
				<!--
					<section id="main" class="main">
						<header>
							<h2>Lorem ipsum dolor</h2>
						</header>
						<p>Fusce malesuada efficitur venenatis. Pellentesque tempor leo sed massa hendrerit hendrerit. In sed feugiat est, eu congue elit. Ut porta magna vel felis sodales vulputate. Donec faucibus dapibus lacus non ornare. Etiam eget neque id metus gravida tristique ac quis erat. Aenean quis aliquet sem. Ut ut elementum sem. Suspendisse eleifend ut est non dapibus. Nulla porta, neque quis pretium sagittis, tortor lacus elementum metus, in imperdiet ante lorem vitae ipsum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam eget neque id metus gravida tristique ac quis erat. Aenean quis aliquet sem. Ut ut elementum sem. Suspendisse eleifend ut est non dapibus. Nulla porta, neque quis pretium sagittis, tortor lacus elementum metus, in imperdiet ante lorem vitae ipsum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
					</section>
				-->

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
document.write ('<p>Current time is: <span id="date-time">', new Date().toLocaleString(), '<\/span>.<\/p>')
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
