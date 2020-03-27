<?php

require "Pessoa.php";
require "Programador.php";

$programador = new Programador("Diego", "PHP");

echo $programador->getNome();

# constants:
echo $programador::ESPECIE; # This is how i call a constant.
