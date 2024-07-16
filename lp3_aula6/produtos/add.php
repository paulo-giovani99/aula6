<?php

$nome = $_POST['campoNome'];
$preco = $_POST['campoPreco'];
$categoria = $_POST['campoCategoria'];


include '../includes/conexao.php';

$sql = "insert into produtos (nome, categoria, preco)
values('$nome', '$categoria', '$preco')";



$conexao->query($sql);

header("location: index.php");
