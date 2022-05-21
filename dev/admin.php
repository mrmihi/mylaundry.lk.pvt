<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>MyLoundry.lk</title>
	<link rel="stylesheet" type="text/css" href="styles/Fotter_Header.css">
    <link rel="stylesheet" type="text/css" href="styles/admin.css">
	<script src="js/admin.js"></script>

	
	<script src="https://kit.fontawesome.com/a340bc40a1.js" crossorigin="anonymous"></script>
	<!--icon anf font pack-->
	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<!--icon pack-->
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
	<!--icon pack-->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <!-- Box icon pack link -->

</head>

<body>
    <!-- Bubbles -->
		<div class="wrapper">

			<div class="dot1"><span class="dot"></span></div>
			<div class="dot1"><span class="dot"></span></div>
			<div class="dot1"><span class="dot"></span></div>
			<div class="dot1"><span class="dot"></span></div>
			<div class="dot1"><span class="dot"></span></div>
			<div class="dot1"><span class="dot"></span></div>
			<div class="dot1"><span class="dot"></span></div>
			<div class="dot1"><span class="dot"></span></div>
			<div class="dot1"><span class="dot"></span></div>
			<div class="dot1"><span class="dot"></span></div>
			<div class="dot1"><span class="dot"></span></div>
			<div class="dot1"><span class="dot"></span></div>
			<div class="dot1"><span class="dot"></span></div>
			<div class="dot1"><span class="dot"></span></div>
			<div class="dot1"><span class="dot"></span></div>
		</div>
		<!-- End bubbles0 -->
	<div class="main">

		<div class="navbar">

			<div class="icon">
				<img class="logo" src="images/laundry service.jpg" alt="comapny logo"></img>
			</div>
			<!--end of icon div tag-->

			<div class="menu">
				<ul class="menu-ul">
					<li><a class="menu-a" href="home.html">HOME</a></li>
					<li><a class="menu-a" href="aboutus.html">ABOUT US </a></li>
					<li><a class="menu-a" href="howitworks.html">HOW IT WORKS</a></li>
					<li><a class="menu-a" href="FAQ.html">FAQ</a></li>
					<li><a class="menu-a" href="order.html">ORDER NOW</a></li>
					<li><a class="menu-a" href="pickup.html">PICKUP</a></li>
					<li><a class="menu-a" href="contactus.html">CONTACT US</a></li>
				</ul>
			</div>
			<!--end of menu div tag-->
			<div class="cart-profile">
				<a class="logo1" id="cart-logo" href=""><i class="fa-solid fa-cart-shopping"></i></a>
				<a class="logo2 "id="cart-logo" href=""><i class="fa-solid fa-user"></i></a>
			</div>
			<!--end of cart-profile div tag-->

		</div>
		<!--end of navbar div tag-->

        <div class="all">
            <div class="sidebar">
                <div class="logo_content">
                    <div class="admin_logo">
                        <i class='bx bxl-pocket'></i>
                        <div class="menu_name">Admin</div>
                    </div>
                    <i class='bx bx-menu' id="admin_btn" ></i>
                </div>
                <ul class="nav_list">
                    <li>
                            <i class='bx bx-search' ></i>
                            <input type="text" placeholder="Search...">
                    </li>
                    <li>
                        <a href="#">
                            <i class='bx bx-grid-alt' ></i>
                            <span class="links_name" >Dashboard</span>
                        </a>
                    </li> 
                    <li>
                        <a href="#">
                            <i class='bx bx-user' ></i>
                            <span class="links_name" >User</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class='bx bx-chat' ></i>
                            <span class="links_name" >Messages</span>
                        </a>
                    </li>
                    <li>
                        <a href="analytics.html">
                            <i class='bx bx-pie-chart-alt-2' ></i>
                            <span class="links_name" >Analytics</span>
                        </a>
                    </li>
                    <li>
                        <a href="./html/inquiry.php">
                            <i class='bx bx-folder' ></i>
                            <span class="links_name" >Inquaries</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class='bx bx-cart-alt' ></i>
                            <span class="links_name" >Order</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class='bx bx-heart' ></i>
                            <span class="links_name" >Saved</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class='bx bx-cog' ></i>
                            <span class="links_name" >Settings</span>
                        </a>
                    </li>
                    <li>
                        <a href="../login_register/login.php">
							<i class='bx bx-log-out'></i>
                            <span class="links_name" >Log-Out</span>
                        </a>
                    </li>
                </ul>
            </div>
            
     <!-- side bar j script -->
            <script>

                let btn = document.querySelector("#admin_btn");
                let sidebar = document.querySelector(".sidebar");
                let searchBtn = document.querySelector(".bx-search");

                btn.onclick = function functionName() {
                    sidebar.classList.toggle("active");
                }
                searchBtn.onclick = function functionName() {
                    sidebar.classList.toggle("active");
                }

            </script>
       <!-- End of side bar -->
    <div class="admin">
        <div class="dashboard">
            <h3>Admin Dashboard</h3>
            <div class="admin-content">
            <div class="btnaction">
                
            <select name="sel" class="btn btn1">
                <option value="value 1">Action if exist</option>
                <option value="value 2">1Action if exist</option>
                <option value="value 3">2Action if exist</option>
                <option value="value 4">3Action if exist</option>
            </select>

            <select name="sel2" class="btn btn2">
                    <option value="value 1">Select Database</option>
                    <option value="value 2">Select Database 1</option> 
                    <option value="value 3">Select Database 2</option>
                    <option value="value 4">Select Database 3</option>
                </select>
                </div>

            </div>

            <div id="boxbtn">
                <button id="boxbtn1"  onclick="buttonFunction('boxbtn1')">Tasks</button>
                <button id="boxbtn2"  onclick="buttonFunction('boxbtn2')">History</button>
                
            </div>

            <!-- Start Table -->
            <div class="tbl1">
            <table class="content-table">
                <thead>
                    <tr>
                        <th id="th1">Task type</th>
                        <th id="th2">Data Created</th>
                        <th id="th3">Data Planned</th>
                        <th id="th4">Info</th>
                        <th id="th5">Started</th>
                        <th id="th6">Finished</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td id="td1">Type 1</td>
                        <td><input type="date"></td>
                        <td><input type="date"></td>
                        <td id="td2">Complete progress 100% (1 / 1)</td>
                        <td><input type="Date"></td>
                        <td><input type="date"></td>
                    </tr>
                    <tr>
                        <td id="td3">Type 2</td>
                        <td><input type="date"></td>
                        <td><input type="date"></td>
                        <td id="td4">Complete progress 100% (1 / 1)</td>
                        <td><input type="Date"></td>
                        <td><input type="date"></td>
                    </tr>
                    <tr>
                        <td id="td5">Type 3</td>
                        <td><input type="date"></td>
                        <td><input type="date"></td>
                        <td id="td6">Complete progress 100% (1 / 1)</td>
                        <td><input type="Date"></td>
                        <td><input type="date"></td>
                    </tr>
                    <tr>
                        <td id="td7">Type 4</td>
                        <td><input type="date"></td>
                        <td><input type="date"></td>
                        <td id="td8">Complete progress 100% (1 / 1)</td>
                        <td><input type="Date"></td>
                        <td><input type="date"></td>
                    </tr>
                    <tr>
                        <td id="td9">Type 5</td>
                        <td><input type="date"></td>
                        <td><input type="date"></td>
                        <td id="td10">Complete progress 100% (1 / 1)</td>
                        <td><input type="Date"></td>
                        <td><input type="date"></td>
                    </tr>
                </tbody>
            </table>
        </div>
            <!-- End table -->
            <button class="savebtn" onclick="buttonFunction1()">Save</button>
        </div>
    </div>
</div>


		<div class="fotter">

			<div class="content-1">
				<center>

					<h3>mobile app</h3>
					<a href="https://play.google.com/store/apps"><img class="app-googleplay"
							src="images/googleplay.jpg"></a> <br>
					<a href="https://www.apple.com/app-store/"><img class="app-appstore" src="images/appstore.jpg"></a>

				</center>

			</div>
			<!--end of content-1 div tag-->
			<div class="content-2">

				<h4 class="line-1">E-mail: user@gmailcom </h4>
				<h4 class="line-2"> Address line 1 , Address line 2, City.</h4>
				<a class="infor-line" href="privacy.html">
					<h4 class="line-3">Privacy Policy</h4>
				</a>
				<a class="infor-line" href="termofservices.html">
					<h4 class="line-4">Terms of Services</h4>
				</a>
				<h4 class="line-5">Copyright Infromation</h4>

				<div class="social-links">
					<a class="social-links-a" href="https://www.facebook.com"><i
							class="fa-brands fa-facebook-square"></i></a>
					<a class="social-links-a" href="https://twitter.com"><i class="fa-brands fa-twitter-square"></i></a>
					<a class="social-links-a" href="https://www.instagram.com"><i
							class="fa-brands fa-instagram"></i></a>
					<a class="social-links-a" href="https://www.google.com/account"><i
							class="fa-brands fa-google-plus-square"></i></a>

				</div>
				<!--end of social-links div tag-->
			</div>
			<!--end of content-2 div tag-->

			<div class="content-3">
				<h3 id="quick-link-header">Quicks Links</h3>
				<ul class="quick-link-ul">
					<li><a class="quick-link-a" href="analytics.html">Analytics</a></li>
					<li><a class="quick-link-a" href="package.html">Packages</a></li>
					<li><a class="quick-link-a" href="login.html">login</a></li>
					<li><a class="quick-link-a" href="donation.html">Donate</a></li>
					<li><a class="quick-link-a" href="thankyou.html">Item 5</a></li>
				</ul>

			</div>
			<!--end of content-3 div tag-->
		</div>
		<!--end of fotter div tag-->
	</div>
	<!--end of main div tag-->


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

    lastScrollY = 0;
  });
}


	</script>
</body>

</html>