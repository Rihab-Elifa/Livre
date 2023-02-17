<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout Livre</title>
    <link rel="stylesheet" href="./../bootstrap/css/bootstrap.min.css">
</head>
<body>
    <?php
    $x=include('./../model/livre.php');
    $l=new livre();
    $c=$l->listeCategorie();

    ?>
    

    <form action="./../controller/controller.php" method="post" class="col-6 offset-2 mt-5" enctype="multipart/form-data">
        <h1 class="text-danger"> Ajout livre</h1>
        <div class="form-inline">
            <label for="">Nom:</label>  <input type="text" name="nom" placeholder="titre" class="form-control" id=""> 
        </div>
     
        <div class="form-inline">
            <label for=""> auteur:</label>  <input type="text" name="auteur" placeholder="auteur" class="form-control" id=""> 
        </div>
        <div class="form-inline">
            <label for=""> photo:</label>  <input type="file" name="photo" placeholder="photo" class="form-control" id=""> 
        </div>

        
        <div class="form-inline">
            <label for=""> description :</label><input type="text" name="description" placeholder="auteur" class="form-control" id=""> 
        </div>
        <div class="form-inline">
            <label for=""> file:</label>  <input type="file" name="file" placeholder="file" class="form-control" id=""> 
        </div>
 

    <div class="form-inline">
        <label for=""> categorie:</label>  <select name="categ" id="">
        <?php
for($i=0;$i<count($c);$i++){
    echo '<option value='.$c[$i][0].'>'.$c[$i][1].'</option>';
}
        ?>
        </select>

    </div>
    <div class="d-grid gap-2">
        <button type="submit"  name="l" class="btn btn-danger btn-lg btn-block">Ajout Livre</button>
</div>

</form>


    
</body>
</html>