<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>lire</title>
  </head>
  <body>
    <?php
      if ($cream) {
    ?>
    <h1><?php echo $cream['name']; ?></h1>
      <?php
      }
    ?>
    <ul>
      <?php
        if ($cream) {
      ?>
      <li><a href="edit.php?id=<?php echo $cream['id']; ?>">modifier</a></li>
      <li><a href="delete.php?id=<?php echo $cream['id']; ?>">supprimer</a></li>
      <?php
        }
      ?>
      <li><a href="index.php">retour à l'index</a></li>
</ul>
  </body>
</html>
