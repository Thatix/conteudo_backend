<?php
   
   //importa o arquivo de conexão
   require_once "../banco/conexao.php";


   //cria uma variável com um comando SQL
   $SQL = "SELECT * FROM livro";
 
   //prepara o comando para ser executado no mysql
   $comando = $conexao->prepare($SQL);

   //executa o comando
   $comando->execute();

   //pegar os resultados da consulta - todas as linhas de resultados
   $resultados = $comando->get_result();

   //pega a primeira linhas de resultado da consulta
   $livros = [];
   while  ($livro = $resultados->fetch_object()){
    $livros[] = $livro;
   }


