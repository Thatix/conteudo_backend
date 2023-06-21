<?php 
    require_once "consultar_por_id.php"
    require_once "../template/cabecalho.php";
     ?>

<div class="container">
    <h1>Cadastro de livros</h1>
    <hr>

    <form action="<?php echo isset($livro) ? "atualizar.php" : "inserir.php"; ?>" method="post" enctype="multipart/form-data">
        
        <input type="hidden" name="idlivro" value="<?php echo isset($livro) ? $livro->id : '' ?>"><br>

        <label>Título</label><br>
        <input type="text" name="titulo" value="<?php echo isset($livro) ? $livro->titulo : '' ?>"><br>

        <label>Autor</label><br>
        <input type="text" name="autor" value="<?php echo isset($livro) ? $livro->autor : '' ?>"><br>

        <label>Ano</label><br>
        <input type="text" name="ano" value="<?php echo isset($livro) ? $livro->ano : '' ?>"><br>

        <label>Editora</label><br>
        <input type="text" name="editora" value="<?php echo isset($livro) ? $livro->editora : '' ?>"><br>
<br>
        <button type="submit">Inserir</button>
        
    </form>
    
</div>

<?php require_once "../template/rodape.php"; ?>