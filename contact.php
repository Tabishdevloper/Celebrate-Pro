<?php
include('Database/connect.php');
if(isset($_POST['submit']))
{
	$a = $_POST['Name'];
	$b = $_POST['Email'];
	$phone = isset($_POST['Phone']) ? $_POST['Phone'] : '';
	$c = "Phone: " . $phone . " | Message: " . $_POST['Message'];
	$q = mysqli_query($con,"insert into feedback values(NULL,'$a','$b','$c')");
	if($q)
	{
		 echo "<script> alert('Sent Successfully')</script>";
		 echo "<script> window.location.assign('index.php');</script>";
	}
	else
	{
		echo "Not Sent";
	}
}
?>
<?php
	include_once("header.php");
?>
	<!-- //header -->
	<div class="banner about-bnr w3-agileits">
		<div class="container">
		</div>
	</div>
	<!-- contact -->
	<section class="luxury-blur-bg" style="background-image: url('images/cs_birthday.jpg'); padding: 100px 0;">
		<div class="container relative" style="z-index: 2;">
			<div class="bracket-heading-wrapper" data-aos="fade-up">
				<h2 class="bracket-heading" style="color: #fff; border-color: #fff;">Let’s Plan Your Event Together</h2>
				<span class="bracket-sub" style="color: #eee;">Reach out to our experts and start designing your dream experience.</span>
			</div>
			
			<div class="contact-agileitsinfo" style="margin-top: 50px; background: rgba(0, 0, 0, 0.7); backdrop-filter: blur(15px); border-radius: 20px; border: 1px solid rgba(255, 255, 255, 0.2); display: flex; flex-wrap: wrap; overflow: hidden; box-shadow: 0 20px 50px rgba(0,0,0,0.5);" data-aos="fade-up" data-aos-delay="200">
				
				<div class="col-md-7" style="padding: 50px;">
					<h3 style="color: #C5A059; font-family:'Playfair Display', serif; font-size: 2rem; margin-bottom: 30px;">Send a Message</h3>
					<form action="#" method="post"> 
						<input type="text" name="Name" placeholder="Your Full Name" required="" style="width:100%; background: rgba(255,255,255,0.15); border: 1px solid rgba(255,255,255,0.4); border-radius: 8px; color: #fff; padding:15px 20px; margin-bottom:20px; outline:none; font-size: 1.1rem; transition: all 0.3s ease;"/>
						<input type="text" name="Phone" placeholder="Phone Number" required="" style="width:100%; background: rgba(255,255,255,0.15); border: 1px solid rgba(255,255,255,0.4); border-radius: 8px; color: #fff; padding:15px 20px; margin-bottom:20px; outline:none; font-size: 1.1rem; transition: all 0.3s ease;"/>
						<input type="email" name="Email" placeholder="Email Address" required="" style="width:100%; background: rgba(255,255,255,0.15); border: 1px solid rgba(255,255,255,0.4); border-radius: 8px; color: #fff; padding:15px 20px; margin-bottom:20px; outline:none; font-size: 1.1rem; transition: all 0.3s ease;"/>
						<textarea name="Message" placeholder="Tell us about your event..." required="" style="width:100%; background: rgba(255,255,255,0.15); border: 1px solid rgba(255,255,255,0.4); border-radius: 8px; color: #fff; padding:15px 20px; margin-bottom:30px; outline:none; min-height: 120px; font-size: 1.1rem; transition: all 0.3s ease;"></textarea>
						<input type="submit" name="submit" value="SUBMIT INQUIRY" style="background:#C5A059; color:#fff; padding:15px 40px; border:none; border-radius:30px; outline:none; font-size: 1rem; font-weight: 600; letter-spacing: 1px; width: 100%; transition: transform 0.3s, box-shadow 0.3s; cursor: pointer; box-shadow: 0 4px 15px rgba(197, 160, 89, 0.4);">
					</form>
				</div>
				
				<div class="col-md-5" style="background: rgba(255,255,255,0.95); padding: 50px;">
					<h3 style="font-family:'Playfair Display', serif; margin-bottom:30px; font-size: 2rem; color: #333;">Contact Information</h3>
					
					<div style="margin-bottom: 30px;">
						<h4 style="font-family:'Poppins', sans-serif; font-weight:600; color:#C5A059; font-size: 1.1rem;">Head Office</h4>
						<p style="color:#555; margin-top:10px; line-height:1.6; font-size: 1.05rem;"><i class="fas fa-map-marker-alt" style="margin-right: 10px; color:#C5A059;"></i> Danapur, Patna, Bihar, India.</p>
					</div>
					
					<div style="margin-bottom: 30px;">
						<h4 style="font-family:'Poppins', sans-serif; font-weight:600; color:#C5A059; font-size: 1.1rem;">Phone Contact</h4>
						<p style="color:#555; margin-top:10px; line-height:1.6; font-size: 1.05rem;"><i class="fas fa-phone-alt" style="margin-right: 10px; color:#C5A059;"></i> +91 620044XXXX</p>
					</div>

					<div style="margin-bottom: 40px;">
						<h4 style="font-family:'Poppins', sans-serif; font-weight:600; color:#C5A059; font-size: 1.1rem;">Email Support</h4>
						<p style="color:#555; margin-top:10px; line-height:1.6; font-size: 1.05rem;"><i class="fas fa-envelope" style="margin-right: 10px; color:#C5A059;"></i> celebratepro@gmail.com</p>
					</div>
					
					<div style="border-top: 1px solid #eaeaea; padding-top: 30px;">
						<h4 style="font-family:'Playfair Display', serif; color:#333; font-size: 1.5rem; margin-bottom: 15px;">Business Hours</h4>
						<p style="color:#666; font-size: 1rem;"><span style="font-weight: 600; color:#333;">Mon - Sat:</span> 9:00 AM - 8:00 PM</p>
						<p style="color:#666; font-size: 1rem; margin-top: 5px;"><span style="font-weight: 600; color:#333;">Sunday:</span> Closed</p>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- //contact -->
	<!-- footer -->
	<?php
		include_once("footer.php");
	?>