<?php
$notas = [5, 3, 8, 10, 3];

//decrescente r (reverse)
//rsort($notas);

// com a, mantem a associaçao, a ordem dos indices, mantem as chaves
//arsort($notas);

// ordena levando em consideração a chve K
ksort($notas);
// ordena levando em consideração a chve K, decrescente
//krsort($notas);

var_dump($notas);