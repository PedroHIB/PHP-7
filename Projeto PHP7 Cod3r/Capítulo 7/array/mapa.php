<div class="titulo">Mapa</div>

<?php
$dados = array(
    "idade" => 25,
    "cor" => "verde",
    "peso" => 49.8
);
print_r($dados);
echo "<br>";
var_dump($dados[0]);  //NULL pq nao tem o indice(key) 0

echo '<br>' . $dados["idade"];
echo '<br>' . $dados["cor"];
echo '<br>' . $dados["peso"];
echo '<br>';
var_dump($dados["outra_informacao"]); //NULL pq nao tem o indice(key) outra_informação

$lista = array(
    "a",
    "cinco" => "b",
    "c",
    8 => "d",
    "e",
    6 => "f",
    "g",
    8 => "h"
);

echo '<br>';
print_r($lista);

$lista[] = 'i';  //add sem declarar key
echo '<br>';
print_r($lista);

$lista['vinte'] = 'j';  //add declarando key
echo '<br>';
print_r($lista);