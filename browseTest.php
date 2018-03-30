<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
     <link rel="stylesheet"    href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <title>Parcourir les pâtes</title>
  </head>
  <body>
    <h1>Sélectionnez votre base pâte</h1>

   <ul class="list-group list-group-flush">
      <?php foreach ($doughs as $dough) { ?>
        <div class="card">
          <div class="card-body">
        <li class="list-group-item">
          <a href="Views/doughs/read.php?id=<?php echo $dough['id']; ?>" >
          <?php echo $dough['base']; ?>
          </a>
        </li>
        <?php
          }
          ?>
        <li><a href="add.php">ajouter une pâte</a></li>
      </ul>
       </div>
      </div>
      <h1>Sélectionnez votre base crème</h1>
      <ul>
        <?php foreach ($creams as $cream) { ?>
          <div class="card">
          <li>
          <a href="Views/creams/read.php?id=<?php echo $cream['id']; ?>">
            <?php echo $cream['name']; ?>
          </a>
          </li>
      <?php
      }
      ?>
      <li><a href="add.php">ajouter une crème pâtissière</a></li>
    </ul>
  </div>
  </body>
</html>
