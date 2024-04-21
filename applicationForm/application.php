<?php
// Include db connection file
include "connection.php";

if (isset($_POST['submit'])) {
    // Retrieve form data
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $city = $_POST["city"];
    $phoneNo = $_POST["phoneNo"];
    $monday = $_POST["monday"];
    $tuesday = $_POST["tuesday"];
    $wednesday = $_POST["wednesday"];
    $thursday = $_POST["thursday"];
    $friday = $_POST["friday"];
    $saturday = $_POST["saturday"];
    $sunday = $_POST["sunday"];
    $Stime = $_POST["Stime"];
    $Etime = $_POST["Etime"];
    $qualifications = $_POST["qualifications"];
    $ccase = $_POST["ccase"];
    $license = $_POST["license"];

    // Insert data into database
    $sql = "INSERT INTO `Application`(`fname`, `lname`, `email`, `address`, 
    `city`, `phoneNo`, `monday`, `tuesday`, `wednesday`, `thursday`, `friday`, `saturday`, `sunday`, `Stime`, `Etime`, `qualifications`, `ccase`, `license`) VALUES 
    ('$fname','$lname','$email','$address','$city','$phoneNo','$monday','$tuesday','$wednesday','$thursday','$friday','$saturday','$sunday','$Stime','$Etime','$qualifications','$ccase','$license')";
    $result = mysqli_query($conn, $sql);
        
    if ($result) {
        // Redirect to success page
        header("Location: application.php"); // Replace "success.php" with your actual success page
        exit(); // Ensure no further code execution after redirection
    } else { 
        // Display error message
        echo  '<script>
                alert("Error");
              </script>';
    }      
    $conn->close();
}
?>
