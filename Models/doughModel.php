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

  public static function readAll()
  {
    $sql = 'SELECT * FROM doughs deleted_at IS NULL';

    $doughs = [];

    $pdo_statement = self::createStatement($sql);

    if ($pdo_statement && $pdo_statement->execute()) {
    $doughs = $pdo_statement->fetchAll(PDO::FETCH_ASSOC);
    }

     return $doughs;
  }

  public static function read($id)
  {
    $sql = 'SELECT * FROM doughs WHERE id=:id AND deleted_at IS NULL';

    $doughs = null;

    $pdo_statement = self::createStatement($sql);

     if (
        $pdo_statement &&
        $pdo_statement->bindParam(':id', $id, PDO::PARAM_INT) &&
        $pdo_statement->execute()
    ){
        $doughs = $pdo_statement->fetch(PDO::FETCH_ASSOC);
    }

    return $doughs;
  }

 public static function update($id, $values)
 {
   $sql = 'UPDATE doughs SET base=:base WHERE id=:id';

      $ok = false;

   $pdo_statement = self::createStatement($sql);

   if (
      $pdo_statement &&
      $pdo_statement->bindParam(':id', $id, PDO::PARAM_INT) &&
      $pdo_statement->bindParam(':base', htmlspecialchars($values['base'])
      )
    ){
      $ok = true;
    }

    return $ok;
 }

 public static function delete($id)
 {
   $sql ='UPDATE doughs SET deleted_at=CURRENT_TIMESTAMP() WHERE id=:id';

      $ok = false;

   $pdo_statement = self::createStatement($sql);

   if (
      $pdo_statement &&
      $pdo_statement->bindParam(':id', $id, PDO::PARAM_INT) &&
      $pdo_statement->execute()
  ){
      $ok = true;
  }
    return $ok;
 }
}
