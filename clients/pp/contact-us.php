<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="The Cup Store is your premier source for custom printed disposable paper and plastic cups, glassware, containers, coffee sleeves and much more. Grow your brand and your business one cup at a time - print your logo or other artwork on a cup!">
	<meta name="keywords" content="paper cups, plastic cups, glassware, coffee sleeves, gelato cups, ice cream cups, compostable cups, biodegradeable cups, eco cups, printed paper cups, printed plastic cups, custom printed cups, imprinted paper cups, imprinted plastic cups, promotional cups, logo on cups, custom cups, customized cups">
    
    <title>Contact Us | The Cup Store</title>

  <?php include 'includes/head.php'; ?>

	<!--Google Map-->
	<script src="https://maps.googleapis.com/maps/api/js"></script>
	<script>
      function initialize() {
    var myLatlng = new google.maps.LatLng(44.994060, -73.454756);
	var mapOptions = {
 		 zoom: 15,
  		center: myLatlng
	}
	var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);

// To add the marker to the map, use the 'map' property
	var marker = new google.maps.Marker({
   	 position: myLatlng,
   	 map: map,
    title:"The Cup Store"
});
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
	

</head>

<body>

<!--HEADER SECTION-->
<?php include 'includes/header.php'; ?>

<!--MAIN CONTENT-->

<!--PAGE TITLE-->
<section class="tcs-pagetitle">
	<div class="container-fluid">
		<h1>Contact Us</h1>
	</div>
</section>

<!--INTRO + ADDRESSES-->
<section class="tcs-contact">
	<div class="container">
	<div class="contact-social">
      			<a href="https://www.facebook.com/TheCupStore1"><i class="fa fa-facebook"></i></a>
				<a href="https://twitter.com/thecupstore"><i class="fa fa-twitter"></i></a>
				<a href="https://www.linkedin.com/company/the-cup-store?trk=prof-following-company-logo"><i class="fa fa-linkedin"></i></a>
				<a href="http://www.instagram.com/thecupstore"><i class="fa fa-instagram"></i></a>
				<a href="https://www.pinterest.com/thecupstore/"><i class="fa fa-pinterest"></i></a>
		</div>

		<h2 class="text-center">We'd love to hear from you!</h2>
		<p class="text-center">For more information on our product selection and to discuss your own cup marketing needs, please contact us! We also maintain a showroom at our Canadian office, that you are more than welcome to visit in person if you are ever in the area.</p>
		<hr>
	</div>
	
<div class="row">

	<div class="col-xs-12 col-sm-4 col-sm-offset-2 tcs-address-box"><!--US Address Box-->
		<img src="images/american-flag.png" alt="U.S. flag">
		<h3>New York Office</h3>
		<p><strong>Address:</strong><br /> 1320 Route 9<br />Champlain, NY 12919<br /><strong>Toll-Free Phone:</strong><a href="tel:+18666415900"> 1-866-641-5900</a><br /><strong>Toll-Free Fax:</strong> 1-877-850-0663<br /><strong>Email:</strong><a href="mailto:info@thecupstore.com"> Email our U.S. office</a><br /></p>
	</div>

	<div class="col-xs-12 col-sm-4 tcs-address-box"><!--CDN Address Box-->
		<img src="images/cdn-flag.png" alt="Canadian flag">
		<h3>Toronto Office</h3>
		<p><strong>Address:</strong><br /> 155 Dolomite Drive<br /> Toronto, ON M3J 2N1<br /><strong>Toll-Free Phone:</strong> <a href="tel:+18666415900">1-866-641-5900</a><br /><strong>Email:</strong><a href="mailto:info@thecupstore.ca"> Email our Canadian office</a><br /><strong>Website: </strong><a href="http://www.thecupstore.ca">Visit our Canadian site</a></p>
	</div>

</div><!--End row-->
</section>


<!--MAP-->
<section>
	<div class="container-fluid" id="map-canvas"></div>
</section>


<!--FOOTER SECTION-->

<?php include 'includes/footer.php'; ?>


    <!-- Latest compiled and minified JavaScript 
    ================================================== -->
	
	<script type="text/javascript" src="js/jquery-1.11.2.js"></script>
	<script type="text/javascript" src="bootstrap.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
</body>

</html>