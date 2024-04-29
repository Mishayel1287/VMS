<!DOCTYPE html>

<html lang="eng">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact Us Form</title>
        <link rel="stylesheet" href="style1.css">
        <link rel="stylesheet" href="home.css">

    </head>

<body>

 <!--logo row start-->
     <div class="logo">
        <img src="logo.jfif" alt="logo">
        </form>
    </div>
    <!--logo row end-->
     <!--nav-bar start-->
     <nav>
        <div class="container">
            <ul class="nav-links">
                <li>
                    <a href="./../index.html">HOME</a>
                </li>
                <li><a href="/GroupProject/aboutus/aboutus.php">ABOUT US</a></li>
                <li><a href="">CONTACT US</a></li>
                <li><a href="/GroupProject/livechat/" target="_blank">LIVE CHAT</a></li>
            </ul>
            <div class="cont">
                <ul class="nav-items">
                    <li><a href="registrationform">Sign Up</a></li>
                    <li><a href="login/login.php">Sign In</a></li>

                </ul>
                <ul>
                <div class="profile">
                    <img src="circle.png" alt="Profile Icon">
                </div>
                </ul>
            </div>
        </div>
    </nav>
    <!--nav bar end-->
    
        <div class="contact-form">
            <h1>Contact Us</h1>
        </div>
        <div class="contact-us">
            <form action="sv.php" method="POST">
        <input type="text" name="fname"   class="form-control" placeholder="Enter First Name"> <br>
           <input type="text" name="lname"  class="form-control" placeholder="Enter last Name"> <br>
           <input type="email" name="email"  class="form-control" placeholder="Enter Email"> <br>
           <input type="text" name="message"  class="form-control" placeholder="Type Your Message"> <br>

           <input type="submit" class="form-control submit" value="submit" >
            </form>
        </div>
    </body>
</html>