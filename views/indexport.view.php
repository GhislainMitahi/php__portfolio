<?php include("../indexport.php")?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <link rel="stylesheet" href="style/style.indexport.css">
    <link rel="stylesheet" href="style/fontawesome.min.css">
    <title>Document</title>
</head>

<body>

<nav class=" or-navbar navbar fixed-top navbar-expand-lg navbar-dark  pof-navbar">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            <a class="navbar-brand" href="#">DevName</a>
            <div class="collapse navbar-collapse menu" id="navbarTogglerDemo03">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item mx-4">
                        <a class="nav-link active" aria-current="page" href="portfilios.views.php">portfolio</a>
                    </li>
                    <li class="nav-item mx-4">
                        <a class="nav-link active">contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section>    
        <header class="container-fluid p-5 rounded border shadow">
            <div class="row">
            <div class="col-4 py-5">
            <div class="m-0 text-center col">
                <div class="">
                    <img src="<?php echo $image;?>" alt="..." class=" photo text-center pe-5 rounded-pill border">
                </div>
            <div class="mt-5">
               <span class="text-light"><i class="fab fa-github"></i></i> Github :<a href="" class="text-light"><?php echo $rep["github"];?></a></span></br>
               <span class="text-light"><i class="fab fa-linkedin"></i> Likedin :<a href="" class="text-light"> "<?php echo $rep["linkedin"];?>"</a></span>
            </div>
            </div>
            </div>
            <div class=" col-8 text-light py-5">
                <h1><?php echo $rep["domaine"];?></h1>
                <h5 > je suis <span><?php echo $rep["name"];?></span>,<?php echo $rep["niveau"];?><br> je peux vous etre utile dans la conception et la realisation de logiel.</h5>
            </div>
            </div>
        </header>
         <article class=" container text-center mt-5 mb-5 shadow rounded p-4"> 
             
             <h1 class=""> A PROPOS DE MOI</h1>
             <p class="text-justify">
             <?php echo $rep["text"];?></p>
         </article>
         <div class="container">
             <h1 class="text-center">ME CONTACTER</h1>
             <div class="col text-center my-5">
                 <div class="col-md-12">
             <div class="row">
             <div class="col form-floating mb-3">
                 <form action="" method="post">
                    <input type="text" class="form-control" id="floatingInput" placeholder="Fullname" name="name">
                    <label for="floatingInput"></label>
                    </div>
                    <div class=" col form-floating">
                    <input type="email" class="form-control" id="floatingPassword" placeholder="name@example.com" name="mailAdress">
                    <label for="floatingPassword"></label>
                    </div>
                    </div>
                    </div>
                    <div class="col-md-12">
                      <textarea id="" cols="140" rows="5" placeholder="Salut Ghisalin, ..." name="message"></textarea>

                         <input type="submit" value="Envoyer" name="sendmail" class="bg-success rounded text-light mt-3">

                         </form>
                      </div>
                    </div>
                  
         </div>
     <footer class="container-fluid">
            <div class=" text-light text-center p-3"><span class="rounded-pill border h1 shadow ">LOGO</span>
        
            <p class="pt-4 pb-0"><span class="text-center text-light border border-left-0 border-right-0 border-top-0">Centre de Recherche et Accompagnement  Scientifique</span></p>
            </div>
     </footer>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</body>
</html>