<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>About</title>
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
					ABOUT <span>DML</span>
				</div>
			</div>

			<div class="container">
				<div class="content">
				<div class="item"><b>Why Choose DML Business Solutions Co?</b>
				<br>
				<p> </p>
				<br>
					<hr><br><b>Save Time</b>
					<br>We can do these time-consuming tasks and you can focus on what is really important –  GROWING your business and having a good work life balance.
				<br>
				<p> </p>
				<br>
					<hr><br><b>Manage Complex Accounting Task</b>
					<br>We are ready to help you solve these complex accounting problems and ensure no mistakes are made.
				<br>
				<p> </p>
				<br>
					<hr><br><b>Keep your Cost Down</b>
					<br>We will be vigilantly watching your finance and ensuring that you aren’t overpaying for resources.
				<br>
				<p> </p>
				<br>
					<hr><br><b>Experts in Taxation</b>
					<br>We can help you slash your tax bill and free up money to either be invested in your business or yourself.
				<br>
				<p> </p>
				<br>
					<hr><br><b>Financial Advisor</b>
					<br>We can help boost growth and build a more stable position for your business to work from.

				</div>
				<div class="item"><b>Mission</b>
				<br>
				<p> </p>
				<br>
					<hr><br><b>Employee</b>
					<br>Establish a continuous healthy relationship with customers through fair, quality, and professional delivery of service.
				<br>
				<p> </p>
				<br>
				<hr><br><b>Customers</b>
					<br>Develop happy, productive and competent employees who are rewarded fairly and given to opportunity to grow.
				<br>
				<p> </p>
				<br>
				<hr><br><b>Partners</b>
					<br>Give back to our partners their fair return.
				<br>
				<p> </p>
				<br>
				<hr><br><b>Community</b>
					<br>Create employment and livelihood opportunities by affordable accounting services to every Filipino family.
				<br>
				<p> </p>
				<br>
				<hr><br><b>Country</b>
					<br>Love our country by obeying the laws of the land.
				<br>
				<p> </p>
				<br>
				</div>
				<div class="item"><b>Vision</b>
				 	<br><hr><br>	To be the leading institution in providing accounting services in the pursuit of uplifting Filipino lives.
<br></div>
				<div class="item"><b>History of the Company</b>
			<br><hr><br>
			Mr. Deomel M. Lucban started from an employee to a business owner. In 2010, he grabbed the opportunity to be part of the company of his mentor Mr. Mike Mantal. Equipped with the tenacity and expertise, he established his own company – an accounting service provider on February 2015. DML Business Solutions Co. started as a sole proprietorship; DML Accounting Services. 
<br>
The company was spearheaded by Mr. Deomel M. Lucban with Ms. Angelie A. Gubot as his Administrative Officer, located at Cogeo, Antipolo City. DML Accounting Services had its first branch in Quezon City under the trade name of AEGLE RRAD Business Solution. From two people as manpower, force of the business grows into staggering 13 persons separated into 4 branches as of this date: The Cogeo, Pampanga, Pasig and Commonwealth branches, 2019 from sole proprietorship changed its ownership into partnership. 
<br>
As a promising business solution provider, it expanded its line of services from Business Registration, Tax Filing, Printing of Receipt, and Bookkeeping to Payroll processing, Human Resource Outsourcing, and P.C.A.B. Registration. 

			</div>
			</div>
			</div>
		</div>
		</div>
	</div>
<script type="text/javascript">

		var setTheme = localStorage.getItem('theme')
		console.log('theme:', setTheme)

		if (setTheme == null){
			swapStyle('styles.css')
		}else{
			swapStyle(setTheme)
		}

		function swapStyle(sheet){
			document.getElementById('mystylesheet').href = sheet
			localStorage.setItem('theme', sheet)
		}
		</script>

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