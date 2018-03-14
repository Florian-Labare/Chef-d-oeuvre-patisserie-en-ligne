<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      Modifier
    </title>
  </head>
  <body>
    <?php
      if ($dough) {
    ?>
    <form action="" method="post">
      <div>
        <label>
          Modifiez votre base de pâte :
          <input type="text" name="base" value="<?php echo $dough['base']; ?>">
        </label>
      </div>
      <div>
        <input type="submit" value="envoyer">
      </div>
    </form>
    <?php
      }
    ?>
    <ul>
      <?php
        if ($dough && isset($dough['id'])) {
      ?>
      <li><a href="read.php?id=<?php echo $dough['id']; ?>">annuler</a></li>
      <?php
        }
      ?>
      <li><a href="index.php">retour à l'index</a></li>
    </ul>
  </body>
</html>
