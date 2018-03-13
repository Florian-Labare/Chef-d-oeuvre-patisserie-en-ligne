<?php

class Doughs
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

  public static function create($values)
  {
    $sql = 'INSERT INTO doughs (base) VALUES (:base)';

    $ok = false;

    $pdo_statement = self::createStatement($sql);

    if (
    $pdo_statement &&
    $pdo_statement->bindParam(
        ':base', htmlspecialchars($values['base'])
    ){

    $ok = true;

     }
    return $ok;
  }

}
