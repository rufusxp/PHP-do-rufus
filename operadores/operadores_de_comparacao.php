<?php

# OPERADORES DE COMPARAÇÃO
# PERMITEM EFETURAR UMA COMPARAÇÃO ENTRE VALORES .
#VERIFICAM SE OS VALORES SÃO IGUAIS , DIFERENTES , MAIORES OU MENORES , OU DO MESMO TIPO

# O resultado da comparação será sempre o valor 
# verdadeiro ( true )
# ou 
# falso (false) 


# valores são iguais ? 

$a = (2 == 3); #false
$a = (100 == 100); #true
$a = (50 == '50'); #true
$a = (50 === '50'); #false >>> verifica se alem do valor seo tipo é igual. 

# valores são diferentes  ? 

$a = (2 != 3); #true
$a = (2 <> 3); #true ( alternativo )
$a = (50 != 50); #false
$a = (50 != '50'); #false
$a = (50 !== '50'); #true

# operadores de comparação com 3 simbolos , comparam valor e tipo de valor 
# ===
#!==


# valores são maiores ou menores   ? 

$a = (2 > 3); #false
$a = (2 < 3); #true 
$a = (50 >= 50); #true
$a = (50 <= 50); #true
$a = (50 < 50); #false

# No PHP 7 foi adicionado um novo operador de comparação
# designado por spaceship operator 
#   <=>

$x = 1 <=> 1; # 0 (1 == 1 )
$x = 3 <=> 2; # 1 (3 > 2 ) 
$x = 1 <=> 2; # -1 (1 < 2 )