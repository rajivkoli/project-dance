
<!DOCTYPE html>
<html>
<head>
	<title>HomePage</title>
	<link rel="stylesheet" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Actor|Lobster|Patua+One&display=swap" rel="stylesheet">
	<script src="js/all.min.js"></script>
</head>
<body>
	<nav id="navbar">
		<div class="logo">
		    <a href="" class="logo-link"><img src="img/logo.png" class="logo-item"></a>
		</div>
		<ul class="nav-list">
			<li class="nav-item"><a href="index.php">Home</a></li>
		    <li class="nav-item"><a href="about.php">About</a></li>
			<li class="nav-item"><a href="service.php">Services</a></li>
			<li class="nav-item"><a href="gallery.php">Gallery</a></li>
			<li class="nav-item"><a href="contact.php">Contact</a></li>
		</ul>
	</nav>
	<div class="find-sec">
		<h1>Contact Us</h1>
		<div class="contact">
			<div class="left-cont">
				<div class="adress">
					<i class="fas fa-address-card"></i>
				</div>
					<h2>80/8, Sewri Koliwada, Mumbai-15</h2>
				<div class="adress">
					<i class="fas fa-phone-square-alt"></i>
				</div>
					<h2>+91 8454825610</h2>
					<h2>+91 8454825610</h2>
				<div class="adress">
					<i class="fas fa-envelope-square"></i>
				</div>
				<h2>rajivkoli.rk@gmail.com</h2>
			</div>
			<div class="right-cont">
				<div class="form-sec">
					<div class="form-cont">
						<form method="post" action="feed.php">
							<input type="text" name="name" placeholder="Enter your Name" required><br>
							<input type="number" name="phone" placeholder="Enter your Number" required><br>
							<input type="email" name="email" placeholder="Enter your E-mail" required><br>
							<textarea name="message" style="height: 100px" placeholder="Enter your message" required></textarea>
							<button type="submit" value="submit" name="submit" class="btn">submit</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<h1>Where To Find Us</h1>
	<div class="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3772.4508047369663!2d72.85525891437565!3d18.999846959300346!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7cf04878fd791%3A0xd7ab906b0cdb1aa8!2sSewri%20Koliwada%20Rd%2C%20MPT%2C%20Sewri%2C%20Mumbai%2C%20Maharashtra%20400015!5e0!3m2!1sen!2sin!4v1573729969225!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
	</div>
	<footer>
		<div class="container">
			<div class="left-foot">
				<h1>The Dance Centre</h1>
				<p>Dance as the narration of a magical story, that recites on lips, illuminates imaginations and embraces the most sacred depths of souls.</p>
				<div>
					<p>Copyright &copy; 2019 The Dance Centre - Rajeev Koli</p>
				</div>	
			</div>
			<div class="right-foot">
				<h1>Talk to us</h1>
				<p>80/8, Sewri Koliwada, Mumbai-15</p>
				<p>+91 8454825610</p>
				<p>rajivkoli.rk@gmail.com</p>
			</div>
		</div>
		<div class="social">
            <ul class="social-icon">
                <li class="icon"><a href="#" class="fab fa-facebook"></a></li>
                <li class="icon"><a href="#" class="fab fa-twitter"></a></li>
                <li class="icon"><a href="#" class="fab fa-google-plus"></a></li>
                <li class="icon"><a href="#" class="fab fa-dribbble"></a></li>
                <li class="icon"><a href="#" class="fab fa-linkedin"></a></li>
            </ul>
        </div>
	</footer>
</body>
</html>