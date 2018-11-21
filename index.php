<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    function NumberString($Number=18,$String=" j'ai dix huit ans")
    {
      return $Number. " ".$String;
    }
    echo NumberString();
    ?>
  </body>
</html>
