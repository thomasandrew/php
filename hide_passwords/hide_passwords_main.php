<?php

$config = require 'config.php';
require 'hide_passwords.php';

$pdo = Connection::conn($config['database']);