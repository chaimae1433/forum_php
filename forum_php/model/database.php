<?php
try{
    $bdd = new PDO('mysql:host=localhost;dbname=forum_ensat;charset=utf8;', 'root', 'chqy,qeà-à_éààà');
}catch(Exception $e){
    die('Une erreur a été trouvée : ' . $e->getMessage());
}
