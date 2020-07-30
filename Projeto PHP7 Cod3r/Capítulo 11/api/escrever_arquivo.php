<div class="titulo">Escrever Arquivo</div>

<?php
$arquivo = fopen('teste.txt', 'w'); //w = write (escrever) / se exixtir sobre escreve
fwrite($arquivo, "Valor inicial\n");
$str = "Segunda linha\n";
fwrite($arquivo, $str);
fclose($arquivo);

echo "Arquivo Criado <br>";

$arquivo = fopen('teste.txt', 'w');
fwrite($arquivo, "Novo conteúdo");
fclose($arquivo);
echo "Arquivo Sobre Escrito<br>";

$arquivo = fopen('teste.txt', 'a'); // a = append adicionar ao arquivo ja existente 
fwrite($arquivo, " com novos valores\n");
fwrite($arquivo, "Adicionados em um segundo momento");
fclose($arquivo);

ini_set('display_errors', 1);
$arquivo = fopen('teste.txt', 'x'); // x = escrever novo arquivo / se existir dara warning