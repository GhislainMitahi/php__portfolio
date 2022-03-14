<?php 
if (($_SERVER["REQUEST_METHOD"] == "POST")){
$name = $_POST["name"];
if (preg_match("/^[a-zA-Z-' ]*$/",$name)) {
  $nameErr = "Only letters and white space allowed";
  
   }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        <label for="">name</label>
        <input type="text" name="name">
        <input type="submit" name="save">

       
    </form>
</body>
</html>