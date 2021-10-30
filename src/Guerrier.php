<?php

require './db/connexion_db.php';

class Guerrier extends Perso {

    public function __construct() {
        $this->specialite = 'guerrier';        
        $this->attaque = rand(20, 40); 
        $this->def = rand(10, 19); 
        $this->freezePower = 'false';


    }
        

}