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
                <form action="add.php" method="post">

                    <div class="mb-3">
                        <label for="idNome" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="idNome" name="campoNome">
                    </div>

                    <div class="mb-3">
                        <label for="idHora_inicio">Hora de inicio</label>
                        <input type="time" id="idHora_inicio" name="campoHora_inicio" required class="form-control" />
                    </div>

                    <div class="mb-3">
                        <label for="appt">Hora do termino:</label>
                        <input type="time" id="idHora_termino" name="campoHora_termino" required class="form-control" />
                    </div>

                    <div class="mb-3">
                        <label for="idTurno">Turno</label>
                        <select class="form-select" aria-label="Default select example" name="campoTurno" id="idTurno">
                            <option value="">Selecione uma opção</option>
                            <option value="1">Matutino</option>
                            <option value="2">Vespertino</option>
                            <option value="3">Noturno</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="idNumero" class="form-label">Quantidade de participantes</label>
                        <input type="number" class="form-control" id="idNumero" name="campoNumero">
                    </div>


                    <div class="mb-3">
                        <label for="idDescricao" class="form-label">Descrição</label>

                        <textarea id="idDescricao" class="form-control" name="campoDescricao" rows="4"
                            cols="100"></textarea>
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