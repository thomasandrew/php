<?php

$config = require 'config.php';

require 'hide_passwords.php';
require 'query_builder.php';

return new QueryBuilder(
    Connection::conn($config['database'])
);