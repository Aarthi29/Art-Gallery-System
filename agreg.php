<?php
include('config.php');
if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $dept = $_POST['dept'];
    $year = $_POST['year'];
    $sec = $_POST['sec'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $boarding = $_POST['boarding'];
    $mail = $_POST['mail'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    $regid = $_POST['regid'];

	$sql = "INSERT INTO `reg` (name,regid,dept,year,sec,gender,address,boarding,mail,mobile,password) VALUES ('$name','$regid','$dept','$year','$sec','$gender','$address','$boarding','$mail','$mobile','$password')";

if ($conn->query($sql) === TRUE) {
    header("Location: index.html");
    die();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>