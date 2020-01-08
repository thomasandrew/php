<?php

require 'database.php';
require 'query_builder.php';

//$pdo = Connection::make();

//$query = new QueryBuilder(Connection::make()); // Pode fazer assim.

//$query = new QueryBuilder( Ou assim que é usando uma variavel global.
//    Connection::make()
//);

return new QueryBuilder( 
    Connection::make()
);