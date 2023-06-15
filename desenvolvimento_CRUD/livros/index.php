<?php require_once "../template/cabecalho.php"; 
      require "consultar_todos.php";
?>

    <div class="container">
    <h1>Livros</h1>
    <hr>

    <div class="text-end">
    <a href="formulario.php" class="btn btn-success"> 
        Inserir Novo
     </a>
    </div>

    <table class="table" id="tabela_dados">
  <thead>
    <tr>
      <th scope="col">Título</th>
      <th scope="col">Autor</th>
      <th scope="col">Ano</th>
      <th scope="col">Editora</th>
      <th scope="col">Ações</th>
      
    </tr>
  </thead>
  <tbody>
    <?php foreach($livros as $livro): ?>
    <tr>
      <td><?=$livro->titulo ?></td>
      <td><?=$livro->autor ?></td>
      <td><?=$livro->ano ?></td>
      <td><?=$livro->editora ?></td>
      <td class="text-end" width="25%">

        <a href="formulario.php?id=<?=$livro->idlivro ?>" class="btn btn-primary"> 
          <i class="fa-solid fa-pen-to-square"></i>
          Atualizar
        </a>

        <a href="excluir.php?id=<?=$livro->idlivro ?>" class="btn btn-danger"> 
          <i class="fa-regular fa-trash-can"></i>
          Excluir
        </a>

      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

</div>

<?php require_once "../template/rodape.php"; ?>
