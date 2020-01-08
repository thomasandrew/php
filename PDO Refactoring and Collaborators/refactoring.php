<?php

$query = require 'bootstrap.php';

//require 'database.php';
//require 'query_builder.php';
require 'tasks_refactoring.php';

//$pdo = Connection::make();

//$query = new QueryBuilder($pdo);

$tasks = $query->selectAll('table1', 'Task');

die(var_dump($tasks));

require 'refactoring2.php';


// Qualquer coisa volta nesse episodio do curso para dar uma olhada em array_map.