<div class="titulo">Tipo String</div>

<?php
echo 'Eu sou uma string';
echo '<br>';
var_dump("Eu também");
echo '<br>';

// concatenação
echo("Nós também" . ' somos' . '<br>');
echo("Número é " . 123);
echo '<br>', "Também aceito", " virgulas";

echo '<br>';
echo "'Teste' " . '"Teste" ' . '\'Teste\' ' . "\"Teste\" " . "\\";

print("<br>Também existe o função print");
print "<br>Também existe o função print";

// Algumas funções
echo '<br>' . strtoupper('maximizado');
echo '<br>' . strtolower('MINIMIZADO');
echo '<br>' . ucfirst('só a primeira letra maiuscula');
echo '<br>' . ucwords('todas as palavras primeira letra maiuscula');
echo '<br>' . strlen('Quantas letras?');
echo '<br>' . mb_strlen("Eu também", "utf-8"); //nao se atrapalha com o UTF-8
echo '<br>' . substr('Só uma parte mesmo', 7, 6); // partecomeça a ler do ID 7 apenas string menores que 6
echo '<br>' . str_replace('isso', 'aquilo', 'Trocar isso isso'); //encontra a primeira paralavra pela segunda na string
