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