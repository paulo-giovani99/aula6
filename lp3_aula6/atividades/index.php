<?php
  include '../includes/conexao.php';
  $sql = "select * from atividades";

  $resultado = $conexao->query($sql);
  mysqli_close($conexao);

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
      <a href="adicionar.php" class=" btn btn-success btn-sm mb-3"> Adicionar</a>  
    <table class="table table-striped">

  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Hora de inicio</th>
      <th scope="col">Hora do termino</th>
      <th scope="col">turno</th>
      <th scope="col">numero</th>
      <th scope="col">descrição</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>
    <?php while($item = mysqli_fetch_object($resultado)) { ?>
    <tr>
      <th scope="row"><?php echo $item->id; ?></th>
      <td><?php echo $item->nome; ?></td>
      <td><?php echo $item->hora_inicio; ?></td>
      <td><?php echo $item->hora_termino; ?></td>
      <td><?php echo $item->turno; ?></td>
      <td><?php echo $item->numero; ?></td>
      <td><?php echo $item->descricao; ?></td>
     
      <td>
        <a href="editar.php?id=<?php echo $item->id; ?>" class="btn btn-warning btn-sm"> Editar</a>
        <a href="" onclick="excluir(<?php echo $item->id; ?>);" class="btn btn-danger btn-sm"> Excluir</a>
      </td>
    </tr>

    <?php } ?>

   
   
  </tbody>
</table>

</div>
  </div>

    </div>
    
  <?php include "../includes/js.php"; ?>

  <script>
    function excluir(id) {
      if(confirm("Tem certeza?")){
        window.location = "del.php?id=" +id;
      }
    }
  </script>
</body>
</html>