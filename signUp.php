<?php
   if($_SERVER["REQUEST_METHOD"] == "POST"||isset($_FILES['image'])) {
      try{
        $errors= array();
        $file_name = $_FILES['image']['name'];
        $file_size =$_FILES['image']['size'];
        $file_tmp =$_FILES['image']['tmp_name'];
        $file_type=$_FILES['image']['type'];
        $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
        $extensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$extensions)===false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
        $db = new PDO('mysql:host=localhost;dbname=dbfolio', 'root','');
         move_uploaded_file($file_tmp, dirname (__FILE__)."/views/"."images/".$file_name);
         $lien='http://'.gethostbyname(gethostname())."/portfolio/"."views/"."images/".$file_name;
         
         $req = $db->prepare('INSERT INTO main (name,password,text,image,domaine,niveau,mail,github,linkedin) VALUES(?,?,?,?,?,?,?,?,?)');
         $req->execute(array($_POST['fullname'], $_POST['password'], $_POST['text'],$lien,$_POST['domaine'],$_POST['niveau'],$_POST['mail'],$_POST['github'],$_POST['linkedin']));
         header('location:./login.view.php');
      }else{
         print_r($errors);
      }

}
catch (Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

   }
?>