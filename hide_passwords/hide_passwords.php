<?php

class Connection {
    public static function conn($config) {

       try {
          // $pdo = new PDO('mysql:host=127.0.0.1;dbname=todos','root',''); Não precisa mais.

            return new PDO(
                $config['connection'].';dbname='.$config['name'],
                $config['username'],
                $config['password'],
                $config['options']
            ); 
            
       } catch(PDOExeption $e) {
            die($e->getMessage()); 
       }

    }
}
