<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>   <link rel="stylesheet" href="design.css">
    <link rel="stylesheet" href="./../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="./../font-awesome-4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
  
    

</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-danger ">
        <div class="container-fluid">
      
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav offset-lg-5 offset-md-5  me-auto mb-2 mb-lg-0 ">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="">Accueil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./livre.php">Livre</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="./aide.php">Aide</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./login.php">login</a>
              </li>
       
                
              
              
            </ul>

        </div>
      </nav>
      <header>
        <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="img img-responsive" src="./idée-amenagement-chambre-enfant-garçon-bleu-et-rouge-armoire-rouge-revêtement-sol-gris-bibliothèque-et-lit-deux-étages-en-bois-bureau-et-chaise-scandinave-deco-murale-fleurs.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="1.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="2.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
      </header>
      <?php
      $x=include('./../model/livre.php');
      $l=new Livre();
       $t1=$l->listeLivre();
    ?>
    <h1>Dernier Livres</h1>
  

    <section>
        <!-- box livre-->
        <?php for( $i=0;$i<count($t1);$i++){?>
        <div class="card" style="width: 20rem;">
            <img src=" <?php echo $t1[$i][2] ?>"
                class="card-img-top" alt="...">
            <div class="card-body">
            
                <h5 class="card-title"><?php  echo $t1[$i][1]?></h5>
                <p class="card-text"><?php  echo $t1[$i][3]?></p>
                <p class="text-danger"> <?php echo $t1[$i][4]?></p>
               
                <a href="<?php echo $t1[$i][6]; ?>" class="btn btn-danger" download><i class="fa fa-download" aria-hidden="true"></i>Telecharger</a>
            </div>
             
        </div> <?php }?>
        <!--fin-->
    </section>  
    <!--   <section>
    
        
        <div class="card" style="width: 20rem;">
            <img src="https://thumbs-prod.si-cdn.com/c0VP9nb5bbooVSqQEjHk3q9S35c=/800x600/filters:no_upscale()/https://public-media.si-cdn.com/filer/91/91/91910c23-cae4-46f8-b7c9-e2b22b8c1710/lostbook.jpg"
                class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title </h5>
                <p class="card-text">Some quick example text </p>
                <p class="text-danger"> vicor hugo</p>
                <a href="#" class="btn btn-danger"><i class="fa fa-download" aria-hidden="true"></i>Telecharger</a>
            </div>
        </div>
     
    
    </section>-->
  
      
    
    
        

    
    <footer class="bg-danger">
        <div class="w3-container w3-padding-large w3-red">
            
            <div class="w3-row-padding w3-center w3-padding-24" style="margin:0 -16px">
              <div class="w3-third w3-dark-grey">
                <p><i class="fa fa-envelope w3-xxlarge w3-text-light-grey"></i></p>
                <p>elifarihab@email.com</p>
              </div>
              <div class="w3-third w3-teal">
                <p><i class="fa fa-map-marker w3-xxlarge w3-text-light-grey"></i></p>
                <p>Sfax, Tunisie</p>
              </div>
              <div class="w3-third w3-dark-grey">
                <p><i class="fa fa-phone w3-xxlarge w3-text-light-grey"></i></p>
                <p>21237025</p>
              </div>
            </div>

        <p class="auteur">Rihab 2021|2022</p>
    

    </footer>
    <script>
        // Automatic Slideshow - change image every 4 seconds
        var myIndex = 0;
        carousel();
        
        function carousel() {
          var i;
          var x = document.getElementsByClassName("mySlides");
          for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
          }
          myIndex++;
          if (myIndex > x.length) {myIndex = 1}    
          x[myIndex-1].style.display = "block";  
          setTimeout(carousel, 4000);    
        }
    </script>

    </body>


      

    <script src="./jquery-3.6.0.min.js"></script>
    <SCRIPT src="./../bootstrap/js/bootstrap.min.js"></SCRIPT>
    
</body>
</html>