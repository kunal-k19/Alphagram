<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title></title>
	<link rel="stylesheet" type="text/css" href="contact.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	
	<!-- <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script> -->
	
</head>
<body>
	
		<div class="wrapper ">
	
	<nav class="navbar">
			<input type="checkbox" id="check"/>
			<label for="check" class="lab"><i class="fas fa-bars"></i></label>
			<label class="logo"><a href="portrait.html">ALPHA<span>GRAM</span></a></label>
			<ul >
				<li><a href="portrait.html">Home</a></li>
				<li><a href="#">About Me</a></li>
				<li><a href="work.html">My Work</a></li>
				<li><a href="#">Contact</a></li>

			</ul>
			
		

	</nav>
	</div>
	<section class="home" id="home">
		<div class="picture" id="parallax">
			
			<h1>ALPHA<span>GRAM</span></h1>
			
			
			
		</div>

		<div class="contact">
						<?php

			$Msg="";
			if (isset($_GET['status'])){
			if ($_GET['status']=="success"){

				$Msg="Your message has been sent";
				echo "<div class=\"alert-success\" role=\"alert\" id=\"contact\">".$Msg."</div>";
			}
}
			

			?>
			<div class="text"><p>GET IN TOUCH</p></div>
			<div class="line"></div>
			<form action="contactinfo.php" method="POST">
			  <div class="form-group">
			    <label class="label">Name</label><br><br>
			    <input type="text" name="name" class="form-control" required>
			    
			  </div>
			  <div class="form-group">
			    <label class="label">E-mail Address</label><br><br>
			    <input type="email" name="email" class="form-control" required>
			  </div>

			  <div class="form-group">
			    <label class="label">Message</label><br><br>
			    <textarea name="message" required></textarea>
			  </div>
			 
			  <button type="submit" name="submit" class="btn btn-primary">SEND</button>
			</form>

		</div>


		
<div class="footer">
		<a href="#"><i class="fab fa-facebook"></i></a>
		<a href="#"><i class="fab fa-instagram"></i></a>
		<a href="#"><i class="fab fa-youtube"></i></a>
		<div class="footer2"><p>Aurangabad, India | <i class="far fa-copyright"> </i> Alphagram. All Rights Reserved</p></div>
		
	</div>
	<script src="main.js"></script>
	
	
	
</body>
</html>