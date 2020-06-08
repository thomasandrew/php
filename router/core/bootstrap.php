<?php

require '../task.php';

//$config = require '../config.php';

$app = [];

$app['config'] = require '../config.php';

require 'router.php';
require 'core/Request.php';
require 'database/database.php';
require 'database/query_builder.php';

//return new QueryBuilder(
//    Connection::conn($config['database'])
//);

$app['database'] = new QueryBuilder(
    Connection::conn($app['config']['database'])
);
