<?php
class Livre{
    public $nom;
    public $photo;
    public $description;
    public $auteur;
    public $idcat;
    public $file;

    //nomCatg
    public $nomCat;

    //ajout livre
    public function ajoutLivre(){
        include_once("./../config/config.php");
        $x=new config();
        $pdo=$x->cnx();
        $req="INSERT INTO livre (nom,photo,description,auteur,idcat,file) VALUES('$this->nom','$this->photo','$this->description','$this->auteur','$this->idcat','$this->file')";
        $res=$pdo->exec($req) or print_r($pdo->errorInfo());


    }
    //affiche liste de livre
    public function listeLivre(){
        include_once("./../config/config.php");
        $x=new config();
        $pdo=$x->cnx();

        $req="SELECT * FROM livre ORDER BY id DESC LIMIT 5 ";
        $res=$pdo->query($req);
        $t=$res->fetchAll();
        return $t;
    }

    //ajout categorie
    public function ajoutCategorie(){
        include_once('./../config/config.php');
        $c= new config();
        $pdo=$c->cnx();
        $req="INSERT INTO categorie (nom) VALUES('$this->nomCat')";
        $res=$pdo->exec($req) or print_r($pdo->errorInfo());

    }
    //liste de categorie
    public function listeCategorie(){
        include_once("./../config/config.php");
        $c=new config();
        $pdo=$c->cnx();
        $req="SELECT * FROM categorie";
        $res=$pdo->query($req);
        $t=$res->fetchAll();
        return $t;
    }
    //recherche livre par categorie
    public function rechercheLivre($r){
        $r1=(int)$r;
      
        include_once('./../config/config.php');
        $c=new config();

        $pdo=$c->cnx();
        $req="SELECT * FROM livre l,categorie c WHERE l.idcat=c.idcat AND l.idcat=$r";
        $res=$pdo->query($req);
        $t=$res->fetchAll();
        return $t;
    }
    //Test login
    function getLogin($addr,$mt){
        include_once('./../config/config.php');
        $c=new config();
        $pdo=$c->cnx();
        $req="SELECT * FROM admin  WHERE adresse='$addr' AND mot='$mt'";
        $res=$pdo->query($req);
       $t=$res->fetchAll();
        return $t;
    }
}

?>