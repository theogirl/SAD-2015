<header class="tcs-header">
<nav class="navbar navbar-default navbar-fixed-top"><!--applies BS nav bar styles and effects-->
	<div class="container-fluid"><!--makes it full width-->

	<!--1st ROW-->
	<div class="row blacktop">

		<div class="col-sm-6 hidden-xs social"><!--contains SM icons which disappear on mobile nav-->
			<a href="https://www.facebook.com/TheCupStore1"><i class="fa fa-facebook"></i></a>
			<a href="https://twitter.com/thecupstore"><i class="fa fa-twitter"></i></a>
			<a href="https://www.linkedin.com/company/the-cup-store?trk=prof-following-company-logo"><i class="fa fa-linkedin"></i></a>
			<a href="http://www.instagram.com/thecupstore"><i class="fa fa-instagram"></i></a>
			<a href="https://www.pinterest.com/thecupstore/"><i class="fa fa-pinterest"></i></a>	
		</div>

		<div class="col-xs-12 col-sm-6 phone"><!--contains the phone #-->
			<p><a href="tel:+18666145900">Toll-Free: 1-866-614-5900</a></p>
		</div>

	</div>


<!--2nd ROW-->
		<div class="navbar-header"><!--contains the logo and hidden button-->
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#tcsnavbar-links">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php"><img src="images/tcs-logo.jpg" alt="The Cup Store logo"></a>
		</div><!--end navbar-header-->

		<div class="collapse navbar-collapse" id="tcsnavbar-links"><!--contains the actual nav links-->

		<ul class="nav navbar-nav nav-pills navbar-right"><!--Note! Button needs to go in separate list with pill class-->
    		<li><button href="quote-request.php" class="btn btn-primary navbar-btn hidden-xs" type="button">Quote Request</button></li>
	 	</ul>

		<ul class="nav navbar-nav navbar-right"><!--these classes used to align links properly-->
			<li><a href="index.php">Home</a></li>
			<li class="dropdown">
					<a href="products.php" class="dropdown-toggle" data-toggle="dropdown">Products <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
						<li><a href="products.php"><strong>All Products</strong></a></li>
						<li class="divider"></li>
						<li><a href="prod-paper-cups.php">Paper Cups</a></li>
						<li><a href="prod-eco-paper-cups.php">Eco-Paper Cups</a></li>
						<li><a href="prod-double-paper-cups.php">Double-Walled Paper Cups</a></li>
						
						<li class="divider"></li>
						<li><a href="prod-plastic-cups.php">Clear Plastic Cups</a></li>
						<li><a href="prod-eco-plastic-cups.php">Eco-Plastic Cups</a></li>
						<li><a href="prod-frosted-plastic-cups.php">Frosted Plastic Cups</a></li>

						<li class="divider"></li>
						<li><a href="prod-glassware.php">Glassware</a></li>
						<li><a href="prod-coffee-sleeves.php">Coffee Sleeves</a></li>
						<li><a href="prod-ice-cream-cups.php">Ice Cream Cups</a></li>
						</ul>
					</li>
			<li><a href="order-info.php">Order Information</a></li>
			<li><a href="about-us.php">About Us</a></li>
			<li><a href="contact-us.php">Contact Us</a></li>
		</ul>
					
		</div><!--end nav links-->



	</div><!--end container-fluid-->

	<div class="QR-bar visible-xs-block"><a href="quote-request.php">Request a Quote</a></div><!--Quote Request bar appears on mobile only-->


</nav><!--end navbar-->
</header>