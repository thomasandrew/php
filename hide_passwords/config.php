<?php

return [
      
    'database' => [
         'name' => 'todos',
         'username' => 'root',
         'password' => 'A',
         'connection' => 'mysql:host=127.0.0.1',
         'options' => [
            // PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
         ]
    ]  

];