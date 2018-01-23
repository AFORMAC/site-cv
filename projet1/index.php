<!DOCTYPE html>
<html>
  <head>
  </head>
    <title>EXO php</title>
  <body>
    <form action="verification.php" method="post">
      <meaccesskey=""ta charset="utf-8">
      <fieldset>
        <legend>Formulaire</legend>
          <p>
            <label for="mail">E-mail :</label><br>
            <input type="text" name="mail" value="">
          </p>
          <p>
            <label for="prenom">Prénom :</label><br>
            <input type="text" name="prenom" value="">
          </p>
          <p>
            <label for="nom">Nom :</label><br>
            <input type="text" name="nom" value="">
          </p>
          <p>
            <label for="adresse">Adresse :</label><br>
            <input type="text" name="adresse" value="">
          </p>
          <p>
            <label for="age">Âge :</label><br>
            <input type="text" name="age" value="">
          </p>
          <p>
            <label for="num">Numéro :</label><br>
            <input type="text" name="num" value="" id="envoi">
          </p>
          <p>
            <input type="checkbox" name="news" value=""> m'inscrire à la newsletter
          </p>
          <p>
            <input type="submit" name="envoi" value="ENVOYER">
          </p>
          <div>
            <?php
              if(isset($_GET['toto'])){
            ?>
            <p>
              <?php echo $_GET['toto']; ?>
            </p>
           <?php
            }
           ?>
         </div>
      </fieldset>
    </form>
  </body>
</html>
