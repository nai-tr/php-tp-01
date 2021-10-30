<?php

spl_autoload_register(function ($className) {
    require $className . '.php';
});

require "./db/connexion_db.php";

// echo "Pv Joueur 1";
// echo $pvJoueur1;

$guerrier = new Guerrier();
$magicien = new Magicien();
// $vieMagicien = $magicien->getPv();
// $vieGuerrier = $guerrier->getPv();



if(isset ($_POST['creer_guerrier'])) {
  $guerrier->addToDb($db);
  var_dump($guerrier);
}

if(isset ($_POST['creer_magicien'])) {
  $magicien->addToDb($db);
  var_dump($magicien);
}

if(isset ($_POST['attaquer_magicien'])) {
  $pvMagicien;
  $requete_SQL = 'SELECT pv FROM partie where specialite = "magicien"';
  $response = $db->query($requete_SQL);
        while ($dataMagicien = $response->fetch()) {
        $pvMagicien= $dataMagicien["pv"];
        echo "Pv magicien :";
        echo $pvMagicien;
      }
    $newPvMagicien = $guerrier->attaquer($magicien);
    $req = $db->prepare('UPDATE partie SET pv= :newPvMagicien WHERE specialite = :specialite');
    $req->execute(array(
      'newPvMagicien' => $newPvMagicien,
      'specialite' => 'magicien'
    ));
}

if(isset ($_POST['attaquer_guerrier'])) {
  $vieGuerrier = $magicien->attaquer($guerrier); 
}



?>