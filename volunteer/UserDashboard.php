<!DOCTYPE html>
<head>
	<title>Volunteer Platform</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="UserDashboardStyle.css"/>

     <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">

    <!--CSS libraries-->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/slick/slick.css" rel="stylesheet">
    <link href="lib/slick/slick-theme.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>

<body>

<!-- Top bar Start -->
<div class="top-bar">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <i class="fa fa-envelope"></i>
                    example@gmail.com
                </div>
                <div class="col-sm-6">
                    <i class="fa fa-phone-alt"></i>
                    076-2474393
                </div>
            </div>
        </div>
    </div>
    <!-- Top bar End -->

    <!--logo row start-->
    <div class="logo">
        <img src="logo.jfif" alt="logo">
    </div>
    <!--logo row end-->

     <!--nav-bar start-->
     <nav>
        <div class="container">
            <ul class="nav-links">
                <li>
                    <a href="/GroupProject/">HOME</a>
                </li>
                <li><a href="">ABOUT US</a></li>
                <li><a href="">CONTACT US</a></li>
            </ul>
            
        </div>
    </nav>
    <!--nav bar end-->

	<!-- for header part -->
	    <div class="searchbar">
        <input type="text" placeholder="Search..." name="search">
        <button type="submit"><i class="fa fa-search"></i></button>
    </div>
	

<!--navigation part-->
	<div class="main-container">
		<div class="navcontainer">
			<nav class="nav">
				<div class="nav-upper-options">
					<div class="nav-option option1">
						<img src="menu icon.png" class="nav-img" alt="dashboard">
						<h3> Dashboard</h3>
					</div>

					<a href="IndividualProfile.php"> <div class="option2 nav-option">
                    <i class="fa fa-user" style="font-size:38px"></i>
						<h3> My Profile</h3>
					</div></a>

					<a href="/GroupProject/schedule/"><div class="nav-option option3">
                    <i class="fa fa-calendar" style="font-size:38px"></i>
						<h3> My Schedule</h3>
					</div></a>

					<a href=""><div class="nav-option option4">
                    <i class="fa fa-sign-out" style="font-size:38px"></i>
						<h3>Sign Out</button></h3>
					</div>
					</a>

					<div class="nav-option logout">
                    <i class="fa fa-gear" style="font-size:38px; color:dodgerblue"></i>
						<a href=""><h3>Settings</h3></a>
					</div>
				</div>
			</nav>
		</div>

		<div class="main">
			<div class="searchbar2">
				<input type="text" name="" id="" placeholder="Search">
			</div>

			<div class="box-container">
				<a href="/GroupProject/events/event-list.php"><div class="box box1">
					<div class="text"> <h2 class="topic">Events</h2>
					</div> <i class="fa fa-calendar-plus-o" style="font-size:48px;color:white"></i>
				</div></a>

				<a href=""><div class="box box2">
					<div class="text"> <h2 class="topic">Opportunities</h2>
					</div> <i class="fas fa-clipboard" style="font-size:48px;color:white"></i>
				</div></a>

				<a href="application.php"><div class="box box3">
					<div class="text"> <h2 class="topic">Sign Up for volunteer roles</h2>
					</div> <i class="fa fa-users" style="font-size:48px;color:white"></i>
				</div></a>

				<a href=""><div class="box box4">
					<div class="text"> <h2 class="topic">View volunteer time</h2>
					</div><i class="fa fa-clock-o" style="font-size:48px;color:white"></i>
				</div></a>						

					</div>
				</div>
			</div>
		</div>
	</div>	

    <!--Footer Start-->
<br><br><br>
     <div class="footer">
         <br><br><br><br><br>
         <div class="container-fluid">
             <div class="row">
                 <div class="col-lg-3 col-md-6">
                     <div class="footer-widget">
                         <h2>Get in Touch</h2>
                         <div class="contact-info">
                             <p><i class="fa fa-map-marker"></i>123 E Colombo, Sri Lanka</p>
                             <p><i class="fa fa-envelope"></i>example@gmail.com</p>
                             <p><i class="fa fa-phone"></i>011-5681225</p>
                         </div>
                     </div>
                 </div>
                 
                 <div class="col-lg-3 col-md-6">
                     <div class="footer-widget">
                         <h2>Follow Us</h2>
                         <div class="contact-info">
                             <div class="social">
                                 <a href=""><i class="fab fa-twitter"></i></a>
                                 <a href=""><i class="fab fa-facebook-f"></i></a>
                                 <a href=""><i class="fab fa-linkedin-in"></i></a>
                                 <a href=""><i class="fab fa-instagram"></i></a>
                                 <a href=""><i class="fab fa-youtube"></i></a>
                             </div>
                         </div>
                     </div>
                 </div>

                 <div class="col-lg-3 col-md-6">
                     <div class="footer-widget">
                         <h2>Organization Info</h2>
                         <ul>
                             <li><a href="#">About Us</a></li>
                             <li><a href="#">Privacy Policy</a></li>
                             <li><a href="#">Terms & Condition</a></li>
                         </ul>
                     </div>
                 </div>
                 <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h2>Volunteer Opportunities</h2>
                        <ul>
                            <li><a href="#">Opportunity 1</a></li>
                            <li><a href="#">Opportunity 2</a></li>
                            <li><a href="#">Opportunity 3</a></li>
                        </ul>
                    </div>
                </div>
             </div>
         </div>
     </div>
     <!--Footer End-->

     <!--bottom footer start-->
     <footer class="bottom-footer">
         <p>&copy; 2024 Example | Designed by Example</p>
     </footer>
       <!--bottom footer end-->
</body>
</html>
