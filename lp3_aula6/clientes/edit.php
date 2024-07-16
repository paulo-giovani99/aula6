<?php
$id = $_POST['campoId'];
$nome = $_POST['campoNome'];
$email = $_POST['campoEmail'];
$data = $_POST['campoData'];
$cpf = $_POST['campoCpf'];
$sexo= $_POST['campoSexo'];
$obs = $_POST['campoObs'];


include '../includes/conexao.php';

$sql = "update clientes set nome='$nome' , email='$email' , data='$data', cpf='$cpf', sexo='$sexo' , obs='$obs'  where id= '$id'; ";



$conexao->query($sql);

header("location: index.php");