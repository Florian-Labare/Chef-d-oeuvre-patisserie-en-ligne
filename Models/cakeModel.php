<?php

 class Cake 
 {
   private static function createStatement($sql)
   {
     try
     {
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

   public static function createCake($name, $dough_id, $cream_id,)
   {
     $sql =
          'INSERT INTO cakes (name, dough_id, cream_id) VALUES (:name, :dough_id, :cream_id)';

        $ok = false;

    $pdo_statement = self::createStatement($sql);
    if (
       $pdo_statement &&
       $pdo_statement->bindParam(':name', $name) &&
       $pdo_statement->bindParam(':dough_id', $dough_id) &&
       $pdo_statement->bindParam(':cream_id', $cream_id) &&
       $pdo_statement->execute()
    ){
       $ok = true;

  }
    return $ok;
   }

   private static function readAll();
   {
     $sql =
          'SELECT * FROM cakes WHERE deleted_at IS NULL';
   }

 }
