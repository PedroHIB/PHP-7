<div class="titulo">Traits #02</div>

<?php    //resolvendo conflito
trait validacao {
    public function validarString($str) {
        return isset($str) && $str !== ''; //setado e nao vazio
    }
}

trait validacaoMelhor {
    public function validarString($str) {
        return isset($str) && trim($str);
    }
}

class Usuario {
    use validacao, validacaoMelhor {
        validacaoMelhor::validarString insteadOf validacao;
        // validacao::validarString insteadOf validacaoMelhor; //inverso do de cima

        validacao::validarString as validacaoSimples;  //mudar nome
    }
}

$usuario = new Usuario();
var_dump($usuario->validarString(' '));
echo '<br>';
var_dump($usuario->validacaoSimples(' '));