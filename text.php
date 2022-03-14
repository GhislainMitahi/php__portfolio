<?php 
include("config.php");

if(isset($_POST['send'])){

   $text = $_POST['texte'];
   echo $text;
   // $q = 'INSERT INTO tab (text) VALUES($text)';
   // $query = $db->query($q);

   $sql = "INSERT INTO tab (text)
VALUES ($text)";

$db->query($sql);
}
?>