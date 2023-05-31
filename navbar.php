<style>
  nav
{
	position: fixed;
	width: 100%;
	background-color: #fff;
	display: flex;
	justify-content: space-between;
	align-items: center;
	padding: 1vw 8vw;
	box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.15);
	z-index: 1;
}

nav .logo
{
	width: 150px;
	cursor: pointer;
}

nav .navigation
{
	display: flex;
}

#menu-btn
{
	width: 30px;
	height: 30px;
	display: none;
}

#menu-close
{
	display: none;
}

nav .navigation ul
{
	display: flex;
	justify-content: flex-end;
	align-items: center;
}

nav .navigation ul li
{
	list-style: none;
	margin-left: 30px;
}

nav .navigation ul li a
{
	text-decoration: none;
	color: rgb(21, 21, 100);
	font-size: 16px;
	font-weight: 500;
	transition: 0.3s ease;
}

nav .navigation ul li a:hover
{
	color: #FDC93B;

}

</style>

<nav>
		<img src="img/logo.svg" class="logo" alt="">

		<div class="navigation">
			<ul>
				<i id="menu-close" class="fas fa-times"></i>
				<li><a href="../Home/home.php" class="active">Home</a></li>
				<li><a href="../department">Department</a></li>
      <li><a href="../placement/index.php">Placement</a></li>
      <li><a href="../contactUs">Contact Us</a></li>
      <li><a href="../logout.php" class = "logout">Logout</a></li>
			</ul>
			<img src="img/menu.png" id="menu-btn" alt="">
		</div>
	</nav>