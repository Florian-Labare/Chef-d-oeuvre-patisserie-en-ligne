<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Parcourir les pâtes</title>
  </head>
  <body>
    <h1>Sélectionnez votre base pâte</h1>
    <ul>
      <?php foreach ($doughs as $dough) { ?>
        <li>
        <a href="read.php?id=<?php echo $dough['id']; ?>">
          <?php echo $dough['base']; ?>
        </a>
        </li>
      <?php
      }
      ?>
      <li><a href="add.php">ajouter une pâte</a></li>
    </ul>
  </body>
</html>
