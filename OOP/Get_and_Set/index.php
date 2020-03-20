<?php

require "Pessoa.php";

$uma_pessoa = new Pessoa;

$uma_pessoa->setNome("Diego");
echo $uma_pessoa->getNome();
