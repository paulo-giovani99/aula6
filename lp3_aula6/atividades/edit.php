<?php
$id = $_POST['campoId'];
$nome = $_POST['campoNome'];
$hora_inicio = $_POST['campoHora_inicio'];
$hora_termino = $_POST['campoHora_termino'];
$turno = $_POST['campoTurno'];
$numero= $_POST['campoNumero'];
$descricao = $_POST['campoDescricao'];


include '../includes/conexao.php';

$sql = "update atividades set nome='$nome' , hora_inicio='$hora_inicio' , hora_termino='$hora_termino', turno='$turno', numero='$numero' , descricao='$descricao'  where id= '$id'; ";

//echo $sql;

$conexao->query($sql);

header("location: index.php");