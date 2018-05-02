<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Ajouter sa pâte </title>
  </head>
  <body>
    <p><?php echo $message; ?></p>
    <form action="" method="post">
      <div>
        <label>
          Votre base:
          <input type="text" name="base" value="<?php if(isset($base))echo $base; ?>">
        </label>
      </div>
      <div>
        <input type="submit" value="envoyer">
      </div>
   </form>
    <ul>
      <li><a href="index.php">retour à l'index</a></li>
    </ul>
  </body>
</html>
