<?php

try {
    $db = new PDO('mysql:host=db;dbname=jeu', 'root', 'example');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

catch (Exception $e) {
    die('Erreur : '.$e->getMessage()); 
}


