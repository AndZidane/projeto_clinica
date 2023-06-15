<?php
 $localhost = 'localhost';
 $usuario = 'root';
 $senha = '';
 $banco = 'dados_clinica';

 $conexao = mysqli_connect ($localhost, $usuario, $senha, $banco);

 // Verifica se a conexão foi estabelecida com sucesso
 if ($conexao->connect_errno) {
     die('Erro na conexão com o banco de dados: ' . $conexao->connect_error);
 }else{
     echo "conectado";
 }
