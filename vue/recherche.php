
<?php
if(isset($_POST['categ'])){
    $categ=$_POST['categ'];
    $x=include('./../model/livre.php');
    $l=new Livre();
    $t1=$l->rechercheLivre($categ);
    

    ?>
        <?php for($i=0;$i<count($t1);$i++){?>
            <?php echo '<div class="card" style="width: 20rem;">'; ?>
            <?php echo '<img src= " '.$t1[$i][2].'" class="card-img-top" >'; ?>
            <?php echo '<div class="card-body">'; ?>
            <?php echo     '<h5 class="card-title">'.$t1[$i][1].'</h5>';  ?>
             <?php echo    '  <p class="card-text">'.$t1[$i][3].'</p>'; ?>
             <?php echo    '<p class="text-danger">'.$t1[$i][4].'</p>' ; ?>
            
             <?php echo  '<a href="'.$t1[$i][6].'" class="btn btn-danger" download><i class="fa fa-download" aria-hidden="true"></i>Telecharger</a>'; ?> 
             <?php echo  '</div></div> ' ?>
      

<?php } } ?>
    
