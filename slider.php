	<!-- banner -->
	<div class="banner"> 
		<section class="slider">
			<div class="flexslider">
				<ul class="slides">
					<li>
						<div class="banner-img1">
							<div class="banner-w3text">
								<h3>Luxury Wedding Planning</h3>
								<p>Perfect Plan, Perfect Celebration</p>
								<a href="book.php">Book Now</a>
							</div>
						</div>
					</li>
					<li>
						<div class="banner-img2">
							<div class="banner-w3text">
								<h3>Memorable Birthday Celebrations</h3>
								<p>Perfect Plan, Perfect Celebration</p>
								<a href="book.php">Book Now</a>
							</div>
						</div>
					</li>
					<li>
						<div class="banner-img3">
							<div class="banner-w3text">
								<h3>Elegant Anniversary Moments</h3>
								<p>Perfect Plan, Perfect Celebration</p>
								<a href="book.php">Book Now</a>
							</div>
						</div>
					</li>
					<li>
						<div class="banner-img4">
							<div class="banner-w3text">
								<h3>Corporate & Festive Events</h3>
								<p>Perfect Plan, Perfect Celebration</p>
								<a href="book.php">Book Now</a>
							</div>
						</div>
					</li>
					

				</ul> 
			</div>
		</section> 
		<!-- FlexSlider -->
		<script defer src="js/jquery.flexslider.js"></script>
		<script type="text/javascript">
			$(window).load(function(){
			  $('.flexslider').flexslider({
				animation: "slide",
				start: function(slider){
				  $('body').removeClass('loading');
				}
			  });
			});
		</script>
		<!-- //FlexSlider -->
	</div>
	<!-- banner -->
