<?php
function classificarImc (float $imc){
    $arrayClassificacoes = [
        'Magreza' => [0, 18.5],
        'Saudável' => [18.51, 24.99],
        'Sobrepeso' => [25, 29.99],
        'Obesidade Grau I' => [30, 34.99],
        'Obesidade Grau II' => [35, 39.99],
        'Obesidade Grau III' => [40, 100]
    ];

    foreach($arrayClassificacoes as $chave => $classificacao){
        if ($imc >= $classificacao[0] && $imc <= $classificacao[1]) {
            $imcFormatado = number_format($imc, 2, '.', '');
            echo "Atenção, seu IMC é $imcFormatado, e você está classificado como $chave.".PHP_EOL;
            return;
        }
    }
}

classificarImc(40.00);
classificarImc(15.53);
classificarImc(39.99);
classificarImc(27.99);
classificarImc(30.00);
classificarImc(24.99);

