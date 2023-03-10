<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recherche D'un Livre</title>
    <link rel="stylesheet" href="design.css">
    

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="./../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./../font-awesome-4.7.0/css/font-awesome.min.css">
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
                <a class="nav-link active" aria-current="page" href="" target="">Accueil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./livre.php" target="">Livre</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="./aide.php" target="">Aide</a>
              </li>
       
                
              
              
            </ul>

        </div>
      </nav>
      <header>
        <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="img img-responsive" src="./ide??e-amenagement-chambre-enfant-garc??on-bleu-et-rouge-armoire-rouge-reve??tement-sol-gris-bibliothe??que-et-lit-deux-e??tages-en-bois-bureau-et-chaise-scandinave-deco-murale-fleurs.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="./1.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="./2.jpg" class="d-block w-100" alt="...">
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
       $t1=$l->listeCategorie();
    ?>
    <div class="row">
        <div class="col-2">
           <h1>Categorie:</h1>

        </div>
      
        <div class="col-7">
            <form class="d-flex">
                  <div class="col-3">
            <select name="categ" id="categ" class="form-select" aria-label="Default select example">

                <?php
                for($i=0;$i<count($t1);$i++){
                echo '<option value='.$t1[$i][0].'>'.$t1[$i][1].'</option>';
                         }
                ?>


            </select>

        </div>
                <a class="btn btn-outline-danger" name="recherche" id="submit" ><i class="fa fa-search" aria-hidden="true"></i></a>
              </form>

        </div>
    </div>

    <section id="section">
     
    </section>
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


    


    
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

    <SCRIPT src="./bootstrap/js/bootstrap.min.js"></SCRIPT>
<script>

$(document).ready(function() {
 
 $("#submit").click(function() {
 
 var categ = $("#categ").val();
 var sec=$('#section')
 $.ajax({
 type: "POST",
 url: "./recherche.php",
 data: {
  categ: categ
 },
 success: function(data) {
  console.log(data.length)
if(data.length>29){
  $("#section").html(data)
}else{

  $("#section").html('<div class="alert alert-danger"> Aucun livre pour cette categorie </div>')
}
 },
 error: function(xhr, status, error) {
 console.error(xhr);
 }
 });
 
 });
 
 });


</script>
</body>
</html>