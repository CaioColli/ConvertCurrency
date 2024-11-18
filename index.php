<?php

require "funcoes.php";

while (true) {
    echo "
░█████╗░░█████╗░███╗░░██╗██╗░░░██╗███████╗██████╗░████████╗
██╔══██╗██╔══██╗████╗░██║██║░░░██║██╔════╝██╔══██╗╚══██╔══╝
██║░░╚═╝██║░░██║██╔██╗██║╚██╗░██╔╝█████╗░░██████╔╝░░░██║░░░
██║░░██╗██║░░██║██║╚████║░╚████╔╝░██╔══╝░░██╔══██╗░░░██║░░░
╚█████╔╝╚█████╔╝██║░╚███║░░╚██╔╝░░███████╗██║░░██║░░░██║░░░
░╚════╝░░╚════╝░╚═╝░░╚══╝░░░╚═╝░░░╚══════╝╚═╝░░╚═╝░░░╚═╝░░░

░█████╗░██╗░░░██╗██████╗░██████╗░███████╗███╗░░██╗░█████╗░██╗░░░██╗
██╔══██╗██║░░░██║██╔══██╗██╔══██╗██╔════╝████╗░██║██╔══██╗╚██╗░██╔╝
██║░░╚═╝██║░░░██║██████╔╝██████╔╝█████╗░░██╔██╗██║██║░░╚═╝░╚████╔╝░
██║░░██╗██║░░░██║██╔══██╗██╔══██╗██╔══╝░░██║╚████║██║░░██╗░░╚██╔╝░░
╚█████╔╝╚██████╔╝██║░░██║██║░░██║███████╗██║░╚███║╚█████╔╝░░░██║░░░
░╚════╝░░╚═════╝░╚═╝░░╚═╝╚═╝░░╚═╝╚══════╝╚═╝░░╚══╝░╚════╝░░░░╚═╝░░░ \n";

    echo "Digite a moeda de origem \n";

    echo "Dolar - 1\n";
    echo "Real - 2\n";
    echo "Euro - 3\n";
    echo "Encerrar programa - 4\n";

    $opcaoDigitada = trim(fgets(STDIN));

    switch ($opcaoDigitada) {
        case "1":
            while (true) {
                echo "－－－－－－－－－－－－－－－－－ \n";

                echo "Digite a moeda para converter \n";
                echo "Real - 1 \n";
                echo "Euro - 2 \n";
                echo "Voltar ao ínicio - 3 \n";

                echo "－－－－－－－－－－－－－－－－－ \n";

                $opcaoDigitada = trim(fgets(STDIN));

                switch ($opcaoDigitada) {
                    case "1":
                        while (true) {
                            echo "Digite o valor: ";
                            $valorDigitado = trim(fgets(STDIN));

                            $cotacao = 5;
                            $valorConvertido = converter($valorDigitado, $cotacao);

                            exibeValor($valorConvertido);

                            $acao = loopMensagemFinal();

                            if ($acao === "voltar") {
                                break 2;
                            } elseif ($acao === "continuar") {
                                continue;
                            }
                        }
                        break;

                    case "2":
                        while (true) {
                            echo "Digite o valor: ";
                            $valorDigitado = trim(fgets(STDIN));

                            $cotacao = 0.90;
                            $valorConvertido = converter($valorDigitado, $cotacao);

                            exibeValor($valorConvertido);

                            $acao = loopMensagemFinal();

                            if ($acao === "voltar") {
                                break 2;
                            } elseif ($acao === "continuar") {
                                continue;
                            }
                        }
                        break;

                    case "3":
                        break 2;
                }
            }
            break;
        case "2":
            while (true) {
                echo "－－－－－－－－－－－－－－－－－ \n";

                echo "Digite a moeda para converter \n";
                echo "Dolar - 1 \n";
                echo "Euro - 2 \n";
                echo "Voltar ao ínicio - 3 \n";

                echo "－－－－－－－－－－－－－－－－－ \n";

                $opcaoDigitada = trim(fgets(STDIN));

                switch ($opcaoDigitada) {
                    case "1":
                        while (true) {
                            echo "Digite o valor: ";
                            $valorDigitado = trim(fgets(STDIN));

                            $cotacao = 0.20;
                            $valorConvertido = converter($valorDigitado, $cotacao);

                            exibeValor($valorConvertido);

                            $acao = loopMensagemFinal();

                            if ($acao === "voltar") {
                                break 2;
                            } elseif ($acao === "continuar") {
                                continue;
                            }
                        }
                        break;
                    case "2":
                        while (true) {
                            echo "Digite o valor: ";
                            $valorDigitado = trim(fgets(STDIN));

                            $cotacao = 0.18;
                            $valorConvertido = converter($valorDigitado, $cotacao);

                            exibeValor($valorConvertido);

                            $acao = loopMensagemFinal();

                            if ($acao === "voltar") {
                                break 2;
                            } elseif ($acao === 'continuar') {
                                continue;
                            }
                        }
                        break;
                    case "3":
                        break 2;
                }
            }
            break;

        case "3":
            while (true) {
                echo "－－－－－－－－－－－－－－－－－ \n";

                echo "Digite a moeda para converter \n";
                echo "Real - 1 \n";
                echo "Dolar - 2 \n";
                echo "Voltar ao ínicio - 3 \n";

                echo "－－－－－－－－－－－－－－－－－ \n";

                $opcaoDigitada = trim(fgets(STDIN));

                switch ($opcaoDigitada) {
                    case "1":
                        while (true) {
                            echo "Digite o valor: ";
                            $valorDigitado = trim(fgets(STDIN));

                            $cotacao = 5.50;
                            $valorConvertido = converter($valorDigitado, $cotacao);

                            exibeValor($valorConvertido);

                            $acao = loopMensagemFinal();

                            if ($acao === "voltar") {
                                break 2;
                            } elseif ($acao === "continuar") {
                                continue;
                            }
                        }
                        break;
                    case "2":
                        while (true) {
                            echo "Digite o valor: ";
                            $valorDigitado = trim(fgets(STDIN));

                            $cotacao = 1.10;
                            $valorConvertido = converter($valorDigitado, $cotacao);

                            exibeValor($valorConvertido);

                            $acao = loopMensagemFinal();

                            if ($acao === "voltar") {
                                break 2;
                            } elseif ($acao === "continuar") {
                                continue;
                            }
                        }
                        break;
                    case "3":
                        break 2;
                }
            }
            break;

        case "4":
            exit;
    }
}
