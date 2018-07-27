<?php
$age = 20;
 ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>exercice 6</title>
  </head>
  <body>
    <p><?php
    if ($age >= 18) {
      echo 'Tu es majeur';
    }
    else {
      echo 'Tu n\'est pas majeur';
    }
      ?></p>
  </body>
</html>
