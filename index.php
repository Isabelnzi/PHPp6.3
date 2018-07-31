<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>P6ex3</title>
  </head>
  <body>
    <?php
    //on test si une variable existe
    if(isset($_GET['startDate']) && isset($_GET['endDate'])){ // On a le nom et le prénom
        echo $_GET['startDate'] . ' ' . $_GET['endDate'];
    }
    ?>
        ?>
  </body>
