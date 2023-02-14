<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Business</title>
	<link rel="stylesheet" href="styles.css">
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
					SERVICE OFFERS and <span>PARTNERSHIPS</span>
				</div>
			</div>

			<div class="container">
				<div class="content">
				<div class="item">Offer 1</div>
				<div class="item">Offer 2</div>
				<div class="item">PARTNERSHIPS
				<hr><br>
				<b>MZ. A BUSINESS CONSULTANCY SERVICES</b>
				<br>Mz. A Business Consultancy Services owned by Ms. Alecs Dianne H. Pacuan. She was the former Marketing Head at DML Business Solutions Co.
				<br><br><hr><br>
				<b>JBC TAX AND ACCOUNTING SERVICE</b>
				<br>BC Tax and Accounting Service owned by Jocelyn B. Cristobal. The office is located at 16 Cherry Blossom Street Payatas A, Quezon City. 
				<br><br><hr><br>
				<b>TAXWORTHY ACCOUNTING AND TAX SERVICES</b>
				<br>Taxworthy Accounting and Tax Services owned by Mr. Nico D. De Guzman. He is also the Administrative Head at DML Business Solutions Co.
				<br><br><hr><br>
				<b>RVS TAX & ACCOUNTING SERVICES
				<br>RVS Tax & Accounting Services is owned by Vicky Vale Reyes located at 125B N. Cuevas St. Kalawaaan Pasig City.
				</b>

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