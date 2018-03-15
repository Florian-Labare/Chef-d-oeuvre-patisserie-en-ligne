<?php

class Creams
{
  private static function createStatement($sql)
  {
    try {
      require __DIR__.'/config.php';

      $pdo = new PDO(
         "mysql:dbname=$dbname;host=$host;charset=utf8", $user, $password
       );

      $pdo_statement = $pdo->prepare($sql);
    } catch (PDOException $e) {

            echo 'erreur : ' . $e->getMessage();

            $pdo_statement = null;
         }
     return $pdo_statement;
   }


  public static function create($name)
  {
    $sql = 'INSERT INTO creams (name) VALUES (:name)';

      $ok = false;

    $pdo_statement = self::createStatement($sql);

    if (
       $pdo_statement &&
       $pdo_statement->bindParam(':name', $name) &&
       $pdo_statement->execute()
    ){

       $ok = true;

  }
    return $ok;
 }

  public static function readAll()
  {
    $sql = 'SELECT * FROM creams WHERE deleted_at IS NULL';

    $creams = [];

    $pdo_statement = self::createStatement($sql);

  if ($pdo_statement && $pdo_statement->execute()) {
    $doughs = $pdo_statement->fetchAll(PDO::FETCH_ASSOC);
   }

    return $creams;
 }

  public static function read($id)
  {
    $sql = 'SELECT * FROM creams WHERE id=:id AND deleted_at IS NULL';

    $creams = null;

    $pdo_statement = self::createStatement($sql);

  if (
       $pdo_statement &&
       $pdo_statement->bindParam(':id', $id, PDO::PARAM_INT) &&
       $pdo_statement->execute()
   ){
       $doughs = $pdo_statement->fetch(PDO::FETCH_ASSOC);
   }

   return $creams;
 }

  public static function update($id, $name)
  {
    $sql = 'UPDATE creams SET name=:name WHERE id=:id';

       $ok = false;

    $pdo_statement = self::createStatement($sql);

  if (
      $pdo_statement &&
      $pdo_statement->bindParam(':id', $id, PDO::PARAM_INT) &&
      $pdo_statement->bindParam(':name', $name ['name']) &&
      $pdo_statement->execute()
      )
    {
      $ok = true;
    }

    return $ok;
 }

  public static function delete($id)
  {
    $sql ='UPDATE creams SET deleted_at=CURRENT_TIMESTAMP() WHERE id=:id';

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
