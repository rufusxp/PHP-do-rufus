<?php

# OPERADORES LÓGICOS 

# Os operadores lógicos são frequentemente usados com os operadores de comparação 
# Eles permitem 'ligar' várias comparações avalianda se são verdadeiras ou falsas 

# No PHP a construção correta de instruções condicionais depende desde operadores 
# (instruções condicionais verifica, se uma situação é verdadeira (true) ou falsa (false))

$a = 100;
$b = 200;

$x = ($a < $b) && ($a < 1000);  #AND -> true
$x = ($a > $b) || ($a > 1000);  #OR -> false
$x = ($a < 150) && ($b > 300);  # false
$x = ($a > 10) || ($b > 500);  # true
$x = ($a == 100) && ($b < $a);  # false 


# OPERADORES LÓGICOS 

$x = (10 > 5) && (20 > 30);
$x = (true && false); # false

$x = (2 > 1) && (3 > 2);
$x = (true && true); # true

$x = (2 < 4) || (4 > 10);
$x = (true || false); # true

$x = (2 == 5) || (3 > 1);
$x = (false || true); # false



$a = false;
$x = !$a;

# OPERADORES LÓGICOS 
# && - AND
# || - OR
# xor 

# Existem os operadores BitWise
# Servem para analisar valores binários de numeros 