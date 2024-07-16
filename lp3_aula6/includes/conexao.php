<?php
$conexao = mysqli_connect("localhost","root","","lp3_aula6");

if(!$conexao) {
    echo "Ocorreu um erro (<.>) " .PHP_EOL;
    echo "Erro nº: " .mysqli_connect_errno() .PHP_EOL;
    echo "Erro: " .mysqli_connect_error() .PHP_EOL;
}

//echo "Conectou!" .PHP_EOL;