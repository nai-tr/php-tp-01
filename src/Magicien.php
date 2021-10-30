<?php


 class Magicien extends Perso {       

    public function __construct() {
        $this->specialite = 'magicien';
        $this->attaque = rand(5, 10); 
        $this->def = 0;
        $this->freezePower = 'true';

    }
    
    

    private function endormir(Perso $perso):void{
        if (getFreezePower()== true) {
            $perso->setFreeze(true);  
            setFreezePower(false);          
        }


    }
 }