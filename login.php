<?php
require_once 'config.php';
session_start();

if(($_SERVER["REQUEST_METHOD"] == "POST")){
    $myusername = mysqli_real_escape_string($db,$_POST['fullname']);
    $mypassword = mysqli_real_escape_string($db,$_POST['password']); 

$req = "SELECT id FROM main WHERE name = '$myusername' and password='$mypassword'";
$result = $db->query($req);
$tab=mysqli_fetch_array($result,MYSQLI_ASSOC);
$count = mysqli_num_rows($result);


if($count==1){
    $_SESSION['login_user'] = $tab["id"];
    header("location:/portfolio/views/portfilios.views.php");
}else{
    $error[] = "your fullname or your password is not valid !";
    }
}
?>      