
<!DOCTYPE html>
<head>
	<title>Volunteer Platform</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="profile.css"/>

     <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">

    <!--CSS libraries-->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/slick/slick.css" rel="stylesheet">
    <link href="lib/slick/slick-theme.css" rel="stylesheet">
    
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
                    <a href="index.html">HOME</a>
                </li>
                <li><a href="">ABOUT US</a></li>
                <li><a href="">CONTACT US</a></li>
            </ul>
            
        </div>
    </nav>
    <!--nav bar end-->

<div class="image">
    <!--form start-->
<div id="form">
            <h1>My Profile</h1><br>
            <form name="form" action="" method="POST">
                <label> Name</label><br>
                <input type="text" id="name" name="name" required></br></br>           

                <label>E-mail </label><br>
                <input type="text" id="email" name="email" required></br></br>

                <label>City</label><br>
                <input type="text" id="city" name="city" required></br></br>

                <label>Phone No</label><br>
                <input type="text" id="phoneNo" name="phoneNo" required></br></br>
            
                <label>Volunteer Interests</label><br>
                <select name="interest" id="interest" >
                                    <option value="mentoring">Mentoring programs </option>
                                    <option value="animals">Working with animals </option>
                                    <option value="food">Food preparation and relief </option>
                                    <option value="children">Working with children</option>
                                    <option value="outdoor">Outdoor activities </option>                                   
                                    <option value="other">Other</option>
                                  </select><br><br>

                <label>If you choose other please specify your interests</label><br>
                <input type="text" id="otherInterests" name="otherInterests" ></br></br>

                <label>What are your talents?</label><br>
                <input type="text" id="talent" name="talent" ></br></br>

                <label>What skills do you have?</label><br>      
                <input type="checkbox" id="leadership" name="leadership" value="leadership">
                <label for="leadership">Leadership</label>         
                <input type="checkbox" id="communication" name="communication" value="communication">
                <label for="communication">Communication</label>
                <input type="checkbox" id="management" name="management" value="management">
                <label for="management">Time management</label>
                <input type="checkbox" id="attitude" name="attitude" value="attitude">
                <label for="attitude">Positive attitude</label>
                <input type="checkbox" id="teamWork" name="teamWork" value="teamWork">
                <label for="teamWork">Team work</label>
                <input type="checkbox" id="adaptability" name="adaptability" value="adaptability">
                <label for="adaptability">Adaptability</label>
                <input type="checkbox" id="empathy" name="empathy" value="empathy">
                <label for="empathy">Empathy</label>        

                <input type="submit" id="btn" value="Save" name = "submit"/>
            </form>
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

 <!--body end-->
</body>
</html>