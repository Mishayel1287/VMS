
<!DOCTYPE html>
<head>
	<title>Volunteer Platform</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href= "applicationStyle.css"/>

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
                    <a href="/GroupProject/index.html">HOME</a>
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
            <h1>Application Form</h1><br>
            <form name="form" action="" method="POST">
                <label>First Name</label><br>
                <input type="text" id="fname" name="fname" required></br></br>

                <label>Last Name</label><br>
                <input type="text" id="lname" name="lname" required></br></br>

                <label>E-mail Address</label><br>
                <input type="text" id="email" name="email" required></br></br>

                <label>Address</label><br>
                <input type="text" id="address" name="address" required></br></br>

                <label>City</label><br>
                <input type="text" id="city" name="city" required></br></br>

                <label>Phone No</label><br>
                <input type="text" id="phoneNo" name="phoneNo" required></br></br>

                <label>Days You Are Available</label><br>
                <input type="checkbox" id="monday" name="monday" value="monday">
                <label for="monday">Monday</label><br>
                <input type="checkbox" id="tuesday" name="tuesday" value="tuesday">
                <label for="tuesday">Tuesday</label><br>
                <input type="checkbox" id="wednesday" name="wednesday" value="wednesday">
                <label for="wednesday">Wednesday</label><br>
                <input type="checkbox" id="thursday" name="thursday" value="thursday">
                <label for="thursday">Thursday</label><br>
                <input type="checkbox" id="friday" name="friday" value="friday">
                <label for="friday">Friday</label><br>
                <input type="checkbox" id="saturday" name="saturday" value="saturday">
                <label for="saturday">Saturday</label><br>
                <input type="checkbox" id="sunday" name="sunday" value="sunday">
                <label for="sunday">Sunday</label><br><br>

                <label>Hours You Are Available</label><br><br>
<label>Start Time</label>
<input type="time" id="Stime" name="Stime" required placeholder="HH:MM" pattern="[0-9]{2}:[0-9]{2}"></br>
<label>End Time</label>
<input type="time" id="Etime" name="Etime" required placeholder="HH:MM" pattern="[0-9]{2}:[0-9]{2}"></br><br>


                <label>Which role you prefer?</label><br>

                <select name="role" id="role" >
                                    <option value="LVolunteer">Lead Volunteer</option>
                                    <option value="Trustee">Trustee</option>
                                    <option value="Psychiatry">Volunteering</option>
                                    <option value="hospitals">Volunteering in hospitals</option>
                                    <option value="animalShelter">Animal Shelter</option>
                                    <option value="organizing">Organizing Competitions</option>
                                    <option value="photographer">Photographer</option>
                                    <option value="other">Other</option>
                                  </select><br><br>

                <label>If you select other please mention your prefer role</label><br>
                <input type="text" id="otherRole" name="otherRole" ></br></br>

                <label>Qualifications</label><br>
                <input type="text" id="qualifications" name="qualifications" required></br></br>

                <label>Do you have any criminal cases?</label><br>
                <input type="text" id="ccase" name="ccase" required></br></br>

                <label>Do you have a valid driver's license?</label><br>
                <input type="text" id="license" name="license" required></br></br>

                <input type="submit" id="btn" value="submit" name = "submit"/>
            </form>
      </div>
</div>

<!--Footer Start-->
<br>
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


     <?php
//include db connection file
include "connection.php";
  if (isset($_POST['submit'])) {
        $fname          = $_POST["fname"];
        $lname          = $_POST["lname"];
        $email          = $_POST["email"];
        $address        = $_POST["address"];
        $city           = $_POST["city"];
        $phoneNo        = $_POST["phoneNo"];
        $monday         = $_POST["monday"];
        $tuesday        = $_POST["tuesday"];
        $wednesday      = $_POST["wednesday"];
        $thursday       = $_POST["thursday"];
        $friday         = $_POST["friday"];
        $saturday       = $_POST["saturday"];
        $sunday         = $_POST["sunday"];
        $Stime          = $_POST["Stime"];
        $Etime          = $_POST["Etime"];
        $role           = $_POST["role"];
        $otherRole      = $_POST["otherRole"];
        $qualifications = $_POST["qualifications"];
        $ccase          = $_POST["ccase"];
        $license        = $_POST["license"];

    //insert data
    $sql = "INSERT INTO `Application`(`fname`, `lname`, `email`, `address`, 
    `city`, `phoneNo`, `monday`, `tuesday`, `wednesday`, `thursday`, `friday`, `saturday`, `sunday`, `Stime`, `Etime`,`role`,`otherRole`, `qualifications`, `ccase`, `license`) VALUES 
    ('$fname','$lname','$email','$address','$city','$phoneNo','$monday','$tuesday','$wednesday','$thursday','$friday','$saturday','$sunday','$Stime','$Etime','$role','$otherRole' ,'$qualifications' ,'$ccase' ,'$license')";
     $result = mysqli_query($conn, $sql);
        
     if ($result) {
         header("Location: ");
     }else { 
        echo  '<script>
                alert("Error");
            </script>';
    }      
    $conn->close();
  }
?>


 