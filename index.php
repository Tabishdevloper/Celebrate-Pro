<?php
 	include_once("header.php");
 	// include_once("slider.php"); // Replaced with premium hero
	include_once("Database/connect.php");
?>
	
	<!-- Dynamic Auto-Slider Hero Section -->
	<section class="dynamic-hero" style="position: relative; height: 100vh; overflow: hidden;">
		<div class="hero-slide active" style="background-image: url('images/cs_wedding8.JPG');">
			<div class="hero-overlay">
				<h1 class="hero-title" data-aos="fade-up">PLAN YOUR DREAM EVENT</h1>
				<p class="hero-subtitle" data-aos="fade-up" data-aos-delay="200">Creating memorable experiences with perfection</p>
			</div>
		</div>
		<div class="hero-slide" style="background-image: url('images/cs_birthday.jpg');">
			<div class="hero-overlay">
				<h1 class="hero-title">LET’S CELEBRATE TOGETHER</h1>
				<p class="hero-subtitle">From weddings to corporate events, we handle it all</p>
			</div>
		</div>
		<div class="hero-slide" style="background-image: url('images/cs_wedding_mandap.JPG');">
			<div class="hero-overlay">
				<h1 class="hero-title">CREATE UNFORGETTABLE MOMENTS</h1>
				<p class="hero-subtitle">Enjoy your event while we manage every detail</p>
			</div>
		</div>
		
		<style>
			.hero-slide {
				position: absolute; top:0; left:0; width:100%; height:100%;
				background-size: cover; background-position: center;
				opacity: 0; transition: opacity 1s ease-in-out; z-index: 1;
			}
			.hero-slide.active { opacity: 1; z-index: 2; }
			.dynamic-hero .hero-overlay {
				position: absolute; top:0; left:0; width:100%; height:100%;
				background: rgba(0,0,0,0.45); display: flex; flex-direction: column;
				align-items: center; justify-content: center; text-align: center; color: #fff;
			}
			.dynamic-hero .hero-title { opacity: 0; transform: translateY(20px); transition: all 0.8s ease 0.3s; }
			.dynamic-hero .hero-subtitle { opacity: 0; transform: translateY(20px); transition: all 0.8s ease 0.5s; font-family: 'Poppins', sans-serif; font-size: 20px;}
			.hero-slide.active .hero-title, .hero-slide.active .hero-subtitle { opacity: 1; transform: translateY(0); }
		</style>
		
		<script>
			document.addEventListener("DOMContentLoaded", function() {
				const slides = document.querySelectorAll('.hero-slide');
				if(slides.length === 0) return;
				let currentSlide = 0;
				setInterval(() => {
					slides[currentSlide].classList.remove('active');
					currentSlide = (currentSlide + 1) % slides.length;
					slides[currentSlide].classList.add('active');
				}, 3000);
			});
		</script>
	</section>

	<!-- Brand Intro (About Preview) -->
	<div class="bracket-heading-wrapper" style="background:#fff; padding: 60px 0 0;" data-aos="fade-up">
		<h2 class="bracket-heading">Welcome to Celebrate Pro</h2>
		<span class="bracket-sub">Crafting Extraordinary Moments Your Premier Event Management Partner.</span>
	</div>
	<section class="about-split container" style="padding-top: 20px;">
		<div class="img-col" data-aos="fade-right" data-aos-duration="1000">
			<img src="images/cs_wedding4.jpg" alt="Celebrate Pro Event">
		</div>
		<div class="text-col" data-aos="fade-left" data-aos-duration="1000">
			<h4 style="font-family: 'Playfair Display', serif; font-size: 2rem; color: #333; margin-bottom: 20px; letter-spacing: 1px;">We Turn Your Special Moments Into Beautiful Memories</h4>
			<p class="intro-text" style="color: #666; font-size: 1.15rem; margin-bottom: 30px;">Celebrate Pro is a modern event management brand focused on creating seamless and unforgettable experiences.<br>From weddings to corporate events, we handle every detail with perfection.</p>
			<a href="about.php" class="btn" style="background:#C5A059; color:#fff; padding:12px 30px; border-radius:30px; font-weight:600; text-transform:uppercase; letter-spacing:1px; display:inline-block;">Read More</a>
		</div>
	</section>

	<!-- Premium Services Section -->
	<section class="premium-services" style="background: #f8f9fa; padding: 60px 0 80px;">
		<div class="container">
			<div class="bracket-heading-wrapper" data-aos="fade-up">
				<h2 class="bracket-heading">Our Services</h2>
				<span class="bracket-sub">Celebrate Pro: Transforming Ideas Into Unforgettable Gatherings</span>
			</div>
			<div class="services-grid">
				<a href="wedding.php" class="service-block highlight-card" style="text-align: center;" data-aos="fade-up" data-aos-delay="100">
					<div class="service-icon-wrapper"><i class="fas fa-ring service-icon"></i></div>
					<h3>Wedding Counseling</h3>
					<p>Expert guidance to plan your perfect day.</p>
				</a>
				<a href="anniversary.php" class="service-block" style="text-align: center;" data-aos="fade-up" data-aos-delay="200">
					<div class="service-icon-wrapper"><i class="fas fa-heart service-icon"></i></div>
					<h3>Anniversary Events</h3>
					<p>Celebrating love and lasting milestones.</p>
				</a>
				<a href="other_events.php" class="service-block" style="text-align: center;" data-aos="fade-up" data-aos-delay="300">
					<div class="service-icon-wrapper"><i class="fas fa-building service-icon"></i></div>
					<h3>Corporate Events</h3>
					<p>Professional impact for your brand.</p>
				</a>
				<a href="birthday.php" class="service-block" style="text-align: center;" data-aos="fade-up" data-aos-delay="400">
					<div class="service-icon-wrapper"><i class="fas fa-birthday-cake service-icon"></i></div>
					<h3>Birthday Parties</h3>
					<p>Joyous celebrations for every age.</p>
				</a>
				<a href="services.php" class="service-block" style="text-align: center;" data-aos="fade-up" data-aos-delay="500">
					<div class="service-icon-wrapper"><i class="fas fa-glass-cheers service-icon"></i></div>
					<h3>Hospitality & Logistics</h3>
					<p>Seamless execution and guest care.</p>
				</a>
				<a href="gallery.php" class="service-block" style="text-align: center;" data-aos="fade-up" data-aos-delay="600">
					<div class="service-icon-wrapper"><i class="fas fa-camera service-icon"></i></div>
					<h3>Photography & Videography</h3>
					<p>Capturing memories elegantly.</p>
				</a>
			</div>
		</div>
	</section>
	
	<!-- Premium Gallery Preview -->
	<section class="gallery-preview" style="background: #fff; padding: 60px 0;">
		<div class="container text-center">
			<div class="bracket-heading-wrapper" data-aos="fade-up">
				<h2 class="bracket-heading">Photo Gallery</h2>
				<span class="bracket-sub">Captured Moments: Exploring Our Photo Gallery.</span>
			</div>
			<div class="gallery-masonry" data-aos="fade-in" data-aos-duration="1200" data-aos-delay="200">
				<div class="gallery-item"><img src="images/cs_wedding11.JPG" alt="Wedding Moments" style="transition: transform 0.5s ease;"></div>
				<div class="gallery-item"><img src="images/IMG_9909.JPG" alt="Decor" style="transition: transform 0.5s ease;"></div>
				<div class="gallery-item"><img src="images/cs_wedding8.JPG" alt="Events" style="transition: transform 0.5s ease;"></div>
				<div class="gallery-item"><img src="images/cs_wedding7.JPG" alt="Celebrations" style="transition: transform 0.5s ease;"></div>
				<div class="gallery-item"><img src="images/cs_corporate.jpg" alt="Corporate" style="transition: transform 0.5s ease;"></div>
				<div class="gallery-item"><img src="images/cs_birthday.jpg" alt="Setup" style="transition: transform 0.5s ease;"></div>
			</div>
			<a href="gallery.php" class="btn" style="background:#C5A059; color:#fff; padding:12px 30px; border-radius:30px; font-weight:600; text-transform:uppercase; letter-spacing:1px; display:inline-block; margin-top:40px;" data-aos="fade-up">View More</a>
		</div>
	</section>

	<!-- Founder Section -->
	<section style="background: #f8f9fa; padding: 80px 0;">
		<div class="container">
			<div class="bracket-heading-wrapper" data-aos="fade-up">
				<h2 class="bracket-heading" style="color: #333; border-color: #333;">Our Developer</h2>
			</div>
			
			<div class="founder-card-split" data-aos="zoom-in" data-aos-duration="800">
				<div class="split-top"></div>
				<div class="founder-img-wrapper">
					<img src="images/Tabish.jpg" alt="Tabish Ali - Founder" class="founder-img">
				</div>
				<div class="split-bottom">
					<h2 class="founder-name">Tabish Ali</h2>
					<h4 class="founder-title">Developer</h4>
					<p class="founder-intro" style="font-size:1rem; color:#666; margin-top: 15px; font-style: normal; line-height: 1.6;">"Crafting Premium Event Experiences with Creative Vision and Professional Precision."</p>
				</div>
			</div>
		</div>
	</section>

	<?php
		include_once("footer.php");
	?>