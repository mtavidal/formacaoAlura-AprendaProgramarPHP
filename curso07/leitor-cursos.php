<?php

$arquivo = fopen('lista-cursos.txt', 'r');

// while (!feof($arquivo)) {
//     $curso = fgets($arquivo); //lê uma linha do arquivo, para na quebra de linha
//     echo $curso;
// }

$tamanhoDoArquivo = filesize('lista-cursos.txt'); //informa a quantidade de bytes do arquivo
$todosCursos = fread($arquivo, $tamanhoDoArquivo); //lê o arquivo completo
echo $todosCursos;
fclose($arquivo);

// $cursos = file_get_contents('lista-cursos.txt'); //abre, o arquivo, le todo o arquivo, devolve uma string e fecha o arquivo 
// echo $curso;

$cursosArray = file("lista-cursos.txt"); //devolve cada linha como um item de um array
var_dump($cursosArray);