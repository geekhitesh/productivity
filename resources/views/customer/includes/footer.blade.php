<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="footer-grids">
				<div class="col-md-4 footer-grid animated wow slideInLeft" data-wow-delay=".5s">
					<h3>About Us</h3>
					<p>Duis aute irure dolor in reprehenderit in voluptate velit esse.<span>Excepteur sint occaecat cupidatat 
						non proident, sunt in culpa qui officia deserunt mollit.</span></p>
				</div>
				<div class="col-md-4 footer-grid animated wow slideInLeft" data-wow-delay=".6s">
					<h3>Contact Info</h3>
					<ul>
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>1234k Avenue, 4th block, <span>New York City.</span></li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">info@example.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+1234 567 567</li>
					</ul>
				</div>
				<div class="col-md-4 footer-grid animated wow slideInLeft" data-wow-delay=".7s">
					<h3>New Posts</h3>
					<div class="footer-grid-left">
						<a href="single.php"><img src="images/13.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="single.php"><img src="images/14.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="single.php"><img src="images/15.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="single.php"><img src="images/16.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="single.php"><img src="images/13.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="single.php"><img src="images/14.jpg" alt=" " class="img-responsive" /></a>
					</div>

					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="footer-logo animated wow slideInUp" data-wow-delay=".5s">
				<h2><a href="index.php">Bartenders <span></span></a></h2>
			</div>
			<div class="copy-right animated wow slideInUp" data-wow-delay=".5s">
				<p>&copy 2018 Bartenders. All rights reserved </a></p>
			</div>
		</div>
	</div>
<!-- //footer -->

<script src="js/jquery-3.1.1.min.js"></script>
<!-- bxSlider Javascript file -->
<script src="js/jquery.bxslider.js"></script>
<script>
$(document).ready(function(){
$('.bxslider').bxSlider({
	mode: 'horizontal',
	moveSlides: 1,
	slideMargin: 40,
	infiniteLoop: true,
	<!-- slideWidth: 1200,slideWidth: 1200, -->
	minSlides: 4,
	maxSlides: 1,
	speed: 500,
	auto: true,
});
});
</script>


</body>
</html>