<html>
  <head></head>
  <body>
    <?php 
    include 'jeu.php'


?>
    <div id="jeu">
    <div><?php echo $pvMagicien ?></div>
      <form method="post">
        
        <input type="submit" name="attaquer_magicien"
                value="Attaquer magicien" onsubmit="return false" />
        
        <input type="submit" name="attaquer_guerrier"
                value="Attaquer guerrier" onsubmit="return false" />

                <input type="submit" name="creer_guerrier"
                value="Creer guerrier" onsubmit="return false" />

                 <input type="submit" name="creer_magicien"
                value="Creer magicien" onsubmit="return false" />
    </form>
    <div><?php echo $vieGuerrier ?></div>

    </div>
  </body>
</html>
