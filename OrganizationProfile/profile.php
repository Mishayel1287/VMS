<?php
//include db connection file
include "connection.php";
  if (isset($_POST['submit'])) {
        $name = $_POST["name"];
        $type = $_POST["type"];
        $email = $_POST["email"];
        $city = $_POST["city"];
        $phoneNo = $_POST["phoneNo"];
        $interest = $_POST["interest"];
        $otherInterests = $_POST["otherInterests"];
       

    //insert data
    $sql = "INSERT INTO `OrganizationProfile`(`name`, `type`, `email`, `city`, `phoneNo`, 
    `interest`, `otherInterests`) VALUES 
    ('$name','$type','$email','$city','$city','$phoneNo','$interest' ,'$otherInterests')";
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