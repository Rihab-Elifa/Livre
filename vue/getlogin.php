<?php
if(isset($_POST['email'])){
    
$adr=$_POST['email'];
$m=$_POST['mot'];

$x=include('./../model/livre.php');
$l=new Livre();
$t1=$l->getLogin($adr,$m);




if(count($t1)>0){ 
    
    
        session_start();
        //$_SESSION["emailAdm"]=$this->adr; 
        header('location:.././vue/admin.php');   

    


 


}else{
    echo '<h3 class="alert alert-danger"> compte n exsiste pas </h3>';
}

}

?>
