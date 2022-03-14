<?php require_once '../signUp.php'?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <link rel="stylesheet" href="style/fontawesome.min.css">
    <link rel="stylesheet" href="style/style.sign.css">
    <title>SIGN</title>
</head>
<body class="main">
<div>
     <p class="text-center p-4"><img class="logo" src="./images/logo.jpg" alt="">
    </p>
</div>
    <div class=" container-fluid ">
    <div class="row mx-auto h-100 w-100 justify-content-center align-items-center ">
<div class="bg-light h-auto rounded p-4 mx-5 shadow">
<div class="border rounded">
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method= "post" enctype="multipart/form-data">
    <div class="ml-5">
        <!-- new form -->
    <!-- <label for="inputEmail3" class="col-sm-2 col-form-label">FullName</label> -->
    <div class="col-sm-10">
      <input type="text" class="form-control field border border-left-0 border-top-0 border-right-0 border-dark bg-light rounded-0 mt-3" id="inputEmail3" name="fullname" placeholder="FullName">
    </div>
    <div class="col-sm-10">
      <input type="password" class="form-control field border border-left-0 border-top-0 border-right-0 border-dark bg-light rounded-0 mt-3" id="inputPassword3" name="password" placeholder="password">


      <input type="text" class="form-control field border border-left-0 border-top-0 border-right-0 border-dark bg-light rounded-0 mt-3" id="inputEmail3" name="mail" placeholder="AdressMail">
    

      <input type="text" class="form-control field border border-left-0 border-top-0 border-right-0 border-dark bg-light rounded-0 mt-3" id="inputPassword3" name="domaine" placeholder="domaine">
      <input type="text" class="form-control field border border-left-0 border-top-0 border-right-0 border-dark bg-light rounded-0 mt-3" id="inputPassword3" name="niveau" placeholder="niveau">
  <!-- <label for="exampleFormControlTextarea1" class="p-2 mx-4 form-label text-center">Description</label> -->
  
  <!-- <textarea class="form-control mt-3" id="exampleFormControlTextarea1" name="text" rows="5" placeholder="Description"></textarea> -->
<!-- TEST FORM -->
<div class="container-fluid" style="margin-top: 40px">

    <!-- <h3 class="text-center">WYSIWYG/TinyMCE Editor</h3><br> -->
<!-- <form action='' method='post'>  -->
    <textarea id="myTextarea" name="text"></textarea>
    <!-- <button name="send">envoyer</button> -->
<!-- </form> -->
   
    <script src="//cdnjs.cloudflare.com/ajax/libs/tinymce/4.5.1/tinymce.min.js"></script>
    <script type="text/javascript">
        tinymce.init({
            selector: '#myTextarea',
            height: 300,
            theme: 'modern',
            plugins: [
                'advlist autolink lists link charmap preview hr anchor pagebreak',
                'searchreplace wordcount visualblocks visualchars code fullscreen',
                'insertdatetime nonbreaking save table contextmenu directionality',
                'emoticons template paste textcolor colorpicker textpattern'
            ],
            toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
            toolbar2: 'print preview media | forecolor backcolor emoticons',
            image_advtab: true
        });
    </script>

      </div>

<!-- TEST END -->
</div>
<div class="col-sm-10">
      <input type="text" class="form-control field border border-left-0 border-top-0 border-right-0 border-dark bg-light rounded-0 mt-3" id="inputEmail3" name="github" placeholder="Github">
    </div>
    <div class="col-sm-10">
      <input type="text" class="form-control field border border-left-0 border-top-0 border-right-0 border-dark bg-light rounded-0 mt-3" id="inputEmail3" name="linkedin" placeholder="Linkedin">
    </div>
    <p class="mt-2 p-3 pt-2"><input type="file" name="image"/></p>
</div>
<input type="submit" value="Envoyer" name="save" class="bg-success rounded text-light mt-3 float-right">
</form>
</div>
    </div>
    </div>
    </div>
    <div class="text-center mt-4 text-dark pb-5">
      <p class="">Mot de passe oublier</p>
        <p class="">CRES: Centre de Recherche et d'Expertise Sientique</p>
      </div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>