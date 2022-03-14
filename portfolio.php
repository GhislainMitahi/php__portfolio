<?php 
    //include configuration file
    require 'config.php';
    session_start();

    $start = 0; 
    $per_page = 2;
    $page_counter = 0;
    $next = $page_counter + 1;
    $previous = $page_counter - 1;
    

    if(isset($_GET['id'])){
       header("location:./indexport.view.php");
    $_SESSION['id2']=$_GET['id'];
    // $req = mysqli_query($db,"select name,text, image,domaine,niveau,github,linkedin from main where id= $id");
    // $rep = mysqli_fetch_array($req,MYSQLI_ASSOC);
    // $image = $rep["image"];
    }

    if(isset($_GET['start'])){
     $start = $_GET['start'];
     $page_counter =  $_GET['start'];
     $start = $start *  $per_page;
     $next = $page_counter + 1;
     $previous = $page_counter - 1;
    }
    // query to get messages from messages table
    $q = "SELECT * FROM main LIMIT $start, $per_page";
    $query = $db->query($q);

    // count total number of rows in students table

    // echo $rep['name'];
    ?>