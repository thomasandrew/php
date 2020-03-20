<?php

require "Pessoa.php";
// require_once vai impedir o arquivo de ser usado mais vezes.
// usando include vai dar a mesma coisa.
// Se colocar @ antes do include vai impedir de dar um erro fatal mas no rquire isso não funciona.

$uma_pessoa = new Pessoa;
$uma_pessoa->nome = "Diego";
$uma_pessoa->site = "www.thomasandrew.com";

var_dump($uma_pessoa);
$uma_pessoa->falarNome();
echo "<br>";
$uma_pessoa->falarSite();
