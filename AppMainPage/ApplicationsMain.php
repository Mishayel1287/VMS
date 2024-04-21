<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>


    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">

    <!--CSS libraries-->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/slick/slick.css" rel="stylesheet">
    <link href="lib/slick/slick-theme.css" rel="stylesheet">

<style>

* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}
/*top-bar css*/
.top-bar {
  padding: 3px 0;
  font-size: 15px;
  color: white;
  background: #202020;
}

.top-bar i {
  margin-right: 5px;
}

.top-bar .col-sm-6:first-child {
  text-align: left;
}

.top-bar .col-sm-6:last-child {
  text-align: right;
}

@media (max-width: 575.98px) {
  .top-bar {
      border-bottom: 1px solid rgba(255,255,255,.1);
  }
  
  .top-bar .col-sm-6:first-child,
  .top-bar .col-sm-6:last-child {
      text-align: center;
  }
}
/* end top-bar css*/

/*Logo css*/
.logo {
  text-align: center;
}

/*nav-bar css*/
nav {
  background-color: #202020;
  color: #fff;
}

.container {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 20px;
}

.nav-links {
  list-style: none;
  display: flex;
}

.nav-links li {
  margin-left: 20px;
}

.nav-links li a {
  text-decoration: none;
  color: white;
  transition: color 0.3s ease;
}

.nav-links li a:hover {
  color: #FF6F61; 
}

.nav-items {
  list-style: none;
  display: flex;
}

.cont {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 0;
}
.nav-items li {
  margin-right: 20px;
}

.nav-items li a {
  text-decoration: none;
  color: white;
  transition: color 0.3s ease;
}

.nav-items li a:hover {
  color: #FF6F61; 
}

/*footer css*/
.footer {
  position: relative;
  padding: 10px 0 0 0;
  background:  #202020;
  height: 300px;
}

.footer .footer-widget {
  position: relative;
  width: 100%;
  margin-bottom: 30px;
  background-color:  #202020;
}

.footer .footer-widget h2 {
  font-size: 25px;
  white-space: nowrap;
  margin-bottom: 20px;
  color: #ccc; 
}

.footer .footer-widget ul {
  margin: 0;
  padding: 0;
  list-style: none;
}

.footer .footer-widget ul li {
  margin-bottom: 12px; 
}

.footer .footer-widget ul li:last-child {
  margin-bottom: 0; 
}

.footer .footer-widget ul li a {
  color: #ccc;
  white-space: nowrap;
  display: block;
  line-height: 20px;
  transition: all .3s;
  color: #ccc; 
}

.footer .footer-widget ul li a::before {
  content: '\f105';
  font-family: 'Font Awesome 5 Free';
  font-weight: 900;
  padding-right: 5px;
  color: #ccc; 
}

.footer .footer-widget ul li a:hover {
  color: #FF6F61;
}

.footer .footer-widget ul li a:hover::before {
  content: '\f101';
  font-family: 'Font Awesome 5 Free';
  font-weight: 900;
}

.footer .contact-info p {
  margin-bottom: 10px;
  font-size: 16px;
  color: #ccc; 
}

.footer .contact-info p i {
  margin-right: 5px;
}

.footer .social {
  position: relative;
  width: 100%;
  color: #ccc; 
}

.footer .social a {
  display: inline-block;
  margin: 10px 5px 0 0;
  width: 40px;
  height: 40px;
  padding: 6px 0;
  text-align: center;
  font-size: 18px;
  color: #ccc;
  border: 1px solid #353535;
  border-radius: 4px;
  transition: all .3s;
}

.footer .social a:hover {
  color: #FF6F61;
  border-color: #FF6F61;
}

.bottom-footer {
  text-align: center;
  padding-top: 15px;
  padding-bottom: 15px;
  background-color: #222;
  color: #ccc;
}
/*end footer*/

.banner {
  padding: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 500px;
  background-color: white;
  margin: 0;
}

.image {
  width: 380px; 
  height: 300px; 
  margin: 0 20px;
  transition: transform 0.3s ease;
  cursor: pointer;
}

.image:hover {
  transform: scale(1.2); 
}

</style>

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
        <img src="assets/logo.jfif" alt="logo">
    </div>
    <!--logo row end-->
     <!--nav-bar start-->
     <nav>
        <div class="container">
            <ul class="nav-links">
                <li>
                    <a href="index.html">HOME</a>
                </li>
                <li><a href="/GroupProject/volunteer/Individualprofile.php">PERSONAL APPLICATION</a></li>
                <li><a href="/GroupProject/volunteer/organizationprofile.php">ORGANIZATIONAL APPLICATION</a></li>
            </ul>
        </div>
     </nav>

     <div class="banner">
     <a href="/GroupProject/volunteer/Individualprofile.php">
        <img src="assets/organization.jpg" alt="Image 1" class="image"></a>

     <a href="/GroupProject/volunteer/organizationprofile.php">
        <img src="assets/personal.jpg" alt="Image 2" class="image"></a>
        
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

            