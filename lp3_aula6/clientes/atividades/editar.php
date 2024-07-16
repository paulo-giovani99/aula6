<?php
//Pega id na url
$id = $_GET['id'];
//Constroi string com codigo SQL
$sql = "select * from atividades where id = '$id'; ";
//Inclui a conexao com o Banco de Dados
include '../includes/conexao.php';
//Executa String $SQL no Banco de Dados
$resultado = $conexao->query($sql);
//Transforma dados em um objeto
$item = mysqli_fetch_object($resultado);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php include "../includes/head.php"; ?>
</head>

<body>

    <div class="container">
        <h3> Sistema XYZ</h3>
        <div class="row">

            <?php include "../includes/menu.php";?>

            <div class="col-9 dados">
                <h4>Lista de atividades</h4>



                <form action="edit.php" method="post">
                    <input type="hidden" name="campoId" value="<?php echo $id; ?>">

                    <div class="mb-3">
                        <label for="idNome" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="idNome" name="campoNome"
                            value="<?php echo $item->nome; ?>">
                    </div>

                    <div class="mb-3">
                        <label for="idHora_inicio" class="form-label">Hora de inicio</label>
                        <input type="time" class="form-control" id="idHora_termino" name="campoHora_inicio"
                            value="<?php echo $item->hora_inicio; ?>">
                    </div>

                    <div class="mb-3">
                        <label for="idHora_termino" class="form-label">Hora de termino</label>
                        <input type="time" class="form-control" id="idHora_termino" name="campoHora_termino"
                            value="<?php echo $item->hora_termino; ?>">
                    </div>

                    <div class="mb-3">
                        <label for="idHora_termino" class="form-label">Turno</label>
                        <select class="form-select" aria-label="Default select example" name="campoTurno" id="idTurno">
                            <option selected>Selecione uma opção</option>
                            <option value="1" <?php if($item->turno == 1) echo"selected"; ?>>Matutino </option>
                            <option value="2" <?php if($item->turno == 2) echo"selected"; ?>>Vespertino </option>
                            <option value="3" <?php if($item->turno == 3) echo"selected"; ?>>Noturno </option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="idNumero" class="form-label">Quantidade de participantes</label>
                        <input type="text" class="form-control" id="idNumero" name="campoNumero"
                            value="<?php echo $item->numero; ?>">
                    </div>

                    <div class="mb-3">
                        <label for="idDescricao" class="form-label">Observação</label>

                        <textarea id="idDescricao" name="campoDescricao" class="form-control" rows="4"
                            cols="100"><?php echo $item->descricao; ?></textarea>
                    </div>

                    <button type="submit" class="btn btn-success mb-3">Gravar</button>

                    <a href="index.php" class="btn btn-secondary mb-3">Voltar</a>

                </form>

            </div>
        </div>



    </div>

    <?php include "../includes/js.php"; ?>
</body>

</html>