<?php

# CONCATENAÇÃO DE STRINGS
# É o processo que , através do código , permite juntar varias strings 
# Existem dois operadores de concatenação : 

# . 
# .= 


$a = 'joão' . ' ' . ' ribeiro '; # o ponto liga as diferentes strinhs 

$b = 'joão';
$b .= ' ' . 'ribeiro ';  # .= faz uma concatenação com o valor já existente na string

echo $b;
die();
#############################################################################################


$nome = 'joão';
$apelido = ' ribeiro';
$nome_completo = $nome . ' ' . $apelido;

echo $nome_completo;
die();


#############################################################################################

# Ao contrario entre strings delimitadas por ' e por " é que . no segundo caso , 
# podemos fazer o seguinte : 

$nome = ' joao';
$apelido = ' Ribeiro';
$nome_completo = " $nome $apelido";

echo $nome_completo;

# Ao contrario das " ; nas strings ' as variaveis não são interpretadas 
# relativamente ao se valor ( Parse )