<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Ajouter sa crème </title>
  </head>
  <body>
    <p>Ajoutez votre crème</p>
    <form action="" method="post">
      <div>
        <label>
          Votre base:
          <input type="text" name="name" value="<?php if(isset($name))echo $name; ?>">
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
