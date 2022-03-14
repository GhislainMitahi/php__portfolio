<?php 
include('../text.php');
?>
<!DOCTYPE html>
<html>

<head>
    <title>WYSIWYG/TinyMCE Editor</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body class="container" style="margin-top: 50px">

    <h3 class="text-center">WYSIWYG/TinyMCE Editor</h3><br>
<form action='' method='post'> 
    <textarea id="myTextarea" name="texte"></textarea>
    <button name="send">envoyer</button>
</form>
   
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

</body>

</html>