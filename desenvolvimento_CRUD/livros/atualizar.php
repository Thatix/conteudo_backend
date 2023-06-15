<?php
   
   //importa o arquivo de conexão
   require_once "../banco/conexao.php";

   $id = $_POST['idlivro'];
   $titulo = $_POST['titulo'];
   $autor = $_POST['autor'];
   $ano = $_POST['ano'];
   $editora = $_POST['editora'];
   

   //cria uma variável com um comando SQL
   $SQL = "UPDATE `livro` SET `titulo`= ?, `autor`= ?, `ano`= ?, `editora`= ? WHERE  `idlivro`= ? ;";
 
   //prepara o comando para ser executado no mysql
   $comando = $conexao->prepare($SQL);

   //faz a vinculação dos parâmetros ?, ?, ?
   $comando->bind_param("ssssi", $titulo, $autor, $ano, $editora, $id);

   //executa o comando
   $comando->execute();


   header("Location: index.php");

   







