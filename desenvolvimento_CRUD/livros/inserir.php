<?php
   
   //importa o arquivo de conexão
   require_once "../banco/conexao.php";

   //verifica se o nome, login e senha foram enviado
   //do formulário de cadastro
   if(isset($_POST['titulo']) && isset($_POST['autor']) &&
      isset($_POST ['ano']) && isset($_POST['editora']))
      {
         //faz o upload da foto
         require_once "faz_upload.php";

   $titulo = $_POST['titulo'];
   $autor = $_POST['autor'];
   $ano = $_POST['ano'];
   $editora = $_POST['editora'];

   //cria uma variável com um comando SQL
   $SQL = "INSERT INTO `livro` (`titulo`, `autor`, `ano`, `editora` ) VALUES (?, ?, ?, ?);";
 
   //prepara o comando para ser executado no mysql
   $comando = $conexao->prepare($SQL);

   //faz a vinculação dos parâmetros ?, ?, ?
   $comando->bind_param("ssss", $titulo, $autor, $ano, $editora,);

   //executa o comando
   $comando->execute();
}

header("Location: index.php");


   







