<?php
//array ou vetor, possui indices/chaves
$idadeList = [21, 58, 45, 85, 69];
$algumaIdade = $idadeList[2];

$idadeList[] = 20;

list($idadeVini, $idadeJoao) = $idadeList;

//echo $algumaIdade;
foreach ($idadeList as $indice => $idade) {
    echo "$indice = $idade" . PHP_EOL;
};

echo $idadeVini;