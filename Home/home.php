<?php
  session_start();
  if(isset($_SESSION["Email"])){
  
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Education Website Template</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
	<link rel="stylesheet" href="style.css">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
<body>
<?php include '../navbar.php';?>

<section id="home">
		<h2>
			Enhance Your Future With COER
		</h2>
		<p>
			Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, ipsum laboriosam architecto tempora explicabo ratione pariatur accusantium consequatur sed odit?
		</p>
		<div class="btn">
			<a href="#features" class="blue">Learn More</a>
			
		</div>
	</section>

	<section id="features">
		<h1>Welcome To College Of Engineering Roorkee</h1>
		<p>Replenish man have thing gathering lights yielding shall you</p>

		<div class="fea-base">
			<div class="fea-box">
				<i class="fas fa-graduation-cap"></i>
				<h3>Top Faculties</h3>
				<p>
					One make creepeth, man bearing theira firmament won't great heaven
				</p>
			</div>

			<div class="fea-box">
				<i class="fa-solid fa-book-bookmark"></i>
				<h3>Get Yourself Best</h3>
				<p>
					One make creepeth, man bearing theira firmament won't great heaven
				</p>
			</div>

			<div class="fea-box">
				<i class="fas fa-award"></i>
				<h3>Global Certification</h3>
				<p>
					One make creepeth, man bearing theira firmament won't great heaven
				</p>
			</div>
		</div>
	</section>
	<!-- Features section ends from here -->


	<!-- Courses section starts from here -->
	<section id="Teachers">
		<h1>Our Top Teachers</h1>
		<p>Replenish man have thing gathering lights yielding shall you</p>

		<div class="Teachers-box">
			<div class="Teachers">
				<img src="./images/i1.jpeg" alt="">
				<div class="details">
					<span>Ms. Aditi</span>
					<h6>Associate Profeessor</h6>

					<div class="star">
						<span>Phd Holder</span>
					</div>
				</div>
				<div class="cost" style="font-size: 12px;">3 Patents</div>
			</div>

			<div class="Teachers">
				<img src="./images/i3.jpeg" alt="">
				<div class="details">
					<span>Mr. Rohit Kanauzia</span>
					<h6>Head Of Department(IT)</h6>

					<div class="star">
						<span>M.Tech(IIT Delhi)</span>
					</div>
				</div>
				<div class="cost" style="font-size: 12px;">5+ Yrs.</div>
			</div>

			<div class="Teachers">
				<img src="./images/i4.jpeg" alt="">
				<div class="details">
					<span>Mr. Rahul Singh</span>
					<h6>Head Of Department(CS)</h6>
					<div class="star">
						<span>Phd Holder</span>
					</div>
				</div>
				<div class="cost" style="font-size: 12px;">11+ Patents</div>
			</div>
			<div class="Teachers">
				<img src="./images/i2.jpeg" alt="">
				<div class="details">
					<span>Mrs. Rohani Pandit</span>
					<h6>Mechanical Head</h6>
					<div class="star">
						
						<span>M.Tech(IIT Bombay)</span>
					</div>
				</div>
				<div class="cost" style="font-size: 12px;">3+ Patents</div>
			</div>

		

			
		</div>
	</section>
	<section id="registration">
		<div class="reminder">
			<p>Get Free Scholarship Also</p>
			<h1>Get Details At Campus by Visiting</h1>

			<div class="time">
				<div class="date">50% <br> 95%+ Marks</div>
				<div class="date">30% <br> 90%+ Marks</div>
				<div class="date">20% <br> 80%+ Marks</div>
				<div class="date">10% <br> 70%+ Marks</div>
			</div>
		</div>

		
	</section>
	<section id="experts">
		<h1>College Aluminis</h1>
		<p>Replenish man have thing gathering lights yielding shall you</p>
		<div class="expert-box">
			<div class="profile">
				<img src="./images/i3.jpeg" alt="">
				<h6>Atul Kumar</h6>
				<p>SDE at Microsoft</p>
				<div class="pro-links">
					<i class="fab fa-facebook"></i>
					<i class="fab fa-instagram"></i>
					<i class="fab fa-linkedin-in"></i>
				</div>
			</div>

			<div class="profile">
				<img src="./images/i1.jpeg" alt="">
				<h6>Pragya</h6>
				<p>Developer at Sharechat</p>
				<div class="pro-links">
					<i class="fab fa-facebook"></i>
					<i class="fab fa-instagram"></i>
					<i class="fab fa-linkedin-in"></i>
				</div>
			</div>

			<div class="profile">
				<img src="./images/i4.jpeg" alt="">
				<h6>Piyush Saini</h6>
				<p>Full Stack Developer</p>
				<div class="pro-links">
					<i class="fab fa-facebook"></i>
					<i class="fab fa-instagram"></i>
					<i class="fab fa-linkedin-in"></i>
				</div>
			</div>

			<div class="profile">
				<img src="./images/i4.jpeg" alt="">
				<h6>Ujjawal Pant</h6>
				<p>Graphic Designer</p>
				<div class="pro-links">
					<i class="fab fa-facebook"></i>
					<i class="fab fa-instagram"></i>
					<i class="fab fa-linkedin-in"></i>
				</div>
			</div>
		</div>
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




<?php include '../footer.php';?>
</body>
</html>
<?php
}
else {
  header("location: ../index.php");
die("You must be Log in to view this page <a href='../index.php'>Click here</a>");}
?>