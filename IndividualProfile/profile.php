<?php
//include db connection file
include "connection.php";
  if (isset($_POST['submit'])) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $city = $_POST["city"];
        $phoneNo = $_POST["phoneNo"];
        $interest = $_POST["interest"];
        $otherInterests = $_POST["otherInterests"];
        $talent = $_POST["talent"];
        $leadership = $_POST["leadership"];
        $communication = $_POST["communication"];
        $management = $_POST["management"];
        $attitude = $_POST["attitude"];
        $teamWork = $_POST["teamWork"];
        $adaptability = $_POST["adaptability"];
        $empathy = $_POST["empathy"];


    //insert data
    $sql = "INSERT INTO `IndividualProfile`(`name`, `email`, `city`, `phoneNo`, 
    `interest`, `otherInterests`, `talent`, `leadership`, `communication`, `management`, `attitude`
    , `teamWork`, `adaptability`, `empathy`) VALUES 
    ('$name','$email','$city','$phoneNo'   ,'$interest' ,'$otherInterests' ,'$talent','$leadership','$communication',
    '$management','$attitude','$teamWork','$adaptability','$empathy')";
     $result = mysqli_query($conn, $sql);
        
     if ($result) {
      // Set session message
      $_SESSION['message'] = "Profile successfully created!";
      header("Location: your-destination.php"); // Redirect to a destination page
      exit;
  } else {
      echo '<script>alert("Error: Unable to insert data.");</script>';
  }
  $conn->close();
}
?>