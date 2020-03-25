<?php

require "Pessoa.php";
require "Programador.php";

$programador = new Programador("Diego", "PHP");

echo $programador->getNome();
