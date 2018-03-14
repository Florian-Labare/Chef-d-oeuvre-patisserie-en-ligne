<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>lire</title>
  </head>
  <body>
    <?php
      if ($dough) {
    ?>
    <h1><?php echo $dough['base']; ?></h1>
      <?php
      }
    ?>
    <ul>
      <?php
        if ($dough) {
      ?>
      <li><a href="edit.php?id=<?php echo $dough['id']; ?>">modifier</a></li>
      <li><a href="delete.php?id=<?php echo $dough['id']; ?>">supprimer</a></li>
      <?php
        }
      ?>
      <li><a href="index.php">retour à l'index</a></li>
</ul>
  </body>
</html>
