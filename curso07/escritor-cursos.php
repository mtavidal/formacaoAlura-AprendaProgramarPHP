<?php

// $arquivo = fopen('cursos-php.txt', 'w'); //modo de abertura para escrita, se não encotrar o arquivo, cria e escreve no inicio do arquivo
$arquivo = fopen('cursos-php.txt', 'a'); //modo append, abre, se não existir, cria e coloca o cursos no final do arquivo
$curso = "\n Design Patterns PHP I";
fwrite($arquivo, $curso);
fclose($arquivo);

file_put_contents('cursos-php.txt', $curso, FILE_APPEND); //faz tudo, facilitador para colocar conteudo em um arquivo