<?php

  $error = "Penser à remplir : ";
  $ok = "ok";
  $champ = array(
    'mail' =>  $_POST['mail'],
    'prenom' => $_POST['prenom'],
    'nom' => $_POST['nom'],
    'adresse' => $_POST['adresse'],
    'age' => $_POST['age'],
    'num' => $_POST['num']
  );


  foreach ($champ as $key => $value)
  {
    if ($value == "") {
        $error = $error . " " . $key;
        header('Location:index.php?toto='.$error);

    } else {
        header('Location:index.php?toto='.$ok);
    }
  }
?>
