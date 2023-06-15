<?php

include_once "conexao.php";

var_dump($_POST);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $nome = $_POST['nome'];
    $filiacao = $_POST['filiacao'];
    $dt_nasc = $_POST['dt_nasc'];
    $rg = $_POST['rg'];
    $cpf = $_POST['cpf'];
    $sexo = $_POST['sexo'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $dt_agendamento = $_POST['dt_agendamento'];

   


    
    $sql = "INSERT INTO tabela (nome, filiacao, dt_nasc, rg, cpf, sexo, email, telefone, dt_agendamento) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

    
    $stmt = $conexao->prepare($sql);

    
    if ($stmt === false) {
        die('Erro na preparação da consulta: ' . $conexao->error);
    }

    
    $stmt->bind_param('sssssssss', $nome, $filiacao, $dt_nasc, $rg, $cpf, $sexo, $email, $telefone, $dt_agendamento);

   
    if ($stmt->execute()) {
        
        echo 'Dados inseridos com sucesso!';
    } else {
        
        echo 'Erro na inserção dos dados: ' . $stmt->error;
    }

    
    $conexao->close();
} else {
    
    echo 'O formulário não foi enviado.';
}
?>
