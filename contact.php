<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contact</title>
	<link rel="stylesheet" href="styles.css">
	<link rel="stylesheet" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<div class="wrapper">
		<div class="wrapper_inner">
			<div class="vertical_wrap">
			<div class="backdrop"></div>
			<div class="vertical_bar">
				<div class="profile_info">
					<div class="img_holder">
					<a href="index.php">
						<img src="logo.png" alt="profile_pic">
					</div>
					<p class="title">DML Business Solutions Co.</p>
					</a>
					<p class="sub_title">mlbusinesssolutionsco.crd@gmail.com</p>
				</div>
				<ul class="menu">
					<li><a href="index.php">
						<span class="icon"><i class="fas fa-home"></i></span>
						<span class="text">Dashboard</span>
					</a></li>
					<li><a href="about.php">
						<span class="icon"><i class="fas fa-file-alt"></i></span>
						<span class="text">About</span>
					</a></li>
					<li><a href="business.php">
						<span class="icon"><i class="fas fa-chart-pie"></i></span>
						<span class="text">Services and Partners</span>
					</a></li>
					<li><a href="contact.php">
						<span class="icon"><i class="fas fa-user"></i></span>
						<span class="text">Contact</span>
					</a></li>
					<li><a href="settings.php">
						<span class="icon"><i class="fas fa-cog"></i></span>
						<span class="text">Settings</span>
					</a></li>
				</ul>
				<ul class="social">
					<li><a href="https://www.facebook.com/DMLBusinessSolutionsCo"><i class="fab fa-facebook-f"></i></a></li>
					<li><a href="#"><i class="fab fa-twitter"></i></a></li>
					<li><a href="https://www.instagram.com/dmlbusiness/"><i class="fab fa-instagram"></i></a></li>
				</ul>
			</div>
		</div>
		<div class="main_container">
			<div class="top_bar">
				<div class="hamburger">
					<i class="fas fa-bars"></i>
				</div>
				<div class="logo">
					CONTACT <span>DML</span>
				</div>
			</div>

			<div class="container">
				<div class="content">
					<div class="item"><b>Location</b>
					<hr><br>
					Unit M, Blk5 Lot26 Champaca St. Almar Subdivision, Brgy. 177, Caloocan City
					</div>
					<div class="item"><b>Email</b>
					<hr><br>
					mlbusinesssolutionsco.crd@gmail.com
					</div>
					<div class="item"><b>Facebook</b>
					<hr><br>
					www.facebook.com/DMLBusinessSolutionsCo
					</div>
					<div class="item"><b>Instagram</b>
					<hr><br>
					@dmlbusinesssolutionsco
					</div>
				</div>
			</div>
		</div>
		</div>
	</div>

<script>
	var hamburger = document.querySelector(".hamburger");
	var wrapper  = document.querySelector(".wrapper");
	var backdrop = document.querySelector(".backdrop");

	hamburger.addEventListener("click", function(){
		wrapper.classList.add("active");
	})

	backdrop.addEventListener("click", function(){
		wrapper.classList.remove("active");
	})
</script>
</body>
</html>