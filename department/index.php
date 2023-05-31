<?php
  session_start();
  if(isset($_SESSION["Email"])){
  
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Xenon Stack</title>

	<!-- font Awesome CDN link -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />

	<!-- External CSS -->
	<link rel="stylesheet" href="home.css">
	<link rel="stylesheet" href="department.css">

	<!-- JQuery CDN link -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>

<body>
<?php include '../navbar.php';?>
<!-- Hero section starts from here -->
<section id="about-home">
		<h2>
			Blogs.
		</h2>
	</section>
	<!-- Hero section ends from here -->


	<!-- Blog container starts from here -->
	<section id="blog-container">
		<div class="blogs">
			<div class="post">

				<h3>Learn more about CSE</h3>
				<p>
					Lorem ipsum dolor sit amet consectetur adipisicing, elit. Optio enim, rerum voluptas non dolorem architecto libero, tempora laborum fugiat, deleniti, iusto maxime rem similique laudantium nostrum ad quod esse ullam modi illo?
				</p>
				<a href="post.html">Read More</a>
			</div>

			<div class="post">

				<h3>Learn More about IT</h3>
				<p>
					Lorem ipsum dolor sit amet consectetur adipisicing, elit. Optio enim, rerum voluptas non dolorem architecto libero, tempora laborum fugiat, deleniti, iusto maxime rem similique laudantium nostrum ad quod esse ullam modi illo?
				</p>
				<a href="post.html">Read More</a>
			</div>

			<div class="post">

				<h3>Learn More about Electronics & Communication</h3>
				<p>
					Lorem ipsum dolor sit amet consectetur adipisicing, elit. Optio enim, rerum voluptas non dolorem architecto libero, tempora laborum fugiat, deleniti, iusto maxime rem similique laudantium nostrum ad quod esse ullam modi illo?
				</p>
				<a href="post.html">Read More</a>
			</div>

			<div class="post">
				<img src="img/b1.jpg" alt="">
				<h3>Learn More about Civil Engineering</h3>
				<p>
					Lorem ipsum dolor sit amet consectetur adipisicing, elit. Optio enim, rerum voluptas non dolorem architecto libero, tempora laborum fugiat, deleniti, iusto maxime rem similique laudantium nostrum ad quod esse ullam modi illo?
				</p>
				<a href="post.html">Read More</a>
			</div>

			<div class="post">
				<img src="img/b2.jpg" alt="">
				<h3>Learn Wmore about Mechanical Engineering</h3>
				<p>
					Lorem ipsum dolor sit amet consectetur adipisicing, elit. Optio enim, rerum voluptas non dolorem architecto libero, tempora laborum fugiat, deleniti, iusto maxime rem similique laudantium nostrum ad quod esse ullam modi illo?
				</p>
				<a href="post.html">Read More</a>
			</div>
		</div>
		<div class="cate">
			<h2>Departments</h2>
			<hr>
			<a href="#">Computer Science & Engineering</a>
			<hr>
			<a href="#">Information Technology</a>
			<hr>
			<a href="#">Electronics & Communication</a>
			<hr>
			<a href="#">Civil Engineering</a>
			<hr>
			<a href="#">Mechanical Engineering</a>
			
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