<div class="titulo">Upload</div>

<?php 
print_r($_FILES); //mostrar o array vazio

if($_FILES && $_FILES['arquivo']) {
    $pastaUpload = '/home/pedrohib/Área de Trabalho/';
    $nomeArquivo = $_FILES['arquivo']['name'];
    $arquivo = $pastaUpload . $nomeArquivo;
    $tmp = $_FILES['arquivo']['tmp_name'];

    echo "<br>";

    if (move_uploaded_file($tmp, $arquivo)) {
        echo "<br>Arquivo válido e enviado com sucesso.";
    } else {
        echo "<br>Erro no upload de arquivo!";
    }
}
?>

<form action="#" method="post"
    enctype="multipart/form-data"> <!--necessario para enviar arquivos por upload-->
    <input name="arquivo" type="file">
    <button>Enviar</button>
</form>

<style>
    input, button {
        font-size: 1.2rem;
    }
</style>