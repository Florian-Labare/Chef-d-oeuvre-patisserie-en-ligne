<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Parcourir les crèmes</title>
  </head>
  <body>
    <h1>Sélectionnez votre base crème</h1>
    <ul>
      <?php foreach ($creams as $cream) { ?>
        <li>
        <a href="read.php?id=<?php echo $cream['id']; ?>">
          <?php echo $cream['name']; ?>
        </a>
        </li>
      <?php
      }
      ?>
      <li><a href="add.php">ajouter une crème pâtissière</a></li>
    </ul>
  </body>
</html>
