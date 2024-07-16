<?php

$nome = $_POST['campoNome'];
$email = $_POST['campoEmail'];
$data = $_POST['campoData'];
$cpf = $_POST['campoCpf'];
$sexo= $_POST['campoSexo'];
$obs = $_POST['campoObs'];

include '../includes/conexao.php';

$sql = "insert into clientes(nome,email,cpf,data,sexo,obs)
values('$nome', '$email', '$cpf',' $data', '$sexo',' $obs')";

$conexao->query($sql);

header("location: index.php");
