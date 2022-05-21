<?php 

require '../php/config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: index.php");
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);

	if ($password == $cpassword) {
		$sql = "SELECT * FROM login_register WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO login_register (username, email, password)
					VALUES ('$username', '$email', '$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Wow! User Registration Completed.')</script>";
				$username = "";
				$email = "";  
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
				header("Location: login.php");
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
		}
		
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>MyLoundry.lk</title>
	<link rel="stylesheet" type="text/css" href="../css/header-footer.css">
	<link rel="stylesheet" type="text/css" href="../css/login-register.css">

<!-- This icon pack is  used to geticons that is used in the footer -->
	<script src="https://kit.fontawesome.com/a340bc40a1.js" crossorigin="anonymous"></script> 


</head>
<body>
	

		<div class ="navbar">
			
		    <div class="icon">
			    <img class="logo" src="../images/laundry service.jpg" alt="comapny logo"></img>
		    </div><!--end of icon div tag-->

		        <div class="menu">
			        <ul  class="menu-ul">
				        <li ><a class="menu-a" href="home.html">HOME</a></li>
				        <li ><a class="menu-a"  href="about-us.html">ABOUT US </a></li>
				        <li ><a class="menu-a"  href="how-it-works.html">HOW IT WORKS</a></li>
				        <li ><a class="menu-a"  href="faq.html">FAQ</a></li>
				        <li ><a class="menu-a"  href="order.php?type=showAll">ORDER NOW</a></li>
				        <li ><a class="menu-a"  href="pickup.html">PICKUP</a></li>
				        <li ><a class="menu-a"  href="contact-us.php">CONTACT US</a></li>
			        </ul>
		        </div><!--end of menu div tag-->

		         <div class="cart-profile">
		         		<a href="user.php"><img  class="user-icon"src="../images/user-icon.png" width = 35px></a>
		         </div><!--end of cart-profile div tag-->

		</div> <!--end of navbar div tag-->

<!-- ---------------------------HEADER ENDS HERE--------------------------------------------------------------------- -->	
		


<div class="container">
		<form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
			<div class="input-group">
				<input type="text" placeholder="Username" name="username" value="" required>
			</div>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="" required>
            </div>
            <div class="input-group">
				<input type="password" placeholder="Confirm Password" name="cpassword" value="" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Register</button>
			</div>
			<p class="login-register-text">Have an account? <a href="login.php">Login Here</a>.</p>
		</form>
	</div>

<!-- ---------------------------FOOTER BEGINS HERE--------------------------------------------------------------------- -->		
		<div class="footer">
			
			<div class="content-1">
				<center>
		
				<h3>Mobile App</h3>
				<a href="https://play.google.com/store/apps"><img class="app-googleplay" src="../images/googleplay.jpg"></a> <br>
				<a href="https://www.apple.com/app-store/"><img class="app-appstore" src="../images/appstore.jpg"></a>
				
				</center>

			</div><!--end of content-1 div tag-->
			<div class="content-2">
                    
				    <h4 class="line-1">mylaundry.lk@gmail.com </h4>
				    <h4 class="line-2">133, St.Peters Road, Colombo</h4>
				    <a  class="infor-line" href="privacy-policy.html">Privacy Policy</a><br>
				    <a  class="infor-line" href="terms-of-services.html">Terms of Services</a>
				    <h4 class="line-5"> &copy; Copyright Infromation</h4>

				<div class="social-links">
					<a class="social-links-a" href="https://www.facebook.com"><i class="fa-brands fa-facebook-square"></i></a>
					<a class="social-links-a" href="https://twitter.com"><i class="fa-brands fa-twitter-square"></i></a>
					<a class="social-links-a" href="https://www.instagram.com"><i class="fa-brands fa-instagram"></i></a>
					<a class="social-links-a" href="https://www.google.com/account"><i class="fa-brands fa-google-plus-square"></i></a>
					
				</div> <!--end of social-links div tag-->
			</div> <!--end of content-2 div tag-->

			<div class="content-3">
				<h3 id="quick-link-header">Frequent Links</h3>
				<ul class="quick-link-ul">
					<li><a class="quick-link-a" href="services.html">Services</a></li>
					<li ><a class="quick-link-a" href="package.html">Packages</a></li>
					<li ><a class="quick-link-a" href="donate.html">Donate</a></li>
					<li ><a class="quick-link-a"  href="login.php">Login</a></li>
					<li ><a class="quick-link-a" href="register.php">Register</a></li>
				</ul>	

			</div> <!--end of content-3 div tag-->	
		</div>	<!--end of footer div tag-->	
	

	
</body>

<script>
		// Enable hidden nav bar
    
        const nav = document.querySelector(".navbar");
        let lastScrollY = window.scrollY;

        window.addEventListener("scroll", () => {
        if (lastScrollY < window.scrollY) {
        nav.classList.add("nav-hidden");
        } else {
        nav.classList.remove("nav-hidden");
        }

        lastScrollY = 0;
        });
 
 </script>

</html>