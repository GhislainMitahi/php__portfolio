<?php
   require_once('config.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select id from main where id = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   $login_session = $row['id'];

   if(!isset($_SESSION['login_user'])){
      header("location: /portfolio/views/login.view.php");
      die();
   }

// //  hghghghghghg,,,,,
//    $the_id = $_SESSION['id'];

//    $req = mysqli_query($db,"select name,text, image,domaine,niveau,github,linkedin from main where id= '$the_id'");
//     $the_rep = mysqli_fetch_array($req,MYSQLI_ASSOC);
//    // hjhjhjkhjkjkjkjuiui

   // if(isset($_SESSION['login_user'])){

  
   //    $the_view = $_SESSION['id2'];

   //    $user_check = $_SESSION['login_user'];
   //    $ses_sql = mysqli_query($db,"select id from main where id = '$user_check' ");
   
   //    $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   //    $login_session = $row['id'];

   // }

   // if(!isset($_SESSION['login_user'])){
   //    header("location: /portfolio/views/login.view.php");
   //    die();
   // }
?>