<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <link rel="stylesheet" href="style/style.portfio.css">
    <title>Document</title>
</head>
<body>
<nav class="or-navbar navbar fixed-top navbar-expand-lg navbar-dark  pof-navbar">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            <a class="navbar-brand" href="#">DevName</a>
            <div class="collapse navbar-collapse menu" id="navbarTogglerDemo03">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item mx-4">
                        <a class="nav-link active" aria-current="page" href="#">portfolio</a>
                    </li>
                    <!-- <li class="nav-item mx-4">
                        <a class="nav-link active">contact</a>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>
    <h1 class="text-center mt-5">Liste de Devellopeurs</h1>
    <div class="container main-card my-5">
        <div class="row">
            <div class="col">
        <?php include('../portfolio.php'); ?>
        
                <?php
               if(mysqli_num_rows($query ) > 0){
                while($data = mysqli_fetch_array($query,MYSQLI_ASSOC)){  
                    if(isset($data)){
                      $id=$data['id'];
  
                    }
                    ?>
                   <div class="bg-primary div-main d-flex justify-content-center">
                    <div class="row shadow carte my-3">
                        <div class="col-md-4 text-center p-4 border-top-0 border  border-bottom-0 border-left-0 border-right-2 bg-light rounded">
                        <img src="<?php echo $data['image'];?>" alt="" class="image rounded-pill">
                        </div>
                        <div class="col-md-8 pt-4 bg-light rounded">
                        <p class="detail">                        
                        <?php
                         $id=$data['id'];
                    echo'<span>'.$data['name'].'</span>'.'<br/>';
                    echo'<span>'.$data['domaine'].'</span>'.'</br>';
                    echo'<span>'.$data['niveau'].'</span>'.'</br>';
                    echo "<a class='btn btn-dark mt-4' href=?id=$id> Portfolio </a> <br/>";
                    ;?>
                    <?php echo $id;?>
                 </p>
            </div>
        </div>
    </div>
 <?php  }

                 $count_query = "SELECT * FROM main";
                 $query = $db->query( $count_query);
                 $count = mysqli_num_rows($query);
                // calculate the pagination number by dividing total number of rows with per page.
                 $paginations = ceil($count / $per_page);
            }
                 ?>
                
            <div>
            <p class="text-center">
            <?php
                if($page_counter == 0){
                    echo "<span><a href=?start=0 class='active'>0</a></span> ";
                    for($j=1; $j < $paginations; $j++) { 
                      echo "<span><a href=?start=$j>".$j."</a></span> ";
                   }
                }else{
                    echo "<span><a href=?start=$previous>Previous</a></span> "; 
                    for($j=0; $j < $paginations; $j++) {
                        $i=$j;
                     if($j == $page_counter) {
                        echo "<span><a href=?start=$j class='active'>".$j."</a></span> ";
                     }else{
                        echo "<span><a href=?start=$j>".$j."</a></span> ";
                     } 
                  }
                  if($i!=$page_counter)
                  echo "<span><a href=?start=$next>Next</a></span>";
                }?>
            </p>
        </div> 
        </div> 
        </div>
        </div>    
        <footer class="container-fluid foter">
                  <div class="row ">
                      <div class="col border-right">
                         <p class="text-center">
                         <span class="text-light h4">Compagnie</span> </br>
                          <span class="text-light"> About us</span></br>
                          <span class="text-light">Blog</span></br>
                          <span class="text-light">Partenaire</span>
                          </p>
                      </div>
                      <div class="col">
                          <p class="text-center">
                          <span class="text-light h4">Nos contact</span><br/>
                          <span class="text-light">site web :</span> </br>
                          <span class="text-light">Adresse mail:</span> </br>
                          <span class="text-light">Linkdin :</span> </br>
                          <span class="text-light">Localisation :</span> </br>
                          </p>
                      </div>
                  </div>
              </footer>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</body>
</html>