<?php
class config{


    public function cnx(){
        $pdo=new PDO('mysql:host=localhost;port=3306;dbname=livre','root','');
        return $pdo;

    }
}





?>