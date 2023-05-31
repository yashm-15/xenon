<?php
  session_start();
  if(isset($_SESSION["Email"])){
  
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
<?php include '../navbar.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Contact Us</title>

	<!-- font Awesome CDN link -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />

	<!-- External CSS -->
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="about.css">
	<link rel="stylesheet" href="course-inner.css">
	<link rel="stylesheet" href="contact.css">

	<!-- JQuery CDN link -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
<body>
	<section id="contact">
		<div class="getin">
			<h2>Get in touch</h2>
			
			<div class="getin-details">
				<h3>Address</h3>
				<div>
					<i class="fa-solid fa-map get"></i>
					<p>College Of engineering Roorkee, Haridwar Road, Roorkee, Uttrakhand (247667)</p>
				</div>

				<h3>Phone</h3>
				<div>
					<i class="fas fa-phone-alt get"></i>
					<p>(+91) 9999999999 <br> (+91) 9999999999</p>
				</div>

				<h3>Support</h3>
				<div>
					<i class="fa-solid fa-envelope get"></i>
					<p>info@coer.ac.in</p>
				</div>
			</div>
		</div>

		<form class="form" action = "post.php" method = "post">
			<h4>Contact Us</h4>
			<p>Enter your details</p>
			<div class="form-row">
				<input type="text" name = "Name" placeholder="Your Name">
				<input type="email" name = "Email" placeholder="Your Email">
			</div>
			<div class="form-col">
				<input type="text" name = "Phone" placeholder="Your Phone">
			</div>
			<div class="form-col">
				<input type="text" name = "Address" placeholder="Your Address">
			</div>
			<div class="form-col">
				<textarea name = "msg" id="" cols="30" rows="8" placeholder="Message"></textarea>
			</div>

			<div class="form-col">
				<button type = "submit" name = "sub">Send Message</button>
			</div>
        </form>
	</section>


	<section id="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30711686.029386617!2d64.41853642919325!3d20.009139591170264!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30635ff06b92b791%3A0xd78c4fa1854213a6!2sIndia!5e0!3m2!1sen!2sin!4v1652012148253!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</section>


	<script>
		// Show menu links on burger click
		$('#menu-btn').click(function(){
			$('nav .navigation ul').addClass('active')
		});

		// Hide navbar on click function
		$('#menu-close').click(function(){
			$('nav .navigation ul').removeClass('active')
		});
	</script>
</body>
</html>



<?php include '../footer.php';?>
</body>
</html>
<?php
}
else {
  header("location: ../index.php");
die("You must be Log in to view this page <a href='../index.php'>Click here</a>");}
?>