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
      if ($cream) {
    ?>
    <form action="" method="post">
      <div>
        <label>
          Modifiez votre base crème :
          <input type="text" name="name" value="<?php echo $cream['name']; ?>">
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
        if ($cream && isset($cream['id'])) {
      ?>
      <li><a href="read.php?id=<?php echo $cream['id']; ?>">annuler</a></li>
      <?php
        }
      ?>
      <li><a href="index.php">retour à l'index</a></li>
    </ul>
  </body>
</html>
