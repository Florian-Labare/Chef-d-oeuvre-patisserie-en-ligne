<?php

class Dough
{

  private static function createStatement($sql)
  {
    try {
    require 'config.php';

    $pdo = new PDO(
       "mysql:dbname=$dbname;host=$host;charset=utf8", $user, $password
     );

    $pdo_statement = $pdo->preapre($sql);
   } catch (PDOException $e) {

           echo 'erreur : ' . $e->getMessage();

           $pdo_statement = null;
        }
    return $pdo_statement;
  }

}
