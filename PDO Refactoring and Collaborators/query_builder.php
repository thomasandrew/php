<?php

class QueryBuilder {

   protected $pdo;
   
   public function __construct($pdo) {

      $this->pdo = $pdo;

   }


   public function selectAll($table, $intoClass) { // Na ultima aula eu fiz sem a segunda variavel.
      
      $statement = $this->pdo->prepare("select * from {$table}");
      
      $statement->execute();
      
      // return $statement->fetchAll(PDO::FETCH_CLASS);

      return $statement->fetchAll(PDO::FETCH_CLASS, $intoClass);

   }
}