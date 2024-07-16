<?php

$id = $_POST['campoId'];
$nome = $_POST['campoNome'];
$preco = $_POST['campoPreco'];
$categoria = $_POST['campoCategoria'];


include '../includes/conexao.php';

$sql = "update produtos set nome='$nome' , categoria='$categoria' , preco='$preco' where id= '$id'; ";



$conexao->query($sql);

header("location: index.php");
