<?php
include('config.php');
if(isset($_POST['submit']))
{
    $regid = $_POST['mail'];
     $password = $_POST['pass'];

    
    
    

    if(!empty($password)){
        $sql = "update agreg set Pass = '$password' where mail = '$regid'";
        mysqli_query($conn,$sql);
    }

    
    header('Location: aglog.html');
}
else{
$conn->close();
}
?>