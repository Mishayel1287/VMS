<?php
include "connection.php";
if (isset($_POST['fname'])) {
    if (isset($_POST['lname'])) {
        if (isset($_POST['email'])) {
            if (isset($_POST['message'])) {

$fistname = $_POST["fname"];
$lastname = $_POST["lname"];
$email = $_POST["email"];
$message = $_POST["message"];
$sql = "INSERT INTO contactus(First_name, Last_name, Email, Message) VALUES ('{$fistname}','{$lastname}','{$email}','{$message}' )";
$result = mysqli_query($conn, $sql) or die("Query Failed!");
header("location: /GroupProject/contact/contactus.php");
mysqli_close($conn);
}
        }
    }
}
?>