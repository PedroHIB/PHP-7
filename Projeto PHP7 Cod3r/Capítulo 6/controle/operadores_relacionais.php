<div class="titulo">Operadores Relacionais</div>

<?php
var_dump(1 == 1); // true
var_dump(1 > 1); // false
var_dump(1 >= 1); // true
var_dump(4 < 23); // true
var_dump(1 <= 7); // true
var_dump(1 != 1); // false
var_dump(1 <> 1); // false

var_dump(111 == '111'); // true
var_dump(111 === '111'); // false    valor+tipo(int x string)
var_dump(111 != '111'); // false
var_dump(111 !== '111'); // true

echo "<p class='divisao'>Relacionais no If/Else</p><hr>";
$idade = 15;
if($idade < 18) {
    echo "Menor de idade = $idade anos<br>";
} elseif($idade <= 65) {
    echo "Adulto = $idade anos<br>";
} else {
    echo "Terceira idade = $idade anos!";
}

echo '<p class="divisao">Spaceship</p><hr>';
var_dump(500 <=> 3);  //se o primeiro numero for maior 1
var_dump(50 <=> 50);  //se forem iguais 0
var_dump(5 <=> 50);   //se o segundo numero for maior -1


echo '<p class="divisao">Valores pode ser V ou F</p><hr>';
var_dump(!!5); //se eh true ou false   //true
var_dump(!!0); //false
var_dump(!!""); //false
var_dump(!!" "); //true