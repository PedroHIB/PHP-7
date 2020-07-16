<?php
echo 'Carregando: include_arquivo<br>';

$variavel = 'Estou definida';

if(!function_exists('soma')) { //nao carrega duas vzs o mesmo arquivo
    function soma($a, $b) {
        return $a + $b;
    }
}