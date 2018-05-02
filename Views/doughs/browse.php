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
          <a href="read.php?id=<?php echo $dough['id']; ?>" >
          <?php echo $dough['base']; ?>
          </a>
        </li>
       </div>
      </div>
      <?php
      }
      ?>
      <li><a href="/Chef-d-oeuvre-patisserie-en-ligne/doughs/add.php">ajouter une pâte</a></li>
    </ul>
  </body>
</html>
