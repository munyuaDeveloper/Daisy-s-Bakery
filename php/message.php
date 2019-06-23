<!DOCTYPE html>
<html>
<head>
	<title>Haman</title>
	<link rel="stylesheet" type="text/css" href="../css/signup.css">
</head>
<body>
	<header id="logo">
	    <img src="../sources/logo.png"/>
	</header>
	<nav>
	  <ul>
	    <li><a href="../home.html">Home</a></li>
	    <li><a href="about_me.html">About us</a></li>
	    <li><a href="our_menu.html">Our Menu</a></li>
	    <li><a href="specials.html">Our Specials</a></li>
	    <li ><a href="contact.html">Contact us</a></li>
	  </ul>
	</nav>    
	<div class="main">
		<section class="sidebar">
		   <?php
		   include('function.php');
		   	display();
		   ?>
		</section>
	</div>
	<footer>
	  <div class="footer-grid">
		  <div class="footer-col"><div class="column">
	          <div id="details">
	             <h2>Our Specials</h2>
              <hr>
              <p>Caramel</p>
              <p>Chocolate chip Muffin</p>
              <p>Bluberry Muffin</p>
              <p>Lemon Meringue pie</p>
	          </div>
	        </div>
	      </div>
	      <div class="footer-col">
	        <div id="details">
	        	<h2>Our Address</h2><hr>
	            <p>Address: 123 Prize Lane<br>Kirwan, QLD <br> Ph: 0433333333 <br> For Catering: 0455555555 </p>
	        </div>
	      </div>
	     <div class="footer-col">
	       <div id="details">
	       	<h2>Hot links</h2><hr>
	          <a href="../home.html">Home</a><br>
			   <a href="../main-pages/our_menu.html">Our Menu</a><br>
			  <a href="../main-pages/about_me.html">About us</a><br>
			  <a href="../main-pages/specials.html">Our Special</a><br>
			  <a href="../main-pages/contact.html">Contact us</a><br>
	        </div>
	     </div>
	 </div>
	</footer>
	<script type="text/javascript" src="js/javascript.js"></script>
</body>
</html>