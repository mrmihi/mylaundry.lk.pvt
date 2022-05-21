 <?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>MyLoundry.lk</title>
	<link rel="stylesheet" type="text/css" href="styles/Fotter_Header.css">
	<link rel="stylesheet" type="text/css" href="styles/">
	<script type="text/javascript" src="js/myScript.js"></script>
	<script src="https://kit.fontawesome.com/a340bc40a1.js" crossorigin="anonymous"></script> <!--icon anf font pack-->

	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>  <!--icon pack-->
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script> <!--icon pack-->

	<style>
		h1 
		{
			margin-top: 200px;
			margin-left: 500px;
		}
		.logout
		{
			margin-top: 200px;
			margin-left: 500px;
		}

		
	</style>

</head>
<body>
	<div class="main">

		<div class="navbar">
			
		    <div class="icon">
			    <img class="logo" src="images/laundry service.jpg" alt="comapny logo"></img>
		    </div><!--end of icon div tag-->

		        <div class="menu">
			        <ul  class="menu-ul">
				        <li ><a class="menu-a" href="home.html">HOME</a></li>
				        <li ><a class="menu-a"  href="aboutus.html">ABOUT US </a></li>
				        <li ><a class="menu-a"  href="howitworks.html">HOW IT WORKS</a></li>
				        <li ><a class="menu-a"  href="FAQ.html">FAQ</a></li>
				        <li ><a class="menu-a"  href="order.html">ORDER NOW</a></li>
				        <li ><a class="menu-a"  href="pickup.html">PICKUP</a></li>
				        <li ><a class="menu-a"  href="contactus.html">CONTACT US</a></li>
			        </ul>
		        </div><!--end of menu div tag-->
		         <div class="cart-profile">
		         	<a id="cart-logo" href=""><i class="fa-solid fa-cart-shopping"></i></a>
		         	<a id="cart-logo" href="login.php"><i class="fa-solid fa-user"></i></a>
		         </div><!--end of cart-profile div tag-->

		</div> <!--end of navbar div tag-->


        <?php echo "<h1 >Welcome " . $_SESSION['username'] . "</h1>"; ?>
    <a class="logout" href="logout.php">Logout</a>

		<div class="fotter">
			
			<div class="content-1">
				<center>
		
				<h3>mobile app</h3>
				<a href="https://play.google.com/store/apps"><img class="app-googleplay" src="images/googleplay.jpg"></a> <br>
				<a href="https://www.apple.com/app-store/"><img class="app-appstore" src="images/appstore.jpg"></a>
				
				</center>

			</div><!--end of content-1 div tag-->
			<div class="content-2">
				
				    <h4 class="line-1">E-mail: user@gmailcom </h4>
				    <h4 class="line-2"> Address line 1 , Address line 2, City.</h4>
				    <a  class="infor-line" href="privacy.html"><h4 class ="line-3">Privacy Policy</h4></a>
				    <a  class="infor-line" href="termofservices.html"><h4 class="line-4">Terms of Services</h4></a>
				    <h4 class="line-5">Copyright Infromation</h4>

				<div class="social-links">
					<a class="social-links-a" href="https://www.facebook.com"><i class="fa-brands fa-facebook-square"></i></a>
					<a class="social-links-a" href="https://twitter.com"><i class="fa-brands fa-twitter-square"></i></a>
					<a class="social-links-a" href="https://www.instagram.com"><i class="fa-brands fa-instagram"></i></a>
					<a class="social-links-a" href="https://www.google.com/account"><i class="fa-brands fa-google-plus-square"></i></a>
					
				</div> <!--end of social-links div tag-->
			</div> <!--end of content-2 div tag-->

			<div class="content-3">
				<h3 id="quick-link-header">Quicks Links</h3>
				<ul class="quick-link-ul">
					<li><a class="quick-link-a" href="analytics.html">Analytics</a></li>
					<li ><a class="quick-link-a" href="package.html">Packages</a></li>
					<li ><a class="quick-link-a" href="">login</a></li>
					<li ><a class="quick-link-a"  href="donation.html">Donate</a></li>
					<li ><a class="quick-link-a" href="thankyou.html">Item 5</a></li>
				</ul>	

			</div> <!--end of content-3 div tag-->	
		</div>	<!--end of fotter div tag-->	
	</div> <!--end of main div tag-->

	<script>
		// Enable hidden nav bar
    {
        const nav = document.querySelector(".navbar");
        let lastScrollY = window.scrollY;

        window.addEventListener("scroll", () => {
        if (lastScrollY < window.scrollY) {
        nav.classList.add("nav-hidden");
        } else {
        nav.classList.remove("nav-hidden");
        }

        lastScrollY = 70;
        });
    }
    </script>
</body>
</html>