<?php

function converter($aConverter, $cotacao)
{
    $convertido = $aConverter * $cotacao;

    return $convertido;
}

function exibeValor($valorConvertido)
{
    echo "－－－－－－－－－－－－－－－－－ \n";
    echo "O valor convertido é de R$" . $valorConvertido . "\n";
    echo "－－－－－－－－－－－－－－－－－ \n";
}

function exibeOpcaoInvalida()
{
    echo "－－－－－－－－－－－－－－－－－ \n";
    echo "Digite uma opção válida! \n";
    echo "－－－－－－－－－－－－－－－－－ \n";
}


function loopMensagemFinal()
{
    while (true) {
        echo "Para voltar digite 0 \n";
        echo "Se deseja converter de novo digite 1 \n";

        $opcaoDigitada = trim(fgets(STDIN));

        if ($opcaoDigitada == "0") {
            return "voltar";
        } elseif ($opcaoDigitada == "1") {
            return "continuar";
        } else {
            exibeOpcaoInvalida();
        }
    }
}
