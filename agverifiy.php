<?php
session_start(); 
$_SESSION['success'] = ""; 
include('agconfig.php');
if(isset($_POST['submit']))
{
    $name = $_POST['Uname'];
    $mail = $_POST['mail'];
    $password = $_POST['Pass'];


	$sql = "select * from agreg where mail = '$mail'  and Pass= '$password'";

    $result = mysqli_query($conn,$sql);
    $count = mysqli_num_rows($result);
    if($count == 1){
        $_SESSION['Uname'] = $name;
        $_SESSION['mail'] = $mail;
        $_SESSION['success'] = "You are now logged in";
        header('Location: profile.php');
        die();
    }
}
else{
	echo "Username Or Password is Wrong";
$conn->close();
}
?>