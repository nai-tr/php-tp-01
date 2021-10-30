<?php

abstract class Perso {
    protected $specialite;
    protected $pv = 100;
    protected $attaque;
    protected $def;
    protected $freeze = 'false';  
    protected $freezePower;



    public function setPv(int $pv):void {
        $this->pv = $pv;
    }

  

    public function setAttaque(int $attaque):void {
        $this->attaque = $attaque;
    }

    public function setDef(int $def):void {
        $this->def = $def;
    }

    public function getAttaque() {
        return $this->attaque;
    }

    public function getDef() {
        return $this->def;
    }
    
    public function getPv() {
        return $this->pv;
    }

    public function setFreeze(string $freeze):void {
        $this->freeze = $freeze;
    }
     public function getFreeze() {
        return $this->freeze;
    }

    public function setSpecialite(string $specialite):void {
        $this->specialite = $specialite;
    }

    public function getSpecialite() {
        return $this->specialite;
    }

    public function setFreezePower(string $freezePower):void {
        $this->freezePower = $freezePower;
    }

     public function getFreezePower() {
        return $this->freezePower;
    }

    public function attaquer(Perso $perso):int{
        $newPv = $perso->getPv() - ($this->getAttaque() - $perso->getDef());
        $perso->setPv($newPv);
        return $newPv;
    }

    public function addToDb(PDO $db):void {
        
        $insert = 'INSERT INTO partie (specialite, pv, def, attaque, freeze, freeze_power) VALUES (:specialite, :pv, :def, :attaque, :freeze, :freeze_power)';
        $requete = $db->prepare($insert);
        $requete->execute(array(
        'specialite' => $this->getSpecialite(),
        'pv' => $this->getPv(),
        'def' => $this->getDef(),
        'attaque' => $this->getAttaque(),
        'freeze' => $this->getFreeze(),
        'freeze_power' => $this->getFreezePower(),
        ));

        $requete_SQL = 'SELECT * FROM partie where specialite = "guerrier"';
        $response = $db->query($requete_SQL);
        while ($data = $response->fetch()) {      
        $data = array_unique($data);
        print_r($data);

        }
    }

}

