<?php
//ajout categorie
if(isset($_POST['s1'])){
$categ=$_POST['categ'];
    $x=include('./../model/livre.php');
$l=new Livre();
$l->nomCat=$categ;
echo $l->ajoutCategorie();
echo "categorie Ajouter";
}
//ajout livre
if(isset($_POST['l'])){
    $categ=$_POST["categ"];
    $x=include('./../model/livre.php');
    $nom=$_POST["nom"];
    $auteur=$_POST["auteur"];
    $ftmp=$_FILES["photo"]["tmp_name"];

    $fName=$_FILES["photo"]["name"];
    $description=$_POST["description"];
    $filef=$_FILES["file"]["tmp_name"];
    $fileName=$_FILES["file"]["name"];
//uploaded photo
move_uploaded_file($ftmp,'../images/'.$fName);
$url='../images/'.$fName;
//uploaded file
move_uploaded_file($filef,'../files/'.$fileName);
$url2='../files/'.$fileName;
$l=new Livre();
$l->nom=$nom;
$l->auteur=$auteur;
$l->description=$description;
$l->idcat=$categ;
$l->photo=$url;
$l->file=$url2;
$l->ajoutLivre();
echo 'livre ajouter';

}
//liste livre par categorie



?>/